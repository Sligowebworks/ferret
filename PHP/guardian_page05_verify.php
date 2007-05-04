<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
?>

<H1>Page 5 Verify Entries</H1>


<!-- #13	~,~`~,~`~,~` --><?php 
	$n=13; 

?>
	<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is the household income range? <SPAN class="direction">[GIVE INTERVIEWEE THE LIST]</SPAN></P>
	</OL>

<?php
	echo gen_verification( 'Q13_', $state);
?>
	</DIV>

<!-- #14	~,~`~,~`~,~` -->
<?php $n=14; ?>
<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What primary language do you speak at home? [PAUSE] 
		</P>
	</OL>

<?php echo gen_verification('Q14_', $state); ?>

<!-- #15	~,~`~,~`~,~` --><?php $n=15; ?>
	<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">For each child under 18 living in your household,
please tell me their age, whether they are male or female, and what type of school they attended this past school year:
		</P>
	</OL>
	</DIV>
		<?php
	    echo gen_verification('Q15_', $state);
	       ?>
	<?php 
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>