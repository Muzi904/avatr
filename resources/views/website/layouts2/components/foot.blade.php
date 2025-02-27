<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<script src="{{ asset('website/script/swiper.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollSmoother.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

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
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        speed: 700,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        on: {
            autoplayTimeLeft(swiper, time, progress) {
                if (progressCircle && progressContent) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            },
            slideChangeTransitionStart: function(swiper) {
                const activeIndex = swiper.realIndex; // Get correct index
                const activeSlide = swiper.slides[swiper.activeIndex];
                const activeSlideId = activeSlide.getAttribute("id"); // Get ID of the current active slide

                // Hide all content first
                gsap.set(".content", {
                    opacity: 0,
                    y: 70,
                    display: "none"
                });

                // Show and animate only the corresponding content
                gsap.to(`.content[data-target="${activeSlideId}"]`, {
                    opacity: 1,
                    y: 0,
                    display: "block",
                    duration: 1,
                    ease: "power4.out"
                });
            }
        }
    });

    // Initial setup: Hide all content except the first slide's
    gsap.set(".content", {
        opacity: 0,
        y: 70,
        display: "none"
    });

    // Show and animate the first slide's content on load
    gsap.to('.content[data-target="slide1"]', {
        opacity: 1,
        y: 0,
        display: "block",
        duration: 0.5,
        ease: "power4.out"
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const radioInputs = document.querySelectorAll(".radio-input");
        const forms = document.querySelectorAll(".testdriveForm");

        function updateFormDisplay(selectedTarget) {
            forms.forEach(form => {
                if (form.id === selectedTarget) {
                    form.style.display = "grid";
                } else {
                    form.style.display = "none";
                }
            });
        }

        radioInputs.forEach(radio => {
            radio.addEventListener("change", function() {
                const selectedTarget = this.closest("label").dataset.target;
                updateFormDisplay(selectedTarget);
            });
        });

        // Set default visibility based on the initially checked radio
        const checkedRadio = document.querySelector(".radio-input:checked");
        if (checkedRadio) {
            updateFormDisplay(checkedRadio.closest("label").dataset.target);
        }
    });
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
