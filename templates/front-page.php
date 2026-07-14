<?php
/*
 * Template Name: Strona główna
 */
?>

<?php get_header(); ?>
    <main>
        <section class="hero hero--home">
            <h2 class="hero__name">Katarzyna Rozbicka</h2>
            <h1 class="section-title hero__title">Architekt wnętrz</h1>
            <p class="hero__description">Wnętrza projektowane raz. Na zawsze.</p>
        </section>
        <section class="about-me">
            <img class="about-me__picture" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/k-rozbicka-o-mnie.png' ?>" alt="">
            <div class="about-me__text">
                <p class="eyebrow">O mnie</p>
                <h2>Katarzyna <br><em>Rozbicka</em></h2>
                <p class="about-me__description">Od ponad 10 lat tworzę przestrzenie, które stają się naturalnym przedłużeniem osobowości ich właścicieli. Nie interesuje mnie powtarzalność ani ślepe podążanie za trendami — każdy projekt zaczynam od rozmowy, bo tylko tak można stworzyć wnętrze, które naprawdę trwa.</p>
                <p class="about-me__description">Pracuję kompleksowo — od pierwszego szkicu po nadzór nad realizacją. Moim klientom zapewniam spokój i pewność, że każdy etap jest pod kontrolą.</p>
                <div class="about-me__box-numbers">
                    <p class="about-me__number">
                        <span class="about-me__number-value" data-target="10">0</span>+ 
                        <span class="about-me__number-description">lat praktyki</span>
                    </p>
                    <div class="about-me__divider"></div>
                    <p class="about-me__number">
                        <span class="about-me__number-value" data-target="60">0</span>+ 
                        <span class="about-me__number-description">zrealizowanych wnętrz</span>
                    </p>
                    <div class="about-me__divider"></div>
                    <p class="about-me__number">
                        <span class="about-me__number-value" data-target="100">0</span>% 
                        <span class="about-me__number-description">autorski nadzór</span>
                    </p>
                </div>
                <a class="link-action link-action--btn" href="">Więcej o mnie</a>
            </div>
        </section>
        <section class="works">
            <p class="eyebrow">Realizacje</p>
            <h2>Przestrzenie, które mówią <em>same za siebie</em></h2>
            <div class="works__projects">
                <div class="works__single-project">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt1.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-1.jpg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="works__overlay">
                    <p class="works__title">Harmonia form i kolorów</p>
                    <p class="works__place-date">Warszawa - 2023</p>
                </div>
                </div>
                <div class="works__single-project">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt2.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-2.jpg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="works__overlay">
                    <p class="works__title">Harmonia form i kolorów</p>
                    <p class="works__place-date">Warszawa - 2023</p>
                </div>
                </div>
                <div class="works__single-project">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/material-projekt3.png' ?>" alt="" class="realizacje__material">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-3.jpeg' ?>" alt="" class="realizacje__wizualizacja">
                <div class="works__overlay">
                    <p class="works__title">Harmonia form i kolorów</p>
                    <p class="works__place-date">Warszawa - 2023</p>
                </div>
                </div>
            </div>
            <a href="" class="link-action">Zobacz wszystkie projekty</a>
        </section>
        <section class="collab">
            <p class="eyebrow">Współpraca</p>
            <h2>Jak wygląda nasza <em>współpraca</em></h2>
            <div class="collab__stages-text">
                <div class="collab__stage">
                    <h3>Projekt koncepcyjny</h3>
                    <p class="collab__stage-description">Moodboardy, wizualizacje 3D i pełny plan układu funkcjonalnego. Ustalamy charakter wnętrza, zanim cokolwiek powstanie na budowie.</p>
                </div>
                <div class="collab__stage">
                    <h3>Projekt techniczny</h3>
                    <p class="collab__stage-description">Komplet dokumentacji wykonawczej dla ekipy — rysunki techniczne, zestawienia materiałów, specyfikacje. Bez niedopowiedzeń.</p>
                </div>
                <div class="collab__stage">
                    <h3>Nadzór i realizacja</h3>
                    <p class="collab__stage-description">Jestem na budowie, koordynuję wykonawców i dostawców. Decyzje podejmujemy razem, ale ciężar przenoszę na siebie.</p>
                </div>
            </div>
            <div class="collab__stages-box">
                <div class="collab__numbers">
                    <p class="stage__number">01</p>
                    <p class="stage__text">Rozmowa i brief</p>
                </div>
                <div class="collab__numbers">
                    <p class="stage__number"><span class="stage__line"></span>02</p>
                    <p class="stage__text">Projekt koncepcyjny</p>
                </div>
                <div class="collab__numbers">
                    <p class="stage__number"><span class="stage__line"></span>03</p>
                    <p class="stage__text">Projekt techniczny</p>
                </div>
                <div class="collab__numbers">
                    <p class="stage__number"><span class="stage__line"></span>04</p>
                    <p class="stage__text">Realizacja i nadzór</p>
                </div>
            </div>
            <div class="links">
                <a href="" class="link-action link-action--btn">Porozmawiajmy o Twoim projekcie</a>
                <a href="" class="link-action">Dowiedz się więcej</a>
            </div>
        </section>
        <section class="faq faq--home">
            <p class="eyebrow">Pytania</p>
            <h2>Najczęściej zadawane <em>pytania</em></h2>
            <div class="faq__question-box">
                <div class="faq__question">
                    <button class="faq__question-header">Jak długo trwa proces projektowania?
                        <span class="faq__icon">+</span>
                    </button>
                <div class="faq__answer">
                    <p>Wykonanie projektu od koncepcji aż do rysunków technicznych zwykle trwa ok. 3-4 miesięcy w zależności od wielkości. Umów się na konsultację, a powiem Ci ile czasu zajmie przygotowanie Twojego projektu.</p>
                </div>
                </div>
                <div class="faq__question">
                    <button class="faq__question-header">Co muszę przygotować na pierwszą konsultację?
                        <span class="faq__icon">+</span>
                    </button>
                <div class="faq__answer">
                    <p>Nie potrzebujesz nic przygotowywać. Zadam Ci wszystkie potrzebne pytania, które pozwolą poznać mi Twoje potrzeby i oczekiwania do współpracy ze mną.</p>
                </div>
                </div>
                <div class="faq__question">
                    <button class="faq__question-header">Z jakim wyprzedzeniem należy zgłosić się po projekt?
                        <span class="faq__icon">+</span>
                    </button>
                <div class="faq__answer">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
                <div class="faq__question">
                    <button class="faq__question-header">Jaki jest koszt projektu wnętrz?
                        <span class="faq__icon">+</span>
                    </button>
                <div class="faq__answer">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
                <div class="faq__question">
                    <button class="faq__question-header">Czy współpracuje Pani z ekipami wykończeniowymi?
                        <span class="faq__icon">+</span>
                    </button>
                <div class="faq__answer">
                    <p>Treść odpowiedzi</p>
                </div>
                </div>
            </div>
        </section>
        <section class="contact-form dark-section">
            <p class="eyebrow">Kontakt</p>
            <h2 class="dark-section__header">Zacznijmy <em>od rozmowy</em></h2>
            <p class="info">Pierwsze spotkanie jest bezpłatne i niezobowiązujące</p>
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
                <button type="submit" class="link-action link-action--btn link-action--btn-light">Wyślij</button>
            </form>
                <p class="contact-form__additionals">lub</p>
                <a href="" class="link-action link-action--light">Umów bezpłatną konsultację</a>
        </section>
    </main>

<?php get_footer(); ?>