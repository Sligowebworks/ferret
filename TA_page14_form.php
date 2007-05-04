<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="68">';
  echo '<input type="hidden" name="end_Q_num" value="70">';
?>

	<H1>Page 14 Data Entry</H1>

<?php

#68	~,~`~,~`~,~`

	$n=68;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

			
	$opts =  gen_form_input( 'textarea', 'Q68_textarea', '');

	echo gen_question($n, $q, $opts);

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
			
	   $opts =  gen_option( 1, 'radio', 'Q69_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q69_radio', 'No', '<br><br>If yes, please describe:<br>' . gen_form_input('textarea', 'Q69_other', '')) ;
	
echo gen_question($n, $q, $opts);


#70	~,~`~,~`~,~`

	unset($n);
	$n=70; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q70_text', '', '') 
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



