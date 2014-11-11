<?php
include('header.php');
?>


   <section class="containerHorizontal">
            
            
            
            	 <div class="leftPanel">
                 
                 		<div class="headerTable">
                        
                          <h4 id="titleMemberTable">Temple members</h4>
	                  	  	  <hr>
                              
                              <div class="lineHeader">
                              
                              	<div class="blockName"><i class="fa fa-user"></i> Name</div>
                                <div class="hidden-phone blockEmail"><i class="fa fa-envelope"></i> Email</div>
                                <div class="tuidBlook"><i class="fa fa-key"></i> TU-ID</div>
                                <div class="Action_Blook"><i class="fa fa-key"></i> Action</div>
                                
                              </div> <!-- end lineHeader -->
                       </div> <!-- headerTable -->
                       
                       
                       <div class="bodyTable">
                       
                       	 <div id="bodyTableFull">
                                      
                                           
                            </div>
                       </div> <!-- end bodyTable -->
               
                    
               </div> <!-- end leftPanel -->
               
              
               <div class="rightPanel">
               
               
               
               </div><!-- end rightPanel -->
            
            
      
            </section>
            
            
            
                      
        <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO DISPLAY MESSAGES ------>
        <!-- /////////////////////////////////////////////////// -->


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
	<script src="assets/js/Wizard_Functions/formUpdate.js"></script> 