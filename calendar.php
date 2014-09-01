<?php
session_start();
require_once('assets/common.php');

	if($_SESSION['Email'] != ""){
		
		//This is to find the info of the user who is loged
		$InfoUser = new User();
		$InfoUser->get_User_Info_by_Email($_SESSION['Email']);
		$User_Id  		= $InfoUser->User_Id;
		$First_Name 	= $InfoUser->First_Name;
		$Last_Name 		= $InfoUser->Last_Name;
	    $Email 			= $InfoUser->Email;
		$Temple_id 		= $InfoUser->Temple_id;
		$Image 			= $InfoUser->Image;
		$User_Type_Id 	= $InfoUser->User_Type_Id;
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
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery.eventCalendar.js"></script>
    <script src="js/jquery.timeago.js"></script>
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
				document.writeln('<link href="css/chrome _Calendar.css" rel="stylesheet" type="text/css">');
			}
		
			else if(is_firefox)
			{
				document.writeln('<link href="css/Firefox_Calendar.css" rel="stylesheet" type="text/css">');
			}
		
			else 
			{
				document.writeln('<link href="css/IE_Calendar.css" rel="stylesheet" type="text/css">');
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
             <form id="formLogin" action="index.php">
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
           
             <div id="modalManageEvent">            
            	<div id="modalBoxEvent">
              		<a id="closeButtonModal"> <img src="images/close.png" alt="close Icon"> </a>
                    
                    <div id="containerEvents">
                    	<div id="leftContainerEvent">
                        	<p class="labelsEvent">Add Event</p>
                        
                        <form>
                        
                           <div class="lineEvents">	
                                <div class="labelEvent"><label>Date:</label></div><div><input type="date" id="DataEvent" min="<?php echo date("Y-m-d"); ?>" placeholder="Date"/></div>
                            	<div class="labelEvent"><label>Time:</label></div><div><input type="time" id="TimeEvent" placeholder="Time"/></div>
                           </div> <!-- end lineEvents -->
                            <div class="lineEvents">	
                            	<div class="labelEvent"><label>Title:</label></div><div class="inputEvent"><input type="text" id="TitleEvent" placeholder="Title"/></div>
                            </div><!-- end lineEvents -->
                             <div class="lineEvents">	
                            	<div class="labelEvent"><label>Url:</label></div><div class="inputEvent"><input type="text" id="UrlEvent" placeholder="Url Event"/></div>
                            </div><!-- end lineEvents -->
                            <div class="lineEvents2">	
                            	<div><textarea type="text" id="DescriptionEvent" rows="10" cols="50" placeholder="Description"></textarea></div>
                            </div><!-- end lineEvents -->
                            <div class="lineEvents2">	
                            	<div><button id="addEventButton" type="button">Add Event </button></div>
                            </div><!-- end lineEvents -->
                        </form>
                        
                        	
                        </div><!-- end leftContainerEvent -->
                        
                        
                        <div id="rightContainerEvent">
                        	<p class="labelsEvent">Event List</p>
                            	<div id="containerDisplayEvents">
                                	<div id="headerDisplayEvents">
                                    	<ul>
                                        	<li class="TitleHeader">Title</li>
                                            <li class="DateHeader">Date</li>
                                            <li class="TimeHeader">Time</li>
                                            <li class="ActionHeader">Actions</li>
                                        </ul>
                                    </div>
                                    
                                    <div id="contToDisplayLoop">
                                    
                                        <!-- here is display event with ajax -->
                                        
                                        
                                    </div> <!-- contToDisplayLoop --->
                                
                                
                                </div> <!-- end containerDisplayEvents -->
                            
                        
                        </div> <!-- end rightContainerEvent -->
                    
                    </div> <!-- end containerEvents -->
                    
                    
                    
           	 	</div><!-- end modalBoxEvent -->
             </div><!-- end modalManageEvent -->
           
           
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
         		
                  <div id="calendar"></div>
                       		 <nav id="menuCalender">
                             	<ul>
                                	<li id="addEvent">manage events</li>
                                </ul>
                             </nav>	
                             
                   			
                        	
                        <script>
                            $(document).ready(function() {
                                $("#calendar").eventCalendar({
                                    
                                    eventsjson: 'http://web-huertas.com/work/programs/Wizard/php/events.json.php?User_Id=<?php echo $User_Id;?>',
                                    monthNames: [ "January", "February", "March", "April", "May", "June",
                                        "July", "August", "September", "October", "November", "December" ],
                                    dayNames: [ 'Sunday','Monday','Tuesday','Wednesday',
                                        'Thursday','Friday','Saturday' ],
                                    dayNamesShort: [ 'Sun','Mon','Tue','Wed', 'Thu','Fri','Sat' ],
                                    txt_noEvents: "Does not have events to this time",
                                    txt_SpecificEvents_prev: "",
                                    txt_SpecificEvents_after: "Events:",
                                    txt_next: "next",
                                    txt_prev: "back",
                                    txt_NextEvents: "Upcoming Events:",
                                    txt_GoToEventUrl: "Go to Event"
                                });
                            });
                        </script>
                
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
        <script>
			/*Stor user Id variable on javascript variable to be used later */
			var User_Id = <?php echo $User_Id; ?> 
        </script>
        
       
        
		 <script src="js/functions.js"></script>
         <script src="js/functionsCalender.js"></script>

</html>
