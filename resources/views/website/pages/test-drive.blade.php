@extends('website.layouts2.main-app')

@section('content')
    <section class="textDrive-container">
        <div class="textDrive-swiper">
            <div class="swiper testDrive">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="w-100" src="{{ asset('website/images/home/hero1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-100" src="{{ asset('website/images/home/hero2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        <div class="testDrive-form-container">
            <div class="testDrive-form">
                <h2>Test Drive</h2>
                <form action="">
                    <div class="form-input">
                        <label for="">Tel</label>
                        <input type="text" placeholder="Required">
                    </div>
                    <div class="form-input">
                        <label for="">Modal</label>
                        <input type="text" placeholder="Required">
                    </div>
                    <div class="form-input">
                        <label for="">Modal</label>
                        <input type="text" placeholder="Required">
                    </div>
                    <button class="btn">Book Now</button>
                </form>
            </div>
        </div>

    </section>
@endsection
