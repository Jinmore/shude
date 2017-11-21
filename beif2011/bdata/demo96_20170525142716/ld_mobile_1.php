<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_mobile`;");
E_C("CREATE TABLE `ld_mobile` (
  `siteid` smallint(5) unsigned NOT NULL default '1',
  `sitename` varchar(100) NOT NULL,
  `logo` varchar(100) default NULL,
  `domain` varchar(100) default NULL,
  `status` tinyint(2) default NULL,
  `keywords` varchar(100) default NULL,
  `description` varchar(200) default NULL,
  PRIMARY KEY  (`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_mobile` values('1','树德平台','/uploadfile/2017/0511/20170511021922703.png','','1','树德平台','树德平台|智能教育');");

require("../../inc/footer.php");
?>