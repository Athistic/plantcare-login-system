<?php
session_start();
$old_Sessionid=session_id();
if(!isset($_SESSION["username"])){
	
	header("location:Unauthorized team.html");
	
	exit();
if(isset($_SESSION['start_time']) && (time() - $_SESSION['start_time'] > 60*10) ){
	
    session_unset();     
    session_destroy();  
    header('Location:login.php');
	
}else{
    session_regenerate_id(true);
	$new_Sessionid=session_id();
    $_SESSION['start_time'] = time();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	<title >Our Team</title>
	<link rel="icon" type="jpeg/png" href="Images/logo.png">
	<link rel="stylesheet" type="text/css" href="CSS/team style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body  style= "background-color:lightblue">
	<header class="fix">


		
				
<div class="wrapper" >

		<h1 style="font-family: sans-serif;font-size: 60px;margin-bottom: 60px;text-align: center;color:white">Our Team</h1>
	<div class="team">

		<div class="team_member" style="border-radius: 10%">
			
			<div src="team_img">
				<img src="Images/Athi.JPG" alt="team_member_image" style="width:200px;height:200px; border-radius: 50%">
			</div>
			
			<h3>Athenkosi Mamfengu</h3>
			<p class="role">Back-End Developer</p>
			<p><i>Hello my name is Athenkosi Mamfengu and I am happy to assist with all your database related queries. Contact me on athenkosiathi@yahoo.com</i></p>
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/athenkosiathisic.mamfengu/"><i class="fab fa-facebook-f"></i></a>
						
						<a href="https://twitter.com/AthenkosiMamfe1"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/athenkosimamfengu/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
		<div class="team_member" style="border-radius: 10%">
			<div src="team_img">
				<img src="Images/Anga.JPG" alt="team_member_image" style="width:200px; height: 200px; border-radius: 50%">
			</div>
			
			<h3>Anga Matsuluka</h3>
			<p class="role">Back-End Developer</p>
			<p></p>
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/anga.matsuluka"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/anganathi30/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
		<div class="team_member" style="border-radius: 10%">
			<div src="team_img">
				<img src="Images/Bukho.JPG" alt="team_member_image" style="width:200px; height: 200px; border-radius: 50%">
			</div>
			
			<h3>Bukhobethu Mkona</h3>
			<p class="role">Application programming interface</p>
			<p><i>This is Bukhobethu Mkona to help you with administration of the webpage<i/></p>
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/Apex.bk"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/iamapex_24/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
		
	</div>
	<div class="teams">
		<div class="team_member" style="border-radius: 10%">
			<div src="team_img">
				<img src="Images/Zolani.JPG" alt="team_member_image" style="width:200px; height: 200px; border-radius: 50%">
			</div>
			
			<h3>Zolani Mabongo</h3>
			<p class="role">front-End Developer</p>
			<p>I am Zolani Mabongo and I am a user interface designer. I would appreciate your feedback on our design and recommended features to add on our web app</p>
			
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/ZolaniZostai"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/zostaii_z/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
		<div class="team_member" style="border-radius: 10%">
			<div src="team_img">
				<img src="Images/Okuhle.JPG" alt="team_member_image" style="width:200px; height: 200px; border-radius: 50%">
			</div>
			
			<h3>Okuhle Mbongwe</h3>
			<p class="role">Front-End Developer</p>
			<p>I am Okuhle Mbongwe and I am a user interface designer. I would appreciate your feedback on our design and recommended features to add on our web app</p>
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/om.ildephons"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/ildephons_m/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
		<div class="team_member" style="border-radius: 10%">
			<div src="team_img">
				<img src="Images/Jack.JPG" alt="team_member_image" style="width:200px; height: 200px; border-radius: 50%">
			</div>
			
			<h3>Bavuyise Jako</h3>
			<p class="role">Application prongramming interface</p>
			<p></p>
			<h4>follow me</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/bavuyise.jako"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/logann_jack/"><i class="fab fa-instagram"></i></a>
					</div>
		</div>
	</div>

</div>
<br>
<br>
<! -- footer -->
<div class="footer">
		<div class="footer-content">
			<div class="footer-section About"></div>
			<div class="footer-section links"></div>
			<div class="footer-section contact-form"></div>
		</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Company</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Our services</a></li>
						<li><a href="#">Private policy</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>get help</h4>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Order status</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>My Agri</h4>
					<ul>
						<li><a href="#">Peppers</a></li>
						<li><a href="#">Potatoes</a></li>
						<li><a href="#">Spinach</a></li>
						<li><a href="#">Cabbage</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>follow us</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/Plant-Care-107513491731615"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/plantcare_sa/"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>	
</header>

</body>
</html>