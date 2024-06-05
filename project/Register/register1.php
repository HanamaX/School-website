<?php 
$connection= mysqli_connect("localhost","root","","personal");

if($connection===false){
  die("ERROR: Could not connect" .mysqli_connect_error());
}


$fname=    $_POST["fname"];
$mname=    $_POST["mname"];
$sname=    $_POST["sname"];
$uname=    $_POST["uname"];
$mno=      $_POST["mno"];
$social=   $_POST["social"];
$email=    $_POST["email"];
$passcode= $_POST["passcode"];
$sex= $_POST["sex"];


//FILE HANDLING
$name="cv/".$_FILES['cv']['name'];
$tmp_name=$_FILES['cv']['tmp_name'];
if(move_uploaded_file($tmp_name,$name));


// VALIDATE PASSWORD
function validatePassword($password) {
  // Check if password contains at least one alphanumeric character and one special character
  if (!preg_match('/[A-Za-z0-9]/', $password) || !preg_match('/[^A-Za-z0-9]/', $password)) {
      return false;
  }
  return true;
}
$password = $passcode;
if (validatePassword($password)) {
} else {
  header("location: register.php?login=0.1");
  mysqli_close($connection);
}


//validate username
$sqpl= "SELECT uname FROM registered";
$result= mysqli_query($connection,$sqpl);
while($row=mysqli_fetch_array($result)){
  if($row["uname"]==$uname){
    header("location: register.php?login=0.11");
    mysqli_close($connection);  
  }
}


//verify no
if (($mno/100000000)>6) {
} else {
  header("location: register.php?login=0.2");
  mysqli_close($connection);
}


// create database query
$sql="INSERT INTO registered ( fname, mname, sname , uname , mno, social , cv , email, passcode, sex )
     VALUES ('$fname','$mname','$sname','$uname','$mno','$social','$name', '$email', '$passcode', '$sex')";


//execute a db query
if (mysqli_query($connection, $sql)){
  echo "Record inserted succesfully";
  
} else {
  echo "ERROR: Could not execute $sql." . mysqli_error($connection);
}


//close connection
mysqli_close($connection);
header("location: register.php?login=0.022");
?>







