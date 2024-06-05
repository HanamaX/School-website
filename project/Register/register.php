'<?php 
error_reporting(0);
session_start();
$login=$_GET['login'];

//Restrict if already loggedin
if($_SESSION['name']!=""){
  echo '<script>alert("You must logout to access this part of the website");
  window.history.go(-1);
  </script>';
  }



//alerts involving registration
if($login==0.1){
  echo '<script>alert("password should contain both alphanumeric characters and special characters")</script>';
  }
if($login==0.11){
    echo '<script>alert("username already available"); window.history.go(-1);</script>';
    }
if($login==0.2){
    echo '<script>alert("invalid mobile number")</script>';
    }
if($login==0.022){
  echo '<script>alert("Successfully Registered")</script>';
  }
if($login==10){
    echo '<script>alert("You must login to access this part of the website")</script>';
    }

if($login==10.1){
  echo '<script>alert("Invalid Entry")</script>';
  }
?>




<!-- Html code-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
  <script src="register.js"></script>
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon">
</head>
<body>
  <div class="container">
    <div>
      <ul class="sidenav">
        <li><a href="/servers/project/Home/home.php">Home</a></li>
        <li><a href="/servers/project/About Me/about.php" >About Me</a></li>
        <li><a class="active" href="#Register">Register</a></li>
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


    <!--REGISTRATION FORM-->
    <div class="content">
    <!--LOG_IN FORM-->
      <div class="sign">
        <button class="sig"  onclick="sty()" >Log in</button>
        <span class="sin" id="son">
          <form class="ben" method="POST" action="login.php">
          <img class="cancel" src="cancel.jpg" onclick="remv()" >
            <input type="text" name="Username" required placeholder="Username" style=" height:30px;width: 250px;">
            <hr>
            
             <input type="password" name="passcode" minlength="10" placeholder="Password"  required style="height:30px;width: 250px;"><br><hr>
             <input style="height: 30px; width: 220px; background-color: rgb(54, 54, 187);  border-radius: 6px" type="submit" value="Login" ><br>
            </form>
        </span>
       </div>

      <!--SIGN_UP FORM-->
       <div class="sign" >
        <button class="sog" onclick="stym()">Sign up</button>
        <span class="sim" id="som">
          <form  action="register1.php" method="post" enctype="multipart/form-data">
            <img class="cancel" src="cancel.jpg" onclick="remvm()" >
            <h2><u>REGISTRATION FORM</u></h2>
            <div class="ben1">
             <input type="text" name="fname"  required placeholder="First Name" style="width:100%;"><hr><br> 
             <input type="text" name="mname"  required placeholder="Middle Name:" style="width:100%;"><hr><br>
             <input type="text" name="sname"  required placeholder="Surname:" style="width:100%;"><hr><br>
              <input type="text" name="uname" required placeholder="Username" style="width:100%;"><hr><br>
              </label><input type="number" name="mno" maxlength="10" required placeholder="Mobile No:" style="width:100%;"  pattern = "/^[0-9]+$/" required><hr><br>
              <input type="email" name="email"  required placeholder="Email" style="width:100%; " pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required /><hr><br>
              <input type="password" name="passcode" minlength="10" placeholder="Password" style="width:100%;"><hr><br>
              <label>Social Media Accounts:</label> <br>
              <input type="radio" name="social" value="Facebook" style="margin-left: 30%;">Facebook <br>
              <input type="radio" name="social" value="Twitter" style="margin-left: 30%;">Twitter <br>
              <input type="radio" name="social" value="Instagram" style="margin-left: 30%;">Instagram<br>
              <label > Cv:</label><input type="file" name="cv" required  style="margin-left: 22%;" accept=".pdf,.docx"><br>
              <label>
                Sex:<input type="radio" value="Male" name="sex" style="margin-left: 79px;">Male
                <input type="radio" value="Female" name="sex" required>Female
              </label><br>
              </div>
            
              <input type="submit" class="sub" style="margin-bottom: 10px;"><br>
              <input type="reset" class="res">
           </form>
        </span>
       </div>
    </div>
  </div>
</body>
</html>












