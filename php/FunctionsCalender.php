<?php
require_once('../assets/common.php');

/*
database Calendar



Calendar_Id	
Date
Time
Title
Description	
Url
User_Id




*/


if(isset($_POST['InsertEvet'])){
	
	$results = array();
	$dateEvent 		= $_POST['Date'];
	$Time 			= $_POST['Time'];
	$Title 			= $_POST['Title'];
	$Url 			= $_POST['Url'];
	$Description 	= $_POST['Description'];
	$User_Id 		= $_POST['User_Id'];
	

	$UrlComplete= "http://".$Url;
	

	$insertEvent = new Calendar();
	$resultEvent = $insertEvent->Insert_Event($dateEvent,$Time,$Title,$Description,$UrlComplete,$User_Id);


	if($resultEvent == 1){
		$results['Status'] = 'success';
		print json_encode($results);
	}else{
		
		$results['Status'] = 'error';
		print json_encode($results);
	}
	
	
	
	
	
} // End function InsertEvent
	
	

if(isset($_POST['DisplayEvents'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
				
				$User_Id = $_POST['User_Id'];
				$Date = date("Y-m-d");
				
			

				
				
				/// Now I need to create the output with all events after current date 
			
				$query_Events = $DbConn->prepare("SELECT * FROM Calendar WHERE User_Id = ? AND Date >= ? ORDER BY Date DESC");
				$query_Events->bindParam(1,$User_Id);
				$query_Events->bindParam(2,$Date);
				$query_Events->execute();
					
						
					while($result_Event = $query_Events->fetch(PDO::FETCH_ASSOC)){
	
								
								$Calendar_Id	= $result_Event['Calendar_Id'];
								$Date			= $result_Event['Date'];
								$Time			= $result_Event['Time'];
								$Description	= $result_Event['Description'];
								$Url			= $result_Event['Url'];
								$Title			= $result_Event['Title'];
						
								
								$results['Calendar_Id'][$i] = $Calendar_Id;
								$results['Date_Event'][$i] 	= $Date;
								$results['Time'][$i]		= $Time;
								$results['Description'][$i] = $Description;
								$results['Url'][$i] 		= $Url;
								$results['Title'][$i] 		= $Title;
								
								$i++;
							}
				
						
		
		$results['Status'] = "success";
		print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	if(isset($_POST['DeleteEvet'])){
		
				
		
			$results = array();

		//Create connection with Database
	
				$Calendar_Id = $_POST['Calendar_Id'];
			
				
				$DeleteEvent = new Calendar();
				$resultDelete = $DeleteEvent->Delete_Event($Calendar_Id);
		

				if($resultDelete == 1){
					$results['Status'] = "success";
					print json_encode($results);
				}else{
					$results['Status'] = "error";
					print json_encode($results);
				}
				
				

} // End function DeleteEvet
	
	






if(isset($_POST['SortByTitle'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
				
				$User_Id = $_POST['User_Id'];
				$Date = date("Y-m-d");
				
			

				
				
				/// Now I need to create the output with all events after current date 
			
				$query_Events = $DbConn->prepare("SELECT * FROM Calendar WHERE Date >= ? AND User_Id = ? ORDER BY Title DESC");
				$query_Events->bindParam(1,$Date);
				$query_Events->bindParam(2,$User_Id);
				$query_Events->execute();
					
						
					while($result_Event = $query_Events->fetch(PDO::FETCH_ASSOC)){
	
								
								$Calendar_Id	= $result_Event['Calendar_Id'];
								$Date			= $result_Event['Date'];
								$Time			= $result_Event['Time'];
								$Description	= $result_Event['Description'];
								$Url			= $result_Event['Url'];
								$Title			= $result_Event['Title'];
						
								
								$results['Calendar_Id'][$i] = $Calendar_Id;
								$results['Date_Event'][$i] 	= $Date;
								$results['Time'][$i]		= $Time;
								$results['Description'][$i] = $Description;
								$results['Url'][$i] 		= $Url;
								$results['Title'][$i] 		= $Title;
								
								$i++;
							}
				
						
		
		$results['Status'] = "success";
		print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	



if(isset($_POST['SortByDate'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
				
				$User_Id = $_POST['User_Id'];
				$Date = date("Y-m-d");
				
			

				
				
				/// Now I need to create the output with all events after current date 
			
				$query_Events = $DbConn->prepare("SELECT * FROM Calendar WHERE Date >= ? AND User_Id = ? ORDER BY Date ASC");
				$query_Events->bindParam(1,$Date);
				$query_Events->bindParam(2,$User_Id);
				$query_Events->execute();
					
						
					while($result_Event = $query_Events->fetch(PDO::FETCH_ASSOC)){
	
								
								$Calendar_Id	= $result_Event['Calendar_Id'];
								$Date			= $result_Event['Date'];
								$Time			= $result_Event['Time'];
								$Description	= $result_Event['Description'];
								$Url			= $result_Event['Url'];
								$Title			= $result_Event['Title'];
						
								
								$results['Calendar_Id'][$i] = $Calendar_Id;
								$results['Date_Event'][$i] 	= $Date;
								$results['Time'][$i]		= $Time;
								$results['Description'][$i] = $Description;
								$results['Url'][$i] 		= $Url;
								$results['Title'][$i] 		= $Title;
								
								$i++;
							}
				
						
		
		$results['Status'] = "success";
		print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	
	
	
	
	
	

if(isset($_POST['SortByTime'])){
		
				
		
			$results = array();

		//Create connection with Database
		
			$Db = new Connection();
			$DbConn = $Db->ConnectDB();
			
		try{
				
				$User_Id = $_POST['User_Id'];
				$Date = date("Y-m-d");
				
			

				
				
				/// Now I need to create the output with all events after current date 
			
				$query_Events = $DbConn->prepare("SELECT * FROM Calendar WHERE Date >= ? AND User_Id = ? ORDER BY Time ASC");
				$query_Events->bindParam(1,$Date);
				$query_Events->bindParam(2,$User_Id);
				$query_Events->execute();
					
						
					while($result_Event = $query_Events->fetch(PDO::FETCH_ASSOC)){
	
								
								$Calendar_Id	= $result_Event['Calendar_Id'];
								$Date			= $result_Event['Date'];
								$Time			= $result_Event['Time'];
								$Description	= $result_Event['Description'];
								$Url			= $result_Event['Url'];
								$Title			= $result_Event['Title'];
						
								
								$results['Calendar_Id'][$i] = $Calendar_Id;
								$results['Date_Event'][$i] 	= $Date;
								$results['Time'][$i]		= $Time;
								$results['Description'][$i] = $Description;
								$results['Url'][$i] 		= $Url;
								$results['Title'][$i] 		= $Title;
								
								$i++;
							}
				
						
		
		$results['Status'] = "success";
		print json_encode($results);
				 
		}catch (Exception $e) {
			
			$results = array();
			$results['Status'] = "error";
			print json_encode($results);
			
		
			
		}
	
			$DbConn = null;
		
		
	}
	

?>
