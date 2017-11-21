<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_picture`;");
E_C("CREATE TABLE `ld_picture` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` char(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `posids` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `sysadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `spurl` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `videourl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ld_picture` values('8','29','0','乐高NXT搭桥机器人 A阶段','','/uploadfile/2017/0401/20170401024222879.jpg','机器人 阶段 乐高','我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等   ','0','http://localhost/index.php?m=content&c=index&a=show&catid=29&id=8','0','99','1','0','wz010','1491028912','1491028953','0','');");
E_D("replace into `ld_picture` values('9','29','0','课程体系','','','体系 课程','搭建知识点编程一阶段上一阶段下二阶段上二阶段下三阶段上三阶段下1:1等比例分步搭建图每步1-2块积木，总体15-30块积木1:1等比例分步搭建图   ','0','http://localhost/index.php?m=content&c=index&a=show&catid=29&id=9','0','99','1','0','wz010','1491029051','1491029097','0','');");
E_D("replace into `ld_picture` values('10','29','0','课程优势','','/uploadfile/2017/0401/20170401014400317.jpg','优势 课程','','0','http://localhost/index.php?m=content&c=index&a=show&catid=29&id=10','0','99','1','0','wz010','1491029161','1491029177','0','');");
E_D("replace into `ld_picture` values('11','29','0','课程视频','','','课程 视频','课程介绍的视频请选择相关','0','http://localhost/index.php?m=content&c=index&a=show&catid=29&id=11','0','99','1','0','wz010','1491029216','1491029252','0','');");
E_D("replace into `ld_picture` values('12','19','0','1','','','1','简单的介绍信息','0','http://localhost/index.php?m=content&c=index&a=show&catid=19&id=12','0','99','1','0','wz010','1491035661','1491036819','0','video/rz.mp4');");
E_D("replace into `ld_picture` values('13','19','0','2','','','2','第二季课的内容','0','http://localhost/index.php?m=content&c=index&a=show&catid=19&id=13','0','99','1','0','wz010','1491037666','1491037702','0','video/rz.mp4');");
E_D("replace into `ld_picture` values('14','22','0','国家地理1','','','国家地理','国家的啊','0','http://localhost/index.php?m=content&c=index&a=show&catid=22&id=14','0','99','1','0','wz010','1491371262','1491371303','0','video/rz.mp4');");
E_D("replace into `ld_picture` values('6','27','0','搭桥机器人','','/uploadfile/2017/0401/20170401121845285.jpg','机器人','大乔机器人','1','http://localhost/index.php?m=content&c=index&a=show&catid=27&id=6','0','99','1','0','wz010','1491020218','1491029515','0','http://mp4.28mtv.com:9090/mp41/55386-筷子兄弟-小水果[68mtv.com].mp4');");
E_D("replace into `ld_picture` values('7','27','0','大机器人2','','/uploadfile/2017/0401/20170401121845285.jpg','机器人','','1','http://localhost/index.php?m=content&c=index&a=show&catid=27&id=7','0','99','1','0','wz010','1491024747','1491024777','0','');");

require("../../inc/footer.php");
?>