<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 14 Verify Entries</H1>

<?php

#68	~,~`~,~`~,~`

	$n=68;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

			
		echo gen_plain_question($q);
				
		echo gen_verification('Q68_', $state);

#	~,~`~,~`~,~`
?>
<br><br>
<SPAN class="direction">THANK TEACHER ASSISTANT FOR HIS/HER TIME AND PARTICIPATION.</SPAN>
<br><br>


<DIV STYLE="width:90%; text-align:left; border:thin solid;">
<p>&nbsp;</p>
&nbsp;INTERVIEWER, PLEASE COMPLETE:

<?php

#69	~,~`~,~`~,~`

	$n=69; 
	$q = 'Were there any unusual interruptions or other occurrences during this interview?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q69_', $state);


#70	~,~`~,~`~,~`

	unset($n);
	$n=70; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q70_', $state);

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



