<?php 
error_reporting(0);
session_start();
if($_SESSION['name']==""){
  header("location:/servers/project/Register/register.php?login=10");
}
 ?>



<!-- Html code-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
  <script src="/servers/project/Library/Library.js"></script>
  <link rel="stylesheet" href="library.css">
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon"></head>
<body>
  <div class="container">
    <div >
      <ul class="sidenav">
        <li><a href="/servers/project/Home/home.php">Home</a></li>
        <li><a href="/servers/project/About Me/about.php" >About Me</a></li>
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
        <li><a class="active" href="#Library">Library 
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
      <p><center><a href="/servers/project/Register/<?php 
        if($_SESSION['name']!=""){echo 'login.php?login=0.103">log out';} 
        else{echo 'register.php">log in';}?>
        </a></center>
      </p>
    </div>
    </div> 


    <div class="content">
      <div>
        <h1><b><i>Library</i></b></h1><br>
      </div>


<!-- ACQUIRING LIBRARY FROM DATABASE-->
<?php 
$connection= mysqli_connect("localhost","root","","personal");

if($connection===false){
  die("ERROR: Could not connect" .mysqli_connect_error());
}
  
// create database query
$sql= "SELECT title , descript , publisher , yr , author  FROM library";
$result= mysqli_query($connection,$sql);
while($row= mysqli_fetch_array($result)){
?>


<!-- DISPLAYING LIBRARY FROM DATABASE-->
      <div class="reveal">
        <h2 class="title"><?php echo $row["title"];?></h2>
        <span class="discription"> <?php echo $row["descript"];?></span> <br>
        <span class="year"><i><?php echo $row["yr"];?></span></i>  <br>
        <span class="publisher"><b><?php echo $row["publisher"];?></b> </span><br>
        <span class="author"><b><i> <?php echo $row["author"];?></i></b></span>
      </div>

      
<!-- CLOSING CONNECTION TO DATABASE-->
<?php
  }
  mysqli_close($connection);
?>

    </div>
  </div>
</body>
</html>