<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Add any additional styles/scripts as needed -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
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

<?php
// Include the database connection file
require_once('db_connection.php');

// Retrieve user_id from the URL parameter
$user_id = $_GET['user_id'];

// Fetch student data and results for the given user_id
$query = "SELECT u.user_id, u.roll_number, u.username, u.password, u.student_name,
            r.bangla, r.english, r.higher_math, r.ict, r.physics, r.chemistry, r.biology
            FROM std_user u
            LEFT JOIN std_result r ON u.roll_number = r.roll_number
            WHERE u.user_id = $user_id";
$result = $data->query($query);

// Check if a matching record is found
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <h1>Edit Student Information</h1>
    <form action="process_update.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">

        <!-- Display login information -->
        <label for="roll_number">Roll Number:</label>
        <input type="text" name="roll_number" value="<?php echo $row['roll_number']; ?>" required>

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" required>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $row['password']; ?>" required>

        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" required>

        <!-- Display result information -->
        <h2>Edit Results</h2>
        <label for="bangla">Bangla:</label>
        <input type="number" name="bangla" value="<?php echo $row['bangla']; ?>" required>

        <label for="english">English:</label>
        <input type="number" name="english" value="<?php echo $row['english']; ?>" required>

        <label for="higher_math">Higher Math:</label>
        <input type="number" name="higher_math" value="<?php echo $row['higher_math']; ?>" required>

        <label for="ict">ICT:</label>
        <input type="number" name="ict" value="<?php echo $row['ict']; ?>" required>

        <label for="physics">Physics:</label>
        <input type="number" name="physics" value="<?php echo $row['physics']; ?>" required>

        <label for="chemistry">Chemistry:</label>
        <input type="number" name="chemistry" value="<?php echo $row['chemistry']; ?>" required>

        <label for="biology">Biology:</label>
        <input type="number" name="biology" value="<?php echo $row['biology']; ?>" required>

        <button type="submit">Update</button>
    </form>
<?php
} else {
    echo "<p>No student found with the given user ID.</p>";
}
?>

</body>
</html>
