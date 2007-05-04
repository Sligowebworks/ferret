<?php
 require_once('app/application.php');
  require_once('temp_header.php');
  require_once('app/report_functions.php');
  
  $rs = new RecordSet();
  $rs->SetDataConnection($state['db']);
  
  define('TABLE' , 'guardian_concatenated');
  define('TOTAL', 110);
  #	~,~`~,~`~,~`
?>
<H2> District of Columbia Pre-Kindergarten Incentive Program</H2>
<H2> Parent/Guardian Interview Schedule </H2>
<H1>Page 3</H1>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->
<?php 
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
#2	~,~`~,~`~,~` -->
	$n=2; 
	$q = 'In what country were you born? ';			
		$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
		$sql = 	"SELECT Q2_text as `country` , count(ID) as `count` FROM " . TABLE . " GROUP BY `country`" ;
		print_query($sql, $rs);
#3	~,~`~,~`~,~` -->
	$n=3; 
	$q = 'How long have you been in the United States?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_count_n_freq('Q3_text', TOTAL, TABLE);
	print_query($sql, $rs);
#4	~,~`~,~`~,~` -->
	$n=4; 
	$q = 'How many adults are living in your household?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_avg_min_max('Q4_text', TABLE);
	print_query($sql, $rs);
#5	~,~`~,~`~,~` -->
	$n = 5;
	$q = 'Now, please tell me the age, gender, and relationship of the adults over 18 in your household:';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	
	//RELATIONSHIP
	
	$sql = "SELECT Relationship, COUNT(Relationship) as `count`, COUNT(Relationship)/(
SELECT count(*) FROM (
SELECT  Q5_text_relationship_1 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship` FROM " . TABLE . "
) sub_count

)
 as `Freq.`
FROM 
(
SELECT  Q5_text_relationship_1 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship` FROM " . TABLE . "
) a
GROUP BY Relationship";
	print_query($sql, $rs);
	
	// GENDER
	$sql = "SELECT Sex, COUNT(Sex) as `count`, COUNT(Sex)/(
SELECT count(*) FROM (
SELECT  Q5_radio_Gender_1 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_2 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_3 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_4 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_5 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_6 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_7 as `Sex` FROM " . TABLE . "
) sub_count

)
 as `Freq.`
FROM 
(
SELECT  Q5_radio_Gender_1 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_2 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_3 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_4 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_5 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_6 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_radio_Gender_7 as `Sex` FROM " . TABLE . "
) a
WHERE Sex IS NOT NULL
GROUP BY Sex
ORDER BY count DESC";
	print_query($sql, $rs);
	
//Gender of Interviewee

$sql = "SELECT 
Sex as `Sex of Interviewee`, 
COUNT(Relationship) as `count`, COUNT(Relationship)/(
SELECT count(*) FROM (
SELECT  Q5_text_relationship_1 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship` FROM " . TABLE . "
) sub_count
WHERE Relationship LIKE '%Self%' OR Relationship LIKE '%self%'
)
 as `Freq.`
FROM 
(
SELECT  Q5_text_relationship_1 as `Relationship`,  Q5_radio_Gender_1 as `Sex` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship`,  Q5_radio_Gender_2 as `Sex`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship`,  Q5_radio_Gender_3 as `Sex`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship`,  Q5_radio_Gender_4 as `Sex`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship`,  Q5_radio_Gender_5 as `Sex`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship`,  Q5_radio_Gender_6 as `Sex`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship`,  Q5_radio_Gender_7 as `Sex`  FROM " . TABLE . "
) a
WHERE Relationship LIKE '%Self%' OR Relationship LIKE '%self%'
GROUP BY Sex
ORDER BY count DESC
";
	print_query($sql, $rs);
	
	//AGE OF INTERVIEWEE
	
	$sql = "SELECT 
AVG(age) as `Avg. Age of Interviewee`, MIN(age) as `Min.`, MAX(age) as `Max.`
FROM 
(
SELECT  Q5_text_relationship_1 as `Relationship`,  Q5_text_age_1 as `age` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship`,  Q5_text_age_2 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship`,  Q5_text_age_3 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship`,  Q5_text_age_4 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship`,  Q5_text_age_5 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship`,  Q5_text_age_6 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship`,  Q5_text_age_7 as `age`  FROM " . TABLE . "
) a
WHERE (Relationship LIKE '%Self%' OR Relationship LIKE '%self%') AND age <> ''
";
	print_query($sql, $rs);
	
	//AGE OF Household
	$sql = "SELECT 
AVG(age) as `Avg. Age of Household Adults`, MIN(age) as `Min.`, MAX(age) as `Max.`
FROM 
(
SELECT  Q5_text_relationship_1 as `Relationship`,  Q5_text_age_1 as `age` FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship`,  Q5_text_age_2 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship`,  Q5_text_age_3 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship`,  Q5_text_age_4 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship`,  Q5_text_age_5 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship`,  Q5_text_age_6 as `age`  FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship`,  Q5_text_age_7 as `age`  FROM " . TABLE . "
) a
WHERE age <> ''";

	print_query($sql, $rs);
	
	$sql = "SELECT Relationship, COUNT(Relationship) as `count`, 
AVG(age) as `Avg. Age `, MIN(age) as `Min. Age`, MAX(age) as `Max. Age`
FROM 
(
SELECT  Q5_text_relationship_1 as `Relationship` , Q5_text_age_1 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_2 as `Relationship` , Q5_text_age_2 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_3 as `Relationship` , Q5_text_age_3 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_4 as `Relationship` , Q5_text_age_4 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_5 as `Relationship` , Q5_text_age_5 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_6 as `Relationship` , Q5_text_age_6 as `age`
FROM " . TABLE . "
UNION ALL
SELECT  Q5_text_relationship_7 as `Relationship` , Q5_text_age_7 as `age`
FROM " . TABLE . "
) a
WHERE Relationship <> ''
AND age <> ''
GROUP BY Relationship";

	print_query($sql, $rs);
#	~,~`~,~`~,~` -->
?>
<H1>Page 4</H1>
<?php
#6	~,~`~,~`~,~` --> 
	$n=6; 	

	$arr_opts[] = 'MARRIED';
	$arr_opts[] = 'WIDOWED';
	$arr_opts[] =  'SEPARATED';
	$arr_opts[] =  'DIVORCED';
	$arr_opts[] =  'SINGLE, LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'SINGLE, NOT LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'DIVORCED OR SEPARATED, LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'DIVORCED OR SEPARATED, NOT LIVING WITH A DOMESTIC PARTNER';
	
	$q = 'What is your marital status?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio($n, TOTAL, TABLE);
	print_query($sql, $rs);
#7	~,~`~,~`~,~` -->
	$n =7; 
	$arr_opts[] = 'You or';
	$arr_opts[] = 'Someone else';
	
?>
<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">7. Who spends the most time with your child? Would you say that is:</P>
	</OL>
</DIV>
    <?php
    $sql = gen_simple_radio($n, TOTAL, TABLE);
	print_query($sql, $rs);
#8	~,~`~,~`~,~` -->
	$n=8; 
	$q = 'Who is that someone else?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q8_text as `Person`, count(Q8_text) as `Count` FROM " . TABLE . " GROUP BY `Person` ORDER BY `Count` DESC";
	print_query($sql, $rs);
#9	~,~`~,~`~,~` -->
	$n = 9;
 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">9. What is your highest level of education achieved?</P>
	</OL>
	</DIV>
<?php
	$sql = "SELECT IF(Q9_radio = 'OTHER', CONCAT('OTHER: ', Q9_other), Q9_radio) as `Education`, count(ID) as `Count` FROM " . TABLE . " GROUP BY Education ORDER BY Count DESC";
	print_query($sql, $rs);
#10	~,~`~,~`~,~` -->
	 $n++;
	
	$arr_opts[] = 'Full-time (36 or more hours per week)';
	$arr_opts[] = 'Part-time(less than 36 hours per week)';
	$arr_opts[] = 'Unemployed';
	$arr_opts[] = 'Disabled';
	$arr_opts[] = 'Retired';
 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">10 . What is your current employment status?</P>
	</OL>
	</DIV>
<?php
	$sql = gen_simple_radio($n, TOTAL, TABLE);
	print_query($sql, $rs);
#11	~,~`~,~`~,~` -->
	$n=11; 
	$q = 'What is your job title?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_count_n_freq('Q11_text', TOTAL, TABLE);
	print_query($sql, $rs);
#12	~,~`~,~`~,~` -->
	$n=12; 
	$q = 'Who do you work for?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_count_n_freq('Q12_text', TOTAL, TABLE);
	print_query($sql, $rs);
#	~,~`~,~`~,~` -->
?>
<H1>Page 5</H1>
<?php
#13	~,~`~,~`~,~` --> 
	$n=13; 
?>
	<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">11. What is the household income range? </P>
	</OL>
	</DIV>
<?php
$sql = gen_count_n_freq('Q13_radio', TOTAL, TABLE);
	print_query($sql, $rs);
	
	$q = 'IF HOURLY WAGE IS GIVEN WRITE IT HERE:';
	echo gen_plain_question($q);
	$sql = gen_count_n_freq('Q13_text', TOTAL, TABLE);
	print_query($sql, $rs);
 #14	~,~`~,~`~,~` -->
	$n=14; 
?>
<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">14. What primary language do you speak at home?</P>
	</OL>
</DIV>
<?php 
	$sql = "SELECT IF(Q14_radio LIKE  'OTHER%', CONCAT('OTHER: ' , Q14_other), Q14_radio) as `Language`, COUNT(ID) as `Count` FROM " . TABLE . " GROUP BY `Language` ORDER BY `Count` DESC";
	echo print_query($sql, $rs);
#15	~,~`~,~`~,~` -->
$n=15; 
?>
<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">15. For each child under 18 living in your household, please tell me their age, whether they are male or female, and what type of school they attended this past school year:</P>
	</OL>
</DIV>
<?php
	$sql = 'SELECT a.School,  COUNT(a.ID) as `Count`, AVG(b.Age) as `Avg. Age`, AVG(`Household Count`) as `Avg. kids in household`
FROM 
	union_schools a
LEFT JOIN
	household_count b
on a.ID = b.ID
GROUP BY a.School
ORDER BY `Count` DESC;';

	echo gen_plain_question('By School: ');
	echo print_query($sql, $rs);
	
	$sql = 'SELECT a.School,  a.Gender, COUNT(a.ID) as `Count`, AVG(b.Age) as `Avg. Age`, AVG(`Household Count`) as `Avg. kids in household`
FROM 
	union_schools a
LEFT JOIN
	household_count b
on a.ID = b.ID
GROUP BY a.School, a.Gender
ORDER BY `Count` DESC, a.Gender;';
	echo gen_plain_question('By School and Gender: ');
	echo print_query($sql, $rs);
#	~,~`~,~`~,~` -->
?>
<H1>Page 6</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Now I am going to ask you some questions related to your child's/children's school attendance, in general, and their attendance with the Pre-K Incentive Program in particular. 
</P>
<?php
#16	~,~`~,~`~,~` --> 
	$n=16;  
	
	$arr_opts[] = 'YES';
	$arr_opts[] = 'NO';
	$arr_opts[] =  'N/A';
?>
<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">16. Are any of your other children in a Pre-K program in Washington, DC? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
</DIV>
<?php 
	$sql = gen_count_n_freq('Q16_radio', TOTAL, TABLE);
	print_query($sql, $rs);

#17	~,~`~,~`~,~` --> 
	$n = 17;
	unset($arr_opts);
	$arr_opts[] = 'No experience';
	$arr_opts[] = 'A little experience';
	$arr_opts[] =  'Some experience';
	$arr_opts[] =  'A lot of experience';
 ?>
<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">17. How much experience have you had with a Pre-K Program? 
	</OL>
</DIV>
<?php 
	$sql = gen_count_n_freq('Q17_radio', TOTAL, TABLE);
	print_query($sql, $rs);

#18	~,~`~,~`~,~` -->
	$n = 18; 
	$q = 'What previous childcare program(s) has your child attended?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT `Childcare Program`
,	count(`Childcare Program`) as `Count`
,	count(`Childcare Program`)/" . TOTAL . " as `Freq.`
 FROM 
(
SELECT 
	trim(IF(Q18_checkbox_1 = 'Community-based early le', 'Community-based', Q18_checkbox_1)) as `Childcare Program`
FROM " . TABLE . "
UNION ALL
SELECT 
	trim(IF(Q18_checkbox_2 = 'Home-based early learnin', 'Home-based', Q18_checkbox_2)) as ``
FROM " . TABLE . "
UNION ALL
SELECT 
	trim(Q18_checkbox_3) as ``
FROM " . TABLE . "
UNION ALL
SELECT 
	trim(CONCAT(Q18_checkbox_4, ': ', Q18_other)) as ``
FROM " . TABLE . "
UNION ALL
SELECT 
	trim(Q18_checkbox_5) as ``
FROM " . TABLE . "
)a
WHERE `Childcare Program` IS NOT NULL AND `Childcare Program` <> ''
GROUP BY `Childcare Program`";
	print_query($sql, $rs);
#19	~,~`~,~`~,~`
	$n=19; 
	$q = 'Where do you intend to enroll your child after completing the Pre-K program?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT IF(Q19_radio = 'Other', CONCAT(Q19_radio, ': ', Q19_other), Q19_radio) as `Future Enroll.`, count(ID) as `Count`, count(ID)/" . TOTAL . " as `Freq.` FROM " . TABLE . " GROUP BY `Future enroll.` ORDER BY `Count` DESC";
	print_query($sql, $rs);
#	~,~`~,~`~,~`
?>
<H1>Page 7</H1>
<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Program Implementation </B></U></P>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        Now, I want to ask you some more specific questions to get your expectations and opinions
        of the Pre-K Incentive Program on your child. Please think back to the beginning of the school year
        as you respond to the following questions.
        <br><br>
		Please rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		being Least Important, 2,being Somewhat Important, 3, being Important and 4, being Most
		Important.<br>
	</P>
<?php
	
		$arrQs[20] = 'Understanding and using oral speech (Language)';
		$arrQs[21] = 'Getting along with other children (Social I)';
		$arrQs[22] = 'Getting along with adults (Social II)';
		$arrQs[23] = 'Taking care of his/her own self care needs (Self-care)';
		$arrQs[24] = 'Using small and large arm and leg muscles (Motor)';
		$arrQs[25] = 'Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[26] = 'Printing his/her name (Pre-academic)';
		$arrQs[27] = 'Problem solving skills';

		$sql = gen_scalarQ_rpt($arrQs, 20, 27, TOTAL, TABLE);
		print_query($sql, $rs);
?>
<H1>Page 8</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        This time I would like to get your level of satisfaction or dissatisfaction
		with specific areas of the Pre-K Incentive Program. For each statement, please indicate whether you were
		1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied. Howsatisfied or dissatisfied were you with:
		<br><SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php

		$arrQs[28] = 'The physical environment of your child\\\'s classroom.';
		$arrQs[29] = 'The teachers use of the computer and educational technology';
		$arrQs[30] = 'The school trips (field trips) taken by your child\\\'s class.';
		$arrQs[31] = 'The transportation services provided by the program.';
		$arrQs[32] = 'The Pre-K Incentive Programs attempts to involve parents.)';
		$arrQs[33] = 'The teacher, overall. ';
		$sql = gen_scalarQ_rpt($arrQs, 28, 33, TOTAL, TABLE);
		print_query($sql, $rs);
?>
<H1>Page 9</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        Now I want to get your level of agreement or disagreement
		with the following statement. For each statement, please indicate whether you were
		1, Strong Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
		 <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
		$arrQs[34] = 'The project manager was responsive or helpful in handling your concerns.';
		$arrQs[35] = 'The teacher was helpful in handling your concerns.';
		$arrQs[36] = 'The teacher assistant was helpful in handling your concerns.';
		$arrQs[37] = 'The Pre-K teacher communicated well with you about your child\\\'s progress in the program.';
		$arrQs[38] = 'The interactions between your child and the Pre-K teacher were positive.)';
		$arrQs[39] = 'Your child received nutritious meals at the Pre-K program.';
		$arrQs[40] = 'The class size was appropriate for your child.';
		$arrQs[41] = 'The location of the Pre-K site was very convenient.';
		$sql = gen_scalarQ_rpt($arrQs, 34, 41, TOTAL, TABLE);
		print_query($sql, $rs);
		
?>
	<H1>Page 10</H1>
<?php
#42	~,~`~,~`~,~` -->
$n=42;
		$arr_opts[] = ' Written reports';
		$arr_opts[] = ' Telephone calls ';
		$arr_opts[] = ' Face-to-face meetings';
		$arr_opts[] = ' Not at all';
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">42. How did your child's Pre-K teacher communicate with you?</P>
	</OL>
	</DIV>
<?php
$sql = "SELECT TRIM(Channel), count(Channel) as `Count`, count(Channel)/" . TOTAL . " as `Freq.`
FROM
(
SELECT  Q42_checkbox_1 as `Channel` FROM " . TABLE ."
UNION ALL
SELECT  Q42_checkbox_2 as `Channel` FROM " . TABLE ."
UNION ALL
SELECT  Q42_checkbox_3 as `Channel` FROM " . TABLE ."
UNION ALL
SELECT  Q42_checkbox_4 as `Channel` FROM " . TABLE ."
UNION ALL
SELECT  CONCAT(Q42_checkbox_5, ': ', Q42_other) as `Channel` FROM " . TABLE ."
) a
WHERE Channel <> '' AND Channel <> ':'
GROUP BY Channel
ORDER BY `Count` DESC";
print_query($sql, $rs);
#43	~,~`~,~`~,~` -->
	$n =43;
	unset($arr_opts);
		$arr_opts[] = ' Attending Pre-K Incentive conferences for parents';
		$arr_opts[] = ' Volunteering in the classroom';
		$arr_opts[] = ' Participating on the Parent Advisory Board';
		$arr_opts[] = ' Attending field trips';
		$arr_opts[] = ' Providing feedback about the Pre-K Incentive Program to the project Manager';
		$arr_opts[] = ' Providing feedback about the Pre-K Incentive Program to the teacher';
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">43. What type of involvement did you have with your child's Pre-K class?</P>
	</OL>
	</DIV>
<?php
	$sql = "SELECT TRIM(Involvement), count(Involvement) as `Count`, count(Involvement)/" . TOTAL . " as `Freq.`
FROM
(
SELECT  Q43_checkbox_1 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  Q43_checkbox_2 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  Q43_checkbox_3 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  Q43_checkbox_4 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  Q43_checkbox_5 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  Q43_checkbox_6 as `Involvement` FROM " . TABLE . "
UNION ALL
SELECT  CONCAT(Q43_checkbox_7, ': ', Q43_other) as `Involvement` FROM " . TABLE . "
) a
WHERE Involvement <> '' AND Involvement <> ':'
GROUP BY Involvement
ORDER BY `Count` DESC";

	print_query($sql, $rs);

	#44	~,~`~,~`~,~` -->
	$n =44;
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">44. Was your child referred to the behavioral health team?</P>
	</OL>
	</DIV>
<?php
	$sql = gen_simple_radio($n, TOTAL, TABLE);
	print_query($sql, $rs);
#45	~,~`~,~`~,~` -->
	$n = 45;
	$q = 'What services did he/she receive?
<br><br>
For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.';
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
	TRIM(LCASE(Q45_text_1)) as `Service`
,	Q45_radio_1 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q45_text_2)) as `Service`
,	Q45_radio_2 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q45_text_3)) as `Service`
,	Q45_radio_3 as `Scale`
FROM " . TABLE . "
UNION
SELECT
	TRIM(LCASE(Q45_text_4)) as `Service`
,	Q45_radio_4 as `Scale`
FROM " . TABLE . "
) a
GROUP BY `Service`, `Scale`
ORDER BY `Service`, `Scale` DESC";
	print_query($sql, $rs);
	
?>
<H1>Page 11</H1>
<?php
#46	~,~`~,~`~,~`
	$n=46; 
	$q = 'Did the school offer transportation services for your child? [PAUSE]';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio($n, TOTAL, TABLE);
	print_query($sql, $rs);
?>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	In this section, I want to ask you about the progress you feel that your child has made in the Pre-K program. Using the response of option 1,
	No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
	<br><br>
	Overall, how much progress do you feel your child in the Pre-K program made in the following areas:
</P>
<?php
		$arrQs[47] = 'Understanding and using oral speech (Language)';
		$arrQs[48] = 'Getting along with other children (Social I)';
		$arrQs[49] = 'Getting along with adults (Social II)';
		$arrQs[50] = 'Using small and large arm and legs muscles (Motor)';
		$arrQs[51] = 'Recognizing colors and alphabets (Pre-academic)';
		$arrQs[52] = 'Printing his/her name (Pre-academic)';
		$arrQs[53] = 'Problem solving skills';
		$arrQs[54] = 'Your Child\\\'s learning progress as a result of this program';
		$sql = gen_scalarQ_rpt($arrQs, 47, 54, TOTAL, TABLE);
		print_query($sql, $rs);
?>
<H1>Page 12</H1>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1, Strongly Disagree, 2, Disagree, 3, Agree, 4, Strongly Agree. 
</P>
<?php
		$arrQs[55] = 'You have seen positive personality changes in your child since the beginning of the program (excited about school and learning, positive interactions among peers and adults).';
		$arrQs[56] = 'The Pre-K program has enhanced your child\\\'s ability to express his/her feelings.';
		$arrQs[57] = 'The Pre-K Program met my child\\\'s individual needs.';
		$arrQs[58] = 'You feel your child is prepared to enter Kindergarten. ';
	$sql = gen_scalarQ_rpt($arrQs, 55, 58, TOTAL, TABLE);
		print_query($sql, $rs);
#59	~,~`~,~`~,~`
	$n=59; 
	$q = 'Now, tell me has your child talked with you about his/her Pre-K program?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(59, TOTAL, TABLE);
	print_query($sql, $rs);
	
	$sql = "SELECT Q59_other as `Comments` FROM " .  TABLE . " WHERE Q59_other <> '' ";
	print_query($sql, $rs);
?>
<H1>Page 13</H1>
<?php
#60	~,~`~,~`~,~`
	$n=60; 
	$q = 'Would you recommend this Pre-K Incentive Program to other parents?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(60, TOTAL, TABLE);
	print_query($sql, $rs);
	
#61	~,~`~,~`~,~`
	$n=61; 
	$q = 'At the close of the school year, which statement best reflects your opinion about your expectations of the Pre-K Incentive Program?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(61, TOTAL, TABLE);
	print_query($sql, $rs);
	
?>
<H1>Page 14</H1>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[62] = 'Teaching Methods';
		$arrQs[63] = 'Classroom Size';
		$arrQs[64] = 'Staff';
		$arrQs[65] = 'Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[66] = 'Meals';
		$arrQs[67] = 'Site Location';
		$arrQs[68] = 'Transportation for Children';
		$arrQs[69] = 'Other';
		
		 $sql = gen_Recomendations_table_WthNA($arrQs, 62, 69, TABLE);
	 print_query($sql, $rs);
?>
<H1>Page 15</H1>
<?php
#70	~,~`~,~`~,~`
	$n=70;
	$q = 'Now, please take this opportunity to provide me with any additional comments that you would like to make about the Pre-K incentive program.';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q70_textarea as `Comments` FROM " .  TABLE . " WHERE Q70_textarea <> '' ";
	print_query($sql, $rs);
#	~,~`~,~`~,~`
?>
<H1>Page 16</H1>
<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
<?php
#71	~,~`~,~`~,~`
	$n=71; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(71, TOTAL, TABLE);
	print_query($sql, $rs);
#73	~,~`~,~`~,~`
	$n=73; 
	$q = 'How cooperative was the interviewee?';			
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT AVG(Q73_text) as `Average`, MIN(Q73_text) as `Min.`, MAX(Q73_text) as `Max.` FROM " . TABLE;
	print_query($sql, $rs);
#74	~,~`~,~`~,~`
	$n=74; 
	$q = 'Were there any interruptions during the interview?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(74, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q74_other as `comments` FROM " . TABLE . " WHERE Q74_other <> '' ";
	print_query($sql, $rs);
#75	~,~`~,~`~,~`
	$n=75; 
	$q = 'Did the interviewee have difficulty with any questions?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(75, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q75_other as `comments` FROM " . TABLE . " WHERE Q75_other <> '' ";
	print_query($sql, $rs);
#76	~,~`~,~`~,~`
	$n=76; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = gen_simple_radio(76, TOTAL, TABLE);
	print_query($sql, $rs);
	$sql = "SELECT Q76_other as `comments` FROM " . TABLE . " WHERE Q76_other <> '' ";
	print_query($sql, $rs);
	
#77	~,~`~,~`~,~`
	$n=77;
	$q = 'Any general comments about the administration of the survey';
	$q = $n . '.  ' . $q;
	echo gen_plain_question($q);
	$sql = "SELECT Q77_textarea as `comments` FROM " . TABLE . " WHERE Q77_textarea <> '' ";
	print_query($sql, $rs);
#	~,~`~,~`~,~`


require_once('temp_footer.php');
?>
