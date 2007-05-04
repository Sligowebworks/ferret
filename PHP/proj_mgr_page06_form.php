<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="18">';
  echo '<input type="hidden" name="end_Q_num" value="22">';
?>

	<H1>Page 6 Data Entry</H1>
	
<?php 
#18	~,~`~,~`~,~`

	$n=18; 
	$q = 'What led to your choice of the curriculum being used in this Pre-K Incentive Program 
			(Creative Curriculum or High/Scope)?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q18_radio', 'ALREADY IN USE', '') .
			gen_option( 2, 'radio', 'Q18_radio', 'RECOMMENDED', '(if so by whom?) ' . gen_form_input('text', 'Q18_RECOMMENDED_text', '')) .
			gen_option( 3, 'radio', 'Q18_radio', 'RESEARCHED THE CURRICULUM', '') .
			gen_option( 4, 'radio', 'Q18_radio', 'OTHER', ' ' . gen_form_input('text', 'Q18_other', ''))
			;
	echo gen_question($n, $q, $opts);

 #19	~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q19_radio', 'YES', '<SPAN class="direction">[IF YES, #19 SAY ADDITIONAL]</SPAN>') .
			gen_option( 2, 'radio', 'Q19_radio', 'NO', '<SPAN class="direction">[IF NO, #19 SAY ANY]</SPAN>') 
			;
	echo gen_question($n, $q, $opts);
	
#20 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	$opts =  gen_option( 1, 'radio', 'Q20_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q20_radio', 'NO', '') 
			;
	echo gen_question($n, $q, $opts);
	
#21 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'In your opinion, would you say that the District of Columbia Public Schools (DCPS)' .
			' collaborated well with Early Childhood Education Administration (ECEA)? ' .
			' Would you say there was a:';
			
	$opts =  gen_option( 1, 'radio', 'Q21_radio', 'Very strong collaboration', '') .
			gen_option( 2, 'radio', 'Q21_radio', 'Somewhat strong collaboration', '') . 
			gen_option( 3, 'radio', 'Q21_radio', 'Weak collaboration', '') .
			gen_option( 4, 'radio', 'Q21_radio', 'No collaboration', '') 
			;
	echo gen_question($n, $q, $opts);
	
#22 ~,~`~,~`~,~`
	$n++;
	
	$q = 'Do you have any recommendations for improvements to the administrative structure ' .
			'of the Pre-K Incentive Program? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q22_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q22_radio', 'NO', '')
			;
	$opts .= gen_plain_question('IF YES, what are your top 2 recommendations?');
	
	$opts.= '<TEXTAREA name="Q22_textarea" cols="80" rows="20"></TEXTAREA>';
	
	echo gen_question($n, $q, $opts);
	
	?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>