<?php
function karo_enqueue_styles(){ 
    wp_enqueue_style('karo-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style('karo-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css'); 
    wp_enqueue_style('karo-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
}

add_action('wp_enqueue_scripts', 'karo_enqueue_styles');

function karo_enqueue_scripts(){
    wp_enqueue_script('karo-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action ('wp_enqueue_scripts', 'karo_enqueue_scripts');

function karo_register_menus(){
    register_nav_menus([
        'primary' => 'Menu główne'
    ]);
}
add_action('init', 'karo_register_menus');

function karo_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'karo_theme_setup');

function karo_register_project(){
    register_post_type('project', [
        'labels' => [
        'name' => 'Projekty',
        'add_new_item' => 'Dodaj nowy projekt',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}
add_action('init', 'karo_register_project');

/* === METABOXY PROJEKTU === */

// 1. Rejestracja boxa
function karo_project_metabox() {
    add_meta_box(
        'karo_project_details',          // ID boxa
        'Szczegóły projektu',            // tytuł widoczny w panelu
        'karo_project_metabox_html',     // funkcja rysująca zawartość
        'project',                       // typ wpisu
        'normal',                        // pozycja
        'high'                           // priorytet
    );
}
add_action('add_meta_boxes', 'karo_project_metabox');

// 2. Zawartość boxa — pola do wpisywania
function karo_project_metabox_html($post) {
    // pobranie zapisanych wartości
    $lokalizacja = get_post_meta($post->ID, 'karo_lokalizacja', true);
    $rok         = get_post_meta($post->ID, 'karo_rok', true);
    $powierzchnia= get_post_meta($post->ID, 'karo_powierzchnia', true);
    $zakres      = get_post_meta($post->ID, 'karo_zakres', true);
    $status      = get_post_meta($post->ID, 'karo_status', true);
    $podtytul    = get_post_meta($post->ID, 'karo_podtytul', true);
    $haslo       = get_post_meta($post->ID, 'karo_haslo', true);
    $proces_naglowek = get_post_meta($post->ID, 'karo_proces_naglowek', true);
    $proces_tekst    = get_post_meta($post->ID, 'karo_proces_tekst', true);
    $orientacja      = get_post_meta($post->ID, 'karo_orientacja', true);
    $material_id     = get_post_meta($post->ID, 'karo_material_id', true);

    // pole bezpieczeństwa
    wp_nonce_field('karo_zapis_metabox', 'karo_metabox_nonce');
    ?>

    <p>
        <label for="karo_podtytul"><strong>Podtytuł hero</strong> (np. "Kuchnia w kamienicy")</label><br>
        <input type="text" id="karo_podtytul" name="karo_podtytul" value="<?php echo esc_attr($podtytul); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_lokalizacja"><strong>Lokalizacja</strong> (np. "Warszawa, Stary Żoliborz")</label><br>
        <input type="text" id="karo_lokalizacja" name="karo_lokalizacja" value="<?php echo esc_attr($lokalizacja); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_rok"><strong>Rok</strong></label><br>
        <input type="text" id="karo_rok" name="karo_rok" value="<?php echo esc_attr($rok); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_powierzchnia"><strong>Powierzchnia</strong> (np. "22 m²")</label><br>
        <input type="text" id="karo_powierzchnia" name="karo_powierzchnia" value="<?php echo esc_attr($powierzchnia); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_zakres"><strong>Zakres</strong> (np. "Projekt koncepcyjny, nadzór autorski")</label><br>
        <input type="text" id="karo_zakres" name="karo_zakres" value="<?php echo esc_attr($zakres); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_status"><strong>Status</strong> (np. "Zrealizowany")</label><br>
        <input type="text" id="karo_status" name="karo_status" value="<?php echo esc_attr($status); ?>" style="width:100%;">
    </p>
    <hr>
    <p>
        <label for="karo_haslo"><strong>Hasło sekcji opisu</strong> (np. "Kuchnia w dialogu z kamienicą")</label><br>
        <input type="text" id="karo_haslo" name="karo_haslo" value="<?php echo esc_attr($haslo); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_proces_naglowek"><strong>Nagłówek sekcji proces</strong></label><br>
        <input type="text" id="karo_proces_naglowek" name="karo_proces_naglowek" value="<?php echo esc_attr($proces_naglowek); ?>" style="width:100%;">
    </p>
    <p>
        <label for="karo_proces_tekst"><strong>Tekst sekcji proces</strong></label><br>
        <textarea id="karo_proces_tekst" name="karo_proces_tekst" rows="4" style="width:100%;"><?php echo esc_textarea($proces_tekst); ?></textarea>
    </p>

    <hr>
    <p>
        <label for="karo_orientacja"><strong>Orientacja kafelka w portfolio</strong></label><br>
        <select id="karo_orientacja" name="karo_orientacja" style="width:100%;">
            <option value="tall" <?php selected($orientacja, 'tall'); ?>>Pionowy (tall)</option>
            <option value="wide" <?php selected($orientacja, 'wide'); ?>>Poziomy (wide)</option>
        </select>
    </p>
    <p>
        <strong>Zdjęcie materiału</strong> (próbka — do kafelka na stronie głównej)<br>
        <img id="karo_material_podglad"
             src="<?php echo $material_id ? esc_url(wp_get_attachment_image_url($material_id, 'medium')) : ''; ?>"
             style="max-width:150px; display:<?php echo $material_id ? 'block' : 'none'; ?>; margin:8px 0;">
        <input type="hidden" id="karo_material_id" name="karo_material_id" value="<?php echo esc_attr($material_id); ?>">
        <button type="button" class="button" id="karo_material_wybierz">Wybierz zdjęcie</button>
        <button type="button" class="button" id="karo_material_usun" style="display:<?php echo $material_id ? 'inline-block' : 'none'; ?>;">Usuń</button>
    </p>
    <script>
    jQuery(function($){
        var ramka;
        $('#karo_material_wybierz').on('click', function(e){
            e.preventDefault();
            if (ramka) { ramka.open(); return; }
            ramka = wp.media({ title: 'Wybierz zdjęcie materiału', multiple: false });
            ramka.on('select', function(){
                var zal = ramka.state().get('selection').first().toJSON();
                $('#karo_material_id').val(zal.id);
                $('#karo_material_podglad').attr('src', zal.sizes && zal.sizes.medium ? zal.sizes.medium.url : zal.url).show();
                $('#karo_material_usun').show();
            });
            ramka.open();
        });
        $('#karo_material_usun').on('click', function(e){
            e.preventDefault();
            $('#karo_material_id').val('');
            $('#karo_material_podglad').hide();
            $(this).hide();
        });
    });
    </script>
    <?php
}

// 3. Zapis danych
function karo_zapis_metabox($post_id) {
    // sprawdzenia bezpieczeństwa
    if (!isset($_POST['karo_metabox_nonce'])) return;
    if (!wp_verify_nonce($_POST['karo_metabox_nonce'], 'karo_zapis_metabox')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // lista pól do zapisania
    $pola = [
        'karo_podtytul',
        'karo_lokalizacja',
        'karo_rok',
        'karo_powierzchnia',
        'karo_zakres',
        'karo_status',
        'karo_haslo',
        'karo_proces_naglowek',
        'karo_proces_tekst',
        'karo_orientacja',
        'karo_material_id',
    ];

    foreach ($pola as $pole) {
        if (isset($_POST[$pole])) {
            update_post_meta($post_id, $pole, sanitize_text_field($_POST[$pole]));
        }
    }
}
add_action('save_post_project', 'karo_zapis_metabox');

/* === TAKSONOMIA: KATEGORIE PROJEKTÓW === */
function karo_register_project_category() {
    register_taxonomy('project_category', 'project', [
        'labels' => [
            'name'          => 'Kategorie projektów',
            'singular_name' => 'Kategoria',
            'add_new_item'  => 'Dodaj kategorię',
            'edit_item'     => 'Edytuj kategorię',
            'menu_name'     => 'Kategorie',
        ],
        'public'       => true,
        'hierarchical' => true,          // zachowuje się jak zwykłe kategorie (checkboxy)
        'show_admin_column' => true,     // kolumna w liście projektów
    ]);
}
add_action('init', 'karo_register_project_category');

/* === SKRYPTY MEDIA W EDYTORZE PROJEKTU === */
function karo_admin_media_scripts($hook) {
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'karo_admin_media_scripts');
