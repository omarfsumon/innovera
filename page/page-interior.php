<?php get_header(); ?>
<section class="page-banner h-[400px] lg:h-[600px]" style="background-image: url('<?php echo INNOVERA_URI . '/src/images/slider/breadcrumb.webp' ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-black/55 h-full w-full flex flex-col justify-center py-5 md:py-10">
        <div class="container pt-10">
            <h1 class="text-2nd-heading font-normal text-center text-white pt-10 italic scroll_animate">Transforming Spaces into Homes</h1>
            <p class="text-center text-base md:text-lg mt-4 italic text-white/90 scroll_animate" style="animation-delay: 0.2s">
                With Innovera, your interiors aren’t just beautiful—they’re functional, comfortable, and truly yours.
            </p>
        </div>
    </div>
</section>

<section class="md:py-16 py-4 bg-[#fefefc]">
    <div class="container flex md:flex-row flex-col items-center gap-10">
        <div class="md:w-[45%] w-full md:order-last">
            <img fetchpriority="high" loading="lazy" decoding="async" src="<?php echo INNOVERA_URI . '/src/images/landowner/landowner2.webp' ?>" alt="Landowner" class="w-full h-auto rounded-xl scroll_animate" data-animate="animate__fadeIn">
        </div>
        <div class="md:w-[55%] w-full">
            <h2 class="text-2nd-heading leading-[1.2] mb-2 font-[400] scroll_animate" data-animate="animate__fadeInLeft">Interior & Customization</h2>
            <p class="mb-2 scroll_animate" data-animate="animate__fadeInLeft" style="animation-delay: 0.2s">
                At <strong>Innovera Holdings Ltd.</strong>, we understand that every customer has a unique lifestyle, taste, and vision for their dream home. 
                That’s why we offer a flexible interior & customization service that allows you to personalize your space exactly the way you want. 
                From selecting tiles and fittings to designing your kitchen layout or choosing wall colors, we give you the freedom to transform your apartment 
                into a reflection of your personality.</p>
        </div>
    </div>
</section>

<section class="md:py-16 py-10 bg-secondary-50">
    <div class="container">
        <h2 class="text-2nd-heading leading-[1.2] mb-2 font-[400] text-center scroll_animate" data-animate="animate__flipInX">
            Our Customization Options:</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-5">
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="35px" height="35px">
                    <path d="m21.75,6h-.75v-1c0-1.241-1.01-2.25-2.25-2.25h-.75v-.25c0-1.378-1.121-2.5-2.5-2.5H2.5C1.121,0,0,1.122,0,2.5v15.5h3v3h3v3h18v-15.75c0-1.241-1.01-2.25-2.25-2.25Zm-20.75-.293l2-2,2.23,2.23L1,10.168v-4.461Zm15.85-3.85c.094.196.15.412.15.643v3.918l-4.938,4.938-2.355-2.355,7.143-7.143ZM6.031,11.262l-2.355-2.355,5.23-5.23,2.355,2.355-5.23,5.23Zm-.094-6.031l-2.23-2.23,2-2h4.461l-4.23,4.23ZM1,11.582l1.969-1.969,2.355,2.355-4.324,4.324v-4.711Zm8-1.875l2.355,2.355-4.938,4.938H1.707l7.293-7.293Zm.094,6.031l1.262,1.262h-2.523l1.262-1.262Zm2.676,1.262l-1.969-1.969,5.23-5.23,1.969,1.969v.527l-4.588,4.704h-.643Zm5.23-3.271v3.271h-3.19l3.19-3.271Zm0-3.374l-1.262-1.262,1.262-1.262v2.523Zm-.857-9.205l-4.174,4.174-2.355-2.355,1.969-1.969h3.918c.231,0,.447.057.643.15Zm-13.643-.15h1.793l-3.293,3.293v-1.793c0-.827.673-1.5,1.5-1.5Zm1.5,17h14V3.75h.75c.689,0,1.25.561,1.25,1.25v15H4v-2Zm19,5H7v-2h14V7h.75c.689,0,1.25.561,1.25,1.25v14.75Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Flooring Choices</h4>
                <p class="text-base leading-[1.5]">
                    Select from a wide range of tiles, wooden floors, or premium finishes to match your interior style.
                </p>
            </div>
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" height="35px" width="35px">
                    <path d="m23.495,15.873l.483-3.873H2v-7.667c0-1.286,1.047-2.333,2.333-2.333.73,0,1.429.349,1.867.933l.259.345-.574,3.29,1.071,1.67,5.777-4.333-1.071-1.67-3.607-.161-.256-.342c-.814-1.085-2.11-1.732-3.467-1.732C1.943,0,0,1.943,0,4.333v7.667l.519,3.873c.256,2.048,1.264,3.841,2.726,5.117l-.744,3.01h2.061l.452-1.832c1.085.533,2.301.832,3.578.832h6.831c1.273,0,2.485-.296,3.567-.826l.451,1.826h2.061l-.742-3.001c1.467-1.276,2.48-3.073,2.737-5.126Zm-14.904,5.127c-3.088,0-5.705-2.311-6.088-5.375l-.203-1.625h19.413l-.202,1.625c-.384,3.064-3.001,5.375-6.089,5.375h-6.831Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Bathroom Fittings</h4>
                <p class="text-base leading-[1.5]">
                    Choose from international brands for sanitary ware, faucets, and accessories.
                </p>
            </div>
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" height="35px" width="35px">
                    <path d="M24,13h-4v-2h-5v2h-4v2h1v6.5c0,1.379,1.121,2.5,2.5,2.5h6c1.379,0,2.5-1.121,2.5-2.5v-6.5h1v-2Zm-3,8.5c0,.275-.225,.5-.5,.5h-6c-.275,0-.5-.225-.5-.5v-6.5h7v6.5ZM0,21H10c0,1.657-1.343,3-3,3H3c-1.657,0-3-1.343-3-3Zm0-4H10c0,1.657-1.343,3-3,3H3c-1.657,0-3-1.343-3-3Zm6.5-4c3.243,0,5.931-2.39,6.415-5.5h8.085v-2H12.915c-.484-3.11-3.172-5.5-6.415-5.5C2.916,0,0,2.916,0,6.5s2.916,6.5,6.5,6.5Zm0-11c2.481,0,4.5,2.019,4.5,4.5s-2.019,4.5-4.5,4.5S2,8.981,2,6.5,4.019,2,6.5,2Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Kitchen Layouts</h4>
                <p class="text-base leading-[1.5]">
                    Open or closed kitchen concepts with customizable cabinets, countertops, and fittings.
                </p>
            </div>
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="35px" height="35px">
                    <path d="M20,3c0-1.654-1.346-3-3-3H3C1.346,0,0,1.346,0,3v2c0,1.654,1.346,3,3,3h14c1.654,0,3-1.346,3-3,1.103,0,2,.897,2,2v1c0,1.103-.897,2-2,2h-7c-2.206,0-4,1.794-4,4v.184c-1.161,.414-2,1.514-2,2.816v4c0,1.654,1.346,3,3,3s3-1.346,3-3v-4c0-1.302-.839-2.402-2-2.816v-.184c0-1.103,.897-2,2-2h7c2.206,0,4-1.794,4-4v-1c0-2.206-1.794-4-4-4Zm-2,2c0,.552-.449,1-1,1H3c-.551,0-1-.448-1-1V3c0-.552,.449-1,1-1h14c.551,0,1,.448,1,1v2Zm-7,16c0,.552-.449,1-1,1s-1-.448-1-1v-4c0-.552,.449-1,1-1s1,.448,1,1v4Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Paint & Finishes</h4>
                <p class="text-base leading-[1.5]">
                    Pick your preferred wall colors, textures, and decorative finishes.
                </p>
            </div>
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="30px" height="30px">
                    <path d="m21.5,0H2.5C1.122,0,0,1.122,0,2.5v21.5h12V6.796c2.012,5.755,6.523,8.105,8.462,8.873-1.224,1.065-3.462,3.589-3.462,7.831v.5h7V2.5c0-1.378-1.121-2.5-2.5-2.5ZM2.5,1h8.5v11H1V2.5c0-.827.673-1.5,1.5-1.5Zm-1.5,22v-10h10v10H1ZM12.024,1h1.996c.204,6.249,4.131,9.681,6.981,11v-1.108c-2.556-1.293-5.79-4.47-5.982-9.892h2.013c.165,3.756,2.105,6.354,3.968,7.544v-1.179c-1.461-1.098-2.83-3.368-2.972-6.365h3.472c.827,0,1.5.673,1.5,1.5v12.5h-1.436c-.857-.234-9.286-2.847-9.541-14Zm5.988,22c.206-4.424,3.098-6.626,3.66-7.013l1.329.01v7.004h-4.988Zm-15.012-5h6v-3H3v3Zm1-2h4v1h-4v-1Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Interior Design Packages</h4>
                <p class="text-base leading-[1.5]">
                    Modern, classical, or minimalist design packages crafted by our in-house designers.
                </p>
            </div>
            <div class="flex flex-col bg-white p-5 rounded-lg gap-2 scroll_animate" data-animate="animate__zoomIn">
                <svg class="fill-secondary-500" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="00 0 24 24" width="30px" height="30px">
                    <path d="m23.936,13.788c-.744-3.637-3.833-6.351-7.522-6.74C15.826,3.005,12.378,0,8.25,0,3.701,0,0,3.701,0,8.253l.038,14.75c0,.551.449.997,1,.997h.003c.552,0,.998-.45.997-1.003l-.038-14.747c0-3.446,2.804-6.25,6.25-6.25,3.036,0,5.586,2.145,6.139,5.071-3.609.463-6.605,3.151-7.333,6.732-.062.309-.21,1.383.501,2.251.354.432,1.045.946,2.33.946h3.112v.5c0,1.381,1.119,2.5,2.5,2.5s2.5-1.119,2.5-2.5v-.5h3.108c1.047,0,1.838-.318,2.349-.945.682-.836.562-1.864.479-2.267Zm-2.028,1.003c-.107.131-.405.209-.799.209h-11.221c-.387,0-.672-.078-.782-.213-.121-.147-.118-.44-.088-.588.611-3.013,3.338-5.199,6.482-5.199s5.861,2.183,6.477,5.19c.042.204.031.477-.069.601Z"/>
                </svg>
                <h4 class="text-xl leading-[1.2]">Electrical & Lighting</h4>
                <p class="text-base leading-[1.5]">
                    Personalized lighting design and smart home solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="md:py-16 py-10 bg-white">
    <div class="container">
        <h2 class="text-2nd-heading leading-[1.2] mb-2 font-[400] text-center scroll_animate" data-animate="animate__flipInX">How It Works</h2>
        <div class="flex flex-col md:flex-row items-center gap-10 mt-10">
            <div class="md:w-[50%] w-full">
                <img fetchpriority="high" loading="lazy" decoding="async" src="<?php echo INNOVERA_URI . '/src/images/landowner/interior.webp' ?>" alt="Landowner" 
                class="w-full h-auto rounded-lg scroll_animate" data-animate="animate__fadeIn">
            </div>
            <div class="md:w-[50%] w-full flex flex-col gap-2">
                <ol class="relative space-y-5 before:absolute before:-ml-px before:h-full before:w-0.5 before:rounded-full before:bg-gray-200">
                    <li class="relative -ms-1.5 flex items-start gap-4">
                        <span class="size-3 shrink-0 rounded-full bg-secondary-500"></span>
                        <div class="-mt-2 scroll_animate" data-animate="animate__fadeInRight" style="animation-delay: 0.1s">
                            <span class="text-xs/none font-medium text-gray-700 uppercase">Step 1</span>
                            <h3 class="text-lg font-semibold text-gray-900">Consultation</h3>
                            <p class="mt-0.5 text-base text-gray-700">Sit with our architects and designers to discuss your preferences.</p>
                        </div>
                    </li>
                    <li class="relative -ms-1.5 flex items-start gap-4">
                        <span class="size-3 shrink-0 rounded-full bg-secondary-500"></span>
                        <div class="-mt-2 scroll_animate" data-animate="animate__fadeInRight" style="animation-delay: 0.2s">
                            <span class="text-xs/none font-medium text-gray-700 uppercase">Step 2</span>
                            <h3 class="text-lg font-semibold text-gray-900">Design Proposal</h3>
                            <p class="mt-0.5 text-base text-gray-700">Get 3D design concepts tailored to your vision.</p>
                        </div>
                    </li>
                    <li class="relative -ms-1.5 flex items-start gap-4">
                        <span class="size-3 shrink-0 rounded-full bg-secondary-500"></span>
                        <div class="-mt-2 scroll_animate" data-animate="animate__fadeInRight" style="animation-delay: 0.3s">
                            <span class="text-xs/none font-medium text-gray-700 uppercase">Step 3</span>
                            <h3 class="text-lg font-semibold text-gray-900">Approval & Selection</h3>
                            <p class="mt-0.5 text-base text-gray-700">Choose materials, finishes, and fittings from our curated collection.</p>
                        </div>
                    </li>
                    <li class="relative -ms-1.5 flex items-start gap-4">
                        <span class="size-3 shrink-0 rounded-full bg-secondary-500"></span>
                        <div class="-mt-2 scroll_animate" data-animate="animate__fadeInRight" style="animation-delay: 0.4s">
                            <span class="text-xs/none font-medium text-gray-700 uppercase">Step 4</span>
                            <h3 class="text-lg font-semibold text-gray-900">Implementation</h3>
                            <p class="mt-0.5 text-base text-gray-700">Our skilled craftsmen bring your dream interiors to life.</p>
                        </div>
                    </li>
                    <li class="relative -ms-1.5 flex items-start gap-4">
                        <span class="size-3 shrink-0 rounded-full bg-secondary-500"></span>
                        <div class="-mt-2 scroll_animate" data-animate="animate__fadeInRight" style="animation-delay: 0.5s">
                            <span class="text-xs/none font-medium text-gray-700 uppercase">Step 5</span>
                            <h3 class="text-lg font-semibold text-gray-900">Final Handover</h3>
                            <p class="mt-0.5 text-base text-gray-700">A fully customized, ready-to-move-in home that reflects your lifestyle.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="md:py-16 py-10 bg-white overflow-hidden">
    <div class="container">
        <h2 class="text-3rd-heading leading-[1.2] mb-2 font-[400] text-center scroll_animate" data-animate="animate__flipInX">
            Why Choose Our Customization Service?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mt-5">
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow justify-center items-center text-center hover:shadow-lg transition duration-300 scroll_animate" style="animation-delay: 0.1s">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="fill-secondary-500" width="50px" height="50px">
                    <path d="M14.849,12.747l-5.448-4.265c-.824-.645-1.977-.646-2.801,0L1.151,12.746c-.731,.573-1.151,1.435-1.151,2.363v8.891H16V15.109c0-.929-.42-1.79-1.151-2.362Zm-.849,9.253H2v-6.891c0-.31,.14-.597,.384-.788l5.448-4.263c.098-.078,.236-.077,.336,0l5.448,4.265c.244,.19,.384,.478,.384,.787v6.891ZM6,15h4v4H6v-4Zm12-2h2v2h-2v-2Zm0,4h2v2h-2v-2ZM14,5h2v2h-2v-2Zm6,2h-2v-2h2v2Zm-6,2h2v2h-2v-2Zm4,0h2v2h-2v-2Zm6-6V24h-6v-2h4V3c0-.552-.448-1-1-1H13c-.552,0-1,.448-1,1V7.978l-2-1.565V3c0-.017,0-.035,.001-.052,.028-1.63,1.362-2.948,2.999-2.948h8c1.654,0,3,1.346,3,3Z"/>
                </svg>
                <h4 class="text-lg md:text-1xl leading-8">Make your home truly yours.</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow justify-center items-center text-center hover:shadow-lg transition duration-300 scroll_animate" style="animation-delay: 0.2s">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="fill-secondary-500" width="50px" height="50px">
                    <path d="m10.219,6.508l-3.341-3.341.707-.707,3.341,3.341c.257.257.703.257.959,0L17.761.014l.701.713-5.872,5.784c-.314.314-.736.489-1.185.489s-.87-.175-1.187-.492Zm11.281-3.508c-1.379,0-2.5,1.122-2.5,2.5v6.997c-.391-.294-.86-.466-1.359-.494-.664-.042-1.306.188-1.808.637l-3.833,3.528-3.838-3.532c-.9-.805-2.229-.836-3.162-.137v-6.999c0-1.378-1.122-2.5-2.5-2.5S0,4.122,0,5.5v13.231c0,.618.229,1.214.645,1.676l3.197,3.593h1.344l-3.799-4.263c-.25-.277-.387-.635-.387-1.006V5.5c0-.827.673-1.5,1.5-1.5s1.5.673,1.5,1.5v9h.01c.003.574.199,1.153.598,1.627l3.074,3.179.719-.695-3.051-3.153c-.476-.567-.462-1.409.032-1.96.55-.614,1.499-.666,2.108-.12l4.026,3.705c.308.283.484.685.484,1.104v5.814h1v-5.814c0-.446-.132-.874-.353-1.253l3.858-3.55c.298-.267.688-.4,1.08-.38.398.022.766.198,1.032.496.246.274.372.621.382.967v.01c.007.345-.101.689-.326.957l-3.075,3.179.719.695,3.099-3.206c.387-.461.576-1.031.577-1.601h.007V5.5c0-.827.673-1.5,1.5-1.5s1.5.673,1.5,1.5v13.231c0,.371-.137.729-.387,1.006l-3.799,4.263h1.344l3.197-3.593c.416-.462.645-1.058.645-1.676V5.5c0-1.378-1.121-2.5-2.5-2.5Z"/>
                </svg>
                <h4 class="text-lg md:text-1xl leading-8">Quality assurance with branded materials.</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow justify-center items-center text-center hover:shadow-lg transition duration-300 scroll_animate" style="animation-delay: 0.3s">
                <svg id="Layer_1" height="50px" viewBox="0 0 24 24" width="50px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="fill-secondary-500">
                    <path d="m9 24h-8a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2z"/><path d="m7 20h-6a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"/><path d="m5 16h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2z"/>
                    <path d="m13 23.955a1 1 0 0 1 -.089-2 10 10 0 1 0 -10.87-10.865 1 1 0 0 1 -1.992-.18 12 12 0 0 1 23.951 1.09 11.934 11.934 0 0 1 -10.91 11.951c-.03.003-.061.004-.09.004z"/>
                    <path d="m12 6a1 1 0 0 0 -1 1v5a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414l-2.707-2.707v-4.586a1 1 0 0 0 -1-1z"/>
                </svg>
                <h4 class="text-lg md:text-1xl leading-8">Timely delivery without construction delays.</h4>
            </div>
            <div class="flex flex-col p-5 rounded-lg gap-2 shadow justify-center items-center text-center hover:shadow-lg transition duration-300 scroll_animate" style="animation-delay: 0.4s">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="fill-secondary-500" width="50px" height="50px">
                    <path d="m5.5,10c-3.084,0-5.5,1.318-5.5,3v8c0,1.682,2.416,3,5.5,3s5.5-1.318,5.5-3v-8c0-1.682-2.416-3-5.5-3Zm4.5,7c0,.946-1.848,2-4.5,2s-4.5-1.054-4.5-2v-2.254c.987.764,2.62,1.254,4.5,1.254s3.513-.49,4.5-1.254v2.254Zm-4.5-6c2.652,0,4.5,1.054,4.5,2s-1.848,2-4.5,2-4.5-1.054-4.5-2,1.848-2,4.5-2Zm0,12c-2.652,0-4.5-1.054-4.5-2v-2.254c.987.764,2.62,1.254,4.5,1.254s3.513-.49,4.5-1.254v2.254c0,.946-1.848,2-4.5,2ZM20,5.5c0-.827-.673-1.5-1.5-1.5h-9c-.827,0-1.5.673-1.5,1.5v2c0,.827.673,1.5,1.5,1.5h9c.827,0,1.5-.673,1.5-1.5v-2Zm-1,2c0,.276-.225.5-.5.5h-9c-.275,0-.5-.224-.5-.5v-2c0-.276.225-.5.5-.5h9c.275,0,.5.224.5.5v2Zm1,5c0,.276-.224.5-.5.5s-.5-.224-.5-.5v-1c0-.276.224-.5.5-.5s.5.224.5.5v1Zm-4,0v-1c0-.276.224-.5.5-.5s.5.224.5.5v1c0,.276-.224.5-.5.5s-.5-.224-.5-.5Zm-3,0v-1c0-.276.224-.5.5-.5s.5.224.5.5v1c0,.276-.224.5-.5.5s-.5-.224-.5-.5Zm0,3c0-.276.224-.5.5-.5s.5.224.5.5v1c0,.276-.224.5-.5.5s-.5-.224-.5-.5v-1Zm3,0c0-.276.224-.5.5-.5s.5.224.5.5v1c0,.276-.224.5-.5.5s-.5-.224-.5-.5v-1Zm4,1c0,.276-.224.5-.5.5s-.5-.224-.5-.5v-1c0-.276.224-.5.5-.5s.5.224.5.5v1Zm-7,3c0-.276.224-.5.5-.5h6c.276,0,.5.224.5.5s-.224.5-.5.5h-6c-.276,0-.5-.224-.5-.5Zm11-15v15c0,2.481-2.019,4.5-4.5,4.5h-7c-.276,0-.5-.224-.5-.5s.224-.5.5-.5h7c1.93,0,3.5-1.57,3.5-3.5V4.5c0-1.93-1.57-3.5-3.5-3.5h-11c-1.93,0-3.5,1.57-3.5,3.5v3c0,.276-.224.5-.5.5s-.5-.224-.5-.5v-3C4,2.019,6.019,0,8.5,0h11c2.481,0,4.5,2.019,4.5,4.5Z"/>
                </svg>
                <h4 class="text-lg md:text-1xl leading-8">Cost-efficient packages with flexible budgets.</h4>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>