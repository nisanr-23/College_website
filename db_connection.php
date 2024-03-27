<?php
// Database credentials
$host="localhost";
$user="root";
$password="";
$db="clg_db";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
    die("Connection errror");
}

// Set character set to utf8mb4
mysqli_set_charset($data, "utf8mb4");

?>
