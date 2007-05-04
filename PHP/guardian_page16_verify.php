<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="73">'  ;
    echo '<input type="hidden" name="start_Q_num" value="77">';
?>

	<H1>Page 16 Verify Entries</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#73	~,~`~,~`~,~`

	$n=73; 
	$q = 'How cooperative was the interviewee?';			
		echo gen_plain_question($q);
				
		echo gen_verification('Q73_', $state);



#74	~,~`~,~`~,~`

	$n=74; 
	$q = 'Were there any interruptions during the interview?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q74_', $state);


#75	~,~`~,~`~,~`

	$n=75; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q75_', $state);


#76	~,~`~,~`~,~`

	$n=76; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q76_', $state);


#77	~,~`~,~`~,~`

	$n=77;

	$q = 'Any general comments about the administration of the survey';

			
		echo gen_plain_question($q);
				
		echo gen_verification('Q77_', $state);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



