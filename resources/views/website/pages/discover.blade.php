@extends('website.layouts.app')

@section('content')
    <div class="main-section">

        <section class="hero">
            <picture>
                <source srcset="{{ asset('website/images/discover-bg.jpg') }}" media="(max-width: 768px)">
                <img src="{{ asset('website/images/discover-bg.jpg') }}" alt="" class="w-100 h-100" loading="lazy">
            </picture>
            <div class="container-md">
                <div class="content hero-animated pt-5">
                    <h2 class="text-white">Discover AVATR
                    </h2>
                    <p class="text-white">
                        AVATR is redefining humanized mobility with futuristic designs, accessible technology, user-centric
                        features, and best-in-class proportions. AVATR electric vehicles, AVATR technology, AVATR design,
                        luxury electric vehicles, sustainable mobility, innovative technology, premium electric vehicles.
                    </p>
                    <p class="text-white">AVATR electric vehicles, sustainable mobility, electric vehicles, zero emissions,
                        green technology, future of mobility, innovative technology, premium electric vehicles.</p>
                </div>
            </div>

        </section>

        <section class="corresponding-tabs pb-0 ">
            <div class="container-md">
                <div class="sticky-section">
                    <a href="#future" class="active">
                        Designing the Future
                    </a>
                    <a href="#philosophy">
                        A Design Philosophy
                    </a>
                    <a href="#emotion">
                        Feel the Emotion
                    </a>
                </div>
            </div>

        </section>

        <div class="tab-main">
            <section id="future" class="section-padding  pb-0">

                <div class="container-md">
                    <div class="row mb-md-5">
                        <div class="col-md-6 mb-3 mb-md-5 ">
                            <h1 class="animate-text">Luxury and Design
                            </h1>
                        </div>
                        <div class="col-md-6 ">
                            <p class=" animate-text mb-4 mb-md-0">AVATR is crafting a new genre of modern transportation,
                                where
                                luxurious
                                design and advanced technology converge to create the ultimate driving experience. At the
                                forefront of the New Energy Revolution, AVATR offers a humanized experience that transcends
                                ordinary travel, elevating your lifestyle with premium electric vehicles designed for
                                discerning
                                drivers. Luxury electric vehicles, premium EVs, electric SUVs, electric sedans, design,
                                lifestyle, automotive innovation, high-performance EVs.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-md-5">
                        <div class="col-md-6 ">
                            <figure class="mb-4 mb-md-0">
                                <img class="w-100" src="{{ asset('website/images/discover/img2.webp') }}" alt="">
                            </figure>
                        </div>
                        <div class="col-md-6 ">
                            <h3 class="mb-3 animate-text">Powering the Future of Energy
                            </h3>
                            <p class="mb-4 animate-text mb-md-0">
                                Leading the New Energy Revolution, AVATR is putting the user at the center of the driving
                                experience. We offer users a humanized experience that transcends traditional travel,
                                creating
                                space for a more enhanced and fulfilled lifestyle through intuitive technology, personalized
                                features, and a seamless digital ecosystem. User experience, connected car, digital cockpit,
                                in-car technology, electric vehicle experience, personalized mobility, intuitive technology.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 position-relative animate-text">
                            <div class="video-container">
                                <video id="video" class="w-100" muted>
                                    <source src="{{ asset('website/images/avatr12/video-avatr-12.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div id="play_button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 48 48">
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

            <section id="philosophy" class=" section-padding  pb-0">
                <div class="container-md">
                    <div class="row align-items-center">
                        <div class="col-md-6 ">
                            <h3 class="animate-text">A Design Philosophy Rooted in a Sense of the Future of Electric
                                Vehicles
                            </h3>
                            <p class=" animate-text mb-3 mb-md-0">
                                AVATR reflects a cutting-edge and sophisticated lifestyle, driven by bold
                                innovation, intelligent technology, and vibrant individuality. Discover the next
                                generation of electric vehicles.
                            </p>
                        </div>
                        <div class="col-md-6 ">
                            <figure class="mb-4 mb-md-0">
                                <img class="animate-text w-100" src="{{ asset('website/images/discover/img3.webp') }}"
                                    alt="">
                            </figure>
                        </div>

                    </div>
                </div>

            </section>

            <section id="emotion" class="section-padding ">
                <div class="container-md">
                    <div class="row align-items-center">
                        <div class="col-md-6 ">
                            <figure class="mb-4 mb-md-0">
                                <img class="animate-text w-100" src="{{ asset('website/images/discover/img4.webp') }}"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-md-6 ">
                            <h3 class="animate-text mb-3 mb-md-4">Feel the Emotion
                            </h3>
                            <p class=" animate-text mb-3 mb-md-4">
                                We infuse our electric vehicle solutions with emotion, leveraging the power of
                                design to create smart energy vehicles that are not only highly functional but also
                                deeply impactful, inspiring a connection between driver and machine
                            </p>
                            <h3 class="animate-text mb-3 mb-md-4">Coherency in Design
                            </h3>
                            <p class=" animate-text">
                                AVATR designs the cars destined to become your most intelligent companion, bridging
                                the gap between the physical and digital realms to ensure a seamless and meaningful
                                experience. Balancing contrasts and humanised aesthetics, we strive to create a
                                sense of oneness between product and user.
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        </div>




    </div>
@endsection
