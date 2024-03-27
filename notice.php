<?php
error_reporting(0);
session_start();
session_destroy();



$host="localhost";
$user="root";
$password="";
$db="clg_db";


$data=mysqli_connect($host,$user,$password,$db);

$sql="select * from teacher";
$result=mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinajpur Govt. City College</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style type="text/css">
       
        .teachers-section {
            width: 80%;
            margin: 20px auto;
        }

        .teachers-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .teacher-box {
            width: 250px;
            margin: 20px;
            text-align: center;
            background-color: #f0f0f0;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .teacher {
            position: relative;
        }

        .teacher img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .teacher-info {
            padding: 15px;
        }

        .teacher-name {
            margin: 0;
            font-weight: bold;
        }

        .t_desc {
            margin: 0;
            color: skyblue;
        }

        .img-container {
            max-height: 200px;
        }

        .img-container .t_img {
            max-height: 100%;
            width: auto;
            display: block;
            margin: 0 auto;
        }

        
        .leadership-section {
            width: 80%;
            margin: 20px auto;
        }

        .leadership-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .leader-box {
            width: 250px;
            margin: 20px;
            text-align: center;
            background-color: #f0f0f0;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .leader {
            position: relative;
        }

        .leader img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .leader-info {
            padding: 15px;
        }

        .leader-name {
            margin: 0;
            font-weight: bold;
        }

        .t_desc {
            margin: 0;
            color: #555;
        }

        .img-container {
            max-height: 200px;
        }

        .img-container .t_img {
            max-height: 100%;
            width: auto;
            display: block;
            margin: 0 auto;
        }

        footer {
            background-color: #eee;
            padding: 2px;
            text-align: center;
        }

        footer a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
        }

        .text-container {
        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;
        overflow: hidden;
        width: 100%;
        height: 30px;
        background: linear-gradient(45deg, #3498db, #2ecc71);
    }

    .moving-text {
      position: absolute;
      white-space: nowrap;
      font-size: 20px;
      font-family: 'Arial', sans-serif;
      color: white;
      animation: moveText 10s linear infinite;
    }

    @keyframes moveText {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }



    .notice-board {
        width: 80%;
        margin: 20px auto;
        background: linear-gradient(45deg, #3498db, #2ecc71);
        border: 2px solid #333;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .notice-board h2 {
        text-align: center;
        margin: 0;
        padding: 10px 0;
        background: linear-gradient(45deg, #3498db, #2ecc71);
        color: white;
    }

    .notice-board ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .notice-board li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background: linear-gradient(45deg, #3498db, #2ecc71);
    }

    .notice-board li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .notice-board li a:hover {
        color: #2ecc71;
    }
    </style>


</head>
<body>
    <header>
        <div class="header-content">
            <div class="college-name">
                <h2>দিনাজপুর সরকারি সিটি কলেজ</h2>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="অনুসন্ধান">
                <button>খুজুন</button>
            </div>
            <div class="date-time">
                <p id="datetime"><?php echo date('l, F j, Y g:i A'); ?></p>
            </div>
        </div>
    </header>

    <script>
        function updateDateTime() {
            var now = new Date();
            var datetimeElement = document.getElementById('datetime');
            datetimeElement.innerHTML = now.toDateString() + ' ' + now.toLocaleTimeString();
        }

     
        setInterval(updateDateTime, 1000);

        window.onload = updateDateTime;
    </script>


    <div id="sliderTop">
        <div class="slide" style="background-image: url('dgcc.jpg');">
            <div class="favicon"><img height="100px" width="100px" src="favicon.png" alt=""></div>
            <h1>  <h1>  দিনাজপুর সরকারি সিটি কলেজ</h1></h1>
        </div>
        <div class="slide" style="background-image: url('dgcc1.jpg');">
            <div class="favicon"><img height="100px" width="100px" src="favicon.png" alt=""></div>
            <h1>  <h1>  দিনাজপুর সরকারি সিটি কলেজ</h1></h1>
        </div>
        
    </div>

    </div>

    <script>
        var i = 0;
        var slides = document.querySelectorAll('.slide');
        var slideTime = 5000; // 5 seconds

        function changePicture() {
            slides[i].style.opacity = 0; 

            if (i < slides.length - 1) {
                i++;
            } else {
                i = 0;
            }

            slides[i].style.opacity = 1;
            setTimeout(changePicture, slideTime);
        }

        
        window.onload = changePicture;
    </script>
<nav class="dropdownmenu">
    <ul>
        <li><a href="index.php">প্রথম পাতা</a></li>
        <li><a href="about_us.php">আমাদের সম্পর্কে</a>
                        <ul id="submenu">
                            <li><a href="introduction.php">প্রতিষ্ঠান পরিচিতি</a></li>
                            <li><a href="departments.php">বিভাগ সমুহ</a></li>
                            <li><a href="organogram.php">প্রতিষ্ঠানের অর্গানোগ্রাম</a></li>
                            <li><a href="ex_principals.php">প্রাক্তন অধ্যক্ষবৃন্দ</a></li>
                            <li><a href="workers.php">কর্মকর্তা/কর্মচারীবৃন্দ</a></li>
                            <li><a href="overview.php">একনজরে সিটি কলেজ</a></li>
                            <li><a href="citizen_service.php">নাগরিক সেবা</a></li>
                            <li><a href="annual_contract.php">বার্ষিক কর্মসম্পাদন চুক্তি</a></li>
                        
                        </ul>
        </li>
        <li><a href="">অধ্যক্ষ</a>
                        <ul id="submenu">
                            <li><a href="principal.php">অধ্যক্ষ</a></li>
                            <li><a href="principal_office.php">অধ্যক্ষের অফিস</a></li>
                            <li><a href="activities.php">কার্যক্রম</a></li>
                            
                        
                        </ul>    
        </li>


        <li><a href="">একাডেমিক</a>
                        <ul id="submenu">
                            <li><a href="library.php">গ্রন্থাগার ব্যবস্থা</a></li>
                            <li><a href="teaching.php">পাঠদান পদ্ধতি</a></li>
                            <li><a href="exam.php">পরীক্ষা পদ্ধতি</a></li>
                            <li><a href="academic_rule.php">একাডেমিক বিধিমালা</a></li>
                            <li><a href="academic_calender.php">একাডেমিক ক্যালেন্ডার</a></li>
                            <li><a href="auditorium.php">অডিটোরিয়াম</a></li>
                            <li><a href="result.php">ফলাফল</a></li>
                            <li><a href="computer.php">কম্পিউটার ল্যাব</a></li>
                            <li><a href="science_lab.php">সায়েন্স ল্যাব</a></li>
                        
                        
                        </ul> 
        </li>


        <li><a href="">ভর্তি</a>
                        <ul id="submenu">
                            <li><a href="admission_info.php">ভর্তি তথ্য</a></li>
                            <li><a href="admission_form.php">ভর্তি আবেদন</a></li>
                        
                        </ul> 
    
        </li>



        <li><a href="">অন্যান্য পাঠ্যক্রম</a>
                        <ul id="submenu">
                            <li><a href="bncc.php">বিএনসিসি</a></li>
                            <li><a href="scout.php">স্কাউট</a></li>
                            <li><a href="cultural.php">বার্ষিক কালচারাল প্রোগ্রাম</a></li>
                            <li><a href="sports.php">খেলাধুলা</a></li>
                            <li><a href="debating_club.php">ডিবেটিং ক্লাব</a></li>
                            
                        
                        
                        </ul> 
        </li>
        
        <li><a href="notice.php">নোটিশ</a></li>
        <li><a href="gallery.php">গ্যালারী</a></li>
        <li><a href="contact.php">যোগাযোগ</a></li>
        <li><a href="login_admin.php">ADMIN</a></li>
        <li><a href="login_student.php">STUDENT LOGIN</a></li>
    </ul>
</nav>


<br><br><br><br>

<div class="text-container">
  <div class="moving-text"><p>দিনাজপুর সরকারি সিটি কলেজের ওয়েবসাইটে আপনাকে স্বাগতম  !</p></div>
</div>


<div class="notice-board">
        <h2>Notice Board</h2>
        <ul>
            <?php
            
            $folderPath = "./Notice";

            $pdfFiles = glob($folderPath . "/*.pdf");

            foreach ($pdfFiles as $pdfFile) {
                $pdfFileName = basename($pdfFile);
                echo "<li><a href='$pdfFile' target='_blank'>$pdfFileName</a></li>";
            }
            ?>
        </ul>
    </div>


<footer>
        <div>
            <p><a href="#">অভিযোগ ও অনুসন্ধান</a> | <a href="#">সাইট ম্যাপ</a> | <a href="#">ফিডব্যাক</a></p>
            <P><a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">YouTube</a></p>
            <p>dinajpurgcc.edu.bd © 2024</p>
        </div>
    </footer>


</html>
