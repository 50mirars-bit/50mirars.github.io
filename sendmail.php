<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Replace with your Gmail
    $to = "yourmail@example.com"; 
    $subject = "New Customer Delivery Details";

    $message = "Name: ".$_POST['name']."\n".
               "Contact: ".$_POST['contact']."\n".
               "Email: ".$_POST['email']."\n".
               "Address: ".$_POST['address'];

    $headers = "From: noreply@yourdomain.com";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to payment page
    header("Location: payment.html");
    exit();
}
?>
