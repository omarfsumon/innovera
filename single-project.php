<?php get_header();?>
<?php
    if (get_post_type() === 'project' && is_singular('project')) {
        $banner_image = get_field('banner_image');
    } else {
        $banner_image = INNOVERA_URI . '/src/images/slider/breadcrumb.webp';
    }

    $project_no = get_field('project_no');
    $land_owner = get_field('land_owner');
    $progress = get_field('project_progress');
    $progress = is_numeric($progress) ? intval($progress) : 0;
    $plot_address = get_field('plot_address');
    $rajuk_approval_no = get_field('rajuk_approval_no');
    $area_of_land = get_field('area_of_land');
    $land_type = get_field('land_type');
    $level = get_field('level');
    $total_units = get_field('total_units');
    $apartment_type = get_field('apartment_type');
    $apartment_size = get_field('apartment_size');
    $basement = get_field('basement');
    $car_parking = get_field('car_parking');
    $developers_portion = get_field('developer’s_portion');
    $date_of_inauguration = get_field('date_of_inauguration');
    $construction_period = get_field('construction_period');
    $probable_handover_date = get_field('probable_handover_date');
    $lift = get_field('lift');
    $generator = get_field('generator');
    $gas_supply = get_field('gas_supply');
    $electric_cables = get_field('electric_cables');
    $floor_tiles = get_field('floor_tiles');
    $door = get_field('door');
    $structural_materials = get_field('structural_materials');
?>
<section id="project-banner" class="h-[400px] lg:h-screen"
    style="background-image: url('<?php echo esc_url($banner_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-black/55 h-full w-full flex flex-col justify-center py-5 md:py-10">
        <div class="container px-3 md:px-5 lg:px-10">
            <?php
                $terms = get_the_terms(get_the_ID(), 'occupancy-type');
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        echo '<p class="text-white text-xl uppercase font-[200] text-center">' . esc_html($term->name) . '</p>';
                    }
                }
            ?>
            <h1 class="text-hero-heading leading-[1.5] font-normal text-center text-white"><?php the_title(); ?></h1>
            <address class="text-white text-center"><?php echo esc_html($plot_address); ?></address>
        </div>
    </div>
</section>
<section id="project-details" class="py-5 md:py-20 overflow-hidden">
    <div class="container flex flex-col md:flex-row gap-2 lg:gap-20">
        <div class="feature-image w-full md:w-[45%]">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="" class="w-auto h-full object-cover rounded-lg">
        </div>
        <div class="w-full md:w-[55%]">
            <h3 class="text-2nd-heading leading-[1] font-normal mt-2 mb-2">At a Glance</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/hastag'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Project No:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($project_no); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/owner'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Land Owner:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($land_owner); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/address'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Plot Address:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($plot_address); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/approval'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">RAJUK Approval:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($rajuk_approval_no); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/area'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Land Area:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($area_of_land); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/type'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Land Type:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($land_type); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/level'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Level:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($level); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/units'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Total Units:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($total_units); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/apartment_type'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Apartment Type:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($apartment_type); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/apartment_size'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Apartment Size:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($apartment_size); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/basement'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Basement:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($basement); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/parking'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Car Parking:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($car_parking); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/portion'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Developer's Portion:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($developers_portion); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/date'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Inauguration Date:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($date_of_inauguration); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/period'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Construction Period:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($construction_period); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-3">
                    <div class="p-2">
                        <?php get_template_part('src/svg/handover'); ?>
                    </div>
                    <div class="flex flex-col gap-1 justify-center">
                        <h5 class=" text-xl font-normal leading-none">Probable Handover:</h5>
                        <p class=" text-base font-normal leading-[1]"><?php echo esc_html($probable_handover_date); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="project-progress" class="bg-[#003333] text-white py-10 md:py-15">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
      <div class="w-full md:w-1/3 text-center md:text-left">
        <h2 class="text-2nd-heading text-white font-normal leading-tight">Project Progress</h2>
      </div>
      <div class="w-full md:w-2/3 relative">
          <div class="flex justify-between mb-2 text-sm font-medium">
            <span>Project Start</span>
            <span>Completed</span>
          </div>
          
          <div class="relative w-full h-3 rounded-full bg-white/20 overflow-hidden">
            <div class="absolute top-0 left-0 h-full bg-white transition-all duration-700 ease-in-out" style="width: <?php echo $progress; ?>%;"></div>
          </div>
          
          <div class="flex justify-between mt-2 text-sm">
            <span>0%</span>
            <span><?php echo $progress; ?>%</span>
          </div>
      </div>
    </div>
</section>
<section id="project-amenities" class="py-5 md:py-20">
    <div class="container">
        <h2 class="text-2nd-heading font-normal leading-tight text-center mb-6">Project Amenities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="amenities flex flex-col gap-3 items-center justify-center px-3 py-6 aspect-[4/3] border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                <?php get_template_part('src/svg/lift'); ?>
                <h3 class=" text-3rd-heading font-normal leading-[1.5]">Lift</h3>
                <p class="text-base font-normal text-center"><?php echo esc_html($lift); ?></p>
            </div>
            <div class="amenities flex flex-col gap-3 items-center justify-center px-3 py-6 aspect-[4/3] border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                <?php get_template_part('src/svg/generator'); ?>
                <h3 class=" text-3rd-heading font-normal leading-[1.5]">Generator</h3>
                <p class="text-base font-normal text-center"><?php echo esc_html($generator); ?></p>
            </div>
            <div class="amenities flex flex-col gap-3 items-center justify-center px-3 py-6 aspect-[4/3] border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                <?php get_template_part('src/svg/gas_supply'); ?>
                <h3 class=" text-3rd-heading font-normal leading-[1.5]">Gas Supply</h3>
                <p class="text-base font-normal text-center"><?php echo esc_html($gas_supply); ?></p>
            </div>
            <div class="amenities flex flex-col gap-3 items-center justify-center px-3 py-6 aspect-[4/3] border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                <?php get_template_part('src/svg/cables'); ?>
                <h3 class=" text-3rd-heading font-normal leading-[1.5]">Electric Cables</h3>
                <p class="text-base font-normal text-center"><?php echo esc_html($electric_cables); ?></p>
            </div>
            <div class="amenities flex flex-col gap-3 items-center justify-center px-3 py-6 aspect-[4/3] border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                <?php get_template_part('src/svg/tiles'); ?>
                <h3 class=" text-3rd-heading font-normal leading-[1.5]">Floor Tiles</h3>
                <p class="text-base font-normal text-center"><?php echo esc_html($floor_tiles); ?></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
            <?php if (get_field('door')): ?>
                <div class="p-6 border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="flex flex-row items-center gap-3 mb-3">
                        <?php get_template_part('src/svg/door'); ?>
                        <h3 class="text-3rd-heading font-normal">Door</h3>
                    </div>
                    <div class="prose prose-sm max-w-none text-gray-700">
                        <?php echo wp_kses_post(get_field('door')); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field('structural_materials')): ?>
                <div class="p-6 border border-[#e9e9e9] rounded-lg shadow hover:shadow-lg transition duration-300">
                    <div class="flex flex-row items-center gap-3 mb-3">
                        <?php get_template_part('src/svg/materials'); ?>
                        <h3 class="text-3rd-heading font-normal">Structural Materials</h3>
                    </div>
                    <div class="prose prose-sm max-w-none text-gray-700">
                        <?php echo wp_kses_post(get_field('structural_materials')); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="project_gallery" class=" bg-secondary-50 py-10 md:py-20">
    <div class="container">
        <h2 class="text-2nd-heading font-normal leading-tight text-center mb-6" >Project gallery</h2>
        <?php $gallery = get_field('gallery');
            if ($gallery): ?>
                <div id="gallery-masonry" class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
                    <?php foreach ($gallery as $image): ?>
                        <div class="break-inside-avoid overflow-hidden rounded-xl group">
                            <a href="<?php echo esc_url($image['url']); ?>"
                            class="image-popup block relative rounded-xl overflow-hidden"
                            data-glightbox="title: <?php echo esc_attr($image['alt']); ?>">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 z-10"></div>
                                <div class="absolute inset-0 flex items-center justify-center text-white text-base font-semibold opacity-0 group-hover:opacity-100 transition duration-300 z-20">
                                    View
                                </div>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>"
                                    class="w-full h-auto object-cover transform transition-transform duration-500 group-hover:scale-110 rounded-xl" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </div>
</section>
<?php
    $video = get_field('video');
    $video_banner = get_field('video_banner');

    if ($video && $video_banner):
?>
<section class="relative bg-gradient-to-t from-white from-50% to-gray-200 to-50% md:py-40 py-5 z-10 ">
    <div class="md:max-w-4xl max-w-[320px] mx-auto px-4">
        <div class="flex justify-center items-center">
            <a href="<?php echo esc_url($video); ?>"
               class="popup-youtube block relative group overflow-hidden rounded-xl"
               data-glightbox="type: video">
                <img src="<?php echo esc_url($video_banner['url']); ?>"
                     alt="<?php echo esc_attr($video_banner['alt']); ?>"
                     class="w-full object-cover rounded-xl transition-transform duration-500 group-hover:scale-105" />
    
                <!-- Play Button -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="md:w-[90px] md:h-[90px] w-[60px] h-[60px]  rounded-full border-2 border-white flex items-center justify-center bg-white/20 backdrop-blur-sm transition duration-300 group-hover:bg-white/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white group-hover:scale-110 transition" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6.5 5.5v9l7-4.5-7-4.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="py-5 md:py-20 bg-[#003333]">
    <div class="container md:max-w-[600px]">
        <h2 class="text-2nd-heading font-normal leading-tight text-center mb-6 text-white">Connect & Explore</h2>
        <?php echo do_shortcode('[jet_fb_form form_id="155" submit_type="ajax" required_mark="*" fields_layout="column" fields_label_tag="label" markup_type="fieldset" enable_progress="" clear="1"]'); ?>
    </div>
</section>

<?php get_footer();?>