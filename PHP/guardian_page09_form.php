<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="34">';
 echo '<input type="hidden" name="end_Q_num" value="41">';
  
?>

<H1>Page 9 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        Now I want to get your level of agreement or disagreement
		with the following statement. For each statement, please indicate whether you were
		1, Strong Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
		 <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
		$arrQs[34] = '34. The project manager was responsive or helpful in handling your concerns.';
		$arrQs[35] = '35. The teacher was helpful in handling your concerns.';
		$arrQs[36] = '36. The teacher assistant was helpful in handling your concerns.';
		$arrQs[37] = '37. The Pre-K teacher communicated well with you about your child\'s progress in the program.';
		$arrQs[38] = '38. The interactions between your child and the Pre-K teacher were positive.)';
		$arrQs[39] = '39. Your child received nutritious meals at the Pre-K program.';
		$arrQs[40] = '40. The class size was appropriate for your child.';
		$arrQs[41] = '41. The location of the Pre-K site was very convenient.';
		
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR /> ', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		for ($i = 34; $i <= 41; $i++)
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
		
		echo '<DIV class="qb" name="Q34-41">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>