<?php

/*session_start();

  if (isset($_SESSION["userID"])){
	  $userID=$_SESSION["userID"];
  }*/
  
  $userID=3;
  
 
$username=$_POST['new_username'];
$userpass=$_POST['new_password'];
$userjob=$_POST['new_jobtitle'];
$userphoto=$_POST['pic'];




$link = mysqli_connect("localhost", "root", "12345678", "pluto");

 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!(empty($username))){
    $sql1= "UPDATE `normaluser` SET `name` = '$username' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
   	// echo '<script>alert("your bio is updated")</script>'; 
	}
	
	
if(!(empty($userpass))){
    $sql1= "UPDATE `normaluser` SET `password` = '$userpass' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
   	// echo '<script>alert("your bio is updated")</script>'; 
	}	
	
if(!(empty($userjob))){
    $sql1= "UPDATE `normaluser` SET `job` = '$userjob' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
   	// echo '<script>alert("your bio is updated")</script>'; 
	}		
	
if(!(empty($userphoto))){
    $sql1= "UPDATE `normaluser` SET `image` = '$userphoto' WHERE `normaluser`.`userID` = $userID";
	$result1 = mysqli_query($link, $sql1);
   	 
	}		
		


 // Close connection
mysqli_close($link);

if($sql1){
	header("location:user_profile.php");
		
}











?>