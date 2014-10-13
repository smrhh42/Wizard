<?php

/*

Table "User"

User_Id	
Email	
Password
Image
User_Type_Id
Student_Id


*/

require_once('Connection.php');


class User
{
	
	private $User;
	
	public
	$User_Id,	
	$Email,	
	$Password,
	$Image,
	$User_Type_Id,
	$Student_Id;
	
	
		public function __construct()
		{
			$this->User = new Connection();
			$this->User = $this->User->ConnectDB();
	
		}
		
	
		
	public function Insert_User($Email,$Password,$Image,$User_Type_Id,$Student_Id)
		{
			$Password = md5($Password);
			$User_Type_Id = 1;
			
			$query_checkEmail = $this->User->prepare("SELECT * FROM User WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 2;  // 2 because it is duplicate, it user already exit on the database
				
			}else if($resultCheckMail != 1){
				
				
				$query_Insert = $this->User->prepare("INSERT INTO User (Email,Password,Image,User_Type_Id,Student_Id ) VALUES(?,?,?,?,?)");
				$query_Insert->bindParam(1, $Email);
				$query_Insert->bindParam(2, $Password);
				$query_Insert->bindParam(3, $Image);
				$query_Insert->bindParam(4, $User_Type_Id);
				$query_Insert->bindParam(5, $Student_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because error inserting new entity
				}else{
					return 1;  // 1 is because everything work properly.
				}
	
				
				
			} // End else condition
		} // End function insert User
		
		
		
	
		
		
		public function Update_User($User_Id,$Email,$Image,$User_Type_Id,$Student_Id)
				{
			
			$query_Update = $this->User->prepare("UPDATE User SET Email=?,Image=?,User_Type_Id=?,Student_Id=? WHERE User_Id = ?");
				
				$query_Update->bindParam(1, $Email);
				$query_Update->bindParam(2, $Image);
				$query_Update->bindParam(3, $User_Type_Id);
				$query_Update->bindParam(4, $Student_Id);
				$query_Update->bindParam(5, $User_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0 is because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
	 
	 
	
	 
			function get_User_Info_by_Email($Email)
			{
				
				$query_getUser = $this->User->prepare("SELECT * FROM User WHERE Email = ?");
				$query_getUser->bindParam(1, $Email);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
			
				$this->User_Id 		= $result['User_Id'];
				$this->Email		= $result['Email'];
				$this->Password		= $result['Password'];
				$this->Image		= $result['Image'];
				$this->User_Type_Id	= $result['User_Type_Id'];
				$this->Student_Id	= $result['Student_Id'];
			
			
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
	
			function get_User_Info_by_ID($User_Id)
			{
				
				
				
				$query_getUser = $this->User->prepare("SELECT * FROM User WHERE User_Id = ?");
				$query_getUser->bindParam(1, $User_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				
				$this->User_Id 		= $result['User_Id'];
				$this->Email		= $result['Email'];
				$this->Password		= $result['Password'];
				$this->Image		= $result['Image'];
				$this->User_Type_Id	= $result['User_Type_Id'];
				$this->Student_Id	= $result['Student_Id'];
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			
			
	
		public function Login($Email,$Password)
		{
			
			   $Password = md5($Password);
			
				$query_Login = $this->User->prepare("SELECT * FROM User WHERE Email = ? AND Password = ?");
				$query_Login->bindParam(1, $Email);
				$query_Login->bindParam(2, $Password);
				$query_Login->execute();
				
					if($query_Login->rowCount() == 1)
						{
								session_start();
								if (!isset($_SESSION['Email'])) {
									
									$_SESSION['Time'] = time();
									$_SESSION['Email'] = $Email;
									
								} else if (time() - $_SESSION['Time'] > 1800) {
									// session started more than 30 minutes ago
									session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
									$_SESSION['Time'] = time();  // update creation time
									$_SESSION['Email'] = $Email;
								}
							
							return 1;  // return 1 because it is true
							
						}else
							{
							return 0;  // return 1 because it is false
								
							}
	
		
		} // this is the end of my Login($Email,$Password) funcoon
		
		
		
		
		function Delete_User($User_Id)
		{
			$query_Delete = $this->User->prepare("DELETE QUICK FROM User WHERE User_Id = ? ");
			$query_Delete->bindParam(1, $User_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
	public function sendEmail($Email,$Student_Id){
			
	
		$results = array();  //This will hold the info to display later with Json
		$Url_Link = "http://web-huertas.com/work/programs/Wizard_Juan/RequestPassword.php?Email_Request=".$Email."&StudentId=".$Student_Id;
	
			try{
				 
							 $to = $Email;
							 $subject = "Wizard Password Request";
							 $headersEmail = 'From: Wizard@temple.edu';
							 $body = wordwrap("Please click on the following link to create a password:
											   $Url_Link");
												
							if( mail($to, $subject, $body, $headersEmail)){
								return 1;
							}else{
								return 0;
								}
							
			
				
			
				
			}catch(PDOExecption $e) { 
			
					return 0;
			} 	
				
			
		
			
		} // End function
		
		
		
		
} // End class User







//$InsertUser = new User();
//$InsertUser->Insert_User('tue89164@gmail.com','Jhf#5479',"",'1',1345);


//$UpdateUser = new User();
//$UpdateUser->Update_User(1,'tu@gmail.com','ju333an.jpg',1,1345);


//$DeleteUser = new User();
//$DeleteUser ->Delete_User(2,'tu@gmail.com','ju333an.jpg',1,1345);

?>