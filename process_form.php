<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $fatherName = $_POST["fatherName"];
    $motherName = $_POST["motherName"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $school = $_POST["school"];
    $sscGPA = $_POST["sscGPA"];
    $passingYear = $_POST["passingYear"];
    $board = $_POST["board"];
    $version = $_POST["version"];
    $dept = $_POST["dept"];
    $message = $_POST["message"];

    // Create a HTML page with the submitted information
    $html = "
    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Admission Form Submission</title>
        <link rel='stylesheet' href='admission_form.css'>
        <style>
            /* Add your custom styles for the beautiful page here */
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
            }

            .header {
                text-align: center;
                background-color: #f0f0f0;
                padding: 10px;
            }

            .submitted-info {
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <div class='container'>
            <div class='header'>
                <h2>Admission Form Submission</h2>
            </div>
            <div class='submitted-info'>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Father Name:</strong> $fatherName</p>
                <p><strong>Mother Name:</strong> $motherName</p>
                <p><strong>Date of Birth:</strong> $dob</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>School:</strong> $school</p>
                <p><strong>SSC GPA:</strong> $sscGPA</p>
                <p><strong>Passing Year:</strong> $passingYear</p>
                <p><strong>Board:</strong> $board</p>
                <p><strong>Version:</strong> $version</p>
                <p><strong>Department:</strong> $dept</p>
                <p><strong>Message:</strong> $message</p>
            </div>
            <div class='footer'>
                <p>Submitted on " . date("Y-m-d H:i:s") . "</p>
            </div>
        </div>
    </body>

    </html>
    ";

    // Save HTML content to a file
    $filename = "admission_form_submission.html";
    file_put_contents($filename, $html);

    // Convert HTML to PDF using an external tool like wkhtmltopdf
    // Make sure to have wkhtmltopdf installed on your server
    $pdfFilename = "admission_form_submission.pdf";
    shell_exec("wkhtmltopdf $filename $pdfFilename");

    // Optional: You can provide a download link for the user
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=$pdfFilename");
    readfile($pdfFilename);

    // Optional: Remove the temporary HTML file
    unlink($filename);
}
?>
