<section class="feedback feedback--apply wow fadeInUp">
    <div class="container">
        <h2 class="feedback__title">Откликнуться на вакансию</h2>
        <form id="jobsForm" class="form form--apply" action="/zzzzerpolf23cvfdcva2gh_r.php" method="POST" enctype="multipart/form-data">
            <div class="form__group form__group--apply">
                <div class="group group--apply">
                    <input type="text" id="name"
                    class="form__control form__control--apply form__control--line-tablet"
                    name="name" placeholder="Как вас зовут?" required />
                    <input type="text" id="phone_input"
                    class="form__control form__control--apply form__control--multi form__control--line-tablet"
                    name="phone"  placeholder="+7 (___) ___-__-__" maxlength="18" required />
                    <textarea id="comment" class="form__control textarea textarea--apply" rows="1" cols="45"
                    name="text"
                    placeholder="Комментарий"></textarea>
                    <?php include __DIR__ . "/../../assets/inc/inputs.php"; ?>
                </div>
            </div>
            <div class="form__group">
                <div class="upload-file">
                    <input type="file" name="userfile[]" id="upload-file" hidden="hidden">
                    <button type="button" id="upload-button" class="upload-button">
                        Прикрепить файл
                    </button>
                    <span id="upload-text" class="upload-text">Файл не выбран</span>
                </div>
            </div>
            <div class="form__group">
                <div class="group group--politic ">
                    <input type="checkbox" id="politic" checked />
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