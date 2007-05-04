<?php
require_once ('../app/app_setup.php');
 
 define('FILE_SPEC', '/var/www/Instruments/corrections/project_manager_flat.csv' );
 $file = fopen(FILE_SPEC, 'r');
 define('MAX_PAGE', 13);
 define('TABLE_PRFX', 'proj');
 
 function /*String*/ gen_REPLACE($arr, $table)
 {
 	$INSERT = "REPLACE {$table} \n";
 	$str = 'SET ,';
 	foreach($arr as $field => $value)
 	{
 		$str .= ", $field = '$value' ";
 	}
 	$INSERT .= str_replace(',,', ' ', $str);
 	return $INSERT;
 }
 
 //fields
$arr_page02[] = 'Q101_text';
$arr_page02[] = 'Q102_text';
$arr_page02[] = 'Q103_text';
$arr_page02[] = 'Q104_text';
$arr_page02[] = 'Q105_radio';
$arr_page02[] = 'Q106_text';
$arr_page02[] = 'Q107_text';
//page02';
$arr_page03[] = 'Q1_radio';
$arr_page03[] = 'Q1_Other';
$arr_page03[] = 'Q2_radio';
$arr_page03[] = 'Q2_Other';
$arr_page03[] = 'Q3_radio';
$arr_page03[] = 'Q4_radio';
$arr_page03[] = 'Q4_1_text';
$arr_page03[] = 'Q4_2_text';
$arr_page03[] = 'Q4_3_text';
$arr_page03[] = 'Q4_4_text';
$arr_page03[] = 'Q5_text';
$arr_page03[] = 'Q6_text';
//page03';
$arr_page04[] = 'Q7_radio';
$arr_page04[] = 'Q8_radio';
//page04';
$arr_page05[] = 'Q9_radio';
$arr_page05[] = 'Q10_radio';
$arr_page05[] = 'Q11_radio';
$arr_page05[] = 'Q12_radio';
$arr_page05[] = 'Q13_radio';
$arr_page05[] = 'Q14_radio';
$arr_page05[] = 'Q15_radio';
$arr_page05[] = 'Q16_radio';
$arr_page05[] = 'Q17_radio';
//page05';
$arr_page06[] = 'Q18_RECOMMENDED_text';
$arr_page06[] = 'Q18_radio';
$arr_page06[] = 'Q18_other';
$arr_page06[] = 'Q19_radio';
$arr_page06[] = 'Q20_radio';
$arr_page06[] = 'Q21_radio';
$arr_page06[] = 'Q22_radio';
$arr_page06[] = 'Q22_textarea';
//page06';
$arr_page07[] = 'Q23_radio';
$arr_page07[] = 'Q24_radio';
$arr_page07[] = 'Q25_radio';
$arr_page07[] = 'Q26_radio';
$arr_page07[] = 'Q27_radio';
$arr_page07[] = 'Q28_radio';
$arr_page07[] = 'Q29_radio';
$arr_page07[] = 'Q30_radio';
$arr_page07[] = 'Q31_radio';
$arr_page07[] = 'Q32_radio';
$arr_page07[] = 'Q33_checkbox_1';
$arr_page07[] = 'Q33_checkbox_2';
$arr_page07[] = 'Q33_checkbox_3';
$arr_page07[] = 'Q33_checkbox_4';
$arr_page07[] = 'Q33_other';
$arr_page07[] = 'Q33_checkbox_5';
//page07';
$arr_page08[] = 'Q34_checkbox_1';
$arr_page08[] = 'Q34_checkbox_2';
$arr_page08[] = 'Q34_checkbox_3';
$arr_page08[] = 'Q34_checkbox_4';
$arr_page08[] = 'Q34_checkbox_5';
$arr_page08[] = 'Q34_checkbox_6';
$arr_page08[] = 'Q34_checkbox_7';
$arr_page08[] = 'Q34_other';
$arr_page08[] = 'Q35_radio';
$arr_page08[] = 'Q36_radio';
$arr_page08[] = 'Q37_radio';
$arr_page08[] = 'Q38_radio';
//page08';
$arr_page09[] = 'Q39_radio';
$arr_page09[] = 'Q40_radio';
$arr_page09[] = 'Q41_radio';
$arr_page09[] = 'Q42_radio';
$arr_page09[] = 'Q43_radio';
$arr_page09[] = 'Q44_radio';
$arr_page09[] = 'Q45_radio';
$arr_page09[] = 'Q46_radio';
$arr_page09[] = 'Q47_radio';
//page09';
$arr_page10[] = 'Q48_radio';
$arr_page10[] = 'Q49_radio';
$arr_page10[] = 'Q50_radio';
$arr_page10[] = 'Q51_radio';
$arr_page10[] = 'Q52_radio';
$arr_page10[] = 'Q53_radio';
$arr_page10[] = 'Q53_other';
//page10';
$arr_page11[] = 'Q54_textarea';
$arr_page11[] = 'Q54_NONE';
$arr_page11[] = 'Q55_textarea';
$arr_page11[] = 'Q55_NONE';
$arr_page11[] = 'Q56_textarea';
$arr_page11[] = 'Q56_NONE';
$arr_page11[] = 'Q57_textarea';
$arr_page11[] = 'Q57_NONE';
$arr_page11[] = 'Q58_textarea';
$arr_page11[] = 'Q58_NONE';
$arr_page11[] = 'Q59_textarea';
$arr_page11[] = 'Q59_NONE';
$arr_page11[] = 'Q60_textarea';
$arr_page11[] = 'Q60_NONE';
$arr_page11[] = 'Q61_textarea';
$arr_page11[] = 'Q61_NONE';
//page11';
$arr_page12[] = 'Q62_textarea';
$arr_page12[] = 'Q63_radio';
$arr_page12[] = 'Q63_other';
$arr_page12[] = 'Q64_text';
//page12';
$arr_page13[] = 'Q65_text';
$arr_page13[] = 'Q66_radio';
$arr_page13[] = 'Q66_other';
$arr_page13[] = 'Q67_radio';
$arr_page13[] = 'Q67_other';
$arr_page13[] = 'Q68_radio';
$arr_page13[] = 'Q68_other';
$arr_page13[] = 'Q69_textarea';
//page13

for($n=2; $n < MAX_PAGE+1 ; $n++)
{	$num = $n;
	if ($n < 10) {$num = '0'. $n; }
	$arr_pages[$n] = ${"arr_page$num"};
}
 //~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//~,~`//
 
 $keys = explode('|', str_replace('"', '',  fgets($file)));
 //$garbage = fgets($file);
 
 echo '<PRE>';
 
 //echo 'keys: '; 	var_dump ($keys);
 
//parse into array of records
 while (!feof($file))
 {
 	$strline = str_replace('"', '',  str_replace('\'', '\\\'', fgets($file)));
 	//echo $line;
 	$arr = explode('|', $strline);
 	//var_dump($arr);
 	
 	{
 		for($i = 0; $i < count($arr); $i++)
 		{
 			$line[trim($keys[$i])] = trim($arr[$i]);
 		}
 		//echo 'line: '; var_dump($line);

 		foreach($arr_pages as $key => $arr_page)
		{
			unset($record);
			foreach ($arr_page as $field)
			{
				$record[$field] = $line[$field];
			}
			
			$record = array_merge(array('Survey_Key' => $line['ID']), $record);
			$n = $key;
			if ($key < 10 ) {$n = '0'. $n; }
			
			$table = TABLE_PRFX . "_page$n";
			$SQL[] = gen_REPLACE($record, $table);
		}
 	} 
 }
 //var_dump ($records);
 
  #~,~`~,~`~,~`~,~`
 $SQL = implode("; \n\n", $SQL) . ';';
echo($SQL);
 #~,~`~,~`~,~`~,~`
 
 echo '</PRE>'; 

/*
 * Created on 7-Nov-06
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
