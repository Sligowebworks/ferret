<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
 
?>
	<H1>Page 10 Verify Entries</H1>
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
//		foreach ($arr_opts as $key => $value)
//		{
//			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
//		}
//		 echo gen_option(5,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q42_Other', '') );  
echo gen_verification('Q'. $n . '_', $state);
?>

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
//		foreach ($arr_opts as $key => $value)
//		{
//			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value, '') . "\n\t\t";
//		}
//		 echo gen_option(7,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q43_Other', '') );  
echo gen_verification('Q'. $n . '_', $state);

?>
	</DIV>
	<!-- #44	~,~`~,~`~,~` -->
	<?php
	$n++;
//unset($arr_opts);
//		$arr_opts[] = ' YES';
//		$arr_opts[] = ' NO[SKIP TO #45]';
		
	?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Was your child referred to the behavioral health team?[PAUSE]</P>
	</OL>
		<?php
//		foreach ($arr_opts as $key => $value)
//		{
//			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
//			
//		}
echo gen_verification('Q'. $n . '_', $state);
		?>
	</DIV>


<!-- #45	~,~`~,~`~,~` -->
<p>&nbsp;</p>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
45. What services did he/she receive? [RECORD EACH SERVICE ON THE LINES BELOW]
<br><br>
For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.
</P>

<?php

	
	unset($arrQs);


		echo gen_verification('Q45_', $state);
?>

</DIV>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');?>