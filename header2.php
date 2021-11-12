<?php
session_start();

?>


<!doctype html>
<html lang = "en">
<head>
<link rel="icon" type="jpeg/png" href="logo.png">

	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="fix">
		
		
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Contact</a></li>
				
				<?php
				if(isset($_SESSION["username"])){
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='#'>Profile</a></li>";
				echo"<li><a href='#'>About</a></li>";
				}
				else{
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='#'>Signup</a></li>";
				}
				
				?>
				
				
				
			</ul>
		</div>
		
		</body>