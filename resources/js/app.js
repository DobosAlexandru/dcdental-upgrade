
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';

import Alpine from 'alpinejs';

require('alpinejs');

Alpine.start();

import Choices from 'choices.js';

//Create multi-select
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 4, removeItemButton: true
    });
}

import Swiper from 'swiper/bundle';


import 'swiper/css/bundle';

const swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    effect: "fade",
});

var swiper2 = new Swiper('.mySwiper2', {
    slidesPerView: 4,
    scrollbar: {
        hide: true
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        },
    }
});

var swiper3 = new Swiper('.mySwiper3', {
    slidesPerView: 1,
    scrollbar: {
        hide: true
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
    }
});

var swiper4 = new Swiper('.mySwiper4', {
    slidesPerView: 4,

    scrollbar: {
        hide: true
    },

    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween:10
        },
        768: {
            slidesPerView: 3.5,
            spaceBetween: 20
        },
        1024: {
            slidesPerView: 4.5,
            spaceBetween: 20
        },
    }
});

require('./modules/dropdown.js')
require('./modules/gallery.js')
