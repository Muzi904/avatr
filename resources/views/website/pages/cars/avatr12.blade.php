@extends('website.layouts.app')

@section('content')
    <section class="hero-car-details">
        <picture>
            <source srcset="{{ asset('website/images/avatr12/hero.webp') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr12/hero.webp') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="container-md">
            <div class="content">
                <img class="h-100" src="{{ asset('website/images/avatr12/avatr12.svg') }}" alt="">
                <p class="text-white">The futuristic luxury gran coupe
                </p>
                <a href="#" class="btn">Build and Buy</a>
            </div>
        </div>

    </section>

    <section class="section-padding section-two">
        <div class="container-md">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Introducing The Halo
                        of Modern Luxury</h3>
                </div>
                <div class="col-md-8">
                    <p class="mb-4">
                        AVATR 12 (“One Two”) is bold, vibrant, and modern from every angle. This luxury SEV (Sport Electric
                        Vehicle) and AVATR SUV adapts effortlessly to suit your individual needs with a variety of driving
                        modes. From the moment you open the door, the intuitive AVATR OS welcomes you, ensuring seamless
                        interaction and enhancing your journey. With cutting-edge technology and high-performance features,
                        the AVATR 12 SUV offers a dynamic and luxurious driving experience, redefining the future of
                        electric mobility.

                    </p>
                </div>
            </div>
            <div class="tabs-container scrolltabs">
                <!-- Tabs Content (Images) -->
                <figure>
                    <img class="w-100" src="{{ asset('website/images/avatr12/avatr12-img1.webp') }}" alt="">
                </figure>
                <!-- Tabs (Text) -->
                <div class="tabs justify-content-start">
                    <button class="tab active" data-text-target="#tab1-text">Effortless Style</button>
                    <button class="tab" data-text-target="#tab2-text">An Intelligent Companion</button>
                    <button class="tab" data-text-target="#tab3-text">AVATRUST</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab1-text" class="content content-text active">
                        An iconic butterfly-shaped front combined with unique style, the AVATR 12 SUV showcases a futuristic
                        design aesthetic that exudes elegance. With its active air intake grille, which opens and closes
                        automatically, the AVATR 12 Gran Coupe effortlessly maneuvers through the wind. This sleek,
                        high-performance AVATR 12 SUV is the perfect blend of cutting-edge technology and luxurious design,
                        offering an unparalleled driving experience in the world of electric mobility.
                    </div>
                    <div id="tab2-text" class="content content-text">
                        Powered by HarmonyOS 4 and HUAWEI ADS 2.0, the AVATR 12 SUV provides unlimited interaction with
                        user-friendly applications catered to your every need. Natural dialogue commands are responsive and
                        effortless, making the AVATR 12 Gran Coupe an intuitive and seamless driving experience. With
                        cutting-edge technology, this electric SUV offers a futuristic and personalized journey, taking
                        smart electric mobility to new heights.

                    </div>
                    <div id="tab3-text" class="content content-text">
                        Equipped with 29 sensors covering all scenarios, including 3 high-performance, high-resolution LiDAR
                        units, the AVATR 12 SUV enables beyond-the-eye sight, making you aware of hidden dangers. This smart
                        electric vehicle (SEV) ensures a safer driving experience with advanced autonomous driving
                        technology, offering superior detection and enhanced awareness on the road.
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

    @include('website.pages/models2')

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

                <a href="#" class="btn">
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

    <section class="section-three-avatr11 section-padding">
        <h1>Always in Range
        </h1>
        <div class="container-md">
            <div class=" tabs-container scrolltabs">
                <!-- Tabs (Text) -->
                <div class="tabs">
                    <button class="tab active" data-target="#tab5-img" data-text-target="#tab5-text">
                        <h4>26 Trips
                        </h4>
                        <p>Palm Jumeirah to Downtown Dubai</p>
                    </button>
                    <button class="tab " data-target="#tab6-img" data-text-target="#tab6-text">
                        <h4>5 Trips
                        </h4>
                        <p>Louvre Museum to Museum of the Future</p>
                    </button>
                    <button class="tab" data-target="#tab7-img" data-text-target="#tab7-text">
                        <h4>9 Trips</h4>
                        <p>Noor Island to Marjan Island</p>
                    </button>
                </div>
                <!-- Tabs Content (Images) -->
                <div class="tab-content">
                    <div id="tab5-img" class="content active">
                        <video class="w-100" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('website/images/avatr11/avatr-video-1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab6-img" class="content ">
                        <video class="w-100" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('website/images/avatr11/avatr-video-2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab7-img" class="content">
                        <video class="w-100" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('website/images/avatr11/avatr-video-3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="section-one-avatr11">
        <div class="container-md">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <video id="video" class="w-100" muted>
                        <source src="{{ asset('website/images/avatr12/video-avatr-12.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div id="play_button">
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
                    </div>
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
@endsection
