<?php
/*
 * Template Name: Portfolio
 */
?>

<?php get_header(); ?>
    <main>
        <section class="hero hero--portfolio">
            <p class="eyebrow">Portfolio</p>
            <h1>Wybrane <em>realizacje</em></h1>
            <p class="hero__description--page-collab">Każdy projekt to indywidualna rozmowa z miejscem i osobą, która w nim mieszka. Poniżej krótki przegląd ostatnich realizacji.</p>
        </section>
        <section class="projects">
            <nav class="portfolio__filters" aria-label="filtry portfolio">
                <a href="">Wszystkie</a>
                <a href="">Domy</a>
                <a href="">Kuchnie</a>
                <a href="">Łazienki</a>
                <a href="">Sypialnie</a>
            </nav>
            <div class="projects__cards-box">
                <?php
                $projekty = new WP_Query([
                    'post_type'      => 'project',
                    'posts_per_page' => -1,
                ]);

                if ($projekty->have_posts()) :
                    while ($projekty->have_posts()) : $projekty->the_post();

                        $orientacja  = get_post_meta(get_the_ID(), 'karo_orientacja', true);
                        $lokalizacja = get_post_meta(get_the_ID(), 'karo_lokalizacja', true);
                        $rok         = get_post_meta(get_the_ID(), 'karo_rok', true);
                        if (!$orientacja) $orientacja = 'wide';
                ?>
                    <div class="cards-box__project cards-box__project--<?php echo esc_attr($orientacja); ?>">
                        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                            <?php the_post_thumbnail('large', ['class' => 'project__image']); ?>
                        </a>
                        <p class="project__label"><?php echo esc_html($lokalizacja); ?><?php if ($rok) echo ' ' . esc_html($rok); ?></p>
                        <h3 class="project__title"><?php the_title(); ?></h3>
                        <p class="project__description"><?php echo esc_html(get_the_excerpt()); ?></p>
                        <a href="<?php the_permalink(); ?>" class="link-action project__btn">Zobacz projekt</a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="projects__cards-box">
                <div class="cards-box__project cards-box__project--tall">
                    <a href="" tabindex="-1" aria-hidden="true">
                        <img class="project__image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/7.png' ?>" alt="">
                    </a>
                    <p class="project__label">Kobyłka 2021</p>
                    <h3 class="project__title">Elegancja w Rytmie Natury: Nowoczesna Rezydencja</h3>
                    <p class="project__description">Zapraszamy do wnętrza, gdzie surowość kamienia spotyka się z ciepłem drewna, tworząc przestrzeń pełną klasy i kojącego spokoju. Ten projekt to manifest nowoczesnego luksusu, w którym każdy detal – od faktury na wyspie kuchennej po subtelne podświetlenia – ma swoje miejsce i cel.</p>
                    <a href="" class="link-action project__btn">Zobacz projekt</a>
                </div>
                <div class="cards-box__project cards-box__project--wide">
                    <a href="" tabindex="-1" aria-hidden="true">
                        <img class="project__image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-1.jpg' ?>" alt="">
                    </a>
                    <p class="project__label">Warszawa  2020</p>
                    <h3 class="project__title">Harmonia Form i Kolorów: Nowoczesny Azyl w Duchu Soft Minimalism</h3>
                    <p class="project__description">Zaprojektowaliśmy przestrzeń, która jest harmonijnym dialogiem między surową geometrią a organicznym ciepłem. Głównym założeniem było stworzenie azylu, w którym czysta forma i funkcjonalność współistnieją z teksturalną miękkością i spokojną, naturalną paletą barw.</p>
                    <a href="" class="link-action project__btn">Zobacz projekt</a>
                </div>   
                <div class="cards-box__project cards-box__project--wide">
                    <a href="" tabindex="-1" aria-hidden="true">
                        <img class="project__image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wizualizacja-1.jpg' ?>" alt="">
                    </a>
                    <p class="project__label">Warszawa  2020</p>
                    <h3 class="project__title">Harmonia Form i Kolorów: Nowoczesny Azyl w Duchu Soft Minimalism</h3>
                    <p class="project__description">Zaprojektowaliśmy przestrzeń, która jest harmonijnym dialogiem między surową geometrią a organicznym ciepłem. Głównym założeniem było stworzenie azylu, w którym czysta forma i funkcjonalność współistnieją z teksturalną miękkością i spokojną, naturalną paletą barw.</p>
                    <a href="" class="link-action project__btn">Zobacz projekt</a>
                </div> 
                <div class="cards-box__project cards-box__project--tall">
                    <a href="" tabindex="-1" aria-hidden="true">
                        <img class="project__image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/7.png' ?>" alt="">
                    </a>
                    <p class="project__label">Kobyłka 2021</p>
                    <h3 class="project__title">Elegancja w Rytmie Natury: Nowoczesna Rezydencja</h3>
                    <p class="project__description">Zapraszamy do wnętrza, gdzie surowość kamienia spotyka się z ciepłem drewna, tworząc przestrzeń pełną klasy i kojącego spokoju. Ten projekt to manifest nowoczesnego luksusu, w którym każdy detal – od faktury na wyspie kuchennej po subtelne podświetlenia – ma swoje miejsce i cel.</p>
                    <a href="" class="link-action project__btn">Zobacz projekt</a>
                </div> 
            </div>
        </section>
    </main>

<?php get_footer(); ?>