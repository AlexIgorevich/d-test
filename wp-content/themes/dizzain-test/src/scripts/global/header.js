global.jquery = global.jQuery = global.$ = require('jquery');
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    let header = $('.header');
    if (header.length > 0) {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            header.addClass('header-scrolled');
        } else {
            header.removeClass('header-scrolled');
        }
    }
}