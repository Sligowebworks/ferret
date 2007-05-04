<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
?>

<H1>Page 3 Verify Entries</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		I want to start by collecting some background information.
	</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` --><?php 
	$n=1;  
?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL>
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your Race/Ethnicity? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
<?php
	echo gen_verification('Q1_', $state);
?>

	</DIV>
<!-- #2	~,~`~,~`~,~` -->

<?php
	$n=2; 
	$q = 'In what country were you born? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
		echo gen_question($n, $q, $opts);
		echo gen_verification('Q2_', $state);
?>

<!-- #3	~,~`~,~`~,~` -->

<?php
	$n=3; 
	$q = 'How long have you been in the United States?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
		echo gen_question($n, $q, $opts);
		echo gen_verification('Q3_', $state);
?>

<!-- #4	~,~`~,~`~,~` -->

<?php
	$n=4; 
	$q = 'How many adults are living in your household?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_question($n, $q, $opts);
	echo gen_verification('Q4_', $state);
?>

<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">Now, please tell me the age, gender, and relationship of the adults over 18 in your household:
		(Including the Interviewee)
		</P>
	</OL>
	</DIV>
		<?php
	
		echo gen_verification('Q5_', $state);
		echo '</DIV>' . "\n";
       ?>
		

	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>