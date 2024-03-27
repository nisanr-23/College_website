<?php
session_start();
error_reporting(0);

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

$data=mysqli_connect($host, $user, $password, $db);

$sql="select * from teacher";

$result=mysqli_query($data,$sql);

if($_GET['teacher_id'])
{
    $t_id=$_GET['teacher_id'];
    $sql2="delete from teacher where id='$t_id'";
    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        header("location:admin_view_teacher.php");
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
     table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }


    </style>
</head>
<body>
        <?php
        include 'admin_sidebar.php';
        ?>
        
        <div class="content">
            <center>
            <h1>View Teacher Data</h1>
            <table border="2px">
                <tr>
                    <th class="table_th">Teacher Name</th>
                    <th class="table_th">About Teacher</th>
                    <th class="table_th">Image</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>
                </tr>

                <?php
                while($info=$result->fetch_assoc())
                {
                ?>

                <tr>
                    <td class="table_td"><?php echo"{$info['name']}"; ?></td>
                    <td class="table_td"><?php echo"{$info['description']}"; ?></td>
                    <td class="table_td"><img height="100px" width="100px" src="<?php echo"{$info['image']}"; ?>" alt=""></td>
                    <td class="table_td">
                        <?php 
                        echo"<a onClick=\"javascript:return confirm('Are you sure to delete this?');\" href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>"; 
                        ?>
                    </td>
                    <td class="table_td">
                       <?php
                       echo"<a href='admin_update_teacher.php?teacher_id={$info['id']}'>Update</a>";
                       ?> 
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            </center>

        </div>
        
</body>
</html>