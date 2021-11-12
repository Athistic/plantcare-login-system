<?php





function ForgotUserNamexists($conn,$email,$token){
$sql="SELECT * FROM forgotPassword where email=? And token=?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location:../registration.php?error=stmtError");
	
}

	
		mysqli_stmt_bind_param($stmt, "ss", $email,$token);
		
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

?>