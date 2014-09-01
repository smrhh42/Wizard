<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin: *");
require_once("../assets/common.php");

	$User_Id = $_GET['User_Id'];
	
	//Create connection with DB
	$DbConection = new Connection();
	$Conn = $DbConection->ConnectDB();
	
	$FindEvents = $Conn->prepare("SELECT * FROM Calendar WHERE User_Id = ?");
	$FindEvents->bindParam(1,$User_Id);
	$FindEvents->execute();
	
	
	
	$resultArray = array();
	$separator2 = ",";
	$i = 0;
	$numRows = $FindEvents->rowCount();

echo "[";

	while($result = $FindEvents->fetch(PDO::FETCH_ASSOC)){
					
			if(($numRows - 1) == $i){
				$separator2 ="";
				}		
				$date			=	strtotime($result['Date']) * 1000;
				$Time			=	$result['Time'];
				$title			=	$result['Title'];
				$description	=	$result['Description'];
				$url		    =	$result['Url'];
				
			
			echo '{"date":"'.$date. '","title":"'.$title. '","description":"'.$description. '","url":"'.$url. '","Time":"'.$Time. '"}';
			
			echo $separator2;
			$i++;
		}
		
echo "]";


$Conn = null;
?>