SELECT 
	'Attending Pre-K Incentive conferences for parents' as `involvement`
,	count(Q31_checkbox_1) as `Count`
,	count(Q31_checkbox_1)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	'Volunteering in the classroom' as `involvement`
,	count(Q31_checkbox_2) as `Count`
,	count(Q31_checkbox_2)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	'Participating on the Parent Advisory Board' as `involvement`
,	count(Q31_checkbox_3) as `Count`
,	count(Q31_checkbox_3)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	'Attending field trips' as `involvement`
,	count(Q31_checkbox_4) as `Count`
,	count(Q31_checkbox_4)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	'Providing feedback about the Pre-K Incentive Program to project manager' as `involvement`
,	count(Q31_checkbox_5) as `Count`
,	count(Q31_checkbox_5)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	'Providing feedback about the Pre-K Incentive Program to you' as `involvement`
,	count(Q31_checkbox_6) as `Count`
,	count(Q31_checkbox_6)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`

UNION
SELECT 
	CONCAT(trim(Q31_checkbox_7), ': ', trim(Q31_other)) as `involvement`
,	count(Q31_checkbox_7) as `Count`
,	count(Q31_checkbox_7)/15 as `Freq.`
FROM ta_concatenated
GROUP BY `involvement`
;
