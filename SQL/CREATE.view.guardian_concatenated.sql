USE howard_incentive;

DROP VIEW IF EXISTS guardian_concatenated;

CREATE VIEW guardian_concatenated AS
(
SELECT
 ID,	instrument,	user_id,	complete,	complete_date,	Q101_text,	Q102_text,	Q103_text,	Q104_text,	Q105_radio,	Q106_text,	Q107_text,	Q1_radio,	Q1_Other,	Q2_text,	Q3_text,	Q4_text,	Q5_text_age_1,	Q5_radio_Gender_1,	Q5_text_relationship_1,	Q5_text_age_2,	Q5_radio_Gender_2,	Q5_text_relationship_2,	Q5_text_age_3,	Q5_radio_Gender_3,	Q5_text_relationship_3,	Q5_text_age_4,	Q5_radio_Gender_4,	Q5_text_relationship_4,	Q5_text_age_5,	Q5_radio_Gender_5,	Q5_text_relationship_5,	Q5_text_age_6,	Q5_radio_Gender_6,	Q5_text_relationship_6,	Q5_text_age_7,	Q5_radio_Gender_7,	Q5_text_relationship_7,	Q6_radio,	Q6_Other,	Q7_radio,	Q8_text,	Q9_radio,	Q9_Other,	Q10_radio,	Q11_text,	Q12_text,	Q13_radio,	Q13_text,	Q14_radio,	Q14_Other,	Q15_text_Age_child1,	Q15_text_Age_child2,	Q15_text_Age_child3,	Q15_text_Age_child4,	Q15_text_Age_child5,	Q15_text_Age_child6,	Q15_text_Age_child7,	Q15_text_Age_child8,	Q15_radio_Gender_child1,	Q15_radio_Gender_child2,	Q15_radio_Gender_child3,	Q15_radio_Gender_child4,	Q15_radio_Gender_child5,	Q15_radio_Gender_child6,	Q15_radio_Gender_child7,	Q15_radio_Gender_child8,	Q15_checkbox_1_child1,	Q15_checkbox_1_child2,	Q15_checkbox_1_child3,	Q15_checkbox_1_child4,	Q15_checkbox_1_child5,	Q15_checkbox_1_child6,	Q15_checkbox_1_child7,	Q15_checkbox_1_child8,	Q15_checkbox_2_child1,	Q15_checkbox_2_child2,	Q15_checkbox_2_child3,	Q15_checkbox_2_child4,	Q15_checkbox_2_child5,	Q15_checkbox_2_child6,	Q15_checkbox_2_child7,	Q15_checkbox_2_child8,	Q15_checkbox_3_child1,	Q15_checkbox_3_child2,	Q15_checkbox_3_child3,	Q15_checkbox_3_child4,	Q15_checkbox_3_child5,	Q15_checkbox_3_child6,	Q15_checkbox_3_child7,	Q15_checkbox_3_child8,	Q15_checkbox_4_child1,	Q15_checkbox_4_child2,	Q15_checkbox_4_child3,	Q15_checkbox_4_child4,	Q15_checkbox_4_child5,	Q15_checkbox_4_child6,	Q15_checkbox_4_child7,	Q15_checkbox_4_child8,	Q15_checkbox_5_child1,	Q15_checkbox_5_child2,	Q15_checkbox_5_child3,	Q15_checkbox_5_child4,	Q15_checkbox_5_child5,	Q15_checkbox_5_child6,	Q15_checkbox_5_child7,	Q15_checkbox_5_child8,	Q15_text_Other_child1,	Q15_text_Other_child2,	Q15_text_Other_child3,	Q15_text_Other_child4,	Q15_text_Other_child5,	Q15_text_Other_child6,	Q15_text_Other_child7,	Q15_text_Other_child8,	Q16_radio,	Q17_radio,	Q18_checkbox_1,	Q18_checkbox_2,	Q18_checkbox_3,	Q18_checkbox_4,	Q18_other,	Q18_checkbox_5,	Q19_radio,	Q19_other,	Q20_radio,	Q21_radio,	Q22_radio,	Q23_radio,	Q24_radio,	Q25_radio,	Q26_radio,	Q27_radio,	Q28_radio,	Q29_radio,	Q30_checkbox,	Q30_radio,	Q31_radio,	Q32_radio,	Q33_radio,	Q34_radio,	Q35_radio,	Q36_radio,	Q37_radio,	Q38_radio,	Q39_radio,	Q40_radio,	Q41_radio,	Q42_Other,	Q43_Other,	Q44_radio,	Q45_text_1,	Q45_radio_1,	Q45_text_2,	Q45_radio_2,	Q45_text_3,	Q45_radio_3,	Q45_text_4,	Q45_radio_4,	Q42_checkbox_1,	Q42_checkbox_2,	Q42_checkbox_3,	Q42_checkbox_4,	Q42_checkbox_5,	Q43_checkbox_1,	Q43_checkbox_2,	Q43_checkbox_3,	Q43_checkbox_4,	Q43_checkbox_5,	Q43_checkbox_6,	Q43_checkbox_7,	Q46_radio,	Q47_radio,	Q48_radio,	Q49_radio,	Q50_radio,	Q51_radio,	Q52_radio,	Q53_radio,	Q54_radio,	Q55_radio,	Q56_radio,	Q57_radio,	Q58_radio,	Q59_radio,	Q59_other,	Q60_radio,	Q61_radio,	Q62_textarea,	Q62_NONE,	Q63_textarea,	Q63_NONE,	Q64_textarea,	Q64_NONE,	Q65_textarea,	Q65_NONE,	Q66_textarea,	Q66_NONE,	Q67_textarea,	Q67_NONE,	Q68_textarea,	Q68_NONE,	Q69_textarea,	Q69_NONE,	Q70_textarea,	Q71_radio,	Q71_other,	Q72_text,	Q73_text,	Q74_radio,	Q74_other,	Q75_radio,	Q75_other,	Q76_radio,	Q76_other,	Q77_textarea

 FROM complete_surveys 
LEFT OUTER JOIN guardian_page02 on complete_surveys.ID = guardian_page02.Survey_Key 
LEFT OUTER JOIN guardian_page03 ON complete_surveys.ID = guardian_page03.Survey_Key 
LEFT OUTER JOIN guardian_page04 ON complete_surveys.ID = guardian_page04.Survey_Key 
LEFT OUTER JOIN guardian_page05 ON complete_surveys.ID = guardian_page05.Survey_Key 
LEFT OUTER JOIN guardian_page06 ON complete_surveys.ID = guardian_page06.Survey_Key 
LEFT OUTER JOIN guardian_page07 ON complete_surveys.ID = guardian_page07.Survey_Key 
LEFT OUTER JOIN guardian_page08 ON complete_surveys.ID = guardian_page08.Survey_Key 
LEFT OUTER JOIN guardian_page09 ON complete_surveys.ID = guardian_page09.Survey_Key 
LEFT OUTER JOIN guardian_page10 ON complete_surveys.ID = guardian_page10.Survey_Key 
LEFT OUTER JOIN guardian_page11 ON complete_surveys.ID = guardian_page11.Survey_Key 
LEFT OUTER JOIN guardian_page12 ON complete_surveys.ID = guardian_page12.Survey_Key 
LEFT OUTER JOIN guardian_page13 ON complete_surveys.ID = guardian_page13.Survey_Key 
LEFT OUTER JOIN guardian_page14 ON complete_surveys.ID = guardian_page14.Survey_Key 
LEFT OUTER JOIN guardian_page15 ON complete_surveys.ID = guardian_page15.Survey_Key 
LEFT OUTER JOIN guardian_page16 ON complete_surveys.ID = guardian_page16.Survey_Key 
WHERE complete_surveys.ID IS NOT NULL AND complete_surveys.instrument = 'Parent/Guardian' 
);
