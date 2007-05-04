SELECT 
	Q10_radio as ''
,	count(Q10_radio) as `Count`
,	count(Q10_radio)/15 as `Freq.`
FROM ta_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
;
