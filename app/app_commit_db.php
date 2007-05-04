<?php
 require_once('app_setup.php');
 
 $rs = new RecordSet();
 $rs->SetDataConnection($db);
 
$arr = find_all_form_values( $state);
debug('arr', $arr);

$start = $state['start_Q_num'];
$end = $state['end_Q_num'];
foreach($arr as $key => $val)
{
	$num = find_nums($key);
	//if (	($start < 99 AND $num >= $start AND $num < 99) OR ($start > 99 AND $num >= $start AND $num > 99) )	// accommodate 100 series questions on first page
	if ($start <= $num AND $num <= $end)
	{
			$arr_cols[] = " $key = '$val' ";
	}
}

if (isset($arr_cols))
{
	$frmt = " %s = '%s' ";
	$survey_key =  sprintf($frmt, 'Survey_Key', $state['sess_ID']);
	array_unshift($arr_cols, $survey_key);
	
	$str_cols = implode(', ', $arr_cols);
	//debug('str_cols', $str_cols) ;
	
	$table = str_replace('_form', '', $state['survey_page']);
	
	$sql = 'INSERT ' . $table . ' SET ' . $str_cols;
	debug('sql', $sql);
	
	$rs->SetSQL($sql);
	try
	{
		$rs->UnsafePopulate();
	} 
	catch (Exception $e)
	{
		 	$msg = 'DB Commit FAILED.  Do not proceed with this survey.  Call Michael at 301-270-9673 x 304.   Repeat the "Error Message:" below to him and provide this Survey Key: ' . $state['sess_ID']; 
		 	echo '<pre>';
			echo "$msg\n\n" .
			'Error message: ' . $e->getMessage() . "\n" .
			'Error code: ' . $e->getCode() . "\n" .
			'File and line: ' . $e->getFile() . '(' . $e->getLine() . ") \n" .
			'Trace: ' . $e->getTraceAsString() . "\n" .
			 '</pre>';
	}
}

	$rs->Clear();
	
	$page_num =(int)  get_page_num($state['verify_page']);
	
	if ($state['next_page'] == 'login.php')
	{
		$sql = 'UPDATE surveys SET complete_date = now() , complete = 1 WHERE ID = \'' . $state['sess_ID'] . '\'';
	} else
	{
		$sql = 'UPDATE surveys SET sess_saved_date = now() , last_page_num = ' . $page_num . ' WHERE ID = \'' . $state['sess_ID'] . '\'';
	}
	
	debug('sql', $sql);
	
	$rs->SetSQL($sql);
	$rs->Populate();

unset($rs);

 
?>
