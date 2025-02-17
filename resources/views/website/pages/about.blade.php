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
                    </div>
                    <div class="content" data-target="slide2">
                        <h2 class="animate-text">Seamless Connectivity </h2>
                        <p class="animate-text">Integrated with Huawei’s smart vehicle solutions, AVATR
                            ensures a seamless and intuitive driving experience</p>
                    </div>
                    <div class="content" data-target="slide3">
                        <h2 class="animate-text">Sustainable Future </h2>
                        <p class="animate-text">Backed by CATL’s cutting-edge battery technology, AVATR
                            supports a sustainable and eco-friendly driving future. </p>
                    </div>
                    <div class="content" data-target="slide4">
                        <h2 class="animate-text">Luxury & Performance </h2>
                        <p class="animate-text">AVATR vehicles offer a perfect blend of premium luxury,
                            futuristic design, and high-performance engineering. </p>
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
                        <div class="swiper-slide" id="slide4">
                            <img class="w-100" src="{{ asset('website/images/about/img2.jpg') }}" alt="">
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
            <h3>About Us</h3>
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
