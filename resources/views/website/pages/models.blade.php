@extends('website.layouts2.main-app')

@section('content')
    <style>
        .models-designs-varients #main-slider {
            margin-bottom: 25px
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

        }

        .models-designs-varients #thumbnail-slider .splide__list .splide__slide .wheel {
            position: absolute;
            bottom: -13%;
        }

        .models-designs-varients #main-slider .splide__list .splide__slide .wheel {
            position: absolute;
            bottom: -28%;
        }

        .models-designs-varients .right-section {
            display: flex;
            flex-direction: column;
            gap: 35px;
            /* position: sticky;
                                                                                                                                                                                                                                                                                                                                                                                top: 0; */
        }

        .models-designs-varients .right-section img {
            width: 400px;
        }

        .models-designs-varients .right-section .accordion {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .models-designs-varients .right-section .accordion-item {
            background-color: #fbfbfb;
            border: 0;
        }

        .models-designs-varients .right-section .accordion-item-header {
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

        .models-designs-varients .right-section .accordion-item-header::after {
            content: "\002B";
            font-size: 1.4rem;
            position: absolute;
            right: 1rem;
            transition: transform 0.3s ease-in-out;

        }

        .models-designs-varients .right-section .accordion-item-header.active::after {
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
            display: flex;
            flex-wrap: wrap;
            /* gap: 2rem; */
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors div {
            text-align: center;
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors p {
            margin-bottom: 15px
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn {
            border: 0;
            padding: 0;
            background-color: transparent;
            position: relative;
            border: 5px solid transparent;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn.active {
            border: 5px solid #e5e5e5;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn::before {
            content: '';
            transform: rotate(52deg) translateX(-50%);
            position: absolute;
            bottom: -15px;
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

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn.active::before {
            opacity: 1;
        }

        .models-designs-varients .right-section .accordion-item-body-content .interior-colors .varient-btn img {
            width: 35px;
            height: 35px;
            border-radius: 35px;
            object-fit: none
        }
    </style>

    <section class="models-designs-varients">
        <div class="container">
            <div class="grid-rows">
                <div class="column">
                    <div id="main-slider" class="splide" aria-label="Main Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car1.webp') }}"
                                        alt="Slide 1">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel1.webp') }}"
                                        alt="Slide 1">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car2.webp') }}"
                                        alt="Slide 2">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel2.webp') }}"
                                        alt="Slide 2">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car3.webp') }}"
                                        alt="Slide 3">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel3.webp') }}"
                                        alt="Slide 3">
                                </li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior1.webp') }}"
                                        alt="Slide 4"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior2.webp') }}"
                                        alt="Slide 5"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior3.webp') }}"
                                        alt="Slide 6"></li>
                            </ul>
                        </div>
                    </div>

                    <div id="thumbnail-slider" class="splide" aria-label="Thumbnail Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car1.webp') }}"
                                        alt="thumbnail 1">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel1.webp') }}"
                                        alt="thumbnail 1">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car2.webp') }}"
                                        alt="Thumbnail 2">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel2.webp') }}"
                                        alt="Thumbnail 2">
                                </li>
                                <li class="splide__slide">
                                    <img class="w-100 body"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car3.webp') }}"
                                        alt="Thumbnail 3">
                                    <img class="w-100 wheel"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel3.webp') }}"
                                        alt="Thumbnail 3">
                                </li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior1.webp') }}"
                                        alt="Thumbnail 4"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior2.webp') }}"
                                        alt="Thumbnail 4"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior3.webp') }}"
                                        alt="Thumbnail 4"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column">
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
                                <div class="accordion-item-header active">
                                    Trim
                                </div><!-- /.accordion-item-header -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="drivetrain-fields">
                                            <button class="active">Luxury – RWD</button>
                                            <button>Performance – AWD</button>
                                            <button>Premium – AWD</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header active">
                                    Exterior
                                </div><!-- /.accordion-item-header -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div>
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img4.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Glossy Grey</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img5.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Glossy Black</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img2.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Aqua</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img1.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient13-text" class="text-center">
                                                    <p>Liquid Caramel</p>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img3.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient14-text" class="text-center">
                                                    <p>Matte White</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img6.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient15-text" class="text-center">
                                                    <p>Matte Grey</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header active">
                                    Interior
                                </div><!-- /.accordion-item-header -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div>
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Nappa Red</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Misty Purple</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Nappa Black</p>
                                                </div>
                                            </div>
                                            <div>
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
                                <div class="accordion-item-header active">
                                    Wheel
                                </div><!-- /.accordion-item-header -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="interior-colors">
                                            <div>
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Wheel Set A</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Wheel Set B</p>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Wheel Set C</p>
                                                </div>
                                            </div>
                                            <div>
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
                    heightRatio: 0.15,
                    isNavigation: true,
                    gap: 7,
                    focus: 'center',
                    pagination: false,
                    cover: true,
                    perPage: 4,
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
            const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

            accordionItemHeaders.forEach(accordionItemHeader => {
                accordionItemHeader.addEventListener("click", event => {
                    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
                    // const currentlyActiveAccordionItemHeader = document.querySelector(
                    //     ".accordion-item-header.active");
                    // if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !==
                    //     accordionItemHeader) {
                    //     currentlyActiveAccordionItemHeader.classList.toggle("active");
                    //     currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                    // }

                    accordionItemHeader.classList.toggle("active");
                    const accordionItemBody = accordionItemHeader.nextElementSibling;
                    if (accordionItemHeader.classList.contains("active")) {
                        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                    } else {
                        accordionItemBody.style.maxHeight = 0;
                    }

                });
            });
        </script>
    @endpush
@endsection
