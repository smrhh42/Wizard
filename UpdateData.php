<?php
	include('header.php');
?>
<section id="main-content">
	<section class="wrapper">       
      <!--main content start-->

      <!-- HERE IS WHERE IS NECESSARY TO INCLUDE THE CONTENT -->
        
        
        <!-- Update User -->
        
        
         <div class="uploadCSVbox">
                   		<div class="Title"> <h3 class="hrUpdateCSV">Update Student - Choose a csv file</h3></div>
                        
                            <div class="containerForm">
                                
                                <div class="lineForm">
                                    <div class="line1Form"><input id="fileToUpload" type="file" /></div>
                                    <div class="line2Form"><input type="button" id="updateStudentBtn" value="Update"></div>
                                     
                                </div><!-- end lineForm -->
                             	
                                
                                
                                <div class="progress" id="contProgressBar">
                         				 <div class="progress-bar progress-bar-striped"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            			 <p id="perecentageBar"></p>
                          			</div>
                        			</div>
                                
                                
                             </div><!-- end containerForm -->   
                         
                                      
                                
                             
                   </div><!-- end uploadCSVbox -->
     
  
        
<<<<<<< HEAD
      </section>

  </section>

      <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
=======
	<!--main content end-->
	</section>
</section>


  <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO DISPLAY MESSAGES ------>
        <!-- /////////////////////////////////////////////////// -->
>>>>>>> ce96d2af16b9624d5bd2bd8f7c8b4360638afe7f


	 <!-- Modal Windows to display messages -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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

 				<div class="modal-body" id="loading"><img src="assets/img/ajax-loader.gif" /></div>  




	
	<?php	include('include.php');	?>
	
	<!--script for this page-->
    <script src="assets/js/Wizard_Functions/UpdateData.js"></script>

