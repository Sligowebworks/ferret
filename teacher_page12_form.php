<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="58">';
  echo '<input type="hidden" name="end_Q_num" value="58">';
  
?>

	<H1>Page 12 Data Entry</H1>

<?php

#58	~,~`~,~`~,~`

	$n=58; 
	$q = 'At the close of the school year, which statement best reflects your opinion about your expectations of the Pre-K Incentive Program?';
			
	   $opts =  gen_option( 1, 'radio', 'Q58_radio', 'The program exceeded my expectations', '') .
			gen_option( 2, 'radio', 'Q58_radio', 'The program met my expectations', '') .
			gen_option( 3, 'radio', 'Q58_radio', 'The program did not meet my expectations', '<br><br>Please explain:<br>' . gen_form_input('textarea', 'Q58_other', '')) ;
	
echo gen_question($n, $q, $opts);
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

