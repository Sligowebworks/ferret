DROP TABLE guardian_page04;

CREATE TABLE guardian_page04
(
		Survey_Key bigint NOT NULL UNIQUE,
		Q6_radio varchar(50) NULL,
		Q6_Other varchar(255) NULL,
		Q7_radio varchar(50) NULL,
		Q8_text varchar(255) NULL,
		Q9_radio varchar(50) NULL,
		Q9_Other varchar(255) NULL,
		Q10_radio varchar(50) NULL,
		Q11_text varchar(255) NULL,
		Q12_text varchar(255) NULL
);
