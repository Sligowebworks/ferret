<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="1">';
 echo '<input type="hidden" name="end_Q_num" value="5">';
  
?>

<H1>Page 3 Data Entry</H1>
<P CLASS="spoken" STYLE="margin-bottom: 0in">
		I want to start by collecting some background information.
	</P>

<!-- ~,~`~,~`~,~` -->
	<P CLASS="section_head" STYLE="margin-bottom: 0in; line-height: 200%"><U><B>Background Information </B></U></P>
<!-- ~,~`~,~`~,~` -->

<!-- #1	~,~`~,~`~,~` --><?php 
	$n=1;  
	
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
<!-- #2	~,~`~,~`~,~` -->

<?php
	$n=2; 
	$q = 'In what country were you born? 
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q2_text', '', '<SPAN class="direction"><br>[IF BORN IN THE U.S., SKIP TO #4]</span>') 
			;
	echo gen_question($n, $q, $opts);
?>

<!-- #3	~,~`~,~`~,~` -->

<?php
	$n=3; 
	$q = 'How long have you been in the United States?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q3_text', '', '') 
			;
	echo gen_question($n, $q, $opts);
?>

<!-- #4	~,~`~,~`~,~` -->

<?php
	$n=4; 
	$q = 'How many adults are living in your household?
			<SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( '', 'text', 'Q4_text', '', '') 
			;
	echo gen_question($n, $q, $opts);
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
	
		$arrQs[1] = '1.  ';
		$arrQs[2] = '2.  ';
		$arrQs[3] = '3.  ';
		$arrQs[4] = '4.  ';
		$arrQs[5] = '5.  ';
		$arrQs[6] = '6.  ';
		$arrQs[7] = '7.  ';
		$arrScale = array( '<BR />Age<BR />', '<BR />Gender   <BR />', '<BR />Relationship    <BR />');
		 
		for ($i = 1; $i <= 7; $i++)
		{
			$arrRow = array( gen_option('', 'text_small', 'Q5_text_age_' .$i, ''),  
												gen_form_input('radio', 'Q5_radio_Gender_' . $i , 'M') . gen_form_input('radio', 'Q5_radio_Gender_' . $i , 'F'),  
												gen_option('', 'text', 'Q5_text_relationship_' .$i, '')
												 );
			array_unshift($arrRow, $arrQs[$i]);
			
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		
		array_unshift($arrScale, 'Number');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q1-7">' . "\n";
		
		CSSTable($arrTable, array('Cell' => 'TableHeader', 'Row' => '', 'TH' => 'TableHeader'));
		
		echo '</DIV>' . "\n";
       ?>
		

	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>