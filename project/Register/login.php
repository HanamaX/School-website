<?php 
session_start();


$connection= mysqli_connect("localhost","root","","personal");
if($connection===false){
  die("Connection Error" . mysqli_connect_error());
}


  //Logging Out
  $login=$_GET["login"];
  if($login==0.103){
    session_destroy();
    header("location:register.php?login=0.103");
    mysqli_close($connection);
  }



  //Logging In
  $username= $_POST['Username'];
  $passcode= $_POST['passcode'];
  $sql= "SELECT uname, passcode FROM registered";
  $result= mysqli_query($connection,$sql);
  while($row=mysqli_fetch_array($result)){
    if($row["uname"]==$username && $row["passcode"]==$passcode ){
      $_SESSION['name']=$username;
      header("location:/servers/project/home/home.php");
      break;
    } 
    else{
      header("location:register.php?login=10.1");
    }
  } 

  
//CLOSE CONNECTION
  mysqli_close($connection);
?>