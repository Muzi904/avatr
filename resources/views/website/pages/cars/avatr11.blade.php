@extends('website.layouts.app')

@section('content')
    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <style>
        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #eee;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .models-designs-varients #main-slider {
            margin-bottom: 25px
        }

        .models-designs-varients {
            position: relative;
        }

        #thumbnail-slider .splide__list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 15px;
            transform: translateX(0) !important;
        }

        .models-designs-varients #main-slider .splide__list {
            /* height: 60vh !important; */
        }

        .models-designs-varients #main-slider .splide__list .splide__slide {
            /* height: 100% !important; */
        }

        .models-designs-varients #thumbnail-slider .splide__list .splide__slide,
        .models-designs-varients #main-slider .splide__list .splide__slide {
            /* margin: auto !important; */
            position: relative;
            width: 100% !important;

        }

        .models-designs-varients #thumbnail-slider .splide__list .splide__slide .body {
            position: relative;
            top: -30%;
        }

        .models-designs-varients #main-slider .splide__list .splide__slide .body {
            position: relative;
            top: -27%;
        }

        .models-designs-varients #thumbnail-slider .splide__list .splide__slide .wheel {
            position: absolute;
            bottom: -37%;
        }

        .models-designs-varients #main-slider .splide__list .splide__slide .wheel {
            position: absolute;
            bottom: -28%;
        }

        .models-designs-varients .right-section {
            display: flex;
            flex-direction: column;
            gap: 35px;
            position: sticky;
            top: 0;
        }

        .models-designs-varients .right-section img {
            width: 400px;
        }

        .models-designs-varients .right-section .accordion {
            display: flex;
            flex-direction: column;
            gap: 35px;
            margin: 0;
            width: 100%
        }

        .models-designs-varients .right-section .accordion-item {
            background-color: #fbfbfb;
            border: 0;
            margin: 0;
        }

        .models-designs-varients .right-section .accordion-item-headerAvatr11 {
            padding: 0.5rem 3rem 0.5rem 1rem;
            min-height: 3.5rem;
            line-height: 1.25rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
            font-family: 'AVATRFont-Regular';
        }

        .models-designs-varients .right-section .accordion-item-headerAvatr11::after {
            content: "\002B";
            font-size: 1.4rem;
            position: absolute;
            right: 1rem;
            transition: transform 0.3s ease-in-out;

        }

        .models-designs-varients .right-section .accordion-item-headerAvatr11.active::after {
            transform: rotate(135deg);
        }

        .models-designs-varients .right-section .accordion-item-body {
            max-height: 100%;
            overflow: hidden;
            transition: max-height 0.2s ease-out;

        }

        .models-designs-varients .right-section .accordion-item-body-content {
            padding: 1rem;
            border-top: 1px solid #7e7e7e;

        }

        .models-designs-varients .right-section .accordion-item-body-content .drivetrain-fields {
            display: flex;
            flex-wrap: wrap;
            gap: 2em
        }

        .models-designs-varients .right-section .accordion-item-body-content .drivetrain-fields button {
            border: 0;
            background: transparent;
            position: relative;
        }

        .models-designs-varients .right-section .accordion-item-body-content .drivetrain-fields button::before {
            content: '';
            position: absolute;
            left: 0;
            width: 0;
            height: 1px;
            background-color: #b4d719;
            bottom: 0;
            top: 23px;
            transition: width 0.3s ease;
        }

        .models-designs-varients .right-section .accordion-item-body-content .drivetrain-fields button.active::before {
            width: 100%
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors div {
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors p {
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn {
            border: 0;
            padding: 0;
            background-color: transparent;
            position: relative;
            border-radius: 50%;
            background-color: #fff;
            margin-bottom: 10px;
            padding: 5px;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .wheel-set.active .varient-btn,
        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .interior-variant.active .varient-btn,
        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .body-color.active .varient-btn {
            background-color: #e5e5e5;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn::before {
            content: '';
            transform: rotate(52deg) translateX(-50%);
            position: absolute;
            bottom: -11px;
            left: 46%;
            z-index: 0;
            opacity: 1;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 13px solid #e5e5e5;
            opacity: 0;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .wheel-set.active .varient-btn::before,
        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .interior-variant.active .varient-btn::before,
        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .body-color.active .varient-btn::before {
            opacity: 1;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn img {
            width: 40px;
            height: 40px;
            border-radius: 35px;
        }


        @media (min-width: 320px) and (max-width: 360px) {
            .models-designs-varients #thumbnail-slider .splide__list .splide__slide .wheel {
                bottom: 5%;
            }

            #thumbnail-slider-slide03 {
                height: 57px !important;
            }

            #thumbnail-slider-slide02 {
                height: 57px !important;
            }

            #thumbnail-slider-slide01 {
                height: 57px !important;
            }
        }

        @media (min-width: 361px) and (max-width: 385px) {
            .models-designs-varients #thumbnail-slider .splide__list .splide__slide .wheel {
                bottom: -16%;
            }

            #thumbnail-slider-slide03 {
                height: 59px !important;
            }

            #thumbnail-slider-slide02 {
                height: 59px !important;
            }

            #thumbnail-slider-slide01 {
                height: 59px !important;
            }
        }

        @media (min-width: 386px) and (max-width: 465px) {
            .models-designs-varients #thumbnail-slider .splide__list .splide__slide .wheel {
                bottom: -22%;
            }

            #thumbnail-slider-slide03 {
                height: 68px !important;
            }

            #thumbnail-slider-slide02 {
                height: 68px !important;
            }

            #thumbnail-slider-slide01 {
                height: 68px !important;
            }
        }

        #customise {
            scroll-margin-top: 100px;
            /* Same as header height */
            /* Alternative older property: */
            scroll-snap-margin-top: 100px;
            /* For Safari 11+ */
        }
    </style>
    <section class="hero-car-details">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/A11.jpg') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr11/a03.jpg') }}" alt="" class="w-100" >
        </picture>
        <div class="container-md">
            <div class="content hero-animated">
                <img src="{{ asset('website/images/avatr11/avatr11.svg') }}" alt="">
                <p>The Futuristic Electric Luxury SUV
                </p>
                <!-- <a  onclick="scrollToSection('customise')"  class="btn">Personalise</a> -->
                <a href="#customise" class="btn">Personalise</a>
            </div>
        </div>

    </section>

    <section class="section-padding section-two">
        <div class="container-md">
            <div class="row mb-3 mb-md-5">
                <div class="col-md-4 animate-text">
                    <h3>Ultramodern Design

                        Quintessential Luxury</h3>
                </div>
                <div class="col-md-8 animate-text">
                    <p class="mb-4">
                        The AVATR 11 ("One One") is a delightful testament to a futuristic design blended
                        seamlessly with human emotions and ultramodern technology. Gracefully flowing lines
                        and warm colours inspired by nature merged with innovative driving technology and our
                        cutting-edge AVATR OS, come together to create a car that can only be described as a
                        work of art.

                    </p>
                </div>
            </div>
            <div class="tabs-container scrolltabs animate-text">
                <!-- Tabs Content (Images) -->
                <figure>
                    <img class="w-100" src="{{ asset('website/images/avatr11/J19.png') }}" alt="">
                </figure>
                <!-- Tabs (Text) -->
                <div class="tabs justify-content-start">
                    <button class="tab active" data-text-target="#tab1-text">Space Inspired</button>
                    <button class="tab" data-text-target="#tab2-text">All Terrain Comfort</button>
                    <button class="tab" data-text-target="#tab3-text">Intelligent Driving</button>
                    <button class="tab" data-text-target="#tab4-text">Fast Charging</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab1-text" class="content content-text active">
                        With a space-inspired front design, stunning LED star-trail tail lights, and seats based on
                        astronauts’ zero-gravity posture, the AVATR 11 SUV sets a new benchmark in electric
                        vehicle design and smart mobility. Each detail reflects precision and elegance, creating a
                        vehicle that is both unbelievably futuristic and abundantly luxurious. The AVATR 11
                        combines cutting-edge technology with high-performance features, redefining the
                        future of electric vehicles and smart electric mobility for a new era of driving.
                    </div>
                    <div id="tab2-text" class="content content-text">
                        The AVATR 11's sophisticated chassis, which includes a front double wishbone and a rear
                        five-link suspension, provides outstanding comfort in urban and suburban situations.
                        The vehicle's DriveONE iTRACK technology allows for millimetre-level torque
                        adjustments, resulting in precise handling on even the most complex terrains. Advanced
                        engineering and rigorous tuning ensure an extraordinarily smooth ride. The AVATR 11 is
                        intended to excel at both urban mobility and off-road performance, making it an ideal
                        choice for electric vehicle enthusiasts.
                    </div>
                    <div id="tab3-text" class="content content-text">
                        The AVATR 11 boasts a plethora of sensors to provide superior obstacle identification in any light
                        conditions. The intelligent driving aid technology enables partial self-driving, resulting in a
                        smooth and hassle-free driving experience. Designed for smart mobility, the AVATR 11 incorporates
                        cutting-edge technology for a safer and more intuitive driving experience, making it an excellent
                        alternative for individuals looking for sophisticated electric vehicles.

                    </div>
                    <div id="tab4-text" class="content content-text">
                        The AVATR 11 SUV offers an impressive range of up to 680 km, combined with high performance.
                        Featuring built-in supercharging technology, the battery can reach 80% charge in just 35 minutes,
                        and 30% to 80% in only 25 minutes, ensuring quick recharges for extended journeys. With its
                        remarkable driving range, the AVATR 11 makes long-distance travel convenient and stress-free,
                        redefining the future of electric mobility and smart electric vehicles.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-one">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/img1.jpg') }}" media="(max-width: 768px)"><img class="w-100"
                src="{{ asset('website/images/avatr11/img1.jpg') }}" alt="" class="FirstTitle_section-bgm__2JYhD">
        </picture>
        <div class="overlay">
            <h2 class="animate-text">
                Luxury Redesigned: AVATR’s Next-Gen Electric Vehicle Excellence
            </h2>
            <p class="text-center animate-text">Created to the golden ratio, the AVATR 11 SUV represents perfection at its
                finest,
                combining futuristic
                design
                with cutting-edge electric vehicle technology. This smart electric vehicle is a testament to precision and
                elegance, offering a truly luxurious driving experience with advanced features and exceptional performance,
                setting a new standard in electric mobility and solidifying the AVATR 11 SUV as a leader in the world of
                electric vehicles.</p>
        </div>

    </section>
    <section id="customise"></section>


    <section class="models-designs-varients" id="carsection">
        <div class="container-md">
            <div class="grid-rows">
                <div class="column animate-text">
                    <div id="main-slider" class="splide" aria-label="Main Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img class="w-100 body" id="main-main-body" src="" alt="Slide 1">
                                    <img class="w-100 wheel" id="main-alloy" src="" alt="Slide 1">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body" id="front-body" src="" alt="Slide 2">
                                    <img class="w-100 wheel" id="front-alloy" src="" alt="Slide 2">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body" id="back-body" src="" alt="Slide 3">
                                    <img class="w-100 wheel" id="back-alloy" src="" alt="Slide 3">
                                </li>
                                <li class="splide__slide"><img class="w-100" id="interior-front" src=""
                                        alt="Slide 4"></li>
                                <li class="splide__slide"><img class="w-100" id="interior-side" src=""
                                        alt="Slide 5"></li>
                                <li class="splide__slide"><img class="w-100" id="interior-back" src=""
                                        alt="Slide 6"></li>
                            </ul>
                        </div>
                    </div>

                    <div id="thumbnail-slider" class="splide" aria-label="Thumbnail Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img class="w-100 body" id="main-thumb-body" src="" alt="thumbnail 1">
                                    <img class="w-100 wheel" id="main-thumb-alloy" src="" alt="thumbnail 1">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body" id="front-thumb-body" src="" alt="Thumbnail 2">
                                    <img class="w-100 wheel" id="front-thumb-alloy" src="" alt="Thumbnail 2">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body" id="back-thumb-body" src="" alt="Thumbnail 3">
                                    <img class="w-100 wheel" id="back-thumb-alloy" src="" alt="Thumbnail 3">
                                </li>
                                <li class="splide__slide"><img class="w-100" id="interior-thumb-front" src=""
                                        alt="Thumbnail 4"></li>
                                <li class="splide__slide"><img class="w-100" id="interior-thumb-side" src=""
                                        alt="Thumbnail 4"></li>
                                <li class="splide__slide"><img class="w-100" id="interior-thumb-back" src=""
                                        alt="Thumbnail 4"></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                    <p class="mt-3">The images shown are for illustration purposes only and may not accurately represent
                        the product. GCC
                        configuration may vary, please check with your dealer.</p>
                    </p>
                </div>

                <div class="column animate-text">
                    <div class="right-section">
                        <img src="{{ asset('website/images/avatr11.svg') }}" alt="">
                        <p>Start your configuration journey with an inspired specification and make your smart electric
                            vehicle
                            experience truly your own. Customize every detail of your AVATR 11 to reflect your style and
                            preferences, and embrace the future of electric mobility with cutting-edge features and
                            exceptional
                            performance.</p>

                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-headerAvatr11 active">
                                    Trim
                                </div><!-- /.accordion-item-headerAvatr11 -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="drivetrain-fields">
                                            <button data-trim="trim1">Luxury – RWD</button>
                                            <button data-trim="trim2">Performance – AWD</button>
                                            <button data-trim="trim3">Premium – AWD</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-headerAvatr11 active">
                                    Exterior
                                </div><!-- /.accordion-item-headerAvatr11 -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div class="body-color active" data-color="glossy-white">
                                                <button class="varient-btn ">
                                                    <img src="{{ asset('website/images/home/color-variants/avatr12/color-img2.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Glossy White</p>
                                                </div>
                                            </div>
                                            <div class="body-color" data-color="glossy-grey">
                                                <button class="varient-btn ">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img4.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Glossy Grey</p>
                                                </div>
                                            </div>
                                            <div class="body-color" data-color="glossy-black">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img5.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Glossy Black</p>
                                                </div>
                                            </div>
                                            <div class="body-color" data-color="aqua">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img2.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient13-text" class="text-center">
                                                    <p>Aqua</p>
                                                </div>
                                            </div>
                                            <div class="body-color" data-color="liquid-caramel">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img1.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient14-text" class="text-center">
                                                    <p>Liquid Caramel</p>
                                                </div>
                                            </div>

                                            <div class="body-color" data-color="matte-white" id="mattewhite">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img3.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient15-text" class="text-center">
                                                    <p>Matte White</p>
                                                </div>
                                            </div>
                                            <div class="body-color" id="mattegrey" data-color="matte-grey">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img6.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient16-text" class="text-center">
                                                    <p>Matte Grey</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-headerAvatr11 active">
                                    Interior
                                </div><!-- /.accordion-item-headerAvatr11 -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div class="interior-variant active" data-interior="nappa-red">
                                                <button class="varient-btn ">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Nappa Red</p>
                                                </div>
                                            </div>
                                            <div class="interior-variant" data-interior="misty-purple">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Misty Purple</p>
                                                </div>
                                            </div>
                                            <div class="interior-variant" data-interior="nappa-black">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Nappa Black</p>
                                                </div>
                                            </div>
                                            <div class="interior-variant" data-interior="nappa-grey">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-4.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient13-text" class="text-center">
                                                    <p>Nappa Grey</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-headerAvatr11 active">
                                    Wheel
                                </div><!-- /.accordion-item-headerAvatr11 -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div class="wheel-set active" data-alloy="set-A">
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Wheel Set A</p>
                                                </div>
                                            </div>
                                            <div class="wheel-set" data-alloy="set-B">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Wheel Set B</p>
                                                </div>
                                            </div>
                                            <div class="wheel-set" data-alloy="set-C">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Wheel Set C</p>
                                                </div>
                                            </div>
                                            <div class="wheel-set" data-alloy="set-D" style="display: none;">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-4.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient13-text" class="text-center">
                                                    <p>Wheel Set D</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @endsection --}}


    <!-- carcode -->

    <section class="section-two-avatr11">
        <figure>
            <img class="" src="{{ asset('website/images/avatr11/img2.webp') }}" alt="">
        </figure>
        <div class="container">
            <div class="column ">
                <div class="d-flex align-items-center gap-2 text-white mb-4">
                    <img src="{{ asset('website/images/avatr11/avatr11-black.svg') }}" alt="">
                    SPECS
                </div>

                <ul class="accordion">
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Overall Specs</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Drive Type</span> <br>
                                        Full Electric
                                    </p>
                                    <p class="col-md-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                    <p class="col-md-6"><span>Power hp</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Drivetrain</span> <br>
                                        All Wheel Drive
                                    </p>
                                    <p class="col-md-6"><span>Battery Capacity in kWh</span> <br>
                                        116
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Dimensions</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>L x W x H in mm</span> <br>
                                        4880 x 1970 x 1601
                                    </p>
                                    <p class="col-md-6"><span>Wheelbase in mm</span> <br>
                                        2975
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Vehicle Weight in kg</span> <br>
                                        2425
                                    </p>
                                    {{-- <p class="col-md-6"><span>Number of Seats</span> <br>
                                        5
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Powertrain</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                    <p class="col-md-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Maximum Output Power in kW</span> <br>
                                        425
                                    </p>
                                    <p class="col-md-6"><span>Maximum Output Torque in Nm</span> <br>
                                        650
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Battery</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Battery Type</span> <br>
                                        NCM Battery
                                    </p>
                                    <p class="col-md-6"><span>NEDC E-Range in km</span> <br>
                                        625
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Battery Capacity in kWh</span> <br>
                                        116
                                    </p>
                                    <p class="col-md-6"><span>0-80% with a Super Charger</span> <br>
                                        35 minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Safety</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Anti-Lock Brake System</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Electronic Stability Program</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Traction Control System</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Tire Pressure Monitoring System</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Hill Hold and Descent Control</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Front Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Front Side Airbag</span> <br>
                                        2
                                    </p>
                                    <p class="col-md-6"><span>Front and Rear Integrated Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Rear Electronic Child Safety Lock</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Anti-Theft Alarm System</span> <br>
                                        Included
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

                <a href="{{ asset('website/spec/Avatr11-Specs.pdf') }}" class="btn animate-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <g fill="currentColor" fill-rule="evenodd">
                            <path
                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path
                                d="M12 2v6.5a1.5 1.5 0 0 0 1.5 1.5H20v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 9a1 1 0 0 0-1 1v2.708l-.414-.414a1 1 0 0 0-1.414 1.414l2.12 2.122a1 1 0 0 0 1.415 0l2.121-2.122a1 1 0 1 0-1.414-1.414l-.414.414V12a1 1 0 0 0-1-1m2-8.957a2 2 0 0 1 1 .543L19.414 7a2 2 0 0 1 .543 1H14Z" />
                        </g>
                    </svg>
                    Download Specs
                </a>

            </div>
        </div>
    </section>


    <section class="section-one-avatr11 section-padding">
        <div class="container-md">
            <div class="row">
                <div class="col-md-12 position-relative animate-text video-container">
                    <video id="video" class="w-100" autoplay loop playsinline muted>
                        <source src="{{ asset('website/images/avatr11/avatr-video-4.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    {{-- <div id="play_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48">
                            <defs>
                                <mask id="ipSPlay0">
                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                        <path fill="#fff" stroke="#fff"
                                            d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z" />
                                        <path fill="#181818" stroke="#181818"
                                            d="M20 24v-6.928l6 3.464L32 24l-6 3.464l-6 3.464z" />
                                    </g>
                                </mask>
                            </defs>
                            <path fill="#fff" d="M0 0h48v48H0z" mask="url(#ipSPlay0)" />
                        </svg>
                    </div> --}}
                </div>
            </div>
        </div>


    </section>

    <section>
        <div class="section-grid">
            <div class="a">
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img1.jpg') }}" alt="">
                <div class="content animate-text">
                    <h6>Experience Zero Gravity Seating in AVATR 11</h6>
                    <p>Ultimate Comfort for Long Journeys: Inspired by Astronaut Posture in AVATR Electric SUV</p>
                </div>
            </div>
            <div class="b">
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img2.jpg') }}" alt="">
                <div class="content animate-text">
                    <h6>Superb Sound in AVATR 11</h6>
                    <p>25 Speakers with Meridian Excellence for an Unmatched Audio Experience</p>
                </div>
            </div>
            <div class="c">
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img3.jpg') }}" alt="">
                <div class="content animate-text">
                    <h6>Ventilated and AC-Cooled Seats in AVATR 11
                    </h6>
                    <p>Stay Cool and Comfortable on Every Drive
                    </p>
                </div>
            </div>
        </div>
    </section>







    <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader-wrapper");
            loader.style.opacity = "0";
            loader.style.pointerEvents = "none";
            setTimeout(() => loader.remove(), 500);
        });
    </script>
@endsection


@push('scripts')
    @include('website.pages.script.11')
@endpush
