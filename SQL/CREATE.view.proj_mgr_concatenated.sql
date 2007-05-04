USE howard_incentive;

DROP VIEW IF EXISTS `proj_mgr_concatenated`;

CREATE VIEW  `proj_mgr_concatenated` AS
(
SELECT 
 ID ,	instrument,	user_id ,	complete ,	complete_date ,	sess_saved_date ,	last_page_num ,	Q101_text ,	Q102_text ,	Q103_text ,	Q104_text ,	Q105_radio ,	Q106_text ,	Q107_text ,	Q1_radio,	Q1_Other,	Q2_radio ,	Q2_Other ,	Q3_radio ,	Q4_radio,	Q4_1_text ,	Q4_2_text,	Q4_3_text,	Q4_4_text ,	Q5_text ,	Q6_text ,	Q7_radio ,	Q8_radio ,	Q9_radio ,	Q10_radio,	Q11_radio,	Q12_radio,	Q13_radio,	Q14_radio,	Q15_radio,	Q16_radio,	Q17_radio ,	Q18_RECOMMENDED_text ,	Q18_radio ,	Q18_other ,	Q19_radio ,	Q20_radio ,	Q21_radio ,	Q22_radio ,	Q22_textarea,	Q23_radio,	Q24_radio,	Q25_radio,	Q26_radio ,	Q27_radio,	Q28_radio,	Q29_radio,	Q30_radio,	Q31_radio,	Q32_radio,	Q33_checkbox_1,	Q33_checkbox_2,	Q33_checkbox_3,	Q33_checkbox_4 ,	Q33_other,	Q33_checkbox_5 ,	Q34_checkbox_1 ,	Q34_checkbox_2 ,	Q34_checkbox_3 ,	Q34_checkbox_4,	Q34_checkbox_5 ,	Q34_checkbox_6 ,	Q34_checkbox_7 ,	Q34_other,	Q35_radio ,	Q36_radio ,	Q37_radio ,	Q38_radio ,	Q39_radio ,	Q40_radio ,	Q41_radio ,	Q42_radio ,	Q43_radio ,	Q44_radio ,	Q45_radio ,	Q46_radio ,	Q47_radio ,	Q48_radio,	Q49_radio,	Q50_radio,	Q51_radio,	Q52_radio,	Q53_radio,	Q53_other ,	Q54_textarea ,	Q54_NONE ,	Q55_textarea ,	Q55_NONE ,	Q56_textarea ,	Q56_NONE ,	Q57_textarea ,	Q57_NONE ,	Q58_textarea,	Q58_NONE ,	Q59_textarea ,	Q59_NONE ,	Q60_textarea ,	Q60_NONE ,	Q61_textarea,	Q61_NONE ,	Q62_textarea,	Q63_radio ,	Q63_other,	Q64_text ,	Q65_text ,	Q66_radio ,	Q66_other ,	Q67_radio ,	Q67_other ,	Q68_radio ,	Q68_other,	Q69_textarea

FROM complete_surveys 
LEFT OUTER JOIN proj_mgr_page02 on complete_surveys.ID = proj_mgr_page02.Survey_Key 
LEFT OUTER JOIN proj_mgr_page03 ON complete_surveys.ID = proj_mgr_page03.Survey_Key 
LEFT OUTER JOIN proj_mgr_page04 ON complete_surveys.ID = proj_mgr_page04.Survey_Key 
LEFT OUTER JOIN proj_mgr_page05 ON complete_surveys.ID = proj_mgr_page05.Survey_Key 
LEFT OUTER JOIN proj_mgr_page06 ON complete_surveys.ID = proj_mgr_page06.Survey_Key 
LEFT OUTER JOIN proj_mgr_page07 ON complete_surveys.ID = proj_mgr_page07.Survey_Key 
LEFT OUTER JOIN proj_mgr_page08 ON complete_surveys.ID = proj_mgr_page08.Survey_Key 
LEFT OUTER JOIN proj_mgr_page09 ON complete_surveys.ID = proj_mgr_page09.Survey_Key 
LEFT OUTER JOIN proj_mgr_page10 ON complete_surveys.ID = proj_mgr_page10.Survey_Key 
LEFT OUTER JOIN proj_mgr_page11 ON complete_surveys.ID = proj_mgr_page11.Survey_Key 
LEFT OUTER JOIN proj_mgr_page12 ON complete_surveys.ID = proj_mgr_page12.Survey_Key 
LEFT OUTER JOIN proj_mgr_page13 ON complete_surveys.ID = proj_mgr_page13.Survey_Key 
WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Project Manager' 

);
