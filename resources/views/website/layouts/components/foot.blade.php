<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

<script src="{{ asset('website/script/swiper.js') }}"></script>

<script src="{{ asset('website/script/script.js') }}"></script>
<script src="{{ asset('website/script/navbar.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    ScrollTrigger.normalizeScroll(true)

    // create the smooth scroller FIRST!
    let smoother = ScrollSmoother.create({
        smooth: 5,
        effects: true,
        normalizeScroll: true
    });
</script>

<script>
    const menu = document.querySelector('.mobile-menu');
    const links = menu.querySelectorAll('li');
    const burger = document.querySelector('#burger');

    let tl = gsap.timeline({
        paused: true
    });

    tl.fromTo(menu, {
        x: '-100%', // Start completely off-screen to the left
        opacity: 0
    }, {
        x: '0%', // Slide in fully
        opacity: 1,
        duration: 0.7,
        zIndex: 99,
        ease: 'expo.inOut',
    }).from(links, {
        duration: 0.5,
        opacity: 0,
        x: -20, // Staggered appearance from left
        stagger: 0.1,
        ease: 'expo.inOut',
    }, "-=0.3");

    // Toggle menu on click
    let menuOpen = false;

    burger.addEventListener('click', () => {
        if (!menuOpen) {
            tl.play();
        } else {
            tl.reverse();

        }
        menuOpen = !menuOpen;
    });

    document.addEventListener('click', (event) => {
        if (menuOpen && !menu.contains(event.target) && !burger.contains(event.target)) {
            tl.reverse();
            menuOpen = false;
        }
    });
</script>

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector("#country");
        var iti = window.intlTelInput(input, {
            initialCountry: "qa",
            preferredCountries: ["qa", "ae", "in", "us", "gb"],
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
        document.querySelector("#country_code").value = '974';
        // Update the hidden input with the country code whenever the country changes
        input.addEventListener("countrychange", function() {
            var countryCode = iti.getSelectedCountryData().dialCode;
            document.querySelector("#country_code").value = countryCode;
        });

    });
</script>

<script>
    // Function to remove '?#form-section' from the URL
    function cleanUpUrl() {
        const currentUrl = window.location.href;

        // Check and remove '?#form-section' if it exists
        const updatedUrl = currentUrl.replace(/\?\#form-section$/, '');

        // Update the URL without reloading the page
        if (currentUrl !== updatedUrl) {
            window.history.replaceState(null, '', updatedUrl);
        }
    }

    // Call the function when the page loads
    window.onload = cleanUpUrl;
</script>
