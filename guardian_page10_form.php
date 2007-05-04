<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="42">';
 echo '<input type="hidden" name="end_Q_num" value="45">';
 
?>
	<H1>Page 10 Data Entry</H1>
<!-- #42	~,~`~,~`~,~` -->
<?php
$n=42;
unset($arr_opts);
		$arr_opts[] = ' Written reports';
		$arr_opts[] = ' Telephone calls ';
		$arr_opts[] = ' Face-to-face meetings';
		$arr_opts[] = ' Not at all';
		
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">How did your child's Pre-K teacher communicate with you? CIRCLE ALL THAT APPLY.</P>
	</OL>
		<?php
		foreach ($arr_opts as $key => $value)
		{
			echo gen_option( ++$key, 'checkbox', 'Q'. $n .'_checkbox_' . $key, $value) . "\n\t\t";
		}
		 echo gen_option(5,'checkbox',  'Q'. $n .'_checkbox_5', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q42_Other', '') );  ?>
	</DIV>

<!-- #43	~,~`~,~`~,~` -->
	<?php
	$n++;
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
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What type of involvement did you have with your child's Pre-K class? CIRCLE ALL THAT APPLY [GIVE INTERVIEWEE THE LIST].</P>
	</OL>
		<?php
		foreach ($arr_opts as $key => $value)
		{
			echo gen_option( ++$key, 'checkbox', 'Q'. $n .'_checkbox_' . $key, $value, '') . "\n\t\t";
		}
		 echo gen_option(7,'checkbox',  'Q'. $n .'_checkbox_7', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q43_Other', '') );  ?>
	</DIV>
	<!-- #44	~,~`~,~`~,~` -->
	<?php
	$n++;
unset($arr_opts);
		$arr_opts[] = ' YES';
		$arr_opts[] = ' NO';
		
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Was your child referred to the behavioral health team?[PAUSE]</P>
	</OL>
		<?php
//		foreach ($arr_opts as $key => $value)
//		{
			echo gen_option( ++$key, 'radio', 'Q44_radio', 'YES') . "\n\t\t";
			echo gen_option( ++$key, 'radio', 'Q44_radio', 'NO', " [SKIP TO #45]\n\t\t");
//		}
		?>

	</DIV>


<p>&nbsp;</p>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
45. What services did he/she receive? [RECORD EACH SERVICE ON THE LINES BELOW]
<br><br>
For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.
</P>

<?php

	
	unset($arrQs);

		$arrQs[1] = 'Service 1 ' . gen_form_input('text', 'Q45_text_1',''); 
		$arrQs[2] = 'Service 2 ' . gen_form_input('text', 'Q45_text_2','');
		$arrQs[3] = 'Service 3 ' . gen_form_input('text', 'Q45_text_3','');
		$arrQs[4] = 'Service 4 ' . gen_form_input('text', 'Q45_text_4','');
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		
		for ($i = 1; $i <= 4; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				//$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				$arrRow[] = gen_form_input('radio_blank', 'Q45_radio_' . $i, $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q45_">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

?>

</DIV>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');?>