<?php
/**
 * The header for our theme
 *
 * @package Innovera
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="header" class="my-sticky-header sticky top-6 -mb-24 w-full z-50 transparent" data-aos="fade-in" data-aos-duration="1000">
        <!-- <div class="header-inner transition-all duration-300"> -->
            <div class="container flex justify-between items-center w-full py-4 px-5 lg:rounded-xl lg:mt-6 bg-white shadow-md">
                <!-- Logo -->
                <div id="logo" class="logo">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

                        if ($logo_url) {
                            echo '<a href="' . esc_url(home_url('/')) . '"><img src="' . esc_url($logo_url) . '" alt="Site Logo" class="h-12 w-auto" /></a>';
                        } else {
                            echo '<a href="' . esc_url(home_url('/')) . '" class="text-2xl font-bold">' . get_bloginfo('name') . '</a>';
                        }
                    ?>
                </div>

                <!-- Desktop Navigation -->
                <nav id="desktop-nav" class="hidden lg:block">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'header_menu flex items-center text-base font-medium',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'walker'         => new Custom_Sub_Menu(),
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu Button and CTA -->
                <div class="flex items-center space-x-4">
                    <a class="Schedule hidden lg:inline-block btn-main" href="#contact">
                        Schedule a Visit
                    </a>
                    <button id="mobile-menu-btn" class="lg:hidden text-gray-800 hover:text-primary p-2" aria-label="Toggle Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="hamburger" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                            <path class="close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-nav" class="lg:hidden">
                <div class="mobile-menu-container hidden bg-white backdrop-blur-sm absolute left-0 w-full border-t border-gray-100">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'header_menu p-4 space-y-2', 
                        'container'      => false,
                        'fallback_cb'    => false,
                        'walker'         => new Custom_Sub_Menu(),
                    ));
                    ?>
                    <div class="px-4 pb-4 pt-2">
                        <a class="btn-main w-full text-center block" href="#contact">
                            Schedule a Visit
                        </a>
                    </div>
                </div>
            </nav>
        <!-- </div> -->
    </header>