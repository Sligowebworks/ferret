<?php
/*
 * Created on Oct 10, 2005
 *
 * application handle.
 * Include this file to link essential functionality to a page.
 *  * * * * * * * * * * * * * 
 */
  
require_once ('app_setup.php');

// *** Form Destination Logic
if (strpos($state['PageName'], 'form') !== false)
{
	$state['form'] = $state['PageName'];
	$state['verify_page'] = str_replace('form', 'verify', $state['ScriptPath']);
	$state['next_page'] = '';
} 

if (strpos($state['PageName'], 'verify') !== false)
{
	$page_num = '';
	for ($i = 1; $i < strlen($state['PageName']); $i++)
	{
		$char = $state['PageName'][$i];
		if (is_numeric($char))
		{
			$page_num .= $char;
		}
	}
	$next_page_num = $page_num + 1 ;
	if ($next_page_num < 10)
	{
		$next_page_num = '0' . $next_page_num;
	}
	if ($state['instrument'] == 'Project Manager' AND $next_page_num > 13)
	{
		$state['next_page'] = 'login.php';
	} elseif ($state['instrument'] == 'Parent/Guardian' AND $next_page_num > 16)
	{
		$state['next_page'] = 'login.php';
	} elseif ($state['instrument'] == 'Teacher' AND $next_page_num > 15)
	{
		$state['next_page'] = 'login.php';
	} elseif ($state['instrument'] == 'Teacher Assistant' AND $next_page_num > 15)
	{
		$state['next_page'] = 'login.php';
	}else
	{
		$state['next_page'] = str_replace($page_num, $next_page_num, $state['ScriptPath'] );
		$state['next_page'] = str_replace('verify', 'form', $state['next_page'] );
	}
}
// *** End Form Destination Logic

if (strpos($state['PageName'], 'verify') !== false)
{
	$disable_commit = false;
	$rs = new RecordSet();
	$rs->SetDataConnection($db);
	
	$sql = 'SELECT * FROM ' . str_replace('_verify', '' , $state['PageName'])  . ' WHERE Survey_Key = ' . $state['sess_ID'] ;
	
	$rs->SetSQL($sql);
	$rs->Populate();
	
	if ($rs->empty_result == false)
	{
		$disable_commit = true;
		$record = $rs->arr_rows[0];
		foreach ($record as $field => $value)
		{
			if (strpos($field, 'Q') ===0 )
			{
				$state[$field] = $value;
			}
		}
	}
	
	unset($rs);
}

if ($debug)
{
	require_once('create.tables.php');
}
?>
