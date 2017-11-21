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
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
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
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ld_news` values('1','25','0','北京树德管理咨询有限公司','','/uploadfile/2017/0401/20170401103420715.png','北京 管理咨询 有限公司','性价比高，对比国外的机器人教育品牌，课时费近乎便宜一半，更容易被家长所接受。课时费近乎便宜一半，更容易被家长所接受。','0','http://localhost/index.php?m=content&c=index&a=show&catid=25&id=1','0','99','1','0','wz010','1490927580','1491014951');");
E_D("replace into `ld_news` values('2','25','0','北京树德管理咨询有限公司','','/uploadfile/2017/0401/20170401103501501.png','北京 管理咨询 有限公司','色彩丰富和多样化的积木零件，可以搭建出炫酷的造型，从而激发孩子浓厚的学习兴趣并培养良好的动手能力和创意力。','0','http://localhost/index.php?m=content&c=index&a=show&catid=25&id=2','0','99','1','0','wz010','1491014076','1491014103');");
E_D("replace into `ld_news` values('3','26','0','校方回应小学性教育课本','','','对象 年级 学校','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','http://localhost/index.php?m=content&c=index&a=show&catid=26&id=3','0','99','1','0','wz010','1491015602','1491015640');");
E_D("replace into `ld_news` values('4','26','0','校方回应小学性教育课本','','','对象 年级 学校','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','http://localhost/index.php?m=content&c=index&a=show&catid=26&id=4','0','99','1','0','wz010','1491015602','1491015758');");
E_D("replace into `ld_news` values('5','26','0','校方回应小学性教育课本','','','对象 年级 学校','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','http://localhost/index.php?m=content&c=index&a=show&catid=26&id=5','0','99','1','0','wz010','1491015602','1491015768');");
E_D("replace into `ld_news` values('6','26','0','校方回应小学性教育课本','','','对象 年级 学校','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','http://localhost/index.php?m=content&c=index&a=show&catid=26&id=6','0','99','1','0','wz010','1491015602','1491015778');");
E_D("replace into `ld_news` values('7','13','0','员工在公司都会有自己明确的发展规划','','/uploadfile/2017/0401/20170401051726861.jpg','发展规划 员工 公司','北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内','0','http://localhost/index.php?m=content&c=index&a=show&catid=13&id=7','0','99','1','0','wz010','1491038211','1491038249');");
E_D("replace into `ld_news` values('8','13','0','员工在公司都会有自己明确的发展规划','','/uploadfile/2017/0401/20170401051726861.jpg','发展规划 员工 公司','北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内','0','http://localhost/index.php?m=content&c=index&a=show&catid=13&id=8','0','99','1','0','wz010','1491038211','1491039532');");
E_D("replace into `ld_news` values('9','13','0','员工在公司都会有自己明确的发展规划','','/uploadfile/2017/0401/20170401051726861.jpg','发展规划 员工 公司','北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内','0','/index.php?m=content&c=index&a=show&catid=13&id=7','0','99','1','1','wz010','1491038211','1491038286');");
E_D("replace into `ld_news` values('10','13','0','员工在公司都会有自己明确的发展规划','','/uploadfile/2017/0401/20170401051726861.jpg','发展规划 员工 公司','北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内','0','?m=content&c=index&a=show&catid=13&id=7','0','99','1','1','wz010','1491038211','1491038302');");

require("../../inc/footer.php");
?>