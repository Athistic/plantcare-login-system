<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Request Password</title>
		<link rel="stylesheet" href="css/styleFP.css">
		<link rel="icon" type="jpeg/png" href="images/Logo.png">
	</head>
	
<body>
	<div class="center">
		<h1>Request Password</h1> 
		
			<form method="post" action="tester2.inc.php">
							<div class="txt_field">
					<input type="text"name="email" >
					<span></span>
					<label>Enter email address</label>
				</div>
				
				<input type="submit" name ="submit" value="submit">
				
				<div class="back_link">
					Reset password<a href="PasswordReset.php"> click here after receiving email </a>
				</div>
			</form>
			<center>
			<div style="background-color:lightBlue">
	<?php

if(isset($_GET["error"])){
 if($_GET["error"]=="noError"){
echo"<p> email exists, link to reset your password will be sent to you via email shortly </p>";
 }
else{
echo"<p>email address does not exist</p>";
}
}


?>
</div>
</center>
</div>
	</div>
	

</body>
</html>


