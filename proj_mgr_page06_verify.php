<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 6 Verify Entries</H1>
	
	<!-- #18	~,~`~,~`~,~` -->
<?php 
	$n=18; 
	$q = 'What led to your choice of the curriculum being used in this Pre-K Incentive Program ' .
			'(Creative Curriculum or High/Scope)?' .
			' <SPAN class="direction">[PAUSE]</SPAN></P>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q18_', $state);

 #19	~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q19_', $state);
	
#20 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	echo gen_plain_question($q);
			
	echo gen_verification('Q20_', $state);
	
#21 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'In your opinion, would you say that the District of Columbia Public Schools (DCPS)' .
			' collaborated well with Early Childhood Education Administration (ECEA)? ' .
			' Would you say there was a:';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q21_', $state);
	
#22 ~,~`~,~`~,~`
	$n++;
	
	$q = 'Do you have any recommendations for improvements to the administrative structure ' .
			'of the Pre-K Incentive Program? <SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q22_', $state);
	
	?>
	<?php
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>