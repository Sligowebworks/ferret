<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="71">';
  echo '<input type="hidden" name="end_Q_num" value="75">';
?>

	<H1>Page 15 Data Entry</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#71	~,~`~,~`~,~`

	$n=71; 
	$q = 'How cooperative was the interviewee?';			
	$opts =  gen_option( '', 'text', 'Q71_text', '', '') 
			;
	echo gen_question($n, $q, $opts);



#72	~,~`~,~`~,~`

	$n=72; 
	$q = 'Were there any interruptions during the interview?';
			
	   $opts =  gen_option( 1, 'radio', 'Q72_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q72_radio', 'No', '<br><br>If yes, in what way did the interruptions impact the interview?<br>' . gen_form_input('textarea', 'Q72_other', '')) ;
	
echo gen_question($n, $q, $opts);


#73	~,~`~,~`~,~`

	$n=73; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	   $opts =  gen_option( 1, 'radio', 'Q73_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q73_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q73_other', '')) ;
	
echo gen_question($n, $q, $opts);


#74	~,~`~,~`~,~`

	$n=74; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	   $opts =  gen_option( 1, 'radio', 'Q74_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q74_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q74_other', '')) ;
	
echo gen_question($n, $q, $opts);


#75	~,~`~,~`~,~`

	$n=75;

	$q = 'Any general comments about the administration of the survey';

			
	$opts =  gen_form_input( 'textarea', 'Q75_textarea', '');

	echo gen_question($n, $q, $opts);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



