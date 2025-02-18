@extends('website.layouts.app')

@section('content')
    <section class="creative-fullpage--slider">
        <div class="banner-horizental">
            <div class="swiper swiper-container-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/hero1.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/avatr12/hero1.jpg') }}" alt="" loading="lazy">
                            </picture>
                            <div class="swiper-content" data-swiper-parallax="2000">
                                <div class="container">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/avatr12/avatr12.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/avatr12/avatr12.png') }}" alt=""
                                                class="w-100 mb-3" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn bg-transparent text-white" role="button"
                                            href="#0">
                                            <div class="creative-btn--label text-white">
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
                                <source srcset="{{ asset('website/images/avatr12/hero2.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/avatr12/hero2.jpg') }}" alt="" loading="lazy">
                            </picture>

                            <div class="swiper-content" data-swiper-parallax="2000">
                                <div class="container">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/avatr12/avatr12.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/avatr12/avatr12.png') }}" alt=""
                                                class="w-100 mb-3" loading="lazy">
                                        </picture>
                                    </div>

                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn bg-transparent text-white" role="button"
                                            href="#0">
                                            <div class="creative-btn--label text-white">
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

    <section class="section-one avatr12bg-section-one"
        style="background-image:url({{ asset('website/images/avatr12/avatr12bg-section-one.jpg') }})">
        <h1>Design goes one step further
        </h1>
        <div class="container">
            <video id="scrollVideo" class=" w-100 mb-3" playsinline autoplay loop muted
                src="{{ asset('website/images/avatr12/video1.mp4') }}"></video>
            <div class="heading">
                <h1>Future Original Design
                </h1>
                <p>Created based on the concept of "future aesthetics", with perfect body proportions, a suspended body
                    design,
                    and a groundbreaking hatchback rear without rear portholes, it fully exudes an elegant and sporty
                    posture
                </p>
            </div>
        </div>

    </section>

    <section class="section-three pb-5 mb-5">
        <div class="container">
            <div class="heading justify-content-between">
                <h2>Color inspired by nature
                </h2>
                <ul>
                    <li>
                        <span>Length</span>
                        <h3>5020mm
                        </h3>
                    </li>
                    <li>
                        <span>Width</span>
                        <h3>1999mm
                        </h3>
                    </li>
                    <li>
                        <span>Height</span>
                        <h3>1450mm</h3>
                    </li>
                    <li>
                        <span>Wheelbase</span>
                        <h3>3020mm</h3>
                    </li>
                </ul>
            </div>
            <div class="interiror-variants">
                <div class="interiror-variants">
                    <div class="avatr12">
                        <div class="images pt-0">
                            <figure id="varient9">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img1.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient10" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img2.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient11" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img3.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient12" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img4.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient13" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img5.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient14" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img6.jpg') }}"
                                    alt="">
                            </figure>
                            <figure id="varient15" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img7.jpg') }}"
                                    alt="">
                            </figure>
                            {{-- <figure id="varient16" class="d-none">
                                <img class="w-100 my-50"
                                    src="{{ asset('website/images/home/color-variants/avatr12/img8.jpg') }}"
                                    alt="">
                            </figure> --}}
                        </div>
                        <div class="colors mt-5">
                            <div>
                                <button class="varient-btn active" data-target="varient9"></button>
                                <div id="varient9-text" class="text-start">
                                    <p>Misty purple</p>
                                </div>
                            </div>
                            <div>
                                <button class="varient-btn" data-target="varient10"></button>
                                <div id="varient10-text" class="text-start d-none">
                                    <p>Glossy white</p>
                                </div>
                            </div>
                            <div>
                                <button class="varient-btn" data-target="varient11"></button>
                                <div id="varient11-text" class="text-start d-none">
                                    <p>Glossy grey</p>
                                </div>
                            </div>
                            <div>
                                <button class="varient-btn" data-target="varient12"></button>
                                <div id="varient12-text" class="text-start d-none">
                                    <p>Glossy black</p>
                                </div>
                            </div>
                            <div>
                                <button class="varient-btn" data-target="varient13"></button>
                                <div id="varient13-text" class="text-start d-none">
                                    <p>Slate blue</p>
                                </div>
                            </div>

                            <div>
                                <button class="varient-btn" data-target="varient14"></button>
                                <div id="varient14-text" class="text-start d-none">
                                    <p>Liquid caramel</p>
                                </div>
                            </div>
                            <div>
                                <button class="varient-btn" data-target="varient15"></button>
                                <div id="varient15-text" class="text-start d-none">
                                    <p>Matt color-Matte purple</p>
                                </div>
                            </div>
                            {{-- <div>
                                <button class="varient-btn" data-target="varient16"></button>
                                <div id="varient16-text" class="text-start d-none">
                                    <p>Dual - Tone(AVATR grey/black)</p>
                                </div>
                            </div> --}}


                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="swiper car-page">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img1.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img1.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>

                        <div class="heading d-block">
                            <h1>Extremely Powerful</h1>
                            <p class="mb-0">231kW Highest electric drive power in hybrid class</p>
                            <p class="mb-0">Only 0.5s Zero hundred acceleration on full power feed</p>
                            <p class="mb-0">39.05kWh CATL's Shenxing superfast charging batterie</p>
                            <p class="mb-0">9C Complete Discharging Capacity，7.7C Feeding Discharge Capacity</p>
                            <p class="mb-0">25 times Stable and reliable acceleration</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <video class="w-100" autoplay loop muted playsinline>
                                <source src="{{ asset('website/images/avatr12/video3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="heading d-block">
                            <h1>Extremely Worriless</h1>
                            <p class="mb-0">≥1155km CLTC overall range, ≥245km CLTC EV range</p>
                            <p class="mb-0">3C Peak charging rate, only 15min to charge from 30% to 80%</p>
                            <p class="mb-0">#92 Gasoline needed only, 5.8L/100km WLTC Fuel consumption in low charge</p>
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

    <section class="Power_container-ev__2DJyZ">
        <div class="Power_content-ev__1jwZS">
            <h3 class="Power_ev-title__3e_Z8">Full-stack 800V SiC EV platform</h3>
            <p class="Power_ev-content__2v22O">The advanced SiC technology equipped with CATL’s 94.5-degree ternary lithium
                customized battery empower you to journey with unrivaled freedom and range.</p>
        </div>
        <picture>
            <source srcset="{{ asset('website/images/avatr12/img2.jpg') }}" media="(max-width: 768px)"><img
                src="{{ asset('website/images/avatr12/img2.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>

    </section>


    {{-- <section class="section-one avatr12bg-section-one position-relative pb-0">
        <h1 class="">Design goes one step further
        </h1>
        <div>
            <picture>
                <source srcset="{{ asset('website/images/avatr12/img3.jpg') }}" media="(max-width: 768px)"><img
                    src="{{ asset('website/images/avatr12/img3.jpg') }}" alt="" class="w-100" loading="lazy">
            </picture>
            <div class="container TextOnImg_content__1DDkn">
                <h3 class="TextOnImg_text-title__2_zUz">
                    <p>The rear cabin floating skylight screen</p>
                </h3>
                <p class="TextOnImg_text-desc__Oe_RF">The 16-inch HD display and 100° electric adjustment allow everyone to
                    match the best viewing angle. With HarmonyOS 4.0 smart cockpit system, which supports a rich ecosystem
                    of videos, music, games, etc., AVATR 12 realizes intelligent interconnection and voice control with the
                    central control screen, making the enjoyment in the rear row beyond your imagination.</p>
            </div>
        </div>

    </section> --}}


    <section class="section-three dark-section-three">
        <div class="container">
            <video class="w-100 mt-5" src="{{ asset('website/images/avatr12/video4.mp4') }}"></video>
            <div class="heading">
                <div style="flex: 0.7">
                    <h2>Meridian<sup>™</sup> <br> High-end Sound System</h2>

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
        <div class="icon-main-container">
            <div class="container">
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
                <h3 class="Luxury_modes-pc-title__2UJ1L">Five audio modes</h3>
                <ul class="Luxury_modes-pc-list__3U7Nn p-0">
                    <li class="Luxury_modes-pc-item__1wx6Z">
                        <p>Pure &amp; Original</p>
                    </li>
                    <li class="Luxury_modes-pc-item__1wx6Z">
                        <p>Luxury Theatre</p>
                    </li>
                    <li class="Luxury_modes-pc-item__1wx6Z">
                        <p>Ethereal</p>
                    </li>
                    <li class="Luxury_modes-pc-item__1wx6Z">
                        <p>Immersive Cinema</p>
                    </li>
                    <li class="Luxury_modes-pc-item__1wx6Z">
                        <p>Personalized</p>
                    </li>
                </ul>
            </div>


        </div>
    </section>


    <section class="pt-5" style="background-color: #000">
        <div class="container">
            <div class="swiper car-page">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img6.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img6.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>

                        <div class="heading d-block">
                            <h1 class="text-white">Large sofa with full functionality</h1>
                            <p class="mb-0 text-white">The rear row also has heating, ventilation, and SPA-level 8-point
                                massage
                                techniques. The extended center armrest, which is over 25cm wide and equipped with a
                                multi-touch screen, puts luxury under your control.</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img7.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img7.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>

                        <div class="heading d-block">
                            <h1 class="text-white">Large sofa with full functionality</h1>
                            <p class="mb-0 text-white">Super comfortable! The suspended layer seat cushion design uses 20mm
                                ultra-thick space cotton, which not only provides the comfort of slow rebound sponge, but
                                also provides the support of high rebound sponge. </p>
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

    <section class="section-three dark-section-three">
        <div class="container">
            <picture>
                <source srcset="{{ asset('website/images/avatr12/img8.jpg') }}" media="(max-width: 768px)">
                <img class="w-100" src="{{ asset('website/images/avatr12/img8.jpg') }}" alt=""
                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
            </picture>
            <div class="heading">
                <div style="flex: 0.7">
                    <h2>The rear spacious hall
                    </h2>
                    <p>Under the ultimate coupe shape, it provides class-leading rear space performance, which is as
                        luxurious as a "large horizontal hall".

                    </p>

                </div>

                <ul>
                    <li>
                        <h3>964mm</h3>
                        <span>Comprehensive Ride Space
                        </span>
                    </li>
                    <li>
                        <h3>1000mm
                        </h3>
                        <span>Effective rear legroom reaches
                        </span>
                    </li>
                </ul>
            </div>

        </div>

    </section>

    <section class="section-one avatr12bg-section-one position-relative pb-0">
        <div>
            <picture>
                <source srcset="{{ asset('website/images/avatr12/img9.jpg') }}" media="(max-width: 768px)"><img
                    src="{{ asset('website/images/avatr12/img9.jpg') }}" alt="" class="w-100" loading="lazy">
            </picture>
            <div class="TextOnImg_content__1DDkn container">
                <h3 class="TextOnImg_text-title__2_zUz">
                    Dual zero-gravity astronautical seats

                </h3>
                <p class="TextOnImg_text-desc__Oe_RF">16-way electric adjustment, ventilation, heating, massage are all
                    available. The zero-pressure lying position puts the heart and knees at the same level, and the muscles
                    throughout the body are completely relaxed, allowing you to sleep peacefully.

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
                        <picture>
                            <source srcset="{{ asset('website/images/avatr12/img11.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr12/img11.jpg') }}" alt="" class="w-100"
                                loading="lazy">
                        </picture>
                    </div>
                    <div id="tab12-img" class="content">
                        <picture>
                            <source srcset="{{ asset('website/images/avatr12/img10.jpg') }}" media="(max-width: 768px)">
                            <img src="{{ asset('website/images/avatr12/img10.jpg') }}" alt="" class="w-100"
                                loading="lazy">
                        </picture>
                    </div>

                </div>

                <!-- Tabs (Text) -->
                <div class="tabs ">
                    <button class="tab active" data-target="#tab11-img" data-text-target="#tab11-text">Ultra-luxurious
                        cabin soft furnishings</button>
                    <button class="tab" data-target="#tab12-img" data-text-target="#tab12-text">AVATR's GentleTech
                        design concept</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab11-text" class="content content-text active">Original Nappa leather steering wheel and
                        seats, ultra-soft touch suede-like exquisite ceiling, and pure natural European selected real wood
                        of the center console. The beauty of details is subtle and stylish.</div>
                    <div id="tab12-text" class="content content-text">AVATR's GentleTech design concept is unique because
                        of its demanding attention to details and new creativity. Every ingenuity such as the fully
                        soft-covered clamshell storage compartment design and the switch hidden in the ambient light
                        demonstrates AVATR's ultimate pursuit. When you are in it, you feel as if you have stepped into an
                        unparalleled art space.
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section class="section-padding pt-0" style=" background-color: rgb(245 245 245);">
        <div class="container">
            <div class="Chassis_chassis-head__1we7e">
                <picture>
                    <source srcset="{{ asset('website/images/avatr12/img12.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/avatr12/img12.jpg') }}" alt=""
                        class="Chassis_head-img__154G0 w-100" loading="lazy">
                </picture>
            </div>
            <ul class="Chassis_chassis-lightspot__3UAes">
                <li class="Chassis_lightspot-item__2m_EA">Front double-wishbone double-ball head all-aluminum alloy
                    suspension
                    + rear multi-link independent suspension</li>
                <li class="Chassis_lightspot-item__2m_EA">Intelligent Air Suspension and CDC<sup>®</sup> Dynamic Damper
                </li>
                <li class="Chassis_lightspot-item__2m_EA">Magic Carpet Suspension</li>
                <li class="Chassis_lightspot-item__2m_EA">Continental Drive-by-Wire + Comfort Brake System</li>
            </ul>
        </div>

    </section>

    <section class="swiper-without-arrow whitepanigation section-padding">
        <h1>Full-stack 800V SiC EV platform
        </h1>
        <div class="container">
            <div class="swiper-container imgaewthtextbox">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <video class="w-100 d-flex" autoplay loop muted playsinline>
                                    <source src="{{ asset('website/images/avatr12/video5.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text text-container">
                                <div>
                                    <h3>Magic Carpet Suspension</h3>
                                    <p>With the fusion of LIDAR and an 8-megapixel camera, it can retroactively detect bumps
                                        and
                                        undulations in the road ahead, and thus adjust the damping value of the CDC® Dynamic
                                        Damper in advance.</p>
                                </div>
                                <ul class="SwiperPC03_figure-content__3X3yN">
                                    <li class="SwiperPC03_figure-item__1513V">
                                        <p class="SwiperPC03_figure-value__2nGfn">59<span>%</span></p>
                                        <p class="SwiperPC03_figure-name__2ERnE">Reduction in vertical and longitudinal
                                            jitter over speedbumps</p>
                                    </li>
                                    <li class="SwiperPC03_figure-item__1513V">
                                        <p class="SwiperPC03_figure-value__2nGfn">&gt;75<span>%</span></p>
                                        <p class="SwiperPC03_figure-name__2ERnE">Reduction in body sway on undulating roads
                                        </p>
                                    </li>
                                    <li class="SwiperPC03_figure-item__1513V">
                                        <p class="SwiperPC03_figure-value__2nGfn">58<span>%</span></p>
                                        <p class="SwiperPC03_figure-name__2ERnE">Reduction in bumpiness from rough road
                                            surface</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <video class="w-100 d-flex" autoplay loop muted playsinline>
                                    <source src="{{ asset('website/images/avatr12/video6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text text-container">
                                <div>
                                    <h3>Comfortable Starting</h3>
                                    <p class="fs-14">Millisecond-level dynamic response accurately matches the optimal
                                        damping force to suppress the discomfort of lifting your head when starting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <video class="w-100 d-flex" autoplay loop muted playsinline>
                                    <source src="{{ asset('website/images/avatr12/video7.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text text-container">
                                <h3>Comfortable parking</h3>
                                <p>The Comfort Braking System can actively identify non-emergency braking scenarios,
                                    intelligently adjust the braking force, and reduce the braking pitch by 85%, effectively
                                    alleviating the discomfort caused by braking "nodding".</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <video class="w-100 d-flex" autoplay loop muted playsinline>
                                    <source src="{{ asset('website/images/avatr12/video8.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text text-container">
                                <h3>Welcome mode</h3>
                                <p>When you get closer, the AVATR 12 smart air suspension system will automatically raise
                                    the body to allow you to get on the car calmly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination "></div>
            </div>
        </div>

    </section>


    <section>
        <h2 class="SectionTitle_title__39HkV">Intelligence goes one step further</h2>
        <h3 class="Intelligence_intelligence-second-title__2GORS">Huawei QianKun Intelligent Driving ADS 3.0</h3>
        <div class="container">
            <div class="swiper car-page">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    {{-- <div class="swiper-slide animeslide-slide">
                        <div>
                            <video class="w-100" autoplay loop
                                src="{{ asset('website/images/avatr12/video9.mp4') }}"></video>
                        </div>

                        <div class="heading d-block">
                            <h1>From Parking Space to Parking Space</h1>
                            <p class="mb-0">Whether departing from a garage or roadside parking space, or heading to a
                                garage or temporary parking spot, ADS 3.0 lead the way into the era of parking to parking
                                navigation pilot, ensuring seamless intelligent driving and complete comfort throughout the
                                journey.</p>
                        </div>
                    </div> --}}
                    <!-- Slide 2 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img13.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img13.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>

                        <div class="heading d-block">
                            <h1>Nationwide lsland Driving Capability</h1>
                            <p class="mb-0">ADS 3.0 Intelligent Driving supports roundabout navigation, covering various
                                types of roundabouts including single-lane, multi-lane, and those with traffic lights.</p>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img14.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img14.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>
                        <div class="heading">
                            <h1>Smoother car-following, gentler lane changes</h1>
                            <ul class="SwiperPC01_slider-data__2kCeI">
                                <li class="SwiperPC01_data-item__2KGUH">
                                    <p class="SwiperPC01_item-value__1Clv8">30<span>%</span></p>
                                    <p class="SwiperPC01_item-name__1EGZZ">reduction in re-braking rate</p>
                                </li>
                                <li class="SwiperPC01_data-item__2KGUH">
                                    <p class="SwiperPC01_item-value__1Clv8">50<span>%</span></p>
                                    <p class="SwiperPC01_item-name__1EGZZ">reduction in bumpiness from rough road surface
                                    </p>
                                </li>
                                <li class="SwiperPC01_data-item__2KGUH">
                                    <p class="SwiperPC01_item-value__1Clv8">30<span>%</span></p>
                                    <p class="SwiperPC01_item-name__1EGZZ">more successful lane changes</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img15.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img15.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>
                        <div class="heading d-block">
                            <h1>Parking Assistance Self-Drive, Self-Park</h1>
                            <p>Within the field of view that can be monitored in the parking lot, you can remotely operate
                                the vehicle through your mobile phone and park it in the set parking space, or drive out of
                                the parking space to the pick-up location you set. The single floor also supports remote
                                vehicle movement and remote summoning. Really realize that when you call, you will come and
                                go when you wave.</p>

                        </div>
                    </div>
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img16.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img16.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>
                        <div class="heading d-block">
                            <h1>Remote Parking Upon Leaving the Vehicle</h1>
                            <p>Get rid of Bluetooth distance restrictions when encountering a narrow parking space. Just
                                click and get off the car and go.</p>

                        </div>
                    </div>
                    <div class="swiper-slide animeslide-slide">
                        <div>
                            <picture>
                                <source srcset="{{ asset('website/images/avatr12/img17.jpg') }}"
                                    media="(max-width: 768px)">
                                <img class="w-100" src="{{ asset('website/images/avatr12/img17.jpg') }}" alt=""
                                    class="FirstTitle_section-bgm__2JYhD" loading="lazy">
                            </picture>
                        </div>
                        <div class="heading d-block">
                            <h1>Adjustment of Parking Posture</h1>
                            <p>Choose the parking position (left, center or right) according to your own preferences and
                                needs, get on and off the car gracefully.</p>

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

    <section>
        <div class="container">
            <ul class="Intelligence_laser-cabi__1Crj5">
                {{-- <li class="Intelligence_laser-cabi-item__Auu_U">
                    <picture>
                        <source srcset="{{ asset('website/images/avatr12/img18.jpg') }}" media="(max-width: 768px)"><img
                            src="{{ asset('website/images/avatr12/img18.jpg') }}" alt=""
                            class=" w-100 Intelligence_item-img__UKMA8" loading="lazy">
                    </picture>
                    <div class="Intelligence_item-content__2p9qY">
                        <h4 class="Intelligence_item-title__1-g4u">Huawei Triple Laser</h4>
                        <p>Standardly equipped with 3 pieces of LiDAR hardware configuration, covering a 300-degree field of
                            view, achieving centimeter-level range accuracy, and bringing civil aviation-grade safety
                            experience.</p>
                    </div>
                </li> --}}
                <li class="Intelligence_laser-cabi-item__Auu_U">
                    <picture>
                        <source srcset="{{ asset('website/images/avatr12/img19.jpg') }}" media="(max-width: 768px)"><img
                            src="{{ asset('website/images/avatr12/img19.jpg') }}" alt=""
                            class=" w-100 Intelligence_item-img__UKMA8" loading="lazy">
                    </picture>
                    <div class="Intelligence_item-content__2p9qY">
                        <h4 class="Intelligence_item-title__1-g4u"> Intuitive AVATR Operating System Smart Cabin
                        </h4>
                        <p>The zero-layer design achieves minimal interaction, making it visible at a glance and reachable
                            with a touch. It has many frequently used and updated apps and a super desktop that is always
                            available. It supports intelligent voice and enables quick response to multiple commands,
                            seamless flow of cellphone touch transmission, and car and home interconnection that can be
                            controlled at any time.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="swiper-without-arrow  section-padding ">
        <h2 class="SectionTitle_title__39HkV mb-3 mb-md-0">Safety Goes One Step Further</h2>
        <h1>CAS 3.0 360° Collision Avoidance System
        </h1>
        <div class="container">
            <div class="swiper-container imgaewthtextbox">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <picture>
                                    <source srcset="{{ asset('website/images/avatr12/img20.jpg') }}"
                                        media="(max-width: 768px)"><img
                                        src="{{ asset('website/images/avatr12/img20.jpg') }}" alt=""
                                        class=" w-100 Intelligence_item-img__UKMA8" loading="lazy">
                                </picture>
                            </div>
                            <div class="text text-container">
                                <div>
                                    <h3>All-round AEB Capability</h3>
                                    <p class="mb-0">Forward Collision Warning (FCW)：In addition to stationary vehicles,
                                        pedestrians, and water horses, it also supports reverse and diagonal vehicles and
                                        bicycles to cross diagonally. It can sense the road environment and calmly respond
                                        to emergencies.</p>
                                    <p class="mb-0">Backward Collision Warning（BCW)：Not only can it identify pedestrians,
                                        two-wheelers and cars crossing behind, it can also identify children riding toy cars
                                        and effectively brake.</p>
                                    <p class="mb-0">Lateral Obstacle Collision Prevention(LOCP)：Not only can it avoid
                                        cones, curbs, pedestrians and vehicles, but it can also cross the dotted line to
                                        avoid situations where conditions permit. It can also deal with road construction,
                                        temporary traffic control and other scenarios.</p>
                                </div>
                                <ul class="SwiperPC03_figure-content__3X3yN">
                                    <li class="SwiperPC03_figure-item__1513V">
                                        <p class="SwiperPC03_figure-value__2nGfn">120<span>km/h</span></p>
                                        <p class="SwiperPC03_figure-name__2ERnE">Maximum Effective Braking Speed</p>
                                    </li>
                                    <li class="SwiperPC03_figure-item__1513V">
                                        <p class="SwiperPC03_figure-value__2nGfn">4-150<span>km/h</span></p>
                                        <p class="SwiperPC03_figure-name__2ERnE">Max Effective Range</p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="imagewithtextcontainer">
                            <div class="video-container">
                                <video class="w-100" autoplay loop muted playsinline>
                                    <source src="{{ asset('website/images/avatr12/video10.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text text-container">
                                <div>
                                    <h3>Industry's First Road Adaptive AEB System</h3>
                                    <p>On wet and slippery roads, rain and snow, it can brake in advance by sensing changes
                                        in road adhesion, helping drivers to accurately grasp the timing of braking.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination "></div>
            </div>
        </div>

    </section>


    <section class="section-one avatr12bg-section-one">
        <div class="container">
            <video id="scrollVideo" class=" w-100 mb-3" playsinline autoplay loop muted
                src="{{ asset('website/images/avatr12/video11.mp4') }}"></video>
            <div class="heading">
                <h1>FHD Electronic Exterior Mirrors
                </h1>
                <p>Through digital optical means to obtain double visual range, no matter rainstorms or dark night vision,
                    you can get the same zero delay image. The new electric folding function makes the driving experience
                    much safer.
                </p>
            </div>
        </div>

    </section>

    <section class="section-one avatr12bg-section-one">
        <div class="container">
            <video id="scrollVideo" class=" w-100 mb-3" playsinline autoplay loop muted
                src="{{ asset('website/images/avatr12/video12.mp4') }}"></video>
            <div class="heading">
                <h1>Eight Horizontal and Nine Vertical Cage Structure
                </h1>
                <p>The high-strength body structure obtains 720-degree collision prevention five-star safety, and can
                    realize super-submarine-grade body strength up to 1,800MPa.
                </p>
            </div>
        </div>

    </section>
@endsection
