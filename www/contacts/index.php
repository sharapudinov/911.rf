<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?>
<div class="sheet clearfix">
    <div class="layout-wrapper">

        <div class="item-page">
            <article class="post messages">
                <div class="postcontent clearfix">
                    <div id="system-message-container"></div>
                </div>
            </article>

            <article class="post">
                <h2 class="postheader">Контакты</h2>
            </article>
            <article class="post">
                <p><strong>Телефоны:</strong> 8 (964) 7777-903 - сервис, 8 (909) 9613-999 - Кузовной цех</p>
                <p><strong>Адрес:</strong> г. Москва, Тагильская, 4, стр. 15, Автосервис 911</p>
                <p><? $APPLICATION->IncludeComponent("bitrix:map.google.view", ".default", array(
                        "KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
                        "INIT_MAP_TYPE" => "NORMAL",
                        "MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.819546\";s:10:\"google_lon\";s:7:\"37.751462\";s:12:\"google_scale\";i:10;}",
                        "MAP_WIDTH" => "600",
                        "MAP_HEIGHT" => "500",
                        "CONTROLS" => array(
                            0 => "LARGE_MAP_CONTROL",
                            1 => "MINIMAP",
                            2 => "HTYPECONTROL",
                            3 => "SCALELINE",
                        ),
                        "OPTIONS" => array(
                            0 => "ENABLE_SCROLL_ZOOM",
                            1 => "ENABLE_DBLCLICK_ZOOM",
                            2 => "ENABLE_DRAGGING",
                        ),
                        "MAP_ID" => ""
                    ),
                        false
                    ); ?>
                </p>
            </article>
            <p></p>

        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>


