<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_hits`;");
E_C("CREATE TABLE `ld_hits` (
  `hitsid` char(30) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `views` int(10) unsigned NOT NULL default '0',
  `yesterdayviews` int(10) unsigned NOT NULL default '0',
  `dayviews` int(10) unsigned NOT NULL default '0',
  `weekviews` int(10) unsigned NOT NULL default '0',
  `monthviews` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`hitsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_hits` values('c-13-1','24','0','0','0','0','0','1491012513');");
E_D("replace into `ld_hits` values('c-13-2','24','0','0','0','0','0','1491012557');");
E_D("replace into `ld_hits` values('c-3-8','29','0','0','0','0','0','1491028953');");
E_D("replace into `ld_hits` values('c-13-3','47','0','0','0','0','0','1494637968');");
E_D("replace into `ld_hits` values('c-3-10','29','0','0','0','0','0','1491029177');");
E_D("replace into `ld_hits` values('c-1-1','25','87','6','14','78','84','1495715473');");
E_D("replace into `ld_hits` values('c-1-2','25','90','7','27','52','69','1495715262');");
E_D("replace into `ld_hits` values('c-1-3','26','14','2','4','4','14','1495722094');");
E_D("replace into `ld_hits` values('c-1-4','26','17','1','2','3','16','1495703162');");
E_D("replace into `ld_hits` values('c-1-5','26','19','0','2','7','19','1495703166');");
E_D("replace into `ld_hits` values('c-1-6','26','27','7','8','15','27','1495715389');");
E_D("replace into `ld_hits` values('c-3-11','29','0','0','0','0','0','1491029252');");
E_D("replace into `ld_hits` values('c-3-12','19','2','0','2','2','2','1491037567');");
E_D("replace into `ld_hits` values('c-3-6','27','6','0','5','5','6','1495007168');");
E_D("replace into `ld_hits` values('c-3-7','27','2','0','2','2','2','1495007120');");
E_D("replace into `ld_hits` values('c-3-13','19','0','0','0','0','0','1491037702');");
E_D("replace into `ld_hits` values('c-1-7','13','91','7','17','47','80','1495721043');");
E_D("replace into `ld_hits` values('c-1-8','13','43','3','35','35','42','1495721090');");
E_D("replace into `ld_hits` values('c-1-9','13','12','1','7','8','12','1495721048');");
E_D("replace into `ld_hits` values('c-1-10','13','5','1','1','2','5','1495720468');");
E_D("replace into `ld_hits` values('c-3-14','22','0','0','0','0','0','1491371303');");
E_D("replace into `ld_hits` values('c-3-15','27','3','0','3','3','3','1495007972');");
E_D("replace into `ld_hits` values('c-3-16','37','0','0','0','0','0','1494990970');");
E_D("replace into `ld_hits` values('c-3-17','38','0','0','0','0','0','1494990991');");
E_D("replace into `ld_hits` values('c-3-18','30','0','0','0','0','0','1495007207');");
E_D("replace into `ld_hits` values('c-3-19','31','0','0','0','0','0','1495008259');");
E_D("replace into `ld_hits` values('c-3-20','33','0','0','0','0','0','1495008739');");
E_D("replace into `ld_hits` values('c-3-21','32','0','0','0','0','0','1495008763');");
E_D("replace into `ld_hits` values('c-3-22','29','0','0','0','0','0','1495157579');");
E_D("replace into `ld_hits` values('c-3-23','9','15','1','1','15','15','1495719315');");
E_D("replace into `ld_hits` values('c-3-24','22','0','0','0','0','0','1495518263');");
E_D("replace into `ld_hits` values('c-3-25','22','0','0','0','0','0','1495518266');");
E_D("replace into `ld_hits` values('c-3-26','27','0','0','0','0','0','1495590954');");
E_D("replace into `ld_hits` values('c-1-11','85','123','0','123','123','123','1495721877');");
E_D("replace into `ld_hits` values('c-13-4','47','0','0','0','0','0','1495699536');");
E_D("replace into `ld_hits` values('c-3-27','27','0','0','0','0','0','1495707433');");
E_D("replace into `ld_hits` values('c-3-28','27','0','0','0','0','0','1495707446');");

require("../../inc/footer.php");
?>