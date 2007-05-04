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
