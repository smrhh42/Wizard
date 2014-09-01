	// This function is to check the email
	
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
	
// This function is to check if is number
function isNumber(n) {
 	return !isNaN(parseFloat(n)) && isFinite(n);
}
				


$("#buttonRegister").click(function(){
	
	
	var name   	 	= $("#name").val(); 
	var last		= $("#last").val(); 
	var email		= $("#email").val();
	var Temple_id	= $("#Temple_id").val();
	var pass		= $("#pass").val();
	var re_pass		= $("#re_pass").val();
	
	
	
	
	
	if(name == ""){
		
		alert("Name are required");
		$("#name").focus();
		 	
	}else if(last == ""){
		
		alert("Last name are required");
		$("#last").focus();
		
	}else if(email == ""){
		alert("Email are required");
		$("#email").focus();
		
	}else if(!isValidEmailAddress(email)){
		
		alert("Introduce a valid email");
		$("#email").focus();
		
	}else if(Temple_id == ""){
		
		alert("Temple id are required");
		$("#cellphone").focus();
		
	}else if(pass == ""){
			
		alert("Password are required");
		$("#pass").focus();
		
	}else if(re_pass == ""){
		alert("Re-Password are required");
		$("#re_pass").focus();
		
	}else if(pass != re_pass){
		alert("Password must  be the same");
		$("#pass").focus();
		
	}else if(pass.length < 6){
		alert("Minimum password 6 characters");
		$("#pass").focus();
		
	}else{
		
		 /* At this point is to insert the user on the database */
		
		
				var InsertUser = true;	
				
				var data = document.getElementById("videoCanvas").toDataURL();
				$.post("../Wizard/php/FunctionsUser.php", {ImageData : data, name: name, last:last, last:last,
												  email:email, Temple_id:Temple_id, pass: pass, email:email,InsertUser:InsertUser
												  });
				
				
									alert("User Inserted");
									$("#name").val(""); 
									$("#last").val(""); 
									$("#email").val("");
									$("#Temple_id").val("");
									$("#pass").val("");
									$("#re_pass").val("");
			 
				document.getElementById("videoCanvas").getContext('2d').clearRect(0, 0 , 400 , 400 );	
		
		
		
		} // End else condition
	
	
});

	


	
	
