@extends('website.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<style>
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
        bottom: -39%;
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

    .models-designs-varients .right-section .accordion-item-header-Avatr12 {
        padding: 0.5rem 3rem 0.5rem 1rem;
        min-height: 3.5rem;
        line-height: 1.25rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
        font-family: 'AVATRFont-Regular';
        color: var(--text-color)
    }

    .models-designs-varients .right-section .accordion-item-header-Avatr12::after {
        content: "\002B";
        font-size: 1.4rem;
        position: absolute;
        right: 1rem;
        transition: transform 0.3s ease-in-out;

    }

    .models-designs-varients .right-section .accordion-item-header-Avatr12.active::after {
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
</style>


    <section class="hero-car-details">
        <picture>
            <source srcset="{{ asset('website/images/avatr12/avatar12-mob1.png') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr12/avatr12-1.png') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="container-md">
            <div class="content">
                <img class="h-100" src="{{ asset('website/images/avatr12/avatr12.svg') }}" alt="">
                <p class="text-white">The futuristic luxury gran coupe
                </p>
                <a  onclick="scrollToSection('customise')"  class="btn">Personalise</a>
            </div>
        </div>

    </section>

    <section class="section-padding section-two">
        <div class="container-md">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>A Gran Coupe
                        Like No Other </h3>
                </div>
                <div class="col-md-8">
                    <p class="mb-4">
                        The AVATR 12 (One Two) is unlike any other luxury Gran Coupe you have ever seen.
                        Graceful flowing lines along the body merge to create what can only be described as Art.
                        The interior embodies the true meaning of luxury where intelligent, cutting-edge
                        technology meets absolute comfort. A driving experience like no other awaits anyone
                        who enters the One Two.

                    </p>
                </div>
            </div>
            <div class="tabs-container scrolltabs">
                <!-- Tabs Content (Images) -->
                <figure>
                    <img class="w-100" src="{{ asset('website/images/avatr12/home_int_1.jpg') }}" alt="">
                </figure>
                <!-- Tabs (Text) -->
                <div class="tabs justify-content-start">
                    <button class="tab active" data-text-target="#tab1-text">Unmatched Grace </button>
                    <button class="tab" data-text-target="#tab2-text">Unmatched Comfort </button>
                    <button class="tab" data-text-target="#tab3-text">Unmatched Safety </button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab1-text" class="content content-text active">
                        Graceful yet futuristic, the 12 features the AVATR family butterfly wing design language,
                        giving a whole new meaning to the word aesthetics. Striking E-shaped LED curvature
                        headlights, an active air intake grill and an ultra-low drag coefficient of 0.21 cd make the
                        12 a whirlwind on the road. Experience absolute performance and unmatched grace
                        with the AVATR 12 Gran Coupe.
                    </div>
                    <div id="tab2-text" class="content content-text">
                        A meticulously designed cabin perfectly balances your need for cutting-edge technology
                        with the creature comforts that you deserve. The AVATR 12 does away with the clutter
                        of a traditional dashboard and replaces it with a clean, minimalist and luxurious look
                        that leaves you with the feeling of expansive space. Powered by the robust yet graceful
                        AVATR OS, the 12 offers you ultimate control and interaction designed to pamper you.

                    </div>
                    <div id="tab3-text" class="content content-text">
                        You are secure; from the moment you enter the 12 to the moment you step out, your safety is
                        paramount. Multiple airbags, Millimetre Wave Radar 5, Remote Parking Assist, and many other
                        cutting-edge safety systems, all work together to create a net of safety like no other.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-one">
        <picture>
            <source srcset="{{ asset('website/images/avatr12/avatr12-img2.webp') }}" media="(max-width: 768px)"><img
                class="w-100" src="{{ asset('website/images/avatr12/avatr12-img2.webp') }}" alt=""
                class="FirstTitle_section-bgm__2JYhD" loading="lazy">
        </picture>
        <div class="overlay">
            <h2>
                Luxury Redesigned
            </h2>
            <p class="text-center">Bold, vibrant, and modern, the AVATR 12 SUV exudes elegance from every angle, offering a
                perfect blend of luxury and smart electric vehicle technology. With its futuristic design and
                high-performance features, the AVATR 12 Gran Coupe redefines the future of electric mobility.
            </p>
        </div>

    </section>
    <section  id="customise"></section>


<section class="models-designs-varients" id="carsection">
    <div class="container-md">
        <div class="grid-rows">
            <div class="column">
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
                <p class="mt-3">The images shown are for illustration purposes only and may not accurately represent
                    the product. GCC
                    configuration may vary, please check with your dealer.</p>
            </div>

            <div class="column">
                <div class="right-section">
                    <img src="{{ asset('website/images/avatr12/avatr12-black.svg') }}" alt="">
                    <p>Start your configuration journey with an inspired specification and make your smart electric
                        vehicle experience truly your own. Customise every detail of your AVATR 12 to reflect your style
                        and preferences, and embrace the future of electric mobility with cutting-edge features and
                        exceptional performance.</p>

                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-item-header-Avatr12 active">
                                Trim
                            </div><!-- /.accordion-item-header-Avatr12 -->
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
                            <div class="accordion-item-header-Avatr12 active">
                                Exterior
                            </div><!-- /.accordion-item-header-Avatr12 -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    <div class="interior-colors">
                                        <div class="body-color active" data-color="glossy-black">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img5.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient11-text" class="text-center">
                                                <p>Glossy Black</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="glossy-grey">
                                            <button class="varient-btn ">
                                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img4.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient10-text" class="text-center">
                                                <p>Glossy Grey</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="glossy-white">
                                            <button class="varient-btn ">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img2.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient10-text" class="text-center">
                                                <p>Glossy White</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="misty-purple">
                                            <button class="varient-btn ">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img1.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient10-text" class="text-center">
                                                <p>Misty Purple</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="slate-blue">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img5.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient12-text" class="text-center">
                                                <p>Slate Blue</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="liquid-caramel">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img6.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient13-text" class="text-center">
                                                <p>Liquid Caramel</p>
                                            </div>
                                        </div>

                                        <div class="body-color" data-color="misty-purple">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/color-img1.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient14-text" class="text-center">
                                                <p>Matte Purple</p>
                                            </div>
                                        </div>
                                        <!--<div class="body-color" data-color="matte-grey">-->
                                        <!--    <button class="varient-btn">-->
                                        <!--        <img src="{{ asset('website/images/home/color-variants/avatr12/color-img3.png') }}"-->
                                        <!--            alt="">-->
                                        <!--    </button>-->
                                        <!--    <div id="varient15-text" class="text-center">-->
                                        <!--        <p>Matte Grey</p>-->
                                        <!--    </div>-->
                                        <!--</div>-->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-item-header-Avatr12 active">
                                Interior
                            </div><!-- /.accordion-item-header-Avatr12 -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    <div class="interior-colors">
                                        <div class="interior-variant active" data-interior="nappa-black">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/interior/color-img1.svg') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient12-text" class="text-center">
                                                <p>Nappa Black</p>
                                            </div>
                                        </div>
                                        <div class="interior-variant " data-interior="cotton-white">
                                            <button class="varient-btn ">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/interior/color-img2.svg') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient10-text" class="text-center">
                                                <p>Misty Purple / Cotton White </p>
                                            </div>
                                        </div>
                                        <div class="interior-variant" data-interior="slate-blue">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avatr12/interior/color-img3.svg') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient11-text" class="text-center">
                                                <p>Slate Blue</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-item-header-Avatr12 active">
                                Wheel
                            </div><!-- /.accordion-item-header-Avatr12 -->
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
                                        <div class="wheel-set" data-alloy="set-D">
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

    <!-- car code -->
    <section class="section-two-avatr11">
        <figure>
            <img class="" src="{{ asset('website/images/avatr11/img2.webp') }}" alt="">
        </figure>
        <div class="container">
            <div class="column">
                <div class="d-flex align-items-center gap-2 text-white mb-4">
                    <img src="{{ asset('website/images/avatr12/avatr12.svg') }}" alt="">
                    SPECS
                </div>

                <ul class="accordion">
                    <li class="accordion-item">
                        <h3 class="accordion-thumb">Quick Facts</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-6"><span>Drive Type</span> <br>
                                        Full Electric
                                    </p>
                                    <p class="col-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                    <p class="col-6"><span>Power in hp</span> <br>
                                        308 Rear / 261 Front
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-6"><span>Drivetrain</span> <br>
                                        All Wheel Drive
                                    </p>
                                    <p class="col-6"><span>Battery Capacity in kWh</span> <br>
                                        94.53
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="accordion-item">
                        <h3 class="accordion-thumb">Dimensions</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-6"><span>L x W x H in mm</span> <br>
                                        5020 x 1999 x 1450
                                    </p>
                                    <p class="col-6"><span>Wheelbase in mm</span> <br>
                                        3020
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Vehicle Weight in kg</span> <br>
                                        2300
                                    </p>
                                    <p class="col-6"><span>Number of Seats</span> <br>
                                        5
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <h3 class="accordion-thumb">Powertrain</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                    <p class="col-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Maximum Output Power in kW</span> <br>
                                        425
                                    </p>
                                    <p class="col-6"><span>Maximum Output Torque in Nm</span> <br>
                                        650
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h3 class="accordion-thumb">Battery</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-6"><span>Battery Type</span> <br>
                                        NCM Battery
                                    </p>
                                    <p class="col-6"><span>NEDC E-Range in km</span> <br>
                                        650
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Battery Capacity in kWh</span> <br>
                                        94.53
                                    </p>
                                    <p class="col-6"><span>0-80% with a Super Charger</span> <br>
                                        30 mins
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h3 class="accordion-thumb">Safety</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-6"><span>Anti-Lock Brake System (ABS)</span> <br>
                                        Included
                                    </p>
                                    <p class="col-6"><span>Electronic Stability Program (ESP)</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Traction Control System (TCS)</span> <br>
                                        Included
                                    </p>
                                    <p class="col-6"><span>Tire Pressure Monitoring System (TPMS)</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-6"><span>Front Airbag</span> <br>
                                        2
                                    </p>
                                    <p class="col-6"><span>Front Side Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-6"><span>Front Side Airbag</span> <br>
                                        2
                                    </p>
                                    <p class="col-6"><span>Front and Rear Integrated Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-6"><span>Rear Electronic Child Safety Lock</span> <br>
                                        Included
                                    </p>
                                    <p class="col-6"><span>Anti-Theft Alarm System</span> <br>
                                        Included
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

                <a href="{{ asset('website/spec/Avatr12-Specs.pdf') }}" class="btn">
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
                <div class="col-md-12 position-relative video-container">
                    <video id="video" class="w-100" autoplay loop playsinline muted>
                        <source src="{{ asset('website/images/avatr12/video-avatr-12.mp4') }}" type="video/mp4">
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
                <img class="w-100" src="{{ asset('website/images/avatr12/avatr12-img3.webp') }}" alt="">
                <div class="content">
                    <h6>Limitless Horizon</h6>
                    <p>Intelligent Windshield and Panoramic Sunroof ensure privacy or visibility</p>
                </div>
            </div>
            <div class="b">
                <img class="w-100" src="{{ asset('website/images/avatr12/avatr12-img4.webp') }}" alt="">
                <div class="content">
                    <h6>Pure Audio Effect</h6>
                    <p>
                        25 Speakers crafted and tuned to perfection</p>
                </div>
            </div>
            <div class="c">
                <img class="w-100" src="{{ asset('website/images/avatr12/avatr12-img5.webp') }}" alt="">
                <div class="content">
                    <h6>Wireless Charging
                    </h6>
                    <p>Double 50W chargers to keep you connected always
                    </p>
                </div>
            </div>
        </div>
    </section>

<script>
function scrollToSection(id) {
    const headerOffset = 100; // Adjust this value based on your header height
    const element = document.getElementById(id);
    if (element) {
        const elementPosition = element.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
}

</script>


<script>
window.addEventListener('load', function () {
    setTimeout(function () {
        const params = new URLSearchParams(window.location.search);
        const sectionId = params.get('scroll');

        if (sectionId) {
            const headerOffset = 100; // adjust based on your layout
            const element = document.getElementById(sectionId);

            if (element) {
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Clean URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        }
    }, 300); // 🔁 Adjust delay here (300ms usually works)
});
</script>




@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#main-slider', {
                type: 'fade',
                heightRatio: 0.5,
                pagination: false,
                arrows: false,
                cover: true,
            });

            var thumbnails = new Splide('#thumbnail-slider', {
                rewind: true,
                // fixedWidth: '25%',
                // fixedHeight: 95,
                arrows: false,
                heightRatio: 0.15,
                fixedWidth: '100%',
                isNavigation: true,
                gap: 7,
                focus: 'center',
                pagination: false,
                cover: true,
                perPage: 3,
                dragMinThreshold: {
                    mouse: 4,
                    touch: 10,
                },
                breakpoints: {
                    640: {
                        fixedWidth: '25%',
                        fixedHeight: 50,
                        perPage: 4,
                    },
                },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
    </script>

    <script>
        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header-Avatr12");

        accordionItemHeaders.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }

            });
        });
        // const accordionItemHeaders = document.querySelectorAll(".accordion-item-header-Avatr12");

        // accordionItemHeaders.forEach(accordionItemHeader => {
        //     accordionItemHeader.addEventListener("click", event => {

        //         accordionItemHeader.classList.toggle("active");
        //         const accordionItemBody = accordionItemHeader.nextElementSibling;
        //         if (accordionItemHeader.classList.contains("active")) {
        //             accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        //         } else {
        //             accordionItemBody.style.maxHeight = 0;
        //         }

        //     });
        // });
    </script>

    <script>
        let colors = {
            'glossy-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-grey/car3.webp') }}"
            ],
            'glossy-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-black/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-black/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-black/car3.webp') }}"
            ],
            'glossy-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-white/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-white/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/glossy-white/car3.webp') }}"
            ],
            'misty-purple': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/misty-purple/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/misty-purple/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/misty-purple/car3.webp') }}"
            ],
            'slate-blue': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/slate-blue/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/slate-blue/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/slate-blue/car3.webp') }}"
            ],
            'liquid-caramel': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/liquid-caramel/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/liquid-caramel/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/liquid-caramel/car3.webp') }}"
            ],
            'moss-green': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/moss-green/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/moss-green/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/moss-green/car3.webp') }}"
            ],
            'matte-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/matte-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/matte-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/exterior/matte-grey/car3.webp') }}"
            ],
        };

        let interiors = {
            'nappa-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/black/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/black/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/black/interior3.webp') }}",
            ],
            'cotton-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/purple/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/purple/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/purple/interior3.webp') }}",
            ],
            'slate-blue': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/blue/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/blue/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/interior/blue/interior3.webp') }}",
            ],
        };

        let alloys = {
            'set-A': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-A/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-A/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-A/wheel3.webp') }}"
            ],
            'set-B': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-B/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-B/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-B/wheel3.webp') }}"
            ],
            'set-C': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-C/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-C/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-C/wheel3.webp') }}"
            ],
            'set-D': [
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-D/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-D/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr12/wheels/set-D/wheel3.webp') }}"
            ],
        };


        document.querySelectorAll("[data-trim]").forEach(button => {
            button.addEventListener("click", function() {
                document.querySelectorAll("[data-trim]").forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const alloyElement = document.querySelector('[data-alloy="set-D"]');
                const alloyElement1 = document.querySelector('[data-alloy="set-A"]');
                const alloyElement2 = document.querySelector('[data-alloy="set-B"]');
                const alloyElement3 = document.querySelector('[data-alloy="set-C"]');
                if (this.getAttribute('data-trim') === 'trim1') {
                    alloyElement.style.display = 'none';
                    alloyElement1.style.display = 'block';
                    alloyElement2.style.display = 'block';
                    alloyElement3.style.display = 'none';
                } else {
                    alloyElement.style.display = 'block';
                    alloyElement3.style.display = 'block';
                    alloyElement1.style.display = 'none';
                    alloyElement2.style.display = 'none';

                }
            });
        });

        document.querySelectorAll("[data-color]").forEach(element => {
            element.addEventListener("click", function() {
                const color = this.getAttribute("data-color");
                exteriorChange(color);
                document.querySelectorAll("[data-color]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        function exteriorChange(color) {
            $("#thumbnail-slider-list li, #main-slider-list li").removeClass("is-active");
            $('#main-slider-slide01, #thumbnail-slider-slide01').addClass('is-active');
            $('#main-slider-slide02, #thumbnail-slider-slide02').addClass('is-next');
            $('#main-slider-slide04, #thumbnail-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-list').css('transform', 'translateX(0px)');

            var mainBody = colors[color][0];
            var frontBody = colors[color][1];
            var backBody = colors[color][2];

            // main  image
            $('#main-main-body').attr('src', mainBody);
            $('#main-main-body').css('display', 'block');
            $('#main-thumb-body').attr('src', mainBody);
            $('#main-thumb-body').css('display', 'block');

            // frontside image
            $('#front-body').attr('src', frontBody);
            $('#front-body').css('display', 'block');
            $('#front-thumb-body').attr('src', frontBody);
            $('#front-thumb-body').css('display', 'block');

            // backside image
            $('#back-body').attr('src', backBody);
            $('#back-body').css('display', 'block');
            $('#back-thumb-body').attr('src', backBody);
            $('#back-thumb-body').css('display', 'block');
        }

        document.querySelectorAll("[data-interior]").forEach(element => {
            element.addEventListener("click", function() {
                const color = this.getAttribute("data-interior");
                interiorChange(color);
                document.querySelectorAll("[data-interior]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });

        function interiorChange(color) {
            $("#main-slider").find("li").removeClass("is-active");
            $("#main-slider").find("li").removeClass("is-visible");
            $("#main-slider").find("li").removeClass("is-prev");
            $("#main-slider").find("li").removeClass("is-next");

            $("#thumbnail-slider-list").find("li").removeClass("is-active");
            $("#thumbnail-slider-list").find("li").removeClass("is-prev");
            $("#thumbnail-slider-list").find("li").removeClass("is-next");
            $('#thumbnail-slider-list').css('transform', 'translateX(-185.625px)');

            var front = interiors[color][0];
            var side = interiors[color][1];
            var back = interiors[color][2];

            $('#interior-front').attr('src', front);
            $('#interior-front').css('display', 'block');
            // thumb
            $('#interior-thumb-front').attr('src', front);
            $('#interior-thumb-front').css('display', 'block');

            $('#interior-side').attr('src', side);
            $('#interior-side').css('display', 'block');
            // thumb
            $('#interior-thumb-side').attr('src', side);
            $('#interior-thumb-side').css('display', 'block');

            $('#interior-back').attr('src', back);
            $('#interior-back').css('display', 'block');
            // thumb
            $('#interior-thumb-back').attr('src', back);
            $('#interior-thumb-back').css('display', 'block');

            // slider 
            $('#main-slider-slide04').addClass('is-active');
            $('#main-slider-slide04').addClass('is-visible');

            $('#thumbnail-slider-slide03').addClass('is-visible');
            $('#thumbnail-slider-slide04').addClass('is-active');
            $('#thumbnail-slider-slide04').addClass('is-visible');
            $('#thumbnail-slider-slide05').addClass('is-visible');
        }


        document.querySelectorAll("[data-alloy]").forEach(element => {
            element.addEventListener("click", function() {
                const type = this.getAttribute("data-alloy");
                alloyChange(type);
                document.querySelectorAll("[data-alloy]").forEach(btn => {
                    btn.classList.remove("active");
                });
                this.classList.add("active");
            });
        });


        function alloyChange(type) {
            $("#main-slider").find("li").removeClass("is-active");
            $("#thumbnail-slider-list").find("li").removeClass("is-active");
            $('#main-slider-slide01').addClass('is-active');
            $('#thumbnail-slider-slide01').addClass('is-active');
            $('#main-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-slide04').removeClass('is-active');
            $('#thumbnail-slider-list').css('transform', 'translateX(0)');

            // console.log(alloys[type][0]);
            var mainAlloy = alloys[type][0];
            var frontAlloy = alloys[type][1];
            var backAlloy = alloys[type][2];

            $('#main-alloy').attr('src', mainAlloy);
            // thumb
            $('#main-thumb-alloy').attr('src', mainAlloy);

            $('#front-alloy').attr('src', frontAlloy);
            // thumb
            $('#front-thumb-alloy').attr('src', frontAlloy);

            $('#back-alloy').attr('src', backAlloy);
            // thumb
            $('#back-thumb-alloy').attr('src', backAlloy);

        }

        document.addEventListener('DOMContentLoaded', function() {
            exteriorChange('glossy-black');
            interiorChange('nappa-black');
            alloyChange('set-A');
        });
    </script>
@endpush


@endsection

