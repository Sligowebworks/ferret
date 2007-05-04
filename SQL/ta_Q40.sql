SELECT 
	Service
,	Scale
,	count(Scale) as `Count`
,	count(Scale)/15 as `Freq.`
FROM
(
SELECT
	TRIM(LCASE(Q40_text_1)) as `Service`
,	Q40_radio_1 as `Scale`
FROM ta_concatenated
UNION
SELECT
	TRIM(LCASE(Q40_text_2)) as `Service`
,	Q40_radio_2 as `Scale`
FROM ta_concatenated
UNION
SELECT
	TRIM(LCASE(Q40_text_3)) as `Service`
,	Q40_radio_3 as `Scale`
FROM ta_concatenated
UNION
SELECT
	TRIM(LCASE(Q40_text_4)) as `Service`
,	Q40_radio_4 as `Scale`
FROM ta_concatenated
) a
GROUP BY `Service`, `Scale`
ORDER BY `Service`, `Scale` DESC
