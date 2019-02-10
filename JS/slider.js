$(document).ready(function () {
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 600,
        slidesToShow: 1
    });

    $('.slider2').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        fade: true
    });
});