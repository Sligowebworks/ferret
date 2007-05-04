DROP TABLE teacher_page04;

CREATE TABLE teacher_page04
(
		Survey_Key bigint NOT NULL UNIQUE,
		Q7_checkbox_1 varchar(50) NULL,
		Q7_checkbox_2 varchar(50) NULL,
		Q7_checkbox_3 varchar(50) NULL,
		Q7_checkbox_4 varchar(50) NULL,
		Q7_checkbox_5 varchar(50) NULL,
		Q7_checkbox_6 varchar(50) NULL,
		Q7_checkbox_7 varchar(50) NULL,
		Q7_other varchar(255) NULL,
		Q8_text varchar(255) NULL,
		Q9_radio varchar(50) NULL,
		Q10_radio varchar(50) NULL
);
