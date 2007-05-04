SELECT '39.' as `#` 
,	 'Understanding and using oral speech (Language)' as`` 
,	 Q39_radio as `scale` 
,	 count(Q39_radio) as `Count` 
,	 count(Q39_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '40.' as `#` 
,	 'Getting along with other children (social)' as`` 
,	 Q40_radio as `scale` 
,	 count(Q40_radio) as `Count` 
,	 count(Q40_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '41.' as `#` 
,	 'Getting along with adults (social)' as`` 
,	 Q41_radio as `scale` 
,	 count(Q41_radio) as `Count` 
,	 count(Q41_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '42.' as `#` 
,	 'Taking care of his/her own needs (Self-care)' as`` 
,	 Q42_radio as `scale` 
,	 count(Q42_radio) as `Count` 
,	 count(Q42_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '43.' as `#` 
,	 'Using small and large arm and legs muscles (Motor)' as`` 
,	 Q43_radio as `scale` 
,	 count(Q43_radio) as `Count` 
,	 count(Q43_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '44.' as `#` 
,	 'Recognizing colors and alphabets (Pre-academic)' as`` 
,	 Q44_radio as `scale` 
,	 count(Q44_radio) as `Count` 
,	 count(Q44_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '45.' as `#` 
,	 'Printing his/her name (Pre-academic)' as`` 
,	 Q45_radio as `scale` 
,	 count(Q45_radio) as `Count` 
,	 count(Q45_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '46.' as `#` 
,	 'Problem solving skills' as`` 
,	 Q46_radio as `scale` 
,	 count(Q46_radio) as `Count` 
,	 count(Q46_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` UNION SELECT '47.' as `#` 
,	 'Your students\' learning progress as a result of this program.' as`` 
,	 Q47_radio as `scale` 
,	 count(Q47_radio) as `Count` 
,	 count(Q47_radio)/15 as `Freq.` FROM proj_mgr_concatenated GROUP BY `#`
,	 `scale` 
