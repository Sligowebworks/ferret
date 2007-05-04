<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="37">';
  echo '<input type="hidden" name="end_Q_num" value="40">';
  
?>

	<H1>Page 9 Data Entry</H1>
	
<?php	
	#37	~,~`~,~`~,~`

	$n=37; 
	$q = 'Which of the following services did the Training and Technical Assistance team provide? Please select all that apply. <SPAN class="direction">' .
			'CIRCLE ALL THAT APPLY</SPAN><BR/><br><SPAN class="direction">[GIVE INTERVIEWEE THE LIST]</SPAN>';
			
			
	$opts =  gen_option( 1, 'checkbox', 'Q37_checkbox_1', 'Implementation of curriculum and early learning standards', '') .
			gen_option( 2, 'checkbox', 'Q37_checkbox_2', 'Technical assistance for teachers and project managers', '') .
			gen_option( 3, 'checkbox', 'Q37_checkbox_3', 'Parent/Community involvement', '') .
			gen_option( 4, 'checkbox', 'Q37_checkbox_4', 'Conference training workshops', '') .
			gen_option( 5, 'checkbox', 'Q37_checkbox_5', 'OTHER', ' ' . gen_form_input('text', 'Q37_other', ''))
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

	#39	~,~`~,~`~,~`

	$n=39; 
	$q = 'Were any of your students referred to the behavioral health team? 
			<SPAN class="direction">[PAUSE]</SPAN>';
	$opts = gen_option( 1, 'radio', 'Q39_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q39_radio', 'NO', ' [SKIP TO #41]')
			;
	echo gen_question($n, $q, $opts);


#40	~,~`~,~`~,~`
?>

<p>&nbsp;</p>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
40. What services did they receive? <br><br>
	<SPAN class="direction">[RECORD EACH SERVICE ON THE LINES BELOW]
	</SPAN>
	<br><br>
For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.
</P>

<?php

	
	unset($arrQs);

		$arrQs[1] = 'Service 1 ' . gen_form_input('text', 'Q40_text_1',''); 
		$arrQs[2] = 'Service 2 ' . gen_form_input('text', 'Q40_text_2','');
		$arrQs[3] = 'Service 3 ' . gen_form_input('text', 'Q40_text_3','');
		$arrQs[4] = 'Service 4 ' . gen_form_input('text', 'Q40_text_4','');
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		
		for ($i = 1; $i <= 4; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q40_radio_' . $i , $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q40_">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>
	<p>&nbsp;</p>
	
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
