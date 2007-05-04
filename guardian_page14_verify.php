<?php
/*
 * Created on 1-Oct-06
 */
 
  require_once("app/application.php");
  
  require_once("temp_header.php");

  echo gen_form_tag($state);
  
?>

	<H1>Page 14 Verify Entries</H1>

<P CLASS="Spoken" STYLE="margin-left: 0.25in; margin-bottom: 0in">
	What recommendation, if any, would you suggest for the following areas of the Pre-K Incentive Program? 
</P>
<?php 

		$arrQs[62] = '62. Teaching Methods';
		$arrQs[63] = '63. Classroom Size';
		$arrQs[64] = '64. Staff';
		$arrQs[65] = '65. Comprehensive Health Services (behavior and health screenings/ services)';
		$arrQs[66] = '66. Meals';
		$arrQs[67] = '67. Site Location';
		$arrQs[68] = '68. Transportation for Children';
		$arrQs[69] = '69. Other';
		
		$arrScale = array( 'Recommendations', '[CHECK<BR /> IF NONE]');
		 
		$toggle = false;
		for ($i = 62; $i <= 69; $i++)
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

