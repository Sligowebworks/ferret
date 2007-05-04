
SELECT 
	trim(Q4_radio) as `Degree`
,	CASE trim(Q4_radio) 
		WHEN  'ASSOCIATES DEGREE' THEN Q4_other_1
		WHEN 'B.A./B.S. DEGREE' THEN Q4_other_2
		WHEN 'MASTER’S DEGREE' THEN Q4_other_3
		WHEN 'DOCTORAL DEGREE' THEN Q4_other_4
		ELSE ''
	END AS `Area`
,	count(Q4_radio) as `Count`
,	count(Q4_radio)/15 as `Freq.`
FROM ta_concatenated
WHERE Q3_radio = 'YES'
GROUP BY `Degree`, Area
ORDER BY `Freq.` DESC
;
