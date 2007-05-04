<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
?>
<H1>Page 9 Verify Entries</H1>

</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Student Development</B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` -->
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	In this section, I want to ask you about the progress you feel that your students made in the Pre-K program. Using the response of option 1,
	No progress, 2, Little progress, 3, Some progress, and 4, A Lot of progress, please tell me:
	<SPAN class="direction">
		[HAND INTERVIEWEE THE LIST]
	</SPAN>
</P>
<?php
	
		$arrQs[39] = '39.  Understanding and using oral speech (Language)';
		$arrQs[40] = '40.  Getting along with other children (social)';
		$arrQs[41] = '41.  Getting along with adults (social)';
		$arrQs[42] = '42.  Taking care of his/her own needs (Self-care)';
		$arrQs[43] = '43.  Using small and large arm and legs muscles (Motor)';
		$arrQs[44] = '44.  Recognizing colors and alphabets (Pre-academic)';
		$arrQs[45] = '45.  Printing his/her name (Pre-academic)';
		$arrQs[46] = '46.  Problem solving skills';
		$arrQs[47] = '47.	 Your students\' learning progress as a result of this program.';
		

		$arrScale = array( '1<BR />No<BR />progress', '2<BR />Little<BR />progress', '3<BR />Some<BR />progress', '4<BR />A lot of<BR />progress');
		 
		
		for ($i = 39; $i <= 47; $i++)
				
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

