<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_datacall`;");
E_C("CREATE TABLE `ld_datacall` (
  `id` int(10) NOT NULL auto_increment,
  `name` char(40) default NULL,
  `dis_type` tinyint(1) unsigned default '0',
  `type` tinyint(1) default '0',
  `module` char(20) default NULL,
  `action` char(20) default NULL,
  `data` text,
  `template` text,
  `cache` mediumint(8) default NULL,
  `num` smallint(6) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>