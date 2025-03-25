@extends('website.layouts2.main-app')

@section('content')
    <style>
        .corresponding-tabs.scrolled {
            top: 63px
        }

        #photogallery .swiper-button-next,
        #photogallery .swiper-button-prev {
            top: 13px !important;
        }

        #photogallery .swiper-button-next:after,
        #photogallery .swiper-button-prev:after {
            font-size: 28px;
            color: #212529;
        }

        #photogallery {
            position: relative;
        }
    </style>

    <div class="main-section">
        <section class="section-padding pb-0">
            <div class="container-md">
                <div class="pt-5">
                    <h1>News</h1>
                </div>
            </div>

        </section>
        <section class="corresponding-tabs p-0 section-padding">
            <div class="container-md">

                <div class="sticky-section">
                    <a href="#news" class="active">
                        News
                    </a>
                    <a href="#photogallery">
                        Photo Gallery
                    </a>
                </div>
            </div>

        </section>


        <section id="news" class="section-padding pb-0`">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="animate-text">Currently No News
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="photogallery" class=" section-padding ">
            <div class="container-md">
                <div class="col-md-12 d-flex justify-content-between mb-3 mb-md-5">
                    <h1 class="animate-text ">Photo Gallery
                    </h1>
                    <div class="d-flex align-items-center gap-5">
                        <div class="swiper-button-prev position-relative"></div>
                        <div class="swiper-button-next position-relative"></div>
                    </div>

                </div>
                <div class="swiper-container swiper photo-gallery animate-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-100 my-50" src="{{ asset('website/images/news/photo1.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100 my-50" src="{{ asset('website/images/news/photo2.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100 my-50" src="{{ asset('website/images/news/photo3.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-100 my-50" src="{{ asset('website/images/news/photo4.webp') }}" alt="">
                        </div>
                    </div>


                </div>
            </div>

        </section>

    </div>
@endsection
