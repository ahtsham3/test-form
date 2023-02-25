<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "sahotraa07@gmail.com"; // replace with your email address
  $subject = "New Contact Message";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  if(mail($to, $subject, $body)){
    echo "<p>Your message has been sent successfully!</p>";
  } else {
    echo "<p>There was a problem sending your message. Please try again later.</p>";
  }
}
?>