<?php

if(isset($_POST['updateStudentBtn'])){
	
		$nameFile   = $_FILES['file']['name'];
		$size 		= $_FILES['file']['size'];
		$type 		= $_FILES['file']['type'];
		$tmp_name	= $_FILES['file']['tmp_name'];
					
			$nameToSave = "Student.csv";
			
			if(!empty($size))
			   {
				 $location = '../db/files/Student/';			
				 $result = move_uploaded_file($tmp_name, $location.$nameToSave);
				 
				 if($result != 1){
					
					header("Location: ../UpdateDb.php?UpdateError");
					
				}else{
					session_start();
					$_SESSION['barProgress'] = true;
					header("Location: ../UpdateDb.php?UploadStudent=true");
					}
				
			   }
			  
			
} // End function updateImageButton




