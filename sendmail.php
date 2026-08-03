<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $landmark = $_POST['landmark'];
    $address = $_POST['address'];

    $to = "50mirars@gmail.com";
    $subject = "New Delivery Details Submission";
    $message = "
    <h2>Customer Delivery Details</h2>
    <p><strong>First Name:</strong> $fname</p>
    <p><strong>Last Name:</strong> $lname</p>
    <p><strong>Contact Number:</strong> $contact</p>
    <p><strong>Mail ID:</strong> $email</p>
    <p><strong>City:</strong> $city</p>
    <p><strong>State:</strong> $state</p>
    <p><strong>Pincode:</strong> $pincode</p>
    <p><strong>Landmark:</strong> $landmark</p>
    <p><strong>Address:</strong> $address</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@yourdomain.com" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: payment.html");
        exit();
    } else {
        echo "Error sending email. Please try again.";
    }
}
?>
