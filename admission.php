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

$host="localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);
$sql="SELECT * from admission ";

$result=mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />
    <style>
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
            
            <h1 align="center" ><u>Student Apllication Info</u></h1>
            <br>
            <table border="1px">
                <tr>
                    <th style="padding: 5px; font-size: 15px;">#</th>
                    <th style="padding: 5px; font-size: 15px;" >Board Roll</th>
                    <th style="padding: 5px; font-size: 15px;" >NAME</th>
                    <th style="padding: 5px; font-size: 15px;">FATHER NAME</th>
                    <th style="padding: 5px; font-size: 15px;">MOTHER NAME</th>
                    <th style="padding: 5px; font-size: 15px;">DATE OF BIRTH</th>
                    <th style="padding: 5px; font-size: 15px;">PHONE</th>
                    <th style="padding: 5px; font-size: 15px;">EMAIL</th>
                    <th style="padding: 5px; font-size: 15px;">ADDRESS</th>
                    <th style="padding: 5px; font-size: 15px;">SCHOOL</th>
                    <th style="padding: 5px; font-size: 15px;">SSC GPA</th>
                    <th style="padding: 5px; font-size: 15px;">PASSING YEAR</th>
                    <th style="padding: 5px; font-size: 15px;">BOARD</th>
                    <th style="padding: 5px; font-size: 15px;">VERSION</th>
                    <th style="padding: 5px; font-size: 15px;">DEPT FOR ADMISSION</th>
                    <th style="padding: 5px; font-size: 15px;">MESSAGE</th>
                </tr>

                <?php
                $counter = 1; // Initialize the counter    
                while($info=$result->fetch_assoc())
                {
                ?>  
                <tr>
                <td style="padding: 10px; " >   <?php echo $counter; ?></td>
                <td style="padding: 10px; " >  <?php echo"{$info['b_roll']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['name']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['fa_name']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['mo_name']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['dob']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['phone']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['email']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['address']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['school']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['ssc_gpa']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['pass_year']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['board']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['version']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['dept']}"; ?> </td>
                <td style="padding: 10px; " >  <?php echo"{$info['message']}"; ?> </td>
                </tr>

                <?php
                $counter++;}
                ?>
                
            </table>

        </div>
        
</body>
</html>