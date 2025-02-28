@extends('website.layouts.app')

@section('content')
    <div class="main-section">

        <section class="hero">
            <picture>
                <source srcset="{{ asset('website/images/ownership/img1.webp') }}" media="(max-width: 768px)">
                <img src="{{ asset('website/images/ownership/img1.webp') }}" alt="" class="w-100" loading="lazy">
            </picture>
            <div class="container-md">
                <div class="content hero-animated pt-3 pt-md-5">
                    <h2 class="text-white">Experience the Future of Ownership with AVATR
                    </h2>
                    <p class="text-white">Delivery is just the beginning. With AVATR, you can expect a lifetime of care
                        that’s
                        highly responsive
                        and focused on our mission to “never say no to your requests.” Our comprehensive warranty and expert
                        after-sales services for AVATR electric cars in the UAE ensure you get the most out of your vehicle.
                    </p>
                    <p class="text-white">Enjoy peace of mind with our dedicated support, offering unmatched service and
                        maintenance to keep your
                        luxury electric car performing at its best. Discover the future of mobility with AVATR, backed by a
                        commitment to excellence in the UAE automotive market.</p>
                </div>
            </div>

        </section>

        <section class="corresponding-tabs pb-0 section-padding  ">
            <div class="container-md">
                <div class="sticky-section ">
                    <a href="#warranty" class=" active">
                        Warranty and Service Package
                    </a>
                    <a href="#book-service" class="">
                        Book a Service
                    </a>
                    <a href="#roadside-assistance" class="">
                        Roadside Assistance
                    </a>
                    <a href="#app">
                        App
                    </a>
                </div>
            </div>

        </section>


        <section id="warranty" class="section-padding">

            <div class="container-md">
                <div class="row">
                    <div class="col-md-12 mb-3 mb-md-5">
                        <h1 class="animate-text">AVATR Warranty and Service
                            Package</h1>
                        <p class="animate-text">The AVATR experience is one that is constantly evolving. We’re
                            powering the future of
                            modern transport, utilising the technologies and innovations to ensure a seamless
                            journey from start to finish. avatar warranty.

                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <h3 class="animate-text">SMI Care</h3>
                    </div>
                    <div class="col-md-6 ">
                        <p class="mb-3 mb-md-4 animate-text">
                            24/7 access to our elite services and care, including your own exclusive advisor. avatar
                            warranty 24/7 support exclusive advisor</p>
                    </div>
                    <div class="col-md-6 ">
                        <h3 class="animate-text">Intelligent Driving
                        </h3>
                    </div>
                    <div class="col-md-6 ">
                        <p class="mb-3 mb-md-4 animate-text">
                            Big data and cloud wisdom offer users continuous service and seamless updating
                            throughout their journey. AVATR cloud services big data updates</p>
                        <p class="mb-3 mb-md-4 animate-text">
                            Intelligent analytics, IoT technologies, and expert inspections quickly identify risks
                            and remotely resolve software issues to deliver a carefree experience. AVATR intelligent
                            analytics IoT remote diagnostics software updates</p>
                        <div class="tags">
                            <span class="animate-text">AVATR Exclusive Advisors 24/7 Support
                            </span>
                            <span class="animate-text">Round-the-Clock AVATR Service and Assistance
                            </span>
                            <span class="animate-text">Joyful AVATR Delivery Experience
                            </span>
                            <span class="animate-text">Featured AVATR Accessories and Support
                            </span>
                            <span class="animate-text">AVATR Remote Diagnostics
                            </span>
                            <span class="animate-text">AVATR Mobile Service
                            </span>
                            <span class="animate-text">24hr Accident Rescue
                            </span>
                            <span class="animate-text">Accident Guardian Service
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <figure>
                <img class="w-100 d-flex" src="{{ asset('website/images/ownership/img2.webp') }}" alt="">
            </figure>
        </section>

        <section id="book-service" class=" section-padding">
            <div class="container-md">

                <div class="contents">
                    <div class=" ">

                        <div class="container-md">
                            <div class="row">
                                <div class="col-md-12 mb-3 mb-md-5">
                                    <h1 class="animate-text">Book a Service
                                    </h1>
                                    <p class="animate-text">Schedule your AVATR service at one of our dedicated Service
                                        Centres
                                        today.

                                    </p>
                                </div>
                                <div class="col-md-6 ">
                                    <h3 class="animate-text">One-Stop AVATR Solutions and Care
                                    </h3>
                                </div>
                                <div class="col-md-6 ">
                                    <p class="mb-3 mb-md-4 animate-text">
                                        When remote assistance isn’t enough, AVATR Care provides expert in-shop car repairs
                                        using only genuine AVATR OEM parts
                                    </p>
                                    <p class="mb-3 mb-md-4 animate-text">
                                        Our expert AVATR service teams use only fully traceable, manufacturer-supplied OEM
                                        parts
                                        for all car repairs and general maintenance
                                    </p>

                                    <a href="#" class="btn border animate-text ">Book A Service</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="roadside-assistance" class="section-padding  section-dark">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-12 mb-3 mb-md-5">
                        <h1 class="animate-text mb-3 mb-md-3">24/7 Roadside Assistance
                        </h1>
                        <p class="animate-text ">AVATR offers customers round-the-clock care that’s simple, rapid, and
                            responsive.
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <h3 class="animate-text mb-3 mb-md-4">On-Call Care You
                            Can Rely On
                        </h3>
                    </div>
                    <div class="col-md-6 ">
                        <p class="mb-3 mb-md-4 animate-text">
                            AVATR Care provides a seamless and straightforward experience. Our trained on-call advisors are
                            ready to offer assistance whenever and wherever you need it.
                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <h3 class="animate-text">Remote and Roadside Assistance
                        </h3>
                    </div>
                    <div class="col-md-6 ">
                        <p class="mb-3 mb-md-4 animate-text">
                            Whether an issue can be solved remotely, or you’re in need of emergency roadside assistance, we
                            ensure you receive the right solution in the safest and most efficient manner.
                        </p>
                        <div class="tags">
                            <span class="animate-text">One-Button Help
                            </span>
                            <span class="animate-text">Break-Down Reporting Guidance
                            </span>
                            <span class="animate-text">Unlimited Mileage and Distance Assistance
                            </span>
                            <span class="animate-text">24/7 Accident Rescue
                            </span>
                            <span class="animate-text">24/7 Accident Guardian Service
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="app" class="section-padding ">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-6 ">
                        <figure>
                            <img class="app-img animate-text " src="{{ asset('website/images/ownership/img3.webp') }}"
                                alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 ">
                        <h1 class="animate-text mb-3 mb-md-2">AVATR App
                        </h1>

                        <p class="animate-text mb-3 mb-md-2">Our exclusive App designed to power the future of intelligent
                            mobility.
                        </p>
                        <p class="animate-text mb-3 mb-md-4">The AVATR App allows human connection to thrive, helping to
                            create
                            a
                            smart lifestyle that goes beyond mere travel.
                        </p>
                        <h3 class="animate-text mb-3 mb-md-2" style="max-width: 100%">Intelligence Personified
                        </h3>
                        <p class="animate-text mb-3 mb-md-4">In an endeavour to become your most emotional intelligent
                            companion,
                            the
                            AVATR App is the ultimate tool in providing superior service, updates, and experiences for every
                            user.
                        </p>
                        <div class="tags">
                            <span class="animate-text">Subscription Models and Packages
                            </span>
                            <span class="animate-text">Fast Charging Stations
                            </span>
                            <span class="animate-text">Access to Exclusive Advisor
                            </span>
                            <span class="animate-text">Upgrades and Services
                            </span>
                            <span class="animate-text">Exclusive Experiences
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
