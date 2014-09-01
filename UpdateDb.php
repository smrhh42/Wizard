<?php
session_start();
require_once('assets/common.php');
include ("php/ExportExcel.php");
////PHP VARIABLES ////
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
    <script src="js/functions.js"></script>
    <script src="js/jquery-1.10.1.js"></script>
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
				document.writeln('<link href="css/UpdateDb_Chrome.css" rel="stylesheet" type="text/css">');
			}
		
			else if(is_firefox)
			{
				document.writeln('<link href="css/UpdateDb_Firefox.css" rel="stylesheet" type="text/css">');
			}
		
			else 
			{
				document.writeln('<link href="css/UpdateDb_IE.css" rel="stylesheet" type="text/css">');
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
       		
           
            
            
            
        	
            <section>
            	<aside>
                	<ul>
                    	<li>Administrative</li>
                        <li>Programs</li>
                        <li>Student Info</li>
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
                        
                    <div id="uploadCSVbox">
                   		<div id="Title"> <h3 >Select CSV file to Upload</h3></div>
                        <hr>
                        
                            <div id="containerForm">
                                
                                
                                <form action="php/functions.php" method="post" enctype="multipart/form-data" name="CsvForm">
                                <div id="lineForm">
                                    <div id="line1Form"><input name="file" type="file" required /></div>
                                    <div id="line2Form"><input type="submit" name="updateStudentBtn" value="Upload"></div>
                                </div><!-- end lineForm -->
                             
                                </form>
                                
                                
                             </div><!-- end containerForm -->   
                                
                                <?php
								if($_SESSION['barProgress']){
									?>
                                        <div id="progressbox">
                                            <progress value="99" max="100"></progress>
                                        </div>
                                <?php
								}?>
                             
                   </div><!-- end uploadCSVbox -->
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

<?php
if(isset($_GET['UploadStudent'])){
	UpdateDatabase();
	?>
    	<script>
        	alert("Database Successfully Updated");
			location.href = "UpdateDb.php";
        </script>
    <?php
	
	

	}


?>

