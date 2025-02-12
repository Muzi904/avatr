@extends('website.layouts2.main-app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
    <style>
        [class^="swiper-button-"] {
            transition: all 0.3s ease;
        }

        .swiper-slide {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
        }



        .swiper-container {
            width: 80%;
            height: 100vh;
            float: left;
            transition: opacity 0.6s ease, transform 0.3s ease;
            margin-bottom: 40px
        }

        @media screen and (max-width:991px) {
            .swiper-container {
                height: 80vh;
                margin-bottom: 0
            }

            .swiper-container.nav-slider {
                height: 20vh;
                margin-bottom: 35px
            }
        }

        .swiper-container.nav-slider {
            width: 20%;
            padding-left: 5px;
        }

        .swiper-container.nav-slider .swiper-slide {
            cursor: pointer;
            opacity: 0.4;
            transition: opacity 0.3s ease;
        }

        .swiper-container.nav-slider .swiper-slide.swiper-slide-active {
            opacity: 1;
        }

        .swiper-container.nav-slider .swiper-slide .content-models {
            width: 100%;
        }

        .swiper-container.nav-slider .swiper-slide .content-models .title {
            height: 50px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: transparent;
            border: 0
        }

        .swiper-container:hover .swiper-button-prev,
        .swiper-container:hover .swiper-button-next {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }

        .swiper-container.loading {
            opacity: 0;
            visibility: hidden;
        }

        .swiper-slide {
            overflow: hidden;
        }

        .swiper-slide .slide-bgimg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
        }

        .swiper-slide .entity-img {
            display: none;
        }

        .swiper-slide .content-models {
            position: absolute;
            top: 40%;
            left: 0;
            width: 50%;
            padding-left: 5%;
            color: #fff;
        }

        .swiper-slide .content-models .title {
            font-size: 2.6em;
            font-weight: bold;
            margin-bottom: 30px;
        }


        .swiper-slide .content-models .caption {
            height: 130px;
            width: auto !important;
        }

        .swiper-slide .content-models .caption.show {
            transform: translateX(0);
            opacity: 1;
        }

        [class^="swiper-button-"] {
            width: 44px;
            opacity: 0;
            visibility: hidden;
        }

        .swiper-button-prev {
            transform: translateX(50px);
        }

        .swiper-button-next {
            transform: translateX(-50px);
        }
    </style>


    <div class="swiper-container main-slider loading">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image: url(website/images/home/hero1.jpg);">
                    <img src="{{ asset('website/images/home/hero1.jpg') }}" class="entity-img" />
                </figure>
                <div class="content-models">
                    <img class="caption" src="{{ asset('website/images/home/sub-hero1.png') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg" style="background-image: url(website/images/home/hero2.jpg);">
                    <imgc src="{{ asset('website/images/home/hero2.jpg') }}" class="entity-img" />
                </figure>
                <div class="content-models">
                    <img class="caption" src="{{ asset('website/images/home/sub-hero2.png') }}" />
                </div>
            </div>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>

    <!-- Thumbnail navigation -->
    <div class="swiper-container nav-slider loading">
        <div class="swiper-wrapper" role="navigation">
            <div class="swiper-slide">
                <figure class="slide-bgimg"
                    style="
            background-image: url(website/images/home/hero1.jpg);
          ">
                    <img src="{{ asset('website/images/home/hero1.jpg') }}" class="entity-img" />
                </figure>
                <div class="content-models">
                    <img class="title" src="{{ asset('website/images/home/sub-hero1.png') }}" />
                </div>
            </div>
            <div class="swiper-slide">
                <figure class="slide-bgimg"
                    style="
            background-image: url('website/images/home/hero2.jpg');
          ">
                    <img src="{{ asset('website/images/home/hero2.jpg') }}" class="entity-img" />
                </figure>
                <div class="content-models">
                    <img class="title" src="{{ asset('website/images/home/sub-hero2.png') }}" />
                </div>
            </div>
        </div>
    </div>

    <script>
        // Params
        let mainSliderSelector = ".main-slider",
            navSliderSelector = ".nav-slider",
            interleaveOffset = 0.5;

        // Main Slider
        let mainSliderOptions = {
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
            },
            loopAdditionalSlides: 10,
            grabCursor: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                init: function() {
                    this.autoplay.stop();
                },
                imagesReady: function() {
                    this.el.classList.remove("loading");
                    this.autoplay.start();
                },
                slideChangeTransitionStart: function() {
                    let swiper = this,
                        captions = swiper.el.querySelectorAll(".caption");
                    for (let i = 0; i < captions.length; ++i) {
                        captions[i].classList.remove("show");
                    }
                    swiper.slides[swiper.activeIndex]
                        .querySelector(".caption")
                        .classList.add("show");
                },
                progress: function() {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        let slideProgress = swiper.slides[i].progress,
                            innerOffset = swiper.width * interleaveOffset,
                            innerTranslate = slideProgress * innerOffset;

                        swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                            "translateX(" + innerTranslate + "px)";
                    }
                },
                touchStart: function() {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function(speed) {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                            speed + "ms";
                    }
                },
            },
        };
        let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

        // Navigation Slider
        let navSliderOptions = {
            loop: true,
            loopAdditionalSlides: 10,
            speed: 1000,
            spaceBetween: 5,
            slidesPerView: 2,
            centeredSlides: true,
            touchRatio: 0.2,
            slideToClickedSlide: true,
            direction: "vertical",
            breakpoints: {
                991: {
                    direction: "horizontal",
                },
            },
            on: {
                imagesReady: function() {
                    this.el.classList.remove("loading");
                },
                click: function() {
                    mainSlider.autoplay.stop();
                },
            },
        };
        let navSlider = new Swiper(navSliderSelector, navSliderOptions);

        // Matching sliders
        mainSlider.controller.control = navSlider;
        navSlider.controller.control = mainSlider;
    </script>
@endsection
