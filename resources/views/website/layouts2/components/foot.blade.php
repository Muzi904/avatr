<script src="{{ asset('website/script/bootstrap-miin.js') }}"></script>
<script src="{{ asset('website/script/swiper.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>



<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiper = new Swiper('.mySwiper', {
        allowTouchMove: false,
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
            slideChangeTransitionStart: function() {
                const activeIndex = swiper.realIndex; // Get the correct active slide index
                const activeSlideId = swiper.slides[activeIndex].id; // Get the ID of the active slide

                // Immediately hide all content before showing the new one
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
