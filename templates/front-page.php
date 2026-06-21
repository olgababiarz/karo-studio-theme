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
        <section class="o-mnie"></section>
        <section class="realizacje"></section>
        <section class="wspolpraca"></section>
        <section class="faq faq--home"></section>
        <section class="kontakt-form"></section>
    </main>

    <footer></footer>
<?php wp_footer()?>
</body>
</html>