<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = "New contact request: $_POST['name']";
$message = $_POST['email'];
$headers = 'From: info@websitttttttttte.com' . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('louis.mack1111@gmail.com', $subject, $message, $headers);

die('Thank you for your email');
}