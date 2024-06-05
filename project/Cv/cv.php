<?php 
error_reporting(0);
session_start();
if($_SESSION['name']==""){
  header("location:/servers/project/Register/register.php?login=10");
}
 ?>

 







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <link rel="stylesheet" href="/servers/project/Cv/cv.css">
  <style>
    @font-face {
  font-family: harmond;
  src: url("/servers/project/Menu\ Page/harmond-sembditacond.otf");
}
  </style>
  <script src="/servers/project/Cv/cv.js"></script>
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon"></head>
<body>
  <div class="container">
    <div>
      <ul class="sidenav">
        <li><a href="/servers/project/Home/home.php">Home</a></li>
        <li><a href="/servers/project/About Me/about.php" >About Me</a></li>
        <li><a href="/servers/project/Register/register.php">Register</a></li>
        <li><a href="/servers/project/Course/courseview.php">Courses 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a class="active" href="#Cv">Cv 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Community/community.php">Community Engagement</a></li>
        <li><a href="/servers/project/News/news.php">News</a></li>
        <li><a href="/servers/project/Library/Library.php">Library 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Contact/Contact.php">Contact</a></li>
      </ul>
    </div>


    <!-- PROFILE IMAGE-->
    <div  onmouseover="ddp()" onmouseleave="hdp()" style="position: fixed; top: 0; right: 0;" class="dp">
    <img  src="/servers/project/dp.jpg" style=" width:50px; height:50px; border-radius:10px;" > 
    <div class="hdp">
      <p>Hello! <?php echo $_SESSION['name'] ?> </p>  
      <p ><center><a href="/servers/project/Register/<?php 
        if($_SESSION['name']!=""){echo 'login.php?login=0.103">log out';} 
        else{echo 'register.php">log in';}?>
        </a></center>
      </p>
    </div>
    </div> 

    <!-- DISPALYING CV-->
    <div class="content">
      <div>
        <h1 style="font-family: harmond;">Curriculum Vitae</h1> <hr> <hr>
        <div class="section">
          <h2>Personal Information</h2><hr>
          <ul class="cv">
            <li class="cv"><strong>Name:</strong> Hashim Nassib Mahmoud</li>
            <li class="cv"><strong>Date of Birth:</strong> July 8th, 2000</li>
            <li class="cv"><strong>Email:</strong> hashimnassib1@gmail.com</li>
            <li class="cv"><strong>Phone:</strong> +255 717 459 930</li>
            <li class="cv"><strong>Address:</strong> Kijitonyama, Dar-es-Salaam, Tanzania</li>
          </ul>
        </div>

        <div class="section">
          <h2>Education</h2><hr>
          <ul class="cv">
            <li class="cv">
              <strong>Degree:</strong> Bachelor of Science in Computer Science<br>
              <strong>Institution:</strong> University of Example<br>
              <strong>Year:</strong> 2022-2025
            </li>
            <li class="cv">
              <strong>Certificate:</strong> Advanced Level Certificate<br>
              <strong>Institution:</strong> Ahmes Secondary and High School<br>
              <strong>Year:</strong> 2020-2022
            </li>
            <li class="cv">
              <strong>Certificate:</strong> Secondary Level Certificate<br>
              <strong>Institution:</strong> Shamsiye Secondary and High School<br>
              <strong>Year:</strong> 2016-2019
            </li>
            <li class="cv">
              <strong>Certificate:</strong> Primary Level Certificate<br>
              <strong>Institution:</strong> Chemchemi Nursery and Primary School <br>
              <strong>Year:</strong> 2007-2015
            </li>
          </ul>
        </div>

        <div class="section">
          <h2>Skills</h2><hr>
          <ul class="cv">
            <li class="cv">HTML/CSS</li>
            <li class="cv">JavaScript</li>
            <li class="cv">C Language</li>
            <li class="cv">Java</li>
          </ul>
        </div>

        <div class="section">
          <h2>Projects</h2><hr>
          <ul>
            <li>
              <strong>Web Development Project</strong><br>
              <strong>Description:</strong> Created a responsive website using HTML, CSS, and JavaScript. Implemented various features, such as a contact form and image gallery.
            </li><br>
            <li>
              <strong>Personal University Project</strong><br>
              <strong>Description:</strong> Creating a personal project website using HTML, CSS, and JavaScript that enables a user to login and register themselves to access various point of the website and submitting course name and marks etc.
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</body>
</html>