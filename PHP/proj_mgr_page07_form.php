<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="23">';
  echo '<input type="hidden" name="end_Q_num" value="33">';
?>

	<H1>Page 7 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	At this time, I want to
	get your level of agreement or disagreement with the following
	statements.  For each statement, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[23] = '23.  The teacher instructed the students well while utilizing the curriculum.';
		$arrQs[24] = '24.  The teacher assistant instructed the students well while utilizing the curriculum.  ';
		$arrQs[25] = '25.  The teacher communicated well with parents.';
		$arrQs[26] = '26.  The teacher provided useful feedback to you regarding the Pre-K program.';
		$arrQs[27] = '27.  There were positive interactions between the teacher and the students in the Pre-K Incentive Program.';
		$arrQs[28] = '28.  There were positive interactions between the teacher assistant and the students with in the Pre-KIncentive Program.';
		$arrQs[29] = '29.  The Pre-K program\'s training and technical assistance component was helpful.';
		$arrQs[30] = '30.  The Pre-K program\'s comprehensive services component was helpful.';
		$arrQs[31] = '31.	 The students received nutritious meals throughout the year.';
		$arrQs[32] = '32.  The class size was appropriate.';

		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 23; $i <= 32; $i++)
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
		
		echo '<DIV class="qb" name="Q23-32">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

#33	~,~`~,~`~,~`

	$n=33; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	$opts =  gen_option( 1, 'checkbox', 'Q33_checkbox_1', 'WRITTEN REPORTS', '') .
			gen_option( 2, 'checkbox', 'Q33_checkbox_2', 'TELEPHONE CALLS', '') .
			gen_option( 3, 'checkbox', 'Q33_checkbox_3', 'FACE-TO-FACE MEETINGS', '') .
			gen_option( 4, 'checkbox', 'Q33_checkbox_4', 'OTHER', ' ' . gen_form_input('text', 'Q33_other', '' ) . '<SPAN class="annotation"> <FONT color="red">Seperate with pipe char ( Shft + \)</FONT></SPAN>') .
			gen_option( 5, 'checkbox', 'Q33_checkbox_5', 'NOT AT ALL', '') 
			;
	echo gen_question($n, $q, $opts);

?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>