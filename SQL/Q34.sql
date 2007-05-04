SELECT 
	trim(Q34_checkbox_1) as `Involvement`
,	count(Q34_checkbox_1) as `Count`
,	count(Q34_checkbox_1)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_2) as `Involvement`
,	count(Q34_checkbox_2) as `Count`
,	count(Q34_checkbox_2)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_3) as `Involvement`
,	count(Q34_checkbox_3) as `Count`
,	count(Q34_checkbox_3)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_4) as `Involvement`
,	count(Q34_checkbox_4) as `Count`
,	count(Q34_checkbox_4)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_5) as `Involvement`
,	count(Q34_checkbox_5) as `Count`
,	count(Q34_checkbox_5)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	trim(Q34_checkbox_6) as `Involvement`
,	count(Q34_checkbox_6) as `Count`
,	count(Q34_checkbox_6)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`

UNION
SELECT 
	CONCAT(trim(Q34_checkbox_7) , ': ', Q34_other) as `Involvement`
,	count(Q34_checkbox_7) as `Count`
,	count(Q34_checkbox_7)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Involvement`
