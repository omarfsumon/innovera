<?php get_header();?>
<?php get_template_part('template-parts/banner'); ?>
<section class="container md:py-16 py-4 bg-white">
        <h2 class="text-3rd-heading text-center italic" data-aos="flip-up" data-aos-duration="1000">
            Our Promise
        </h2>
        <p class="text-center text-lg mt-4 italic" data-aos="fade-in" data-aos-duration="1000">
            “At Innovera Holdings Ltd., we don’t just deliver homes—we ensure they remain comfortable, functional, and valuable for years to come.”
        </p>
</section>
<section class=" py-5 md:py-15 px-4 overflow-hidden">
    <div class="container flex flex-col md:flex-row items-center justify-between md:gap-20 gap-5">
        <div class="max-w-[100%] md:max-w-[50%] md:order-last">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/service/home_loan.webp" alt="NRB Corner" class="w-full rounded-lg" data-aos="fade-left" data-aos-delay="400">
        </div>
        <div class="max-w-[100%] md:max-w-[50%]" data-aos="fade-right" data-aos-delay="100">
            <h2 class="text-3rd-heading leading-[1.5] font-semibold">Easy Home Loan Support</h2>
            <p data-aos="fade-right">
                We assist our valued customers in securing hassle-free home loans from reputed banks. From documentation to approval, 
                our team guides you throughout the process to make your dream of owning a home easier and faster.
            </p>
            <p data-aos="fade-right mt-4">
               We connect you with trusted banks and guide you through the loan process, so you can move into your dream home stress-free.
            </p>
        </div>
    </div>
</section>



<?php get_footer();?>