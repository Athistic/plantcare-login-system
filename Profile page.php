<?php
session_start();
$old_Sessionid=session_id();
if(isset($_SESSION['start_time']) && (time() - $_SESSION['start_time'] > 60*10) ){
	
    session_unset();     
    session_destroy();  
    header('Location:login.php');
	
}else{
    session_regenerate_id(true);
	$new_Sessionid=session_id();
    $_SESSION['start_time'] = time();
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<title>Profile</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS/styleReg.css">
		<link rel="icon" type="jpeg/png" href="Images/logo.png">
	</head>
	
	<script src="scriptSignIn.js">
	<script></script>
	
<body>

	<header class="fix" id="header">
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li><a href="Home.php">Home</a></li>
								<li><a href="contact.php">Contact Us</a></li>
				
				<?php
				if(isset($_SESSION["username"])){
				
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='#'>Profile</a></li>";
				echo"<li><a href='Our Team.php'>Our Team</a></li>";
				}
				else{
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='Registration.php'>Signup</a></li>";
				}
				
				?>

			</ul>
		</div>
		
		
		<ul style="margin:100px;color:navy">
		
				
				<li> <a href="update page.php">Update your password </a></li>
		
		</ul>