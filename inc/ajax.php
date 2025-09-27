<?php
add_action('wp_ajax_filter_projects', 'ajax_filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'ajax_filter_projects');

function ajax_filter_projects() {
    $occupancy_type = $_POST['occupancy_type'] ?? '';
    $project_location = $_POST['project_location'] ?? '';

    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
        'tax_query' => array(),
        'meta_query' => array(),
    );

    // Taxonomy Filter
    if ($occupancy_type) {
        $args['tax_query'][] = array(
            'taxonomy' => 'occupancy-type',
            'field' => 'slug',
            'terms' => $occupancy_type,
        );
    }

    // ACF Meta Field Filter
    if ($project_location) {
        $args['meta_query'][] = array(
            'key' => 'project_location',
            'value' => $project_location,
            'compare' => '=',
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();
            $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $location = get_field('project_location');
            ?>
            <a href="<?php the_permalink(); ?>" class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl aspect-[4/5] transition-all duration-500">
                <div class="relative">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500">
                    <?php endif; ?>
                    <div class="absolute bottom-10 left-0 right-0 bg-black/60 text-white px-4 py-3">
                        <h3 class="text-base font-semibold"><?php the_title(); ?></h3>
                        <p class="text-sm font-light text-white/80"><?php echo esc_html($location); ?></p>
                    </div>
                </div>
            </a>
            <?php
        }
        wp_reset_postdata();
        echo ob_get_clean();
    } else {
        echo '<p>No projects found.</p>';
    }

    wp_die();
}


?>