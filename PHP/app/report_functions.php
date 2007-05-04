<?php
function /*String */ gen_avg_min_max($field,  $table)
{ 
	return "SELECT AVG({$field}) as `Average`, MIN({$field}) as `Min.`, MAX({$field}) as `Max.` FROM {$table}";
}
function /*String*/ gen_count_n_freq($field, $total, $table)
{
	return "SELECT 
	{$field} as ''
,	count({$field}) as `Count`
,	count({$field})/{$total} as `Freq.`
FROM {$table}
GROUP BY ``
ORDER BY `Freq.` DESC";
}
function /*String*/ gen_simple_radio($Qn, $total, $table)
{
	return gen_count_n_freq("Q{$Qn}_radio", $total, $table);
	/*return "SELECT 
	Q{$Qn}_radio as ''
,	count(Q{$Qn}_radio) as `Count`
,	count(Q{$Qn}_radio)/{$total} as `Freq.`
FROM {$table}
GROUP BY ``
ORDER BY `Freq.` DESC";*/
}
function /*String*/ gen_Recomendations_table($arr, $n1, $n2, $table = 'proj_mgr_concatenated')
 {
 	$y = $n1; $n1--; $n2++; $sql = '';
 	
 	for ($y > $n1; $y < $n2; $y++)
		{
			$sql .= "SELECT 
				'{$y}.' as `#`
			,	'{$arr[$y]}' as``
			,	Q{$y}_textarea as `comments`
			FROM {$table}
			";
		
			if($y < $n2 -1)
			{
				$sql .= 'UNION' . "\n";
			}
		}
		
		return $sql;
 }
function /*String*/ gen_Recomendations_table_WthNA($arr, $n1, $n2, $table = 'proj_mgr_concatenated')
 {
 	$y = $n1; $n1--; $n2++; $sql = '';
 	
 	for ($y > $n1; $y < $n2; $y++)
		{
			$sql .= "SELECT 
				'{$y}.' as `#`
			,	'{$arr[$y]}' as``
			,	Q{$y}_textarea as `comments`
			,	Q{$y}_NONE
			FROM {$table}
			";
		
			if($y < $n2 -1)
			{
				$sql .= 'UNION' . "\n";
			}
		}
		
		return $sql;
 }
 function /*String*/ gen_scalarQ_rpt($arr, $n1, $n2, $total, $table = 'proj_mgr_concatenated')
 {
 	$y = $n1; $n1--; $n2++; $sql = '';
 	
 	for ($y > $n1; $y < $n2; $y++)
		{
			$sql .= "SELECT 
				'{$y}.' as `#`
			,	'{$arr[$y]}' as``
			,	Q{$y}_radio as `scale`
			,	count(Q{$y}_radio) as `Count`
			,	count(Q{$y}_radio)/{$total} as `Freq.`
			FROM {$table}
			GROUP BY `#`,  `scale`  ";
		
			if($y < $n2 -1)
			{
				$sql .= 'UNION' . "\n";
			}
		}
		
		return $sql;
 }
 
 function /*void*/ print_query($sql, & $rs)
 {
 	if (strlen($sql) === 0)	{
 		return false;
 	}
 	$rs->SetSQL($sql);	$rs->Populate();
	
	if ($rs->num_rows  > 0) {
		CSSTable($rs->arr_rows, array('Cell' => 'cell', 'Row' => 'row', 'TH' => 'TableHeader'), true);
	}
	$rs->Clear();	
	return true;
 }
/*
 * Created on 5-Nov-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
