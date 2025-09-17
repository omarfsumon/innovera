<?php get_header();?>
<?php get_template_part('template-parts/banner'); ?>
<section class="container my-16">
        <h2 class="text-3rd-heading text-center italic">What Sets Us Apart</h2>
        <p class="text-center text-lg mt-4 italic">
            Innovera is committed to creating a <strong>lifestyle experience.</strong>
            From premium construction and interior customization to property management and after-sales service—we are with you at every step.
        </p>
</section>
<section class="container my-16">
    <div class="flex flex-col md:flex-row gap-4">
        <div class="w-full md:w-1/3">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/about/about_us.webp" alt="About Us" class="w-full object-cover rounded-lg">
        </div>
        <div class="w-full md:w-2/3 flex flex-col gap-4 md:order-first">
            <h2 class="text-3rd-heading">Who We Are</h2>
            <p>At <strong>Innovera Holdings Ltd.</strong>, we believe a home is more than just four walls—it’s a foundation for dreams, 
                growth, and generations to come. As a forward-looking real estate development company in Bangladesh, 
                we are dedicated to building homes and communities that combine <strong>modern architecture, reliable construction, and sustainable design.</strong></p>
            <p>With projects across <strong>Old Dhaka, Bashundhara, Savar, Narayangonj, and Uttara,</strong> 
                Innovera is shaping the future of urban living by delivering spaces that are not only functional, but inspiring.</p>
        </div>
    </div>
</section>
<?php get_footer(); ?>