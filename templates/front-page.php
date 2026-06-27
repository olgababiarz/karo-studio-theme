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
                    <img src="" alt="" class="realizacje__material">
                    <img src="" alt="" class="realizacje__wizualizacja">
                <div class="realizacje__overlay">
                    <p class="realizacje__tytul">Harmonia form i kolorów</p>
                    <p class="realizacje__data">Warszawa - 2023</p>
                </div>
                </div>
            </div>
            <a href="" class="link-akcja">Zobacz wszystkie projekty</a>
        </section>
        <section class="wspolpraca"></section>
        <section class="faq faq--home"></section>
        <section class="kontakt-form"></section>
    </main>

    <footer></footer>
<?php wp_footer()?>
</body>
</html>