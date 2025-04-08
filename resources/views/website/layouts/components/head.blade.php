<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $slug = last(request()->segments());
    @endphp

    @if (!$slug)
        <title>AVATR Qatar - Al Attiya Motors | Luxury Electric Vehicles</title>
        <meta name="title" content="AVATR Qatar - Al Attiya Motors" />
        <meta name="description"
            content="AVATR Car Dealer in Qatar - Explore Luxury Electric Vehicles. Experience intelligent mobility with AI-driven performance and cutting-edge design." />
        <meta name="keywords"
            content="AVATR, AVATR Qatar, Al Attiya Motors, Electric Vehicles, Luxury EVs, Smart Electric Cars, AI Mobility, AVATR Dealership Qatar">
    @else
        @if ($slug == 'avatr11')
            <title>AVATR 11 - Luxury Electric SUV in Qatar</title>
            <meta name="description"
                content="Discover the AVATR 11, a premium smart electric SUV designed for the future. AI-powered, high-performance, and luxury redefined." />
            <meta name="keywords" content="AVATR 11, Electric SUV, Luxury EV, AI-driven SUV, Smart Cars Qatar">
        @elseif ($slug == 'avatr12')
            <title>AVATR 12 - Intelligent Coupe Sedan in Qatar</title>
            <meta name="description"
                content="Experience the AVATR 12, a stylish and intelligent electric coupe sedan blending performance, technology, and luxury." />
            <meta name="keywords" content="AVATR 12, Electric Coupe, AI Car, Smart Sedan Qatar, AVATR Cars">
        @elseif ($slug == 'about')
            <title>About AVATR Qatar - Al Attiya Motors</title>
            <meta name="description"
                content="Learn more about AVATR Qatar and Al Attiya Motors, bringing the future of smart electric vehicles to Qatar." />
            <meta name="keywords" content="AVATR Qatar, Al Attiya Motors, About AVATR, EV Dealership Qatar">
        @elseif ($slug == 'contact')
            <title>Contact AVATR Qatar - Get in Touch</title>
            <meta name="description"
                content="Contact AVATR Qatar for inquiries, test drives, or dealership information. We're here to assist you in your electric mobility journey." />
            <meta name="keywords" content="Contact AVATR, AVATR Qatar, Al Attiya Motors, EV Inquiry Qatar">
        @elseif ($slug == 'test-drive')
            <title>Book a Test Drive - AVATR Qatar</title>
            <meta name="description"
                content="Experience the future of mobility. Book a test drive of AVATR's intelligent electric vehicles at Al Attiya Motors, Qatar." />
            <meta name="keywords"
                content="AVATR Test Drive, Book Test Drive Qatar, AVATR Cars Experience, Smart EV Drive">
        @elseif ($slug == 'request-a-quote')
            <title>Request a Quote - AVATR Qatar | Get a Price Estimate</title>
            <meta name="description"
                content="Get a personalized quote for your AVATR electric vehicle. Explore pricing options and find the perfect smart EV for you in Qatar." />
            <meta name="keywords"
                content="Request Quote AVATR, AVATR Qatar Pricing, Buy AVATR Car, Electric Vehicle Price Qatar">
        @elseif ($slug == 'models')
            <title>AVATR Models - Explore Our Smart EV Lineup</title>
            <meta name="description"
                content="Explore AVATR’s lineup of smart electric vehicles, including the AVATR 11 and AVATR 12, designed for intelligent luxury mobility." />
            <meta name="keywords" content="AVATR Models, AVATR 11, AVATR 12, Smart EVs, AI-powered Cars Qatar">
        @elseif ($slug == 'showrooms')
            <title>AVATR Showrooms in Qatar - Al Attiya Motors</title>
            <meta name="description"
                content="Visit AVATR showrooms in Qatar and explore our range of smart electric vehicles. Find your nearest Al Attiya Motors dealership." />
            <meta name="keywords"
                content="AVATR Showrooms, Al Attiya Motors, AVATR Qatar Dealership, Find AVATR in Qatar">
        @elseif ($slug == 'experience-avatr')
            <title>Experience the future of electric driving - Al Attiya Motors</title>
            <meta name="description"
                content="Experience the future of electric driving. Prepare for a paradigm shift." />
            <meta name="keywords"
                content="AVATR Showrooms, Al Attiya Motors, AVATR Qatar Dealership, Find AVATR in Qatar">
        @elseif ($slug == 'discover')
            <title>Discover Avatr- Al Attiya Motors</title>
            <meta name="description"
                content="AVATR is redefining humanized mobility with futuristic designs, accessible technology, user-centric features, and best-in-class proportions." />
            <meta name="keywords"
                content="AVATR Showrooms, Al Attiya Motors, AVATR Qatar Dealership, Find AVATR in Qatar">
        @elseif ($slug == 'ownership')
            <title>Ownership Avatr- Al Attiya Motors</title>
            <meta name="description" content="Experience the Future of Ownership with AVATR" />
            <meta name="keywords"
                content="AVATR Showrooms, Al Attiya Motors, AVATR Qatar Dealership, Find AVATR in Qatar">
        @elseif ($slug == 'news')
            <title>News Avatr- Al Attiya Motors</title>
            <meta name="description" content="Latest news about Avatr" />
            <meta name="keywords"
                content="AVATR Showrooms, Al Attiya Motors, AVATR Qatar Dealership, Find AVATR in Qatar">
        @elseif ($slug == 'invitation')
            <title>Exclusive Invitation - AVATR Qatar Events</title>
            <meta name="description"
                content="Join exclusive AVATR Qatar events and experience the luxury of intelligent electric vehicles. Discover the future of AI mobility." />
            <meta name="keywords" content="AVATR Event, AVATR Qatar Invitation, Smart EV Launch, AI Mobility Events">
        @endif
    @endif


    <link rel="icon" type="image/png" href="{{ asset('website/images/favicon3.png') }}">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/home.css') }}?v={{ rand() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('website/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LL0JQQ81P3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LL0JQQ81P3');
    </script>
</head>
