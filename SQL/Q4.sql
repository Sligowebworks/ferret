
SELECT 
	trim(Q4_radio) as `Degree`
,	CASE trim(Q4_radio) 
		WHEN  'ASSOCIATES DEGREE' THEN Q4_1_text
		WHEN 'B.A./B.S. DEGREE' THEN Q4_2_text
		WHEN 'MASTER’S DEGREE' THEN Q4_3_text
		WHEN 'DOCTORAL DEGREE' THEN Q4_4_text
		ELSE ''
	END AS `Area`
,	count(Q4_radio) as `Count`
,	count(Q4_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
WHERE Q3_radio = 'YES'
GROUP BY `Degree`, Area
ORDER BY `Freq.` DESC
;
