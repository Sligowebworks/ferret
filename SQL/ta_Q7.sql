
SELECT 
	trim(Q7_checkbox_1) as `Teaching Experience`
,	count(Q7_checkbox_1) as `Count`
,	count(Q7_checkbox_1)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_2) as `Teaching Experience`
,	count(Q7_checkbox_2) as `Count`
,	count(Q7_checkbox_2)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_3) as `Teaching Experience`
,	count(Q7_checkbox_3) as `Count`
,	count(Q7_checkbox_3)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_4) as `Teaching Experience`
,	count(Q7_checkbox_4) as `Count`
,	count(Q7_checkbox_4)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_5) as `Teaching Experience`
,	count(Q7_checkbox_5) as `Count`
,	count(Q7_checkbox_5)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	trim(Q7_checkbox_6) as `Teaching Experience`
,	count(Q7_checkbox_6) as `Count`
,	count(Q7_checkbox_6)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`

UNION
SELECT 
	CONCAT(trim(Q7_checkbox_7) , ': ', Q7_other) as `Teaching Experience`
,	count(Q7_checkbox_7) as `Count`
,	count(Q7_checkbox_7)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `Teaching Experience`
;
