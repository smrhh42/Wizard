


$('#btnLogin').click(function(){
	//alert("This button work");
	
	var TempleEmail = $('#TempleEmail').val();
	var password = $('#password').val();
	
	
	if(TempleEmail.length == null || TempleEmail.length == 0){
		alert("Email field are required");	
		$('#templeUser').focus()
	}else if(password.length == null || password.length == 0){
		alert("Password field are required");
		$('#password').focus()
	}else{
		
		
		var dataString = 'TempleEmail='+TempleEmail+'&password='+password+'&buttonLogin=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "assets/PHP/functionLogin.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
							
							//	alert('You are logged');
							location.href = "index.php";
							
							 }else{
								 
								alert("ERROR TO LOGIN");
							}
								 
								 
								
				 } // End success function 
					});
					return false;
		
		
		
		
		
		
		} // This is the end of my if conditions. 
	
	
});




		
	
	