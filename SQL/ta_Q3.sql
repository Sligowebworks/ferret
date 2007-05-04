
SELECT 
	Q3_radio as ''
,	count(Q3_radio) as `Count`
,	count(Q3_radio)/15 as `Freq.`
FROM ta_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
;
