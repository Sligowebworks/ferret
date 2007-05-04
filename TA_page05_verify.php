<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

<H1>Page 5 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">Please
		rate the importance of the following skills you expected your
		students to learn while being in the Pre-K Incentive Program with 1,
		Least Important, 2, Somewhat Important, 3, Important and 4, Most
		Important: <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>
	</P>
<?php
	
		$arrQs[11] = '11.  Understanding and using oral speech (Language)';
		$arrQs[12] = '12.  Getting along with other children (Social)';
		$arrQs[13] = '13.  Getting along with adults (Social)';
		$arrQs[14] = '14.  Taking care of his/her own self care needs (Self-care)';
		$arrQs[15] = '15.  Using small and large arm and leg muscles (Motor)';
		$arrQs[16] = '16.  Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[17] = '17. Printing his/her name (Pre-academic)';
		$arrQs[18] = '18.  Problem solving skills';
		
		$arrScale = array( '1<BR />Least<BR />Important', '2<BR />Somewhat<BR />Important', '3<BR />Important<BR />', '4<BR />Most<BR />Important');
		 
		
		for ($i = 11; $i <= 18; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}


#19	~,~`~,~`~,~`

	$n=19; 
	$q = 'Have you had any prior experience with implementing the curriculum? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q19_', $state);


?>

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>