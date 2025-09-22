<?php get_header();?>
<?php
    if (get_post_type() === 'project' && is_singular('project')) {
        $banner_image = get_field('banner_image');
    } else {
        $banner_image = INNOVERA_URI . '/src/images/slider/breadcrumb.webp';
    }
?>
<?php
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
    $gallery = get_field('gallery'); 
    $video = get_field('video');     
?>


<section class="page-banner h-screen"
    style="background-image: url('<?php echo esc_url($banner_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-black/55 h-full w-full flex flex-col justify-center py-5 md:py-10">
        <div class="container">
            <?php
                $terms = get_the_terms(get_the_ID(), 'occupancy-type');
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        echo '<p class="text-white text-center">' . esc_html($term->name) . '</p>';
                    }
                }
            ?>
            <h1 class="text-hero-heading leading-[1] font-normal text-center text-white"><?php the_title(); ?></h1>
            <address class="text-white text-center"><?php echo esc_html($plot_address); ?></address>
        </div>
    </div>
</section>
<section class="project-details py-5 md:py-20">
    <div class="container flex flex-col md:flex-row gap-20">
        <div class="feature-image w-1/2">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="" class="w-full h-auto object-cover rounded-lg">
        </div>
        <div class="w-1/2">
            <h3 class="text-2nd-heading font-normal mt-5 mb-2">At a Glance</h3>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/hastag'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Project No:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($project_no); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/owner'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Land Owner:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($land_owner); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/address'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Plot Address:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($plot_address); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/approval'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">RAJUK Approval:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($rajuk_approval_no); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/area'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Land Area:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($area_of_land); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/type'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Land Type:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($land_type); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/level'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Level:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($level); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/units'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Total Units:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($total_units); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/apartment_type'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Apartment Type:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($apartment_type); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/apartment_size'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Apartment Size:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($apartment_size); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="p-2">
                    <?php get_template_part('src/svg/basement'); ?>
                </div>
                <div class="flex flex-col gap-1 justify-center">
                    <h5 class=" text-xl font-normal leading-none">Basement:</h5>
                    <p class=" text-base font-normal leading-[1]"><?php echo esc_html($basement); ?></p>
                </div>
            </div>

            <p><strong>Car Parking:</strong> <?php echo esc_html($car_parking); ?></p>
            <p><strong>Developer's Portion:</strong> <?php echo esc_html($developers_portion); ?></p>
            <p><strong>Inauguration Date:</strong> <?php echo esc_html($date_of_inauguration); ?></p>
            <p><strong>Construction Period:</strong> <?php echo esc_html($construction_period); ?></p>
            <p><strong>Probable Handover:</strong> <?php echo esc_html($probable_handover_date); ?></p>
        </div>
    </div>
</section>

<section class="bg-[#003333] text-white py-15">
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






<div class=" container project-details">



    <h3 class="text-2xl font-bold mt-5 mb-2">project amenities</h3>
    <p><strong>Lift:</strong> <?php echo esc_html($lift); ?></p>
    <p><strong>Generator:</strong> <?php echo esc_html($generator); ?></p>
    <p><strong>Gas Supply:</strong> <?php echo esc_html($gas_supply); ?></p>
    <p><strong>Electric Cables:</strong> <?php echo esc_html($electric_cables); ?></p>
    <p><strong>Floor Tiles:</strong> <?php echo esc_html($floor_tiles); ?></p>

    <?php if (get_field('door')): ?>
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Door</h3>
            <div class="prose prose-sm max-w-none text-gray-700">
                <?php echo wp_kses_post(get_field('door')); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (get_field('structural_materials')): ?>
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-2 text-gray-800">Structural Materials</h3>
            <div class="prose prose-sm max-w-none text-gray-700">
                <?php echo wp_kses_post(get_field('structural_materials')); ?>
            </div>
        </div>
    <?php endif; ?>
</div>



<?php get_footer();?>