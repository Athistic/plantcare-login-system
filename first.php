

<?php
session_start();
$old_Sessionid=session_id();
if(!isset($_SESSION["username"])){
	
	header("location:Unauthorized firstPage.html");
	
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

<html>

<head>

	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	<link rel="icon" type="jpeg/png" href="Images/logo.png">
	
	<title> Landing Page </title>
	<link rel="stylesheet" href="css/landingPage.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	<header class="fix">
		
		
		
		<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li class="active"><a href="Home.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				
				
	
<div style="margin-left:1100px;margin-top:100px;height:90px;width:250px;font-size:100px;"class="heading";>
	<h3 style="margin-left:-2150px;">WEL<span>COME</span></h3>
	</div>
	<div style="color:red">
	<?php
				if(isset($_SESSION["username"])){
				echo "<p>Hello there " . ($_SESSION["username"]) ."</p>";
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='Profile page.php'>Profile</a></li>";
				echo"<li><a href='Our team.php'>Our Team</a></li>";
				}
				else{
					
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='#'>Signup</a></li>";
				}
				
				?>
				</div>
		<button class="tablink" onclick="openPage('Home', this)">Potato</button>
		<button class="tablink" onclick="openPage('News', this)" id="defaultOpen">Spinach</button>
		<button class="tablink" onclick="openPage('Contact', this)">Peppers</button>
		<button class="tablink" onclick="openPage('About', this)">Cabbage</button>

	<div id="Home" class="tabcontent" style=background-image:url('Images/potatoe.jpg')>
	
	<h2>HOW TO GROW POTATOES</h2>
	
	<br>
		<video width="600" height="300" controls>
			<source src="Videos/pot.mp4" type="video/ogg">
		</video>
	</div>

	<div id="News" class="tabcontent" style=background-image:url('Images/spinach.jpg')>
	<h2>HOW TO GROW SPINACH</h2>
 <video width="600" height="300" controls>
			<source src="Videos/spinach.mp4" type="video/ogg">
		</video>
	</div>

	<div id="Contact" class="tabcontent" style=background-image:url('Images/peppers.jpg')>
	<h2>HOW TO GROW PEPPERS</h2>
  <video width="600" height="300" controls>
			<source src="Videos/peppers.mp4" type="video/ogg">
		</video>
	</div>

	<div id="About" class="tabcontent" style=background-image:url('Images/carbage.jpg')>
	<h2>HOW TO GROW CABBAGE</h2>
  <video width="600" height="300" controls>
			<source src="Videos/cabbage.mp4" type="video/ogg">
		</video>
	</div>
	
		<button style="margin-bottom:800px;"class="button"><a href="journey.php" style="color:white">START YOUR JOURNEY</a></button>
	<script src="JS/landingScript.js"></script>		
	<br>
	

</body>
</html>