<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 11 Verify Entries</H1>
<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[54] = '54. Teaching Methods';
		$arrQs[55] = '55. Classroom Size';
		$arrQs[56] = '56. Staff';
		$arrQs[57] = '57. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[58] = '58. Training and Technical Assistance';
		$arrQs[59] = '59. Site Location';
		$arrQs[60] = '60. Transportation for Children';
		$arrQs[61] = '61. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 54; $i <= 61; $i++)
		{
			echo '<DIV class="qb" name="Q'. $i .'">' . "\n";
			echo $arrQs[$i];
			echo gen_verification('Q'. $i . '_', $state);
			echo '</DIV>' . "\n";
		}

?>
	<?php #**** BEGIN FOOTER ****
	echo gen_form_submit('Commit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>


