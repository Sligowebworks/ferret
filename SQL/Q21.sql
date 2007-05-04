SELECT 
	Q21_radio as ''
,	count(Q21_radio) as `Count`
,	count(Q21_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
