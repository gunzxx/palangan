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

// Fungsi untuk mendapatkan nilai cookie berdasarkan nama cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}