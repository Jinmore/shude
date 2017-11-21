<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_member_menu`;");
E_C("CREATE TABLE `ld_member_menu` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `name` char(40) NOT NULL default '',
  `parentid` smallint(6) NOT NULL default '0',
  `m` char(20) NOT NULL default '',
  `c` char(20) NOT NULL default '',
  `a` char(20) NOT NULL default '',
  `data` char(100) NOT NULL default '',
  `listorder` smallint(6) unsigned NOT NULL default '0',
  `display` enum('1','0') NOT NULL default '1',
  `isurl` enum('1','0') NOT NULL default '0',
  `url` char(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `listorder` (`listorder`),
  KEY `parentid` (`parentid`),
  KEY `module` (`m`,`c`,`a`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ld_member_menu` values('1','member_init','0','member','index','init','t=0','0','1','','');");
E_D("replace into `ld_member_menu` values('2','account_manage','0','member','index','account_manage','t=1','0','1','','');");
E_D("replace into `ld_member_menu` values('3','favorite','0','member','index','favorite','t=2','0','1','','');");

require("../../inc/footer.php");
?>