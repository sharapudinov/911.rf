<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>
<?
/*test_dump($arResult);*/
?>
<style>
    #header {
        background: #aaa url("<?=$arResult['PREVIEW_PICTURE']['SRC']?>");
        background-size: cover;
        background-position: center center
    }
</style>

<div class="jumbotron" id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title-block">
                <div class="row">
                    <div class="col-md-12 title-block">
                        <h1><?= $arResult['NAME'] ?> на <?= $arResult['MARKA']['NAME'] ?></h1>
                    </div>
                </div>
                <div class="image-block">
                    <div class="col-sm-8 text-center img-marka-auto">
                        <img src="<?=$arResult['MARKA']["DETAIL_PICTURE"]?>" alt="">
                    </div>
                    <div class="col-sm-4 text-center img-marka-logo">
                        <img src="<?=$arResult['MARKA']["PICTURE"]?>" alt="">
                    </div>

                </div>
                <!-- кнопка -->
                <p class="clearfix">&nbsp;</p>
                <div class="row">
                    <div class="col-md-12 title-block">
                        <h2>Лучший специализированный автосервис <?=$arResult['MARKA']['NAME']?> на Северо-Западе Москвы.
                            Высококвалифицированные автомеханики выполнят <?=$arResult['DETAIL_TEXT']?> на современном
                            высокоточном оборудовании в день обращения.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 btn-price">
                        <a class="btn btn-danger btn-xlg btn-block click-event"

                           href="#price"

                           id="cta0|calculate-price"

                           role="button">Узнать стоимость</a>
                    </div>
                </div>
                <!/-- кнопка -->
                <p class="clearfix"></p>
                <div class="text-muted text-center">
                    <small>Оставьте заявку и получите 10% скидку на ремонт от 20 000 рублей</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid jumbotron advantages" id="advantages_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <p><i class="icon fa fa-rub fa-4x text-success"></i></p>
                <h2>Прозрачная цена</h2>
                <p class="clearfix"></p>
                <p>
                    Цена на ремонтные работы останется неизменной - без дополнительных затрат и наценок на детали.
                </p>
            </div>
            <div class="col-sm-6 text-center">
                <p><i class="icon fa fa-book fa-4x text-success"></i></p>
                <h2>Гарантия 12 месяцев</h2>
                <p class="clearfix"></p>
                <p>
                    Мы предоставляем гарантию 12 месяцев или 12 000 км на все ремонтные работы.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid jumbotron" id="how">
    <div class="container_no">
        <h1 class="text-center">Как это работает</h1>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>1</strong></i>
				</span>
                <h2>Вы оставляете заявку</br> на обратный звонок</br> или звоните нам сами </h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>2</strong></i>
				</span>
                <h2>Вы приезжаете в наш сервис,</br> наш специалист проводит</br> осмотр автомобиля</br> и согласовывает
                    стоимость работы </h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>3</strong></i>
				</span>
                <h2>Мы проводим полный цикл</br> ремонтных работ</h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>4</strong></i>
				</span>
                <h2>АВТОМОБИЛЬ ГОТОВ! </br>Можете ехать! </h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid jumbotron" id="no-weekend">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1 class="text-center">Работаем без выходных</h1>
                <h2 class="text-center">Принимаем заявки круглосуточно&nbsp;&mdash; записывайтесь!</h2>
            </div>
        </div>

        <!-- кнопка -->
        <p class="clearfix">&nbsp;</p>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-danger btn-xlg btn-block click-event"

                   href="#callback"

                   id="cta1|podat-zayavku"

                   role="button">Заказать</a>
            </div>
        </div>
        <!/-- кнопка -->

    </div>
</div>

<div class="container-fluid advantages" id="advantages_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="box-content">
                    <i class="icon fa fa-wrench fa-5x text-success"></i>
                    <h2>Только опытные сотрудники</h2>
                    <p>
                        Специалисты нашего сервиса – профессионалы с опытом работы более 10 лет в сфере покраски и
                        ремонта автомобилей <?= $arResult['MARKA']['NAME'] ?>.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-user fa-5x text-success"></i>
                    <h2>Открытость</h2>
                    <p>
                        Мастер согласует список работ заранее. Если обнаружит скрытую проблему и&nbsp;сможет ее&nbsp;исправить
                        &mdash; согласует с&nbsp;вами сроки и&nbsp;цену.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-eye fa-5x text-success"></i>
                    <h2>Контроль</h2>
                    <p>
                        Если хотите, мастер будет работать у&nbsp;вас на&nbsp;виду. Или оставьте автомобиль и&nbsp;занимайтесь
                        своими делами&nbsp;&mdash; после ремонта вы&nbsp;получите полный отчет о&nbsp;работах.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-thumbs-o-up fa-5x text-success"></i>
                    <h2>Гарантия год или 12000 км</h2>
                    <p>
                        Мы&nbsp;отбираем запчасти и покупаем дорогие расходники только по рекомендации от производителя <?= $arResult['MARKA']['NAME'] ?>,
                        также мы постоянно улучшаем квалификацию своих автомехаников. Но если что-то не так &mdash; переделаем и заменим без
                        вопросов.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-car fa-4x text-success"></i>
                    <h2><?= $arResult['MARKA']['NAME'] ?> - наша специализация</h2>
                    <p>
                        Наш автосервис специализируется на <?= $arResult['MARKA']['NAME'] ?>, мы обслуживанием автомобили марки <?= $arResult['MARKA']['NAME'] ?>
                        всех моделей и любого года выпуска. Мы имеем своих собственных поставщиков оригинальных запчастей на автомобили всех моделей <?= $arResult['MARKA']['NAME'] ?>.
                    </p>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="thumbnail img-detal-service">
                    <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" class="img-responsive"/>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid jumbotron" id="price">
    <div class="container">
        <h1 class="text-center">Сколько стоит <?= $arResult['NAME'] ?> на <?= $arResult['MARKA']['NAME'] ?></h1>
        <!-- пример цен -->
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Вид работы</th>
                <th class="text-center">Цены по Москве (руб)</th>
                <th class="success text-center lead">Наши цены (руб)</th>
            </tr>
            </thead>
            <tbody>
            <? foreach ($arResult['PROPERTIES']['WORK_TYPES']['arEl'] as $work_type): ?>
            <tr>
                <td><?= $work_type['NAME'] ?> </td>
                <td class="text-center"><?= $work_type['PROPERTY_PRICE_VALUE'] * 1.3 ?></td>
                <td class="success text-center lead"><?= $work_type['PROPERTY_PRICE_VALUE'] ?></td>
            </tr>
            </tbody>
            <? endforeach ?>
        </table>

        <!-- кнопка
        <p class="clearfix">&nbsp;</p>-->

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-danger btn-xlg btn-block click-event"

                   href="#callback"

                   id="cta1|podat-zayavku"

                   role="button">Заказать</a>
            </div>
        </div>
        <!/-- кнопка -->

        <p class="normal-text text-center">Автосервис «Автотехцентр-911» <strong>выполнит БЕСПЛАТНО диагностику вашего автомобиля</strong>. Автомеханик сможет точно назвать сроки и стоимость ремонта,
            и при вашем одобрении сможет сразу начать <?=$arResult['NAME']?> на <?= $arResult['MARKA']['NAME'] ?>.</p>

    </div>
</div><!-- ikonostas -->


<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="350" src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-primary" id="feedback">
    <div class="container_no">
        <div id="carousel-feedback" class="carousel slide" data-ride="carousel">
            <h1 class="text-center">Отзывы довольных клиентов</h1>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-feedback" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-feedback" data-slide-to="1"></li>
                <li data-target="#carousel-feedback" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <? foreach ($arResult['PROPERTIES']['VIDEO']['arEl'] as $key => $video_item): ?>
                    <div class="item <?= $key == 0 ? 'active' : '' ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="js-video vimeo widescreen">
                                    <iframe src="//<?= $video_item['~PREVIEW_TEXT'] ?>" width="500" height="281"
                                            frameborder="0" webkitallowfullscreen mozallowfullscreen
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                    <p><?= $video_item['DETAIL_TEXT'] ?>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                <? endforeach ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-feedback" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Назад</span>
            </a>
            <a class="right carousel-control" href="#carousel-feedback" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Вперед</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid jumbotron" id="no-weekend">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1 class="text-center">Бесплатная диагностика</h1>
                <h2 class="text-center">Продиагностируйте свой автомобиль и решите - необходим ли вам ремонт!</h2>
            </div>
        </div>

        <!-- кнопка -->
        <p class="clearfix">&nbsp;</p>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-danger btn-xlg btn-block click-event"

                   href="#callback"

                   id="cta1|podat-zayavku"

                   role="button">Заказать</a>
            </div>
        </div>
        <!/-- кнопка -->

    </div>
</div>

<div class="container" id="adress">
    <div class="container">
        <h1 class="text-center">Автотецентр-911</h1>
        <p class="text-center">г. Москва, ул. Тагильская, 4, стр. 15</p>
        <p class="text-center">Районы обслуживания: САО, СВАО, ВАО</p>
    </div>
</div>