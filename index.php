<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $POST['message'];
  $from = 'Personal Website';
  $subject = 'Hello';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  if ($_POST['submit'] && $human == '5') {
    if (mail ($to, $subject, $body, $from)) {
      echo '<p>Your message has been sent!</p>';
    }
    else {
      echo '<p>Something went wrong, go back and try again!</p>';
    }
  else if ($_POST['submit'] && $human != '5') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
  }
?>
