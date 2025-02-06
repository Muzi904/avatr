<!DOCTYPE html>
<html lang="en">
@include('website.layouts2.components.head')

<body class="body main-body" id="main-body">

    @include('website.layouts2.components.header')


    @yield('content')

    @include('website.layouts2.components.footer')

    @include('website.layouts2.components.foot')

    @stack('scripts')


</body>

</html>
