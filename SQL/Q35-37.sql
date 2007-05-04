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
