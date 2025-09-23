<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function innovera_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wp-block-site-logo');
    wp_dequeue_style('wp-block-navigation');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'innovera_dequeue_block_styles', 100);

/**
 * Enqueue scripts and styles.
 */
function innovera_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('innovera-font-jost', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', array(), null);
    wp_enqueue_style('innovera-font-dm-sans', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', array(), null);
    
    // Enqueue main stylesheet
    wp_enqueue_style('innovera-style', get_stylesheet_uri(), array(), _S_VERSION);
    
    // Enqueue Theme CSS
    wp_enqueue_style('innovera-aos', INNOVERA_URI . '/src/css/aos.css', array(), '2.3.1');
    wp_enqueue_style('innovera-swiper', INNOVERA_URI . '/src/css/swiper/swiper-bundle.min.css', array(), '11.2.10');
    wp_enqueue_style('innovera-glightbox', INNOVERA_URI . '/src/css/glightbox.min.css');
    wp_enqueue_style('innovera-global', INNOVERA_URI . '/src/css/global.css', array(), _S_VERSION);

    
    // Enqueue Scripts
    wp_enqueue_script('innovera-aos-JS', INNOVERA_URI . '/src/js/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('innovera-swiper-JS', INNOVERA_URI . '/src/js/swiper/swiper-bundle.min.js', array(), '11.2.10', true);
    wp_enqueue_script('innovera-glightbox-JS', INNOVERA_URI . '/src/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('innovera-header', INNOVERA_URI . '/src/js/header.js', array(), _S_VERSION, true);
    wp_enqueue_script('innovera-mobile-menu', INNOVERA_URI . '/src/js/mobile-menu.js', array(), _S_VERSION, true);
    wp_enqueue_script('innovera-global', INNOVERA_URI . '/src/js/global.js', array('innovera-swiper-JS'), '1.0', true);

    // Homepage only
    if (is_front_page()) {
        wp_enqueue_style('home-style', INNOVERA_URI . '/src/css/front-page.css', array(), _S_VERSION);
    }
    // About Page only
    if (is_page('about-us')) {
        wp_enqueue_style('about-us-style', INNOVERA_URI . '/src/css/about_page.css', array(), _S_VERSION);
    }
}
add_action('wp_enqueue_scripts', 'innovera_scripts');

function load_jquery_in_footer() {
    // Deregister default jQuery
    wp_deregister_script('jquery');

    // Register it again but load it in the footer (last param true)
    wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), array(), null, true );

    // Enqueue it
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery_in_footer', 1);
?>

