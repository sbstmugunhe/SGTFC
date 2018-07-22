/*
MySQL Backup
Database: sgtfc
Backup Time: 2018-07-10 12:17:54
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `sgtfc`.`users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
BEGIN;
LOCK TABLES `sgtfc`.`users` WRITE;
DELETE FROM `sgtfc`.`users`;
INSERT INTO `sgtfc`.`users` (`id`,`email`,`password`,`created`,`modified`) VALUES (1, 'justino@gmail.com', '1111', '2018-07-10 08:10:26', '2018-07-10 08:10:26'),(2, 'sebastian@gmail.com', '1111', '2018-07-10 08:12:30', '2018-07-10 08:12:30');
UNLOCK TABLES;
COMMIT;
