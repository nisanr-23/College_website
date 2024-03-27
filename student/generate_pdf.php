<?php
// Include Dompdf autoload file
require 'dompdf/autoload.inc.php';

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login-std.php"); // Redirect to login page if not logged in
    exit();
}

// Retrieve user information from the session
$userID = $_SESSION['user_id'];
$rollNumber = $_POST['roll_number']; // Use POST to get the roll number from the form

// Include the database connection file
require_once('db_connection.php');

// Query to fetch results for the specified student
$resultQuery = "SELECT * FROM std_result WHERE roll_number = $rollNumber";
$resultResult = $data->query($resultQuery);

// Fetch student details for display
$userQuery = "SELECT * FROM std_user WHERE user_id = $userID";
$userResult = $data->query($userQuery);
$userDetails = $userResult->fetch_assoc();

// Initialize totalSum
$totalSum = 0;

// Create a new Dompdf instance
$dompdf = new Dompdf\Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('isPhpEnabled', true);

// Output additional information with improved centering and styling
$html = "<div style='text-align: center;'>

            <h1 style='color: #005bff; margin-bottom: 5px;'>Dinajpur Govt. City College</h1>
            <h3 style='color: #007bff; margin-bottom: 10px;'><u>Result</u></h3>
            <p style='margin: 0 0 5px;'><strong>Exam:</strong> 1st Year Final</p>
            <p style='margin: 0 0 5px;'><strong>Name:</strong> {$userDetails['student_name']}</p>
            <p style='margin: 0 0 20px;'><strong>Roll:</strong> {$userDetails['roll_number']}</p>
        </div>";

        $html .= '<table border="1" style="width: 100%; border-collapse: collapse; margin: 0 auto 20px;">
        <thead>
            <tr style="background-color: #f2f2f2; color: #333;">
                <th style="padding: 8px;">Subject</th>
                <th style="padding: 8px;">Obtained Numbers</th>
            </tr>
        </thead>
        <tbody>';

while ($row = $resultResult->fetch_assoc()) {
$html .= "<tr>
            <td style='padding: 8px;'>Bangla</td>
            <td style='padding: 8px;'>{$row['bangla']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>English</td>
            <td style='padding: 8px;'>{$row['english']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>Higher Math</td>
            <td style='padding: 8px;'>{$row['higher_math']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>ICT</td>
            <td style='padding: 8px;'>{$row['ict']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>Physics</td>
            <td style='padding: 8px;'>{$row['physics']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>Chemistry</td>
            <td style='padding: 8px;'>{$row['chemistry']}</td>
          </tr>";
$html .= "<tr>
            <td style='padding: 8px;'>Biology</td>
            <td style='padding: 8px;'>{$row['biology']}</td>
          </tr>";

// Add each subject score to the total sum
$totalSum += $row['bangla'] + $row['english'] + $row['higher_math'] + $row['ict'] + $row['physics'] + $row['chemistry'] + $row['biology'];
}

$html .= '</tbody>
        <tfoot>
            <tr style="background-color: #f2f2f2; color: #333;">
                <td style="padding: 8px;">Total Number:</td>
                <td style="padding: 8px;">' . $totalSum . '</td>
            </tr>
        </tfoot>
    </table>';


// Load HTML content into Dompdf
$dompdf->loadHtml($html);

// Set paper size (A4 by default)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get total pages)
$dompdf->render();

// Output PDF to the browser
$dompdf->stream('student_result.pdf', array('Attachment' => 0));
?>
