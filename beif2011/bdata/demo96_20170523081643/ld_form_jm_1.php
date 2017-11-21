<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_form_jm`;");
E_C("CREATE TABLE `ld_form_jm` (
  `dataid` mediumint(8) unsigned NOT NULL auto_increment,
  `userid` mediumint(8) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `datetime` int(10) unsigned NOT NULL,
  `ip` char(15) NOT NULL,
  `title` varchar(255) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `tel` varchar(255) NOT NULL default '',
  `content` mediumtext NOT NULL,
  PRIMARY KEY  (`dataid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ld_form_jm` values('1','3','xbbs','1495008819','61.149.199.127','我要加盟','木易','1888888888','11');");
E_D("replace into `ld_form_jm` values('2','0','','1495072781','222.129.32.15','威风','威风','1','p[qwkfpqwkjfpqwkfpqwkfpqwjfw文件佛牌围巾富婆文件 访贫问苦肥胖纹OK访贫问苦品牌未开发票我可 ');");
E_D("replace into `ld_form_jm` values('3','0','','1495074715','222.129.32.15','前雾灯','我去','18211080957','');");

require("../../inc/footer.php");
?>