<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_sso_admin`;");
E_C("CREATE TABLE `ld_sso_admin` (
  `id` smallint(6) NOT NULL auto_increment,
  `username` char(20) NOT NULL,
  `password` char(32) NOT NULL,
  `encrypt` char(6) default NULL,
  `issuper` tinyint(1) default '0',
  `lastlogin` int(10) default NULL,
  `ip` char(15) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ld_sso_admin` values('1','wz010','3ea26a2192906ed601a94bb81872a113','xWfBVe','1','1495520955','111.196.81.71');");

require("../../inc/footer.php");
?>