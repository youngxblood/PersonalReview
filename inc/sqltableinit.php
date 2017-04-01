<?php
// sql to create table for login data

$sql = "CREATE TABLE IF NOT EXISTS `users` (
	`userId` int(11) NOT NULL AUTO_INCREMENT,
	`userName` varchar(30) NOT NULL,
	`userEmail` varchar(60) NOT NULL,
	`userPass` varchar(255) NOT NULL,
	PRIMARY KEY (`userId`),
	UNIQUE KEY `userEmail` (`userEmail`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

$conn->query($sql);

// sql to create table for 'notes'
$sql = "CREATE TABLE IF NOT EXISTS userNotes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
log_summ VARCHAR(30) NOT NULL,
log_body VARCHAR(1000) NOT NULL,
log_date TIMESTAMP)";

$conn->query($sql);
if (!$conn->query($sql)) {
	$tableError = "Table could not be created.";
}

/*

  POTENTIALLY NOW DEPRECATED.

*/
