<?php
session_start();
require_once('assets/common.php');

	if($_SESSION['Email']){
		
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
				document.writeln('<link href="css/chrome.css" rel="stylesheet" type="text/css">');
			}
		
			else if(is_firefox)
			{
				document.writeln('<link href="css/Firefox.css" rel="stylesheet" type="text/css">');
			}
		
			else 
			{
				document.writeln('<link href="css/IE.css" rel="stylesheet" type="text/css">');
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
					if(!$_SESSION['Email']){
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
                         <?php
						if($User_Type_Id != 1){
						?>
                         <li onClick="openUpdateDb()">Update Db</li>
                        <?php
						}
                       
						?>
                        <li>Policies</li>
                    </ul>
                
                </aside>
                <article>
                
              		<!-- here in the article is to make our program -->
              
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
<script src="js/jquery-1.10.1.js"></script>
  <script src="js/functions.js"></script>
<?php if(isset($_GET['needLogin'])){
	?>
    <script>
    	alert("Please login first");
    </script>
    <?php	
	}
?>

<?php if(isset($_GET['errorLogin'])){
	?>
    <script>
    	alert("Wrong email and password");
    </script>
    <?php	
	}
?>
    
   
