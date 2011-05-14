<?php
$DB_NAME          = "giftr";
$DB_USER_NAME     = "giftr";
$DB_USER_PASSWORD = "sch00loff1sh!";

$db_account = <<<DB_ACCOUNT
	CREATE USER '$DB_NAME'@'localhost' IDENTIFIED BY '$DB_USER_PASSWORD';

	GRANT USAGE ON *.* TO '$DB_USER_NAME'@'localhost' IDENTIFIED BY '$DB_USER_PASSWORD'
	WITH MAX_QUERIES_PER_HOUR 0
	MAX_UPDATES_PER_HOUR 0
	MAX_CONNECTIONS_PER_HOUR 0
	MAX_USER_CONNECTIONS 0;

	GRANT Create Temporary Tables, Execute, References, Insert, Trigger, Create Routine, Alter, Create View, Lock Tables, Event, Delete, Update, Create, Index, Select, Show View, Alter Routine ON `$DB_NAME`.* TO `$DB_USER_NAME`@`localhost`;
DB_ACCOUNT;

$user_table = <<<USER_TABLE
CREATE  TABLE `$DB_NAME`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(64) NOT NULL ,
  `email` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `iduser_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;
USER_TABLE;

$data = <<<USER_DATA
	INSERT INTO `$DB_NAME`.`user` (`username`, `password`, `email`) VALUES ('aventurella', '12345', 'aventurella@gmail.com');
	INSERT INTO `$DB_NAME`.`user` (`username`, `password`, `email`) VALUES ('bpuglisi', '12345', 'bpuglisi@gmail.com');
USER_DATA;
?>