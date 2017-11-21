<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_hdp_data`;");
E_C("CREATE TABLE `ld_hdp_data` (
  `id` mediumint(8) unsigned default '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL default '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL default '0',
  `allow_comment` tinyint(1) unsigned NOT NULL default '1',
  `relation` varchar(255) NOT NULL default '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_hdp_data` values('1','&nbsp;','0','','0','0','','0','1','');");
E_D("replace into `ld_hdp_data` values('2','&nbsp;','0','','0','0','','0','1','');");
E_D("replace into `ld_hdp_data` values('3','　','0','','0','0','','0','1','');");
E_D("replace into `ld_hdp_data` values('4','&nbsp;','0','','0','0','','0','1','');");

require("../../inc/footer.php");
?>