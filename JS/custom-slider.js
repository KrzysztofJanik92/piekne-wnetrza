var images = [
    'IMG/apartament.jpg',
    'IMG/interior.jpeg',
    'IMG/third.jpeg',
    'IMG/zdjecie8.jpg'
];

var img = document.querySelector('#image');
var index = 0;
var iterations = 0;
var btnNxt = document.querySelector('#btn-nxt');
var btnPrv = document.querySelector('#btn-prv');

btnNxt.addEventListener('click', function() {
    if (index >= images.length) {
        index = 0;
    }

    $(".gallery-photo").fadeOut(1000,
        function () {
            $(".gallery-photo").css("background-image", "url(" + images[index - 1] + ")")
                // .fadeIn(500);
        });

    if (iterations >= 3) {
        clearInterval(interval);
    } else {
        index++;
    }
});

btnPrv.addEventListener('click', function() {
    if (index >= images.length) {
        index = 0;
    }

    // $(".gallery-photo").fadeOut(1000,
    //     function () {
            $(".gallery-photo").css("background-image", "url(" + images[index - 1] + ")")
                // .fadeIn(500);
        // });

    if (iterations >= 3) {
        clearInterval(interval);
    } else {
        index--;
    }
});

// var updateImage = function() {
//     if (index >= images.length) {
//         index = 0;
//     }
//
//     $("#image").fadeOut(1000,
//         function () {
//             $(this).css("background-image", "url(" + images[index - 1] + ")")
//                 .fadeIn(1500);
//         });
//     img.style.animationDuration = '35s';
//     img.style.transform = 'scale(0.44)';
//     backgr.style.background = 'url(' + images[index] + ')';
//
//     if (iterations >= 3) {
//         clearInterval(interval);
//     } else {
//         index++;
//     }
// };

// var interval = setInterval(updateImage, 10000);
// updateImage();



// function scroll() {
//     window.scrollTo(0, document.body.scrollHeight);
// }
//
// document.getElementById('contact').onclick = function () {
//     scroll();
// };

