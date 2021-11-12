<?php

if(isset($_POST["submit"])){
$name=$_POST['name'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$cell=$_POST['cell'];
$country=$_POST['country'];
$address=$_POST['address'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$passwordRepeat=$_POST['passwordRepeat'];


require_once '../dbh.php';
require_once '../functions.php';

if(emptyInputSignUp($name,$surname,$gender,$cell,$country,$address,$email,$username,$password,$passwordRepeat)!==false){
	header("location:../Registration.php?error=emptyinput");
	exit();
}

if(invalidPassword($password)!==false){
	header("location:../Registration.php?error=invalidPassword");
	exit();
}

if(invalidFirstName($name)!==false){
	header("location:../Registration.php?error=invalidFirstName");
	exit();
}

if(invalidSurname($surname)!==false){
	header("location:../Registration.php?error=InvalidSurname");
	
	exit();
}


if(invalidEmail($email)!==false){
	header("location:../Registration.php?error=invalidEmail");
	exit();
}

if(invalidCountry($country)!==false){
	header("location:../Registration.php?error=invalidCountry");
	exit();
}

if(invalidUserName($username)!==false){
	header("location:../Registration.php?error=invalidUserName");
	exit();
}
if(passwordMatch($password,$passwordRepeat)!==false){
	header("location:../Registration.php?error=passwordsdontMatch");
	exit();
}

if(UserNamexists($conn,$username,$email)!==false){
	header("location:../Registration.php?error=UserNamealreadyexists");
	exit();
}
	createUser($conn,$name,$surname,$gender,$cell,$country,$address,$email,$username,$password);

}


else{
	
header("location:../Registration.php");
	exit();
}


?>