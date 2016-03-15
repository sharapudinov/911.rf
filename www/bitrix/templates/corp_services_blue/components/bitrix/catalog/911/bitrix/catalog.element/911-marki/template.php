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
//test_dump($arResult);
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
                <h1><?= $arResult['NAME'] ?></br> для всех видов автомобилей</h1>
                <p class="clearfix"></p>
                <h2><?= $arResult['PREVIEW_TEXT'] ?></h2>

                <!-- кнопка -->
                <p class="clearfix">&nbsp;</p>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <a class="btn btn-danger btn-xlg btn-block click-event"

                           href="#price"

                           id="cta0|calculate-price"

                           role="button">Узнать стоимость</a>
                    </div>
                </div>
                <!/-- кнопка -->
                <p class="clearfix"></p>
                <div class="text-muted text-center">
                    <small>Оставьте заявку и получите купон на 1 000 руб. на все виды услуг</small>
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
                    Цена на ремонтные работы останется неизменной - без дополнительных затрат и наценок на
                    детали.
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

                   role="button"><span class="hidden-xs"> Заказать</span></span>
                </a>
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
                        ремонта авто.
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
                    <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" class="img-responsive"/>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid jumbotron" id="price">
    <div class="container">
        <h1 class="text-center">Сколько стоит</h1>
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
        <!-- кнопка -->
        <p class="clearfix">&nbsp;</p>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-danger btn-xlg btn-block click-event"

                   href="#callback"

                   id="cta1|podat-zayavku"

                   role="button"><span class="hidden-xs"> Заказать</span></span>
                </a>
            </div>
        </div>
        <!/-- кнопка -->
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
<div class="container page-block">
    <p class="clearfix">&nbsp;</p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-danger btn-xlg btn-block click-event"
               id="cta3|do_action"
               href="#callback"
               role="button"><span class="hidden-xs"> Заказать </span><span
                    class="visible-xs">Заказать</span></a>
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
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAABmCAYAAABSm2hyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpENDE3MTM1M0UzNUMxMUUzQkZCQkExNjc0MTk2RjAxMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpENDE3MTM1NEUzNUMxMUUzQkZCQkExNjc0MTk2RjAxMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0MTcxMzUxRTM1QzExRTNCRkJCQTE2NzQxOTZGMDEwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ0MTcxMzUyRTM1QzExRTNCRkJCQTE2NzQxOTZGMDEwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+ynB5mQAACDlJREFUeNrUXHtMW1UYbwuFQpmFtjz2jqKMwabu4XBhIxOWJZZtwoIRIcMtw2TQ6QaLwT0yDTMYnHu4aXRxJIvTaBfNFlH8AwmyTKp/DBxsIHY8pssYlBUcLfQBq99nSlIv59Db2wscv+Tk0NN7zvnd73yvc/odpBKe5Ha7Jf6SVCrVQJUMRQHFDOUGjOOSCCAYi//DCNafAqSsrKwss1gst+x2+2BHR0ddWlpaur/jeI03PWCREXq9PndsbGzU7UU9PT1G+E7GFFitVrvEbDb/7ubQQ6Du7m4FM2CBIurr68+7CTQ+Pm6Dih3O7t+/Px9AOSlg32VGZhUKxeK+vr4bJKAul6sdKgUTYIHk1dXVp0hAQVRdUK0UClR0sDqdLsXhcDygLH95IEBFBQsUdu3ata9JQMF83Qpk+UUHW1RUlAncc5AkAMpzgQIVDSyQymQy1ZO46nQ6vxIDqGhgKyoqdno4yFWqEagWMgMWSNPb29tCMVVviwVUFLBVVVW7KUplhkopNthgiUCCkE0JgckOynflUNkks0XcNz18+PBWDEwIy38XqlAxuRoQZ4FzIe3t7UVSQkQMA78HlUMym+T9ltu3b08BuXQQZPU+VGFic1UwZ5GbRqOxKCgoKIT7HYjAh9A+KpltmnjDmJiY2JGRETPBrmJYOHc6uCrYdBkMBj3JXFmtVsN0ARUEFiios7OzwU2mNKbAZmZmPsbdBCJBaNgDlXS6wcr8AQw71hxQIAW3HQKWz/B9JAyRDHamNBF4Yjq56rcYpKSkxAIHbVyUo6OjN6cbqN9iUFJSslEul4dz20FeL8/Y0vJ9MDk5eROpXaVSfcMa2KC4uLhnCB5rAKpmpsDm5+fPVavVCdx2m83280xaAV5g8/Ly0mQyWRDB9v44o+aIz0MgAmtI7Uqlkj2w0dHRT3PbYOttDQkJ+YM1sLLIyMh4grzehOohU2Czs7OjIiIi5hLsa+uMu1BfDxQUFCyHeHuSckFAwx7Y2NjYBMqOgT2wIAKPUixEB3Ngw8PD53PbcAsD1V3mwIaGhmoJymWelRjV1wMKhUJLCLYtTIIFN6sgBDBsgg0ODlYSvNcwq5yVE2ysjUmwsEEMJURbTlbBKghiYGcSLOmkEOyslEmweKhBOvJkEixF6cKYBItBNkGOw1kFO0zgbASrYB9w22A7o2FVwfoJwU0Uq2B7CcGNBiyCnEUxuE2IFxRHjx5dwKIHM5HaV61a9RRzYDUaTTupXavVJrK4U+gE9zopFpgzZ84SFmOD8ZGRkVv/C7BIdru9jdumVqsT4UUUzIGF+PU3bltYWFjU6dOnlzIHFpa8kdSelJS0njmw4AR+9ZwVcA861jIHFmTTDko26bho3rx5q2fSk/GOZ51O5xVuGx6F6vX6BObAKpXKWtKWJwuIObDgHH4CuZ2UoREfH78JMMskLBH+yjc8PFxHSDSzbdiwYQFTvzB6gppL3Db81XHPnj1ZzHEWShwmbXK5azKZ6vBdROYkMhKPrmSCMzlsNtsvhESeUZ1OlyAiUG1UVJQuNzf3Vagz4XO0ILAQJxDTTmpqaspFAio/fvx4Gcwz5Em8+PvMmTOHJP4kH3kNqPYk7/yHMH0aPXOgYDdv3ryWmzSMSrx3795FQsCiKFSTuHvs2LHsALmqbG5uvkQa+86dOxmCwIKMPk8asLW19TvcqQsFu2/fvixKJj4qtTDO4l0Dl8v1F0HRHAUFBWsEclXd1dV1lZI0bBCkYBMF5KqMNHBjY+N5VAZ/wZ44cWI3JWnYDtXigMBCifTc6OCmTQ1lZGQ86Q9QCOTnm83mdkrS8PuiJPuCefmINEFDQ0MVmiC+xt9gMJRTkoYtUKlIYPFkUE1zwZTJFpHMGNpGvLfAB+yyZcuWWq3WXsr9htdIqVLJ27Zt23XkyJE3IPrXweeFPMEid8+RJsJ7C8gAH1wNqaur+5SiVHi/Qc4Fq2lqaro8IdywI7h/8eLFU8HBwbi/ivQFlsZdNEHFxcVbpgILDEoFUMOUxLasSUlo4CZfIj2J97kOHDhQCo/gMdGUadEw4SekMTo7O3F3ETOFA7hM4epVYsZcf39/GeXN/r1s1tbWVpuenv4yxtkS+i25WDx0Jo1x9uzZgyRTVlJSkg19xii3RlYTwcIfa90+CN7UWltbW6XRaDZiBEQCDBMfIvUF12xOTU19lusAuru7GylzfTllLiK6dTcPGhoa+vPkyZNvQRdMSOPeQ1CAqblN6tfS0lLjrWzgAIopK4kOYJHPxElo2ATlJh/QPT09jXl5ebugWyJniXU0ibpw4cJKjwNYMDAw0EFxAJW8szyhEScuhTLoCzDGAUaj0ZCYmLgFus73CnKIV60sFguaRBlYmnco42Em/iN+p6TCl6jBVaQtDEEm+4Frx8DUpUJX9DZakN9+zvLiNYG4FStWJIED6KM4AH1A+bMerTTyEY179+61lJaWvg7dloPZwztgdyfeB0oBOoD6+vpzFKUyeVY1sGRfTy73K16Tu6cwdeOgTN+vW7fuxfj4+MfB7S6H5gicLCcnZz1aFUrXrWInqEd4rIbDF2jcllRXV3+sUqnS0UOi5bh+/fq3FK5emc4rVpjf/QMf0RgcHOyqqKg4WFhYuJPiAMb53hoNNETMxCMDPqAh3rBQuPrFTF4LxP3Wm1CG3X4SyPeoP9cGxQA7UfBOzeekbQmNwAFUzPZdcYwzmng4FPNUDmAm/2UARmaFGGXSwIKyFTHz/w0mNpRQPsAV5yhVhy8HMBtgJ0oSFO9z3Uyh57NSf8AGSNlQXoCyQ0hnTIL6R4ABAE7NDc6ERJYLAAAAAElFTkSuQmCC"
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
