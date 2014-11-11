// JavaScript Document



//GLOBAL VARIABLES

var NumRows;

/// This variable scontain the info of the users
	var number_rows;
	
	var Student_Id;	
	var Name_First;
	var	Name_Last;
	var	Tu_Id;
	var	Expected_Graduation_Date;
	var	Email_Type_Address;
	var	Gender;
	var	Address_Street_Line1;
	var Address_City;
	var	Address_Zip;
	var	Phone_Number;
	var	Hours_Attempted_UG;
	var	GPA_Hours_UG;
	var	Grade_Points_UG;
	var	GPA_UG;
	var	Overall_passed_UG;
	var	Transfer_Hours_UG;
	var	Cumulative_Credits_UG;
	var	Cumulative_Quality_Points_UG;
	var	Hours_Attempted_G;
	var	Hours_Passed_G;
	var	GPA_Hours_G;
	var	Grade_Points_G;
	var	GPA_G;
	var	Overral_Hours_Passed_G;
	var	Transfer_Hours_G;
	var	Cumulative_Credits_G;
	var	Cumulative_Quality_Points_G;
	var	REgistration_Status_Date;
	var	Hours_Registerd;
	var	College_1_Description;
	var	Program_1;
								


$(document).ready(function(e) {

		displayTempleStudents();
		
});






	
var displayTempleStudents = function(){

		displayLoginModal();
		var dataString = 'DisplayStudents=true';
				
			//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "assets/php/functionForm.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
								//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
							
							if(data.Status == 'success'){
						
								
								Student_Id 				= data.Student_Id;
								Name_First 				= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 		= data.Email_Type_Address;
								Gender 						= data.Gender;
								Address_Street_Line1 		= data.Address_Street_Line1;
								Address_City 				= data.Address_City;
								Address_Zip 				= data.Address_Zip;
								Phone_Number 				= data.Phone_Number;
								Hours_Attempted_UG 			= data.Hours_Attempted_UG;
								GPA_Hours_UG 				= data.GPA_Hours_UG;
								Grade_Points_UG 			= data.Grade_Points_UG;
								GPA_UG 						= data.GPA_UG;
								Overall_passed_UG 			= data.Overall_passed_UG;
								Transfer_Hours_UG 			= data.Transfer_Hours_UG;
								Cumulative_Credits_UG 		= data.Cumulative_Credits_UG;
								Cumulative_Quality_Points_UG 	= data.Cumulative_Quality_Points_UG;
								Hours_Attempted_G 				= data.Hours_Attempted_G;
								Hours_Passed_G 					= data.Hours_Passed_G;
								GPA_Hours_G 					= data.GPA_Hours_G;
								Grade_Points_G 					= data.Grade_Points_G;
								GPA_G 							= data.GPA_G;
								Overral_Hours_Passed_G 			= data.Overral_Hours_Passed_G;
								Transfer_Hours_G 				= data.Transfer_Hours_G;
								Cumulative_Credits_G 			= data.Cumulative_Credits_G;
								Cumulative_Quality_Points_G 	= data.Cumulative_Quality_Points_G;
								Registration_Status_Date 		= data.Registration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 		= data.College_1_Description;
								Program_1 						= data.Program_1;
												
								
						$('#bodyTableFull').html("");
						
							  for (var i in Student_Id) {
								  	
								
							 $('#bodyTableFull').append(
								 
								 
								 
								 	 '<div class="lineHeader2">'+
                              
											'<div class="blockName">'+Name_First[i]+'</div>'+
											'<div class="hidden-phone blockEmail">\'' + Email_Type_Address[i] + '\'</div>'+
											'<div class="tuidBlook">'+Tu_Id[i]+'</div>'+
											'<div class="Action_Blook">'+
													'<button class="btn btn-primary btn-xs btnSeparation" data-toggle="modal">'+
                                                    '<i class="fa fa-folder-open"></i>'+
                                                '</button>'+
                                                '<button class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" >'+
                                            		'<i class="fa fa-question-circle"></i>'+
                                            	'</button>'+
											'</div>'+
									   '</div>'
								 
								 			
												
								   );
							 } // End for loop
	
					  }else{
						 	//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						  
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error displaying Forms, please contact with the administrator. Dr. Shi");
							  //Execute the modal box
							 $('#modalExpiration').click();
						  
						  }
						 
				  },
				  error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 //////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						alert('custom message. Error: ' + errorThrown);
					} else {
						//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
			  
		
		
		
	} /// End function display Forms
	
	
	
//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').show();
}

var hideLoginModal = function(){
	$('#loading').hide();
}





