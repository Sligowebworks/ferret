<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 2 Data Entry</H1>
	
<br><br><br><br>

<H2></center>District of Columbia Public Schools Pre-Kindergarten Incentive Program</H2>
<H2>Teacher Interview Schedule</H2>

<br><br><br><br>
READ THE FOLLOWING STATEMENT TO TEACHER
 <br><br><br><br>
	
		
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Hello!  My name is 
	____________________________________. I am part of the evaluation team for the Pre-Kindergarten Incentive program.
<br><br>
Thank you for taking the opportunity to meet with me.  The purpose of this meeting is to gather your perceptions about the Pre-K Incentive Program. This information will be used to make improvements in the program to better meet the needs of students and their families. The information that you provide will be held in the strictest confidence.
<br><br>
Before getting started, I need to obtain your informed consent to conduct this interview.
<br><br>
<SPAN class="direction">[HAND THE CONSENT FORM TO INTERVIEWEE AND SLOWLY READ THE CONSENT FORM. AFTER THE INTERVIEWEE SIGNS AND DATES THE CONSENT FORM, BEGIN INTERVIEW]</SPAN>
	</P>
<br><br><br><br>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>