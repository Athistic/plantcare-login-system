<?php
session_start();
$old_Sessionid=session_id();
if(!isset($_SESSION["username"])){
	
	header("location:Unauthorized update.html");
	
	exit();
}
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
		<title>Update password</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS/styleReg.css">
		<link rel="icon" type="jpeg/png" href="Images/logo.png">
	</head>
	
	<script src="JS/scriptSignIn.js">
	<script></script>
	
<body>

	<header class="fix" id="header">
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li><a href="Home.php">Home</a></li>
								<li><a href="#">Contact Us</a></li>
				
				<?php
				if(isset($_SESSION["username"])){
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='#'>Profile</a></li>";
				echo"<li><a href='#'>About</a></li>";
				}
				else{
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='Registration.php'>Signup</a></li>";
				}
				
				?>
			</ul>
		</div>
		<div>
		
		<form style="margin:100px;border:solid black;background-color:lightgray;border-width:1px;width:350px;height:420px;"action="Includes/update.inc.php"method="post">
		<div class="Errors" style="text-align:center;color:white;border:solid black;background:navy">
		<?php
if(isset($_GET["error"])){ 



if($_GET["error"]=="passwordsdontMatch"){
echo"<P> ENTERED PASSWORDS DO NOT MATCH</P>";
	
	}

 if($_GET["error"]=="noError"){
echo"<P>Password updated successfully</P>";
	

}

else if($_GET["error"]=="invalidPassword"){
echo"<P> Password must contain at least 8 characters long with 1 digit,small letter and a capital letter </P>";

}

	
}


?>
</div>


		<h2 style="text-align:center;">Update password</h2>
		<label for="username">Enter username:</label>
		<input type="text" name="username">
		<br>
						
		<label for="password">Enter your new password</label>
		<input type="password" name="password">
		<br>
		
		<label for="passwordRepeat">Please re-enter your password</label>
		<input type="password" name="passwordRepeat">
		<br>
		
		<input style="margin-left:125px" type="submit" name="submit" value="submit">
		<div style="margin-left:100px;">
				<?php
				if(isset($_SESSION["username"])){
				echo "<a href='first.php'>Click here to go back to welcome page</a></li>";
				
				}
				else{
				echo "<a href='home.php'>Click here to go back to home page</a></li>";
				
				}
				
				?>
		</div>
		</form>
		