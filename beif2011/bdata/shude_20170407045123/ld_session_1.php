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
E_D("replace into `ld_session` values('0t9f5dftsgn3eg2bom2vakhso4','1','','1491532464','1','0','admin','index','public_session_life','code|s:0:\"\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"TqpyXF\";lock_screen|i:0;mobile|s:11:\"13831030124\";csms|i:2;username|s:9:\"张墨轩\";knowsid|i:20;courseid|s:2:\"18\";');");
E_D("replace into `ld_session` values('lg7spno78uv1l5cptkdm9323a5','0','','1491532591','0','0','member','AJAXindex','public_checkmobile','code|s:5:\"wwndm\";mobile|s:11:\"13831030124\";username|s:9:\"张墨轩\";');");
E_D("replace into `ld_session` values('l9pfuohjelfoddap302b5a1s47','1','','1491533374','1','0','admin','index','public_session_life','code|s:4:\"enr8\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"Wd6SVf\";lock_screen|i:0;');");

require("../../inc/footer.php");
?>