global.jquery = global.jQuery = global.$ = require('jquery');

$(document).on('click', '.accordion-trigger', function () {
    let target = $(this),
        parent = target.parent(),
        id = parent.attr('data-id'),
        hiddenTriggers = $('.products-block__trigger');
    parent.toggleClass('active').siblings().removeClass('active');
    hiddenTriggers.removeClass('active');
    $('.products-block__trigger[data-id=' + id + ']').addClass('active')
});

$(document).on('click', '.products-block__trigger', function () {
    let target = $(this),
        id = target.attr('data-id'),
        hiddenItems = $('.products-block__right-item');
    target.toggleClass('active').siblings().removeClass('active');
    hiddenItems.removeClass('active');
    $('.products-block__right-item[data-id=' + id + ']').addClass('active')
});