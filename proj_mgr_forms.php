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
	?>﻿<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="1">';
  echo '<input type="hidden" name="end_Q_num" value="6">';
?>

<H1>Page 3 Data Entry</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		I want to start by collecting some background information.
	</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` --><?php 
	$n=0; 	$n++; 
	
	$arr_opts[] = 'AFRICAN AMERICAN';
	$arr_opts[] = 'HISPANIC AMERICAN';
	$arr_opts[] =  'EUROPEAN AMERICAN';
	$arr_opts[] =  'ASIAN AMERICAN';
	$arr_opts[] =  'NATIVE AMERICAN';
?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL>
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your Race/Ethnicity? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
	echo gen_option(++$key, 'radio','Q'. $n .'_radio', 'OTHER',  '&nbsp;&nbsp;'. gen_form_input( 'text', 'Q'. $n .'_Other', '') )
?>

	</DIV>
<!-- #2	~,~`~,~`~,~` --><?php $n++;
	unset($arr_opts);
	
	$arr_opts[] = 'LESS THAN HIGH SCHOOL';
	$arr_opts[] = 'SOME HIGH SCHOOL';
	$arr_opts[] =  'HIGH SCHOOL DIPLOMA / GED';
	$arr_opts[] =  'SOME COLLEGE OR TRADE SCHOOL';
	$arr_opts[] =  'ASSOCIATE DEGREE';
	$arr_opts[] =  'B.A./B.S. DEGREE';
	$arr_opts[] =  'MASTER’S DEGREE';
	$arr_opts[] =  'DOCTORAL DEGREE';

 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your highest level of education achieved? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php
		foreach ($arr_opts as $key => $value)
		{
			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
		}
		 echo gen_option(9,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q2_Other', '') );  ?>
	</DIV>
<!-- #3	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q3_radio', 'YES', '');
		echo gen_option(2, 'radio', 'Q3_radio', 'NO', ' <SPAN class="direction">[SKIP TO #5]</SPAN>');
	?>
	</DIV>
<!-- #4	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF YES, what degree and in what area? </P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q4_radio', 'ASSOCIATES DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_1_text', ''));
		echo gen_option(2, 'radio', 'Q4_radio', 'B.A./B.S. DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_2_text', ''));
		echo gen_option(3, 'radio', 'Q4_radio', 'MASTER’S DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_3_text', ''));
		echo gen_option(4, 'radio', 'Q4_radio', 'DOCTORAL DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_4_text', ''));
		
	?>
	</DIV>
<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How long have you been working as a Project Manager for an early childhood program?<SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option('', 'text', 'Q5_text', '', '<SPAN class="annotation"> <FONT color="red"> (Calculate Months)</FONT></SPAN>' );
	?>
	</DIV>
<!-- #6	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How many hours a week do you spend working on Pre-K related activities outside of the normal program hours? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<P CLASS="Option" STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 150%">
		<INPUT type="text" name="Q6_text"/><FONT color="red"> (Hours)</FONT></SPAN>
	</P>
	</DIV>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>﻿<?php
/***
 * Created on 28-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="7">';
  echo '<input type="hidden" name="end_Q_num" value="8">';
  ?>

<H1> Page 4 Data Entry</H1>
	
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in"><U><B>Program Implementation </B></U></P>
<!-- ~,~`~,~`~,~` -->

	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Now, I want to ask you some more specific questions to get your expectations and opinions of
		the Pre-K Incentive Program on your students.
	</P><P CLASS="spoken" STYLE="margin-bottom: 0in">
		Please think back to
		the beginning of the school year as you respond to these questions.</P>
	</P>
	
<!-- #7	~,~`~,~`~,~` --><?php $n=7; $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
		<OL start="<?php echo $n ; ?>">
			<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ academic development? <SPAN class="direction">[PAUSE]</SPAN></P>
		</OL>
		<?php
		echo gen_option( 1, 'radio', 'Q7_radio', 'YES'); 
		echo gen_option(2, 'radio', 'Q7_radio', 'NO');
		?>
	</DIV>
<!-- #8	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ social development? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php
		echo gen_option( 1, 'radio', 'Q8_radio', 'YES'); 
		echo gen_option(2, 'radio', 'Q8_radio', 'NO');
		?>
	</DIV>
<!-- ~,~`~,~`~,~` -->
<?php
		echo gen_form_submit('Submit');
		echo '</FORM>';
		require_once('temp_footer.php');
?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="9">';
  echo '<input type="hidden" name="end_Q_num" value="17">';
?>

<H1>Page 5 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please
		rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		Least Important, 2, Somewhat Important, 3, Important and 4, Most
		Important: <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
	
		$arrQs[9] = '9.  Understanding and using oral speech (Language)';
		$arrQs[10] = '10.  Getting along with other children (Social)';
		$arrQs[11] = '11.  Getting along with adults (Social)';
		$arrQs[12] = '12.  Taking care of his/her own self care needs (Self-care)';
		$arrQs[13] = '13.  Using small and large arm and leg muscles (Motor)';
		$arrQs[14] = '14.  Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[15] = '15. Printing his/her name (Pre-academic)';
		$arrQs[16] = '16.  Problem solving skills';
		
		$arrScale = array( '1<BR />Least<BR />Important', '2<BR />Somewhat<BR />Important', '3<BR />Important<BR />', '4<BR />Most<BR />Important');
		 
		
		for ($i = 9; $i <= 16; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q9-16">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>
<!-- #17	~,~`~,~`~,~` -->
	<DIV class="qb" name="Q17">
	<OL start="17">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you have any
		prior experience with the Pre-K Incentive Program curriculum before
		the beginning of the school year? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q17_radio', 'YES', '');
		echo gen_option(2, 'radio', 'Q17_radio', 'NO', '');
	?>
	</DIV>

	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="18">';
  echo '<input type="hidden" name="end_Q_num" value="22">';
?>

	<H1>Page 6 Data Entry</H1>
	
<?php 
#18	~,~`~,~`~,~`

	$n=18; 
	$q = 'What led to your choice of the curriculum being used in this Pre-K Incentive Program 
			(Creative Curriculum or High/Scope)?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q18_radio', 'ALREADY IN USE', '') .
			gen_option( 2, 'radio', 'Q18_radio', 'RECOMMENDED', '(if so by whom?) ' . gen_form_input('text', 'Q18_RECOMMENDED_text', '')) .
			gen_option( 3, 'radio', 'Q18_radio', 'RESEARCHED THE CURRICULUM', '') .
			gen_option( 4, 'radio', 'Q18_radio', 'OTHER', ' ' . gen_form_input('text', 'Q18_other', ''))
			;
	echo gen_question($n, $q, $opts);

 #19	~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q19_radio', 'YES', '<SPAN class="direction">[IF YES, #19 SAY ADDITIONAL]</SPAN>') .
			gen_option( 2, 'radio', 'Q19_radio', 'NO', '<SPAN class="direction">[IF NO, #19 SAY ANY]</SPAN>') 
			;
	echo gen_question($n, $q, $opts);
	
#20 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	$opts =  gen_option( 1, 'radio', 'Q20_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q20_radio', 'NO', '') 
			;
	echo gen_question($n, $q, $opts);
	
#21 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'In your opinion, would you say that the District of Columbia Public Schools (DCPS)' .
			' collaborated well with Early Childhood Education Administration (ECEA)? ' .
			' Would you say there was a:';
			
	$opts =  gen_option( 1, 'radio', 'Q21_radio', 'Very strong collaboration', '') .
			gen_option( 2, 'radio', 'Q21_radio', 'Somewhat strong collaboration', '') . 
			gen_option( 3, 'radio', 'Q21_radio', 'Weak collaboration', '') .
			gen_option( 4, 'radio', 'Q21_radio', 'No collaboration', '') 
			;
	echo gen_question($n, $q, $opts);
	
#22 ~,~`~,~`~,~`
	$n++;
	
	$q = 'Do you have any recommendations for improvements to the administrative structure ' .
			'of the Pre-K Incentive Program? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q22_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q22_radio', 'NO', '')
			;
	$opts .= gen_plain_question('IF YES, what are your top 2 recommendations?');
	
	$opts.= '<TEXTAREA name="Q22_textarea" cols="80" rows="20"></TEXTAREA>';
	
	echo gen_question($n, $q, $opts);
	
	?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="23">';
  echo '<input type="hidden" name="end_Q_num" value="33">';
?>

	<H1>Page 7 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	At this time, I want to
	get your level of agreement or disagreement with the following
	statements.  For each statement, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[23] = '23.  The teacher instructed the students well while utilizing the curriculum.';
		$arrQs[24] = '24.  The teacher assistant instructed the students well while utilizing the curriculum.  ';
		$arrQs[25] = '25.  The teacher communicated well with parents.';
		$arrQs[26] = '26.  The teacher provided useful feedback to you regarding the Pre-K program.';
		$arrQs[27] = '27.  There were positive interactions between the teacher and the students in the Pre-K Incentive Program.';
		$arrQs[28] = '28.  There were positive interactions between the teacher assistant and the students with in the Pre-KIncentive Program.';
		$arrQs[29] = '29.  The Pre-K program\'s training and technical assistance component was helpful.';
		$arrQs[30] = '30.  The Pre-K program\'s comprehensive services component was helpful.';
		$arrQs[31] = '31.	 The students received nutritious meals throughout the year.';
		$arrQs[32] = '32.  The class size was appropriate.';

		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 23; $i <= 32; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q23-32">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

#33	~,~`~,~`~,~`

	$n=33; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	$opts =  gen_option( 1, 'checkbox', 'Q33_checkbox_1', 'WRITTEN REPORTS', '') .
			gen_option( 2, 'checkbox', 'Q33_checkbox_2', 'TELEPHONE CALLS', '') .
			gen_option( 3, 'checkbox', 'Q33_checkbox_3', 'FACE-TO-FACE MEETINGS', '') .
			gen_option( 4, 'checkbox', 'Q33_checkbox_4', 'OTHER', ' ' . gen_form_input('text', 'Q33_other', '' ) . '<SPAN class="annotation"> <FONT color="red">Seperate with pipe char ( Shft + \)</FONT></SPAN>') .
			gen_option( 5, 'checkbox', 'Q33_checkbox_5', 'NOT AT ALL', '') 
			;
	echo gen_question($n, $q, $opts);

?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="34">';
  echo '<input type="hidden" name="end_Q_num" value="38">';
?>

	<H1>Page 8 Data Entry</H1>

<?php

#34	~,~`~,~`~,~`

	$n=34; 
	$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction">' .
			'CIRCLE ALL THAT APPLY</SPAN><BR /><SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';

			
	$opts =  gen_option( 1, 'checkbox', 'Q34_checkbox_1', 'ATTENDING PRE-K INCENTIVE CONFERENCES FOR PARENTS', '') .
			gen_option( 2, 'checkbox', 'Q34_checkbox_2', 'VOLUNTEERING IN THE CLASSROOM', '') .
			gen_option( 3, 'checkbox', 'Q34_checkbox_3', 'PARTICIPATING ON THE PARENT ADVISORY BOARD', '') .
			gen_option( 4, 'checkbox', 'Q34_checkbox_4', 'ATTENDING FIELD TRIPS', '') .
			gen_option( 5, 'checkbox', 'Q34_checkbox_5', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO YOU', '') .
			gen_option( 6, 'checkbox', 'Q34_checkbox_6', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO THE TEACHER', '') .
			gen_option( 7, 'checkbox', 'Q34_checkbox_7', 'OTHER', ' ' . gen_form_input('text', 'Q34_other', ''))
			;

	echo gen_question($n, $q, $opts);


#35 -37	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	How satified/disatisfied were you with parental involvement in the:
</P>
<?php

		$arrQs[35] = '35.  Beginning of the school year.';
		$arrQs[36] = '36.  Middle of the school year.  ';
		$arrQs[37] = '37.  End of the school year.';
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 35; $i <= 37; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q35-37">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

#38	~,~`~,~`~,~`

	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';

	   $opts =  gen_option( 1, 'radio', 'Q38_radio', 'VERY DISSATISFIED', '') .
			gen_option( 2, 'radio', 'Q38_radio', 'DISSATISFIED', '') .
			gen_option( 3, 'radio', 'Q38_radio', 'SATISFIED', '') .
			gen_option( 4, 'radio', 'Q38_radio', 'VERY SATISFIED', '') 
			;

	echo gen_question($n, $q, $opts);

?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="39">';
  echo '<input type="hidden" name="end_Q_num" value="47">';
  ?>
<H1>Page 9 Verify Entries</H1>

</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` -->

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	In this section, I want to ask you about the progress you feel that your students made in the Pre-K program. Using the response of option 1,
	No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
	<br><br>
	Overall, how much progress do you feel the students in your Pre-K program made in the following areas:
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[39] = '39.  Understanding and using oral speech (Language)';
		$arrQs[40] = '40.  Getting along with other children (social)';
		$arrQs[41] = '41.  Getting along with adults (social)';
		$arrQs[42] = '42.  Taking care of his/her own needs (Self-care)';
		$arrQs[43] = '43.  Using small and large arm and legs muscles (Motor)';
		$arrQs[44] = '44.  Recognizing colors and alphabets (Pre-academic)';
		$arrQs[45] = '45.  Printing his/her name (Pre-academic)';
		$arrQs[46] = '46.  Problem solving skills';
		$arrQs[47] = '47.	 Your students\' learning progress as a result of this program.';
		

		$arrScale = array( '1<BR />No<BR />progress', '2<BR />Little<BR />progress', '3<BR />Some<BR />progress', '4<BR />A lot of<BR />progress');
		 
		
		for ($i = 39; $i <= 47; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q39-47">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="48">';
  echo '<input type="hidden" name="end_Q_num" value="53">';
?>

	<H1>Page 10 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[48] = '48.  You have seen positive personality changes in your students since the ' .
				'beginning of the program (excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[49] = '49.  Your students express their feelings more since the beginning of the program.';
		$arrQs[50] = '50.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[51] = '51.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[52] = '52.  Overall, you are satisfied with the Pre-K Incentive Program.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 48; $i <= 52; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q48-52">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


#53	~,~`~,~`~,~`

	$n=53; 
	$q = 'At the close of the school year, which statement best reflects your opinion about ' .
			'your expectations of the Pre-K Incentive Program? 	<SPAN class="direction">' .
			'[HAND INTERVIEWEE THE LIST] </SPAN>';
			
	   $opts =  gen_option( 1, 'radio', 'Q53_radio', 'The program exceeded my expectations', '') .
			gen_option( 2, 'radio', 'Q53_radio', 'The program met my expectations', '') .
			gen_option( 3, 'radio', 'Q53_radio', 'The program did not meet my expectations', '<br><br>Please explain:<br>' . gen_form_input('textarea', 'Q53_other', '')) ;
	
echo gen_question($n, $q, $opts);

?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="54">';
  echo '<input type="hidden" name="end_Q_num" value="61">';
?>

	<H1>Page 11 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[54] = '54. Teaching Methods';
		$arrQs[55] = '55. Classroom Size';
		$arrQs[56] = '56. Staff';
		$arrQs[57] = '57. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[58] = '58. Training and Technical Assistance';
		$arrQs[59] = '59. Site Location';
		$arrQs[60] = '60. Transportation for Children';
		$arrQs[61] = '61. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 54; $i <= 61; $i++)
		{
				foreach ($arrScale as $field)
				{
						$field = str_replace('<BR />', ' ', $field);
						
						if ($toggle)
						{
							$arrRow[] = gen_form_input('checkbox_blank', 'Q' . $i . '_NONE', 'NONE');
//							$arrRow[] = gen_form_input('checkbox', 'Q' . $i . '_NONE', $field);
							$toggle = false;
						} else
						{
							$arrRow[] = gen_form_input('textarea_small', 'Q' . $i . '_textarea', '');
							$toggle = true;
						} 
				}
				
				array_unshift($arrRow, $arrQs[$i]);
				
				$arrTable[] = $arrRow;
				unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q54-61">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="62">';
  echo '<input type="hidden" name="end_Q_num" value="64">';
?>

	<H1>Page 12 Data Entry</H1>

<?php

#62	~,~`~,~`~,~`

	$n=62;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

			
	$opts =  gen_form_input( 'textarea', 'Q62_textarea', '');

	echo gen_question($n, $q, $opts);

#	~,~`~,~`~,~`

?>

<p>THANK PROJECT MANAGER FOR HIS/HER TIME AND PARTICIPATION. </p>

<DIV STYLE="width:90%; text-align:left; border:thin solid;">
<p>&nbsp;</p>
&nbsp;INTERVIEWER, PLEASE COMPLETE:

<?php

#63	~,~`~,~`~,~`

	$n=63; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
			
	   $opts =  gen_option( 1, 'radio', 'Q63_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q63_radio', 'No', '<br><br>If yes, please describe:<br>' . gen_form_input('textarea', 'Q63_other', '')) ;
	
echo gen_question($n, $q, $opts);


#64	~,~`~,~`~,~`

	unset($n);
	$n=64; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q64_text', '', '') 
			;
	echo gen_question($n, $q, $opts);

?>
<p>&nbsp;	</p>
</DIV>
<p>&nbsp;	</p>
<p>HAVE INTERVIEWEE FILL OUT THE DISBURSEMENT FORM AND GIVE HIM/HER THE MONEY ORDER.</p>
<p>&nbsp;	</p>


	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="65">';
  echo '<input type="hidden" name="end_Q_num" value="69">';
?>

	<H1>Page 13 Data Entry</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#65	~,~`~,~`~,~`

	$n=65; 
	$q = 'How cooperative was the interviewee?';			
	$opts =  gen_option( '', 'text', 'Q65_text', '', '') 
			;
	echo gen_question($n, $q, $opts);



#66	~,~`~,~`~,~`

	$n=66; 
	$q = 'Were there any interruptions during the interview?';
			
	   $opts =  gen_option( 1, 'radio', 'Q66_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q66_radio', 'No', '<br><br>If yes, in what way did the interruptions impact the interview?<br>' . gen_form_input('textarea', 'Q66_other', '')) ;
	
echo gen_question($n, $q, $opts);


#67	~,~`~,~`~,~`

	$n=67; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	   $opts =  gen_option( 1, 'radio', 'Q67_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q67_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q67_other', '')) ;
	
echo gen_question($n, $q, $opts);


#68	~,~`~,~`~,~`

	$n=68; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	   $opts =  gen_option( 1, 'radio', 'Q68_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q68_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q68_other', '')) ;
	
echo gen_question($n, $q, $opts);


#69	~,~`~,~`~,~`

	$n=69;

	$q = 'Any general comments about the administration of the survey';

			
	$opts =  gen_form_input( 'textarea', 'Q69_textarea', '');

	echo gen_question($n, $q, $opts);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



