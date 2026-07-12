<?php
/*
 * Template Name: Strona główna
 */
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_get_document_title()?></title>
    <?php wp_head()?>
</head>
<body>
    <header>
        <a href=""><img class="header__logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>" alt="KARO Studio logo"></a>
        <nav class="navigation">
            <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        ]); ?>
        </nav>
        <button class="header__hamburger">
            <span class="header__line"></span>
            <span class="header__line"></span>
            <span class="header__line"></span>
        </button>
    </header>
    <main>
        <section class="hero hero--home">
            <h2 class="hero__name">Katarzyna Rozbicka</h2>
            <h1 class="section-title hero__title">Architekt wnętrz</h1>
            <p class="hero__description">Wnętrza projektowane raz. Na zawsze.</p>
        </section>
        <section class="o-mnie">
            <img class="o-mnie__zdjecie" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/k-rozbicka-o-mnie.png' ?>" alt="">
            <div class="o-mnie__tekst">
                <p class="eyebrow">O mnie</p>
                <h2>Katarzyna <br><em>Rozbicka</em></h2>
                <p class="o-mnie__opis">Od ponad 10 lat tworzę przestrzenie, które stają się naturalnym przedłużeniem osobowości ich właścicieli. Nie interesuje mnie powtarzalność ani ślepe podążanie za trendami — każdy projekt zaczynam od rozmowy, bo tylko tak można stworzyć wnętrze, które naprawdę trwa.</p>
                <p class="o-mnie__opis">Pracuję kompleksowo — od pierwszego szkicu po nadzór nad realizacją. Moim klientom zapewniam spokój i pewność, że każdy etap jest pod kontrolą.</p>
                <div class="o-mnie__box-liczby">
                    <p class="o-mnie__liczba">
                        <span class="o-mnie__liczba-wartosc" data-target="10">0</span>+ 
                        <span class="o-mnie__liczba-opis">lat praktyki</span>
                    </p>
                    <div class="o-mnie__divider"></div>
                    <p class="o-mnie__liczba">
                        <span class="o-mnie__liczba-wartosc" data-target="60">0</span>+ 
                        <span class="o-mnie__liczba-opis">zrealizowanych wnętrz</span>
                    </p>
                    <div class="o-mnie__divider"></div>
                    <p class="o-mnie__liczba">
                        <span class="o-mnie__liczba-wartosc" data-target="100">0</span>% 
                        <span class="o-mnie__liczba-opis">autorski nadzór</span>
                    </p>
                </div>
                <a class="link-akcja link-akcja--btn" href="">Więcej o mnie</a>
            </div>
        </section>
        <section class="realizacje">
            <p class="eyebrow">Realizacje</p>
            <h2>Przestrzenie, które mówią <em>same za siebie</em></h2>
            <div class="realizacje__projekty">
                <div class="realizacje__projekt">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt1.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-1.jpg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="realizacje__overlay">
                    <p class="realizacje__tytul">Harmonia form i kolorów</p>
                    <p class="realizacje__data">Warszawa - 2023</p>
                </div>
                </div>
                <div class="realizacje__projekt">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt2.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-2.jpg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="realizacje__overlay">
                    <p class="realizacje__tytul">Harmonia form i kolorów</p>
                    <p class="realizacje__data">Warszawa - 2023</p>
                </div>
                </div>
                <div class="realizacje__projekt">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt3.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-3.jpeg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="realizacje__overlay">
                    <p class="realizacje__tytul">Harmonia form i kolorów</p>
                    <p class="realizacje__data">Warszawa - 2023</p>
                </div>
                </div>
            </div>
            <a href="" class="link-akcja">Zobacz wszystkie projekty</a>
        </section>
        <section class="wspolpraca">
            <p class="eyebrow">Współpraca</p>
            <h2>Jak wygląda nasza <em>współpraca</em></h2>
            <div class="wspolpraca__etapy-tekst">
                <div class="wspolpraca__etap">
                    <h3>Projekt koncepcyjny</h3>
                    <p class="wspolpraca__etap-opis">Moodboardy, wizualizacje 3D i pełny plan układu funkcjonalnego. Ustalamy charakter wnętrza, zanim cokolwiek powstanie na budowie.</p>
                </div>
                <div class="wspolpraca__etap">
                    <h3>Projekt techniczny</h3>
                    <p class="wspolpraca__etap-opis">Komplet dokumentacji wykonawczej dla ekipy — rysunki techniczne, zestawienia materiałów, specyfikacje. Bez niedopowiedzeń.</p>
                </div>
                <div class="wspolpraca__etap">
                    <h3>Nadzór i realizacja</h3>
                    <p class="wspolpraca__etap-opis">Jestem na budowie, koordynuję wykonawców i dostawców. Decyzje podejmujemy razem, ale ciężar przenoszę na siebie.</p>
                </div>
            </div>
            <div class="wspolpraca__etapy-box">
                <div class="wspolpraca__liczby">
                    <p class="etap__numer">01</p>
                    <p class="etap__podpis">Rozmowa i brief</p>
                </div>
                <div class="wspolpraca__liczby">
                    <p class="etap__numer"><span class="etap__linia"></span>02</p>
                    <p class="etap__podpis">Projekt koncepcyjny</p>
                </div>
                <div class="wspolpraca__liczby">
                    <p class="etap__numer"><span class="etap__linia"></span>03</p>
                    <p class="etap__podpis">Projekt techniczny</p>
                </div>
                <div class="wspolpraca__liczby">
                    <p class="etap__numer"><span class="etap__linia"></span>04</p>
                    <p class="etap__podpis">Realizacja i nadzór</p>
                </div>
            </div>
            <div class="linki">
                <a href="" class="link-akcja link-akcja--btn">Porozmawiajmy o Twoim projekcie</a>
                <a href="" class="link-akcja">Dowiedz się więcej</a>
            </div>
        </section>
        <section class="faq faq--home">
            <p class="eyebrow">Pytania</p>
            <h2>Najczęściej zadawane <em>pytania</em></h2>
            <div class="faq__pytania-box">
                <div class="faq__pytanie">
                    <button class="faq__pytanie-naglowek">Jak długo trwa proces projektowania?
                        <span class="faq__ikona">+</span>
                    </button>
                <div class="faq__odpowiedz">
                    <p>Wykonanie projektu od koncepcji aż do rysunków technicznych zwykle trwa ok. 3-4 miesięcy w zależności od wielkości. Umów się na konsultację, a powiem Ci ile czasu zajmie przygotowanie Twojego projektu.</p>
                </div>
                </div>
                <div class="faq__pytanie">
                    <button class="faq__pytanie-naglowek">Co muszę przygotować na pierwszą konsultację?
                        <span class="faq__ikona">+</span>
                    </button>
                <div class="faq__odpowiedz">
                    <p>Nie potrzebujesz nic przygotowywać. Zadam Ci wszystkie potrzebne pytania, które pozwolą poznać mi Twoje potrzeby i oczekiwania do współpracy ze mną.</p>
                </div>
                </div>
                <div class="faq__pytanie">
                    <button class="faq__pytanie-naglowek">Z jakim wyprzedzeniem należy zgłosić się po projekt?
                        <span class="faq__ikona">+</span>
                    </button>
                <div class="faq__odpowiedz">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
                <div class="faq__pytanie">
                    <button class="faq__pytanie-naglowek">Jaki jest koszt projektu wnętrz?
                        <span class="faq__ikona">+</span>
                    </button>
                <div class="faq__odpowiedz">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
                <div class="faq__pytanie">
                    <button class="faq__pytanie-naglowek">Czy współpracuje Pani z ekipami wykończeniowymi?
                        <span class="faq__ikona">+</span>
                    </button>
                <div class="faq__odpowiedz">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
            </div>
        </section>
        <section class="kontakt-form">
            <p class="eyebrow">Kontakt</p>
            <h2 class="kontakt-form__header">Zacznijmy <em>od rozmowy</em></h2>
            <p class="info">Pierwsze spotkanie jest bezpłatne i niezobowiązujące</p>
            <form action="" method="post">
                <label for="user-input">Imię i nazwisko</label>
                <input type="text" placeholder="Jak się Pan/Pani nazywa" id="user-input" name="username">
                <label for="user-email">E-mail<span class="wymagane">*</span></label>
                <input type="email" required placeholder="Ades mailowy" id="user-email" name="email">
                <label for="user-tel">Telefon</label>
                <input type="tel" placeholder="Numer telefonu" id="user-tel" name="telephone">
                <label for="user-message">Wiadomość</label>
                <textarea placeholder="Opowiedz o swoim wnętrzu i etapie, na którym jesteś" id="user-message" name="message"></textarea>
                <div class="kontakt-form__zgoda"><input type="checkbox" required name="agreement" value="agree" id="user-agreement">
                <label for="user-agreement" class="agreement-text">Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z polityką prywatności<span class="wymagane">*</span></label></div>
                <button type="submit" class="link-akcja link-akcja--btn kontakt-form__button">Wyślij</button>
            </form>
                <p class="kontakt-form__dodatki">lub</p>
                <a href="" class="link-akcja link-akcja--jasny">Umów bezpłatną konsultację</a>
        </section>
    </main>

    <footer>
        <div class="footer__column">
            <div class="footer__name-box">
                <h4 class="footer__contact-header">KARO Studio</h4>
                <p class="footer__name">Katarzyna Rozbicka</p>
            </div>
            <address>
                <p class="footer__address-data">ul. Zaciszna 22c</p>
                <p class="footer__address-data">05-230 Kobyłka</p>
            </address>
        </div>
        <div class="footer__column">
            <h4 class="footer__contact-header footer__contact-header--second">Kontakt</h4>
            <address>
                <a class="footer__address-data" href="tel:506680413">Tel: 506-680-413</a>
                <a class="footer__address-data" href="mailto:karoz.studio@gmail.com">e-mail: karoz.studio@gmail.com</a>
            </address>
        </div>
        <div class="footer__column footer__column-links">
            <a href="">Polityka prywatności</a>
            <a href="">Polityka cookies</a>
            <a href="https://www.facebook.com/profile.php?id=100090548520092&sk=directory_links" class="footer__social-link"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Facebook_Logo_Secondary.png' ?>" alt="Facebook" class="footer__social-icon"></a>
            <a href="https://www.instagram.com/karo.interiordesign/?utm_source=ig_web_button_share_sheet" class="footer__social-link"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Instagram_Glyph_White.png' ?>" alt="Instagram" class="footer__social-icon"></a>
        </div>
        <p class="footer__copyright">© 2025 KARO Studio. Wszelkie prawa zastrzeżone.<br>rajo.projekt</p>
    </footer>
<?php wp_footer()?>
</body>
</html>