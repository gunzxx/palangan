document.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 90) {
        navbar.style.backgroundColor = "rgba(255, 255, 255, .7)"; // Reduced opacity
    } else {
        navbar.style.backgroundColor = "rgba(255, 255, 255, 1)"; // Full opacity
    }
});
