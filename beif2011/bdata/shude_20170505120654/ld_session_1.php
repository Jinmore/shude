<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_session`;");
E_C("CREATE TABLE `ld_session` (
  `sessionid` char(32) NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `roleid` tinyint(3) unsigned DEFAULT '0',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `m` char(20) NOT NULL,
  `c` char(20) NOT NULL,
  `a` char(20) NOT NULL,
  `data` char(255) NOT NULL,
  PRIMARY KEY (`sessionid`),
  KEY `lastvisit` (`lastvisit`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ld_session` values('5m2741qce09nkht183d0am4eh2','1','','1493978722','1','0','admin','index','public_session_life','mobile|s:11:\"18000180012\";code|s:4:\"2ech\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"L2WWBP\";lock_screen|i:0;knowsid|i:19;courseid|s:2:\"18\";timesamp|s:32:\"40b56c2f530ce6c93893dfdadfc6d1a8\";');");

require("../../inc/footer.php");
?>