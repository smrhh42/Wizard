/// GLOBAL VARIABLES

var imgURL = "";



$(document).ready(function(e) {
    $('.progress').hide();
});



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
								 
								 alert('Wrong email and password, please try it again.');
							}
								 
								 
								
				 } // End success function 
					});
					e.preventDefault();
		
		
		
		} // This is the end of my if conditions. 
	
});



$('#BtnExpirationModal').click(function(){
	location.href ="Login.php";
});




$('#btnRequestPassword').click(function(){
	
	var EmailRequest = $('#EmailRequest').val();
	
	if(EmailRequest.length < 0 || EmailRequest == ""){
		alert("Introduce and email");
		$('#EmailRequest').focus();
	}else if(isValidEmailAddress(EmailRequest) == false){
		alert("Introduce a proper email");
		$('#EmailRequest').focus();
	}else{
		
		var dataString = 'EmailRequest='+EmailRequest+'&buttonRequestEmail=true';
			
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "assets/PHP/functionLogin.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  var Email_Requested = data.Email_Requested;
							 // var Phone_Number = data.Phone_Number;
							
							if(data.Status == 'success'){	
								
								//window.location = 'RequestPassword.php?emailRequested='+Email_Requested;
								
								 $('#boxMessageModal').html("");
								 $('#boxMessageModal').html('An email was sending to '+Email_Requested +'. <br>'+
								 							'Follow the directions to create a password');
								 $('#modalExpiration').click();
						
							 }else if(data.Status == 'Existing_User'){
								 
								 $('#boxMessageModal').html("");
								 $('#boxMessageModal').html('The email '+Email_Requested +'. <br>'+
								 							'Already exist on the database <br>'+
															'Click on Forgot Password? if you do not remember it');
								 $('#modalExpiration').click();
							
							} else if(data.Status == 'Error_Sending_Email'){
								 
								 $('#boxMessageModal').html("");
								 $('#boxMessageModal').html('Error sending email at: '+Email_Requested);
								 $('#modalExpiration').click();
							
							}
							
							
							else{
								 
								 $('#boxMessageModal').html("");
								 $('#boxMessageModal').html('You are not eligible on CIS dabase </br> - - - - - - </br>'+ 
															 'Please contact with Hailey King </br>email:hailey.king@temple.edu');
								 $('#modalExpiration').click();
							
							}
							
						
						 
								 
								
				 } // End success function 
					});
					e.preventDefault();
		
		
	} /////// End group if else conditions. 
	
}); // End btnRequestPassword function

		
		
		
		



		
		
		
		

$('#NewUserRegister').click(function(){
	
var pass1 = $('#password_Request').val();
var pass2 = $('#re_password_Request').val();
	

	
	$('#formNewUser').ajaxForm({
		beforeSend: function(){
		$('.progress').show();	
		},
		uploadProgress: function(even,position,total,percentComplete){
			$('.progress-bar').width(percentComplete+'%');
			$('.sr-only').html(percentComplete+'%');
		},
		success: function(data){
			// Convert String Json to readable Json format
				var obj = jQuery.parseJSON(data);
				
				if(obj.Status == 'success'){
					location.href = "Login.php";
					
				}else if(obj.Status == 'Duplicate'){
					
					alert('Already this email exist on the database. Click on Forgot Password? if you do not remember it');
					location.href = "Login.php";
				}else{
					alert('Error creating this new user. Please contact with Hailey King </br>email:hailey.king@temple.edu');
					location.href = "Login.php";
				}
		
			},
		complete: function(){
			
			}
		
	});
	$('.progress').hide();
	


}); 
	


	
	
	
	/*

$('#btnPassRequest').click(function(){
	
	var EmailRequest = $('#TempleEmailRequest').val();
	var PassRequest = $('#password_Request').val();
	var Re_passRequest = $('#re_password_Request').val();


	if(PassRequest.length < 0 || PassRequest == "" || Re_passRequest.length < 0 || Re_passRequest == ""){	
		alert("Passwords fields need to be fill");
		$('#password_Request').focus();
		
	}else if(PassRequest != Re_passRequest){
		alert("Password need to be the same");
		$('#password_Request').focus();
		
	}else if(EmailRequest.length < 0 || EmailRequest == ""){
		alert("Email field need to be fill");
		location.href ="Login.php";
		
	}else if(isValidEmailAddress(EmailRequest) == false){
		alert("It is not a  proper email");
		location.href ="Login.php";
	}else{
		
	

		
		
		
		
	} // end if else condition

	
});

*/


		
///////////////////////////////////////////////////////
// THIS FUNCTION IS TO VALIDATE EMAIL ///////
//////////////////////////////////////////////////////

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};




// This function is to get the path of the img

$('#file').change( function(event) {
var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#BoxUserImg").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    console.log(tmppath);
 
});




