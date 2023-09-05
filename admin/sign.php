<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../admin/assets/css/form.css">
    <!-- <title>Document</title> -->
</head>

<body>
    <div class="content">
        <div class="text">Sign Up</div>
        <form action="" method="post">
            <div class="field">
                <span class="bx bxs-user"></span>
                <input type="username" name="Username" placeholder="Username" required>
            </div>

            <!-- <div class="field">
        <span class="bx bxs-envelope"></span>
        <input type="email" placeholder="Email" required>
      </div> -->

            <div class="field">
                <span class="bx bxs-lock-alt"></span>
                <input type="password" name="Password" placeholder="Password" required>
            </div>

            <button>Sign Up</button>
            <!-- <h4>or Sign up with social platforms</h4> -->

            <!-- <div class="social_icons">
        <i class="bx bxl-facebook"></i>
        <i class="bx bxl-discord-alt"></i>
        <i class="bx bxl-twitter"></i>
        <i class="bx bxl-dribbble"></i>
      </div> -->

            <div class="foot">
                <a>Already have an account?</a>
                <a href="login.php" class="in">Sign In</a>
            </div>
        </form>

        <div class="dark-light" onclick="myFunction()">
            <i class="bx bx-moon moon"></i>
            <i class="bx bx-sun sun"></i>
        </div>
    </div>
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
</body>

</html>