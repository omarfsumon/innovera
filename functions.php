<?php
/**
 * Innovera functions and definitions
 *
 * @package Innovera
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// Define theme paths
define('INNOVERA_PATH', get_template_directory());
define('INNOVERA_URI', get_template_directory_uri());

// Include files
require_once INNOVERA_PATH . '/inc/enqueue.php';
require_once INNOVERA_PATH . '/inc/custom_sub_menu.php';
require_once INNOVERA_PATH . '/inc/smtp.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function innovera_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'innovera'),
        'footer' => esc_html__('Footer Menu', 'innovera'),
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'innovera_setup');

/**
 * satup all pages puth location like "/page/page-about-us.php"
 */
function innovera_page_template($template) {
    if (is_page()) {
        $page_slug = get_post_field('post_name', get_queried_object_id());
        $custom_template = locate_template('page/page-' . $page_slug . '.php');
        if ($custom_template) {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'innovera_page_template');    



/*==================
ACF Functions Start
===================*/
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );
include_once( MY_ACF_PATH . 'secure-custom-fields.php' );

// Customize the url setting to fix incorrect asset URLs.
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}
add_filter('acf/settings/url', 'my_acf_settings_url');

// (Optional) Hide the ACF admin menu item.
//add_filter('acf/settings/show_admin', '__return_false');

// When including the PRO plugin, hide the ACF Updates menu
//add_filter('acf/settings/show_updates', '__return_false', 100);

/*==================
ACF Functions End
===================*/