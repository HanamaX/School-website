<?php 
error_reporting(0);
session_start();
?>






<?php 
//ACQUIRING CONTACTS FROM DATABASE
$connection= mysqli_connect("localhost","root","","personal");

if($connection===false){
  die("ERROR: Could not connect" .mysqli_connect_error());
}
  

// create database query
$sql= "SELECT email ,contact1 , contact2 , twitter,instagram, facebook , street , region , country  FROM contact";
$result= mysqli_query($connection,$sql);
$row= mysqli_fetch_array($result)
?>



<!--HTML CODE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="/servers/project/Contact/Contact.css">
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
        <li><a class="active" href="#contact">Contact</a></li>
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


    <!--DISPLAYING CONTACTS FROM DATABASE-->
    <div class="content">
      <h1><b><i>Contacts</i></b></h1>

      <div>
        <h2><b><i>Email:</i></b></h2>
        <ul>
          <li> <?php echo $row['email']?> </li>
        </ul>
      </div>

      <div>
        <h2><b><i>Mobile Numbers:</i></b></h2>
        <ul>
          <li> <?php echo $row['contact1']?>  </li>
          <li> <?php echo $row['contact2']?>  </li>
        </ul>
      </div>

      <div>
        <h2><b><i>Twitter Account Name:</i></b></h2>
        <ul>
          <li> <?php echo $row['twitter']?>  </li>
        </ul>
      </div>

      <div>
        <h2><b><i>Instagram Account Name:</i></b></h2>
        <ul>
          <li> <?php echo $row['instagram']?>  </li>
        </ul>
      </div>

      <div>
        <h2><b><i>Facebook Account Name:</i></b></h2>
        <ul>
          <li> <?php echo $row['facebook']?>  </li>
        </ul>
      </div>

      <div>
        <h2><b><i>Physical Address:</i></b></h2>
        <ul>
          <li>Street: <?php echo $row['street']?>  </li>
          <li>Region: <?php echo $row['region']?>  </li>
          <li>Country: <?php echo $row['country']?> </li>
        </ul>
      </div>

    </div>
  </div>
</body>
</html>


<script src="/servers/project/contact/contact.js"></script>



<?php
//close connection
mysqli_close($connection);
?>



