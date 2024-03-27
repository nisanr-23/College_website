<?php
// Include the database connection file
require_once('db_connection.php');

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($data, $username);
    $password = mysqli_real_escape_string($data, $password);

    // Query to check user credentials
    $query = "SELECT * FROM std_user WHERE username = '$username' AND password = '$password'";
    $result = $data->query($query);

    // Check if a matching record is found
    if ($result->num_rows > 0) {
        // Fetch user details
        $userDetails = $result->fetch_assoc();

        // Set session variables
        $_SESSION['user_id'] = $userDetails['user_id'];
        $_SESSION['roll_number'] = $userDetails['roll_number'];

        // Redirect to the student dashboard on successful login
        header("Location: std-dash-result.php");
        exit();
    } else {
        // Display an error message if login fails
        $loginError = "Invalid username or password. Please try again.";
    }
}

// HTML structure for the login page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
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

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Student Login</h2>
        
        <?php
        // Display login error message if exists
        if (isset($loginError)) {
            echo "<p class='error-message'>$loginError</p>";
        }
        ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <a href="/login/index.php" class="home-btn">Home</a>
    </div>
    

</body>
</html>
