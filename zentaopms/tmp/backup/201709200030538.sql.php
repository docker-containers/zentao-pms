<?php die();?>
SET NAMES utf8;
DROP TABLE IF EXISTS `zt_action`;
CREATE TABLE `zt_action` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` varchar(255) NOT NULL,
  `project` mediumint(9) NOT NULL,
  `actor` varchar(30) NOT NULL DEFAULT '',
  `action` varchar(30) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `comment` text NOT NULL,
  `extra` text NOT NULL,
  `read` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `action` (`objectID`,`product`,`project`,`action`,`date`)
) ENGINE=MyISAM AUTO_INCREMENT=468 DEFAULT CHARSET=utf8;
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('1','user','20',',0,','0','azhi','logout','2012-06-05 09:24:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('2','user','1',',0,','0','admin','login','2012-06-05 09:25:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('3','user','1',',0,','0','admin','logout','2012-06-05 09:51:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('4','user','2',',0,','0','productManager','login','2012-06-05 09:51:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('5','user','2',',0,','0','productManager','logout','2012-06-05 09:53:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('6','user','1',',0,','0','admin','login','2012-06-05 09:53:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('7','user','1',',0,','0','admin','logout','2012-06-05 09:53:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('8','user','2',',0,','0','productManager','login','2012-06-05 09:54:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('9','product','1',',1,','0','productManager','opened','2012-06-05 09:57:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('10','productplan','1',',1,','0','productManager','opened','2012-06-05 10:02:49','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('11','story','1',',1,','0','productManager','opened','2012-06-05 10:09:49','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('12','story','2',',1,','0','productManager','opened','2012-06-05 10:16:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('13','story','3',',1,','0','productManager','opened','2012-06-05 10:18:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('14','story','3',',1,','0','productManager','changed','2012-06-05 10:19:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('15','story','4',',1,','0','productManager','opened','2012-06-05 10:20:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('16','story','5',',1,','0','productManager','opened','2012-06-05 10:21:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('17','story','6',',1,','0','productManager','opened','2012-06-05 10:23:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('18','story','7',',1,','0','productManager','opened','2012-06-05 10:24:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('19','story','1',',1,','0','productManager','reviewed','2012-06-05 10:25:19','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('20','story','2',',1,','0','productManager','reviewed','2012-06-05 10:25:33','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('21','story','3',',1,','0','productManager','reviewed','2012-06-05 10:25:38','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('22','story','4',',1,','0','productManager','reviewed','2012-06-05 10:25:42','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('23','user','2',',0,','0','productManager','logout','2012-06-05 10:26:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('24','user','3',',0,','0','projectManager','login','2012-06-05 10:26:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('25','project','1',',1,','1','projectManager','opened','2012-06-05 10:28:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('26','story','4',',1,','1','projectManager','linked2project','2012-06-05 10:31:02','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('27','story','3',',1,','1','projectManager','linked2project','2012-06-05 10:31:02','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('28','story','2',',1,','1','projectManager','linked2project','2012-06-05 10:31:02','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('29','story','1',',1,','1','projectManager','linked2project','2012-06-05 10:31:02','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('30','task','1',',1,','1','projectManager','opened','2012-06-05 10:32:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('31','task','2',',1,','1','projectManager','opened','2012-06-05 10:32:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('32','task','3',',1,','1','projectManager','opened','2012-06-05 10:33:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('33','task','4',',1,','1','projectManager','opened','2012-06-05 10:33:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('34','task','5',',1,','1','projectManager','opened','2012-06-05 10:33:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('35','task','6',',1,','1','projectManager','opened','2012-06-05 10:33:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('36','task','7',',1,','1','projectManager','opened','2012-06-05 10:34:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('37','task','8',',1,','1','projectManager','opened','2012-06-05 10:34:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('38','task','9',',1,','1','projectManager','opened','2012-06-05 10:35:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('39','user','3',',0,','0','projectManager','logout','2012-06-05 10:37:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('40','user','4',',0,','0','dev1','login','2012-06-05 10:37:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('41','task','1',',1,','1','dev1','started','2012-06-05 10:37:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('42','task','1',',1,','1','dev1','finished','2012-06-05 10:38:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('43','task','8',',1,','1','dev1','finished','2012-06-05 10:39:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('44','task','9',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('45','task','8',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('46','task','7',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('47','task','6',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('48','task','5',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('49','task','4',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('50','task','3',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('51','task','2',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('52','task','1',',1,','1','dev1','edited','2012-06-05 10:41:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('53','user','4',',0,','0','dev1','logout','2012-06-05 10:41:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('54','user','5',',0,','0','dev2','login','2012-06-05 10:41:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('55','task','4',',1,','1','dev2','edited','2012-06-05 10:42:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('56','task','3',',1,','1','dev2','edited','2012-06-05 10:42:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('57','user','5',',0,','0','dev2','logout','2012-06-05 10:43:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('58','user','6',',0,','0','dev3','login','2012-06-05 10:43:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('59','task','6',',1,','1','dev3','edited','2012-06-05 10:43:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('60','task','5',',1,','1','dev3','edited','2012-06-05 10:43:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('61','user','6',',0,','0','dev3','logout','2012-06-05 10:43:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('62','user','3',',0,','0','projectManager','login','2012-06-05 10:44:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('63','user','3',',0,','0','projectManager','logout','2012-06-05 10:50:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('64','user','10',',0,','0','testManager','login','2012-06-05 10:50:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('65','user','10',',0,','0','testManager','logout','2012-06-05 10:50:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('66','user','10',',0,','0','testManager','login','2012-06-05 10:50:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('67','user','10',',0,','0','testManager','logout','2012-06-05 10:50:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('68','user','1',',0,','0','admin','login','2012-06-05 10:50:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('69','user','1',',0,','0','admin','logout','2012-06-05 10:50:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('70','user','10',',0,','0','testManager','login','2012-06-05 10:51:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('71','user','10',',0,','0','testManager','logout','2012-06-05 10:51:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('72','user','7',',0,','0','tester1','login','2012-06-05 10:51:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('73','bug','1',',1,','1','tester1','opened','2012-06-05 10:56:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('74','bug','2',',1,','1','tester1','opened','2012-06-05 10:57:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('75','user','7',',0,','0','tester1','logout','2012-06-05 10:57:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('76','user','8',',0,','0','tester2','login','2012-06-05 10:57:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('77','bug','3',',1,','1','tester2','opened','2012-06-05 10:58:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('78','user','8',',0,','0','tester2','logout','2012-06-05 10:58:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('79','user','9',',0,','0','tester3','login','2012-06-05 10:58:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('80','bug','4',',1,','1','tester3','opened','2012-06-05 11:00:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('81','case','1',',1,','0','tester3','opened','2012-06-05 11:02:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('82','case','1',',1,','0','tester3','edited','2012-06-05 11:02:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('83','user','9',',0,','0','tester3','logout','2012-06-05 11:02:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('84','user','7',',0,','0','tester1','login','2012-06-05 11:02:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('85','case','2',',1,','0','tester1','opened','2012-06-05 11:03:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('86','case','3',',1,','0','tester1','opened','2012-06-05 11:03:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('87','user','7',',0,','0','tester1','logout','2012-06-05 11:04:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('88','user','8',',0,','0','tester2','login','2012-06-05 11:04:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('89','case','4',',1,','0','tester2','opened','2012-06-05 11:04:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('90','user','8',',0,','0','tester2','logout','2012-06-05 11:04:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('91','user','10',',0,','0','testManager','login','2012-06-05 11:04:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('92','testtask','1',',1,','1','testManager','opened','2012-06-05 11:07:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('93','testtask','1',',1,','1','testManager','edited','2012-06-05 11:07:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('94','user','10',',0,','0','testManager','logout','2012-06-05 11:08:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('95','user','1',',0,','0','admin','login','2012-06-05 11:08:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('96','user','1',',0,','0','admin','logout','2012-06-05 11:08:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('97','user','10',',0,','0','testManager','login','2012-06-05 11:08:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('98','user','10',',0,','0','testManager','logout','2012-06-05 11:08:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('99','user','7',',0,','0','tester1','login','2012-06-05 11:08:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('100','user','7',',0,','0','tester1','logout','2012-06-05 11:09:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('101','user','1',',0,','0','admin','login','2012-06-05 11:09:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('102','user','1',',0,','0','admin','logout','2012-06-05 11:10:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('103','user','10',',0,','0','testManager','login','2012-06-05 11:10:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('104','user','10',',0,','0','testManager','logout','2012-06-05 11:11:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('105','user','3',',0,','0','projectManager','login','2012-06-05 11:11:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('106','build','1',',1,','1','projectManager','opened','2012-06-05 11:11:45','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('107','project','2',',1,','2','projectManager','opened','2012-06-05 11:12:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('108','user','3',',0,','0','projectManager','logout','2012-06-05 11:14:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('109','user','2',',0,','0','productManager','login','2012-06-05 11:14:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('110','product','2',',2,','0','productManager','opened','2012-06-05 11:15:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('111','user','1',',0,','0','admin','login','2017-09-06 18:34:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('112','user','2',',0,','0','admin','deleted','2017-09-06 18:39:11','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('113','user','3',',0,','0','admin','deleted','2017-09-06 18:39:39','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('114','user','4',',0,','0','admin','deleted','2017-09-06 18:39:43','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('115','user','5',',0,','0','admin','deleted','2017-09-06 18:39:45','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('116','user','6',',0,','0','admin','deleted','2017-09-06 18:39:48','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('117','user','7',',0,','0','admin','deleted','2017-09-06 18:39:51','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('118','user','8',',0,','0','admin','deleted','2017-09-06 18:39:54','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('119','user','9',',0,','0','admin','deleted','2017-09-06 18:39:57','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('120','user','10',',0,','0','admin','deleted','2017-09-06 18:39:59','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('121','user','1',',0,','0','admin','logout','2017-09-06 18:44:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('122','user','11',',0,','0','chenyang','login','2017-09-06 18:44:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('123','user','11',',0,','0','chenyang','logout','2017-09-06 19:45:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('124','user','1',',0,','0','admin','login','2017-09-06 19:45:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('125','user','11',',0,','0','chenyang','login','2017-09-06 21:00:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('126','user','11',',0,','0','chenyang','login','2017-09-07 09:10:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('127','user','1',',0,','0','admin','login','2017-09-07 09:11:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('128','user','1',',0,','0','admin','logout','2017-09-07 09:27:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('129','user','27',',0,','0','lanmaoyun','login','2017-09-07 09:27:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('130','user','27',',0,','0','lanmaoyun','logout','2017-09-07 09:28:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('131','user','1',',0,','0','admin','login','2017-09-07 09:28:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('132','project','2',',1,','2','admin','edited','2017-09-07 09:30:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('133','product','1',',1,','0','admin','closed','2017-09-07 09:31:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('134','product','1',',1,','0','admin','deleted','2017-09-07 09:31:29','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('135','product','2',',2,','0','admin','deleted','2017-09-07 09:31:36','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('136','project','1',',1,','1','admin','deleted','2017-09-07 09:31:53','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('137','project','2',',1,','2','admin','deleted','2017-09-07 09:32:01','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('138','user','1',',0,','0','admin','logout','2017-09-07 09:33:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('139','user','13',',0,','0','lidongdong','login','2017-09-07 09:34:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('140','user','13',',0,','0','lidongdong','logout','2017-09-07 09:34:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('141','user','1',',0,','0','admin','login','2017-09-07 09:34:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('142','user','1',',0,','0','admin','logout','2017-09-07 09:36:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('143','user','13',',0,','0','lidongdong','login','2017-09-07 09:37:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('144','product','3',',3,','0','lidongdong','opened','2017-09-07 09:42:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('145','productplan','2',',3,','0','lidongdong','opened','2017-09-07 09:44:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('146','productplan','3',',3,','0','lidongdong','opened','2017-09-07 09:44:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('147','story','8',',3,','0','lidongdong','opened','2017-09-07 09:46:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('148','story','9',',3,','0','lidongdong','opened','2017-09-07 09:46:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('149','story','8',',3,','0','lidongdong','reviewed','2017-09-07 09:47:13','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('150','story','9',',3,','0','lidongdong','reviewed','2017-09-07 09:47:23','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('151','user','13',',0,','0','lidongdong','logout','2017-09-07 09:47:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('152','user','12',',0,','0','shenguilin','login','2017-09-07 09:47:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('153','project','3',',3,','3','shenguilin','opened','2017-09-07 09:48:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('154','story','9',',3,','3','shenguilin','linked2project','2017-09-07 09:50:21','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('155','story','8',',3,','3','shenguilin','linked2project','2017-09-07 09:50:21','','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('156','task','10',',3,','3','shenguilin','opened','2017-09-07 09:51:15','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('157','task','11',',3,','3','shenguilin','opened','2017-09-07 09:51:15','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('158','task','12',',3,','3','shenguilin','opened','2017-09-07 09:51:15','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('159','user','12',',0,','0','shenguilin','logout','2017-09-07 09:51:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('160','user','13',',0,','0','lidongdong','login','2017-09-07 09:51:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('161','user','13',',0,','0','lidongdong','logout','2017-09-07 09:52:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('162','user','21',',0,','0','xumaohuai','login','2017-09-07 09:52:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('163','user','21',',0,','0','xumaohuai','logout','2017-09-07 09:54:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('164','user','22',',0,','0','tianliwei','login','2017-09-07 09:54:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('165','bug','5',',3,','3','tianliwei','opened','2017-09-07 09:56:50','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('166','bug','5',',3,','3','tianliwei','assigned','2017-09-07 09:56:59','','qiuqingqiang','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('167','user','22',',0,','0','tianliwei','logout','2017-09-07 09:57:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('168','user','20',',0,','0','qiuqingqiang','login','2017-09-07 09:57:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('169','bug','5',',3,','3','qiuqingqiang','bugconfirmed','2017-09-07 09:57:36','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('170','bug','5',',3,','3','qiuqingqiang','resolved','2017-09-07 09:57:57','','willnotfix','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('171','user','20',',0,','0','qiuqingqiang','logout','2017-09-07 09:58:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('172','user','22',',0,','0','tianliwei','login','2017-09-07 09:58:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('173','bug','5',',3,','3','tianliwei','closed','2017-09-07 09:58:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('174','bug','5',',3,','3','tianliwei','activated','2017-09-07 09:58:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('175','user','22',',0,','0','tianliwei','logout','2017-09-07 09:58:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('176','user','20',',0,','0','qiuqingqiang','login','2017-09-07 09:58:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('177','bug','5',',3,','3','qiuqingqiang','resolved','2017-09-07 09:58:59','','duplicate:2','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('178','user','20',',0,','0','qiuqingqiang','logout','2017-09-07 09:59:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('179','user','22',',0,','0','tianliwei','login','2017-09-07 09:59:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('180','bug','5',',3,','3','tianliwei','closed','2017-09-07 09:59:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('181','user','11',',0,','0','chenyang','login','2017-09-07 10:00:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('182','user','22',',0,','0','tianliwei','logout','2017-09-07 10:01:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('183','user','12',',0,','0','shenguilin','login','2017-09-07 10:02:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('184','task','10',',3,','3','shenguilin','finished','2017-09-07 10:02:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('185','user','12',',0,','0','shenguilin','logout','2017-09-07 10:06:54','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('186','user','22',',0,','0','tianliwei','login','2017-09-07 10:07:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('187','bug','6',',3,','3','tianliwei','opened','2017-09-07 10:08:15','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('188','user','11',',0,','0','chenyang','logout','2017-09-07 10:10:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('189','user','1',',0,','0','admin','login','2017-09-07 10:10:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('190','user','1',',0,','0','admin','login','2017-09-07 12:47:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('191','user','1',',0,','0','admin','logout','2017-09-07 15:16:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('192','user','1',',0,','0','admin','login','2017-09-07 15:16:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('193','user','26',',0,','0','zhating','login','2017-09-07 15:29:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('194','user','20',',0,','0','qiuqingqiang','login','2017-09-07 15:31:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('195','user','26',',0,','0','zhating','logout','2017-09-07 15:32:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('196','user','26',',0,','0','zhating','login','2017-09-07 15:32:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('197','bug','6',',3,','3','qiuqingqiang','bugconfirmed','2017-09-07 16:00:53','已确认','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('198','user','1',',0,','0','admin','login','2017-09-07 16:03:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('199','user','12',',0,','0','shenguilin','login','2017-09-07 16:25:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('200','user','22',',0,','0','tianliwei','login','2017-09-07 17:06:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('201','case','5',',3,','0','tianliwei','opened','2017-09-07 17:08:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('202','case','6',',3,','0','tianliwei','opened','2017-09-07 17:11:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('203','case','6',',3,','0','tianliwei','deleted','2017-09-07 17:11:31','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('204','case','7',',3,','0','tianliwei','opened','2017-09-07 17:13:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('205','case','8',',3,','0','tianliwei','opened','2017-09-07 17:29:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('206','case','9',',3,','0','tianliwei','opened','2017-09-07 17:29:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('207','case','10',',3,','0','tianliwei','opened','2017-09-07 17:29:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('208','case','11',',3,','0','tianliwei','opened','2017-09-07 17:29:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('209','case','12',',3,','0','tianliwei','opened','2017-09-07 17:29:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('210','case','12',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('211','case','11',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('212','case','10',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('213','case','9',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('214','case','8',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('215','case','7',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('216','case','5',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('217','case','12',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('218','case','11',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('219','case','10',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('220','case','9',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('221','case','8',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('222','case','7',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('223','case','5',',3,','0','tianliwei','deleted','2017-09-07 17:30:14','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('224','user','22',',0,','0','tianliwei','logout','2017-09-08 09:22:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('225','user','1',',0,','0','admin','login','2017-09-08 09:22:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('226','user','1',',0,','0','admin','logout','2017-09-08 09:23:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('227','user','22',',0,','0','tianliwei','login','2017-09-08 09:23:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('228','user','22',',0,','0','tianliwei','logout','2017-09-08 09:24:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('229','user','12',',0,','0','shenguilin','login','2017-09-08 09:24:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('230','user','12',',0,','0','shenguilin','logout','2017-09-08 09:24:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('231','user','13',',0,','0','lidongdong','login','2017-09-08 09:24:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('232','user','13',',0,','0','lidongdong','logout','2017-09-08 09:24:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('233','user','22',',0,','0','tianliwei','login','2017-09-08 09:25:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('234','caselib','1',',0,','0','tianliwei','opened','2017-09-08 09:29:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('235','case','13',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('236','case','14',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('237','case','15',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('238','case','16',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('239','case','17',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('240','case','18',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('241','case','19',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('242','case','20',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('243','case','21',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('244','case','22',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('245','case','23',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('246','case','24',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('247','case','25',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('248','case','26',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('249','case','27',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('250','case','28',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('251','case','29',',3,','0','tianliwei','opened','2017-09-08 09:31:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('252','user','1',',0,','0','admin','login','2017-09-08 09:37:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('253','bug','6',',3,','3','tianliwei','assigned','2017-09-08 09:43:13','请处理','tianliwei','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('254','bug','7',',3,','3','tianliwei','opened','2017-09-08 09:44:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('255','user','22',',0,','0','tianliwei','logout','2017-09-08 09:44:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('256','user','1',',0,','0','admin','login','2017-09-08 09:44:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('257','bug','8',',3,','3','admin','opened','2017-09-08 09:45:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('258','user','29',',0,','0','admin','deleted','2017-09-08 10:16:48','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('259','user','1',',0,','0','admin','logout','2017-09-08 10:18:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('260','user','11',',0,','0','chenyang','login','2017-09-08 11:08:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('261','user','12',',0,','0','shenguilin','login','2017-09-11 14:20:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('262','user','1',',0,','0','admin','login','2017-09-11 14:46:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('263','user','1',',0,','0','admin','login','2017-09-11 16:36:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('264','user','1',',0,','0','admin','logout','2017-09-11 16:36:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('265','user','1',',0,','0','admin','login','2017-09-11 16:38:56','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('266','user','13',',0,','0','lidongdong','login','2017-09-11 16:41:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('267','user','13',',0,','0','lidongdong','login','2017-09-11 17:15:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('268','story','10',',3,','0','lidongdong','opened','2017-09-11 17:18:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('269','user','13',',0,','0','lidongdong','logout','2017-09-11 17:19:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('270','user','12',',0,','0','shenguilin','login','2017-09-11 17:19:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('271','project','4',',3,','4','shenguilin','opened','2017-09-11 17:20:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('272','story','10',',3,','4','shenguilin','linked2project','2017-09-11 17:21:43','','4','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('273','task','13',',3,','4','shenguilin','opened','2017-09-11 17:22:25','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('274','task','14',',3,','4','shenguilin','opened','2017-09-11 17:22:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('275','task','15',',3,','4','shenguilin','opened','2017-09-11 17:22:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('276','task','16',',3,','4','shenguilin','opened','2017-09-11 17:22:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('277','task','15',',3,','4','shenguilin','assigned','2017-09-11 17:23:17','','tianliwei','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('278','task','14',',3,','4','shenguilin','assigned','2017-09-11 17:23:25','','xumaohuai','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('279','task','14',',3,','4','shenguilin','assigned','2017-09-11 17:23:40','','xumaohuai','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('280','task','13',',3,','4','shenguilin','assigned','2017-09-11 17:23:45','','qiuqingqiang','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('281','user','12',',0,','0','shenguilin','logout','2017-09-11 17:23:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('282','user','20',',0,','0','qiuqingqiang','login','2017-09-11 17:24:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('283','task','13',',3,','4','qiuqingqiang','started','2017-09-11 17:24:50','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('284','task','13',',3,','4','qiuqingqiang','finished','2017-09-11 17:25:28','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('285','user','20',',0,','0','qiuqingqiang','logout','2017-09-11 17:25:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('286','user','12',',0,','0','shenguilin','login','2017-09-11 17:25:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('287','user','12',',0,','0','shenguilin','logout','2017-09-11 17:25:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('288','user','21',',0,','0','xumaohuai','login','2017-09-11 17:26:09','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('289','task','14',',3,','4','xumaohuai','finished','2017-09-11 17:26:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('290','user','21',',0,','0','xumaohuai','logout','2017-09-11 17:26:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('291','user','22',',0,','0','tianliwei','login','2017-09-11 17:26:50','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('292','task','15',',3,','4','tianliwei','finished','2017-09-11 17:27:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('293','bug','9',',3,','4','tianliwei','opened','2017-09-11 17:29:17','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('294','bug','9',',3,','4','tianliwei','assigned','2017-09-11 17:29:46','','qiuqingqiang','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('295','user','22',',0,','0','tianliwei','logout','2017-09-11 17:29:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('296','user','20',',0,','0','qiuqingqiang','login','2017-09-11 17:29:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('297','bug','9',',3,','4','qiuqingqiang','resolved','2017-09-11 17:31:07','','fixed','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('298','user','20',',0,','0','qiuqingqiang','logout','2017-09-11 17:32:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('299','user','1',',0,','0','admin','login','2017-09-11 17:32:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('300','user','12',',0,','0','shenguilin','login','2017-09-12 14:53:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('301','doc','1',',0,','4','shenguilin','created','2017-09-12 14:54:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('302','doc','1',',0,','4','shenguilin','edited','2017-09-12 14:55:10','上传了附件 ccpcNo.log','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('303','doc','1',',0,','4','shenguilin','editfile','2017-09-12 14:56:02','','ccpcNo.log.txt','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('304','doc','1',',0,','4','shenguilin','edited','2017-09-12 14:56:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('305','user','13',',0,','0','lidongdong','login','2017-09-12 16:53:21','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('306','doclib','8',',0,','0','lidongdong','created','2017-09-12 16:55:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('307','user','27',',0,','0','lanmaoyun','login','2017-09-13 10:28:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('308','user','20',',0,','0','qiuqingqiang','login','2017-09-13 10:31:31','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('309','user','28',',0,','0','xiaojian','login','2017-09-13 10:32:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('310','user','27',',0,','0','lanmaoyun','login','2017-09-13 10:37:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('311','story','11',',3,','4','lanmaoyun','opened','2017-09-13 10:41:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('312','user','12',',0,','0','shenguilin','login','2017-09-13 16:25:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('313','user','1',',0,','0','admin','login','2017-09-13 16:25:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('314','task','17',',3,','4','shenguilin','opened','2017-09-13 17:19:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('315','user','26',',0,','0','zhating','login','2017-09-14 09:08:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('316','product','3',',3,','0','admin','edited','2017-09-15 17:24:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('317','story','12',',3,','0','admin','opened','2017-09-15 17:31:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('318','story','12',',3,','0','admin','reviewed','2017-09-15 17:31:38','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('319','project','5',',,','5','admin','opened','2017-09-15 17:33:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('320','story','12',',3,','5','admin','linked2project','2017-09-15 17:35:24','','5','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('321','task','18',',3,','5','admin','opened','2017-09-15 17:38:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('322','task','19',',3,','5','admin','opened','2017-09-15 17:38:04','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('323','task','19',',3,','5','admin','assigned','2017-09-15 17:38:34','','lidongdong','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('324','project','6',',,','6','admin','opened','2017-09-15 17:42:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('325','task','20',',,','6','admin','opened','2017-09-15 17:43:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('326','task','20',',,','6','admin','started','2017-09-15 17:44:12','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('327','task','21',',,','6','admin','opened','2017-09-15 17:54:06','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('328','task','21',',,','6','admin','started','2017-09-15 17:54:39','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('329','task','21',',,','6','admin','finished','2017-09-15 17:56:39','富含丰富','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('330','story','13',',3,','0','admin','opened','2017-09-15 17:58:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('331','story','13',',3,','0','admin','reviewed','2017-09-15 18:00:03','','Pass','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('332','bug','10',',3,','0','admin','opened','2017-09-15 18:02:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('333','user','20',',0,','0','qiuqingqiang','login','2017-09-18 09:10:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('334','task','11',',3,','3','qiuqingqiang','assigned','2017-09-18 09:10:44','要准时完成任务哦','xumaohuai','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('335','user','26',',0,','0','zhating','login','2017-09-18 09:15:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('336','user','21',',0,','0','xumaohuai','login','2017-09-18 09:16:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('337','user','1',',0,','0','admin','login','2017-09-18 09:24:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('338','user','1',',0,','0','admin','login','2017-09-18 22:44:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('339','user','1',',0,','0','admin','logout','2017-09-18 22:56:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('340','user','27',',0,','0','lanmaoyun','login','2017-09-18 22:56:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('341','user','27',',0,','0','lanmaoyun','logout','2017-09-18 22:57:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('342','user','1',',0,','0','admin','login','2017-09-18 22:57:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('343','user','1',',0,','0','admin','logout','2017-09-18 23:02:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('344','user','1',',0,','0','admin','login','2017-09-18 23:02:46','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('345','user','1',',0,','0','admin','logout','2017-09-18 23:02:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('346','user','30',',0,','0','tangfei','login','2017-09-18 23:02:51','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('347','project','7',',,','7','tangfei','opened','2017-09-18 23:03:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('348','project','6',',,','6','tangfei','closed','2017-09-18 23:04:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('349','user','30',',0,','0','tangfei','logout','2017-09-18 23:04:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('350','user','1',',0,','0','admin','login','2017-09-18 23:04:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('351','user','1',',0,','0','admin','logout','2017-09-18 23:04:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('352','user','30',',0,','0','tangfei','login','2017-09-18 23:05:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('353','task','22',',,','7','tangfei','opened','2017-09-18 23:08:06','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('354','task','23',',,','7','tangfei','opened','2017-09-18 23:09:11','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('355','task','22',',,','7','tangfei','started','2017-09-18 23:09:25','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('356','task','22',',,','7','tangfei','assigned','2017-09-18 23:09:34','','fuwenjing','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('357','user','30',',0,','0','tangfei','logout','2017-09-18 23:10:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('358','user','27',',0,','0','lanmaoyun','login','2017-09-18 23:10:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('359','task','23',',,','7','lanmaoyun','started','2017-09-18 23:10:55','','','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('360','task','23',',,','7','lanmaoyun','recordestimate','2017-09-18 23:11:17','','8','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('361','task','23',',,','7','lanmaoyun','recordestimate','2017-09-18 23:11:30','','7','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('362','user','27',',0,','0','lanmaoyun','logout','2017-09-18 23:13:15','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('363','user','31',',0,','0','fuwenjing','login','2017-09-18 23:13:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('364','task','22',',,','7','fuwenjing','recordestimate','2017-09-18 23:13:48','','8','1');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('365','user','31',',0,','0','fuwenjing','logout','2017-09-18 23:15:00','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('366','user','33',',0,','0','zhangtingting','login','2017-09-18 23:15:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('367','user','33',',0,','0','zhangtingting','logout','2017-09-18 23:16:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('368','user','34',',0,','0','fanzhi','login','2017-09-18 23:16:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('369','user','34',',0,','0','fanzhi','logout','2017-09-18 23:17:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('370','user','20',',0,','0','qiuqingqiang','login','2017-09-18 23:17:14','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('371','user','20',',0,','0','qiuqingqiang','logout','2017-09-18 23:18:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('372','user','22',',0,','0','tianliwei','login','2017-09-18 23:18:49','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('373','testsuite','2',',0,','0','tianliwei','opened','2017-09-18 23:19:03','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('374','testtask','2',',3,','5','tianliwei','opened','2017-09-18 23:19:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('375','user','11',',0,','0','chenyang','login','2017-09-19 09:13:20','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('376','task','20',',,','6','chenyang','finished','2017-09-19 09:13:59','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('377','user','30',',0,','0','tangfei','login','2017-09-19 09:23:17','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('378','user','30',',0,','0','tangfei','logout','2017-09-19 09:24:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('379','user','1',',0,','0','admin','login','2017-09-19 09:24:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('380','user','1',',0,','0','admin','logout','2017-09-19 09:26:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('381','user','30',',0,','0','tangfei','login','2017-09-19 09:26:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('382','user','20',',0,','0','qiuqingqiang','login','2017-09-19 10:12:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('383','user','30',',0,','0','tangfei','login','2017-09-19 10:28:25','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('384','project','5',',3,','5','tangfei','deleted','2017-09-19 10:29:17','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('385','project','4',',3,','4','tangfei','deleted','2017-09-19 10:29:26','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('386','project','7',',,','7','tangfei','deleted','2017-09-19 10:29:31','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('387','project','3',',3,','3','tangfei','deleted','2017-09-19 10:29:37','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('388','project','6',',,','6','tangfei','deleted','2017-09-19 10:29:50','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('389','task','22',',,','7','tangfei','closed','2017-09-19 10:30:44','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('390','task','22',',,','7','tangfei','deleted','2017-09-19 10:30:53','','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('391','project','8',',,','8','tangfei','opened','2017-09-19 10:34:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('392','user','30',',0,','0','tangfei','logout','2017-09-19 10:34:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('393','user','12',',0,','0','shenguilin','login','2017-09-19 10:34:35','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('394','user','12',',0,','0','shenguilin','logout','2017-09-19 10:34:38','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('395','user','30',',0,','0','tangfei','login','2017-09-19 10:34:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('396','task','24',',,','8','tangfei','opened','2017-09-19 10:38:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('397','task','25',',,','8','tangfei','opened','2017-09-19 10:38:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('398','task','26',',,','8','tangfei','opened','2017-09-19 10:38:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('399','task','27',',,','8','tangfei','opened','2017-09-19 10:38:49','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('400','task','27',',,','8','tangfei','started','2017-09-19 10:39:34','19号开始','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('401','task','27',',,','8','tangfei','recordestimate','2017-09-19 10:40:07','完成15个','6','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('402','user','30',',0,','0','tangfei','logout','2017-09-19 10:40:39','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('403','user','27',',0,','0','lanmaoyun','login','2017-09-19 10:40:43','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('404','task','26',',,','8','lanmaoyun','started','2017-09-19 10:40:55','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('405','task','26',',,','8','lanmaoyun','recordestimate','2017-09-19 10:41:10','13','7','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('406','task','26',',,','8','lanmaoyun','recordestimate','2017-09-19 10:41:23','6','6','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('407','task','26',',,','8','lanmaoyun','recordestimate','2017-09-19 10:41:37','1','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('408','user','27',',0,','0','lanmaoyun','logout','2017-09-19 10:42:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('409','user','32',',0,','0','jiangdandan','login','2017-09-19 10:42:22','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('410','task','25',',,','8','jiangdandan','recordestimate','2017-09-19 10:43:21','完成了3个','6','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('411','task','25',',,','8','jiangdandan','recordestimate','2017-09-19 10:43:21','完成了4个','4','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('412','task','25',',,','8','jiangdandan','recordestimate','2017-09-19 10:43:21','完成了3个','3','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('413','task','25',',,','8','jiangdandan','recordestimate','2017-09-19 10:43:39','完成了3个','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('414','task','25',',,','8','jiangdandan','recordestimate','2017-09-19 10:43:39','完成了3个','2','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('415','task','24',',,','8','jiangdandan','recordestimate','2017-09-19 10:44:29','完成了3个','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('416','user','32',',0,','0','jiangdandan','logout','2017-09-19 10:44:37','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('417','user','31',',0,','0','fuwenjing','login','2017-09-19 10:44:41','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('418','task','24',',,','8','fuwenjing','recordestimate','2017-09-19 10:44:49','完成了3个','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('419','user','31',',0,','0','fuwenjing','logout','2017-09-19 10:45:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('420','user','30',',0,','0','tangfei','login','2017-09-19 10:45:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('421','task','24',',,','8','tangfei','assigned','2017-09-19 10:45:21','','fuwenjing','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('422','user','30',',0,','0','tangfei','logout','2017-09-19 10:45:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('423','user','32',',0,','0','jiangdandan','login','2017-09-19 10:45:33','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('424','task','24',',,','8','jiangdandan','recordestimate','2017-09-19 10:45:46','完成了3个','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('425','task','24',',,','8','jiangdandan','recordestimate','2017-09-19 10:46:05','完成了3个','1','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('426','user','32',',0,','0','jiangdandan','logout','2017-09-19 10:46:24','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('427','user','30',',0,','0','tangfei','login','2017-09-19 10:46:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('428','task','26',',,','8','tangfei','closed','2017-09-19 10:47:27','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('429','task','24',',,','8','tangfei','closed','2017-09-19 10:47:47','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('430','user','30',',0,','0','tangfei','logout','2017-09-19 10:49:30','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('431','user','1',',0,','0','admin','login','2017-09-19 10:49:34','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('432','user','1',',0,','0','admin','logout','2017-09-19 10:49:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('433','user','1',',0,','0','admin','login','2017-09-19 10:50:10','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('434','doclib','13',',0,','0','admin','created','2017-09-19 10:50:42','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('435','user','1',',0,','0','admin','logout','2017-09-19 10:52:13','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('436','user','30',',0,','0','tangfei','login','2017-09-19 10:52:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('437','doc','2',',0,','8','tangfei','created','2017-09-19 10:52:53','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('438','user','1',',0,','0','admin','login','2017-09-19 14:35:57','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('439','user','1',',0,','0','admin','logout','2017-09-19 14:54:40','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('440','user','13',',0,','0','lidongdong','login','2017-09-19 14:54:52','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('441','user','26',',0,','0','zhating','login','2017-09-19 15:32:36','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('442','user','13',',0,','0','lidongdong','logout','2017-09-19 15:35:19','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('443','user','12',',0,','0','shenguilin','login','2017-09-19 15:35:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('444','project','9',',,','9','shenguilin','opened','2017-09-19 15:36:18','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('445','task','28',',3,','9','shenguilin','opened','2017-09-19 15:38:23','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('446','user','12',',0,','0','shenguilin','logout','2017-09-19 15:38:48','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('447','user','20',',0,','0','qiuqingqiang','login','2017-09-19 15:39:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('448','build','2',',3,','9','qiuqingqiang','opened','2017-09-19 15:39:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('449','testtask','3',',3,','9','qiuqingqiang','opened','2017-09-19 15:40:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('450','user','20',',0,','0','qiuqingqiang','logout','2017-09-19 15:42:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('451','user','22',',0,','0','tianliwei','login','2017-09-19 15:42:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('452','user','22',',0,','0','tianliwei','logout','2017-09-19 15:43:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('453','user','12',',0,','0','shenguilin','login','2017-09-19 15:44:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('454','user','12',',0,','0','shenguilin','logout','2017-09-19 15:44:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('455','user','22',',0,','0','tianliwei','login','2017-09-19 15:44:32','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('456','testtask','4',',3,','9','tianliwei','opened','2017-09-19 15:45:07','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('457','user','22',',0,','0','tianliwei','logout','2017-09-19 15:46:05','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('458','user','12',',0,','0','shenguilin','login','2017-09-19 15:46:08','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('459','user','12',',0,','0','shenguilin','logout','2017-09-19 15:47:01','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('460','user','20',',0,','0','qiuqingqiang','login','2017-09-19 15:47:06','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('461','user','22',',0,','0','tianliwei','login','2017-09-19 22:08:16','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('462','user','22',',0,','0','tianliwei','logout','2017-09-19 22:11:02','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('463','user','30',',0,','0','tangfei','login','2017-09-19 22:16:11','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('464','task','27',',,','8','tangfei','closed','2017-09-19 22:16:26','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('465','task','25',',,','8','tangfei','closed','2017-09-19 22:16:29','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('466','project','8',',,','8','tangfei','started','2017-09-19 22:16:58','','','0');
INSERT INTO `zt_action`(`id`,`objectType`,`objectID`,`product`,`project`,`actor`,`action`,`date`,`comment`,`extra`,`read`) VALUES ('467','project','8',',,','8','tangfei','delayed','2017-09-19 22:17:15','','','0');
DROP TABLE IF EXISTS `zt_block`;
CREATE TABLE `zt_block` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `source` varchar(20) NOT NULL,
  `block` varchar(20) NOT NULL,
  `params` text NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `grid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hidden` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `accountModuleOrder` (`account`,`module`,`order`),
  KEY `block` (`account`,`module`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('1','admin','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('2','admin','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('3','admin','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('4','admin','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('5','admin','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('6','admin','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('7','admin','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('8','admin','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('9','admin','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('10','admin','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('11','admin','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('12','admin','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('13','admin','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('14','admin','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('15','admin','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('16','admin','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('17','chenyang','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('18','chenyang','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('19','chenyang','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('20','chenyang','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('21','chenyang','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('22','chenyang','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('23','chenyang','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('24','chenyang','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('25','chenyang','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('26','chenyang','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('27','chenyang','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('28','chenyang','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('29','chenyang','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('30','chenyang','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('31','lanmaoyun','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('32','lanmaoyun','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('33','lanmaoyun','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('34','lanmaoyun','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('35','lanmaoyun','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('36','lanmaoyun','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('37','lanmaoyun','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('38','lanmaoyun','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('39','lanmaoyun','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('40','lanmaoyun','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('41','lanmaoyun','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('42','lanmaoyun','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('43','lanmaoyun','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('44','lidongdong','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('45','lidongdong','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('46','lidongdong','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('47','lidongdong','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('48','lidongdong','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('49','lidongdong','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('50','lidongdong','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('51','lidongdong','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('52','lidongdong','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('53','lidongdong','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('54','lidongdong','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('55','lidongdong','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('56','lidongdong','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('57','shenguilin','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('58','shenguilin','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('59','xumaohuai','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('60','xumaohuai','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('61','xumaohuai','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('62','xumaohuai','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('63','xumaohuai','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('64','xumaohuai','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('65','xumaohuai','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('66','xumaohuai','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('67','xumaohuai','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('68','xumaohuai','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('69','xumaohuai','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('70','xumaohuai','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('71','xumaohuai','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('72','xumaohuai','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('73','tianliwei','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('74','tianliwei','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('75','tianliwei','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('76','tianliwei','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('77','tianliwei','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('78','tianliwei','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('79','tianliwei','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('80','qiuqingqiang','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('81','qiuqingqiang','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('84','qiuqingqiang','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('85','qiuqingqiang','my','我的待办','todo','list','{\"num\":\"20\"}','0','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('87','qiuqingqiang','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('89','qiuqingqiang','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('88','qiuqingqiang','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('86','qiuqingqiang','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','6','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('90','qiuqingqiang','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','5','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('100','shenguilin','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('93','tianliwei','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','0','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('94','tianliwei','my','我的待办','todo','list','{\"num\":\"20\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('95','tianliwei','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('96','tianliwei','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('97','tianliwei','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('98','tianliwei','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','5','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('99','tianliwei','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('101','shenguilin','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('102','shenguilin','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('103','zhating','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('104','zhating','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('105','zhating','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('106','zhating','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('107','zhating','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('108','zhating','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('109','zhating','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('110','zhating','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('111','zhating','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('112','qiuqingqiang','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('113','qiuqingqiang','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('114','qiuqingqiang','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('115','qiuqingqiang','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('116','qiuqingqiang','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('117','shenguilin','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('118','shenguilin','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('119','shenguilin','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('120','shenguilin','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('121','shenguilin','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('122','shenguilin','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('123','shenguilin','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('124','shenguilin','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('125','shenguilin','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('126','shenguilin','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('127','shenguilin','product','指派给我的需求','product','story','{\"color\":\"default\",\"type\":\"assignedTo\",\"num\":\"15\",\"orderBy\":\"id_desc\"}','2','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('128','xiaojian','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('129','xiaojian','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('130','xiaojian','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('131','xiaojian','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('132','xiaojian','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('133','xiaojian','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('134','xiaojian','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('135','xiaojian','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('136','xiaojian','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('137','lanmaoyun','project','任务列表','project','task','{\"color\":\"default\",\"type\":\"openedBy\",\"num\":\"20\",\"orderBy\":\"id_desc\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('138','lanmaoyun','project','易电助手','project','task','{\"color\":\"default\",\"type\":\"assignedTo\",\"num\":\"20\",\"orderBy\":\"id_desc\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('142','tangfei','my','进行中的项目','project','list','{\"color\":\"default\",\"type\":\"all\",\"num\":\"15\"}','3','6','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('143','tangfei','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('145','tangfei','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','6','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('147','tangfei','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('149','tangfei','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('150','tangfei','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('151','tangfei','product','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('152','tangfei','product','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('153','tangfei','qa','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','1','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('154','tangfei','qa','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('155','tangfei','qa','待测版本列表','qa','testtask','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"wait\"}','3','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('156','fuwenjing','my','流程图','','flowchart','','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('157','fuwenjing','my','最新动态','','dynamic','','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('158','fuwenjing','my','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','3','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('159','fuwenjing','my','我的待办','todo','list','{\"num\":\"20\"}','4','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('160','fuwenjing','my','未关闭的产品','product','list','{\"num\":15,\"type\":\"noclosed\"}','5','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('161','fuwenjing','my','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','6','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('162','fuwenjing','my','指派给我的Bug','qa','bug','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','7','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('163','fuwenjing','my','指派给我的需求','product','story','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','8','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('164','fuwenjing','my','指派给我的用例','qa','case','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}','9','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('165','zhangtingting','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('166','zhangtingting','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('167','fanzhi','project','进行中的项目','project','list','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}','1','8','0','0');
INSERT INTO `zt_block`(`id`,`account`,`module`,`title`,`source`,`block`,`params`,`order`,`grid`,`height`,`hidden`) VALUES ('168','fanzhi','project','指派给我的任务','project','task','{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}','2','4','0','0');
DROP TABLE IF EXISTS `zt_branch`;
CREATE TABLE `zt_branch` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `product` (`product`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_branch`(`id`,`product`,`name`,`order`,`deleted`) VALUES ('1','3','android','1','0');
INSERT INTO `zt_branch`(`id`,`product`,`name`,`order`,`deleted`) VALUES ('2','3','ios','2','0');
INSERT INTO `zt_branch`(`id`,`product`,`name`,`order`,`deleted`) VALUES ('3','3','PC','3','0');
DROP TABLE IF EXISTS `zt_bug`;
CREATE TABLE `zt_bug` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toTask` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `toStory` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `severity` tinyint(4) NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `os` varchar(30) NOT NULL DEFAULT '',
  `browser` varchar(30) NOT NULL DEFAULT '',
  `hardware` varchar(30) NOT NULL,
  `found` varchar(30) NOT NULL DEFAULT '',
  `steps` text NOT NULL,
  `status` enum('active','resolved','closed') NOT NULL DEFAULT 'active',
  `color` char(7) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `activatedCount` smallint(6) NOT NULL,
  `mailto` text,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `openedBuild` varchar(255) NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `deadline` date NOT NULL,
  `resolvedBy` varchar(30) NOT NULL DEFAULT '',
  `resolution` varchar(30) NOT NULL DEFAULT '',
  `resolvedBuild` varchar(30) NOT NULL DEFAULT '',
  `resolvedDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `duplicateBug` mediumint(8) unsigned NOT NULL,
  `linkBug` varchar(255) NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `caseVersion` smallint(6) NOT NULL DEFAULT '1',
  `result` mediumint(8) unsigned NOT NULL,
  `testtask` mediumint(8) unsigned NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `bug` (`product`,`module`,`project`,`assignedTo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','1','0','8','1','0','1','1','1','0','0','首页页面问题','','3','0','interface','','','','','<p>[步骤]进入首页</p>
<p>[结果]出现乱码&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>[期望]正常显示</p>','active','','0','0','','tester1','2012-06-05 10:56:11','trunk','dev1','2012-06-05 10:56:11','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','1','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','1','0','9','1','0','2','1','4','0','0','新闻中心页面问题','','3','0','codeerror','','','','','<p>[步骤]进入新闻中心</p>
<p>[结果]页面出现乱码</p>
<p>[期望]正常显示</p>','active','','0','0','','tester1','2012-06-05 10:57:11','trunk','dev2','2012-06-05 10:57:11','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','1','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('3','1','0','10','1','0','3','2','6','0','0','成果展示页面问题','','3','0','codeerror','','','','','<p>[步骤]进入成果展示&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>[结果]乱码</p>
<p>[期望]正常显示</p>','active','','0','0','','tester2','2012-06-05 10:58:22','trunk','dev3','2012-06-05 10:58:22','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','1','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('4','1','0','11','1','0','4','1','9','0','0','售后服务页面问题','','3','0','codeerror','','','','','<p>[步骤]进入售后服务</p>
<p>[结果]乱码</p>
<p>[期望]正常显示</p>','active','','0','0','','tester3','2012-06-05 11:00:19','trunk','dev1','2012-06-05 11:00:19','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','1','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('5','3','0','15','3','0','0','1','0','0','0','bug1','','3','4','interface','','','','','<p>[步骤]</p>
<br /><p>[结果]</p>
<br /><p>[期望]</p>','closed','','1','1','','tianliwei','2017-09-07 09:56:50','trunk','closed','2017-09-07 09:59:13','0000-00-00','qiuqingqiang','duplicate','','2017-09-07 09:58:44','tianliwei','2017-09-07 09:59:13','2','','0','0','0','0','tianliwei','2017-09-07 09:59:13','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('6','3','0','15','3','0','0','1','0','0','0','阿达大','','3','3','codeerror','','','','','<p>[步骤]</p>
<br /><p>[结果]</p>
<br /><p>[期望]</p>','active','','1','0',',tianliwei','tianliwei','2017-09-07 10:08:15','trunk','tianliwei','2017-09-08 09:43:13','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','0','0','0','tianliwei','2017-09-08 09:43:13','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('7','3','0','15','3','0','0','1','0','0','0','测试bug','','3','0','codeerror','','','','','<p>[步骤]</p><p>[结果]</p><p>[期望]</p>','active','','0','0',',tianliwei','tianliwei','2017-09-08 09:44:05','trunk','tianliwei','2017-09-08 09:44:05','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','0','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('8','3','0','15','3','0','0','1','0','0','0','测试bug ','','3','0','codeerror','','','','','<p>[步骤]</p><p>[结果]</p><p>[期望]</p>','active','','0','0',',chenyang','admin','2017-09-08 09:45:37','trunk','tianliwei','2017-09-08 09:45:37','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','0','0','0','','0000-00-00 00:00:00','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('9','3','0','15','4','0','0','1','0','0','0','asdadasda','','3','0','codeerror','','','','','<p>[步骤]</p>
<br /><p>[结果]</p>
<br /><p>[期望]</p>','resolved','','1','0',',tianliwei','tianliwei','2017-09-11 17:29:17','trunk','tianliwei','2017-09-11 17:31:07','0000-00-00','qiuqingqiang','fixed','trunk','2017-09-11 17:30:15','','0000-00-00 00:00:00','0','','0','0','0','0','qiuqingqiang','2017-09-11 17:31:07','0');
INSERT INTO `zt_bug`(`id`,`product`,`branch`,`module`,`project`,`plan`,`story`,`storyVersion`,`task`,`toTask`,`toStory`,`title`,`keywords`,`severity`,`pri`,`type`,`os`,`browser`,`hardware`,`found`,`steps`,`status`,`color`,`confirmed`,`activatedCount`,`mailto`,`openedBy`,`openedDate`,`openedBuild`,`assignedTo`,`assignedDate`,`deadline`,`resolvedBy`,`resolution`,`resolvedBuild`,`resolvedDate`,`closedBy`,`closedDate`,`duplicateBug`,`linkBug`,`case`,`caseVersion`,`result`,`testtask`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('10','3','0','0','0','0','0','1','0','0','0','粉红粉红','','3','0','codeerror','','','','','<p>[步骤]</p>
<br /><p>[结果]</p>
<br /><p>[期望]</p>','active','','0','0','','admin','2017-09-15 18:02:00','trunk','tianliwei','2017-09-15 18:02:00','0000-00-00','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0','','0','0','0','0','','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_build`;
CREATE TABLE `zt_build` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(150) NOT NULL,
  `scmPath` char(255) NOT NULL,
  `filePath` char(255) NOT NULL,
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `builder` char(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `build` (`product`,`project`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_build`(`id`,`product`,`branch`,`project`,`name`,`scmPath`,`filePath`,`date`,`stories`,`bugs`,`builder`,`desc`,`deleted`) VALUES ('1','1','0','1','第一期版本','','','2012-06-05','3,2,1,4','','projectManager','','0');
INSERT INTO `zt_build`(`id`,`product`,`branch`,`project`,`name`,`scmPath`,`filePath`,`date`,`stories`,`bugs`,`builder`,`desc`,`deleted`) VALUES ('2','3','0','9','1.5.2','','','2017-09-19','','','qiuqingqiang','','0');
DROP TABLE IF EXISTS `zt_burn`;
CREATE TABLE `zt_burn` (
  `project` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `estimate` float NOT NULL,
  `left` float NOT NULL,
  `consumed` float NOT NULL,
  PRIMARY KEY (`project`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('1','2012-06-05','0','0','38');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-07','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-08','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-09','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-10','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-11','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-11','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-12','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-12','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-13','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-13','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-14','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-14','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-15','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-15','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('5','2017-09-15','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2017-09-15','0','8','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-16','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-16','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('5','2017-09-16','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2017-09-16','0','8','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-17','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-17','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('5','2017-09-17','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('6','2017-09-17','0','8','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-18','0','4','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-18','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('5','2017-09-18','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('7','2017-09-18','20','20','24');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('3','2017-09-19','0','4','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('4','2017-09-19','0','0','10');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('5','2017-09-19','0','0','0');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('7','2017-09-19','0','5','16');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('8','2017-09-19','24','0','42');
INSERT INTO `zt_burn`(`project`,`date`,`estimate`,`left`,`consumed`) VALUES ('9','2017-09-19','0','0','0');
DROP TABLE IF EXISTS `zt_case`;
CREATE TABLE `zt_case` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lib` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(30) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `precondition` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `type` char(30) NOT NULL DEFAULT '1',
  `stage` varchar(255) NOT NULL,
  `howRun` varchar(30) NOT NULL,
  `scriptedBy` varchar(30) NOT NULL,
  `scriptedDate` date NOT NULL,
  `scriptStatus` varchar(30) NOT NULL,
  `scriptLocation` varchar(255) NOT NULL,
  `status` char(30) NOT NULL DEFAULT '1',
  `color` char(7) NOT NULL,
  `frequency` enum('1','2','3') NOT NULL DEFAULT '1',
  `order` tinyint(30) unsigned NOT NULL DEFAULT '0',
  `openedBy` char(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` date NOT NULL,
  `lastEditedBy` char(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `linkCase` varchar(255) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL,
  `fromCaseID` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `case` (`product`,`module`,`story`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('1','1','0','0','0','0','4','1','售后服务的测试用例','','','1','feature','feature','','','0000-00-00','','','normal','','1','0','tester3','2012-06-05 11:02:18','','0000-00-00','tester3','2012-06-05 11:02:46','1','','0','0','0','testManager','2012-06-05 11:11:00','pass');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('2','1','0','0','0','0','1','1','首页的测试用例','','','3','feature','','','','0000-00-00','','','normal','','1','0','tester1','2012-06-05 11:03:28','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','testManager','2012-06-05 11:11:05','pass');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('3','1','0','0','0','0','2','1','新闻中心的测试用例','','','3','feature','feature','','','0000-00-00','','','normal','','1','0','tester1','2012-06-05 11:03:54','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','testManager','2012-06-05 11:11:07','pass');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('4','1','0','0','0','0','3','2','成果展示测试用例','','','3','feature','feature','','','0000-00-00','','','normal','','1','0','tester2','2012-06-05 11:04:48','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','tianliwei','2017-09-19 15:45:57','blocked');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('5','3','0','0','15','0','8','1','单元测试用例一','1.前置条件1
2.前置条件2','','3','feature',',unittest','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:08:48','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('6','3','0','0','0','0','0','1','单元测试用例2','1.前置条件1
2.前置条件2','','3','feature',',unittest','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:11:06','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('7','3','0','0','0','0','0','1','单元测试用例2','1.前置条件1
2.前置条件2','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:13:18','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('8','3','0','0','0','0','0','1','查看启动页','','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:29:29','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('9','3','0','0','0','0','0','1','APP强制更新','1.app有版本更新','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:29:29','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('10','3','0','0','0','0','0','1','退出程序再次打开','','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:29:29','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('11','3','0','0','0','0','0','1','APP可选更新','1.app有版本更新','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:29:29','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('12','3','0','0','0','0','0','1','APP不进行更新','1.app没有版本更新','','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-07 17:29:29','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','1','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('13','3','0','0','25','0','0','1','查看启动页','','启动页','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('14','3','0','0','25','0','0','1','用非注册用户进行登录','1.用非注册用户进行登录','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('15','3','0','0','25','0','0','1','已有订阅单的用户登录,订阅单有项目更新','1.存在注册用户和未审核状态的用户','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('16','3','0','0','25','0','0','1','已有订阅单的用户登录,,订阅单没有项目更新','1.存在注册用户和未审核状态的用户','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('17','3','0','0','25','0','0','1','没有订阅单的正常用户登录','1.存在注册用户和未审核状态的用户','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('18','3','0','0','25','0','0','1','APP强制更新','1.app有版本更新','app更新','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('19','3','0','0','25','0','0','1','异常注册用户','1.点击【我要注册】','注册','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('20','3','0','0','25','0','0','1','正常情况注册用户','1.点击【我要注册】','注册','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('21','3','0','0','25','0','0','1','异常操作忘记密码','1.点击【忘记密码？】','忘记密码','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('22','3','0','0','25','0','0','1','忘记密码功能验证','1.点击【忘记密码？】','忘记密码','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('23','3','0','0','25','0','0','1','退出程序再次打开','','系统可靠性','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('24','3','0','0','25','0','0','1','APP可选更新','1.app有版本更新','app更新','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('25','3','0','0','25','0','0','1','APP不进行更新','1.app没有版本更新','app更新','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','','0000-00-00 00:00:00','');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('26','3','0','0','25','0','0','1','禁用状态用户进行登录','','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','tianliwei','2017-09-19 15:45:50','fail');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('27','3','0','0','25','0','0','1','删除状态用户进行登录','','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','tianliwei','2017-09-19 15:45:48','pass');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('28','3','0','0','25','0','0','1','新版本用户更新第一次登录','1.新版本更新','登录','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','tianliwei','2017-09-19 15:45:46','pass');
INSERT INTO `zt_case`(`id`,`product`,`branch`,`lib`,`module`,`path`,`story`,`storyVersion`,`title`,`precondition`,`keywords`,`pri`,`type`,`stage`,`howRun`,`scriptedBy`,`scriptedDate`,`scriptStatus`,`scriptLocation`,`status`,`color`,`frequency`,`order`,`openedBy`,`openedDate`,`reviewedBy`,`reviewedDate`,`lastEditedBy`,`lastEditedDate`,`version`,`linkCase`,`fromBug`,`fromCaseID`,`deleted`,`lastRunner`,`lastRunDate`,`lastRunResult`) VALUES ('29','3','0','0','25','0','0','1','验证码60秒发送一次','','系统可靠性','3','feature','','','','0000-00-00','','','normal','','1','0','tianliwei','2017-09-08 09:31:39','','0000-00-00','','0000-00-00 00:00:00','1','','0','0','0','tianliwei','2017-09-19 15:45:45','pass');
DROP TABLE IF EXISTS `zt_casestep`;
CREATE TABLE `zt_casestep` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(3) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'step',
  `desc` text NOT NULL,
  `expect` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `case` (`case`,`version`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('1','0','1','1','step','进入首页','正常显示');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('2','0','2','1','step','进入首页','正常显示');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('3','0','3','1','step','进入新闻中心','正常显示');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('4','0','4','1','step','进入成果展示','正常显示');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('5','0','5','1','step','测试步骤1','预期1');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('6','0','5','1','step','测试步骤2','预期2');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('7','0','5','1','step','测试步骤3','预期3');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('8','0','6','1','step','测试步骤1','预期1');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('9','0','6','1','step','测试步骤2','预期2');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('10','0','6','1','step','测试步骤3','预期3');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('11','0','7','1','step','测试步骤1','预期1');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('12','0','7','1','step','测试步骤2','预期2');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('13','0','7','1','step','测试步骤3','预期3');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('14','0','8','1','step','打开APP，加载启动页;','展现&quot;订阅宣传图&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('15','0','8','1','step','点击跳过','在5秒内可以点击跳过;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('16','0','9','1','step','成功登录','登录成功后,会有提示app更新【文案】并下载安装，无法点击其他地方，必须下载安装使用新版');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('17','0','10','1','step','登录程序过后,不退出账号关闭程序,下次打开程序','默认上次登录账号进入程序,无法再次输入登录信息');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('18','0','11','1','step','成功登录;','登录成功后,会有提示app更新【文案】并下载安装，可以点击稍后设置或者其他区域不进行更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('19','0','11','1','step','手动下载','关于有财,进行手动下载更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('20','0','12','1','step','成功登录','登录成功后,没有提示app更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('21','0','13','1','step','打开APP，加载启动页;','展现&quot;订阅宣传图&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('22','0','13','1','step','点击跳过','在5秒内可以点击跳过;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('23','0','14','1','step','手机号输入带有英文手机号;','无法输入英文字符;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('24','0','14','1','step','手机号输入不够和超过11位手机号;','弱提示&quot;手机不是11位&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('25','0','14','1','step','手机号输入未注册手机号;','强提示框&quot;你输入的手机号或密码有误，请确认后重新填写&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('26','0','14','1','step','不输入手机号;','强提示框&quot;请输入手机号&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('27','0','14','1','step','输入错误的密码;','强提示框&quot;你输入的手机号或密码有误，请确认后重新填写&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('28','0','15','1','step','输入正确的手机号和密码，点击【登录】','登录成功，页面转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('29','0','15','1','step','查看页面展示','展示订阅单里面的项目更新数据，右上角都显示最新,安装未查看和已查看排序；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('30','0','16','1','step','输入正确的手机号和密码，点击【登录】','登录成功，页面转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('31','0','16','1','step','查看页面展示','显示文案[暂无最新订阅信息]；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('32','0','17','1','step','输入正确的手机号和密码，点击【登录】','登录成功，页面转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('33','0','17','1','step','查看页面展示','显示文案[您还没有订阅任何内容噢，快去订阅吧！]和【立即订阅】按钮');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('34','0','18','1','step','成功登录','登录成功后,会有提示app更新【文案】并下载安装，无法点击其他地方，必须下载安装使用新版');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('35','0','19','1','step','手机号输入带有英文手机号;','无法输入英文字符;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('36','0','19','1','step','手机号输入不够和超过11位手机号;','弱提示&quot;手机不是11位&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('37','0','19','1','step','不输入手机号，点击【获取手机验证码】;','弱提示框&quot;请输入手机号&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('38','0','19','1','step','输入正确的手机号，获取验证码后，输入错误验证码;','弱提示“短信验证码错误”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('39','0','19','1','step','输入正确的手机号，获取验证码后，修改手机号，再输入正确验证码;','弱提示“请填写正确的电话号码”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('40','0','19','1','step','输入错误的手机号、验证码','弱提示“请填写正确的电话号码”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('41','0','19','1','step','输入已注册过的手机号、正确的验证码和密码；','弱提示“该电话号码已注册”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('42','0','19','1','step','未输入手机，点击【获取手机验证码】；','弱提示&quot;手机不是11位&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('43','0','19','1','step','设置注册密码，两次不一致；','弱提示&quot;输入密码两次不一样，请重新确认输入&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('44','0','19','1','step','完善信息，有*备注未填写，点击【完成注册】','弱提示&quot;*号为必填项，请确认填写完毕&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('45','0','19','1','step','同一个手机两个手机号注册;','弱提示不要在同一个手机注册多个账号;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('46','0','20','1','step','输入正确的手机号和验证码，点击注册用户协议,点击【下一步】','显示注册协议信息,转向到设置密码页；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('47','0','20','1','step','输入相同的两个密码，点击【下一步】','密码要求大于6位,转向到完善信息页；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('48','0','20','1','step','上传或者选择头像','可以上传和选择头像，也可以不设置；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('49','0','20','1','step','必须输入姓名、公司全称、行业、城市；','必选项必须填写，未填写无法完成注册');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('50','0','20','1','step','可选选择性别、QQ、邮箱','可选项可以选择性填写；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('51','0','20','1','step','显示手机号，不可修改；','手机号为回显方式，无法修改；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('52','0','20','1','step','点击【完成注册】；','所有信息正确，完成注册转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('53','0','21','1','step','手机号输入带有英文手机号;','无法输入英文字符;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('54','0','21','1','step','手机号输入不够和超过11位手机号;','弱提示&quot;手机不是11位&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('55','0','21','1','step','不输入手机号，点击【获取手机验证码】;','弱提示框&quot;请输入手机号&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('56','0','21','1','step','输入正确的手机号，获取验证码后，输入错误验证码;','弱提示“短信验证码错误”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('57','0','21','1','step','输入正确的手机号，获取验证码后，修改手机号，再输入正确验证码;','弱提示“请填写正确的电话号码”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('58','0','21','1','step','输入错误的手机号、验证码','弱提示“请填写正确的电话号码”');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('59','0','21','1','step','未输入手机，点击【获取手机验证码】；','弱提示&quot;手机不是11位&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('60','0','21','1','step','设置注册密码，两次不一致；','弱提示&quot;输入密码两次不一样，请重新确认输入&quot;;');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('61','0','22','1','step','输入正确的手机号和验证码，点击【下一步】','转向到重置密码页；');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('62','0','22','1','step','输入相同的两个密码，点击【下一步】','转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('63','0','23','1','step','登录程序过后,不退出账号关闭程序,下次打开程序','默认上次登录账号进入程序,无法再次输入登录信息');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('64','0','24','1','step','成功登录;','登录成功后,会有提示app更新【文案】并下载安装，可以点击稍后设置或者其他区域不进行更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('65','0','24','1','step','手动下载','关于有财,进行手动下载更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('66','0','25','1','step','成功登录','登录成功后,没有提示app更新');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('67','0','26','1','step','输入正确的手机号和密码，点击【登录】','弱提示文案[账号已被禁用]，登录失败');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('68','0','27','1','step','输入正确的手机号和密码，点击【登录】','弱提示文案[账号已删除]，登录失败');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('69','0','28','1','step','输入正确的手机号和密码，点击【登录】','登录成功，页面转向到【信息】页');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('70','0','28','1','step','查看页面展示','出现一个新功能的简易使用操作说明');
INSERT INTO `zt_casestep`(`id`,`parent`,`case`,`version`,`type`,`desc`,`expect`) VALUES ('71','0','29','1','step','点击一次发送验证码','验证码发送,倒计时60秒后才能继续发送');
DROP TABLE IF EXISTS `zt_company`;
CREATE TABLE `zt_company` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(120) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `fax` char(20) DEFAULT NULL,
  `address` char(120) DEFAULT NULL,
  `zipcode` char(10) DEFAULT NULL,
  `website` char(120) DEFAULT NULL,
  `backyard` char(120) DEFAULT NULL,
  `guest` enum('1','0') NOT NULL DEFAULT '0',
  `admins` char(255) DEFAULT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `zt_company`(`id`,`name`,`phone`,`fax`,`address`,`zipcode`,`website`,`backyard`,`guest`,`admins`,`deleted`) VALUES ('1','成都易电云商科技有限公司','','','','','','','0',',admin,','0');
DROP TABLE IF EXISTS `zt_config`;
CREATE TABLE `zt_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=713 DEFAULT CHARSET=utf8;
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('1','system','common','global','showDemoUsers','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('2','system','common','global','version','9.5');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('3','system','common','global','flow','full');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('35','system','common','safe','mode','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('37','system','common','safe','changeWeak','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('449','system','common','global','cron','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('7','admin','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('8','admin','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('9','system','cron','run','status','running');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('10','admin','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('11','admin','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('12','admin','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('13','admin','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('14','admin','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('15','admin','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('19','chenyang','common','global','novice','');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('20','chenyang','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('21','system','common','global','sn','8c037dbad0a23a26c724602b7e2140a9');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('22','chenyang','product','','homepage','browse');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('23','chenyang','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('24','chenyang','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('25','chenyang','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('26','chenyang','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('27','lanmaoyun','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('28','lanmaoyun','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('29','lanmaoyun','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('30','lanmaoyun','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('31','lanmaoyun','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('32','lanmaoyun','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('33','admin','datatable','productBrowse','mode','datatable');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('34','system','backup','','holdDays','360');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('36','system','common','safe','weak','123456,password,12345,12345678,qwerty,123456789,1234,1234567,abc123,111111,123123');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('38','system','common','safe','modifyPasswordFirstLogin','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('39','lidongdong','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('40','lidongdong','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('44','lidongdong','common','global','novice','');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('45','lidongdong','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('46','lidongdong','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('47','lidongdong','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('642','shenguilin','common','global','novice','');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('49','shenguilin','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('50','shenguilin','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('51','xumaohuai','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('52','xumaohuai','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('53','xumaohuai','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('54','xumaohuai','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('55','xumaohuai','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('56','xumaohuai','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('57','tianliwei','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('58','tianliwei','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('59','tianliwei','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('60','tianliwei','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('61','tianliwei','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('62','tianliwei','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('63','tianliwei','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('64','qiuqingqiang','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('65','qiuqingqiang','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('66','qiuqingqiang','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('67','qiuqingqiang','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('68','tianliwei','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('69','shenguilin','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('70','shenguilin','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('698','system','mail','','domain','https://pms.365edian.com');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('696','system','mail','','fromAddress','pms@chinanuoyi.cn');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('695','system','mail','','async','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('694','system','mail','','mta','smtp');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('693','system','mail','','turnon','0');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('692','system','mail','smtp','charset','utf-8');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('691','system','mail','smtp','debug','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('690','system','mail','smtp','secure','ssl');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('689','system','mail','smtp','password','zt@36O1d!an#17');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('688','system','mail','smtp','username','pms@chinanuoyi.cn');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('687','system','mail','smtp','auth','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('686','system','mail','smtp','port','465');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('408','system','common','global','ztPrivateKey','fZ2Bp64GhakHCt0q');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('407','system','common','global','community','chen_zentao');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('697','system','mail','','fromName','pms@chinanuoyi.cn');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('685','system','mail','smtp','host','smtp.global-mail.cn');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('437','zhating','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('445','zhating','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('440','qiuqingqiang','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('441','qiuqingqiang','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('442','qiuqingqiang','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('443','qiuqingqiang','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('446','zhating','project','','homepage','browse');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('447','zhating','qa','','homepage','browse');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('534','shenguilin','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('535','shenguilin','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('536','shenguilin','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('635','tianliwei','datatable','testcaseBrowse','showModule','base');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('636','lidongdong','qa','','homepage','browse');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('637','xiaojian','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('639','xiaojian','common','global','novice','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('643','shenguilin','datatable','productBrowse','mode','datatable');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('644','tangfei','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('645','tangfei','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('683','tangfei','project','','homepage','browse');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('647','tangfei','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('648','tangfei','product','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('649','tangfei','product','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('650','tangfei','qa','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('651','tangfei','qa','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('652','fuwenjing','my','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('653','fuwenjing','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('654','zhangtingting','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('655','zhangtingting','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('656','zhangtingting','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('657','zhangtingting','common','customMenu','full_main','[{\"name\":\"my\",\"order\":0},{\"name\":\"product\",\"order\":1},{\"name\":\"project\",\"order\":2,\"hidden\":true},{\"name\":\"qa\",\"order\":3},{\"name\":\"doc\",\"order\":4},{\"name\":\"report\",\"order\":5}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('658','zhangtingting','common','customMenu','full_project','[{\"name\":\"index\",\"order\":0,\"float\":\"right\"},{\"name\":\"task\",\"order\":1},{\"name\":\"story\",\"order\":2},{\"name\":\"bug\",\"order\":3},{\"name\":\"build\",\"order\":4,\"hidden\":true},{\"name\":\"testtask\",\"order\":5,\"hidden\":true},{\"name\":\"team\",\"order\":6},{\"name\":\"dynamic\",\"order\":7,\"hidden\":true},{\"name\":\"doc\",\"order\":8},{\"name\":\"product\",\"order\":9,\"hidden\":true},{\"name\":\"view\",\"order\":10},{\"name\":\"create\",\"order\":11,\"float\":\"right\"},{\"name\":\"all\",\"order\":12,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('659','zhangtingting','common','customMenu','full_report','[{\"name\":\"product\",\"order\":1},{\"name\":\"prj\",\"order\":2},{\"name\":\"test\",\"order\":3},{\"name\":\"staff\",\"order\":4}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('660','zhangtingting','common','customMenu','full_qa','[{\"name\":\"product\",\"order\":-1},{\"name\":\"index\",\"order\":2,\"float\":\"right\"},{\"name\":\"bug\",\"order\":3},{\"name\":\"testsuite\",\"order\":6}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('661','zhangtingting','common','customMenu','full_doc','[{\"name\":\"list\",\"order\":-1},{\"name\":\"crumb\",\"order\":0}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('662','fanzhi','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('663','fanzhi','project','','homepage','index');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('664','fanzhi','project','common','blockInited','1');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('705','tangfei','common','customMenu','full_main','[{\"name\":\"my\",\"order\":0},{\"name\":\"product\",\"order\":1},{\"name\":\"project\",\"order\":2},{\"name\":\"qa\",\"order\":3},{\"name\":\"doc\",\"order\":4},{\"name\":\"report\",\"order\":5}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('677','tangfei','common','customMenu','full_my','[{\"name\":\"account\",\"order\":-1},{\"name\":\"index\",\"order\":0},{\"name\":\"todo\",\"order\":1},{\"name\":\"task\",\"order\":2},{\"name\":\"dynamic\",\"order\":3},{\"name\":\"profile\",\"order\":4,\"hidden\":true},{\"name\":\"changePassword\",\"order\":5,\"hidden\":true}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('707','tangfei','common','customMenu','full_project','[{\"name\":\"list\",\"order\":-1},{\"name\":\"index\",\"order\":0,\"float\":\"right\"},{\"name\":\"task\",\"order\":1},{\"name\":\"story\",\"order\":2,\"hidden\":true},{\"name\":\"bug\",\"order\":3,\"hidden\":true},{\"name\":\"build\",\"order\":4,\"hidden\":true},{\"name\":\"testtask\",\"order\":5,\"hidden\":true},{\"name\":\"team\",\"order\":6},{\"name\":\"dynamic\",\"order\":7},{\"name\":\"doc\",\"order\":8},{\"name\":\"product\",\"order\":9},{\"name\":\"view\",\"order\":10},{\"name\":\"create\",\"order\":11,\"float\":\"right\"},{\"name\":\"all\",\"order\":12,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('670','tangfei','common','customMenu','full_feature_project_task','[{\"name\":\"unclosed\",\"order\":1},{\"name\":\"all\",\"order\":2},{\"name\":\"assignedtome\",\"order\":3},{\"name\":\"delayed\",\"order\":4},{\"name\":\"needconfirm\",\"order\":5},{\"name\":\"status\",\"order\":6}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('708','tangfei','common','customMenu','full_product','[{\"name\":\"index\",\"order\":0,\"float\":\"right\"},{\"name\":\"story\",\"order\":1},{\"name\":\"plan\",\"order\":2},{\"name\":\"release\",\"order\":3,\"hidden\":true},{\"name\":\"doc\",\"order\":4},{\"name\":\"view\",\"order\":5},{\"name\":\"all\",\"order\":6,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('709','tangfei','common','customMenu','full_doc','[{\"name\":\"list\",\"order\":-1},{\"name\":\"crumb\",\"order\":0},{\"name\":\"create\",\"order\":3,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('706','tangfei','common','customMenu','full_release','[{\"name\":\"list\",\"order\":-1},{\"name\":\"index\",\"order\":2,\"float\":\"right\"},{\"name\":\"story\",\"order\":3},{\"name\":\"plan\",\"order\":5},{\"name\":\"release\",\"order\":6},{\"name\":\"doc\",\"order\":8},{\"name\":\"view\",\"order\":12},{\"name\":\"all\",\"order\":14,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('676','tangfei','common','customMenu','full_productplan','[{\"name\":\"list\",\"order\":-1},{\"name\":\"index\",\"order\":2,\"float\":\"right\"},{\"name\":\"story\",\"order\":3},{\"name\":\"plan\",\"order\":5},{\"name\":\"release\",\"order\":6},{\"name\":\"doc\",\"order\":8},{\"name\":\"view\",\"order\":12},{\"name\":\"all\",\"order\":14,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('678','tangfei','common','customMenu','full_feature_productplan_brows','[{\"name\":\"all\",\"order\":1},{\"name\":\"unexpired\",\"order\":2},{\"name\":\"overdue\",\"order\":3}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('680','tangfei','common','customMenu','full_build','[{\"name\":\"list\",\"order\":-1},{\"name\":\"index\",\"order\":0,\"float\":\"right\"},{\"name\":\"task\",\"order\":1},{\"name\":\"story\",\"order\":2,\"hidden\":true},{\"name\":\"bug\",\"order\":3,\"hidden\":true},{\"name\":\"build\",\"order\":4},{\"name\":\"testtask\",\"order\":5,\"hidden\":true},{\"name\":\"team\",\"order\":6},{\"name\":\"dynamic\",\"order\":7},{\"name\":\"doc\",\"order\":8},{\"name\":\"product\",\"order\":9},{\"name\":\"view\",\"order\":10},{\"name\":\"create\",\"order\":11,\"float\":\"right\"},{\"name\":\"all\",\"order\":12,\"float\":\"right\"}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('682','tangfei','datatable','projectTask','showModule','base');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('684','jiangdandan','common','global','novice','false');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('700','tangfei','common','customMenu','full_testsuite','[{\"name\":\"product\",\"order\":-1},{\"name\":\"index\",\"order\":2,\"float\":\"right\"},{\"name\":\"bug\",\"order\":3},{\"name\":\"testsuite\",\"order\":6}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('711','tangfei','common','customMenu','full_qa','[{\"name\":\"product\",\"order\":-1},{\"name\":\"index\",\"order\":0,\"float\":\"right\"},{\"name\":\"bug\",\"order\":1},{\"name\":\"testsuite\",\"order\":2,\"hidden\":true}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('710','tangfei','common','customMenu','full_report','[{\"name\":\"product\",\"order\":1},{\"name\":\"prj\",\"order\":2},{\"name\":\"test\",\"order\":3},{\"name\":\"staff\",\"order\":4}]');
INSERT INTO `zt_config`(`id`,`owner`,`module`,`section`,`key`,`value`) VALUES ('712','tangfei','story','custom','createFields','source,verify,pri,mailto');
DROP TABLE IF EXISTS `zt_cron`;
CREATE TABLE `zt_cron` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m` varchar(20) NOT NULL,
  `h` varchar(20) NOT NULL,
  `dom` varchar(20) NOT NULL,
  `mon` varchar(20) NOT NULL,
  `dow` varchar(20) NOT NULL,
  `command` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `buildin` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `lastTime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lastTime` (`lastTime`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('1','*','*','*','*','*','','监控定时任务','zentao','1','normal','2017-09-20 00:30:53');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('2','30','23','*','*','*','moduleName=project&methodName=computeburn','更新燃尽图','zentao','1','normal','2017-09-19 23:30:53');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('3','0','8','*','*','*','moduleName=report&methodName=remind','每日任务提醒','zentao','1','normal','2017-09-19 08:00:46');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('4','*/5','*','*','*','*','moduleName=svn&methodName=run','同步SVN','zentao','1','stop','0000-00-00 00:00:00');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('5','*/5','*','*','*','*','moduleName=git&methodName=run','同步GIT','zentao','1','stop','0000-00-00 00:00:00');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('6','30','0','*','*','*','moduleName=backup&methodName=backup','备份数据和附件','zentao','1','running','2017-09-20 00:30:53');
INSERT INTO `zt_cron`(`id`,`m`,`h`,`dom`,`mon`,`dow`,`command`,`remark`,`type`,`buildin`,`status`,`lastTime`) VALUES ('7','*/5','*','*','*','*','moduleName=mail&methodName=asyncSend','异步发信','zentao','1','normal','2017-09-20 00:25:53');
DROP TABLE IF EXISTS `zt_dept`;
CREATE TABLE `zt_dept` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(60) NOT NULL,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `position` char(30) NOT NULL DEFAULT '',
  `function` char(255) NOT NULL DEFAULT '',
  `manager` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `dept` (`parent`,`path`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('24','运营部','0',',24,','1','130','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('25','市场部','0',',25,','1','140','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('16','项目管理','0',',16,','1','80','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('17','产品部','0',',17,','1','90','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('18','开发部','0',',18,','1','100','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('19','测试部','0',',19,','1','110','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('20','前端','0',',20,','1','120','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('21','后台','18',',18,21,','2','10','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('22','易电助手','18',',18,22,','2','20','','','');
INSERT INTO `zt_dept`(`id`,`name`,`parent`,`path`,`grade`,`order`,`position`,`function`,`manager`) VALUES ('23','易电有财','18',',18,23,','2','30','','','');
DROP TABLE IF EXISTS `zt_doc`;
CREATE TABLE `zt_doc` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `lib` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `views` smallint(5) unsigned NOT NULL,
  `addedBy` varchar(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedBy` varchar(30) NOT NULL,
  `editedDate` datetime NOT NULL,
  `acl` varchar(10) NOT NULL DEFAULT 'open',
  `groups` varchar(255) NOT NULL,
  `users` text NOT NULL,
  `version` smallint(5) unsigned NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `doc` (`product`,`project`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_doc`(`id`,`product`,`project`,`lib`,`module`,`title`,`keywords`,`type`,`views`,`addedBy`,`addedDate`,`editedBy`,`editedDate`,`acl`,`groups`,`users`,`version`,`deleted`) VALUES ('1','0','4','7','0','test','','text','0','shenguilin','2017-09-12 14:54:54','shenguilin','2017-09-12 14:56:24','private','','shenguilin','3','0');
INSERT INTO `zt_doc`(`id`,`product`,`project`,`lib`,`module`,`title`,`keywords`,`type`,`views`,`addedBy`,`addedDate`,`editedBy`,`editedDate`,`acl`,`groups`,`users`,`version`,`deleted`) VALUES ('2','0','8','13','0','阿达','','text','0','tangfei','2017-09-19 10:52:53','','0000-00-00 00:00:00','open','','','1','0');
DROP TABLE IF EXISTS `zt_doccontent`;
CREATE TABLE `zt_doccontent` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `doc` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doc_version` (`doc`,`version`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_doccontent`(`id`,`doc`,`title`,`digest`,`content`,`files`,`type`,`version`) VALUES ('1','1','test','','','1','html','1');
INSERT INTO `zt_doccontent`(`id`,`doc`,`title`,`digest`,`content`,`files`,`type`,`version`) VALUES ('2','1','test','','','1,2','html','2');
INSERT INTO `zt_doccontent`(`id`,`doc`,`title`,`digest`,`content`,`files`,`type`,`version`) VALUES ('3','1','test','','<p>safsfsf</p>','1,2','html','3');
INSERT INTO `zt_doccontent`(`id`,`doc`,`title`,`digest`,`content`,`files`,`type`,`version`) VALUES ('4','2','阿达','','','3','html','1');
DROP TABLE IF EXISTS `zt_doclib`;
CREATE TABLE `zt_doclib` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `acl` varchar(10) NOT NULL DEFAULT 'open',
  `groups` varchar(255) NOT NULL,
  `users` text NOT NULL,
  `main` enum('0','1') NOT NULL DEFAULT '0',
  `order` tinyint(5) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('1','1','0','产品库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('2','2','0','产品库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('3','0','1','项目库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('4','0','2','项目库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('5','3','0','产品主库','open','','','1','0','0');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('6','0','3','项目主库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('7','0','4','项目主库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('8','0','0','test','open','','','0','0','0');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('9','0','5','项目主库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('10','0','6','项目主库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('11','0','7','项目主库','open','','','1','0','1');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('12','0','8','项目主库','private','','','1','0','0');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('13','0','8','文档库','open','','','0','0','0');
INSERT INTO `zt_doclib`(`id`,`product`,`project`,`name`,`acl`,`groups`,`users`,`main`,`order`,`deleted`) VALUES ('14','0','9','项目主库','private','','','1','0','0');
DROP TABLE IF EXISTS `zt_effort`;
CREATE TABLE `zt_effort` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` char(30) NOT NULL DEFAULT '',
  `todo` enum('1','0') NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `begin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('1','2','3') NOT NULL DEFAULT '1',
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `status` enum('1','2','3') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_extension`;
CREATE TABLE `zt_extension` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `zentaoCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` mediumtext NOT NULL,
  `files` mediumtext NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `extension` (`name`,`installedTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_file`;
CREATE TABLE `zt_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(50) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `objectType` char(30) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `file` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('1','201709/1214545401152aef.txt','ccpcNo.log','txt','321','doc','1','shenguilin','2017-09-12 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('2','201709/1214551004332f2a.txt','ccpcNo.log','txt','321','doc','1','shenguilin','2017-09-12 00:00:00','0','','0');
INSERT INTO `zt_file`(`id`,`pathname`,`title`,`extension`,`size`,`objectType`,`objectID`,`addedBy`,`addedDate`,`downloads`,`extra`,`deleted`) VALUES ('3','201709/19105253089369d3.xlsx','EDKT','xlsx','8193','doc','2','tangfei','2017-09-19 00:00:00','0','','0');
DROP TABLE IF EXISTS `zt_group`;
CREATE TABLE `zt_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `role` char(30) NOT NULL DEFAULT '',
  `desc` char(255) NOT NULL DEFAULT '',
  `acl` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('1','管理员','admin','系统管理员','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('2','研发','dev','研发人员','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('3','测试','qa','测试人员','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('4','项目经理','pm','项目经理','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('5','产品经理','po','产品经理','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('6','研发主管','td','研发主管','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('7','产品主管','pd','产品主管','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('8','测试主管','qd','测试主管','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('9','高层管理','top','高层管理','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('10','其他','','其他','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('11','guest','guest','For guest','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('18','市场主管','','市场','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('15','市场','','市场','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('16','运营','','运营','');
INSERT INTO `zt_group`(`id`,`name`,`role`,`desc`,`acl`) VALUES ('17','运营主管','','运营','');
DROP TABLE IF EXISTS `zt_grouppriv`;
CREATE TABLE `zt_grouppriv` (
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` char(30) NOT NULL DEFAULT '',
  `method` char(30) NOT NULL DEFAULT '',
  UNIQUE KEY `group` (`group`,`module`,`method`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','checkDB');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','checkWeak');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','admin','safe');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','debug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','api','sql');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','backup');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','backup','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','manage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','branch','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','checkRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertBugFree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','convertRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','execute');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','selectSource');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setBugfree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setConfig');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','convert','setRedmine');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','toggle');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','cron','turnon');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','flow');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','restore');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','set');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','custom','working');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dept','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dev','api');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','dev','db');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','extend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','newPage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','editor','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','deactivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','erase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','install');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','uninstall');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upgrade');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','extension','upload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','copy');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','manageMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','managePriv');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','group','manageView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','batchDelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','detect');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','resend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','reset');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','save');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','mail','test');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','changeStatus');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeBranch');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchCaseTypeChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchConfirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchDelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','importFromLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','linkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testreport','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','batchCreateCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','batchUnlinkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','createCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','library');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','libView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','linkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','block');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','unlock');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('1','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('2','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchCaseTypeChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchConfirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','linkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testreport','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testreport','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','linkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','block');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('3','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('4','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','branch','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','branch','manage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','branch','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','changeStatus');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangeBranch');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','importFromLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','batchCreateCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','createCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','library');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','libView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('5','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('6','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','branch','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','branch','manage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','branch','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','order');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','batchUnlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','changeStatus');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangeBranch');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangePlan');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchChangeStage');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','change');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','importFromLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','batchCreateCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','createCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','library');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','libView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('7','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchActivate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchConfirm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','batchResolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','confirmBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','deleteTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','resolve');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','saveTemplate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchCaseTypeChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchConfirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchDelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','batchReview');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','confirmChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','createBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','importFromLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','linkCases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testreport','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testreport','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testreport','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testreport','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testreport','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','batchCreateCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','createCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','exportTemplet');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','import');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','library');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','libView');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','linkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','showImport');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','unlinkCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','batchAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','batchRun');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','block');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','linkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','runcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','unlinkcase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','browseTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','fix');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('8','tree','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','editComment');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','hideAll');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','hideOne');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','trash');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','action','undelete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','admin','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','manageChild');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','dept','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','obtain');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','extension','structure');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','file','uploadImages');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','search','select');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','review');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','story','zeroCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','apiSync');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','deleteContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','manageContacts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','unlock');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('9','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('10','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','company','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','git','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','group','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','cat');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','svn','diff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testcase','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','groupCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','results');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','testtask','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','project');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testCase');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','testTask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('11','user','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('15','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('16','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','fixFirst');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('17','todo','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','api','getModel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','linkBugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','unlinkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','bug','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','linkBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','build','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','allLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','createLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','deleteLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','editLib');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','objectLibs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','showFiles');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','sort');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','doc','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','file','download');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','index','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','misc','ping');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','changePassword');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','editProfile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','profile');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','todo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','my','unbind');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','roadmap');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','product','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','productplan','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','productplan','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','all');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','batchedit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','batchUnlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','bug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','build');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','burn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','burnData');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','computeBurn');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','doc');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','dynamic');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','fixFirst');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','grouptask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','importBug');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','importtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','kanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','linkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','manageMembers');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','manageProducts');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','printKanban');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','putoff');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','story');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','suspend');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','task');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','team');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','testtask');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','tree');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','unlinkMember');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','unlinkStory');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','updateOrder');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','project','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','qa','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','release','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','release','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','bugAssign');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','bugCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','productSummary');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','projectDeviation');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','report','workload');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','search','buildForm');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','search','buildQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','search','deleteQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','search','saveQuery');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','bugs');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','cases');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','tasks');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','story','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','activate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','assignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchAssignTo');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchCancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchChangeModule');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchClose');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','cancel');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','close');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','confirmStoryChange');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','deleteEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','editEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','pause');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','recordEstimate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','report');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','restart');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','start');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','task','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','testsuite','browse');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','testsuite','index');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','testsuite','view');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','batchCreate');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','batchEdit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','batchFinish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','create');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','delete');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','edit');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','export');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','finish');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','import2Today');
INSERT INTO `zt_grouppriv`(`group`,`module`,`method`) VALUES ('18','todo','view');
DROP TABLE IF EXISTS `zt_history`;
CREATE TABLE `zt_history` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field` varchar(30) NOT NULL DEFAULT '',
  `old` text NOT NULL,
  `new` text NOT NULL,
  `diff` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `action` (`action`)
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('1','14','version','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('2','14','spec','&nbsp;作为一名本公司的用户，我希望可以在成果展示看到该公司网站的企业新闻，这样可以方便我进行了解该公司的产品并进行购买。&nbsp;<br />','&nbsp;作为一名本公司的用户，我希望可以在成果展示看到该公司网站的吹产品，这样可以方便我进行了解该公司的产品并进行购买。&nbsp;<br />','001- <del>作为一名本公司的用户，我希望可以在成果展示看到该公司网站的企业新闻，这样可以方便我进行了解该公司的产品并进行购买。<br /></del>
001+ <ins>作为一名本公司的用户，我希望可以在成果展示看到该公司网站的吹产品，这样可以方便我进行了解该公司的产品并进行购买。<br /></ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('3','41','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('4','41','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('6','42','consumed','1','7','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('7','42','left','10','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('8','42','assignedTo','dev1','projectManager','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('9','42','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('10','42','finishedBy','','dev1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('11','42','finishedDate','','2012-06-05 10:38:00','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('13','43','consumed','0','6','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('14','43','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('15','43','assignedTo','dev1','projectManager','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('16','43','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('17','43','finishedBy','','dev1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('18','43','finishedDate','','2012-06-05 10:39:14','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('20','44','canceledDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('21','45','canceledDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('22','46','canceledDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('23','47','closedDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('24','48','closedDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('25','49','closedDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('26','50','closedDate','2012-06-05 10:41:12','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('27','51','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('28','51','consumed','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('29','51','left','10','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('30','51','finishedBy','','dev1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('31','51','finishedDate','','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('32','52','finishedDate','2012-06-05 10:38:00','2012-06-05 10:41:20','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('33','55','status','closed','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('34','55','consumed','0','5','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('35','55','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('36','55','finishedBy','','dev2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('37','55','closedBy','dev1','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('38','55','closedReason','done','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('39','55','finishedDate','','2012-06-05 10:42:56','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('40','55','closedDate','2012-06-05 10:41:20','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('41','56','status','closed','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('42','56','consumed','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('43','56','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('44','56','finishedBy','','dev2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('45','56','closedBy','dev1','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('46','56','closedReason','done','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('47','56','finishedDate','','2012-06-05 10:42:56','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('48','56','closedDate','2012-06-05 10:41:20','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('49','59','status','closed','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('50','59','consumed','0','5','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('51','59','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('52','59','finishedBy','dev1','dev3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('53','59','closedBy','dev1','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('54','59','closedReason','done','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('55','59','finishedDate','','2012-06-05 10:43:32','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('56','59','closedDate','2012-06-05 10:41:20','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('57','60','status','closed','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('58','60','consumed','0','5','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('59','60','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('60','60','finishedBy','dev1','dev3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('61','60','closedBy','dev1','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('62','60','closedReason','done','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('63','60','finishedDate','','2012-06-05 10:43:32','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('64','60','closedDate','2012-06-05 10:41:20','','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('65','82','title','首页的测试用例','售后服务的测试用例','001- <del>首页的测试用例</del>
001+ <ins>售后服务的测试用例</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('66','82','story','1','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('67','93','build','','trunk','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('68','132','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('69','133','status','normal','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('70','166','assignedTo','tianliwei','qiuqingqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('71','169','type','codeerror','interface','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('72','169','pri','0','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('73','169','confirmed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('74','184','realStarted','0000-00-00','2017-09-07','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('75','184','assignedTo','xumaohuai','shenguilin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('76','184','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('77','184','finishedBy','','shenguilin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('78','184','finishedDate','','2017-09-07 10:02:35','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('79','197','pri','0','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('80','197','confirmed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('81','253','assignedTo','qiuqingqiang','tianliwei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('82','253','mailto','',',tianliwei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('83','277','assignedTo','','tianliwei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('84','278','assignedTo','','xumaohuai','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('85','280','assignedTo','','qiuqingqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('86','283','realStarted','0000-00-00','2017-09-11','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('87','283','left','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('88','283','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('89','284','consumed','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('90','284','assignedTo','qiuqingqiang','shenguilin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('91','284','finishedDate','','2017-09-11 17:25:28','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('92','284','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('93','284','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('94','284','finishedBy','','qiuqingqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('95','289','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('96','289','assignedTo','xumaohuai','shenguilin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('97','289','finishedDate','','2017-09-11 17:26:30','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('98','289','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('99','289','finishedBy','','xumaohuai','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('100','292','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('101','292','assignedTo','tianliwei','shenguilin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('102','292','finishedDate','','2017-09-11 17:27:01','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('103','292','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('104','292','finishedBy','','tianliwei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('105','294','assignedTo','tianliwei','qiuqingqiang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('106','302','contentType','','html','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('107','303','fileName','ccpcNo.log.txt','ccpcNo.log.txt','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('108','304','content','','<p>safsfsf</p>','001- <del></del>
001+ <ins><p>safsfsf</p></ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('109','304','contentType','','html','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('110','316','name','易电有财1.5.2','易电有财','001- <del>易电有财1.5.2</del>
001+ <ins>易电有财</ins>');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('111','323','assignedTo','','lidongdong','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('112','326','realStarted','0000-00-00','2017-09-15','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('113','326','left','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('114','326','assignedTo','liudongchuan','admin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('115','326','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('116','328','realStarted','0000-00-00','2017-09-15','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('117','328','consumed','0','10','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('118','328','left','0','10','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('119','328','assignedTo','xiangzhenhong','admin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('120','328','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('121','329','finishedDate','','2017-09-15 17:56:39','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('122','329','left','10','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('123','329','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('124','329','finishedBy','','admin','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('125','334','assignedTo','qiuqingqiang','xumaohuai','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('126','334','left','0','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('127','348','status','wait','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('128','355','realStarted','0000-00-00','2017-09-18','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('129','355','assignedTo','fuwenjing','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('130','355','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('131','356','assignedTo','tangfei','fuwenjing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('132','359','realStarted','0000-00-00','2017-09-18','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('133','359','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('134','359','left','0','29','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('135','359','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('136','360','consumed','1','9','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('137','360','left','29','21','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('138','361','consumed','9','16','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('139','361','left','21','5','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('140','364','consumed','0','8','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('141','364','left','30','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('142','364','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('143','376','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('144','376','finishedDate','','2017-09-19 09:13:59','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('145','376','left','8','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('146','376','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('147','376','finishedBy','','chenyang','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('148','389','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('149','389','assignedTo','tangfei','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('150','389','closedBy','','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('151','389','closedDate','0000-00-00 00:00:00','2017-09-19 10:30:44','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('152','389','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('153','400','realStarted','0000-00-00','2017-09-19','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('154','400','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('155','401','consumed','0','6','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('156','401','left','6','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('157','401','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('158','404','realStarted','0000-00-00','2017-09-19','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('159','404','left','6','16','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('160','404','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('161','405','consumed','0','7','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('162','405','left','16','9','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('163','406','consumed','7','13','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('164','406','left','9','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('165','407','consumed','13','16','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('166','407','left','3','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('167','407','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('168','412','consumed','0','13','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('169','412','left','6','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('170','412','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('171','414','consumed','13','16','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('172','414','left','3','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('173','414','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('174','415','consumed','0','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('175','415','left','6','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('176','415','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('177','418','consumed','1','2','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('178','421','assignedTo','jiangdandan','fuwenjing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('179','421','left','1','9','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('180','424','consumed','2','3','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('181','424','left','9','1','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('182','425','consumed','3','4','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('183','425','left','1','0','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('184','425','status','doing','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('185','428','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('186','428','assignedTo','tangfei','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('187','428','closedBy','','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('188','428','closedDate','0000-00-00 00:00:00','2017-09-19 10:47:27','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('189','428','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('190','429','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('191','429','assignedTo','tangfei','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('192','429','closedBy','','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('193','429','closedDate','0000-00-00 00:00:00','2017-09-19 10:47:47','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('194','429','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('195','464','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('196','464','assignedTo','tangfei','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('197','464','closedBy','','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('198','464','closedDate','0000-00-00 00:00:00','2017-09-19 22:16:26','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('199','464','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('200','465','status','done','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('201','465','assignedTo','tangfei','closed','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('202','465','closedBy','','tangfei','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('203','465','closedDate','0000-00-00 00:00:00','2017-09-19 22:16:29','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('204','465','closedReason','','done','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('205','466','status','wait','doing','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('206','467','end','2017-10-19','2017-11-19','');
INSERT INTO `zt_history`(`id`,`action`,`field`,`old`,`new`,`diff`) VALUES ('207','467','days','23','44','');
DROP TABLE IF EXISTS `zt_lang`;
CREATE TABLE `zt_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `key` varchar(60) NOT NULL,
  `value` text NOT NULL,
  `system` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`lang`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('1','zh-cn','user','roleList','','','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('2','zh-cn','user','roleList','dev','研发','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('3','zh-cn','user','roleList','qa','测试','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('4','zh-cn','user','roleList','pm','项目经理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('5','zh-cn','user','roleList','po','产品经理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('6','zh-cn','user','roleList','td','研发主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('7','zh-cn','user','roleList','pd','产品主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('8','zh-cn','user','roleList','qd','测试主管','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('9','zh-cn','user','roleList','top','高层管理','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('10','zh-cn','user','roleList','others','其他','1');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('11','zh-cn','user','roleList','yy','运营','0');
INSERT INTO `zt_lang`(`id`,`lang`,`module`,`section`,`key`,`value`,`system`) VALUES ('12','zh-cn','user','roleList','sc','市场','0');
DROP TABLE IF EXISTS `zt_mailqueue`;
CREATE TABLE `zt_mailqueue` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `toList` varchar(255) NOT NULL,
  `ccList` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `addedBy` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `sendTime` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'wait',
  `failReason` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sendTime` (`sendTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_module`;
CREATE TABLE `zt_module` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` char(60) NOT NULL DEFAULT '',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `short` varchar(30) NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `module` (`root`,`type`,`path`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('1','1','0','首页','0',',1,','1','10','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('2','1','0','新闻中心','0',',2,','1','20','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('3','1','0','成果展示','0',',3,','1','30','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('4','1','0','售后服务','0',',4,','1','40','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('5','1','0','诚聘英才','0',',5,','1','50','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('6','1','0','合作洽谈','0',',6,','1','60','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('7','1','0','关于我们','0',',7,','1','70','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('8','1','0','首页','0',',8,','1','10','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('9','1','0','新闻中心','0',',9,','1','20','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('10','1','0','成果展示','0',',10,','1','30','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('11','1','0','售后服务','0',',11,','1','40','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('12','1','0','诚聘英才','0',',12,','1','50','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('13','1','0','合作洽谈','0',',13,','1','60','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('14','1','0','关于我们','0',',14,','1','70','bug','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('15','3','0','基础信息','0',',15,','1','10','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('16','3','0','订阅单','0',',16,','1','20','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('17','3','0','精准信息','0',',17,','1','30','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('18','3','0','工作','0',',18,','1','40','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('19','3','0','黄页','0',',19,','1','50','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('20','3','0','分享','0',',20,','1','60','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('21','3','0','个人信息','0',',21,','1','70','story','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('22','3','0','升级','0',',22,','1','80','case','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('23','3','0','权限','0',',23,','1','90','case','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('24','3','0','兼容性','0',',24,','1','100','case','','','0');
INSERT INTO `zt_module`(`id`,`root`,`branch`,`name`,`parent`,`path`,`grade`,`order`,`type`,`owner`,`short`,`deleted`) VALUES ('25','3','0','基础模块','0',',25,','1','110','case','','','0');
DROP TABLE IF EXISTS `zt_product`;
CREATE TABLE `zt_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'normal',
  `status` varchar(30) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `PO` varchar(30) NOT NULL,
  `QD` varchar(30) NOT NULL,
  `RD` varchar(30) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` text NOT NULL,
  `createdBy` varchar(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdVersion` varchar(20) NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order` (`order`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_product`(`id`,`name`,`code`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('1','公司企业网站建设','companyWebsite','normal','closed','建立公司企业网站，可以更好对外展示。<br />','productManager','testManager','productManager','open','','productManager','2012-06-05 09:57:07','','5','1');
INSERT INTO `zt_product`(`id`,`name`,`code`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('2','企业内部工时管理系统','workhourManage','normal','normal','','productManager','testManager','productManager','open','','productManager','2012-06-05 11:15:20','5.2.1','10','1');
INSERT INTO `zt_product`(`id`,`name`,`code`,`type`,`status`,`desc`,`PO`,`QD`,`RD`,`acl`,`whitelist`,`createdBy`,`createdDate`,`createdVersion`,`order`,`deleted`) VALUES ('3','易电有财','edyc_1.5.2','platform','normal','易电有财1.5.2','lidongdong','tianliwei','shenguilin','open','','lidongdong','2017-09-07 09:42:59','9.5','15','0');
DROP TABLE IF EXISTS `zt_productplan`;
CREATE TABLE `zt_productplan` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  `title` varchar(90) NOT NULL,
  `desc` text NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `plan` (`product`,`end`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('1','1','0','1.0版本','开发出企业网站1.0版本。<br />','2000-01-01','2015-01-01','0');
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('2','3','0','易电有财1.5.2','易电有财1.5.2','2017-09-07','2017-09-30','0');
INSERT INTO `zt_productplan`(`id`,`product`,`branch`,`title`,`desc`,`begin`,`end`,`deleted`) VALUES ('3','3','0','易电有财1.5.3','易电有财1.5.3','2017-10-02','2017-10-31','0');
DROP TABLE IF EXISTS `zt_project`;
CREATE TABLE `zt_project` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `isCat` enum('1','0') NOT NULL DEFAULT '0',
  `catID` mediumint(8) unsigned NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'sprint',
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(90) NOT NULL,
  `code` varchar(45) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `days` smallint(5) unsigned NOT NULL,
  `status` varchar(10) NOT NULL,
  `statge` enum('1','2','3','4','5') NOT NULL DEFAULT '1',
  `pri` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` int(10) unsigned NOT NULL DEFAULT '0',
  `openedVersion` varchar(20) NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` int(10) unsigned NOT NULL DEFAULT '0',
  `canceledBy` varchar(30) NOT NULL DEFAULT '',
  `canceledDate` int(10) unsigned NOT NULL DEFAULT '0',
  `PO` varchar(30) NOT NULL DEFAULT '',
  `PM` varchar(30) NOT NULL DEFAULT '',
  `QD` varchar(30) NOT NULL DEFAULT '',
  `RD` varchar(30) NOT NULL DEFAULT '',
  `team` varchar(30) NOT NULL,
  `acl` enum('open','private','custom') NOT NULL DEFAULT 'open',
  `whitelist` text NOT NULL,
  `order` mediumint(8) unsigned NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `project` (`parent`,`begin`,`end`,`status`,`order`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('1','0','0','sprint','0','企业网站第一期','coWeb1','2012-06-05','2012-12-04','184','done','1','1','开发企业网站的基本雏形。<br />','','0','','','0','','0','productManager','projectManager','testManager','productManager','公司开发团队','open','','5','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('2','0','0','sprint','0','企业网站第二期','coWebsite2','2013-06-05','2014-06-04','365','done','1','1','','','0','','','0','','0','productManager','projectManager','testManager','productManager','公司开发团队','open','','10','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('3','0','0','sprint','0','易电有财1.5.2','edyc_1.5.2','2017-09-07','2017-09-30','17','wait','1','1','易电有财1.5.2','','0','9.5','','0','','0','','','','','易电有财1.5.2','open','','15','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('4','0','0','sprint','0','aaaaa','aaa','2017-09-11','2017-09-30','15','wait','1','1','aaa','','0','9.5','','0','','0','','','','','aaa','open','','25','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('5','0','0','sprint','0','易电有才2.0.0','2.0.0','2017-09-15','2017-10-15','21','wait','1','1','','','0','9.5','','0','','0','','','','','易电有才2.0.0','open','','35','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('6','0','0','sprint','0','很快就会狂欢节','lkk','2017-09-15','2017-10-15','21','done','1','1','','','0','9.5','','0','','0','','','','','很快就会狂欢节','open','','30','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('7','0','0','sprint','0','有财1.6运营','1.6','2017-09-18','2017-10-18','23','wait','1','1','','','0','9.5','','0','','0','','','','','有财1.6运营','open','','20','1');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('8','0','0','sprint','0','易电有财1.6 运营工作','运营1.6','2017-09-19','2017-11-19','44','doing','1','1','易电有财1.6 运营工作','','0','9.5','','0','','0','','','','','易电有财1.6 运营工作','private','','40','0');
INSERT INTO `zt_project`(`id`,`isCat`,`catID`,`type`,`parent`,`name`,`code`,`begin`,`end`,`days`,`status`,`statge`,`pri`,`desc`,`openedBy`,`openedDate`,`openedVersion`,`closedBy`,`closedDate`,`canceledBy`,`canceledDate`,`PO`,`PM`,`QD`,`RD`,`team`,`acl`,`whitelist`,`order`,`deleted`) VALUES ('9','0','0','sprint','0','项目1','xn','2017-09-19','2017-10-19','23','wait','1','1','','','0','9.5','','0','','0','','','','','项目1','private','','45','0');
DROP TABLE IF EXISTS `zt_projectproduct`;
CREATE TABLE `zt_projectproduct` (
  `project` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`project`,`product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('1','1','0');
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('2','1','0');
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('3','3','0');
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('4','3','0');
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('5','3','0');
INSERT INTO `zt_projectproduct`(`project`,`product`,`branch`) VALUES ('9','3','0');
DROP TABLE IF EXISTS `zt_projectstory`;
CREATE TABLE `zt_projectstory` (
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product` mediumint(8) unsigned NOT NULL,
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` smallint(6) NOT NULL DEFAULT '1',
  UNIQUE KEY `project` (`project`,`story`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('1','1','4','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('1','1','3','2');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('1','1','2','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('1','1','1','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('3','3','9','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('3','3','8','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('4','3','10','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('4','3','11','1');
INSERT INTO `zt_projectstory`(`project`,`product`,`story`,`version`) VALUES ('5','3','12','1');
DROP TABLE IF EXISTS `zt_release`;
CREATE TABLE `zt_release` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` mediumint(8) unsigned NOT NULL,
  `name` char(30) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `leftBugs` text NOT NULL,
  `desc` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `build` (`build`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_story`;
CREATE TABLE `zt_story` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `branch` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `plan` text,
  `source` varchar(20) NOT NULL,
  `sourceNote` varchar(255) NOT NULL,
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT '',
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '3',
  `estimate` float unsigned NOT NULL,
  `status` enum('','changed','active','draft','closed') NOT NULL DEFAULT '',
  `color` char(7) NOT NULL,
  `stage` enum('','wait','planned','projected','developing','developed','testing','tested','verified','released') NOT NULL DEFAULT 'wait',
  `mailto` text,
  `openedBy` varchar(30) NOT NULL DEFAULT '',
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL DEFAULT '',
  `assignedDate` datetime NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL DEFAULT '',
  `lastEditedDate` datetime NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` date NOT NULL,
  `closedBy` varchar(30) NOT NULL DEFAULT '',
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `toBug` mediumint(9) NOT NULL,
  `childStories` varchar(255) NOT NULL,
  `linkStories` varchar(255) NOT NULL,
  `duplicateStory` mediumint(8) unsigned NOT NULL,
  `version` smallint(6) NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `story` (`product`,`module`,`status`,`assignedTo`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('1','1','0','1','1','po','','0','首页设计和开发','','','1','1','active','','developed','','productManager','2012-06-05 10:09:49','productManager','0000-00-00 00:00:00','productManager','2012-06-05 10:25:19','productManager, ','2012-06-05','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('2','1','0','2','1','po','','0','新闻中心的设计和开发。','','','1','1','active','','developed','','productManager','2012-06-05 10:16:37','productManager','2012-06-05 10:16:37','productManager','2012-06-05 10:25:33','productManager, ','2012-06-05','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('3','1','0','3','1','po','','0','成果展示的设计和开发','','','1','0','active','','developed','','productManager','2012-06-05 10:18:10','productManager','2012-06-05 10:18:10','productManager','2012-06-05 10:25:38','productManager, ','2012-06-05','','0000-00-00 00:00:00','','0','','','0','2','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('4','1','0','4','1','po','','0','售后服务的设计和开发','','','1','1','active','','projected','','productManager','2012-06-05 10:20:16','productManager','2012-06-05 10:20:16','productManager','2012-06-05 10:25:42','productManager, ','2012-06-05','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('5','1','0','5','1','po','','0','诚聘英才的设计和开发','','','1','1','draft','','planned','','productManager','2012-06-05 10:21:39','productManager','2012-06-05 10:21:39','','0000-00-00 00:00:00','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('6','1','0','6','1','po','','0','合作洽谈的设计和开发','','','1','1','draft','','planned','','productManager','2012-06-05 10:23:11','productManager','2012-06-05 10:23:11','','0000-00-00 00:00:00','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('7','1','0','7','1','po','','0','关于我们的设计和开发','','','1','1','draft','','planned','','productManager','2012-06-05 10:24:19','productManager','2012-06-05 10:24:19','','0000-00-00 00:00:00','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('8','3','0','15','2','customer','','0','易电有财1.5.2的需求一','','','1','0','active','#f44336','projected','','lidongdong','2017-09-07 09:46:01','lidongdong','0000-00-00 00:00:00','lidongdong','2017-09-07 09:47:13','lidongdong','2017-09-07','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('9','3','0','16','2','customer','','0','需求二','','','0','0','active','','projected','','lidongdong','2017-09-07 09:46:56','lidongdong','0000-00-00 00:00:00','lidongdong','2017-09-07 09:47:23','lidongdong','2017-09-07','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('10','3','0','15','2','customer','','0','xuqiu1','','','0','0','active','','developed','','lidongdong','2017-09-11 17:18:24','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('11','3','0','17','','','','0','没有精准信息','','','0','0','active','#00bcd4','projected','','lanmaoyun','2017-09-13 10:41:48','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('12','3','0','0','','','','0','etetryte','','','0','0','active','','projected','','admin','2017-09-15 17:31:16','admin','0000-00-00 00:00:00','admin','2017-09-15 17:31:38','admin','2017-09-15','','0000-00-00 00:00:00','','0','','','0','1','0');
INSERT INTO `zt_story`(`id`,`product`,`branch`,`module`,`plan`,`source`,`sourceNote`,`fromBug`,`title`,`keywords`,`type`,`pri`,`estimate`,`status`,`color`,`stage`,`mailto`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`lastEditedBy`,`lastEditedDate`,`reviewedBy`,`reviewedDate`,`closedBy`,`closedDate`,`closedReason`,`toBug`,`childStories`,`linkStories`,`duplicateStory`,`version`,`deleted`) VALUES ('13','3','0','0','','','','0','大股东广东','','','0','0','active','','wait','','admin','2017-09-15 17:58:59','admin','2017-09-15 17:58:59','admin','2017-09-15 18:00:03','admin','2017-09-15','','0000-00-00 00:00:00','','0','','','0','1','0');
DROP TABLE IF EXISTS `zt_storyspec`;
CREATE TABLE `zt_storyspec` (
  `story` mediumint(9) NOT NULL,
  `version` smallint(6) NOT NULL,
  `title` varchar(90) NOT NULL,
  `spec` text NOT NULL,
  `verify` text NOT NULL,
  UNIQUE KEY `story` (`story`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('1','1','首页设计和开发','作为一名本公司的用户，我希望可以在首页看到该公司网站的基本内容，例如最新动态、部分成果展示、联系信息、工商信息等。<br />','开发并通过验收<br />');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('2','1','新闻中心的设计和开发。','作为一名本公司的用户，我希望可以在新闻中心看到该公司网站的企业新闻，这样可以通过新闻了解企业的最新动态。<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('3','1','成果展示的设计和开发','&nbsp;作为一名本公司的用户，我希望可以在成果展示看到该公司网站的企业新闻，这样可以方便我进行了解该公司的产品并进行购买。&nbsp;<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('3','2','成果展示的设计和开发','&nbsp;作为一名本公司的用户，我希望可以在成果展示看到该公司网站的吹产品，这样可以方便我进行了解该公司的产品并进行购买。&nbsp;<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('4','1','售后服务的设计和开发','作为一名本公司的用户，我希望可以在售后服务看到该公司网站的售后服务，这样可以方便我联系该公司来解决我的问题。&nbsp;<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('5','1','诚聘英才的设计和开发','作为一名求职者，我希望可以在诚聘英才里看到该公司的招聘信息，这样可以方便我应聘该公司。&nbsp;<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('6','1','合作洽谈的设计和开发','作为一名合作商，我希望可以在合作洽谈里看到该公司对外的合作内容，这样可以方便我和该公司进行合作洽谈。&nbsp;<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('7','1','关于我们的设计和开发','我希望可以在关于我们里看到该公司的基本信息，这样可以方便我了解该公司。<br />','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('8','1','易电有财1.5.2的需求一','作为什么角色出发，想要达到什么效果，带来什么好处','验收标准');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('9','1','需求二','需求二','需求二');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('10','1','xuqiu1','asdasda','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('11','1','没有精准信息','','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('12','1','etetryte','sfsfsf','');
INSERT INTO `zt_storyspec`(`story`,`version`,`title`,`spec`,`verify`) VALUES ('13','1','大股东广东','','');
DROP TABLE IF EXISTS `zt_storystage`;
CREATE TABLE `zt_storystage` (
  `story` mediumint(8) unsigned NOT NULL,
  `branch` mediumint(8) unsigned NOT NULL,
  `stage` varchar(50) NOT NULL,
  KEY `story` (`story`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('11','0','projected');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('8','0','projected');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('9','0','projected');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('9','0','projected');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('10','0','developed');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('11','0','projected');
INSERT INTO `zt_storystage`(`story`,`branch`,`stage`) VALUES ('12','0','projected');
DROP TABLE IF EXISTS `zt_suitecase`;
CREATE TABLE `zt_suitecase` (
  `suite` mediumint(8) unsigned NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `suitecase` (`suite`,`case`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','29','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','28','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','27','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','26','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','25','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','24','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','23','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','22','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','21','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','20','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','19','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','18','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','17','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','16','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','15','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','14','1');
INSERT INTO `zt_suitecase`(`suite`,`product`,`case`,`version`) VALUES ('2','0','13','1');
DROP TABLE IF EXISTS `zt_task`;
CREATE TABLE `zt_task` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `story` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `storyVersion` smallint(6) NOT NULL DEFAULT '1',
  `fromBug` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `estimate` float unsigned NOT NULL,
  `consumed` float unsigned NOT NULL,
  `left` float unsigned NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('wait','doing','done','pause','cancel','closed') NOT NULL DEFAULT 'wait',
  `color` char(7) NOT NULL,
  `mailto` text,
  `desc` text NOT NULL,
  `openedBy` varchar(30) NOT NULL,
  `openedDate` datetime NOT NULL,
  `assignedTo` varchar(30) NOT NULL,
  `assignedDate` datetime NOT NULL,
  `estStarted` date NOT NULL,
  `realStarted` date NOT NULL,
  `finishedBy` varchar(30) NOT NULL,
  `finishedDate` datetime NOT NULL,
  `canceledBy` varchar(30) NOT NULL,
  `canceledDate` datetime NOT NULL,
  `closedBy` varchar(30) NOT NULL,
  `closedDate` datetime NOT NULL,
  `closedReason` varchar(30) NOT NULL,
  `lastEditedBy` varchar(30) NOT NULL,
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `task` (`project`,`module`,`story`,`assignedTo`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','1','0','1','1','0','首页页面的设计','design','1','10','7','0','0000-00-00','done','','','首页页面的设计<br />','projectManager','2012-06-05 10:32:03','projectManager','2012-06-05 10:41:20','0000-00-00','0000-00-00','dev1','2012-06-05 10:41:20','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev1','2012-06-05 10:41:20','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','1','0','1','1','0','首页的开发','devel','1','10','8','0','0000-00-00','done','','','首页的开发<br />','projectManager','2012-06-05 10:32:23','dev1','2012-06-05 10:41:20','0000-00-00','0000-00-00','dev1','2012-06-05 10:41:20','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev1','2012-06-05 10:41:20','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('3','1','0','2','1','0','新闻中心的设计','design','1','8','8','0','0000-00-00','done','','','新闻中心的设计<br />','projectManager','2012-06-05 10:33:01','dev2','2012-06-05 10:42:56','0000-00-00','0000-00-00','dev2','2012-06-05 10:42:56','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev2','2012-06-05 10:42:56','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('4','1','0','2','1','0','新闻中心的开发','devel','1','8','5','0','0000-00-00','done','','','新闻中心的开发<br />','projectManager','2012-06-05 10:33:21','dev2','2012-06-05 10:42:56','0000-00-00','0000-00-00','dev2','2012-06-05 10:42:56','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev2','2012-06-05 10:42:56','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('5','1','0','3','2','0','成果展示的设计','design','1','8','5','0','0000-00-00','done','','','成果展示的设计<br />','projectManager','2012-06-05 10:33:44','dev3','2012-06-05 10:43:32','0000-00-00','0000-00-00','dev3','2012-06-05 10:43:32','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev3','2012-06-05 10:43:32','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('6','1','0','3','2','0','成果展示的开发','devel','1','8','5','0','0000-00-00','done','','','成果展示的开发<br />','projectManager','2012-06-05 10:33:59','dev3','2012-06-05 10:43:32','0000-00-00','0000-00-00','dev3','2012-06-05 10:43:32','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','dev3','2012-06-05 10:43:32','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('7','1','0','4','1','0','售后服务的设计','design','1','8','0','8','0000-00-00','cancel','','','售后服务的设计<br />','projectManager','2012-06-05 10:34:25','projectManager','2012-06-05 10:41:20','0000-00-00','0000-00-00','','0000-00-00 00:00:00','dev1','2012-06-05 10:41:20','','0000-00-00 00:00:00','','dev1','2012-06-05 10:41:20','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('8','1','0','4','1','0','售后服务的开发','devel','1','8','6','0','0000-00-00','cancel','','','售后服务的开发<br />','projectManager','2012-06-05 10:34:45','projectManager','2012-06-05 10:41:20','0000-00-00','0000-00-00','dev1','0000-00-00 00:00:00','dev1','2012-06-05 10:41:20','','0000-00-00 00:00:00','','dev1','2012-06-05 10:41:20','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('9','1','0','4','1','0','售后服务的开发','devel','1','8','0','8','0000-00-00','cancel','','','售后服务的开发<br />','projectManager','2012-06-05 10:35:01','projectManager','2012-06-05 10:41:20','0000-00-00','0000-00-00','','0000-00-00 00:00:00','dev1','2012-06-05 10:41:20','','0000-00-00 00:00:00','','dev1','2012-06-05 10:41:20','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('10','3','15','8','1','0','android开发任务','devel','3','0','0','0','0000-00-00','done','','','','shenguilin','2017-09-07 09:51:15','shenguilin','2017-09-07 10:02:35','0000-00-00','2017-09-07','shenguilin','2017-09-07 10:02:35','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','shenguilin','2017-09-07 10:02:35','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('11','3','15','8','1','0','ios开发任务','devel','3','0','0','4','0000-00-00','wait','','','','shenguilin','2017-09-07 09:51:15','xumaohuai','2017-09-18 09:10:44','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','qiuqingqiang','2017-09-18 09:10:44','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('12','3','15','8','1','0','测试任务','test','3','0','0','0','0000-00-00','wait','','','','shenguilin','2017-09-07 09:51:15','tianliwei','2017-09-07 09:51:15','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('13','4','15','10','1','0','andr','devel','3','0','8','0','0000-00-00','done','','','','shenguilin','2017-09-11 17:22:25','shenguilin','2017-09-11 17:25:28','0000-00-00','2017-09-11','qiuqingqiang','2017-09-11 17:25:28','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','qiuqingqiang','2017-09-11 17:25:28','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('14','4','15','10','1','0','ios','devel','3','0','1','0','0000-00-00','done','','','','shenguilin','2017-09-11 17:22:25','shenguilin','2017-09-11 17:26:30','0000-00-00','0000-00-00','xumaohuai','2017-09-11 17:26:30','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','xumaohuai','2017-09-11 17:26:30','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('15','4','15','10','1','0','ces','test','3','0','1','0','0000-00-00','done','','','','shenguilin','2017-09-11 17:22:25','shenguilin','2017-09-11 17:27:01','0000-00-00','0000-00-00','tianliwei','2017-09-11 17:27:01','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','tianliwei','2017-09-11 17:27:01','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('16','4','15','10','1','0','ui','test','3','0','0','0','0000-00-00','wait','','','','shenguilin','2017-09-11 17:22:25','','0000-00-00 00:00:00','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('17','4','0','10','1','0','测试','design','0','0','0','0','0000-00-00','wait','','','','shenguilin','2017-09-13 17:19:33','shenguilin','2017-09-13 17:19:33','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('18','5','0','12','1','0','打发打发','test','3','0','0','0','0000-00-00','wait','','','','admin','2017-09-15 17:38:04','','0000-00-00 00:00:00','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('19','5','0','12','1','0','反对反对法','discuss','3','0','0','0','0000-00-00','wait','','','','admin','2017-09-15 17:38:04','lidongdong','2017-09-15 17:38:34','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','admin','2017-09-15 17:38:34','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('20','6','0','0','1','0','kkkk','misc','0','0','1','0','0000-00-00','done','','','lkkkk','admin','2017-09-15 17:43:00','admin','2017-09-19 09:13:59','0000-00-00','2017-09-15','chenyang','2017-09-19 09:13:59','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','chenyang','2017-09-19 09:13:59','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('21','6','0','0','1','0','阿大使大赛','affair','0','0','10','0','0000-00-00','done','','','三分法','admin','2017-09-15 17:54:06','admin','2017-09-15 17:56:39','0000-00-00','2017-09-15','admin','2017-09-15 17:56:39','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','admin','2017-09-15 17:56:39','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('22','7','0','0','1','0','维护20个用户','affair','1','30','8','0','2017-09-23','closed','','','维护20个用户','tangfei','2017-09-18 23:08:06','closed','2017-09-19 10:30:44','2017-09-18','2017-09-18','fuwenjing','2017-09-18 23:13:48','','0000-00-00 00:00:00','tangfei','2017-09-19 10:30:44','done','tangfei','2017-09-19 10:30:44','1');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('23','7','0','0','1','0','维护20个用户','misc','0','0','16','5','0000-00-00','doing','','','维护20个用户','tangfei','2017-09-18 23:09:11','lanmaoyun','2017-09-18 23:09:11','0000-00-00','2017-09-18','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','lanmaoyun','2017-09-18 23:11:30','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('24','8','0','0','1','0','每天联系20个客户','affair','2','6','4','0','2017-09-22','closed','','','每天联系20个客户','tangfei','2017-09-19 10:38:34','closed','2017-09-19 10:47:47','2017-09-19','2017-09-19','jiangdandan','2017-09-19 10:46:05','','0000-00-00 00:00:00','tangfei','2017-09-19 10:47:47','done','tangfei','2017-09-19 10:47:47','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('25','8','0','0','1','0','每天联系20个客户','affair','2','6','16','0','2017-09-22','closed','','','每天联系20个客户','tangfei','2017-09-19 10:38:34','closed','2017-09-19 22:16:29','2017-09-19','2017-09-19','jiangdandan','2017-09-19 10:43:39','','0000-00-00 00:00:00','tangfei','2017-09-19 22:16:29','done','tangfei','2017-09-19 22:16:29','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('26','8','0','0','1','0','每天联系20个客户','affair','2','6','16','0','2017-09-22','closed','','','每天联系20个客户','tangfei','2017-09-19 10:38:34','closed','2017-09-19 10:47:27','2017-09-19','2017-09-19','lanmaoyun','2017-09-19 10:41:37','','0000-00-00 00:00:00','tangfei','2017-09-19 10:47:27','done','tangfei','2017-09-19 10:47:27','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('27','8','0','0','1','0','每天联系20个客户','affair','2','6','6','0','2017-09-22','closed','','','每天联系20个客户','tangfei','2017-09-19 10:38:34','closed','2017-09-19 22:16:26','2017-09-19','2017-09-19','tangfei','2017-09-19 10:40:07','','0000-00-00 00:00:00','tangfei','2017-09-19 22:16:26','done','tangfei','2017-09-19 22:16:26','0');
INSERT INTO `zt_task`(`id`,`project`,`module`,`story`,`storyVersion`,`fromBug`,`name`,`type`,`pri`,`estimate`,`consumed`,`left`,`deadline`,`status`,`color`,`mailto`,`desc`,`openedBy`,`openedDate`,`assignedTo`,`assignedDate`,`estStarted`,`realStarted`,`finishedBy`,`finishedDate`,`canceledBy`,`canceledDate`,`closedBy`,`closedDate`,`closedReason`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('28','9','15','0','1','0','aaaa','design','0','0','0','0','0000-00-00','wait','','','aaaa','shenguilin','2017-09-19 15:38:22','lidongdong','2017-09-19 15:38:23','0000-00-00','0000-00-00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_taskestimate`;
CREATE TABLE `zt_taskestimate` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `left` float unsigned NOT NULL DEFAULT '0',
  `consumed` float unsigned NOT NULL,
  `account` char(30) NOT NULL DEFAULT '',
  `work` text,
  PRIMARY KEY (`id`),
  KEY `task` (`task`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('1','10','2017-09-07','0','0','shenguilin','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('2','13','2017-09-11','8','0','qiuqingqiang','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('3','13','2017-09-11','0','8','qiuqingqiang','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('4','14','2017-09-11','0','1','xumaohuai','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('5','15','2017-09-11','0','1','tianliwei','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('6','20','2017-09-15','8','0','admin','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('7','21','2017-09-15','10','10','admin','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('8','22','2017-09-18','30','0','tangfei','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('9','23','2017-09-18','29','1','lanmaoyun','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('10','23','2017-09-19','21','8','lanmaoyun','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('11','23','2017-09-20','5','7','lanmaoyun','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('12','22','2017-09-19','0','8','fuwenjing','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('13','20','2017-09-19','0','1','chenyang','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('14','27','2017-09-19','6','0','tangfei','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('15','27','2017-09-19','0','6','tangfei','完成15个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('16','26','2017-09-19','16','0','lanmaoyun','');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('17','26','2017-09-19','9','7','lanmaoyun','13');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('18','26','2017-09-20','3','6','lanmaoyun','6');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('19','26','2017-09-21','0','3','lanmaoyun','1');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('20','25','2017-09-19','12','6','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('21','25','2017-09-20','8','4','jiangdandan','完成了4个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('22','25','2017-09-21','3','3','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('23','25','2017-09-22','1','1','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('24','25','2017-09-23','0','2','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('25','24','2017-09-19','1','1','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('26','24','2017-09-20','1','1','fuwenjing','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('27','24','2017-09-21','1','1','jiangdandan','完成了3个');
INSERT INTO `zt_taskestimate`(`id`,`task`,`date`,`left`,`consumed`,`account`,`work`) VALUES ('28','24','2017-09-22','0','1','jiangdandan','完成了3个');
DROP TABLE IF EXISTS `zt_team`;
CREATE TABLE `zt_team` (
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `role` char(30) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `days` smallint(5) unsigned NOT NULL,
  `hours` float(2,1) unsigned NOT NULL DEFAULT '0.0',
  PRIMARY KEY (`project`,`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','dev3','研发','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','productManager','产品经理','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','tester2','测试','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','tester1','测试','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','projectManager','项目经理','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','tester2','测试','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','tester1','测试','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','dev3','研发','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','dev2','研发','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','dev1','研发','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','dev1','研发','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','dev2','研发','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','projectManager','项目经理','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('1','testManager','测试主管','2013-02-20','184','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','productManager','产品经理','2013-02-20','365','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('2','testManager','测试负责人','2017-09-07','0','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','shenguilin','项目经理','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','lidongdong','产品经理','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','fanxiaoqian','研发','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','xumaohuai','研发','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','zhangchao','研发','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','tianliwei','测试主管','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','chenyang','研发主管','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','qiuqingqiang','研发主管','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('3','lanmaoyun','其他','2017-09-07','17','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','shenguilin','项目经理','2017-09-11','15','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','xumaohuai','研发','2017-09-11','15','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','lidongdong','产品经理','2017-09-11','15','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','tianliwei','测试主管','2017-09-11','15','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('4','qiuqingqiang','研发主管','2017-09-11','15','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','admin','','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','lidongdong','产品经理','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','qiuqingqiang','研发主管','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','xumaohuai','研发','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('5','tianliwei','测试主管','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','admin','','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','liudongchuan','研发','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('6','xiangzhenhong','研发','2017-09-15','21','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('7','tangfei','运营','2017-09-18','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('7','fuwenjing','运营','2017-09-18','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('7','jiangdandan','运营','2017-09-18','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('7','lanmaoyun','运营','2017-09-18','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('8','tangfei','运营','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('8','fuwenjing','运营','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('8','jiangdandan','运营','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('8','lanmaoyun','运营','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','shenguilin','项目经理','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','qiuqingqiang','研发主管','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','xumaohuai','研发','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','fanxiaoqian','研发','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','huxiangjie','研发','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','lidongdong','产品经理','2017-09-19','23','7.0');
INSERT INTO `zt_team`(`project`,`account`,`role`,`join`,`days`,`hours`) VALUES ('9','tianliwei','测试主管','2017-09-19','23','7.0');
DROP TABLE IF EXISTS `zt_testreport`;
CREATE TABLE `zt_testreport` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL,
  `tasks` varchar(255) NOT NULL,
  `builds` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `owner` char(30) NOT NULL,
  `members` text NOT NULL,
  `stories` text NOT NULL,
  `bugs` text NOT NULL,
  `cases` text NOT NULL,
  `report` text NOT NULL,
  `objectType` varchar(20) NOT NULL,
  `objectID` mediumint(8) unsigned NOT NULL,
  `createdBy` char(30) NOT NULL,
  `createdDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_testresult`;
CREATE TABLE `zt_testresult` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `run` mediumint(8) unsigned NOT NULL,
  `case` mediumint(8) unsigned NOT NULL,
  `version` smallint(5) unsigned NOT NULL,
  `caseResult` char(30) NOT NULL,
  `stepResults` text NOT NULL,
  `lastRunner` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `testresult` (`case`,`version`,`run`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('1','4','1','1','pass','a:1:{i:1;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','testManager','2012-06-05 11:11:00');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('2','3','2','1','pass','a:1:{i:2;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','testManager','2012-06-05 11:11:05');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('3','2','3','1','pass','a:1:{i:3;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','testManager','2012-06-05 11:11:07');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('4','1','4','1','pass','a:1:{i:4;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','testManager','2012-06-05 11:11:08');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('5','5','29','1','pass','a:1:{i:71;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-18 23:20:52');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('6','1','4','1','pass','a:1:{i:4;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-18 23:21:00');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('7','6','28','1','pass','a:2:{i:69;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:70;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-18 23:21:06');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('8','7','27','1','pass','a:1:{i:68;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-18 23:21:08');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('9','22','29','1','pass','a:1:{i:71;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-19 15:45:45');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('10','23','28','1','pass','a:2:{i:69;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}i:70;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-19 15:45:46');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('11','24','27','1','pass','a:1:{i:68;a:2:{s:6:\"result\";s:4:\"pass\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-19 15:45:48');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('12','25','26','1','fail','a:1:{i:67;a:2:{s:6:\"result\";s:4:\"fail\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-19 15:45:50');
INSERT INTO `zt_testresult`(`id`,`run`,`case`,`version`,`caseResult`,`stepResults`,`lastRunner`,`date`) VALUES ('13','1','4','1','blocked','a:1:{i:4;a:2:{s:6:\"result\";s:7:\"blocked\";s:4:\"real\";s:0:\"\";}}','tianliwei','2017-09-19 15:45:57');
DROP TABLE IF EXISTS `zt_testrun`;
CREATE TABLE `zt_testrun` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `task` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `case` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `version` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `assignedTo` char(30) NOT NULL DEFAULT '',
  `lastRunner` varchar(30) NOT NULL,
  `lastRunDate` datetime NOT NULL,
  `lastRunResult` char(30) NOT NULL,
  `status` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task` (`task`,`case`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('1','1','4','1','','tianliwei','2017-09-19 15:45:57','blocked','blocked');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('2','1','3','1','','testManager','2012-06-05 11:11:07','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('3','1','2','1','','testManager','2012-06-05 11:11:05','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('4','1','1','1','','testManager','2012-06-05 11:11:00','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('5','2','29','1','','tianliwei','2017-09-18 23:20:52','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('6','2','28','1','','tianliwei','2017-09-18 23:21:06','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('7','2','27','1','','tianliwei','2017-09-18 23:21:08','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('8','2','26','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('9','2','25','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('10','2','24','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('11','2','23','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('12','2','22','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('13','2','21','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('14','2','20','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('15','2','19','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('16','2','18','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('17','2','17','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('18','2','16','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('19','2','15','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('20','2','14','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('21','2','13','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('22','4','29','1','','tianliwei','2017-09-19 15:45:45','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('23','4','28','1','','tianliwei','2017-09-19 15:45:46','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('24','4','27','1','','tianliwei','2017-09-19 15:45:48','pass','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('25','4','26','1','','tianliwei','2017-09-19 15:45:50','fail','done');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('26','4','25','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('27','4','24','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('28','4','23','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('29','4','22','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('30','4','21','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('31','4','20','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('32','4','19','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('33','4','18','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('34','4','17','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('35','4','16','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('36','4','15','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('37','4','14','1','','','0000-00-00 00:00:00','','wait');
INSERT INTO `zt_testrun`(`id`,`task`,`case`,`version`,`assignedTo`,`lastRunner`,`lastRunDate`,`lastRunResult`,`status`) VALUES ('38','4','13','1','','','0000-00-00 00:00:00','','wait');
DROP TABLE IF EXISTS `zt_testsuite`;
CREATE TABLE `zt_testsuite` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `addedBy` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `lastEditedBy` char(30) NOT NULL,
  `lastEditedDate` datetime NOT NULL,
  `deleted` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testsuite`(`id`,`product`,`name`,`desc`,`type`,`addedBy`,`addedDate`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('1','0','易电有财','','library','tianliwei','2017-09-08 09:29:55','','0000-00-00 00:00:00','0');
INSERT INTO `zt_testsuite`(`id`,`product`,`name`,`desc`,`type`,`addedBy`,`addedDate`,`lastEditedBy`,`lastEditedDate`,`deleted`) VALUES ('2','3','有财','','public','tianliwei','2017-09-18 23:19:03','','0000-00-00 00:00:00','0');
DROP TABLE IF EXISTS `zt_testtask`;
CREATE TABLE `zt_testtask` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(90) NOT NULL,
  `product` mediumint(8) unsigned NOT NULL,
  `project` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `build` char(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `pri` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `mailto` text,
  `desc` text NOT NULL,
  `report` text NOT NULL,
  `status` enum('blocked','doing','wait','done') NOT NULL DEFAULT 'wait',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `build` (`build`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
INSERT INTO `zt_testtask`(`id`,`name`,`product`,`project`,`build`,`owner`,`pri`,`begin`,`end`,`mailto`,`desc`,`report`,`status`,`deleted`) VALUES ('1','企业网站第一期测试任务','1','1','trunk','testManager','0','2012-06-05','2013-06-21','','','','wait','0');
INSERT INTO `zt_testtask`(`id`,`name`,`product`,`project`,`build`,`owner`,`pri`,`begin`,`end`,`mailto`,`desc`,`report`,`status`,`deleted`) VALUES ('2','啊啊啊啊','3','5','trunk','lixingsheng','1','2017-09-18','2017-09-19','','啊啊','','doing','0');
INSERT INTO `zt_testtask`(`id`,`name`,`product`,`project`,`build`,`owner`,`pri`,`begin`,`end`,`mailto`,`desc`,`report`,`status`,`deleted`) VALUES ('3','111','3','9','2','tianliwei','1','2017-09-19','2017-09-20','','','','wait','0');
INSERT INTO `zt_testtask`(`id`,`name`,`product`,`project`,`build`,`owner`,`pri`,`begin`,`end`,`mailto`,`desc`,`report`,`status`,`deleted`) VALUES ('4','aaa','3','9','2','tianliwei','0','2017-09-19','2017-09-20','','','','wait','0');
DROP TABLE IF EXISTS `zt_todo`;
CREATE TABLE `zt_todo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `date` date NOT NULL,
  `begin` smallint(4) unsigned zerofill NOT NULL,
  `end` smallint(4) unsigned zerofill NOT NULL,
  `type` char(10) NOT NULL,
  `idvalue` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pri` tinyint(3) unsigned NOT NULL,
  `name` char(150) NOT NULL,
  `desc` text NOT NULL,
  `status` enum('wait','doing','done') NOT NULL DEFAULT 'wait',
  `private` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `todo` (`account`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_user`;
CREATE TABLE `zt_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dept` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `role` char(10) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `commiter` varchar(100) NOT NULL,
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `gender` enum('f','m') NOT NULL DEFAULT 'f',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL DEFAULT '',
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `join` date NOT NULL DEFAULT '0000-00-00',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` int(10) unsigned NOT NULL DEFAULT '0',
  `fails` tinyint(5) NOT NULL DEFAULT '0',
  `locked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ranzhi` char(30) NOT NULL DEFAULT '',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `user` (`dept`,`email`,`commiter`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('1','0','admin','c2418d98f9898631f84bc9d166289a37','','admin','','','','0000-00-00','f','pms@chinanuoyi.cn','','','','','','','','','','0000-00-00','26','125.70.31.127','1505802957','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('2','5','productManager','e10adc3949ba59abbe56e057f20f883e','po','产品经理','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','3','192.168.0.8','1338866083','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('3','6','projectManager','e10adc3949ba59abbe56e057f20f883e','pm','项目经理','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','3','192.168.0.8','1338865876','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('4','2','dev1','e10adc3949ba59abbe56e057f20f883e','dev','开发甲','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','192.168.0.8','1338863860','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('5','2','dev2','e10adc3949ba59abbe56e057f20f883e','dev','开发乙','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','192.168.0.8','1338864116','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('6','2','dev3','e10adc3949ba59abbe56e057f20f883e','dev','开发丙','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','192.168.0.8','1338864187','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('7','3','tester1','e10adc3949ba59abbe56e057f20f883e','qa','测试甲','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','3','192.168.0.8','1338865739','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('8','3','tester2','e10adc3949ba59abbe56e057f20f883e','qa','测试乙','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','2','192.168.0.8','1338865450','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('9','3','tester3','e10adc3949ba59abbe56e057f20f883e','qa','测试丙','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','1','192.168.0.8','1338865125','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('10','1','testManager','e10adc3949ba59abbe56e057f20f883e','qd','测试经理','','','','0000-00-00','m','','','','','','','','','','','0000-00-00','6','192.168.0.8','1338865842','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('11','21','chenyang','a8d8ae6056e2911a3de33e0906aeb737','td','陈杨','','chenyang','','0000-00-00','m','chenyang@chinanuoyi.cn','','501553705','','','','','18628187947','','','2015-06-15','6','125.70.31.126','1505783599','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('12','16','shenguilin','c2418d98f9898631f84bc9d166289a37','pm','申桂林','','','','0000-00-00','m','shenguilin@chinanuoyi.cn','','','','','','','','','','0000-00-00','13','125.70.31.127','1505807168','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('13','17','lidongdong','c2418d98f9898631f84bc9d166289a37','po','李东东','','','','0000-00-00','m','lidongdong@chinanuoyi.cn','','','','','','','','','','0000-00-00','8','125.70.31.127','1505804092','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('14','17','xuqingqing','c2418d98f9898631f84bc9d166289a37','pd','胥青青','','','','0000-00-00','f','xuqingqing@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('15','21','huxiangjie','c2418d98f9898631f84bc9d166289a37','dev','胡祥杰','','','','0000-00-00','m','huxiangjie@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','2','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('16','22','lishiyao','c2418d98f9898631f84bc9d166289a37','td','李世尧','','','','0000-00-00','m','lishiyao@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('17','22','xiangzhenhong','c2418d98f9898631f84bc9d166289a37','dev','向真红','','','','0000-00-00','m','xiangzhenhong@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('18','22','qiyouyun','c2418d98f9898631f84bc9d166289a37','dev','戚又云','','','','0000-00-00','m','qiyouyun@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('19','22','liudongchuan','c2418d98f9898631f84bc9d166289a37','dev','刘东川','','','','0000-00-00','m','liudongchuan@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('20','23','qiuqingqiang','c2418d98f9898631f84bc9d166289a37','td','邱庆强','','','','0000-00-00','m','qiuqingqiang@chinanuoyi.cn','','','','','','','','','','0000-00-00','11','125.70.31.127','1505807226','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('21','23','xumaohuai','c2418d98f9898631f84bc9d166289a37','dev','徐茂怀','','','','0000-00-00','m','xumaohuai@chinanuoyi.cn','','','','','','','','','','0000-00-00','3','125.70.31.127','1505697389','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('22','19','tianliwei','c2418d98f9898631f84bc9d166289a37','qd','田李伟','','','','0000-00-00','m','tianliwei@chinanuoyi.cn','','','','','','','','','','0000-00-00','12','182.150.150.174','1505830096','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('23','19','lixingsheng','c2418d98f9898631f84bc9d166289a37','qa','李幸生','','','','0000-00-00','m','lixingsheng@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','1','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('24','20','zhangchao','c2418d98f9898631f84bc9d166289a37','dev','张超','','','','0000-00-00','m','zhangchao@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('25','20','fanxiaoqian','c2418d98f9898631f84bc9d166289a37','dev','范小倩','','','','0000-00-00','m','fanxiaoqian@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('26','20','zhating','c2418d98f9898631f84bc9d166289a37','dev','查婷','','','','0000-00-00','m','zhating@chinanuoyi.cn','','','','','','','','','','0000-00-00','5','125.70.31.127','1505806356','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('27','24','lanmaoyun','c2418d98f9898631f84bc9d166289a37','yy','兰茂云','','','','0000-00-00','m','lanmaoyun@chinanuoyi.cn','','','','','','','','','','0000-00-00','6','125.70.31.127','1505788843','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('28','21','xiaojian','c2418d98f9898631f84bc9d166289a37','dev','肖建','','','','0000-00-00','m','xiaojian@chinanuoyi.cn','','','','','','','','','','0000-00-00','1','125.70.30.150','1505269926','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('29','18','MailTest','c2418d98f9898631f84bc9d166289a37','dev','MailTest','','','','0000-00-00','m','501553705@qq.com','','','','','','','','','','1970-01-15','0','','0','0','0000-00-00 00:00:00','','1');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('30','24','tangfei','c2418d98f9898631f84bc9d166289a37','yy','汤飞','','','','0000-00-00','m','tangfei@chinanuoyi.cn','','','','','','','','','','0000-00-00','10','182.150.150.174','1505830571','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('31','24','fuwenjing','c2418d98f9898631f84bc9d166289a37','yy','伏文婧','','','','0000-00-00','m','fuwenjing@chinanuoyi.cn','','','','','','','','','','0000-00-00','2','125.70.31.127','1505789081','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('32','24','jiangdandan','c2418d98f9898631f84bc9d166289a37','yy','蒋丹丹','','','','0000-00-00','m','jiangdandan@chinanuoyi.cn','','','','','','','','','','0000-00-00','2','125.70.31.127','1505789133','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('33','25','zhangtingting','c2418d98f9898631f84bc9d166289a37','yy','张听听','','','','0000-00-00','m','zhangtingting@chinanuoyi.cn','','','','','','','','','','0000-00-00','1','182.150.151.217','1505747705','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('34','25','fanzhi','c2418d98f9898631f84bc9d166289a37','yy','范志','','','','0000-00-00','m','fanzhi@chinanuoyi.cn','','','','','','','','','','0000-00-00','1','182.150.151.217','1505747787','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('35','25','puzhaoyu','c2418d98f9898631f84bc9d166289a37','yy','蒲照宇','','','','0000-00-00','m','puzhaoyu@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
INSERT INTO `zt_user`(`id`,`dept`,`account`,`password`,`role`,`realname`,`nickname`,`commiter`,`avatar`,`birthday`,`gender`,`email`,`skype`,`qq`,`yahoo`,`gtalk`,`wangwang`,`mobile`,`phone`,`address`,`zipcode`,`join`,`visits`,`ip`,`last`,`fails`,`locked`,`ranzhi`,`deleted`) VALUES ('36','25','yanlijuan','c2418d98f9898631f84bc9d166289a37','yy','鄢莉娟','','','','0000-00-00','m','yanlijuan@chinanuoyi.cn','','','','','','','','','','0000-00-00','0','','0','0','0000-00-00 00:00:00','','0');
DROP TABLE IF EXISTS `zt_usercontact`;
CREATE TABLE `zt_usercontact` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `listName` varchar(60) NOT NULL,
  `userList` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usergroup`;
CREATE TABLE `zt_usergroup` (
  `account` char(30) NOT NULL DEFAULT '',
  `group` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `account` (`account`,`group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('chenyang','6');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('dev1','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('dev2','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('dev3','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanxiaoqian','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fanzhi','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('fuwenjing','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('huxiangjie','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('jiangdandan','16');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lanmaoyun','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lidongdong','5');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lishiyao','6');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('liudongchuan','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('lixingsheng','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('MailTest','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('productManager','5');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('projectManager','4');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('puzhaoyu','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qiuqingqiang','6');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('qiyouyun','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('shenguilin','4');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tangfei','17');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tester1','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tester2','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tester3','3');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('testManager','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('tianliwei','8');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xiangzhenhong','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xiaojian','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xumaohuai','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('xuqingqing','7');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('yanlijuan','15');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangchao','2');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhangtingting','18');
INSERT INTO `zt_usergroup`(`account`,`group`) VALUES ('zhating','2');
DROP TABLE IF EXISTS `zt_userquery`;
CREATE TABLE `zt_userquery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `title` varchar(90) NOT NULL,
  `form` text NOT NULL,
  `sql` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `query` (`account`,`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `zt_usertpl`;
CREATE TABLE `zt_usertpl` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL,
  `type` char(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;