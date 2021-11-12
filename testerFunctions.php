<?php
function emptyInputSignUp($email,$token){

$result;
if( empty($email) || empty($token) ){
	
$result=true;
}
else
{
$result=false;
}
return $result;
}

function UserNamexists($conn,$email){
$sql="SELECT * FROM tbl_registration where email=? ";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:forgotPassword.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "s", $email,);
		
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



function emptyInputLogin($email,$token){

$result;
if(empty($email) || empty($token) ){
	
$result=true;
}
else
{
$result=false;
}
return $result;
}


function UpdateUser($conn,$token,$email){
$sql = "UPDATE forgotPassword SET token='$token' WHERE email='$email'";

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:forgotPassword.php?error=stmtError");
	
}
	
	
		mysqli_stmt_bind_param($stmt, "ss",$token,$email);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:../forgotPassword.php?error=noError");
		exit();
}


function createUser($conn,$email,$token){
$sql="INSERT INTO forgotPassword(email,token)
VALUES(?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../forgot.php?error=stmtError");
	
}	
		mysqli_stmt_bind_param($stmt, "ss", $email,$token);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location:forgotPassword.php?error=noError");
		exit();
}


function emailExists($conn,$token,$email){
$sql="SELECT * FROM forgotPassword where token=? And email=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../registration.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "ss", $token,$email);
		
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

function loginUser($conn,$email,$password){
		
	$emailExists=emailExists($conn,$email,$email);
	if($emailExists===false){
	header("location:../login.php?error=wrongLogin");
		exit();
	}
	
	$passwordHashed=$emailExists["password"];
	$checkPassword=password_verify($password,$passwordHashed);
	if($checkPassword===false){
		$new_password = password_hash($password, PASSWORD_DEFAULT);
		header("location:../login.php?error=wrongLogin");
		exit();
	}	
		else if($checkPassword===true){
			$sql="UPDATE tbl_registration SET password='$new_password' WHERE email='$email'";
			session_start();
			$_SESSION["username"]=$emailExists["username"];
			$_SESSION['start_time']=time();
								
			header("location:../first.php");
		exit();
		
		}
		
	}









	
	
	




