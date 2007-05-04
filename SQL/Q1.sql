
SELECT 
	IF(Q1_other != '', Q1_other, Q1_radio) as `Race`
,	count(Q1_radio) as `Count`
,	count(Q1_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY Race
;
