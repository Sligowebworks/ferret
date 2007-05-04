<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="50">';
  echo '<input type="hidden" name="end_Q_num" value="57">';
?>

	<H1>Page 11 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	This time I would like to get your level of agreement or disagreement with the following statements. For each statement, please indicate whether you 1, Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
	<br><br>[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[50] = '50.  You have seen positive personality changes in your students since the ' .
				'beginning of the program (excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[51] = '51.  Your students express their feelings more since the beginning of the program.';
		$arrQs[52] = '52.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[53] = '53.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[54] = '54.  The class size was appropriate.';
		$arrQs[55] = '55.  The students received nutritious meals during the year.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 50; $i <= 55; $i++)
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
		
		echo '<DIV class="qb" name="Q50-55">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


		
#56	~,~`~,~`~,~`

	$n=56; 
	$q = 'How many students do you have that are of limited English proficiency (English as Second Language Learners)?';
			
	$opts =  gen_option( '', 'text', 'Q56_text', '', '') 
			;
	echo gen_question($n, $q, $opts);

		

	
#57 ~,~`~,~`~,~` 
	$n=57; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
			
	$opts =  gen_option( 1, 'radio', 'Q57_radio', 'Very Dissatisfied', '') .
			gen_option( 2, 'radio', 'Q57_radio', 'Dissatisfied', '') . 
			gen_option( 3, 'radio', 'Q57_radio', 'Satisfied', '') .
			gen_option( 4, 'radio', 'Q57_radio', 'Very Satisfied', '') 
			;
	echo gen_question($n, $q, $opts);
	

?>

	
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

