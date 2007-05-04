USE howard_incentive;

DROP VIEW IF EXISTS `teacher_concatenated`;

CREATE VIEW  `teacher_concatenated` AS
(
SELECT 
 ID,	instrument,	user_id,	complete,	complete_date,	Q101_text,	Q102_text,	Q103_text,	Q104_text,	Q105_radio,	Q106_text,	Q107_text,	Q1_radio,	Q1_other,	Q2_radio,	Q2_other,	Q3_radio,	Q4_1,	Q4_2,	Q4_3,	Q4_radio,	Q4_4,	Q5_text,	Q6_text,	Q7_checkbox_1,	Q7_checkbox_2,	Q7_checkbox_3,	Q7_checkbox_4,	Q7_checkbox_5,	Q7_checkbox_6,	Q7_checkbox_7,	Q7_other,	Q8_text,	Q9_radio,	Q10_radio,	Q11_radio,	Q12_radio,	Q13_radio,	Q14_radio,	Q15_radio,	Q16_radio,	Q17_radio,	Q18_radio,	Q19_radio,	Q20_textarea,	Q21_textarea,	Q22_textarea,	Q23_radio,	Q24_radio,	Q25_textarea,	Q26_radio,	Q27_radio,	Q28_radio,	Q29_radio,	Q30_radio,	Q31_checkbox_1,	Q31_checkbox_2,	Q31_checkbox_3,	Q31_checkbox_4,	Q31_checkbox_5,	Q31_other,	Q32_checkbox_1,	Q32_checkbox_4,	Q32_checkbox_7,	Q32_other,	Q32_checkbox_2,	Q32_checkbox_3,	Q32_checkbox_5,	Q32_checkbox_6,	Q33_radio,	Q34_radio,	Q35_radio,	Q36_radio,	Q37_checkbox_1,	Q37_checkbox_2,	Q37_checkbox_3,	Q37_checkbox_4,	Q37_checkbox_5,	Q37_other,	Q38_radio,	Q39_radio,	Q40_text_1,	Q40_text_2,	Q40_text_3,	Q40_text_4,	Q40_radio_1,	Q40_radio_2,	Q40_radio_3,	Q40_radio_4,	Q41_radio,	Q42_radio,	Q43_radio,	Q44_radio,	Q45_radio,	Q46_radio,	Q47_radio,	Q48_radio,	Q49_radio,	Q50_radio,	Q51_radio,	Q52_radio,	Q53_radio,	Q54_radio,	Q55_radio,	Q56_text,	Q57_radio,	Q58_radio,	Q58_other,	Q59_textarea,	Q59_NONE,	Q60_textarea,	Q60_NONE,	Q61_textarea,	Q61_NONE,	Q62_textarea,	Q62_NONE,	Q63_textarea,	Q63_NONE,	Q64_textarea,	Q64_NONE,	Q65_textarea,	Q65_NONE,	Q66_textarea,	Q66_NONE,	Q67_textarea,	Q67_NONE,	Q68_textarea,	Q69_radio,	Q69_other,	Q70_text
,	Q71_text
,	Q72_radio
,	Q72_other
,	Q73_radio
,	Q73_other
,	Q74_radio
,	Q74_other
,	Q75_textarea

FROM complete_surveys 
LEFT OUTER JOIN teacher_page02 on complete_surveys.ID = teacher_page02.Survey_Key 
LEFT OUTER JOIN teacher_page03 ON complete_surveys.ID = teacher_page03.Survey_Key 
LEFT OUTER JOIN teacher_page04 ON complete_surveys.ID = teacher_page04.Survey_Key 
LEFT OUTER JOIN teacher_page05 ON complete_surveys.ID = teacher_page05.Survey_Key 
LEFT OUTER JOIN teacher_page06 ON complete_surveys.ID = teacher_page06.Survey_Key 
LEFT OUTER JOIN teacher_page07 ON complete_surveys.ID = teacher_page07.Survey_Key 
LEFT OUTER JOIN teacher_page08 ON complete_surveys.ID = teacher_page08.Survey_Key 
LEFT OUTER JOIN teacher_page09 ON complete_surveys.ID = teacher_page09.Survey_Key 
LEFT OUTER JOIN teacher_page10 ON complete_surveys.ID = teacher_page10.Survey_Key 
LEFT OUTER JOIN teacher_page11 ON complete_surveys.ID = teacher_page11.Survey_Key 
LEFT OUTER JOIN teacher_page12 ON complete_surveys.ID = teacher_page12.Survey_Key 
LEFT OUTER JOIN teacher_page13 ON complete_surveys.ID = teacher_page13.Survey_Key 
LEFT OUTER JOIN teacher_page14 ON complete_surveys.ID = teacher_page14.Survey_Key 
LEFT OUTER JOIN teacher_page15 ON complete_surveys.ID = teacher_page15.Survey_Key 
WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Teacher' 
);
