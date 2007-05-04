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
<?php 
#1	~,~`~,~`~,~`

	$n=1; 
	$q = 'What is your Race/Ethnicity? <SPAN class="direction"><[PAUSE]
			</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q1_radio', 'AFRICAN AMERICAN', '') .
			gen_option( 2, 'radio', 'Q1_radio', 'HISPANIC AMERICAN', '') .
			gen_option( 3, 'radio', 'Q1_radio', 'EUROPEAN AMERICAN', '') .			
			gen_option( 4, 'radio', 'Q1_radio', 'ASIAN AMERICAN', '') .
			gen_option( 5, 'radio', 'Q1_radio', 'NATIVE AMERICAN', '').
			gen_option( 6, 'radio', 'Q1_radio', 'OTHER', ' ' . gen_form_input('text', 'Q1_other', ''))
			;
	echo gen_question($n, $q, $opts);
#2	~,~`~,~`~,~`
$n=2; 
	$q = 'What is your highest level of education achieved?<SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q2_radio', 'LESS THAN HIGH SCHOOL', '') .
			gen_option( 2, 'radio', 'Q2_radio', 'SOME HIGH SCHOOL', '') .
			gen_option( 3, 'radio', 'Q2_radio', 'HIGH SCHOOL DIPLOMA / GED', '') .			
			gen_option( 4, 'radio', 'Q2_radio', 'SOME COLLEGE OR TRADE SCHOOL', '') .
			gen_option( 5, 'radio', 'Q2_radio', 'ASSOCIATE DEGREE', '') .
			gen_option( 6, 'radio', 'Q2_radio', 'B.A./B.S. DEGREE', '') .
			gen_option( 7, 'radio', 'Q2_radio', 'MASTER\'S DEGREE', '') .
			gen_option( 8, 'radio', 'Q2_radio', 'DOCTORAL DEGREE', ''). 
			gen_option( 9, 'radio', 'Q2_radio', 'OTHER', ' ' . gen_form_input('text', 'Q2_other', ''))
			;
	echo gen_question($n, $q, $opts);

#3	~,~`~,~`~,~`
	
$n=3; 
	$q = 'Are you currently working toward another degree? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q3_radio', 'YES', '') .
			gen_option( 2, 'radio', 'Q3_radio', 'NO [Skip to #5]', '')
			;
	echo gen_question($n, $q, $opts);

#4	~,~`~,~`~,~`

$n=4; 
	$q = 'If yes, what degree and in what area? <SPAN class="direction">[PAUSE]</SPAN>';
			
	$opts =  gen_option( 1, 'radio', 'Q4_radio', 'ASSOCIATES DEGREE', ': <B>AREA</B>' . gen_form_input('text', 'Q4_1', '') ) .
			gen_option( 2, 'radio', 'Q4_radio', 'B.A. /B.S. DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_2', '') ) .
			gen_option( 3, 'radio', 'Q4_radio', 'MASTER\'S DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_3', '') ) .
			gen_option( 4, 'radio', 'Q4_radio', 'DOCTORAL DEGREE', ': <B>AREA</B> ' . gen_form_input('text', 'Q4_4', '') )
			;
	echo gen_question($n, $q, $opts);

#5	~,~`~,~`~,~`

$n=5; 

	$q = 'How long have you been working as a Pre-K teacher? <SPAN class="direction">[PAUSE]
			</SPAN>';
			
	$opts = gen_option('', 'text', 'Q5_text', '', '<SPAN class="annotation"> <FONT color="red"> (Calculate Months)</FONT></SPAN>' );
	
	echo gen_question($n, $q, $opts);

#6	~,~`~,~`~,~`

$n=6; 
	$q = 'How long have you been at this particular location?<SPAN class="direction">[PAUSE]</SPAN>';

	$opts = gen_option('', 'text', 'Q6_text', '', '<SPAN class="annotation"> <FONT color="red"> (Calculate Months)</FONT></SPAN>' );
	
	echo gen_question($n, $q, $opts);
	

?>
	<?php 
	echo gen_form_submit('Submit');
	echo '</FORM>';
	require_once('temp_footer.php');
	?>