<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];
    $sql ="delete from user_std where id='$user_id'";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']='Deleted distinct student data!';
        header("location:view_student.php");
    }
}

?>