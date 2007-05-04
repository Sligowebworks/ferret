<?php
/*
 * Created on 2-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('app/application.php');
 
 //unset_form_values($state);
 
 $rs = new RecordSet();
 $rs->SetDataConnection($db);
 $rs->SetSQL('SELECT DISTINCT name as \'key\', name as \'name\' FROM data_entry_users ORDER BY name;');
 $rs->Populate();
 $arr_names = $rs->arr_rows;
 $arr_instruments = 
 	array(
		'Project Manager' , 
		'Parent/Guardian', 
 		'Teacher', 
		'Teacher Assistant'
		);
		
 clear_session_forms($state);
 ?>
 
 
 <?php
 
 require_once('temp_header.php');
 
 echo '<FORM name="login" method="post" action="confirm_login.php">'
 
?>
<H1> Welcome to the Pre-k Incentive Program Data Entry Application</H1>
<BR />
<BR />
<HR />
<H2> Select your name: <?php echo gen_select_list('select_name', $arr_names); ?></H2>

<H2> OR:</H2>
<H2>Add a NEW name: <?php echo gen_form_input('text', 'new_name', ''); ?> (<em>enter a unique name carefully, there is no going back...</em>)</H2>
<HR />

<H2> Select Survey Instrument: <?php echo gen_select_list('select_instrument', $arr_instruments); ?></H2>
<BR />
<BR />

<HR />
<input type="submit" value="Continue" />

<?php

	echo '</FORM>';

require_once('temp_footer.php');

unset($rs);
?>
