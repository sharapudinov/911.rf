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
$this->setFrameMode(true);?>
<pre><?
//print_r($arResult);?>
    </pre>


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
                <h1>Рассчитайте стоимость услуги "<?= $arResult['NAME']?>" для вашего автомобиля </h1>
                <h2><?=$arResult['PREVIEW_TEXT']?></h2>

                <!-- кнопка -->
                <p class="clearfix">&nbsp;</p>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <a class="btn btn-danger btn-xlg btn-block click-event"

                           href="#callbackhunter"

                           id="cta0|calculate-price"

                           role="button">Рассчитать стоимость</a>
                    </div>
                </div>
                <!/-- кнопка -->
                <p class="clearfix"></p>
                <div class="text-muted text-center">
                    <small>Для оформления запроса, пожалуйста, приготовьте свидетельство о регистрации ТС
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid jumbotron advantages" id="advantages_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <p><i class="icon fa fa-clock-o fa-4x text-success"></i></p>
                <h2>+4&nbsp;часа к&nbsp;вашей жизни</h2>
                <p>
                    Вы&nbsp;не&nbsp;теряете 2&nbsp;часа на&nbsp;дорогу и&nbsp;2&nbsp;часа пустого ожидания в&nbsp;сервисе.
                    Мы&nbsp;приедем в&nbsp;выбранное вами место и&nbsp;время: на&nbsp;парковку у&nbsp;дома или
                    офиса, гараж или дачу.
                </p>
            </div>
            <div class="col-sm-6 text-center">
                <p><i class="icon fa fa-home fa-4x text-success"></i></p>
                <h2>+5&nbsp;к комфорту</h2>
                <p>
                    Никаких хлопот и&nbsp;полный комфорт, если у&nbsp;вас нет запчастей. Мы&nbsp;сами купим и&nbsp;привезем
                    вам запчасти по&nbsp;ценам популярных интернет-магазинов до&nbsp;30% ниже, чем у&nbsp;дилера.
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
                <h2>Сообщите нам пробег и&nbsp;марку автомобиля</h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>2</strong></i>
				</span>
                <h2>Нет запчастей? Цены на&nbsp;наши запчасти до&nbsp;30% ниже, чем у&nbsp;дилера</h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>3</strong></i>
				</span>
                <h2>Выберите удобное место и&nbsp;время</h2>
            </div>
            <div class="col-md-3 col-sm-6">
				<span class="fa-stack fa-3x">
				<i class="fa fa-circle-thin fa-stack-2x fa-inverse"></i>
				<i class="fa fa-stack-1x fa-inverse"><strong>4</strong></i>
				</span>
                <h2>Мастер приедет и&nbsp;проведет работы</h2>
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

                   href="#callbackhunter"

                   id="cta1|podat-zayavku"

                   role="button">Подать заявку<span class="hidden-xs"> на проведение ТО</span></a>
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
                    <h2>Мастера готовы к выездному обслуживанию</h2>
                    <p>
                        Мы&nbsp;отбираем мастеров со&nbsp;стажем не&nbsp;менее 10&nbsp;лет, которым скучно
                        сидеть в&nbsp;сервисе. У&nbsp;них всегда с&nbsp;собой инструменты для непредвиденных
                        ситуаций: могут разобрать и&nbsp;собрать машину на&nbsp;месте и&nbsp;починить Harley
                        Davidson. Однажды наш механик на&nbsp;выезде починил самолет.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-user fa-5x text-success"></i>
                    <h2>Открытость</h2>
                    <p>
                        Мастер согласует список работ заранее. Если обнаружит скрытую проблему и&nbsp;сможет ее&nbsp;исправить
                        на&nbsp;месте&nbsp;&mdash; согласует с&nbsp;вами сроки и&nbsp;цену. Если проблему нельзя
                        решить на&nbsp;месте, мастер посоветует, что делать дальше.
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
                        Мы&nbsp;отбираем запчасти, покупаем дорогие расходники и&nbsp;фанатично следим за&nbsp;квалификацией
                        механиков. Но&nbsp;если что-то не&nbsp;так&nbsp;&mdash; переделаем и&nbsp;заменим без
                        вопросов.
                    </p>
                </div>
                <div class="box-content">
                    <i class="icon fa fa-car fa-4x text-success"></i>
                    <h2>Любые марки</h2>
                    <p>
                        Обслуживаем 43 марки автомобилей, включая все&nbsp;самые популярные в&nbsp;России: Audi,
                        BMW, Chevrolet, Ford, Honda, Hyundia, Kia, Land Rover, Lexus, Mazda, Mercedes,
                        Mitsubishi, Nissan, Opel, Peugeot, Renault, Skoda, Toyota, Volkswagen, Volvo и&nbsp;другие.
                    </p>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="thumbnail">
                    <img src="/mechanics/assets/files/88445/master.jpg" class="img-responsive"/>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid jumbotron" id="price">
    <div class="container">
        <h1 class="text-center">Сколько стоит</h1>
        <h2 class="text-center">Вызов механика <strong>950 рублей</strong>, стоимость работы от <strong>2000
                рублей</strong> в час</h2>
        <p>&nbsp;</p>
        <!-- пример цен -->
        <h4 class="text-center">выполненные заказы<br/>
            <small>(в стоимость включены запчасти)</small>
        </h4>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Автомобиль</th>
                <th class="text-center">Пробег (км)</th>
                <th class="text-center">Цены по Москве (руб)</th>
                <th class="success text-center lead">Автосервис 911 (руб)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mitsubishi Outlander&nbsp;XL 2.4 4WD (2008)</td>
                <td class="text-center">90&nbsp;000</td>
                <td class="text-center"><?=$arResult['PROPERTIES']['MITSUBISHI_PRICE']['VALUE']*0.9?></td>
                <td class="success text-center lead"><?=$arResult['PROPERTIES']['MITSUBISHI_PRICE']['VALUE']?></td>
            </tr>
            <tr>
                <td>Honda CR-V 2.4 (2010)</td>
                <td class="text-center">60&nbsp;000</td>
                <td class="text-center"><?=$arResult['PROPERTIES']['HONDA_PRICE']['VALUE']*0.9?></td>
                <td class="success text-center lead"><?=$arResult['PROPERTIES']['HONDA_PRICE']['VALUE']?></td>
            </tr>
            <tr>
                <td>Volkswagen Polo 1.6 (2011)</td>
                <td class="text-center">60&nbsp;000</td>
                <td class="text-center"><?=$arResult['PROPERTIES']['FORD_PRICE']['VALUE']*0.9?></td>
                <td class="success text-center lead"><?=$arResult['PROPERTIES']['FORD_PRICE']['VALUE']?></td>
            </tr>
            <tr>
                <td>Ford Focus 1.4 (2004)</td>
                <td class="text-center">100&nbsp;000</td>
                <td class="text-center"><?=$arResult['PROPERTIES']['VOLKSWAGEN_PRICE']['VALUE']*0.9?></td>
                <td class="success text-center lead"><?=$arResult['PROPERTIES']['VOLKSWAGEN_PRICE']['VALUE']?></td>
            </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <h3 class="text-center"><strong>Выберите готовый пакет техобслуживания от МОЙМЕХАНИК &ndash; экономия
                более 500 рублей</strong></h3>
        <h3 class="text-center">или техобслуживание <a href="#callbackhunter">рекомендованное производителем
                по пробегу</a></h3>

        <div class="row mtb text-center">
            <div class="1col-md-10 1col-md-offset-1">
                <div class="col-md-4 prices">
                    <h3 class="mb">Универсальное ТО<br/>
                        <small>2000 руб</small>
                    </h3>
                    <ul class="mb">
                        <li>Замена моторного масла и фильтра</li>
                        <li>Замена воздушного фильтра</li>
                        <li>Замена салонного фильтра</li>
                        <li>Проверка всех жидкостей и шлангов</li>
                    </ul>
                    <a href="#callbackhunter" class="btn btn-lg btn-red click-event" role="button"
                       id="cta2|to-mm1">Провести ТО | 2000 руб</a>
                </div>

                <div class="col-md-4 prices recommended">
                    <h3 class="mb">Расширенное ТО<br/>
                        <small>3500 руб</small>
                    </h3>
                    <ul class="mb">
                        <li>Замена моторного масла и фильтра</li>
                        <li>Замена воздушного фильтра</li>
                        <li>Замена салонного фильтра</li>
                        <li>Проверка всех жидкостей и шлангов</li>
                        <li>Замена свечей зажигания</li>
                        <li>Проверка системы охлаждения</li>
                        <li>Проверка ремней</li>
                        <li>Проверка приборов освещения</li>
                    </ul>
                    <a href="/book/?items=88190" class="btn btn-lg btn-red click-event" role="button"
                       id="cta2|to-mm2">Провести ТО | 3500 руб</a>
                </div>

                <div class="col-md-4 prices">
                    <h3 class="mb">Полное ТО<br/>
                        <small>6500 руб</small>
                    </h3>
                    <ul class="mb">
                        <li>Замена моторного масла и фильтра</li>
                        <li>Замена воздушного фильтра</li>
                        <li>Замена салонного фильтра</li>
                        <li>Проверка всех жидкостей и шлангов</li>
                        <li>Замена свечей зажигания</li>
                        <li>Проверка системы охлаждения</li>
                        <li>Проверка ремней</li>
                        <li>Проверка приборов освещения</li>
                        <li>Замена топливного фильтра</li>
                        <li>Компьютерная диагностика всех систем</li>
                        <li>Проверка выхлопной системы</li>
                        <li>Обслуживание аккумулятора и кабелей</li>
                    </ul>
                    <a href="/book/?items=88193" class="btn btn-lg btn-red click-event" role="button"
                       id="cta2|to-mm3">Провести ТО | 6500 руб</a>
                </div>
            </div><!--/col-md-10 -->
        </div>

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
            <h1 class="text-center">Отзывы наших клиентов</h1>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-feedback" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-feedback" data-slide-to="1"></li>
                <li data-target="#carousel-feedback" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="js-video vimeo widescreen">
                                <iframe src="//player.vimeo.com/video/102234489?api=1" width="500" height="281"
                                        frameborder="0" webkitallowfullscreen mozallowfullscreen
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Эта услуга очень удобна тем, у&nbsp;кого такой&nbsp;же сумасшедший темп жизни
                                    как у&nbsp;меня. Мой рабочий день длится более 12&nbsp;часов. Обидно тратить
                                    время на&nbsp;сервис. Когда у&nbsp;меня засвистели колодки, я&nbsp;сделал
                                    заказ на&nbsp;сайте &laquo;МОЙМЕХАНИК&raquo;, и&nbsp;на&nbsp;следующий день
                                    ко&nbsp;мне приехал мастер с&nbsp;колодками и&nbsp;сделал всю работу у&nbsp;меня
                                    на&nbsp;офисной парковке.</p>
                                <footer>Алексей&nbsp;| <cite title="Марка и оказанные услуги">Suzuki, Замена
                                        тормозных колодок, 2420 рублей</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="js-video vimeo widescreen">
                                <iframe src="//player.vimeo.com/video/102234490?api=1" width="500" height="281"
                                        frameborder="0" webkitallowfullscreen mozallowfullscreen
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Сервис &laquo;МОЙМЕХАНИК&raquo;&nbsp;&mdash; это удобно. Для меня всегда было
                                    проблематично купить запчасти, найти автосервис, ждать. Я&nbsp;оформил
                                    онлайн заказ на&nbsp;сайте, и&nbsp;ко&nbsp;мне приехал мастер, заменил масло
                                    и&nbsp;фильтры, провел диагностику. Я&nbsp;остался доволен, сэкономил целый
                                    вечер, и&nbsp;мне не&nbsp;пришлось ждать свой автомобиль
                                    в&nbsp;автомастерской.</p>
                                <footer>Дмитрий&nbsp;| <cite title="Марка и оказанные услуги">Hyundai, Замена
                                        масла и&nbsp;фильтра, 1125 рублей</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="js-video vimeo widescreen">
                                <iframe src="//player.vimeo.com/video/102216405?api=1" width="500" height="281"
                                        frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Я очень занятой человек, кроме работы я вожу детей на тренировки до и после
                                    работы. Без машины я как без рук. Сервисные проблемы нарушают весь мой
                                    график. Возможность вызвать автомеханика к себе меня заинтересовала, тем
                                    более что в машине что-то застучало. В результате ко мне приехал мастер, и
                                    пока я ждала детей из бассейна, он всё починил.</p>
                                <footer>Татьяна | <cite title="Марка и оказанные услуги">Opel, Замена
                                        Вентилятора Радиатора.</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
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
<div class="container page-block">
    <p class="clearfix">&nbsp;</p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-danger btn-xlg btn-block click-event"
               id="cta3|do_action"
               href="#callbackhunter"
               role="button"><span class="hidden-xs">Провести ТО </span><span
                    class="visible-xs">Провести ТО</span></a>
        </div>
    </div>
</div>


<div id="optin-exit-modal" class="modal fade lg in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body bg-primary">
                <button type="button" class="close btn-lg" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="row">
                    <div class="col-xs-11 col-xs-offset-1">
                        <h1 style="font-size: 350%;color: yellow;" id="simple-quote-request-modal-labbledby"
                            class="modal-title">319 рублей прямо сейчас!</h1>
                        <h2>Всем новым пользователям мы&nbsp;дарим <strong>319 рублей</strong> на&nbsp;личный
                            счет, которые можно потратить в&nbsp;будущем при заказе наших услуг</h2>
                        <p class="lead hidden-xs" style="color: #eee;">Введите ваш email, автоматически будет
                            создан личный кабинет, пароль для доступа к&nbsp;личному кабинету будет выслан по&nbsp;электронной
                            почте.</p>
                    </div>
                </div>
            </div>
            <div class="modal-body" style="background-color: #2e3c44;">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAABmCAYAAABSm2hyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpENDE3MTM1M0UzNUMxMUUzQkZCQkExNjc0MTk2RjAxMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpENDE3MTM1NEUzNUMxMUUzQkZCQkExNjc0MTk2RjAxMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0MTcxMzUxRTM1QzExRTNCRkJCQTE2NzQxOTZGMDEwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ0MTcxMzUyRTM1QzExRTNCRkJCQTE2NzQxOTZGMDEwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+ynB5mQAACDlJREFUeNrUXHtM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"
                    alt="Arrow" style="position: absolute; left: 4%; top: -90px;">
                <div class="row">
                    <div class="col-xs-12">
                        <form role="form" method="post" action="/user/sign-up/">
                            <input type="hidden" name="source" value="email_collector_form_319">
                            <input type="hidden" id="_post_token" name="TOKEN990429151X1455380179"
                                   value="NIhonnGedEMYH9IUnbPuYHtQ9zH.OaSn">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                       title="Email" value="">
                                        <span class="input-group-btn"><button class="btn btn-danger" type="submit">
                                                ПОЛУЧИТЬ<span class="hidden-xs"> 319 РУБЛЕЙ</span>!
                                            </button></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

