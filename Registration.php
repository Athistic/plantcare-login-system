
<?php
session_start();

?>
<!DOCTYPE html>


<html>

<head>
<title>Sign Up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width = device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styleReg.css">
<link rel="icon" type="jpeg/png" href="Images/Logo.png">
<script src="JS/scriptReg.js"></script>
<body style= "background-image: url('Images/RegBackG.jpeg');">

<header class="fix">
	

	<div class="nav-area">
		
			<div class="logo"><span>P</span>lant<span>C</span>are</div>
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
	</div>
	</ul>
	</div>
	<div>
	
<br>
<form style="margin-left:470px;width:30%;background-image: url('Images/Reg2.jpg');height:640px;border:solid white;border-width:2px;border-radius:5%;" action="includes/registration.inc.php" method="post">

<br>

<h2 style="text-align:center;color:green"><b>ONLINE REGISTRATION</b></h2>

<div style="background-color:black;color:red;margin-left:50px">
<?php
if(isset($_GET["error"])){ 
 if($_GET["error"]=="emptyinput"){
echo"<P> YOU HAVE NOT FILLED IN ALL FIELDS</P>";
	
}
else if($_GET["error"]=="invalidFirstName"){
echo"<P> INVALID FIRST NAME</P>";
	
}
else if($_GET["error"]=="InvalidSurname"){
echo"<P> INVALID SURNAME</P>";
	
}

else if($_GET["error"]=="invalidEmail"){
echo"<P> INVALID EMAIL</P>";
	
}
if($_GET["error"]=="invalidCountry"){
echo"<p>YOU HAVE ENTERED AN INVALID COUNTRY NAME</p>";	
}


else if($_GET["error"]=="UserNamealreadyexists"){
echo"<P> USERNAME ALREADY EXISTS</P>";
	
}
else if($_GET["error"]=="passwordsdontMatch"){
echo"<P> ENTERED PASSWORDS DO NOT MATCH</P>";
	
}

else if($_GET["error"]=="invalidUserName"){
echo"<P> INVALID USERNAME </P>";
	
}

else if($_GET["error"]=="stmtError"){
echo"<P> INCORRECT STATEMENT </P>";
	
}
else if($_GET["error"]=="noError"){
echo"<P> Account created successfully</P>";
	
}
else if($_GET["error"]=="invalidPassword"){
echo"<P> Password must contain at least 8 characters with at least 1 digit,1 small letter , 1 capital letter and/ 1 wildcard </P>";
}

}
?>
</div>

<label for="name">First Name:</label>

<input type="text" name="name"  >
<br>

<label for="surname">Last name:</label>
<input  type="text" name="surname"  >
<br>

<label for="gender">Gender:</label>

<select name="gender" >
<option 1 value="Male">Male</option>
<option 2 value="Female">Female</option>
<option 3 value="Other">Other</option>
</select>
<br>

<label for="cell">Cell:</label>
<input type="number" name="cell"  >


<br>

<label for="country">Country</label>
<input type="text" name="country" >
<br>

<label for="address">Residential address</label>
<input type="text" name="address">
<br>

<label for="email">Email:</label>
<input type="email" name="email"  >
<br>

<label for="username">Username:</label>
<input type="text" name="username"  >
<br>

<label for="password">Password:</label>
<input type="password" name="password" >
<br>

<label for="passwordRepeat">Confirm passowrd:</label>
<input type="password" name="passwordRepeat"  >
<br>

<input style="margin-left:125px" type="submit" name="submit" value="submit">
<br>
<p style="color:black;background-color:white;font-size:16px;margin-left:125px"><b>Already have an account?</b></p>

<a style="margin-left:122px;color:green;" href="#" onclick="sign_in()">Sign in</a>

</form>
</header>
</body>
</html>

