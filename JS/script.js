// $(document).ready(function () {
//     var open = false;
//
//
//     if ($(window).width() < 440) {
//         $('#menu-icon').click(function () {
//             mobileMenu();
//         });
//     } else {
//         $('#menu-icon').click(function () {
//             menu();
//         });
//     }
//
//     $('.mobile__link').click(function () {
//         if ($(window).width() < 440) {
//             mobileMenu();
//         } else {
//             menu();
//         }
//     });
//
//     $('a[href^="#"]').click(function() {
//         var target = $(this.hash);
//         if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
//         if (target.length == 0) target = $('html');
//         if ($(window).width() < 960) {
//             $('html, body').animate({ scrollTop: target.offset().top-64 }, 600);
//         } else {
//             $('html, body').animate({ scrollTop: target.offset().top-122 }, 600);
//         }
//         return false;
//     });
//
//     const menu = function () {
//
//         if (open === false) {
//
//             $('#menu').animate({
//                 right: "0px"
//             }, 400);
//
//             $('body').animate({
//                 right: "40%"
//             }, 400);
//
//
//             open = true;
//         } else {
//             $('#menu').animate({
//                 right: "-40%"
//             }, 400);
//
//             $('body').animate({
//                 right: "0px"
//             }, 400);
//
//
//             open = false;
//         }
//     };
//
//     const mobileMenu = function () {
//
//         $('.menu').addClass('menuOnMobile');
//
//         if (open === false) {
//
//             $('#menu').animate({
//                 right: "0px"
//             }, 400);
//
//             $('body').animate({
//                 right: "80%"
//             }, 400);
//
//
//             open = true;
//         } else {
//             $('#menu').animate({
//                 right: "-80%"
//             }, 400);
//
//             $('body').animate({
//                 right: "0px"
//             }, 400);
//
//
//             open = false;
//         }
//     }
// });
//
