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
            preferredCountries: ["qa"],
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
        $(window).scrollTop($('#form-section').offset().top - 500);
    }

    // Call the function when the page loads
    window.onload = cleanUpUrl;
</script>

{{-- autoplay text  --}}
<script>
    let SwiperTop = new Swiper('.swiper--top', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 30000,
        loopedSlides: 1,
        autoplay: {
            delay: 1,
        },
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: false,
        disableOnInteraction: true
    });

    let SwiperBottom = new Swiper('.swiper--bottom', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 30000,
        autoplay: {
            delay: 1,
            reverseDirection: true
        },
        loop: true,
        loopedSlides: 1,
        slidesPerView: 'auto',
        allowTouchMove: false,
        disableOnInteraction: true
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".car-models", {
            loop: true, // Enables infinite loop
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            speed: 800, // Transition speed
        });
    });
</script>

<script>
    gsap.registerPlugin(TimelineMax);

    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
    const tabImages = document.querySelectorAll("[id^='tab-img']"); // Select all images
    let currentIndex = 0;
    const duration = 3; // Time each accordion stays open

    tabImages.forEach((img, index) => {
        img.style.display = index === 0 ? "block" : "none";
    });

    function toggleAccordion(index) {
        const accordionItemHeader = accordionItemHeaders[index];
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        const progressBar = accordionItemBody.querySelector(".service-line");
        const targetImageId = accordionItemHeader.getAttribute("data-target");

        // Close all other accordions and reset progress bars
        accordionItemHeaders.forEach((header, i) => {
            const body = header.nextElementSibling;
            const bar = body.querySelector(".service-line");
            if (i !== index) {
                header.classList.remove("active");
                body.style.maxHeight = 0;
                gsap.set(bar, {
                    width: "0%"
                });
            }
        });

        // Open the selected accordion
        accordionItemHeader.classList.add("active");
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";

        // Reset and animate the progress bar
        gsap.set(progressBar, {
            width: "0%"
        });
        gsap.to(progressBar, {
            width: "100%",
            duration: duration,
            ease: "linear"
        });

        // Change the displayed image
        tabImages.forEach(img => img.style.display = "none"); // Hide all images
        document.querySelector(targetImageId).style.display = "block"; // Show targeted image
    }

    // Autoplay function
    function autoplayAccordion() {
        gsap.to({}, {
            duration: duration,
            onComplete: () => {
                toggleAccordion(currentIndex);
                currentIndex = (currentIndex + 1) % accordionItemHeaders.length; // Loop back to first
                autoplayAccordion();
            }
        });
    }

    // Initialize the first accordion and progress bar immediately
    setTimeout(autoplayAccordion, 100);


    // Allow manual click while keeping autoplay
    accordionItemHeaders.forEach((header, index) => {
        header.addEventListener("click", () => {
            toggleAccordion(index);
            currentIndex = index; // Update index in case user manually selects
        });
    });
</script>


<script>
    $(function() {
        // (Optional) Active an item if it has the class "is-active"	
        $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();

        $(".accordion > .accordion-item").click(function() {
            // Cancel the siblings
            $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel")
                .slideUp();
            // Toggle the item
            $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
        });
    });
</script>

<script>
    document.getElementById('play_button').addEventListener('click', function() {
        var video = document.getElementById('video');
        video.play();
        document.getElementById('play_button').classList.add('d-none')
    })
    document.getElementById('video').addEventListener('click', function() {
        video.pause();
        document.getElementById('play_button').classList.remove('d-none')
    })
</script>


<script>
    const tl1 = gsap.timeline();

    // Set initial opacity and position for all .hero-animated elements
    gsap.set(".hero-animated", {
        opacity: 0,
        y: 100
    });

    tl1.to(".hero-animated", {
        duration: 1.5, // Reduced for a smoother feel
        opacity: 1,
        y: 0,
        ease: "power4.out",
        delay: 0.5,
        stagger: 0.2
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    document.querySelectorAll(".animate-text").forEach((element) => {
        gsap.set(element, {
            opacity: 0,
            y: 100
        }); // Set initial state

        gsap.to(element, {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 1,
            ease: "power4.out",
            scrollTrigger: {
                trigger: element, // Each element triggers its own animation
                start: "top 80%", // Adjust when animation starts
                toggleActions: "play none none none", // Runs only once
                // markers: true,
            },
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const targetDiv = document.querySelector(".corresponding-tabs");
        const offsetTop = targetDiv.offsetTop; // Store the original position

        window.addEventListener("scroll", function() {
            if (window.scrollY >= offsetTop) {
                targetDiv.classList.add("scrolled"); // Add class when it reaches the top
            } else {
                targetDiv.classList.remove("scrolled"); // Remove class when scrolling back
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll(".sticky-section a");
        const sections = document.querySelectorAll("section[id]");
        let isScrollingManually = false;

        function changeActiveSection() {
            if (isScrollingManually) return;

            let scrollPosition = window.scrollY + 100;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute("id");

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    document.querySelector(".sticky-section a.active")?.classList.remove("active");
                    document.querySelector(`.sticky-section a[href="#${sectionId}"]`)?.classList.add(
                        "active");
                }
            });
        }

        function smoothScroll(event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                isScrollingManually = true;

                // Detect screen width and adjust offset accordingly
                const offset = window.innerWidth <= 768 ? 100 : 50; // Mobile: 100px, Desktop: 50px

                window.scrollTo({
                    top: targetSection.offsetTop - offset,
                    behavior: "smooth"
                });

                document.querySelector(".sticky-section a.active")?.classList.remove("active");
                this.classList.add("active");

                setTimeout(() => {
                    isScrollingManually = false;
                    changeActiveSection();
                }, 600);
            }
        }

        window.addEventListener("scroll", changeActiveSection);
        navLinks.forEach(link => link.addEventListener("click", smoothScroll));
    });
</script>
