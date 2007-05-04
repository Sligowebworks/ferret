
SELECT 
	AVG(Q5_text)/12 as `Average Years`
,	AVG(Q5_text) as `Average`
,	MIN(Q5_text) as `Min.`
,	MAX(Q5_text) as `Max.`
FROM ta_concatenated
;
