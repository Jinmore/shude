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
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `yesterdayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `dayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `weekviews` int(10) unsigned NOT NULL DEFAULT '0',
  `monthviews` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`hitsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_hits` values('c-13-1','24','0','0','0','0','0','1491012513');");
E_D("replace into `ld_hits` values('c-13-2','24','0','0','0','0','0','1491012557');");
E_D("replace into `ld_hits` values('c-3-8','29','0','0','0','0','0','1491028953');");
E_D("replace into `ld_hits` values('c-3-9','29','0','0','0','0','0','1491029097');");
E_D("replace into `ld_hits` values('c-3-10','29','0','0','0','0','0','1491029177');");
E_D("replace into `ld_hits` values('c-1-1','25','4','0','1','1','1','1493805812');");
E_D("replace into `ld_hits` values('c-1-2','25','22','1','1','1','1','1493805806');");
E_D("replace into `ld_hits` values('c-1-3','26','0','0','0','0','0','1491015640');");
E_D("replace into `ld_hits` values('c-1-4','26','1','0','1','1','1','1491040958');");
E_D("replace into `ld_hits` values('c-1-5','26','0','0','0','0','0','1491015730');");
E_D("replace into `ld_hits` values('c-1-6','26','0','0','0','0','0','1491015730');");
E_D("replace into `ld_hits` values('c-3-11','29','0','0','0','0','0','1491029252');");
E_D("replace into `ld_hits` values('c-3-12','19','2','0','2','2','2','1491037567');");
E_D("replace into `ld_hits` values('c-3-6','27','0','0','0','0','0','1491020303');");
E_D("replace into `ld_hits` values('c-3-7','27','0','0','0','0','0','1491024763');");
E_D("replace into `ld_hits` values('c-3-13','19','0','0','0','0','0','1491037702');");
E_D("replace into `ld_hits` values('c-1-7','13','11','1','4','5','11','1491465883');");
E_D("replace into `ld_hits` values('c-1-8','13','1','0','1','1','1','1491039650');");
E_D("replace into `ld_hits` values('c-1-9','13','0','0','0','0','0','1491038268');");
E_D("replace into `ld_hits` values('c-1-10','13','0','0','0','0','0','1491038268');");
E_D("replace into `ld_hits` values('c-3-14','22','0','0','0','0','0','1491371303');");

require("../../inc/footer.php");
?>