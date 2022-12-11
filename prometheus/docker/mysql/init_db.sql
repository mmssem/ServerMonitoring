DROP TABLE IF EXISTS `testtable`;

CREATE TABLE `testtable` (
  `num` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `testtable` (id, password) VALUES ('admin','pass1234');
