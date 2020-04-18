

DROP DATABASE IF EXISTS JOB;
SHOW DATABASES;
CREATE DATABASE JOB;
USE JOB;
SHOW TABLES;
DROP TABLE IF EXISTS JOBS;

CREATE TABLE JOBS (
	REF	TINYINT UNSIGNED		NOT NULL AUTO_INCREMENT;
	LAST_UPDATE		TIMESTAMP 	DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
	JOB_TITLE		VARCHAR(45) NOT NULL;
	DESCRIPTION		VARCHAR(255)NOT NULL;
	JOB TYPE		ENUM 	('Full-time','Part-time','Summer Job','Intership','Graduate Programme','Abroad','Volunteer','Project'),
	LOCATION 		ENUM	('Antrim','Armagh','Carlow','Cavan','Clare','Cork','Derry','Donegal','Down','Dublin',
		'Fermanagh','Galway','Kerry','Kildare','Kilkenny','Laois','Leitrim','Limerick','Longford','Louth','Mayo',
		'Meath','Monaghan','Offaly','Roscommon','Sligo','Tipperary','Tyrone','Waterford','Westmeath','Wexford',
		'Wicklow') NOT NUL;
	CATEGORY		ENUM 	('Accounting & Finance','Banking Finantial Services & Insurance','Beauty, Hair Care, Leisure & Sports','Construction, Architecture & Property',
		'Customer Service, Call Centres & Languages','Education, Childcare & training',
		'Engineering & Utility','Environmental, Health and Safety','Executive','Graduate','Hotel & Catering','HR & Recruiting',
		'Legal','Marketing','Medical Professional & Healthcare','Production Manufacturing & Materials','Public Sector','Publishing, Media & Creative Arts',
		'Retailing, Wholesaling & Purchaising','Sales','Science, Pharmaceutical & Food','Secretarial & Admin','Security, Trades & General Services',
		'Social & Not Profit','Telecoms','Tourism, Travel & Airlines','Transport, warehousing & Motor') NOT NULL
PRIMARY KE(REF)) Engine=InnoDB;

SELECT * FROM JOBS;

SHOW TABLES;

INSERT INTO JOBS (1,'2010-12-17 10:00:00','WEB DESIGNER','GRADUATE','FULL-TIME','Dublin','Marketing');