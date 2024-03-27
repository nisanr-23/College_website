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
            color: aliceblue;
            margin: 0;
            font-weight: bold;
        }

        .t_desc {
            margin: 0;
            color: aliceblue;
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

    .youtube-section {
        width: 80%;
        margin: 20px auto;
        text-align: center;
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
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
        <!-- <li><a href="login_admin.php">ADMIN</a></li> -->
        <!-- <li><a href="login_student.php">STUDENT LOGIN</a></li> -->
        <li><a href="student/login-std.php">RESULT</a></li>
        <!-- <li><a href="DATA_ADD.php">Add</a></li> -->
    </ul>
</nav>


<br><br><br><br>

<div class="text-container">
  <div class="moving-text"><p>দিনাজপুর সরকারি সিটি কলেজের ওয়েবসাইটে আপনাকে স্বাগতম  !</p></div>
</div>

<div class="notice-board">
    <h3>নোটিশ বোর্ড</h3>
    <p><ul id="notices-list">
            <li>
                <p><a href="NOice/Masud-Rana-noc.pdf">Noc of Assistant professor Md Masud Rana</a></p>
            </li>
            <li>
                <p><a href="Notice/NOC BARI.pdf">NOC Of Associate Professor Mohammed Mahsin-Ul-Bari</a></p>
            </li></ul>
            <br>
        <a href="notice.php">See more</a>
    </p>
  </div>
  
  
  <section class="teachers-section">
    <center><h2><u>প্রশাসক</u></h2></center>
    <div class="teachers-container">
        <div class="teacher-box">
            <div class="img-container">
                <img class="t_img" src="principal.jpg" alt="Principal">
            </div>

            <div class="teacher-info">
                <p class="teacher-name">অধ্যক্ষঃ</p>
                <p class="teacher-name">MD. Mojammel Haque</p>
                
            </div>
        </div>
        <div class="teacher-box">
            <div class="img-container">
                <img class="t_img" src="vp.jpg" alt="Vice Principal">
            </div>
            <div class="teacher-info">
                <p class="teacher-name">উপাধ্যক্ষ</p>
                
            </div>
        </div>
    </div>
</section>



<br><br>

    <section class="teachers-section">
    <center><h2><u>শিক্ষকবৃন্দ</u></h2></center>
    <div class="teachers-container">
        <?php
        while($info=$result->fetch_assoc())
        {
        ?>  
            <div class="teacher-box">
                <div class="img-container">
                    <img class="t_img" src="<?php echo "{$info['image']}"; ?>" alt="Teacher 1">
                </div>
                <div class="teacher-info">
                    <p class="teacher-name"><?php echo "{$info['name']}"; ?></p>
                    <p class="t_desc"><?php echo "{$info['description']}"; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>





    <div>
        <h3  align="center">ঐতিহাসিক পটভূমি </h3>
        <p align="justify">বাণিজ্যিক ক্ষেত্রে দক্ষ জনশক্তির প্রয়োজনীয়তা উপলদ্ধি করে ১৯৫৯ সালের জাতীয় শিক্ষা কমিশনের সুপারিশ মোতাবেক ১৯৬৫ সাল থেকে ১৯৬৭ মধ্যে মার্কিন যুক্তরাষ্টের টঝঅওউ এর আর্থিক ও কারিগরি সহায়তায় তৎকালীন বৃহত্তর ১৬ টি জেলা সদরে ১৬টি গভঃ কমার্শিয়াল ইনস্টিটিউট স্থাপন করা হয়। এর মূল লক্ষ্য ও উদ্দেশ্য ছিল সরকারি -বেসরকারি অফিস, ব্যাংক, শিল্প প্রতিষ্ঠান, বিদেশী মিশন ও কোম্পানির জন্য দক্ষ অফিস কর্মী তৈরির নিমিত্তে শিক্ষাদান করা। বাংলাদেশের ১৬টি গভঃ কমার্শিয়াল ইনস্টিটিউটের মধ্যে দিনাজপুর গভঃ কমার্শিয়াল ইনস্টিটিউট অন্যতম একটি। দিনাজপুর গভঃ কমার্শিয়াল ইনস্টিটিউট ১৯৬৭ সাল হতে দিনাজপুর পলিটেকনিক ইনস্টিটিউট ক্যাম্পাসে পৃথক প্রোগ্রাম হিসাবে শিক্ষাদান করে আসছিল। ১৯৮৪ সালের জাতীয় শিক্ষা কমিশনের সুপারিশ মোতাবেক ১৯৮৪ সালে গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের নির্দেশে মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তরের অধীনে এ প্রোগ্রামকে স্বতন্ত্র ক্যাম্পাসে আলাদা করণের সিদ্ধান্ত গ্রহণ করা হয়। উক্ত সিদ্ধান্ত বাস্তবায়নের লক্ষ্যে প্রাথমিক পর্যায়ে ১৯৮৪ সালে জরুরি ভিত্তিতে একটি ভাড়া করা বাড়িতে ইনস্টিটিউট তার কার্যক্রম শুরু করে। তখন সাময়িক ভাবে বালুবাড়িতে আইন কলেজ ভবনে ১৯৮৪ সালের জুলাই মাসে ইনস্টিটিউটের সার্বিক কার্যক্রম শুরু হয়। এই শিক্ষা ব্যবস্থার অধিকতর উন্নয়নের জন্য একটিকে স্কীমের আওতায় আনা হয় এবং এটি প্রকল্পভূক্ত হয়। পরে ১৯৯৭ সালে এই ইনস্টিটিউট নিজস্ব ক্যাম্পাসে স্থানান্তরিত হয়। দুই বছর মেয়াদি ডিপ্লোমা -ইন- বিজনেস স্টাডিজ কোর্সে ভর্তিকৃত শিক্ষার্থীকে সফলতার সাথে কোর্স সম্পন্ন করার পর মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, ঢাকা কর্তৃক ডিপ্লোমা -ইন- বিজনেস স্টাডিজ প্রদান করা হয়। উক্ত ডিপ্লোমা -ইন- বিজনেস স্টাডিজ কোর্স বাংলাদেশের যে কোন শিক্ষা বোর্ডের উচ্চ মাধ্যমিক (ব্যবসায় শিক্ষা) কোর্সের মর্যাদাসম্পন্ন। বর্তমান সরকার শিক্ষা ক্ষেত্রে যুগান্তকারী পরিবর্তন সাধনে বদ্ধ পরিকর। তারই ধারাবাহিকতায় শিক্ষা মন্ত্রণালয় এবং মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তরের আওতাধীন ১৬ টি গভঃ কমার্শিয়াল ইনস্টিটিউটকে যুগোপযোগী করণের লক্ষ্যে প্রতিষ্ঠানটির নাম পরিবর্তন করে দিনাজপুর সরকারি সিটি কলেজ, দিনাজপুর নামকরণ করা হয় এবং মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা বোর্ড, দিনাজপুর এর অধীনে ন্যস্ত করা হয়। প্রতিষ্ঠানটি ২০১৬-২০১৭ শিক্ষাবর্ষ হতে বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা শাখায় ছাত্র-ছাত্রী ভর্তি করে নতুন উদ্যমে যাত্রা শুরু করে।</p>
    </div>

    
<center><h1><u><b>Map:</b></u></h1></center>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.3895119951203!2d88.64442797517835!3d25.62519487743799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb52916bc80f55%3A0x3d458a38f500c084!2sDinajpur%20Government%20City%20College!5e0!3m2!1sen!2sbd!4v1706812733970!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br><br>


<section class="youtube-section">
    <h2><u>Videos</u></h2>
    <div class="video-container">
        
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dobce9k1XKc?si=AmULg4_CUPUv1Q3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>

<footer>
        <div>
            <p><a href="#">অভিযোগ ও অনুসন্ধান</a> | <a href="#">সাইট ম্যাপ</a> | <a href="#">ফিডব্যাক</a></p>
            <P><a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">YouTube</a></p>
            <p>dinajpurgcc.edu.bd © 2024</p>
        </div>
    </footer>


</html>
