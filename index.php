<?php
$srvr = $_SERVER['SERVER_NAME'];
$srrr = $_SERVER['REQUEST_URI'];
include 'utm2.php';
?>

<?php
$title = "Дизайн-проект для вашей квартиры, заказать дизайн интерьера у студии | Студия Дизайнов";
$description = "Современный дизайн интерьера под ключ.Разработка проекта, подбор материалов, рекомендации, работа с профессионалами.";
include __DIR__ . "/assets/inc/header.php";
?>
    <section class="section first-screen">
        <div class="container">
            <div class="first-screen__wrapper">
                <div class="first-screen__center">
                    <h1 class="first-screen__title wow fadeInUp"><span>Профессиональная</span> разработка дизайна
                        интерьера с
                        последующей реализацией под ключ</h1>
                    <p class="first-screen__description wow fadeInUp">
                        Работая с нами Вы экономите Ваш самый главный ресурс — время, потому что все услуги вы получаете
                        в одном месте : дизайн интерьера, комплектацию и расстановку мебели.
                    </p>
                </div>
                <div class="first-screen__bottom">
                    <button class="first-screen__button btn btn--more btn--modal wow fadeInLeft">Оставить заявку
                    </button>
                    <div class="social-list social-list--first-screen wow fadeInRight">
                        <a href="https://www.instagram.com/studia.dizaynov/" class="item item--first-screen">
                            <p class="description description--first-screen">Мы в Instagram</p>
                            <div class="img img--instagram img--invert"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section company">
        <div class="container">
            <h2 class="company__title title title--center wow fadeInUp">О компании</h2>
            <div class="company__wrapper wow fadeInUp">
                <p class="company__description">
                    Мы cоздаем дизайн<br/>
                    превращая квартиры<br/>
                    в искусство
                </p>
                <div class="company__img" style="background-image: url(/assets/img/main-img.png);"></div>
            </div>
        </div>
    </section>
    <section class="section company-description">
        <div class="container">
            <div class="company-description__columns columns">
                <div class="company-description__column column column--left wow fadeInLeft">
                    <h3 class="company-description__title">
                        Современный дизайн от идеи до полной реализации
                    </h3>
                    <p>
                        Осуществление дизайн-проектов интерьера – это то, чем весьма успешно занимается наша дружная
                        команда на протяжении длительного времени.
                    </p>
                    <p>
                        При любых обстоятельствах мы успешно решаем художественную и созидательную задачу реализации
                        тяготения любого человека к комфорту и эстетике.
                    </p>
                </div>
                <div class="company-description__column column column--right flex flex-center flex-content-center only-tablet wow fadeInRight">
                    <h3 class="company-description__title-design">Студия
                        <span>Дизайнов</span>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section company-pluses">
        <div class="container">
            <div class="company-pluses__list">
                <div class="item wow fadeInUp" data-wow-delay="0s">
                    <div class="item__img item__img--departure-designer"></div>
                    <div class="item__body">
                        <h3 class="item__title">Бесплатный выезд <span>дизайнера</span></h3>
                        <p class="item__description">Дизайнер согласно Вашим пожеланиям и вкусам, предложит оптимальный
                            дизайн-проект, и по другим
                            вопросам.</p>
                    </div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="item__img item__img--minimum-amount"></div>
                    <div class="item__body">
                        <h3 class="item__title">Работаем от 5000 <span>рублей</span></h3>
                        <p class="item__description">Выполняем дизайн-проекты маленьких комнат, предоставляем разовые
                            консультации и авторский
                            надзор.</p>
                    </div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item__img item__img--save-budget"></div>
                    <div class="item__body">
                        <h3 class="item__title">Экономим бюджет и время <span>за счет дизайн-проекта</span></h3>
                        <p class="item__description">Эффективный и безопасный ремонт позволит Вам сэкономить деньги и
                            время в процессе ремонтных
                            работ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section work">
        <div class="container">
            <h2 class="work__title title title--center wow fadeInUp">Последние работы</h2>
            <div class="work__list">
                <a href="/projects/bedroom_design" class="work__item work__item--two-widths wow fadeInUp" data-wow-delay="0s" style="background-image: url(/assets/img/works-list/1.png)">
                    <h3 class="work__title">
                        Дизайн спальни в стиле
                        <br/>
                        Модерн на Таганской
                    </h3>
                    <div class="work__tags">
                        <div class="work__tag">Спальня</div>
                        <div class="work__tag">Модерн</div>
                        <div class="work__tag">Визуализация</div>
                    </div>
                </a>
                <a href="/projects/selection_materials" class="work__item wow fadeInUp" data-wow-delay="0.1s" style="background-image: url(/assets/img/works-list/2.png)">
                    <h3 class="work__title">Ванная комната в стиле Лофт на Машиностроительной</h3>
                    <div class="work__tags">
                        <div class="work__tag">Ванная</div>
                        <div class="work__tag">Лофт</div>
                        <div class="work__tag">Дополнительные услуги</div>
                    </div>
                </a>
                <a href="/projects/kitchen_design_tverskaya" class="work__item wow fadeInUp" data-wow-delay="0.2s" style="background-image: url(/assets/img/works-list/3.png)">
                    <h3 class="work__title">Дизайн кухни в Японском стиле на Тверской</h3>
                    <div class="work__tags">
                        <div class="work__tag">Кухня</div>
                        <div class="work__tag">Модерн</div>
                        <div class="work__tag">Планировочные решения</div>
                    </div>
                </a>
                <a href="/projects/drawings_apartment_leningradskaya" class="work__item work__item--only-desktop wow fadeInUp" data-wow-delay="0.1s" style="background-image: url(/assets/img/works-list/4.png)">
                    <h3 class="work__title work__title--black">Чертежи однокомнатной квартиры на Ленинградской</h3>
                    <div class="work__tags">
                        <div class="work__tag">1-комнатная</div>
                        <div class="work__tag">Чертежи</div>
                    </div>
                </a>
                <a href="/projects/сhildren_room" class="work__item work__item--only-desktop wow fadeInUp" data-wow-delay="0.2s" style="background-image: url(/assets/img/works-list/5.png)">
                    <h3 class="work__title">Детская комната в стиле Арт-деко на Конева</h3>
                    <div class="work__tags">
                        <div class="work__tag">Детская</div>
                        <div class="work__tag">Арт-деко</div>
                        <div class="work__tag">Визуализация</div>
                    </div>
                </a>
                <a href="/projects/сabinet_design" class="work__item work__item--only-desktop wow fadeInUp" data-wow-delay="0.1s" style="background-image: url(/assets/img/works-list/6.png)">
                    <h3 class="work__title">Дизайн офиса в стиле Минимализм на Карла Маркса</h3>
                    <div class="work__tags">
                        <div class="work__tag">Офис</div>
                        <div class="work__tag">Минимализм</div>
                        <div class="work__tag">Полный проект</div>
                    </div>
                </a>
                <a href="/projects/bathroom_design"
                   class="work__item work__item--two-widths work__item--only-desktop wow fadeInUp" data-wow-delay="0.2s" style="background-image: url(/assets/img/works-list/7.png)">
                    <h3 class="work__title work__title--black">
                        Дизайн ванной комнаты
                        <br/>
                        в стиле Минимализм
                        <br/>
                        на Бумажном проезде 2\2
                    </h3>
                    <div class="work__tags">
                        <div class="work__tag">Ванная</div>
                        <div class="work__tag">Минимализм</div>
                        <div class="work__tag">Дополнительные услуги</div>
                    </div>
                </a>
            </div>
            <a href="/vse-dizayn-proekty" class="work__btn btn btn--more wow fadeInUp">Посмотреть все работы</a>
        </div>
    </section>
    <section class="section services">
        <div class="container">
            <h2 class="services__title title title--center wow fadeInUp">Услуги</h2>
            <div class="services__list">
                <div class="services__item wow fadeInUp" data-wow-delay="0s">
                    <div class="img img--planning-solutions"></div>
                    <h3 class="title">Планировочные решения</h3>
                    <div class="time"><span>1-3 недели</span><span>от 200 руб./кв.м.</span></div>
                    <div class="list-work">
                        <div class="item">Выезд дизайнера на объект</div>
                        <div class="item">Обмеры помещений</div>
                        <div class="item">План возведения стен</div>
                        <div class="item">План расстановки мебели</div>
                    </div>
                    <a href="/planirovochnye-resheniya" class="button">Выбрать услугу</a>
                </div>
                <div class="services__item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img img--visualization"></div>
                    <h3 class="title">Визуализация</h3>
                    <div class="time"><span>1-3 недели</span><span>от 200 руб./кв.м</span></div>
                    <div class="list-work">
                        <div class="item">Обмер жилых помещений</div>
                        <div class="item">
                            3D визуализация (по 1 виду помещения)
                        </div>
                    </div>
                    <a href="/visualization" class="button">Выбрать услугу</a>
                </div>
                <div class="services__item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img img--blueprints"></div>
                    <h3 class="title">Чертежи</h3>
                    <div class="time"><span>1-3 недели</span><span>от 1000 руб./кв.м.</span></div>
                    <div class="list-work">
                        <div class="item">
                            Обмеры; перепланировка; планировочное решение (до 3х вариантов)
                        </div>
                        <div class="item">
                            Консультирование заказчика; рабочие чертежи.
                        </div>
                    </div>
                    <a href="/drawings" class="button">Выбрать услугу</a>
                </div>
            </div>
            <div class="services__buttons wow fadeInUp">
                <a href="/uslugi" class="services__button btn btn--more">Посмотреть все услуги</a>
                <div class="services__arrows">
                    <button type="button" class="services__arrow services__arrow-prev"></button>
                    <button type="button" class="services__arrow services__arrow-next"></button>
                </div>
            </div>
        </div>
    </section>
    <section class="section instagram">
        <div class="container">
            <h2 class="instagram__title title title--center wow fadeInUp">Мы в Instagram</h2>
            <p class="instagram__description wow fadeInUp">
                Также мы есть в <a href="https://www.instagram.com/studia.dizaynov/">Instagram</a>, где вы можете посмотреть все наши
                работы или узнать что то новое для<br/>
                себя о дизайне интерьеров. Контент разнообразный и интересный, подобран на основе актуальных тем.
            </p>
            <div class="instagram__list">
                <a class="fancybox instagram__item wow fadeInUp" data-wow-delay="0s" rel="gallery1"
                   href="/assets/img/list-img/1.png">
                    <img alt="дизайн интерьера" src="/assets/img/list-img/1.png"/>
                </a>
                <a class="fancybox instagram__item instagram__item--two-widths wow fadeInUp" data-wow-delay="0.1s"
                   rel="gallery1"
                   href="/assets/img/list-img/2.png">
                    <img alt="дизайн интерьера" src="/assets/img/list-img/2.png"/>
                </a>
                <a class="fancybox instagram__item wow fadeInUp" data-wow-delay="0s" rel="gallery1"
                   href="/assets/img/list-img/3.png">
                    <img alt="дизайн интерьера" src="/assets/img/list-img/3.png"/>
                </a>
                <a class="fancybox instagram__item instagram__item--only-desktop wow fadeInUp" data-wow-delay="0.1s"
                   rel="gallery1"
                   href="/assets/img/list-img/4.png">
                    <img alt="дизайн интерьера" src="/assets/img/list-img/4.png"/>
                </a>
                <a class="fancybox instagram__item instagram__item--only-desktop wow fadeInUp" data-wow-delay="0.2s"
                   rel="gallery1"
                   href="/assets/img/list-img/5.png">
                    <img alt="дизайн интерьера" src="/assets/img/list-img/5.png"/>
                </a>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/assets/inc/contacts_form.php"; ?>
<?php include __DIR__ . "/assets/inc/footer.php"; ?>