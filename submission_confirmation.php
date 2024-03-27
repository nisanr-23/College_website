<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6f6f6;
            color: #333;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #3498db; /* Dodger Blue for headings */
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #555;
        }

        button {
            padding: 12px 24px;
            font-size: 18px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9; /* Darker shade on hover */
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9; /* Darker shade on hover */
        }
    </style>
</head>

<body>

    <h2>Thank you for your submission!</h2>

    <?php
    // Function to safely retrieve data from $_POST
    function getFormData($key) {
        return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : '';
    }

    // Assuming you have received form data through POST method
    $name = getFormData('name');
    $fa_name = getFormData('fatherName');
    $mo_name = getFormData('motherName');
    $dob = getFormData('dob');
    $phone = getFormData('phone');
    $email = getFormData('email');
    $address = getFormData('address');
    $school = getFormData('school');
    $ssc_gpa = getFormData('sscGPA');
    $pass_year = getFormData('passingYear');
    $board = getFormData('board');
    $version = getFormData('version');
    $dept = getFormData('dept');
    $message = getFormData('message');

    // Display submission date and time
    $submissionDateTime = date("Y-m-d H:i:s");
    echo "<p>Submission Date and Time: $submissionDateTime</p>";
    ?>

    <!-- Add a button for downloading PDF -->
    <!--<a href="generate_pdf.php" target="_blank"><button>Download as PDF</button></a>-->

</body>

</html>
