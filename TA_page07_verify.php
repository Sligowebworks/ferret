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
Now, I want to get your level of satisfaction or dissatisfaction with the following statements. 
For each statement, please indicate whether you were 1, Very Dissatisfied, 2, Dissatisfied, 3, Satisfied, or 4, Very Satisfied.
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[28] = '28.  The parent-teacher assistant relationship in the Pre-K Incentive Program';
		$arrQs[29] = '29.  The curriculum';

		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 28; $i <= 29; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

#30	~,~`~,~`~,~`

	$n=30; 
	$q = 'How did you communicate with the parents? CIRCLE ALL THAT APPLY';
			
	$opts =  gen_option( 1, 'checkbox', 'Q30_checkbox_1', 'WRITTEN REPORTS', '') .
			gen_option( 2, 'checkbox', 'Q30_checkbox_2', 'TELEPHONE CALLS', '') .
			gen_option( 3, 'checkbox', 'Q30_checkbox_3', 'FACE-TO-FACE MEETINGS', '') .
			gen_option( 4, 'checkbox', 'Q30_checkbox_4', 'OTHER', ' ' . gen_form_input('text', 'Q30_other', '')) .
			gen_option( 5, 'checkbox', 'Q30_checkbox_5', 'NOT AT ALL', '') 
			;
		echo gen_plain_question($q);
				
		echo gen_verification('Q30_', $state);


	
#31	~,~`~,~`~,~`

	$n=31; 
	$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction">' .
			'CIRCLE ALL THAT APPLY</SPAN><BR /><SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';

			
	$opts =  gen_option( 1, 'checkbox', 'Q31_checkbox_1', 'ATTENDING PRE-K INCENTIVE CONFERENCES FOR PARENTS', '') .
			gen_option( 2, 'checkbox', 'Q31_checkbox_2', 'VOLUNTEERING IN THE CLASSROOM', '') .
			gen_option( 3, 'checkbox', 'Q31_checkbox_3', 'PARTICIPATING ON THE PARENT ADVISORY BOARD', '') .
			gen_option( 4, 'checkbox', 'Q31_checkbox_4', 'ATTENDING FIELD TRIPS', '') .
			gen_option( 5, 'checkbox', 'Q31_checkbox_5', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO PROJECT MANAGER', '') .
			gen_option( 6, 'checkbox', 'Q31_checkbox_6', 'PROVIDING FEEDBACK ABOUT THE PRE-K INCENTIVE PROGRAM TO YOU', '') .
			gen_option( 7, 'checkbox', 'Q31_checkbox_7', 'OTHER', ' ' . gen_form_input('text', 'Q31_other', ''))
			;

		echo gen_plain_question($q);
				
		echo gen_verification('Q31_', $state);


	
	
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>