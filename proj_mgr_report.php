<?php
  require_once('app/application.php');
  require_once('temp_header.php');
  require_once('app/report_functions.php');

  $rs = new RecordSet();
  $rs->SetDataConnection($state['db']);
 
 echo gen_form_tag($state);
?>
<H1>Page 3</H1>

<H2> District of Columbia Pre-Kindergarten Incentive Program</H2>
<H2> Project Manager Interview Schedule </H2>

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
	<?php //echo gen_aggregate('Q1_', $state);
$sql = 
"SELECT 
	IF(Q1_other != '', Q1_other, Q1_radio) as `Race`
,	count(Q1_radio) as `Count`
,	count(Q1_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Race";

	print_query($sql, $rs);
	?>
	</DIV>
<!-- #2	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your highest level of education achieved? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php // echo gen_verification('Q2_', $state);
$sql =
"SELECT 
	IF(Q2_other != '', trim(Q2_other), trim(Q2_radio)) as `Education Level`
,	count(Q2_radio) as `Count`
,	count(Q2_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Education Level`
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	?>
	</DIV>
<!-- #3	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php //echo gen_verification('Q3_', $state);
	$sql =
"SELECT 
	Q3_radio as ''
,	count(Q3_radio) as `Count`
,	count(Q3_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	?>	
	</DIV>
<!-- #4	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF YES, what degree and in what area? </P>
	</OL>
	<?php //echo gen_verification('Q4_', $state);
$sql =
"SELECT 
	trim(Q4_radio) as `Degree`
,	CASE trim(Q4_radio) 
		WHEN  'ASSOCIATES DEGREE' THEN Q4_1_text
		WHEN 'B.A./B.S. DEGREE' THEN Q4_2_text
		WHEN 'MASTER’S DEGREE' THEN Q4_3_text
		WHEN 'DOCTORAL DEGREE' THEN Q4_4_text
		ELSE ''
	END AS `Area`
,	count(Q4_radio) as `Count`
,	count(Q4_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
WHERE Q3_radio = 'YES'
GROUP BY `Degree`, Area
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	?>
	</DIV>
<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How long have you been working as a Project Manager for an early childhood program?<SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php //echo gen_verification('Q5_', $state);
$sql =
"SELECT 
	AVG(Q5_text)/12 as `Average Years`
,	AVG(Q5_text) as `Average`
,	MIN(Q5_text) as `Min.`
,	MAX(Q5_text) as `Max.`
FROM proj_mgr_concatenated";
	
	print_query($sql, $rs);
	?>
</DIV>
<!-- #6	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How many hours a week do you spend working on Pre-K related activities outside of the normal program hours? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php //echo gen_verification('Q6_', $state);
	$sql =
"SELECT 
	AVG(Q6_text) as `Average`
,	MIN(Q6_text) as `Min.`
,	MAX(Q6_text) as `Max.`
FROM ta_concatenated";
	
	print_query($sql, $rs);
	?>
</DIV>
	

<H1> Page 4</H1>
	
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
		<?php //echo gen_verification('Q7_', $state);
		$sql =
"SELECT 
	Q7_radio as ''
,	count(Q7_radio) as `Count`
,	count(Q7_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	?>
	</DIV>
<!-- #8	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ social development? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php //echo gen_verification('Q8_', $state);
		$sql =
"SELECT 
	Q8_radio as ''
,	count(Q8_radio) as `Count`
,	count(Q8_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	?>
	</DIV>
<!-- ~,~`~,~`~,~` -->

<H1>Page 5</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please
		rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		Least Important, 2, Somewhat Important, 3, Important and 4, Most
		Important: <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
/*
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
		}*/
		$sql =
"SELECT 
	'9.'
,	'Understanding and using oral speech (Language)' as''
,	Q9_radio
,	count(Q9_radio) as `Count`
,	count(Q9_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q9_radio
UNION
SELECT
	'10.'
,	'Getting along with other children (Social)' as ''
,	Q10_radio
,	count(Q10_radio) as `Count`
,	count(Q10_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q10_radio
UNION
SELECT
	'11.'
,	'Getting along with adults (Social)' as ''
,	Q11_radio
,	count(Q11_radio) as `Count`
,	count(Q11_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q11_radio
UNION
SELECT
	'12.'
,	'Taking care of his/her own self care needs (Self-care)' as ''
,	Q12_radio
,	count(Q12_radio) as `Count`
,	count(Q12_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q12_radio
UNION
SELECT
	'13.'
,	'Using small and large arm and leg muscles (Motor)' as''
,	Q13_radio
,	count(Q13_radio) as `Count`
,	count(Q13_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q13_radio
UNION
SELECT
	'14.'
,	'Recognizing colors and alphabets (Pre-academic)' as ''
,	Q14_radio
,	count(Q14_radio) as `Count`
,	count(Q14_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q14_radio
UNION
SELECT
	'15.'
,	'Printing his/her name (Pre-academic)' as ''
,	Q15_radio
,	count(Q15_radio) as `Count`
,	count(Q15_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q15_radio
UNION
SELECT
	'16.'
,	'Problem solving skills' as ''
,	Q16_radio
,	count(Q16_radio) as `Count`
,	count(Q16_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q16_radio";
	
	print_query($sql, $rs);
	
?>
<!-- #17	~,~`~,~`~,~` -->
	<DIV class="qb" name="Q17">
	<OL start="17">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you have any
		prior experience with the Pre-K Incentive Program curriculum before
		the beginning of the school year? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		//echo gen_verification('Q17_', $state);
		
		$sql = "SELECT 
	Q17_radio as ''
,	count(Q17_radio) as `Count`
,	count(Q17_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";

	print_query($sql, $rs);
	?>
	</DIV>

	
	<H1>Page 6 </H1>
	
	<!-- #18	~,~`~,~`~,~` -->
<?php 
	$n=18; 
	$q = 'What led to your choice of the curriculum being used in this Pre-K Incentive Program ' .
			'(Creative Curriculum or High/Scope)?' .
			' <SPAN class="direction">[PAUSE]</SPAN></P>';
			
	echo gen_plain_question($q);
			
	//echo gen_verification('Q18_', $state);
	$sql = "SELECT 
	Q18_radio as `Reason`
,	CASE trim(Q18_radio) 
		WHEN  'ALREADY IN USE' THEN ''
		WHEN 'RECOMMENDED' THEN Q18_RECOMMENDED_text
		WHEN 'RESEARCHED THE CURRICULUM' THEN ''
		WHEN 'OTHER' THEN Q18_Other
		ELSE ''
	END AS ``
,	count(Q18_radio) as `Count`
,	count(Q18_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Reason, ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	

 #19	~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	//echo gen_verification('Q19_', $state);
	$sql = "SELECT 
	Q19_radio as ''
,	count(Q19_radio) as `Count`
,	count(Q19_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	
	
#20 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	echo gen_plain_question($q);
			
	//echo gen_verification('Q20_', $state);
	$sql = "SELECT 
	Q20_radio as ''
,	count(Q20_radio) as `Count`
,	count(Q20_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	
	
#21 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'In your opinion, would you say that the District of Columbia Public Schools (DCPS)' .
			' collaborated well with Early Childhood Education Administration (ECEA)? ' .
			' Would you say there was a:';
			
	echo gen_plain_question($q);
			
	//echo gen_verification('Q21_', $state);
	$sql = "SELECT 
	Q21_radio as ''
,	count(Q21_radio) as `Count`
,	count(Q21_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";
	
	print_query($sql, $rs);
	
	
#22 ~,~`~,~`~,~`
	$n++;
	
	$q = 'Do you have any recommendations for improvements to the administrative structure ' .
			'of the Pre-K Incentive Program? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	//echo gen_verification('Q22_', $state);
	$sql = "SELECT 
	Q22_radio as ''
,	count(Q22_radio) as `Count`
,	count(Q22_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";

	print_query($sql, $rs);
	
	$q = 'IF YES, what are your top 2 recommendations?';
	echo gen_plain_question($q);

	$sql = 
"SELECT Q22_textarea as ''
FROM proj_mgr_concatenated
ORDER BY cast(Q102_text as date)";
	
	print_query($sql, $rs);
	?>
	
	<H1>Page 7 </H1>

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
	
	/*	$arrQs[23] = '23.  The teacher instructed the students well while utilizing the curriculum.';
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
		}*/
		
		$sql = 
		"
SELECT 
	'23.'
,	'The teacher instructed the students well while utilizing the curriculum.' as''
,	Q23_radio as `scale`
,	count(Q23_radio) as `Count`
,	count(Q23_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  `scale`
UNION
SELECT
	'24.'
,	'The teacher assistant instructed the students well while utilizing the curriculum.' as ''
,	Q24_radio
,	count(Q24_radio) as `Count`
,	count(Q24_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q24_radio
UNION
SELECT
	'25.'
,	'The teacher communicated well with parents.' as ''
,	Q25_radio
,	count(Q25_radio) as `Count`
,	count(Q25_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q25_radio
UNION
SELECT
	'26.'
,	'The teacher provided useful feedback to you regarding the Pre-K program.' as ''
,	Q26_radio
,	count(Q26_radio) as `Count`
,	count(Q26_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q26_radio
UNION
SELECT
	'27.'
,	'There were positive interactions between the teacher and the students in the Pre-K Incentive Program.' as''
,	Q27_radio
,	count(Q27_radio) as `Count`
,	count(Q27_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q27_radio
UNION
SELECT
	'28.'
,	'There were positive interactions between the teacher assistant and the students with in the Pre-KIncentive Program.' as ''
,	Q28_radio
,	count(Q28_radio) as `Count`
,	count(Q28_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q28_radio
UNION
SELECT
	'29.'
,	'The Pre-K program\'s training and technical assistance component was helpful.' as ''
,	Q29_radio
,	count(Q29_radio) as `Count`
,	count(Q29_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q29_radio
UNION
SELECT
	'30.'
,	'The Pre-K program\'s comprehensive services component was helpful.' as ''
,	Q30_radio
,	count(Q30_radio) as `Count`
,	count(Q30_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q30_radio
UNION
SELECT
	'31.'
,	'The students received nutritious meals throughout the year.' as ''
,	Q31_radio
,	count(Q31_radio) as `Count`
,	count(Q31_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q31_radio
UNION
SELECT
	'32.'
,	'The class size was appropriate.' as ''
,	Q32_radio
,	count(Q32_radio) as `Count`
,	count(Q32_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q32_radio";

	print_query($sql, $rs);
		
#33	~,~`~,~`~,~`

	$n=33; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	echo gen_plain_question($q);
			
	//echo gen_verification('Q33_', $state);
	
	$sql = 
	"SELECT 
	trim(Q33_checkbox_1) as `Communication Means`
,	count(Q33_checkbox_1) as `Count`
,	count(Q33_checkbox_1)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	trim(Q33_checkbox_2) as `Communication Means`
,	count(Q33_checkbox_2) as `Count`
,	count(Q33_checkbox_2)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	trim(Q33_checkbox_3) as `Communication Means`
,	count(Q33_checkbox_3) as `Count`
,	count(Q33_checkbox_3)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	CONCAT(trim(Q33_checkbox_4) , ': ', Q33_other) as `Communication Means`
,	count(Q33_checkbox_4) as `Count`
,	count(Q33_checkbox_4)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`
";

	print_query($sql, $rs);

?>
	

	<H1>Page 8</H1>
<?php
#34	~,~`~,~`~,~`

		$n=34; 
		$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction"><BR />' .
				'CIRCLE ALL THAT APPLY</SPAN><BR /> <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';
	
		echo gen_plain_question($q);
				
		//echo gen_verification('Q34_', $state);
		$sql = 
		"SELECT 
	trim(Q34_checkbox_1) as `Involvement`
,	count(Q34_checkbox_1) as `Count`
,	count(Q34_checkbox_1)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_2) as `Involvement`
,	count(Q34_checkbox_2) as `Count`
,	count(Q34_checkbox_2)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_3) as `Involvement`
,	count(Q34_checkbox_3) as `Count`
,	count(Q34_checkbox_3)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_4) as `Involvement`
,	count(Q34_checkbox_4) as `Count`
,	count(Q34_checkbox_4)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_5) as `Involvement`
,	count(Q34_checkbox_5) as `Count`
,	count(Q34_checkbox_5)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_6) as `Involvement`
,	count(Q34_checkbox_6) as `Count`
,	count(Q34_checkbox_6)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	CONCAT(trim(Q34_checkbox_7) , ': ', Q34_other) as `Involvement`
,	count(Q34_checkbox_7) as `Count`
,	count(Q34_checkbox_7)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`
";
		print_query($sql, $rs);

#35	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	How satified/disatisfied were you with parental involvement in the:
</P>
<?php

		$arrQs[35] = 'Beginning of the school year.';
		$arrQs[36] = 'Middle of the school year.  ';
		$arrQs[37] = 'End of the school year.';
		
		$sql = gen_scalarQ_rpt($arrQs, 35, 37, 15);
		
/*
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 35; $i <= 37; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}*/
		
		
		print_query($sql, $rs);

			
			
#38	~,~`~,~`~,~`

	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year? ';

	   //echo gen_plain_question($q);
			
	//echo gen_verification('Q38_', $state);
	$sql = gen_scalarQ_rpt(array(38 => $q), 38, 38, 15);
	
	print_query($sql, $rs);

?>

<H1>Page 9</H1>

</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #39	~,~`~,~`~,~` -->
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	In this section, I want to ask you about the progress you feel that your students made in the Pre-K program. Using the response of option 1,
	No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[39] = 'Understanding and using oral speech (Language)';
		$arrQs[40] = 'Getting along with other children (social)';
		$arrQs[41] = 'Getting along with adults (social)';
		$arrQs[42] = 'Taking care of his/her own needs (Self-care)';
		$arrQs[43] = 'Using small and large arm and legs muscles (Motor)';
		$arrQs[44] = 'Recognizing colors and alphabets (Pre-academic)';
		$arrQs[45] = 'Printing his/her name (Pre-academic)';
		$arrQs[46] = 'Problem solving skills';
		$arrQs[47] = 'Your students\\\' learning progress as a result of this program.';
		
		$sql = gen_scalarQ_rpt($arrQs, 39, 47, 15);
		
		//$arrScale = array( '1<BR />No<BR />progress', '2<BR />Little<BR />progress', '3<BR />Some<BR />progress', '4<BR />A lot of<BR />progress');
		 
		/*
		for ($i = 39; $i <= 47; $i++)
				
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}*/
		print_query($sql, $rs);
?>


	<H1>Page 10 </H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[48] = 'You have seen positive personality changes in your students since the ' .
				'beginning of the program excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[49] = 'Your students express their feelings more since the beginning of the program.';
		$arrQs[50] = 'You feel your students\\\' individual needs were met in your Pre-K Program.';
		$arrQs[51] = 'You feel your students are prepared to enter Kindergarten.';
		$arrQs[52] = 'Overall, you are satisfied with the Pre-K Incentive Program.';
		
		$sql = gen_scalarQ_rpt($arrQs, 48, 52, 15);
				
		//$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		/*
		for ($i = 48; $i <= 52; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
*/
	print_query($sql, $rs);
		
#53	~,~`~,~`~,~`

	$n=53; 
	$q = 'At the close of the school year, which statement best reflects your opinion about ' .
			'your expectations of the Pre-K Incentive Program? 	<SPAN class="direction">' .
			'[HAND INTERVIEWEE THE LIST] </SPAN>';

	echo gen_plain_question($q);
			
	//echo gen_verification('Q53_', $state);
	
	$sql = 
	"SELECT 
	Q53_radio as ``
,	count(Q53_radio) as `Count`
,	count(Q53_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC";

	print_query($sql, $rs);
	
	$q = "Please explain: ";
	echo gen_plain_question($q);
	
	$sql = 	"SELECT Q53_other  as ``FROM proj_mgr_concatenated";
	
	print_query($sql, $rs);

?>
	<H1>Page 11 </H1>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>

<?php 

		$arrQs[54] = 'Teaching Methods';
		$arrQs[55] = 'Classroom Size';
		$arrQs[56] = 'Staff';
		$arrQs[57] = 'Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[58] = 'Training and Technical Assistance';
		$arrQs[59] = 'Site Location';
		$arrQs[60] = 'Transportation for Children';
		$arrQs[61] = 'Other';
		
		$sql = gen_Recomendations_table_WthNA($arrQs, 54, 61);
		
		print_query($sql, $rs);
		
		/*$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 54; $i <= 61; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}*/

?>	

	<H1>Page 12</H1>

<?php

#62	~,~`~,~`~,~`

	$n=62;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

	echo gen_plain_question($q);
			
	//echo gen_verification('Q62_', $state);
	
	$sql = 'SELECT Q62_textarea FROM proj_mgr_concatenated';
	print_query($sql, $rs);

#	~,~`~,~`~,~`
?>
<?php
//		echo gen_form_submit('Commit');
	echo '</FORM>';

	require_once('temp_footer.php');

/*
 * Created on 24-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  ?>