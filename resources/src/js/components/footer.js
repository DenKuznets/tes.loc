console.log("footer");

const px845 = "845px";
const px560 = "560px";

const footer = document.querySelector("#footer");
const footer__content = document.querySelector(".footer__content");
const footer__block1 = document.querySelector(".footer__block1");
const footer__block2 = document.querySelector(".footer__block2");
const footer__disclaimer = document.querySelector(".footer__disclaimer");
const footer__policy = document.querySelector(".footer__policy");
const footer__rights = document.querySelector(".footer__rights");
const footer__alexmedia = document.querySelector(".footer__alexmedia");
// console.log(navbar);
// const mQuery = window.matchMedia(`(max-width: ${px768})`);

// Create the query list.
const semiDesktopQuery = window.matchMedia(`(max-width: ${px845})`);
const mobileQuery = window.matchMedia(`(max-width: ${px560})`);

// Define a callback function for the event listener.
function handleSemiDesktop(mql) {
    // console.log('mql', mql);
    if (mql.matches) {
        // console.log('mql matches');
        footer__content.appendChild(footer__disclaimer);
        footer__block1.appendChild(footer__policy);
    } else {
        // console.log('mql not matches');
        footer__block2.appendChild(footer__policy);
        footer__block1.appendChild(footer__disclaimer);
    }
}

function handleMobile(mql) {
    if (mql.matches) {
        // console.log('mql matches');
        footer__block1.appendChild(footer__rights);
        footer__block1.appendChild(footer__policy);
        footer__block1.appendChild(footer__alexmedia);
        footer__block1.appendChild(footer__disclaimer);
    } else {
        // console.log('mql not matches');
        footer__content.appendChild(footer__disclaimer);
        footer__block2.appendChild(footer__rights);
        footer__block2.appendChild(footer__alexmedia);
    }
}

// Run the width change handler once.
handleSemiDesktop(semiDesktopQuery);
handleMobile(mobileQuery);

// Add the callback function as a listener to the query list.
semiDesktopQuery.addEventListener("change", handleSemiDesktop);
mobileQuery.addEventListener("change", handleMobile);
