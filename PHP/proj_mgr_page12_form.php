<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="62">';
  echo '<input type="hidden" name="end_Q_num" value="64">';
?>

	<H1>Page 12 Data Entry</H1>

<?php

#62	~,~`~,~`~,~`

	$n=62;

	$q = 'Now, please take this opportunity to provide me with any additional comments that you
		would like to make about the Pre-K Incentive Program.';

			
	$opts =  gen_form_input( 'textarea', 'Q62_textarea', '');

	echo gen_question($n, $q, $opts);

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
			
	   $opts =  gen_option( 1, 'radio', 'Q63_radio', 'Yes', '') .
			gen_option( 2, 'radio', 'Q63_radio', 'No', '<br><br>If yes, please describe:<br>' . gen_form_input('textarea', 'Q63_other', '')) ;
	
echo gen_question($n, $q, $opts);


#64	~,~`~,~`~,~`

	unset($n);
	$n=64; 
	$q = 'Interview End Time:
			<SPAN class="direction"></SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q64_text', '', '') 
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



