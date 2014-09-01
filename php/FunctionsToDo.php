<?php
require_once('../assets/common.php');


/*

/// THIS ARE ALL COLUMNS THAT HAILEY WHANT TO DISPLAY ////

Table name = "STUDENT"

Name_Last
Name_First
Tu_Id
Expected_Graduation_Date
Email_Type_Address
Gender
Address_Street_Line1
Address_City
Address_Zip
Phone_Number
Hours_Attempted_UG
GPA_Hours_UG
Grade_Points_UG
GPA_UG
Overall_passed_UG
Transfer_Hours_UG
Cumulative_Credits_UG
Cumulative_Quality_Points_UG
Hours_Attempted_G
Hours_Passed_G
GPA_Hours_G
Grade_Points_G
GPA_G
Overral_Hours_Passed_G
Transfer_Hours_G
Cumulative_Credits_G
Cumulative_Quality_Points_G
REgistration_Status_Date
Hours_Registerd
College_1_Description
Program_1

*/



if(isset($_POST['DisplayStudents'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT");
				$query_Students->execute();
					
					$number_rows = $query_Students->rowCount();
						
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
if(isset($_POST['DisplayStudentsByName'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT ORDER BY Name_First");
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	if(isset($_POST['DisplayStudentsByLast'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT ORDER BY Name_Last");
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	if(isset($_POST['DisplayStudentsByTempleId'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT ORDER BY Tu_Id");
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['searchByNameBtn'])){
		
				$nameSearch = $_POST['nameSearch'].'%';
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT WHERE (Name_First LIKE :search) ORDER BY Name_First");
				$query_Students->bindParam(':search',$nameSearch);
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
if(isset($_POST['searchByLastBtn'])){
		
				$LastSearch = $_POST['LastSearch'].'%';
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT WHERE (Name_Last LIKE :search) ORDER BY Name_Last");
				$query_Students->bindParam(':search',$LastSearch);
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	if(isset($_POST['searchByTempleIdBtn'])){
		
				$TempleId = $_POST['TempleId'];
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT WHERE Tu_Id=?");
				$query_Students->bindParam(1,$TempleId);
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
		
if(isset($_POST['searchByEmailBtn'])){
		
				$Email = $_POST['Email'];
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_Students = $DbConn->prepare("SELECT * FROM STUDENT WHERE Email_Type_Address=?");
				$query_Students->bindParam(1,$Email);
				$query_Students->execute();
				$number_rows = $query_Students->rowCount();
				
				$i=0;		
					while($result_Students = $query_Students->fetch(PDO::FETCH_ASSOC)){
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
								$results['Cumulative_Quality_Points_UG'][$i] = $Cumulative_Quality_Points_UG;
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
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
		
if(isset($_POST['sendEmail'])){
		
			$emailInput 	= $_POST['emailInput'];
			$SubjectInput 	= $_POST['SubjectInput'];
			$Body 			= $_POST['Body'];
			$emailWhoSend 	= $_POST['emailWhoSend'];
			
		
			$results = array();
	try{
			$headersEmail = 'From:' .$emailWhoSend ;
			$resultSendEmail = mail($emailInput, $SubjectInput, $Body, $headersEmail);
				
				$results['Status'] = $resultSendEmail;
				print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results['Status'] = "error";
			print json_encode($results);
		}
} // end function sendEmail
	
	
	
	if(isset($_POST['observationStudent'])){
		
	
		$results = array(); // this array store all the infor to pass with json
		
		$titleObservation 		= $_POST['titleObservation'];
		$DescriptionObservation = $_POST['DescriptionObservation'];
		$dateObservation 		= $_POST['dateObservation'];
		$timeObservation 		= $_POST['timeObservation'];
		$idUserToObservation 	= $_POST['idUserToObservation'];
		
		
		// Here is to add the new observation 
		
		$insertObservation = new Observations();
		$resultInsertObservation = $insertObservation->Insert_Observation($titleObservation,$DescriptionObservation,$dateObservation,$timeObservation,$idUserToObservation);	
		
		if($resultInsertObservation == 1){
			
			
			$results['Status'] = "success";
			print json_encode($results);
		}else {
			
			$results['Status'] = "error";
			print json_encode($results);
			}
		
}
	
	
	
	
			
if(isset($_POST['DisplayNotes'])){
		
				$Student_Id = $_POST['Student_Id'];
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_Observations = $DbConn->prepare("SELECT * FROM Observations WHERE Student_Id=?");
				$query_Observations->bindParam(1,$Student_Id);
				$query_Observations->execute();
				$number_rows = $query_Observations->rowCount();
				
				$i=0;		
				


					while($result_Students = $query_Observations->fetch(PDO::FETCH_ASSOC)){
							$Observations_Id			=	$result_Students['Observations_Id']; 
							$Title						=	$result_Students['Title']; 
							$Observations_Description	=	$result_Students['Observations_Description']; 
							$Observation_Date			=	$result_Students['Observation_Date']; 
							$Observation_Time 		=	$result_Students['Observation_Time']; 
							$Student_Id				=	$result_Students['Student_Id']; 
							
							
								$results['Observations_Id'][$i] 			= $Observations_Id;
								$results['Title'][$i] 						= $Title;
								$results['Observations_Description'][$i] 	= $Observations_Description;
								$results['Observation_Date'][$i] 			= $Observation_Date;
								$results['Observation_Time'][$i] 			= $Observation_Time;
								$results['Student_Id'][$i] 					= $Student_Id;
									
							
								$i++;
							}
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	if(isset($_POST['AddToDoList'])){
		
				$User_Id = $_POST['User_Id'];
				$Description = $_POST['Description'];
				$DateToDo = $_POST['DateToDo'];
				$Urgent = $_POST['Urgent'];
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
				$InsertToDoEvent = new ToDoList();
				$resultInsertToDo =  $InsertToDoEvent->Insert_User($Description,$DateToDo,$Urgent,$User_Id);

			
		if($resultInsertToDo == 1){
						
						
						$results['Status'] = "success";
						print json_encode($results);
		}else{
		
			$results['Status'] = "error";
			print json_encode($results);
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
			
if(isset($_POST['DisplayToDoNotes'])){
		
		$User_Id = $_POST['User_Id'];
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
			
		
				/// Now I need to create the output with all events after current date 
			
				$query_ToDoNotes = $DbConn->prepare("SELECT * FROM ToDoList WHERE User_Id=?");
				$query_ToDoNotes->bindParam(1,$User_Id);
				$query_ToDoNotes->execute();
				$number_rows = $query_ToDoNotes->rowCount();
				
				$i=0;		
				


					while($result_TodoList = $query_ToDoNotes->fetch(PDO::FETCH_ASSOC)){
							$ToDoList_Id		=	$result_TodoList['ToDoList_Id']; 
							$ToDo_Description	=	$result_TodoList['ToDo_Description']; 
							$ToDo_Date			=	$result_TodoList['ToDo_Date']; 
							$ToDo_Urgent		=	$result_TodoList['ToDo_Urgent']; 
							$User_Id 			=	$result_TodoList['User_Id']; 
							
							
								$results['ToDoList_Id'][$i] 		= $ToDoList_Id;
								$results['ToDo_Description'][$i] 	= $ToDo_Description;
								$results['ToDo_Date'][$i] 			= $ToDo_Date;
								$results['ToDo_Urgent'][$i] 		= $ToDo_Urgent;
								$results['User_Id'][$i] 			= $User_Id;
								$i++;
						}
				
						
						$results['number_rows'] = $number_rows;
						$results['Status'] = "success";
						print json_encode($results);
				 
		}catch (Exception $e) {
			
		
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['DeleteToDoList'])){
		
		$ToDoList_Id = $_POST['ToDoList_Id'];
		$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
				$DeleteToDoEvent = new ToDoList();
				$resultDeleteToDo =  $DeleteToDoEvent->Delete_ToDo($ToDoList_Id);

			
		if($resultDeleteToDo == 1){
				$results['Status'] = "success";
				print json_encode($results);
		}else{
		
			$results['Status'] = "error";
			print json_encode($results);
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	
	
	
	
	if(isset($_POST['EditToDoList'])){
		
	
		$User_Id = $_POST['User_Id'];
		$Description = $_POST['Description'];
		$DateToDo = $_POST['DateToDo'];
		$Urgent = $_POST['Urgent'];
		$ToDo_Id = $_POST['ToDo_Id'];
		
		$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
				$DeleteToDoEvent = new ToDoList();
				$resultEditToDo =  $DeleteToDoEvent-> Update_ToDo($ToDo_Id,$Description,$DateToDo,$Urgent,$User_Id);

			
		if($resultEditToDo == 1){
				$results['Status'] = "success";
				print json_encode($results);
		}else{
		
			$results['Status'] = "error";
			print json_encode($results);
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
?>