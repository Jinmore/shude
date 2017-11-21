<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_sso_members`;");
E_C("CREATE TABLE `ld_sso_members` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `random` char(8) NOT NULL DEFAULT '',
  `email` char(32) NOT NULL DEFAULT '',
  `regip` char(15) NOT NULL DEFAULT '',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` char(15) NOT NULL DEFAULT '0',
  `lastdate` int(10) unsigned NOT NULL DEFAULT '0',
  `appname` char(15) NOT NULL,
  `type` enum('app','connect') DEFAULT NULL,
  `avatar` tinyint(1) NOT NULL DEFAULT '0',
  `ucuserid` mediumint(8) unsigned DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `ucuserid` (`ucuserid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ld_sso_members` values('1','张墨轩','0de15b0ebc75d2a2436dad6874c4a43c','hNBtkC','2984398051@qq.com','','1490861672','127.0.0.1','1493713886','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('2','晴天','e45f0428be9be5c697c144ef27832ca8','aMprSf','12313@qq.com','61.149.194.92','1492476965','121.40.22.203','1492652761','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('3','xbbs','6022455bcb39d4ef0f239a10e54edb89','gxWYyu','2984398052@qq.com','','1493773777','127.0.0.1','1493971967','phpcms v9','app','0','0');");

require("../../inc/footer.php");
?>