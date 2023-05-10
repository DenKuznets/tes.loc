import Swiper, { Autoplay, Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

console.log("swiper here");

// bath swiper
if (document.querySelector(".works__swiper")) {
    console.log('swiper connected');
    const worksSwiper = new Swiper(".works__swiper", {
        modules: [Pagination, Navigation],
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}
