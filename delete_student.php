<?php
// Include the database connection file
require_once('db_connection.php');

// Retrieve user_id
$user_id = $_GET['user_id'];

// Delete from std_result
$deleteResultQuery = "DELETE FROM std_result WHERE roll_number IN (SELECT roll_number FROM std_user WHERE user_id = $user_id)";
$data->query($deleteResultQuery);

// Delete from std_user
$deleteUserQuery = "DELETE FROM std_user WHERE user_id = $user_id";
$data->query($deleteUserQuery);

// Redirect to the admin dashboard after deleting
header("Location: ad-dash.php");
exit();
?>
