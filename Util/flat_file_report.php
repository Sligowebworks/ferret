<?php
require_once ('../app/app_setup.php');

 $rs = new RecordSet();
 $rs->SetDataConnection($db);

$sql = 'SELECT * FROM ta_concatenated;';

$rs->SetSQL($sql);
$rs->Populate();

//echo 'affected' . mysql_affected_rows($db);

 $arr = $rs->arr_rows;
 $cols = $rs->arr_cols;
 
 if (is_array($arr))
 {
 	$str = '"' . implode("\"\t\"", $cols) . '"';
 	//$str = implode('|', $cols);
 	$arr_rows[] = $str;
 	foreach($arr as $row)
 	{
 		//$str = '"' . implode('"|"', $row) . '"';
 		$str = '"' . implode("\"\t\"", $row) . '"';
 		//$str = implode('|', $row);
 		$str = str_replace("\n", "\t", $str);
 		$str = str_replace("\r", '', $str);
 		$arr_rows[] = $str;
 	}
 	echo '<PRE>' . implode("\n", $arr_rows) . '</PRE>';
 }
 
/*
 * Created on 7-Nov-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
