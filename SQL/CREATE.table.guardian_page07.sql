DROP TABLE guardian_page07;

CREATE TABLE guardian_page07
(
		Survey_Key bigint NOT NULL UNIQUE,
		Q20_radio varchar(75) NULL,
		Q21_radio varchar(75) NULL,
		Q22_radio varchar(75) NULL,
		Q23_radio varchar(75) NULL,
		Q24_radio varchar(75) NULL,
		Q25_radio varchar(75) NULL,
		Q26_radio varchar(75) NULL,
		Q27_radio varchar(75) NULL
);
