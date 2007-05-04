<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="60">';
 echo '<input type="hidden" name="end_Q_num" value="61">';
 
  
?>

<H1>Page 13 Data Entry</H1>

<?php

#60	~,~`~,~`~,~`

	$n=60; 
	$q = 'Would you recommend this Pre-K Incentive Program to other parents?';

			
	$opts =  gen_option( 1, 'radio', 'Q60_radio', 'Yes, definitely', '') .
			gen_option( 2, 'radio', 'Q60_radio', 'Maybe', '') .
			gen_option( 3, 'radio', 'Q60_radio', 'No, not at all', '') 
			;
	echo gen_question($n, $q, $opts);


	#61	~,~`~,~`~,~`

	$n=61; 
	$q = 'At the close of the school year, which statement best reflects your opinion about your expectations of the Pre-K Incentive Program?';
			
	   $opts =  gen_option( 1, 'radio', 'Q61_radio', 'The program exceeded my expectations', '') .
			gen_option( 2, 'radio', 'Q61_radio', 'The program met my expectations', '') .
			gen_option( 3, 'radio', 'Q61_radio', 'The program did not meet my expectations', '') ;
	
echo gen_question($n, $q, $opts);
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

