<?php
/*
 * Created on 4-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('app/app_setup.php');
 
 $state =& $app->GetAppStateArray();
 $rs = new RecordSet();
 $rs->SetDataConnection($db);
 
if (! empty($state['app_begin']))
{
	if(!empty($state['hydrate_session']))
	{
		clear_session_forms($state);
		$page_num = hydrate_session($state['hydrate_session'], $rs);
	} else
	{
		create_data_entry_session($db, $state);
		clear_session_forms($state);
	}
}

switch ($state['instrument'])
  {
  		case 'Project Manager': 
  			$start_page = 'proj_mgr_page02_form.php';
  		 		break;
		case  'Parent/Guardian': 
			$start_page = 'guardian_page02_form.php';
  		 		break;
 		case  'Teacher':
 			$start_page = 'teacher_page02_form.php';
  		 		break;
		case  'Teacher Assistant':
			$start_page = 'TA_page02_form.php';
  		 		break;
  		default:
  }
  
if (array_key_exists('mode', $state)) {
	if ($state['mode'] == 'report')
	{
		$start_page = str_replace('form', 'report', $start_page);
	}
}

unset($state['app_begin']);
unset($state['hydrate_session']);

 $host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if (isset($page_num))
{
	$page_num++;
	if ($page_num < 10)
	{
		$page_num = '0' . $page_num;
	}
	
	$start_page = str_replace('02', $page_num, $start_page);
}

$extra = $start_page;


$header = "Location: http://$host$uri/$extra";
if($debug == true)
{
	echo "<a href=\"http://$host$uri/$extra\">$header</a>";
} else
{
	header($header);
}

 
 
?>
