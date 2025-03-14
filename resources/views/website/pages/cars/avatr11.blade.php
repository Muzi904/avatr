@extends('website.layouts.app')

@section('content')
    <section class="hero-car-details">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/hero.webp') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr11/hero.webp') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="container-md">
            <div class="content hero-animated">
                <img src="{{ asset('website/images/avatr11/avatr11.svg') }}" alt="">
                <p>The Futuristic Electric Luxury SUV
                </p>
                <a href="#" class="btn">Build and Buy</a>
            </div>
        </div>

    </section>

    <section class="section-padding section-two">
        <div class="container-md">
            <div class="row mb-3 mb-md-5">
                <div class="col-md-4 animate-text">
                    <h3>Futuristic Design
                        with Pure Luxury </h3>
                </div>
                <div class="col-md-8 animate-text">
                    <p class="mb-4">
                        The AVATR 11 (“One One”) embodies future-forward design that seamlessly blends emotion with
                        cutting-edge technology. From its flowing lines and nature-inspired colors to its intelligent
                        driving systems and intuitive AVATR OS, every detail contributes to a smart electric vehicle that
                        feels as luxurious as it looks. Designed to elevate the future of electric mobility, the AVATR 11
                        sets a new standard in smart electric vehicles with advanced technology and stunning aesthetics,
                        making it the perfect choice for electric vehicle enthusiasts in the UAE.

                    </p>
                </div>
            </div>
            <div class="tabs-container scrolltabs animate-text">
                <!-- Tabs Content (Images) -->
                <figure>
                    <img class="w-100" src="{{ asset('website/images/avatr11/car1.webp') }}" alt="">
                </figure>
                <!-- Tabs (Text) -->
                <div class="tabs justify-content-start">
                    <button class="tab active" data-text-target="#tab1-text">Space Inspired</button>
                    <button class="tab" data-text-target="#tab2-text">All Terrain Comfort</button>
                    <button class="tab" data-text-target="#tab3-text">Intelligent Driving</button>
                    <button class="tab" data-text-target="#tab4-text">Fast Charging</button>
                </div>

                <!-- Tabs Text Content -->
                <div class="tab-content">
                    <div id="tab1-text" class="content content-text active">
                        With a space-inspired front design, stunning LED star-trail tail lights, and seats based on
                        astronauts’ zero-gravity posture, the AVATR 11 SUV sets a new benchmark in electric vehicle design
                        and smart mobility. Each detail reflects precision and elegance, creating a vehicle that is both
                        futuristic and luxurious. The AVATR 11 combines cutting-edge technology with high-performance
                        features, redefining the future of electric vehicles and smart electric mobility for a new era of
                        driving.
                    </div>
                    <div id="tab2-text" class="content content-text">
                        The AVATR 11’s refined chassis, featuring front double wishbone and rear five-link suspension,
                        offers superior comfort across urban and suburban environments. With DriveONE iTRACK technology, the
                        vehicle ensures millimeter-level torque adjustments, providing precise handling on even the most
                        complex terrains. Advanced engineering and meticulous tuning deliver an incredibly smooth ride,
                        whether you’re driving through Downtown Dubai or conquering the rugged landscapes of Jebel Jais. The
                        AVATR 11 is designed to excel in both urban mobility and off-road performance, making it the perfect
                        choice for electric vehicle enthusiasts in the UAE.
                    </div>
                    <div id="tab3-text" class="content content-text">
                        Equipped with 34 sensors, including high-performance radar and 3D laser fusion detection, the AVATR
                        11 delivers exceptional obstacle detection in any lighting condition. The intelligent driving
                        assistance system provides partial self-driving capabilities, ensuring a seamless and stress-free
                        driving experience across the UAE. Designed for smart mobility, the AVATR 11 offers cutting-edge
                        technology for a safer and more intuitive driving experience, making it the perfect choice for those
                        seeking advanced electric vehicles in the UAE.
                    </div>
                    <div id="tab4-text" class="content content-text">
                        The AVATR 11 SUV offers an impressive range of up to 680 km, combined with high performance.
                        Featuring built-in supercharging technology, the battery can reach 80% charge in just 35 minutes,
                        ensuring quick recharges for extended journeys. With its remarkable driving range, the AVATR 11
                        makes long-distance travel convenient and stress-free, redefining the future of electric mobility
                        and smart electric vehicles for drivers in the UAE.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-one">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/img1.jpg') }}" media="(max-width: 768px)"><img class="w-100"
                src="{{ asset('website/images/avatr11/img1.jpg') }}" alt="" class="FirstTitle_section-bgm__2JYhD"
                loading="lazy">
        </picture>
        <div class="overlay">
            <h2 class="animate-text">
                Luxury Redesigned: AVATR’s Next-Gen Electric Vehicle Excellence
            </h2>
            <p class="text-center animate-text">Created to the golden ratio, the AVATR 11 SUV represents perfection at its
                finest,
                combining futuristic
                design
                with cutting-edge electric vehicle technology. This smart electric vehicle is a testament to precision and
                elegance, offering a truly luxurious driving experience with advanced features and exceptional performance,
                setting a new standard in electric mobility and solidifying the AVATR 11 SUV as a leader in the world of
                electric vehicles.</p>
        </div>

    </section>

    @include('website.pages/models')

    <section class="section-two-avatr11">
        <figure>
            <img class="" src="{{ asset('website/images/avatr11/img2.webp') }}" alt="">
        </figure>
        <div class="container">
            <div class="column ">
                <div class="d-flex align-items-center gap-2 text-white mb-4">
                    <img src="{{ asset('website/images/avatr11/avatr11-black.svg') }}" alt="">
                    SPECS
                </div>

                <ul class="accordion">
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Overall Specs</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Drive Type</span> <br>
                                        Full Electric
                                    </p>
                                    <p class="col-md-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                    <p class="col-md-6"><span>Power hp</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Drivetrain</span> <br>
                                        All Wheel Drive
                                    </p>
                                    <p class="col-md-6"><span>Battery Capacity in kWh</span> <br>
                                        116
                                    </p>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Dimensions</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>L x W x H in mm</span> <br>
                                        4880 x 1970 x 1601
                                    </p>
                                    <p class="col-md-6"><span>Wheelbase in mm</span> <br>
                                        2975
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Vehicle Weight in kg</span> <br>
                                        2425
                                    </p>
                                    <p class="col-md-6"><span>Number of Seats</span> <br>
                                        5
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Powertrain</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Power in kW</span> <br>
                                        230 Rear / 195 Front
                                    </p>
                                    <p class="col-md-6"><span>Torque in Nm</span> <br>
                                        370 Rear / 280 Front
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Maximum Output Power in kW</span> <br>
                                        425
                                    </p>
                                    <p class="col-md-6"><span>Maximum Output Torque in Nm</span> <br>
                                        650
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Battery</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Battery Type</span> <br>
                                        NCM Battery
                                    </p>
                                    <p class="col-md-6"><span>NEDC E-Range in km</span> <br>
                                        625
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Battery Capacity in kWh</span> <br>
                                        116
                                    </p>
                                    <p class="col-md-6"><span>0-80% with a Super Charger</span> <br>
                                        35 minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item animate-text">
                        <h3 class="accordion-thumb">Safety</h3>
                        <div class="accordion-panel">
                            <div class="container d-block">
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Anti-Lock Brake System</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Electronic Stability Program</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Traction Control System</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Tire Pressure Monitoring System</span> <br>
                                        Included
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Hill Hold and Descent Control</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Front Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2 my-1" style="background: rgba(255, 255, 255, .1)">
                                    <p class="col-md-6"><span>Front Side Airbag</span> <br>
                                        2
                                    </p>
                                    <p class="col-md-6"><span>Front and Rear Integrated Airbag</span> <br>
                                        2
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <p class="col-md-6"><span>Rear Electronic Child Safety Lock</span> <br>
                                        Included
                                    </p>
                                    <p class="col-md-6"><span>Anti-Theft Alarm System</span> <br>
                                        Included
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

                <a href="#" class="btn animate-text">
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
        <h1 class="animate-text">Always in Range
        </h1>
        <div class="container-md">
            <div class=" tabs-container scrolltabs">
                <!-- Tabs (Text) -->
                <div class="tabs">
                    <button class="tab active animate-text" data-target="#tab5-img" data-text-target="#tab5-text">
                        <h4>26 Trips
                        </h4>
                        <p>Palm Jumeirah to Downtown Dubai</p>
                    </button>
                    <button class="tab animate-text " data-target="#tab6-img" data-text-target="#tab6-text">
                        <h4>5 Trips
                        </h4>
                        <p>Louvre Museum to Museum of the Future</p>
                    </button>
                    <button class="tab animate-text" data-target="#tab7-img" data-text-target="#tab7-text">
                        <h4>9 Trips</h4>
                        <p>Noor Island to Marjan Island</p>
                    </button>
                </div>
                <!-- Tabs Content (Images) -->
                <div class="tab-content">
                    <div id="tab5-img" class="content animate-text active">
                        <video class="w-100" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('website/images/avatr11/avatr-video-1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab6-img" class="content animate-text ">
                        <video class="w-100" autoplay="" loop="" muted="" playsinline="">
                            <source src="{{ asset('website/images/avatr11/avatr-video-2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div id="tab7-img" class="content animate-text">
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
                <div class="col-md-12 position-relative animate-text">
                    <video id="video" class="w-100" muted>
                        <source src="{{ asset('website/images/avatr11/avatr-video-4.mp4') }}" type="video/mp4">
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
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img1.webp') }}" alt="">
                <div class="content animate-text">
                    <h6>Experience Zero Gravity Seating in AVATR 11</h6>
                    <p>Ultimate Comfort for Long Journeys: Inspired by Astronaut Posture in AVATR Electric SUV</p>
                </div>
            </div>
            <div class="b">
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img2.jpg') }}" alt="">
                <div class="content animate-text">
                    <h6>Superb Sound in AVATR 11</h6>
                    <p>25 Speakers with Meridian Excellence for an Unmatched Audio Experience</p>
                </div>
            </div>
            <div class="c">
                <img class="w-100" src="{{ asset('website/images/avatr11/avatr-img3.jpg') }}" alt="">
                <div class="content animate-text">
                    <h6>Ventilated and AC-Cooled Seats in AVATR 11
                    </h6>
                    <p>Stay Cool and Comfortable on Every Drive
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
