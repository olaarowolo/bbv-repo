<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalCode = $_POST['postal-code'];

    $to = "olasunkanmiarowolo@gmai.com"; // Enter your email address here
    $subject = "New Order Details";
    $message = "Full Name: $name\nEmail: $email\nShipping Address: $address\nCity: $city\nPostal Code: $postalCode";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the form page or a thank you page
    header("Location: thank-you.html");
    exit;
}
