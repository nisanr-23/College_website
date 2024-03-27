<?php
// Include the database connection file
require_once('db_connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user_id and other input values
    $user_id = $_POST['user_id'];
    $roll_number = $_POST['roll_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $student_name = $_POST['student_name'];
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $higher_math = $_POST['higher_math'];
    $ict = $_POST['ict'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];

    // Sanitize input to prevent SQL injection
    $roll_number = mysqli_real_escape_string($data, $roll_number);
    $username = mysqli_real_escape_string($data, $username);
    $password = mysqli_real_escape_string($data, $password);
    $student_name = mysqli_real_escape_string($data, $student_name);

    // Update student login information
    $updateLoginQuery = "UPDATE std_user
                        SET roll_number = '$roll_number',
                            username = '$username',
                            password = '$password',
                            student_name = '$student_name'
                        WHERE user_id = $user_id";
    $data->query($updateLoginQuery);

    // Update student result information
    $updateResultQuery = "UPDATE std_result
                        SET bangla = $bangla,
                            english = $english,
                            higher_math = $higher_math,
                            ict = $ict,
                            physics = $physics,
                            chemistry = $chemistry,
                            biology = $biology
                        WHERE roll_number = $roll_number";
    $data->query($updateResultQuery);

    // Redirect to the admin dashboard after updating
    header("Location: ad-dash.php");
    exit();
} else {
    // If the form is not submitted, redirect to the homepage
    header("Location: index.php");
    exit();
}
?>
