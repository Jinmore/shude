<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_poster_201406`;");
E_C("CREATE TABLE `ld_poster_201406` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` smallint(5) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `spaceid` smallint(5) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `area` char(40) NOT NULL,
  `ip` char(15) NOT NULL,
  `referer` char(120) NOT NULL,
  `clicktime` int(10) unsigned NOT NULL default '0',
  `type` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`,`type`,`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>