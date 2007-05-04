SELECT 
	Q19_radio as ''
,	count(Q19_radio) as `Count`
,	count(Q19_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC
