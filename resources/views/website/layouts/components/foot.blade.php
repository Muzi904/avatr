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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabContainers = document.querySelectorAll(".tabs-container"); // Select all tab groups

        tabContainers.forEach((container) => {
            const tabs = container.querySelectorAll(".tabs .tab");
            const imageContents = container.querySelectorAll(
                ".tab-content .content:not(.content-text)"
            ); // Image/video content
            const textContents = container.querySelectorAll(
                ".tab-content .content.content-text"
            ); // Text content
            const tabsWrapper = container.querySelector(".tabs"); // Tabs container

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    // Remove active class from all tabs, image contents, and text contents in the current container
                    tabs.forEach((t) => t.classList.remove("active"));
                    imageContents.forEach((c) => c.classList.remove("active"));
                    textContents.forEach((c) => c.classList.remove("active"));

                    // Add active class to the clicked tab
                    tab.classList.add("active");

                    // Get the target image and text content
                    const imageTarget = container.querySelector(tab.dataset.target);
                    const textTarget = container.querySelector(tab.dataset.textTarget);

                    // Add active class to the corresponding image and text content
                    if (imageTarget) imageTarget.classList.add("active");
                    if (textTarget) textTarget.classList.add("active");

                    // Center the active tab
                    if (tabsWrapper) {
                        const tabRect = tab.getBoundingClientRect();
                        const tabsRect = tabsWrapper.getBoundingClientRect();
                        const offset = tabRect.left - tabsRect.left + tabRect.width /
                            2 - tabsRect.width / 2;
                        tabsWrapper.scrollBy({
                            left: offset,
                            behavior: "smooth",
                        });
                    }
                });
            });
        });
    });

    // document.addEventListener("DOMContentLoaded", () => {
    //     const tabContainers = document.querySelectorAll(".tabs-container"); // Select all tab groups

    //     tabContainers.forEach((container) => {
    //         const tabs = container.querySelectorAll(".tabs .tab");
    //         const imageContents = container.querySelectorAll(
    //             ".tab-content .content:not(.content-text)"
    //         ); // Image/video content
    //         const textContents = container.querySelectorAll(
    //             ".tab-content .content.content-text"
    //         ); // Text content

    //         tabs.forEach((tab) => {
    //             tab.addEventListener("click", () => {
    //                 // Remove active class from all tabs, image contents, and text contents in the current container
    //                 tabs.forEach((t) => t.classList.remove("active"));
    //                 imageContents.forEach((c) => c.classList.remove("active"));
    //                 textContents.forEach((c) => c.classList.remove("active"));

    //                 // Add active class to the clicked tab
    //                 tab.classList.add("active");

    //                 // Get the target image and text content
    //                 const imageTarget = container.querySelector(tab.dataset.target);
    //                 const textTarget = container.querySelector(
    //                     tab.dataset.textTarget
    //                 );

    //                 // Add active class to the corresponding image and text content
    //                 if (imageTarget) imageTarget.classList.add("active");
    //                 if (textTarget) textTarget.classList.add("active");
    //             });
    //         });
    //     });
    // }); 
</script>
