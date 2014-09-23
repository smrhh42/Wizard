<?php

/*

Table "User"


User_Id	
First_Name
Last_Name
Email	
Temple_id	
Password
Image
User_Type_Id

*/

require_once('Connection.php');


class User
{
	
	private $User;
	
	public
	$User_Id,	
	$First_Name,
	$Last_Name,
	$Email,
	$Temple_id,
	$Image,
	$Password;
	
	
		public function __construct()
		{
			$this->User = new Connection();
			$this->User = $this->User->ConnectDB();
	
		}
		
	
	
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
							$_SESSION['Email'] = $Email;
							return 1;  // return 1 because it is true
							
						}else
							{
							return 0;  // return 1 because it is false
								
							}
	
		
		} // this is the end of my Login($Email,$Password) funcoon
		
		
		
		
	
	
	
} // End of my Users Class
