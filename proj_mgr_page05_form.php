<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="9">';
  echo '<input type="hidden" name="end_Q_num" value="17">';
?>

<H1>Page 5 Data Entry</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please
		rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		Least Important, 2, Somewhat Important, 3, Important and 4, Most
		Important: <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
	
		$arrQs[9] = '9.  Understanding and using oral speech (Language)';
		$arrQs[10] = '10.  Getting along with other children (Social)';
		$arrQs[11] = '11.  Getting along with adults (Social)';
		$arrQs[12] = '12.  Taking care of his/her own self care needs (Self-care)';
		$arrQs[13] = '13.  Using small and large arm and leg muscles (Motor)';
		$arrQs[14] = '14.  Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[15] = '15. Printing his/her name (Pre-academic)';
		$arrQs[16] = '16.  Problem solving skills';
		
		$arrScale = array( '1<BR />Least<BR />Important', '2<BR />Somewhat<BR />Important', '3<BR />Important<BR />', '4<BR />Most<BR />Important');
		 
		
		for ($i = 9; $i <= 16; $i++)
		{
			foreach ($arrScale as $field)
			{
				$field = str_replace('<BR />', ' ', $field);
				
				$arrRow[] = gen_form_input('radio_blank', 'Q' . $i . '_radio', $field);
				
			}
			
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q9-16">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>
<!-- #17	~,~`~,~`~,~` -->
	<DIV class="qb" name="Q17">
	<OL start="17">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you have any
		prior experience with the Pre-K Incentive Program curriculum before
		the beginning of the school year? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q17_radio', 'YES', '');
		echo gen_option(2, 'radio', 'Q17_radio', 'NO', '');
	?>
	</DIV>

	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>