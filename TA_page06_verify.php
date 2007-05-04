<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 6 Verify Entries</H1>


<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What was your experience (ease, ability to implement) with implementing the curriculum in:
</P>
<?php 

		$arrQs[20] = '20. The beginning of the year';
		$arrQs[21] = '21. The middle of the year';
		$arrQs[22] = '22. The end of the year';
		
		$arrScale = array( '');
		 
		$toggle = false;
		for ($i = 20; $i <= 22; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

?>

<?php

#23	~,~`~,~`~,~`

	$n=23; 
	$q = 'Did you receive any training on the curriculum in the beginning of the year?
			<SPAN class="direction">[PAUSE]</SPAN>';
		echo gen_plain_question($q);
				
		echo gen_verification('Q23_', $state);


#24	~,~`~,~`~,~`

	$n=24; 
	$q = 'Did you receive <b>additional/any</b> training throughout the year? 
			<SPAN class="direction">[PAUSE]</SPAN>';
		echo gen_plain_question($q);
				
		echo gen_verification('Q24_', $state);


#25 ~,~`~,~`~,~`
	$n=25;
	
	$q = 'If you needed any assistance with the curriculum during the school year, who did you speak to for assistance?' .
			' <SPAN class="direction"> [IF NO ASSISTANCE WAS NEEDED, SKIP TO #27]</SPAN>';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q25_', $state);

	

#26	~,~`~,~`~,~`

	$n=26; 
	$q = 'Was the assistance helpful? 
			<SPAN class="direction">[PAUSE]</SPAN>';
	$opts = gen_option( 1, 'radio', 'Q26_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q26_radio', 'NO', '')
			;
		echo gen_plain_question($q);
				
		echo gen_verification('Q26_', $state);



#27 ~,~`~,~`~,~` 
	$n++; 
	
	$q = 'How appropriate was the curriculum for your student population?';
			
	$opts =  gen_option( 1, 'radio', 'Q27_radio', 'Very Inappropriate', '') .
			gen_option( 2, 'radio', 'Q27_radio', 'Inappropriate', '') . 
			gen_option( 3, 'radio', 'Q27_radio', 'Appropriate', '') .
			gen_option( 4, 'radio', 'Q27_radio', 'Very Appropriate', '') 
			;
		echo gen_plain_question($q);
				
		echo gen_verification('Q27_', $state);


	?>
	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>