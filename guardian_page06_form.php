<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="16">';
 echo '<input type="hidden" name="end_Q_num" value="19">';
 
?>

<H1>Page 6 Data Entry</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		Now I am going to ask you some questions related to your child's/children's school attendance, in general,
		and their attendance with the Pre-K Incentive Program in particular. 
	</P>
<!-- #16	~,~`~,~`~,~` --><?php 
	$n=15; 	$n++; 
	
	$arr_opts[] = 'YES';
	$arr_opts[] = 'NO';
	$arr_opts[] =  'N/A';
	
?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Are any of your other children in a Pre-K program in Washington, DC? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
?>
	</DIV>
<!-- #17	~,~`~,~`~,~` --><?php $n++;
	unset($arr_opts);
	
	$arr_opts[] = 'No experience';
	$arr_opts[] = 'A little experience';
	$arr_opts[] =  'Some experience';
	$arr_opts[] =  'A lot of experience';
 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">How much experience have you had with a Pre-K Program? 
	</OL>
	<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
?>
	</DIV>
<!-- #18	~,~`~,~`~,~` --><?php $n++; 

#18	~,~`~,~`~,~`

	$n=18; 
	$q = 'What previous childcare program(s) has your child attended? [CIRCLE ALL THAT APPLY]';

			
	$opts =  gen_option( 1, 'checkbox', 'Q18_checkbox_1', 'Community-based early learning program', '') .
			gen_option( 2, 'checkbox', 'Q18_checkbox_2', 'Home-based early learning program', '') .
			gen_option( 3, 'checkbox', 'Q18_checkbox_3', 'Day care', '') .
			gen_option( 4, 'checkbox', 'Q18_checkbox_4', 'Other', ' ' . gen_form_input('text', 'Q18_other', '')) .
			gen_option( 5, 'checkbox', 'Q18_checkbox_5', 'None', '')
			;

	echo gen_question($n, $q, $opts);



#19	~,~`~,~`~,~`

	$n=19; 
	$q = 'Where do you intend to enroll your child after completing the Pre-K program?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q19_radio', 'DC Public School', '') .
			gen_option( 2, 'radio', 'Q19_radio', 'DC public charter school', '') . 
			gen_option( 3, 'radio', 'Q19_radio', 'Private nonreligious School', '') .
			gen_option( 4, 'radio', 'Q19_radio', 'Private religious School', '') . 
			gen_option( 5, 'radio', 'Q19_radio', 'Home school', '') .
			gen_option( 6, 'radio', 'Q19_radio', 'Other', ' ' . gen_form_input('text', 'Q19_other', '')) 
			;
	echo gen_question($n, $q, $opts);


	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>