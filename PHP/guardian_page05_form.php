<?php
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
  echo '<input type="hidden" name="start_Q_num" value="13">';
 echo '<input type="hidden" name="end_Q_num" value="15">';
?>

<H1>Page 5 Data Entry</H1>


<!-- #13	~,~`~,~`~,~` --><?php 
	$n=13; 
	$arr_opts[0] = ' Less than $10,000 annually';
	$arr_opts[1] = ' $10,000k-19,999 annually';
	$arr_opts[2] =  '$20,000-29,999 annually';
	$arr_opts[3] =  '$30,000-39,999 annually';
	$arr_opts[4] =  '$40,000-49,999 annually';
	$arr_opts[5] =  '$50,000-59,999 annually';
	$arr_opts[6] =  '$60,000-69,999 annually';
	$arr_opts[7] =  '$70,000-79,999 annually';
	$arr_opts[8] =  'more than $80,000 annually';
	$arr_opts[9] =  'N/A (refused to answer)';
?>
	<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What is the household income range? <SPAN class="direction">[GIVE INTERVIEWEE THE LIST]</SPAN></P>
	</OL>

<?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
?>
	<br><P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">IF HOURLY WAGE IS GIVEN WRITE HERE</P>
<?php
	echo gen_option( '$ ', 'text', 'Q13_text', '', ' p/h');
?>

	</DIV>

<!-- #14	~,~`~,~`~,~` -->
<?php 
	$n=14; 
	unset($arr_opts);
	$arr_opts[] = 'ENGLISH';
	$arr_opts[] = 'SPANISH';
	
?>
<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">What primary language do you speak at home? [PAUSE] 
		</P>
	</OL>

    <?php
	foreach ($arr_opts as $key => $value)
	{
		echo gen_option( ++$key, 'radio', 'Q'. $n .'_radio', $value) . "\n\t\t";
	}
	 echo gen_option(9,'radio',  'Q'. $n .'_radio', 'OTHER', ': &nbsp; &nbsp;' . gen_form_input('text', 'Q14_Other', '') );  ?>


<!-- #15	~,~`~,~`~,~` --><?php $n=15; ?>
	<DIV class="qb" name="Q<?php $n ; ?>">
	<OL start="<?php echo $n ; ?>">
		<LI><P CLASS="Question" STYLE="margin-bottom: 0in">For each child under 18 living in your household,
please tell me their age, whether they are male or female, and what type of school they attended this past school year:
		</P>
	</OL>
	</DIV>
		<?php
	    
		$arrQs[1] = 'Age';
		$arrQs[2] = 'Gender';
		$arrScale = array(  '<BR/>Child<BR/>1', 'Child<BR />2', 'Child<BR />3','Child<BR />4','Child<BR />5','Child<BR />6','Child<BR />7','Child<BR />8');
		 
		 
		for ($n = 1 ; $n <= 8 ; $n++)
		{
			$arrRow[] = gen_form_input('text_small', 'Q15_text_Age_child' . $n , '');
		}
		array_unshift($arrRow, $arrQs[1]);
		$arrTable[] = $arrRow;
		unset($arrRow);
		
		for ($n = 1 ; $n <= 8 ; $n++)
		{
			$arrRow[] = gen_form_input('radio', 'Q15_radio_Gender_child' . $n , 'M') . gen_form_input('radio', 'Q15_radio_Gender_child' . $n , 'F');
		}
		array_unshift($arrRow, $arrQs[2]);
		$arrTable[] = $arrRow;
		unset($arrRow);
		
		
		array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q15_a">' . "\n";
		
		CSSTable($arrTable, array('Cell' => 'TableHeaderBorder', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";

?>		
<br><br><P CLASS="Question" name="Question" STYLE="margin-bottom: 0in"><strong>Type of School Attended in AY '05/'06</strong></P>
<?php	
		unset($arrQs);
		unset($arrTable);

//		$arrQs[] = 'Type of School Attended in AY \'05/\'06';
		$arrQs[1] = '1 DC Public School  ';
		$arrQs[2] = '2 DC Public Charter School  ';
		$arrQs[3] = '3 Private Nonreligious School ';
		$arrQs[4] = '4 Private Religious School ';
		$arrQs[5] = '5 Home School ';
		$arrQs[6] = '6 Other <BR />(Please specify)<BR /> ';
		
		for ($i = 1; $i <= 5; $i++)
		{
			for ($n = 1 ; $n <= 8 ; $n++)
			{
				$arrRow[] = gen_form_input('checkbox_blank', 'Q15_checkbox_' . $i . '_child' . $n , $arrQs[$i]);
			}
			array_unshift($arrRow, $arrQs[$i]);
			$arrTable[] = $arrRow;
			unset($arrRow);
		}
		for ($n = 1 ; $n <= 8 ; $n++)
		{
			$arrRow[] = gen_form_input('text_small', 'Q15_text_Other_child' . $n ,'');
		}
		array_unshift($arrRow, $arrQs[6]);
		$arrTable[] = $arrRow;
		unset($arrRow);
		//array_unshift($arrScale, '&nbsp;');
		array_unshift($arrTable, $arrScale);
		
		echo '<DIV class="qb" name="Q15_b">' . "\n";
		
		CSSTable($arrTable, array('Cell' => 'TableHeaderBorder', 'Row' => '', 'TH' => ''));
		
		echo '</DIV>' . "\n";
		
       ?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>