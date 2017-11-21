<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_block_history`;");
E_C("CREATE TABLE `ld_block_history` (
  `id` int(10) NOT NULL auto_increment,
  `blockid` int(10) unsigned default '0',
  `data` text,
  `creat_at` int(10) unsigned default '0',
  `userid` mediumint(8) unsigned default '0',
  `username` char(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>