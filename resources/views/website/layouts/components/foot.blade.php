<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<!-- jQuery -->
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="{{ asset('website/script/jquery-min.js') }}"></script>

<script src="{{ asset('website/script/swiper.js') }}"></script>

<script src="{{ asset('website/script/script.js') }}"></script>
<script src="{{ asset('website/script/navbar.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif
    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>