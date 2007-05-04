<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="54">';
  echo '<input type="hidden" name="end_Q_num" value="61">';
?>

	<H1>Page 11 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[54] = '54. Teaching Methods';
		$arrQs[55] = '55. Classroom Size';
		$arrQs[56] = '56. Staff';
		$arrQs[57] = '57. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[58] = '58. Training and Technical Assistance';
		$arrQs[59] = '59. Site Location';
		$arrQs[60] = '60. Transportation for Children';
		$arrQs[61] = '61. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 54; $i <= 61; $i++)
		{
				foreach ($arrScale as $field)
				{
						$field = str_replace('<BR />', ' ', $field);
						
						if ($toggle)
						{
							$arrRow[] = gen_form_input('checkbox_blank', 'Q' . $i . '_NONE', 'NONE');
//							$arrRow[] = gen_form_input('checkbox', 'Q' . $i . '_NONE', $field);
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
		
		echo '<DIV class="qb" name="Q54-61">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

