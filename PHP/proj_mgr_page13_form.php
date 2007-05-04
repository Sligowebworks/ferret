<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="65">';
  echo '<input type="hidden" name="end_Q_num" value="69">';
?>

	<H1>Page 13 Data Entry</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#65	~,~`~,~`~,~`

	$n=65; 
	$q = 'How cooperative was the interviewee?';			
	$opts =  gen_option( '', 'text', 'Q65_text', '', '') 
			;
	echo gen_question($n, $q, $opts);



#66	~,~`~,~`~,~`

	$n=66; 
	$q = 'Were there any interruptions during the interview?';
			
	   $opts =  gen_option( 1, 'radio', 'Q66_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q66_radio', 'No', '<br><br>If yes, in what way did the interruptions impact the interview?<br>' . gen_form_input('textarea', 'Q66_other', '')) ;
	
echo gen_question($n, $q, $opts);


#67	~,~`~,~`~,~`

	$n=67; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	   $opts =  gen_option( 1, 'radio', 'Q67_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q67_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q67_other', '')) ;
	
echo gen_question($n, $q, $opts);


#68	~,~`~,~`~,~`

	$n=68; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	   $opts =  gen_option( 1, 'radio', 'Q68_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q68_radio', 'No', '<br><br>If yes, please explain:<br>' . gen_form_input('textarea', 'Q68_other', '')) ;
	
echo gen_question($n, $q, $opts);


#69	~,~`~,~`~,~`

	$n=69;

	$q = 'Any general comments about the administration of the survey';

			
	$opts =  gen_form_input( 'textarea', 'Q69_textarea', '');

	echo gen_question($n, $q, $opts);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



