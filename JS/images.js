var images = [
    'IMG/interior.jpeg',
    'IMG/third.jpeg',
    'IMG/zdjecie8.jpg',
    'IMG/apartament.jpg'
];

var img = document.querySelector('#image');
var backgr = document.querySelector('#main');
var index = 0;
var iterations = 0;

var updateImage = function() {
    if (index >= images.length) {
        index = 0;
    }

    $("#image").fadeOut(1000,
        function () {
            $(this).css("background-image", "url(" + images[index - 1] + ")")
                .fadeIn(1500);
        });
    img.style.animationDuration = '35s';
    img.style.transform = 'scale(0.44)';
    backgr.style.background = 'url(' + images[index] + ')';

    if (iterations >= 3) {
        clearInterval(interval);
    } else {
        index++;
    }
};

var interval = setInterval(updateImage, 10000);
updateImage();



