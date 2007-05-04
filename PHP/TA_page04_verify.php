<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

<H1>Page 4 Verify Entries</H1>

<?php

#7	~,~`~,~`~,~`

	$n=7; 
	$q = 'What other teaching experiences have you had?';

			
		echo gen_plain_question($q);
				
		echo gen_verification('Q7_', $state);


#8	~,~`~,~`~,~`

	$n=8; 
	$q = 'How many hours a week do you spend working on Pre-K program activities outside of the Pre-K program hours?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q8_', $state);


?>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Program Implementation </B></U></P>
<!-- ~,~`~,~`~,~` -->

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Now, I want to ask you some more specific questions to get your opinion and expectations of the Pre-K Incentive Program on your students. 
	</P>
	
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please think back to the beginning of the school year as you respond to these questions.
	</P>
	
<?php

#9	~,~`~,~`~,~`

	$n=9; 
	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' academic development? 
			<SPAN class="direction">[PAUSE]</SPAN>';

		echo gen_plain_question($q);
				
		echo gen_verification('Q9_', $state);



#10	~,~`~,~`~,~`

	$n=10; 
	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' social development?
			<SPAN class="direction">[PAUSE]</SPAN>';

		echo gen_plain_question($q);
				
		echo gen_verification('Q10_', $state);



?>

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
	
	