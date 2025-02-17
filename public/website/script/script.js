// nabar
const header = document.querySelector("header");

// Optional: Handle the "scrolled" state
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});

// hero
$(document).ready(function () {
    var swiper = new Swiper(".swiper-container-h", {
        direction: "horizontal",
        effect: "slide",
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        parallax: true,
        speed: 1600,
        rtl: true,
        loop: true,
        loopFillGroupWithBlank: !0,

        // mousewheel: {
        //     eventsTarged: ".swiper-slide",
        //     sensitivity: 1,
        // },
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            draggable: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
    });
    var swiper = new Swiper(".swiper-container-h1", {
        direction: "horizontal",
        effect: "slide",
        autoplay: false,
        parallax: true,
        speed: 1600,
        rtl: true,
        loop: true,
        loopFillGroupWithBlank: !0,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
            draggable: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: "true",
        },
    });
});

// tabs
document.querySelectorAll(".tab-btn").forEach((tabBtn) => {
    tabBtn.addEventListener("mouseover", () => {
        const tabId = tabBtn.getAttribute("data-tab"); // Get the tab panel ID
        const tabImageId = tabBtn.getAttribute("data-image"); // Get the corresponding image ID

        // Deactivate all tabs, panels, and images
        document
            .querySelectorAll(".tab-btn")
            .forEach((btn) => btn.classList.remove("active"));
        document
            .querySelectorAll(".tab-panel")
            .forEach((panel) => panel.classList.remove("active"));
        document
            .querySelectorAll(".tab-image")
            .forEach((img) => img.classList.remove("active"));

        // Activate hovered tab and its panel
        tabBtn.classList.add("active");
        const panel = document.getElementById(tabId);
        if (panel) {
            panel.classList.add("active");
        }

        // Activate the corresponding image based on the data-image value
        const targetImage = document.querySelector(
            `.tab-image[data-image="${tabImageId}"]`
        );
        if (targetImage) {
            targetImage.classList.add("active");
        }
    });
});

// color variants
document.querySelectorAll(".tab-btn-color").forEach((tabBtn) => {
    tabBtn.addEventListener("click", () => {
        // Deactivate all primary tabs and panels
        document.querySelectorAll(".tab-btn-color").forEach((btn) => {
            btn.classList.remove("active");
        });
        document.querySelectorAll(".tab-panel-color").forEach((panel) => {
            panel.classList.remove("active");
        });

        // Activate clicked tab and its associated panel
        tabBtn.classList.add("active");
        const targetId = tabBtn.getAttribute("data-target");
        document.getElementById(targetId).classList.add("active");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Function to handle color variant switching for a specific container
    function handleColorVariants(containerClass) {
        var container = document.querySelector(`.${containerClass}`);
        if (!container) return;

        var buttons = container.querySelectorAll(".colors button");

        buttons.forEach((button) => {
            button.addEventListener("mouseover", function () {
                var targetId = this.getAttribute("data-target");

                // Hide all figure elements (images) within this container
                container
                    .querySelectorAll(".images figure")
                    .forEach((figure) => {
                        figure.classList.add("d-none");
                    });

                // Hide all text elements (color names) within this container
                container.querySelectorAll("[id$='-text']").forEach((text) => {
                    text.classList.add("d-none");
                });

                // Show the selected image
                var targetFigure = container.querySelector(`#${targetId}`);
                if (targetFigure) {
                    targetFigure.classList.remove("d-none");
                }

                // Show the selected text
                var targetText = container.querySelector(`#${targetId}-text`);
                if (targetText) {
                    targetText.classList.remove("d-none");
                }

                // Remove 'active' class from all buttons in this container, then add to the hovered button
                buttons.forEach((btn) => btn.classList.remove("active"));
                this.classList.add("active");
            });
        });
    }

    // Initialize for each container
    // handleColorVariants("avatr11");
    // handleColorVariants("avatr12");
});

const swiperQuiz = new Swiper(".animeslide", {
    effect: "fade",
    loop: true,
    speed: 900,
    centeredSlides: true,
    navigation: {
        nextEl: ".animeslide-button-next",
        prevEl: ".animeslide-button-prev",
    },
    scrollbar: {
        el: ".animeslide-scrollbar",
        draggable: false,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});

// iamge scroll fulll width
gsap.registerPlugin(ScrollTrigger);

const container = document.querySelector(".next-section");

gsap.timeline({
    scrollTrigger: {
        trigger: container,
        start: "top 60%", // Trigger when the top of the container reaches 60% of the viewport height
        end: "bottom 20%", // End when the bottom reaches 20% of the viewport height
        toggleActions: "restart none none reverse", // Adjust behavior when scrolling
        scrub: true, // Syncs the animation with the scroll
        // markers: true, // Show markers for debugging
    },
}).to(container, {
    scale: 1.3,
});

// overflow tabs
