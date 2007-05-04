<?php
  require_once('app/application.php');
  require_once('temp_header.php');
  require_once('app/report_functions.php');
  
  $rs = new RecordSet();
  $rs->SetDataConnection($state['db']);
  
  define('TABLE' , 'ta_concatenated');
  define('TOTAL', 16);
  
/* 
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 2 </H1>
<?php
#101	~,~`~,~`~,~`
	$n=101; 
	$q = '<b>TAC</b>#
	echo gen_plain_question($q);
#107	~,~`~,~`~,~`
	$n=107; 
	$q = '<b>School Code</b>
	echo gen_plain_question($q);
*/
?>
	<BR /><BR /><BR />
	<H2> District of Columbia Pre-Kindergarten Incentive Program</H2>
	<H2> Teacher Assistant Interview Schedule </H2>
<?php
/*
#102	~,~`~,~`~,~`
	$n=102; 
	$q = 'Date of Interview:
	echo gen_plain_question($q);
#103	~,~`~,~`~,~`
	$n=103; 
	$q = 'Interviewer\'s Initials:
	echo gen_plain_question($q);
#104	~,~`~,~`~,~`
	$n=104; 
	$q = 'Interview Start Time:
	echo gen_plain_question($q);
#105	~,~`~,~`~,~`
	$n=105; 
	$q = '';
	echo gen_plain_question($q);
#106	~,~`~,~`~,~`
	$n=106; 
	$q = 'Hello! My name is:
	echo gen_plain_question($q);
*/
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 3</H1>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->
<?php
#1	~,~`~,~`~,~`
	$n=1; 
	$q = 'What is your Race/Ethnicity?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	IF(Q1_other != '', Q1_other, Q1_radio) as `Race`
,	count(Q1_radio) as `Count`
,	count(Q1_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY Race";
	print_query($sql, $rs);
#2	~,~`~,~`~,~`
	$n=2; 
	$q = 'What is your highest level of education achieved?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	IF(Q2_other != '', trim(Q2_other), trim(Q2_radio)) as `Education Level`
,	count(Q2_radio) as `Count`
,	count(Q2_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Education Level`
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
#3	~,~`~,~`~,~`
	$n=3; 
	$q = 'Are you currently working toward another degree?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	Q3_radio as ''
,	count(Q3_radio) as `Count`
,	count(Q3_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY ``
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
#4	~,~`~,~`~,~`
	$n=4; 
	$q = 'If yes, what degree and in what area?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	trim(Q4_radio) as `Degree`
,	CASE trim(Q4_radio) 
		WHEN  'ASSOCIATES DEGREE' THEN Q4_other_1
		WHEN 'B.A./B.S. DEGREE' THEN Q4_other_2
		WHEN 'MASTER’S DEGREE' THEN Q4_other_3
		WHEN 'DOCTORAL DEGREE' THEN Q4_other_4
		ELSE ''
	END AS `Area`
,	count(Q4_radio) as `Count`
,	count(Q4_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
WHERE Q3_radio = 'YES'
GROUP BY `Degree`, Area
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
#5	~,~`~,~`~,~`
	$n=5; 
	$q = 'How long have you been working as a Pre-K teacher assistant?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	AVG(Q5_text)/12 as `Average Years`
,	AVG(Q5_text) as `Average`
,	MIN(Q5_text) as `Min.`
,	MAX(Q5_text) as `Max.`
FROM " . TABLE . "";
	print_query($sql, $rs);
#6	~,~`~,~`~,~`
	$n=6; 
	$q = 'How long have you been at this particular location?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	AVG(Q6_text) as `Average`
,	MIN(Q6_text) as `Min.`
,	MAX(Q6_text) as `Max.`
FROM " . TABLE . "";
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 4</H1>
<?php
#7	~,~`~,~`~,~`
	$n=7; 
	$q = 'What other teaching experiences have you had?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	trim(Q7_checkbox_1) as `Teaching Experience`
,	count(Q7_checkbox_1) as `Count`
,	count(Q7_checkbox_1)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_2) as `Teaching Experience`
,	count(Q7_checkbox_2) as `Count`
,	count(Q7_checkbox_2)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_3) as `Teaching Experience`
,	count(Q7_checkbox_3) as `Count`
,	count(Q7_checkbox_3)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_4) as `Teaching Experience`
,	count(Q7_checkbox_4) as `Count`
,	count(Q7_checkbox_4)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_5) as `Teaching Experience`
,	count(Q7_checkbox_5) as `Count`
,	count(Q7_checkbox_5)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_6) as `Teaching Experience`
,	count(Q7_checkbox_6) as `Count`
,	count(Q7_checkbox_6)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`

UNION
SELECT 
	CONCAT(trim(Q7_checkbox_7) , ': ', Q7_other) as `Teaching Experience`
,	count(Q7_checkbox_7) as `Count`
,	count(Q7_checkbox_7)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `Teaching Experience`";
	print_query($sql, $rs);
#8	~,~`~,~`~,~`
	$n=8; 
	$q = 'How many hours a week do you spend working on Pre-K program activities outside of the Pre-K program hours?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	AVG(Q8_text) as `Average`
,	MIN(Q8_text) as `Min.`
,	MAX(Q8_text) as `Max.`
FROM " . TABLE . "";
	print_query($sql, $rs);
?>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Program Implementation </B></U></P>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		Now, I want to ask you some more specific questions to get your opinion and expectations of the Pre-K Incentive Program on your students. 
	</P>
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		Please think back to the beginning of the school year as you respond to these questions.
	</P>
<?php
#9	~,~`~,~`~,~`
	$n=9; 
	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' academic development?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	Q9_radio as ''
,	count(Q9_radio) as `Count`
,	count(Q9_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY ``
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
#10	~,~`~,~`~,~`
	$n=10; 
	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' social development?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	Q10_radio as ''
,	count(Q10_radio) as `Count`
,	count(Q10_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY ``
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 5</H1>
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please
		rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		Least Important, 2, Somewhat Important, 3, Important and 4, Most
		Important:
	</P>
<?php
# 11-18	`~,~`~,~`~,~`
	$arrQs[11] = 'Understanding and using oral speech (Language)';
	$arrQs[12] = 'Getting along with other children (Social)';
	$arrQs[13] = 'Getting along with adults (Social)';
	$arrQs[14] = 'Taking care of his/her own self care needs (Self-care)';
	$arrQs[15] = 'Using small and large arm and leg muscles (Motor)';
	$arrQs[16] = 'Recognizing colors and alphabets  (Pre-academic)';
	$arrQs[17] = 'Printing his/her name (Pre-academic)';
	$arrQs[18] = 'Problem solving skills';
	
	$sql =  gen_scalarQ_rpt($arrQs, 11, 18, TOTAL, TABLE);
	print_query($sql, $rs);
#19	~,~`~,~`~,~`
	$n=19;
	$q = 'Have you had any prior experience with implementing the curriculum?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	Q19_radio as ''
,	count(Q19_radio) as `Count`
,	count(Q19_radio)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY ``
ORDER BY `Freq.` DESC";
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 6</H1>
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		What was your experience (ease, ability to implement) with implementing the curriculum in:
	</P>
<?php 
# 20-22 ,~`~,~`~,~`
	$arrQs[20] = 'The beginning of the year';
	$arrQs[21] = 'The middle of the year';
	$arrQs[22] = 'The end of the year';
	
	$sql =  gen_Recomendations_table($arrQs, 20, 22, TABLE);
	print_query($sql, $rs);
#23	~,~`~,~`~,~`
	$n=23; 
	$q = 'Did you receive any training on the curriculum in the beginning of the year?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(23, TOTAL, TABLE);
	print_query($sql, $rs);
#24	~,~`~,~`~,~`
	$n=24; 
	$q = 'Did you receive <b>additional/any</b> training throughout the year?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(24, TOTAL, TABLE);
	print_query($sql, $rs);
#25 ~,~`~,~`~,~`
	$n=25;
	$q = 'If you needed any assistance with the curriculum during the school year, who did you speak to for assistance?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q25_textarea as `` FROM " . TABLE . "";
	print_query($sql, $rs);
#26	~,~`~,~`~,~`
	$n=26; 
	$q = 'Was the assistance helpful?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(26, TOTAL, TABLE);
	print_query($sql, $rs);
#27 ~,~`~,~`~,~` 
	$n=27; 
	$q = 'How appropriate was the curriculum for your student population?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(27, TOTAL, TABLE);
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 7</H1>

	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		Now, I want to get your level of satisfaction or dissatisfaction with the following statements.  For each statement, please indicate whether you were 1, Very Dissatisfied, 2, Dissatisfied, 3, Satisfied, or 4, Very Satisfied.
	</P>
<?php
# 28-29 ~`~,~`~,~`
	$arrQs[28] = 'The parent-teacher assistant relationship in the Pre-K Incentive Program';
	$arrQs[29] = 'The curriculum';
	
	 $sql = gen_scalarQ_rpt($arrQs, 28, 29, TOTAL, TABLE);
	 print_query($sql, $rs);
#30	~,~`~,~`~,~`
	$n=30; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
		$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	trim(Q30_checkbox_1) as `channel`
,	count(Q30_checkbox_1) as `Count`
,	count(Q30_checkbox_1)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_2) as `channel`
,	count(Q30_checkbox_2) as `Count`
,	count(Q30_checkbox_2)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_3) as `channel`
,	count(Q30_checkbox_3) as `Count`
,	count(Q30_checkbox_3)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `channel`

UNION
SELECT 
	CONCAT(trim(Q30_checkbox_4), ': ', trim(Q30_other)) as `channel`
,	count(Q30_checkbox_4) as `Count`
,	count(Q30_checkbox_4)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_5) as `channel`
,	count(Q30_checkbox_5) as `Count`
,	count(Q30_checkbox_5)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `channel`";
	print_query($sql, $rs);
#31	~,~`~,~`~,~`
	$n=31; 
	$q = 'What type of involvement did the parents have with the Pre-K class?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	'Attending Pre-K Incentive conferences for parents' as `involvement`
,	count(Q31_checkbox_1) as `Count`
,	count(Q31_checkbox_1)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	'Volunteering in the classroom' as `involvement`
,	count(Q31_checkbox_2) as `Count`
,	count(Q31_checkbox_2)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	'Participating on the Parent Advisory Board' as `involvement`
,	count(Q31_checkbox_3) as `Count`
,	count(Q31_checkbox_3)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	'Attending field trips' as `involvement`
,	count(Q31_checkbox_4) as `Count`
,	count(Q31_checkbox_4)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	'Providing feedback about the Pre-K Incentive Program to project manager' as `involvement`
,	count(Q31_checkbox_5) as `Count`
,	count(Q31_checkbox_5)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	'Providing feedback about the Pre-K Incentive Program to you' as `involvement`
,	count(Q31_checkbox_6) as `Count`
,	count(Q31_checkbox_6)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`

UNION
SELECT 
	CONCAT(trim(Q31_checkbox_7), ': ', trim(Q31_other)) as `involvement`
,	count(Q31_checkbox_7) as `Count`
,	count(Q31_checkbox_7)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `involvement`
";
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 8</H1>
<?php
#33 -35	~,~`~,~`~,~`
	$n=32;  //32
	$q = 'How satified/disatisfied were you with parental involvement in the:';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"";
	print_query($sql, $rs);

	$arrQs[33] = 'Beginning of the school year.';
	$arrQs[34] = 'Middle of the school year.  ';
	$arrQs[35] = 'End of the school year.';
	$sql =  gen_scalarQ_rpt($arrQs, 33, 35, TOTAL, TABLE);
	print_query($sql, $rs);
#36 ~,~`~,~`~,~` 
	$n=36; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(36, TOTAL,  TABLE);
	print_query($sql, $rs);
#37	~,~`~,~`~,~`
	$n=37; 
	$q = 'Which of the following services did the Training and Technical Assistance team provide? Please select all that apply.';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	'Implementation of curriculum and early learning standards' as `services`
,	count(Q37_checkbox_1) as `Count`
,	count(Q37_checkbox_1)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `services`

UNION
SELECT 
	'Technical assistance for teachers and project managers' as `services`
,	count(Q37_checkbox_2) as `Count`
,	count(Q37_checkbox_2)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `services`

UNION
SELECT 
	'Parent/Community involvement' as `services`
,	count(Q37_checkbox_3) as `Count`
,	count(Q37_checkbox_3)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `services`

UNION
SELECT 
	'Conference training workshops' as `services`
,	count(Q37_checkbox_4) as `Count`
,	count(Q37_checkbox_4)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `services`

UNION
SELECT 
	CONCAT(trim(Q37_checkbox_5), ': ', trim(Q37_other)) as `services`
,	count(Q37_checkbox_5) as `Count`
,	count(Q37_checkbox_5)/" . TOTAL . " as `Freq.`
FROM " . TABLE . "
GROUP BY `services`";
	print_query($sql, $rs);
#38 ~,~`~,~`~,~` 
	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(38, TOTAL, TABLE);
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 9</H1>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->
<?php
#39	~,~`~,~`~,~`
	$n=39; 
	$q = 'Were any of your students referred to the behavioral health team?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(39, TOTAL, TABLE);
	print_query($sql, $rs);
#40	~,~`~,~`~,~`
	$n=40; 
	$q = 'What services did they receive? For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	Service
,	Scale
,	count(Scale) as `Count`
,	count(Scale)/" . TOTAL . " as `Freq.`
FROM
(
SELECT
	TRIM(LCASE(Q40_text_1)) as `Service`
,	Q40_radio_1 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q40_text_2)) as `Service`
,	Q40_radio_2 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q40_text_3)) as `Service`
,	Q40_radio_3 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q40_text_4)) as `Service`
,	Q40_radio_4 as `Scale`
FROM " . TABLE . "
) a
GROUP BY `Service`, `Scale`
ORDER BY `Service`, `Scale` DESC";
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 10</H1>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		Now, I want to ask you about the progress you feel that your students made in the Pre-K program. Using the response of option 1,
		No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
		<BR /><BR />
		Overall, how much progress do you feel the students in your Pre-K program made in the following areas:
	</P>
<?php
# 40-49 ~`~,~`~,~`
	$arrQs[41] = 'Understanding and using oral speech (Language)';
	$arrQs[42] = 'Getting along with other children (social)';
	$arrQs[43] = 'Getting along with other adults (social)';
	$arrQs[44] = 'Taking care of his/her own self-care needs (Self-care)';
	$arrQs[45] = 'Using small and large arm and legs muscles (Motor)';
	$arrQs[46] = 'Recognizing colors and alphabets (Pre-academic)';
	$arrQs[47] = 'Printing his/her name (Pre-academic)';
	$arrQs[48] = 'Problem solving skills';
	$arrQs[49] = 'Your students\\\' learning progress as a result of this program.';
	
	$sql = gen_scalarQ_rpt($arrQs, 41, 49, TOTAL, TABLE);
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 11</H1>
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		This time I would like to get your level of agreement or disagreement with the following statements. For each statement, please indicate whether you 1, Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	</P>
<?php
# 50-55 ~`~,~`~,~`
	$arrQs[50] = 'You have seen positive personality changes in your students since the ' .
				'beginning of the program (excited about school and learning, positive interactions among ' .
				'peers and adults).';
	$arrQs[51] = 'Your students express their feelings more since the beginning of the program.';
	$arrQs[52] = 'You feel your students\\\' individual needs were met in your Pre-K Program.';
	$arrQs[53] = 'You feel your students are prepared to enter Kindergarten.';
	$arrQs[54] = 'The class size was appropriate.';
	$arrQs[55] = 'The students received nutritious meals during the year.';
	
	$sql = gen_scalarQ_rpt($arrQs, 50, 55, TOTAL, TABLE);
	print_query($sql, $rs);
#56	~,~`~,~`~,~`
	$n=56; 
	$q = 'How many students do you have that are of limited English proficiency (English as Second Language Learners)?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = 
"SELECT 
	AVG(Q56_text) as `Average`
,	MIN(Q56_text) as `Min.`
,	MAX(Q56_text) as `Max.`
,	COUNT(Q56_text) as `Sum.`
FROM " . TABLE ;
	print_query($sql, $rs);
#57 ~,~`~,~`~,~` 
	$n=57; 
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(57, TOTAL, TABLE);
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 12</H1>
<?php
#58	~,~`~,~`~,~`
	$n++; 
	$q = 'At the close of the school year, which statement best reflects your opinion about your expectations of the Pre-K Incentive Program?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(58, TOTAL, TABLE);;
	print_query($sql, $rs);
	
	echo gen_plain_question('Please Explain');
	$sql = 'SELECT Q58_other  as `comments` FROM ' . TABLE;
	print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 13</H1>
	<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
		What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
	</P>
<?php 
# 59-67 ~`~,~`~,~`
	$arrQs[59] = 'Teaching Methods';
	$arrQs[60] = 'Classroom Size';
	$arrQs[61] = 'Staff';
	$arrQs[62] = 'Comprehensive Health Services (behavior and health screenings/ services)';
	$arrQs[63] = 'Training and Technical Assistance';
	$arrQs[64] = 'Meals';
	$arrQs[65] = 'Site Location';
	$arrQs[66] = 'Transportation for Children';
	$arrQs[67] = 'Other';
	
	 $sql = gen_Recomendations_table_WthNA($arrQs, 59, 67, TABLE);
	 print_query($sql, $rs);
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 14</H1>
<?php
#68	~,~`~,~`~,~`
	$n=68;
	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q68_textarea as `comments` FROM " . TABLE;
	print_query($sql, $rs);
?>
	<br><br>
	<SPAN class="direction">THANK TEACHER ASSISTANT FOR HIS/HER TIME AND PARTICIPATION.</SPAN>
	<br><br>
	<DIV STYLE="width:90%; text-align:left; border:thin solid;">
	<p>&nbsp;</p>
	&nbsp;INTERVIEWER, PLEASE COMPLETE:
<?php
#69	~,~`~,~`~,~`
	$n=69; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(69, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q69_other FROM " . TABLE;
#70	~,~`~,~`~,~`
/*	$n=70; 
	$q = 'Interview End Time:';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql =   "";
	print_query($sql, $rs);
*/
?>
	<P>HAVE INTERVIEWEE FILL OUT THE DISBURSEMENT FORM AND GIVE HIM/HER THE MONEY ORDER.</P>
<?php
# ~,~`~,~`~,~`~,~`
?>
	<H1>Page 15</H1>
	<P><STRONG>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</STRONG></P>
<?php
#71	~,~`~,~`~,~`
	$n=71; 
	$q = 'How cooperative was the interviewee? [Scale of 1-7]';			
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT AVG(Q71_text) as `Average`, MIN(Q71_text) as `Min.`, MAX(Q71_text) as `Max.` FROM " . TABLE;
	print_query($sql, $rs);
#72	~,~`~,~`~,~`
	$n++; 
	$q = 'Were there any interruptions during the interview?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(72, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q72_other as `comments` FROM " . TABLE;
	print_query($sql, $rs);
#73	~,~`~,~`~,~`
	$n++; 
	$q = 'Did the interviewee have difficulty with any questions?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(73, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q73_other as `comments` FROM " . TABLE;
	print_query($sql, $rs);
#74	~,~`~,~`~,~`
	$n++; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(74, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q74_other as `comments` FROM " . TABLE;
	print_query($sql, $rs);
#75	~,~`~,~`~,~`
	$n++;
	$q = 'Any general comments about the administration of the survey';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q75_textarea as `comments` FROM " . TABLE;
	print_query($sql, $rs);
#	~,~`~,~`~,~`
?>
<p>&nbsp;</p>
<?php 
#**** BEGIN FOOTER ****
  //echo gen_form_submit('Commit');
  //echo '</FORM>';
  require_once('temp_footer.php');
/*
 * Created on 05-Nov-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>