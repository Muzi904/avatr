@extends('website.layouts.app')

@section('content')
    <style>
        .iti {
            width: 100% !important;
        }
    </style>
    <section class="home-Banner-hero">
        <picture>
            <source srcset="{{ asset('website/images/home/img1.jpg') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/home/img1.jpg') }}" alt="" class="w-100" loading="lazy">
        </picture>
    </section>

    <section class="contact-adress">
        <div class="container">
            <div class="heading">
                <h1>Contact US</h1>
                <h6>For inquiries and showroom details, please reach out to Elaf Motors. Experience the
                    future of mobility with AVATR Qatar.</h6>
            </div>
            <div class="grid-rows">
                <div class="column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.5">
                            <path
                                d="M6.4 4.76a7.92 7.92 0 0 1 11.2 11.2l-4.186 4.186a2 2 0 0 1-2.828 0L6.4 15.96a7.92 7.92 0 0 1 0-11.2Z" />
                            <circle cx="12" cy="10.36" r="3" stroke-linecap="round" />
                        </g>
                    </svg>
                    <h3>Quick Contact</h3>
                    <p>AMTC Building, Al Rayyan Road
                        (opposite Hamad Hospital)
                        Doha, Qatar</p>
                </div>
                <div class="column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="m222.37 158.46l-47.11-21.11l-.13-.06a16 16 0 0 0-15.17 1.4a8 8 0 0 0-.75.56L134.87 160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16 16 0 0 0 1.32-15.06v-.12L97.54 33.64a16 16 0 0 0-16.62-9.52A56.26 56.26 0 0 0 32 80c0 79.4 64.6 144 144 144a56.26 56.26 0 0 0 55.88-48.92a16 16 0 0 0-9.51-16.62M176 208A128.14 128.14 0 0 1 48 80a40.2 40.2 0 0 1 34.87-40a.6.6 0 0 0 0 .12l21 47l-20.67 24.74a6 6 0 0 0-.57.77a16 16 0 0 0-1 15.7c9.06 18.53 27.73 37.06 46.46 46.11a16 16 0 0 0 15.75-1.14a8 8 0 0 0 .74-.56L168.89 152l47 21.05h.11A40.21 40.21 0 0 1 176 208" />
                    </svg>
                    <h3>Get in touch</h3>
                    <a href="tel:+97444077000">+974 44077000</a>
                    <a href="mailto:crm@avatr.com">crm@avatr.com</a>
                </div>
                <div class="column">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                        <g fill="none">
                            <path
                                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                            <path fill="currentColor"
                                d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 2a1 1 0 0 1 .993.883L13 7v4.586l2.707 2.707a1 1 0 0 1-1.32 1.497l-.094-.083l-3-3a1 1 0 0 1-.284-.576L11 12V7a1 1 0 0 1 1-1" />
                        </g>
                    </svg>
                    <h3>Timing</h3>
                    <p>Saturday to Thursday</p>
                    <p> 08:00AM to 08:00PM</p>
                    <p>Fridays Closed</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="grid-rows">
                {{-- @if (session('page') == 'thank-you') --}}
                <div class="column">
                    @if (session('page') == 'thank-you')
                        <div class="thank-you-msg" id="form-section">
                            <img src="{{ asset('website/images/thankyou.png') }}" alt="">
                            <h3>Thanks for your Interest</h3>
                            <p>
                                We have received your message. We will get back to you shortly.
                            </p>
                        </div>
                    @else
                        <h3>Make an Enquiry</h3>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="grid-rows">
                                <div class="form-input">
                                    <input type="text" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-input">
                                    <input type="email" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="grid-rows">

                                <div class="form-input">
                                    <input type="hidden" name="country_code" id="country_code">

                                    <input type="text" id="country" name="phone" placeholder="Enter your phone"
                                        required>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>

                            <div class="grid-rows">
                                <div class="form-input">
                                    <textarea name="message" id="" rows="4" cols="10" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                            <button class="btn">Submit</button>
                        </form>
                    @endif
                </div>
                <div class="column">
                    <div style="width: 100%">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.4002573404005!2d51.50108497516679!3d25.290752977650772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45dba5e574e87f%3A0xef9ebcc0221f59e1!2sAl%20Attiya%20Motors%20and%20Trading%20Co.!5e0!3m2!1sen!2sae!4v1740644963152!5m2!1sen!2sae"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
