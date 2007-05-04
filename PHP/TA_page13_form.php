<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="59">';
  echo '<input type="hidden" name="end_Q_num" value="67">';
?>

	<H1>Page 13 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[59] = '59. Teaching Methods';
		$arrQs[60] = '60. Classroom Size';
		$arrQs[61] = '61. Staff';
		$arrQs[62] = '62. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[63] = '63. Training and Technical Assistance';
		$arrQs[64] = '64. Meals';
		$arrQs[65] = '65. Site Location';
		$arrQs[66] = '66. Transportation for Children';
		$arrQs[67] = '67. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 59; $i <= 67; $i++)
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
		
		echo '<DIV class="qb" name="Q59-67">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

