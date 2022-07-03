import Swiper from "swiper";

const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        560: {
            slidesPerView: 2
        },
        1035: {
            slidesPerView: 3
        },
        1470: {
            slidesPerView: 4
        }
    }
});
