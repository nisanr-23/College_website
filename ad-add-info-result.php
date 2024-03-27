<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login_admin.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login_admin.php");
    exit();
}

// Include the database connection file
require_once('db_connection.php');

// Initialize variables
$roll_number = $username = $password = $student_name = $bangla = $english = $higher_math = $ict = $physics = $chemistry = $biology = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input fields (you can add more validation)
    $roll_number = mysqli_real_escape_string($data, $_POST['roll_number']);
    $username = mysqli_real_escape_string($data, $_POST['username']);
    $password = mysqli_real_escape_string($data, $_POST['password']);
    $student_name = mysqli_real_escape_string($data, $_POST['student_name']);
    $bangla = mysqli_real_escape_string($data, $_POST['bangla']);
    $english = mysqli_real_escape_string($data, $_POST['english']);
    $higher_math = mysqli_real_escape_string($data, $_POST['higher_math']);
    $ict = mysqli_real_escape_string($data, $_POST['ict']);
    $physics = mysqli_real_escape_string($data, $_POST['physics']);
    $chemistry = mysqli_real_escape_string($data, $_POST['chemistry']);
    $biology = mysqli_real_escape_string($data, $_POST['biology']);

    // Insert data into std_user table
    $insertUserQuery = "INSERT INTO std_user (roll_number, username, password, student_name) 
                        VALUES ('$roll_number', '$username', '$password', '$student_name')";
    
    // Insert data into std_result table
    $insertResultQuery = "INSERT INTO std_result (roll_number, bangla, english, higher_math, ict, physics, chemistry, biology) 
                          VALUES ('$roll_number', '$bangla', '$english', '$higher_math', '$ict', '$physics', '$chemistry', '$biology')";

    // Execute queries
    if ($data->query($insertUserQuery) && $data->query($insertResultQuery)) {
        echo "<script>alert('Student information and results added successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . $data->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Information and Results</title>
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />
    <link rel="stylesheet" href="admin.css">
    <!-- Add any additional styles/scripts as needed -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .content {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 600px;
            margin: 50px auto;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 15px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
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
            background-color: #2ecc71;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>

    <div class="content">
        <center><h1>Add Student Information and Results</h1></center>

        <form action="ad-add-info-result.php" method="post">
            <!-- Common field -->
            <label for="roll_number">Roll Number:</label>
            <input type="text" name="roll_number" required>

            <!-- Student login information -->
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name" required>

            <!-- Student result information -->
            <label for="bangla">Bangla:</label>
            <input type="number" name="bangla" required>

            <label for="english">English:</label>
            <input type="number" name="english" required>

            <label for="higher_math">Higher Math:</label>
            <input type="number" name="higher_math" required>

            <label for="ict">ICT:</label>
            <input type="number" name="ict" required>

            <label for="physics">Physics:</label>
            <input type="number" name="physics" required>

            <label for="chemistry">Chemistry:</label>
            <input type="number" name="chemistry" required>

            <label for="biology">Biology:</label>
            <input type="number" name="biology" required>

            <button type="submit">Add Student</button>
        </form>
    </div>
</body>
</html>
