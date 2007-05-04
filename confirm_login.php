<?php
/*
 * Created on 2-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require_once('app/application.php');
 
 /*
  * 	- new or returning user?
  *    	- unique new name?
  *    	- insert name
  *    - existing login?
  * 		- match?
  * 			- change user (clear all values);
  *    - get instrument
  *   - any existing sessions for instrument and user?
  * 
  *  -  display name
  *  - confirm insertion
  *  - display instrument
  *  - display any sessions
  * 
  * 
  */
    
  $rs = new RecordSet();
  $rs->SetDataConnection($db);
  
  $msg = '';
  
  if ( !empty($state['new_name']) )
  {		
  		$state['user_name'] = $state['new_name'];
  } else
  {
  	$state['user_name'] = $state['select_name'];
  }
  		
  $state['user_id'] = get_user_id($state['user_name'], $rs);
  		
  unset($state['select_name']);
  unset($state['new_name']);
  
  $state['instrument'] = $state['select_instrument'];
  
  
  require_once('temp_header.php');

  
?>
<FORM method="post" action="int_start_data_entry.php ">
<INPUT type="hidden" name="app_begin" value="true">
<H3> Welcome, <?php echo $state['user_name']; ?> </H3>
<H3><?php echo $msg ; ?></H3>

<H2> You have selected the <?php echo $state['instrument']; ?> Survey Instrument</H2>
<H2> if this is incorrect, OR you are NOT <?php echo $state['user_name']; ?></H2>
<H2> please <a href="login.php">logout</a></H2>
<BR />
<BR />
<H2>You have completed the following <?php echo $state['instrument']; ?> Surveys:</H2>

<?php
	$arr = get_sessions($state['user_id'], $state['instrument'], $rs, true);
	//var_dump($state);
	if ($arr !== false)
	{
		foreach ($arr as $survey)
		{
			//echo gen_option( $saved['date'] , 'radio_blank', 'saved_sess', $saved['ID'], $suf = '');
			echo "<div>ID#{$survey['ID']}, completed on {$survey['date']}, </div>";
		}
	} else
	{
		echo 'no complete ' . $state['instrument'] . ' surveys';
	}
?>
<BR />
<BR />

<H2>Select Incomplete <?php echo $state['instrument']; ?> Surveys:</H2>

<?php
	$arr = get_saved_sessions($state['user_id'], $state['instrument'], $rs);
	//var_dump($state);
	if ($arr !== false)
	{
		foreach ($arr as $saved)
		{
			echo gen_option( 'ID # ' .$saved['ID'] , 'radio_blank', 'hydrate_session', $saved['ID'],  $saved['date'] . ' last page completed:' . $saved['last_page_num']);
		}
	} else
	{
		echo 'no incomplete ' . $state['instrument'] . ' surveys';
	}

?>
<BR />

  <input type="submit" value="Continue ->"/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type="radio" name="mode" value="entry" CHECKED/> Data Entry
  <input type="radio" name="mode" value="report"/> Report  
  </FORM>
  
  <?php
  require_once('temp_footer.php');
  ?>
  

