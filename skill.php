<?php
/*session_start();

  if (isset($_SESSION["userID"])){
	  $userID=$_SESSION["userID"];
  }*/
  
$userID=3;  
$skills=$_POST['uskoill'];

$link = mysqli_connect("localhost", "root", "12345678", "pluto");

 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!(empty($skills))){
    $sql1= "UPDATE `normaluser` SET `skills` = '$skills' WHERE `normaluser`.`userID` = $userID;";
	$result1 = mysqli_query($link, $sql1);
    echo '<script>alert("your skills is updated")</script>'; 	 
	}


 // Close connection
mysqli_close($link);

if($sql1){
	 
	header("location:user_profile.php");
}




?>