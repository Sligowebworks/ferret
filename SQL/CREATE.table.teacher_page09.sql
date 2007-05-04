DROP TABLE teacher_page09;

CREATE TABLE teacher_page09
(
		Survey_Key bigint NOT NULL UNIQUE,
		Q37_checkbox_1 varchar(24) NULL,
		Q37_checkbox_2 varchar(24) NULL,
		Q37_checkbox_3 varchar(24) NULL,
		Q37_checkbox_4 varchar(24) NULL,
		Q37_checkbox_5 varchar(24) NULL,
		Q37_other varchar(255) NULL,
		Q38_radio varchar(50) NULL,
		Q39_radio varchar(50) NULL,
		Q40_text_1 varchar(255) NULL,
		Q40_text_2 varchar(255) NULL,
		Q40_text_3 varchar(255) NULL,
		Q40_text_4 varchar(255) NULL,
		Q40_radio_1 varchar(50) NULL,
		Q40_radio_2 varchar(50) NULL,
		Q40_radio_3 varchar(50) NULL,
		Q40_radio_4 varchar(50) NULL
);

