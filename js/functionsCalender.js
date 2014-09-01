	
	function displayEvents(){
		
		
		var dataString = 'User_Id=' + User_Id +'&DisplayEvents=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
										  
							  var Calendar_Id = data.Calendar_Id;
							  var Date_Event = data.Date_Event;
							  var Time = data.Time;
							  var Description = data.Description;
							  var Url = data.Url;
							  var Title = data.Title;
							  
							
					 $('#contToDisplayLoop').html("");
				
				  
				  for (var i in Calendar_Id) {
					  
					  
                      $('#contToDisplayLoop').append(
					  
						  '<div class="lineDisplayEvent">'+
								'<div class="TitleDiv"><p class="lableTittle">'+Title[i]+'</p></div>'+
								'<div class="DateDiv">'+Date_Event[i]+'</div>'+
								'<div class="TimeDiv">'+Time[i]+'</div>'+
									'<div class="ActionDiv">'+
										'<a href="javascript:DeleteEvent('+Calendar_Id[i]+')"><img src="css/images/icons-png/trash.png" alt="delIcon"></a>'+
										
								'</div>'+
						 '</div>'
										
					   );
		  } // End for loop
		  
				 	 }else{
						alert("Error to insert event, try again");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
		}
	
	
$('#addEvent').click(function(){
	$('#modalManageEvent').show();
});

$('#closeButtonModal').click(function(){
	$('#modalManageEvent').hide();
	location.href = "calendar.php"
});


$('#addEventButton').click(function(){
	
var DateEvent 	=	$('#DataEvent').val();
var Time		=	$('#TimeEvent').val();
var Title 		=	$('#TitleEvent').val();
var Url 		=	$('#UrlEvent').val();
var Description	=	$('#DescriptionEvent').val();

	if(DateEvent == ""){
		alert("Data field is required");
	}else if(Time == ""){
		alert("Time field is required");
	}else if(Title == ""){
		alert("Title field is required");
	}else{
		/* Here is to submit the form */
		
		
		var dataString = 'Date=' + DateEvent +'&Time=' + Time + '&Title=' + Title +'&Url=' + Url +
								 '&Description=' + Description +'&User_Id=' + User_Id  +'&InsertEvet=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
					
						
							if(data.Status == 'success'){
								
								alert("Event inserted successfully");
								displayEvents();

									$("#DataEvent").val(""); 
									$("#TimeEvent").val(""); 
									$("#TitleEvent").val("");
									$("#UrlEvent").val("");
									$("#DescriptionEvent").val("");
						
								
							 }else{
								 alert("Error to insert event, try again");
								 }
								 
								 
								
						 } // End success function 
					});
					return false;
			}
	});
	
	
	
	
var DeleteEvent = function(Calendar_Id) {
  
  	
		var dataString = 'Calendar_Id=' + Calendar_Id +'&DeleteEvet=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
								
								displayEvents();
	
							 }else{
								 alert("Error deleting event, try again");
								 }
								 
								 
								
						 } // End success function 
					});
					return false;
			
  
};
	


	
	
$(document).ready(function() {
	displayEvents();
	});
	


$('.TitleHeader').click(function(){
	
		
		var dataString = 'User_Id=' + User_Id +'&SortByTitle=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
										  
							  var Calendar_Id = data.Calendar_Id;
							  var Date_Event = data.Date_Event;
							  var Time = data.Time;
							  var Description = data.Description;
							  var Url = data.Url;
							  var Title = data.Title;
							  
							
					 $('#contToDisplayLoop').html("");
				
				  
				  for (var i in Calendar_Id) {
					  
					  
                      $('#contToDisplayLoop').append(
					  
						  '<div class="lineDisplayEvent">'+
								'<div class="TitleDiv"><p class="lableTittle">'+Title[i]+'</p></div>'+
								'<div class="DateDiv">'+Date_Event[i]+'</div>'+
								'<div class="TimeDiv">'+Time[i]+'</div>'+
									'<div class="ActionDiv">'+
										'<a href="javascript:DeleteEvent('+Calendar_Id[i]+')"><img src="css/images/icons-png/trash.png" alt="delIcon"></a>'+
										
								'</div>'+
						 '</div>'
										
					   );
		  } // End for loop
		  
				 	 }else{
						alert("Error to insert event, try again");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	});
	
	
	
	
	
	
	
$('.DateHeader').click(function(){
	
		
		var dataString = 'User_Id=' + User_Id +'&SortByDate=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
										  
							  var Calendar_Id = data.Calendar_Id;
							  var Date_Event = data.Date_Event;
							  var Time = data.Time;
							  var Description = data.Description;
							  var Url = data.Url;
							  var Title = data.Title;
							  
							
					 $('#contToDisplayLoop').html("");
				
				  
				  for (var i in Calendar_Id) {
					  
					  
                      $('#contToDisplayLoop').append(
					  
						  '<div class="lineDisplayEvent">'+
								'<div class="TitleDiv"><p class="lableTittle">'+Title[i]+'</p></div>'+
								'<div class="DateDiv">'+Date_Event[i]+'</div>'+
								'<div class="TimeDiv">'+Time[i]+'</div>'+
									'<div class="ActionDiv">'+
										'<a href="javascript:DeleteEvent('+Calendar_Id[i]+')"><img src="css/images/icons-png/trash.png" alt="delIcon"></a>'+
										
								'</div>'+
						 '</div>'
										
					   );
		  } // End for loop
		  
				 	 }else{
						alert("Error to insert event, try again");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	});





$('.TimeHeader').click(function(){
	
		
		var dataString = 'User_Id=' + User_Id +'&SortByTime=true';
					
					
					//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "../Wizard/php/FunctionsCalender.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
						
							if(data.Status == 'success'){
								
										  
							  var Calendar_Id = data.Calendar_Id;
							  var Date_Event = data.Date_Event;
							  var Time = data.Time;
							  var Description = data.Description;
							  var Url = data.Url;
							  var Title = data.Title;
							  
							
					 $('#contToDisplayLoop').html("");
				
				  
				  for (var i in Calendar_Id) {
					  
					  
                      $('#contToDisplayLoop').append(
					  
						  '<div class="lineDisplayEvent">'+
								'<div class="TitleDiv"><p class="lableTittle">'+Title[i]+'</p></div>'+
								'<div class="DateDiv">'+Date_Event[i]+'</div>'+
								'<div class="TimeDiv">'+Time[i]+'</div>'+
									'<div class="ActionDiv">'+
										'<a href="javascript:DeleteEvent('+Calendar_Id[i]+')"><img src="css/images/icons-png/trash.png" alt="delIcon"></a>'+
										
								'</div>'+
						 '</div>'
										
					   );
		  } // End for loop
		  
				 	 }else{
						alert("Error to insert event, try again");
						}
								 
								 
								
				 } // End success function 
					});
					return false;
		
	
	});



		
	
		
	
