<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $curDir = $APPLICATION->GetCurDir(); ?>
<? $is_landing = (str_replace('landing', '', $curDir) != $curDir);
$is_root = $curDir == '';
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Автосервис 911 на ВАО Москва</title>
    <? if ($is_landing): ?>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"/>
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" type="text/css"
              href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css"/>
        <!-- Google Font to replace Helvetica -->
        <link rel="stylesheet" type="text/css"
              href="//fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin,cyrillic"/>
        <!-- Global CSS -->
    <? endif ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
<div id="main" <?= !$is_landing ? 'class="bg"' : '' ?>>
    <div class="main-container">
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
                <header class="<?= $is_landing ? 'small_' : '' ?>header">
                    <div class="pos31"><!-- begin nostyle -->
                        <div class="nostyle">
                            <div class="service-info">
                                <p>Тагильская, 4, стр. 15</p>
                                <p><span>Автосервис 911, г. Москва</span></p>
                                <p>с 09:00 до 21:00</p>
                                <a href="/contacts/" class="pos32"><span>смотреть на карте</span></a>
                            </div>
                        </div>
                    </div>
                    <? if ($is_root): ?>
                        <div class="pos34">
                            <div class="nostyle">
                                <div class="custom">
                                    <img alt="spec" src="<?= SITE_TEMPLATE_PATH ?>/images/spxec.png"/>
                                </div>
                            </div>
                        </div>
                    <? endif ?>

                    <div class="pos36">
                        <div class="nostyle">

                            <div class="btn-place">

                                <a href="#callbackhunter" id="zvonok-button"></a>
                                <a href="#callbackhunter" id="konsultac-button"></a>

                                <div id="zakaz-form">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.feedback",
                                        "911",
                                        array(
                                            "COMPONENT_TEMPLATE" => "911",
                                            "EMAIL_TO" => "sharapudinov@mail.ru",
                                            "EVENT_MESSAGE_ID" => array(
                                                0 => "7",
                                            ),
                                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                                            "REQUIRED_FIELDS" => array(
                                                0 => "NAME",
                                                1 => "EMAIL",
                                            ),
                                            "USE_CAPTCHA" => "N"
                                        ),
                                        false
                                    );?>
                                </div>

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

                    <a href="/" data-left="1.35%" class="logo-852579020">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-852579020.png">
                    </a>
                    <? if (!$is_landing): ?>
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
                    <? endif ?>

                </header>


