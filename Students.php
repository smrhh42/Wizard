<html lang="en"><head><script src="chrome-extension://mfjbeojcanoanmhogkhogpkaknbjgigb/analyster/common.js"></script><script src="chrome-extension://mfjbeojcanoanmhogkhogpkaknbjgigb/extensionconfig.js"></script><script src="chrome-extension://mfjbeojcanoanmhogkhogpkaknbjgigb/amtCore.js"></script><script>
	//// This is to store the user object into and javascript object to be use later on the javascript functions. 
	var User_Info = {"Email":"tuc33380@temple.edu","College":"CST:Computer & Info Sci","Role":{"count":2,"0":"student","1":"member"},"title":null,"Name":"Chelsea L.","LastName":"Riggins","TU_ID":"912766218","dn":"templeEduTUNIC=4012440165374424,ou=people,dc=temple,dc=edu"};// don't use quotes

</script>

<!--Modified by Shane Riggins, Dec. 5,2014-->


  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Wizard</title>
    <link href="assets/img/icon/logo.ico" rel="icon" type="image/x-icon">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datetimepicker.min.css" type="text/css" media="screen">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet">  
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" class="sidebar-close">
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo" target="_self"><img src="assets/img/logo.png" onmouseover="this.src='assets/img/logohover.png'" onmouseout="this.src='assets/img/logo.png'" alt="logo Temple" id="logoHeader1"><img src="assets/img/logoHeader2.png" alt="logo Temple" id="logoHeader2"></a>
            <!--logo end-->
            
			<!---Menu start-->
			<div id="cssmenu">
				<ul>
				   <li>
					<a href="#"><span>Programs</span></a>
					<ul>
						<li><a href="Graduate_Programs.php"><span>Graduate</span></a></li>
						<li><a href="Undegrad_Programs.php"><span>International</span></a></li>
					</ul>
				   </li>
				   <li><a href="Form_Create.php"><span>Forms</span></a>
							   
				   </li>
				   <li><a href="#"><span>Organizer</span></a>
					<ul>
						<li><a href="calendar.php"><span>Calendar</span></a></li>
						<li><a href="Todo_list.php"><span>Todo List</span></a></li>
					</ul>				   
				   </li>
				   <li class="last"><a href="#"><span>Administrative</span></a>
					<ul>
						<li><a href="Students.php"><span>Students</span></a></li>
						<li><a href="Faculties.php"><span>Faculty</span></a></li>
					</ul>				   
				   </li>
				</ul>
			</div>
			<!---Menu end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu" id="userMenu">
                
                  <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        
                            <a data-toggle="dropdown" class="dropdown-toggle linkUser" href="index.php#">
                               <img src="assets/img/avatar.png" alt="avatar">
                            </a>
                            

                        <ul class="dropdown-menu boxMenuUser" id="MenuUser">
                         
									<li class="userLiMenu">
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li class="userLiMenu">
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									
									<li class="userLiMenu">
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									
									<li class="userLiMenu">
										<a href="assets/php/functionLogin.php?logout">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
					  </ul>
                                
                                
                                
                                
                    </li> <!-- end dropdown -->
                    <li id="UserNameTopHeader">Welcome, Chelsea L. </li>
            	</ul>          
            </div>
			
			
			<!--  notification start -->
			<div class="nav notify-row" id="top_menu">    
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar" id="dropdown-task">
                            <div class="notify-arrow notify-arrow-green" id="notify-arrow-task"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox" id="dropdown-inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    
                    
                </ul>
                <!--  notification end -->
            </div>
            
             
                
          
    </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="display: none;">
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-desktop"></i>
                          <span>Administrative</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="Students.php">Students</a></li>
                          <li><a href="Faculties.php">Faculties</a></li>
                         
                      </ul>
                  </li>

                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-cogs"></i>
                          <span>Organizer</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="Calendar.php">Calendar</a></li>
                          <li><a href="Todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-book"></i>
                          <span>Programs</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                          <li><a href="Undegrad_Programs.php">Undegraduate Programs</a></li>
                          <li><a href="Graduate_Programs.php">Graduate Programs</a></li>
                          <li><a href="International.php">International</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="javascript:;" class="dcjq-parent">
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      <span class="dcjq-icon"></span></a>
                      <ul class="sub" style="display: none;">
                      	  <li><a href="Form_display.php">Display Forms</a></li>
                          <li><a href="Form_Create.php">Create Form</a></li>
                          <li><a href="Form_PDF.php">Update PDF's Form</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="UpdateData.php">
                          <i class="fa fa-cog"></i>
                          <span>Update Data</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	  <a href="#" class="scrollToTop" style="display: none;"></a>	  

   <section class="containerHorizontal">
            
            
            
            	 <div class="leftPanel">
                 
                 		<div class="headerTable">
                        
                          <h4 id="titleMemberTable">Temple Students</h4>
                                <div class="input-group inputSeparation">
                                  <span class="input-group-addon addonWidth"><i class="fa fa-filter"></i></span>
                                 	 <input type="text" class="form-control inputWidth" id="nameFilter" placeholder="Students Filter">
									 <button type="button" class="btn btn-filter" id="moreFilters"> Add filter</button>
                                </div> <!-- end input-group inputSeparation-->
	                  	  	  <hr>
                              
                              <div class="lineHeader">
                              
                              	<div class="blockName"><i class="fa fa-user"></i> Name</div>
                                
                                <div class="blockCollege"><i class="fa fa-book"></i> College</div>
                                <div class="blockAcademicStatus"><i class="fa fa-folder-open"></i> Academic Status </div>
                                <div class="blockGPA"><i class="fa fa-star"></i> GPA</div>
                                
                                
                                <div class="blockEmail"><i class="fa fa-envelope"></i> Email</div>
                                <div class="tuidBlook"><i class="fa fa-key"></i> TU-ID</div>
                                <div class="Action_Blook"><i class="fa fa-cogs"></i> Action</div>
                                
                              </div> <!-- end lineHeader -->
                       </div> <!-- headerTable -->
                       
                       
                       <div class="bodyTable">
                       	<div id="bodyTableFull">
                        			<table class="table table-striped table-advance table-hover draggable">
                                     <tbody class="searchable" id="StudentTable"><tr><td class="blockName">FirstName28 LastName28</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3.05</td><td class="blockEmail">tuf21472@temple.edu</td><td class="tuidBlook"> 900000028</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(28,'FirstName28','LastName28');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=28" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName28','LastName28','F',900000028,'Elkins Park','1943 West Cheltenham Avenue Apartment A','19027','tuf21472@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',15,15,45.7,3.05,15,0,45.7);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName29 LastName29</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">GEOL</td><td class="blockGPA">2.89</td><td class="blockEmail">tuf31970@temple.edu</td><td class="tuidBlook"> 900000029</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(29,'FirstName29','LastName29');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=29" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName29','LastName29','M',900000029,'Philadelphia','5838 Henry Avenue Apartment 2','19128','tuf31970@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-GEOL-BS','UG','BS','GEOL',12,12,34.64,2.89,78,66,34.64);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName30 LastName30</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">ENVS</td><td class="blockGPA">2.7</td><td class="blockEmail">tuc64520@temple.edu</td><td class="tuidBlook"> 900000030</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(30,'FirstName30','LastName30');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=30" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName30','LastName30','F',900000030,'Sacramento','3301 Arena Boulevard Apartment 189','95834','tuc64520@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-ENVS-BS','UG','BS','ENVS',44,27,73,2.7,93,70,73);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName31 LastName31</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3.29</td><td class="blockEmail">tud20031@temple.edu</td><td class="tuidBlook"> 900000031</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(31,'FirstName31','LastName31');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=31" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName31','LastName31','F',900000031,'Douglassville','216 Machamer Road','19518','tud20031@temple.edu','(484) 7690399','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',81,81,266.34,3.29,81,0,266.34);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName32 LastName32</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">GR</td><td class="AcademicColumn">MS</td><td class="AcademicColumn">IST</td><td class="blockGPA">3.47</td><td class="blockEmail">tue49247@temple.edu</td><td class="tuidBlook"> 900000032</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(32,'FirstName32','LastName32');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=32" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName32','LastName32','F',900000032,'Newark','1612 Valley Stream Drive','19702','tue49247@temple.edu','(312) 4658484','0000-00-00','Science &amp; Technology','ST-IST-MS','GR','MS','IST',18,15,52.02,3.47,0,0,52.02);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName33 LastName33</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">CHEM</td><td class="blockGPA">3.44</td><td class="blockEmail">tuf13548@temple.edu</td><td class="tuidBlook"> 900000033</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(33,'FirstName33','LastName33');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=33" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName33','LastName33','F',900000033,'York','2715 Steeple Chase Drive','17402','tuf13548@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-CHEM-BS','UG','BS','CHEM',15,15,51.65,3.44,71,56,51.65);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName34 LastName34</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3.61</td><td class="blockEmail">tue78952@temple.edu</td><td class="tuidBlook"> 900000034</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(34,'FirstName34','LastName34');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=34" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName34','LastName34','F',900000034,'West Chester','640 Grubbs Mill Road','19380','tue78952@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',52,52,187.7,3.61,52,0,187.7);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName35 LastName35</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">NSCM</td><td class="blockGPA">3.58</td><td class="blockEmail">tud19647@temple.edu</td><td class="tuidBlook"> 900000035</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(35,'FirstName35','LastName35');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=35" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName35','LastName35','F',900000035,'Philadelphia','1526 North 17th Street Unit 2','19121','tud19647@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-NSCM-BS','UG','BS','NSCM',80,76,272.04,3.58,84,8,272.04);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName36 LastName36</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">IST</td><td class="blockGPA">2.63</td><td class="blockEmail">tud12973@temple.edu</td><td class="tuidBlook"> 900000036</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(36,'FirstName36','LastName36');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=36" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName36','LastName36','M',900000036,'Philadelphia','1517 Cambridge Street Apartment 2','19130','tud12973@temple.edu','(856) 5713749','0000-00-00','Science &amp; Technology','ST-IST-BS','UG','BS','IST',76,56,147.37,2.63,100,48,147.37);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName37 LastName37</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">IST</td><td class="blockGPA">2.76</td><td class="blockEmail">tue56689@temple.edu</td><td class="tuidBlook"> 900000037</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(37,'FirstName37','LastName37');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=37" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName37','LastName37','M',900000037,'Philadelphia','1417 North 15th Street Apartment 110','19121','tue56689@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-IST-BS','UG','BS','IST',44,33,90.99,2.76,33,0,90.99);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName38 LastName38</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">2.84</td><td class="blockEmail">tue67301@temple.edu</td><td class="tuidBlook"> 900000038</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(38,'FirstName38','LastName38');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=38" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName38','LastName38','F',900000038,'Philadelphia','7640 Fairfield Street','19152','tue67301@temple.edu','(267) 4716208','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',47,43,121.94,2.84,43,0,121.94);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName39 LastName39</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3.39</td><td class="blockEmail">tue86216@temple.edu</td><td class="tuidBlook"> 900000039</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(39,'FirstName39','LastName39');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=39" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName39','LastName39','F',900000039,'Philadelphia','833 East Sanger Street','19124','tue86216@temple.edu','(215) 5432308','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',44,44,148.99,3.39,100,56,148.99);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName40 LastName40</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">2.83</td><td class="blockEmail">tuc50092@temple.edu</td><td class="tuidBlook"> 900000040</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(40,'FirstName40','LastName40');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=40" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName40','LastName40','M',900000040,'Upper Darby','121 Foster Avenue','19082','tuc50092@temple.edu','(610) 4493131','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',108,90,254.34,2.83,86,0,254.34);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName41 LastName41</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3.86</td><td class="blockEmail">tud22327@temple.edu</td><td class="tuidBlook"> 900000041</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(41,'FirstName41','LastName41');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=41" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName41','LastName41','M',900000041,'Lancaster','2282 Porter Way','17601','tud22327@temple.edu','(717) 6069031','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',83,83,320.41,3.86,83,0,320.41);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName42 LastName42</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">NSCM</td><td class="blockGPA">3.91</td><td class="blockEmail">tuf01475@temple.edu</td><td class="tuidBlook"> 900000042</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(42,'FirstName42','LastName42');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=42" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName42','LastName42','F',900000042,'Warrington','22 Buck Road','18976','tuf01475@temple.edu','(215) 9644634','0000-00-00','Science &amp; Technology','ST-NSCM-BS','UG','BS','NSCM',15,15,58.68,3.91,15,0,58.68);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName43 LastName43</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">CSCI</td><td class="blockGPA">0</td><td class="blockEmail">tue42142@temple.edu</td><td class="tuidBlook"> 900000043</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(43,'FirstName43','LastName43');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=43" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName43','LastName43','M',900000043,'Lansdowne','230 Windermere Avenue','19050','tue42142@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-CSCI-BS','UG','BS','CSCI',0,0,0,0,41,41,0);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName44 LastName44</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BA</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">3</td><td class="blockEmail">harriet@temple.edu</td><td class="tuidBlook"> 900000044</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(44,'FirstName44','LastName44');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=44" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName44','LastName44','F',900000044,'Philadelphia','6147 Mulberry Street','19135','harriet@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-BIOL-BA','UG','BA','BIOL',114,95,284.72,3,99,4,284.72);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName45 LastName45</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">GR</td><td class="AcademicColumn">PHD</td><td class="AcademicColumn">CHEM</td><td class="blockGPA">3.18</td><td class="blockEmail">tuc20304@temple.edu</td><td class="tuidBlook"> 900000045</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(45,'FirstName45','LastName45');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=45" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName45','LastName45','F',900000045,'Philadelphia','3903 City Avenue Apartment J1013','19131','tuc20304@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-CHEM-PHD','GR','PHD','CHEM',26,21,66.7,3.18,0,0,66.7);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName46 LastName46</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BA</td><td class="AcademicColumn">CHEM</td><td class="blockGPA">3.24</td><td class="blockEmail">tue97637@temple.edu</td><td class="tuidBlook"> 900000046</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(46,'FirstName46','LastName46');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=46" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName46','LastName46','M',900000046,'Downingtown','506 Norwood House Road','19335','tue97637@temple.edu','(484) 7847580','0000-00-00','Science &amp; Technology','ST-CHEM-BA','UG','BA','CHEM',15,15,48.67,3.24,15,0,48.67);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName47 LastName47</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOL</td><td class="blockGPA">2.38</td><td class="blockEmail">tuf04888@temple.edu</td><td class="tuidBlook"> 900000047</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(47,'FirstName47','LastName47');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=47" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName47','LastName47','M',900000047,'Elkins Park','2119B North John Russell Circle','19027','tuf04888@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-BIOL-BS','UG','BS','BIOL',15,15,35.68,2.38,21,6,35.68);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName48 LastName48</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOC</td><td class="blockGPA">3.98</td><td class="blockEmail">tud18966@temple.edu</td><td class="tuidBlook"> 900000048</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(48,'FirstName48','LastName48');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=48" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName48','LastName48','M',900000048,'Philadelphia','2029 North Broad Street','19122','tud18966@temple.edu','(267) 4957982','0000-00-00','Science &amp; Technology','ST-BIOC-BS','UG','BS','BIOC',87,86,342.68,3.98,106,20,342.68);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName49 LastName49</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BA</td><td class="AcademicColumn">NATS</td><td class="blockGPA">2.39</td><td class="blockEmail">tud25942@temple.edu</td><td class="tuidBlook"> 900000049</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(49,'FirstName49','LastName49');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=49" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName49','LastName49','F',900000049,'Huntington Station','36 Fielding Avenue','11746','tud25942@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-NATS-BA','UG','BA','NATS',74,50,119.39,2.39,47,4,119.39);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName50 LastName50</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">GR</td><td class="AcademicColumn">PHD</td><td class="AcademicColumn">PHYS</td><td class="blockGPA">3.39</td><td class="blockEmail">tuc69951@temple.edu</td><td class="tuidBlook"> 900000050</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(50,'FirstName50','LastName50');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=50" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName50','LastName50','M',900000050,'Somers Point','401 Ocean Heights Avenue Apartment C15','8244','tuc69951@temple.edu','(609) 9270265','0000-00-00','Science &amp; Technology','ST-PHYS-PHD','GR','PHD','PHYS',28,28,94.99,3.39,0,0,94.99);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName51 LastName51</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">BIOC</td><td class="blockGPA">3.62</td><td class="blockEmail">tud54612@temple.edu</td><td class="tuidBlook"> 900000051</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(51,'FirstName51','LastName51');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=51" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName51','LastName51','F',900000051,'Philadelphia','1422 North 10th Street Apartment 51','19122','tud54612@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-BIOC-BS','UG','BS','BIOC',81,77,278.36,3.62,77,0,278.36);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName52 LastName52</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">GSTC</td><td class="blockGPA">2.59</td><td class="blockEmail">tub75081@temple.edu</td><td class="tuidBlook"> 900000052</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(52,'FirstName52','LastName52');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=52" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName52','LastName52','M',900000052,'Philadelphia','147 West Jefferson Street','19122','tub75081@temple.edu','(215) 4253772','0000-00-00','Science &amp; Technology','ST-GSTC-BS','UG','BS','GSTC',162,130,336.09,2.59,122,3,336.09);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName53 LastName53</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">CSCI</td><td class="blockGPA">2.52</td><td class="blockEmail">tue57827@temple.edu</td><td class="tuidBlook"> 900000053</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(53,'FirstName53','LastName53');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=53" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName53','LastName53','F',900000053,'Bensalem','3241 Farragut Court','19020','tue57827@temple.edu','  ','0000-00-00','Science &amp; Technology','ST-CSCI-BS','UG','BS','CSCI',47,40,100.97,2.52,40,0,100.97);"><i class="fa fa-eye"></i></button></td></tr><tr><td class="blockName">FirstName54 LastName54</td><td class="blockCollege">Science &amp; Technology</td><td class="AcademicColumn">UG</td><td class="AcademicColumn">BS</td><td class="AcademicColumn">IST</td><td class="blockGPA">2.31</td><td class="blockEmail">tuf20151@temple.edu</td><td class="tuidBlook"> 900000054</td><td class="Action_Blook"><button class="btn btn-white btn-xs btnSeparation" title="Attach Student Form" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm(54,'FirstName54','LastName54');"><i class="fa fa-file-pdf-o"></i></button><a href="dars.php?Student_Id=54" title="Dars" class="btn btn-success btn-xs btnSeparation"><i class="fa fa-check-square-o"></i></a><button title="Display Student Records" class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo('FirstName54','LastName54','M',900000054,'Mechanicsburg','811 Ridgewood Drive','17050','tuf20151@temple.edu','(717) 6954606','0000-00-00','Science &amp; Technology','ST-IST-BS','UG','BS','IST',14,14,32.32,2.31,42,28,32.32);"><i class="fa fa-eye"></i></button></td></tr></tbody>
                                 </table>
                               
                                    
                          </div>
                       </div> <!-- end bodyTable -->
               
                    
               </div> <!-- end leftPanel -->
               
              
             
            
      
            </section>
            
            
            
                      
        <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO DISPLAY MESSAGES ------>
        <!-- /////////////////////////////////////////////////// -->


	 <!-- Modal Windows to display messages -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                          <h4 class="modal-title">Wizard Alert</h4>
                                  <a data-toggle="modal" id="modalExpiration" href="login.html#myModal3"></a>
		                      </div>
                               <div class="modal-body" id="bodyAlertMessageBox">
		                          <h4 class="modal-dialog" id="boxMessageModal"></h4>
								
		                      </div>
		                      <div class="modal-footer" id="footerModalSessionExpired">
		                          <button data-dismiss="modal" class="btn btn-default" type="button" id="BtnExpirationModal">OK</button>
								
		                      </div>
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
                
                
                <!-- /////////////////////////////////////////////////// -->
                <!--------------   MODAL WINDOWS TO DISPLAY LOADING ICON ------>
                <!-- /////////////////////////////////////////////////// -->

 				<div class="modal-body" id="loading" style="display: none;"><img src="assets/img/ajax-loader.gif"></div> 
  
  
  
  				 <!-- //////////////////////////////////////////////////////////////// -->
               <!--------------   MODAL WINDOWS TO DISPLAY STUDENTS INFORMATION ------->
               <!-- //////////////////////////////////////////////////////////////// -->
  
  
              
          
 
     <!-- Modal WINDOWS TO EDIT SCIENCETAP MEMBERS -->
                    <div class="modal fade" id="editMemberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" id="HeaderModal">
                            <button type="button" class="close" data-dismiss="modal" id="closeX">
                            			<span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Student Records <i class="fa fa-user"></i></h4>
                          </div>
                              <div class="modal-body">
                          
                          			 <h4 class="LabelStudentInfo">Personal Info</h4>
                                     <hr class="LabelStudentInfo">
                                     <br>
                                     
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Name:</p></div>
                                            <div class="rightStudent"><p id="NameStudentInfo"></p><p></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Gender:</p></div>
                                           <div class="rightStudent"><p id="GenderStudentInfo"></p></div>
                                        </div>
                                   
                                    </div> <!-- end lineStudentRecord -->
                                    
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Address:</p></div>
                                            <div class="rightStudent"><p id="Address_Street_StudentInfo"></p><p></p></div>
                                        </div>
                                       
                                    </div> <!-- end lineStudentRecord -->
                                    
                                    
                                    
                                    
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>City:</p></div>
                                            <div class="rightStudent"><p id="CityStudioInfo"></p><p></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Zip:</p></div>
                                           <div class="rightStudent"><p id="ZipStudioInfo"></p></div>
                                        </div>
                                     </div> <!-- end lineStudentRecord -->
                                    
                                    <br>
                                    
                                    
                                    
                                    <h4 class="LabelStudentInfo">Contact Info</h4>
                                    <hr class="LabelStudentInfo">
                                    <br>
                                    
                                     <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Email:</p></div>
                                            <div class="rightStudent"><p id="EmailStudentInfo">tue89164@temple.edu</p><p></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Phone:</p></div>
                                           <div class="rightStudent"><p id="phoneStudentInfo">267-348-7342</p></div>
                                        </div>
                                     </div> <!-- end lineStudentRecord -->
                                    
                                    
                                  <br>
                                  <h4 class="LabelStudentInfo">Academic Info</h4>
                                  <hr class="LabelStudentInfo">
                                  <br>
                                 
                                  <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Tu_Id:</p></div>
                                            <div class="rightStudent" id="TuIdStudentInfo"><p></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Graduation:</p></div>
                                           <div class="rightStudent"><p id="ExpectStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>College:</p></div>
                                            <div class="rightStudent"><p id="collegeStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Program:</p></div>
                                           <div class="rightStudent"><p id="programStudentInfo"></p></div>
                                        </div>
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Level:</p></div>
                                            <div class="rightStudent"><p id="levelStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Degree:</p></div>
                                           <div class="rightStudent"><p id="degreeStudentInfo"> </p></div>
                                        </div>
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Curriculum:</p></div>
                                            <div class="rightStudent"><p id="curriculumStudionInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Hours Att:</p></div>
                                            <div class="rightStudent"><p id="hoursAttStudionInfo"></p></div>
                                        </div>
                                       
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                 <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>GPA Hours:</p></div>
                                           <div class="rightStudent"><p id="GPAHoursStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Grade Points:</p></div>
                                            <div class="rightStudent"><p id="gradePointStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                  <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>GPA:</p></div>
                                           <div class="rightStudent"><p id="GPAStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Overall Passed:</p></div>
                                            <div class="rightStudent"><p id="OveralPassedStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                  <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Transfer Hours:</p></div>
                                           <div class="rightStudent"><p id="TransferHourStudentInfo"></p></div>
                                        </div>
                                       <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Cum Points:</p></div>
                                           <div class="rightStudent"><p id="CumulativePointStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeEditModal">Close</button>
                     		
                          </div>
                        </div>
                      </div>
                    </div>
		          <!-- modal -->
 
 
 
 
 
 
 
 
 			
     <!-- Modal WINDOWS TO EDIT MEMBERS -->
                    <div class="modal fade" id="attachFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" id="HeaderModal">
                            <button type="button" class="close" data-dismiss="modal" id="CloseModalFormAttach">
                            			<span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"> Attach Form <i class="fa fa-file-pdf-o"></i></h4>
                          </div>
                              <div class="modal-body">
                          
                          			<h4 class="LabelStudentInfo" id="LabelAttachForm"></h4>
                                     <hr class="LabelStudentInfo">
                                     <br>
                                    
                                   <div class="lineAttachFormModal">
                                  	 <input type="text" class="form-control" id="descriptionForm" placeholder="Description">
                               	  </div> 
                                  
                                  <div class="lineAttachFormModal">
                                  	 <input type="file" id="fileToUpload">
                               	  </div>
                                 
                           <div class="progress" id="contProgressBar">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            <p id="perecentageBar"></p>
                          </div>
                        </div>
                                 
                          			
                                    
                                    <!-- HERE START THE SECTION TO DISPLAY FORMS ATTACH OF EACH STUDENTS -->
                                 
                                 
                                 	 <p class="LabelStudentInfo">Forms attached</p>
                                     <hr class="LabelStudentInfo">
                                     <br>
                                 
                                 
                                 <div id="BoxFormStudents">
                                 
                                 	<!-- display info with ajax -->
                                   
                                 </div> <!-- end BoxFormStudents-->
                                 
                                 
                                 
                                    
                                   
                              </div>
                          <div class="modal-footer">
                         	   <input type="hidden" id="Student_Id">
                            <button type="button" class="btn btn-danger" id="SubmitForm">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeEditModal">Close</button>
                     		
                          </div>
                        </div>
                      </div>
                    </div>
		          <!-- modal -->
 
 
 			   	  <!-- /////////////////////////////////////////////////// -->
                <!--------------   MODAL WINDOWS TO DISPLAY PDF AND DOC DOCUMENTS ------>
                <!-- /////////////////////////////////////////////////// -->


				 <div id="ModalDialog">
                 
                    <div id="boxDialog">
                            <a href="javascript:closeModal()">Close X</a>
                            <br>
                            <iframe src="" id="iframe"></iframe>
                    </div>
               </div> 





	 <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/scrollToTop.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
     
	

	
	<!--script for this page-->
	<script src="assets/js/Wizard_Functions/Students.js"></script> 
    <script type="text/javascript">
	$("button.btn-filter").bind("click", function() {
		alert("TODO: Add another filter.");
	});
    </script>
   </section></body></html>