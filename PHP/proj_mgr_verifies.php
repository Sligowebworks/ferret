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
?>



<H1>Page 2 Data Entry</H1>
<br><br>

<?php

#101	~,~`~,~`~,~`

	unset($n);
	$n=101; 
	$q = '<b>PMC</b>#
			<SPAN class="direction"></SPAN>';
	echo gen_plain_question($q);
			
	echo gen_verification('Q101_', $state);

#107	~,~`~,~`~,~`

	unset($n);
	$n=107; 
	$q = '<b>School Code</b>
			<SPAN class="direction"></SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q107_', $state);

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
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q102_', $state);

#103	~,~`~,~`~,~`

	unset($n);
	$n=103; 
	$q = 'Interviewer\'s Initials:
			<SPAN class="direction"></SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q103_', $state);

#104	~,~`~,~`~,~`

	unset($n);
	$n=104; 
	$q = 'Interview Start Time:
			<SPAN class="direction"></SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q104_', $state);

	
#105	~,~`~,~`~,~`

	$n=105; 
	$q = '';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q105_', $state);
	
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
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q106_', $state);


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

	<?php
	echo gen_form_submit('Commit');
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 27-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require_once("app/application.php");
  
  require_once("temp_header.php");

 
 echo gen_form_tag($state);
?>
<H1>Page 3 Verify Entries</H1>

	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		I want to start by collecting some background information.
	</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` --><?php $n = 0; $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL>
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your Race/Ethnicity? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q1_', $state);?>
	</DIV>
<!-- #2	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your highest level of education achieved? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q2_', $state);?>
	</DIV>
<!-- #3	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q3_', $state);?>	
	</DIV>
<!-- #4	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF YES, what degree and in what area? </P>
	</OL>
	<?php echo gen_verification('Q4_', $state);?>
	</DIV>
<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How long have you been working as a Project Manager for an early childhood program?<SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php echo gen_verification('Q5_', $state);?>
</DIV>
<!-- #6	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How many hours a week do you spend working on Pre-K related activities outside of the normal program hours? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q6_', $state);?>
</DIV>
	
<?php
		echo gen_form_submit('Commit');
	echo '</FORM>';

	require_once('temp_footer.php');
?><?php
/***
 * Created on 28-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
?>

<H1> Page 4 Verify Entries</H1>
	
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
		<?php echo gen_verification('Q7_', $state);?>
	</DIV>
<!-- #8	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ social development? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php echo gen_verification('Q8_', $state);?>
	</DIV>
<!-- ~,~`~,~`~,~` -->
<?php
echo gen_form_submit('Commit');
echo '</FORM>';
require_once('temp_footer.php');
?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

<H1>Page 5 Verify Entries</H1>

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
		
		
		for ($i = 9 ; $i < 16+1; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		
?>
<!-- #17	~,~`~,~`~,~` -->
	<DIV class="qb" name="Q17">
	<OL start="17">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you have any
		prior experience with the Pre-K Incentive Program curriculum before
		the beginning of the school year? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_verification('Q17_', $state);
	?>
	</DIV>

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 6 Verify Entries</H1>
	
	<!-- #18	~,~`~,~`~,~` -->
<?php 
	$n=18; 
	$q = 'What led to your choice of the curriculum being used in this Pre-K Incentive Program ' .
			'(Creative Curriculum or High/Scope)?' .
			' <SPAN class="direction">[PAUSE]</SPAN></P>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q18_', $state);

 #19	~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q19_', $state);
	
#20 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	echo gen_plain_question($q);
			
	echo gen_verification('Q20_', $state);
	
#21 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'In your opinion, would you say that the District of Columbia Public Schools (DCPS)' .
			' collaborated well with Early Childhood Education Administration (ECEA)? ' .
			' Would you say there was a:';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q21_', $state);
	
#22 ~,~`~,~`~,~`
	$n++;
	
	$q = 'Do you have any recommendations for improvements to the administrative structure ' .
			'of the Pre-K Incentive Program? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q22_', $state);
	
	?>
	<?php
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?><?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
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
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		
#33	~,~`~,~`~,~`

	$n=33; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q33_', $state);

?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
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
  
?>

	<H1>Page 8 Data Entry</H1>
<?php
#34	~,~`~,~`~,~`

		$n=34; 
		$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction"><BR />' .
				'CIRCLE ALL THAT APPLY</SPAN><BR /> <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';
	
		echo gen_plain_question($q);
				
		echo gen_verification('Q34_', $state);

#35	~,~`~,~`~,~`
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
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

			
			
#38	~,~`~,~`~,~`

	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year? ';

	   echo gen_plain_question($q);
			
	echo gen_verification('Q38_', $state);


?>
	<?php #**** BEGIN FOOTER ****
echo gen_form_save_session();
	
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
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
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
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
  
?>

	<H1>Page 10 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[48] = '48.  You have seen positive personality changes in your students since the ' .
				'beginning of the program excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[49] = '49.  Your students express their feelings more since the beginning of the program.';
		$arrQs[50] = '50.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[51] = '51.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[52] = '52.  Overall, you are satisfied with the Pre-K Incentive Program.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 48; $i <= 52; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

		
#53	~,~`~,~`~,~`

	$n=53; 
	$q = 'At the close of the school year, which statement best reflects your opinion about ' .
			'your expectations of the Pre-K Incentive Program? 	<SPAN class="direction">' .
			'[HAND INTERVIEWEE THE LIST] </SPAN>';

	echo gen_plain_question($q);
			
	echo gen_verification('Q53_', $state);

# FIX
//	$q = 'Please explain';	
//	echo gen_plain_question($q);
//			
//	echo gen_verification('Q_', $state);
	
?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
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
  
?>

	<H1>Page 11 Verify Entries</H1>
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
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
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
  
?>

	<H1>Page 12 Verify Entries</H1>

<?php

#62	~,~`~,~`~,~`

	$n=62;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

	echo gen_plain_question($q);
			
	echo gen_verification('Q62_', $state);


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
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q63_', $state);


#64	~,~`~,~`~,~`

	unset($n);
	$n=64; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';

	echo gen_plain_question($q);
			
	echo gen_verification('Q64_', $state);


?>
<p>&nbsp;	</p>
</DIV>
<p>&nbsp;	</p>
<p>HAVE INTERVIEWEE FILL OUT THE DISBURSEMENT FORM AND GIVE HIM/HER THE MONEY ORDER.</p>
<p>&nbsp;	</p>


	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
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
  
?>

	<H1>Page 13 Verify Entries</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#65	~,~`~,~`~,~`

	$n=65; 
	$q = 'How cooperative was the interviewee?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q65_', $state);


#66	~,~`~,~`~,~`

	$n=66; 
	$q = 'Were there any interruptions during the interview?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q66_', $state);


#67	~,~`~,~`~,~`

	$n=67; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q67_', $state);


#68	~,~`~,~`~,~`

	$n=68; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q68_', $state);


#69	~,~`~,~`~,~`

	$n=69;

	$q = 'Any general comments about the administration of the survey';

	echo gen_plain_question($q);
			
	echo gen_verification('Q69_', $state);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



