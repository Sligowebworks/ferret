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

#32	~,~`~,~`~,~`
	$n=32; 
	$q = 'What type of involvement did the parents have with the Pre-K class? CIRCLE ALL THAT APPLY
	<br><br><SPAN class="direction">[GIVE INTERVIEWEE THE LIST]
			</SPAN>';
			
	echo gen_plain_question($q);
				
		echo gen_verification('Q32_', $state);
	?>
	
	<br><br>
	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		How satisfied/dissatisfied were you with parental involvement in the:
	</P>
	
	
	<?php
	
		$arrQs[33] = '33. Beginning of the school year ';
		$arrQs[34] = '34. Middle of the school year ';
		$arrQs[35] = '35. End of the school year ';

		$arrScale = array( '1<BR />Very<BR />Dissatisfied', '2<BR />Dissatisfied<BR />', '3<BR />Satisfied<BR />', '4<BR />Very<BR />Satisfied');


		for ($i = 33; $i <= 35; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		

		
		#36	~,~`~,~`~,~`
	$n=36; 
	$q = 'Overall, how satisfied/dissatisfied were you with the level of parental involvement over the course of the year?';
	
	   echo gen_plain_question($q);
				
		echo gen_verification('Q36_', $state);		


	?>
	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>