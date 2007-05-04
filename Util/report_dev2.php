<?php
require_once ('../app/app_setup.php');
require_once('../app/app_functions.php');


$sql = "" .
		"DESCRIBE proj_mgr_concatenated;";

$rs = new RecordSet();
$rs->SetDataConnection($db);
$rs->SetSQL($sql);
$rs->Populate();

$arr = $rs->arr_rows;

foreach($arr as $row)
{
	$fields[$row['Field']] = $row['Type'] ;
}

if(count($fields) > 0 )
{
	$answer = find_related_form_values('Q4_', $fields);
}
var_dump($answer);
CSSTable($arr, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'),  true);





/*
 * Created on 2-Nov-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
