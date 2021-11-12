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

<script>
function goToVeg(){
if(confirm("Please click on ok to proceed to chosen veg information")){
	document.location="researchPage.php";
	
}	
}
</script>
<title>Start Journey</title>
	<link rel="icon" type="jpeg/png" href="Images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/startJ.css">
</head>
<body>
		
	<div class="heading">
		<h1 class="head">START <span>YOUR</span>JOURNEY</h1>
		<h2 class="subheading">Please take your time while filling, because you letting us know what services should the website help you with.</h2>
	</div>
	<form action="includes/journey.inc.php" method="post">
			<input type="hidden" name="username" value=<?php echo $_SESSION['username']?> placeholder="Your username" >
		<div id="content1">
		<label>Age</label> <br><br>
		
			<input type="number" name="age" placeholder="Enter your age" class="box"><br><br>
			
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
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="Octomber">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
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
			
			    <select name="year">
				<option value="year"> Year</option>
				<option value="2021"> 2021</option>
				<option value="2022">2022</option>
				<option value="2023"> 2023</option>
				<option value="2024">2024</option>
			</select>
			
			
		<div class="option2">
		
	
			<select name="vegtype">
			
				<option value="Peppers">Peppers</option>
				<option value="Potatoes">Potatoes</option>
				<option value="Spinach">Spinach</option>
				<option value="Carbage">Cabbage</option>
			</select>
			<div>
	
		
		
		<button type="submit" name="submit"  > PROCEED </button><br>
		
		<div style="background-color:black;color:White;margin-left:150px;margin-top:10px;font-size:20px;width:50%">
<?php
if(isset($_GET["error"])){ 
 if($_GET["error"]=="noError"){
echo "<li><a href='researchPage.php'>Click here to continue</a></li>";


 }
 else if($_GET["error"]=="UserNamealreadyexists"){
echo"<P> You have already chosen a crop to grow</P>";
	echo "<li><a href='researchPage.php'>Click here to continue</a></li>";
}

}

?>
</div>
		
	</form>
	
</body>
</html>
