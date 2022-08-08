<?php

function landingpage_style()
{
    // wp_enqueue_style('bootstrap5', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"); 
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com');
    wp_enqueue_style('googlefont2', 'https://fonts.gstatic.com');
    wp_enqueue_style('googlefont3', 'https://fonts.googleapis.com/css2?family=Archivo:wght@100&family=Dancing+Script&family=Prompt:wght@100&family=Signika:wght@300&family=Work+Sans&display=swap');
    wp_enqueue_style('style', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_style('magnific', get_theme_file_uri('assets/css/magnific.css'));
    wp_enqueue_style('responsive', get_theme_file_uri('assets/css/responsive.css'));
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css');
    wp_enqueue_style('owl', get_theme_file_uri('assets/css/owl.carousel.min.css'));
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css');
    // wp_enqueue_style('blog', get_theme_file_uri('css/blog.css'));
    wp_enqueue_style('index', get_theme_file_uri('css/index.css'));
    // wp_enqueue_style('modal', get_theme_file_uri('css/modal.css'));
    wp_enqueue_style('navbar', get_theme_file_uri('css/navbar.css'));
    wp_enqueue_style('footer', get_theme_file_uri('css/footer.css'));
    wp_enqueue_style('responsif', get_theme_file_uri('css/responsif.css'));
    // wp_enqueue_style('produk-kami', get_theme_file_uri('css/produk-kami.css'));
    wp_enqueue_style('tab-home', get_theme_file_uri('css/tab-home.css'));
    // wp_enqueue_style('tab', get_theme_file_uri('css/tab.css'));
    // wp_enqueue_style('tentangperusahaan', get_theme_file_uri('css/tentangperusahaan.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.min.css'));


    // Scripts

    wp_enqueue_script('jq', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], '3.5.1', true);
    wp_enqueue_script('bootstrap5', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", [], '5.2.0', true);
    wp_enqueue_script('owl', get_theme_file_uri('assets/js/owl.carousel.min.js'), [], '1.0', true);
    wp_enqueue_script('magnificJs', get_theme_file_uri('assets/js/magnific.min.js'), [], '1.0', true);
    // wp_enqueue_script('owl', get_theme_file_uri('assets/js/dropdown.js'), [], '1.0', true);
    // wp_enqueue_script('owlresponsive', get_theme_file_uri('assets/js/owlresponsive.js'), [], '1.0', true);
    wp_enqueue_script('arrow', get_theme_file_uri('assets/js/arrow.js'), [], '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'), [], '2.9.2', true);
}

add_action('wp_enqueue_scripts', 'landingpage_style');
