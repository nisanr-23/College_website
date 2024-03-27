<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="admission_form.css">
    <style>
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .home-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

    </style>
</head>

<body>
        

    <div class="container">
    <center><a href="index.php" class="home-btn">Home</a></center>
    <br>
        <div class="header">
            <h2>Admission Form for Dinajpur Govt. City College</h2>
        </div>
        <form action="data_check.php" method="POST" onsubmit="return validateForm()">

            <label for="b_roll">Board Roll</label>
            <input type="text" id="b_roll" name="b_roll">
            <div id="rollNumberError" class="error-message"></div>

            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <div id="nameError" class="error-message"></div>

            <label for="fatherName">Father Name</label>
            <input type="text" id="fatherName" name="fatherName">
            <div id="fatherNameError" class="error-message"></div>

            <label for="motherName">Mother Name</label>
            <input type="text" id="motherName" name="motherName">
            <div id="motherNameError" class="error-message"></div>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob">
            <div id="dobError" class="error-message"></div>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone">
            <div id="phoneError" class="error-message"></div>

            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <div id="emailError" class="error-message"></div>

            <label for="address">Address</label>
            <textarea id="address" name="address"></textarea>
            <div id="addressError" class="error-message"></div>

            <label for="school">School</label>
            <input type="text" id="school" name="school">
            <div id="schoolError" class="error-message"></div>

            <label for="sscGPA">SSC GPA</label>
            <input type="text" id="sscGPA" name="sscGPA">
            <div id="sscGPAError" class="error-message"></div>

            <label for="passingYear">Passing Year</label>
            <select id="passingYear" name="passingYear">
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
            <div id="passingYearError" class="error-message"></div>

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
            <div id="boardError" class="error-message"></div>

            <label for="version">Version (Eng/Ban)</label>
            <select id="version" name="version">
                <option value="eng">English</option>
                <option value="ban">Bangla</option>
            </select>
            <div id="versionError" class="error-message"></div>

            <label for="dept">Department for admission</label>
            <select id="dept" name="dept">
                <option value="science">Science</option>
                <option value="arts">Arts</option>
                <option value="commerce">Commerce</option>
            </select>
            <div id="deptError" class="error-message"></div>

            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var isValid = true;
            //check roll
            var rollNumber = document.getElementById("b_roll").value;
            if (rollNumber.trim() === "") {
                document.getElementById("rollNumberError").innerHTML = "Roll Number is required";
                isValid = false;
            } else {
                document.getElementById("rollNumberError").innerHTML = "";
            }

            // Check Name
            var name = document.getElementById("name").value;
            if (name.trim() === "") {
                document.getElementById("nameError").innerHTML = "Name is required";
                isValid = false;
            } else {
                document.getElementById("nameError").innerHTML = "";
            }

            // Check Father Name
            var fatherName = document.getElementById("fatherName").value;
            if (fatherName.trim() === "") {
                document.getElementById("fatherNameError").innerHTML = "Father Name is required";
                isValid = false;
            } else {
                document.getElementById("fatherNameError").innerHTML = "";
            }

            // Check Mother Name
            var motherName = document.getElementById("motherName").value;
            if (motherName.trim() === "") {
                document.getElementById("motherNameError").innerHTML = "Mother Name is required";
                isValid = false;
            } else {
                document.getElementById("motherNameError").innerHTML = "";
            }

            // Check Date of Birth
            var dob = document.getElementById("dob").value;
            if (dob.trim() === "") {
                document.getElementById("dobError").innerHTML = "Date of Birth is required";
                isValid = false;
            } else {
                document.getElementById("dobError").innerHTML = "";
            }

            // Check Phone
            var phone = document.getElementById("phone").value;
            if (isNaN(phone) || phone.trim() === "") {
                document.getElementById("phoneError").innerHTML = "Please enter a valid phone number";
                isValid = false;
            } else {
                document.getElementById("phoneError").innerHTML = "";
            }

            // Check Email
            var email = document.getElementById("email").value;
            if (!isValidEmail(email)) {
                document.getElementById("emailError").innerHTML = "Please enter a valid email address";
                isValid = false;
            } else {
                document.getElementById("emailError").innerHTML = "";
            }

            // Check Address
            var address = document.getElementById("address").value;
            if (address.trim() === "") {
                document.getElementById("addressError").innerHTML = "Address is required";
                isValid = false;
            } else {
                document.getElementById("addressError").innerHTML = "";
            }

            // Check School
            var school = document.getElementById("school").value;
            if (school.trim() === "") {
                document.getElementById("schoolError").innerHTML = "School is required";
                isValid = false;
            } else {
                document.getElementById("schoolError").innerHTML = "";
            }

            // Check SSC GPA
            var sscGPA = document.getElementById("sscGPA").value;
            if (isNaN(sscGPA) || sscGPA.trim() === "") {
                document.getElementById("sscGPAError").innerHTML = "Please enter a valid GPA";
                isValid = false;
            } else {
                document.getElementById("sscGPAError").innerHTML = "";
            }

            // Check Passing Year
            var passingYear = document.getElementById("passingYear").value;
            if (passingYear.trim() === "") {
                document.getElementById("passingYearError").innerHTML = "Passing Year is required";
                isValid = false;
            } else {
                document.getElementById("passingYearError").innerHTML = "";
            }

            // Check Board
            var board = document.getElementById("board").value;
            if (board.trim() === "") {
                document.getElementById("boardError").innerHTML = "Board is required";
                isValid = false;
            } else {
                document.getElementById("boardError").innerHTML = "";
            }

            // Check Version
            var version = document.getElementById("version").value;
            if (version.trim() === "") {
                document.getElementById("versionError").innerHTML = "Version is required";
                isValid = false;
            } else {
                document.getElementById("versionError").innerHTML = "";
            }

            // Check Department
            var dept = document.getElementById("dept").value;
            if (dept.trim() === "") {
                document.getElementById("deptError").innerHTML = "Department is required";
                isValid = false;
            } else {
                document.getElementById("deptError").innerHTML = "";
            }

            return isValid;
        }

        function isValidEmail(email) {
            // Regular expression for basic email format validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>

</html>
