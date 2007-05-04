<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="6">';
 echo '<input type="hidden" name="end_Q_num" value="12">';
 
?>

<H1>Page 4 Data Entry</H1>


<!-- #6	~,~`~,~`~,~` -->

<?php 
	$n=6; 	

	

	$arr_opts[] = 'MARRIED';
	$arr_opts[] = 'WIDOWED';
	$arr_opts[] =  'SEPARATED';
	$arr_opts[] =  'DIVORCED';
	$arr_opts[] =  'SINGLE, LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'SINGLE, NOT LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'DIVORCED OR SEPARATED, LIVING WITH A DOMESTIC PARTNER';
	$arr_opts[] =  'DIVORCED OR SEPARATED, NOT LIVING WITH A DOMESTIC PARTNER';
?>
	<DIV class="qb" name="Q<?php echo $n; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your marital status? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
	
?>

	</DIV>
<!-- #7	~,~`~,~`~,~` -->
<?php 
	$n++; 
	unset($arr_opts);
	$arr_opts[] = 'You or';
	$arr_opts[] = 'Someone else';
	
?>
<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">Who spends the most time with your child? Would you say that is: 
		</P>
	</OL>
    <?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
?>

<!-- #8	~,~`~,~`~,~` -->

<?php
	$n=8; 
	$q = 'Who is that someone else?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q8_text', '', '') 
			;
	echo gen_question($n, $q, $opts);
?>


<!-- #9	~,~`~,~`~,~` --><?php $n++;
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
		 echo gen_option(++$key,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q9_Other', '') );  ?>
	</DIV>
<!-- #10	~,~`~,~`~,~` --><?php $n++;
	unset($arr_opts);
	
	$arr_opts[] = 'Full-time (36 or more hours per week)';
	$arr_opts[] = 'Part-time(less than 36 hours per week)';
	$arr_opts[] = 'Unemployed [SKIP TO #13]';
	$arr_opts[] = 'Disabled [SKIP TO #13]';
	$arr_opts[] = 'Retired [SKIP TO #13]';
 ?>
	<DIV class="qb" name="Q<?php echo $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is your current employment status? <SPAN class="direction">[PAUSE]</SPAN></P>
	</OL>
		<?php
		foreach ($arr_opts as $key => $value)
		{
			echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', str_replace('[SKIP TO #13]', '', $value), $value) . "\n\t\t";
		}
		  ?>
	</DIV>
<!-- #11	~,~`~,~`~,~` -->

<?php
	$n=11; 
	$q = 'What is your job title? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q11_text', '', '') 
			;
	echo gen_question($n, $q, $opts);
?>

<!-- #12	~,~`~,~`~,~` --><?php $n++; ?>

<?php
	$n=12; 
	$q = 'Who do you work for? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q12_text', '', '') 
			;
	echo gen_question($n, $q, $opts);
?>

<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>