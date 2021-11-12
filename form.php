<!DOCTYPE html>
<html>

<head>
<title>Welcome to Keep It Green</title>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="logo.png" >
<style>
label{
display:inline-block;
width:100px;
margin:10px;
}


</style>
<script>

function sign_in(){
if(confirm("You already have an account?")){
document.location="login.html";
};
}

</script>
<body style="background-color:lightblue">


<form style="margin-left:470px;width:30%;background-color:lightgreen;height:650px;border:solid black;border-width:2px;border-radius:5%;" action="new database.php" method="post">
<br>

<h1 style="color:navy;text-align:center;background-color:white"><b>ONLINE REGISTRATION </b></h1>
<br><br>

<label for="name">First Name:</label>

<input type="text" name="name" required placeholder="Enter your first name">
<br>

<label for="surname">Last name:</label>
<input  type="text" name="surname" required placeholder="Enter your Surname">
<br>

<label for="gender">Gender:</label>

<select name="gender" required>
<option 1 value="Male">Male</option>
<option 2 value="Female">Female</option>
<option 3 value="Other">Other</option>
</select>
<br>

<label for="cell">Cell:</label>
<input type="number" name="cell" required placeholder="Enter your Cellphone number">


<br>

<label for="country">Country</label>
<input type="text" name="country"required placeholder="Enter your country">
<br>

<label for="address">Residential address</label>
<input type="text" name="address"required placeholder="Enter your street address">
<br>

<label for="email">Email:</label>
<input type="email" name="email" required placeholder="Enter your email address">
<br>

<label for="username">Username:</label>
<input type="text" name="username" required placeholder="Enter your user name">
<br>

<label for="password">Password:</label>
<input type="password" name="password" required placeholder="Enter your password">
<br>

<label for="passwordRepeat">Confirm passowrd:</label>
<input type="password" name="passwordRepeat" required placeholder="re-enter your password">
<br>

<input style="margin-left:125px" type="submit" name="submit" value="submit">
<br>
<p style="color:navy;margin-left:125px"><b>Already have an account?</b></p>

<a style="margin-left:122px" href="#" onclick="sign_in()">Sign in</a>

</form>

<?php
if (isset($_GET["error"])){
if($_GET["error"]=="invalidCountry"){
echo "One of your inputs is empty</p>";
}


else if($_GET["error"]=="passwordsdontMatch"){
	echo"<p> Passwords don't match</p>";
	
}
}	
	


?>


</body>



</html>

