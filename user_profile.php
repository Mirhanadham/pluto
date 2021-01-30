<html lang="en">
	<head>
		<title>Your Profile</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
		<link rel="stylesheet" href="user_profile_style.css">



				<script type="text/javascript">

					$(document).ready(function(){
							
								$("#wizard-picture").change(function(){
									readURL(this);
								});
						
					
								
					});
					
											
									
						
							function readURL(input) {
								if (input.files && input.files[0]) {
									var reader = new FileReader();

									reader.onload = function (e) {
										$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
									}
									reader.readAsDataURL(input.files[0]);
								}
							}
							
						
					
				function myFunction() { 
	           document.getElementById("post").style.display="none"; 
			   document.getElementById("Bioparagh").style.display="none"; 
			   document.getElementById("Skillsparagh").style.display="none"; 
	           document.getElementById("Infoparagh").style.display="block"; 
			   
                                                 }

				function myFunction2() { 
	           document.getElementById("post").style.display="none"; 
			   document.getElementById("Skillsparagh").style.display="none"; 
			   document.getElementById("Infoparagh").style.display="none"; 
	           document.getElementById("Bioparagh").style.display="block"; }
			   
			   function myFunction3() { 
	           document.getElementById("post").style.display="none"; 
			   document.getElementById("Infoparagh").style.display="none"; 
	           document.getElementById("Bioparagh").style.display="none";
	           document.getElementById("Skillsparagh").style.display="block";
			   
			   }
			    document.getElementById("ubio").val()=$row['']; 
			   
			   
			   
			   
			
					


						</script>
						
					<script>
						var clicks = 0;

						function showForm() {
						document.getElementById("myForm").style.visibility="visible";
					}

					 function closeForm() {
					document.getElementById("myForm").style.visibility = "hidden";
					}

					function like() {
						clicks += 1;
						document.getElementById("clicks").innerHTML = clicks;
					};

					function comment(){
						document.getElementById("commentWrite").style.visibility="visible";
						document.getElementById("doneBtn").style.visibility="visible";

					};
					function postComment(){
						var para = document.createElement("p");
						var node = document.createTextNode(document.getElementById("commentWrite").value);
						para.appendChild(node);
						para.style.color="white";
						var element = document.getElementById("post");
						element.appendChild(para);

					};


				</script>	
						
						
				
		
<?php
/*session_start();

  if (isset($_SESSION["userID"])){
	  $userID=$_SESSION["userID"];
  }*/
  
  $userID=3;

$link = mysqli_connect("localhost", "root", "12345678", "pluto");
 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql="select*from normaluser WHERE `normaluser`.`userID` = $userID";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

// Close connection
mysqli_close($link);
?>


</head>
	<body>
		<div class="taskbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <!-- Just an image -->
		  <a class="navbar-brand" href="#">
		    <img src="logo.png" width="50" height="37" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <button class="btn btn-outline my-2 my-sm-0 sign text-light"  type="submit">Home Page</button>
		      <button class="btn  my-2 my-sm-0 sign text-light" type="submit">Log Out</button>
		    </form>
		  </div>
		</nav>
    </div>

		<div class="container">
			<div class=" profile">
				<div class="row">
				<div class="col-md-3">
					<div class="sidebar">
						<div class="prof_pic">
							 <img src='<?php echo $row['image'];?>' onerror="this.src='https://static.change.org/profile-img/default-user-profile.svg'" alt="Your Pic is great <3" class= "img-responsive img-circle" class="picture-src" id="wizardPicturePreview">
							
						</div>
						
						<div class="user_Info">
							<div class="user_name">
							   <?php echo $row['name'];?>
							</div>
							<div class="user_job">
								<?php echo $row['job'];?>
							</div>
						</div>
				
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Update Your Info</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <form action="basicinfo.php" method="Post">
								  <div class="modal-body">
									
											  <div class="form-group">
												<label for="exampleInputEmail1">New Username</label>
												<input  class="form-control" id="exampleInputUsername1"  placeholder="Enter your new username" name="new_username">
												
											  </div>
											  <div class="form-group">
												<label for="exampleInputPassword1">New Password</label>
												<input  class="form-control" id="exampleInputPassword1" placeholder="Enter new Password" name="new_password">
											  </div>
											 
											  <div class="form-group">
												<label for="exampleInputPassword1">New Job title</label>
												<input  class="form-control" id="exampleInputjobtitle1" placeholder="Enter new Password" name="new_jobtitle">
											  </div>
											  
											   <!--update pic-->
											  <div class="form-group">
												<strong><i>Choose Picture </i></strong>
												<input type="file" id="wizard-picture" name="pic" >
											   </div>
									  
									
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								  </div>
								  </form>
								  
								</div>
							  </div>
							</div>
						
						<div class="buttons">
							<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal" > update </button>
						</div>
						
		



						<div class="user_menu">
						
						<div class="list-group">
						
								  <a  onclick="myFunction()" href="#" class="list-group-item list-group-item-success"><span class="fa fa-info" > Info</a></span>
								  
								  <a onclick="myFunction2()"href="#" class="list-group-item list-group-item-success"><span class="fa fa-key" > Bio</a></span>
								  <a onclick="myFunction3()"href="#" class="list-group-item list-group-item-success"><span class="fa fa-star" > Skills</a></span>
						</div>
						
								

						</div>	
					</div>
					</div>
					<div class="col-md-9">
						<div class="profile_content">
						<!--post-->
						<div class="chat-popup" id="myForm">
							 <form action="/action_page.php" class="form-container">
								<h2 style="color: white">Messages</h2>
								<textarea name="chat" ></textarea>
								<input type="text" name="msg" class="msg"  placeholder="Type your message" required>   
								</br> </br>
								<button type="button" class="btn">Send</button>
								<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
							</form>
						</div>


						<div class="post" id="post">
											</br>
											<textarea class="postTxt" name="postTxt"></textarea>  
											</br>
												<a class="clicks" id="clicks" style="color: white">0</a>
												<button type="button" class="like" name="like" onClick="like()">Like</button>
												<button type="button" class="comment" name="comment" onClick="comment()">Comment</button> 
												<button type="button" class="startchat" name="startchat" onClick="showForm()"> Start chat </button> </br> </br>
												<input type="text" id ="commentWrite" class="commentWrite">
												<button type="button" class="doneBtn" id="doneBtn" onClick="postComment()">Done</button>
										</center>
										</div>
										
									
							<!--Info-->
							<div id="Infoparagh">
							<form action="info.php" method="post">
								<label class="fa fa-envelope" style="color:#ffffff"> Email : </label>
								 <?php
								 list($email,$number) = explode(",", $row['info']);
								 ?>
								<input type="email" pattern=".+@gmail.com" name="uemail"  placeholder="Enter your email" style="background-color:#2f363f;color: grey" value='<?php echo $email; ?>' >
								</input>
								<br>
								<label class="fa fa-phone" style="padding-bottom:10px;color:#ffffff"> PHONE : </label>
								<input name="uphone" id="uphone" placeholder="Enter your number" style="background-color:#2f363f;color: grey" value='<?php echo $number; ?>'> </input>
								
							<div class="infobtn" role="group" aria-label="Basic example">
                                <button class="btn btn-secondary">Add </button>
                            </div>
							</form>
							</div>
							
							<!--Bio-->
							<div id="Bioparagh">
							
							<form action="bio.php" method="post">
							<textarea name="ubio" id="ubio" placeholder='<?php echo $row['bio']?>'  rows="5"></textarea>
							
                              <br>
							 <div class="biobtn" role="group" aria-label="Basic example">
                             <button class="btn btn-secondary">Add </button>
                             </div>
							 </form>
							</div>
							
							
							
							<!--Skills-->
							<div id="Skillsparagh">
							 
							 <form action="skill.php" method="post">
							 <?php
							   $count=substr_count($row['skills'],",");
							   $container = explode(",", $row['skills']);
							 ?>
							 <textarea style="border:none" name="uskoill" id="uskill"  placeholder='<?php for($i=0; $i< $count+1 ; $i++){echo "$container[$i]\n"; }?>' rows="5" ></textarea>
                              <br>
									
							 <div class="skillsbtn" role="group" aria-label="Basic example"  >
                             <button class="btn btn-secondary">Add </button>
							 </form>
                             </div>
							 
							 
							 
							 
							 
							 
							</div>
							
						
							</div>
						</div>
				</div>
				</div>
			</div>
		</div>
 </body>
</html>