<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 8 Verify Entries</H1>
<?php
#34	~,~`~,~`~,~`

		$n=34; 
		$q = 'What type of involvement did the parents have with the Pre-K class? <SPAN class="direction"><BR />' .
				'CIRCLE ALL THAT APPLY</SPAN><BR /> <SPAN class="direction">[HAND INTERVIEWEE THE LIST]</SPAN>';
	
		echo gen_plain_question($q);
				
		echo gen_verification('Q34_', $state);

#35	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	How satified/disatisfied were you with parental involvement in the:
</P>
<?php
		$arrQs[35] = '35.  Beginning of the school year.';
		$arrQs[36] = '36.  Middle of the school year.  ';
		$arrQs[37] = '37.  End of the school year.';
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 35; $i <= 37; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

			
			
#38	~,~`~,~`~,~`

	$n=38; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year? ';

	   echo gen_plain_question($q);
			
	echo gen_verification('Q38_', $state);


?>
	<?php #**** BEGIN FOOTER ****
echo gen_form_save_session();
	
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>



