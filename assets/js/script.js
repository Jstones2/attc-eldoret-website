/* =========================================================
   AOS INITIALIZATION
========================================================= */

AOS.init({

    duration: 800,

    easing: "ease-in-out",

    once: true,

    offset: 80

});



/* =========================================================
   ACTIVE NAVIGATION
========================================================= */

const sections = document.querySelectorAll("section[id]");

const navLinks = document.querySelectorAll(
    ".navbar-nav .nav-link, .footer-link"
);


window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {

        const sectionTop = section.offsetTop - 150;

        const sectionHeight = section.offsetHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY < sectionTop + sectionHeight
        ) {

            current = section.getAttribute("id");

        }

    });


    navLinks.forEach(link => {

        link.classList.remove("active");

        const href = link.getAttribute("href");

        if (href === "#" + current) {

            link.classList.add("active");

        }

    });

});



/* =========================================================
   NAVBAR SHADOW ON SCROLL
========================================================= */

const navbar = document.querySelector(".main-navbar");


window.addEventListener("scroll", () => {

    if (window.scrollY > 50) {

        navbar.classList.add("navbar-scrolled");

    } else {

        navbar.classList.remove("navbar-scrolled");

    }

});

/* =========================================================
   BACK TO TOP
========================================================= */

const backToTop = document.getElementById("backToTop");


window.addEventListener("scroll", () => {

    if (window.scrollY > 400) {

        backToTop.classList.add("show");

    } else {

        backToTop.classList.remove("show");

    }

});


backToTop.addEventListener("click", () => {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});