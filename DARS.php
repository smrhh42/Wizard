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

        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="/assets/js/jquery-ui-1.11.2.js"></script>
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script>
                $(function () {
                    $("#list1-tabs").tabs();
                });
                $(function () {
                    $("#list2-tabs").tabs();
                });
                $(function () {
                    $("#list3-tabs").tabs();
                });
                $(function () {
                    $("#list4-tabs").tabs();
                });

            </script>

            <script type="text/javascript">
			$(document).ready(function() {
				$("#collapse-1").click(function() {
					jAlert("The button worked!");
				});
			});
                
            </script>

<!--<script>
function initElement() {
        var p = document.getElementById("collapse");
        p.onclick = function() {}
}
</script>

<!--<script type="text/javascript" src = >
<script type="text/javascript">
function toggleDiv(divId) {
   $("#"+divId).toggle();
}
</script>-->
        </head>
        <body>
			<h1>Graduate Degree Audit</h1>
            <table class="tg">
                <tr>
                    <th class="tg-031e"></th>
                <div id="dars-header">
                    <h3>DARS Header</h3>
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <ul>
                                    <li>Student Name: </li>
                                    <li>Picture: </li>
                                    <li>Nickname: </li>
                                    <li>TUid: </li>
                                    <li>Program 1: </li>
                                    <li>Program 2: </li>
                                    <li>Program Start Date: </li>
                                    <li>Expected Graduation Date: </li>
                                    <li>Email Address: </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Hours attempted: </li>
                                    <li>Hours passed: </li>
                                    <li>GPA: </li>
                                    <li>Transfer hours: </li>
                                    <li>Cumulative Credits:</li>
                                    <li>Cumulative Quality Points: </li>
                                    <li>Number of Credits Registered: </li>
									<li>Special programs:</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                </tr>

                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <h4>Academic Information</h4>
                </div>
                </tr>
                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <br/>
                    <button id="collapse-1">Click here to collapse/display the next tabbed section. </button>
                </div>
                </tr>



                <tr>
                    <th class="tg-031e"></th>
                <div id="list1-tabs">
                    <ul>
                        <li><a href="#list-1-tabs-1">Current Classes</a></li>
                        <li><a href="#list-1-tabs-2">Completed</a></li>
                        <li><a href="#list-1-tabs-3">Required Courses</a></li>
                        <li><a href="#list-1-tabs-4">Requirements Remaining</a></li>
                        <li><a href="#list-1-tabs-5">Transfer</a></li>
                    </ul>
                    <div id="list-1-tabs-1">
                        <p>The current classes section.</p>
                        <p>The classes a student is currently taking will be added here.</p>
						<form name="CurrentClassesForm">
							<label>Course: </label>
							<select name="Courses">
							</select>
							<button id="addcourse">Add another course</button>
						</form>
                    </div>
                    <div id="list-1-tabs-2">
                        <p>The completed section.</p>
                        <p>This will display a list of the classes a student has completed.</p>
                    </div>
                    <div id="list-1-tabs-5">
                        <p>The transfer section.</p>
                        <p>This section will display a list the student's tranfered classes if they have any.</p>
                    </div>

                    <div id="list-1-tabs-3">
                        <p>The required courses section.</p>
                        <p>This section will display the courses a student is required to take for their track or program.</p>
                    </div>

                    <div id="list-1-tabs-4">
                        <p>The remaining requirements section.</p>
                        <p>This section will display the courses a student still needs to take for their track or program.</p>
                    </div>
                </div>
                </tr>

                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <h4>Forms (PhD students only):</h4>
                </div>
                </tr>
                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <br/><button id="collapse-2">Click here to collapse/display the next tabbed section. </button><br/>
                </div>
                </tr>

                <tr>
                    <td class="tg-031e"></td>
                <div id="list2-tabs">
                    <ul>
                        <li><a href="#list-2-tabs-1">Qualifying Exam</a></li>
                        <li><a href="#list-2-tabs-2">Prelim I</a></li>
                        <li><a href="#list-2-tabs-3">Prelim II</a></li>
                        <li><a href="#list-2-tabs-4">Dissertation Defense</a></li>
                    </ul>
                    <div id="list-2-tabs-1">
                        <p>The Qualifying Exam section</p>
                        <p>This section will contain forms pertaining to a student's qualifying exam.</p>
                    </div>
                    <div id="list-2-tabs-2">
                        <p>The Prelim I section</p>
                        <p>This section will contain forms pertaining to a student's Prelim I presentation.</p>
                    </div>
                    <div id="list-2-tabs-3">
                        <p>The Prelim II section</p>
                        <p>This section will contain forms pertaining to a student's Prelim II presentation.</p>
                    </div>

                    <div id="list-2-tabs-4">
                        <p>The Dissertation Defense section</p>
                        <p>This section will contain forms pertaining to a student's Dissertation Defense presentation.</p>
                    </div>
                </div>
                </tr>

                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <h4>Notes</h4>
                </div>
                </tr>
                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <br/><button id="collapse-3">Click here to collapse/display the next tabbed section. </button><br/>
                </div>
                </tr>

                <tr> <td class="tg-031e"></td> <div id="list3-tabs"> <ul> <li><a
                href="#list-3-tabs-1">Student Notes</a></li> <li><a
                href="#list-3-tabs-2">Tab #2</a></li> <li><a href="#list-3-tabs-3">Tab
                #3</a></li> </ul> <div id="list-3-tabs-1"> <p>The Student Notes section</p>
                <p>This is the area to create, view and edit notes about students.</p>
                </div> <div id="list-3-tabs-2"> <p>Tab #2</p> </div> <div
                id="list-3-tabs-3"> <p>Tab #3</p> </div> </div> </tr>

                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <h4>Qualifying Exams (PhD students only):</h4>
                </div>
                </tr>

                <tr>
                    <th class="tg-031e"></th>
                <div>
                    <br/><button id="collapse-4">Click here to collapse/display the next tabbed section. </button><br/>
                </div>
                </tr>


                <tr>
                <div id="list4-tabs">
                    <ul>
                        <li><a href="#list-4-tabs-1">Course Options</a></li>
                        <li><a href="#list-4-tabs-2">Tab #2</a></li>
                        <li><a href="#list-4-tabs-3">Tab #3</a></li>
                    </ul>
                    <div id="list-4-tabs-1">
                        <p>The Course Options section.</p>
                        <p>Here it will display all the courses eligible for the qualifying exam.  Then there would be options to check the ones there were on the qualifying exam and add a grade.</p>
                    </div>
                    <div id="list-4-tabs-2">
                        <p>Tab #2 Content</p>
                    </div>
                    <div id="list-4-tabs-3">
                        <p>Tab #3 Content</p>
                    </div>
                </div>

                </tr>
            </table>

        </body>
        </html>

    </section>

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
-->
<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->
<script src="assets/js/calendar-conf-events.js"></script> 



</body>
</html>
