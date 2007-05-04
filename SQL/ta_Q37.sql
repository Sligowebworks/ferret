SELECT 
	'Implementation of curriculum and early learning standards' as `services`
,	count(Q37_checkbox_1) as `Count`
,	count(Q37_checkbox_1)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `services`

UNION
SELECT 
	'Technical assistance for teachers and project managers' as `services`
,	count(Q37_checkbox_2) as `Count`
,	count(Q37_checkbox_2)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `services`

UNION
SELECT 
	'Parent/Community involvement' as `services`
,	count(Q37_checkbox_3) as `Count`
,	count(Q37_checkbox_3)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `services`

UNION
SELECT 
	'Conference training workshops' as `services`
,	count(Q37_checkbox_4) as `Count`
,	count(Q37_checkbox_4)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `services`

UNION
SELECT 
	CONCAT(trim(Q37_checkbox_5), ': ', trim(Q37_other)) as `services`
,	count(Q37_checkbox_5) as `Count`
,	count(Q37_checkbox_5)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `services`
