<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 12 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	For the following statements, please indicate whether you 1, Strongly Disagree, 2, Disagree, 3, Agree, 4, Strongly Agree. 
	<SPAN class="direction">
	<br><br>[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[55] = '55.  You have seen positive personality changes in your child since the beginning of the program (excited about school and learning, positive interactions among peers and adults).';
		$arrQs[56] = '56.  The Pre-K program has enhanced your child\'s ability to express his/her feelings.';
		$arrQs[57] = '57.  The Pre-K Program met my child\'s individual needs.';
		$arrQs[58] = '58.  You feel your child is prepared to enter Kindergarten. ';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 55; $i <= 58; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		
#59	~,~`~,~`~,~`

	$n=59; 
	$q = 'Now, tell me has your child talked with you about his/her Pre-K program?';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q59_', $state);

		

?>

	
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

