$(document).ready(function() {
    $("#contact").submit(function(event) {
        event.preventDefault();
        const name = $('#name').val();
        const email = $('#email').val();
        const subject = $('#subject').val();
        const phone = $('#phone').val();
        const message = $('#message').val();
        const invisible = $('#invisible').val();
        $('.form-message').load("../php/contactform.php", {
            name: name,
            email: email,
            subject: subject,
            phone: phone,
            message: message,
            invisible: invisible,
            checkbox: checkbox
        });
    });

    function nameCheck() {
        if ($('#name').val() === '') {
            $(this).addClass('error');
            $('#error-name').addClass('visible');
        } else {
            $(this).removeClass('error');
            $('#error-name').removeClass('visible');
        }
    };

    function emailCheck() {
        var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if ($('#email').val() === '' || !$('#email').val().match(mailFormat)) {
            $(this).addClass('error');
            $('#error-email').addClass('visible');
        } else {
            $(this).removeClass('error');
            $('#error-email').removeClass('visible');
        }
    };

    function subjectCheck() {
        if ($('#subject').val === '') {
            $(this).addClass('error');
            $('#error-subject').addClass('visible');
        } else {
            $(this).removeClass('error');
            $('#error-subject').removeClass('visible');
        }
    }

    function messageCheck() {
        if ($('#message').val === '') {
            $(this).addClass('error');
            $('#error-message').addClass('visible');
        } else {
            $(this).removeClass('error');
            $('#error-message').removeClass('visible');
        }
    }

    $('#name').on('keyup', nameCheck);
    $('#email').on('keyup', emailCheck);
    $('#subject').on('keyup', subjectCheck);
    $('#message').on('keyup', messageCheck);
    $('#submit').on('click', function(event) {
        event.preventDefault();
        nameCheck();
        emailCheck();
        subjectCheck();
        messageCheck();
    });
});