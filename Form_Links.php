<?php
include('header.php');
?>
<section id="main-content">
	<section class="wrapper"> 
	<!--main content start-->
   	<!-- INCLUDE THE CODE HERE -->
	
	
<h1>GRADUATE SCHOOL FORMS</h1>

<h2>Students</h2>

<a>Advanced Standing Request</a></br>
<a>Announcement of Oral Defense</a></br>
<a>Dissertation Committee Change</a></br>
<a>Dissertation Proposal Transmittal</a></br>
<a>Dissertation/Thesis Processing Fee</a></br>
<h3>Examination Report for Doctoral Students</h3>
<ul>
	<li><a>Preliminary Exam</a></li>
	<li><a>Final Exam</a></li>
</ul>
<h3>Extension of Time Request</h3>
<ul>
	<li><a>Doctoral Degrees</a></li>
	<li><a>Master's Degrees</a></li>
</ul>
<h3>Full-Time Status Request for DOMESTIC Students</h3>
	 <ul><li><i>Inquire</i></li></ul>
<h3>Full-Time Status Request for INTERNATIONAL Students</h3>
<ul>
	<li><a>Confirmation of Full-Time Equivalency</a> (complete only if ISSS requests it)</li>
	<li><a>Reduced Course Load Request</a></li>
</ul>

<h3>Graduation Application</h3>
<table style="width:100%">
	<tr> 
		<td>Deadlines for Academic Year 2013-2014
			Fall 2013/January 2014 graduation:  October 15, 2013
			Spring 2014/May 2014 graduation:  February 15, 2014
			Summer 2014/August 2014 graduation:  June 1, 2014
The graduation application is available using Self Service Banner (SSB). To access the application, go to TUportal and select Self Service Banner (SSB). When in SSB, select Student » Student Records » Apply to Graduate. Upon accessing the graduation application, verify that the correct degree and program are indicated. If the wrong degree or program is listed, STOP. Contact your advisor to submit a Graduate Change of Program Work Flow. When the Registrar confirms via email that the Change of Program has been completed, return to the SSB graduation application and submit.
Please note that individual schools and colleges may have additional filing requirements. Check with your Dean's Office to ensure that all graduation requirements have been satisfied.
Attention Graduates: The dissertation/thesis processing fee is additionally required. This $50 fee must be paid through the Bursar and applied to FOAPAL 100000 24800 4981 04; it cannot be paid online. A Treasurer's Receipt must then be presented to the school/college as proof of payment of the dissertation/thesis processing fee.
</td>
 </tr>
</table></br></br>


<a>Leave of Absence Request</a></br>
<a>Other Employment Request</a></br>
<a>Permission to Reproduce Dissertation/Thesis</a></br>
<a>Petition by Non-Graduates to Participate in Commencement Ceremonies</a></br>
<a>Petition for Withdrawal with Approved Excuse</a></br>
<ul>
	<li><a>Advisor Protocol</a></li>
	<li><a>Advisor Email Template</a></li>
	<li><a>Filing Instructions</a></li>
</ul>
<a>Petition to the Graduate School or Graduate Board Student Appeals Committee</a></br>

<h3>Program of Study</h3>
<ul><li><a>Doctoral Students</a><li>
	<ul><li><a>Master's Students</a></li></ul>
<a>Request to Exceed 9 Semester Hours of Graduate Coursework for Certificate Program</a></br>
<a>Request to Take an Undergraduate Course for Graduate Credit</a></br>
<a>Student Application for Doctoral Dissertation/Terminal Master's Project Completion Grant</a></br>
<a>Transfer of Graduate Credit Request</a></br>

School/College/Department
Banner Course Forms

<a>Instructions</a>
<a>Course Inventory Update</a>
<a>Course Termination</a>
<a>Exception Request</a></br>
<a>Departmental Nomination for Doctoral Dissertation/Terminal Master's Project Completion Grant</a></br>

Fellowship Nomination

<a>Presidential Fellows</a>
<a>University and Future Faculty Fellows</a>
<a>University and Future Faculty Fellows <i>[w/Waiver of Departmental Level Funding Support]</i></a>
<a>Recommendation for Graduate Faculty Status</a></br>
 
 
Faculty
<a>Agreement for Issuing an Incomplete Grade</a></br>

Graduation Recommendation
<a>Doctoral Candidates</a>
<a>Master's Candidates</a>
<a>Nomination for Service on Doctoral Committee</a></br>

 
UNDERGRADUATE FORMS
 
ADMINISTRATIVE
 
Transfer Course Evaluation Form – Word document
Course Update Inventory Form – word document
Graduate Student Course Enrollment Form – word document
Undergrad Independent Study Form – word document
Undergrad Incomplete - http://www.temple.edu/vpus/documents/UniversityIncompleteForm.5.25.06.pdf
<a>Withdrawal with Approved Excuse - http://www.temple.edu/vpus/documents/withdrawal_approved_excuse_forms.pdf
<a>Course Termination Form - http://www.temple.edu/vpus/documents/course_termination_form.pdf
<a>Request to Establish, Terminate, or Change an Academic Program - http://www.temple.edu/provost/aaair/documents/academic-programs/program-change-request-form.pdf

INTERNATIONAL
<a>CPT Form - http://www.temple.edu/isss/documents/curricular_practical_training.pdf
OPT Form -
Social Security Form – word document
<a>Reduce Courseload Request - http://www.temple.edu/isss/home/documents/reducedcourseload.pdf
IS&T Co-op registration
CS Co-op registration
 
ADMISSIONS
Recommendation for Graduate Admission
Intent to Enroll
Exception Request
ABMD Application
 
GRAD EXAM FORMS
           	Announcement of Dissertation Defense
           	Dissertation Proposal Elevaction to Candidacy
           	Exam Registration
           	Final Exam Report
           	Prelim Exam Report
           	Master’s Graduation Recommendation
           	PhD Graduation Recommendation
           	Request to Amend Graduation Recommendation

TA/RA
<a>Tuition Remission Form - https://prd-challenger.erp.temple.edu/EmployeeForms/Forms/Bursar-banner/gradTuitionRemissin.pdf
           	Requisition Form – Excel document
Application -  word document

	 	<!--main content end-->
	 	</section>
	 </section>

	 	<!-- HIDE INPUT TO SAVE STUDENT ID -->
	     	<input type="hidden" id="inputStudent_Id" value="<?php if(isset($_GET['Student_Id'])){ echo $_GET['Student_Id'];}?>">
	
	 	<?php	include('include.php');	?>

	 	<!--script for this page-->
	 	<script src="assets/js/Wizard_Functions/dars.js"></script>