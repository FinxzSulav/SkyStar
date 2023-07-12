<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'adventurefromrental@gmail.com'; // Replace with your email address
  $subject = 'New message from website contact form';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo 'Message sent successfully.';
  } else {
    echo 'Error sending the message.';
  }
}
?>
