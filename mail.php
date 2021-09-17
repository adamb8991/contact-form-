<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$card = $_POST['card'];
$branch = $_POST['branch'];
$formcontent="From: $name \n Message: $message \n Card Number: $card \n Branch: $branch";
$recipient = "adam.branscum@icloud.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>