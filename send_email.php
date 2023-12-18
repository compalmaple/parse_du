<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "compalmaple@gmail.com";
    $subject = "Parsed Results";
    $message = $_POST["parsedResults"];
    $headers = "From: compalmaple@gmail.com"; // Set a valid sender email address

    mail($to, $subject, $message, $headers);
}
?>
