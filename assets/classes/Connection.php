<?php

	class Connection
	{
		
		
		
		private
		$host		=	"localhost",
		$db			=	"juanhf_Wizard",
		$userName 	=	"juanhf",
		$password	= 	"Jhf#5479";
		
		
		public function ConnectDB()
		{
					
			return new PDO("mysql:host=$this->host; dbname=$this->db", $this->userName, $this->password);	
			print_r($stmt->errorInfo());

		}
		
	}	