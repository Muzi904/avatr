@extends('website.layouts.app')

@section('content')
    <section class="hero-car-details experience-page ">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/hero.webp') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr11/hero.webp') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="container-md">
            <div class="content experience-form ">
                <div class="contact-form  p-0" id="form-section">
                    <div class="container">
                        <div class="grid-rows">
                            {{-- @if (session('page') == 'thank-you') --}}
                            <div class="column">
                                @if (session('page') == 'thank-you')
                                    <div class="thank-you-msg">
                                        {{-- <img src="{{ asset('website/images/thank-you.png') }}" alt=""> --}}
                                        <h3 class="text-white">Thanks for your Interest</h3>
                                        <p class="text-white">
                                            We have received your message. We will get back to you shortly.
                                        </p>
                                    </div>
                                @else
                                    <h3 class="text-white">Experience the future of electric driving. <br>Prepare for a
                                        paradigm shift. </h3>
                                    <p class="text-white">AVATR is prepared to completely change how you view cars. Are you
                                        ready?
                                        Book your test drive today and prepare yourself for an experience that cannot be
                                        described. </p>
                                    <form action="{{ route('experience.submit') }}" method="POST">
                                        @csrf
                                        <div class="grid-rows bg-transparent">
                                            <div class="form-input">
                                                <input type="text" name="f_name" placeholder="First Name" required>
                                            </div>
                                            <div class="form-input">
                                                <input type="text" name="l_name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="grid-rows bg-transparent">
                                            <div class="form-input">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="form-input">
                                                <input type="hidden" name="country_code" id="country_code">

                                                <input type="text" id="country" name="phone"
                                                    placeholder="Enter your phone" required>
                                            </div>
                                        </div>
                                        <div class="grid-rows bg-transparent">
                                            <div class="form-input">
                                                <select name="model">

                                                    <option value="AVATR 11"> AVATR 11</option>
                                                    <option value="AVATR 12"> AVATR 12</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button class="btn bg-white text-dark">Book Now</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </section>
@endsection
