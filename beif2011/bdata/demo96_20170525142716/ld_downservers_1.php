<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_downservers`;");
E_C("CREATE TABLE `ld_downservers` (
  `id` mediumint(8) NOT NULL auto_increment,
  `sitename` varchar(100) default NULL,
  `siteurl` varchar(255) default NULL,
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>