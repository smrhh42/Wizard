<?php
include('header.php');
?>
<section id="main-content">
	<section class="wrapper">
    <!--main content start-->

      <!-- HERE IS WHERE IS NECESSARY TO INCLUDE THE CONTENT -->
 

			<h1>Graduate Degree Audit</h1>
            <table class="myTable">
                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
					<div id="dars-header">
                    <h3>DARS Header</h3>
                    <table style="width: 100%">
                        <tr class="myTableRow">
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
                </div> <!--end dars-header-->
                </tr>

                <tr class="myTableRow">
					<th class="myTableRowHeader"></th>
					<div>
                    	<h4>Academic Information</h4>
                	</div>
                </tr>
				
                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
                	<div class="collapse">
                    <br/>
                    <button id="collapse-1">Click here to collapse/display the next tabbed section. </button>
                	</div>
                </tr>

                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
					<div class="tabbedSection" id="list1-tabs">
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
								<select name="Courses"></select>
								<button id="addcourse">Add another course</button>
							</form>
                    	</div>
                    	<div id="list-1-tabs-2">
                        	<p>The completed section.</p>
                        	<p>This will display a list of the classes a student has completed.</p>
                    	</div>
						<div id="list-1-tabs-3">
                        	<p>The required courses section.</p>
                        	<p>This section will display the courses a student is required to take for their track or program.</p>
                    	</div>
						<div id="list-1-tabs-4">
                        	<p>The remaining requirements section.</p>
                        	<p>This section will display the courses a student still needs to take for their track or program.</p>
                    	</div>
						<div id="list-1-tabs-5">
                        	<p>The transfer section.</p>
                        	<p>This section will display a list the student's tranfered classes if they have any.</p>
						</div>
					</div> <!-- end tabbedSection -->
                </tr>

                <tr class="myTableRow">
					<th class="myTableRowHeader"></th>
					<div>
						<h4>Forms (PhD students only):</h4>
					</div>
				</tr>
				
                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
					<div class="collapse">
						<br/>
						<button id="collapse-2">Click here to collapse/display the next tabbed section. </button>
						<br/>
					</div>
                </tr>

                <tr class="myTableRow">
					<td class="myTableRowHeader"></td>
					<div class="tabbed-section" id="list2-tabs">
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
                	</div> <!-- end tabbedSection-->
                </tr>

                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
                	<div>
                    	<h4>Notes</h4>
                	</div>
                </tr>
				
                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
                	<div>
                    	<br/>
						<button class="collapse" id="collapse-3">Click here to collapse/display the next tabbed section. </button>
						<br/>
                	</div>
                </tr>

                <tr class="myTableRow"> 
					<td class="myTableRowHeader"></td> 
					<div class="tabbedSection" id="list3-tabs"> 
						<ul> 
							<li><a href="#list-3-tabs-1">Student Notes</a></li>
							<li><a href="#list-3-tabs-2">Tab #2</a></li>
							<li><a href="#list-3-tabs-3">Tab #3</a></li>
						 </ul> 
						 <div id="list-3-tabs-1"> 
							 <p>The Student Notes section</p>
							 <p>This is the area to create, view and edit notes about students.</p>
						</div>
						<div id="list-3-tabs-2"> 
							<p>Tab #2</p>
						</div>
						<div id="list-3-tabs-3">
							<p>Tab #3</p>
						</div>
					</div> <!--end tabbedSection-->
				</tr>

                <tr class="myTableRow">
					<th class="myTableRowHeader"></th>
					<div> 
						<h4>Qualifying Exams (PhD students only):</h4> 
					</div> 
				</tr>

                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
                <div>
                    <br/><button class="collapse" id="collapse-4">Click here to collapse/display the next tabbed section. </button><br/>
                </div>
                </tr>


                <tr class="myTableRow">
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


	<!--main content end-->
	</section>
</section>	
	
	<?php
		include('include.php');	
	?>

	<!--script for this page-->

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
	$(function() {
		$("#collapse-1")
		.bind('click', function(event) {
			alert('Clicked!!');
		});
	});
</script> 