<?php
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $invisible = $_POST['invisible'];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)) {
        echo "<span class='error'>Wypełnij wszystkie pola formularza</span>";
        $errorEmpty = true;
    } elseif (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='error'>Niepoprawny format formularza</span>";
        $errorEmail = true;
    } elseif (!empty($invisible)) {
        echo "<span class='error'>jesteś botem</span>";
        $errorEmail = true;
    } else {
        $mailTo = 'biuro@eports.pl';
        $headers = "From: testing@zonen.pl\r\n";
        $txt = "Nadawca: " . $name . ".\n" . "tel: " . $phone . ".\n" . "e-mail: " . $mailFrom . ".\n" . "Temat: " . $subject . ".\n\n" . "Wiadomość: " . "\n\n" . $message;

        mail($mailTo, $subject, $txt, $headers);

        echo "<span class='success'>Wiadomość została wysłana!</span>";
    }
?>

<script>
    var allIValidateInputs = $('#name, #email, #subject, #message');
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    allIValidateInputs.removeClass("error");

    if (errorEmpty == true) {
        allIValidateInputs.addClass("error");
    }
    if (errorEmail == true) {
        $('#email').addClass("error");
    }
    if (errorEmpty == false && errorEmail == false) {
        allIValidateInputs.val("");
        $('#phone').val("");
    }
</script>
