<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
    <div class="sheet clearfix">
        <div class="layout-wrapper">
            <div class="content-layout">
                <div class="content-layout-row">
                    <div class="layout-cell sidebar1">
                        <div class="vmenublock clearfix">
                            <div class="vmenublockcontent">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "left",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "COMPONENT_TEMPLATE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_TYPE" => "Y",
                                        "MENU_CACHE_USE_GROUPS" => "N",
                                        "ROOT_MENU_TYPE" => "left",
                                        "USE_EXT" => "Y"
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="layout-cell content">
                        <article class="post messages">
                            <div class="postcontent clearfix">
                                <div id="system-message-container">
                                </div>
                            </div>
                        </article>
                        <div class="item-page">
                            <article class="post">
                                <h2 class="postheader"><? $APPLICATION->ShowTitle() ?></h2>
                            </article>
                            <article class="post">
                                <div class="postcontent clearfix">
                                    <div class="article">
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:news",
                                            "911",
                                            array(
                                                "ADD_ELEMENT_CHAIN" => "N",
                                                "ADD_SECTIONS_CHAIN" => "Y",
                                                "AJAX_MODE" => "N",
                                                "AJAX_OPTION_ADDITIONAL" => "",
                                                "AJAX_OPTION_HISTORY" => "N",
                                                "AJAX_OPTION_JUMP" => "N",
                                                "AJAX_OPTION_STYLE" => "Y",
                                                "BROWSER_TITLE" => "NAME",
                                                "CACHE_FILTER" => "N",
                                                "CACHE_GROUPS" => "N",
                                                "CACHE_TIME" => "36000000",
                                                "CACHE_TYPE" => "N",
                                                "CHECK_DATES" => "Y",
                                                "COMPONENT_TEMPLATE" => "911",
                                                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                                                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                                "DETAIL_FIELD_CODE" => array(
                                                    0 => "",
                                                    1 => "",
                                                ),
                                                "DETAIL_PAGER_SHOW_ALL" => "Y",
                                                "DETAIL_PAGER_TEMPLATE" => "",
                                                "DETAIL_PAGER_TITLE" => "Страница",
                                                "DETAIL_PROPERTY_CODE" => array(
                                                    0 => "",
                                                    1 => "",
                                                ),
                                                "DETAIL_SET_CANONICAL_URL" => "N",
                                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                                "DISPLAY_DATE" => "Y",
                                                "DISPLAY_NAME" => "Y",
                                                "DISPLAY_PICTURE" => "Y",
                                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                                "IBLOCK_ID" => "3",
                                                "IBLOCK_TYPE" => "content",
                                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                "LIST_FIELD_CODE" => array(
                                                    0 => "",
                                                    1 => "",
                                                ),
                                                "LIST_PROPERTY_CODE" => array(
                                                    0 => "",
                                                    1 => "",
                                                ),
                                                "MESSAGE_404" => "",
                                                "META_DESCRIPTION" => "-",
                                                "META_KEYWORDS" => "-",
                                                "NEWS_COUNT" => "20",
                                                "PAGER_BASE_LINK_ENABLE" => "N",
                                                "PAGER_DESC_NUMBERING" => "N",
                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                "PAGER_SHOW_ALL" => "N",
                                                "PAGER_SHOW_ALWAYS" => "N",
                                                "PAGER_TEMPLATE" => ".default",
                                                "PAGER_TITLE" => "Новости",
                                                "PREVIEW_TRUNCATE_LEN" => "",
                                                "SEF_FOLDER" => "/services/",
                                                "SEF_MODE" => "Y",
                                                "SET_LAST_MODIFIED" => "N",
                                                "SET_STATUS_404" => "N",
                                                "SET_TITLE" => "N",
                                                "SHOW_404" => "N",
                                                "SORT_BY1" => "ACTIVE_FROM",
                                                "SORT_BY2" => "SORT",
                                                "SORT_ORDER1" => "DESC",
                                                "SORT_ORDER2" => "ASC",
                                                "USE_CATEGORIES" => "N",
                                                "USE_FILTER" => "N",
                                                "USE_PERMISSIONS" => "N",
                                                "USE_RATING" => "N",
                                                "USE_RSS" => "N",
                                                "USE_SEARCH" => "N",
                                                "USE_SHARE" => "N",
                                                "TAGS_CLOUD_ELEMENTS" => "150",
                                                "PERIOD_NEW_TAGS" => "",
                                                "DISPLAY_AS_RATING" => "rating",
                                                "FONT_MAX" => "50",
                                                "FONT_MIN" => "10",
                                                "COLOR_NEW" => "3E74E6",
                                                "COLOR_OLD" => "C0C0C0",
                                                "TAGS_CLOUD_WIDTH" => "100%",
                                                "SEF_URL_TEMPLATES" => array(
                                                    "news" => "",
                                                    "section" => "#SECTION_CODE#/",
                                                    "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                                                )
                                            ),
                                            false
                                        ); ?><br>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>