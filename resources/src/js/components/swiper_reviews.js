// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// reviews swiper
if (document.querySelector(".reviews__swiper")) {
    console.log("reviews swiper connected");
    const reviewsSwiper = new Swiper(".reviews__swiper", {
        modules: [Pagination, Navigation],
        spaceBetween: 30,
        pagination: {
            el: ".reviews__swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".reviews__swiper-button-next",
            prevEl: ".reviews__swiper-button-prev",
        },
        breakpoints: {
            480: {
                slidesPerView: 1,
            },
            481: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },

            1400: {
                slidesPerView: 4,
            },
        },
    });
}
