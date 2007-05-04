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

	$q = 'Now, please take this opportunity to provide me with any additional comments that you would like to make about the Pre-K incentive program.
';

		echo gen_plain_question($q);
				
		echo gen_verification('Q70_', $state);

#	~,~`~,~`~,~`

?>
<br><br>
THANK PARENT/GUARDIAN FOR HIS/HER TIME AND PARTICIPATION.
<br><br>


<DIV STYLE="width:90%; text-align:left; border:thin solid;">
<p>&nbsp;</p>
&nbsp;INTERVIEWER, PLEASE COMPLETE:

<?php

#71	~,~`~,~`~,~`

	$n=71; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q71_', $state);


#72	~,~`~,~`~,~`

	unset($n);
	$n=72; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q72_', $state);

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



