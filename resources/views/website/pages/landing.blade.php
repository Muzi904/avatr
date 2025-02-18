<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVATR</title>
    <link rel="icon" type="image/png" href="{{ asset('website/images/favicon3.png') }}">
    <link rel="stylesheet" href="{{ asset('website/css/home.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #000;
            height: 100vh;
            overflow: hidden;
        }

        .main-container {
            max-width: 600px;

        }

        .main-container img {
            width: 100%;
            height: 100vh;

        }

        .main-container video {
            height: 100vh;
            width: 100%;
        }

        @media (min-width: 300px)and (max-width: 375px) {
            .main-container video {
                height: 100%;
                width: 100%;
            }

            .content-one {
                top: 24% !important;
            }

            .content-one .location {
                margin-block: 10px !important;
            }

            .content-one h4 {
                font-size: 24px;
            }

            .content-one .confirmation a {
                font-size: 50px !important;
            }
        }

        @media (min-width: 375px) and (max-width: 400px) {

            .main-container video {
                height: 100%;
                width: 100%;
            }

            .content-one {
                top: 155px !important;
            }

            .content-one .location {
                margin-top: 13px;
                margin-bottom: 18px;
            }
        }

        @media (min-width: 400px) and (max-width: 650px) {

            .main-container video {
                height: 100%;
                width: 100%;

            }

            .content-one {
                top: 182px !important;
            }
        }


        .loader {
            position: absolute;
            top: 0
        }

        .loader {
            position: fixed;
            width: 100%;
            height: 100vh;
            background-color: #000;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .loader img {
            /* width: 100%; */
            height: 100vh;
            display: flex;
            margin-inline: auto;
        }

        .content-one {
            position: absolute;
            top: 27%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            max-width: 334px;
            width: 100%;
        }

        .content-one .location {
            font-size: 12px;
            color: #fff;
            font-family: 'AVATRFont-Light';
            font-weight: 400;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .content-one h4 {
            color: #fff;
            font-family: 'AVATRFont-Regular';
            font-weight: 400;
            font-size: 24px;
            text-transform: uppercase;

        }

        .content-one span {
            color: #fff;
            font-family: 'AVATRFont-Regular';
            font-weight: 400;
            font-size: 12px;
            text-transform: uppercase;
            margin-top: 16px;
        }

        .content-one .confirmation {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .content-one .confirmation a {
            font-size: 44px;
            font-family: 'AVATRFont-Regular';
            text-decoration: none;
            line-height: 1;
            color: #c5ff1f;
            text-transform: uppercase;
            border-radius: 5px;
            padding: 5px;
            position: relative;

        }

        .content-one .confirmation a::before {
            /* background-color: #c5ff1f;
            color: #fff; */
            content: "";
            position: absolute;
            width: 0;
            bottom: 0;
            height: 2px;
            background-color: #c5ff1f;
            transition: width 0.3s ease-in-out
        }

        .content-one .confirmation a:hover::before {
            width: 100%;
        }

        .content-bottom {
            left: 50%;
            position: absolute;
            bottom: 42px;
            transform: translateX(-50%);
            width: 100%;
            text-align: center
        }

        .content-bottom p {
            font-size: 14px;
            font-family: 'AVATRFont-Light';
            font-weight: 400;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px
        }

        .content-bottom .cars {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px
        }

        .content-bottom a {
            font-size: 18px;
            font-family: 'AVATRFont-Light';
            font-weight: 400;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-underline-offset: 5px;
            text-decoration-color: #c5ff1f;
            text-decoration-thickness: 1px;
        }

        .thank-you-message {
            top: 230px !important;
        }

        .error-msg {
            top: 230px !important;
            display: none;
            color: #fff;
            text-decoration: none
        }

        .form-section {
            color: #b4d719;
            display: none;
        }

        .invitation-form {
            max-width: 260px;
            margin-inline: auto;
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;

        }

        .invitation-form .form-input {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 0;
            margin-bottom: 15px
        }


        .invitation-form .form-input label {
            font-family: 'AVATRFont-Light';
            color: #c5ff1f;
            font-size: 14px
        }

        .invitation-form .form-control {
            width: 100%;
            background-color: transparent;
            border: 1px solid #c5ff1f;
            padding: 5px;
            color: #b4d719
        }

        .invitation-form .form-control:focus {
            outline: none
        }

        .invitation-form .btn {
            padding: 5px 20px;
            height: 27px;
            border-radius: 2px;
            border: 0;
            font-size: 12px;
            margin-left: auto;
            font-family: 'AVATRFont-Light';
            color: #000;
        }

        .iti {
            width: 100% !important;
        }

        .iti__country-list {
            background-color: #000 !important;
            width: 260px !important;
        }
    </style>
</head>

<body>
    <div class="loader">
        <img src="{{ asset('website/images/landing/loader.gif') }}" alt="">
        {{-- <video autoplay muted>
            <source src="{{ asset('website/images/landing/loader.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
    </div>
    <div class="main-container">
        <video id="background-video" autoplay muted loop playsinline>
            <source src="{{ asset('website/images/landing/video1.mp4') }}" type="video/mp4">
        </video>

        {{-- <video id="background-video" autoplay muted loop playsinline
                src="{{ asset('website/images/landing/video1.mp4') }}"></video> --}}
        <div class="content-one error-msg" id="error-msg">
            <span>We're sorry that you are unable to attend this once-in-a-lifetime opportunity. <br> If you change
                your
                mind, please feel free to contact us on our WhatsApp at <br> +974 50273024 </span>
        </div>

        @if (session('page') == 'thank-you-confirm')
            <div class="content-one thank-you-message">
                <span>Thank you for your confirmation. <br> We look forward to hosting you at the launch
                    ceremony.</span>
            </div>
            {{-- @elseif (session('page') == 'thank-you-not-confirm') --}}
        @else
            <div class="content-one" id="confirm-section">
                <div>
                    <span>YOU HAVE BEEN EXCLUSIVELY SELECTED TO WITNESS THE BRAND LAUNCH OF AVATR IN QATAR. WE
                        REQUEST THE
                        HONOR OF YOUR PRESENCE.</span>
                    <br>
                    <p class="location">The Chedi Hotel, Katara | 22<sup>nd</sup> February | 7PM
                    </p>
                </div>
                <h4>Please Confirm <br> your Attendance</h4>
                <div class="confirmation">

                    <a href="#" id="confirm_yes">Yes</a>
                    <a href="#" id="confirm_no">No</a>
                </div>
            </div>
            <div class="content-one form-section" id="form-section">
                <form action="{{ route('submit-invitation') }}" method="post" id="submit-invitation">
                    @csrf
                    <div class="invitation-form">
                        <div class="form-input">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="form-input">
                            <label for="phone">Phone Number</label>
                            <input type="hidden" name="country_code" id="country_code">
                            <input type="text" id="country" name="phone" class="form-control"
                                placeholder="Enter your phone number" required>
                        </div>
                        <button class="btn" type="submit" style="cursor: pointer">Confirm</button>

                    </div>
                </form>
            </div>
        @endif
        <div class="content-bottom">
            <p>Explore AVATR</p>
            <div class="cars">
                <a href="{{ route('avatr11') }}">AVATR 11</a>
                <a href="{{ route('avatr12') }}">AVATR 12</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        const loader = document.querySelector(".loader");
        const mainContainer = document.querySelector(".main-container");
        const mainVideo = document.getElementById("background-video"); // Use getElementById for better performance

        // Ensure the main video is paused initially
        mainVideo.pause();

        // Hide loader after 3 seconds and play the main video
        setTimeout(() => {
            loader.style.display = "none"; // Hide loader
            mainContainer.style.display = "block"; // Show main content

            // Ensure the video plays
            mainVideo.play().catch(error => console.log("Autoplay blocked:", error));
        }, 3000);
    </script>

    {{-- <script>
        const loaderVideo = document.querySelector(".loader img");
        const loader = document.querySelector(".loader");
        const mainContainer = document.querySelector(".main-container");
        const mainVideo = document.querySelector(".main-container video");

        mainVideo.pause();

        loaderVideo.addEventListener("ended", () => {
            loader.style.display = "none";
            mainContainer.style.display = "block";
            setTimeout(() => {
                mainVideo.play();
            }, 300);
        });
    </script> --}}

    <script>
        document.getElementById('confirm_yes').addEventListener('click', function(e) {
            e.preventDefault();

            // Hide the confirmation section
            document.getElementById('confirm-section').style.display = 'none';

            // Show the form section
            document.getElementById('form-section').style.display = 'block';
        });

        document.getElementById('confirm_no').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('confirm-section').style.display = 'none';
            document.getElementById('error-msg').style.display = 'block';
        });
        // document.getElementById('confirm_no').addEventListener('click', function(e) {
        //     e.preventDefault(); // Prevent default action of the link
        //     document.getElementById('confirm').value = 'Not Confirmed'; // Set the value to "Not Confirmed"
        //     document.getElementById('submit-invitation').submit(); // Submit the form
        // });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector("#country");
            var iti = window.intlTelInput(input, {
                initialCountry: "qa",
                preferredCountries: ["qa", "ae", "in", "us", "gb"],
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
            document.querySelector("#country_code").value = '974';
            // Update the hidden input with the country code whenever the country changes
            input.addEventListener("countrychange", function() {
                var countryCode = iti.getSelectedCountryData().dialCode;
                document.querySelector("#country_code").value = countryCode;
            });

        });
    </script>
</body>

</html>
