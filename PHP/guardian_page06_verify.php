<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  
?>

<H1>Page 6 Verify Entries</H1>
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
//	foreach ($arr_opts as $key => $value)
//	{
//		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
//	}

		echo gen_verification('Q'. $n . '_', $state);

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
//	foreach ($arr_opts as $key => $value)
//	{
//		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
//	}

		echo gen_verification('Q'. $n . '_', $state);

?>
	</DIV>
<!-- #18	~,~`~,~`~,~` --><?php $n++; 

#18	~,~`~,~`~,~`

	$n=18; 
	$q = 'What previous childcare program(s) has your child attended? [CIRCLE ALL THAT APPLY]';

			
	echo gen_plain_question($q);
			
	echo gen_verification('Q18_', $state);



#19	~,~`~,~`~,~`

	$n=19; 
	$q = 'Where do you intend to enroll your child after completing the Pre-K program?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	echo gen_plain_question($q);
			
	echo gen_verification('Q19_', $state);


	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>