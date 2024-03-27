<?php

error_reporting(0);
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login_admin.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login_admin.php");
}

$host = "localhost";
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
    <title>Admin Dashboard</title>
    <style type="text/css">
        .table_th
    {
        padding: 20px;
        font-size: 20px;

    }

    .table_td
    {
        padding: 20px;
        background-color: skyblue;
    }
    </style>
    <link rel="stylesheet" href="admin.css">
    
</head>
<body>
        <?php
        include 'admin_sidebar.php';
        ?>
        
        <div class="content">
            <Center>
            <h1>Student Data</h1>

           <?php 
            if($_SESSION['message'])
            {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            ?>

            <table border="2px">
                <tr>
                    <th class="table_th">USername</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Password</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>

                </tr>

                <?php
                while($info=$result->fetch_assoc())
                {
                ?>
                <tr>
                    <td class="table_td">
                       <?php echo "{$info['username']}"; ?> 
                    </td>
                    <td class="table_td">
                       <?php echo "{$info['email']}"; ?> 
                    </td>
                    <td class="table_td">
                       <?php echo "{$info['phone']}"; ?>
                    </td>
                    <td class="table_td">
                       <?php echo "{$info['password']}"; ?>
                    </td>
                    <td class="table_td">
                       <?php echo " <a onClick=\"javascript:return confirm('Are sure to delete this data?')\" href='delete.php?student_id={$info['id']}'>Delete</a> "; ?>
                    </td>
                    <td class="table_td">
                       <?php echo "<a update href='update_student.php?student_id={$info['id']}'>Update</a>"; ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            </Center>
        </div>
        
</body>
</html>