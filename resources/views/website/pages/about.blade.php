@extends('website.layouts2.main-app')

@section('content')
    <section class="DesignConcept_container__FeFfB">
        <div class="container">
            <div class="swiper-grid">
                <div class="content-section">
                    <div class="content" data-target="slide1">
                        <h2 class="animate-text">Powering
                            Your Human
                            Powers</h2>
                        <p class="animate-text">AVATR is inspired by the ancient Sanskrit word "avatar", meaning embodiment.
                            At AVATR, the word is interpreted in a more profound way, that is, to enable each user to create
                            another self in an intelligent parallel world, becoming "your most emotional intelligent
                            companion". AVATR will enable you to harness your powerful self, by advancing with you
                            relentlessly and fearlessly for the pursuit of love.</p>
                    </div>
                    <div class="content" data-target="slide2">
                        <h2 class="animate-text">From the
                            Heart</h2>
                        <p class="animate-text">With Regards, We appreciate your free and unstrained spirit, while chasing
                            after your passion, your everlasting love, to enrich your life</p>
                    </div>
                    <div class="content" data-target="slide3">
                        <h2 class="animate-text">Every Facet
                            Represents You</h2>
                        <p class="animate-text">The AVATR brand identity is a multi-faceted polyhedron made up of lines and
                            surfaces. The convergence of lines symbolizes its indomitable spirit. The multi-surface splicing
                            reflects your abundant and graceful lifestyle where self-appreciation comes first. With
                            forward-looking design and accessible technology, we are dedicated to creating an intelligent
                            life for you beyond travel, to make you feel more abundant and graceful in your free and
                            unstrained life.</p>
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
            <p>Founded in 2018, AVATR Technology commits to exploring future-oriented humanized
                mobility technologies and creating a warm and intelligent user experience. AVATR, inspired by ‘avatar’, aims
                to enable each and every user to create another self in an intelligent parallel world, becoming “your most
                emotional intelligent companion”.</p>
            <p>As an explorer in the new track of smart electric vehicles (SEV), AVATR Technology
                is committed to building an international high-end SEV brand. Supported by Changan Automobile, Huawei, and
                CATL in vehicle R&amp;D and intelligent manufacturing, intelligent vehicle solutions, and intelligent energy
                ecology, AVATR Technology is making the most of the jointly built, featuring an all new SEV architecture
                with "a new architecture, strong computing power, and high-voltage charging capability". Based on the new
                cooperation model, AVATR Technology mastered the SEV industries' core competency which achieved complete
                autonomy in China domestically. The company is headquartered in Chongqing, China, with branches in Shanghai,
                China and Munich, Germany.</p>
        </div>
    </section>

    <section class="About_image-text__27DdU">
        <picture>
            <source srcset="{{ asset('website/images/about/mob-img6.jpg') }}" media="(max-width: 768px)"><img
                src="{{ asset('website/images/about/img6.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="About_text__O8ybF">
            <h3>Mission</h3>
            <p>Offering Unique and Futuristic Mobility Experiences and Lifestyle
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
            <p>Become a global leading high-end SEV company in 2030 through futuristic design and warm and caring technology
            </p>
        </div>
    </section>
@endsection
