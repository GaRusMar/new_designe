<?php
$title = "Комплексные услуги по дизайну интерьера | Студия Дизайнов";
$description = "Разработаем дизайн-проект любой сложности. Есть отдельные виды услуг, так и комплесные решения. Сделаем индивидуально под ваши желания";
include __DIR__ . "/../assets/inc/header.php";
?>
    <section class="section services-list">
        <div class="container">
            <h1 class="services-list__title wow fadeInUp">
                Услуги
            </h1>
            <div class="services-list__list">
                <a href="/planning-solutions" class="item item--hover-dark-green wow fadeInUp">
                    <h2 class="item__title">планировочные решения</h2>
                    <div class="item__description">
                        План с расстановкой мебели и сантехнического оборудования, разработанный с учетом ваших пожеланий и потребностей.
                    </div>
                    <div class="item__price">от 200 руб./кв.м.</div>
                </a>
                <a href="/visualization" class="item item--hover-blue wow fadeInUp">
                    <h2 class="item__title">визуализация</h2>
                    <div class="item__description">Визуальное представление вашего будущего интерьера.</div>
                    <div class="item__price">от 200 руб./кв.м.</div>
                </a>
                <a href="/drawings" class="item item--hover-purple wow fadeInUp">
                    <h2 class="item__title">чертежи</h2>
                    <div class="item__description">
                        Чертежная документация отражает пошагово, как нужно проводить ремонтные работы по конкретному проекту.
                    </div>
                    <div class="item__price">от 1000 руб./кв.м.</div>
                </a>
                <a href="/full-project" class="item item--hover-red wow fadeInUp">
                    <h2 class="item__title">полный проект</h2>
                    <div class="item__description">
                        Включает все проекты (визуализация; чертежи) и контроль реализации проекта дизайнером.
                    </div>
                    <div class="item__price">от 2200 руб./кв.м.</div>
                </a>
                <a href="/additional-services" class="item item--hover-green wow fadeInUp">
                    <h2 class="item__title">дополнительные услуги</h2>
                    <div class="item__description">
                        Если Вам требуется какая либо отдельная услуга, для нас это не проблема. Если вы не нашли в списке, вы можете позвонить нам и уточнить возможность оказать услугу которая требуется вам
                    </div>
                    <div class="item__price">от 250 руб./кв.м.</div>
                </a>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/../assets/inc/footer.php"; ?>