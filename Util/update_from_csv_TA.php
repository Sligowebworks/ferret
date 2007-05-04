<?php
require_once ('../app/app_setup.php');
 
 define('FILE_SPEC', '/var/www/Instruments/corrections/ta_flat.csv' );
 $file = fopen(FILE_SPEC, 'r');
 //define('MAX_PAGE', 15);
 define('MAX_PAGE', 14);
 define('TABLE_PRFX', 'ta');
 
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
//page02
$arr_page03[] = 'Q1_radio';
$arr_page03[] = 'Q1_other';
$arr_page03[] = 'Q2_radio';
$arr_page03[] = 'Q2_other';
$arr_page03[] = 'Q3_radio';
$arr_page03[] = 'Q4_other_1';
$arr_page03[] = 'Q4_other_2';
$arr_page03[] = 'Q4_other_3';
$arr_page03[] = 'Q4_radio';
$arr_page03[] = 'Q4_other_4';
$arr_page03[] = 'Q5_text';
$arr_page03[] = 'Q6_text';
//page03
$arr_page04[] = 'Q7_checkbox_1';
$arr_page04[] = 'Q7_checkbox_2';
$arr_page04[] = 'Q7_checkbox_3';
$arr_page04[] = 'Q7_checkbox_4';
$arr_page04[] = 'Q7_checkbox_5';
$arr_page04[] = 'Q7_checkbox_6';
$arr_page04[] = 'Q7_checkbox_7';
$arr_page04[] = 'Q7_other';
$arr_page04[] = 'Q8_text';
$arr_page04[] = 'Q9_radio';
$arr_page04[] = 'Q10_radio';
//page04
$arr_page05[] = 'Q11_radio';
$arr_page05[] = 'Q12_radio';
$arr_page05[] = 'Q13_radio';
$arr_page05[] = 'Q14_radio';
$arr_page05[] = 'Q15_radio';
$arr_page05[] = 'Q16_radio';
$arr_page05[] = 'Q17_radio';
$arr_page05[] = 'Q18_radio';
$arr_page05[] = 'Q19_radio';
//page05
$arr_page06[] = 'Q20_textarea';
$arr_page06[] = 'Q21_textarea';
$arr_page06[] = 'Q22_textarea';
$arr_page06[] = 'Q23_radio';
$arr_page06[] = 'Q24_radio';
$arr_page06[] = 'Q25_textarea';
$arr_page06[] = 'Q26_radio';
$arr_page06[] = 'Q27_radio';
//page06
$arr_page07[] = 'Q28_radio';
$arr_page07[] = 'Q29_radio';
$arr_page07[] = 'Q30_checkbox_1';
$arr_page07[] = 'Q30_checkbox_2';
$arr_page07[] = 'Q30_checkbox_3';
$arr_page07[] = 'Q30_checkbox_4';
$arr_page07[] = 'Q30_other';
$arr_page07[] = 'Q30_checkbox_5';
$arr_page07[] = 'Q31_checkbox_1';
$arr_page07[] = 'Q31_checkbox_2';
$arr_page07[] = 'Q31_checkbox_3';
$arr_page07[] = 'Q31_checkbox_4';
$arr_page07[] = 'Q31_checkbox_5';
$arr_page07[] = 'Q31_checkbox_6';
$arr_page07[] = 'Q31_checkbox_7';
$arr_page07[] = 'Q31_other';
//page07
$arr_page08[] = 'Q33_radio';
$arr_page08[] = 'Q34_radio';
$arr_page08[] = 'Q35_radio';
$arr_page08[] = 'Q36_radio';
$arr_page08[] = 'Q37_checkbox_1';
$arr_page08[] = 'Q37_checkbox_2';
$arr_page08[] = 'Q37_checkbox_3';
$arr_page08[] = 'Q37_checkbox_4';
$arr_page08[] = 'Q37_checkbox_5';
$arr_page08[] = 'Q37_other';
$arr_page08[] = 'Q38_radio';
//page08
$arr_page09[] = 'Q39_radio';
$arr_page09[] = 'Q40_text_1';
$arr_page09[] = 'Q40_radio_1';
$arr_page09[] = 'Q40_text_2';
$arr_page09[] = 'Q40_radio_2';
$arr_page09[] = 'Q40_text_3';
$arr_page09[] = 'Q40_radio_3';
$arr_page09[] = 'Q40_text_4';
$arr_page09[] = 'Q40_radio_4';
//page09
$arr_page10[] = 'Q41_radio';
$arr_page10[] = 'Q42_radio';
$arr_page10[] = 'Q43_radio';
$arr_page10[] = 'Q44_radio';
$arr_page10[] = 'Q45_radio';
$arr_page10[] = 'Q46_radio';
$arr_page10[] = 'Q47_radio';
$arr_page10[] = 'Q48_radio';
$arr_page10[] = 'Q49_radio';
//page10
$arr_page11[] = 'Q50_radio';
$arr_page11[] = 'Q51_radio';
$arr_page11[] = 'Q52_radio';
$arr_page11[] = 'Q53_radio';
$arr_page11[] = 'Q54_radio';
$arr_page11[] = 'Q55_radio';
$arr_page11[] = 'Q56_text';
$arr_page11[] = 'Q57_radio';
//page11
$arr_page12[] = 'Q58_radio';
$arr_page12[] = 'Q58_other';
//page12
$arr_page13[] = 'Q59_textarea';
$arr_page13[] = 'Q59_NONE';
$arr_page13[] = 'Q60_textarea';
$arr_page13[] = 'Q60_NONE';
$arr_page13[] = 'Q61_textarea';
$arr_page13[] = 'Q61_NONE';
$arr_page13[] = 'Q62_textarea';
$arr_page13[] = 'Q62_NONE';
$arr_page13[] = 'Q63_textarea';
$arr_page13[] = 'Q63_NONE';
$arr_page13[] = 'Q64_textarea';
$arr_page13[] = 'Q64_NONE';
$arr_page13[] = 'Q65_textarea';
$arr_page13[] = 'Q65_NONE';
$arr_page13[] = 'Q66_textarea';
$arr_page13[] = 'Q66_NONE';
$arr_page13[] = 'Q67_textarea';
$arr_page13[] = 'Q67_NONE';
//page13
$arr_page14[] = 'Q68_textarea';
$arr_page14[] = 'Q69_radio';
$arr_page14[] = 'Q69_other';
$arr_page14[] = 'Q70_text';
//page14
/*
$arr_page15[] = 'Q71_text';
$arr_page15[] = 'Q72_radio';
$arr_page15[] = 'Q72_other';
$arr_page15[] = 'Q73_radio';
$arr_page15[] = 'Q73_other';
$arr_page15[] = 'Q74_radio';
$arr_page15[] = 'Q74_other';
$arr_page15[] = 'Q75_textarea';
//page15
  */
 
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
