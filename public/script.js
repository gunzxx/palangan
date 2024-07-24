document.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 40) {
        navbar.style.position = "fixed";
        navbar.style.backgroundColor = "rgba(255, 255, 255, .7)";
    } else {
        navbar.style.position = "static";
        navbar.style.backgroundColor = "rgba(255, 255, 255, 1)";
    }
});
