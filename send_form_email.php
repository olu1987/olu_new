<?php $title = 'contact';
$spinnerLogo = 'img/om-favicon-img.png';
?>
<?php include 'header.php'; ?>
<div class="container text-center pt-50">
<?php

if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "olu@claymoreminds.com";
    $email_subject = "Olu Meduoye Developer contact request";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        include 'footer.php';
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])  ||
        !isset($_POST['country']) ||
        !isset($_POST['subject'])||
        !isset($_POST['misc'])
    ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
    $country = $_POST['country']; // required
    $subject = $_POST['subject']; // required
    $spamFlag = $_POST['misc']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$first_name)) {
        $error_message .= 'The name you entered does not appear to be valid.<br />';
    }

    if(strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($country) < 2) {
        $error_message .= 'Please select the country you are enquiring from.<br />';
    }
    if(strlen($spamFlag) > 1) {
        $error_message .= 'SPAM BOT.<br />';
    }
    if(strlen($subject) < 2) {
        $error_message .= 'Please select the subject of your enquiry.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";

// create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>

    <p>Thanks for getting in touch. I'll get back to you as soon as possible. </p>
    <a href="index.php">Home</a>

    <?php

}
?>
</div>
<?php include 'footer.php'; ?>
