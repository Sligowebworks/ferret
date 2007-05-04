SELECT 
	Q9_radio as ''
,	count(Q9_radio) as `Count`
,	count(Q9_radio)/15 as `Freq.`
FROM ta_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC;
