CREATE TABLE IF NOT EXISTS `#__alm_documents_table` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`sys_created_by` VARCHAR(255)  NOT NULL ,
`sys_created_at` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`sys_modified_by` VARCHAR(255)  NOT NULL ,
`sys_modified_at` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`title` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

