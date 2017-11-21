<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_block`;");
E_C("CREATE TABLE `ld_block` (
  `id` int(10) NOT NULL auto_increment,
  `siteid` smallint(5) unsigned default '0',
  `name` char(50) default NULL,
  `pos` char(30) default NULL,
  `type` tinyint(1) default '0',
  `data` text,
  `template` text,
  PRIMARY KEY  (`id`),
  KEY `pos` (`pos`),
  KEY `type` (`type`),
  KEY `siteid` (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>