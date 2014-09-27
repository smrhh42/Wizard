<?php
session_start();
include_once('../common.php');



if(isset($_POST['buttonLogin'])){
	
	$results = array();
	$TempleEmail = $_POST['TempleEmail'];
	$password = $_POST['password'];
	
	$LoginUser = new User();
	$LoginRequest = $LoginUser->Login($TempleEmail,$password);
	
	if($LoginRequest == 1){
		
		session_regenerate_id();
		
		$_SESSION['Email'] = $TempleEmail;
		$_SESSION['Time'] = time();
		          // Start the PHP session 
		
		
		$results['Status'] = "success";
		$results['TempleEmail'] = $TempleEmail;
		print json_encode($results);
		
	}else{
		$results['Status'] = "error";
		print json_encode($results);
		
		}

} // end buttonLogin scope





if(isset($_POST['buttonRequestEmail'])){
	
	$results = array();
	$TempleEmail = $_POST['EmailRequest'];
	
	/// CREATE A CONECTION WITH DB
	$Db = new Connection();
	$DbConn = $Db->ConnectDB();
	
		
		$checkUserEmail = $DbConn->prepare('SELECT * FROM User WHERE Email = ?');
		$checkUserEmail->bindParam(1,$TempleEmail);
		$checkUserEmail->execute();
		
		if($checkUserEmail->rowCount() == 1){
			
			$results['Email_Requested'] = $TempleEmail;	
			$results['Status'] = "Existing_User";
			print json_encode($results);
			$DbConn = null;
			
		}else{
			
			
			
				$checkCISEmail = $DbConn->prepare('SELECT * FROM Student WHERE Email_Type_Address = ?');
				$checkCISEmail->bindParam(1,$TempleEmail);
				$checkCISEmail->execute();
				
				
				
				if($checkCISEmail->rowCount() == 1){
						
						$result = $checkCISEmail->fetchAll(PDO::FETCH_ASSOC);
						$result = $result[0];
						$Student_Id = $result['Student_Id'];
						
						$SendEmail = new User();
						$Result_Send_Email = $SendEmail->sendEmail($TempleEmail,$Student_Id);
						
						
						if($Result_Send_Email == 1){
							$results['Email_Requested'] = $TempleEmail;	
							$results['Status'] = "success";
							print json_encode($results);
							$DbConn = null;
						}else{
							
							$results['Email_Requested'] = $TempleEmail;	
							$results['Status'] = "Error_Sending_Email";
							print json_encode($results);
							$DbConn = null;
						}
						
						
				
				}else{
						$results['Email_Requested'] = $TempleEmail;	
						$results['Status'] = 'error';
						print json_encode($results);
						$DbConn = null;
			}
			
		} //End first group else if conditions
	
	
	
	
} // End buttonRequestEmail scope








if(isset($_POST['NewUserRegister'])){
	
	
	//GLOBAL VARIABLES
	$ImageName = "";
	$results = array();
	
	$Student_Id = $_POST['Student_Id'];
	$Email = $_POST['EmailNewUser'];
	$Password = $_POST['password_Request'];
	$User_Type_Id = 1;
	
	
	if($_FILES["file"]["name"] != "" || $_FILES["file"]["name"] != null){
		
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
	
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& in_array($extension, $allowedExts)) {
			
			$ImageName = $_FILES["file"]["name"];
			
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "../Images/Users/" . $_FILES["file"]["name"]);
			  //echo "Stored in: " . "../Images/Users/" . $_FILES["file"]["name"];
			  
			  
		
		} else {
		
		  $results['Status'] = "error_Upload_Img";	
		  print json_encode($results);
		}
  
	} // End if $_FILE['file'] condition
	
 
 		$InsertNewUser = new User();
	    $ResultNewUser = $InsertNewUser->Insert_User($Email,$Password,$ImageName,$User_Type_Id,$Student_Id);
	
		
		if($ResultNewUser == 1){
			
			$results['Status'] = "success";
			print json_encode($results);
			
		}else if($ResultNewUser == 2){
			
			$results['Status'] = "Duplicate";
			print json_encode($results);
			
		}else{
			$results['Status'] = "error";
			print json_encode($results);
		
		} //End first group else if conditions


	
} // End buttonRequestEmail scope



if(isset($_GET['logout'])){
	
	session_start(); // Initialize session
	$_SESSION['Time'] = null; // set up my functin to null
	$_SESSION['Email'] = null; // set up function to null
	session_destroy();
	header("Location: ../../Login.php");
}

/*




if(isset($_POST['buttonRequestEmail'])){
	
	$results = array();
	$TempleEmail = $_POST['EmailRequest'];
	
	/// CREATE A CONECTION WITH DB
	$Db = new Connection();
	$DbConn = $Db->ConnectDB();
	
	
	$checkCISEmail = $DbConn->prepare('SELECT * FROM Student WHERE Email_Type_Address = ?');
	$checkCISEmail->bindParam(1,$TempleEmail);
	$checkCISEmail->execute();
	
	if($checkCISEmail->rowCount() == 1){
		
			
			while($result_Students = $checkCISEmail->fetch(PDO::FETCH_ASSOC)){
				
							$Student_Id						=	$result_Students['Student_Id']; 
							$Name_Last						=	$result_Students['Name_Last']; 
							$Name_First						=	$result_Students['Name_First']; 
							$Tu_Id							=	$result_Students['Tu_Id']; 
							$Expected_Graduation_Date 		=	$result_Students['Expected_Graduation_Date']; 
							$Email_Type_Address				=	$result_Students['Email_Type_Address']; 
							$Gender							=	$result_Students['Gender']; 
							$Address_Street_Line1			=	$result_Students['Address_Street_Line1']; 
							$Address_City					=	$result_Students['Address_City']; 
							$Address_Zip					=	$result_Students['Address_Zip']; 
							$Phone_Number					=	$result_Students['Phone_Number']; 
							$Hours_Attempted_UG				=	$result_Students['Hours_Attempted_UG']; 
							$GPA_Hours_UG					=	$result_Students['GPA_Hours_UG']; 
							$Grade_Points_UG				=	$result_Students['Grade_Points_UG']; 
							$GPA_UG							=	$result_Students['GPA_UG']; 
							$Overall_passed_UG				=	$result_Students['Overall_passed_UG']; 
							$Transfer_Hours_UG				=	$result_Students['Transfer_Hours_UG']; 
							$Cumulative_Credits_UG			=	$result_Students['Cumulative_Credits_UG']; 
							$Cumulative_Quality_Points_UG	=	$result_Students['Cumulative_Quality_Points_UG']; 
							$Hours_Attempted_G				=	$result_Students['Hours_Attempted_G']; 
							$Hours_Passed_G					=	$result_Students['Hours_Passed_G']; 
							$GPA_Hours_G					=	$result_Students['GPA_Hours_G']; 
							$Grade_Points_G					=	$result_Students['Grade_Points_G']; 
							$GPA_G							=	$result_Students['GPA_G']; 
							$Overral_Hours_Passed_G			=	$result_Students['Overral_Hours_Passed_G']; 
							$Transfer_Hours_G				=	$result_Students['Transfer_Hours_G']; 
							$Cumulative_Credits_G			=	$result_Students['Cumulative_Credits_G']; 
							$Cumulative_Quality_Points_G	=	$result_Students['Cumulative_Quality_Points_G']; 
							$REgistration_Status_Date		=	$result_Students['REgistration_Status_Date']; 
							$Hours_Registerd				=	$result_Students['Hours_Registerd']; 
							$College_1_Description			=	$result_Students['College_1_Description']; 
							$Program_1						=	$result_Students['Program_1']; 
								
							
								$results['Student_Id'][$i] 					= $Student_Id;
								$results['Name_Last'][$i] 					= $Name_Last;
								$results['Name_First'][$i] 					= $Name_First;
								$results['Tu_Id'][$i] 						= $Tu_Id;
								$results['Expected_Graduation_Date'][$i] 	= $Expected_Graduation_Date;
								$results['Email_Type_Address'][$i] 			= $Email_Type_Address;
								$results['Gender'][$i] 						= $Gender;
								$results['Address_Street_Line1'][$i] 		= $Address_Street_Line1;
								$results['Address_City'][$i] 				= $Address_City;
								$results['Address_Zip'][$i] 				= $Address_Zip;
								$results['Phone_Number'][$i] 				= $Phone_Number;
								$results['Hours_Attempted_UG'][$i] 			= $Hours_Attempted_UG;
								$results['GPA_Hours_UG'][$i] 				= $GPA_Hours_UG;
								$results['Grade_Points_UG'][$i] 			= $Grade_Points_UG;
								$results['GPA_UG'][$i] 						= $GPA_UG;
								$results['Overall_passed_UG'][$i] 			= $Overall_passed_UG;
								$results['Transfer_Hours_UG'][$i] 			= $Transfer_Hours_UG;
								$results['Cumulative_Credits_UG'][$i] 		= $Cumulative_Credits_UG;
								$results['Cumulative_Quality_Points_UG'][$i]= $Cumulative_Quality_Points_UG;
								$results['Hours_Attempted_G'][$i] 			= $Hours_Attempted_G;
								$results['Hours_Passed_G'][$i] 				= $Hours_Passed_G;
								$results['GPA_Hours_G'][$i] 				= $GPA_Hours_G;
								$results['Grade_Points_G'][$i] 				= $Grade_Points_G;
								$results['GPA_G'][$i] 						= $GPA_G;
								$results['Overral_Hours_Passed_G'][$i] 		= $Overral_Hours_Passed_G;
								$results['Transfer_Hours_G'][$i] 			= $Transfer_Hours_G;
								$results['Cumulative_Credits_G'][$i] 		= $Cumulative_Credits_G;
								$results['Cumulative_Quality_Points_G'][$i] = $Cumulative_Quality_Points_G;
								$results['REgistration_Status_Date'][$i] 	= $REgistration_Status_Date;
								$results['Hours_Registerd'][$i] 			= $Hours_Registerd;
								$results['College_1_Description'][$i] 		= $College_1_Description;
								$results['Program_1'][$i] 					= $Program_1;
							
								$i++;
							}
				
						$results['Email_Requested'] = $TempleEmail;	
						$results['Status'] = "success";
						print json_encode($results);
		
		
		
	}else{
		
		$results['Status'] = 'error';
		print json_encode($results);
		$DbConn = null;
		}
	
	//$results['Status'] = $TempleEmail;
	//print json_encode($results);


	
} // End buttonRequestEmail scope



*/





?>