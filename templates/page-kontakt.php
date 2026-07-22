<?php
/*
 * Template Name: Kontakt
 */
?>

<?php get_header(); ?>
    <main>
        <section class="hero hero--contact">
            <p class="eyebrow">Kontakt</p>
            <h2>Zacznijmy <em>od rozmowy</em></h2>
            <p class="contact__text">Pierwsze spotkanie jest bezpłatne i niezobowiązujące. Możemy zobaczyć się u Ciebie, w studio, albo online - jak Ci wygodniej</p>
            <a href="" class="link-action link-action--btn">Umów spotkanie</a>
        </section>
        <section class="message">
            <div class="contact-form dark-section message__contact-form">
                <p class="eyebrow">Napisz</p>
                <h2 class="dark-section__header">Albo umów <em>spotkanie</em></h2>
                <form action="" method="post">
                    <label for="user-input">Imię i nazwisko</label>
                    <input type="text" placeholder="Jak się Pan/Pani nazywa" id="user-input" name="username">
                    <label for="user-email">E-mail<span class="required">*</span></label>
                    <input type="email" required placeholder="Ades mailowy" id="user-email" name="email">
                    <label for="user-tel">Telefon</label>
                    <input type="tel" placeholder="Numer telefonu" id="user-tel" name="telephone">
                    <label for="user-message">Wiadomość</label>
                    <textarea placeholder="Opowiedz o swoim wnętrzu i etapie, na którym jesteś" id="user-message" name="message"></textarea>
                    <div class="contact-form__agreement"><input type="checkbox" required name="agreement" value="agree" id="user-agreement">
                    <label for="user-agreement" class="agreement-text">Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z polityką prywatności<span class="required">*</span></label></div>
                    <button type="submit" class="link-action link-action--btn link-action--btn-light">Napisz do mnie</button>
                </form>
                    <p class="contact-form__additionals">lub</p>
                    <a href="" class="link-action link-action--light">Umów bezpłatną konsultację</a>
            </div>
            <div class="message__contact-data">
                <p class="eyebrow">Napisz</p>
                <h2>Karo Studio</h2>
                <p class="contact-data__localization">Kobyłka</p>
                    <address>
                        <p class="contact-data__tel">Telefon</p>
                        <a class="footer__address-data address-data--contact" href="tel:506680413">Tel: 506-680-413</a>
                        <p class="contact-data__e-mail">E-mail</p>
                        <a class="footer__address-data address-data--contact" href="mailto:karoz.studio@gmail.com">e-mail: karoz.studio@gmail.com</a>
                    </address>
                    <p class="contact-data__hours">Godziny pracy</p>
                    <p class="contact-data__working-hours">Pon.-Pt.: 9:00-17:00</p>
                    <p class="contact-data__additionals">Spotkania na budowie po wcześniejszym umówieniu</p>
                    <p class="eyebrow">Lokalizacja</p>
            </div>
        </section>
</main>

<?php get_footer(); ?>