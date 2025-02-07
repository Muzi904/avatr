@extends('website.layouts2.main-app')

@section('content')
    <section class="textDrive-container">
        <div class="container">
            <h2>BOOK A TEST DRIVE</h2>
            <div class="testDrive-section">
                <div class="testdriveCars">
                    <label data-target="avatr11">
                        <input checked class="radio-input" type="radio" name="engine" />
                        <span class="radio-tile">
                            <span class="radio-icon">
                                <img src="{{ asset('website/images/avatr1.png') }}" alt="avtar1" />
                            </span>
                            <span class="radio-label">Avart 11</span>
                        </span>
                    </label>
                    <label data-target="avatr12">
                        <input class="radio-input" type="radio" name="engine" />
                        <span class="radio-tile">
                            <span class="radio-icon">
                                <img src="{{ asset('website/images/avatr2.png') }}" alt="avtar2" />

                            </span>
                            <span class="radio-label">Avatr 12</span>
                        </span>
                    </label>
                </div>
                <div class="testdriveForm" id="avatr11">
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
                            <div class="form-input">
                                <select name="" id="">
                                    <option value="" disabled selected>Select a showroom</option>
                                    <option value="">Showroom1</option>
                                    <option value="">Showroom2</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="date" placeholder="Preferred date">
                            </div>
                            <div class="form-input">
                                <input type="time" placeholder="Preferred time">
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <textarea name="" id="" cols="30" rows="2" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <button class="btn">Submit Now</button>
                    </form>
                </div>
                <div class="testdriveForm" id="avatr12">
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
                            <div class="form-input">
                                <select name="" id="">
                                    <option value="" disabled selected>Select a car</option>
                                    <option value="">Avatr11</option>
                                    <option value="">Avatr12</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <input type="date" placeholder="Preferred date">
                            </div>
                            <div class="form-input">
                                <input type="time" placeholder="Preferred time">
                            </div>
                        </div>
                        <div class="grid-rows">
                            <div class="form-input">
                                <textarea name="" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <button class="btn">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>



    </section>
@endsection
