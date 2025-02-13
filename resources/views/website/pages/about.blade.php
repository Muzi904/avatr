@extends('website.layouts2.main-app')

@section('content')
    <section class="DesignConcept_container__FeFfB">
        <div class="container">
            <div class="swiper-grid">
                <div class="content-section">
                    <div class="content" data-target="slide1">
                        <h2 class="animate-text">Intelligent Innovation</h2>
                        <p class="animate-text">AVATR vehicles are designed with advanced computing
                            power, high-voltage fast-charging capability, and a user-friendly intelligent ecosystem. </p>
                        {{-- <h2 class="animate-text">Powering
                            Your Human
                            Powers</h2>
                        <p class="animate-text">AVATR is inspired by the ancient Sanskrit word "avatar", meaning embodiment.
                            At AVATR, the word is interpreted in a more profound way, that is, to enable each user to create
                            another self in an intelligent parallel world, becoming "your most emotional intelligent
                            companion". AVATR will enable you to harness your powerful self, by advancing with you
                            relentlessly and fearlessly for the pursuit of love.</p> --}}
                    </div>
                    <div class="content" data-target="slide2">
                        <h2 class="animate-text">Seamless Connectivity </h2>
                        <p class="animate-text">Integrated with Huawei’s smart vehicle solutions, AVATR
                            ensures a seamless and intuitive driving experience</p>
                        {{-- <h2 class="animate-text">From the
                            Heart</h2>
                        <p class="animate-text">With Regards, We appreciate your free and unstrained spirit, while chasing
                            after your passion, your everlasting love, to enrich your life</p> --}}
                    </div>
                    <div class="content" data-target="slide3">
                        <h2 class="animate-text">Sustainable Future </h2>
                        <p class="animate-text">Backed by CATL’s cutting-edge battery technology, AVATR
                            supports a sustainable and eco-friendly driving future. </p>
                        {{-- <h2 class="animate-text">Every Facet
                            Represents You</h2>
                        <p class="animate-text">The AVATR brand identity is a multi-faceted polyhedron made up of lines and
                            surfaces. The convergence of lines symbolizes its indomitable spirit. The multi-surface splicing
                            reflects your abundant and graceful lifestyle where self-appreciation comes first. With
                            forward-looking design and accessible technology, we are dedicated to creating an intelligent
                            life for you beyond travel, to make you feel more abundant and graceful in your free and
                            unstrained life.</p> --}}
                    </div>

                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide" id="slide1">
                            <img class="w-100" src="{{ asset('website/images/about/img1.jpg') }}" alt="">
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide" id="slide2">
                            <img class="w-100" src="{{ asset('website/images/about/img2.jpg') }}" alt="">
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide" id="slide3">
                            <img class="w-100" src="{{ asset('website/images/about/img3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="autoplay-progress" slot="container-end">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="20"></circle>
                        </svg>
                        <span></span>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>

    <section>
        <div class="About_image-text__27DdU">
            <picture>
                <source srcset="{{ asset('website/images/about/mob-img4.png') }}" media="(max-width: 768px)">
                <img src="{{ asset('website/images/about/img4.png') }}" alt="" class="w-100" loading="lazy">
            </picture>

        </div>
    </section>

    <section class="About_image-text__27DdU">
        <picture>
            <source srcset="{{ asset('website/images/about/mob-img5.jpg') }}" media="(max-width: 768px)"><img
                src="{{ asset('website/images/about/img5.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="About_text__O8ybE">
            <h3>AVATR Technology</h3>
            <p> Elaf Motors, the sole distributor of Changan vehicles in Qatar, is expanding its footprint
                in the electric vehicle (EV) industry with the launch of AVATR in the region. AVATR
                Technology, a premium high-end smart electric vehicle (SEV) brand, is supported by industry
                leaders CHANGAN Automobile, Huawei, and CATL. With a commitment to pioneering future
                oriented mobility solutions, AVATR is set to redefine the EV landscape in Qatar. </p>
            <p>Elaf Motors brings years of expertise in the automotive sector, ensuring a seamless introduction
                of AVATR vehicles to the local market. With a strong focus on customer service, business
                efficiency, and innovation, we aim to make AVATR a leading name in Qatar’s growing EV
                industry.</p>
        </div>
    </section>

    <section class="About_image-text__27DdU">
        <picture>
            <source srcset="{{ asset('website/images/about/mob-img6.jpg') }}" media="(max-width: 768px)"><img
                src="{{ asset('website/images/about/img6.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="About_text__O8ybF">
            <h3>Mission</h3>
            <p> Offering unique and futuristic mobility experiences and lifestyles, AVATR is dedicated
                to revolutionizing smart electric mobility. We strive to enhance the driving experience through
                cutting-edge technology, intelligent solutions, and sustainable energy practices.
            </p>
        </div>
    </section>

    <section class="About_image-text__27DdU">
        <picture>
            <source srcset="{{ asset('website/images/about/mob-img7.jpg') }}" media="(max-width: 768px)"><img
                src="{{ asset('website/images/about/img7.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="About_text__O8ybF">
            <h3>Vision
            </h3>
            <p>By 2030, AVATR aims to become a globally leading high-end SEV brand, combining
                futuristic design with warm and intelligent technology. Our vision is to empower individuals to
                enhance and expand the life they pursue, creating a seamless and connected driving experience.
            </p>
        </div>
    </section>
@endsection
