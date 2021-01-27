<?php


$paragraph = $_POST['paragraph'];
$file = $_POST['file'];
$function = $_POST['function'];
if($function == "test"){
	connect();
}

function connect(){
$con = mysqli_connect("localhost","root","12345678","pluto");

if(mysqli_connect_errno()){ 
	echo mysqli_connect_errno();

mysqli_close($con);

}

//$q = mysqli_query($con, "SELECT * FROM normaluser");



//echo $paragraph;
//echo $file;


//$q = mysqli_query($con, "INSERT INTO `normaluser`( `name`, `email`, `password`, `DOB`, `image`, `info`, `skills`, `bio`) VALUES ('menna3','menna3@gmail.com',456,1999-09-05,'logo.png','nth','none','none')");

//while($row = mysqli_fetch_array($q)){
//	echo $row["DOB"];
//}
//mysqli_close($con);
}

?>


