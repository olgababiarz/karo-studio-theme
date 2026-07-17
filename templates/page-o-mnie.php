<?php
/*
 * Template Name: O mnie
 */
?>

<?php get_header(); ?>
    <main>
    <section class="about-me">
            <img class="about-me__picture" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/o-mnie-k-rozbicka.jpg' ?>" alt="">
            <div class="about-me__text">
                <p class="eyebrow">O mnie</p>
                <h2>Katarzyna <br><em>Rozbicka</em></h2>
                <p class="about-me__subtitle">Architekt wnętrz · założycielka KARO Studio</p>
                <p class="about-me__description">Od ponad dekady projektuję wnętrza, w których ludzie chcą wracać do domu. Pracuję głównie z klientami prywatnymi — przy mieszkaniach, domach jednorodzinnych i kameralnych przestrzeniach komercyjnych.</p>
                <p class="about-me__description">Studio założyłam po kilku latach pracy w warszawskich pracowniach, kiedy zrozumiałam, że najwięcej daje mi prowadzenie projektu od pierwszego szkicu do dnia, w którym klient wprowadza się do gotowego wnętrza.</p>
                <p class="about-me__description">Nie pracuję na akord. Każdy projekt jest dla mnie rozmową — z miejscem, z architekturą, z osobą, która ma w tym wnętrzu żyć. Stąd ograniczona liczba realizacji w roku i naprawdę osobista forma współpracy.</p>
                <p class="about-me__description">Pomiędzy projektami: dużo czytam, fotografuję wnętrza w podróży i zbieram próbki materiałów, których pewnego dnia użyję.</p>
            </div>
        </section>
        <section class="collab">
            <p class="eyebrow">Podejście</p>
            <h2>Moje <em>zasady pracy</em></h2>
            <div class="collab__stages-text">
                <div class="collab__stage">
                    <h3>Słucham, zanim zaprojektuję</h3>
                    <p class="collab__stage-description">Pierwsze spotkania to przede wszystkim pytania. O dom, o nawyki, o to, co naprawdę irytuje w obecnym wnętrzu.</p>
                </div>
                <div class="collab__stage">
                    <h3>Mówię wprost</h3>
                    <p class="collab__stage-description">Jeśli pomysł nie zadziała, powiem. Jeśli budżet wymaga decyzji, postawię sprawę jasno. Bez owijania w bawełnę.</p>
                </div>
                <div class="collab__stage">
                    <h3>Biorę odpowiedzialność</h3>
                    <p class="collab__stage-description">Nie zostawiam klienta z dokumentacją i 'reszta to już sprawa wykonawcy'. Prowadzę proces do końca.</p>
                </div>
            </div>
        </section>
        <section class="process journey">
            <div class="process__section journey__text">
                <p class="eyebrow eyebrow--journey">Droga</p>
                <h2>Doświadczenie <em>i wykształcenie</em></h2>
                <div class="collab__step journey__box">
                    <p class="step__year">2018</p>
                    <p>Dyplom - Architektura wnętrz, ASP</p>
                </div>
                <div class="collab__step journey__box">
                    <p class="step__year">2018-2020</p>
                    <p>Pracownie projektowe w Warszawie</p>
                </div>
                <div class="collab__step journey__box">
                    <p class="step__year">2020</p>
                    <p>Założenie KARO Studio</p>
                </div>
                <div class="collab__step journey__box">
                    <p class="step__year">2026</p>
                    <p>Ponad 100 zrealizowanych projektów</p>
                </div>
            </div>
            <div class="process__image">
                <img class="process__picture" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/kuchnia-pion.jpeg' ?>" alt="">
            </div>
        </section>
        <section class="quote">
            <blockquote class="quote__text">„Najlepsze wnętrza powstają wtedy, gdy klient i projektant rozumieją się bez tłumaczenia."</blockquote>
            <a href="" class="link-action link-action--btn">Umów rozmowę</a>
        </section>
</main>

<?php get_footer(); ?>