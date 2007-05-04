<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  echo '<input type="hidden" name="start_Q_num" value="1">';
  echo '<input type="hidden" name="end_Q_num" value="6">';
?>

<H1>Page 3 Data Entry</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		I want to start by collecting some background information.
	</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` --><?php 
	$n=0; 	$n++; 
	
	$arr_opts[] = 'AFRICAN AMERICAN';
	$arr_opts[] = 'HISPANIC AMERICAN';
	$arr_opts[] =  'EUROPEAN AMERICAN';
	$arr_opts[] =  'ASIAN AMERICAN';
	$arr_opts[] =  'NATIVE AMERICAN';
?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL>
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your Race/Ethnicity? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
	echo gen_option(++$key, 'radio','Q'. $n .'_radio', 'OTHER',  '&nbsp;&nbsp;'. gen_form_input( 'text', 'Q'. $n .'_Other', '') )
?>

	</DIV>
<!-- #2	~,~`~,~`~,~` --><?php $n++;
	unset($arr_opts);
	
	$arr_opts[] = 'LESS THAN HIGH SCHOOL';
	$arr_opts[] = 'SOME HIGH SCHOOL';
	$arr_opts[] =  'HIGH SCHOOL DIPLOMA / GED';
	$arr_opts[] =  'SOME COLLEGE OR TRADE SCHOOL';
	$arr_opts[] =  'ASSOCIATE DEGREE';
	$arr_opts[] =  'B.A./B.S. DEGREE';
	$arr_opts[] =  'MASTER’S DEGREE';
	$arr_opts[] =  'DOCTORAL DEGREE';

 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your highest level of education achieved? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php
		foreach ($arr_opts as $key => $value)
		{
			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
		}
		 echo gen_option(9,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q2_Other', '') );  ?>
	</DIV>
<!-- #3	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q3_radio', 'YES', '');
		echo gen_option(2, 'radio', 'Q3_radio', 'NO', ' <SPAN class="direction">[SKIP TO #5]</SPAN>');
	?>
	</DIV>
<!-- #4	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF YES, what degree and in what area? </P>
	</OL>
	<?php
		echo gen_option(1, 'radio', 'Q4_radio', 'ASSOCIATES DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_1_text', ''));
		echo gen_option(2, 'radio', 'Q4_radio', 'B.A./B.S. DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_2_text', ''));
		echo gen_option(3, 'radio', 'Q4_radio', 'MASTER’S DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_3_text', ''));
		echo gen_option(4, 'radio', 'Q4_radio', 'DOCTORAL DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_4_text', ''));
		
	?>
	</DIV>
<!-- #5	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How long have you been working as a Project Manager for an early childhood program?<SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<?php
		echo gen_option('', 'text', 'Q5_text', '', '<SPAN class="annotation"> <FONT color="red"> (Calculate Months)</FONT></SPAN>' );
	?>
	</DIV>
<!-- #6	~,~`~,~`~,~` --><?php $n++; ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">How many hours a week do you spend working on Pre-K related activities outside of the normal program hours? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
	<P CLASS="Option" STYLE="margin-left: 0.75in; margin-bottom: 0in; line-height: 150%">
		<INPUT type="text" name="Q6_text"/><FONT color="red"> (Hours)</FONT></SPAN>
	</P>
	</DIV>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>