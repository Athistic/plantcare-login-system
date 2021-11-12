<?php

session_start();
	
			$_SESSION["username"]=$UserNamexists["username"];
			$_SESSION['start_time']=time();					
			header("location:update page.php");
			?>