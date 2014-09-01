<?php
session_start();
require_once('assets/common.php');

	if($_SESSION['Email'] != ""){
		
		//This is to find the info of the user who is loged
		$InfoUser = new User();
		$InfoUser->get_User_Info_by_Email($_SESSION['Email']);
		$User_Id 		= $InfoUser->User_Id;
		$First_Name 	= $InfoUser->First_Name;
		$Last_Name 		= $InfoUser->Last_Name;
	    $Email 			= $InfoUser->Email;
		$Temple_id 		= $InfoUser->Temple_id;
		$Image 			= $InfoUser->Image;
		$User_Type_Id 	= $InfoUser->User_Type_Id;
		
		if($User_Type_Id != 3){
			header("Location: index.php");
		}
		
 }else{
	  header("Location: index.php?needLogin");
	  }
?>

<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
        <link href="css/eventCalendar.css" rel='stylesheet' type='text/css'>
    <link href="css/eventCalendar_theme_responsive.css" rel='stylesheet' type='text/css'>
    <link href="images/icon/logo.ico" rel="icon" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='http://fonts.googleapis.com/css?family=Fanwood+Text' rel='stylesheet' type='text/css'>
    <title>Wizard</title>
  
    <script>
			var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
			var is_chrome= navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
			var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;
			var is_ie = navigator.userAgent.toLowerCase().indexOf('msie ') > -1;
			var isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1;
		
		
		
			if(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) )
			{
				location.href = "index.php";
			}
			else if(isAndroid)
			{
				location.href = "index.php";
			}
		
			else if(is_safari || is_chrome)
			{
				document.writeln('<link href="css/ToDo_chrome.css" rel="stylesheet" type="text/css">');
			}
		
			else if(is_firefox)
			{
				document.writeln('<link href="css/ToDo_Firefox.css" rel="stylesheet" type="text/css">');
			}
		
			else 
			{
				document.writeln('<link href="css/ToDo_IE.css" rel="stylesheet" type="text/css">');
			}
     </script>
    </head>
    
        <body>
        	<header>
            	<div id="leftHeader">
                	<img src="images/logoHeader.png" alt="header logo" onClick="TempleLink()" id="logoTemple">
                   
                </div>
                <div id="centerHeader">
                	<div id="leftCenterHeader">
                      <form>
                		<input type="text" name="searchUser" id="SearchUser" placeholder="Search User" />
                    </form>
                    </div>
                    <div id="rightCenterHeader">
                    	<img src="images/search.png" alt="logo search" id="searchIcon" />
                    </div>
              
                </div>
                
                <div id="rightHeader">
                	<div id="leftRightHeader">
                    
                    <?php 
					if($_SESSION['Email'] == ""){
					?>
                    	<ul id="userText">
                        	<li onClick="openLoginBar()">Login</li>
                            /
                            <li onClick="openRegister()">Register</li>
                        </ul>
                    <?php
					}else{
					?>
                       
                        	<div id="divImage"><img src="assets/Images/Users/<?php echo $Image;?>" alt="icon User" id="imgUser"> </div>
                            <div id="centerLogout"><?php echo $First_Name;?></div>
                            <div id="separator">/</div>
                            <div id="rightLogout">Log out</div>
                  
                    <?php
					}
					?>
                       
                        
                    </div> <!-- end leftRightHeader -->
               </div><!-- end rightHeader -->
            </header>
            <form id="formLogin" action="php/FunctionsUser.php" method="post">
            <div id="loginBox">
            	
                	<div id="contaLogin">
                        <div><input type="email" name="emailLogin" placeholder="Email" /></div>
                        <div id="secondDivLogin"><input type="password" name="passLogin" placeholder="Password" /></div>
                    </div>
                    <button type="hidden"  name="buttonLogin" id="buttonLogin" /></button>
              
            </div> <!-- end loginBox-->
              </form>
                     
            
            <nav id="subHeader">
            		 
            
            	<ul>
                	<li onClick="HomeLink()">Home</li>
                    <li onClick="openCalender();">Calendar</li>
                     <?php
						if($User_Type_Id != 1){
						?>
                         <li onClick="openToDo();">To Do</li>
                        <?php
						}
                       
						?>
                     <li>Forms</li>
                    <li>Resources</li>
                </ul>
                
            </nav> <!-- end subHeader -->
            
            
            
            
             <!-- here start all my modal windows -->
             
             <div id="modalEmail">            
            	<div id="modalBoxEmail">
              		<a id="closeButtonModal"> <img src="images/close.png" alt="close Icon"> </a>
                    
                 <div id="containerEmail">
                 
                 	<div class="line1EmailBox">
                    	<div class="LabelEmailbox">
                        	<label>To:</label>
                        </div>
                    	<div class="inputEmailbox">
                        	<input type="email" id="emailInput" placeholder="To" />
                        </div>
                    </div>
                    <div class="line1EmailBox">
                    	<div class="LabelEmailbox">
                        	<label>Subject:</label>
                        </div>
                    	<div class="inputEmailbox">
                        	<input type="text" id="SubjectInput" placeholder="Subject">
                        </div>
                    </div>
                 	<div class="line1EmailBox">
                    	<textarea rows="20" cols="51" placeholder="Body" id="sendBody"></textarea>
                    </div>
            		<div class="line1EmailBox">
                    	<input type="hidden" id="emailWhoSend" value="<?php echo $Email; ?>"/>
                    	<button type="button" id="SendEmailBtn">Send Email</button>
                    </div>
                 </div> <!-- end containerEmail -->
                    
                       		
                </div> <!-- end modalBoxEvent -->
             </div>	<!-- end modalManageEvent -->
            
              
             <div id="modalToDo">            
            	<div id="modalBoxTodo">
              		<a id="closeButtonToDo"> <img src="images/close.png" alt="close Icon"> </a>
                    	<div class="Line1RightArticleTodo"><p>To/Do Event</p></div>
                    	<div id="descriptionToDo"><textarea rows="20" cols="35" placeholder="Description" id="ToDoDescription"></textarea></div>
                    	<div id="DateUrgentToDo"><input type="date" min="<?php echo date("Y-m-d"); ?>" id="dateToDo" /> <label>Urgent</label><input type="checkbox" id="urgentToDo"/></div>
                    	<input type="hidden" id="User_Id_ToDo" />
                        <input type="hidden" id="ToDo_Id_To_edit" />
                        <div id="btnToDo"><button id="bntToDoAdd">Add Event</button></div>
                    	<div id="btnToDoEdit"><button id="bntToDoEdit" onClick="editToDoEvent()">Edit Event</button></div>
                 </div><!-- end modalBoxTodo -->
               </div><!-- end modalToDo -->
            
            
            
            <div id="modalInfoStudent">             
            	<div id="modalBoxInfoStudent">
              		<a id="closeButtonModalStudent"> <img src="images/close.png" alt="close Icon"> </a>
                    
                		<div id="contInfoUser">
                        	<div id="leftContInfoUser">
                            		<div class="linesInfoUserTitle">
                             				<p class="LabellinesInfoUser">Student Info</p>
                             		</div>
                             
                             
                                    
                                    <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser">First Name:</div><div class="InfoName"><p id="nameStudentInfo"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Last Name:</div><div class="InfoName"><p id="lastStudentInfo">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Temple Id:</div><div class="InfoName"><p id="templeIdStudentInfo"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                                    
                                     <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser">Gender:</div><div class="InfoNameGender"><p id="GenderStudentInfo"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Email:</div><div class="InfoNameEmail"><p id="EmailStudentInfo">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Phone:</div><div class="InfoName"><p id="PhoneStudentInfo"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                                    
                                    
                                    
                                     <div class="linesInfoUserTitle">
                             				<p class="LabellinesInfoUser">Address</p>
                             		 </div>
                            
                                     <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser">City:</div><div class="InfoName"><p id="cityStudentInfo"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Address:</div><div class="InfoAddress"><p id="AddressStudentInfo">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser">Zip:</div><div class="InfoZip"><p id="ZipStudentInfo"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                            
                            
                            
                            
                               <div class="linesInfoUserTitle">
                             				<p class="LabellinesInfoUser">Registration</p>
                             		 </div>
                            
                                     <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser2">Expected Graduation:</div><div class="InfoName"><p id="Expected_Graduation_Date"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Registration Status:</div><div class="InfoAddress"><p id="REgistration_Status_Date">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Hours Registerd:</div><div class="InfoZip"><p id="Hours_Registerd"> </p></div></div>
                                       
                              <div class="ItemInfo"><div class="labelInfoUser2">College:</div><div class="InfoAddress"><p id="College_1_Description">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Program:</div><div class="InfoZip"><p id="Program_1"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                            
                            
              
                            
                            
                                    
                            </div><!-- end leftContInfoUser -->
                            
                          	 <div id="rightContInfoUser">
                            
                            
                            
                            		<div class="linesInfoUserTitle">
                             				<p class="LabellinesInfoUser">Undergraduate</p>
                             		</div>
                             
                            
	
                                    
                                    <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser2">Hours Attempted:</div><div class="InfoName"><p id="Hours_Attempted_UG"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">GPA Hours:</div><div class="InfoName"><p id="GPA_Hours_UG">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Grade Points:</div><div class="InfoName"><p id="Grade_Points_UG"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                                    
                                     <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser2">GPA:</div><div class="InfoNameGender"><p id="GPA_UG"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Overall Passed:</div><div class="InfoNameEmail"><p id="Overall_passed_UG">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Transfer Hours:</div><div class="InfoName"><p id="Transfer_Hours_UG"> </p></div></div>
                                       
                                       
                                        <div class="ItemInfo"><div class="labelInfoUser2">Cumulative Credits:</div><div class="InfoNameGender"><p id="Cumulative_Credits_UG"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Cumulative Quality Points:</div><div class="InfoNameEmail"><p id="Cumulative_Quality_Points_UG">  </p></div></div>
                                    </div><!-- end linesInfoUser -->
                            
                            
                            
                            
                            
                            
                            
                            
                            	<div class="linesInfoUserTitle">
                             				<p class="LabellinesInfoUser">Graduate</p>
                             		</div>
                             
                            
                            
                            
	
	
	
	
                                    
                                    <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser2">Hours Attempted:</div><div class="InfoName"><p id="Hours_Attempted_G"> </p></div></div>
                                       
                                        <div class="ItemInfo"><div class="labelInfoUser2">Hours Passed:</div><div class="InfoName"><p id="Hours_Passed_G"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">GPA Hours:</div><div class="InfoName"><p id="GPA_Hours_G">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Grade Points:</div><div class="InfoName"><p id="Grade_Points_G"> </p></div></div>
                                    </div><!-- end linesInfoUser -->
                                    
                                     <div class="linesInfoUser">
                                       <div class="ItemInfo"><div class="labelInfoUser2">GPA:</div><div class="InfoNameGender"><p id="GPA_G"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Overall Passed:</div><div class="InfoNameEmail"><p id="Overral_Hours_Passed_G">  </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Transfer Hours:</div><div class="InfoName"><p id="Transfer_Hours_G"> </p></div></div>
                                       
                                       
                                        <div class="ItemInfo"><div class="labelInfoUser2">Cumulative Credits:</div><div class="InfoNameGender"><p id="Cumulative_Credits_G"> </p></div></div>
                                       <div class="ItemInfo"><div class="labelInfoUser2">Cumulative Quality Points:</div><div class="InfoNameEmail"><p id="Cumulative_Quality_Points_G">  </p></div></div>
                                    </div><!-- end linesInfoUser -->
                            
                            
                             </div><!-- end rigthContInfoUser -->
                       </div><!-- end contInfoUser -->
                   </div> <!-- end modalBoxEvent -->
             </div>	<!-- end modalManageEvent -->
            
            
            
            
             <div id="modalManageObservation">            
            	<div id="modalBoxObservation">
              		<a id="closeButtonModalObservation"> <img src="images/close.png" alt="close Icon"> </a>
                    <div id="LabelObservation"><p id="labelUSerObservation"></p></div>
                    <div id="boxObservation">
                      <div id="leftBoxObservation">
                        <div id="lineTitleObservation"><input type="text" id="titleObservation" placeholder="Title"></div>
                        <div id="lineDescriptionObersation"><textarea id="DescriptionObservation" cols="32" rows="15" placeholder="Description"></textarea></div>
                        <div id="lineDateTimeObservation"><input type="date" min="<?php echo date("Y-m-d"); ?>"  id="dateObservation"><input type="time" id="timeObservation"></div>
                        	    <input type="hidden" id="idUserToObservation"/>
                        <div id="lineButonObservation"><button type="button" id="btnObservation">Add Note</button></div>
                      </div><!-- end leftBoxObservation -->
                        
                        
                        <div id="rightBoxObservation">
                        	<div id="topObservationMenu">
                            	<ul>
                                	<li id="TitleLi">Title</li>
                                    <li id="DateLi">Date</li>
                                    <li id="TimeLi">Time</li>
                                    <li id="ActionLi">Action</li>
                                </ul>
                            </div><!-- end topObservationMenu -->
                            
                            
                        	<div id="containerObervation">
                            
                            	<!-- Here I am displaying the info by ajax -->
                            </div><!-- end containerObervation -->
                        
                        	<div id="displayObservation">
                            	<p id="NoteToDisplay"></p>
                            
                            </div><!-- end displayObservation -->
                     </div><!-- end rightBoxObservation -->
                    
                    
                    
                    
                    
                    </div><!-- end boxObservation -->
                    
                    
            	</div><!-- end modalBoxObservation-->
             </div><!-- end modalManageObservation -->
            
            
            	
            <section>
            	<aside>
                	<ul>
                    	<li>Administrative</li>
                        <li>Programs</li>
                        <li onClick="openStudentInfo()">Student Info</li>
                        <li>Applications</li>
                        <li>TA/RA</li>
                        <li>Undegraduate Programs</li>
                        <li>Graduate Programs</li>
                        <li>Department Information</li>
                        <li>International</li>
                        <li onClick="openUpdateDb()">Update Db</li>
                        <li>Policies</li>
                    </ul>
                
                </aside>
                <article>
                
              		<div id="leftArticleTodo">
                    	<ul id="MenuTopStudent">
                        	<li id="NameBtnLi">Name</li>
                            <li id="LastBtnLi">Last</li>
                            <li id="TempleIdBtnLi">Temple Id</li>
                            <li id="ActionBtnLi">Action</li>
                        </ul> <!-- end MenuTopStudent -->
                    	<div id="containerListStudent">
                        
                        
                            <!-- Here is make the loop with javascript -->
                            
                          
                        
                     	</div> <!-- end containerListStudent -->
                     	<div id="searchBox">
                        	<div id="line1Search"><p>Search by:</p></div>
                        	<div id="line2Search">
                            	<ul>
                                    <li id="searchByName">Name</li>
                                    <li id="searchByLast">Last</li>
                                    <li id="searchByTempleID">Temple Id</li>
                                    <li id="searchByEmail">Email</li>
                                </ul>
                            </div>
                            <div id="searchInput">
                            
                            	<!-- form Sarch By name -->
                                <input type="text" id="searchByNameInput" placeholder="Search by Name"/>
                                <button type="button" id="searchByNameBtn">Search</button>
                                
                                <!-- form Sarch By Last -->
                                <input type="text" id="searchByLastInput" placeholder="Search by Last"/>
                                <button type="button" id="searchByLastBtn">Search</button>
                                
                                <!-- form Sarch By Temple Id -->
                                <input type="text" id="searchByTempleIdInput" placeholder="Search by Temple Id"/>
                                <button type="button" id="searchByTempleIdBtn">Search</button>
                                
                                <!-- form Sarch By Email -->
                                <input type="text" id="searchByEmailInput" placeholder="Search by Email"/>
                                <button type="button" id="searchByEmailBtn">Search</button>
                                
                            
                            </div><!-- end searchInput -->
                        </div><!-- end searchBox -->
                    
                    
                    </div><!-- end  leftArticleTodo -->
                    <div id="rightArticleTodo">
                    	<div class="Line1RightArticleTodo"><p>To/Do List</p></div>
                    	<div id="topMenuTodoList">
                        	<ul>
                            	<li id="DescLiToDo">Description</li>
                                <li id="DateLiToDo">Date</li>
                                <li id="UrgentLiToDo">Urgent</li>
                            	<li id="ActionLiToDo">Actions</li>
                            
                            </ul>
                       </div><!-- end topMenuTodoList -->
                       
                       
                       
                       <div id="containerToDoList">
                       
                       		<!-- list user here by ajax -->
                            
                          
                       
                       </div><!-- end containerToDoList -->
                       
                    	<div id="lineButtonToDoList">
                        	<button type="button" id="ToDoListBtn" onClick="openModalToDo(<?php echo $User_Id; ?>);">Add Event</button>
                        </div>
                    
                    
                    </div><!-- end rightArticleTodo -->
              
                </article>
            </section>
            <footer>
            	<div id="leftFooter">
                	<ul> 
                    	<li>Semester Schedule</li>
                        <li>List</li>
                        <li>Memos</li>
                    </ul> 
                
                </div> <!-- end leftFooter -->
            	<div id="rightFooter">
                	<p>Copyright © 2014 Wizard. All rights reserved.</p>
                </div>
            
            	
            </footer>
        
        </body>
</html>
<script>
	onload = function(){
		displayToDoEvents(<?php echo $User_Id; ?>);
	}
</script>
	<script src="js/jquery-1.10.1.js"></script>
  	<script src="js/functions.js"></script>
	<script src="js/ToDoFunctions.js"></script>