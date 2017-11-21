<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_block_priv`;");
E_C("CREATE TABLE `ld_block_priv` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `roleid` tinyint(3) unsigned default '0',
  `siteid` smallint(5) unsigned default '0',
  `blockid` int(10) unsigned default '0',
  PRIMARY KEY  (`id`),
  KEY `blockid` (`blockid`),
  KEY `roleid` (`roleid`,`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>