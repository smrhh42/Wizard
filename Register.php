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
				document.writeln('<link href="css/Register_chrome.css" rel="stylesheet" type="text/css">');
			}
		
			else if(is_firefox)
			{
				document.writeln('<link href="css/Register_Firefox.css" rel="stylesheet" type="text/css">');
			}
		
			else 
			{
				document.writeln('<link href="css/Register_IE.css" rel="stylesheet" type="text/css">');
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
                        <div><input type="text" name="emailLogin" placeholder="Email" /></div>
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
                	<video id="videoCapture" autoplay> </video>
                    <div id="rectanglePicture"></div>
                    <button type="button" id="picBtn" onClick="snapshot()">Capture</button>	
                </aside>
                
                
                <article>
                
                	<h1 id="titleArticle">Wizard Registration</h1>
                    
                	<div id="line1Register">
                    
                    	<div id="leftLineRegister"> 
                       		 <canvas id='videoCanvas'></canvas>
                        </div>
                        <div id="rightLineRegister"> 
                        	<form>
                            	<div id="containerFormRegister">
                                	<div class="lineForm">
                            			<div class="labelForm"><label>First name:</label></div><div class="inputForm"><input type="text" name="name" id="name"/></div>
                                        <div class="labelForm"><label>Last name:</label></div><div class="inputForm"><input type="text" name="last" id="last"/></div>
                                    </div>
                                
                             		<div class="lineForm">
                                        <div class="labelForm"><label>Email:</label></div><div class="inputForm"><input type="email" name="email" id="email"/></div>
                                		<div class="labelForm"><label>Temple Id:</label></div><div class="inputForm"><input type="text" maxlength="9" name="Temple_id" id="Temple_id"/></div>
                                    </div>
                              		<div class="lineForm">
                                     	<div class="labelForm"><label>Password:</label></div><div class="inputForm"><input type="password" name="pass" id="pass"/></div>
                                		<div class="labelForm"><label>Re-Password:</label></div><div class="inputForm"><input type="password" name="re_pass" id="re_pass"/></div>
                                    </div>
                                    <div class="lineForm">
                                     		<div id="lineButton"><button type="button" id="buttonRegister">Add User</button></div>
                                    </div>
                             </div><!-- end containerFormRegister  -->
                            </form>
                       		
                        </div>
                    
                		 
                	</div>
                    
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
      <script src="js/jquery-1.10.1.js"></script>
      <script src="js/functions.js"></script>
      <script src="js/RegisterFunctions.js"></script> 
      <script src="js/webcam.js"></script> 
</html>
