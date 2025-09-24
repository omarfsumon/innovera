<?php get_header(); ?>
<section class="page-banner h-[400px] lg:h-[600px]" style="background-image: url('<?php echo INNOVERA_URI . '/src/images/slider/breadcrumb.webp' ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-black/55 h-full w-full flex flex-col justify-center py-5 md:py-10">
        <div class="container pt-10">
            <h1 class="text-2nd-heading font-normal text-center text-white"><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<section class="py-20">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 6,
            ]);

            if ($projects->have_posts()):
                while ($projects->have_posts()): $projects->the_post();
                    $project_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $location = get_field('project_location');
                   
            ?>

            <a href="<?php the_permalink(); ?>" class="relative group overflow-hidden rounded-xl shadow-md transition hover:shadow-xl aspect-[4/5]" data-aos="fade-in" data-aos-duration="1000">
                <div class="relative">
                    <?php if ($project_image): ?>
                        <img src="<?php echo esc_url($project_image); ?>" alt="<?php the_title_attribute(); ?>" class="aspect-[4/5] w-full h-auto object-cover hover:scale-105 transition duration-500">
                    <?php endif; ?>
                    <div class="absolute bottom-10 left-0 right-0 bg-black/60 text-white px-4 py-3">
                        <h3 class="text-base font-semibold text-white"><?php the_title(); ?></h3>
                        <p class="text-sm text-white/80 font-light"><?php echo esc_html($location); ?></p>
                    </div>
                </div>
            </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>