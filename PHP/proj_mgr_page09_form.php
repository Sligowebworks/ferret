<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="39">';
  echo '<input type="hidden" name="end_Q_num" value="47">';
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
	<br><br>
	Overall, how much progress do you feel the students in your Pre-K program made in the following areas:
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
		
		echo '<DIV class="qb" name="Q39-47">' . "\n";
		
		CSSTable($arrTable, array('Cell' => '', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
?>

	<?php #**** BEGIN FOOTER ****

	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>
