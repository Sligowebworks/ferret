<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
?>
<H1>Page 11 Verify Entries</H1>

</P>


<?php

#46	~,~`~,~`~,~`

	$n=46; 
	$q = 'Did the school offer transportation services for your child? [PAUSE]';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q46_', $state);

?>




<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` -->

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	In this section, I want to ask you about the progress you feel that your child has made in the Pre-K program. Using the response of option 1,
	No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
	<br><br>
	Overall, how much progress do you feel your child in the Pre-K program made in the following areas:
	<SPAN class="direction">
	<br>[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[47] = '47.  Understanding and using oral speech (Language)';
		$arrQs[48] = '48.  Getting along with other children (Social I)';
		$arrQs[49] = '49.  Getting along with adults (Social II)';
		$arrQs[50] = '50.  Using small and large arm and legs muscles (Motor)';
		$arrQs[51] = '51.  Recognizing colors and alphabets (Pre-academic)';
		$arrQs[52] = '52.  Printing his/her name (Pre-academic)';
		$arrQs[53] = '53.  Problem solving skills';
		$arrQs[54] = '54.  Your Child\'s learning progress as a result of this program';
		

		$arrScale = array( '1<BR />No<BR />progress', '2<BR />Little<BR />progress', '3<BR />Some<BR />progress', '4<BR />A lot of<BR />progress');
		 
		
		for ($i = 47; $i <= 54; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}
		
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
