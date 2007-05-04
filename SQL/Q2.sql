
SELECT 
	IF(Q2_other != '', trim(Q2_other), trim(Q2_radio)) as `Education Level`
,	count(Q2_radio) as `Count`
,	count(Q2_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY `Education Level`
ORDER BY `Freq.` DESC
;
