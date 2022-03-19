<?php
$title = 'Дополнительные услуги | Студия Дизайнов';
$description = "Если Вам требуется какая либо отдельная услуга, для нас это не проблема. Если вы не нашли в списке, вы можете позвонить нам и уточнить возможность оказать услугу которая требуется вам";
include __DIR__ . "/../assets/inc/header.php";
?>
    <section class="section service">
        <div class="container">
            <div class="service__wrapper background-green wow fadeInUp">
                <div class="service__center">
                    <h1 class="service__title"><span>дополнительные</span> услуги</h1>
                    <a href="/planning-solutions" class="service__btn btn btn--more">
                        планировочные<br/>
                        решения
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section service-description">
        <div class="container">
            <div class="service-description__columns flex flex-start flex-content-between">
                <div class="column column--left wow fadeInLeft">
                    <h2 class="service-description__title wow fadeInUp">
                        Качественное оказание дополнительных услуг
                    </h2>
                    <p>
                        Если Вам требуется какая либо отдельная услуга, для нас это не проблема. Если вы не нашли в
                        списке, вы можете позвонить нам и уточнить возможность оказать услугу которая требуется вам
                    </p>
                </div>
                <div class="column column--right wow fadeInRight">
                    <div class="service-description__list-price">
                        <div class="item">
                            <h3 class="item__title">Сроки работы</h3>
                            <p class="color-green">1-3 недели</p>
                        </div>
                        <div class="item">
                            <h3 class="item__title">Цена</h3>
                            <p class="color-green">от 250 руб./кв.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service-list">
        <div class="container">
            <h2 class="service-list__title wow fadeInUp">Какие есть виды дополнительных услуг?</h2>
            <div class="service-list__list flex flex-wrap flex-content-between">
                <div class="item wow fadeInUp" data-wow-delay="0s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/1.svg)"></div>
                    <div class="item__body">электропроект</div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/2.svg)"></div>
                    <div class="item__body">авторский надзор</div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/3.svg)"></div>
                    <div class="item__body">подбор материалов</div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/4.svg)"></div>
                    <div class="item__body">реализация проекта</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section description-about">
        <div class="container">
            <div class="description-about__list">
                <div class="description-about__block">
                    <div class="description-about__body wow fadeInLeft">
                        <h2 class="title">Электропроект</h2>
                        <p class="description">
                            Продумывание оптимальных электро-решений вашего помещения.
                        </p>
                        <p class="description color-green">Включён в “Чертежи”, “Основной”, “Полный”</p>
                        <h3 class="title title--small">Что входит в электропроект?</h3>
                        <ul class="list-check">
                            <li class="item">Выезд дизайнера на объект</li>
                            <li class="item">План возведения стен</li>
                            <li class="item">Обмеры помещения</li>
                            <li class="item">План расстановки мебели</li>
                        </ul>
                        <h3 class="title title--small">Цена</h3>
                        <div class="price color-green">от 250 руб./кв.</div>
                    </div>
                    <div class="description-about__img wow fadeInRight">
                        <img src="/assets/img/text-block/5.png" alt="Электропроект"/>
                    </div>
                </div>
                <div class="description-about__block">
                    <div class="description-about__img wow fadeInLeft">
                        <img src="/assets/img/text-block/6.png" alt="Авторский надзор"/>
                    </div>
                    <div class="description-about__body wow fadeInRight">
                        <h2 class="title">Авторский надзор</h2>
                        <p class="description">
                            Выезд дизайнера на объект для контроля работ, а также внесение в рабочие чертежи
                            корректировок и заказ отделочных материалов.
                        </p>
                        <p class="description color-green">
                            Включён в “Полный”
                        </p>
                        <h3 class="title title--small">Что входит в авторский надзор?</h3>
                        <ul class="list-check">
                            <li class="item">Выезд дизайнера на объект</li>
                            <li class="item">
                                Заказ отделочных материалов
                            </li>
                            <li class="item">Внесение в рабочие чертежи корректировок</li>
                        </ul>
                        <h3 class="title title--small">Цена</h3>
                        <div class="price color-green">3000 руб./1 выезд</div>
                    </div>
                </div>
                <div class="description-about__block">
                    <div class="description-about__body wow fadeInLeft">
                        <h2 class="title">Подбор материалов</h2>
                        <p class="description">
                            Индивидуальный подбор осветительных приборов и дизайнерского декора.<br/>
                        </p>
                        <p class="description color-green">Включён в “Основной”</p>
                        <h3 class="title title--small">Что входит в подбор материалов?</h3>
                        <ul class="list-check">
                            <li class="item">
                                Подбор мебели, светильников и отделочных материалов
                            </li>
                            <li class="item">
                                Составление спецификации на материал
                            </li>
                        </ul>
                        <h3 class="title title--small">Цена</h3>
                        <div class="price color-green">от 500 руб./кв.м.</div>
                    </div>
                    <div class="description-about__img wow fadeInRight">
                        <img src="/assets/img/text-block/7.png" alt="Подбор материалов"/>
                    </div>
                </div>
                <div class="description-about__block">
                    <div class="description-about__img wow fadeInLeft">
                        <img src="/assets/img/text-block/8.png" alt="Отделочные работы"/>
                    </div>
                    <div class="description-about__body wow fadeInRight">
                        <h2 class="title">Отделочные работы</h2>
                        <p class="description">
                            Комплекс строительных работ, связанных с наружной и внутренней отделкой зданий и
                            сооружений с целью повышения их эксплуатационных и эстетических качеств
                        </p>
                        <h3 class="title title--small">Что входит в отделочные работы?</h3>
                        <ul class="list-check">
                            <li class="item">
                                Электромонтажные и сантехнические работы
                            </li>
                            <li class="item">Общестроительные работы</li>
                            <li class="item">Установка окон и дверей;</li>
                            <li class="item">
                                Устройство всех видов потолков и напольных покрытий;
                            </li>
                        </ul>
                        <h3 class="title title--small">Цена</h3>
                        <div class="price color-green">от 7000 руб./кв.м.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pluses">
        <div class="container">
            <div class="pluses__list">
                <div class="item wow fadeInUp" data-wow-delay="0s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/cube.svg)"></div>
                    <div class="item__body">
                        Максимально реалистичная 3D проекция кваритры
                    </div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/pen.svg)"></div>
                    <div class="item__body">
                        Черетжи, выполенные по всем правилам
                    </div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item__img" style="background-image: url(/assets/img/additional-project/book.svg)"></div>
                    <div class="item__body">
                        Полный пакет всех необходимых чертежей для дизайна
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/../assets/inc/best_projects.php"; ?>
<?php include __DIR__ . "/../assets/inc/contacts_form.php"; ?>
<?php include __DIR__ . "/../assets/inc/footer.php"; ?>