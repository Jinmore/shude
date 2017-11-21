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
E_D("replace into `ld_session` values('m8fkpc3a24tf65kp380hdpqbm5','2','114.241.25.209','1495527372','1','0','admin','index','public_session_life','code|s:4:\"ywg5\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"B5Nupk\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('217dvgj40iacjgm5o7lcooj7p1','2','111.196.81.71','1495527305','1','0','admin','category','init','code|s:0:\"\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"OXw8SO\";lock_screen|i:0;mobile|s:11:\"18811485028\";csms|i:3;');");
E_D("replace into `ld_session` values('83v72e56tlmn6smu22p675ut74','2','114.241.25.209','1495527391','1','0','admin','index','public_session_life','code|s:0:\"\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"IVmnhG\";lock_screen|i:0;mobile|s:11:\"18811485028\";csms|i:4;');");
E_D("replace into `ld_session` values('nhu8710f834bpokss3okpv44h4','2','114.241.25.209','1495527400','1','0','admin','index','public_session_life','code|s:4:\"ypph\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"ESoGSi\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('coml00ml7a4b7bqdv964s43sr5','2','114.241.25.209','1495527325','1','0','admin','index','public_session_life','code|s:4:\"mz2r\";userid|s:1:\"2\";roleid|s:1:\"1\";pc_hash|s:6:\"twPy80\";lock_screen|i:0;');");
E_D("replace into `ld_session` values('acihbanvblgeqjkf1cbd9889u1','1','111.196.81.71','1495527375','1','0','admin','index','public_session_life','code|s:4:\"57gs\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"iGp0CI\";lock_screen|i:0;mobile|s:11:\"18811485028\";csms|i:2;');");

require("../../inc/footer.php");
?>