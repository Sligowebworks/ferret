<?php
/*
 * Created on 18-Oct-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once ('../app/app_setup.php');
require_once('../app/app_functions.php');

//
function gen_JOIN($prefix, $n1, $nn)
{
	$join = '';
	
	for ($n = $n1; $n < $nn+1; $n++)
	{
		$num = $n;
		if ($num <10)
		{
			$num = '0' . $n;
		}
		$tbl = $prefix . $num;
		
		if ($n != $n1)	
		{
			$join .= "\n LEFT OUTER  JOIN {$tbl} \n ON complete_surveys.ID = {$tbl}.Survey_Key \n";	
		} else
		{
			$join = "complete_surveys LEFT OUTER JOIN {$tbl} on complete_surveys.ID = {$tbl}.Survey_Key";
		}
		
	}
	return $join;
}

$db = mysql_pconnect('localhost',  'howard', 'UvASS2PJ8eGTapQG');
//bool mysql_select_db ( string database_name [, resource link_identifier] )
$bln = mysql_select_db('howard_incentive', $db);
	

//guardian
$joins = gen_JOIN('guardian_page', 2, 16);

$SELECT = "SELECT * FROM  {$joins}  WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Parent/Guardian' ORDER BY complete_surveys.ID LIMIT 1";
//echo $SELECT;

$rs = new RecordSet();
$rs->SetDataConnection($db);
$rs->SetSQL($SELECT);
$rs->Populate();

$arr = $rs->arr_rows;
echo 'GUARDIAN<BR />';
CSSTable_with_Header($arr, array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					));




//prj mgr
$joins = gen_JOIN('proj_mgr_page', 2, 13);

$SELECT = "SELECT * FROM  {$joins}  WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Project Manager' ORDER BY complete_surveys.ID LIMIT 1";
//echo $SELECT;

$rs = new RecordSet();
$rs->SetDataConnection($db);
$rs->SetSQL($SELECT);
$rs->Populate();

$arr = $rs->arr_rows;
echo 'PROJECT MGR<BR />';
CSSTable_with_Header($arr, array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					));


//Teacher
$joins = gen_JOIN('teacher_page', 2, 14);

//var_dump($str);

$SELECT = "SELECT * FROM  {$joins}  WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Teacher' ORDER BY complete_surveys.ID LIMIT 1";
//echo $SELECT;

$rs = new RecordSet();
$rs->SetDataConnection($db);
$rs->SetSQL($SELECT);
$rs->Populate();

$arr = $rs->arr_rows;

//echo '<PRE>';  var_dump($arr) ; echo '</PRE>';

echo 'TEACHER<BR />';

CSSTable_with_Header($arr, array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					));


//Teacher_Assistant
$joins = gen_JOIN('ta_page', 2, 14);

//var_dump($str);

$SELECT = "SELECT * FROM  {$joins}  WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Teacher Assistant' ORDER BY complete_surveys.ID LIMIT 1";
//echo $SELECT;

$rs = new RecordSet();
$rs->SetDataConnection($db);
$rs->SetSQL($SELECT);
$rs->Populate();

$arr = $rs->arr_rows;

//echo '<PRE>';  var_dump($arr) ; echo '</PRE>';

echo 'TA<BR />';

CSSTable_with_Header($arr, array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					));
			
?>

