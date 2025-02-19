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
                                <li class="splide__slide" id="main-li">
                                    <img class="w-100 body" id="main-main-body" src="" alt="Slide 1">
                                    <img class="w-100 wheel" id="main-alloy" src="" alt="Slide 1">
                                </li>
                                <li class="splide__slide" id="front-li">
                                    <img class="w-100 body" id="front-body" src="" alt="Slide 2">
                                    <img class="w-100 wheel" id="front-alloy" src="" alt="Slide 2">
                                </li>
                                <li class="splide__slide" id="back-li">
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
                                <li class="splide__slide" id="main-thumb-li">
                                    <img class="w-100 body" id="main-thumb-body" src="" alt="thumbnail 1">
                                    <img class="w-100 wheel" id="main-thumb-alloy" src="" alt="thumbnail 1">
                                </li>
                                <li class="splide__slide" id="front-thumb-li">
                                    <img class="w-100 body" id="front-thumb-body" src="" alt="Thumbnail 2">
                                    <img class="w-100 wheel" id="front-thumb-alloy" src="" alt="Thumbnail 2">
                                </li>
                                <li class="splide__slide" id="back-thumb-li">
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
                                            <div onclick="exteriorChange('glossy-grey')">
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img4.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Glossy Grey</p>
                                                </div>
                                            </div>
                                            <div onclick="exteriorChange('glossy-black')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img5.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Glossy Black</p>
                                                </div>
                                            </div>
                                            <div onclick="exteriorChange('aqua')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img2.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Aqua</p>
                                                </div>
                                            </div>
                                            <div onclick="exteriorChange('liquid-caramel')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img1.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient13-text" class="text-center">
                                                    <p>Liquid Caramel</p>
                                                </div>
                                            </div>

                                            <div onclick="exteriorChange('matte-white')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/color-img3.png') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient14-text" class="text-center">
                                                    <p>Matte White</p>
                                                </div>
                                            </div>
                                            <div onclick="exteriorChange('matte-grey')">
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
                                            <div onclick="interiorChange('nappa-red')">
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Nappa Red</p>
                                                </div>
                                            </div>
                                            <div onclick="interiorChange('misty-purple')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Misty Purple</p>
                                                </div>
                                            </div>
                                            <div onclick="interiorChange('nappa-black')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/interior/color-img-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Nappa Black</p>
                                                </div>
                                            </div>
                                            <div onclick="interiorChange('nappa-grey')">
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
                                            <div onclick="alloyChange('set-A')">
                                                <button class="varient-btn active">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-1.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient10-text" class="text-center">
                                                    <p>Wheel Set A</p>
                                                </div>
                                            </div>
                                            <div onclick="alloyChange('set-B')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-2.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient11-text" class="text-center">
                                                    <p>Wheel Set B</p>
                                                </div>
                                            </div>
                                            <div onclick="alloyChange('set-C')">
                                                <button class="varient-btn">
                                                    <img src="{{ asset('website/images/home/color-variants/avartr11/wheel/wheel-3.svg') }}"
                                                        alt="">
                                                </button>
                                                <div id="varient12-text" class="text-center">
                                                    <p>Wheel Set C</p>
                                                </div>
                                            </div>
                                            <div onclick="alloyChange('set-D')">
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
@endsection

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

    <script>
        let colors = {
            'glossy-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-grey/car3.webp') }}"
            ],
            'glossy-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-black/car3.webp') }}"
            ],
            'aqua': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/aqua/car3.webp') }}"
            ],
            'liquid-caramel': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/liquid-caramel/car3.webp') }}"
            ],
            'matte-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-white/car3.webp') }}"
            ],
            'matte-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/matte-grey/car3.webp') }}"
            ],
        };

        let interiors = {
            'nappa-red': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/red/interior3.webp') }}",
            ],
            'misty-purple': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/purple/interior3.webp') }}",
            ],
            'nappa-black': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/black/interior3.webp') }}",
            ],
            'nappa-grey': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior3.webp') }}",
            ],

        };

        let alloys = {
            'set-A': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-A/wheel3.webp') }}"
            ],
            'set-B': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-B/wheel3.webp') }}"
            ],
            'set-C': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-C/wheel3.webp') }}"
            ],
            'set-D': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/wheels/set-D/wheel3.webp') }}"
            ],
        };

        function exteriorChange(color) {
            // console.log(colors[color][0]);
            var mainBody = colors[color][0];
            var frontBody = colors[color][1];
            var backBody = colors[color][2];

            // main  image
            $('#main-main-body').attr('src', mainBody);
            $('#main-thumb-body').attr('src', mainBody);
            // $('#main-li').css('background', `url(${mainBody})`);
            $('#main-slider-slide01').css('background', `url(${mainBody})`);
            // thumb
            $('#thumbnail-slider-slide01').css('background', `url(${mainBody})`);

            // frontside image
            $('#front-body').attr('src', frontBody);
            $('#front-thumb-body').attr('src', frontBody);
            // $('#front-li').css('background', frontBody);
            $('#main-slider-slide02').css('background', frontBody);
            // thumb
            $('#thumbnail-slider-slide02').css('background', `url(${frontBody})`);

            // backside image
            $('#back-body').attr('src', backBody);
            $('#back-thumb-body').attr('src', backBody);
            // $('#back-li').css('background', backBody);
            $('#main-slider-slide03').css('background', backBody);
            // thumb
            $('#thumbnail-slider-slide03').css('background', `url(${backBody})`);
        }

        function interiorChange(color) {
            var front = interiors[color][0];
            var side = interiors[color][1];
            var back = interiors[color][2];

            $('#interior-front').attr('src', front);
            $('#main-slider-slide04').css('background', `url(${front})`);
            // thumb
            $('#interior-thumb-front').attr('src', front);
            $('#thumbnail-slider-slide04').css('background', `url(${front})`);

            $('#interior-side').attr('src', side);
            $('#main-slider-slide05').css('background', `url(${side})`);
            // thumb
            $('#interior-thumb-side').attr('src', side);
            $('#thumbnail-slider-slide05').css('background', `url(${side})`);

            $('#interior-back').attr('src', back);
            $('#main-slider-slide06').css('background', `url(${back})`);
            // thumb
            $('#interior-thumb-back').attr('src', back);
            $('#thumbnail-slider-slide06').css('background', `url(${back})`);
        }

        function alloyChange(type) {
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
            exteriorChange('glossy-grey');
            interiorChange('nappa-red');
            alloyChange('set-A');
        });
    </script>
@endpush
