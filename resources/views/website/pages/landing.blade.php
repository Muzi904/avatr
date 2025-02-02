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

        @media screen and (max-width:768px) {
            .main-container video {
                height: 100%;
                width: 100%;

            }

            .content-one {
                top: 29% !important;
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
            top: 34%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            max-width: 274px;
            width: 100%;
        }

        .content-one h4 {
            color: #fff;
            font-family: 'AVATRFont-Light';
            font-weight: 400;
            font-size: 28px;
            text-transform: uppercase
        }

        .content-one .confirmation {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content-one .confirmation a {
            font-size: 62px;
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
        <div class="content-one">
            <h4>Please Confirm your Attendance</h4>
            <div class="confirmation">
                <a href="#">Yes</a>
                <a href="#">No</a>
            </div>
        </div>
        <div class="content-bottom">
            <p>Explore AVATR</p>
            <div class="cars">
                <a href="#">AVATR 11</a>
                <a href="#">AVATR 12</a>
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
</body>

</html>
