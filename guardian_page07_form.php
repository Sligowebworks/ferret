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

<H1>Page 7 Data Entry</H1>

<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Program Implementation </B></U></P>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
        Now, I want to ask you some more specific questions to get your expectations and opinions
        of the Pre-K Incentive Program on your child. Please think back to the beginning of the school year
        as you respond to the following questions.
        <br><br>
		Please rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		being Least Important, 2,being Somewhat Important, 3, being Important and 4, being Most
		Important.<br>
		 <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
	
		$arrQs[20] = '20.  Understanding and using oral speech (Language)';
		$arrQs[21] = '21.  Getting along with other children (Social I)';
		$arrQs[22] = '22.  Getting along with adults (Social II)';
		$arrQs[23] = '23.  Taking care of his/her own self care needs (Self-care)';
		$arrQs[24] = '24.  Using small and large arm and leg muscles (Motor)';
		$arrQs[25] = '25.  Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[26] = '26. Printing his/her name (Pre-academic)';
		$arrQs[27] = '27.  Problem solving skills';
		$arrScale = array( '1<BR />Least<BR />Important', '2<BR />Somewhat<BR />Important', '3<BR />Important<BR />', '4<BR />Most<BR />Important');
		for ($i = 20; $i <= 27; $i++)
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
		
		echo '<DIV class="qb" name="Q20-27">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>