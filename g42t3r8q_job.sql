CREATE TABLE JOBS (
	REF	TINYINT UNSIGNED			NOT NULL AUTO_INCREMENT,
	LAST_UPDATE		TIMESTAMP 		DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	JOB_TITLE		VARCHAR(45) 	,
	RECRUITER		VARCHAR(100)	,
	EMAIL			VARCHAR(255)	,	
	DESCRIPTION		VARCHAR(255)	,
	REQUIREMENTS	VARCHAR(255)	,
	JOB_TYPE		ENUM 	('Full-time','Part-time','Summer Job','Internship','Graduate Programme','Abroad','Volunteer','Project'),
	LOCATION 		ENUM	('Antrim','Armagh','Carlow','Cavan','Clare','Cork','Derry','Donegal','Down','Dublin',
		'Fermanagh','Galway','Kerry','Kildare','Kilkenny','Laois','Leitrim','Limerick','Longford','Louth','Mayo',
		'Meath','Monaghan','Offaly','Roscommon','Sligo','Tipperary','Tyrone','Waterford','Westmeath','Wexford',
		'Wicklow') NOT NULL,
	CATEGORY		ENUM 	('Academic','Accounting & Finance','Banking Finantial Services & Insurance','Beauty, Leisure & Sports',
		'Construction, Architecture & Property','Customer Service','Education, Childcare & training',
		'Engineering & Utility','Environmental, Health and Safety','Executive','Graduate','Hotel & Catering','HR & Recruiting',
		'Legal','Marketing','Medical Professional & Healthcare','Production Manufacturing & Materials','Public Sector','Publishing, Media & Creative Arts',
		'Retailing, Wholesaling & Purchaising','Sales','Science, Pharmaceutical & Food','Secretarial & Admin','Security, Trades & General Services',
		'Social & Not Profit','Telecoms','Tourism, Travel & Airlines','Transport, warehousing & Motor') NOT NULL,
	search	VARCHAR(255),
	APPLY	VARCHAR(255),
PRIMARY KEY (REF));

DESCRIBE JOBS;

SELECT * FROM JOBS;

INSERT INTO JOBS VALUES 
(1,'2020-01-01','WEB DESIGNER','GMIT','mail@mail.com','STUDENT','DEGREE','Full-Time','Galway','Publishing, Media & Creative Arts','http://www.gmit.ie','test'),
(2,'2020-01-02','ADMINISTRATIVE ASSISTANT','GMIT','mail@mail.com','GRADUATE','DEGREE','Part-Time','Dublin','Executive','http://www.gmit.ie','test'),
(3,'2020-01-03','RECEPTIONIST','GMIT','mail@mail.com','STUDENT','DEGREE','Summer Job','Limerick','Executive','http://www.gmit.ie','test'),
(4,'2020-02-04','WAREHOUSE OPERATIVE','GMIT','mail@mail.com','GRADUATE','DEGREE','Internship','Cork','Production Manufacturing & Materials','http://www.gmit.ie','test'),
(5,'2020-02-05','CUSTOMER SERVICE ASSOCIATE','GMIT','mail@mail.com','STUDENT','DEGREE','Graduate Programme','Kilkenny','Customer Service','http://www.gmit.ie','test'),
(6,'2020-02-06','STORE ASSISTANT','GMIT','mail@mail.com','STUDENT','DEGREE','Abroad','Dublin','Publishing, Media & Creative Arts','http://www.gmit.ie','test'),
(7,'2020-03-07','ACCOUNTANT','GMIT','mail@mail.com','GRADUATE','DEGREE','Volunteer','Galway','Accounting & Finance','http://www.gmit.ie','test'),
(8,'2020-03-08','FRONTEND DEVELOPER','GMIT','mail@mail.com','GRADUATE','DEGREE','Project','Cork','Publishing, Media & Creative Arts','http://www.gmit.ie','test'),
(9,'2020-03-09','SOFTWARE DEVELOPER','GMIT','mail@mail.com','GRADUATE','DEGREE','Full-Time','Limerick','Graduate','http://www.gmit.ie','test'),
(10,'2020-04-01','SALES ADVISOR','GMIT','mail@mail.com','GRADUATE','DEGREE','Part-Time','Galway','Sales','http://www.gmit.ie','test'),
(11,'2020-04-02','VOLUNTEER','GMIT','mail@mail.com','STUDENT','DEGREE','Volunteer','Waterford','Academic','http://www.gmit.ie','test'),
(12,'2020-04-03','WEB DESIGNER','GMIT','mail@mail.com','GRADUATE','DEGREE','Part-Time','Donegal','Publishing, Media & Creative Arts','http://www.gmit.ie','test');


SHOW WARNINGS;