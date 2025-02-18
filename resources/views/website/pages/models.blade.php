@extends('website.layouts2.main-app')

@section('content')
    <style>
        .models-designs-varients #main-slider {
            margin-bottom: 25px
        }

        .models-designs-varients .right-section {
            display: flex;
            flex-direction: column;
            gap: 35px
        }

        .models-designs-varients .right-section img {
            width: 400px;
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
            border-bottom: 1px solid #7e7e7e;
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
            padding: 0.5rem 3rem 0.5rem 1rem;
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
    </style>

    <section class="models-designs-varients">
        <div class="container">
            <div class="grid-rows">
                <div class="column">
                    <div id="main-slider" class="splide" aria-label="Main Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/dropdown-img1.png') }}" alt="Slide 1">
                                </li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero1.jpg') }}" alt="Slide 2"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero2.jpg') }}" alt="Slide 3"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero2.jpg') }}" alt="Slide 3"></li>
                            </ul>
                        </div>
                    </div>

                    <div id="thumbnail-slider" class="splide" aria-label="Thumbnail Slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/dropdown-img1.png') }}" alt="Thumbnail 1">
                                </li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero1.jpg') }}" alt="Thumbnail 2"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero2.jpg') }}" alt="Thumbnail 3"></li>
                                <li class="splide__slide"><img class="w-100"
                                        src="{{ asset('website/images/avatr11/hero2.jpg') }}" alt="Thumbnail 3"></li>
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
                    fixedWidth: '25%',
                    fixedHeight: 74,
                    isNavigation: true,
                    gap: 7,
                    focus: 'start',
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
                            fixedHeight: 38,
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
                    const currentlyActiveAccordionItemHeader = document.querySelector(
                        ".accordion-item-header.active");
                    if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !==
                        accordionItemHeader) {
                        currentlyActiveAccordionItemHeader.classList.toggle("active");
                        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                    }

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
