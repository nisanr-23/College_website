<?php
// Include Dompdf autoload file
require 'dompdf/autoload.inc.php';

// Start the session
session_start();

// Include the database connection file
$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

// Check if the connection was successful
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

$error_message = '';
$selectedStudents = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_students'])) {
    $numStudents = intval($_POST['num_students']);

    // Validate input to prevent SQL injection
    if ($numStudents > 0) {
        // Build the SQL query dynamically based on selected values
        $sql = "SELECT * FROM admission WHERE ssc_gpa BETWEEN 2.5 AND 5";

        if (isset($_POST['passing_year']) && !empty($_POST['passing_year'])) {
            $passingYear = mysqli_real_escape_string($data, $_POST['passing_year']);
            $sql .= " AND pass_year = '$passingYear'";
        }

        if (isset($_POST['board']) && !empty($_POST['board'])) {
            $board = mysqli_real_escape_string($data, $_POST['board']);
            $sql .= " AND board = '$board'";
        }

        if (isset($_POST['version']) && !empty($_POST['version'])) {
            $version = mysqli_real_escape_string($data, $_POST['version']);
            $sql .= " AND version = '$version'";
        }

        if (isset($_POST['dept']) && !empty($_POST['dept'])) {
            $dept = mysqli_real_escape_string($data, $_POST['dept']);
            $sql .= " AND dept = '$dept'";
        }

        $sql .= " ORDER BY ssc_gpa DESC LIMIT $numStudents";

        $result = mysqli_query($data, $sql);

        // Fetch all selected students
        while ($info = $result->fetch_assoc()) {
            $selectedStudents[] = $info;
        }
    } else {
        // Handle invalid input (e.g., non-numeric or non-positive)
        $error_message = "Please enter a valid number of students.";
    }
}

// Create a new Dompdf instance
$dompdf = new Dompdf\Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('isPhpEnabled', true);

// Output student information to the PDF
$html = "
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2, h4 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        p {
            text-align: center;
            color: #555;
            margin-top: 10px;
        }
    </style>
    <h2>Dinajpur Govt. City College</h2>
    <h4>Selected Students for Admission to Class XI</h4>";

if (!empty($selectedStudents)) {
    $html .= "<table>
                <tr>
                    <th>#</th>
                    <th>Board Roll</th>
                    <th>Name</th>
                    <th>Passing Year</th>
                    <th>Board</th>
                    <th>Version</th>
                    <th>Dept</th>
                </tr>";

    $counter = 1;
    foreach ($selectedStudents as $student) {
        $html .= "<tr>
                    <td>{$counter}</td>
                    <td>{$student['b_roll']}</td>
                    <td>{$student['name']}</td>
                    <td>{$student['pass_year']}</td>
                    <td>{$student['board']}</td>
                    <td>{$student['version']}</td>
                    <td>{$student['dept']}</td>
                </tr>";
        $counter++;
    }

    $html .= "</table>";

    // Display the total number of selected students
    $html .= "<p>Total number of selected students: " . ($counter - 1) . "</p>";
} else {
    $html .= "<p>No students match the selected criteria.</p>";
}

// Load HTML content into Dompdf
$dompdf->loadHtml($html);

// Set paper size (A4 by default)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get total pages)
$dompdf->render();

// Output PDF to the browser
$dompdf->stream('selected_students.pdf', array('Attachment' => 0));
?>
