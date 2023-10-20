<?php
session_start();
$conn = mysqli_connect('localhost', 'veeaargroup_mindstromedubaiit', 's(q=F1rwvnEJ', 'veeaargroup_mindstromedubaiit') or die('connection failed');
if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
   
   $query = mysqli_query($conn,"select * from sign where Username='$name' and Password='$pass'");
   $row = mysqli_fetch_assoc($query);
   
   if(mysqli_num_rows($query)==1)
   { 
    
    $_SESSION['name']=$_POST['name'];
    $_SESSION['admin']=$_POST['pass'];
    $_SESSION['status'] = "Welcome";
    $_SESSION['status_code'] = "Success";
    header("location:index.php");

   }
   else{
    $_SESSION['status'] = "Username or Password are incorrect";
    $_SESSION['status_code'] = "error";
    header("location:login.php");
   }
}

?>