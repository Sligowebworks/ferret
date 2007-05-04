<?php

require_once("app/application.php");
 
require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="39">';
  echo '<input type="hidden" name="end_Q_num" value="40">';
  
  ?>
<H1>Page 9 Data Entry</H1>

</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` -->

<?php

#39	~,~`~,~`~,~`

	$n=39; 
	$q = 'Were any of your students referred to the behavioral health team? 
			<SPAN class="direction">[PAUSE]</SPAN>';
	$opts = gen_option( 1, 'radio', 'Q39_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q39_radio', 'NO', ' [SKIP TO #41]')
			;
	echo gen_question($n, $q, $opts);


?>
<p>&nbsp;</p>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
40. What services did they receive?
<br>
[RECORD EACH SERVICE ON THE LINES BELOW]
<br>
For each service, please indicate whether you were 1, very dissatisfied, 2, dissatisfied, 3, satisfied, or 4, very satisfied.
</P>

<?php

	
	unset($arrQs);

		$arrQs[1] = 'Service 1 ' . gen_form_input('text', 'Q40_text_1',''); 
		$arrQs[2] = 'Service 2 ' . gen_form_input('text', 'Q40_text_2','');
		$arrQs[3] = 'Service 3 ' . gen_form_input('text', 'Q40_text_3','');
		$arrQs[4] = 'Service 4 ' . gen_form_input('text', 'Q40_text_4','');
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		
		for ($i = 1; $i <= 4; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				//$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				$arrRow[] = gen_form_input('radio_blank', 'Q40_radio_' . $i, $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q40_">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";


?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
