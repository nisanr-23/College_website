<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login_admin.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login_admin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    c
    <link rel="stylesheet" href="admin.css">
    
</head>
<body>
        <?php
        include 'admin_sidebar.php';
        ?>
        
        <div class="content">
            <center><h1>Admin Dashboard</h1></center>


        </div>
        
</body>
</html>