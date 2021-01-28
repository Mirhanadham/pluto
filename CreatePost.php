<?php

$typeOfUser = $_POST['typeOfUser'];
$userID = $_POST['userID'];
$paragraph = $_POST['paragraph'];
$file = $_POST['file'];


$con = mysqli_connect("localhost","root","12345678","pluto");

if(mysqli_connect_errno()){ 
	echo mysqli_connect_errno();
}

$q = mysqli_query($con, "INSERT INTO `posts` (`typeOfUser`, `userID`, `content`, `image`) VALUES ('$typeOfUser','$userID','$paragraph','$file')");

mysqli_close($con);

?>


