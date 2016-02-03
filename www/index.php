 <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
 $APPLICATION->SetTitle("Автосервис 911 на ВАО Москва");
?><div class="sheet clearfix">
	 <!-- begin nostyle -->


	 <div class="custom">

		 <div class="text-about">
			 <p class="header-text">СПЕЦИАЛИЗИРОВАННЫЙ <span class="red-txt">АВТОТЕХЦЕНТР 911</span></p>
			 <p>Многопрофильный АВТОТЕХЦЕНТР «911» ведёт свою историю с 1992г. Начав с ремонта автомобилей Форд-Линкольн-Меркьюри, в 1996г. техцентр присоединил ремонт автомобилей Шевроле, а в 1998г. дополнительно занялся обслуживанием Крайслер и Додж. Успешное развитие автосервиса позволило существенно расширить сферу деятельности и в 1999г. были добавлены в обслуживание японские бренды Тойота и Мазда, а начиная с 2004г., автосервис «Норд» заявил о полном комплексе сервисного обслуживания автомобилей, открыв просторный кузовной цех. С 2005г. обслуживание расширено ремонтом корейских автомобилей Хёндэ и Киа.</p>
		 </div>

	 </div>

	 <!-- begin nostyle -->
	 <div class="nostyle pos33">
		 <!-- begin nostyle content -->

		 <div class="slider slider2">
			 <div class="sliderContent">
				 <div class="item">
					 <img src="<?=SITE_TEMPLATE_PATH?>/images/slider.jpg" alt="" />
				 </div>
				 <div class="item">
					 <img src=""<?=SITE_TEMPLATE_PATH?>/images/slider.jpg" alt="" />
				 </div>
			 </div>
		 </div>

		 <div class="form-class">

			 <form method="post" id="user-form" enctype="multipart/form-data" action="#">
				 <fieldset class="formFieldset">
					 <ul class="formContainer">
						 <li>
							 <p>Диагностика автомобиля</p>
						 </li>
						 <li>
							 <input type="text" value="" size="20"  name="form[name]" id="name" placeholder="Ваше имя" class="rsform-input-box"/>
						 </li>
						 <li>
							 <input type="text" value="" size="20"  name="form[tel]" id="tel" placeholder="Ваш телефон" class="rsform-input-box"/>
						 </li>
						 <li>
							 <input type="submit" value="ЗАКАЗАТЬ" name="form[sub]" id="sub"  class="rsform-submit-button" />
						 </li>
					 </ul>
				 </fieldset>
				 <input type="hidden" name="form[formId]" value="3"/>
			 </form>

		 </div>


		 <!-- end nostyle content -->
	 </div>

	 <!-- end nostyle -->
	 <div class="layout-wrapper">
		 <div class="content-layout">
			 <div class="content-layout-row">

				 <div class="layout-cell content">
					 <article class="post messages"><div class="postcontent clearfix"><div id="system-message-container">
							 </div>
						 </div></article><div class="item-page"><article class="post"><h2 class="postheader">Главная</h2></article>

						 <article class="post">

							 <div class="postcontent clearfix">

								 <div class="article">

									 <p>
										 <img alt="recept" src="<?=SITE_TEMPLATE_PATH?>/images/foto/recept.jpeg" height="NaN" width="100%" />
										 Специализированный автосервис ВАО – это команда профессиональных мастеров с многолетним опытом работы, широкий спектр услуг, специализированное оборудование и передовой инструмент для обслуживания. У нас только комплексный подход к каждому автомобилю и приемлемые цены. На каждую предоставленную услугу предоставляются гарантии.
									 </p>

									 <div  class="menu-work">
										 <ul class="vmenu">
											 <li><a href="javascript: displ('dv')">Двигатель</a></li>
											 <li><a href="javascript: displ('hod')">Ходовая часть</a></li>
											 <li><a href="javascript: displ('kpp')">МКПП, АКПП</a></li>
											 <li><a href="javascript: displ('elk')">Электрика</a></li>
											 <li><a href="javascript: displ('kuz')">Кузов</a></li>
											 <li><a href="javascript: displ('dia')">Диагностика</a></li>
											 <li><a href="javascript: displ('teh')">Тех. обслуживание</a></li>
										 </ul>
									 </div>

									 <div id="dv">
										 <h2><strong>Двигатель (ремонт и диагностика)</strong></h2>
										 <p>Профессиональный ремонт и диагностика двигателя любой марки автомобиля выполняется опытными специалистами в оптимально сжатые сроки с гарантией качества. Устраняются все возможные неполадки внутренней системы, при этом строго соблюдается колоссальная точность подгонки зазоров, прокладок и другой вспомогательной аппаратуры, что минимизирует износ деталей и гарантирует продолжительный ресурс работы мотора при дальнейшей эксплуатации автомобиля. Диагностика производится при помощи профессионального аппарата сканирования, определяющего с предельной точностью все неисправности и причины их возникновения.</p>
										 <p><a href="/dvigatel.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="hod" style="display: none;">
										 <h2><strong>Ходовая часть (ремонт и диагностика)</strong></h2>
										 <p>Ремонт ходовой части любой марки автомобиля выполняют компетентные специалисты быстро и с гарантией качества. В работе используется профессиональное оборудование и специальный аппарат сканирования, точно определяющий поломки и причины их возникновения. Устраняются посторонние звуки, стуки, гул во время езды, нормализуется тормозной путь, возвращается устойчивость автомобиля на дороге, исключается крен транспортного средства в сторону при заходе в поворот. Стоимость ремонта и диагностики обсуждается в индивидуальном порядке и зависит от сложности ситуации.</p>
										 <p><a href="/khodovaya-chast.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="kpp" style="display: none;">
										 <h2><strong>МКПП, АКПП (ремонт и диагностика)</strong></h2>
										 <p>Диагностика и ремонт АКППП и МКПП всех марок и моделей автомобилей производится с применением профессионального оборудования на подъемнике. В ходе работы устраняются все возможные неисправности: заменяются блоки управления, соленоиды, гидротрансформаторы, устраняются поломки в гидравлической и механической части, нормализуется давление масла в магистралях и т.д. На комплекс проведенных мероприятий предоставляется гарантия. Стоимость услуг варьируется в доступных пределах и определяется после проведения комплексной диагностики специальным сканером.</p>
										 <p><a href="/mkpp-akpp.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="elk" style="display: none;">
										 <h2><strong>Электрика (ремонт и диагностика)</strong></h2>
										 <p>Диагностику и ремонт электрики всех марок транспортных средств отечественного и зарубежного производства специалисты с опытом работы производят, используя оригинальное диагностическое оборудование. Устраняются все возникающие ошибки и обнуляется их память в системах курсовой устойчивости, ABS, антипробуксовочных системах, системах управления подушками безопасности и т.д., заменяется изношенная проводка, производится подключение новых устройств и механизмов. При выполнении работы по ремонту электрики соблюдаются инструкционные предписания производителя авто.</p>
										 <p><a href="/elektrika.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="kuz" style="display: none;">
										 <h2><strong>Кузовные работы</strong></h2>
										 <p>Кузовные работы подразумевают под собой покраску, шпаклевку, сварку, рихтовку и другие мероприятия, направленные на восстановление презентабельного вида кузова автомобиля. Опытные специалисты нашего автосервиса выполнят сложный и мелкий кузовной ремонт быстро и с гарантией качества. В ходе предоставления услуг используются профессиональное оборудование и качественные материалы. Покраска автомобилей любых марок и моделей осуществляется в собственной покрасочной камере. Стоимость кузовных работ определяется в зависимости от их масштаба и сложности.</p>
										 <p><a href="/kuzov.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="dia" style="display: none;">
										 <h2><strong>Диагностика</strong></h2>
										 <p>Диагностика на базе автосервиса ВАО производится с использованием специальных измерительных приборов и оригинального диагностического оборудования. Комплексному сканированию подвергаются все без исключения узлы автомобиля, непосредственно двигатель, АКПП и МКПП, система зажигания, блок управления мотором и т.д. В ходе диагностики определяются малейшие неисправности и причины их возникновения, даются рекомендации по ремонту и сервису авто, обнуляется память ошибок систем. Обслуживанию подлежат транспортные средства отечественного и зарубежного автопрома. Стоимость услуги варьируется в доступных пределах и зависит от объема проведенных мероприятий.</p>
										 <p><a href="/diagnostika.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <div id="teh" style="display: none;">
										 <h2><strong>Тех обслуживание </strong></h2>
										 <p>Техническое обслуживание автомобилей всех марок и моделей производится специалистами высокого уровня с большим опытом работы и должной теоретической базой. Услуга предоставляется на подъемнике с использованием профессионального оборудования и необходимого инструмента. В его ходе подвергаются комплексной диагностике все узлы и системы авто, заменяется масло, изношенные детали, проводятся другие необходимые мероприятия. На базе автосервиса быстро и качественно выполняется сезонное и ежедневное обслуживание, а также технический сервис 1 и 2. Цена на услуги приемлема. Гарантии качества предоставляются.</p>
										 <p><a href="/tekh-obsluzhivanie.html">подробнее &gt;&gt;</a></p>
									 </div>

									 <p><img alt="recept" src="<?=SITE_TEMPLATE_PATH?>/images/foto/glavn.jpeg" height="NaN" width="100%" /></p>

								 </div>

							 </div>

						 </article>

					 </div>

				 </div>
			 </div>
		 </div>
	 </div>


 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>