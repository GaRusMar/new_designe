<?php
$title = "Контактные данные компании | Студия Дизайнов";
$description = "Если у вас остались вопросы или есть какие-либо предложения, то вы можете позвонить нам или воспользоваться формой обратной связи";
include __DIR__ . "/../assets/inc/header.php";
?>
    <section class="contact">
        <div class="container">
            <div class="contact__columns">
                <div class="column column--left wow fadeInLeft">
                    <h1 class="contact__title">
                        Контакты
                    </h1>
                    <h2 class="contact__description">
                        Будем рады быть с вами на связи!
                    </h2>
                    <div class="contact__tabs">
                        <input type="radio" name="tabs" id="input-1" checked class="tab-switch tab-switch--1">
                        <label for="input-1" class="tab-label tab-label--contact">Контакты</label>
                        <input type="radio" name="tabs" id="input-2" class="tab-switch tab-switch--2">
                        <label for="input-2" class="tab-label tab-label--write">Написать</label>
                        <div class="contact__pages">
                            <div class="contact__page contact__page--info" id="page-1">
                                <div class="contact__list flex flex-column">
                                    <a href="tel:+74954142240" class="item">+7 (495) 414 22 40</a>
                                    <a href="mailto:info@stud.ru" class="item">info@stud.ru - общие вопросы</a>
                                    <a href="mailto:kp@studiya-dizaynov.ru" class="item">kp@studiya-dizaynov.ru - по вопросам сотрудничества</a>
                                </div>
                                <p class="contact__page-description">
                                    Комфортный офис на Пресненской набережной 12, Башня Федерация Восток, этаж
                                    42,
                                    офис 4203 с красивым видом из окон. Чай-кофе, иногда танцуем.
                                </p>
                            </div>
                            <div class="contact__page contact__page--feedback" id="page-2">
                                <form class="form form--contacts">
                                    <div class="form__group form__group--contacts">
                                        <div class="group">
                                            <input type="text" id="name"
                                                   class="form__control form__control--line-tablet form__control--contacts"
                                                   name="name" placeholder="Имя"/>
                                            <input type="text" id="mail"
                                                   class="form__control form__control--line-tablet form__control--contacts"
                                                   name="mail" placeholder="E-mail"/>
                                            <input type="text" id="phone_input"
                                                   class="form__control form__control--contacts" name="phone"
                                                   placeholder="+7 (___) ___-__-__" maxlength="18"/>
                                            <textarea id="comment" class="form__control textarea textarea--contacts"
                                                      rows="1"
                                                      cols="45" name="text" placeholder="Напишите нам"></textarea>
                                        </div>
                                    </div>
                                    <div class="form__group">
                                        <div class="upload-file upload-file--contacts">
                                            <input type="file" id="upload-file" hidden="hidden">
                                            <button type="button" id="upload-button"
                                                    class="upload-button upload-button--contacts">
                                                Прикрепить файл
                                            </button>
                                            <span id="upload-text" class="upload-text">Файл не выбран</span>
                                        </div>
                                    </div>
                                    <div class="form__group">
                                        <div class="group group--politic">
                                            <input type="checkbox" id="politic"/>
                                            <label for="politic" class="check-box check-box--contacts"></label>
                                            <p class="form__politic-description form__politic-description--contacts">
                                                Настоящим подтверждаю, что я ознакомлен и согласен
                                                <a href="/">
                                                    с политикой
                                                    обработки персональных данных.
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form__group form__group--submit">
                                        <button type="submit" class="form__btn form__btn--big form__btn--submit">
                                            Отправить
                                        </button>
                                        <p class="recaptcha">
                                            Этот сайт защищен reCAPTCHA и применяются Политика
                                            конфиденциальности и
                                            Условия обслуживания Google.
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column column--right wow fadeInRight">
                    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=32d21403-2264-4176-b1e1-c678f209896b"></script>
                    <div class="contact__map" id="map" style="height: 775px; width: 1015px;">
                        <!--<img height="775" width="1015" src="/assets/img/map.png" alt="Карта"/>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include __DIR__ . "/../assets/inc/footer.php"; ?>