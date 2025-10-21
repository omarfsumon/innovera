<?php get_header();?>
<section class="page-banner h-[400px] lg:h-[600px] overflow-hidden" style="background-image: url('<?php echo INNOVERA_URI . '/src/images/slider/breadcrumb.webp' ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-black/55 h-full w-full flex flex-col justify-center py-5 md:py-10">
        <div class="container pt-10">
            <h1 class="text-2nd-heading font-normal text-center text-white italic pt-10 scroll_animate">Our Promise</h1>
            <p class="text-center text-base md:text-lg mt-4 text-white/90 italic scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.2s;">
                “At <strong>Innovera Holdings Ltd.</strong>, we don’t just deliver homes—we ensure they remain comfortable, functional, and valuable for years to come.”
            </p>
        </div>
    </div>
</section>

<section class=" py-5 md:py-15 overflow-hidden">
    <div class="container flex flex-col md:flex-row items-center justify-between md:gap-20 gap-5">
        <div class="max-w-[100%] md:max-w-[50%] md:order-last">
            <img fetchpriority="high" loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/src/images/service/home_loan.webp" alt="NRB Corner" class="w-full rounded-lg scroll_animate" data-animate="animate__fadeIn">
        </div>
        <div class="max-w-[100%] md:max-w-[50%] space-y-5">
            <h2 class="text-2nd-heading font-normal leading-[1.5] scroll_animate" data-animate="animate__fadeInUp">Easy Home Loan Support</h2>
            <p class="scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.1s;">
                We assist our valued customers in securing hassle-free home loans from reputed banks. From documentation to approval, 
                our team guides you throughout the process to make your dream of owning a home easier and faster.
            </p>
            <p class="scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.2s;">
               We connect you with trusted banks and guide you through the loan process, so you can move into your dream home stress-free.
            </p>
        </div>
    </div>
</section>

<section class="bg-[#003333] py-8 sm:py-16 lg:px-6 overflow-hidden">
  <div class="container flex flex-col items-center">
    <div class="mb-10">
        <h2 class="text-2nd-heading font-normal text-center leading-10 text-white scroll_animate">After Handover Service<br>
        <span class="text-3rd-heading">Your Home, Our Commitment</span></h2>
        <p class="text-white/60 text-center scroll_animate" style="animation-delay: 0.3s;">At <strong>Innovera Holdings Ltd.</strong>, our relationship with you doesn’t end once the keys are handed over. 
            We provide <strong>comprehensive after-handover services</strong> to ensure that your new home remains safe, functional, and enjoyable long after you move in.</p>
    </div>
    <div class="flex flex-wrap gap-5">
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.1s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor"><path d="M746.31-101q-7.23 0-13.46-2.31-6.24-2.31-11.85-7.92L519.31-312.54q-5.62-5.62-7.93-11.85-2.3-6.23-2.3-13.46t2.3-13.46q2.31-6.23 7.93-11.84l75.77-75.77q5.61-5.62 11.84-7.93 6.23-2.3 13.46-2.3t13.46 2.3q6.24 2.31 11.85 7.93l201.69 201.69q5.62 5.61 7.93 11.84 2.3 6.24 2.3 13.47t-2.3 13.46q-2.31 6.23-7.93 11.84l-75.77 75.39q-5.61 5.61-11.84 7.92-6.23 2.31-13.46 2.31Zm0-68.46 42.46-42.46L621-379.69l-42.46 42.46 167.77 167.77Zm-533.62 69.07q-7.23 0-13.77-2.61-6.53-2.62-12.15-8.23L111.62-186q-5.62-5.62-8.23-12.15-2.62-6.54-2.62-13.77 0-7.23 2.62-13.66 2.61-6.42 8.23-12.04l208.92-208.92h84.23L437.23-479 269.92-646.31h-57l-111-111 99.16-99.15 111 111v57l167.3 167.31 118.31-118.31-58.38-58.39 50.61-50.61H488.08l-22.23-21.85 127.76-127.77 21.85 21.85V-774l50.61-50.61 150.47 149.69q15.84 15.46 23.88 35.23 8.04 19.77 8.04 41.84 0 19.39-6.69 37.35t-19.46 32.65l-83.46-83.46-56.39 56.39-42.38-42.39-193.54 193.54v84.38L238-111.23q-5.61 5.61-11.85 8.23-6.23 2.61-13.46 2.61Zm0-69.46 183.47-183.46v-42.46h-42.47L170.23-212.31l42.46 42.46Zm0 0-42.46-42.46 21.54 20.93 20.92 21.53Zm533.62.39 42.46-42.46-42.46 42.46Z"/></svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Maintenance & Repairs</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Addressing minor and major repair needs promptly.</li>
                <li>Electrical, plumbing, painting, and fixture maintenance.</li>
                <li>Emergency support to resolve urgent issues.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.2s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                        <path d="M240-100q-41.92 0-70.96-29.04Q140-158.08 140-200v-43.08q0-29.82 21.24-51.06 21.24-21.24 51.07-21.24H260v-472.31q0-29.83 21.24-51.07Q302.48-860 332.31-860h415.38q29.83 0 51.07 21.24Q820-817.52 820-787.69V-200q0 41.92-29.04 70.96Q761.92-100 720-100H240Zm480-60q17 0 28.5-11.5T760-200v-587.69q0-5.39-3.46-8.85t-8.85-3.46H332.31q-5.39 0-8.85 3.46t-3.46 8.85v472.31h287.69q29.83 0 51.07 21.24Q680-272.9 680-243.08V-200q0 17 11.5 28.5T720-160ZM397.69-612.31q-12.75 0-21.37-8.63-8.63-8.63-8.63-21.38 0-12.76 8.63-21.37 8.62-8.62 21.37-8.62h284.62q12.75 0 21.37 8.63 8.63 8.63 8.63 21.39 0 12.75-8.63 21.37-8.62 8.61-21.37 8.61H397.69Zm0 115.39q-12.75 0-21.37-8.63-8.63-8.63-8.63-21.39 0-12.75 8.63-21.37 8.62-8.61 21.37-8.61h284.62q12.75 0 21.37 8.63 8.63 8.62 8.63 21.38t-8.63 21.37q-8.62 8.62-21.37 8.62H397.69ZM240-160h380v-83.08q0-5.38-3.46-8.84-3.46-3.47-8.85-3.47H212.31q-5.39 0-8.85 3.47-3.46 3.46-3.46 8.84V-200q0 17 11.5 28.5T240-160Zm0 0h-40 420-380Z"/>
                    </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Documentation & Legal Support</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Assistance with property registration and ownership transfer.</li>
                <li>Guidance on utility connections, taxes, and municipal approvals.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.3s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                    <path d="M480-100q-78.85 0-148.2-29.92t-120.65-81.21q-51.3-51.29-81.22-120.63Q100-401.1 100-479.93q0-78.84 29.93-148.21 29.92-69.37 81.22-120.68t120.65-81.25Q401.15-860 480-860q49.92 0 96.77 12.73 46.85 12.73 89.62 36.81 11.53 6.46 15.07 18.62 3.54 12.15-4.15 22.69-7.69 10.54-20.35 13.19-12.65 2.65-24.42-3.81-35.08-19.61-73.81-29.92Q520-800 480-800q-134 0-227 93t-93 227q0 134 93 227t227 93q28.76 0 56.42-4.96T591-179.85q12.77-3.84 25.12-.69 12.34 3.15 19.1 14.37 6.01 10.48 2.55 22.59T622-126.92q-34 13.76-69.81 20.34T480-100Zm290-190h-90q-12.75 0-21.37-8.63-8.63-8.63-8.63-21.38 0-12.76 8.63-21.37Q667.25-350 680-350h90v-90q0-12.75 8.63-21.37 8.63-8.63 21.38-8.63 12.76 0 21.37 8.63Q830-452.75 830-440v90h90q12.75 0 21.37 8.63 8.63 8.63 8.63 21.38 0 12.76-8.63 21.37Q932.75-290 920-290h-90v90q0 12.75-8.63 21.37-8.63 8.63-21.38 8.63-12.76 0-21.37-8.63Q770-187.25 770-200v-90ZM423.23-394.15l373.54-374.16q8.31-8.3 20.88-8.5 12.58-.19 21.27 8.5 8.69 8.7 8.69 21.08 0 12.38-8.69 21.08l-390.38 391q-10.85 10.84-25.31 10.84-14.46 0-25.31-10.84L288.15-444.92q-8.3-8.31-8.5-20.89-.19-12.57 8.5-21.27 8.7-8.69 21.08-8.69 12.38 0 21.08 8.69l92.92 92.93Z"/></svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Facility Management</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Elevator, generator, and common-area management.</li>
                <li>Regular inspections and preventive maintenance to ensure smooth operation.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.4s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                        <path d="M480-105.16q-6.23 0-12.23-1t-11.62-3q-126.53-45-201.34-159.57Q180-383.31 180-516v-180.15q0-22.79 13.11-41.03 13.1-18.23 33.89-26.43l227.69-85q12.85-4.62 25.31-4.62 12.46 0 25.31 4.62l227.69 85q20.79 8.2 33.89 26.43Q780-718.94 780-696.15V-516q0 132.69-74.81 247.27-74.81 114.57-201.34 159.57-5.62 2-11.62 3-6 1-12.23 1Zm0-58.84q104-33 172-132t68-220v-180.54q0-3.84-2.12-6.92-2.11-3.08-5.96-4.62l-227.69-85q-1.92-.77-4.23-.77-2.31 0-4.23.77l-227.69 85q-3.85 1.54-5.96 4.62-2.12 3.08-2.12 6.92V-516q0 121 68 220t172 132Zm0-315.23Z"/>
                    </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Security & Safety Monitoring</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>24/7 security and monitoring of residential complexes.</li>
                <li>Fire safety checks and compliance support.</li>
                <li>Visitor and access management for peace of mind.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] scroll_animate" data-animate="animate__fadeInUp" style="animation-delay: 0.5s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                    <path d="M481.92-669.61q-7.23 0-12.65-5.43-5.42-5.42-5.42-12.65v-61.92q0-33.54 23.23-56.77 23.23-23.23 56.77-23.23h61.92q7.23 0 12.65 5.42 5.42 5.43 5.42 12.66v61.92q0 33.54-23.23 56.77-23.23 23.23-56.76 23.23h-61.93ZM256.16-449.62q-49.93 0-84.96-35.03-35.04-35.04-35.04-84.96v-83.85q0-15.46 10.34-25.81 10.35-10.34 25.81-10.34h83.85q49.92 0 84.96 35.04 35.04 35.03 35.04 84.96v83.84q0 15.46-10.35 25.81-10.35 10.34-25.81 10.34h-83.84ZM640-110q-37.46 0-71.42-12t-61.43-33l-46.07 46.08q-8.31 8.3-20.89 8.5-12.57.19-21.27-8.5-8.69-8.7-8.5-21.27.2-12.58 8.5-20.89L465-197.15q-21-27.47-33-61.43T420-330q0-91.54 64.23-156.08 64.23-64.53 155.77-64.53h159.46q25.31 0 43.04 17.73t17.73 43.03V-330q0 91.54-64.35 155.77Q731.54-110 640-110Zm0-60q67 0 113-47t46-113v-160H640q-66 0-113 46.5T480-330q0 25.31 7.23 48.12 7.23 22.8 20.54 41.96l111.15-111.16q8.7-8.69 21.08-8.69 12.38 0 21.08 8.69 8.69 8.7 8.69 21.08 0 12.38-8.69 21.08L549.92-197.77q19.16 13.31 41.96 20.54Q614.69-170 640-170Zm1-161Z"/>
                </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Value Preservation & Advisory</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Guidance on upgrades and renovations to enhance property value.</li>
                <li>Assistance with rental management or resale options for investors.</li>
            </ul>
        </div>
    </div>
  </div>
</section>

<section class="md:py-16 py-10 bg-secondary-50 overflow-hidden">
    <div class="container">
        <h2 class="text-3rd-heading leading-[1.2] mb-2 font-[400] text-center scroll_animate" data-animate="animate__flipInX">Why Choose Innovera’s After Handover Service?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mt-5">
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.1s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M480.06-139.62q-13.83 0-26.87-5.15-13.04-5.15-22.96-15.46L209.46-382q-8.3-9.54-7.38-21.69.92-12.16 10.46-20.46 9.54-8.31 22-7.7 12.46.62 20.77 10.16L472.84-203q2.02 2 3.54 2.5 1.51.5 3.54.5 2.02 0 3.54-.5T487-203l259.31-259.92q26.46-26.46 40.57-60.85 14.12-34.38 13.74-70.08-1.62-69-44.85-117.73-43.23-48.73-106.92-48.73-31.77 0-61.4 12.59Q557.83-735.13 536-711l-31.62 34q-4.61 5.62-11.07 8.35-6.46 2.73-13.25 2.73-6.78 0-13.57-2.99-6.79-2.98-11.87-8.09L423-711q-21.77-24.15-51.12-37.35-29.34-13.19-61.73-13.19-53.23 0-92.53 35.46-39.31 35.46-52.16 88.39-3.46 11.77-14 18.34-10.54 6.58-22.31 3.12-11.76-3.46-18.34-14t-3.12-22.31q18.16-70.61 72.7-119.8 54.53-49.2 129.74-49.2 44.56 0 84.75 17.85 40.2 17.85 71.66 50.69L480-738.77l12.69-13.46q31.23-33.23 71.62-51.27 40.38-18.04 84.54-18.04 89.23 0 150.19 67.08Q860-687.38 860-593.85q0 47.85-17.77 92.27-17.77 44.43-52.15 79.43L528.77-160.23q-10.31 10.31-22.6 15.46-12.29 5.15-26.11 5.15ZM475.38-490H131.15q-12.75 0-21.37-8.63-8.62-8.63-8.62-21.38 0-12.76 8.62-21.37 8.62-8.62 21.37-8.62H635q20.85 0 35.42-14.58Q685-579.15 685-600t-14.58-35.42Q655.85-650 635-650q-7.27 0-14.02 2t-12.52 5.61q-9.92 7.7-21.97 5.78-12.04-1.91-19.57-11.85-7.69-9.93-6.07-22.19 1.61-12.27 11.54-19.96 14.07-9.7 29.83-14.54Q617.97-710 635-710q45.83 0 77.92 32.07Q745-645.86 745-600.05q0 45.82-32.08 77.93Q680.83-490 635-490h-64.69q6.84 11.15 10.77 23.35Q585-454.46 585-440q0 45.83-32.08 77.92Q520.83-330 475-330q-17.03 0-32.78-5.46-15.76-5.46-29.83-14.54-9.93-7.69-11.54-19.65-1.62-11.96 6.07-21.89 7.7-9.92 19.66-11.84 11.96-1.93 21.88 5.77 5.77 3.61 12.52 5.61 6.75 2 14.02 2 20.85 0 35.42-14.58Q525-419.15 525-440t-14.38-35.42Q496.23-490 475.38-490Zm7.85 9.23Z"/></svg>
                </span>
                <h4 class="leading-[1.2] text-xl">Peace of Mind</h4>
                <p>We take care of your property so you can enjoy your home stress-free.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.2s;">
                <span class="block"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="m548.92-602.54 206.31-205.3q8.31-8.31 20.38-8.43 12.08-.11 21 8.81 8.31 8.31 8.31 20.88 0 12.58-8.31 20.89L574.23-543.31q-10.85 10.85-25.31 10.85-14.46 0-25.31-10.85L414.23-652.69q-8.92-8.92-8.81-21.08.12-12.15 9.43-21.07 8.92-8.31 21.07-8.43 12.16-.11 21.08 8.81l91.92 91.92Zm37.93 466.62q1.92.77 3.46.77t3.46-.77l235.31-72.85q-3.08-13.61-12.77-20.88-9.7-7.27-21.7-7.27H598.77q-26.23 0-44.54-2t-37.62-8.77l-62.76-20.54q-12.16-3.85-17.43-15.38-5.27-11.54-1.42-23.7 3.85-11.77 14.88-17.34 11.04-5.58 23.2-1.73l52 18.23q18.15 5.77 40.61 8.19t58.31 3.04h10.61q0-14.85-6.69-25.62-6.69-10.77-17.61-14.54l-232.08-85.23q-1.15-.38-2.12-.57-.96-.2-2.11-.2h-74v206.16l286.85 81Zm-15.62 58.77L300-154.92q-6.85 24.84-27.85 39.88-21 15.04-44.46 15.04h-55.38q-29.92 0-51.12-21.19Q100-142.39 100-172.31v-238.46q0-29.92 21.19-51.11 21.2-21.19 51.12-21.19h201.3q6.24 0 12.66 1.3 6.42 1.31 12.04 3.31l233.07 85.85q27.23 10.07 45.23 35.65 18 25.58 18 60.04h100q43.08 0 70.2 27.81 27.11 27.8 27.11 72.19 0 17-9 27.38-9 10.39-27.23 16.46L613-77.77q-9.85 3.23-20.69 3.42-10.85.2-21.08-2.8ZM160-172.31q0 5.39 3.46 8.85t8.85 3.46h55.38q5.39 0 8.85-2.88 3.46-2.89 3.46-9.43v-250.77h-67.69q-5.39 0-8.85 3.47-3.46 3.46-3.46 8.84v238.46Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Trusted Experts</h4>
                <p>Experienced teams handle all maintenance, legal, and operational tasks.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.3s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M376.16-158.31q-14.08 0-25.12-10.15Q340-178.62 340-195.08v-105.54h-3.46q-98.31-4.92-167.42-73.15Q100-442 100-540q0-100.54 69.73-170.08 69.73-69.53 170.27-69.53h54.31l-52.92-52.93q-8.31-8.31-8.5-20.57-.2-12.27 9.11-21.58 8.69-8.69 21.08-8.69 12.38 0 21.07 8.69l99.77 99.77q5.62 5.61 7.93 11.84 2.3 6.23 2.3 13.47 0 7.23-2.3 13.46-2.31 6.23-7.93 11.84l-99.77 99.77q-8.3 8.31-20.57 8.81T342-624.54q-8.69-8.69-8.69-21.07 0-12.39 8.69-21.08l52.31-52.93H340q-75 0-127.5 52.31T160-540q0 76.15 55.77 128.08Q271.54-360 348.85-360H400v107.38L507-360h113q75 0 127.69-52.5T800.38-540q0-75-52.69-127.5T620-720q-12.77 0-21.38-8.62Q590-737.23 590-750t8.62-21.38Q607.23-780 620-780q100.54 0 170.46 69.73T860.38-540q0 100.54-69.92 170.27T620-300h-87.69L401.46-169.16q-5.61 5.62-12.04 8.23-6.42 2.62-13.26 2.62Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Quick & Transparent</h4>
                <p>Requests and complaints are resolved efficiently with clear communication.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.4s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M470-532.15V-680q0-12.75-8.63-21.37-8.63-8.63-21.38-8.63-12.76 0-21.37 8.63Q410-692.75 410-680v157.31q0 7.16 2.62 13.42 2.61 6.27 8.23 11.88l78.07 78.47q9.07 8.92 21.15 8.92 12.08 0 21.01-8.92 8.92-8.93 8.92-21.01 0-12.08-8.92-21.15L470-532.15Zm-82 286.23q14.46-40.69 49.38-67.39Q472.3-340 518-340h133.92Q684-375.54 702-421.61q18-46.08 18-98.39 0-117-81.5-198.5T440-800q-117 0-198.5 81.5T160-520q0 103.39 65.04 179.81T388-245.92ZM520-60q-54.54 0-93.92-36.5-39.39-36.5-43.85-88.81-120.46-20.23-201.34-114.19Q100-393.46 100-520q0-141.67 99.14-240.83Q298.28-860 439.91-860t240.86 99.17Q780-661.67 780-520q0 50.31-14.69 96-14.7 45.69-40.77 84h38.08q57.75 0 97.56 41.13Q900-257.75 900-200q0 57.75-41.13 98.87Q817.75-60 760-60H520Zm-80-463.08ZM640-200Zm-120 80h240q33 0 56.5-23.5T840-200q0-33-23.5-56.5T760-280H520q-33 0-56.5 23.5T440-200q0 33 23.5 56.5T520-120Zm.01-45.39q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Zm120 0q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Zm120 0q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Long-Term Support</h4>
                <p>Our commitment extends beyond handover to ensure your investment grows.</p>
            </div>
        </div>
    </div>
</section>

<section class=" py-5 md:py-20 overflow-hidden">
    <div class="container flex flex-col md:flex-row items-center justify-between md:gap-20 gap-5">
        <div class="max-w-[100%] md:max-w-[50%]">
            <img fetchpriority="high" loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/src/images/service/property_management.webp" alt="NRB Corner" class="w-full rounded-lg scroll_animate" data-animate="animate__fadeIn" style="animation-delay: 0.1s;">
        </div>
        <div class="max-w-[100%] md:max-w-[50%] space-y-4">
            <h2 class="text-2nd-heading font-normal leading-[1.2] scroll_animate">Property Management</h2>
            <h4 class="text-1xl font-normal leading-none scroll_animate" style="animation-delay: 0.2s;">We Manage, You Relax</h4>
            <p class="scroll_animate" style="animation-delay: 0.3s;">Owning a property is one thing—managing it efficiently is another. At <strong>Innovera Holdings Ltd.</strong>, 
                we go beyond construction and handover by offering a <strong>complete property management service</strong>. Our goal is to help property owners, 
                investors, and residents enjoy peace of mind while we take care of everything—maintenance, security, and value preservation.</p>
        </div>
    </div>
</section>

<section class="bg-[#003333] py-8 sm:py-16 lg:px-6 overflow-hidden">
  <div class="container">
    <h2 class="text-2nd-heading font-normal text-center leading-[1.5] text-white mb-5 scroll_animate" data-animate="animate__flipInX">Our Property Management Services</h2>
    <div class="flex flex-wrap gap-5">
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" style="animation-delay: 0.1s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor"><path d="M746.31-101q-7.23 0-13.46-2.31-6.24-2.31-11.85-7.92L519.31-312.54q-5.62-5.62-7.93-11.85-2.3-6.23-2.3-13.46t2.3-13.46q2.31-6.23 7.93-11.84l75.77-75.77q5.61-5.62 11.84-7.93 6.23-2.3 13.46-2.3t13.46 2.3q6.24 2.31 11.85 7.93l201.69 201.69q5.62 5.61 7.93 11.84 2.3 6.24 2.3 13.47t-2.3 13.46q-2.31 6.23-7.93 11.84l-75.77 75.39q-5.61 5.61-11.84 7.92-6.23 2.31-13.46 2.31Zm0-68.46 42.46-42.46L621-379.69l-42.46 42.46 167.77 167.77Zm-533.62 69.07q-7.23 0-13.77-2.61-6.53-2.62-12.15-8.23L111.62-186q-5.62-5.62-8.23-12.15-2.62-6.54-2.62-13.77 0-7.23 2.62-13.66 2.61-6.42 8.23-12.04l208.92-208.92h84.23L437.23-479 269.92-646.31h-57l-111-111 99.16-99.15 111 111v57l167.3 167.31 118.31-118.31-58.38-58.39 50.61-50.61H488.08l-22.23-21.85 127.76-127.77 21.85 21.85V-774l50.61-50.61 150.47 149.69q15.84 15.46 23.88 35.23 8.04 19.77 8.04 41.84 0 19.39-6.69 37.35t-19.46 32.65l-83.46-83.46-56.39 56.39-42.38-42.39-193.54 193.54v84.38L238-111.23q-5.61 5.61-11.85 8.23-6.23 2.61-13.46 2.61Zm0-69.46 183.47-183.46v-42.46h-42.47L170.23-212.31l42.46 42.46Zm0 0-42.46-42.46 21.54 20.93 20.92 21.53Zm533.62.39 42.46-42.46-42.46 42.46Z"/></svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Maintenance & Repairs</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Routine inspections and on-demand repair services.</li>
                <li>Plumbing, electrical, painting, and fixture support.</li>
                <li>Emergency maintenance assistance.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" style="animation-delay: 0.2s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                    <path d="M480-100q-78.85 0-148.2-29.92t-120.65-81.21q-51.3-51.29-81.22-120.63Q100-401.1 100-479.93q0-78.84 29.93-148.21 29.92-69.37 81.22-120.68t120.65-81.25Q401.15-860 480-860q49.92 0 96.77 12.73 46.85 12.73 89.62 36.81 11.53 6.46 15.07 18.62 3.54 12.15-4.15 22.69-7.69 10.54-20.35 13.19-12.65 2.65-24.42-3.81-35.08-19.61-73.81-29.92Q520-800 480-800q-134 0-227 93t-93 227q0 134 93 227t227 93q28.76 0 56.42-4.96T591-179.85q12.77-3.84 25.12-.69 12.34 3.15 19.1 14.37 6.01 10.48 2.55 22.59T622-126.92q-34 13.76-69.81 20.34T480-100Zm290-190h-90q-12.75 0-21.37-8.63-8.63-8.63-8.63-21.38 0-12.76 8.63-21.37Q667.25-350 680-350h90v-90q0-12.75 8.63-21.37 8.63-8.63 21.38-8.63 12.76 0 21.37 8.63Q830-452.75 830-440v90h90q12.75 0 21.37 8.63 8.63 8.63 8.63 21.38 0 12.76-8.63 21.37Q932.75-290 920-290h-90v90q0 12.75-8.63 21.37-8.63 8.63-21.38 8.63-12.76 0-21.37-8.63Q770-187.25 770-200v-90ZM423.23-394.15l373.54-374.16q8.31-8.3 20.88-8.5 12.58-.19 21.27 8.5 8.69 8.7 8.69 21.08 0 12.38-8.69 21.08l-390.38 391q-10.85 10.84-25.31 10.84-14.46 0-25.31-10.84L288.15-444.92q-8.3-8.31-8.5-20.89-.19-12.57 8.5-21.27 8.7-8.69 21.08-8.69 12.38 0 21.08 8.69l92.92 92.93Z"/></svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Building & Facility Management</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Common area cleaning and upkeep.</li>
                <li>Elevator, generator, and substation management.</li>
                <li>Water supply, waste management, and parking control.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] lg:w-[calc(33.333%-13.33px)] scroll_animate" style="animation-delay: 0.3s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                        <path d="M480-105.16q-6.23 0-12.23-1t-11.62-3q-126.53-45-201.34-159.57Q180-383.31 180-516v-180.15q0-22.79 13.11-41.03 13.1-18.23 33.89-26.43l227.69-85q12.85-4.62 25.31-4.62 12.46 0 25.31 4.62l227.69 85q20.79 8.2 33.89 26.43Q780-718.94 780-696.15V-516q0 132.69-74.81 247.27-74.81 114.57-201.34 159.57-5.62 2-11.62 3-6 1-12.23 1Zm0-58.84q104-33 172-132t68-220v-180.54q0-3.84-2.12-6.92-2.11-3.08-5.96-4.62l-227.69-85q-1.92-.77-4.23-.77-2.31 0-4.23.77l-227.69 85q-3.85 1.54-5.96 4.62-2.12 3.08-2.12 6.92V-516q0 121 68 220t172 132Zm0-315.23Z"/>
                    </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Security & Safety</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>24/7 security personnel and CCTV monitoring.</li>
                <li>Fire safety system checks and compliance.</li>
                <li>Visitor management system.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] scroll_animate" style="animation-delay: 0.4s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                    <path d="M160-623.84h640v-83.85q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v83.85Zm-60-83.85Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31v175.38q0 15.46-10.35 25.81-10.34 10.34-25.81 10.34H160v243.85q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h145.15q12.77 0 21.39 8.62 8.61 8.61 8.61 21.38t-8.61 21.38q-8.62 8.62-21.39 8.62H172.31Q142-180 121-201q-21-21-21-51.31v-455.38Zm60 0V-240-383.77v65.23V-720v12.31Zm431.85 584q-6.85 0-13.27-2.62-6.43-2.62-12.04-8.23L456.77-244.31q-8.31-8.31-8.81-20.58-.5-12.26 8.81-21.57 8.69-8.69 20.77-8.69 12.07 0 21.38 8.69l92.93 91.69 205.07-205.08q8.93-8.92 21.19-8.8 12.27.11 21.58 9.42 8.69 9.31 9 21.07.31 11.77-9 21.08L617.15-134.54q-5.61 5.61-11.84 8.23-6.23 2.62-13.46 2.62Z"/>
                </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Financial & Administrative Support</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Collection of service charges, utility bills, and rent (for rental units).</li>
                <li>Transparent accounting for community funds.</li>
                <li>Documentation and compliance support.</li>
            </ul>
        </div>
        <div class="service-item p-5 rounded-xl bg-white/5 w-full md:w-[calc(50%-10px)] scroll_animate" style="animation-delay: 0.5s;">
            <div class="flex items-center mb-3 gap-3">
                <span class="text-primary-500 block">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                    <path d="M120-120v-80h80v-640h400v40h160v240h-80v-160h-80v240h-80v-280H280v560h200v80H120Zm560 40-12-60q-12-5-22.5-11T625-165l-58 20-40-69 45-40q-2-15-2-25.5t2-25.5l-45-40 40-69 58 20q10-8 20.5-14.5T668-420l12-60h80l12 60q12 5 22.5 11t20.5 14l58-20 40 69-45 40q2 15 2 25.5t-2 25.5l45 40-40 69-58-19q-10 8-20.5 14T772-140l-12 60h-80Zm40-120q33 0 56.5-23.5T800-280q0-33-23.5-56.5T720-360q-33 0-56.5 23.5T640-280q0 33 23.5 56.5T720-200ZM440-440q-17 0-28.5-11.5T400-480q0-17 11.5-28.5T440-520q17 0 28.5 11.5T480-480q0 17-11.5 28.5T440-440ZM280-200v-560 560Z"/>
                </svg>
                </span>
                <h3 class="text-1xl leading-[1.2] dark:text-white">Asset & Value Management</h3>
            </div>
            <ul class="list-disc list-outside ml-8 leading-[1.4] space-y-3 text-white/60">
                <li>Regular evaluation of your property’s market value.</li>
                <li>Rental & resale assistance to maximize returns.</li>
                <li>Guidance on property upgrades to enhance value.</li>
            </ul>
        </div>
    </div>
  </div>
</section>

<section class="md:py-16 py-10 bg-secondary-50 overflow-hidden">
    <div class="container">
        <h2 class="text-3rd-heading pb-5 font-normal text-center scroll_animate" data-animate="animate__flipInX">Why Choose Innovera Property Management?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.1s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M480-122.31q-24.08 0-42.58-12.69-18.5-12.7-25.88-33.31H400q-24.54 0-42.27-17.73Q340-203.77 340-228.31v-131.23q-60.54-36.69-95.27-98.38Q210-519.62 210-590q0-112.92 78.54-191.46T480-860q112.92 0 191.46 78.54T750-590q0 71.61-34.73 132.69T620-359.54v131.23q0 24.54-17.73 42.27-17.73 17.73-42.27 17.73h-11.54q-7.38 20.61-25.88 33.31-18.5 12.69-42.58 12.69Zm-80-106h160v-37.54H400v37.54Zm0-72.92h160V-340H400v38.77ZM392-400h64.15v-116.46l-85.69-85.69L404-635.69l76 76 76-76 33.54 33.54-85.69 85.69V-400H568q54-26 88-76.5T690-590q0-88-61-149t-149-61q-88 0-149 61t-61 149q0 63 34 113.5t88 76.5Zm88-159.69Zm0-40.31Z"/></svg>
                </span>
                <h4 class="leading-[1.2] text-xl">One-Stop Solution</h4>
                <p>From minor repairs to full facility operations, we manage it all.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.2s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M172.31-140Q142-140 121-161q-21-21-21-51.31v-415.38Q100-658 121-679q21-21 51.31-21H340v-67.69Q340-798 361-819q21-21 51.31-21h135.38Q578-840 599-819q21 21 21 51.31V-700h167.69Q818-700 839-679q21 21 21 51.31v415.38Q860-182 839-161q-21 21-51.31 21H172.31ZM400-700h160v-67.69q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H412.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46V-700Zm400 330H580v70H380v-70H160v157.69q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h615.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46V-370Zm-360 10h80v-80h-80v80Zm-280-70h220v-70h200v70h220v-197.69q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46V-430Zm320 30Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Professional Expertise</h4>
                <p>Experienced managers and technical teams.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.3s;">
                <span class="block"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="m548.92-602.54 206.31-205.3q8.31-8.31 20.38-8.43 12.08-.11 21 8.81 8.31 8.31 8.31 20.88 0 12.58-8.31 20.89L574.23-543.31q-10.85 10.85-25.31 10.85-14.46 0-25.31-10.85L414.23-652.69q-8.92-8.92-8.81-21.08.12-12.15 9.43-21.07 8.92-8.31 21.07-8.43 12.16-.11 21.08 8.81l91.92 91.92Zm37.93 466.62q1.92.77 3.46.77t3.46-.77l235.31-72.85q-3.08-13.61-12.77-20.88-9.7-7.27-21.7-7.27H598.77q-26.23 0-44.54-2t-37.62-8.77l-62.76-20.54q-12.16-3.85-17.43-15.38-5.27-11.54-1.42-23.7 3.85-11.77 14.88-17.34 11.04-5.58 23.2-1.73l52 18.23q18.15 5.77 40.61 8.19t58.31 3.04h10.61q0-14.85-6.69-25.62-6.69-10.77-17.61-14.54l-232.08-85.23q-1.15-.38-2.12-.57-.96-.2-2.11-.2h-74v206.16l286.85 81Zm-15.62 58.77L300-154.92q-6.85 24.84-27.85 39.88-21 15.04-44.46 15.04h-55.38q-29.92 0-51.12-21.19Q100-142.39 100-172.31v-238.46q0-29.92 21.19-51.11 21.2-21.19 51.12-21.19h201.3q6.24 0 12.66 1.3 6.42 1.31 12.04 3.31l233.07 85.85q27.23 10.07 45.23 35.65 18 25.58 18 60.04h100q43.08 0 70.2 27.81 27.11 27.8 27.11 72.19 0 17-9 27.38-9 10.39-27.23 16.46L613-77.77q-9.85 3.23-20.69 3.42-10.85.2-21.08-2.8ZM160-172.31q0 5.39 3.46 8.85t8.85 3.46h55.38q5.39 0 8.85-2.88 3.46-2.89 3.46-9.43v-250.77h-67.69q-5.39 0-8.85 3.47-3.46 3.46-3.46 8.84v238.46Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Trust & Transparency</h4>
                <p>Clear communication and honest reporting.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.4s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="m438-397.38-64.31-64.31q-8.92-8.92-20.88-9.12-11.96-.19-21.27 9.12-9.31 9.31-9.31 21.38 0 12.08 9.31 21.39l81.15 81.77q10.85 10.84 25.31 10.84 14.46 0 25.31-10.84l165.77-165.77q8.92-8.93 9.11-21.2.19-12.26-9.11-21.57-9.31-9.31-21.39-9.31-12.07 0-21.38 9.31L438-397.38ZM480-100q-70.77 0-132.61-26.77-61.85-26.77-107.85-72.77-46-46-72.77-107.85Q140-369.23 140-440q0-70.77 26.77-132.61 26.77-61.85 72.77-107.85 46-46 107.85-72.77Q409.23-780 480-780q70.77 0 132.61 26.77 61.85 26.77 107.85 72.77 46 46 72.77 107.85Q820-510.77 820-440q0 70.77-26.77 132.61-26.77 61.85-72.77 107.85-46 46-107.85 72.77Q550.77-100 480-100Zm0-340ZM96.62-668.77q-8.7-8.69-8.7-21.08 0-12.38 8.7-21.07l112.46-112.46q8.31-8.31 20.88-8.5 12.58-.2 21.27 8.5 8.69 8.69 8.69 21.07 0 12.39-8.69 21.08L138.77-668.77q-8.31 8.31-20.88 8.5-12.58.19-21.27-8.5Zm766.76 0q-8.69 8.69-21.07 8.69-12.39 0-21.08-8.69L708.77-781.23q-8.31-8.31-8.5-20.88-.19-12.58 8.5-21.27 8.69-8.7 21.08-8.7 12.38 0 21.07 8.7l112.46 112.46q8.31 8.31 8.5 20.88.2 12.58-8.5 21.27ZM480-160q116.62 0 198.31-81.69T760-440q0-116.62-81.69-198.31T480-720q-116.62 0-198.31 81.69T200-440q0 116.62 81.69 198.31T480-160Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Time-Saving</h4>
                <p>We handle the hassles so you can focus on your life or business.</p>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow  hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.5s;">
                <span class="block">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="currentColor">
                    <path d="M470-532.15V-680q0-12.75-8.63-21.37-8.63-8.63-21.38-8.63-12.76 0-21.37 8.63Q410-692.75 410-680v157.31q0 7.16 2.62 13.42 2.61 6.27 8.23 11.88l78.07 78.47q9.07 8.92 21.15 8.92 12.08 0 21.01-8.92 8.92-8.93 8.92-21.01 0-12.08-8.92-21.15L470-532.15Zm-82 286.23q14.46-40.69 49.38-67.39Q472.3-340 518-340h133.92Q684-375.54 702-421.61q18-46.08 18-98.39 0-117-81.5-198.5T440-800q-117 0-198.5 81.5T160-520q0 103.39 65.04 179.81T388-245.92ZM520-60q-54.54 0-93.92-36.5-39.39-36.5-43.85-88.81-120.46-20.23-201.34-114.19Q100-393.46 100-520q0-141.67 99.14-240.83Q298.28-860 439.91-860t240.86 99.17Q780-661.67 780-520q0 50.31-14.69 96-14.7 45.69-40.77 84h38.08q57.75 0 97.56 41.13Q900-257.75 900-200q0 57.75-41.13 98.87Q817.75-60 760-60H520Zm-80-463.08ZM640-200Zm-120 80h240q33 0 56.5-23.5T840-200q0-33-23.5-56.5T760-280H520q-33 0-56.5 23.5T440-200q0 33 23.5 56.5T520-120Zm.01-45.39q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Zm120 0q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Zm120 0q-14.7 0-24.66-9.94-9.96-9.95-9.96-24.66 0-14.7 9.94-24.66 9.95-9.96 24.66-9.96 14.7 0 24.66 9.94 9.96 9.95 9.96 24.66 0 14.7-9.94 24.66-9.95 9.96-24.66 9.96Z"/></svg>
                </span>
                <h4 class="text-xl leading-[1.2]">Long-Term Value</h4>
                <p>Well-maintained properties retain higher resale and rental values.</p>
            </div>
        </div>
    </div>
</section>

<section class="md:py-16 py-10 overflow-hidden">
    <div class="container">
        <h2 class="text-3rd-heading leading-[1.2] mb-2 font-[400] text-center scroll_animate" data-animate="animate__flipInX">
            For Whom?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mt-5">
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.1s;">
                <span class="block"><?php get_template_part('src/svg/check', 'check'); ?></span>
                <h4 class="text-lg">Apartment Owners (living abroad or busy with work)</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.2s;">
                <span class="block"><?php get_template_part('src/svg/check', 'check'); ?></span>
                <h4 class="text-lg">Landlords who rent out units</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.3s;">
                <span class="block"><?php get_template_part('src/svg/check', 'check'); ?></span>
                <h4 class="text-lg">Housing Societies & Commercial Complex Owners</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow hover:shadow-lg transition duration-300 bg-white scroll_animate" style="animation-delay: 0.4s;">
                <span class="block"><?php get_template_part('src/svg/check', 'check'); ?></span>
                <h4 class="text-lg">Investors who want hassle-free returns</h4>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta_section');?>
<?php get_footer();?>