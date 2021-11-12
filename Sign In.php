<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<title>Sign In </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styleSignIn.css">
		<link rel="icon" type="jpeg/png" href="logo.png">
	</head>
	
	<script src="scriptSignIn.js">
	<script></script>
	
<body>

	<header class="fix" id="header">
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li><a href="Home.php">Home</a></li>
				<li class="active"><a href="myRegistration.php">Sign Up</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
		
		<div class="center">
			<h1>Sign In</h1>
			<form action="login.inc.php" method="Post">
			
				<div class="txt_field">
					<input type="text" name="username" required>
					<span></span>
					<label>Username</label>
				</div>
				
				<div class="txt_field">
					<input type="password" name="password" required>
					<span></span>
					<label>Password</label>
				</div>
				
				<div class="pass">Forgot Password?</div>
				
				<input type="submit" value="Login">
				
				<div class="signup_link">
					
					Not a member? <a href="myRegistration.php" onclick="sign_up()">Sign Up</a>
				</div>
			</form>
		
		</div>
	</header>
	</body>
</html>