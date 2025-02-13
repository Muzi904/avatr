<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<script src="{{ asset('website/script/swiper.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollSmoother.min.js"></script>

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
