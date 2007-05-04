<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

<H1>Page 3 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">I want to start by collecting some background information. 
	</P>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<?php

#1	~,~`~,~`~,~`

	$n=1; 
	$q = 'What is your Race/Ethnicity?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);

	echo gen_verification('Q1_', $state);

	

#2	~,~`~,~`~,~`

	$n=2; 
	$q = 'What is your highest level of education achieved?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);

	echo gen_verification('Q2_', $state);

	
#3	~,~`~,~`~,~`

	$n=3; 
	$q = 'Are you currently working toward another degree? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);

	echo gen_verification('Q3_', $state);

#4	~,~`~,~`~,~`

	$n=4; 
	$q = 'If yes, what degree and in what area?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);

	echo gen_verification('Q4_', $state);

#5	~,~`~,~`~,~`

	$n=5; 
	$q = 'How long have you been working as a Pre-K teacher? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);

	echo gen_verification('Q5_', $state);

#6	~,~`~,~`~,~`

	$n=6; 
	$q = 'How long have you been at this particular location? 
			<SPAN class="direction">[PAUSE]</SPAN>';

	echo gen_plain_question($q);

	echo gen_verification('Q6_', $state);

?>

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>