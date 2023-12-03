<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Replace with your email address
  $to = 'jerrry1.tou@gmail.com'; 
  $subject = 'New Contact Form Jt Global Tradusaun';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Mail headers
  $headers = "From: $email";

  // Sending email
  if (mail($to, $subject, $body, $headers)) {
    echo '<script>alert("Message sent successfully. We will contact you shortly.");</script>';
  } else {
    echo '<script>alert("There was a problem sending your message. Please try again later.");</script>';
  }
}
?>
