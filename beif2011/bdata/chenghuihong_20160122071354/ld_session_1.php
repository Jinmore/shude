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
E_D("replace into `ld_session` values('lfokf932m7l7r1100ul6kh8ci1','1','127.0.0.1','1453443102','1','0','admin','index','public_menu_left','code|s:4:\"wyuf\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"lNtqsN\";lock_screen|i:0;');");

require("../../inc/footer.php");
?>