<?php
require __DIR__ . '/9vendor/autoload.php';

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

// Create PDF instance
$pdf = new TCPDF();

// Add content to the PDF (example)
$pdf->SetFontSize(12);
$pdf->AddPage();
$pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
$pdf->Cell(0, 10, 'Father Name: ' . $fa_name, 0, 1);
$pdf->Cell(0, 10, 'Mother Name: ' . $mo_name, 0, 1);
$pdf->Cell(0, 10, 'Date of Birth: ' . $dob, 0, 1);
$pdf->Cell(0, 10, 'Phone: ' . $phone, 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
$pdf->Cell(0, 10, 'Address: ' . $address, 0, 1);
$pdf->Cell(0, 10, 'School: ' . $school, 0, 1);
$pdf->Cell(0, 10, 'SSC GPA: ' . $ssc_gpa, 0, 1);
$pdf->Cell(0, 10, 'Passing Year: ' . $pass_year, 0, 1);
$pdf->Cell(0, 10, 'Board: ' . $board, 0, 1);
$pdf->Cell(0, 10, 'Version: ' . $version, 0, 1);
$pdf->Cell(0, 10, 'Department: ' . $dept, 0, 1);
$pdf->Cell(0, 10, 'Message: ' . $message, 0, 1);

// Output PDF or save it as needed
$pdf->Output('submission.pdf', 'D');
