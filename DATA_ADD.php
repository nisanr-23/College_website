<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "clg_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate a random Bangladeshi name
function generateRandomName() {
    $firstNames = array("Mohammad", "Ali", "Abdul", "Tajul", "Sumaiya", "Fatima", "Hasan", "Rahman", "Akhtar", "Jahan", "Karim", "Parveen");
    $lastNames = array("Ahmed", "Khan", "Hossain", "Rahman", "Akhtar", "Jahan", "Karim", "Begum", "Ali", "Siddique");

    $firstName = $firstNames[array_rand($firstNames)];
    $lastName = $lastNames[array_rand($lastNames)];

    return $firstName . " " . $lastName;
}

// Generate and insert 40 random records into the database
for ($i = 0; $i < 40; $i++) {
    $boardRoll = mt_rand(100000, 999999);
    $name = generateRandomName();
    $fatherName = generateRandomName() . " " . generateRandomName();
    $motherName = generateRandomName() . " " . generateRandomName();
    $dob = date("Y-m-d", mt_rand(strtotime("1980-01-01"), strtotime("2005-12-31")));
    $phone = "01" . mt_rand(1, 9) . mt_rand(10000000, 99999999);
    $email = strtolower(str_replace(" ", ".", $name)) . "@example.com";
    $address = "Dhaka, Bangladesh";
    $school = "Random School";
    $sscGPA = number_format(mt_rand(300, 500) / 100, 2); // Random GPA between 3.00 to 5.00
    $passingYear = mt_rand(2015, 2023);
    $board = "Dhaka"; // You can randomize this as well if needed
    $version = ($i % 2 == 0) ? "eng" : "ban"; // Alternating between English and Bangla
    $deptOptions = array("science", "arts", "commerce");
    $dept = $deptOptions[array_rand($deptOptions)];
    $message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

    $sql = "INSERT INTO admission (b_roll, name, fa_name, mo_name, dob, phone, email, address, school, ssc_gpa, pass_year, board, version, dept, message) VALUES ('$boardRoll', '$name', '$fatherName', '$motherName', '$dob', '$phone', '$email', '$address', '$school', '$sscGPA', '$passingYear', '$board', '$version', '$dept', '$message')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "Records inserted successfully";

$conn->close();
?>
