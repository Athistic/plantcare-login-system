<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<title>Log In </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/styleSignIn.css">
		<link rel="icon" type="jpeg/png" href="images/logo.png">
	</head>
	
	<script src="JS/scriptSignIn.js">
	<script></script>
	

	<header class="fix" id="header">
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li><a href="Home.php">Home</a></li>
								<li><a href="contact.php">Contact Us</a></li>
				
				<?php
				if(isset($_SESSION["username"])){
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='Profile page.php'>Profile</a></li>";
				echo"<li><a href='Our Team.php'>Our Team</a></li>";
				}
				else{
					
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='Registration.php'>Signup</a></li>";
				}
				
				?>
			</ul>
		</div>
		
		<div class="center">
			<h1>Sign In</h1>
			<form action="Includes/login.inc.php" method="post">
			
				<div class="txt_field">
					<input type="text" name="username" >
					<span></span>
					<label>Username</label>
				</div>
				
				<div class="txt_field">
					<input type="password" name="password" >
					<span></span>
					<label>Password</label>
				</div>
				
				<div class="pass" ><a href="forgotPassword.php">Forgot Password?</a></div>
				
				<input type="submit" value="Login" name="submit">
				
				<div class="signup_link">
					
					Not a member? <a href="Registration.php" onclick="sign_up()">Sign Up</a>
					
				</div>
			</form>
<div style="color=background-color:white;color:red;margin-left:50px">
<?php
if(isset($_GET["error"])){
if($_GET["error"]=="emptyinput"){
echo"<p>YOU HAVE NOT ENTERED ANYTHING</p>";	
}
else if($_GET["error"]=="wrongLogin"){
echo"<P>INCORRECT USERNAME OR PASSWORD</P>";
	
}

}
?>
<div>

	</header>
	</body>
</html>