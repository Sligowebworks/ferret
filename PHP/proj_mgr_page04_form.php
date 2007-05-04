<?php
/***
 * Created on 28-Sep-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="7">';
  echo '<input type="hidden" name="end_Q_num" value="8">';
  ?>

<H1> Page 4 Data Entry</H1>
	
<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in"><U><B>Program Implementation </B></U></P>
<!-- ~,~`~,~`~,~` -->

	<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Now, I want to ask you some more specific questions to get your expectations and opinions of
		the Pre-K Incentive Program on your students.
	</P><P CLASS="spoken" STYLE="margin-bottom: 0in">
		Please think back to
		the beginning of the school year as you respond to these questions.</P>
	</P>
	
<!-- #7	~,~`~,~`~,~` --><?php $n=7; $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
		<OL start="<?php echo $n ; ?>">
			<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ academic development? <SPAN class="direction">[PAUSE]</SPAN></P>
		</OL>
		<?php
		echo gen_option( 1, 'radio', 'Q7_radio', 'YES'); 
		echo gen_option(2, 'radio', 'Q7_radio', 'NO');
		?>
	</DIV>
<!-- #8	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" STYLE="margin-bottom: 0in">Did you think the Pre-K Incentive Program would enhance your students’ social development? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php
		echo gen_option( 1, 'radio', 'Q8_radio', 'YES'); 
		echo gen_option(2, 'radio', 'Q8_radio', 'NO');
		?>
	</DIV>
<!-- ~,~`~,~`~,~` -->
<?php
		echo gen_form_submit('Submit');
		echo '</FORM>';
		require_once('temp_footer.php');
?>