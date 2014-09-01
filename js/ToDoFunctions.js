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
								

/*
openBoxInfoStudent('+Student_Id+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\',\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\',
			\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\',
			\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\',
			\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\',
			\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\',
			\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\',
	\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\',\''+Program_1[i]+'\')


*/
// This variables is to control the search input box

var nameSearchBox = true;
var LastSearchBox = true;
var TempleIdSearchBox = true;
var emailSearchBox = true;


$(document).ready(function(e) {

		var dataString = 'DisplayStudents=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
});




$('#searchByName').click(function(){
	
		$('#searchByNameInput').css('display','none');
		$('#searchByNameBtn').css('display','none');
		
		$('#searchByLastInput').css('display','none');
		$('#searchByLastBtn').css('display','none');
		
		$('#searchByTempleIdInput').css('display','none');
		$('#searchByTempleIdBtn').css('display','none');
		
		$('#searchByEmailInput').css('display','none');
		$('#searchByEmailBtn').css('display','none');
		
	if(nameSearchBox == true){
	
		$('#searchInput').css('height','50px');
		
		setTimeout(function(){
			document.getElementById('searchByNameInput').style.display = "block";
			document.getElementById('searchByNameBtn').style.display = "block";
			
			},1000);
		
		nameSearchBox = false;
	}else{
		$('#searchByNameInput').css('display','none');
		$('#searchByNameBtn').css('display','none');
		
		$('#searchInput').css('height','0px');
		nameSearchBox = true;
	}
	
	
});


$('#searchByLast').click(function(){
		
		$('#searchByNameInput').css('display','none');
		$('#searchByNameBtn').css('display','none');
		
		$('#searchByLastInput').css('display','none');
		$('#searchByLastBtn').css('display','none');
		
		$('#searchByTempleIdInput').css('display','none');
		$('#searchByTempleIdBtn').css('display','none');
		
		$('#searchByEmailInput').css('display','none');
		$('#searchByEmailBtn').css('display','none');
	if(LastSearchBox == true){
		
		$('#searchInput').css('height','50px');
		
		setTimeout(function(){
			document.getElementById('searchByLastInput').style.display = "block";
			document.getElementById('searchByLastBtn').style.display = "block";
			
			},1000);
		
		LastSearchBox = false;
	}else{
		$('#searchByLastInput').css('display','none');
		$('#searchByLastBtn').css('display','none');
		
		$('#searchInput').css('height','0px');
		LastSearchBox = true;
	}
	
	
});

$('#searchByTempleID').click(function(){
	
		$('#searchByNameInput').css('display','none');
		$('#searchByNameBtn').css('display','none');
		
		$('#searchByLastInput').css('display','none');
		$('#searchByLastBtn').css('display','none');
		
		$('#searchByTempleIdInput').css('display','none');
		$('#searchByTempleIdBtn').css('display','none');
		
		$('#searchByEmailInput').css('display','none');
		$('#searchByEmailBtn').css('display','none');
	
	if(TempleIdSearchBox == true){
		
	
		$('#searchInput').css('height','50px');
		
		setTimeout(function(){
			document.getElementById('searchByTempleIdInput').style.display = "block";
			document.getElementById('searchByTempleIdBtn').style.display = "block";
			
			},1000);
		
		TempleIdSearchBox = false;
	}else{
		$('#searchByTempleIdInput').css('display','none');
		$('#searchByTempleIdBtn').css('display','none');
		
		$('#searchInput').css('height','0px');
		TempleIdSearchBox = true;
	}
	
	
});

$('#searchByEmail').click(function(){
			
		$('#searchByNameInput').css('display','none');
		$('#searchByNameBtn').css('display','none');
		
		$('#searchByLastInput').css('display','none');
		$('#searchByLastBtn').css('display','none');
		
		$('#searchByTempleIdInput').css('display','none');
		$('#searchByTempleIdBtn').css('display','none');
		
		$('#searchByEmailInput').css('display','none');
		$('#searchByEmailBtn').css('display','none');
		
	if(emailSearchBox == true){
		
		$('#searchInput').css('height','50px');
		
		setTimeout(function(){
			document.getElementById('searchByEmailInput').style.display = "block";
			document.getElementById('searchByEmailBtn').style.display = "block";
			
			},1000);
		
		emailSearchBox = false;
	}else{
		$('#searchByEmailInput').css('display','none');
		$('#searchByEmailBtn').css('display','none');
		
		$('#searchInput').css('height','0px');
		emailSearchBox = true;
	}
	
	
});



$('#NameBtnLi').click(function(){
	
	var dataString = 'DisplayStudentsByName=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});




$('#LastBtnLi').click(function(){
	
	var dataString = 'DisplayStudentsByLast=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
	
	
$('#TempleIdBtnLi').click(function(){
	
	var dataString = 'DisplayStudentsByTempleId=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
	
	
	
	
	
	
	
	
$('#searchByNameBtn').click(function(){
	
	
	var nameSearch = $('#searchByNameInput').val();
	var dataString = 'nameSearch=' + nameSearch +'&searchByNameBtn=true';
	
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
	
		
$('#searchByLastBtn').click(function(){
	
	
	var LastSearch = $('#searchByLastInput').val();
	var dataString = 'LastSearch=' + LastSearch +'&searchByLastBtn=true';
	
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
													'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
	
	
	
	
	
	$('#searchByTempleIdBtn').click(function(){
	
	
	var TempleId = $('#searchByTempleIdInput').val();
	var dataString = 'TempleId=' + TempleId +'&searchByTempleIdBtn=true';
	
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="javascript:openMail(\'' + Email_Type_Address[i] + '\');" id="mailIdImg"><img src="css/images/icons-png/mail-black.png" alt="mailIcon" title="Mail" /></a>'+
												'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
												'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
	
	
	
	
$('#searchByEmailBtn').click(function(){
	
	
	var Email = $('#searchByEmailInput').val();
	var dataString = 'Email=' + Email +'&searchByEmailBtn=true';
	
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								number_rows = data.number_rows;
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 					= data.Name_Last;
								Tu_Id 						= data.Tu_Id;
								Expected_Graduation_Date 	= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
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
								REgistration_Status_Date 		= data.REgistration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 			= data.College_1_Description;
								Program_1 						= data.Program_1;
								
								
								
								
								
								
								
								
								
								
						$('#containerListStudent').html("");
						
							  for (var i in Student_Id) {
								  	
								
									
								 $('#containerListStudent').append(
								  
									 '<div class="lineStudent">'+
                                			'<div class="NameDivStudent"><p>'+Name_First[i]+'</p></div>'+
                                			'<div class="LastDivStudent"><p>'+Name_Last[i]+'</p></div>'+
                                			'<div class="TempleIdDivStudent"><p>'+Tu_Id[i]+'</p></div>'+
											'<div class="ActionDivStudent">'+
												'<a href="'+
		'javascript:openBoxInfoStudent('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\','+
		'\''+Tu_Id[i]+'\',\''+Expected_Graduation_Date[i]+'\','+
		'\''+Email_Type_Address[i]+'\',\''+Gender[i]+'\',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Phone_Number[i]+'\','+
		'\''+Hours_Attempted_UG[i]+'\',\''+GPA_Hours_UG[i]+'\',\''+Grade_Points_UG[i]+'\',\''+GPA_UG[i]+'\','+
		'\''+Overall_passed_UG[i]+'\',\''+Transfer_Hours_UG[i]+'\',\''+Cumulative_Credits_UG[i]+'\',\''+Cumulative_Quality_Points_UG[i]+'\','+
		'\''+Hours_Attempted_G[i]+'\',\''+Hours_Passed_G[i]+'\',\''+GPA_Hours_G[i]+'\',\''+Grade_Points_G[i]+'\','+
		'\''+GPA_G[i]+'\',\''+Overral_Hours_Passed_G[i]+'\',\''+Transfer_Hours_G[i]+'\',\''+Cumulative_Credits_G[i]+'\','+
		'\''+Cumulative_Quality_Points_G[i]+'\',\''+REgistration_Status_Date[i]+'\',\''+Hours_Registerd[i]+'\',\''+College_1_Description[i]+'\','+
		'\''+Program_1[i]+'\')'+
		'" id="viewIdImg"><img src="css/images/icons-png/eye-black.png" alt="viewIcon" title="View" /></a>'+
						'<a href="javascript:openObservation('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\')" id="msgIdImg"><img src="css/images/icons-png/comment-black.png" alt="MsgIcon" title="Message" /></a>'+
											'</div>'+
                            		'</div>'
													
								   );
							 } // End for loop
					 }else{
						alert("Error displaying User");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	
	});
	
	
function openMail(Email){
	$('#modalEmail').show();
	$('#emailInput').val(Email);
}

$('#closeButtonModal').click(function(){
	$('#modalEmail').hide();
});



$('#SendEmailBtn').click(function(){
	
	var emailInput 		=	$('#emailInput').val();
	var SubjectInput 	=	$('#SubjectInput').val();
	var Body 			=	$('#sendBody').val();
	var emailWhoSend 	=	$('#emailWhoSend').val();

	var dataString = 'emailInput=' + emailInput + '&SubjectInput=' + SubjectInput +'&Body=' + Body +'&emailWhoSend=' + emailWhoSend  +'&sendEmail=true';
		
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  if(data.Status == true){
								  	alert("Email sending successfully");
							   }else{
									alert("Error sending email");
								}
				 			} // End success function 
					   });
					return false;
});

	
	

function openBoxInfoStudent(Student_Id,Name_First,Name_Last,Tu_Id,Expected_Graduation_Date,Email_Type_Address,Gender,Address_City,Address_Street_Line1,
							Address_Zip,Phone_Number,Hours_Attempted_UG,GPA_Hours_UG,Grade_Points_UG,GPA_UG,Overall_passed_UG,Transfer_Hours_UG,Cumulative_Credits_UG,Cumulative_Quality_Points_UG,Hours_Attempted_G,Hours_Passed_G,GPA_Hours_G,Grade_Points_G,GPA_G,Overral_Hours_Passed_G,Transfer_Hours_G,Cumulative_Credits_G,Cumulative_Quality_Points_G,REgistration_Status_Date,Hours_Registerd,College_1_Description,Program_1){
								
	$('#modalInfoStudent').show();
	


	$('#nameStudentInfo').html(Name_First);
	$('#lastStudentInfo').html(Name_Last);
	$('#templeIdStudentInfo').html(Tu_Id);
	
	$('#GenderStudentInfo').html(Gender);
	$('#EmailStudentInfo').html(Email_Type_Address);
	$('#PhoneStudentInfo').html(Phone_Number);
	
	$('#cityStudentInfo').html(Address_City);
	$('#AddressStudentInfo').html(Address_Street_Line1);
	$('#ZipStudentInfo').html(Address_Zip);
	
	$('#Hours_Attempted_UG').html(Hours_Attempted_UG);
	$('#GPA_Hours_UG').html(GPA_Hours_UG);
	$('#Grade_Points_UG').html(Grade_Points_UG);
	
	$('#GPA_UG').html(GPA_UG);
	$('#Overall_passed_UG').html(Overall_passed_UG);
	$('#Transfer_Hours_UG').html(Transfer_Hours_UG);
	
	$('#Cumulative_Credits_UG').html(Cumulative_Credits_UG);
	$('#Cumulative_Quality_Points_UG').html(Cumulative_Quality_Points_UG);
	
	
	
	
	$('#Hours_Attempted_G').html(Hours_Attempted_G);
	$('#Hours_Passed_G').html(Hours_Passed_G);
	$('#GPA_Hours_G').html(GPA_Hours_G);
	
	$('#Grade_Points_G').html(Grade_Points_G);
	$('#GPA_G').html(GPA_G);
	$('#Overral_Hours_Passed_G').html(Overral_Hours_Passed_G);
	
	$('#Transfer_Hours_G').html(Transfer_Hours_G);
	$('#Cumulative_Credits_G').html(Cumulative_Credits_G);
	$('#Cumulative_Quality_Points_G').html(Cumulative_Quality_Points_G);
	
	
	
	
	
	$('#Expected_Graduation_Date').html(Expected_Graduation_Date);
	$('#REgistration_Status_Date').html(REgistration_Status_Date);
	
	$('#Hours_Registerd').html(Hours_Registerd);
	$('#College_1_Description').html(College_1_Description);
	$('#Program_1').html(Program_1);
	
	
	

	
}  // end openBoxInfoStudent -->





$('#closeButtonModalStudent').click(function(){
	$('#modalInfoStudent').hide();
});
	


var openObservation = function(Student_Id,Name_First,Name_Last){
	$('#modalManageObservation').show();
	$('#idUserToObservation').val(Student_Id);
	displayObservation(Student_Id);
	$('#labelUSerObservation').html(Name_First +" "+Name_Last);
	
}
	



$('#closeButtonModalObservation').click(function(){
	$('#modalManageObservation').hide();
});


$('#btnObservation').click(function(){
	
	var titleObservation 		= $('#titleObservation').val();
	var DescriptionObservation 	= $('#DescriptionObservation').val();
	var dateObservation 		= $('#dateObservation').val();
	var timeObservation 		= $('#timeObservation').val();
	var idUserToObservation		= $('#idUserToObservation').val();
	

	if(titleObservation == null || titleObservation == ""){
		alert("Title is required");
	}else if(DescriptionObservation == null || DescriptionObservation == ""){
		alert("Plese introduce an observation before send it");
	}
	else if(dateObservation == null || dateObservation == ""){
		alert("Observation date is required");
	}else if(timeObservation == null || timeObservation == ""){
		alert("Observation time is required");
		}else {
			
			var dataString = 'titleObservation=' + titleObservation + '&DescriptionObservation=' + DescriptionObservation +'&dateObservation=' + dateObservation +'&timeObservation=' + timeObservation +'&idUserToObservation=' + idUserToObservation  +'&observationStudent=true';
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  if(data.Status == 'success'){
							
									displayObservation(idUserToObservation);
									
							   }else{
								   
									alert("Error adding observation");
								}
				 			} // End success function 
					   });
					return false;

		} // End else condition
	
	});
	
	
	
	
	
	var displayObservation = function(Student_Id){
		
			
			var dataString = 'Student_Id=' + Student_Id + '&DisplayNotes=true';
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  if(data.Status == 'success'){
								  
								 
								  $('#containerObervation').html("");	
								  var Observations_Id = data.Observations_Id;
								  var Title = data.Title;
								  var Observations_Description = data.Observations_Description;
								  var Observation_Date = data.Observation_Date;
								  var Observation_Time = data.Observation_Time;
								  var Student_Id = data.Student_Id;
								  var number_rows = data.number_rows;
							
				
				
								
									
		 						 for (var i in Observations_Id) {
									 
									  $('#containerObervation').append(
								  
								  	'<div class="lineContainerObservation">'+
										'<div class="TitleDiv">'+Title[i]+'</div>'+
										'<div class="DateDiv">'+Observation_Date[i]+'</div>'+
										'<div class="TimeDiv">'+Observation_Time[i]+'</div>'+
										'<div class="ActionDiv">'+
										 /*	'<a href=""><img src="css/images/icons-png/edit-black.png" alt="editIcon" title="Edit"></a>'+ */
											'<a href="javascript:DisplayNote(\''+Observations_Description[i]+'\')"><img src="css/images/icons-png/eye-black.png" alt="ViewIcon" title="View"></a>'+
										'</div>'+
									'</div>'
								  	
									
													
								  		 );
									 } // End for loop
								
								
									
							   }else{
								   
									alert("Error displaying observation");
								}
				 			} // End success function 
					   });
					return false;
		
		
		
	
		}
		
		
		
var DisplayNote = function(Observations_Description){
	$('#NoteToDisplay').html("");
	$('#NoteToDisplay').html(Observations_Description);
	
	
}




var openModalToDo = function(User_ID){
	
	$('#User_Id_ToDo').val(User_ID);
	$('#btnToDoEdit').hide();
	$('#btnToDo').show();
	$('#modalToDo').show();
}

$('#closeButtonToDo').click(function(){
	$('#btnToDoEdit').hide();
	$('#btnToDo').show();
	
	$('#modalToDo').hide();
});

$('#bntToDoAdd').click(function(){
	
	var User_Id = $('#User_Id_ToDo').val();
	var Description = $('#ToDoDescription').val();
	var DateToDo = $('#dateToDo').val();
	var Urgent;
	
	if($("#urgentToDo").is(':checked')){
		Urgent = 1;	
	}else{
		Urgent = 0;	
		}
	
	
	
	
		
			var dataString = 'User_Id=' + User_Id + '&Description=' + Description + '&DateToDo=' + DateToDo +'&Urgent=' + Urgent +'&AddToDoList=true';
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  if(data.Status == 'success'){
								  
								displayToDoEvents(User_Id);
								$('#User_Id_ToDo').val("");
								$('#ToDoDescription').val("");
								$('#dateToDo').val("");
								$('#urgentToDo').prop('checked', false);
								$('#modalToDo').hide("");
							
									
							   }else{
								   
									alert("Error adding To Do Events");
								}
				 			} // End success function 
					   });
					return false;
	
	
	
	
});



var displayToDoEvents = function(User_Id){
	
	
	
	
	var dataString = 'User_Id=' + User_Id + '&DisplayToDoNotes=true';
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  if(data.Status == 'success'){
								   
								 $('#containerToDoList').html("");	
								  
								  var ToDoList_Id 		= data.ToDoList_Id;
								  var ToDo_Description 	= data.ToDo_Description;
								  var ToDo_Date 		= data.ToDo_Date;
								  var ToDo_Urgent		= data.ToDo_Urgent;
								  var User_Id 			= data.User_Id;
								  
								 var image;
								  
								  
								  for (var i in ToDoList_Id) {
									  
									  if(ToDo_Urgent[i] ==1){
										  image= 'check.png';
									   }else{
										   image= 'uncheck.png';
										   }
									  
									  
									 
									  $('#containerToDoList').append(
								  
										'<div class="lineToDoListContainer">'+
										'<div class="DescdivToDo">'+ToDo_Description[i]+'</div>'+
										'<div class="DatedivToDo">'+dateToDisplay(ToDo_Date[i])+'</div>'+
										'<div class="UrgentdivToDo"><img src="images/'+image+'" alt="check Icon" id="checkIcon" /></div>'+	
										'<div class="ActiondivToDo">'+
											'<a href="javascript:editEventToDoList('+ToDoList_Id[i]+',\''+ToDo_Description[i]+'\',\''+ToDo_Date[i]+'\','+ToDo_Urgent[i]+','+User_Id+')"><img src="css/images/icons-png/edit-black.png" alt="edit Icon"></a>'+
											'<a href="javascript:deleteEventToDoList('+ToDoList_Id[i]+','+User_Id+')"><img src="css/images/icons-png/trash.png" alt="trash Icon"></a>'+
										'</div>'+	
										
									'</div>'
									
													
								  		 );
									 } // End for loop
								
								
									
							   }else{
								   
									alert("Error displaying observation");
								}
				 			} // End success function 
					   });
					return false;
		
	
	
	
	
	}
	
	
var	deleteEventToDoList = function(ToDoList_Id,User_Id){
	
	
		var dataString = 'ToDoList_Id=' + ToDoList_Id  +'&DeleteToDoList=true';
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  if(data.Status == 'success'){
								  
								displayToDoEvents(User_Id);
								
									
							   }else{
								   
									alert("Error adding To Do Events");
								}
				 			} // End success function 
					   });
					return false;
	
	
	
	
	}
	
	
	
	
	
	
	
var	editEventToDoList = function(ToDoList_Id,ToDo_Description,ToDo_Date,ToDo_Urgent,User_Id){
	
	
	if(ToDo_Urgent == 1){
		$('#urgentToDo').prop('checked', true);
	}else{
		$('#urgentToDo').prop('checked', false);
		}

	
	$('#ToDoDescription').val(ToDo_Description);
	$('#dateToDo').val(ToDo_Date);
	$('#User_Id_ToDo').val(User_Id);
	$('#ToDo_Id_To_edit').val(ToDoList_Id);
	
	$('#btnToDo').hide();
	$('#btnToDoEdit').show();
	$('#modalToDo').show();
	

	}
	


var editToDoEvent = function(){

	var User_Id 	= $('#User_Id_ToDo').val();
	var Description = $('#ToDoDescription').val();
	var DateToDo 	= $('#dateToDo').val();
	var ToDo_Id 	= $('#ToDo_Id_To_edit').val();
	var Urgent;
	
	if($("#urgentToDo").is(':checked')){
		Urgent = 1;	
	}else{
		Urgent = 0;	
		}
	
	
	
	
		
			var dataString = 'User_Id=' + User_Id + '&Description=' + Description + '&DateToDo=' + DateToDo +'&Urgent=' + Urgent +'&ToDo_Id=' + ToDo_Id+'&EditToDoList=true';
	
				
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsToDo.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
							  
							  if(data.Status == 'success'){
								  
								displayToDoEvents(User_Id);
									$('#btnToDo').show();
									$('#btnToDoEdit').hide();
									$('#modalToDo').hide();
									
							   }else{
								   
									alert("Error adding To Do Events");
								}
				 			} // End success function 
					   });
					return false;
	
	
	
	
	
	
	
}
	
	
	// THE FOLLOWING FUNTION IS TO PUT A CORRECT DATE
	
	
var dateToDisplay = function(dateObject) {
		var d = new Date(dateObject);
		var day = d.getDate();
		var month = d.getMonth() + 1;
		var year = d.getFullYear();
		
		var date = month + "/" + (Number(day)+1) + "/" + year;
	
		return date;
};
	
