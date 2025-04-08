@extends('website.layouts.app')

    <section class="hero">
        <picture>
            <source srcset="{{ asset('website/images/home/Banner142-mob1.png') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/home/Banner1427.webp') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="content hero-animated">
            <h1 class="">ENVISIONING NEXT
            </h1>
            <p class="">The future of luxury Electric Vehicles has arrived. <br>
                Experience the sublime sensation of absolute luxury with <br>
                best-in-class features and unparalleled benefits

            </p>
            
             <h2 class="">Coming Soon!!</h2>
         
        </div>
    </section>

    <section class="section-padding section-two">
        <div class="running-text animate-text" style="display:none;">
            <div class="swiper-container swiper--top ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">AVATR 11 / The Future of Smart EVs / AVATR 12 / Revolutionizing Mobility/
                    </div>
                    <div class="swiper-slide">AVATR 11 / The Future of Smart EVs / AVATR 12 / Revolutionizing Mobility/
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper--bottom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Smart Mobility / The Future is Here / AVATR/ Smart Mobility / The Future is
                        Here / AVATR/
                    </div>
                    <div class="swiper-slide">Smart Mobility / The Future is Here / AVATR/ Smart Mobility / The Future is
                        Here / AVATR/
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper--top ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                </div>
            </div>
        </div>
        <div class="container-md">
            <div class="row">
                <div class="col-md-4 animate-text">
                    <h3>AVATR – Shaping the Future of Electric Vehicles</h3>
                </div>
                <div class="col-md-8 animate-text">
                    <p class="mb-md-4">
                        AVATR invites you to explore the next generation of humanised mobility and technology.</p>
                    <p>Experience the future of luxury with beautifully designed, emotionally intelligent, high-
                        performance vehicles.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section ">
        <div class="overlay-container d-lg-none animate-text">
            <div class="text">
                <h1>AVATR: Emotional Intelligence, Motion in Delight </h1>
                <p>AVATR redefines the driving experience with Emotional Intelligence, delivering a seamless blend of
                    performance, luxury, and smart technology. With Motion in Delight, each drive is an immersive
                    experience, offering exceptional comfort, intuitive controls, and a responsive, high-performance ride.
                    Experience the future of mobility with AVATR’s emotionally intelligent, cutting-edge electric vehicles
                    at your trusted AVATR car dealer in UAE.</p>
            </div>


        </div>
        <div class="bg-image-section ">
            <div class="tab-image active" data-image="tab1">
                <picture>
                    <source srcset="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}"
                        media="(max-width: 768px)">
                    <img src="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab2">
                <picture>
                    <source srcset="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}"
                        media="(max-width: 768px)">
                    <img src="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab3">
                <picture>
                    <source srcset="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}"
                        media="(max-width: 768px)">
                    <img src="{{ asset('website/images/home/luxury-zero-gravity-1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
        </div>

        <div class="overlay-container ">
            <div class="text d-none d-lg-block">
                <h1 class="animate-text">AVATR: Emotional Intelligence, Motion in Delight </h1>
                <p class="animate-text">AVATR redefines the driving experience with Emotional Intelligence, delivering a
                    seamless blend of performance, luxury, and smart technology. With Motion in Delight,
                    each drive is an immersive experience, offering exceptional comfort, intuitive controls,
                    and a responsive, high-performance ride. Experience the future of mobility with AVATR’s
                    emotionally intelligent, cutting-edge electric vehicles. </p>
            </div>

            <div class="tabs animate-text">
                <div class="tab-buttons">
                    <button class="tab-btn active" data-tab="tab3" data-image="tab1">
                        History
                    </button>
                    <button class="tab-btn" data-tab="tab4" data-image="tab2">
                        Mission
                    </button>
                    <button class="tab-btn" data-tab="tab5" data-image="tab3">
                        Vision
                    </button>
                </div>
                <div class="tab-content ">
                    <div id="tab3" class="tab-panel active">
                        <p>Elaf Motors, the sole distributor of Changan vehicles in Qatar, is expanding its
                            footprint in the Electric Vehicle industry with the launch of AVATR. AVATR
                            Technology, a premium, high-end, smart Electric Vehicle brand, is supported by
                            industry leaders CHANGAN Automobile, Huawei, and CATL. With a commitment
                            to pioneering future-oriented mobility solutions, AVATR is set to redefine the EV
                            landscape in Qatar. <br><br>

                            Elaf Motors brings years of expertise in the automotive sector, ensuring a
                            seamless introduction of AVATR vehicles to the local market. With a strong focus
                            on customer service, business efficiency, and innovation, we aim to make AVATR
                            a leading name in Qatar’s growing EV industry. </p>
                    </div>
                    <div id="tab4" class="tab-panel">
                        <p> Offering unique and futuristic mobility experiences and lifestyles, AVATR Qatar is
                            dedicated to revolutionising smart electric mobility. We strive to enhance your
                            driving experience through cutting-edge technology, intelligent solutions, and
                            sustainable energy practices.
                        </p>
                    </div>
                    <div id="tab5" class="tab-panel">
                        <p> We envision becoming the last word in luxury EVs, combining futuristic design
                            with warm and intelligent technology. Our vision is to empower individuals to
                            enhance and expand the life they pursue, creating a seamless and connected
                            driving experience. </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="Car_models" class="section-padding vehicle-motors">
        <div class="main-container">
            <h1 class="animate-text">Meet The Models
            </h1>
            <div class="tabs ">
                <div class="tab-buttons animate-text">
                    <button class="tab-btn-color active" data-target="tab1">AVATAR 11</button>
                    <button class="tab-btn-color" data-target="tab2">AVATAR 12</button>
                </div>
                <div class="tab-contents ">
                    <div id="tab1" class="tab-panel-color active">
                        <div class="swiper-container swiper car-models animate-text">
                            <div class="swiper-wrapper" id="slider-wrapper">
                                <!-- Red image -->
                                <div class="swiper-slide" id="red-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Liquid-Caramel.jpg') }}"
                                        alt="Liquid-Caramel">
                                </div>
                                <!-- Blue image -->
                                <div class="swiper-slide" id="blue-slide" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Aqua-Green.jpg') }}"
                                        alt="Aqua-Green">
                                </div>
                                <!-- Green image -->
                                <div class="swiper-slide" id="green-slide" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Matte-White.jpg') }}"
                                        alt="Matte-White">
                                </div>
                                <!-- Black image -->
                                <div class="swiper-slide" id="black-slide" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Glossy-Grey.jpg') }}"
                                        alt="Glossy-Grey">
                                </div>
                                <!-- Yellow image -->
                                <div class="swiper-slide" id="yellow-slide" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Matte-Grey.jpg') }}"
                                        alt="Matte-Grey">
                                </div>
                                <!-- White image -->
                                <div class="swiper-slide" id="white-slide" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/Glossy-Black.jpg') }}"
                                        alt="Glossy-Black">
                                </div>

                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <!-- Color Icons Section -->
                        <div class="d-flex align-items-center gap-3 mt-3 justify-content-center flex-wrap">
                            <button class="varient-btn active" data-color="red">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img1.png') }}"
                                    title="Liquid-Caramel" alt="Red">
                            </button>
                            <!-- Button for Blue -->
                            <button class="varient-btn" data-color="blue">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img2.png') }}"
                                    title="Aqua-Green" alt="Blue">
                            </button>
                            <!-- Button for Green -->
                            <button class="varient-btn" data-color="green">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img3.png') }}"
                                    title="Matte-White" alt="Green">
                            </button>
                            <!-- Button for Black -->
                            <button class="varient-btn" data-color="black">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img4.png') }}"
                                    title="Glossy-Grey" alt="Black">
                            </button>
                            <!-- Button for Yellow -->
                            <button class="varient-btn" data-color="yellow">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img6.png') }}"
                                    title="Matte-Grey" alt="Yellow">
                            </button>
                            <!-- Button for White -->
                            <button class="varient-btn" data-color="white">
                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img5.png') }}"
                                    title="Glossy-Black" alt="White">
                            </button>

                        </div>

                        <div class="d-flex align-items-center gap-5 mt-5 justify-content-center animate-text">
                            <a href="{{ route(name: 'avatr11') }}" class="link ">View AVATR 11</a>
                            <a href="{{ route(name: 'avatr11') }}?scroll=customise" class="btn ">Customise</a>
                        </div>
                    </div>

                    <style>
                        /* Styling for color variant buttons */
                        .varient-btn {
                            background-color: transparent;
                            border: none;
                            padding: 10px;
                            cursor: pointer;
                            transition: transform 0.3s ease, border 0.3s ease;
                            margin: 0 10px;
                        }

                        /* Image inside the color variant button */
                        .varient-btn img {
                            width: 40px;
                            height: 40px;
                            object-fit: cover;
                        }

                        /* Hover effect for buttons */
                        .varient-btn:hover {
                            transform: scale(1.1);
                        }

                        /* Active button styling */
                        .varient-btn.active {
                            border: 2px solid #000;
                            /* Border around active button */
                            background-color: rgba(0, 0, 0, 0.1);
                            /* Slight background highlight */
                        }

                        /* Optional: Adjust size of active button (optional) */
                        .varient-btn.active img {
                            transform: scale(1.1);
                            /* Slightly increase image size when active */
                        }
                    </style>

                    <div id="tab2" class="tab-panel-color">
                        <div class="swiper-container swiper car-models animate-text">
                            <div class="swiper-wrapper" id="slider-wrapper-2">
                                <!-- Red image -->
                                <div class="swiper-slide" id="red-slide-2">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Matte-Purple-1.jpg') }}"
                                        alt="Matte-Purple">
                                </div>
                                <div class="swiper-slide" id="purple-slide-2">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Misty-Purple-1.jpg') }}"
                                        alt="Misty-Purple">
                                </div>
                                <!-- Blue image -->
                                <div class="swiper-slide" id="blue-slide-2" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Glossy-White-1.jpg') }}"
                                        alt="Glossy-White">
                                </div>
                                <!-- Green image -->
                                <div class="swiper-slide" id="green-slide-2" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Glossy-Grey-1.jpg') }}"
                                        alt="Glossy-Grey">
                                </div>
                                <!-- Black image -->
                                <div class="swiper-slide" id="black-slide-2" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Glossy-Black-1.jpg') }}"
                                        alt="Glossy-Black">
                                </div>
                                <!-- White image -->
                                <div class="swiper-slide" id="white-slide-2" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/Slate-Blue-1.jpg') }}"
                                        alt="Slate-Blue">
                                </div>
                                <!-- Yellow image -->
                                <div class="swiper-slide" id="yellow-slide-2" style="display: none;">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/LC-1.jpg') }}"
                                        alt="Liquid-Caramel">
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <!-- Color Icons Section -->
                        <div class="d-flex align-items-center gap-3 mt-3 justify-content-center flex-wrap">
                            <button class="varient-btn active" data-color="red">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img1.png') }}"
                                    title="Matte-Purple" alt="Matte-Purple">
                            </button>
                            <button class="varient-btn" data-color="purple">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img1.png') }}"
                                    title="Misty-Purple" alt="Misty-Purple">
                            </button>
                            <!-- Button for Blue -->
                            <button class="varient-btn" data-color="blue">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img2.png') }}"
                                    title="Glossy-White" alt="Glossy-White">
                            </button>
                            <!-- Button for Green -->
                            <button class="varient-btn" data-color="green">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img3.png') }}"
                                    title="Glossy-Grey" alt="Glossy-Grey">
                            </button>
                            <!-- Button for Black -->
                            <button class="varient-btn" data-color="black">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img4.png') }}"
                                    title="Glossy-Black" alt="Glossy-Black">
                            </button>
                            <!-- Button for White -->
                            <button class="varient-btn" data-color="white">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img5.png') }}"
                                    title="Slate-Blue" alt="Slate-Blue">
                            </button>
                            <!-- Button for Yellow -->
                            <button class="varient-btn" data-color="yellow">
                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img6.png') }}"
                                    title="Liquid-Caramel" alt="Liquid-Caramel">
                            </button>
                        </div>

                        <div class="d-flex align-items-center gap-5 mt-5 justify-content-center animate-text">
                            <a href="{{ route(name: 'avatr12') }}" class="link">View AVATR 12</a>
                            <a href="{{ route(name: 'avatr12') }}?scroll=customise" class="btn">Customise</a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>


    <section class="design-center position-relative py-5 py-lg-0">
        <div class="next-section animated-section">
            <div class="tab-img" id="tab-img1">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img1.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img1.webp') }}" alt="" class="w-100" />
                </picture>
            </div>
            <di class="tab-img" v id="tab-img2">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img2.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img2.webp') }}" alt="" class="w-100" />
                </picture>
            </di>
            <div class="tab-img" id="tab-img3">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img3.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img3.webp') }}" alt="" class="w-100" />
                </picture>
            </div>
            <di class="tab-img" id="tab-img4">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img4.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img4.webp') }}" alt="" class="w-100" />
                </picture>
            </di>

            <div class="container">
                <div class="design-overlay-text ">
                    <div class="accordion">
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img1">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-1.svg') }}"
                                    alt=""> All
                                New Generation
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The Intelligent Electric Vehicle Platform CHN, developed in collaboration by Changan
                                    Automobile, Huawei, and CATL, features a revolutionary architecture, robust computing
                                    capabilities, and high-voltage charging, providing enhanced performance and efficiency
                                    for
                                    next-generation electric vehicles.
                                </div>
                                <div class="service-line"></div>
                            </div>


                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img2">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-2.svg') }}"
                                    alt=""> Safe
                                Battery
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The CATL ternary lithium battery provides advanced safety features, including continuous
                                    thermal runaway monitoring, an intelligent Battery Management System for early warning
                                    detection, and thermal spread suppression, ensuring maximum protection for electric
                                    vehicles.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img3">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-3.svg') }}"
                                    alt=""> Long
                                Range
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The battery pack, compatible with capacities ranging from 90kWh to 116kWh, supports
                                    extended driving ranges of over 700km on a single charge. This ensures that electric
                                    vehicles powered by this advanced system offer both high performance and long-distance
                                    travel, making it an ideal choice for those seeking reliability and convenience in their
                                    electric mobility experience.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img4">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-4.svg') }}"
                                    alt=""> High
                                Output
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The intelligent Huawei DriveONE high-voltage electric drive system enhances the driving
                                    experience with efficient oil cooling, high-speed cruising capabilities, and quiet,
                                    smooth output. This cutting-edge technology delivers improved performance, energy
                                    efficiency, and a comfortable, noise-free ride, setting a new standard in electric
                                    vehicle innovation.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const colorButtons = document.querySelectorAll(".varient-btn");
            const sliderWrapper = document.getElementById("slider-wrapper");

            // Initialize Swiper for tab1
            let swiper = new Swiper(".swiper-container", {
                loop: false, // Disable loop
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });

            // Function to switch images based on selected color
            function switchColorImages(color) {
                // Hide all images initially
                const allSlides = sliderWrapper.querySelectorAll(".swiper-slide");
                allSlides.forEach(slide => slide.style.display = "none");

                // Show the selected color's image
                const selectedSlide = document.getElementById(color + "-slide");
                if (selectedSlide) {
                    selectedSlide.style.display = "block";
                }
            }

            // Add event listener to each color button
            colorButtons.forEach(button => {
                button.addEventListener("click", function() {
                    // Remove active class from all color buttons and add to the clicked button
                    colorButtons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");

                    // Get the color data attribute and switch images
                    const selectedColor = this.getAttribute("data-color");
                    switchColorImages(selectedColor);
                });
            });

            // Set initial active color to red
            switchColorImages("red");
        });

        document.addEventListener("DOMContentLoaded", function() {
            const colorButtons = document.querySelectorAll(".varient-btn");
            const sliderWrapper2 = document.getElementById("slider-wrapper-2");

            let swiper2 = new Swiper(".swiper-container", {
                loop: false, // Ensure no looping
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });

            // Function to switch images based on selected color
            function switchColorImages(color) {
                // Hide all images
                const allSlides = sliderWrapper2.querySelectorAll(".swiper-slide");
                allSlides.forEach(slide => slide.style.display = "none");

                // Show the selected color's image
                const selectedSlide = document.getElementById(color + "-slide-2");
                if (selectedSlide) {
                    selectedSlide.style.display = "block";
                }
            }

            // Add event listener to each color button
            colorButtons.forEach(button => {
                button.addEventListener("click", function() {
                    // Remove active class from all and add to the clicked color button
                    colorButtons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");

                    // Get the color data and switch images
                    const selectedColor = this.getAttribute("data-color");
                    switchColorImages(selectedColor);
                });
            });

            // Set initial active color to red
            switchColorImages("red");
        });
    </script>
@endsection

