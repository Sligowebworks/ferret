
SELECT 
'54', 
GROUP_CONCAT(Q54_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q54_textarea <> ''
UNION
SELECT 
'55', 
GROUP_CONCAT(Q55_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q55_textarea <> ''
UNION
SELECT 
'56', 
GROUP_CONCAT(Q56_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q56_textarea <> ''
UNION
SELECT 
'57', 
GROUP_CONCAT(Q57_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q57_textarea <> ''
UNION
SELECT 
'58', 
GROUP_CONCAT(Q58_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q58_textarea <> ''
UNION
SELECT 
'59', 
GROUP_CONCAT(Q59_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q59_textarea <> ''
UNION
SELECT 
'60', 
GROUP_CONCAT(Q60_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q60_textarea <> ''
UNION
SELECT 
'61', 
GROUP_CONCAT(Q61_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q61_textarea <> ''
UNION
SELECT 
'62', 
GROUP_CONCAT(Q62_textarea SEPARATOR '\r\n') as 'Recommendations'
FROM proj_mgr_concatenated
WHERE Q62_textarea <> ''
;
