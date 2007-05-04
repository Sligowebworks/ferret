<?php
/*
 * Created on 26-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require_once ('../app/app_setup.php');
 
 define('FILE_SPEC', '/var/www/Instruments/Util/guardian_page11.csv' );
 
 $file = fopen(FILE_SPEC, 'r');
 
 $keys = explode('|', str_replace('"', '',  fgets($file)));
 $garbage = fgets($file);
 
 echo '<PRE>';
 
// echo 'keys: ';
 //var_dump ($keys);
 
 while (!feof($file))
 {
 	$line = str_replace('"', '',  fgets($file));
 	//echo $line;
 	$arr = explode('|', $line);
 	//var_dump($arr);
 	
 	if (count($arr) == 18) //mysterious garbage in the file
 	{
 		for($i = 0; $i < 9+1; $i++)
 		{
 			$record[trim($keys[$i])] = trim($arr[$i]);
 		}
 		$records[] = $record;
 	} 
 }
 //var_dump ($records);
 
 
 foreach($records as $row)
 {
 	$INSERT = "REPLACE guardian_page11 \n";
 	$str = 'SET ,';
 	foreach($row as $field => $value)
 	{
 		$str .= ", $field = '$value' ";
 	}
 	$INSERT .= str_replace(',,', ' ', $str);
 	
 	$SQL[] = $INSERT;
 }
 
 #~,~`~,~`~,~`~,~`
 $SQL = implode("; \n\n", $SQL) . ';';
 //echo($SQL);
 #~,~`~,~`~,~`~,~`
 
 $sql = 'SELECT * FROM guardian_concatenated;';
 
 $rs = new RecordSet();
 $rs->SetDataConnection($db);

 $rs->SetSQL($sql);
 //echo $sql;
$rs->Populate();

 $arr = $rs->arr_rows;
 $cols = $rs->arr_cols;
 
 //echo $rs->num_rows;

 if (is_array($arr))
 {
 	$str = '"' . implode('"|"', $cols) . '"';
 	$arr_rows[] = $str;
 	foreach($arr as $row)
 	{
 		$str = '"' . implode('"|"', $row) . '"';
 		$str = str_replace("\n", "\t", $str);
 		$str = str_replace("\r", '', $str);
 		$arr_rows[] = $str;
 	}
 	echo implode("\n", $arr_rows);
 }


 
 echo '</PRE>'; ?>
