<link rel="stylesheet" href="{{ asset('website/css/main-header.css') }}">
<link rel="stylesheet" href="{{ asset('website/css/header.css') }}">

<header id="header">
    <div class="container-md">
        <div class="humburger" id="burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                <path fill="#fff"
                    d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h16q.425 0 .713.288T21 17t-.288.713T20 18zm0-5q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h16q.425 0 .713.288T21 7t-.288.713T20 8z" />
            </svg>
        </div>

        <ul>
            <li>
                <a class="navlink" href="{{ route('avatr11') }}">Avatr 11</a>
            </li>
            <li>
                <a class="navlink" href="{{ route('avatr12') }}">Avatr 12</a>
            </li>
            <li>
                <a class="navlink" href="{{ route('experience.avatr') }}">Experience Avatr</a>
            </li>
        </ul>
        <div class="logo">
            <a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="4em" height="2.5em" viewBox="0 0 76 63"
                    class="HeaderForPC_graphic-logo__3C7QW">
                    <defs>
                        <path id="graphic-logo_svg__a" d="M0 0h76v62.122H0z"></path>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <mask id="graphic-logo_svg__b" fill="#fff">
                            <use xlink:href="#graphic-logo_svg__a"></use>
                        </mask>
                        <path fill="#FFF"
                            d="m23.881 6.193 13.37 43.505-13.37 6.215zM51.85 3.297 38.1 48.227 24.327 3.297zm.468 52.616-13.37-6.215 13.37-43.505zm-26.294.29L38.1 50.766l12.076 5.435zm-2.656 1.314h29.464c.535 0 .803-.268.803-.802V2.785c0-.535-.268-.803-.803-.803H23.368c-.536 0-.804.268-.804.802v53.93c0 .535.268.803.804.803"
                            mask="url(#graphic-logo_svg__b)"></path>
                    </g>
                </svg><svg xmlns="http://www.w3.org/2000/svg" width="5em" height="1em" viewBox="0 0 76 14"
                    class="HeaderForPC_letter-logo__1cvY3">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M0 .122h76V14H0z"></path>
                        <path fill="#FFF"
                            d="M7.622 5.098.66 12.018h1.077a1.87 1.87 0 0 0 1.319-.544l4.708-4.68a.52.52 0 0 1 .733 0l4.709 4.68c.35.348.824.543 1.318.543h1.078L8.64 5.098a.723.723 0 0 0-1.02 0M29.476 4.888a1.87 1.87 0 0 0-1.318.544l-4.708 4.68a.52.52 0 0 1-.733 0l-4.709-4.68a1.87 1.87 0 0 0-1.318-.544h-1.078l6.962 6.92c.282.28.737.28 1.019 0l6.961-6.92zM52.883 7.567h-.644a.332.332 0 0 0-.333.333v3.785c0 .184.149.332.333.332h.644a.332.332 0 0 0 .333-.332V7.9a.332.332 0 0 0-.333-.333M58.864 5.433a1.876 1.876 0 0 0-1.322-.543H45.496l.762.755c.351.349.826.544 1.321.544h12.047zM37.515 5.098l-6.96 6.92h1.077a1.87 1.87 0 0 0 1.318-.544l4.709-4.68a.52.52 0 0 1 .733 0l4.708 4.68c.35.348.824.543 1.318.543h1.078l-6.961-6.919a.723.723 0 0 0-1.02 0M72.221 8.932h1.076a2.03 2.03 0 0 0 2.04-2.113c-.048-1.09-.995-1.93-2.092-1.93H62.508l.764.756c.352.349.828.544 1.324.544h8.656c.383 0 .727.278.76.657a.725.725 0 0 1-.726.787H62.842a.333.333 0 0 0-.334.332v3.72c0 .184.15.332.334.332h.646a.333.333 0 0 0 .333-.332V8.932h6.543l2.568 2.537c.352.351.83.548 1.328.548h1.08z">
                        </path>
                    </g>
                </svg></a>
        </div>
        <ul>
            {{-- <li><a class="navlink" href="{{ route('ownership') }}">Ownership</a></li> --}}
            <li><a class="navlink" href="{{ route('discover') }}">Discover</a></li>
            <li><a class="navlink" href="{{ route('news') }}">News</a></li>

            {{-- <li>
                <a class="navlink" href="{{ route('about') }}">About us</a>
            </li> --}}
            <!--<li><a href="{{ route('models') }}">Models</a></li>-->
            {{-- <li><a href="{{ route('models') }}">Models</a></li> --}}
            <!--<li><a href="{{ route('showrooms') }}">Showrooms</a></li>-->
            {{-- <li><a class="navlink" href="{{ route('test.drive') }}">Test drive</a></li> --}}
            {{-- <li><a class="navlink" href="{{ route('request.quote') }}">Request A Quote</a></li> --}}
            <li><a class="navlink" href="{{ route('contact') }}">Contact</a></li>
        </ul>

        <ul class="mobile-menu">
            <li><a class="navlink" href="{{ route('avatr11') }}">Avatr 11</a></li>
            <li><a class="navlink" href="{{ route('avatr12') }}">Avatr 12</a></li>
            <li><a class="navlink" href="{{ route('experience.avatr') }}">Experience Avatr</a></li>

            {{-- <li><a class="navlink" href="{{ route('ownership') }}">Ownership</a></li> --}}
            <li><a class="navlink" href="{{ route('discover') }}">Discover</a></li>
            <li><a class="navlink" href="{{ route('news') }}">News</a></li>
            <li><a class="navlink" href="{{ route('contact') }}">Contact</a></li>
            {{-- <li><a class="navlink" href="{{ route('about') }}">About us</a></li> --}}
            <!--<li><a class="navlink" href="{{ route('models') }}">Models</a></li>-->
            <!--<li><a class="navlink" href="{{ route('showrooms') }}">Showrooms</a></li>-->
            {{-- <li><a class="navlink" href="{{ route('test.drive') }}">Test drive</a></li> --}}
            {{-- <li><a class="navlink" href="{{ route('request.quote') }}">Request A Quote</a></li> --}}
        </ul>
    </div>
</header>
