;(function(){
	if (!window["BX"] || window["BX"]["MPLForm"] || !window["app"])
		return;

	var BX = window["BX"],
		repo = {
			form : {},
			list : {},
			comments : {}
		},
		makeId = function(ENTITY_XMIL_ID, ID)
		{
			return ENTITY_XMIL_ID + '-' + (ID > 0 ? ID : '0');
		};

	var inner = {
		keyBoardIsShown : false,
		mention : {}
	},
	appendToForm = function(fd, key, val)
	{
		if (!!val && typeof val == "object")
		{
			for (var ii in val)
			{
				if (val.hasOwnProperty(ii))
				{
					appendToForm(fd, key + '[' + ii + ']', val[ii]);
				}
			}
		}
		else
		{
			fd.append(key, (!!val ? val : ''));
		}
	};
	window.app.exec("enableCaptureKeyboard", true);
	BX.addCustomEvent("onKeyboardWillShow", function() { inner.keyBoardIsShown = true; });
	BX.addCustomEvent("onKeyboardDidHide", function() { inner.keyBoardIsShown = false; });

	var commentObj = function(id, text, attachments) {
		this.id = id;
		this.text = (text || "");
		this.attachments = (attachments || []);
		this.mentions = {};
	};
	commentObj.prototype = {
		text : "",
		attachments : [],
		node : null,
		getText : function() {
			var text = this.text;
			for (var ii in this.mentions)
			{
				if (this.mentions.hasOwnProperty(ii))
				{
					text = text.replace(new RegExp(ii,"gi"), this.mentions[ii]);
				}
			}
			return text;
		}
	};
	/*
		@return commentObj
	 */
	commentObj.getInstance = function(id, text, attachments) {
		var res = null;
		if (!BX.type.isArray(id) && id && id["___id"] && repo["comments"][id["___id"]])
		{
			res = id;
		}
		else if (repo["comments"][id.join("-")])
		{
			res = repo["comments"][id.join("-")];
		}
		else
		{
			res = new commentObj(id, text, attachments);
			res.___id = id.join("-");
			repo["comments"][id.join("-")] = res;
		}
		return res;
	};
	commentObj.removeInstance = function(comment) {
		if (comment && comment["___id"])
			delete repo["comments"][comment["___id"]];
	};
	var MPFForm = function(id) {
		this.bindEvents();
		repo['form'][this.handlerId] = this;
		this.entitiesId = {};

		this.comment = null;

		this.handlerId = id;
		this.handler = null;
		this.handlerEvents = {
			onMPFUserIsWriting : BX.delegate(this.writing, this),
			onMPFHasBeenDestroyed : BX.delegate(this.reboot, this)
		};

		this.visible = false;

		this.bindHandler = BX.delegate(this.bindHandler, this);
		BX.addCustomEvent(window, "onMPFIsInitialized", this.bindHandler);
		if (BX["MPF"])
			this.bindHandler(BX["MPF"].getInstance(this.handlerId));
	};

	MPFForm.prototype = {
		bindHandler : function(handler) {
			if (handler && handler.id == this.handlerId)
			{
				this.handler = handler;

				BX.removeCustomEvent(window, "onMPFIsInitialized", this.bindHandler);

				for (var ii in this.handlerEvents)
				{
					if (this.handlerEvents.hasOwnProperty(ii))
					{
						BX.addCustomEvent(this.handler, ii, this.handlerEvents[ii]);
					}
				}

				this.closeWait();
				BX.onCustomEvent(this, 'OnUCFormInit', [this]);
			}
		},
		bindEvents : function() {
			this.windowEvents = {
				OnUCUserReply : BX.delegate(function(entityId, authorId, authorName) {
					if (this.entitiesId[entityId])
					{
						var comment = [entityId, 0];
						authorId = parseInt(authorId);
						if (authorId > 0 && authorName)
						{
							comment = this.initComment(comment, "", false);
							comment.mentions[authorName] = '[USER=' + authorId + ']' + authorName + '[/USER]';
							var text = (this.handler && this.handler.simpleForm ? this.handler.simpleForm.writingParams["~text"] : comment.text);
							comment.text = text + (text == "" ? "" : " ") + authorName + ', ';
						}
						this.show(comment, comment.text, false);
					}
				}, this),

				OnUCAfterRecordEdit : BX.delegate(function(entityId, id, data, act)
				{
					if (this.entitiesId[entityId]) {
						if (act === "EDIT")
						{
							this.show([entityId, id], data['messageBBCode'], data['messageFields']);
						}
						else if (data['errorMessage'])
						{
							this.showError([entityId, id], data['errorMessage']);
						}
						else if (data['okMessage'])
						{
							this.showNote([entityId, id], data['okMessage']);
						}
					}
				}, this)
			};

			BX.addCustomEvent(window, 'OnUCUserReply', this.windowEvents.OnUCUserReply);
			BX.addCustomEvent(window, 'OnUCAfterRecordEdit', this.windowEvents.OnUCAfterRecordEdit);
		},
		reboot : function(id, oldObj, newObj) {
			for (var ii in this.handlerEvents)
			{
				if (this.handlerEvents.hasOwnProperty(ii))
				{
					BX.removeCustomEvent(this.handler, ii, this.handlerEvents[ii]);
				}
			}
			this.bindHandler(newObj);
		},
		linkEntity : function(id, data) {
			if (this.handler === null)
			{
				this._linkEntity = BX.delegate(function(){this.linkEntity(id, data);}, this);
				BX.addCustomEvent(this, 'OnUCFormInit', this._linkEntity);
			}
			else
			{
				if (this["_linkEntity"])
					BX.removeCustomEvent(this, 'OnUCFormInit', this["_linkEntity"]);

				this.entitiesId[id] = data;
				this.comment = this.reinitComment({id : [id, 0]});
				this.handler.init(this.comment);
			}
		},
		writing : function(comment) {
			BX.onCustomEvent(window, 'OnUCUserIsWriting', [comment["id"][0], comment["id"][1]]);
		},
		reinitComment : function(comment) {
			var id = [comment["id"][0], 0];
			commentObj.removeInstance(comment);
			return this.initComment(id, "", []);
		},
		initComment : function(id, text, data) {
			var comment = commentObj.getInstance(id, text, data);
			if (comment["bound"] !== "Y")
			{
				BX.addCustomEvent(comment, "onCancel", BX.delegate(BX.delegate(this.submitClear, this))); // Release comment
				BX.addCustomEvent(comment, "onStart", BX.delegate(BX.delegate(this.submitStart, this))); // Draw comment
				BX.addCustomEvent(comment, "onSubmit", BX.delegate(BX.delegate(this.submit, this))); // Submit form
				BX.addCustomEvent(comment, "onError", BX.delegate(BX.delegate(function(c, text) {
					this.showError(comment, text);
					this.submitClear(comment);
				}, this))); // Error form
				comment["bound"] = "Y";
			}
			return comment;
		},
		show : function(id, text, data) {
			this.comment = this.initComment(id, text, data);
			BX.onCustomEvent(this.handler, 'OnUCFormBeforeShow', [this, text, data]);
			this.handler.show(this.comment, (!!data));
			BX.onCustomEvent(this.handler, 'OnUCFormAfterShow', [this, text, data]);
			return true;
		},
		submitClear : function(comment) {
			commentObj.removeInstance(comment);
			if (this.comment == comment)
			{

				this.comment = this.initComment([comment.id[0], 0], "", []);
				this.handler.init(this.comment);
			}
		},
		submitStart : function(comment, text, attachments) {
			BX.onCustomEvent(window, 'OnUCFormBeforeSubmit', [comment.id[0], comment.id[1], comment, this, text, attachments]); // Preview commetn
		},
		submit : function(comment) {
			var text = comment.getText(),
				attachments = comment.attachments,
				entityHdl = this.entitiesId[comment.id[0]],
				post_data = this.handler.getForm({
					ENTITY_XML_ID : comment.id[0],
					REVIEW_TEXT : text,
					NOREDIRECT : "Y",
					MODE : "RECORD",
					AJAX_POST : "Y",
					id : comment.id,
					sessid : BX.bitrix_sessid()
				}),
				post = new window.MobileAjaxWrapper(),
				fd = new window.FormData(),
				ii;


			if (comment.id[1] > 0)
			{
				post_data['REVIEW_ACTION'] = "EDIT";
				post_data["FILTER"] = {ID : comment.id[1]};
				if (post_data["act"]) // if it is a socialnetwork
				{
					post_data["act"] = "edit";
					post_data["edit_id"] = comment.id[1];
				}
			}
			if (entityHdl['fields'])
			{
				for (ii in entityHdl['fields'])
				{
					if (entityHdl['fields'].hasOwnProperty(ii))
					{
						post_data[ii] = entityHdl['fields'][ii];
					}
				}
			}

			BX.onCustomEvent(window, 'OnUCFormSubmit', [comment.id[0], comment.id[1], this, post_data]);
			for (ii in post_data)
			{
				if (post_data.hasOwnProperty(ii))
				{
					appendToForm(fd, ii, post_data[ii]);
				}
			}
			if (attachments)
			{
				for (var ij = 0; ij < attachments.length; ij++)
				{
					appendToForm(fd, attachments[ij]["fieldName"], attachments[ij]["fieldValue"]);
				}
			}

			post.Wrap({
				method: 'POST',
				url: entityHdl['url'],
				data: {},
				type: 'json',
				processData : true,
				start : false,
				preparePost : false,
				callback: BX.proxy(function(data) {
					BX.onCustomEvent(window, 'OnUCFormResponse', [comment.id[0], comment.id[1], this, data, comment]);
					if (data['errorMessage'])
						this.showError(comment, data['errorMessage']);
					else
						BX.onCustomEvent(window, 'OnUCAfterRecordAdd', [comment.id[0], comment.id[1], this, data, comment]);
				}, this),
				callback_failure: BX.delegate(function(data) {
					BX.onCustomEvent(window, 'OnUCFormResponse', [comment.id[0], comment.id[1], this, data, comment]);
					this.showError(comment, "Uncorrect server responce.");
				}, this)
			});
			post.xhr.send(fd);

			this.submitClear(comment);
		},
		showError : function(comment, text) {
			if (BX.type.isArray(comment))
				comment = this.initComment(comment, "", []);
			var node;
			text = '<div class="feed-add-info-text"><span class="feed-add-info-icon"></span>' +
					'<b>' + BX.message('FC_ERROR') + '</b><br />' + text + '</div>';
			if (comment && comment.node)
			{
				BX.addClass(comment.node, "feed-com-block-cover-undelivered");
				node = BX.findChild(comment.node, {'tagName' : "DIV", 'className' : "post-comment-text"}, true);
				if (node)
					node.innerHTML += text;
			}
			else if (text)
			{
/*
				var container = BX.create("DIV", {
					attrs : {"className" : ".feed-com-block-cover feed-com-block-cover-error"},
					html : text});
				BX.show(node);
*/
			}
		},
		showNote : function(id, text) {
			/*
			return window.alert('Note: ' + text);
			var node = this._getPlacehoder(), nodes = BX.findChildren(node, {'tagName' : "DIV", 'className' : "feed-add-successfully"}, true), res = null;
			if (!!nodes)
			{
				while ((res = nodes.pop()) && !!res) {
					BX.remove(res);
				}
			}
			node.insertBefore(BX.create('div', {attrs : {"class": "feed-add-successfully"},
				html: '<span class="feed-add-info-text"><span class="feed-add-info-icon"></span>' + text + '</span>'}),
				node.firstChild);
			BX.show(node);*/
		},
		showWait : function() {
			this.handler.hide();
			this.handler.showWait();
		},
		closeWait : function() {
			this.handler.closeWait();
		}
	};

	MPFForm.link = function(ENTITY_XML_ID, form) {
		var id = form['id'];
		repo['form'][id] = (repo['form'][id] || (new MPFForm(id)));
		repo['form'][id].linkEntity(ENTITY_XML_ID, form);
	};

	window.mobileShowActions = function(ENTITY_XML_ID, ID, e) {
		e = e || window.event;

		if (
			!window.app.enableInVersion(10)
//			|| inner.keyBoardIsShown === true
		)
		{
			return true;
		}

		if (
			e
			&& e.target
			&& e.target.tagName
			&& (
				e.target.tagName.toUpperCase() == 'A'
				|| (
					e.target.tagName.toUpperCase() == 'IMG'
					&& (BX.type.isNotEmptyString(e.target.getAttribute('data-bx-image'))) // inline or attached image
				)
			)
		)
		{
			return true;
		}

		BX.eventCancelBubble(e);
		BX.PreventDefault(e);

		var node = BX('record-' + makeId(ENTITY_XML_ID, ID)),
			menu = [], action;

		if (node.getAttribute("bx-mpl-reply-show") == "Y")
			menu.push({
				title: BX.message('BLOG_C_REPLY'),
				callback: function() {
					repo["list"][ENTITY_XML_ID].reply(BX('record-' + makeId(ENTITY_XML_ID, ID) + '-reply-action'));
				}
			});
		var like;
		if ((node.getAttribute("bx-mpl-vote-id") != "#VOTE_ID#") && window["RatingLikeComments"] &&
			(like = window.RatingLikeComments.getById(node.getAttribute('bx-mpl-vote-id'))) && like)
		{
			like["__delegatedVoteFunc"] = (like["__delegatedVoteFunc"] || BX.delegate(like.vote, like));
			menu.push({title: (like.voted ? BX.message("BPC_MES_VOTE2") : BX.message("BPC_MES_VOTE1")),
				callback: like["__delegatedVoteFunc"]});
			menu.push({ title: BX.message('BPC_MES_VOTE'),
				callback: function() { window.RatingLikeComments.List(node.getAttribute('bx-mpl-vote-id'));}});
		}

		if (node.getAttribute("bx-mpl-edit-show") == "Y")
			menu.push({
				title: BX.message('BPC_MES_EDIT'),
				callback: function() { repo["list"][ENTITY_XML_ID].act(node.getAttribute('bx-mpl-edit-url'), ID, 'EDIT'); }});
		if (node.getAttribute("bx-mpl-moderate-show") == "Y")
		{
			var hidden = node.getAttribute('bx-mpl-moderate-approved') == 'hidden';
			menu.push({
				title: (hidden ? BX.message("BPC_MES_SHOW") : BX.message("BPC_MES_HIDE")),
				callback: function() {
					repo["list"][ENTITY_XML_ID].act(node.getAttribute('bx-mpl-moderate-url').
						replace("#action#", (hidden ? "show" : "hide")).
						replace("#ACTION#", (hidden ? "SHOW" : "HIDE")),
						ID, 'MODERATE');
				}
			});
		}
		if (node.getAttribute("bx-mpl-delete-show") == "Y")
			menu.push({
				title: BX.message('BPC_MES_DELETE'),
				callback: function() { repo["list"][ENTITY_XML_ID].act(node.getAttribute('bx-mpl-delete-url'), ID, 'DELETE'); }});
		if (menu.length > 0)
		{
			action = new window.BXMobileApp.UI.ActionSheet({ buttons: menu }, "commentSheet" );
			action.show();
		}
		return false;
	};
	window.mobileReply = function(ENTITY_XML_ID, e) {
		BX.eventCancelBubble(e);
		BX.PreventDefault(e);
		repo["list"][ENTITY_XML_ID].reply(e.target);
		return false;
	};

	var init = function(window)
	{
		BX.MPL = function(params, staticParams, formParams)
		{
			BX.MPL.superclass.constructor.apply(this, arguments);

			this.template = BX.message("MPL_RECORD_TEMPLATE");
			this.thumb = BX.message("MPL_RECORD_THUMB");
			this.thumbForFile = BX.message("MPL_RECORD_THUMB_FILE");

			BX.removeCustomEvent(window, 'OnUCAfterRecordAdd', this.windowEvents['OnUCAfterRecordAdd']);
			BX.removeCustomEvent(window, 'OnUCFormResponse', this.windowEvents['OnUCFormResponse']);

			this.postCounter = 0;
			this.windowEvents['OnUCFormBeforeSubmit'] = BX.delegate(function(ENTITY_XML_ID, ENTITY_ID, comment, obj, text, attachments) {
				if (this.ENTITY_XML_ID == ENTITY_XML_ID) {
					var id = [ENTITY_XML_ID, (ENTITY_ID > 0 ? ENTITY_ID : 'new_' + this.postCounter++)];
					this.makeThumb(id, comment, text, attachments);
					this.pullNewRecords[ENTITY_XML_ID + '-' + ENTITY_ID] = "busy";
				}
			}, this);
			this.windowEvents['OnUCAfterRecordAdd'] = BX.delegate(function(ENTITY_XML_ID, ENTITY_ID, obj, data, comment) {
				if (this.ENTITY_XML_ID == ENTITY_XML_ID) {
					this.add(comment, data["messageId"], data, true, "simple");
				}
			}, this);
			this.windowEvents['OnUCFormResponse'] = BX.delegate(function(ENTITY_XML_ID, ENTITY_ID, obj, data, comment) {
				if (this.ENTITY_XML_ID == ENTITY_XML_ID)
				{
					this.pullNewRecords[ENTITY_XML_ID + '-0'] = "ready";
					this.pullNewRecords[ENTITY_XML_ID + '-' + ENTITY_ID] = "done";
					this.clearThumb(comment);
				}
			}, this);
			this.windowEvents['onPull'] = BX.delegate(function(data) {
				var params = data.params;
				if (data.module_id == "unicomments" && data.command == "comment_mobile" &&
					params["ENTITY_XML_ID"] == this.ENTITY_XML_ID && ((params["USER_ID"] + '') != (BX.message("USER_ID") + '')))
				{
					if (data.command == 'comment_mobile' && params["ID"])
						this.pullNewRecord(params);
					else if (data.command == 'answer')
						this.pullNewAuthor(params["USER_ID"], params["NAME"], params["AVATAR"]);
				}
			}, this);

			BX.addCustomEvent(window, 'OnUCFormResponse', this.windowEvents['OnUCFormResponse']);
			BX.addCustomEvent(window, 'OnUCAfterRecordAdd', this.windowEvents['OnUCAfterRecordAdd']);
			BX.addCustomEvent(window, 'OnUCFormBeforeSubmit', this.windowEvents['OnUCFormBeforeSubmit']);
			BX.addCustomEvent(window, 'onPull', this.windowEvents['onPull']);

			if (staticParams['SHOW_POST_FORM'] == "Y")
				MPFForm.link(this.ENTITY_XML_ID, formParams);

			repo["list"][this.ENTITY_XML_ID] = this;
			return this;
		};
		BX.extend(BX.MPL, window["FCList"]);
		BX.MPL.prototype.init = function() {};
		BX.MPL.prototype.makeThumb = function(id, message, txt, attachments) {
			var container = (message.node || BX('record-' + id.join('-') + '-cover'));
			if (!container)
			{
				var text = (BX.type.isString(txt) ? txt : "");
				text = BX.util.htmlspecialchars(text).replace(/\n/gi, "<br />");
				text = text.replace(/\001/, '').
					replace(/(\[\/user\])/gi, "\001").
					replace(/\[user=(\d+)\]([^\001]?.+)(\001)/gi, "$2").
					replace(/\001/, "[/user]");

				var html = window.fcParseTemplate(
					{ messageFields : { FULL_ID : id, POST_MESSAGE_TEXT : text, POST_TIMESTAMP : (new Date().getTime() / 1000) } },
					{ DATE_TIME_FORMAT : this.params.DATE_TIME_FORMAT, RIGHTS : this.rights },
					(text == "" ? this.thumbForFile : this.thumb)), ob;

				ob = BX.processHTML(html, false);
				container = BX.create("DIV", {
					attrs : {id : ("record-" + id.join('-') + '-cover'), "className" : "feed-com-block-cover"},
					style : {opacity : 0, height : 0, overflow: "hidden"},
					html : ob.HTML});
				BX('record-' + id[0] + '-new').appendChild(container);

				var node = container,
					curPos = BX.pos(node);
				window.scrollTo(0, curPos.top);

				var scroll = BX.GetWindowScrollPos(),
					size = BX.GetWindowInnerSize();

				(new BX["easing"]({
					duration : 1000,
					start : { opacity : 0, height : 0},
					finish : { opacity: 100, height : node.scrollHeight},
					transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
					step : function(state){
						node.style.height = state.height + "px";
						node.style.opacity = state.opacity / 100;

						if (scroll.scrollTop > 0 && curPos.top < (scroll.scrollTop + size.innerHeight))
						{
							window.scrollTo(0, scroll.scrollTop + state.height);
						}
					},

					complete : function(){
						node.style.cssText = '';
					}
				})).animate();

				var cnt = 0,
				func = function()
				{
					cnt++;
					if (cnt < 100)
					{
						var node = BX("record-" + id.join('-') + '-cover');
						if (node && node.childNodes.length > 0)
							BX.ajax.processScripts(ob.SCRIPT);
						else
							BX.defer(func, this)();
					}
				};
				BX.defer(func, this)();
			}
			BX.addClass(container, "feed-com-block-cover-wait");
			message.node = container;
			return container;
		};
		BX.MPL.prototype.clearThumb = function(message) {
			if (message && BX(message.node))
			{
				BX.removeClass(message.node, "feed-com-block-cover-wait");
			}
		};
		BX.MPL.prototype.add = function(comment, newId, data) {
			if (BX.type.isArray(comment))
			{
				BX.MPL.superclass.add.apply(this, arguments);
			}
			else if (BX(comment["node"]))
			{
				comment["node"].setAttribute("id", 'record-' + newId.join('-') + '-cover');
				BX.MPL.superclass.add.apply(this, [newId, data, true, "simple"]);
			}
			else
			{
				BX.MPL.superclass.add.apply(this, [newId, data]);
			}
			if (window["BitrixMobile"] && window["BitrixMobile"]["LazyLoad"])
				setTimeout(function() { window.BitrixMobile.LazyLoad.showImages(); }, 500);
		};
		BX.MPL.prototype.send = function() {
			if (BX(this.nav))
				BX.addClass(this.nav.parentNode, "post-comments-button-waiter");
			BX.MPL.superclass.send.apply(this, arguments);
		};
		BX.MPL.prototype.build = function() {
			if (BX(this.nav))
				BX.removeClass(this.nav.parentNode, "post-comments-button-waiter");
			BX.MPL.superclass.build.apply(this, arguments);
		};
		BX.MPL.prototype.complete = function() {
			if (BX(this.nav))
				BX.removeClass(this.nav.parentNode, "post-comments-button-waiter");
			BX.MPL.superclass.complete.apply(this, arguments);
		};
		BX.MPL.prototype.showWait = function(id) {
			var container = BX('record-' + this.ENTITY_XML_ID + '-' + id + '-cover');
			if (id > 0 && container)
				BX.addClass(container, "feed-com-block-cover-wait");
		};
		BX.MPL.prototype.closeWait = function(id) {
			var container = BX('record-' + this.ENTITY_XML_ID + '-' + id + '-cover');
			if (id > 0 && container)
				BX.removeClass(container, "feed-com-block-cover-wait");
		};
		BX.MPL.createInstance = function(params, staticParams, formParams) {
			return (new BX.MPL(params, staticParams, formParams));
		};

		BX.MPL.getInstance = function(entity_xml_id) {
			return repo['list'][entity_xml_id];
		};

		BX.addCustomEvent(window, "OnUCHasBeenDestroyed", function(ENTITY_XML_ID) {
			delete repo["list"][ENTITY_XML_ID];
		});
		BX.onCustomEvent("main.post.list/mobile", ["script.js"]);
		BX.removeCustomEvent("main.post.list/default", function(){ init(window); });
	};
	BX.addCustomEvent("main.post.list/default", function(){ init(window); });
	if (window["FCList"])
		init(window);
})();