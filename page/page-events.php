<?php get_header(); ?>
<?php get_template_part('template-parts/banner'); ?>

<section id="latest_update" class="py-24 z-0">
    <div class="container ">
        <div class="flex flex-col justify-center text-center mb-5">
            <h2 class="  text-2nd-heading" data-aos="flip-up" data-aos-delay="100">All Media & Events</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php
                $events = new WP_Query([
                    'post_type'      => 'events',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'status'         => 'publish',
                ]);

                if ($events->have_posts()) :
                    while ($events->have_posts()) : $events->the_post(); ?>
                    
                    <a href="<?php the_permalink(); ?>" data-aos="zoom-in-down" data-aos-delay="100">
                        <div class="overflow-hidden relative rounded-1 text-light text-center">
                            <div class="overflow-hidden rounded-xl">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" class="w-full aspect-[3/2] rounded-xl object-cover" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="absolute z-10 p-5 w-full h-full bottom-0 bg-gradient-to-t from-secondary-400/70 to-transparent text-white flex flex-col justify-end rounded-xl">
                                <h3 class="text-2xl text-white text-start"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>

                    <?php endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>