<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_admin`;");
E_C("CREATE TABLE `ld_admin` (
  `userid` mediumint(6) unsigned NOT NULL auto_increment,
  `username` varchar(20) default NULL,
  `password` varchar(32) default NULL,
  `roleid` smallint(5) default '0',
  `encrypt` varchar(6) default NULL,
  `lastloginip` varchar(15) default NULL,
  `lastlogintime` int(10) unsigned default '0',
  `email` varchar(40) default NULL,
  `realname` varchar(50) NOT NULL default '',
  `card` varchar(255) NOT NULL,
  `lang` varchar(6) NOT NULL,
  PRIMARY KEY  (`userid`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ld_admin` values('1','wz010','9d39aabb13e17ed36a2e903d9b0b6441','1','6mMvrV','114.245.36.119','1495721801','admin@wz010.net','','','');");
E_D("replace into `ld_admin` values('2','admin','dc467eb5fed9d141d65f7a8a97954865','1','59x2aX','114.246.136.231','1495714142','admin@admin.com','管理员','','');");

require("../../inc/footer.php");
?>