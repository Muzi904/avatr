<!DOCTYPE html>
<html lang="en">
@include('website.layouts.components.head')

<body class="body" id="main-body">

    @include('website.layouts.components.header')


    @yield('content')

    @include('website.layouts.components.footer')

    @include('website.layouts.components.foot')
    @stack('scripts')


</body>

</html>
