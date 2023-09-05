<?php
use PHPMailer\PHPMailer\PHPMailer;
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'mindstrome') or die('connection failed');

// Google reCAPTCHA API key configuration 
$siteKey = '6LewRconAAAAAOmd6B9_JrbQsxVV-5ZpThtNu8nJ
'; 
$secretKey = '6LewRconAAAAAJA1ENbPs3eI7YXKodgnOotqqXHX'; 

$name = $_POST['name'];
$phone_num = $_POST['phone'];
$email = $_POST['email'];
$msg_sub = $_POST['msg_subject'];
$services = $_POST['services'];
$msg = $_POST['message'];

// Validate reCAPTCHA
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

    // Verify the reCAPTCHA response
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

    // Decode json data
    $responseData = json_decode($verifyResponse);

    // If reCAPTCHA response is valid
    if ($responseData->success) {

        $sql = "INSERT INTO `contact`(`id`, `Name`, `Phone`, `E-mail`, `Subject`, `service`, `Message`) VALUES ('','$name','$phone_num', '$email',  '$msg_sub', '$services','$msg')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['status'] = "Message sent successfully!";
            $_SESSION['status_code'] = "success";
        
            // Add an alert message to the array
            $message[] = 'Message sent successfully!';
            header("location:contact.php");
        } else {
            $_SESSION['status'] = "Message could not be sent";
            $_SESSION['status_code'] = "error";
        
            // Add an alert message to the array
            $message[] = 'Message could not be sent';
            header("location:contact.php");
        }
        
    } else {
        $_SESSION['status'] = "reCAPTCHA verification failed. Please try again.";
        $_SESSION['status_code'] = "error";
        header("location:contact.php");
    }
} else {
    $_SESSION['status'] = "Please check on the reCAPTCHA box.";
    $_SESSION['status_code'] = "error";
    header("location:contact.php");
}



// ... your existing code ...

// If reCAPTCHA response is valid
if ($responseData->success) {

    // Insert data into the database
    $sql = "INSERT INTO `contact`(`id`, `Name`, `Phone`, `E-mail`, `Subject`, `service`, `Message`) VALUES ('','$name','$phone_num', '$email',  '$msg_sub', '$services','$msg')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Message sent successfully!";
        $_SESSION['status_code'] = "success";

        // Send an email notification
        require './PHPMailer-master'; // Include PHPMailer library

        $mail = new PHPMailer;
        $mail->setFrom('amanlsa', 'Your Name');
        $mail->addAddress('recipient@example.com', 'Recipient Name');
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone_num\nMessage: $msg";

        if ($mail->send()) {
            // Email sent successfully
            header("location:contact.php");
        } else {
            // Email sending failed
            $_SESSION['status'] = "Message sent, but email notification could not be sent.";
            $_SESSION['status_code'] = "error";
            header("location:contact.php");
        }
    } else {
        $_SESSION['status'] = "Message could not be sent";
        $_SESSION['status_code'] = "error";
        header("location:contact.php");
    }
} else {
    $_SESSION['status'] = "reCAPTCHA verification failed. Please try again.";
    $_SESSION['status_code'] = "error";
    header("location:contact.php");
}

$conn->close();

?>
