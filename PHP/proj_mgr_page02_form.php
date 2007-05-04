<?php
/*
 * Created on 27-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require_once("app/application.php");
  
  require_once("temp_header.php");

 
 echo gen_form_tag($state);
 echo '<input type="hidden" name="start_Q_num" value="101">';
 echo '<input type="hidden" name="end_Q_num" value="107">';
?>



<H1>Page 2 Data Entry</H1>
<br><br>

<?php

#101	~,~`~,~`~,~`

	unset($n);
	$n=101; 
	$q = '<b>PMC</b>#
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '<b>', 'text', 'Q101_text', '', '</b>') 
			;
	echo gen_question($n, $q, $opts);

#107~,~`~,~`~,~`

	unset($n);
	$n=107; 
	$q = '<b>School Code</b>
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '<b>', 'text', 'Q107_text', '', '</b>') 
			;
	echo gen_question($n, $q, $opts);

?>


<BR />
<BR />
<BR />

<H2> District of Columbia Pre-Kindergarten Incentive Program</H2>
<H2> Project Manager Interview Schedule </H2>

<DIV STYLE="width:70%; text-align:left; border:thin solid;">
<!-- <DIV STYLE="text-align:left; border:thin solid;">  -->

<?php

#102	~,~`~,~`~,~`

	unset($n);
	$n=102; 
	$q = 'Date of Interview:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q102_text', '', '') 
			;
	echo gen_question($n, $q, $opts);


#103	~,~`~,~`~,~`

	unset($n);
	$n=103; 
	$q = 'Interviewer\'s Initials:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q103_text', '', '') 
			;
	echo gen_question($n, $q, $opts);

#104	~,~`~,~`~,~`

	unset($n);
	$n=104; 
	$q = 'Interview Start Time:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q104_text', '', '') 
			;
	echo gen_question($n, $q, $opts);

	
#105	~,~`~,~`~,~`

	$n=105; 
	$q = '';
			
	$opts =  gen_option( '', 'radio', 'Q105_radio', 'In Person', '') .
			gen_option( '', 'radio', 'Q105_radio', 'Telephone', '')
			;
	echo gen_question($n, $q, $opts);

	
?>
<p>&nbsp;</p>	

</DIV>

<!-- </td></tr>
</table>
	<P>&nbsp;</P>
 -->
<BR />

<BR />

	<P CLASS="direction" STYLE="margin-bottom: 0in">
		READ THE FOLLOWING STATEMENT TO PROJECT MANAGER
	</P>
	<P CLASS="spoken" 
STYLE="margin-bottom: 0in">
<!-- 		Hello!  My name is 	 -->
		
<?php

#106	~,~`~,~`~,~`

	unset($n);
	$n=106; 
	$q = 'Hello! My name is:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q106_text', '', '.') 
			;

	echo gen_question($n, $q, $opts);


?>
		
		I am part of the evaluation team of the Pre-K Incentive Program. Thank you for taking the opportunity to meet with me.  The purpose of this meeting is to gather your perceptions about the Pre-K Incentive Program.  This information will be used to make improvements in the program to better meet the needs of students and their families.  The information that you provide will be held in the strictest confidence.     
	</P>
	<P CLASS="western" STYLE="margin-bottom: 0in">
		<BR>
	</P>
	
	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Before getting started,
		I need to obtain your informed consent to conduct this interview.
	</P>
	
	<P CLASS="v_spacer" STYLE="margin-bottom: 0in">
		<BR>
	</P>
	
	<P CLASS="direction" STYLE="margin-bottom: 0in">
		HAND THE CONSENT TO
		INTERVIEWEE AND SLOWLY READ CONSENT FORM.  AFTER THE INTERVIEWEE
		SIGNS AND DATES THE CONSENT FORM, BEGIN INTERVIEW.</P>


<BR />

<BR />

<INPUT type="submit" value="Submit">
	</P>
	
	<?php
	require_once('temp_footer.php');
	?>