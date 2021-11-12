
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

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content= "width=device-width, initial-scale= 1.0">
    <title>Start growing your own Vegitables</title>
    <link rel="icon" type="jpeg/png" href="images/logo.png">
    <link rel= "stylesheet" type="text/css" href="css/styleFirst.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

	
	<body>
		<header class="fix">
		
<div class="logo" style="background-color:black"><span>P</span>lant<span>C</span>are</div>
			<ul class="menu-area">
				<li><a href="Home.php">Home</a></li>	
				<li><a href="contact.php">Contact</a></li>
				<?php
				if(isset($_SESSION["username"])){
				echo "<li><a href='Logout.php'>Logout</a></li>";
				echo"<li><a href='Profile.php'>Profile</a></li>";
				echo"<li><a href='Our Team.php'>Our Team</a></li>";
				}
				else{
				echo "<li><a href='login.php'>Login</a></li>";
				echo"<li><a href='Registration.php'>Signup</a></li>";
				}
				
				?>
<div class="wrapper">
	<div class="text">
	<h1>Planting Spinach</h1>
			<p style = "font-family:sans-serif;">
			Before starting with anything you need to make sure you have a water source for your plants, loosen your soil by digging deep<br>
			and apply fertilizer, manure or compost(If necessary).
			Planting spinach will take about 7 weeks to be ready for harvest, depending how big you want your leaves to be.<br> 
			 If you are using fertilizer, use one handful for every square meter of soil or four hands of manure or compost for every square meter of soil. 
			Use a garden fork to mix soil and fertilizer, manure or compost thoroughly,<br>
			and the even it out using a rake. Prepare the soil at least a week before use.
			<img src = "Images/Spinach1.jpg" width ="250" height ="150">

	<div class="package">
		<div class="crop" style="border-radius: 5%">
				<h4>If you are going to start with seeds:</h4>
				<p style = "font-family:sans-serif;">Although seeds can be started indoors, it is not recommended because seedlings are hard to transplant. Refrigerate seeds 1 week before sowing to help germination(Recommended.<br>
				Plant spinach seeds at least  1.5 cm deep. Sow seeds 5 cm to 10 cm apart, and water the new seedlings well regularly.<br>
				Spinach seeds will germinate in 5 to 9 days when it is warm but it will take longer if the soil is cooler, about 21 days in the winter cold days.
			<br>

			<h4>After 1 week:</h4>
			<img src = "Images/Spinach2.jpg" width ="250" height ="150">
				<h4>After 2 weeks:</h4>
				<img src = "Images/Spinach3.jpg" width ="250" height ="150">
				<h4>_NB:_</h4>
				<p style = "font-family:sans-serif;">Remember to remove weeds regularly. Remember to Water your plants regularly.
			<br>
		</div>

		<div class="crop" style="border-radius: 5%">
			<h4>After 4 weeks:</h4>
			<p style = "font-family:sans-serif;">
			For a better crop, apply a top dressing of manure or compost(if available) as spinach needs nitrogen for good quality, broad leaves.<br>
			<img src = "Images/Spinach4.jpg" width ="250" height ="150">

			<h4>After 6:</h4>
			<img src = "Images/Spinach5.jpg" width ="250" height ="150">

			<h4>How to Harvest</h4>
			<p style = "font-family:sans-serif;">Keep an eye on your pants, harvest when leaves reach the desired size.<br> Do not wait too long to harvest or wait for larger leaves, spinach is best right after reaching maturity.<br>
			The whole pant can be harvested at once, and cut at the base, or leaves may be picked  off plants one layer at a time,<br> giving inner layers more time to develop.<br>

			<img src = "Images/Spinach6.jpg" width ="250" height ="150">
		</div>
		
	</div>

<br>
<br>


<div class="text">
<h1>Planting Cabbage</h1>

		<p style = "font-family:sans-serif;">Before beginning you must know cabbage is a heavy feeder, it quickly depetes the soil of required nutrients.
		Water 5 cm per square foot a week.<br>
		Prepare the soil in advance by mixing in manure and/or compost. Make sure the soil is well draining,<br> roots that stand in water cause heads to split or rot.
		.<br>
		<img src = "Images/image.jpg" width ="250" height ="150">

		<h4>Transplanting Cabbage in your garden:</h4>
		<p style = "font-family:sans-serif;">Transplant small plants in your garden on a less sunny after noon 2 to 3 weeks before the last spring frost date.
		Plant seedlings 30 cm to 60 cm apart in rows, depending on the size of the head desired. The closer you plant, the smaller the cabbage heads.
		<br>
<div class="package">
		<div class="crop" style="border-radius: 5%">
			<h4>After 1 week:</h4>
			<img src = "Images/Cabbage1.jpg" width ="250" height ="150">

			<p style = "font-family:sans-serif;">When seedlings reach about 13 cm tall, thin to leave the desired space between them. If you wish you can move the thinned seedlings elsewhere.
			.<br>
			<p style = "font-family:sans-serif;">Fertilize 2 weeks after transplanting.
			<br>
			<img src = "Images/Cabbage2.jpg" width ="250" height ="150">
			<img src = "Images/Cabbage3.jpg" width ="250" height ="150">

			<p style = "font-family:sans-serif;">After three weeks of transplanting( or 7 weeks if seeds were directly sown), add a nitrogen- rich fertilizer(if available) as cabbage grows better when treated with nitrogen rich soil in early stages.
			<br>
		</div>

		<div class="crop" style="border-radius: 5%">
			<h4>After 8 weeks:</h4>
			<img src = "Images/Cabbage4.jpg" width ="250" height ="150">

			<h4>How to Harvest:</h4>

			<p style = "font-family:sans-serif;">Harvest when the cabbage heads reach the desired size and are firm. Mature heads left on the stem may split. Days of maturity is around 70 days.
			To harvest, cut each cabbage head at its base with a sharp knife. Remove any yellow leaves and immediately bring the head indoors and keep in a cool place. Alternatively, pull up the plant( roots and all).
			After harvest remove the entire stem and root system from the soil to prevent disease. Only compost healthy plants destroy any maggot infestation.
			<br>
		</div>		

<br>
<br>
			

<div class="text">
		<h1>Planting Peppers</h1>
		<p style = "font-family:sans-serif;">Before starting with anything you need to make sure you have a water source for your plants, loosen your soil by digging deep and apply fertilizer, manure or compost(If necessary).
		Always water the roots, never the peppers. If the peppers get too wet they will rot.
		Peppers grow well in a well- drained spot where peppers have not grown recently. The soil should be deep, rich, and  loamy.<br>
		<img src = "Images/soil.png" width ="250" height ="150">


	<div class="package">
		<div class="crop" style="border-radius: 5%">
					<h4>Transplanting Peppers:</h4>
					<p style = "font-family:sans-serif;">Use any pot or vessel that is a size of a cup or larger with a hole in the bottom to plant your seeds. Water your seeds to the point of dampness not saturation and never allow your seeds to dry out completely.
					Keep your seeds in a room at least 21 degrees Celsius. Pepper plants thrive best in pairs, as the two plants can shade each other from the sun.
					A few weeks int the seedlings growth, remove the one that is thriving the least so the other two can flourish.
					<br>

					<h4>After 10 days:</h4>
					<img src = "Images/Peppers1.jpg" width ="250" height ="150">


					<p style = "font-family:sans-serif;">When transplanting your seedlings, if possible set them out on a cloudy day to help reduce stress on the plants. Space the plants 20 cm to 50 cm, depending on the mature size of variety and set them a bit deeper than in the containers.
					Throughout the growing season, make sure the plants receive at least 2 cm of water a week. Check the peppers often during periods of extreme heat and drought, when each plant can easily take 2 litres of water a day.<br>

					<img src = "Images/Peppers2.jpg" width ="250" height ="150">
					<img src = "Images/pepper-planting-day-june-2-2019-823x1024.jpg" width ="250" height ="150">
		</div>


			<div class="crop" style="border-radius: 5%">
					<h4>After 6 weeks:</h4>

					<p style = "font-family:sans-serif;">Weed carefully around the plants to avoid disturbing the roots.  If necessary support the plants with cages or stakes to prevent bending.<br>
					<img src = "Images/Pepper3.jpg" width ="250" height ="150">

					<h4>Time lapse:</h4>
					<img src = "Images/Peppers4.jpg" width ="250" height ="150">

					<h4>Harvesting:</h4>
					<p style = "font-family:sans-serif;">Once plants begin to produce fruits, pick them promptly the moment the have reached their full size and color. Regular picking encourages plants to produce more flowers and, more fruits.
					The longer bell peppers stay on the plant, the sweeter they become and more vitamin c content.
					<br>
					<img src = "Images/Peppers5.jpg" width ="250" height ="150">
					
	
			</div>
			
	</div>
</div>


<br>
<br>
<br>
<br>

<div class="text">
			<h1>Planting and growing Potatoes</h1>
			<p style = "font-family:sans-serif;">Before starting with anything you need to make sure you have a water source for your plants. Spread and mix in fully- rotted manure or compost in the bottom of the trench before planting.<br>
			<img src = "Images/soil.png" width ="250" height ="150">

			<p style = "font-family:sans-serif;">In each trench, place a seed potato piece(cut in half) every 30 cm to 40 cm an cover with 10 to 12 cm of soil. If your garden soil is very rocky, put the potato seed pieces directly on the ground, sprinkle with mix of soil and compost and cover with straw or leaves, hilling the material up as the potatoes grow.<br>
			<img src = "Images/Potatoes1.jpg" width ="250" height ="150">
			<img src = "Images/Potatoes3.jpg" width ="250" height ="150">


			<p style = "font-family:sans-serif;">12 to 16 days after planting when the sprouts appear, use a hoe to gently fill in the trench with another 10 cm to 12 cm of soil, leaving a few cm of the plants. Repeat for several weeks leaving the soil mounded up 10 cm to 12 cm above ground level.<br>
			<img src = "Images/Potatoes1.jpg" width ="250" height ="150">

			<p style = "font-family:sans-serif;">After the potato plants have emerged add mulch(if available) between the rows to conserve moisture, help with weed control, and cool the cool.
			A critical part of growing potatoes is not to let the tubers be exposed to sunlight for too long which be minimized by adding more soil regularly.
			<br>
			<img src = "Images/Potatoes4.png" width ="250" height ="150">
			    <img src = "Images/stages.gif" width ="250" height ="150">
			 <img src = "Images/Potatoes5.jpg" width ="250" height ="150">

			<h4>How to Harvest Potatoes</h4>
			<p style = "font-family:sans-serif;">Regular potatoes are ready to harvest when the foliage begins to die back the top of the plants need to have completely died before you begin harvesting.
			Cut the brown foliage off and leave the potatoes for 10 to 14 more days before you harvest. This allows the potatoes to develop a thick enough skin but if you wait too long the potatoes might rot.
			Dig potatoes on a dry day.
			<br>
			<img src = "Images/Potatoes6.jpg" width ="250" height ="150">
			<img src = "Images/Potatoes7.jpg" width ="250" height ="150">
			<img src = "Images/Potatoes8.jpg" width ="250" height ="150">

			<p style = "font-family:courier;"><br>
			<p style = "font-family:courier;"><br>
			</div>
			<div style="background-color:yellow;color:white">
<a href="https://calendar.google.com/calendar/u/0?cid=bGxmOG5jdWlqZjBwNW4xZ2doYTNiOGE3M2NAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">CLICK HERE TO CREATE A CALENDAR</a>
</div>
	
	</div>
	</div>
	</div>
			
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
										<a href="https://www.instagram.com/plantcare_sa/"<i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						</div>
					</footer>		
	</header>
	</body>
</html>
