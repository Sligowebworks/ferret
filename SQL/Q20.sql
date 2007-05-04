SELECT 
	Q20_radio as ''
,	count(Q20_radio) as `Count`
,	count(Q20_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
