<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="70">';
 echo '<input type="hidden" name="end_Q_num" value="72">';
 
  
?>

	<H1>Page 15 Data Entry</H1>

<?php

#70	~,~`~,~`~,~`

	$n=70;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you would like to make about the Pre-K incentive program.
';

			
	$opts =  gen_form_input( 'textarea', 'Q70_textarea', '');

	echo gen_question($n, $q, $opts);

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
			
	   $opts =  gen_option( 1, 'radio', 'Q71_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q71_radio', 'No', '<br><br>If yes, please describe:<br>' . gen_form_input('textarea', 'Q71_other', '')) ;
	
echo gen_question($n, $q, $opts);


#72	~,~`~,~`~,~`

	unset($n);
	$n=72; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q72_text', '', '') 
			;
	echo gen_question($n, $q, $opts);

?>
<p>&nbsp;	</p>
</DIV>
<p>&nbsp;	</p>
<p>HAVE INTERVIEWEE FILL OUT THE DISBURSEMENT FORM AND GIVE HIM/HER THE MONEY ORDER.</p>
<p>&nbsp;	</p>


	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



