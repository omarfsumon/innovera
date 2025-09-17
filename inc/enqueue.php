<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

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
    wp_enqueue_style('innovera-plugins', INNOVERA_URI . '/src/css/plugins.css', array(), _S_VERSION);
    //wp_enqueue_style('innovera-old-style', INNOVERA_URI . '/src/css/style.css', array(), _S_VERSION);
    //wp_enqueue_style('innovera-flatpicker', INNOVERA_URI . '/src/css/flatpickr.min.css', array(), _S_VERSION);
    wp_enqueue_style('innovera-swiper-CSS', INNOVERA_URI . '/src/css/swiper/swiper-bundle.min.css', array(), '11.2.10');
    wp_enqueue_style('innovera-glightbox-CSS', INNOVERA_URI . '/src/css/glightbox.min.css');

    wp_enqueue_style('innovera-global', INNOVERA_URI . '/src/css/global.css', array(), _S_VERSION);
    wp_enqueue_style('innovera-smooth-scroll', INNOVERA_URI . '/src/css/smooth-scroll.css', array(), '1.0');

    
    // Enqueue Scripts
    wp_enqueue_script('jquery');
    //wp_enqueue_script('innovera-designesia', INNOVERA_URI . '/src/js/designesia.js', array('jquery'), _S_VERSION, true);
    //wp_enqueue_script('innovera-validation', INNOVERA_URI . '/src/js/validation-booking.js', array('jquery'), _S_VERSION, true);
    //wp_enqueue_script('innovera-custom-marquee', INNOVERA_URI . '/src/js/custom-marquee.js', array('jquery'), _S_VERSION, true);
    //wp_enqueue_script('innovera-validation-contact', INNOVERA_URI . '/src/js/validation-contact.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('innovera-swiper-JS', INNOVERA_URI . '/src/js/swiper/swiper-bundle.min.js', array(), '11.2.10', true);
    wp_enqueue_script('innovera-glightbox-JS', INNOVERA_URI . '/src/js/glightbox.min.js', array(), null, true);
    //wp_enqueue_script('innovera-smooth-scroll', INNOVERA_URI . '/src/js/smooth-scroll.js', array(), '1.0', true);
    wp_enqueue_script('innovera-header', INNOVERA_URI . '/src/js/header.js', array(), _S_VERSION, true);
    wp_enqueue_script('innovera-mobile-menu', INNOVERA_URI . '/src/js/mobile-menu.js', array(), _S_VERSION, true);

    // Homepage only
    if (is_front_page()) {
        wp_enqueue_style('home-style', INNOVERA_URI . '/src/css/front-page.css', array(), _S_VERSION);
        wp_enqueue_script('innovera-front-page', INNOVERA_URI . '/src/js/front-page.js', array('innovera-swiper-JS'), '1.0', true);
    }
    // About Page only
    if (is_page('about-us')) {
        wp_enqueue_style('about-us-style', INNOVERA_URI . '/src/css/about_page.css', array(), _S_VERSION);
    }


}
add_action('wp_enqueue_scripts', 'innovera_scripts');
?>

