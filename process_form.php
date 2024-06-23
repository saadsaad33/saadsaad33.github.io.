<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "saadosafoh@gmail.com";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your message. We'll get back to you soon!";
}
?>