<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $product = $_POST['product'];
  $city = $_POST['city'];

  $to = "chaitanyabarge340@gmail.com"; 
  $subject = "New Quote Request";
  $message = "Name: $name\nPhone: $phone\nProduct: $product\nCity: $city";
  $headers = "From: no-reply@yourdomain.com";

  if(mail($to, $subject, $message, $headers)) {
    echo "Thank you! Your request has been sent.";
  } else {
    echo "Sorry, there was a problem sending your request.";
  }
}
?>
}
?>
