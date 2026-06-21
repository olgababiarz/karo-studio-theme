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
            <img class="o-mnie__zdjecie" src="" alt="">
            <div class="o-mnie__tekst">
                <p class="eyebrow">O mnie</p>
                <h2>Katarzyna <em>Rozbicka</em></h2>
                <p class="o-mnie__opis">Od ponad 10 lat tworzę przestrzenie, które stają się naturalnym przedłużeniem osobowości ich właścicieli. Nie interesuje mnie powtarzalność ani ślepe podążanie za trendami — każdy projekt zaczynam od rozmowy, bo tylko tak można stworzyć wnętrze, które naprawdę trwa.</p>
                <p class="o-mnie__opis">Pracuję kompleksowo — od pierwszego szkicu po nadzór nad realizacją. Moim klientom zapewniam spokój i pewność, że każdy etap jest pod kontrolą.</p>
                <p class="o-mnie-liczby">10+ lat praktyki</p>
                <p class="o-mnie-liczby">60+ zrealizowanych wnętrz</p>
                <p class="o-mnie-liczby">100% autorski nadzór</p>
                <a href="">Umów rozmowę</a>
            </div>
        </section>
        <section class="realizacje"></section>
        <section class="wspolpraca"></section>
        <section class="faq faq--home"></section>
        <section class="kontakt-form"></section>
    </main>

    <footer></footer>
<?php wp_footer()?>
</body>
</html>