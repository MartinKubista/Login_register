CREATE TABLE `users` (
	`User_ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Email` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`Meno` VARCHAR(50) NULL COLLATE 'utf8_unicode_ci',
	`Priezvisko` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`Datum_registracie` TIMESTAMP NULL DEFAULT current_timestamp(),
	`Heslo` VARCHAR(255) NULL COLLATE 'utf8_unicode_ci',
	`avatar` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`User_ID`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=17
;
