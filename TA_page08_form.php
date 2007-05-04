<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="33">';
  echo '<input type="hidden" name="end_Q_num" value="38">';
?>

	<H1>Page 8 Data Entry</H1>

<?php

#33 -35	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	32. How satified/disatisfied were you with parental involvement in the:
</P>
<?php

		$arrQs[33] = '33.  Beginning of the school year.';
		$arrQs[34] = '34.  Middle of the school year.  ';
		$arrQs[35] = '35.  End of the school year.';
		
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


#36 ~,~`~,~`~,~` 
	$n=36; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';
			
	$opts =  gen_option( 1, 'radio', 'Q36_radio', 'Very Dissatisfied', '') .
			gen_option( 2, 'radio', 'Q36_radio', 'Dissatisfied', '') . 
			gen_option( 3, 'radio', 'Q36_radio', 'Satisfied', '') .
			gen_option( 4, 'radio', 'Q36_radio', 'Very Satisfied', '') 
			;
	echo gen_question($n, $q, $opts);
	
	

#37	~,~`~,~`~,~`

	$n=37; 
	$q = 'Which of the following services did the Training and Technical Assistance team provide? Please select all that apply. 
			<SPAN class="direction"> [CIRCLE ALL THAT APPLY]</SPAN>';

	   $opts =  gen_option( 1, 'checkbox', 'Q37_checkbox_1', 'Implementation of curriculum and early learning standards', '') .
			gen_option( 2, 'checkbox', 'Q37_checkbox_2', 'Technical assistance for teachers and project managers', '') .
			gen_option( 3, 'checkbox', 'Q37_checkbox_3', 'Parent/Community involvement', '') .
			gen_option( 4, 'checkbox', 'Q37_checkbox_4', 'Conference training workshops', '') .
			gen_option( 5, 'checkbox', 'Q37_checkbox_5', 'Other', ' ' . gen_form_input('text', 'Q37_other', ''))
			;

	echo gen_question($n, $q, $opts);

	
#38 ~,~`~,~`~,~` 
	$n=38; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
			
	$opts =  gen_option( 1, 'radio', 'Q38_radio', 'Very Dissatisfied', '') .
			gen_option( 2, 'radio', 'Q38_radio', 'Dissatisfied', '') . 
			gen_option( 3, 'radio', 'Q38_radio', 'Satisfied', '') .
			gen_option( 4, 'radio', 'Q38_radio', 'Very Satisfied', '') 
			;
	echo gen_question($n, $q, $opts);
	
	
	
?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>