SELECT 
	Q22_radio as ''
,	count(Q22_radio) as `Count`
,	count(Q22_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY ``
ORDER BY `Freq.` DESC;

SELECT Q22_textarea as ''
FROM proj_mgr_concatenated
ORDER BY cast(Q102_text as date);
