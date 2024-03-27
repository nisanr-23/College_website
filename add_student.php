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

$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);
if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    $check="SELECT * FROM user_std WHERE username='$username' ";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
        echo" 
        <script type='text/javascript'> 
        alert('Username already exists.Try another one');
        </script> ";;
    }

    else
    {

        $sql="INSERT INTO user_std(username,email,phone,usertype,password) values('$username','$user_email','$user_phone','$usertype','$user_password')";
        $result=mysqli_query($data,$sql);  

        if($result)
        {
        echo" 
        <script type='text/javascript'> 
        alert('Data uploaded');
        </script> ";
        }
        else
        {
        echo"Data Upload Failed";
        }
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
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    
</head>
<body>
        <?php
        include 'admin_sidebar.php';
        ?>
        
        <div class="content">
            <center>
            <h1>ADD student</h1>
            
            <div class="div_deg" >
                <form action="#" method="POST">
                    <div>
                        <label>Username</label>
                        <input type="text" name="name">
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="text" name="email">
                    </div>

                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone">
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="" name="password">
                    </div>

                    <div>
                        <input type="submit" name="add_student" value="Add Student" >
                    </div>
                </form>

            </div>
            </center>

        </div>
        
</body>
</html>