<?php

function hydrate_session($id, &$rs)
{
	global $state;
	
	$rs->Clear();
	$sql = 'SELECT * FROM surveys WHERE ID = ' . $id;
	$rs->SetSQL($sql);
	$rs->Populate();
	
	$arr = $rs->arr_rows;
	
	$user_id = $arr[0]['user_id'];
	$sess_id = $arr[0]['ID'];
	$last_page = $arr[0]['last_page_num'];
	
	$state['user_id'] = $user_id;
	$state['sess_ID'] = $sess_id;
	
	return $last_page;
}
function create_data_entry_session($db, &$state)
{
	$rs = new RecordSet();
	$rs->SetDataConnection($db);
	
	$sql = "INSERT surveys (user_id, instrument) VALUES ('{$state['user_id']}', '{$state['instrument']}' );";
	debug('app_begin create survey SQL', $sql);
	
	$rs->SetSQL($sql);
	$rs->Populate();
	
	/*$sql = "SELET ID from surveys WHERE user_id = '{$state['user_id']}'  ORDER BY ID DESC LIMIT 1;";
	debug('app_begin retrieve session id SQL', $sql);
	$rs->Populate();
	$arr = $rs->arr_rows;*/
	
	$state['sess_ID'] = $rs->new_id;
	debug('sess_id', $rs->new_id);
	
	clear_session_forms($state);
	
	unset($state['app_begin']);
}
function clear_session_forms(&$state)
{
	foreach ($state as $var => $val)
	{
		if ( strpos($var, 'Q') === 0)
		{
			unset($state[$var]);
		}
	}
}
  function get_sessions($usr, $instr, &$rs, $blnComplete = false)
  {	//return array (records) or false
  		$rs->Clear();
  		/*
  		 * ID
  		 *  sess_saved_date
  		 *  last_page_num
  		 *  user_id
  		 * complete
  		 * instrument
  		 * complete_date
  		 */
  		 
  		 if ($blnComplete == true)
  		 {
  		 	$blnComplete = 1;
  		 	$date_field = 'complete_date';
  		 } else
  		 {
  		 	$blnComplete = 0;
  		 	$date_field = 'sess_saved_date';
  		 }
  		
  		$sql = 'SELECT ID, ' . $date_field . ' as \'date\', last_page_num as \'page_num\', last_page_num FROM surveys WHERE complete = ' . $blnComplete . ' AND user_id = ' . $usr  . ' ' .
  				'AND instrument = \'' . $instr . '\' AND sess_saved_date IS NOT NULL ;' ;
  		
  		$rs->SetSQL($sql);
  		$rs->Populate();
  		
  		if ( $rs->empty_result == false)
  		{
  			return $rs->arr_rows ;
  		}
  		else
  		{
  			return false;
  		}
  }
  function get_saved_sessions($usr, $instr, &$rs)
  {		//return array (records) or false
  		return get_sessions($usr, $instr, $rs);
  }
    #~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`
  function confirm_new_user($name, &$rs)
  {		//return bool
  		$rs->Clear();
  		
  		$sql = 'SELECT ID FROM data_entry_users WHERE name= ' . " '$name' ";
  		$rs->SetSql($sql);
  		$rs->Populate();
  		
  		$count = $rs->num_rows;
  		
  		if ($count == 0)
  		{	// user name does not exist in the database;
  			return true;
  		} else
  		{
  			return false;
  		}
  }
  function insert_user($name, &$rs)
  {		//return ID, or false 
  		//echo $name;
  		if ($name === '')
  		{
  			return false;
  		}
  		
  		$rs->Clear();
  		$sql = 'INSERT INTO data_entry_users SET name=\'' . $name . '\' ;';
  		debug('insert_user SQL', $sql);
  		$rs->SetSQL($sql);
  		$rs->Populate();
  		
  		if ($rs->sql_error == false)
  		{
  			return $rs->new_id;
  		} else
  		{
  			return false;
  		}
  }
  function get_user_id($name, &$rs)
  {		// return ID
  	/*
  	 * check existence of user name
  	 * if not found, insert
  	 * return user id
  	 */
		  		
	if (confirm_new_user($name, $rs) === true )
	{	// name is not found, so insert it.
		$ID = insert_user($name, $rs);
		if ($ID === false)
		{
			throw new Exception('insert user failed! -- function get_user_id()');
		}
		return $ID;
	}
	
	//  get user ID.
  	$rs->Clear();
  	
  	$sql = 'SELECT ID FROM data_entry_users WHERE name=' . " '$name' ; " ;
  	debug('get_user_id SQL:', $sql);
  	$rs->SetSQL($sql);
  	$rs->Populate();
  	
  	if( $rs->num_rows > 0)
  	{
  		$ID = $rs->arr_rows[0]['ID'];
  	} else
  	{
  		throw new Exception('error retrieving user id -- function get_user_id()');
  	}
	
	  return $ID;
  }
  
  #~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`

?>
