<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login_admin.php");
    exit();
} elseif ($_SESSION['usertype'] == 'student') {
    header("location: login_admin.php");
    exit();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

// Check if the connection was successful
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

$error_message = '';
$selectedStudents = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_students'])) {
    $numStudents = intval($_POST['num_students']);

    // Validate input to prevent SQL injection
    if ($numStudents > 0) {
        // Build the SQL query dynamically based on selected values
        $sql = "SELECT * FROM admission WHERE ssc_gpa BETWEEN 2.5 AND 5";

        if (isset($_POST['passing_year']) && !empty($_POST['passing_year'])) {
            $passingYear = mysqli_real_escape_string($data, $_POST['passing_year']);
            $sql .= " AND pass_year = '$passingYear'";
        }

        if (isset($_POST['board']) && !empty($_POST['board'])) {
            $board = mysqli_real_escape_string($data, $_POST['board']);
            $sql .= " AND board = '$board'";
        }

        if (isset($_POST['version']) && !empty($_POST['version'])) {
            $version = mysqli_real_escape_string($data, $_POST['version']);
            $sql .= " AND version = '$version'";
        }

        if (isset($_POST['dept']) && !empty($_POST['dept'])) {
            $dept = mysqli_real_escape_string($data, $_POST['dept']);
            $sql .= " AND dept = '$dept'";
        }

        $sql .= " ORDER BY ssc_gpa DESC LIMIT $numStudents";

        $result = mysqli_query($data, $sql);

        // Fetch all selected students
        while ($info = $result->fetch_assoc()) {
            $selectedStudents[] = $info;
        }
    } else {
        // Handle invalid input (e.g., non-numeric or non-positive)
        $error_message = "Please enter a valid number of students.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        input[type="number"] {
            width: 60px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            font-weight: bold;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>
    <br>

    <div class="content"><center><h2><u>Select Students for Admission</u></h2></center>
        <!-- Form for entering the number of students and filtering options -->
<center>
    <form method="post" action="">
        <label for="num_students">Number of Students:</label>
        <input type="number" name="num_students" id="num_students" required>

        <label for="passing_year">Passing Year:</label>
        <select name="passing_year" id="passing_year">
            <option value="">Select Passing Year</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
        </select>

        <label for="board">Board:</label>
        <select name="board" id="board">
            <option value="">Select Board</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Comilla">Comilla</option>
            <option value="Jessore">Jessore</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Barisal">Barisal</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Dinajpur">Dinajpur</option>
        </select>
            <br><br>
        <label for="version">Version:</label>
        <select name="version" id="version">
            <option value="">Select Version</option>
            <option value="Bangla">Bangla</option>
            <option value="English">English</option>
        </select>

        <label for="dept">Department:</label>
        <select name="dept" id="dept">
            <option value="">Select Department</option>
            <option value="Science">Science</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
        </select>

        <input type="submit" value="Show Students">
    </form>
</center>

        
        <?php
        // Display error message if any
        if (!empty($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }

        // Display the selected students' information
        if (!empty($selectedStudents)) {
            echo "<h1 align='center'>Selected Students</h1>";
            echo "<table border='1px'>";
            echo "<tr><th>#</th><th>Board Roll</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>Date of Birth</th><th>Phone</th><th>Email</th><th>Address</th><th>School</th><th>SSC GPA</th><th>Passing Year</th><th>Board</th><th>Version</th><th>Dept for Admission</th><th>Message</th></tr>";

            $counter = 1;
            foreach ($selectedStudents as $student) {
                echo "<tr>";
                echo "<td>{$counter}</td>";
                echo "<td>{$student['b_roll']}</td>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['fa_name']}</td>";
                echo "<td>{$student['mo_name']}</td>";
                echo "<td>{$student['dob']}</td>";
                echo "<td>{$student['phone']}</td>";
                echo "<td>{$student['email']}</td>";
                echo "<td>{$student['address']}</td>";
                echo "<td>{$student['school']}</td>";
                echo "<td>{$student['ssc_gpa']}</td>";
                echo "<td>{$student['pass_year']}</td>";
                echo "<td>{$student['board']}</td>";
                echo "<td>{$student['version']}</td>";
                echo "<td>{$student['dept']}</td>";
                echo "<td>{$student['message']}</td>";
                echo "</tr>";
                $counter++;
            }

            echo "</table>";
            echo "<form action='generate_selected_students_pdf.php' method='post' target='_blank'>
            <input type='hidden' name='num_students' value='$numStudents'>
            <button type='submit'>Download PDF</button>
          </form>";

            // Display the total number of selected students
            echo "<p>Total number of selected students: " . ($counter - 1) . "</p>";
        }
        ?>
    </div>
</body>
</html>
