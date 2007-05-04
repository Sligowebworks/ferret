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

#62	~,~`~,~`~,~`

	$n=62;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

	echo gen_plain_question($q);
			
	echo gen_verification('Q62_', $state);


#	~,~`~,~`~,~`

?>

<p>THANK PROJECT MANAGER FOR HIS/HER TIME AND PARTICIPATION. </p>

<DIV STYLE="width:90%; text-align:left; border:thin solid;">
<p>&nbsp;</p>
&nbsp;INTERVIEWER, PLEASE COMPLETE:

<?php

#63	~,~`~,~`~,~`

	$n=63; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q63_', $state);


#64	~,~`~,~`~,~`

	unset($n);
	$n=64; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';

	echo gen_plain_question($q);
			
	echo gen_verification('Q64_', $state);


?>
<p>&nbsp;	</p>
</DIV>
<p>&nbsp;	</p>
<p>HAVE INTERVIEWEE FILL OUT THE DISBURSEMENT FORM AND GIVE HIM/HER THE MONEY ORDER.</p>
<p>&nbsp;	</p>


	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



