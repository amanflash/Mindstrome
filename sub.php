<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'mindstrome') or die('connection failed');


$email = $_POST['email'];


$sql = "INSERT INTO `subscriber`(`emails`) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
   
    header("location:index.php");
} else {
    
    header("location:index.php");
}

$conn->close();
?>
