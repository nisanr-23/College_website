<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

// Assuming you have received form data through POST method
$b_roll = mysqli_real_escape_string($data, $_POST['b_roll']);
$name = mysqli_real_escape_string($data, $_POST['name']);
$fa_name = mysqli_real_escape_string($data, $_POST['fatherName']);
$mo_name = mysqli_real_escape_string($data, $_POST['motherName']);
$dob = mysqli_real_escape_string($data, $_POST['dob']);
$phone = mysqli_real_escape_string($data, $_POST['phone']);
$email = mysqli_real_escape_string($data, $_POST['email']);
$address = mysqli_real_escape_string($data, $_POST['address']);
$school = mysqli_real_escape_string($data, $_POST['school']);
$ssc_gpa = mysqli_real_escape_string($data, $_POST['sscGPA']);
$pass_year = mysqli_real_escape_string($data, $_POST['passingYear']);
$board = mysqli_real_escape_string($data, $_POST['board']);
$version = mysqli_real_escape_string($data, $_POST['version']);
$dept = mysqli_real_escape_string($data, $_POST['dept']);
$message = mysqli_real_escape_string($data, $_POST['message']);

// Additional Server-side Validation

// Check if required fields are empty
if (empty($b_roll) ||empty($name) || empty($fa_name) || empty($dob) || empty($phone) || empty($address) || empty($school) || empty($ssc_gpa) || empty($pass_year) || empty($board) || empty($version) || empty($dept)) {
    die("Error: Please fill in all required fields");
}

// Email Validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format");
}

// Date Format Conversion
$dob = date("Y-m-d", strtotime($dob));

// Decimal Value Handling
$ssc_gpa = number_format($ssc_gpa, 2, '.', '');

// Default Values
if (empty($email)) {
    $email = "default@example.com";
}

// Insert data into the admission table
$sql = "INSERT INTO admission (b_roll,name, fa_name, mo_name, dob, phone, email, address, school, ssc_gpa, pass_year, board, version, dept, message ) 
        VALUES ('$b_roll','$name', '$fa_name', '$mo_name','$dob', '$phone', '$email', '$address', '$school', '$ssc_gpa', '$pass_year', '$board', '$version', '$dept', '$message')";

if (mysqli_query($data, $sql)) {
    header("location:submission_confirmation.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($data);
}

mysqli_close($data);
?>
