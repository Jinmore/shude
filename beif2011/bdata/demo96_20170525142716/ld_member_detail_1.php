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
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `idcard` varchar(255) NOT NULL default '',
  `jigou` varchar(255) NOT NULL default '',
  `zw` varchar(255) NOT NULL default '',
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_member_detail` values('1','','','');");
E_D("replace into `ld_member_detail` values('3','130203199105051657','北京龙鼎腾信','注册医师');");
E_D("replace into `ld_member_detail` values('2','110221199001010000','龙鼎','测试');");

require("../../inc/footer.php");
?>