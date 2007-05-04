<?php

require_once ('../app/app_setup.php');
 
 define('FILE_SPEC', '/var/www/Instruments/corrections/guardian_combined.csv' );
 $file = fopen(FILE_SPEC, 'r');
 define('MAX_PAGE', 16);
 define('TABLE_PRFX', 'guardian');
 
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
$arr_page03[] = 'Q1_Other';
$arr_page03[] = 'Q2_text';
$arr_page03[] = 'Q3_text';
$arr_page03[] = 'Q4_text';
$arr_page03[] = 'Q5_text_age_1';
$arr_page03[] = 'Q5_radio_Gender_1';
$arr_page03[] = 'Q5_text_relationship_1';
$arr_page03[] = 'Q5_text_age_2';
$arr_page03[] = 'Q5_radio_Gender_2';
$arr_page03[] = 'Q5_text_relationship_2';
$arr_page03[] = 'Q5_text_age_3';
$arr_page03[] = 'Q5_radio_Gender_3';
$arr_page03[] = 'Q5_text_relationship_3';
$arr_page03[] = 'Q5_text_age_4';
$arr_page03[] = 'Q5_radio_Gender_4';
$arr_page03[] = 'Q5_text_relationship_4';
$arr_page03[] = 'Q5_text_age_5';
$arr_page03[] = 'Q5_radio_Gender_5';
$arr_page03[] = 'Q5_text_relationship_5';
$arr_page03[] = 'Q5_text_age_6';
$arr_page03[] = 'Q5_radio_Gender_6';
$arr_page03[] = 'Q5_text_relationship_6';
$arr_page03[] = 'Q5_text_age_7';
$arr_page03[] = 'Q5_radio_Gender_7';
$arr_page03[] = 'Q5_text_relationship_7';
// page03
$arr_page04[] = 'Q6_radio';
$arr_page04[] = 'Q6_Other';
$arr_page04[] = 'Q7_radio';
$arr_page04[] = 'Q8_text';
$arr_page04[] = 'Q9_radio';
$arr_page04[] = 'Q9_Other';
$arr_page04[] = 'Q10_radio';
$arr_page04[] = 'Q11_text';
$arr_page04[] = 'Q12_text';
//page04';
$arr_page05[] = 'Q13_radio';
$arr_page05[] = 'Q13_text';
$arr_page05[] = 'Q14_radio';
$arr_page05[] = 'Q14_Other';
$arr_page05[] = 'Q15_text_Age_child1';
$arr_page05[] = 'Q15_text_Age_child2';
$arr_page05[] = 'Q15_text_Age_child3';
$arr_page05[] = 'Q15_text_Age_child4';
$arr_page05[] = 'Q15_text_Age_child5';
$arr_page05[] = 'Q15_text_Age_child6';
$arr_page05[] = 'Q15_text_Age_child7';
$arr_page05[] = 'Q15_text_Age_child8';
$arr_page05[] = 'Q15_radio_Gender_child1';
$arr_page05[] = 'Q15_radio_Gender_child2';
$arr_page05[] = 'Q15_radio_Gender_child3';
$arr_page05[] = 'Q15_radio_Gender_child4';
$arr_page05[] = 'Q15_radio_Gender_child5';
$arr_page05[] = 'Q15_radio_Gender_child6';
$arr_page05[] = 'Q15_radio_Gender_child7';
$arr_page05[] = 'Q15_radio_Gender_child8';
$arr_page05[] = 'Q15_checkbox_1_child1';
$arr_page05[] = 'Q15_checkbox_1_child2';
$arr_page05[] = 'Q15_checkbox_1_child3';
$arr_page05[] = 'Q15_checkbox_1_child4';
$arr_page05[] = 'Q15_checkbox_1_child5';
$arr_page05[] = 'Q15_checkbox_1_child6';
$arr_page05[] = 'Q15_checkbox_1_child7';
$arr_page05[] = 'Q15_checkbox_1_child8';
$arr_page05[] = 'Q15_checkbox_2_child1';
$arr_page05[] = 'Q15_checkbox_2_child2';
$arr_page05[] = 'Q15_checkbox_2_child3';
$arr_page05[] = 'Q15_checkbox_2_child4';
$arr_page05[] = 'Q15_checkbox_2_child5';
$arr_page05[] = 'Q15_checkbox_2_child6';
$arr_page05[] = 'Q15_checkbox_2_child7';
$arr_page05[] = 'Q15_checkbox_2_child8';
$arr_page05[] = 'Q15_checkbox_3_child1';
$arr_page05[] = 'Q15_checkbox_3_child2';
$arr_page05[] = 'Q15_checkbox_3_child3';
$arr_page05[] = 'Q15_checkbox_3_child4';
$arr_page05[] = 'Q15_checkbox_3_child5';
$arr_page05[] = 'Q15_checkbox_3_child6';
$arr_page05[] = 'Q15_checkbox_3_child7';
$arr_page05[] = 'Q15_checkbox_3_child8';
$arr_page05[] = 'Q15_checkbox_4_child1';
$arr_page05[] = 'Q15_checkbox_4_child2';
$arr_page05[] = 'Q15_checkbox_4_child3';
$arr_page05[] = 'Q15_checkbox_4_child4';
$arr_page05[] = 'Q15_checkbox_4_child5';
$arr_page05[] = 'Q15_checkbox_4_child6';
$arr_page05[] = 'Q15_checkbox_4_child7';
$arr_page05[] = 'Q15_checkbox_4_child8';
$arr_page05[] = 'Q15_checkbox_5_child1';
$arr_page05[] = 'Q15_checkbox_5_child2';
$arr_page05[] = 'Q15_checkbox_5_child3';
$arr_page05[] = 'Q15_checkbox_5_child4';
$arr_page05[] = 'Q15_checkbox_5_child5';
$arr_page05[] = 'Q15_checkbox_5_child6';
$arr_page05[] = 'Q15_checkbox_5_child7';
$arr_page05[] = 'Q15_checkbox_5_child8';
$arr_page05[] = 'Q15_text_Other_child1';
$arr_page05[] = 'Q15_text_Other_child2';
$arr_page05[] = 'Q15_text_Other_child3';
$arr_page05[] = 'Q15_text_Other_child4';
$arr_page05[] = 'Q15_text_Other_child5';
$arr_page05[] = 'Q15_text_Other_child6';
$arr_page05[] = 'Q15_text_Other_child7';
$arr_page05[] = 'Q15_text_Other_child8';
//page05';
$arr_page06[] = 'Q16_radio';
$arr_page06[] = 'Q17_radio';
$arr_page06[] = 'Q18_checkbox_1';
$arr_page06[] = 'Q18_checkbox_2';
$arr_page06[] = 'Q18_checkbox_3';
$arr_page06[] = 'Q18_checkbox_4';
$arr_page06[] = 'Q18_other';
$arr_page06[] = 'Q18_checkbox_5';
$arr_page06[] = 'Q19_radio';
$arr_page06[] = 'Q19_other';
//page06';
$arr_page07[] = 'Q20_radio';
$arr_page07[] = 'Q21_radio';
$arr_page07[] = 'Q22_radio';
$arr_page07[] = 'Q23_radio';
$arr_page07[] = 'Q24_radio';
$arr_page07[] = 'Q25_radio';
$arr_page07[] = 'Q26_radio';
$arr_page07[] = 'Q27_radio';
//page07';
$arr_page08[] = 'Q28_radio';
$arr_page08[] = 'Q29_radio';
$arr_page08[] = 'Q30_checkbox';
$arr_page08[] = 'Q30_radio';
$arr_page08[] = 'Q31_radio';
$arr_page08[] = 'Q32_radio';
$arr_page08[] = 'Q33_radio';
//page08';
$arr_page09[] = 'Q34_radio';
$arr_page09[] = 'Q35_radio';
$arr_page09[] = 'Q36_radio';
$arr_page09[] = 'Q37_radio';
$arr_page09[] = 'Q38_radio';
$arr_page09[] = 'Q39_radio';
$arr_page09[] = 'Q40_radio';
$arr_page09[] = 'Q41_radio';
//page09';
$arr_page10[] = 'Q42_Other';
$arr_page10[] = 'Q43_Other';
$arr_page10[] = 'Q44_radio';
$arr_page10[] = 'Q45_text_1';
$arr_page10[] = 'Q45_radio_1';
$arr_page10[] = 'Q45_text_2';
$arr_page10[] = 'Q45_radio_2';
$arr_page10[] = 'Q45_text_3';
$arr_page10[] = 'Q45_radio_3';
$arr_page10[] = 'Q45_text_4';
$arr_page10[] = 'Q45_radio_4';
$arr_page10[] = 'Q42_checkbox_1';
$arr_page10[] = 'Q42_checkbox_2';
$arr_page10[] = 'Q42_checkbox_3';
$arr_page10[] = 'Q42_checkbox_4';
$arr_page10[] = 'Q42_checkbox_5';
$arr_page10[] = 'Q43_checkbox_1';
$arr_page10[] = 'Q43_checkbox_2';
$arr_page10[] = 'Q43_checkbox_3';
$arr_page10[] = 'Q43_checkbox_4';
$arr_page10[] = 'Q43_checkbox_5';
$arr_page10[] = 'Q43_checkbox_6';
$arr_page10[] = 'Q43_checkbox_7';
//page10';
$arr_page11[] = 'Q46_radio';
$arr_page11[] = 'Q47_radio';
$arr_page11[] = 'Q48_radio';
$arr_page11[] = 'Q49_radio';
$arr_page11[] = 'Q50_radio';
$arr_page11[] = 'Q51_radio';
$arr_page11[] = 'Q52_radio';
$arr_page11[] = 'Q53_radio';
$arr_page11[] = 'Q54_radio';
//page11';
$arr_page12[] = 'Q55_radio';
$arr_page12[] = 'Q56_radio';
$arr_page12[] = 'Q57_radio';
$arr_page12[] = 'Q58_radio';
$arr_page12[] = 'Q59_radio';
$arr_page12[] = 'Q59_other';
//page12';
$arr_page13[] = 'Q60_radio';
$arr_page13[] = 'Q61_radio';
//page13';
$arr_page14[] = 'Q62_textarea';
$arr_page14[] = 'Q62_NONE';
$arr_page14[] = 'Q63_textarea';
$arr_page14[] = 'Q63_NONE';
$arr_page14[] = 'Q64_textarea';
$arr_page14[] = 'Q64_NONE';
$arr_page14[] = 'Q65_textarea';
$arr_page14[] = 'Q65_NONE';
$arr_page14[] = 'Q66_textarea';
$arr_page14[] = 'Q66_NONE';
$arr_page14[] = 'Q67_textarea';
$arr_page14[] = 'Q67_NONE';
$arr_page14[] = 'Q68_textarea';
$arr_page14[] = 'Q68_NONE';
$arr_page14[] = 'Q69_textarea';
$arr_page14[] = 'Q69_NONE';
//page14';
$arr_page15[] = 'Q70_textarea';
$arr_page15[] = 'Q71_radio';
$arr_page15[] = 'Q71_other';
$arr_page15[] = 'Q72_text';
//page15';
$arr_page16[] = 'Q73_text';
$arr_page16[] = 'Q74_radio';
$arr_page16[] = 'Q74_other';
$arr_page16[] = 'Q75_radio';
$arr_page16[] = 'Q75_other';
$arr_page16[] = 'Q76_radio';
$arr_page16[] = 'Q76_other';
$arr_page16[] = 'Q77_textarea';
//page16

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
 	
 //	if (count($arr) == 18) //mysterious garbage in the file
 	{
 		for($i = 0; $i < count($arr); $i++)
 		{
 			$line[trim($keys[$i])] = trim($arr[$i]);
 		}
 		//echo 'line: '; var_dump($line);
 		//$lines[] = $line;
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
