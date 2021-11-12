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
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/styleContact.css">
</head>
<body style="background-image: url('Images/contact.JPG');background-size:1350px;background-position:left">


<header class="fix" id="header">
	
<br><br><br>
<div class="contact-form">
	<h2>Contact Us</h2>
	<form action="includes/contact.inc.php" method="post">
		<input type="text" name="name" placeholder="Your name" required>
		<input type="text" name="cell" placeholder="Your Phone Number" required>
		<input type="email" name="email" placeholder="Your Email Address" required>
		<textarea name="message" placeholder="Your Message" required></textarea>
		<input type="submit" name="submit" value="Send Message" class="submit-btn">
		<div style="background-color:lightblue">
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
	<div style="background-color:white">
	<?php
	if(isset($_GET["error"])){ 
if($_GET["error"]=="noError"){
echo"<P> Message sent successfully</P>";
}
}
?>
</div>
<div class="status">


</div>
</div>
</header>
</body>
</html>