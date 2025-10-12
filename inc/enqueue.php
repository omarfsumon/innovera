<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
/**
 * Dequeue Gutenberg block library CSS to avoid loading it on the frontend.
 */
function innovera_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_deregister_style('wp-block-library');

    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_style('wp-block-library-theme');

    wp_dequeue_style('wp-block-site-logo');
    wp_deregister_style('wp-block-site-logo');

    wp_dequeue_style('wp-block-navigation');
    wp_deregister_style('wp-block-navigation');

    wp_dequeue_style('classic-theme-styles');
    wp_deregister_style('classic-theme-styles');

    wp_dequeue_style('global-styles');
    wp_deregister_style('global-styles');
    
    // Remove jQuery if not needed
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');

    wp_deregister_script('jquery');
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery-migrate');
}
add_action('wp_print_styles', 'innovera_dequeue_block_styles', 100);

function innovera_disable_block_editor_assets() {
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_footer', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('after_setup_theme', 'innovera_disable_block_editor_assets');

/**
 * Enqueue scripts and styles.
 */
function innovera_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('innovera-style', get_stylesheet_uri(), array(), _S_VERSION);
    
    // Enqueue Theme CSS
    wp_enqueue_style('innovera-swiper', INNOVERA_URI . '/src/css/swiper/swiper-bundle.min.css', array(), '11.2.10');
    wp_enqueue_style('innovera-glightbox', INNOVERA_URI . '/src/css/glightbox.min.css');
    wp_enqueue_style('innovera-global', INNOVERA_URI . '/src/css/global.css', array(), _S_VERSION);
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    
    // Enqueue Scripts
    wp_enqueue_script('innovera-swiper-JS', INNOVERA_URI . '/src/js/swiper/swiper-bundle.min.js', array(), '11.2.10', true);
    wp_enqueue_script('innovera-glightbox-JS', INNOVERA_URI . '/src/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('innovera-header', INNOVERA_URI . '/src/js/header.js', array(), _S_VERSION, true);
    wp_enqueue_script('innovera-mobile-menu', INNOVERA_URI . '/src/js/mobile-menu.js', array(), _S_VERSION, true);
    wp_enqueue_script('innovera-global', INNOVERA_URI . '/src/js/global.js', array('innovera-swiper-JS'), '1.0', true);
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_add_inline_script('aos-js', 'AOS.init();');
}
add_action('wp_enqueue_scripts', 'innovera_scripts');

function innovera_defer_attribute( $tag, $handle ) {
    $scripts_to_defer = ['innovera-global', 'innovera-mobile-menu', 'innovera-header', 'innovera-swiper-JS', 'innovera-glightbox-JS'];

    foreach ( $scripts_to_defer as $defer_script ) {
        if ( $defer_script === $handle ) {
            return str_replace( ' src', ' defer src', $tag );
        }
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'innovera_defer_attribute', 10, 2 );

?>