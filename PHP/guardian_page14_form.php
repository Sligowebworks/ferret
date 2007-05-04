<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="62">';
 echo '<input type="hidden" name="end_Q_num" value="69">';
 
  
?>

	<H1>Page 14 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[62] = '62. Teaching Methods';
		$arrQs[63] = '63. Classroom Size';
		$arrQs[64] = '64. Staff';
		$arrQs[65] = '65. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[66] = '66. Meals';
		$arrQs[67] = '67. Site Location';
		$arrQs[68] = '68. Transportation for Children';
		$arrQs[69] = '69. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 62; $i <= 69; $i++)
		{
				foreach ($arrScale as $field)
				{
						$field = str_replace('<BR />', ' ', $field);
						
						if ($toggle)
						{
							$arrRow[] = gen_form_input('checkbox_blank', 'Q' . $i . '_NONE', 'NONE');
//							$arrRow[] = gen_form_input('checkbox', 'Q' . $i . '_NONE', '');
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
		
		echo '<DIV class="qb" name="Q62-69">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

