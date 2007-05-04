
SELECT g.ID, Q2_text, Q1_radio, Q1_Other , flagged.flag as `Spanish Lang. Interview`
FROM 
	guardian_concatenated g
LEFT JOIN
	(SELECT  ID, 1 as flag FROM guardian_concatenated WHERE ID IN (235,	279,	280,	282,	283,		286,	287,	288,	289,	290) ) flagged
on g.ID = flagged.ID
WHERE 
	Q1_radio = 'HISPANIC AMERICAN'
	OR 
	(	Q1_radio = 'OTHER'
		AND Q1_OTHER NOT LIKE '%Africa%'
		AND Q1_OTHER NOT LIKE '%Ethiopia%'
		AND Q1_OTHER NOT LIKE 'Turk%'
	)
	ORDER BY g.ID DESC
--flagged.flag DESC, Q2_text
;
