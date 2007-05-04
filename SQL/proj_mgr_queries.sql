
SELECT 
	Q18_radio as `Reason`
,	CASE trim(Q18_radio) 
		WHEN  'ALREADY IN USE' THEN ''
		WHEN 'RECOMMENDED' THEN Q18_RECOMMENDED_text
		WHEN 'RESEARCHED THE CURRICULUM' THEN ''
		WHEN 'OTHER' THEN Q18_Other
		ELSE ''
	END AS ``
,	count(Q18_radio) as `Count`
,	count(Q18_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Reason, ``
ORDER BY `Freq.` DESC
/*
1   ALREADY IN USE
2   RECOMMENDED (if so by whom?) _________________________________
3   RESEARCHED THE CURRICULUM
4   OTHER __________________________________
*/
SELECT 
	Q19_radio as ''
,	count(Q19_radio) as `Count`
,	count(Q19_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC

SELECT 
	IF(Q1_other != '', Q1_other, Q1_radio) as `Race`
,	count(Q1_radio) as `Count`
,	count(Q1_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Race
;
SELECT 
	Q20_radio as ''
,	count(Q20_radio) as `Count`
,	count(Q20_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
SELECT 
	Q21_radio as ''
,	count(Q21_radio) as `Count`
,	count(Q21_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
SELECT 
	Q22_radio as ''
,	count(Q22_radio) as `Count`
,	count(Q22_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC;

SELECT Q22_textarea as ''
FROM proj_mgr_concatenated
ORDER BY cast(Q102_text as date);
/*$arrQs[23] = '23.  The teacher instructed the students well while utilizing the curriculum.';
		$arrQs[24] = '24.  The teacher assistant instructed the students well while utilizing the curriculum.  ';
		$arrQs[25] = '25.  The teacher communicated well with parents.';
		$arrQs[26] = '26.  The teacher provided useful feedback to you regarding the Pre-K program.';
		$arrQs[27] = '27.  There were positive interactions between the teacher and the students in the Pre-K Incentive Program.';
		$arrQs[28] = '28.  There were positive interactions between the teacher assistant and the students with in the Pre-KIncentive Program.';
		$arrQs[29] = '29.  The Pre-K program\'s training and technical assistance component was helpful.';
		$arrQs[30] = '30.  The Pre-K program\'s comprehensive services component was helpful.';
		$arrQs[31] = '31.	 The students received nutritious meals throughout the year.';
		$arrQs[32] = '32.  The class size was appropriate.';
		
		*/



SELECT 
	'23.'
,	'The teacher instructed the students well while utilizing the curriculum.' as''
,	Q23_radio as `scale`
,	count(Q23_radio) as `Count`
,	count(Q23_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  `scale`
UNION
SELECT
	'24.'
,	'The teacher assistant instructed the students well while utilizing the curriculum.' as ''
,	Q24_radio
,	count(Q24_radio) as `Count`
,	count(Q24_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q24_radio
UNION
SELECT
	'25.'
,	'The teacher communicated well with parents.' as ''
,	Q25_radio
,	count(Q25_radio) as `Count`
,	count(Q25_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q25_radio
UNION
SELECT
	'26.'
,	'The teacher provided useful feedback to you regarding the Pre-K program.' as ''
,	Q26_radio
,	count(Q26_radio) as `Count`
,	count(Q26_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q26_radio
UNION
SELECT
	'27.'
,	'There were positive interactions between the teacher and the students in the Pre-K Incentive Program.' as''
,	Q27_radio
,	count(Q27_radio) as `Count`
,	count(Q27_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q27_radio
UNION
SELECT
	'28.'
,	'There were positive interactions between the teacher assistant and the students with in the Pre-KIncentive Program.' as ''
,	Q28_radio
,	count(Q28_radio) as `Count`
,	count(Q28_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q28_radio
UNION
SELECT
	'29.'
,	'The Pre-K program\'s training and technical assistance component was helpful.' as ''
,	Q29_radio
,	count(Q29_radio) as `Count`
,	count(Q29_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q29_radio
UNION
SELECT
	'30.'
,	'The Pre-K program\'s comprehensive services component was helpful.' as ''
,	Q30_radio
,	count(Q30_radio) as `Count`
,	count(Q30_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q30_radio
UNION
SELECT
	'31.'
,	'The students received nutritious meals throughout the year.' as ''
,	Q31_radio
,	count(Q31_radio) as `Count`
,	count(Q31_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q31_radio
UNION
SELECT
	'32.'
,	'The class size was appropriate.' as ''
,	Q32_radio
,	count(Q32_radio) as `Count`
,	count(Q32_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q32_radio
;

SELECT 
	IF(Q2_other != '', trim(Q2_other), trim(Q2_radio)) as `Education Level`
,	count(Q2_radio) as `Count`
,	count(Q2_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Education Level`
ORDER BY `Freq.` DESC
;
SELECT 
	trim(Q33_checkbox_1) as `Communication Means`
,	count(Q33_checkbox_1) as `Count`
,	count(Q33_checkbox_1)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	trim(Q33_checkbox_2) as `Communication Means`
,	count(Q33_checkbox_2) as `Count`
,	count(Q33_checkbox_2)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	trim(Q33_checkbox_3) as `Communication Means`
,	count(Q33_checkbox_3) as `Count`
,	count(Q33_checkbox_3)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`

UNION
SELECT 
	CONCAT(trim(Q33_checkbox_4) , ': ', Q33_other) as `Communication Means`
,	count(Q33_checkbox_4) as `Count`
,	count(Q33_checkbox_4)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Communication Means`
SELECT 
	trim(Q34_checkbox_1) as `Involvement`
,	count(Q34_checkbox_1) as `Count`
,	count(Q34_checkbox_1)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_2) as `Involvement`
,	count(Q34_checkbox_2) as `Count`
,	count(Q34_checkbox_2)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_3) as `Involvement`
,	count(Q34_checkbox_3) as `Count`
,	count(Q34_checkbox_3)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_4) as `Involvement`
,	count(Q34_checkbox_4) as `Count`
,	count(Q34_checkbox_4)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_5) as `Involvement`
,	count(Q34_checkbox_5) as `Count`
,	count(Q34_checkbox_5)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_6) as `Involvement`
,	count(Q34_checkbox_6) as `Count`
,	count(Q34_checkbox_6)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	CONCAT(trim(Q34_checkbox_7) , ': ', Q34_other) as `Involvement`
,	count(Q34_checkbox_7) as `Count`
,	count(Q34_checkbox_7)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`
/*

		$arrQs[35] = '35.  Beginning of the school year.';
		$arrQs[36] = '36.  Middle of the school year.  ';
		$arrQs[37] = '37.  End of the school year.';
		
		*/



SELECT 
	'35.'
,	'The teacher instructed the students well while utilizing the curriculum.' as''
,	Q35_radio as `scale`
,	count(Q35_radio) as `Count`
,	count(Q35_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  `scale`
UNION
SELECT
	'36.'
,	'The teacher assistant instructed the students well while utilizing the curriculum.' as ''
,	Q36_radio
,	count(Q36_radio) as `Count`
,	count(Q36_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q36_radio
UNION
SELECT
	'37.'
,	'The teacher communicated well with parents.' as ''
,	Q37_radio
,	count(Q37_radio) as `Count`
,	count(Q37_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q37_radio
;

SELECT 
	Q3_radio as ''
,	count(Q3_radio) as `Count`
,	count(Q3_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
;

SELECT 
	trim(Q4_radio) as `Degree`
,	CASE trim(Q4_radio) 
		WHEN  'ASSOCIATES DEGREE' THEN Q4_1_text
		WHEN 'B.A./B.S. DEGREE' THEN Q4_2_text
		WHEN 'MASTER’S DEGREE' THEN Q4_3_text
		WHEN 'DOCTORAL DEGREE' THEN Q4_4_text
		ELSE ''
	END AS `Area`
,	count(Q4_radio) as `Count`
,	count(Q4_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
WHERE Q3_radio = 'YES'
GROUP BY `Degree`, Area
ORDER BY `Freq.` DESC
;

SELECT 
'54', 
GROUP_CONCAT(Q54_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q54_textarea <> ''
UNION
SELECT 
'55', 
GROUP_CONCAT(Q55_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q55_textarea <> ''
UNION
SELECT 
'56', 
GROUP_CONCAT(Q56_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q56_textarea <> ''
UNION
SELECT 
'57', 
GROUP_CONCAT(Q57_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q57_textarea <> ''
UNION
SELECT 
'58', 
GROUP_CONCAT(Q58_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q58_textarea <> ''
UNION
SELECT 
'59', 
GROUP_CONCAT(Q59_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q59_textarea <> ''
UNION
SELECT 
'60', 
GROUP_CONCAT(Q60_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q60_textarea <> ''
UNION
SELECT 
'61', 
GROUP_CONCAT(Q61_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q61_textarea <> ''
UNION
SELECT 
'62', 
GROUP_CONCAT(Q62_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q62_textarea <> ''
;

SELECT 
	AVG(Q5_text)/12 as `Average Years`
,	AVG(Q5_text) as `Average`
,	MIN(Q5_text) as `Min.`
,	MAX(Q5_text) as `Max.`
FROM proj_mgr_concatenated
;

SELECT 
	AVG(Q6_text) as `Average`
,	MIN(Q6_text) as `Min.`
,	MAX(Q6_text) as `Max.`
FROM proj_mgr_concatenated
;

SELECT 
	'9.'
,	'Understanding and using oral speech (Language)' as''
,	Q9_radio
,	count(Q9_radio) as `Count`
,	count(Q9_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q9_radio
UNION
SELECT
	'10.'
,	'Getting along with other children (Social)' as ''
,	Q10_radio
,	count(Q10_radio) as `Count`
,	count(Q10_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q10_radio
UNION
SELECT
	'11.'
,	'Getting along with adults (Social)' as ''
,	Q11_radio
,	count(Q11_radio) as `Count`
,	count(Q11_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q11_radio
UNION
SELECT
	'12.'
,	'Taking care of his/her own self care needs (Self-care)' as ''
,	Q12_radio
,	count(Q12_radio) as `Count`
,	count(Q12_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q12_radio
UNION
SELECT
	'13.'
,	'Using small and large arm and leg muscles (Motor)' as''
,	Q13_radio
,	count(Q13_radio) as `Count`
,	count(Q13_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q13_radio
UNION
SELECT
	'14.'
,	'Recognizing colors and alphabets (Pre-academic)' as ''
,	Q14_radio
,	count(Q14_radio) as `Count`
,	count(Q14_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q14_radio
UNION
SELECT
	'15.'
,	'Printing his/her name (Pre-academic)' as ''
,	Q15_radio
,	count(Q15_radio) as `Count`
,	count(Q15_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q15_radio
UNION
SELECT
	'16.'
,	'Problem solving skills' as ''
,	Q16_radio
,	count(Q16_radio) as `Count`
,	count(Q16_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q16_radio
;
