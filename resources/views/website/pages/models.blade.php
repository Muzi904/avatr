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
</style>

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
                                        <button data-trim="trim1" class="active">Luxury – RWD</button>
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

                                        <div class="body-color" data-color="matte-white">
                                            <button class="varient-btn">
                                                <img src="{{ asset('website/images/home/color-variants/avartr11/color-img3.png') }}"
                                                    alt="">
                                            </button>
                                            <div id="varient15-text" class="text-center">
                                                <p>Matte White</p>
                                            </div>
                                        </div>
                                        <div class="body-color" data-color="matte-grey">
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
{{-- @endsection --}}

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
        const accordionItemHeadersAvatr11 = document.querySelectorAll(".accordion-item-headerAvatr11");

        accordionItemHeadersAvatr11.forEach(accordionItemHeader => {
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
    </script>

    <script>
        let colors = {
            'glossy-white': [
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car1.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car2.webp') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/exterior/glossy-white/car3.webp') }}"
            ],
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
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
                "{{ asset('website/images/home/color-variants/models-details/avatr11/interior/grey/interior2.jpg') }}",
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


        document.querySelectorAll("[data-trim]").forEach(button => {
            button.addEventListener("click", function() {
                document.querySelectorAll("[data-trim]").forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const alloyElement = document.querySelector('[data-alloy="set-D"]');
                if (this.getAttribute('data-trim') === 'trim1') {
                    alloyElement.style.display = 'block';
                } else {
                    alloyElement.style.display = 'none';
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
            exteriorChange('glossy-white');
            interiorChange('nappa-red');
            alloyChange('set-A');
        });
    </script>
@endpush
