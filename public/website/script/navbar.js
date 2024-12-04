document.querySelectorAll(".dropdown").forEach(function (dropdown) {
    let dropdownMenu = dropdown.querySelector(".dropdown-menu");
    let icon = dropdown.querySelector(".icon");

    let isMobile = window.matchMedia("(max-width: 991px)").matches;

    function closeAllDropdowns() {
        document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
            menu.style.opacity = "0";
            menu.style.display = "none";
            menu.style.visibility = "hidden";
            setTimeout(() => {
                // Hide menu after transition
            }, 300);
        });
        // Remove rotation class from all icons
        document.querySelectorAll(".dropdown i").forEach((icon) => {
            icon.classList.remove("rotate-icon");
        });
    }

    document.addEventListener("click", function (event) {
        let isClickInsideDropdown = Array.from(
            document.querySelectorAll(".dropdown")
        ).some((dropdown) => dropdown.contains(event.target));
        if (!isClickInsideDropdown) {
            closeAllDropdowns();
        }
    });

    if (isMobile) {
        dropdown.addEventListener("click", function () {
            closeAllDropdowns();
            if (dropdownMenu) {
                let isVisible = dropdownMenu.style.display === "block";
                if (isVisible) {
                    dropdownMenu.style.opacity = "0";
                    dropdownMenu.style.visibility = "hidden";
                    icon.classList.remove("rotate-icon");
                    setTimeout(() => {
                        dropdownMenu.style.display = "none";
                    }, 300);
                } else {
                    dropdownMenu.style.display = "block";
                    setTimeout(() => {
                        dropdownMenu.style.opacity = "1";
                        dropdownMenu.style.visibility = "visible";
                        icon.classList.add("rotate-icon");
                    }, 0);
                }
            }
        });
    } else {
        dropdown.addEventListener("mouseenter", function () {
            if (dropdownMenu) {
                dropdownMenu.style.display = "flex";
                setTimeout(() => {
                    dropdownMenu.style.opacity = "1";
                    dropdownMenu.style.visibility = "visible";
                    icon.classList.add("rotate-icon");
                }, 0);
            }
        });

        dropdown.addEventListener("mouseleave", function () {
            if (dropdownMenu) {
                dropdownMenu.style.opacity = "0";
                dropdownMenu.style.visibility = "hidden";
                icon.classList.remove("rotate-icon");
                setTimeout(() => {
                    dropdownMenu.style.display = "none";
                }, 300);
            }
        });
    }
});
