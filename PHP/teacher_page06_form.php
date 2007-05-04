
<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="20">';
  echo '<input type="hidden" name="end_Q_num" value="27">';
  
?>

	<H1>Page 6 Data Entry</H1>
	
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What was your experience (ease, ability to implement) with implementing the curriculum in:
</P>
<?php

#20 -22	~,~`~,~`~,~`

		$arrQs[20] = '20. The beginning of the year';
		$arrQs[21] = '21. The middle of the year  ';
		$arrQs[22] = '22. The end of the year';
		
				
		$arrScale = array( '');
		 
		$toggle = false;
		for ($i = 20; $i <= 22; $i++)
		{
				foreach ($arrScale as $field)
				{
						$field = str_replace('<BR />', ' ', $field);
						
						
							$arrRow[] = gen_form_input('textarea_small', 'Q' . $i . '_textarea', '');
							$toggle = true;
						 
				}
				
				array_unshift($arrRow, $arrQs[$i]);
				
				$arrTable[] = $arrRow;
				unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q20-22">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


 #23	~,~`~,~`~,~` 
	$n=23; 
	
	$q = 'Did you receive training on the curriculum in the beginning' .
			' of the year? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q23_radio', 'YES', '<SPAN class="direction">[IF YES, #23 SAY ADDITIONAL]</SPAN>') .
			gen_option( 2, 'radio', 'Q23_radio', 'NO', '<SPAN class="direction">[IF NO, #23 SAY ANY]</SPAN>') 
			;
	echo gen_question($n, $q, $opts);


#24 ~,~`~,~`~,~` 
	$n=24;  
	
	$q = 'Did you receive <B>additional/any</B> training throughout ' .
			'the year? <SPAN class="direction">[PAUSE]</SPAN>';
	
	$opts =  gen_option( 1, 'radio', 'Q24_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q24_radio', 'NO', '') 
			;
	echo gen_question($n, $q, $opts);


#25 ~,~`~,~`~,~` 
	$n=25; 
	
	$q = 'If you needed any assistance with the curriculum during the school year, who did you speak to for assistance? <SPAN class="direction">[IF NO ASSISTANCE WAS NEEDED, SKIP TO # 26]</SPAN>';
	
	$opts = '<TEXTAREA name="Q25_textarea" cols="80" rows="5"></TEXTAREA>';
	echo gen_question($n, $q, $opts);


#26 ~,~`~,~`~,~`
	$n=26;
	
	$q = 'Was the assistance helpful? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q26_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q26_radio', 'NO', '')
			;
echo gen_question($n, $q, $opts);


#27	~,~`~,~`~,~`
	$n=27; 
	$q = 'How appropriate was the curriculum for your student population?';
	
	   $opts =  gen_option( 1, 'radio', 'Q27_radio', 'Very Inappropriate', '') .
			gen_option( 2, 'radio', 'Q27_radio', 'Inappropriate', '') .
			gen_option( 3, 'radio', 'Q27_radio', 'Appropriate', '') .
			gen_option( 4, 'radio', 'Q27_radio', 'Very Appropriate', '') 
			;
	echo gen_question($n, $q, $opts);			


	?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>