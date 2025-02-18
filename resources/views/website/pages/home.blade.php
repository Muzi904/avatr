@extends('website.layouts.app')

@section('content')
    <section class="creative-fullpage--slider">
        <div class="banner-horizental">
            <div class="swiper swiper-container-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <picture>
                                <source srcset="{{ asset('website/images/home/hero1.jpg') }}" media="(max-width: 768px)"><img
                                    src="{{ asset('website/images/home/hero1.jpg') }}" alt=""
                                    class="HomeBanner_image-slider__9mcEU w-100" loading="lazy">
                            </picture>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/home/sub-hero1.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/home/sub-hero1.png') }}" alt=""
                                                class="w-100" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="{{ route('avatr11') }}">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Find more</div>

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
                                <source srcset="{{ asset('website/images/home/hero2.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/home/hero2.jpg') }}" alt=""
                                    class="HomeBanner_image-slider__9mcEU" loading="lazy">
                            </picture>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/home/sub-hero2.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/home/sub-hero2.png') }}" alt=""
                                                class="HomeBanner_logo-car__1Hxv8" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="{{ route('avatr12') }}">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Find more</div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <picture>
                                <source srcset="{{ asset('website/images/home/hero3.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/home/hero3.jpg') }}" alt=""
                                    class="HomeBanner_image-slider__9mcEU" loading="lazy">
                            </picture>
                            <div class="container">

                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/home/sub-hero3.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/home/sub-hero3.png') }}" alt=""
                                                class="HomeBanner_logo-car__1Hxv8" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="#0">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Find more</div>

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
                                <source srcset="{{ asset('website/images/home/hero4.jpg') }}" media="(max-width: 768px)">
                                <img src="{{ asset('website/images/home/hero4.jpg') }}" alt=""
                                    class="HomeBanner_image-slider__9mcEU" loading="lazy">
                            </picture>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/home/sub-hero4.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/home/sub-hero4.png') }}" alt=""
                                                class="HomeBanner_logo-car__1Hxv8" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="creative-btn--wrap">
                                        <a class="creative-slide--btn" role="button" href="#0">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Find more</div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="swiper-slide">
                        <div class="slider-inner" data-swiper-parallax="100">
                            <video muted="" id="scrollVideo" class=" w-100 mb-3" playsinline="" autoplay="" loop
                                muted src="{{ asset('website/images/home/video1.mp4') }}"
                                disablepictureinpicture=""></video>
                            <div class="container">
                                <div class="swiper-content" data-swiper-parallax="2000">
                                    <div class="title-area">
                                        <picture>
                                            <source srcset="{{ asset('website/images/home/sub-hero5.png') }}"
                                                media="(max-width: 768px)"><img
                                                src="{{ asset('website/images/home/sub-hero5.png') }}" alt=""
                                                class="HomeBanner_logo-car__1Hxv8" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="creative-btn--wrap" style="display:none;">
                                        <a class="creative-slide--btn" role="button" href="#0">
                                            <div class="creative-btn--label">
                                                <div class="creative-btn__text">Watch the Video</div>

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
                    <h5 class="slide-range three">03</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding vehicle-motors">
        <div class="main-container">
            <h1>Vehicle Models </h1>
            <div class="tabs">
                <div class="tab-buttons">
                    <button class="tab-btn-color active" data-target="tab1">AVATAR 11</button>
                    <button class="tab-btn-color" data-target="tab2">AVATAR 12</button>
                </div>
                <div class="tab-contents">
                    <div id="tab1" class="tab-panel-color active">
                        <div class="interiror-variants">
                            <div class="avatr11">
                                <div class="images">
                                    <figure id="varient1">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img1.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure id="varient2" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img2.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure id="varient3" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img3.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure id="varient4" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img4.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure id="varient5" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img5.jpg') }}"
                                            alt="">
                                    </figure>
                                    <figure id="varient6" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img6.jpg') }}"
                                            alt="">
                                    </figure>
                                    {{-- <figure id="varient7" class="d-none">
                                        <img class="w-100 my-50"
                                            src="{{ asset('website/images/home/color-variants/avartr11/img7.jpg') }}"
                                            alt="">
                                    </figure> --}}
                                </div>
                                <div class="colors">
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
                        <a href="{{ route('avatr11') }}" class="btn">Know more about AVATR 11</a>

                    </div>
                    <div id="tab2" class="tab-panel-color">
                        <div class="interiror-variants">
                            <div class="avatr12">
                                <div class="images">
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
                                <div class="colors">
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

                        <a href="{{ route('avatr12') }}" class="btn">Know more about AVATR 12</a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-section ">
        <div class="overlay-container d-lg-none">
            <div class="text">
                <h3>AVATR</h3>
                <h1>EMOTIONAL INTELLIGENCE, MOTION IN DELIGHT </h1>
                <a href="{{ route('about') }}">About us
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.8em" viewBox="0 0 13 26"
                        class="AboutEntry_more-icon__PNw5c">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                        </path>
                    </svg>
                </a>
            </div>


        </div>
        <div class="bg-image-section">
            <div class="tab-image active" data-image="tab1">
                <picture>
                    <source srcset="{{ asset('website/images/home/img1.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab2">
                <picture>
                    <source srcset="{{ asset('website/images/home/img2.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img2.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab3">
                <picture>
                    <source srcset="{{ asset('website/images/home/img3.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img3.jpg') }}" alt=""
                        class="w-100 AboutEntry_active__EgXyi">
                </picture>
            </div>
        </div>

        <div class="overlay-container">
            <div class="text d-none d-lg-block">
                <h3>AVATR</h3>
                <h1>EMOTIONAL INTELLIGENCE, MOTION IN DELIGHT </h1>
                <a href="{{ route('about') }}">About us
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.8em" viewBox="0 0 13 26"
                        class="AboutEntry_more-icon__PNw5c">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="tabs">
                <div class="tab-buttons">
                    <button class="tab-btn active" data-tab="tab3" data-tab="tab1" data-image="tab1">
                        History
                    </button>
                    <button class="tab-btn" data-tab="tab4" data-tab="tab1" data-image="tab2">
                        Mission
                    </button>
                    <button class="tab-btn" data-tab="tab5" data-tab="tab1" data-image="tab3">
                        Vision
                    </button>
                </div>
                <div class="tab-content">
                    <div id="tab3" class="tab-panel active">
                        <p>Elaf Motors, the sole distributor of Changan vehicles in Qatar, is expanding its footprint
                            in the electric vehicle (EV) industry with the launch of AVATR in the region. AVATR
                            Technology, a premium high-end smart electric vehicle (SEV) brand, is supported by industry
                            leaders CHANGAN Automobile, Huawei, and CATL.</p>
                    </div>
                    <div id="tab4" class="tab-panel">
                        <p> Offering unique and futuristic mobility experiences and lifestyles, AVATR is dedicated
                            to revolutionizing smart electric mobility. We strive to enhance the driving experience through
                            cutting-edge technology, intelligent solutions, and sustainable energy practices. </p>
                    </div>
                    <div id="tab5" class="tab-panel">
                        <p> By 2030, AVATR aims to become a globally leading high-end SEV brand, combining
                            futuristic design with warm and intelligent technology. Our vision is to empower individuals to
                            enhance and expand the life they pursue, creating a seamless and connected driving experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="design-center position-relative">
        <div class="next-section animated-section">
            <picture>
                <source srcset="
                {{ asset('website/images/home/img4.jpg') }}
              "
                    media="(max-width: 768px)" />
                <img src="  {{ asset('website/images/home/img4.jpg') }}" alt="" class="w-100"
                    loading="lazy" />
            </picture>
            <div class="design-overlay-text">
                <p>Munich, Germany</p>
                <p>AVATR global design center</p>
                <p>From the design frontier, with
                    global vision</p>
                <p><span class="find-more-btn">Find More</span><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="0.8em" viewBox="0 0 13 26" class="DesignCenter_more-icon__1n05g">
                        <path fill="#fff" fill-rule="evenodd"
                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                        </path>
                    </svg></p>
            </div>
        </div>
    </section>

    <section class="section-padding px-0">
        <div class="container">
            <div class="swiper animeslide swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide animeslide-slide">
                        <a href="#">
                            <picture>
                                <source srcset="//static.avatr.com/pc-website/images/home3.0/mobile/chn_01.jpg"
                                    media="(max-width: 768px)"><img
                                    src="//static.avatr.com/pc-website/images/home3.0/pc/chn_01.jpg" alt=""
                                    class="w-100" loading="lazy">
                            </picture>
                            <div class="container">
                                <h4 data-animate="bottom" class="animeslide-heading">
                                    Cutting edge technology
                                </h4>
                                <h1 data-animate="bottom" class="animeslide-heading">
                                    and converge infrastructure
                                </h1>

                                <p data-animate="bottom" class="animeslide-desc">
                                    Efficient and secure information
                                </p>
                                <a data-animate="bottom" class="find-more" href="#">Find more <svg
                                        xmlns="http://www.w3.org/2000/svg" width="0.8em" height="0.8em"
                                        viewBox="0 0 13 26" class="CHNEntry_more-icon__3Rp8v">
                                        <path fill="#fff" fill-rule="evenodd"
                                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                                        </path>
                                    </svg></a>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide animeslide-slide">
                        <a href="#">
                            <picture>
                                <source srcset="//static.avatr.com/pc-website/images/home3.0/mobile/chn_02.jpg"
                                    media="(max-width: 768px)"><img
                                    src="//static.avatr.com/pc-website/images/home3.0/pc/chn_02.jpg" alt=""
                                    class="w-100" loading="lazy">
                            </picture>
                            <div class="container">
                                <h4 data-animate="bottom" class="animeslide-heading">
                                    Cutting edge technology
                                </h4>
                                <h1 data-animate="bottom" class="animeslide-heading">
                                    and converge infrastructure
                                </h1>

                                <p data-animate="bottom" class="animeslide-desc">
                                    Efficient and secure information
                                </p>
                                <a data-animate="bottom" class="find-more" href="#">Find more <svg
                                        xmlns="http://www.w3.org/2000/svg" width="0.8em" height="0.8em"
                                        viewBox="0 0 13 26" class="CHNEntry_more-icon__3Rp8v">
                                        <path fill="#fff" fill-rule="evenodd"
                                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                                        </path>
                                    </svg></a>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide animeslide-slide">
                        <a href="#">
                            <picture>
                                <source srcset="//static.avatr.com/pc-website/images/home3.0/mobile/chn_03.jpg"
                                    media="(max-width: 768px)"><img
                                    src="//static.avatr.com/pc-website/images/home3.0/pc/chn_03.jpg" alt=""
                                    class="w-100" loading="lazy">
                            </picture>
                            <div class="container">
                                <h4 data-animate="bottom" class="animeslide-heading1">
                                    Cutting edge technology
                                </h4>
                                <h1 data-animate="bottom" class="animeslide-heading2">
                                    and converge infrastructure
                                </h1>

                                <p data-animate="bottom" class="animeslide-desc">
                                    Efficient and secure information
                                </p>
                                <a data-animate="bottom" class="find-more" href="#">Find more <svg
                                        xmlns="http://www.w3.org/2000/svg" width="0.8em" height="0.5em"
                                        viewBox="0 0 13 26" class="CHNEntry_more-icon__3Rp8v">
                                        <path fill="#fff" fill-rule="evenodd"
                                            d="M.198 2.044V.198l11.645 11.928a1.254 1.254 0 0 1 0 1.748L.198 25.802v-1.847c0-.846.328-1.658.914-2.258l7.878-8.07a.903.903 0 0 0 0-1.255L1.112 4.303a3.236 3.236 0 0 1-.914-2.259">
                                        </path>
                                    </svg></a>
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
        </div>

    </section>

    <section class="app-section"
        style="display:none;background-image: url({{ asset('website/images/home/bgm-pc.jpg') }})">
        <div class="container">
            <div class="column">
                <h1>Download the AVATR APP</h1>
                <p>
                    Find more details of AVATR 12<br>
                    New car purchase benefits<br>
                    Get in touch with other car owners<br>
                    AVATRON lifestyle boutique shop<br>
                    Enjoy your self-delighted life, only in AVATR APP </p>
                <div class="qrcode-section">
                    <img class="" src="{{ asset('website/images/home/app-qrcode.png') }}" alt="">
                    <div>
                        <h6>Scan the QR code to download the AVATR APP</h6>
                        <p>Version：4.2.6 <br>
                            Developer: AVATR Co., Ltd.</p>
                        <div class="d-flex align-items-center gap-2">
                            <a href="#">Privacy Agreement</a>
                            <a href="#">Application Permission</a>

                        </div>
                    </div>
                </div>
            </div>
            <img class="app-img" src="{{ asset('website/images/home/app-img.png') }}" alt="">
        </div>
    </section>
@endsection
