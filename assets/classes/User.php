<?php

/*

Table "User"

User_Id		
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
			
			$query_checkEmail = $this->User->prepare("SELECT * FROM Student WHERE Email_Type_Address = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 0;  // 0 is false
				
			}else if($resultCheckMail != 1){
				
				
				$query_Insert = $this->User->prepare("INSERT INTO User (First_Name,Last_Name,Email,Temple_id,Password,Image,User_Type_Id ) VALUES(?,?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $First_Name);
				$query_Insert->bindParam(2, $Last_Name);
				$query_Insert->bindParam(3, $Email);
				$query_Insert->bindParam(4, $Temple_id);
				$query_Insert->bindParam(5, $Password);
				$query_Insert->bindParam(6, $Image);
				$query_Insert->bindParam(7, $User_Type_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 2;
				}else{
					return 1;  // 1 is because everything work properly.
				}
	
				
				
			} // End else condition
		} // End function insert User
		
		
		
		
		
		
		
		public function Update_User($User_Id,$First_Name,$Last_Name,$Email,$Temple_id,$User_Type_Id)
				{
			
			$query_Update = $this->User->prepare("UPDATE User SET First_Name=?,Last_Name=?,Email=?,Temple_id=?,User_Type_Id=? WHERE User_Id = ?");
				
				$query_Update->bindParam(1, $First_Name);
				$query_Update->bindParam(2, $Last_Name);
				$query_Update->bindParam(3, $Email);
				$query_Update->bindParam(4, $Temple_id);
				$query_Update->bindParam(5, $User_Type_Id);
				$query_Update->bindParam(6, $User_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 'NoRows';
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
				$this->First_Name	= $result['First_Name'];
				$this->Last_Name	= $result['Last_Name'];
				$this->Email		= $result['Email'];
				$this->Temple_id	= $result['Temple_id'];
				$this->Image		= $result['Image'];
				$this->User_Type_Id	= $result['User_Type_Id'];
			
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
	
			function get_User_Info_by_ID($User_Id)
			{
				
				
				
				$query_getUser = $this->User->prepare("SELECT * FROM User WHERE User_Id = ?");
				$query_getUser->bindParam(1, $User_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				
				$this->User_Id 		= $result['User_Id'];
				$this->First_Name	= $result['First_Name'];
				$this->Last_Name	= $result['Last_Name'];
				$this->Email		= $result['Email'];
				$this->Temple_id	= $result['Temple_id'];
				$this->Image		= $result['Image'];
				$this->User_Type_Id	= $result['User_Type_Id'];
				
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
							$_SESSION['Email'] = $Email;
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
}