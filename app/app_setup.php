<?php
//session_start();
//error_reporting(E_STRICT);
//error_reporting(E_ALL);

define('DOCROOT', '/var/www/Instruments');
ini_set('include_path', DOCROOT . '/app:' . DOCROOT .'/class:' . ini_get('include_path'));

//define('DOCROOT', 'C:\xampp\webroot');
//ini_set('include_path', DOCROOT . '\app;' . DOCROOT .'\class;' . ini_get('include_path'));

//define('DOCROOT', 'D:\Public\Instruments');
//ini_set('include_path', DOCROOT . '\app;' . DOCROOT .'\class;' . ini_get('include_path'));

define('SELF', 'garbage value');

//phpinfo();
global $debug;
if ( isset($_REQUEST['debug']))
{
	$debug = $_REQUEST['debug'];
}

$debug=false;

if (isset($debug)) {
	if ($debug == 0 || false) {
		$debug = false;
	} else {
		$debug = true;
	}
} else {
	$debug = false;
}

require_once('app_functions.php');
require_once('user_and_session_functions.php');

function __autoload($class_name) 
{	//removes need to include class files.
	require_once $class_name . '.php';
}
	//session_start();
	//header("Cache-control: private");  // IE 6 Fix.
	//$_SESSION['count'] = $_SESSION['count'] + 1;

global $db;

//if (false)
if (!$db){
	//$db = odbc_connect('DRIVER={SQL Server};SERVER=INFERNO2;DATABASE=CDHPState', 'CDHPState', 'BrushaBrusha');
	//mysql_pconnect ( [string server [, string username [, string password [, int client_flags]]]] )
	$db = mysql_pconnect('localhost',  'howard', 'UvASS2PJ8eGTapQG');
	
	//bool mysql_select_db ( string database_name [, resource link_identifier] )
	$bln = mysql_select_db('howard_incentive', $db);
	if ($bln === false)
	{
		echo 'invalid db name';
	}
}

$app = new AppState();
$app->Initialize();
$state =& $app->GetAppStateArray();

//$_SESSION['db'] = $db;

// ************* Bread Crumbs *********
/*
if (!isset($_SESSION['BreadCrumbs'])) {
	$_SESSION['BreadCrumbs'] = array(0 => SELF);
}
if (!isset($_SESSION['BreadCrumbs_QS'])) {
	$_SESSION['BreadCrumbs_QS'] = array(0 => QS());
}
$arr_BreadCrumbs =& $_SESSION['BreadCrumbs']; //assign by reference
$arr_BreadCrumbs_QS =& $_SESSION['BreadCrumbs_QS']; //assign by reference

if (end($arr_BreadCrumbs) != SELF && !(strpos(SELF, "do_") || strpos(SELF, "db_") )) {
	// if navigated away from page and not an interstitial
	$arr_BreadCrumbs[] = SELF;
}
if (end($arr_BreadCrumbs_QS) != QS() && !(strpos(SELF, "do_") || strpos(SELF, "db_") )) {
	// if QS has changed and not an interstitial
	if (count($arr_BreadCrumbs) != count($arr_BreadCrumbs_QS) + 1) {
		//if the QS changes but the page does not.
		$arr_BreadCrumbs_QS[count($arr_BreadCrumbs) -1] = QS();
	} else {
		$arr_BreadCrumbs_QS[] = QS();
	}
}*/

// ******** App State Navigation Vars  **************

// ************** DEFAULTS *********** 

?>
