<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="7">';
  echo '<input type="hidden" name="end_Q_num" value="10">';
?>

<H1>Page 4 Data Entry</H1>
<?php 
#7	~,~`~,~`~,~`

	$n=7; 
	$q = 'What other teaching experiences have you had? <SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts =  gen_option( 1, 'checkbox', 'Q7_checkbox_1', 'First time teaching', '') .
			gen_option( 2, 'checkbox', 'Q7_checkbox_2', 'Elementary School Teacher', '') .
			gen_option( 3, 'checkbox', 'Q7_checkbox_3', 'Middle School Teacher', '') .
			gen_option( 4, 'checkbox', 'Q7_checkbox_4', 'High School Teacher', '') .
			gen_option( 5, 'checkbox', 'Q7_checkbox_5', 'Tutoring', '') .
			gen_option( 6, 'checkbox', 'Q7_checkbox_6', 'Higher Education', '') .
			gen_option( 7, 'checkbox', 'Q7_checkbox_7', 'Other', ' ' . gen_form_input('text', 'Q7_other', ''))
			;

	echo gen_question($n, $q, $opts);

#8	~,~`~,~`~,~`

$n=8; 

	$q = 'How many hours a week do you spend working on Pre-K program activities outside of the Pre-K program hours? <SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts = gen_option('', 'text', 'Q8_text', '', '<SPAN class="annotation"> <FONT color="red"> (Hours)</FONT></SPAN>' );
	
	echo gen_question($n, $q, $opts);

?>
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Program Implementation </B></U></P>
<!-- ~,~`~,~`~,~` -->

	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Now, I want to ask you some more specific questions to get your opinion  expectations of the Pre-K Incentive Program on your students.<br><br> 
		Please think back to the beginning of the school year as you respond to these questions.
	</P>


<?php 
#9	~,~`~,~`~,~`

$n=9; 

	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' academic development? <SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q9_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q9_radio', 'NO', '')
			;	
	echo gen_question($n, $q, $opts);

#10	~,~`~,~`~,~`

$n=10; 

	$q = 'Did you think the Pre-K Incentive Program would enhance your students\' social development? <SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q10_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q10_radio', 'NO', '') 
			;	
	echo gen_question($n, $q, $opts);	
	
?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>