<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 15 Verify Entries</H1>

<?php

#70	~,~`~,~`~,~`

	$n=70;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

		echo gen_plain_question($q);
				
		echo gen_verification('Q70_', $state);

#	~,~`~,~`~,~`

?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



