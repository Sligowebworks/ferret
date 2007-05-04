<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 11 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	This time I would like to get your level of agreement or disagreement with the following statements. For each statement, please indicate whether you 1, Strongly Disagree, 2, Disagree, 3, Agree, or 4, Strongly Agree.
	<SPAN class="direction">
	<br><br>[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[50] = '50.  You have seen positive personality changes in your students since the ' .
				'beginning of the program (excited about school and learning, positive interactions among ' .
				'peers and adults).';
		$arrQs[51] = '51.  Your students express their feelings more since the beginning of the program.';
		$arrQs[52] = '52.  You feel your students\' individual needs were met in your Pre-K Program.';
		$arrQs[53] = '53.  You feel your students are prepared to enter Kindergarten.';
		$arrQs[54] = '54.  The class size was appropriate.';
		$arrQs[55] = '55.  The students received nutritious meals during the year.';
				
		$arrScale = array( '1<BR />Strongly<BR />Disagree', '2<BR />Disagree<BR />', '3<BR />Agree<BR />', '4<BR />Strongly<BR />Agree');
		 
		
		for ($i = 50; $i <= 55; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

		
#56	~,~`~,~`~,~`

	$n=56; 
	$q = 'How many students do you have that are of limited English proficiency (English as Second Language Learners)?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q56_', $state);

		

	
#57 ~,~`~,~`~,~` 
	$n=57; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q57_', $state);

	

?>

	
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>

