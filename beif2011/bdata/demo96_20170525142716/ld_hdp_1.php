<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_hdp`;");
E_C("CREATE TABLE `ld_hdp` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL default '',
  `style` char(24) NOT NULL default '',
  `thumb` char(100) NOT NULL default '',
  `keywords` char(40) NOT NULL default '',
  `description` char(255) NOT NULL default '',
  `posids` tinyint(1) unsigned NOT NULL default '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL default '0',
  `status` tinyint(2) unsigned NOT NULL default '1',
  `sysadd` tinyint(1) unsigned NOT NULL default '0',
  `islink` int(10) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ld_hdp` values('1','24','0','轮播1','','/uploadfile/2017/0401/20170401100826990.jpg','轮播1','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=24&id=1','2','99','1','0','wz010','1491012476','1491012513');");
E_D("replace into `ld_hdp` values('2','24','0','轮播2','','/uploadfile/2017/0518/20170518123033345.jpg','轮播2','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=24&id=2','1','99','1','0','wz010','1491012545','1495081896');");
E_D("replace into `ld_hdp` values('3','47','0','1','','/uploadfile/2017/0513/20170513091239619.jpg','1','　','0','/','2','99','1','1','wz010','1494637917','1494637968');");
E_D("replace into `ld_hdp` values('4','47','0','2','','/uploadfile/2017/0525/20170525040532808.jpg','2','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=47&id=4','1','99','1','0','admin','1495699509','1495699536');");

require("../../inc/footer.php");
?>