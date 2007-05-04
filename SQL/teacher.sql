use howard_incentive;

CREATE TABLE teacher_page02
(
		Survey_Key bigint NOT NULL,
		Q101_text varchar(255) NULL,
		Q102_text varchar(255) NULL,
		Q103_text varchar(255) NULL,
		Q104_text varchar(255) NULL,
		Q105_radio varchar(50) NULL,
		Q106_text varchar(255) NULL
);
CREATE TABLE teacher_page03
(
		Survey_Key bigint NOT NULL,
		Q1_radio varchar(50) NULL,
		Q1_other varchar(255) NULL,
		Q2_radio varchar(50) NULL,
		Q2_other varchar(255) NULL,
		Q3_radio varchar(50) NULL,
		Q4_1 varchar(50) NULL,
		Q4_2 varchar(50) NULL,
		Q4_3 varchar(50) NULL,
		Q4_radio varchar(50) NULL,
		Q4_4 varchar(50) NULL,
		Q5_text varchar(255) NULL,
		Q6_text varchar(255) NULL
);
CREATE TABLE teacher_page04
(
		Survey_Key bigint NOT NULL,
		Q7_radio varchar(50) NULL,
		Q7_other varchar(255) NULL,
		Q8_text varchar(255) NULL,
		Q9_radio varchar(50) NULL,
		Q10_radio varchar(50) NULL
);
CREATE TABLE teacher_page05
(
		Survey_Key bigint NOT NULL,
		Q11_radio varchar(50) NULL,
		Q12_radio varchar(50) NULL,
		Q13_radio varchar(50) NULL,
		Q14_radio varchar(50) NULL,
		Q15_radio varchar(50) NULL,
		Q16_radio varchar(50) NULL,
		Q17_radio varchar(50) NULL,
		Q18_radio varchar(50) NULL,
		Q19_radio varchar(50) NULL
);
CREATE TABLE teacher_page06
(
		Survey_Key bigint NOT NULL,
		Q20_textarea varchar(255) NULL,
		Q21_textarea varchar(255) NULL,
		Q22_textarea varchar(255) NULL,
		Q23_radio varchar(50) NULL,
		Q24_radio varchar(50) NULL,
		Q25_textarea varchar(255) NULL,
		Q26_radio varchar(50) NULL,
		Q27_radio varchar(50) NULL,
);
CREATE TABLE teacher_page07
(
		Survey_Key bigint NOT NULL,
		Q28_radio varchar(50) NULL,
		Q29_radio varchar(50) NULL,
		Q30_radio varchar(50) NULL,
		Q31_checkbox_1 varchar(24) NULL,
		Q31_checkbox_2 varchar(24) NULL,
		Q31_checkbox_3 varchar(24) NULL,
		Q31_checkbox_4 varchar(24) NULL,
		Q31_checkbox_5 varchar(24) NULL,
		Q31_other varchar(255) NULL
);
CREATE TABLE teacher_page08
(
		Survey_Key bigint NOT NULL,
		Q32_radio varchar(50) NULL,
		Q32_other varchar(255) NULL,
		Q33_radio varchar(50) NULL,
		Q34_radio varchar(50) NULL,
		Q35_radio varchar(50) NULL,
		Q36_radio varchar(50) NULL
);
CREATE TABLE teacher_page09
(
		Survey_Key bigint NOT NULL,
		Q37_checkbox_1 varchar(24) NULL,
		Q37_checkbox_2 varchar(24) NULL,
		Q37_checkbox_3 varchar(24) NULL,
		Q37_checkbox_4 varchar(24) NULL,
		Q37_checkbox_5 varchar(24) NULL,
		Q37_other varchar(255) NULL,
		Q38_radio varchar(50) NULL,
		Q39_radio varchar(50) NULL,
		Q40_text_1 varchar(255) NULL,
		Q40_text_2 varchar(255) NULL,
		Q40_text_3 varchar(255) NULL,
		Q40_text_4 varchar(255) NULL,
		Q40_radio_1 varchar(50) NULL,
		Q40_radio_2 varchar(50) NULL,
		Q40_radio_3 varchar(50) NULL,
		Q40_radio_4 varchar(50) NULL
);
CREATE TABLE teacher_page10
(
		Survey_Key bigint NOT NULL,
		Q41_radio varchar(50) NULL,
		Q42_radio varchar(50) NULL,
		Q43_radio varchar(50) NULL,
		Q44_radio varchar(50) NULL,
		Q45_radio varchar(50) NULL,
		Q46_radio varchar(50) NULL,
		Q47_radio varchar(50) NULL,
		Q48_radio varchar(50) NULL,
		Q49_radio varchar(50) NULL
);
CREATE TABLE teacher_page11
(
		Survey_Key bigint NOT NULL,
		Q50_radio varchar(50) NULL,
		Q51_radio varchar(50) NULL,
		Q52_radio varchar(50) NULL,
		Q53_radio varchar(50) NULL,
		Q54_radio varchar(50) NULL,
		Q55_radio varchar(50) NULL,
		Q56_text varchar(255) NULL,
		Q57_radio varchar(50) NULL
);

CREATE TABLE teacher_page12
(
		Survey_Key bigint NOT NULL,
		Q58_radio varchar(50) NULL,
		Q58_other varchar(255) NULL
);
CREATE TABLE teacher_page13
(
		Survey_Key bigint NOT NULL,
		Q59_NONE varchar(255) NULL,
		Q60_textarea varchar(255) NULL,
		Q60_NONE varchar(255) NULL,
		Q61_textarea varchar(255) NULL,
		Q61_NONE varchar(255) NULL,
		Q62_textarea varchar(255) NULL,
		Q62_NONE varchar(255) NULL,
		Q63_textarea varchar(255) NULL,
		Q63_NONE varchar(255) NULL,
		Q64_textarea varchar(255) NULL,
		Q64_NONE varchar(255) NULL,
		Q65_textarea varchar(255) NULL,
		Q65_NONE varchar(255) NULL,
		Q66_textarea varchar(255) NULL,
		Q66_NONE varchar(255) NULL,
		Q67_textarea varchar(255) NULL,
		Q67_NONE varchar(255) NULL
);
CREATE TABLE teacher_page14
(
		Survey_Key bigint NOT NULL,
		Q68_textarea varchar(255) NULL,
		Q69_radio varchar(50) NULL,
		Q69_other varchar(255) NULL,
		Q70_text varchar(255) NULL
);
CREATE TABLE teacher_page15
(
		Survey_Key bigint NOT NULL,
		Q71_text varchar(255) NULL,
		Q72_radio varchar(50) NULL,
		Q72_other varchar(255) NULL,
		Q73_radio varchar(50) NULL,
		Q73_other varchar(255) NULL,
		Q74_radio varchar(50) NULL,
		Q74_other varchar(255) NULL,
		Q75_textarea varchar(255) NULL
);
