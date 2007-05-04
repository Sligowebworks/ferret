<?php
/*
 * Created on 24-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
  require_once("app/application.php");
  require_once("temp_header.php");

  $rs = new RecordSet();
  $rs->SetDataConnection($state['db']);
 
 echo gen_form_tag($state);
?>
<H1>Page 3 Report</H1>

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
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	$rs->Clear();	
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
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'),true);
	$rs->Clear();	
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
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	$rs->Clear();	
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
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	$rs->Clear();	
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
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	$rs->Clear();	
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
FROM proj_mgr_concatenated";
	
	$rs->SetSQL($sql);	$rs->Populate();
	
	CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	$rs->Clear();	
	?>
</DIV>
	
<?php
		echo gen_form_submit('Commit');
	echo '</FORM>';

	require_once('temp_footer.php');
?>
