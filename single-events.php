<?php get_header();?>
<?php get_template_part('template-parts/banner'); ?>
<section class="bg-secondary-50 py-10 md:py-20">
    <div class="container">
        <h2 class="text-2nd-heading font-normal leading-tight text-center mb-6 animate__animated animate__fadeInUp">About <?php the_title(); ?> Event</h2>
        <?php if (get_field('about_event')): ?>
            <div class="prose prose-sm max-w-none text-gray-700 text-center animate__animated animate__fadeInUp">
                    <?php echo wp_kses_post(get_field('about_event')); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section id="event_gallery" class=" bg-white py-10 md:py-20">
    <div class="container">
        <h2 class="text-2nd-heading font-normal leading-tight text-center mb-6 animate__animated animate__fadeInUp">Event Gallery</h2>
        <?php $event_gallery = get_field('event_gallery');
            if ($event_gallery): ?>
                <div id="gallery-masonry" class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
                    <?php foreach ($event_gallery as $image): ?>
                        <div class="break-inside-avoid overflow-hidden rounded-xl group">
                            <a href="<?php echo esc_url($image['url']); ?>"
                            class="image-popup block relative rounded-xl overflow-hidden"
                            data-glightbox="title: <?php echo esc_attr($image['alt']); ?>">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 z-10"></div>
                                <div class="absolute inset-0 flex items-center justify-center text-white text-base font-semibold opacity-0 group-hover:opacity-100 transition duration-300 z-20">
                                    View
                                </div>
                                <img fetchpriority="high" loading="lazy" decoding="async" src="<?php echo esc_url($image['url']);?>" alt="<?php echo esc_attr($image['alt']);?>"
                                    class="w-full h-auto object-cover group-hover:scale-110 transition duration-300 rounded-xl"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();?>