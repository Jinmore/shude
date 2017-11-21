<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_position_data`;");
E_C("CREATE TABLE `ld_position_data` (
  `id` mediumint(8) unsigned NOT NULL default '0',
  `catid` smallint(5) unsigned NOT NULL default '0',
  `posid` smallint(5) unsigned NOT NULL default '0',
  `module` char(20) default NULL,
  `modelid` smallint(6) unsigned default '0',
  `thumb` tinyint(1) NOT NULL default '0',
  `data` mediumtext,
  `siteid` smallint(5) unsigned NOT NULL default '1',
  `listorder` mediumint(8) default '0',
  `expiration` int(10) NOT NULL,
  `extention` char(30) default NULL,
  `synedit` tinyint(1) default '0',
  KEY `posid` (`posid`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_position_data` values('6','27','1','content','3','1','array (\n  ''title'' => ''搭桥机器人'',\n  ''description'' => ''大乔机器人'',\n  ''videourl'' => ''http://demo96.dfwlshy.com/video/480320.mp4'',\n  ''thumb'' => ''/uploadfile/2017/0401/20170401121845285.jpg'',\n  ''inputtime'' => ''1491020218'',\n  ''style'' => '''',\n)','1','0','0','','0');");
E_D("replace into `ld_position_data` values('7','27','1','content','3','1','array (\n  ''title'' => ''大机器人'',\n  ''videourl'' => ''http://demo96.dfwlshy.com/video/480320.mp4'',\n  ''thumb'' => ''/uploadfile/2017/0401/20170401121845285.jpg'',\n  ''inputtime'' => ''1491024747'',\n  ''style'' => '''',\n)','1','0','0','','0');");
E_D("replace into `ld_position_data` values('15','27','1','content','3','1','array (\n  ''title'' => ''解魔方机器人'',\n  ''videourl'' => ''http://demo96.dfwlshy.com/video/480320.mp4'',\n  ''thumb'' => ''/uploadfile/2017/0519/20170519105005899.jpg'',\n  ''inputtime'' => ''1494990355'',\n  ''style'' => '''',\n)','1','0','0',NULL,'0');");

require("../../inc/footer.php");
?>