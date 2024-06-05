<?php 
error_reporting(0);
session_start();
?>



<!-- HTML CODE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community Engagement</title>
  <link rel="stylesheet" href="/servers/project/Community/community.css">
  <script src="/servers/project/Community/community.js"></script>
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
        <li><a class="active" href="#community">Community Engagement</a></li>
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

    <div class="content">
      <div>
        <h1><b><i>Community Engagement</i></b></h1><br>
        <div class="reveal">
          <img src="voting.jpg" alt="Polling Station" width="300px" height="300px" >
          <p>Voting is a crucial community activity that empowers university students to actively participate in shaping their society and influencing the decision-making processes. By casting their vote, students contribute to the democratic process and exercise their right to have a say in matters that affect their lives and the community as a whole. Voting enables students to support candidates or issues that align with their values and advocate for the changes they believe in. It is an opportunity for students to voice their opinions on a wide range of issues, such as education, healthcare, social justice, and the environment.</p>
        </div>

        <div class="reveal">
          <img src="environ.jpg" alt="Environment Conservation Image" width="250px" height="250px" >
          <p>Environmental conservation is a vital community activity that university students  actively engage in to protect and preserve the natural world. By participating in environmental conservation initiatives, students contribute to the sustainability and well-being of their communities and the planet as a whole. They can participate in activities such as tree planting, beach cleanups, habitat restoration, and recycling programs. These activities help to mitigate the impacts of climate change, reduce pollution, and protect biodiversity.</p>
        </div>

        <div class="reveal">
          <img src="charity.jpg" alt="Charity image" width="250px" height="250px" >
          <p>Donating Goods and Resources: Students can organize donation drives to collect essential items, such as clothing, food, school supplies, or toys, for individuals or communities in need. These donations can be distributed to local charities, shelters, or community centers. By collecting and providing resources, students play a significant role in meeting the immediate needs of vulnerable populations.</p>
        </div>

        <div class="reveal">
          <img src="sanaa.png" alt="Cultural and Arts Events:" width="250px" height="250px" >
          <p>Cultural and Arts Events: Students can organize cultural festivals, art exhibitions, or music concerts to celebrate diversity and foster community engagement. These events provide opportunities for showcasing talents, sharing cultural traditions, and promoting dialogue among different ethnic, religious, and artistic groups. By organizing or participating in such activities, students contribute to the cultural vibrancy of their community and promote cross-cultural understanding.</p>
        </div>

        <div class="reveal">
          <img src="match.jpg" alt="Match" width="250px" height="250px">
          <p>A match between the continuous and finalist acts serves as a powerful community activity that brings people together in a spirit of friendly competition and celebration. The event showcases the talent, dedication, and hard work of individuals or teams who have made it to the final stage of a competition. The community gathers to witness their performances, cheering them on and creating an atmosphere of excitement and support. Such matches not only provide entertainment but also foster a sense of community pride and unity. </p>
        </div>

      </div>
    </div>
  </div>
</body>
</html>