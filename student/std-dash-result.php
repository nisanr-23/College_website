<?php
// Include the database connection file
require_once('db_connection.php');


// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login-std.php"); // Redirect to login page if not logged in
    exit();
}

// Retrieve user information from the session
$userID = $_SESSION['user_id'];
$rollNumber = $_SESSION['roll_number'];

// Query to fetch results for the logged-in student
$resultQuery = "SELECT * FROM std_result WHERE roll_number = $rollNumber";
$resultResult = $data->query($resultQuery);

// Fetch student details for display
$userQuery = "SELECT * FROM std_user WHERE user_id = $userID";
$userResult = $data->query($userQuery);
$userDetails = $userResult->fetch_assoc();

// Calculate total sum of obtained numbers for all subjects
$totalSum = 0;

// Display results for the student
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .dashboard-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        .logout-link {
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .total-sum {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }

        .pdf-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .pdf-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <center><h2>Welcome, <?php echo $userDetails['student_name']; ?>!</h2></center>
        <center><p>Your 1st Year Final Exam Result:</p></center>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Roll Number</th>
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
                <tr>
                    <td><?php echo $userDetails['student_name']; ?></td>
                    <td><?php echo $userDetails['roll_number']; ?></td>
                    
                    <?php
                    // Display results for the student
                    while ($row = $resultResult->fetch_assoc()) {
                        echo "<td>{$row['bangla']}</td>";
                        echo "<td>{$row['english']}</td>";
                        echo "<td>{$row['higher_math']}</td>";
                        echo "<td>{$row['ict']}</td>";
                        echo "<td>{$row['physics']}</td>";
                        echo "<td>{$row['chemistry']}</td>";
                        echo "<td>{$row['biology']}</td>";

                        // Add each subject score to the total sum
                        $totalSum += $row['bangla'] + $row['english'] + $row['higher_math'] + $row['ict'] + $row['physics'] + $row['chemistry'] + $row['biology'];
                    }
                    ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" class="total-sum">Total Number: <?php echo $totalSum; ?></td>
                </tr>
            </tfoot>
        </table>

        <center><a href="logout.php" class="logout-link">Logout</a></center>

        
       
    </div>
        <center>
        <form class="pdf-form" action="generate_pdf.php" method="post" target="_blank">
        <input type="hidden" name="roll_number" value="<?php echo $rollNumber; ?>">
        <button class="pdf-button" type="submit">Download Result in PDF</button>
        </form>
    </center>
</body>
</html>
