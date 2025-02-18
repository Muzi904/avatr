@extends('website.layouts.app')

@section('content')
    <section class="creative-fullpage--slider">
        <div class="banner-horizental">
            <div class="swiper swiper-container-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <picture>
                                <source srcset="{{ asset('website/images/avatr11/hero1.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/avatr11/hero1.jpg') }}" alt="" loading="lazy">
                            </picture>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source
                                                srcset="https://static.avatr.com/pc-website/images/home3.0/mobile/logo-e11_en.png"
                                                media="(max-width: 768px)"><img
                                                src="https://static.avatr.com/pc-website/images/home3.0/pc/logo-e11_en.png"
                                                alt="" class="w-100" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="#0">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Get a Quote</div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <picture>
                                <source srcset="https://static.avatr.com/pc-website/images/svp11/v1/h5/KV-SVP11.jpg?v=2"
                                    media="(max-width: 768px)"><img
                                    src="https://static.avatr.com/pc-website/images/svp11/v1/pc/KV-SVP11.jpg?v=2"
                                    alt="" class="BannerRc_head-image__327K8" loading="lazy">
                            </picture>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source
                                                srcset="https://static.avatr.com/pc-website/images/home3.0/mobile/logo-car12_en.png"
                                                media="(max-width: 768px)"><img
                                                src="https://static.avatr.com/pc-website/images/home3.0/pc/logo-car12_en.png"
                                                alt="" class="HomeBanner_logo-car__1Hxv8" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="#0">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Get a Quote</div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="swiper-button-wrapper creative-button--wrapper">
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m10 17l5-5l-5-5" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">

                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m14 7l-5 5l5 5" />
                        </svg>
                    </div>
                </div>
                <div class="slider-pagination-area">
                    <h5 class="slide-range one">01</h5>
                    <!-- Swiper Progressbar Pagination -->
                    <div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal">
                        <span class="swiper-pagination-progressbar-fill"></span>
                    </div>
                    <h5 class="slide-range three">02</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section-one">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/mob-img1.jpg') }}" media="(max-width: 768px)"><img
                class="w-100" src="{{ asset('website/images/avatr11/img1.jpg') }}" alt=""
                class="FirstTitle_section-bgm__2JYhD" loading="lazy">
        </picture>
        <h2>
            Across space and time
        </h2>
    </section>

    <section class="section-two">
        <div class="text mb-5">
            <h2>Innovative design with future aesthetics
            </h2>
            <h6>Driving into a new future with unique innovative Inn design
            </h6>
        </div>
        <div class="container">
            <div class="tabs-container scrolltabs">
                <!-- Tabs Content (Images) -->
                <div class="tab-content">
                    <div id="tab1-img" class="content active">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img2.jpg') }}" alt="">
                    </div>
                    <div id="tab2-img" class="content">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img3.jpg') }}" alt="">
                    </div>
                    <!--<div id="tab3-img" class="content">-->
                    <!--    <img class="w-100" src="{{ asset('website/images/avatr11/img41.jpg') }}" alt="">-->
                    <!--</div>-->
                    <div id="tab4-img" class="content">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img5.jpg') }}" alt="">
                    </div>
                    <div id="tab5-img" class="content">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img6.jpg') }}" alt="">
                    </div>
                </div>

                <!-- Tabs (Text) -->
                <div class="tabs">
                    <button class="tab active" data-target="#tab1-img" data-text-target="#tab1-text">Disc-wing front
                        fascia</button>
                    <button class="tab" data-target="#tab2-img" data-text-target="#tab2-text">Body with the golden
                        ratio</button>
                    <!--<button class="tab" data-target="#tab3-img" data-text-target="#tab3-text">The interactive HALO-->
                    <!--    Screen</button> -->
                    <button class="tab" data-target="#tab4-img" data-text-target="#tab4-text">Vertical fluid-type rear
                        quarter win</button>
                    <button class="tab" data-target="#tab5-img" data-text-target="#tab5-text">22-inch large
                        wheels</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab1-text" class="content content-text active">Inspired by spacecraft, it looks like a space
                        traveler
                        wandering around in a parallel world. The futuristic headlight design makes it look unique and
                        confident.</div>
                    <div id="tab2-text" class="content content-text">The seamlessly integrated body contour achieves an
                        exceptionally
                        pure athletic form.</div>
                    <!--<div id="tab3-text" class="content content-text">More flexible scene expressions, allowing you to play-->
                    <!--    with-->
                    <!--    creativity and showcase your personality.</div> -->
                    <div id="tab4-text" class="content content-text">The highly dynamic rear lines and fluidly sculpted
                        rear quarter
                        window design create a distinct sense of layering and unique identity. The sail-style active rear
                        spoiler adjusts with speed, delivering an experience akin to “flying close to the ground.”</div>
                    <div id="tab5-text" class="content content-text">A purer athletic stance, bold yet elegant, delivers a
                        striking and
                        sharp visual impression.</div>
                </div>
            </div>

        </div>

    </section>

    <section class="section-three">
        <div class="container">
            <div class="heading">
                <h2>Draw inspiration from nature and evoke inner resonance</h2>
                <ul>
                    <li>
                        <span>Length</span>
                        <h3>4895mm</h3>
                    </li>
                    <li>
                        <span>Width</span>
                        <h3>1970mm</h3>
                    </li>
                    <li>
                        <span>Height</span>
                        <h3>1601mm</h3>
                    </li>
                    <li>
                        <span>Wheelbase</span>
                        <h3>2975mm</h3>
                    </li>
                </ul>
            </div>
            <div class="interiror-variants">
                <div class="avatr11">
                    <div class="images pt-0">
                        <figure id="varient1">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img1.jpg') }}" alt="">
                        </figure>
                        <figure id="varient2" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img2.jpg') }}" alt="">
                        </figure>
                        <figure id="varient3" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img3.jpg') }}" alt="">
                        </figure>
                        <figure id="varient4" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img4.jpg') }}" alt="">
                        </figure>
                        <figure id="varient5" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img5.jpg') }}" alt="">
                        </figure>
                        <figure id="varient6" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img6.jpg') }}" alt="">
                        </figure>
                        {{-- <figure id="varient7" class="d-none">
                            <img class="w-100 my-50"
                                src="{{ asset('website/images/home/color-variants/avartr11/img7.jpg') }}" alt="">
                        </figure> --}}
                    </div>
                    <div class="colors mt-5">
                        <div>
                            <button class="varient-btn active" data-target="varient1"></button>
                            <div id="varient1-text" class="text-start">
                                <p>Liquid caramel</p>
                            </div>
                        </div>
                        <div>
                            <button class="varient-btn" data-target="varient2"></button>
                            <div id="varient2-text" class="text-start d-none">
                                <p>Aqua</p>
                            </div>
                        </div>
                        <div>
                            <button class="varient-btn" data-target="varient3"></button>
                            <div id="varient3-text" class="text-start d-none">
                                <p>Mate White</p>
                            </div>
                        </div>
                        <div>
                            <button class="varient-btn" data-target="varient4"></button>
                            <div id="varient4-text" class="text-start d-none">
                                <p>Glossy gray</p>
                            </div>
                        </div>
                        <div>
                            <button class="varient-btn" data-target="varient5"></button>
                            <div id="varient5-text" class="text-start d-none">
                                <p>Glossy Black</p>
                            </div>
                        </div>

                        <div>
                            <button class="varient-btn" data-target="varient6"></button>
                            <div id="varient6-text" class="text-start d-none">
                                <p>Matte Grey</p>
                            </div>
                        </div>
                        {{-- <div>
                            <button class="varient-btn" data-target="varient7"></button>
                            <div id="varient7-text" class="text-start d-none">
                                <p>Dual - Tone(AVATR grey/black)</p>
                            </div>
                        </div> --}}


                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- <section class="section-one mt-100">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/mob-img7.jpg') }}" media="(max-width: 768px)"><img
                class="w-100" src="{{ asset('website/images/avatr11/img7.jpg') }}" alt=""
                class="FirstTitle_section-bgm__2JYhD" loading="lazy">
        </picture>
        <h2>
            A strong run into the wind
        </h2>
        <div class="container">
            <div class="text">
                <h1>Kunlun Intelligent Range Extender/Full-stack 800V SiC EV platform</h1>
                <h6>Two powertrain options. A new era led by AVATR. </h6>
                <h4>Kunlun Intelligent Range Extender, creates a new generation.
                </h4>
            </div>
        </div>

    </section> --}}

    <section>
        <div class="container">
            <div class="swiper car-page">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img8.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img8.jpg') }}"
                                alt="Unmatched speed and efficiency" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading">
                            <h1>Quick charging and long driving range</h1>
                            <ul>
                                <li>
                                    <h2>3c</h2>
                                    <span>3C Peak charging rate</span>
                                </li>
                                <li>
                                    <h2>225 <span>km</span></h2>
                                    <span>CLTC pure electric range of 225 km</span>
                                </li>
                                <li>
                                    <h2>1065 <span>km</span></h2>
                                    <span>CLTC comprehensive range of 1065 km </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img9.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img9.jpg') }}"
                                alt="Exceptional safety and durability" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading">
                            <h1>Low fuel consumption, fuel-flexible, and powerful performance</h1>
                            <ul>
                                <li>
                                    <h2>6.2/100 <span>km</span></h2>
                                    <span>6.2L/100km WLTC Fuel consumption in low charge</span>
                                </li>
                                <li>
                                    <h2>92#</h2>
                                    <span>#92 Gasoline needed only</span>
                                </li>
                                <li>
                                    <h2> ＜0.6</h2>
                                    <span>Only＜0.6s Zero hundred acceleration on full power feed </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img10.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img10.jpg') }}"
                                alt="Premium comfort and innovation" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading">
                            <h1>Luxury-class noise reduction standards.</h1>
                            <ul>
                                <li>
                                    <h2>64 <span>db</span></h2>
                                    <span>120km/h, ＜064.2dB </span>
                                </li>
                                <li>
                                    <h2>30</h2>
                                    <span>More than 30 active and passive noise reduction technologies</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Swiper Navigation -->
                <div class="animeslide-bottom flex">
                    <div class="cell small">
                        <div class="swiper-button-prev animeslide-button-prev" aria-label="Previous slide"></div>
                        <div class="swiper-button-next animeslide-button-next" aria-label="Next slide"></div>
                    </div>
                </div>
            </div>



        </div>

    </section>

    <section class="swiper-without-arrow">
        <h1>Full-stack 800V SiC EV platform
        </h1>
        <div class="container">
            <div class="swiper-container imgaewthtextbox">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div>
                                <img class="w-100 d-flex" src="{{ asset('website/images/avatr11/img11.jpg') }}"
                                    alt="">
                            </div>
                            <div class="text">
                                <h3>HUAWEI DriveONE 800V SiC Electric Drive</h3>
                                <p>CLTC pure electric range of the rear-wheel drive version is 815 km</p>
                                <p>0-100 km/h acceleration time of the four-wheel drive version is 3.9 seconds</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div>
                                <video class="w-100 d-flex" mute autoplay loop
                                    src="{{ asset('website/images/avatr11/video1.mp4') }}" autoplay loop></video>
                            </div>
                            <div class="text">
                                <h3>HUAWEI DriveONE iTRACK</h3>
                                <p>Utilizing microsecond ultra-fine real-time road condition sensing technology</p>
                                <p>The system achieves millimeter-level torque adjustments</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div>
                                <img class="w-100 d-flex" src="{{ asset('website/images/avatr11/img12.jpg') }}"
                                    alt="">
                            </div>
                            <div class="text">
                                <h3>CATL ternary lithium battery</h3>
                                <p>Standardized battery pack size, CATL CTP high-efficiency grouping technology</p>
                                <p>Energy density of up to 190 Wh/kg in 116 kWh battery pack</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section class="section-one mt-100">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/img13.jpg') }}" media="(max-width: 768px)">
            <img class="w-100" src="{{ asset('website/images/avatr11/img13.jpg') }}" alt="" loading="lazy">
        </picture>
        <h2>
            New chapter of future and luxury
        </h2>
        <div class="container">
            <div class="text">
                <h1>Emotional Intelligent Cockpit
                </h1>
                <h6 class="mb-5">Every seat is VIP seat

                </h6>
            </div>
        </div>
        <picture>
            <source srcset="{{ asset('website/images/avatr11/img14.jpg') }}" media="(max-width: 768px)">
            <img class="w-100" src="{{ asset('website/images/avatr11/img14.jpg') }}" alt="" loading="lazy">
        </picture>
    </section>

    <section class="section-two tab-section2">
        <div class="container">
            <div class="tabs-container scrolltabs">
                <!-- Tabs Content (Images) -->
                <div class="tab-content">
                    <div id="tab5-img" class="content active">
                        <video class="w-100" autoplay loop muted playsinline>
                            <source src="{{ asset('website/images/avatr11/video2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab6-img" class="content">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img15.jpg') }}" alt="">
                    </div>
                    <div id="tab7-img" class="content">
                        <img class="w-100" src="{{ asset('website/images/avatr11/img16.jpg') }}" alt="">
                    </div>

                </div>

                <!-- Tabs (Text) -->
                <div class="tabs">
                    <button class="tab active" data-target="#tab5-img" data-text-target="#tab5-text">Emotional Vortex +
                        256 Colors Ambient Lamp Lights</button>
                    <button class="tab" data-target="#tab6-img" data-text-target="#tab6-text">Full-grain
                        semi-aniline</button>
                    <button class="tab" data-target="#tab7-img" data-text-target="#tab7-text">Dinamica<sup>®</sup>
                        microfiber suede roof lining</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab5-text" class="content content-text active">Ambient Lamp Light changes by your heart flow,
                        unique atmosphere gives you exclusive sensations.</div>
                    <div id="tab6-text" class="content content-text">Selected full-grain semi-aniline leather, crafted
                        from premium hides and fine finishing techniques, preserving the natural texture and breathability
                        of the leather. A luxurious touch that skillfully restores the ecological beauty of top-grade
                        leather.</div>
                    <div id="tab7-text" class="content content-text">The delicate and soft texture fills the interior of
                        the car with a warm and comfortable atmosphere, making luxury within reach.</div>

                </div>
            </div>

        </div>

    </section>


    <section class="sectioncarpage">
        <div class="swiper animeslide swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide animeslide-slide">
                    <a href="#">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img23.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img23.jpg') }}" alt="" class="w-100"
                                loading="lazy">
                        </picture>
                        <div class="container">

                            <h1 data-animate="bottom" class="animeslide-heading ">
                                Front Row Dual Zero-Gravity Seats
                            </h1>

                            <p data-animate="bottom" class="animeslide-desc mb-5 ">
                                Indulge in a personalized experience with a high level of comfort. Featuring three levels of
                                ventilation, three levels of heating, and a massage function with adjustable intensity and
                                five
                                modes to cater to every journey’s needs.
                            </p>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide animeslide-slide">
                    <a href="#">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img25.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img25.jpg') }}" alt="" class="w-100"
                                loading="lazy">
                        </picture>
                        <div class="container">
                            <h1 data-animate="bottom" class="animeslide-heading ">
                                Large sofa with full functionality
                            </h1>

                            <p data-animate="bottom" class="animeslide-desc mb-5 ">
                                The newly added rear seat backrest and cushion ventilation and massage functions allow rear
                                passengers to enjoy meticulous care. The pure electric model can be selected as a 4-seater
                                version. The rear VIP seat adopts a comfortable embrace design and has an electrically
                                adjustable seat back. It can be adjusted forward 28 degrees and backward 12 degrees based on
                                the preset position. The cumulative adjustment range is up to 40 degrees, providing maximum
                                riding comfort.
                            </p>

                        </div>
                    </a>
                </div>
                <div class="swiper-slide animeslide-slide">
                    <a href="#">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img24.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img24.jpg') }}" alt="" class="w-100"
                                loading="lazy">
                        </picture>
                        <div class="container">
                            <h1 data-animate="bottom" class="animeslide-heading 2">
                                Large central armrest in the rear
                            </h1>

                            <p data-animate="bottom" class="animeslide-desc mb-5 ">
                                The extended central armrest enhances comfort, creating a luxurious seating experience.
                            </p>
                        </div>
                    </a>

                </div>

            </div>
            <div class="flex animeslide-bottom">

                <div class="cell small">
                    <div class="animeslide-button-prev swiper-button-prev"></div>
                    <div class="animeslide-button-next swiper-button-next"></div>
                </div>
            </div>
        </div>

    </section>


    <section class="section-three dark-section-three">
        <div class="container">
            <video class="w-100" autoplay loop muted playsinline>
                <source src="{{ asset('website/images/avatr11/video3.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="heading">
                <div style="flex: 0.7">
                    <h2>Meridian<sup>™</sup> High-end Sound System</h2>
                    <p>Experience High-level sound quality with precision acoustic tuning, delivering the most intricate
                        emotions and expressions. Immerse yourself in an exquisite auditory feast that elevates every
                        moment.</p>
                </div>

                <ul>
                    <li>
                        <h3>25</h3>
                        <span>Loudspeakers</span>
                    </li>
                    <li>
                        <h3>7.14</h3>
                        <span>Sound System</span>
                    </li>
                    <li>
                        <h3>216 <span>w</span></h3>
                        <span>Power Output</span>
                    </li>
                </ul>
            </div>

        </div>

    </section>

    <section class="section-four">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/img17.jpg') }}" media="(max-width: 768px)">
            <img class="w-100" src="{{ asset('website/images/avatr11/img17.jpg') }}" alt="" loading="lazy">
        </picture>
        <div class="icon-main-container container">
            <h3 class="mb-4">
                Exclusive 6 sound effect algorithms
            </h3>
            <div class="icon-text-container row">
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3">
                    <img src="{{ asset('website/images/avatr11/icon1.png') }}" alt="">
                    <h5>RE-Q
                    </h5>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3">
                    <img src="{{ asset('website/images/avatr11/icon2.png') }}" alt="">
                    <h5>Digital Precision
                    </h5>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3">
                    <img src="{{ asset('website/images/avatr11/icon3.png') }}" alt="">
                    <h5>Horizon
                    </h5>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3 mb-md-0">
                    <img src="{{ asset('website/images/avatr11/icon4.png') }}" alt="">
                    <h5>Perfect Balance
                    </h5>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3 mb-md-0">
                    <img src="{{ asset('website/images/avatr11/icon5.png') }}" alt="">
                    <h5>True time
                    </h5>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3 mb-3 mb-md-0">
                    <img src="{{ asset('website/images/avatr11/icon6.png') }}" alt="">
                    <h5>Intelli-Q
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section-four" style="background-color: #000">
        <div class="container">
            <picture>
                <source srcset="{{ asset('website/images/avatr11/img18.jpg') }}" media="(max-width: 768px)">
                <img class="SoundAlgorithms_HarmonyOS-bgm__2-5eY w-100"
                    src="{{ asset('website/images/avatr11/img18.jpg') }}" alt="" loading="lazy">
            </picture>
            <div class="container icon-main-container">
                <h3 class="mb-4 text-center">
                    Intuitive AVATR Operating System Smart Cabin
                </h3>
                <p class="text-center text-white">The zero-layer design achieves minimal interaction, making it visible at
                    a glance and reachable with a touch. It has many frequently used and updated apps and a super desktop
                    that is always available. It supports intelligent voice and enables quick response to multiple commands,
                    seamless flow of cellphone touch transmission, and car and home interconnection that can be controlled
                    at any time.
                </p>

            </div>
        </div>

    </section>

    <section class="section-two tab-section2 " style="background-color:#000">
        <div class="container">
            <div class="tabs-container scrolltabs">
                <!-- Tabs Content (Images) -->
                <div class="tab-content">
                    <div id="tab11-img" class="content active">
                        <video class="w-100" autoplay loop muted playsinline>
                            <source src="{{ asset('website/images/avatr11/video4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab12-img" class="content">
                        <video class="w-100" autoplay loop muted playsinline>
                            <source src="{{ asset('website/images/avatr11/video5.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>

                <!-- Tabs (Text) -->
                <div class="tabs justify-content-center">
                    <button class="tab active" data-target="#tab11-img" data-text-target="#tab11-text">Super
                        Desktop</button>
                    <button class="tab" data-target="#tab12-img" data-text-target="#tab12-text">Massive
                        ecology</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab11-text" class="content content-text active">Supports seamless casting and mirroring, with
                        mobile apps easily shared on a large screen. It also offers a rich ecosystem of applications,
                        providing a smooth and unified experience</div>
                    <div id="tab12-text" class="content content-text">It provides a large number of intelligent services,
                        covering news, travel, finance, securities, and roadside assistance, all accessible with one click.
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section class="section-one mt-100">Glossy White

        <picture>
            <source srcset="{{ asset('website/images/avatr11/img19.jpg') }}" media="(max-width: 768px)"><img
                class="w-100" src="{{ asset('website/images/avatr11/img19.jpg') }}" alt=""
                class="FirstTitle_section-bgm__2JYhD" loading="lazy">
        </picture>
        <h2>
            Smart driving, worry-free Journey.
        </h2>
        {{-- <div class="container">
            <div class="text">
                <h1>HUAWEI QianKun Intelligent Driving ADS 3.0 </h1>
                <h6>The special/only one with HUAWEI 3 laser Radar.
                </h6>
            </div>
        </div> --}}

    </section>


    {{-- <section>
        <div class="container">
            <div class="swiper car-page">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img20.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img20.jpg') }}"
                                alt="Unmatched speed and efficiency" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading d-block">
                            <h1>From Parking Space to Parking Space</h1>
                            <p>All scenarios are connected, from public road parking spaces to park roads, from parking lot
                                to underground parking space.</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img21.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img21.jpg') }}"
                                alt="Exceptional safety and durability" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading d-block">
                            <h1>CAS 3.0 360° Collision Avoidance System</h1>
                            <p>Advanced perception, ultra-fast response, super safe. </p>

                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide animeslide-slide">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr11/img22.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr11/img22.jpg') }}"
                                alt="Premium comfort and innovation" class="w-100" loading="lazy">
                        </picture>
                        <div class="heading d-block">
                            <h1>Parking Assistance Self-Drive, Self-Park</h1>
                            <p>Within the monitored field of vision of the parking lot, the "unmanned driving" in the
                                underground garage can be realized at will, and can cruise autonomously to find a parking
                                space.</p>

                        </div>
                    </div>
                </div>

                <!-- Swiper Navigation -->
                <div class="animeslide-bottom flex">
                    <div class="cell small">
                        <div class="swiper-button-prev animeslide-button-prev" aria-label="Previous slide"></div>
                        <div class="swiper-button-next animeslide-button-next" aria-label="Next slide"></div>
                    </div>
                </div>
            </div>



        </div>

    </section> --}}
@endsection
