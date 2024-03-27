

<?php
// Database credentials
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "clg_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8mb4
mysqli_set_charset($conn, "utf8mb4");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="image/ad-favicon.png" />
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php
    include 'admin_sidebar.php';
    ?>

    <div class="content">
        <center><h1>Admin Dashboard</h1></center>

        <!-- Display student data and results in a table -->
        <table border="1">
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
                </tr>
            </thead>
            <tbody>
                <?php
               

                // Fetch student data and results
                $query = "SELECT u.user_id, u.roll_number, u.username, u.password, u.student_name,
                            r.bangla, r.english, r.higher_math, r.ict, r.physics, r.chemistry, r.biology
                            FROM std_user u
                            LEFT JOIN std_result r ON u.roll_number = r.roll_number";
                $result = $conn->query($query);

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
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
