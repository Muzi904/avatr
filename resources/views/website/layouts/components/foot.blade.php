<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('website/script/jquery-min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
{{-- <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script> --}}
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>

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
<script>
    // image text container
    $(document).ready(function() {
        const swiper = new Swiper(".imgaewthtextbox", {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // autoplay: {
            //     delay: 3000, // 3 seconds
            //     disableOnInteraction: false,
            // },
        });
    });
</script>
<script>
    const swiper = new Swiper('.car-page', {
        slidesPerView: 1,
        loop: true, // Allows infinite looping
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        lazy: true, // Enable lazy loading for images
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const video = document.getElementById("scrollVideo");
        // Disable Picture-in-Picture
        video.disablePictureInPicture = true;
        // Check if Intersection Observer is supported
        if ("IntersectionObserver" in window) {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            video.play(); // Play video when it's in view
                        } else {
                            video.pause(); // Pause video when it's out of view
                        }
                    });
                }, {
                    threshold: 0.5, // Adjust the threshold as needed (50% of the video must be in view)
                }
            );
            observer.observe(video);
        } else {
            // Fallback for older browsers
            console.warn("Intersection Observer is not supported in this browser.");
        }
    });
</script>
