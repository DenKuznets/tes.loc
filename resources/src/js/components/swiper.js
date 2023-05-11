// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// works swiper
if (document.querySelector(".works__swiper")) {
    console.log("swiper connected");
    const worksSwiper = new Swiper(".works__swiper", {
        modules: [Pagination, Navigation],
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            750: {
                slidesPerView: 1,
            },
            751: {
                slidesPerView: 2,
            },
        },
    });
}
