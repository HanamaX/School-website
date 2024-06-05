<?php 
error_reporting(0);
session_start();
$login=$_GET["login"];
$UN=$_SESSION['name'];
?>





<?php 
$connection= mysqli_connect("localhost","root","","personal");

if($connection===false){
  die("ERROR: Could not connect" .mysqli_connect_error());
}

//deleting data
if(isset($_GET['Id'])){
  $id=$_GET['Id'];
  if ($id==0){
    $delet= "DELETE FROM courses";
    mysqli_query($connection,$delet);
    mysqli_close($connection);
    header("location: courseview.php");
  
  }
  else{
  $delete= "DELETE FROM courses WHERE Id=$id";
  mysqli_query($connection,$delete);
  mysqli_close($connection);
  header("location: courseview.php");

  }
  
}

$Coursename= $_POST["Coursename"];
$Course_Code= $_POST["Course_Code"];
$discription= $_POST["discription"];
$department= $_POST["department"];
$semester  = $_POST["semester"];
$yr=$_POST["yr"];
$instructor=$_POST["instructor"];
$grade=$_POST["grade"];



//validate course grade
if(strlen($grade)==2 && $grade!="B+"){
  header("location: courseview.php?login=66");
  mysqli_close($connection);
}
else if (!preg_match('/[A-Da-dFf]/', $grade) ) {
  header("location: courseview.php?login=66");
  mysqli_close($connection);
}




// create database query
$sql="INSERT INTO courses (Coursename, userID, Course_Code, discription, department , semester , yr , instructor , grade )
     VALUES ('$Coursename','$UN','$Course_Code','$discription','$department','$semester','$yr','$instructor','$grade')";


//execute a db query
if (mysqli_query($connection, $sql)){
  echo "Record inserted succesfully";
  
} else {
  echo "ERROR: Could not execute $sql." . mysqli_error($connection);
}


//close connection
mysqli_close($connection);
header("location: courseview.php");
?>