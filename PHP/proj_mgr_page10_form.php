<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="48">';
  echo '<input type="hidden" name="end_Q_num" value="53">';
?>

	<H1>Page 10 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[48] = '48.  You have seen positive personality changes in your students since the ' .
				'beginning of the program (excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[49] = '49.  Your students express their feelings more since the beginning of the program.';
		$arrQs[50] = '50.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[51] = '51.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[52] = '52.  Overall, you are satisfied with the Pre-K Incentive Program.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 48; $i <= 52; $i++)
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
		
		echo '<DIV class="qb" name="Q48-52">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


#53	~,~`~,~`~,~`

	$n=53; 
	$q = 'At the close of the school year, which statement best reflects your opinion about ' .
			'your expectations of the Pre-K Incentive Program? 	<SPAN class="direction">' .
			'[HAND INTERVIEWEE THE LIST] </SPAN>';
			
	   $opts =  gen_option( 1, 'radio', 'Q53_radio', 'The program exceeded my expectations', '') .
			gen_option( 2, 'radio', 'Q53_radio', 'The program met my expectations', '') .
			gen_option( 3, 'radio', 'Q53_radio', 'The program did not meet my expectations', '<br><br>Please explain:<br>' . gen_form_input('textarea', 'Q53_other', '')) ;
	
echo gen_question($n, $q, $opts);

?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

