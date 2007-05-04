USE howard_incentive;

DROP VIEW IF EXISTS  `complete_surveys`;

CREATE VIEW `complete_surveys` 
AS (
	SELECT 
		`surveys`.`ID` AS `ID`,
		`surveys`.`instrument` AS `instrument`,
		`surveys`.`user_id` AS `user_id`,
		`surveys`.`complete` AS `complete`,
		`surveys`.`complete_date` AS `complete_date`,
		`surveys`.`sess_saved_date` AS `sess_saved_date`,
		`surveys`.`last_page_num` AS `last_page_num` 
	FROM `surveys` 
	WHERE ((`surveys`.`user_id` NOT IN (1, 2, 4)) AND (`surveys`.`complete` = 1))
	);
