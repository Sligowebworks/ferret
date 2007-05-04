<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 7 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
Now, I want to get your level of satisfaction or dissatisfaction with the following statements.  For each statement, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied. <br>
	<SPAN class="direction">
		[GIVE INTERVIEWEE THE LIST]
	</SPAN>
	<br><br>
</P>
<?php
	
		$arrQs[28] = '28.  The parent-teacher relationship in the Pre-K Incentive Program';
		$arrQs[29] = '29.  The Teaching Assistant in your classroom';
		$arrQs[30] = '30.  The curriculum';

		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 28; $i <= 30; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

#31	~,~`~,~`~,~`

	$n=31; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	$opts =  gen_option( 1, 'checkbox', 'Q30_checkbox_1', 'Written reports', '') .
			gen_option( 2, 'checkbox', 'Q30_checkbox_2', 'Telephone calls', '') .
			gen_option( 3, 'checkbox', 'Q30_checkbox_3', 'Face-to-face meetings', '') .
			gen_option( 5, 'checkbox', 'Q30_checkbox_5', 'Not at all', '') .
			gen_option( 4, 'checkbox', 'Q30_checkbox_4', 'Other:', ' ' . gen_form_input('text', 'Q31_other', ''))
			;
		echo gen_plain_question($q);
				
		echo gen_verification('Q31_', $state);


	
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>