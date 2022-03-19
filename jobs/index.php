<?php
$title = "Работа в компании  | Студия Дизайнов";
$description = "Хотите воплощать свои идеи в дизайне итерьеров? Мы даем такую возможность. Посмотрите актуальный список вакансий на данный момент.";
include __DIR__ . "/../assets/inc/header.php";
?>
    <section class="section vacancies">
        <div class="container">
            <h1 class="vacancies__title title title--center wow fadeInUp">Вакансии</h1>
            <div class="vacancies__list">
                <a href="/jobs/interior_designer" class="item wow fadeInLeft" data-wow-delay="0s">
                    <div class="item__department">В офис</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Дизайнер интерьеров (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
                <a href="/jobs/foreman" class="item wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="item__department">Отдел производства</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Прораб (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
                <a href="/jobs/plumber-tiler" class="item wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="item__department">Отдел производства</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Плиточник-сантехник (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
                <a href="/jobs/plumber-plasterer" class="item wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="item__department">Отдел производства</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Маляр-штукатур (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
                <a href="/jobs/electrician" class="item wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="item__department">Отдел производства</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Электрик (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
                <a href="/jobs/apartment-renovator" class="item wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="item__department">Отдел производства</div>
                    <div class="item__wrap">
                        <h2 class="item__job">Мастер по ремонту квартир (г. Москва)</h2>
                        <div class="item__arrow"></div>
                    </div>
                </a>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/../assets/inc/footer.php"; ?>