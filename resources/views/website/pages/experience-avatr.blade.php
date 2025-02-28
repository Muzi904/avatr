@extends('website.layouts.app')

@section('content')
    <section class="hero-car-details experience-page ">
        <picture>
            <source srcset="{{ asset('website/images/avatr11/hero.webp') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/avatr11/hero.webp') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="container-md">
            <div class="content experience-form ">
                <div class="contact-form  pt-5" id="form-section">
                    <div class="container">
                        <div class="grid-rows">
                            {{-- @if (session('page') == 'thank-you') --}}
                            <div class="column">
                                @if (session('page') == 'thank-you')
                                    <div class="thank-you-msg">
                                        <img src="{{ asset('website/images/thankyou.png') }}" alt="">
                                        <h3>Thanks for your Interest</h3>
                                        <p>
                                            We have received your message. We will get back to you shortly.
                                        </p>
                                    </div>
                                @else
                                    <h3 class="text-white">Experience the Future of Electric Mobility Now with AVATR</h3>
                                    <p class="text-white">AVATR invites you to experience what luxury electric mobility can
                                        offer. Book your
                                        demo drive today with an AVATR car dealer in UAE and explore the future of driving
                                        in Dubai!</p>
                                    <form action="{{ route('contact.submit') }}" method="POST">
                                        @csrf
                                        <div class="grid-rows bg-transparent">
                                            <div class="form-input">
                                                <input type="text" name="name" placeholder="First Name" required>
                                            </div>
                                            <div class="form-input">
                                                <input type="email" name="email" placeholder="Last Name" required>
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
                                                <Select>
                                                    <option value=""> Interest Model</option>
                                                    <option value=""> avatr 11</option>
                                                    <option value=""> avatr 12</option>
                                                </Select>
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
