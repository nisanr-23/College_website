<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <!--<link rel="stylesheet" href="login.css">-->
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(45deg, #3498db, #fad0c4);
        }
        .login-container {
            background: linear-gradient(45deg, #66a6ff, #89f7fe);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            background-clip: padding-box; /* Ensure the gradient doesn't overflow the border-radius */
        }

        h2 {
            color: #3f51b5;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #9e9e9e;
            border-radius: 4px;
            background-color: #ffffff;
            color: #333;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #3f51b5;
        }

        button {
            background-color: #3f51b5;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #303f9f;
        }

        .error-message {
            color: #f44336;
            margin-top: 15px;
        }
        .home-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
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
<body background="loginbg.jpg" class="body_deg">
    <center>
        <div class="login-container">
            <center class="title_deg">
            <h2>    
            Admin Login
            </h2>
            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];
                ?>
            </h4>
            </center>
            <form action="login_check.php" method="POST" class="login_form">

                    <label >Username</label>
                    <input type="text" name="username">

                    <label >Password</label>
                    <input type="password" name="password">

                
                <button type="submit">Login</button>
                
            </form>
            
            <a href="index.php" class="home-btn">Home</a>


        </div>
    </center>
</body>
</html>