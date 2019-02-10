var mn = $("#mainNav");
var mobileMenuButton = $('#hamburger-menu');
var menu = $('#mobile-menu');
var closeMenu = $('#mobile-close');
var link = $('.mobile-menu-center__link');
var logo = $('#logo');
var mobileLogo = $('#mobile-logo');
var daneFirmyBtn = $('#dane-firmy-btn');
var daneFirmyBtnBackToMenu = $('#mobile-back-to-menu');
var daneFirmy = $('#dane-firmy-mobile');
var showYear = $('#year');
var showEmailBtn = $('#show-email');
mns = "main-nav-scrolled";
hdr = $('.header').height();

$(document).ready(function () {
    var year = new Date().getFullYear();
    document.getElementById('year').innerText = year;
});

$(window).scroll(function () {
    if ($(this).scrollTop() > hdr) {
        mn.addClass(mns);
    } else {
        mn.removeClass(mns);
    }
});

mobileMenuButton.click(function () {
    var show = 'show-mobile-menu';
    menu.addClass(show);
});

closeMenu.click(function () {
    var show = 'show-mobile-menu';
    menu.removeClass(show);
});

link.click(function () {
    var show = 'show-mobile-menu';
    menu.removeClass(show);
});

daneFirmyBtn.click(function () {
    var show = 'show-mobile-menu';
    daneFirmy.addClass(show);
});

daneFirmyBtnBackToMenu.click(function () {
    var show = 'show-mobile-menu';
    var noEmail = 'pokaz email';

    document.getElementById('show-email').innerText = noEmail;
    daneFirmy.removeClass(show);
});

showEmailBtn.click(function () {
    var email = 'marcin.janik' + '@' + 'op.pl';
    document.getElementById('show-email').innerText = email;
});

logo.click(function () {
    scrollTop();
});

mobileLogo.click(function () {
    scrollTop();
});

function scrollTop() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, 600, 'swing', function() {});
}

function scroll() {
    var body = $("html, body");
    body.stop().animate({scrollTop: $(document).height()}, 600, 'swing', function() {});
}

document.getElementById('contact').onclick = function () {
    scroll();
};

document.getElementById('mobile-contact').onclick = function () {
    scroll();
};

$('a[href^="#"]').click(function() {
    var target = $(this.hash);
    if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
    if (target.length == 0) target = $('html');
    if ($(window).width() < 960) {
        $('html, body').animate({ scrollTop: target.offset().top-64 }, 600);
    } else {
        $('html, body').animate({ scrollTop: target.offset().top-88 }, 600);
    }
    return false;
});



// function lockOrientation() {
//     debugger;
//     const isPortrait = window.innerHeight > window.innerWidth;
//
//     if (screen.width <= 1024 && screen.width >= 480 && isPortrait) {
//         screen.lockOrientation("landscape-primary");
//         alert('tablet')
//     }
// }
//
// window.onload = function () {
//     lockOrientation();
// }

