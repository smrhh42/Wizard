<?php
	/*
	 *	create a database connection, return the connection or null
	 *	Useage: 
	 *	require_once('Connection.php');
	 *	$conn = new Connection();
	 *	$conn = $conn->ConnectDB();
	 *	if( $conn !== null ){
	 *		do query: create,update,delete,read
	 *	}
	 *	Altered: Connor, 10.19.2014
	 */
	class Connection
	{
		private
		$host		=	"localhost",
		$db			=	"wizard",
		$userName 	=	"root",
		$password	= 	"";
		
		public function ConnectDB()
		{
			try {		
				$conn = new PDO("mysql:host=$this->host; dbname=$this->db", $this->userName, $this->password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				$conn = null;
				if( $e->getCode() === 2002 ){
					echo 'Cannot connect to database, please contact your server administrator.';
				}
			}
			return $conn;
		}
	}
?>