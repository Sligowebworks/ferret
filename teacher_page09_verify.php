<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 9 Verify Entries</H1>

<?php
#37	~,~`~,~`~,~`

	$n=37; 
	$q = 'Which of the following services did the Training and Technical Assistance team provide? Please select all that apply. 
			<SPAN class="direction"> [CIRCLE ALL THAT APPLY]</SPAN><BR/><br><SPAN class="direction">[GIVE INTERVIEWEE THE LIST]</SPAN>';

		echo gen_plain_question($q);
						
		echo gen_verification('Q37_', $state);

	
#38 ~,~`~,~`~,~` 
	$n=38; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q38_', $state);


#39	~,~`~,~`~,~`

	$n=39; 
	$q = 'Were any of your students referred to the behavioral health team? 
			<SPAN class="direction">[PAUSE]</SPAN>';

		echo gen_plain_question($q);
				
		echo gen_verification('Q39_', $state);

?>
<p>&nbsp;</p>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
40. What services did they receive? <br><br>
	<SPAN class="direction">[RECORD EACH SERVICE ON THE LINES BELOW]
	</SPAN>
	</P>

<?php

	
	unset($arrQs);

//		$arrQs[1] = 'Service 1 ' . gen_form_input('text', 'Q40_text_1',''); 
//		$arrQs[2] = 'Service 2 ' . gen_form_input('text', 'Q40_text_2','');
//		$arrQs[3] = 'Service 3 ' . gen_form_input('text', 'Q40_text_3','');
//		$arrQs[4] = 'Service 4 ' . gen_form_input('text', 'Q40_text_4','');
		
//		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		
//		for ($i = 1; $i <= 4; $i++)
//		{
//			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
//			echo $arrQs[$i];
//			echo gen_verification('Q'. $i . '_', $state);
//			echo '</DIV>' . "\n";
//		}
		
			echo gen_verification('Q40_', $state);

?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
