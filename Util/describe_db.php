<?php
/*
 * Created on 19-Dec-06
 *
 *Documentation generating script
 * 
 */
require_once ('../app/app_setup.php');

function retrieve_result($sql, $rs)	{
	global $state;
	$rs->Clear();
	$rs->SetDataConnection($state['db']);
	$rs->SetSQL($sql);
	$rs->Populate();
	echo $rs->sql_error;
}

function dump_query( $sql = '', $rs)	{
	if (isset($sql)) 	{
		retrieve_result($sql, $rs);
	}
	CSSTable($rs->arr_rows, array('TH' => '', 'Row' => '', 'Cell' => ''), true);
}

$rs = new RecordSet();

dump_query('SELECT database();', $rs);

echo '<H2>' . 'Tables' . '</H2>';

dump_query('SHOW Tables;', $rs);

echo '<H2>' . 'Table Definitions' . '</H2>';

$sql = 'SHOW Tables;';
retrieve_result($sql, $rs);
$arr = $rs->arr_rows;

foreach($arr as $index => $row)	{
	//var_dump($table);
	foreach($row as $table) {
		if ($table == 'surveys')	{
			echo '<H3>' .$table . '</H3>';
			dump_query('DESCRIBE ' . $table . ';', $rs);
			unset($arr[$index]);
		}
	}
}

foreach($arr as $index => $row)	{
	//var_dump($table);
	foreach($row as $table) {
		if (strpos($table, 'guardian') !== false )	{
			echo '<H3>' .$table . '</H3>';
			dump_query('DESCRIBE ' . $table . ';', $rs);
			unset($arr[$index]);
		}
	}
}



?>
