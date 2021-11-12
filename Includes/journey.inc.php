<?php

	if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$age = $_POST['age'];
	$choice = $_POST['choice'];
	$month = $_POST['month'];
	$days = $_POST['days'];
	$year = $_POST['year'];
	$vegtype = $_POST['vegtype'];
		
	require_once '../dbh.php';
    require_once '../functions.php';
		
		if(RecordExists($conn,$username)!==false){
	header("location:../journey.php?error=UserNamealreadyexists");
	exit();
}

AddToJourney($conn,$username,$age,$choice,$month,$days,$year,$vegtype);

}
	
	else

	header("location:../journey.php");
	exit();
?>