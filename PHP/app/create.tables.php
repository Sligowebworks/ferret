<?php
/*
 * Created on 4-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('app_setup.php');
 
 $rs = new RecordSet();
 $rs->SetDataConnection($db);
 
 //$state['begin_Q_num'] = 1;
 
$arr = find_all_form_values( $state);
debug('arr', $arr);

foreach($arr as $key => $val)
{
	$state['commited'][$key] = $val;
	$frmt = " $key = '$val' ";
	$arr_cols[] = sprintf($frmt, $key, $val);
}

$str_cols = implode(', ', $arr_cols);
debug('str_cols', $str_cols) ;

$table = str_replace('_form', '', $state['survey_page']);

$sql = 'INSERT ' . $table . ' SET ' . $str_cols;

//debug('sql', $sql);


/* genereate CREATE TABLE statements*/

$sql = "
CREATE TABLE {$table}
(
		Survey_Key bigint NOT NULL";

foreach($arr as $key => $val)
{
	//$state['commited'][$key] = $val;
	if (stripos($key, 'radio') !== false)
	{
		$type = 'varchar(50)';
	}elseif (stripos($key, 'textarea') !== false)
	{
		$type = 'text';
	} elseif (stripos($key, 'text') !== false)
	{
		$type = 'varchar(255)';
	} elseif (stripos($key, 'other') !== false)
	{
		$type = 'varchar(255)';
	}elseif (stripos($key, 'checkbox') !== false)
	{
		$type = 'varchar(50)';
	}
	
	$field = ",\n\t\t$key $type NULL";
	
	$sql .= $field;
}
$sql .= "\n);\n";

echo '************************************************<BR />';
echo '<PRE>';
debug('sql', $sql);
echo '</PRE>';



 
?>
