<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login_admin.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login_admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />
    <link rel="stylesheet" href="admin.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
        }

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


        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e5e5e5;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .delete-button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
        }

        .update-button {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    include 'admin_sidebar.php';
    ?>

    <div class="content">
        <center><h1>Admin Dashboard</h1>
        <h3><u>Student Informations</u></h3>
        </center>

        <!-- Display student data and results in a table -->
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Roll Number</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Student Name</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Higher Math</th>
                    <th>ICT</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Biology</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the database connection file
                require_once('db_connection.php');

                // Fetch student data and results
                $query = "SELECT u.user_id, u.roll_number, u.username, u.password, u.student_name,
                            r.bangla, r.english, r.higher_math, r.ict, r.physics, r.chemistry, r.biology
                            FROM std_user u
                            LEFT JOIN std_result r ON u.roll_number = r.roll_number";
                $result = $data->query($query);

                // Display student data and results in the table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['user_id']}</td>";
                    echo "<td>{$row['roll_number']}</td>";
                    echo "<td>{$row['username']}</td>";
                    echo "<td>{$row['password']}</td>";
                    echo "<td>{$row['student_name']}</td>";
                    echo "<td>{$row['bangla']}</td>";
                    echo "<td>{$row['english']}</td>";
                    echo "<td>{$row['higher_math']}</td>";
                    echo "<td>{$row['ict']}</td>";
                    echo "<td>{$row['physics']}</td>";
                    echo "<td>{$row['chemistry']}</td>";
                    echo "<td>{$row['biology']}</td>";
                    echo "<td class='action-buttons'>";
                    echo "<button class='delete-button' onclick='confirmDelete({$row['user_id']})'>Delete</button>";
                    echo "<a class='update-button' href='ad_update_student.php?user_id={$row['user_id']}'>Update</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <script>
        function confirmDelete(userId) {
            var confirmation = confirm("Are you sure you want to delete this student?");
            
            if (confirmation) {
                window.location.href = "delete_student.php?user_id=" + userId;
            }
        }

       
        </script>
    </div>
</body>
</html>
