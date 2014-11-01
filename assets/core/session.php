<?php

if($_SESSION['UserObject'] == ""){
	header("Location: Login.php");
}else{
	
		if(time() - $_SESSION['Time'] < 1800){
			// Regenerate the time other 30 minutes
			$_SESSION['Time'] = time();
			
			$UserObject = $_SESSION['UserObject'];
			print_r($UserObject);
		}else{
			header("Location: Login.php?ExpiredSession");
		}
}