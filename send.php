<?php
&name = $_POST['name'];
&email = $_POST['email'];
&tel = $_POST['tel'];
&enquiry = $_POST['enquiry'];
&security = $_POST['security'];

$to = "fonseca414@gmail.com";
$subject = "New contact form";
$message = "A new contact request has been sent:\n\nName: $name\n\nEmail: $email\n\nTelephone: $tel\n\nEnquiry: $enquiry\n\nPlease respond within 24 hours.\n\nBest regardsm,\n\nRush Interpreters Web Team";


if ($security=="5") {
    mail($to,$subject,$message);
    header("Location:mobile.php#&ui-state=dialog?s=1");
}
else {
    header("Location:mobile.php#&ui-state=dialog?s=2");
    }

?>