<?php

/*session_start();

  if (isset($_SESSION["userID"])){
	  $userID=$_SESSION["userID"];
  }*/
  $userID=3;
$email=$_POST['uemail'];
$phone=$_POST['uphone'];


$link = mysqli_connect("localhost", "root", "12345678", "pluto");

 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!(empty($email))||(empty($phone))){
    $sql1= "UPDATE `normaluser` SET `info` = '$email,$phone' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
    echo '<script>alert("your info is updated")</script>'; 	 
	}


 // Close connection
mysqli_close($link);

if($sql1){
	 
	header("location:user_profile.php");
}


?>