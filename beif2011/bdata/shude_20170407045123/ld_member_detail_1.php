<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_member_detail`;");
E_C("CREATE TABLE `ld_member_detail` (
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>