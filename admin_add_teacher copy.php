<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}


$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['add_teacher']))
{
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql="insert into teacher (name,description,image) values('$t_name','$t_description','$dst_db')";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        header('location:admin_add_teacher.php');
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
   <style type="text/css">
    .div_deg{
        background-color: skyblue;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 500px;


    }
   </style>
    
</head>
<body>
        <?php
        include 'admin_sidebar.php';
        ?>
        
        <div class="content">
            <center>
            <h1>Add Teacher</h1>
            <div class="div_deg">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">Teacher Name</label>
                        <input type="text" name="name">
                    </div>

                    <br>

                    <div>
                        <label for="">Description</label>
                        <textarea name="description"></textarea>
                    </div>
                        <br>
                    <div>
                        <label for="">Image</label>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div>  
                        <input type="submit" name="add_teacher" value="Add Teacher">
                    </div>
                </form>
            </div>

            </center>
        </div>
        
</body>
</html>