<?php get_header(); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post();

        // odczyt pól metaboxów
        $podtytul     = get_post_meta(get_the_ID(), 'karo_podtytul', true);
        $lokalizacja  = get_post_meta(get_the_ID(), 'karo_lokalizacja', true);
        $rok          = get_post_meta(get_the_ID(), 'karo_rok', true);
        $powierzchnia = get_post_meta(get_the_ID(), 'karo_powierzchnia', true);
        $zakres       = get_post_meta(get_the_ID(), 'karo_zakres', true);
        $status       = get_post_meta(get_the_ID(), 'karo_status', true);
        $haslo        = get_post_meta(get_the_ID(), 'karo_haslo', true);
        $proces_naglowek = get_post_meta(get_the_ID(), 'karo_proces_naglowek', true);
        $proces_tekst    = get_post_meta(get_the_ID(), 'karo_proces_tekst', true);
    ?>

    <!-- HERO -->
    <section class="project-hero" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');">
        <div class="project-hero__content">
            <p class="eyebrow">Portfolio</p>
            <h1 class="project-hero__title"><?php the_title(); ?></h1>
            <p class="project-hero__meta">
                <?php echo esc_html($lokalizacja); ?>
                <?php if ($rok) echo ' · ' . esc_html($rok); ?>
                <?php if ($podtytul) echo ' · ' . esc_html($podtytul); ?>
            </p>
        </div>
    </section>

    <!-- OPIS + KARTA SZCZEGÓŁÓW -->
    <section class="project-details">
        <div class="project-details__text">
            <?php if ($haslo) : ?>
                <h2 class="project-details__heading"><?php echo esc_html($haslo); ?></h2>
            <?php endif; ?>
            <div class="project-details__description">
                <?php the_content(); ?>
            </div>
        </div>

        <aside class="project-details__card">
            <?php if ($lokalizacja) : ?>
                <p class="project-details__label">Lokalizacja</p>
                <p class="project-details__value"><?php echo esc_html($lokalizacja); ?></p>
            <?php endif; ?>
            <?php if ($rok) : ?>
                <p class="project-details__label">Rok</p>
                <p class="project-details__value"><?php echo esc_html($rok); ?></p>
            <?php endif; ?>
            <?php if ($powierzchnia) : ?>
                <p class="project-details__label">Powierzchnia</p>
                <p class="project-details__value"><?php echo esc_html($powierzchnia); ?></p>
            <?php endif; ?>
            <?php if ($zakres) : ?>
                <p class="project-details__label">Zakres</p>
                <p class="project-details__value"><?php echo esc_html($zakres); ?></p>
            <?php endif; ?>
            <?php if ($status) : ?>
                <p class="project-details__label">Status</p>
                <p class="project-details__value"><?php echo esc_html($status); ?></p>
            <?php endif; ?>
        </aside>
    </section>

    <!-- GALERIA — do zrobienia później -->

    <!-- PROCES -->
    <?php if ($proces_naglowek || $proces_tekst) : ?>
    <section class="project-process">
        <div class="project-process__text">
            <p class="eyebrow">Proces</p>
            <?php if ($proces_naglowek) : ?>
                <h2 class="project-process__heading"><?php echo esc_html($proces_naglowek); ?></h2>
            <?php endif; ?>
            <?php if ($proces_tekst) : ?>
                <p class="project-process__paragraph"><?php echo esc_html($proces_tekst); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

       <!-- NAWIGACJA MIĘDZY PROJEKTAMI -->
    <nav class="project-nav" aria-label="Nawigacja między projektami">
        <?php
        $poprzedni = get_previous_post();
        $nastepny  = get_next_post();
        ?>

        <?php if ($poprzedni) : ?>
            <a class="project-nav__link project-nav__link--prev" href="<?php echo get_permalink($poprzedni->ID); ?>"
               style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($poprzedni->ID, 'large')); ?>');">
                <span class="project-nav__overlay">
                    <span class="project-nav__eyebrow">← Poprzedni projekt</span>
                    <span class="project-nav__title"><?php echo esc_html(get_the_title($poprzedni->ID)); ?></span>
                </span>
            </a>
        <?php endif; ?>

        <?php if ($nastepny) : ?>
            <a class="project-nav__link project-nav__link--next" href="<?php echo get_permalink($nastepny->ID); ?>"
               style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($nastepny->ID, 'large')); ?>');">
                <span class="project-nav__overlay">
                    <span class="project-nav__eyebrow">Następny projekt →</span>
                    <span class="project-nav__title"><?php echo esc_html(get_the_title($nastepny->ID)); ?></span>
                </span>
            </a>
        <?php endif; ?>
    </nav>

    <!-- CTA -->
    <section class="cta dark-section">
        <h2 class="dark-section__header">Masz podobną przestrzeń <em>do zaprojektowania?</em></h2>
        <a href="" class="link-action link-action--btn link-action--btn-light">Umów rozmowę</a>
        <p class="cta-text">Pierwsze spotkanie jest bezpłatne i niezobowiązujące.</p>
    </section>

    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>