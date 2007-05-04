SELECT 
	trim(Q30_checkbox_1) as `channel`
,	count(Q30_checkbox_1) as `Count`
,	count(Q30_checkbox_1)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_2) as `channel`
,	count(Q30_checkbox_2) as `Count`
,	count(Q30_checkbox_2)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_3) as `channel`
,	count(Q30_checkbox_3) as `Count`
,	count(Q30_checkbox_3)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `channel`

UNION
SELECT 
	CONCAT(trim(Q30_checkbox_4), ': ', trim(Q30_other)) as `channel`
,	count(Q30_checkbox_4) as `Count`
,	count(Q30_checkbox_4)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `channel`

UNION
SELECT 
	trim(Q30_checkbox_5) as `channel`
,	count(Q30_checkbox_5) as `Count`
,	count(Q30_checkbox_5)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `channel`
;
