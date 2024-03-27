<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <style type="text/css">
        .home-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

    </style>
</head>
<body background="student.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">    
            Student Login
            <h6>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                ?>
            </h6>
            </center>
            <form action="login_check_student.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>

                <div>
                
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>

            <a href="index.php" class="home-btn">Home</a>


        </div>
    </center>
</body>
</html>