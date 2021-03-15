
// SERVICES SLICK SLIDER JS START
$(document).ready(function() {
    $('.rtl-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        fade: true,
        asNavFor: '.rtl-slider-nav'
    });
    $('.rtl-slider-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.rtl-slider',
        centerMode: false,
        focusOnSelect: true,
        prevArrow: ".thumb-prev",
        nextArrow: ".thumb-next",
    });
});
// SERVICES SLICK SLIDER JS END