<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $slug = last(request()->segments());
    @endphp

    @if (!isset($slug))
        <title>AVATR Home</title>
        <meta name="title" content="home" />
        <meta name="description" content="home" />
        <meta name="keywords" content="home">
    @else
        @if ($slug == 'avatr11')
            {{--  --}}
        @elseif ($slug == 'avatr12')
            {{--  --}}
        @elseif ($slug == 'about')
            {{--  --}}
        @elseif ($slug == 'contact')
            {{--  --}}
        @elseif ($slug == 'test-drive')
            {{--  --}}
        @elseif ($slug == 'models')
            {{--  --}}
        @elseif ($slug == 'showrooms')
            {{--  --}}
        @elseif ($slug == 'invitation')
            {{--  --}}
        @endif
    @endif


    <link rel="icon" type="image/png" href="{{ asset('website/images/favicon3.png') }}">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />



</head>
