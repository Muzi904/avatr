@extends('website.layouts.app')

@section('content')
    <section class="hero">
        <picture>
            <source srcset="{{ asset('website/images/home/hero.png') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/home/hero.png') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="content hero-animated">
            <h1 class="">Luxury Redesigned
            </h1>
            <p class="">The AVATR experience starts from <br>
                AED 245,000 with best in class features and unmatched advantages.
            </p>
            <a href="#Car_models" class="btn mx-auto ">View Models</a>
        </div>
    </section>

    <section class="section-padding section-two">
        <div class="running-text animate-text">
            <div class="swiper-container swiper--top ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">AVATR 11 / The Future of Smart EVs / AVATR 12 / Revolutionizing Mobility/
                    </div>
                    <div class="swiper-slide">AVATR 11 / The Future of Smart EVs / AVATR 12 / Revolutionizing Mobility/
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper--bottom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Smart Mobility / The Future is Here / AVATR/ Smart Mobility / The Future is
                        Here / AVATR/
                    </div>
                    <div class="swiper-slide">Smart Mobility / The Future is Here / AVATR/ Smart Mobility / The Future is
                        Here / AVATR/
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper--top ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                    <div class="swiper-slide">Electric Mobility / Future. Now/ Electric Mobility / Future. Now/ </div>
                </div>
            </div>
        </div>
        <div class="container-md">
            <div class="row">
                <div class="col-md-4 animate-text">
                    <h3>AVATR – Shaping the Future of Electric Vehicles</h3>
                </div>
                <div class="col-md-8 animate-text">
                    <p class="mb-md-4">
                        AVATR invites you to explore the next generation of humanized mobility and technology at your AVATR
                        car
                        dealer in UAE.</p>
                    <p>Experience the future of luxury with beautifully designed, emotionally intelligent, high-performance
                        vehicles. AVATR UAE is committed to building a global Smart Electric Vehicle brand.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section ">
        <div class="overlay-container d-lg-none animate-text">
            <div class="text">
                <h1>AVATR: Emotional Intelligence, Motion in Delight </h1>
                <p>AVATR redefines the driving experience with Emotional Intelligence, delivering a seamless blend of
                    performance, luxury, and smart technology. With Motion in Delight, each drive is an immersive
                    experience, offering exceptional comfort, intuitive controls, and a responsive, high-performance ride.
                    Experience the future of mobility with AVATR’s emotionally intelligent, cutting-edge electric vehicles
                    at your trusted AVATR car dealer in UAE.</p>
            </div>


        </div>
        <div class="bg-image-section ">
            <div class="tab-image active" data-image="tab1">
                <picture>
                    <source srcset="{{ asset('website/images/home/img1.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab2">
                <picture>
                    <source srcset="{{ asset('website/images/home/img1.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
            <div class="tab-image" data-image="tab3">
                <picture>
                    <source srcset="{{ asset('website/images/home/img1.jpg') }}" media="(max-width: 768px)"><img
                        src="{{ asset('website/images/home/img1.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
        </div>

        <div class="overlay-container ">
            <div class="text d-none d-lg-block">
                <h1 class="animate-text">AVATR: Emotional Intelligence, Motion in Delight </h1>
                <p class="animate-text">AVATR redefines the driving experience with Emotional Intelligence, delivering a
                    seamless blend of
                    performance, luxury, and smart technology. With Motion in Delight, each drive is an immersive
                    experience, offering exceptional comfort, intuitive controls, and a responsive, high-performance ride.
                    Experience the future of mobility with AVATR’s emotionally intelligent, cutting-edge electric vehicles
                    at your trusted AVATR car dealer in UAE.</p>
            </div>

            <div class="tabs animate-text">
                <div class="tab-buttons">
                    <button class="tab-btn active" data-tab="tab3" data-image="tab1">
                        History
                    </button>
                    <button class="tab-btn" data-tab="tab4" data-image="tab2">
                        Mission
                    </button>
                    <button class="tab-btn" data-tab="tab5" data-image="tab3">
                        Vision
                    </button>
                </div>
                <div class="tab-content ">
                    <div id="tab3" class="tab-panel active">
                        <p>Founded in 2018, AVATR is committed to reshaping the future of intelligent, humanized mobility
                            with innovative electric vehicles. As a trusted car dealer in the UAE, we prioritize both
                            performance and sustainability in every vehicle.The mission of AVATR is to provide unique smart
                            mobility experiences through advanced electric vehicles that seamlessly integrate into and
                            enhance the lifestyle of our users. As a leading car dealer in the UAE, we offer cutting-edge
                            smart electric vehicles that redefine convenience and performance.Driven by cutting-edge design
                            and emotionally intelligent technologies, AVATR’s vision is to lead the high-end Smart El</p>
                    </div>
                    <div id="tab4" class="tab-panel">
                        <p> The mission of AVATR is to provide unique smart mobility experiences through advanced electric
                            vehicles that seamlessly integrate into and enhance the lifestyle of our users. As a leading
                        </p>
                    </div>
                    <div id="tab5" class="tab-panel">
                        <p> Driven by cutting-edge design and emotionally intelligent technologies, AVATR’s vision is to
                            lead the high-end Smart Electric Vehicle (SEV) market globally by 2030, establishing AVATR UAE
                            as a key player in the industry. Visit our AVATR showroom to explore the future of electric
                            mobility and experience the luxury and performance of our innovative vehicles.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="Car_models" class="section-padding vehicle-motors">
        <div class="main-container">
            <h1 class="animate-text">Meet The Models
            </h1>
            <div class="tabs ">
                <div class="tab-buttons animate-text">
                    <button class="tab-btn-color active" data-target="tab1">AVATAR 11</button>
                    <button class="tab-btn-color" data-target="tab2">AVATAR 12</button>
                </div>
                <div class="tab-contents ">
                    <div id="tab1" class="tab-panel-color active">
                        <div class="swiper-container swiper car-models animate-text">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img5.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avartr11/img6.jpg') }}"
                                        alt="">
                                </div>

                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
                        <div class="d-flex align-items-center gap-5 mt-5 justify-content-center animate-text">
                            <a href="{{ route(name: 'avatr11') }}" class="link ">View
                                AVATR 11</a>
                            <a href="{{ route(name: 'avatr11') }}" class="btn ">Customize</a>

                        </div>

                    </div>
                    <div id="tab2" class="tab-panel-color">
                        <div class="swiper-container swiper car-models animate-text">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img5.jpg') }}"
                                        alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100 my-50"
                                        src="{{ asset('website/images/home/color-variants/avatr12/img6.jpg') }}"
                                        alt="">
                                </div>

                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
                        <div class="d-flex align-items-center gap-5 mt-5 justify-content-center animate-text">
                            <a href="{{ route(name: 'avatr12') }}" class="link ">View AVATR 12</a>
                            <a href="{{ route(name: 'avatr12') }}" class="btn ">Customize</a>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="design-center position-relative py-5 py-lg-0">
        <div class="next-section animated-section">
            <div class="tab-img" id="tab-img1">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img1.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img1.webp') }}" alt="" class="w-100" />
                </picture>
            </div>
            <di class="tab-img"v id="tab-img2">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img2.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img2.webp') }}" alt="" class="w-100" />
                </picture>
            </di>
            <div class="tab-img" id="tab-img3">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img3.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img3.webp') }}" alt="" class="w-100" />
                </picture>
            </div>
            <di class="tab-img" id="tab-img4">
                <picture>
                    <source srcset="{{ asset('website/images/home/accordion-img4.webp') }}" media="(max-width: 768px)" />
                    <img src="{{ asset('website/images/home/accordion-img4.webp') }}" alt="" class="w-100" />
                </picture>
            </di>

            <div class="container">
                <div class="design-overlay-text ">
                    <div class="accordion">
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img1">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-1.svg') }}"
                                    alt=""> All
                                New Generation
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The Intelligent Electric Vehicle Platform CHN, developed in collaboration by Changan
                                    Automobile, Huawei, and CATL, features a revolutionary architecture, robust computing
                                    capabilities, and high-voltage charging, providing enhanced performance and efficiency
                                    for
                                    next-generation electric vehicles.
                                </div>
                                <div class="service-line"></div>
                            </div>


                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img2">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-2.svg') }}"
                                    alt=""> Safe
                                Battery
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The CATL ternary lithium battery provides advanced safety features, including continuous
                                    thermal runaway monitoring, an intelligent Battery Management System for early warning
                                    detection, and thermal spread suppression, ensuring maximum protection for electric
                                    vehicles.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img3">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-3.svg') }}"
                                    alt=""> Long
                                Range
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The battery pack, compatible with capacities ranging from 90kWh to 116kWh, supports
                                    extended driving ranges of over 700km on a single charge. This ensures that electric
                                    vehicles powered by this advanced system offer both high performance and long-distance
                                    travel, making it an ideal choice for those seeking reliability and convenience in their
                                    electric mobility experience.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                        <div class="accordion-item animate-text">
                            <div class="accordion-item-header" data-target="#tab-img4">
                                <img class="me-2" src="{{ asset('website/images/home/accordion-icon-4.svg') }}"
                                    alt=""> High
                                Output
                            </div><!-- /.accordion-item-header -->
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    The intelligent Huawei DriveONE high-voltage electric drive system enhances the driving
                                    experience with efficient oil cooling, high-speed cruising capabilities, and quiet,
                                    smooth output. This cutting-edge technology delivers improved performance, energy
                                    efficiency, and a comfortable, noise-free ride, setting a new standard in electric
                                    vehicle innovation.
                                </div>
                                <div class="service-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
