<?php
require_once('../assets/common.php');

if(isset($_POST['InsertUser'])){
	
		    $results = array();
			$name 		= $_POST['name'];
			$last 		= $_POST['last'];
			$email 		= $_POST['email'];
			$Temple_id 	= $_POST['Temple_id'];
			$pass 		= $_POST['pass'];
		
	
			$data = substr($_POST['ImageData'], strpos($_POST['ImageData'], ",") + 1);

			$Images = $email;
			$Images = $Images.'.png';
			
			$decodedData = base64_decode($data);
			
			$patch = '../assets/Images/Users/'.$Images;
			
			$fp = fopen($patch , 'wb');
			fwrite($fp, $decodedData);
			fclose($fp);

			
			//Insert New Usear 
			
			$InsertUser = new User(); 
			$resultInsert = $InsertUser->Insert_User($name,$last,$email,$Temple_id,$pass,$Images);
		
				
				
			if($resultInsert == 1){
				
				
				$results['Status'] = 'success';
				print json_encode($results);
				
			}else if($resultInsert == 0){
				
				
				$results['Status'] = 'Duplicate';
				print json_encode($results);
				
			}else{
				
				$results['Status'] = 'error';
				print json_encode($results);
				
				}
	} // End InsertUser functions
	
	
	
	if(isset($_POST['buttonLogin'])){
		
		$email = $_POST['emailLogin'];
		$pass = $_POST['passLogin'];

		
		$Login = new User();
		$resultLogin = $Login-> Login($email,$pass);
		
		if($resultLogin == 1){
			header("Location: ../index.php");
		}else{
			header("Location: ../index.php?errorLogin");
		}
	}



if(isset($_GET['Logout'])){
	session_start();
	session_destroy();
	header("Location: ../index.php");
}









?>
