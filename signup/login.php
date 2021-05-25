<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="header">

</div>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="post" action="login.php" class="sign-in-form">

                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" >
                </div>

                <div class="input-field">
                    <i class = "fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                    <button type="submit" class="btn solid" name="login_user">Login</button>
                <p class="social-text">Or Sign in with social platforms</p>
                <?php include('error.php'); ?>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
            </form>
            </div>
            </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>

                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>

            </div>
            <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>

                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>

            </div>
            <img src="img/register.svg" class="image" alt="" />
        </div>
    </div>
</div>
            <script src="rent4u-html/app.js"></script>


</body>
</html>