<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_queue`;");
E_C("CREATE TABLE `ld_queue` (
  `id` int(10) NOT NULL auto_increment,
  `type` char(5) default NULL,
  `siteid` smallint(5) unsigned default '0',
  `path` varchar(100) default NULL,
  `status1` tinyint(1) default '0',
  `status2` tinyint(1) default '0',
  `status3` tinyint(1) default '0',
  `status4` tinyint(1) default '0',
  `times` int(10) unsigned default '0',
  PRIMARY KEY  (`id`),
  KEY `siteid` (`siteid`),
  KEY `times` (`times`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>