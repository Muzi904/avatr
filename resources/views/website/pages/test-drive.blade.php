@extends('website.layouts2.main-app')

@section('content')
    <section class="textDrive-container">
        <div class="container">
            <h2>BOOK A TEST DRIVE</h2>
            <div class="testDrive-section">
                <form action="">
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
                                <input type="text" placeholder="Full name" name="name">
                            </div>
                            <div class="form-input">
                                <input type="text" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="text" placeholder="Phone no" name="phone">
                            </div>

                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="date" id="date-input" name="data">
                            </div>
                            <div class="form-input">
                                <input type="time" id="time-input" name="time" />
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <textarea name="" id="" cols="30" rows="2" placeholder="Enter Message" name=""></textarea>
                            </div>
                        </div>
                        <button class="btn">Submit Now</button>

                    </div>
                </form>
                {{-- <div class="testdriveForm" id="avatr12">
                    <form action="">
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="text" placeholder="Full name">
                            </div>
                            <div class="form-input">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="text" placeholder="Phone no">
                            </div>

                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="date" id="date-input">
                            </div>
                            <div class="form-input">
                                <input type="time" id="time-input">
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <textarea name="" id="" cols="30" rows="2" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <button class="btn">Submit Now</button>
                    </form>
                </div> --}}
            </div>
        </div>



    </section>
@endsection
