<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 13 Verify Entries</H1>

<p><strong>FOR INTERVIEWER TO FILL OUT AFTER INTERVIEW</strong></p>
	
<?php

#65	~,~`~,~`~,~`

	$n=65; 
	$q = 'How cooperative was the interviewee?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q65_', $state);


#66	~,~`~,~`~,~`

	$n=66; 
	$q = 'Were there any interruptions during the interview?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q66_', $state);


#67	~,~`~,~`~,~`

	$n=67; 
	$q = 'Did the interviewee have difficulty with any questions?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q67_', $state);


#68	~,~`~,~`~,~`

	$n=68; 
	$q = 'Did you (the interviewer) have difficulty with any areas/items of the survey?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q68_', $state);


#69	~,~`~,~`~,~`

	$n=69;

	$q = 'Any general comments about the administration of the survey';

	echo gen_plain_question($q);
			
	echo gen_verification('Q69_', $state);

#	~,~`~,~`~,~`

?>

<p>&nbsp;</p>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



