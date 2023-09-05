<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./assets/css/form.css">
  <!-- <title>Document</title> -->
</head>

<body>
  <div class="content">
    <div class="text">Login</div>
    <form action="log.php" method="post">
      <div class="field">
        <span class="bx bxs-user"></span>
        <input type="username" name="name" placeholder="Username" required>
      </div>

      <!-- <div class="field">
        <span class="bx bxs-envelope"></span>
        <input type="email" placeholder="Email" required>
      </div> -->

      <div class="field">
        <span class="bx bxs-lock-alt"></span>
        <input type="password" name="pass" placeholder="Password" required>
      </div>

      <button name="login">login</button>
      <!-- <h4>or Sign up with social platforms</h4> -->

      <!-- <div class="social_icons">
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-discord-alt"></i>
        <i class="bx bxl-twitter"></i>
        <i class="bx bxl-dribbble"></i>
      </div> -->

      <!-- <div class="foot">
        <a>Already have an account?</a>
        <a href="sign.php" class="in">Sign In</a>
      </div> -->
    </form>

    <div class="dark-light" onclick="myFunction()">
      <i class="bx bx-moon moon"></i>
      <i class="bx bx-sun sun"></i>
    </div>
  </div>
  <script src="/assets/js/sweetalert.js"></script>
  <script>
    const body = document.querySelector("body"),
      modeToggle = document.querySelector(".dark-light");
    modeToggle.addEventListener("click", () => {
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");
      if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
      } else {
        localStorage.setItem("mode", "dark-mode");
      }
    })
  </script>
  <?php  
if(isset($_SESSION['status']) &&  $_SESSION['status'] !='' ){
?>
<script>
swal({
  title: "Sended!",
  text: "We will contact very soon!",
  icon: "success",
  button: "Done!",
});
</script>
<?php
    unset($_SESSION['status']);

}



?>
</body>

</html>