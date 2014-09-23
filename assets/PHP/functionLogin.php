<?php

include_once('../common.php');





if(isset($_POST['buttonLogin'])){
	
	$results = array();
	$TempleEmail = $_POST['TempleEmail'];
	$password = $_POST['password'];
	
	$LoginUser = new User();
	$LoginRequest = $LoginUser->Login($TempleEmail,$password);
	
	if($LoginRequest == 1){
		
		$results['Status'] = "success";
		$results['TempleEmail'] = $TempleEmail;
		print json_encode($results);
		
	}else{
		$results['Status'] = "error";
		print json_encode($results);
		
		}
	
	
	

}









?>