
SELECT 
	'9.'
,	'Understanding and using oral speech (Language)' as''
,	Q9_radio
,	count(Q9_radio) as `Count`
,	count(Q9_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q9_radio
UNION
SELECT
	'10.'
,	'Getting along with other children (Social)' as ''
,	Q10_radio
,	count(Q10_radio) as `Count`
,	count(Q10_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q10_radio
UNION
SELECT
	'11.'
,	'Getting along with adults (Social)' as ''
,	Q11_radio
,	count(Q11_radio) as `Count`
,	count(Q11_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q11_radio
UNION
SELECT
	'12.'
,	'Taking care of his/her own self care needs (Self-care)' as ''
,	Q12_radio
,	count(Q12_radio) as `Count`
,	count(Q12_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q12_radio
UNION
SELECT
	'13.'
,	'Using small and large arm and leg muscles (Motor)' as''
,	Q13_radio
,	count(Q13_radio) as `Count`
,	count(Q13_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q13_radio
UNION
SELECT
	'14.'
,	'Recognizing colors and alphabets (Pre-academic)' as ''
,	Q14_radio
,	count(Q14_radio) as `Count`
,	count(Q14_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q14_radio
UNION
SELECT
	'15.'
,	'Printing his/her name (Pre-academic)' as ''
,	Q15_radio
,	count(Q15_radio) as `Count`
,	count(Q15_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q15_radio
UNION
SELECT
	'16.'
,	'Problem solving skills' as ''
,	Q16_radio
,	count(Q16_radio) as `Count`
,	count(Q16_radio)/15 as `Freq.`
FROM proj_mgr_concatenated
GROUP BY '',  Q16_radio
;
