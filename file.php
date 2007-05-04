<?php
require_once('app/app_setup.php');

$debug=1;


$app= new AppState();
$app->Initialize();

$state =& $app->GetAppStateArray();

$rs = new RecordSet();
$rs->SetDataConnection($db);
/*


//$name= 'billy';
$name = $state['name'];


 $r = insert_user($name, $rs);
 
 var_dump($r);
 debug('r', $r);
*/

$rs->Clear();

$sql = 'SELECT * FROM data_entry_users ORDER BY ID';

$rs->SetSQL($sql);
$rs->Populate();

debug('error', $rs->sql_error);
debug('empty', $rs->empty_result);
debug('row count', $rs->num_rows);
debug('col count', $rs->num_cols);

debug('users:', $rs->arr_rows);




/*
$r = confirm_unique_new_user($name, $rs);

if ($r === true )
{
	echo 'Yipee!';
} else
{
	echo 'false Yipee';
}
*/

/*
$r= insert_user('mike', $rs);

var_dump($r);

$rs->SetSQL('SELECT * FROM data_entry_users;');
$rs->Populate();

var_dump($rs->arr_rows);

*/

/*
 
 
$ID = get_user_id('Joexxx', $rs);

var_dump($ID);

debug('id=', $ID)

$r = confirm_unique_user('Joe', $rs);

if ($r === true )
{
	echo 'Yipee!';
}


 */


/*
$state['new'] = 'value';

debug('AppState_Session', $_SESSION['AppState']);
debug('AppState_ref', $state);


$top = array(
    'A' => array(),
    'B' => array(
        'B_b' => array(),
    ),
);

$top['A']['parent'] = &$top;
$top['B']['parent'] = &$top;
$top['B']['B_b']['data'] = 'test';
var_dump($top['A']['parent']['B']['B_b']); // array()

*/

/*session_start();

var_dump($_SESSION);

if (!isset($_SESSION['count'])) {
   $_SESSION['count'] = 0;
} else {
   $_SESSION['count']++;
}

//echo 'hello';

var_dump($_SESSION);
*/
 
 
 ?>