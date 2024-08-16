document.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 40) {
        navbar.style.position = "fixed";
        navbar.style.backgroundColor = "rgba(255, 255, 255, 1)";
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

const navLogo = document.querySelector('.nav-logo');
const navBody = document.querySelector('.nav-body');
let statusNav = 'open';
navLogo.addEventListener('click', function(){
    if(statusNav == 'open'){
        statusNav = 'close';
        navBody.style.height = 'max-content';
    } else if(statusNav == 'close'){
        statusNav = 'open';
        navBody.style.height = 0;
    }
});