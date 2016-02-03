<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Автосервис 911 на ВАО Москва</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <!-- Слайдер -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/mobilyslider.js') ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/init.js') ?>

    <!-- Pop Up -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.bpopup.min.js') ?>
    <!-- Пользовательские функции -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/common.js') ?>

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/template.css') ?>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? $APPLICATION->ShowHead(); ?>

</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<div id="main">
    <div class="container">
        <div id="sidebar">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "mobile_top", array(
                "ROOT_MENU_TYPE" => "mobile_top",
                "MENU_CACHE_TYPE" => "Y",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
                false
            ); ?>
        </div>
        <div class="main-content">
            <a href="#" data-toggle=".container" id="sidebar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="content">
                <header class="header">
                    <div class="pos31"><!-- begin nostyle -->
                        <div class="nostyle">
                            <div class="service-info">
                                <p>Тагильская, 4, стр. 15</p>
                                <p><span>Автосервис 911, г. Москва</span></p>
                                <p>с 09:00 до 21:00</p>
                                <a href="/kontakty.html" class="pos32"><span>смотреть на карте</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="pos34">
                        <div class="nostyle">
                            <div class="custom">
                                <img alt="spec" src="<?= SITE_TEMPLATE_PATH ?>/images/spec.png"/>
                            </div>
                        </div>
                    </div>

                    <div class="pos36">
                        <div class="nostyle">

                            <div class="btn-place">

                                <button id="zvonok-button"></button>
                                <button id="konsultac-button"></button>

                                <form method="post" id="zakaz-form" enctype="multipart/form-data" action="#">
                                    <fieldset class="formFieldset">
                                        <ul class="formContainer">
                                            <li>
                                                <p>Заявка</p>
                                            </li>
                                            <li>
                                                <input type="text" value="" size="20" name="form[name]" id="name"
                                                       placeholder="Ваше имя" class="rsform-input-box"/>
                                            </li>
                                            <li>
                                                <input type="text" value="" size="20" name="form[tel]" id="tel"
                                                       placeholder="Ваш телефон" class="rsform-input-box"/>
                                            </li>
                                            <li>
                                                <input type="submit" value="ЗАКАЗАТЬ" name="form[sub]" id="sub"
                                                       class="rsform-submit-button"/>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="pos37">
                        <div class="nostyle">
                            <div class="name-tel">
                                <p>Сервис</p>
                                <p>Кузовной цех</p>
                            </div>
                        </div>
                    </div>

                    <ul class="slogan" data-left="81.17%">
                        <li>8 (964) 7777-903</li>
                        <li>8 (909) 9613-999</li>
                    </ul>

                    <a href="index.html" data-left="1.35%" class="logo-852579020">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-852579020.png">
                    </a>
                    <nav class="nav">

                        <ul class="hmenu">
                            <li class="item-101 current active">
                                <a class=" active" href="/"><img class="menu-image"
                                                                          src="<?= SITE_TEMPLATE_PATH ?>/images/icon1.png"
                                                                          alt="Главная"/>Главная</a>
                            </li>
                            <li class="item-183">
                                <a href="/services/"><img class="menu-image"
                                                           src="<?= SITE_TEMPLATE_PATH ?>/images/icon2.png"
                                                           alt="Услуги"/>Услуги</a>
                            </li>
                            <li class="item-184">
                                <a href="/parts/"><img class="menu-image"
                                                              src="<?= SITE_TEMPLATE_PATH ?>/images/icon3.png"
                                                              alt="Запчасти"/>Запчасти</a>
                            </li>
                            <li class="item-185">
                                <a href="/spetsialnye-predlozheniya/"><img class="menu-image"
                                                                              src="<?= SITE_TEMPLATE_PATH ?>/images/icon4.png"
                                                                              alt="Специальные предложения"/>Специальные
                                    предложения</a>
                            </li>
                            <li class="item-186">
                                <a href="/vakansii/"><img class="menu-image"
                                                             src="<?= SITE_TEMPLATE_PATH ?>/images/icon5.png"
                                                             alt="Вакансии"/>Вакансии</a>
                            </li>
                            <li class="item-187">
                                <a href="/contacts/"><img class="menu-image"
                                                             src="<?= SITE_TEMPLATE_PATH ?>/images/icon6.png"
                                                             alt="Контакты"/>Контакты</a>
                            </li>
                        </ul>

                    </nav>

                </header>


