<?php
/*
 * Created on 27-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
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

<!-- #1	~,~`~,~`~,~` --><?php $n = 0; $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL>
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your Race/Ethnicity? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q1_', $state);?>
	</DIV>
<!-- #2	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your highest level of education achieved? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q2_', $state);?>
	</DIV>
<!-- #3	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q3_', $state);?>	
	</DIV>
<!-- #4	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF YES, what degree and in what area? </P>
	</OL>
	<?php echo gen_verification('Q4_', $state);?>
	</DIV>
<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How long have you been working as a Project Manager for an early childhood program?<SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php echo gen_verification('Q5_', $state);?>
</DIV>
<!-- #6	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How many hours a week do you spend working on Pre-K related activities outside of the normal program hours? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php echo gen_verification('Q6_', $state);?>
</DIV>
	
<?php
		echo gen_form_submit('Commit');
	echo '</FORM>';

	require_once('temp_footer.php');
?>