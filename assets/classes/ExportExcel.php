<?php
ini_set('memory_limit', '512M');

//This is important to detect the lines of the csv document
ini_set('auto_detect_line_endings', true);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

require_once(dirname(__FILE__)).'/../core/init.php';

class ExportExcel{


    private $_db;
	
		public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
		

	
	public function UpdateDatabase($StudentFile){
		
		$file = '../csv/'.$StudentFile;
		$lineArray = array();
		$row;
		$rowCount = 0;
		
		//// INITIALIZE THE CLASS Students to use later
		$InsertStudent = new Students();
		
				  if (($handle = fopen($file, 'r')) !== FALSE) {
						while (($lineArray = fgetcsv($handle)) !== FALSE) {
			
							if($rowCount != 0){
								$ResultInsert = $InsertStudent->Insert_Students($lineArray);
							}
							/// After have the line it is necessary to insert on the database;
							
							$rowCount++;
						}
						
						$InsertStudent  = null;
						fclose($handle);
						return 1; // Sucessfully
						
				  }else{
					  return 0; //Error opening file
					  }
				  
				
			} // End updateDatabase

		
} /// End classes







?>
			
	
	