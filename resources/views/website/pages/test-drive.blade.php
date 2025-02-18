@extends('website.layouts2.main-app')

@section('content')
    <section class="textDrive-container">
        <div class="container">
            <h2>BOOK A TEST DRIVE</h2>
            @if (session('page') == 'thank-you')
                <div class="container mt-5 mb-5">
                    <div class="heading">
                        <h4> Thanks For your Interests</h4>
                    </div>

                </div>
                <p class="mt-5 mb-5">Thank you for booking a test drive. We will contact you shortly.</p>
            @else
                <div class="testDrive-section">
                    <form action="{{ route('test.drive.submit') }}" method="POST">
                        @csrf
                        <div class="testdriveCars">
                            <label data-target="avatr11">
                                <input checked class="radio-input" type="radio" name="engine" value="Avart 11" />
                                <span class="radio-tile">
                                    <span class="radio-icon">
                                        <img src="{{ asset('website/images/avatr1.png') }}" alt="avtar1" />
                                    </span>
                                    <span class="radio-label">Avart 11</span>
                                </span>
                            </label>
                            <label data-target="avatr11">
                                <input class="radio-input" type="radio" name="engine" value="Avart 12" />
                                <span class="radio-tile">
                                    <span class="radio-icon">
                                        <img src="{{ asset('website/images/avatr2.png') }}" alt="avtar2" />

                                    </span>
                                    <span class="radio-label">Avatr 12</span>
                                </span>
                            </label>
                        </div>
                        <div class="testdriveForm" id="avatr11">

                            <div class="grid-rows">
                                <div class="form-input">
                                    <input type="text" placeholder="Full name" name="name" required>
                                </div>
                                <div class="form-input">
                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="grid-rows">
                                <div class="form-input">
                                    <input type="text" placeholder="Phone No" name="phone" required>
                                </div>
                                <div class="form-input">
                                    <input type="date" id="date-input" name="data" required>
                                </div>
                            </div>
                            <div class="grid-rows">

                                {{-- <div class="form-input">
                                    <input type="time" id="time-input" name="time" required />
                                </div> --}}
                            </div>
                            <div class="grid-rows">
                                <div class="form-input">
                                    <textarea name="message" id="" cols="30" rows="2" placeholder="Enter Message" name=""></textarea>
                                </div>
                            </div>
                            <button class="btn">Submit Now</button>

                        </div>
                    </form>
                </div>
            @endif
        </div>



    </section>
@endsection
