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
E_D("replace into `ld_hits` values('c-1-1','25','14','0','5','5','11','1495426642');");
E_D("replace into `ld_hits` values('c-1-2','25','52','1','14','14','31','1495447247');");
E_D("replace into `ld_hits` values('c-1-3','26','10','2','5','8','10','1495207591');");
E_D("replace into `ld_hits` values('c-1-4','26','14','2','8','10','13','1495207596');");
E_D("replace into `ld_hits` values('c-1-5','26','17','0','5','5','17','1495420968');");
E_D("replace into `ld_hits` values('c-1-6','26','12','0','10','11','12','1495207556');");
E_D("replace into `ld_hits` values('c-3-11','29','0','0','0','0','0','1491029252');");
E_D("replace into `ld_hits` values('c-3-12','19','2','0','2','2','2','1491037567');");
E_D("replace into `ld_hits` values('c-3-6','27','6','0','5','5','6','1495007168');");
E_D("replace into `ld_hits` values('c-3-7','27','2','0','2','2','2','1495007120');");
E_D("replace into `ld_hits` values('c-3-13','19','0','0','0','0','0','1491037702');");
E_D("replace into `ld_hits` values('c-1-7','13','63','12','7','19','52','1495504632');");
E_D("replace into `ld_hits` values('c-1-8','13','8','3','2','5','7','1495174173');");
E_D("replace into `ld_hits` values('c-1-9','13','4','0','1','1','4','1495075736');");
E_D("replace into `ld_hits` values('c-1-10','13','3','0','3','3','3','1494496619');");
E_D("replace into `ld_hits` values('c-3-14','22','0','0','0','0','0','1491371303');");
E_D("replace into `ld_hits` values('c-3-15','27','3','0','3','3','3','1495007972');");
E_D("replace into `ld_hits` values('c-3-16','37','0','0','0','0','0','1494990970');");
E_D("replace into `ld_hits` values('c-3-17','38','0','0','0','0','0','1494990991');");
E_D("replace into `ld_hits` values('c-3-18','30','0','0','0','0','0','1495007207');");
E_D("replace into `ld_hits` values('c-3-19','31','0','0','0','0','0','1495008259');");
E_D("replace into `ld_hits` values('c-3-20','33','0','0','0','0','0','1495008739');");
E_D("replace into `ld_hits` values('c-3-21','32','0','0','0','0','0','1495008763');");
E_D("replace into `ld_hits` values('c-3-22','29','0','0','0','0','0','1495157579');");
E_D("replace into `ld_hits` values('c-3-23','9','13','0','13','13','13','1495504328');");
E_D("replace into `ld_hits` values('c-3-24','22','0','0','0','0','0','1495518263');");
E_D("replace into `ld_hits` values('c-3-25','22','0','0','0','0','0','1495518266');");

require("../../inc/footer.php");
?>