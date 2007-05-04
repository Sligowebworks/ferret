<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="34">';
  echo '<input type="hidden" name="end_Q_num" value="38">';
?>

	<H1>Page 8 Data Entry</H1>

<?php

#34	~,~`~,~`~,~`

	$n=34; 
	$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction">' .
			'CIRCLE ALL THAT APPLY</SPAN><BR /><SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';

			
	$opts =  gen_option( 1, 'checkbox', 'Q34_checkbox_1', 'ATTENDING PRE-K INCENTIVE CONFERENCES FOR PARENTS', '') .
			gen_option( 2, 'checkbox', 'Q34_checkbox_2', 'VOLUNTEERING IN THE CLASSROOM', '') .
			gen_option( 3, 'checkbox', 'Q34_checkbox_3', 'PARTICIPATING ON THE PARENT ADVISORY BOARD', '') .
			gen_option( 4, 'checkbox', 'Q34_checkbox_4', 'ATTENDING FIELD TRIPS', '') .
			gen_option( 5, 'checkbox', 'Q34_checkbox_5', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO YOU', '') .
			gen_option( 6, 'checkbox', 'Q34_checkbox_6', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO THE TEACHER', '') .
			gen_option( 7, 'checkbox', 'Q34_checkbox_7', 'OTHER', ' ' . gen_form_input('text', 'Q34_other', ''))
			;

	echo gen_question($n, $q, $opts);


#35 -37	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	How satified/disatisfied were you with parental involvement in the:
</P>
<?php

		$arrQs[35] = '35.  Beginning of the school year.';
		$arrQs[36] = '36.  Middle of the school year.  ';
		$arrQs[37] = '37.  End of the school year.';
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 35; $i <= 37; $i++)
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
		
		echo '<DIV class="qb" name="Q35-37">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

#38	~,~`~,~`~,~`

	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';

	   $opts =  gen_option( 1, 'radio', 'Q38_radio', 'VERY DISSATISFIED', '') .
			gen_option( 2, 'radio', 'Q38_radio', 'DISSATISFIED', '') .
			gen_option( 3, 'radio', 'Q38_radio', 'SATISFIED', '') .
			gen_option( 4, 'radio', 'Q38_radio', 'VERY SATISFIED', '') 
			;

	echo gen_question($n, $q, $opts);

?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>