// CONTACT US SLICK SLIDER JS START
$(document).ready(function() {
    $('.rtl-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        fade: true,
        asNavFor: '.rtl-slider-nav-2'
    });
    $('.rtl-slider-nav-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.rtl-slider-2',
        centerMode: false,
        focusOnSelect: true,
        prevArrow: ".thumb-prev",
        nextArrow: ".thumb-next",
    });
});

// CONTACT US SLICK SLIDER JS END