<?php
include('header.php');
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
<section class="wrapper">
      <!-- HERE IS WHERE IS NECESSARY TO INCLUDE THE CONTENT -->
        
        
        <!-- Update User -->
        
        
         <div class="uploadCSVbox">
                   		<div class="Title"> <h3 class="hrUpdateCSV" >Update Student Table</h3></div>
                        <hr class="hrUpdateCSV">
                        
                            <div class="containerForm">
                                
                                
                                <form action="php/functions.php" method="post" enctype="multipart/form-data" name="CsvForm">
                                <div class="lineForm">
                                    <div class="line1Form"><input name="file" type="file" required /></div>
                                    <div class="line2Form"><input type="submit" name="updateStudentBtn" value="Upload"></div>
                                     
                                </div><!-- end lineForm -->
                             	<progress class="progress" value="0" max="100"></progress>
                                </form>
                                
                                
                             </div><!-- end containerForm -->   
                         
                                      
                                
                             
                   </div><!-- end uploadCSVbox -->
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
        
        
        
        
      </section>

  </section>

      <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <script  src="assets/js/TeamFunctions/UpdateData.js"></script>

    <!--script for this page-->

     
  

  </body>
</html>
