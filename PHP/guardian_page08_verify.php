<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
    echo '<input type="hidden" name="start_Q_num" value="28">';
 echo '<input type="hidden" name="end_Q_num" value="33">';
  
?>

<H1>Page 8 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        This time I would like to get your level of satisfaction or dissatisfaction
		with specific areas of the Pre-K Incentive Program. For each statement, please indicate whether you were
		1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied. Howsatisfied or dissatisfied were you with:
		<br><SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
		$arrQs[28] = '28. The physical environment of your child\'s classroom.';
		$arrQs[29] = '29. The teachers use of the computer and educational technology';
		$arrQs[30] = '30. The school trips (field trips) taken by your child\'s class.';
		$arrQs[31] = '31. The transportation services provided by the program.';
		$arrQs[32] = '32. The Pre-K Incentive Programs attempts to involve parents.)';
		$arrQs[33] = '33. The teacher, overall. ';
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR /> ', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		for ($i = 28; $i <= 33; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
	
?>
	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>