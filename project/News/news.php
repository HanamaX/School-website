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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News</title>
  <link rel="stylesheet" href="/servers/project/News/news.css">
  <link rel="shortcut icon" href="/servers/project/favicon.ico.crdownload" type="image/x-icon">
  <script src="/servers/project/News/news.js"></script>
</head>
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
        <li><a href="/servers/project/Cv/cv.php">Cv 
            <?php
              if($_SESSION['name']!="") echo '<img src="/servers/project/unlock.jpg" width="20px" height="20px" style=" right: 0;">';
              else echo '<img src="/servers/project/lock.jpg" width="20px" height="20px" style=" right: 0;">';
            ?>
        </a></li>
        <li><a href="/servers/project/Community/community.php">Community Engagement</a></li>
        <li><a class="active" href="#News">News</a></li>
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


    <!-- NEWS CODE-->
    <div class="content" >
      <h1><b><i>Sport News</i></b></h1><br>
      <div class="box">
      <div class="reveal">
        <h2><b><i>City wins the CL </i></b></h2><br>
        <img src="mcity.jpg" alt="Mcity Players cheering" width="80%" height="30%">
        <p>
          The Champions League has brought suffering for City and Guardiola  especially when they lost   to Premier League rivals Chelsea in the 2021 final  but all the pain disappeared before midnight on a hot summer night in Istanbul. <i class="more" onclick="more(0)"> more</i> 
          <span class="hidden">
            City survived a few minutes of concern, especially when Lukaku, the Inter reserve player, beat Ederson with a perfectly clean header, but there was an explosion of joy on the pitch and at the Ataturk Stadium when they finally lifted the massive trophy that has been beyond their reach for so long. <i onclick="few(0)" > few</i>
          </span>
        </p>
      </div>

      <div class="reveal">
        <h2><b><i>Yanga wins NBC PL </i></b></h2><br>
        <img width="80%" height="30%"  src="Yanga.jpg" alt="Yanga fnas">
        <p>
          Msimbazi Street, home to Simba SC at Kariakoo in Dar es Salaam has turned into a scene of celebrations as Young Africans parade their 29th Premier League title.
          The street which is dominated by ready and white as the club’s official colours were abruptly overpowered by green and yellow as Young Africans parade title reached the place. <i class="more" onclick="more(1)" > more</i>
          <span class="hidden">
            A massive turnout of people has been seen as the open-top bus being used by Yanga to parade the trophy slowly meanders to the club’s headquarters at Jangwani street. <i onclick="few(1)" > few</i>
          </span>
         <p class="footer">22 Mar 2023 from Daily News</p>
        </p>
      </div>
    </div>


      <h1><b><i>National News</i></b></h1><br>
      <div class="box">
      <div class="reveal">
        <h2><b><i>Marburg Virus Disease outbreak in Tanzania declared over</i></b></h2><br>
        <img width="80%" height="30%"  src="Marburg.jpg" alt="Marburg condition">
        <p>
          Brazzaville/Dar es Salaam – Tanzania today declared the end of the Marburg Virus Disease outbreak which was confirmed just over two months ago in the north-western Kagera region. It was the country’s first outbreak of the disease. <i class="more" onclick="more(2)" > more</i>
          <span class="hidden"> 
            A total of nine cases (eight confirmed and one probable) and six deaths were recorded in the outbreak which was declared on 21 March after laboratory analysis confirmed that the cause of deaths and illnesses that were reported earlier in the region was Marburg.
            The national health authorities with support from World Health Organization (WHO) and partner organizations immediately rolled out outbreak response to stop the spread of the virus and save lives. The last confirmed case tested negative for the second test of Marburg on 19 April, setting off the 42-day mandatory countdown to declare the end of the outbreak. <i onclick="few(2)" > few</i>
        </span>
          <p class="footer">02 June 2023 reported by <b>WHO</b> </p>
        </p>
      </div>

      <div class="reveal">
        <h2><b><i>Increasing Employnment Opportunities Upon Harbour Agreement</i></b></h2><br>
        <img width="80%" height="30%"  src="ajira.png" alt=" Minister Makame Mbarawa">
        <p>
          Minister of Construction Prof. Makame Mbarawa today presented to Parliament the preliminary details of the proposed ratification of the Agreement between the Government of Tanzania and the Government of Dubai on economic and social cooperation for the development and improvement of the operation of the Port  Tanzania, which is expected to be achieved if Parliament ratifies the resolution, includes a rise in port employment from 28,990 in 2021/22 to 71,907 jobs by 2032/33, an increase of 148%. <i class="more" onclick="more(3)">more</i>
          <span class="hidden">
            “To achieve the implementation of the Agreement, the Government appointed a team of experts that was tasked with negotiating with the Dubai Government Experts and achieving the preparation and signing of the Agreement between the Government of the United Republic of Tanzania and the Government of Dubai in accordance with the existing procedures., The agreement is about economic and social cooperation for the development and improvement of port performance in Tanzania” <i onclick="few(3)" > few</i>
          </span>
           <p class="footer">01 June 2023 reported by <b>Milard Ayo</b> </p>
        </p>
      </div>
      </div>

      <h1><b><i>Technological News</i></b></h1><br>
      <div class="box">
      <div class="reveal">
        <h2><b><i>Technological Progress and It's Potential Future Risks </i></b></h2><br>
        <img width="80%" height="30%"  src="tech risks.jpg" alt="Robot pic">
        <p>
          Unleashing the Power of Artificial Intelligence
          Advancements <br>
          Artificial intelligence (AI) is reshaping industries across the globe. It is projected by 2025; the global AI industry will reach $190.61 billion. With the capacity to analyze massive amounts of data, AI transforms sectors like healthcare, finance, and transportation.  <i class="more" onclick="more(4)" > more</i>
           <span class="hidden">
            Potential Risks <br>
            As AI becomes increasingly autonomous, ethical concerns arise. The lack of transparency and accountability for AI decision-making algorithms poses significant challenges. Additionally, the potential of AI is unimaginable and far more dangerous. Although it has the potential to make human tasks easy, it also can automatically self-learn and evolve, resulting in replacements for certain human jobs. <i onclick="few(4)" > few</i>
          </span>
         <p class="footer">26 June 2023 from KUWAITNET</p>
        </p>
      </div>

      <div class="reveal">
        <h2><b><i>A Breakthrough To Transform Materials Into “Smart Devices”</i></b></h2><br>
        <img width="80%" height="30%"  src="liquid.jpg" alt="liquid metal in jacket">
        <p>
          Researchers have developed a new method of applying liquid metal to surfaces such as paper and plastic, transforming these everyday materials into potential “smart devices.” Future endeavors aim to broaden the application to diverse surfaces and to construct smart devices from materials treated by this method.<i class="more" onclick="more(5)" > more</i>
          <span class="hidden">
             Chinese scientists have devised a technique to coat everyday materials like paper and plastic with liquid metal, potentially creating “smart devices.” The method, which involves adjusting pressure rather than using a binding material, successfully enables the liquid metal to adhere to surfaces, a previously challenging task due to high surface tension. <i onclick="few(5)" > few</i>
          </span>
           <p class="footer">JUNE 9, 2023 By CELL PRESS </p>
        </p>
      </div>
      </div>
    </div>
  </div>
</body>
</html>