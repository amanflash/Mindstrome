<?php	
session_start();

include 'conn.php';

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
            header("location:thank-you.php");
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
} else {
    $_SESSION['status'] = "Please check on the reCAPTCHA box.";
    $_SESSION['status_code'] = "error";
    header("location:contact.php");
}

$conn->close();
?>
