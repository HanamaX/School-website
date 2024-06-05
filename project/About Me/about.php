<?php 
error_reporting(0);
session_start();
?>


<!--HTML CODE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link rel="stylesheet" href="/servers/project/About Me/about.css">  
  <script src="/servers/project/About Me/about.js"></script>
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon"></head>
<body>
  <div class="container">
    <div>
      <ul class="sidenav">
        <li><a href="/servers/project/Home/home.php">Home</a></li>
        <li><a class="active" href="#about" >About Me</a></li>
        <li><a href="/servers/project/Register/register.php">Register</a></li>
        <li><a href="/servers/project/Course/courseview.php">Courses 
            <?php
              if($_SESSION['name']!="") 
              echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Cv/cv.php">Cv 
            <?php
              if($_SESSION['name']!="") 
              echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Community/community.php">Community Engagement</a></li>
        <li><a href="/servers/project/News/news.php">News</a></li>
        <li><a href="/servers/project/Library/Library.php">Library 
            <?php
              if($_SESSION['name']!="") 
              echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
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

    
    <!--ABOUT ME CODE-->
    <div class="content">
      <div class="reveal">
        <h1><b><i>EDUCATION BACKGROUND</i></b></h1>
        <p>Welcome to my webpage my name is Hashim Nassib Mahmoud about my education background I am currently in University Of Dar es Salaam (UDSM). I attended Primary School from 2007 to 2015 in Chemchemi Primary and Nursery school where i finished my primary education then i went to Shamsiye Secondary and High School where I got my Secondary School certificate from 2016 to 2019 afterwards I went to Ahmes Secondary and High School from 2020 to 2022 where I got my Advance School certificate. then joined the University. </p>
      </div>

      <div class="reveal">
        <h1><b><i>MY CURRENT UNIVERSITY PROGRAMME</i></b></h1>
        <p>I am currently enrolled in Bachelor Of Science in Computer Science (BSc.CS) in University of Dar es Salaam <br> The reasons I decided to join this programme are that basically the world is developing daily due to the advancement of science and Technologyy and soon we are to have Robots and so working for us in various fields hence it seemed to me to be the programme that will get attention in the near future and hence I would like to be a part of the great development of the world, <br> also being a Computer Scientist one can work on different projects including their own hence it is easy to employ yourself and develop thoroughly since nowdays employnment have been kind of headache to many of the elites living in our nation hence one will need to be creative and develop their own thing to survive in the streets so Computer Science seems to be a good choice <br> My favourite course up to now is IS 181 i.e. (Web Programming) this is because it is more practical than many others and it is also interesting as one is given a lot of choices to create website that normally we search the internet for them and we seem to like their designs and so now imagining that kind of knowledge in your own hands makes me excited. <br> We dont have discussion groups in this course but we involve with each others that may seem to have even little knowledge to teach us in accomplishing various tasks  </p>
      </div>

      <div class="reveal">
        <h1><b><i>MEANS OF SPONSORING MY DEGREE</i></b></h1>
        <p>There are various ways that my current degree Programme can be sponsored  <br>
        <b>Self Sponsored</b>: this involves a student being able to pay for everything on thier own or being their parents to give them money, most of the m who go through this method are the ones who couldn't get loan by HESLB <br>
        <b>Scholarship</b>: this involves a student that is sponsored that means they are given the money by an organisation to support their studies as long as they meet the specified demands given to the that may include a certain GPA, discipline etc. the sponsorship that are currently offered are <b>Samia Scholarship</b> and <b>Merit</b> <br>
        <b>ponsored by the Higher Education Students' Loans Board (HESLB)</b>:  this involves a student that is sponsored that means they are given the money by an organisation to support their studies but that they will pay when they finish their university Studies.
       </p>
      </div>

      <div class="reveal">
        <h1><b><i>CAREER GOALS</i></b></h1>
        <p>My career Goals are to be a programmer because programming takes a big part in thie course and also required by many of the companies as they require various programmers to help them create various softwares and hardwares but programmers are the ones who can make them understand what to do and when.</p>
      </div>
    </div>
  </div>
</body>
</html>