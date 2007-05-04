<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="32">';
  echo '<input type="hidden" name="end_Q_num" value="36">';
  
?>

	<H1>Page 8 Data Entry</H1>
		
	
<?php

#32	~,~`~,~`~,~`
	$n=32; 
	$q = 'What type of involvement did the parents have with the Pre-K class? CIRCLE ALL THAT APPLY
	<br><br><SPAN class="direction">[GIVE INTERVIEWEE THE LIST]
			</SPAN>';
			
	$opts =  gen_option( 1, 'checkbox', 'Q32_checkbox_1', 'Attending Pre-K Incentive conferences for parents', '') .
			gen_option( 2, 'checkbox', 'Q32_checkbox_2', 'Volunteering in the classroom', '') .
			gen_option( 3, 'checkbox', 'Q32_checkbox_3', 'Participating on the Parent Advisory Board', '') .			
			gen_option( 4, 'checkbox', 'Q32_checkbox_4', 'Attending field trips', '') .
			gen_option( 5, 'checkbox', 'Q32_checkbox_5', 'Providing feedback about the Pre-K Incentive Program to project manager', '').
			gen_option( 6, 'checkbox', 'Q32_checkbox_6', 'Providing feedback about the Pre-K Incentive Program to you', '').
			gen_option( 7, 'checkbox', 'Q32_checkbox_7', 'OTHER', ' ' . gen_form_input('text', 'Q32_other', ''))
			;
	echo gen_question($n, $q, $opts);
	?>
	
	<br><br>
	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		How satisfied/dissatisfied were you with parental involvement in the:
	</P>
	
	
	<?php
	
		$arrQs[33] = '33. Beginning of the school year ';
		$arrQs[34] = '34. Middle of the school year ';
		$arrQs[35] = '35. End of the school year ';

		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');


		for ($i = 33; $i <= 35; $i++)
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
		
		echo '<DIV class="qb" name="Q33-35">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

		
		#36	~,~`~,~`~,~`
	$n=36; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';
	
	   $opts =  gen_option( 1, 'radio', 'Q36_radio', 'Very Dissatisfied', '') .
			gen_option( 2, 'radio', 'Q36_radio', 'Dissatisfied', '') .
			gen_option( 3, 'radio', 'Q36_radio', 'Satisfied', '') .
			gen_option( 4, 'radio', 'Q36_radio', 'Very Satisfied', '') 
			;
	echo gen_question($n, $q, $opts);			


	?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>