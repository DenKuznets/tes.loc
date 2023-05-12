import "animate.css";

document.addEventListener("DOMContentLoaded", () => {
    // Логическая функция вывода анимация
    // elem - массив блоков или отдельный блок для анимации
    // className - класс отвечающий за анимацию

    function animate(elem, className = "animate") {
        // console.log("elem", elem);
        let windowCenter = window.innerHeight / 1 + window.scrollY; // ширина экрана * 1.1 + высота на сколько просролили экран
        elem.forEach((el) => {
            // console.log("el", el);
            let observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    // console.log(entry);
                    if (entry.isIntersecting) {
                        return entry.target.classList.add(className);
                    }
                });
            });

            let scrollOffset = el.offsetParent.offsetTop + el.offsetHeight / 2;
            if (windowCenter >= scrollOffset) {
                observer.observe(el);
            }
        });
    }

    //myp comfort animations
    // animation types
    const zoomIn = "animate__zoomIn";
    const backInRight = "animate__backInRight";
    const backInLeft = "animate__backInLeft";
    const bounceInDown = "animate__bounceInDown";
    const bounceInUp = "animate__bounceInUp";
    const fadeIn = "animate__fadeIn";
    const fadeInUp = "animate__fadeInUp";
    const fadeInDown = "animate__fadeInDown";
    const flip = "animate__flip";
    const lightSpeedInRight = "animate__lightSpeedInRight";
    const zoomInRight = "animate__zoomInRight";
    const zoomInLeft = "animate__zoomInLeft";

    // #hero
    const heroText = document.querySelectorAll(".hero__text");
    if (heroText) animate(heroText, backInLeft);
    const heroImage = document.querySelectorAll(".hero__image");
    if (heroImage) animate(heroImage, backInRight);

    // #about
    const aboutText = document.querySelectorAll(".about__content-text");
    const aboutImage = document.querySelectorAll(".about__content-image");
    if (aboutText) {
        animate(aboutText, backInLeft);
    }
    if (aboutImage) {
        animate(aboutImage, backInRight);
    }

    // #services
    const servCards = document.querySelectorAll(".services__card");
    if (servCards) {
        animate(servCards, bounceInUp);
    }
    // #reviews
    const revCards = document.querySelectorAll(".reviews__card");
    if (revCards) {
        animate(revCards, fadeInDown);
    }

    // #contacts
    const contactsText = document.querySelectorAll(".contacts__text");
    const contactsIcons = document.querySelectorAll(".contacts__social-icons");
    if (contactsText) {
        animate(contactsText, backInLeft);
    }
    if (contactsIcons) {
        animate(contactsIcons, backInRight);
    }

    window.addEventListener("scroll", () => {
        if (heroText) animate(heroText, backInLeft);
        if (heroImage) animate(heroImage, backInRight);

        if (aboutText) {
            animate(aboutText, backInLeft);
        }
        if (aboutImage) {
            animate(aboutImage, backInRight);
        }

        if (servCards) {
            animate(servCards, bounceInUp);
        }

        if (revCards) {
            animate(revCards, fadeInDown);
        }

        if (contactsText) {
            animate(contactsText, backInLeft);
        }
        if (contactsIcons) {
            animate(contactsIcons, backInRight);
        }
    });
});
