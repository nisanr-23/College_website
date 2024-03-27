<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "clg_db";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

// Function to validate email format
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate integer input
function validateInteger($value) {
    return filter_var($value, FILTER_VALIDATE_INT) !== false;
}

// Initialize the success message and field error messages
$successMessage = "";
$fieldErrors = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $missingFields = array();

    // Check for not null values and validate email format
    if (empty($_POST['name'])) {
        $missingFields[] = "Name";
    }
    if (empty($_POST['fatherName'])) {
        $missingFields[] = "Father Name";
    }
    if (empty($_POST['motherName'])) {
        $missingFields[] = "Mother Name";
    }
    if (empty($_POST['dob'])) {
        $missingFields[] = "Date of Birth";
    }
    if (empty($_POST['phone'])) {
        $missingFields[] = "Phone";
    }
    if (empty($_POST['email'])) {
        $missingFields[] = "Email";
    }
    if (empty($_POST['address'])) {
        $missingFields[] = "Address";
    }
    if (empty($_POST['school'])) {
        $missingFields[] = "School";
    }
    if (empty($_POST['sscGPA'])) {
        $missingFields[] = "SSC GPA";
    }
    if (empty($_POST['passingYear'])) {
        $missingFields[] = "Passing Year";
    }
    if (empty($_POST['board'])) {
        $missingFields[] = "Board";
    }
    if (empty($_POST['version'])) {
        $missingFields[] = "Version";
    }
    if (empty($_POST['dept'])) {
        $missingFields[] = "Department";
    }

    // Display error message if there are missing fields
    if (!empty($missingFields)) {
        $fieldErrors[] = "Please fill in the following required fields: " . implode(', ', $missingFields);
    } elseif (!validateEmail($_POST['email'])) {
        $fieldErrors[] = "Invalid email format.";
    } elseif (!validateInteger($_POST['phone']) || !validateInteger($_POST['sscGPA']) || !validateInteger($_POST['passingYear'])) {
        $fieldErrors[] = "Phone, SSC GPA, and Passing Year must be integers.";
    } else {
        // Assuming you have received form data through POST method
        $name = mysqli_real_escape_string($data, $_POST['name']);
        $fa_name = mysqli_real_escape_string($data, $_POST['fatherName']);
        $mo_name = mysqli_real_escape_string($data, $_POST['motherName']);
        $dob = mysqli_real_escape_string($data, $_POST['dob']);
        $phone = mysqli_real_escape_string($data, $_POST['phone']);
        $email = mysqli_real_escape_string($data, $_POST['email']);
        $address = mysqli_real_escape_string($data, $_POST['address']);
        $school = mysqli_real_escape_string($data, $_POST['school']);
        $ssc_gpa = mysqli_real_escape_string($data, $_POST['sscGPA']);
        $pass_year = mysqli_real_escape_string($data, $_POST['passingYear']);
        $board = mysqli_real_escape_string($data, $_POST['board']);
        $version = mysqli_real_escape_string($data, $_POST['version']);
        $dept = mysqli_real_escape_string($data, $_POST['dept']);
        $message = mysqli_real_escape_string($data, $_POST['message']);

        // Insert data into the admission table
        $sql = "INSERT INTO admission (name, fa_name, mo_name, dob, phone, email, address, school, ssc_gpa, pass_year, board, version, dept, message) 
                VALUES ('$name', '$fa_name', '$mo_name', '$dob', '$phone', '$email', '$address', '$school', '$ssc_gpa', '$pass_year', '$board', '$version', '$dept', '$message')";

        if (mysqli_query($data, $sql)) {
            $successMessage = "Information submitted successfully";
        } else {
            $fieldErrors[] = "Error: " . $sql . "<br>" . mysqli_error($data);
        }
    }
}

mysqli_close($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="admission.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <h2>Admission Form</h2>
        </div>
        <!-- Display success message or form based on the submission status -->
        <?php if (!empty($successMessage)) : ?>
            <div>
                <?php echo $successMessage; ?>
            </div>
        <?php else : ?>
        
            <form action="data_check.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="fatherName">Father Name</label>
        <input type="text" id="fatherName" name="fatherName">

        <label for="motherName">Mother Name</label>
        <input type="text" id="motherName" name="motherName">

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob">


        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="address">Address</label>
        <textarea id="address" name="address"></textarea>

        <label for="school">School</label>
        <input type="text" id="school" name="school">

        <label for="sscGPA">SSC GPA</label>
        <input type="text" id="sscGPA" name="sscGPA">

        <label for="passingYear">Passing Year</label>
        <select id="passingYear" name="passingYear">
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>

        <label for="board">Board</label>
        <select id="board" name="board">
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Comilla">Comilla</option>
            <option value="Jessore">Jessore</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Barisal">Barisal</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Dinajpur">Dinajpur</option>
        </select>

        <label for="version">Version (Eng/Ban)</label>
        <select id="version" name="version">
            <option value="eng">English</option>
            <option value="ban">Bangla</option>
        </select>

        

        <label for="dept">Department for admission</label>
        <select id="dept" name="dept">
            <option value="science">Science</option>
            <option value="arts">Arts</option>
            <option value="commerce">Commerce</option>
    
        </select>


        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Submit</button>

    

                <!-- Display field error messages -->
                <div>
                    <?php foreach ($fieldErrors as $error) : ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>

                <button type="submit">Submit</button>
            </form>
        <?php endif; ?>
    </div>

</body>

</html>
