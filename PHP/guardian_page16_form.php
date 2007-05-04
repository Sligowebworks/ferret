<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="73">';
 echo '<input type="hidden" name="end_Q_num" value="77">';
 
?>

	<H1>Page 16 Data Entry</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#73	~,~`~,~`~,~`

	$n=73; 
	$q = 'How cooperative was the interviewee?';			
	$opts =  gen_option( '', 'text', 'Q73_text', '', '') 
			;
	echo gen_question($n, $q, $opts);



#74	~,~`~,~`~,~`

	$n=74; 
	$q = 'Were there any interruptions during the interview?';
			
	   $opts =  gen_option( 1, 'radio', 'Q74_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q74_radio', 'No', '<br><br>If yes, in what way did the interruptions impact the interview?<br>' . gen_form_input('textarea', 'Q74_other', '')) ;
	
echo gen_question($n, $q, $opts);


#75	~,~`~,~`~,~`

	$n=75; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	   $opts =  gen_option( 1, 'radio', 'Q75_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q75_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q75_other', '')) ;
	
echo gen_question($n, $q, $opts);


#76	~,~`~,~`~,~`

	$n=76; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	   $opts =  gen_option( 1, 'radio', 'Q76_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q76_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q76_other', '')) ;
	
echo gen_question($n, $q, $opts);


#77	~,~`~,~`~,~`

	$n=77;

	$q = 'Any general comments about the administration of the survey';

			
	$opts =  gen_form_input( 'textarea', 'Q77_textarea', '');

	echo gen_question($n, $q, $opts);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



