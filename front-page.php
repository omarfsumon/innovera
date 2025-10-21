<?php get_header(); ?>
<section id="hero" class="relative h-[580px] lg:min-h-screen flex items-center justify-center z-0 overflow-hidden">
    <div class="hero-slider absolute z-10 w-full h-full top-0 left-0">
        <div class="swiper w-full h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" width="768" height="auto" srcset="<?php echo INNOVERA_URI . '/src/images/slider/1_m.webp' ?>" type="image/webp">
                        <img fetchpriority="high" width="1920" height="auto" src="<?php echo INNOVERA_URI . '/src/images/slider/1_d.webp'?>" class="absolute inset-0 w-full h-full object-cover" alt="Hero Slide 1" loading="lazy" decoding="async">
                    </picture>
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-20 container mx-auto px-4 h-full flex items-center justify-center">
                        <div class="text-center mt-16 md:mt-5">
                            <h1 class="text-hero-heading leading-tight text-white font-semibold mb-4 scroll_animate">Trust - it's what we build.</h1>
                            <p class="text-base md:text-lg leading-relaxed font-light mb-4 text-white text-center scroll_animate">Ensuring customer satisfaction through delivery of true value in all our dealings.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center scroll_animate">
                                <a href="#contact" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Schedule a Visit
                                </a>
                                <a href="/project/" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Explore Property
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" width="768" height="auto" srcset="<?php echo INNOVERA_URI . '/src/images/slider/2_m.webp' ?>" type="image/webp">
                        <img fetchpriority="high" width="1920" height="auto" src="<?php echo INNOVERA_URI . '/src/images/slider/2_d.webp'?>" class="absolute inset-0 w-full h-full object-cover" alt="Hero Slide 1" loading="lazy" decoding="async">
                    </picture>
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-20 container mx-auto px-4 h-full flex items-center justify-center">
                        <div class="text-center text-white mt-16 md:mt-5">
                            <h1 class="text-hero-heading leading-tight text-white font-semibold mb-4 scroll_animate">Always deliver more than expected</h1>
                            <p class="text-base md:text-lg leading-relaxed font-light mb-6 scroll_animate">We lead by serving you to the best of our ability.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center scroll_animate">
                                <a href="#contact" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Schedule a Visit
                                </a>
                                <a href="/project/" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Explore Property
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" width="768" height="auto" srcset="<?php echo INNOVERA_URI . '/src/images/slider/3_m.webp' ?>" type="image/webp">
                        <img fetchpriority="high" width="1920" height="auto" src="<?php echo INNOVERA_URI . '/src/images/slider/3_d.webp'?>" class="absolute inset-0 w-full h-full object-cover" alt="Hero Slide 1" loading="lazy" decoding="async">
                    </picture>
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-20 container mx-auto px-4 h-full flex items-center justify-center">
                        <div class="text-center text-white mt-16 md:mt-5">
                            <h1 class="text-hero-heading leading-tight text-white font-semibold mb-4 scroll_animate">Elegant and comfort in a modern Space</h1>
                            <p class="text-base md:text-lg leading-relaxed font-light mb-6 scroll_animate">
                                Conducting each activity in the business in the most fair and just manner.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center scroll_animate">
                                <a href="#contact" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Schedule a Visit
                                </a>
                                <a href="/project/" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Explore Property
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative overflow-hidden">
                    <picture>
                        <source media="(max-width: 768px)" width="768" height="auto" srcset="<?php echo INNOVERA_URI . '/src/images/slider/4_m.webp' ?>" type="image/webp">
                        <img fetchpriority="high" width="1920" height="auto" src="<?php echo INNOVERA_URI . '/src/images/slider/4_d.webp'?>" class="absolute inset-0 w-full h-full object-cover" alt="Hero Slide 1" loading="lazy" decoding="async">
                    </picture>
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="relative z-20 container mx-auto px-4 h-full flex items-center justify-center">
                        <div class="text-center text-white mt-16 md:mt-5">
                            <h1 class="text-hero-heading leading-tight text-white font-semibold mb-4 scroll_animate">Delivering what is promised, on time, every time</h1>
                            <p class="text-base md:text-lg leading-relaxed font-light mb-6 scroll_animate">
                                We ensure optimum satisfaction of customers with maintain of proper handover deadline.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center scroll_animate">
                                <a href="#contact" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Schedule a Visit
                                </a>
                                <a href="/project/" class="inline-block px-6 py-2 text-white hover:text-secondary-100 font-medium rounded-md backdrop-blur-md border border-white/50">
                                    Explore Property
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our_journey" class="py-12 md:py-20 bg-white z-0 overflow-hidden">
    <div class="container flex flex-col lg:flex-row gap-5 justify-between items-center">
        <div class="lg:w-[40%] lg:pr-8">
            <span class="text-secondary-900 text-sm font-normal uppercase tracking-wider py-1 px-2 bg-secondary-50 scroll_animate" >Our journey</span>
            <h2 class="text-2nd-heading leading-[1.3] mb-5 mt-5 scroll_animate">
                Luxury living where comfort meets timeless style, effortlessly</h2>
            <p class="text-gray-600 mb-8 scroll_animate">
                Innovera Holdings Ltd. is a forward-thinking real estate developer company dedicated to creating sustainable communities and iconic properties in Bangladesh. 
                With a vision to combine innovation, quality, and reliability, we aim to transform the landscape of urban living with modern architecture, 
                premium construction, and sustainable real estate solutions across Dhaka and beyond.
            </p>
            <a class="btn-main scroll_animate" href="/about-us/">
                Explore More
            </a>
        </div>
        <div class="lg:w-[60%] grid md:grid-cols-2 gap-5">
            <div class=" bg-gray-100 p-5 rounded-xl scroll_animate">
                <h4 class="text-xl font-normal mb-3 mt-2">About the Logo</h4>
                <p class="text-gray-600">
                    The logo reflects the company’s identity as an innovative and forward-thinking developer. 
                    The tagline reinforces the company is committed to building trust, relationships, and long-term value with every client.
                </p>
            </div>

            <div class=" bg-gray-100 p-5 rounded-xl scroll_animate">
                <h4 class="text-xl font-normal mb-3 mt-2">Color Significance</h4>
                <p class="text-gray-600">
                    The orange hue conveys energy, creativity, and optimism, highlighting the company’s dynamic approach to real estate development. 
                    It also reflects warmth and trust, aligning with the brand promise.
                </p>
            </div>

            <div class=" bg-gray-100 p-5 rounded-xl scroll_animate">
                <h4 class="text-xl font-normal mb-3 mt-2">Design Concept</h4>
                <p class="text-gray-600">
                    The logo features a stylized building made of vibrant orange blocks, symbolizing strength, structure, 
                    and modern architecture. It visually represents growth, progress, and a strong foundation.
                </p>
            </div>

            <div class=" bg-gray-100 p-5 rounded-xl scroll_animate">
                <h4 class="text-xl font-normal mb-3 mt-2">Brand Message</h4>
                <p class="text-gray-600">
                    Together, the elements of the logo convey that Innovera Holdings Ltd. is not just a builder of properties, 
                    but a creator of trust, quality, and innovation in the real estate industry of Bangladesh.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="featured_projects" class="py-8 md:py-24 bg-[#003333] text-white overflow-hidden z-0 rounded-3xl">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto md:mb-8 mb-4">
            <span class="text-secondary-100 text-sm font-normal uppercase tracking-wider py-1 px-2 bg-[#1E4645] scroll_animate">Featured Projects</span>
            <h2 class="text-2nd-heading mb-6 text-white scroll_animate">Discover Our Projects</h2>
        </div>
        <div class="flex flex-wrap">
            <div class="tabs w-full">
                <ul id="tabButtons" class="project-tab flex flex-col lg:flex-row justify-center mb-4 bg-[#ffffff0d] rounded-2xl lg:rounded-full overflow-hidden">
                    <li class="active-tab" data-tab="tab1">Premium</li>
                    <li data-tab="tab2">Exlcusive</li>
                    <li data-tab="tab3">Standard</li>
                    <li data-tab="tab4">Interior</li>
                    <li><a class="hover:text-white" href="/project/">All Projects</a></li>
                </ul>
                <ul id="tabContents" class="pt-3">
                    <li data-tab-content="tab1" class="block">
                        <div class="flex flex-col lg:flex-row gap-4 justify-between scroll_animate" data-animate="animate__fadeIn">
                            <div class="lg:w-1/3">
                                <div class="bg-[#1E4645] rounded-2xl h-full lg:p-10 p-5 flex flex-col justify-between">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-4xl text-white">Akashnila</h3>
                                        <span class="text-white">A Premium Landmark</span>
                                    </div>
                                    <p class="mb-0 p-sm-relative bottom-0 w-full opacity-80">
                                        AKASHNILA is one of Innovera Holdings Ltd.’s signature Premium Category Projects, designed to redefine modern luxury living in Dhaka. Located in the prestigious Bashundhara Residential Area, Block – C, this project blends architectural excellence, cutting-edge amenities, and superior construction quality to create a residential experience that reflects elegance, comfort, and exclusivity.
                                    </p>
                                </div>
                            </div>
                            <div class="lg:w-2/3">
                                <picture>
                                    <source media="(max-width: 425px)" srcset="<?php echo INNOVERA_URI . '/src/images/projects/premium_p.webp'?>" loading="lazy" decoding="async">
                                    <img width="820" height="auto" src="<?php echo INNOVERA_URI . '/src/images/projects/premium_d.webp'?>" class="w-100 rounded-2xl" alt="Premium" loading="lazy" decoding="async">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li data-tab-content="tab2" class="hidden">
                        <div class="flex flex-col lg:flex-row gap-4 justify-between scroll_animate" data-animate="animate__fadeIn">
                            <div class="lg:w-1/3">
                                <div class="bg-[#1E4645] rounded-2xl h-full lg:p-10 p-5 flex flex-col justify-between">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-3xl text-white" data-aos="fade-in" data-aos-delay="100">Nishorgo Kamal's Residence</h3>
                                        <span class="text-white" data-aos="fade-in" data-aos-delay="200">Where Comfort Meets Elegance</span>
                                    </div>
                                    <p class="mb-0 p-sm-relative bottom-0 w-full opacity-80" data-aos="fade-in" data-aos-delay="200">
                                        This project is a distinguished Exclusive Category Project by Innovera Holdings Ltd., crafted to provide a harmonious balance between comfort, style, and affordability. Located in the well-connected Block H of Bashundhara Residential Area, the project caters to modern families and professionals seeking a high-quality lifestyle without compromising value.
                                    </p>
                                </div>
                            </div>
                            <div class="lg:w-2/3">
                                <picture>
                                    <source media="(max-width: 425px)" srcset="<?php echo INNOVERA_URI . '/src/images/projects/exclusive_p.webp'?>" loading="lazy" decoding="async">
                                    <img width="820" height="auto" src="<?php echo INNOVERA_URI . '/src/images/projects/exclusive_d.webp'?>" class="w-100 rounded-2xl" alt="Exclusive" loading="lazy" decoding="async">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li data-tab-content="tab3" class="hidden">
                        <div class="flex flex-col lg:flex-row gap-4 justify-between scroll_animate" data-animate="animate__fadeIn">
                            <div class="lg:w-1/3">
                                <div class="bg-[#1E4645] rounded-2xl h-full lg:p-10 p-5 flex flex-col justify-between">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-4xl text-white">Chhayatoru</h3>
                                        <span>Simple, Safe, and Affordable Living</span>
                                    </div>
                                    <p class="mb-0 p-sm-relative bottom-0 w-full opacity-80">
                                        Chhayatoru is a thoughtfully designed Standard Category Project by Innovera Holdings Ltd., created for families and professionals who want to enjoy safe, functional, and affordable living in Dhaka’s growing residential hub, located in Savar DOHS. The project offers convenience, accessibility, and comfort at an attainable investment level.
                                    </p>
                                </div>
                            </div>

                            <div class="lg:w-2/3">
                                <picture>
                                    <source media="(max-width: 425px)" srcset="<?php echo INNOVERA_URI . '/src/images/projects/standard_p.webp'?>" loading="lazy" decoding="async">
                                    <img width="820" height="auto" src="<?php echo INNOVERA_URI . '/src/images/projects/standard_d.webp'?>" class="w-100 rounded-2xl" alt="Standard" loading="lazy" decoding="async">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li data-tab-content="tab4" class="hidden">
                        <div class="flex flex-col lg:flex-row gap-4 justify-between scroll_animate" data-animate="animate__fadeIn">
                            <div class="lg:w-1/3">
                                <div class="bg-[#1E4645] rounded-2xl h-full lg:p-10 p-5 flex flex-col justify-between">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-4xl text-white">Interior Solutions</h3>
                                        <span>Transforming Spaces into Homes</span>
                                    </div>
                                    <p class="mb-0 p-sm-relative bottom-0 w-full opacity-80">
                                        At <strong>Innovera Holdings Ltd.</strong>, we believe that interiors define the personality and comfort of a home. 
                                        Our <strong>Interior Solutions</strong> are designed to blend <strong>functionality, style, and innovation</strong>, creating spaces that are as beautiful as they are practical.
                                        <i class="mt-4 block text-white">“With Innovera, your interiors aren’t just beautiful—they’re functional, comfortable, and truly yours.”</i>
                                    </p>
                                </div>
                            </div>
                            <div class="lg:w-2/3">
                                <div class="relative">
                                    <picture>
                                        <source media="(max-width: 425px)" srcset="<?php echo INNOVERA_URI . '/src/images/projects/interior_p.webp'?>" loading="lazy" decoding="async">
                                        <img width="820" height="auto" src="<?php echo INNOVERA_URI . '/src/images/projects/interior_d.webp'?>" class="w-100 rounded-2xl" alt="interior" loading="lazy" decoding="async">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="what_we_do" class=" py-8 md:py-24 z-0 overflow-hidden">
    <div class="container">
        <div class="flex flex-col items-center mb-5">
            <span class="subtitle text-secondary-900 text-sm font-normal uppercase tracking-wider py-1 px-2 self-center bg-secondary-50 scroll_animate">What We Do</span>
            <h2 class="text-2nd-heading scroll_animate" data-animate="animate__flipInX">Our Services</h2>
        </div>
        <div id="gallery" class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-center items-center">
            <img fetchpriority="high" loading="lazy" decoding="async" width="408" height="272" src="<?php echo INNOVERA_URI . '/src/images/gallery/what_we_do_1.webp' ?>" alt="What We Do"
                class=" w-[408] h-[272] aspect-[3/2] object-cover rounded-xl hover:scale-105 transition duration-300 scroll_animate" data-animate="animate__fadeIn" style="animation-delay: 0.1s;">
            <img fetchpriority="high" loading="lazy" decoding="async" width="408" height="272" src="<?php echo INNOVERA_URI . '/src/images/gallery/what_we_do_2.webp' ?>" alt="What We Do"
                class=" w-[408] h-[272] aspect-[3/2] object-cover rounded-xl hover:scale-105 transition duration-300 scroll_animate" data-animate="animate__fadeIn" style="animation-delay: 0.2s;">
            <img fetchpriority="high" loading="lazy" decoding="async" width="408" height="272" src="<?php echo INNOVERA_URI . '/src/images/gallery/what_we_do_3.webp' ?>" alt="What We Do"
                class=" w-[408] h-[272] aspect-[3/2] object-cover rounded-xl hover:scale-105 transition duration-300 scroll_animate" data-animate="animate__fadeIn" style="animation-delay: 0.3s;">
        </div>
    </div>
</section>
<section id="why_innovera" class="bg-[#003333] text-white md:py-24 py-12 z-0 rounded-3xl overflow-hidden">
    <div class="container flex flex-col gap-10 items-center justify-center lg:justify-between">
        <div class="w-full flex flex-col items-center text-center">
            <span class="subtitletext-secondary-100 text-sm font-normal uppercase tracking-wider py-1 px-2 bg-[#1E4645] rounded scroll_animate">Discover</span>
            <h2 class="text-2nd-heading text-white leading-[1.3] scroll_animate">Why Choose Innovera?</h2>
            <p class="scroll_animate">
                At <strong>Innovera Holdings Ltd.</strong>, we don’t just build apartments—we create lasting value and lifestyles. <br>Here’s why customers and landowners trust us with their biggest investments:
            </p>
        </div>
        <div class="flex flex-col lg:flex-row gap-5">
            <div class="w-full lg:w-1/2 lg:order-last">
                <picture class="flex flex-col items-center">
                    <source media="(max-width: 768px)" srcset="<?php echo INNOVERA_URI . '/src/images/home/why_innovera_p.webp' ?>" type="image/webp">
                    <img fetchpriority="high" loading="lazy" decoding="async" width="650" height="auto" src="<?php echo INNOVERA_URI . '/src/images/home/why_innovera_d.webp'?>" class="object-cover rounded-2xl scroll_animate" data-animate="animate__fadeIn" alt="Discover">
                </picture>
            </div>
            <div class="icon-list w-full lg:w-1/2">
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M468.08-162.31q7.84 0 16.07-3.54 8.23-3.53 13.31-8.61l311.85-311.85q15.07-15.07 23.27-30.84 8.19-15.77 8.19-34.62 0-19.08-8.19-37.04-8.2-17.96-23.27-32.81l-150-150q-14.85-15.07-30.5-22.11-15.66-7.04-34.73-7.04-18.85 0-35 7.04-16.16 7.04-30.46 22.11l-34.85 34.85 74 74.23q11.92 11.69 17.77 26.62 5.84 14.92 5.84 30.3 0 31.24-20.42 51.66-20.42 20.42-51.65 20.42-15.39 0-30.04-4.69-14.65-4.69-26.35-16.39l-76.54-76.3-172.69 172.69q-6.07 6.08-9.11 13.81-3.04 7.73-3.04 15.57 0 14.16 9.08 23.35 9.07 9.19 23.23 9.19 7.84 0 16.07-3.54 8.23-3.53 13.31-8.61L390-535.23l28.31 28.31-126.54 126.77q-6.08 6.07-9.12 13.8-3.03 7.73-3.03 15.58 0 13.39 9.46 22.85t22.84 9.46q7.85 0 16.08-3.54 8.23-3.54 13.31-8.62l136-135.76 28.31 28.3-135.77 136q-5.31 5.08-8.73 13.31-3.43 8.23-3.43 16.08 0 13.38 9.46 22.84 9.47 9.47 22.85 9.47 7.85 0 15.58-3.04t13.8-9.12l136-135.77L583.69-360l-136 136q-6.07 6.08-9.11 14.58-3.04 8.5-3.04 15.57 0 14.16 9.96 22.85 9.96 8.69 22.58 8.69Zm-.23 40q-30.85 0-52.81-22.57-21.96-22.58-19.27-55.74-34 .39-56.62-20.3-22.61-20.7-21.46-57.77-37.07.38-58.42-21.19-21.35-21.58-19.42-56.89-33.39.39-55.85-18.77-22.46-19.15-22.46-53.31 0-15.38 5.96-30.8 5.96-15.43 17.65-27.12l201.23-201 103.31 103.31q5.08 5.31 12.54 8.73 7.46 3.42 16.85 3.42 12.84 0 22.69-8.96 9.85-8.96 9.85-23.35 0-9.38-3.43-16.84-3.42-7.46-8.73-12.54L401.85-771.62q-14.85-15.07-30.89-22.11-16.04-7.04-35.11-7.04-18.85 0-34.23 7.04-15.39 7.04-30.47 22.11l-121.77 122q-12.84 12.85-20.76 30.62-7.93 17.77-8.39 36.69-.46 13.54 2.31 26.04t8.77 23.5L101-502.46q-10.08-16.08-15.77-37.04-5.69-20.96-5.23-42.81.46-27.23 10.92-52.19 10.46-24.96 29.93-44.42l121-121q20.92-20.7 44.27-30.77 23.34-10.08 50.5-10.08 27.15 0 50.11 10.08 22.96 10.07 43.65 30.77l34.85 34.84 34.85-34.84q20.92-20.7 43.88-30.77 22.96-10.08 50.12-10.08 27.15 0 50.5 10.08 23.34 10.07 44.04 30.77l149 149q20.69 20.69 31.92 46.46t11.23 52.92q0 27.16-11.23 50.12-11.23 22.96-31.92 43.65L525.77-146.15q-12.46 12.46-27.12 18.15-14.65 5.69-30.8 5.69ZM339.62-626.92Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Trust & Transparency</h4>
                        <p class="mb-0 opacity-60">We believe in honest communication, fair contracts, and no hidden costs. From booking to handover, our process is fully transparent.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Quality Construction</h4>
                        <p class="mb-0 opacity-60">We use top-grade materials, modern engineering techniques, and strict quality control to ensure that your home stands strong for generations.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M440-120v-240h80v80h320v80H520v80h-80Zm-320-80v-80h240v80H120Zm160-160v-80H120v-80h160v-80h80v240h-80Zm160-80v-80h400v80H440Zm160-160v-240h80v80h160v80H680v80h-80Zm-480-80v-80h400v80H120Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Customization Options</h4>
                        <p class="mb-0 opacity-60">Your home should reflect your lifestyle. With our Interior & Customization service, you can choose tiles, fittings, finishes, and layouts to make your space truly yours.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M20-248.46v-48.77q0-39.92 41.69-65.58 41.7-25.65 108.7-25.65 11.07 0 22.3.69t22.62 2.69q-11.69 18.7-17.35 38.81-5.65 20.12-5.65 41.27v56.54H20Zm240 0v-55q0-28.09 15.77-51.35 15.77-23.27 45.46-40.57 29.69-17.31 70.16-25.96 40.46-8.66 88.46-8.66 48.92 0 89.38 8.66 40.46 8.65 70.15 25.96 29.7 17.3 45.16 40.57Q700-331.55 700-303.46v55H260Zm507.69 0v-56.42q0-22.57-5.34-42.54-5.35-19.96-16.04-37.66 11.77-2 22.5-2.69t21.19-.69q67 0 108.5 25.35 41.5 25.34 41.5 65.88v48.77H767.69Zm-444.61-60h314.46v-4.23q-6.15-24.23-51.08-40.77Q541.54-370 480-370q-61.54 0-106.46 16.54-44.93 16.54-50.46 40.77v4.23Zm-152.8-118.85q-28.28 0-48.32-20.11t-20.04-48.35q0-28.61 20.12-48.34 20.11-19.73 48.35-19.73 28.61 0 48.53 19.73 19.93 19.73 19.93 48.46 0 27.88-19.72 48.11-19.71 20.23-48.85 20.23Zm619.72 0q-28 0-48.23-20.23-20.23-20.23-20.23-48.11 0-28.73 20.23-48.46t48.3-19.73q28.93 0 48.66 19.73 19.73 19.73 19.73 48.34 0 28.24-19.68 48.35-19.68 20.11-48.78 20.11ZM480.14-460q-43.22 0-73.6-30.29-30.38-30.28-30.38-73.55 0-44.14 30.28-73.99 30.29-29.86 73.56-29.86 44.13 0 73.99 29.82 29.85 29.81 29.85 73.89 0 43.21-29.81 73.6Q524.21-460 480.14-460Zm.05-60q18.35 0 31-12.84 12.66-12.85 12.66-31.2 0-18.34-12.61-31-12.61-12.65-31.24-12.65-18.15 0-31 12.61-12.85 12.6-12.85 31.24 0 18.15 12.85 31Q461.85-520 480.19-520Zm.43 211.54ZM480-563.84Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Expert Team</h4>
                        <p class="mb-0 opacity-60">From architects and engineers to customer service executives, our experienced professionals are committed to delivering excellence in every project.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M480-181.54q-54.33 0-102.36-17.88-48.02-17.89-87.1-49.89l-69.46 68.46q-8.18 8.31-20.82 8.31t-20.95-8.31q-8.31-8.3-8.31-20.95 0-12.64 8.31-20.81l68.46-68.47q-32-39.07-49.88-87.59Q180-427.2 180-481.54q0-125.62 87.19-212.81T480-781.54h300v300q0 125.63-87.19 212.81-87.19 87.19-212.81 87.19Zm0-60q100 0 170-70t70-170v-240H480q-100 0-170 70t-70 170q0 41.69 13.54 79.31 13.54 37.62 37.61 67.77l208.16-208.15q8.18-8.31 20.82-8.31t21.06 8.42q9.19 9.19 9.19 21.27t-9.3 21.38L332.92-292.08q30.16 24.08 67.77 37.31 37.62 13.23 79.31 13.23Zm0-240Z"/></svg>
                    </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Sustainability & Innovation</h4>
                        <p class="mb-0 opacity-60">We care about the future. Our projects incorporate eco-friendly designs, green spaces, and energy-efficient features for sustainable living.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M471.54-161.15q5.92 0 12.04-2.77 6.11-2.77 9.65-6.31l319.92-319.92q13.54-13.54 20.39-28.93 6.84-15.38 6.84-32.3 0-17.54-6.84-33.77-6.85-16.24-20.39-29.16l-160-160q-12.92-13.54-28-19.81-15.07-6.26-32.61-6.26-16.92 0-32.5 6.26-15.58 6.27-28.73 19.81l-22.93 22.93 74 74.61q13.46 12.85 19.89 29.31 6.42 16.46 6.42 34.15 0 36.62-24.46 61.08t-61.08 24.46q-17.69 0-34.27-5.85-16.57-5.84-29.42-18.69l-75.77-75.15-173.84 173.84q-4.54 4.54-6.81 10.16-2.27 5.61-2.27 11.54 0 11.07 7.54 18.92 7.54 7.85 18.61 7.85 5.93 0 12.04-2.77 6.12-2.77 9.66-6.31L380-545.61l42.15 42.15-130.77 131.38q-4.53 4.54-6.8 10.16-2.27 5.61-2.27 11.54 0 10.69 7.73 18.42 7.73 7.73 18.42 7.73 5.93 0 12.04-2.77 6.12-2.77 9.65-6.31l136-135.38 42.16 42.15-135.39 136q-4.15 3.54-6.61 9.65-2.46 6.12-2.46 12.04 0 10.7 7.73 18.43t18.42 7.73q5.92 0 11.54-2.27 5.61-2.27 10.15-6.81l136-135.38L589.85-345l-136 136q-4.54 4.54-6.81 10.54-2.27 6-2.27 11.54 0 11.07 8.23 18.42 8.23 7.35 18.54 7.35Zm-.62 59.99q-33.92 0-59.15-23.53-25.23-23.54-26.38-58.62-34-2.31-56.81-24.15-22.81-21.85-24.73-57.39-35.54-2.3-57.46-24.84-21.93-22.54-23.47-56.7-35.69-2.3-58.92-25.88-23.23-23.58-23.23-59.65 0-17.69 6.73-34.66 6.73-16.96 19.58-29.8l216.61-216 117.16 117.15q3.53 4.15 9.26 6.62 5.74 2.46 12.43 2.46 10.92 0 18.84-7.23 7.93-7.23 7.93-18.93 0-6.69-2.46-12.42-2.47-5.73-6.62-9.27L399.92-774.31q-12.92-13.54-28.19-19.81-15.27-6.26-32.81-6.26-16.92 0-32.11 6.26-15.2 6.27-28.73 19.81l-131.39 132q-10.92 10.92-17.88 25.81-6.96 14.88-8.19 30.35-1.24 12.77 1.15 25.27 2.38 12.5 8.38 23.5L86-493.23Q72.46-512.77 65.62-537q-6.85-24.23-5.62-49.15 1.23-27.62 12.46-53.35t31.46-45.96l131-131q22.47-21.85 48.89-32.88 26.42-11.04 55.5-11.04 29.07 0 55.3 11.04 26.24 11.03 48.08 32.88l22.93 22.92 22.92-22.92q22.46-21.85 48.69-32.88 26.23-11.04 55.31-11.04 29.08 0 55.5 11.04 26.42 11.03 48.27 32.88l159 159q21.84 21.85 33.46 49.73 11.61 27.88 11.61 56.96 0 29.08-11.61 55.31-11.62 26.23-33.46 48.07L535.38-128.08q-13.23 13.23-29.8 20.08-16.58 6.84-34.66 6.84Zm-113.61-532.3Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Customer-Centric Approach</h4>
                        <p class="mb-0 opacity-60">Our relationship doesn’t end at handover. We offer after-sales support, property management, and lifelong assistance to keep your investment safe.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4 scroll_animate">
                    <div class="mr-3">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#fdf6ef">
                            <path d="M480-100q-147.06 0-255.22-97.04T102-440h61q14.62 121 105.23 200.5Q358.85-160 480-160q134 0 227-93t93-227q0-134-93-227t-227-93q-90.23 0-166.04 46.35-75.81 46.34-116.88 127.11h118.3v60H110.31q30.15-129.23 133.42-211.34Q347-860 480-860q78.85 0 148.2 29.92t120.65 81.21q51.3 51.29 81.22 120.63Q860-558.9 860-480.07q0 78.84-29.93 148.21-29.92 69.37-81.22 120.68T628.2-129.93Q558.85-100 480-100Zm108.92-228.92L450-467.9v-197.48h60v173.23l120.69 121.07-41.77 42.16Z"/></svg>
                        </i>
                    </div>
                    <div>
                        <h4 class="text-xl font-normal mb-1 text-secondary-50">Proven Track Record</h4>
                        <p class="mb-0 opacity-60">With multiple successful projects completed and ongoing developments across Dhaka, Innovera has earned a reputation for on-time delivery and unmatched reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="latest_update" class="py-8 md:py-24 z-0 overflow-hidden">
    <div class="container ">
        <div class="flex flex-col justify-center text-center mb-5">
            <div class="subtitle text-secondary-900 text-sm font-normal uppercase tracking-wider py-1 px-2 self-center bg-secondary-50 rounded scroll_animate">Latest Update</div>
            <h2 class="text-2nd-heading scroll_animate">Media & Event</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php
                $events = new WP_Query([
                    'post_type'      => 'events',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'status'         => 'publish',
                ]);

                if ($events->have_posts()) :
                    while ($events->have_posts()) : $events->the_post(); ?>
                    
                    <a href="<?php the_permalink(); ?>" class="scroll_animate" data-animate="animate__fadeIn">
                        <div class="overflow-hidden relative rounded-1 text-light text-center">
                            <div class="overflow-hidden rounded-xl">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img fetchpriority="high" width="400" height="auto" src="<?php the_post_thumbnail_url('full'); ?>" class="aspect-[3/2] rounded-xl object-cover" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
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
        <div class="text-center mt-5 scroll_animate" data-animate="animate__fadeIn">
            <a href="/events" class="inline-flex items-center px-8 py-2 bg-secondary-400 text-white hover:text-secondary-600 font-medium hover:bg-secondary-100 transition-all rounded">View All Events</a>
        </div>
    </div>
</section>
<section id="video" class="p-0 z-0 overflow-hidden">
    <div class="flex items-center w-full">
        <a class="block popup-youtube group w-full" href="https://youtu.be/LwLt4BT0w6o?si=82fUPRPcXvUz3iVh">
            <div class="relative overflow-hidden h-[300px] md:h-[400px] lg:h-[600px]">
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                    <div class="w-20 h-20 rounded-full bg-white/5 hover:bg-orange-500 transition-all duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="80px" viewBox="0 -960 960 960" width="80px" fill="#FFFFFF">
                            <path d="m401.46-341.54 217-138.46-217-138.46v276.92ZM480.13-120q-74.44 0-139.79-28.34t-114.48-77.42q-49.13-49.08-77.49-114.37Q120-405.42 120-479.87q0-74.67 28.34-140.41 28.34-65.73 77.42-114.36 49.08-48.63 114.37-76.99Q405.42-840 479.87-840q74.67 0 140.41 28.34 65.73 28.34 114.36 76.92 48.63 48.58 76.99 114.26Q840-554.81 840-480.13q0 74.44-28.34 139.79t-76.92 114.48q-48.58 49.13-114.26 77.49Q554.81-120 480.13-120Zm-.13-30.77q137.38 0 233.31-96.04 95.92-96.04 95.92-233.19 0-137.38-95.92-233.31-95.93-95.92-233.31-95.92-137.15 0-233.19 95.92-96.04 95.93-96.04 233.31 0 137.15 96.04 233.19 96.04 96.04 233.19 96.04ZM480-480Z"/>
                        </svg>
                    </div>
                </div>
                <div class="absolute w-full h-full top-0 bg-black/40 group-hover:bg-black/50 transition-all duration-500 z-0"></div>
                <picture>
                    <source media="(max-width: 768px)" srcset="<?php echo INNOVERA_URI . '/src/images/slider/video_bg_m.webp' ?>" type="image/webp">
                    <img fetchpriority="high" loading="lazy" decoding="async" width="1920" height="auto" src="<?php echo INNOVERA_URI . '/src/images/slider/video_bg_d.webp' ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" alt="Innovera Backround">
                </picture>
            </div>
        </a>
    </div>
</section>
<section id="contact" class="container md:py-24 py-12 z-0 overflow-hidden">
    <div class="flex flex-col justify-center mb-5 text-center gap-2">
        <span class="subtitle text-secondary-900 text-sm font-normal uppercase tracking-wider py-1 px-2 self-center bg-secondary-50 rounded scroll_animate">Schedule a Meeting</span>
        <h2 class="text-2nd-heading md:leading-1 leading-none scroll_animate animate__fadeIn">Your Dreem Home is Just a Visit Away</h2>
        <p class="lg:text-lg text-base font-normal text-black/50 leading-[1.2] text-center scroll_animate">Our team is committed to honesty, professionalism, and delivering real value to our clients.</p>
    </div>
    <div class="flex md:flex-row flex-col justify-center items-center lg:gap-10 gap-5 px-5 lg:px-0">
        <div class="lg:w-6/12 md:order-first">
            <picture>
                <source media="(max-width: 768px)" width="350" height="350" srcset="<?php echo INNOVERA_URI . '/src/images/home/schedule_meeting_p.webp' ?>" type="image/webp">
                <img width="650" height="650" class="rounded-xl scroll_animate" data-animate="animate__fadeIn" src="<?php echo INNOVERA_URI . '/src/images/home/schedule_meeting_d.webp' ?>" alt="Phone" loading="lazy" decoding="async">
            </picture>
        </div>
        <div id="home_form" class="flex flex-col lg:w-6/12 w-full">
            <a class="flex items-center  gap-2 text-lg font-medium px-3 py-2 mt-4 rounded border border-dashed border-secondary-100 scroll_animate" href="tel:+8801833156010" data-animate="animate__fadeIn">
                <div class="flex items-center justify-center p-3 rounded-full bg-secondary-50">
                    <svg xmlns="http://www.w3.org/2000/svg" height="28px" width="28px" viewBox="0 -960 960 960" class="fill-secondary-500">
                        <path d="M777.61-140q-113.07 0-227.19-52.58-114.11-52.58-209.69-148.34-95.57-95.77-148.15-209.7Q140-664.54 140-777.61q0-18.17 12-30.28T182-820h130.46q15.15 0 26.73 9.89 11.58 9.88 14.73 24.42L376.85-668q2.38 16.38-1 28.15-3.39 11.77-12.16 19.77l-92.38 89.93q22.3 40.84 50.96 77.27 28.65 36.42 62.04 69.57 32.92 32.93 70 61.16 37.08 28.23 80.08 52.54l89.76-90.54q9.39-9.77 22.74-13.7 13.34-3.92 27.73-1.92l111.07 22.62q15.15 4 24.73 15.46t9.58 26V-182q0 18-12.11 30t-30.28 12ZM242.92-586.92l71.39-68.31q1.92-1.54 2.5-4.23.58-2.69-.19-5l-17.39-89.39q-.77-3.07-2.69-4.61-1.92-1.54-5-1.54H206q-2.31 0-3.85 1.54-1.53 1.54-1.53 3.85 3.07 41 13.42 83.3 10.34 42.31 28.88 84.39Zm348 345.69q39.77 18.54 82.96 28.35 43.2 9.8 80.73 11.65 2.31 0 3.85-1.54t1.54-3.85v-84.15q0-3.08-1.54-5t-4.61-2.69l-84-17.08q-2.31-.77-4.04-.19-1.73.58-3.66 2.5l-71.23 72Zm-348-345.69Zm348 345.69Z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <h6 class="text-lg font-normal md:font-medium leading-relaxed">Call now to book a meeting!</h6>
                    <p class="lg:text-lg text-base font-normal text-black/50">+88 01833156010</p>
                </div>
            </a>
            <a class="flex items-center  gap-2 text-lg font-medium px-3 py-2 mt-4 rounded border border-dashed border-secondary-100 scroll_animate" href="tel:+8802226617206" data-animate="animate__fadeIn">
                <div class="flex items-center justify-center p-3 rounded-full bg-secondary-50">
                    <svg xmlns="http://www.w3.org/2000/svg" height="28px" width="28px" viewBox="0 -960 960 960" class="fill-secondary-500">
                        <path d="M682.69-197.69h59.23q5.39 0 8.85-3.46 3.46-3.47 3.46-8.85v-535.38q0-5.39-3.46-8.85t-8.85-3.46h-59.23q-5.38 0-8.84 3.46-3.47 3.46-3.47 8.85V-210q0 5.38 3.47 8.85 3.46 3.46 8.84 3.46Zm-394.63-207.7q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96Zm0 120q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96ZM253.46-530h309.23v-140H253.46v140Zm154.6 124.61q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96Zm0 120q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96Zm120-120q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96Zm0 120q14.71 0 24.67-9.94 9.96-9.95 9.96-24.66 0-14.7-9.95-24.66-9.94-9.96-24.65-9.96-14.7 0-24.67 9.94-9.96 9.95-9.96 24.66 0 14.7 9.95 24.66t24.65 9.96Zm82.33 47.7v-480H218.08q-5.39 0-8.85 3.46t-3.46 8.85V-250q0 5.38 3.46 8.85 3.46 3.46 8.85 3.46h392.31Zm72.3 100q-21.93 0-38.62-11.2-16.68-11.19-25.76-28.8H218.08q-29.83 0-51.07-21.24-21.24-21.24-21.24-51.07v-455.38q0-29.83 21.24-51.07 21.24-21.24 51.07-21.24h400.23q9.08-17.62 25.76-28.81 16.69-11.19 38.62-11.19h59.23q29.83 0 51.07 21.24 21.24 21.24 21.24 51.07V-210q0 29.83-21.24 51.07-21.24 21.24-51.07 21.24h-59.23Zm-476.92-100v-480 480Z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <h6>BTCL</h6>
                    <p class="lg:text-lg text-base font-normal text-black/50">+88 02226617206</p>
                </div>
            </a>
            <?php echo do_shortcode('[jet_fb_form form_id="57" submit_type="ajax" required_mark="*" fields_layout="column" fields_label_tag="label" markup_type="div" enable_progress="" clear="1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>