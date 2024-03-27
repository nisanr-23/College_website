<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login_student.php");
}

elseif($_SESSION['usertype']=='admin')
{
    header("location:login_student.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);


$sql="select * from user_std where usertype='student'";
$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php
    include("student_sidebar.php");
    ?>
    <br><br><br><br>
        <center>
        <div class="content">
            <h2>Welcome to the student dashboard</h2>
        </div>
        </center>
</body>
</html>