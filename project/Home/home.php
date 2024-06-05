<?php 
error_reporting(0);
session_start();
?>



<!-- Html code-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="whttp://localhost/servers/project/Home/home.phpidth=device-width, initial-scale=1.0">
  <title>Home Page</title> 
  <link rel="stylesheet" href="/servers/project/Home/home.css">
  <script src="/servers/project/Home/home.js"></script>
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon">
</head>
<body >
  <div class="container">
    <div >
      <ul class="sidenav">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="/servers/project/About Me/about.php" >About Me</a></li>
        <li><a href="/servers/project/Register/register.php">Register</a></li>
        <li><a href="/servers/project/Course/courseview.php">Courses 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Cv/cv.php">Cv 
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
      <p><center><a href="/servers/project/Register/<?php 
        if($_SESSION['name']!=""){echo 'login.php?login=0.103">log out';} 
        else{echo 'register.php">log in';}?>
        </a></center>
      </p>
    </div>
    </div> 


    <!--CODE FOR HOME CONTENT-->
    <div class="content" style="background-image">
      <div>
        <h1><b><i>WELCOME</i></b></h1><br>
        <p>Welcome to our website! We are thrilled to have you here and excited to share our passion for university ideas with you. Our platform serves as a hub for all things related to higher education, offering a wealth of information, resources, and inspiration for students, educators, and lifelong learners alike. Whether you're a prospective student exploring different universities, a current student navigating the challenges of academia, or an academic professional seeking to expand your knowledge, we've got you covered. Our dedicated team of experts has carefully curated a collection of articles, guides, and tools to help you make informed decisions about your educational journey. From tips on choosing the right major to advice on study techniques and career planning, our aim is to empower you with the knowledge and insights needed to thrive in the university setting. We believe that universities play a vital role in shaping individuals and society, and we are committed to fostering a community where ideas are celebrated, intellectual curiosity is nurtured, and lifelong learning is embraced. So, take a moment to explore our website, dive into our diverse range of university-related topics, and let the journey of discovery begin. Welcome to the world of university ideas!</p>
      </div>
    </div>
  </div>
</body>
</html>