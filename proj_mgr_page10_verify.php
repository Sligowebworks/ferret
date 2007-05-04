<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 10 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1,
	Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[48] = '48.  You have seen positive personality changes in your students since the ' .
				'beginning of the program excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[49] = '49.  Your students express their feelings more since the beginning of the program.';
		$arrQs[50] = '50.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[51] = '51.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[52] = '52.  Overall, you are satisfied with the Pre-K Incentive Program.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 48; $i <= 52; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

		
#53	~,~`~,~`~,~`

	$n=53; 
	$q = 'At the close of the school year, which statement best reflects your opinion about ' .
			'your expectations of the Pre-K Incentive Program? 	<SPAN class="direction">' .
			'[HAND INTERVIEWEE THE LIST] </SPAN>';

	echo gen_plain_question($q);
			
	echo gen_verification('Q53_', $state);

# FIX
//	$q = 'Please explain';	
//	echo gen_plain_question($q);
//			
//	echo gen_verification('Q_', $state);
	
?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>


