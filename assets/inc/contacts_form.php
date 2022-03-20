<section class="feedback wow fadeInUp">
    <div class="container">
        <h2 class="feedback__title title title--center">Хотите работать с нами?</h2>
        <p class="feedback__description">
            Оставьте заявку, с вами свяжется наш менеджер и расскажет все детали. Или звоните по телефону
            <a href="tel:+74954142240" class="phone">+7 495 414-22-40</a>
        </p>
        <form id="contactsForm" class="form" action="/zzzzerpolf23cvfdcva2gh.php" method="post">
            <div class="form__group form__group--feedback">
                <input type="text" id="phone_input" class="form__control form__control--feedback" name="phone"
                       placeholder="+7 (___) ___-__-__" maxlength="18" required />
                <button type="submit" class="form__btn form__btn--feedback form__btn--submit">Оставить заявку</button>
                <div class="group group--politic group--politic-feedback">
                    <input type="checkbox" id="politic_contacts_form" name="policy" checked />
                    <label for="politic_contacts_form" class="check-box"></label>
                    <?php include "inputs.php"; ?>
                    <p class="form__politic-description">
                        Настоящим подтверждаю, что я<br/>
                        ознакомлен и согласен
                        <a href="/politika-obrabotki-personalnyh-dannyh/">
                            с политикой<br/>
                            обработки персональных данных.
                        </a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</section>