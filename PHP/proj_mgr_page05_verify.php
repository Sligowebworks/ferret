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

		$arrQs[9] = '9.  Understanding and using oral speech (Language)';
		$arrQs[10] = '10.  Getting along with other children (Social)';
		$arrQs[11] = '11.  Getting along with adults (Social)';
		$arrQs[12] = '12.  Taking care of his/her own self care needs (Self-care)';
		$arrQs[13] = '13.  Using small and large arm and leg muscles (Motor)';
		$arrQs[14] = '14.  Recognizing colors and alphabets  (Pre-academic)';
		$arrQs[15] = '15. Printing his/her name (Pre-academic)';
		$arrQs[16] = '16.  Problem solving skills';
		
		
		for ($i = 9 ; $i < 16+1; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		
?>
<!-- #17	~,~`~,~`~,~` -->
	<DIV class="qb" name="Q17">
	<OL start="17">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you have any
		prior experience with the Pre-K Incentive Program curriculum before
		the beginning of the school year? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_verification('Q17_', $state);
	?>
	</DIV>

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>