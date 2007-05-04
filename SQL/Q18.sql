
SELECT 
	Q18_radio as `Reason`
,	CASE trim(Q18_radio) 
		WHEN  'ALREADY IN USE' THEN ''
		WHEN 'RECOMMENDED' THEN Q18_RECOMMENDED_text
		WHEN 'RESEARCHED THE CURRICULUM' THEN ''
		WHEN 'OTHER' THEN Q18_Other
		ELSE ''
	END AS ``
,	count(Q18_radio) as `Count`
,	count(Q18_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Reason, ``
ORDER BY `Freq.` DESC
/*
1   ALREADY IN USE
2   RECOMMENDED (if so by whom?) _________________________________
3   RESEARCHED THE CURRICULUM
4   OTHER __________________________________
*/
