<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVATR</title>
    <link rel="icon" type="image/png" href="{{ asset('website/images/favicon3.png') }}">
    <link rel="stylesheet" href="{{ asset('website/css/home.css') }}">

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
                top: 145px !important;
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
            margin-top: 16px;
            margin-bottom: 24px;
        }

        .content-one h4 {
            color: #fff;
            font-family: 'AVATRFont-Regular';
            font-weight: 400;
            font-size: 28px;
            text-transform: uppercase;

        }

        .content-one span {
            color: #fff;
            font-family: 'AVATRFont-Regular';
            font-weight: 400;
            font-size: 12px;
            text-transform: uppercase
        }

        .content-one .confirmation {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content-one .confirmation a {
            font-size: 52px;
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

        .thank-you-message,
        .error-msg {
            top: 230px !important;
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
        {{-- @if (session('page') == 'thank-you-confirm') --}}
        {{-- <div class="content-one thank-you-message">
            <span>Thank you for your confirmation. <br> We look forward to hosting you at the launch
                ceremony.</span>
        </div>
        @elseif (session('page') == 'thank-you-not-confirm') --}}
        <div class="content-one error-msg">
            <span>We're sorry that you are unable to attend this once-in-a-lifetime opportunity. <br> If you change
                your
                mind, please feel free to contact us on our WhatsApp at +974 50273024 </span>
        </div>
        {{-- @else
            <form action="{{ route('submit-invitation') }}" method="post" id="submit-invitation">
                @csrf
                <div class="content-one">
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
                        <input type="hidden" name="confirm" id="confirm">
                        <input type="hidden" name="email" id="email">
                        <input type="hidden" name="name" id="name">
                        <a href="#" id="confirm_yes">Yes</a>
                        <a href="#" id="confirm_no">No</a>
                    </div>
                </div>
            </form>
        @endif --}}
        <div class="content-bottom">
            <p>Explore AVATR</p>
            <div class="cars">
                <a href="{{ route('avatr11') }}">AVATR 11</a>
                <a href="{{ route('avatr12') }}">AVATR 12</a>
            </div>
        </div>
    </div>

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
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Set the email value in the hidden input
        document.getElementById('email').value = getQueryParam('email');
        document.getElementById('name').value = getQueryParam('name');

        document.getElementById('confirm_yes').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default action of the link
            document.getElementById('confirm').value = 'Confirmed'; // Set the value to "Confirmed"
            document.getElementById('submit-invitation').submit(); // Submit the form
        });

        document.getElementById('confirm_no').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default action of the link
            document.getElementById('confirm').value = 'Not Confirmed'; // Set the value to "Not Confirmed"
            document.getElementById('submit-invitation').submit(); // Submit the form
        });
    </script>
</body>

</html>
