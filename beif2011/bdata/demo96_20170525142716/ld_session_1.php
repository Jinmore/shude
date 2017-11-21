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
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL default '0',
  `roleid` tinyint(3) unsigned default '0',
  `groupid` tinyint(3) unsigned NOT NULL default '0',
  `m` char(20) NOT NULL,
  `c` char(20) NOT NULL,
  `a` char(20) NOT NULL,
  `data` char(255) NOT NULL,
  PRIMARY KEY  (`sessionid`),
  KEY `lastvisit` (`lastvisit`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ld_session` values('uqbudqkamgnsajbv8a83sugab0','2','114.245.36.119','1495722386','1','0','admin','index','public_session_life','code|s:4:\"cnmr\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"ssnU1h\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('82lacdnmdr008i1n6h775d96s3','2','114.245.36.119','1495721393','1','0','admin','index','public_session_life','code|s:4:\"swzc\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"92EflV\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('712m09tm3rjra5sfa1ual39v54','0','95.221.48.41','1495721298','0','0','member','index','login','');");
E_D("replace into `ld_session` values('hcecmvs3tlllakre8nju763s55','2','114.246.136.231','1495722406','1','0','admin','index','public_session_life','code|s:4:\"kdfp\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"EXOq5R\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('7p7rivaetmbr8aqte81b3o66u7','1','114.245.36.119','1495722444','1','0','admin','index','public_session_life','code|s:4:\"c8vf\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"wqWuaq\";lock_screen|i:0;');");

require("../../inc/footer.php");
?>