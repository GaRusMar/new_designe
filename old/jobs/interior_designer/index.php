<?php include __DIR__ . "/../../assets/inc/header.php"; ?>
    <section class="section vacancy">
        <div class="container">
            <div class="vacancy__wrapper">
                <h1 class="vacancy__title title wow fadeInUp">
                    <span>В офис</span>
                    Дизайнер интерьеров (г. Москва)
                </h1>
                <div class="vacancy__list">
                    <div class="item wow fadeInUp">
                        <h2 class="item__title">Требования:</h2>
                        <div class="item__list-duties">
                            <div class="duty">Профильное образование или опыт работы в студиях от 2-х лет</div>
                            <div class="duty">Уверенное владение графическими программами: PhotoShop, 3Ds MAX или
                                illustrator. Приветствуется: AutoCAD, Archicad, SketchUp и т. п
                            </div>
                            <div class="duty">Готовность параллельно вести несколько объектов по г. Москве и МО</div>
                            <div class="duty">Опыт составления рабочих чертежей</div>
                            <div class="duty">Обязательное наличие собственного портфолио</div>
                            <div class="duty">Знание актуальных тенденций в интерьере</div>
                            <div class="duty">Умение мыслить нестандартно</div>
                            <div class="duty">Пунктуальность и работоспособность</div>
                        </div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h2 class="item__title">Обязанности:</h2>
                        <div class="item__list-duties">
                            <div class="duty">Общение с заказчиком</div>
                            <div class="duty">Составление обмеров помещений</div>
                            <div class="duty">Творческий подход к решению нестандартных задач</div>
                            <div class="duty">Ведение рабочей документации в AutoCad или Archicad</div>
                            <div class="duty">Создание 3D визуализации квартиры</div>
                            <div class="duty">Подбор комплектующих элементов интерьера и согласование с Заказчиком</div>
                            <div class="duty">Сопровождение проекта (авторский надзор)</div>
                        </div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h2 class="item__title">Условия:</h2>
                        <div class="item__list-duties">
                            <div class="duty">Работа в г. Москве в динамичной компании по ремонту и обустройству
                                квартир, офисов, коттеджей;
                            </div>
                            <div class="duty">Гибкий график работы;</div>
                            <div class="duty">Зарплата сдельная;</div>
                            <div class="duty">Объекты в Москве и МО (не далее 15 км от МКАД)</div>
                            <div class="duty">Заработная плата без задержек</div>
                            <div class="duty">Возможность работать удаленно</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback feedback--apply wow fadeInUp">
        <div class="container">
            <h2 class="feedback__title">Откликнуться на вакансию</h2>
            <form class="form form--apply">
                <div class="form__group form__group--apply">
                    <div class="group group--apply">
                        <input type="text" id="name"
                               class="form__control form__control--apply form__control--line-tablet"
                               name="name" placeholder="Как вас зовут?"/>
                        <input type="text" id="mail"
                               class="form__control form__control--apply form__control--line-tablet"
                               name="mail" placeholder="E-mail или телефон"/>
                        <textarea id="comment" class="form__control textarea textarea--apply" rows="1" cols="45"
                                  name="text"
                                  placeholder="Комментарий"></textarea>
                    </div>
                </div>
                <div class="form__group">
                    <div class="upload-file">
                        <input type="file" id="upload-file" hidden="hidden">
                        <button type="button" id="upload-button" class="upload-button">
                            Прикрепить файл
                        </button>
                        <span id="upload-text" class="upload-text">Файл не выбран</span>
                    </div>
                </div>
                <div class="form__group">
                    <div class="group group--politic ">
                        <input type="checkbox" id="politic"/>
                        <label for="politic" class="check-box"></label>
                        <p class="form__politic-description form__politic-description--apply">
                            Настоящим подтверждаю, что я
                            ознакомлен и согласен
                            <a href="/policy">
                                с политикой
                                обработки персональных данных.
                            </a>
                        </p>
                    </div>
                </div>
                <div class="form__group">
                    <button type="submit" class="form__btn form__btn--submit form__btn--big">
                        Откликнуться
                    </button>
                </div>
            </form>
        </div>
    </section>
<?php include __DIR__ . "/../../assets/inc/footer.php";
