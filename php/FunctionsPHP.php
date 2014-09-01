<?php
require_once("../assets/common.php");

if(isset($_POST['buttonLogin'])){
	
	$Tu_Id = $_POST['emailLogin'];
	$Name_First = $_POST['passLogin'];
	
	$LoginStudent = new Students();
	$result = $LoginStudent->loginStudent($Tu_Id, $Name_First);
    
	if($result == 1){
		
		header("Location: ../index.php");
		
	}else{
		?>
        	<script>
				alert("Wrong Email and Password, try again.");
				location.href ="../index.php";
			</script>
        
        <?php
		}
	
}



?>