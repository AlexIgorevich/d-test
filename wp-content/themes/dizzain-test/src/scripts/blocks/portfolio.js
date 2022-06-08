import Swiper, {Navigation, Pagination} from 'swiper';
import 'swiper/css/bundle';

const swiper = new Swiper('.portfolio-block__slider', {
    speed: 400,
    spaceBetween: 25,
    slidesPerView: 1.26,
    observer: true,
    modules: [Navigation, Pagination],
    pagination: {
        el: '.portfolio-block__slider-pagination'
    },
    navigation: {
        nextEl: '.portfolio-block__slider-button-next',
        prevEl: '.portfolio-block__slider-button-prev'
    },
    breakpoints: {
        400: {
            slidesPerView: 1.5,
        },
        500: {
            slidesPerView: 2.1,
        },
        600: {
            slidesPerView: 3.1,
        },
        800: {
            slidesPerView: 4,
            spaceBetween: 28,
        }
    }
});