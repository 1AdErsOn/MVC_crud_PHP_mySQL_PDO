CREATE TABLE `usuarios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
	`email` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
	`phone` VARCHAR(15) NOT NULL COLLATE 'utf8_unicode_ci',
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL,
	`status` ENUM('1','0') NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive' COLLATE 'utf8_unicode_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=8
;