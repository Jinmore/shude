<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_position`;");
E_C("CREATE TABLE `ld_position` (
  `posid` smallint(5) unsigned NOT NULL auto_increment,
  `modelid` smallint(5) unsigned default '0',
  `catid` smallint(5) unsigned default '0',
  `name` char(30) NOT NULL default '',
  `maxnum` smallint(5) NOT NULL default '20',
  `extention` char(100) default NULL,
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `thumb` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`posid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ld_position` values('1','3','27','课程介绍视频','20','','0','1','');");

require("../../inc/footer.php");
?>