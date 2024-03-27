<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body background="loginbg.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">    
            Admin Login
            <h6>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                ?>
            </h6>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="text" name="password">
                </div>

                <div>
                
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>