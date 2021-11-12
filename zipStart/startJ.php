<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale=1.0">
	
	<title>Start Journey</title>
	
	<link rel="icon" type="jpeg/png" href="Images/logo.png">
	<link rel="stylesheet" type="text/css" href="startJ.css">
</head>
<body>
		
	<div class="heading">
		<h1 class="head">START <span>YOUR</span>JOURNEY</h1>
		<h2 class="subheading">Please take your time while filling, because you letting us know what services should the website help you with.</h2>
	</div>
	
	<form method="POST">
		<div id="content1">
			<label>Age</label> <br><br>
			<input type="number" name="age" placeholder="Enter your age" class="box"> <br><br>
			
		<label>Which option best describes your current role?</label> <br><br>
		
		
		<div class="option1">
			<select name ="choice">
				
				<option value="Student">Student</option>
				<option value="Full Time Job">Full Time Job</option>
				<option value="Farmer">Farmer</option>
				<option value="Prefer Not To Say">Prefer Not To Say</option>
				<option value="Other">Other</option>
			</select>
		
		</div>
		
		
		
		
		<label>Start Date</label> <br><br>
		
		<div class="option3">
		
			<select name="month">
			<option value="month">Month</option>
			<option value="january">January</option>
			<option value="february">February</option>
			<option value="march">March</option>
			<option value="april">April</option>
			<option value="may">May</option>
			<option value="june">June</option>
			<option value="july">July</option>
			<option value="august">August</option>
			<option value="september">September</option>
			<option value="octomber">October</option>
			<option value="november">November</option>
			<option value="december">December</option>
			</select>
			
			<select name="days">
			<option value="days"> Day</option>
			<option value="1"> 1</option>
			<option value="2"> 2</option>
			<option value="3">3</option>
			<option value="4"> 4</option>
			<option value="5"> 5</option>
			<option value="6"> 6</option>
			<option value="7"> 7</option>
			<option value="8"> 8</option>
			<option value="9"> 9</option>
			<option value="10"> 10</option>
			<option value="11"> 11</option>
			<option value="12"> 12</option>
			<option value="13"> 13</option>
			<option value="14"> 14</option>
			<option value="15"> 16</option>
			<option value="17">17</option>
			<option value="18"> 18</option>
			<option value="19"> 19</option>
			<option value="20"> 20</option>
			<option value="21"> 21</option>
			<option value="22"> 22</option>
			<option value="23"> 23</option>
			<option value="24"> 24</option>
			<option value="25"> 25</option>
			<option value="26"> 26</option>
			<option value="27"> 27</option>
			<option value="28"> 28</option>
			<option value="29"> 29</option>
			<option value="30"> 30</option>
			<option value="31"> 31</option>
			</select>
			
			<select name="years">
				<option value="years"> Year</option>
				<option value="2021"> 2021</option>
				<option value="2022">2022</option>
				<option value="2023"> 2023</option>
				<option value="2024">2024</option>
			</select>
		</div>
		
		<br>
		<label>From the short clips you watched, Which plant would you mostly like to grow?</label> <br>
		
		<div class="option2">
			<select name="veg_type">
			
				<option value="Peppers">Peppers</option>
				<option value="Potatoes">Potatoes</option>
				<option value="Spinach">Spinach</option>
				<option value="Carbage">Carbage</option>
			</select>
		</div>
		
		<br><br>
		
		<label id="head2">Additional plants you want to plant (Optional)</label> <br>
		
		<div id="content2">
			<span class="checkmark"><input type="checkbox" name="checkbox" class="larger"></span><label>Peppers</label><br><br>
			<input type="checkbox" name="checkbox" class="larger"><label>Potatoes</label><br><br>
			<input type="checkbox" name="checkbox" class="larger"><label>Carbage</label><br><br>
			<input type="checkbox" name="checkbox" class="larger"><label>Spinach</label><br><br>
		</div>
		
	<button type="submit"> PROCEED </button><br>

	</form>
	
</body>
</html>
<?php 

include("conn.php");


if($_SERVER['REQUEST_METHOD']=="POST"){

	$Age = $_POST['age'];
	$Choice = $_POST['choice'];
	$Month = $_POST['month'];
	$Day = $_POST['days'];
	$Year = $_POST['years'];
	$Veg_Type = $_POST['veg_type'];
		$chk = " ";
	foreach($Veg_Type as $chk1)
	{
		$chk.= $chk1.",";
	}
$username="Car";
	$query = "INSERT INTO journey(username,age,choice,month,days,year,vegtype) values ($username'$Age','$Choice','$Month','$Day','$Year ','$Veg_Type')";
	$query_run = mysqli_query($connection,$query);

	if($query_run){
		echo '<script type="text/javascript"> alert("Data saved") </script>';
	}
	else{

		echo '<script type="text/javascript"> alert("Data NOT saved") </script>';
	}


}

 ?>