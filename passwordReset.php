<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Token Request</title>
		<link rel="stylesheet" href="css/stylePR.css">
		<link rel="icon" type="jpeg/png" href="images/Logo.png">
	</head>
	
<body>
	<div class="center">
		<h1>Request Token</h1> 
			<form method="post" action="Includes/PasswordReset.inc.php"> 
			
				<div class="txt_field">
					<input type="text" name="email" required>
					<span></span>
					<label>Please enter email address</label>
				</div>
				
				<div class="txt_field">
				<input type="text" name="token" required>
				<span></span>
				<label>Please enter token</label>
				</div>
				
				<input type="submit" name="submit">
				
				<div class="back_link">
					Back to previous page<a href="login.php"> Back </a>
				</div>
				<div style="background-color:lightblue">
<?php
if(isset($_GET["error"])){ 
 if($_GET["error"]=="emptyinput"){
echo"<P> YOU HAVE NOT FILLED IN ALL FIELDS</P>";
	
}
else if($_GET["error"]=="invalidFirstName"){
echo"<P> INVALID FIRST NAME</P>";
	
}else if($_GET["error"]=="tokenFound"){
echo"<P> Token is found</P>";
	
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
echo"<P> Password reset successfully,please go back to login page</P>";
	
}
else if($_GET["error"]=="invalidPassword"){
echo"<P> Password must contain at least 8 characters with at least 1 digit,1 small letter , 1 capital letter and/ 1 wildcard </P>";
}

}
?>
</div>
			</form>
	</div>
	

</body>
</html>
