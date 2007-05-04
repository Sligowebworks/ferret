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

#33 -35	~,~`~,~`~,~`
?>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	32. How satified/disatisfied were you with parental involvement in the:
</P>
<?php

		$arrQs[33] = '33.  Beginning of the school year.';
		$arrQs[34] = '34.  Middle of the school year.  ';
		$arrQs[35] = '35.  End of the school year.';
		
		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');
		 
		
		for ($i = 33; $i <= 35; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		

#36 ~,~`~,~`~,~` 
	$n=36; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q36_', $state);

	
	

#37	~,~`~,~`~,~`

	$n=37; 
	$q = 'Which of the following services did the Training and Technical Assistance team provide? Please select all that apply. 
			<SPAN class="direction"> [CIRCLE ALL THAT APPLY]</SPAN>';

		echo gen_plain_question($q);
				
		echo gen_verification('Q37_', $state);

	
#38 ~,~`~,~`~,~` 
	$n=38; 
	
	$q = 'Overall, how satisfied/dissatisfied were you with the training and technical assistance services?';
			
		echo gen_plain_question($q);
				
		echo gen_verification('Q38_', $state);

?>
	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>