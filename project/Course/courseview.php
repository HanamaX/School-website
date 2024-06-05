<?php 
error_reporting(0);
session_start();
if($_SESSION['name']==""){
  header("location:/servers/project/Register/register.php?login=10");
}
$UN=$_SESSION['name'];
$login=$_GET['login'];

if($login==66){
  echo '<script>alert("Invalid Course Grade");</script>';
  }
 ?>




<!-- HTML CODE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <link rel="stylesheet" href="/servers/project/Course/course.css">
  <script src="/servers/project/Course/course.js"></script>
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon"></head>
<body>
  <div class="container">
    <div >
      <ul class="sidenav">
        <li><a href="/servers/project/Home/home.php">Home</a></li>
        <li><a href="/servers/project/About Me/about.php " >About Me</a></li>
        <li><a href="/servers/project/Register/register.php ">Register</a></li>
        <li><a class="active" href="#Courses">Courses 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Cv/cv.php ">Cv 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Community/community.php ">Community Engagement</a></li>
        <li><a href="/servers/project/News/news.php ">News</a></li>
        <li><a href="/servers/project/Library/Library.php ">Library 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Contact/Contact.php ">Contact</a></li>
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
    
    <div class="content">
      <div>
        <h1><b><i>Courses</i></b></h1><br>
      </div>


      <!-- DISPLAYING REGISTERED COURSES FROM DATABASE-->
      <div>
      <?php
      $connection=mysqli_connect("localhost","root","","personal");

      if($connection===false){
        die("couldnt connect to server" .mysqli_connect_error());
      }
      $sql= "SELECT * FROM courses";
      $result= mysqli_query($connection,$sql);
      echo "<h2><center>Table of Registered Courses</h2>";
      $i=1;
      echo '<table border=2px; style="border-collapse:collapse;">';
      echo '<tr style="background-color:rgb(175, 175, 173); ">';
      echo '<td style="padding: 3px;"> S/N</td>';
      echo '<td style="padding: 3px;">Course Name</td>';
      echo '<td style="padding: 3px;">Course Code</td>';
      echo '<td style="padding: 3px; ">Course Discription</td>';
      echo '<td style="padding: 3px;">Course Department</td>';
      echo '<td style="padding: 3px;">Semester Offered</td>';
      echo '<td style="padding: 3px;">Academic Year</td>';
      echo '<td style="padding: 3px;">Course Instructor</td>';
      echo '<td style="padding: 3px;">Course Grade</td>';
      echo '<td style="padding: 3px;">Edit</td>';
      echo '</tr>';
      while($row= mysqli_fetch_array($result)){
          
          echo '<tr>';
          echo '<td style="padding: 3px;">' . $i . '</td>';
          echo '<td style="padding: 3px;">' . $row['Coursename'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['Course_Code'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['discription'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['department'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['semester'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['yr'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['instructor'] . '</td>';
          echo '<td style="padding: 3px;">' . $row['grade'] . '</td>';
          echo '<td style="padding: 3px;"> <a href="course.php?Id='.$row['ID'].'"> DELETE</a></td>';
          echo '</tr>';
          $i++;
      }
      echo '</table> </center>';
      echo '<a href="course.php?Id=0">CLEAR ALL DATA</a>';
      mysqli_close($connection);
      ?>
      </div>


      <!--REGISTERING COURSES-->
      <div class="sign">
        <button class="sig"  onclick="sty()" >Register Course</button>
        <span class="sin" id="son" >
          <form action="course.php" method="post">
            <img class="cancel" src="cancel.jpg" onclick="remv()" >
            <div class="text" style="text-align: left;">
               <input type="text" name="Coursename" maxlength="30" required placeholder="Course Name:" style="width: 100%;"><hr> <br>
  
            <label for="cars">Choose a Course Code:</label> <br>
  
            <select name="Course_Code" id="Course code" required>
              <option value="CL 111">CL 111</option>
              <option value="CS 151">CS 151</option>
              <option value="CS 174">CS 174</option>
              <option value="DS 112">DS 112</option>
              <option value="IS 162">IS 162</option>
              <option value="MT 100">MT 100</option>
              <option value="CS 173">CS 173</option>
              <option value="CS 175">CS 175</option>
              <option value="DS 113">DS 113</option>
              <option value="IS 143">IS 143 </option>
              <option value="IS 158">IS 158</option>
              <option value="IS 171">IS 171</option>
              <option value="IS 181">IS 181</option>
            </select> <br><br><br>
  
           <textarea name="discription"  maxlength="50" style=" height: 70px;  font-size: 20px; margin-bottom:-20px" required placeholder="Brief course discription:"></textarea> <hr><br>
  
            <label for="department">Offering department:</label><br>
            <select name="department" required>
              <option value="DEPERTMENT OF WATER RESOURCES ENGINEERING (WRE)">DEPERTMENT OF WATER RESOURCES ENGINEERING (WRE)</option>
              <option value="DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</option>
              <option value="DEPARTIMENT OF DEVELOPMENT STUDIES">DEPARTIMENT OF DEVELOPMENT STUDIES</option>
              <option value="DEPARTIMENT OF MATHEMATICS ">DEPARTIMENT OF MATHEMATICS</option>
            </select> <br>
  
            <label for="semester">Semester it was offered:</label> <br>
            <input type="radio" name="semester" value="I"> I 
            <input type="radio" name="semester" value="II" required> II <br>

            <label for="year">Academic Year:</label><br>
            <select name="yr" id="yr" required>
              <option value="2023">2023</option>
              <option value="2022">2022</option>
            </select> <br>
  
             <input type="text" name="instructor" maxlength="30" required placeholder="Course Instructor:" style="width: 100%;"><hr><br>
            
             <input type="text" name="grade" maxlength="2" required placeholder="Course Grade:" style="width: 100%;"><hr><br>
            </div>
            
  
            <input type="submit" class="sub"><br>
            <input type="reset" class="res">
  
          </form>
        </span>
       </div>
    </div>
  </div>
</body>
</html>

































