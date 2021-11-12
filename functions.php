<?php
function emptyInputSignUp($name,$surname,$gender,$cell,$country,$address,$email,$username,$password,$passwordRepeat){

$result;
if(empty($name)|| empty($surname)|| empty($gender) || empty($cell) || empty($country) || empty($address) || empty($email)|| empty($username) || empty($password) || empty($passwordRepeat)){
	
$result=true;
}
else
{
$result=false;
}
return $result;
}

function invalidFirstName($name){
	
	$result;
if (!preg_match("/^[a-zA-Z]*$/",$name)){
	$result=true;
	}
else{
	
	return false;
}
}

function invalidPassword($password){
	
	$result;
if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password)){
	
	$result=true;
	}
else{
	
	return false;
}
}
function invalidEmail($email){
	$result;
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$result=true;
	}
	else
	{
	$result=false;
		
	}
	return $result;
	}
function passwordMatch($password,$passwordRepeat){
$result	;

if($password !==$passwordRepeat){
$result=true;
	
}
	else{
$result=false;
	}
	return $result;
}

function invalidSurname($surname){
	$result;
	
	if(!preg_match("/^[a-zA-Z]*$/",$surname)){
		$result=true;
		
	}
	else{
		$result=false;
		
	}
	return $result;
}

function invalidCountry($country){
$result;

if(!preg_match("/^[a-zA-Z\\s]*$/",$country)){
	
	$result=true;
	}
	else{
	$result=false;	
		
	}
	return $result;
}

function UserNamexists($conn,$username,$email){
$sql="SELECT * FROM tbl_registration where username=? Or email=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../registration.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "ss", $username,$email);
		
		mysqli_stmt_execute($stmt);
		
	$resultData=mysqli_stmt_get_result($stmt);
	
	if($row=mysqli_fetch_assoc($resultData)){
		
		return $row;
	}
	else{
		$result=false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function invalidUserName($username){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		
	$result=true;
	}
	else{
		
		$result=false;
	}
	return $result;
}

function emptyInputLogin($username,$password){

$result;
if(empty($username) || empty($password) ){
	
$result=true;
}
else
{
$result=false;
}
return $result;
}


function createUser($conn,$name,$surname,$gender,$cell,$country,$address,$email,$username,$password){
$sql="INSERT INTO tbl_registration(name,surname,gender,cell,country,address,email,username,password)
VALUES(?,?,?,?,?,?,?,?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../registration.php?error=stmtError");
	
}
	
	$hashedPassword=password_hash($password,PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "sssssssss", $name,$surname,$gender,$cell,$country,$address,$email,$username,$hashedPassword);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:../registration.php?error=noError");
		exit();
}

function AddToContacts($conn,$name,$cell,$email,$message){
$sql="INSERT INTO contact_us(name,cell,email,message)
VALUES(?,?,?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../contact.php?error=stmtError");
}
mysqli_stmt_bind_param($stmt, "ssss", $name,$cell,$email,$message);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:../contact.php?error=noError");
		exit();

}

function AddToken($conn,$username,$token){
$sql="INSERT INTO testing(token,username)
VALUES(?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:/tester.php?error=stmtError");
}
mysqli_stmt_bind_param($stmt, "ss", $username,$token);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:/tester.php?error=noError");
		exit();

}

function AddToJourney($conn,$username,$age,$choice,$month,$days,$year,$vegtype){
$sql="INSERT INTO journey(username,age,choice,month,days,year,vegtype)
VALUES(?,?,?,?,?,?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../contact.php?error=stmtError");
}
mysqli_stmt_bind_param($stmt, "sssssss", $username,$age,$choice,$month,$days,$year,$vegtype);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:../journey.php?error=noError");
		exit();

}




function RecordExists($conn,$username){
$sql="SELECT * FROM journey where username=? ;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../journey.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "s", $username);
		
		mysqli_stmt_execute($stmt);
		
	$resultData=mysqli_stmt_get_result($stmt);
	
	if($row=mysqli_fetch_assoc($resultData)){
		
		return $row;
	}
	else{
		$result=false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}



	function loginUser($conn,$username,$password){
		/*two username paramaters are passed because the userNameExists function uses OR logic,meaning either email or username value is retained.
	it's neccessary to assocciate both the $email and $username with one value,because that variable will allow the user to access the database
	using their username or email(they both serve the same authentication purpose)	*/
	$UserNamexists=UserNamexists($conn,$username,$username);
	if($UserNamexists===false){
	header("location:../login.php?error=wrongLogin");
		exit();
	}
	
	$passwordHashed=$UserNamexists["password"];
	$checkPassword=password_verify($password,$passwordHashed);
	if($checkPassword===false){
		
		header("location:../login.php?error=wrongLogin");
		exit();
	}	
		else if($checkPassword===true){
			
			session_start();
			$_SESSION["username"]=$UserNamexists["username"];
			$_SESSION['start_time']=time();
								
			header("location:../first.php");
		exit();
		
		}
		
	}
	
function ForgotUserNamexists($conn,$username,$token){
$sql="SELECT * FROM tbl_registration where username=? And token=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../registration.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "ss", $username,$token);
		
		mysqli_stmt_execute($stmt);
		
	$resultData=mysqli_stmt_get_result($stmt);
	
	if($row=mysqli_fetch_assoc($resultData)){
		
		return $row;
	}
	else{
		$result=false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}
	
	function ForgotLogin($conn,$username,$password){
		/*two username paramaters are passed because the userNameExists function uses OR logic,meaning either email or username value is retained.
	it's neccessary to assocciate both the $email and $username with one value,because that variable will allow the user to access the database
	using their username or email(they both serve the same authentication purpose)	*/
	$ForgotUserNamexists=ForgotUserNamexists($conn,$username,$username);
	if($ForgotUserNamexists===false){
	header("location:../login.php?error=wrongLogin");
		exit();
	}
	
	$passwordHashed=$ForgotUserNamexists["password"];
	$checkPassword=password_verify($password,$passwordHashed);
	if($checkPassword===false){
		
		header("location:../login.php?error=wrongLogin");
		exit();
	}	
		else if($checkPassword===true){
			
			session_start();
			$_SESSION["username"]=$ForgotUserNamexists["username"];
			$_SESSION['start_time']=time();
								
			header("location:../first.php");
		exit();
		
		}
		
	}
	
	




