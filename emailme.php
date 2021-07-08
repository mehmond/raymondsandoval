<?php 
if(isset($_GET['emailme'])){
    $to = "raymondramossandoval@gmail.com.com"; // My Email
    $from = $_GET['email']; // Senders' Email
    $first_name = $_GET['name'];
    $subject = "Email from my website";
    $message = $first_name . " wrote the following:" . "\n\n" . $_GET['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
