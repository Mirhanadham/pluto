<?php

/*session_start();

  if (isset($_SESSION["userID"])){
	  $userID=$_SESSION["userID"];
  }*/
  
  $userID=3;
$bio=$_POST['ubio'];

$link = mysqli_connect("localhost", "root", "12345678", "pluto");

 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!(empty($bio))){
    $sql1= "UPDATE `normaluser` SET `bio` = '$bio' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
   	 echo '<script>alert("your bio is updated")</script>'; 
	}


 // Close connection
mysqli_close($link);

if($sql1){
	 
	header("location:user_profile.php");
}


?>