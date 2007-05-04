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
