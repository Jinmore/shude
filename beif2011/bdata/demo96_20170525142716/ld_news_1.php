<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_news`;");
E_C("CREATE TABLE `ld_news` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL default '',
  `style` char(24) NOT NULL default '',
  `thumb` varchar(100) NOT NULL default '',
  `keywords` char(40) NOT NULL default '',
  `description` mediumtext NOT NULL,
  `posids` tinyint(1) unsigned NOT NULL default '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL default '0',
  `status` tinyint(2) unsigned NOT NULL default '1',
  `sysadd` tinyint(1) unsigned NOT NULL default '0',
  `islink` tinyint(1) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  `wapthumb` varchar(255) NOT NULL default '',
  `indexthumb` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ld_news` values('1','25','0','开课了！KI总裁流程设计管理“新解”纯干货倾囊分享！','','','，','5月17日下午14:00-16:00 KI树德教育总裁兼董事长受邀校宝学院参加网略在线直播课程！ 本次演讲主题为《招生中市场工作流程的设计》，其中   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=25&id=1','0','99','1','0','wz010','1490927580','1495701059','/uploadfile/2017/0525/20170525043055475.jpg','/uploadfile/2017/0525/20170525042143609.jpg');");
E_D("replace into `ld_news` values('2','25','0','KI机器人出新招，双双联合创业绩 虐死单身的“你”！','','','北京 管理咨询 有限公司','    4月初，当大家还在享受春天咋暖还寒的北方气候时，KI机器人又蠕蠕出洞了！一举签约了重庆优胜教育培训机构。双方就KI机器人正式入住重庆   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=25&id=2','0','99','1','0','wz010','1491014076','1495701031','/uploadfile/2017/0525/20170525043025350.jpg','/uploadfile/2017/0525/20170525041956230.jpg');");
E_D("replace into `ld_news` values('3','26','0','服务问题','','/uploadfile/2017/0519/20170519121732216.jpg','对象 年级 学校','      市场上企业往往重“售前” 轻“售后”','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=26&id=3','0','99','1','0','wz010','1491015602','1495618111','','');");
E_D("replace into `ld_news` values('4','26','0','销售问题','','/uploadfile/2017/0519/20170519121732216.jpg','','      销售人员能力难提高 流动性较大 ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=26&id=4','0','99','1','0','wz010','1491015602','1495617941','','');");
E_D("replace into `ld_news` values('5','26','0','市场问题','','/uploadfile/2017/0519/20170519121732216.jpg','对象 年级 学校','     市场竞争较激烈  投资与收效严重不平衡','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=26&id=5','0','99','1','0','wz010','1491015602','1495617902','','');");
E_D("replace into `ld_news` values('6','26','0','商品问题','','/uploadfile/2017/0519/20170519121732216.jpg','对象 年级 学校',' 产品存在硬伤 缺乏吸引力','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=26&id=6','0','99','1','0','wz010','1491015602','1495618038','','');");
E_D("replace into `ld_news` values('7','13','0','开课了！KI总裁流程设计管理“新解”纯干货倾囊分享！','','','','5月17日下午14:00-16:00 “KI树德教育”总裁兼董事长受邀校宝学院参加网略在线直播课程！','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=13&id=7','0','99','1','0','wz010','1491038211','1495696537','','');");
E_D("replace into `ld_news` values('8','13','0','KI机器人出新招，双双联合创业绩 虐死单身的“你”！','','','','4月初，当大家还在享受春天咋暖还寒的北方气候时，KI机器人又蠕蠕出洞了！一举签约了重庆优胜教育培训机构。','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=13&id=8','0','99','1','0','wz010','1491038211','1495696527','','');");
E_D("replace into `ld_news` values('9','13','0','珠联璧合 共创企业未来','','','发展规划 员工 公司','5月初，翰林轩教育咨询服务有限责任公司与我司在北京进行了合作洽谈，并达成合作协议。','0','/index.php?m=content&c=index&a=show&catid=13&id=7','0','99','1','1','wz010','1491038211','1495696515','','');");
E_D("replace into `ld_news` values('11','85','0','合作优势','','/uploadfile/2017/0525/20170525035332231.png','咨询培训','北京树德仁合管理咨询有限公司（简称树德），是一家专业致力于帮助全国中小型少儿教育培训机构快速发展的服务型公司。','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=85&id=11','0','99','1','0','wz010','1495681007','1495703711','/uploadfile/2017/0525/20170525044757767.png','');");
E_D("replace into `ld_news` values('10','13','0','拥有合作 拥抱成功','','','','5月初，金智立（北京）脑科学与教育中心与我司在北京进行了合作洽谈，并达成合作协议。','0','?m=content&c=index&a=show&catid=13&id=7','0','99','1','1','wz010','1491038211','1495696448','','');");

require("../../inc/footer.php");
?>