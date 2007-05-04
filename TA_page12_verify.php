<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 12 Verify Entries</H1>

<?php

#58	~,~`~,~`~,~`

	$n=58; 
	$q = 'At the close of the school year, which statement best reflects your opinion about your expectations of the Pre-K Incentive Program?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q58_', $state);
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

