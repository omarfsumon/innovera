<?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

    if ($logo_url) {
        echo '<a href="' . esc_url(home_url('/')) . '"><img width="130" heidth="auto" fetchpriority="high" src="' . esc_url($logo_url) . '" alt="Site Logo" class="h-12 w-auto" decoding="async" loading="lazy" /></a>';
    } else {
        echo '<a href="' . esc_url(home_url('/')) . '" class="text-2xl font-bold">' . get_bloginfo('name') . '</a>';
    }
?>