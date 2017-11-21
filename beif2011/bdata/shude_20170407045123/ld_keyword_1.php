<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_keyword`;");
E_C("CREATE TABLE `ld_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyword` char(100) NOT NULL,
  `pinyin` char(100) NOT NULL,
  `videonum` int(11) NOT NULL DEFAULT '0',
  `searchnums` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `keyword` (`keyword`,`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ld_keyword` values('1','1','轮播1','lunbo1','1','0');");
E_D("replace into `ld_keyword` values('2','1','轮播2','lunbo2','1','0');");
E_D("replace into `ld_keyword` values('3','1','课程','kecheng','15','0');");
E_D("replace into `ld_keyword` values('4','1','北京','beijing','3','0');");
E_D("replace into `ld_keyword` values('5','1','管理咨询','guanlizixun','3','0');");
E_D("replace into `ld_keyword` values('6','1','有限公司','youxiangongsi','3','0');");
E_D("replace into `ld_keyword` values('7','1','对象','duixiang','4','0');");
E_D("replace into `ld_keyword` values('8','1','年级','nianji','4','0');");
E_D("replace into `ld_keyword` values('9','1','学校','xuexiao','4','0');");
E_D("replace into `ld_keyword` values('10','1','进阶','jinjie','5','0');");
E_D("replace into `ld_keyword` values('11','1','机器人','jiqiren','7','0');");
E_D("replace into `ld_keyword` values('12','1','阶段','jieduan','1','0');");
E_D("replace into `ld_keyword` values('13','1','乐高','legao','1','0');");
E_D("replace into `ld_keyword` values('14','1','体系','tixi','1','0');");
E_D("replace into `ld_keyword` values('15','1','优势','youshi','1','0');");
E_D("replace into `ld_keyword` values('16','1','视频','shipin','1','0');");
E_D("replace into `ld_keyword` values('17','1','1','1','2','0');");
E_D("replace into `ld_keyword` values('18','1','2','2','1','0');");
E_D("replace into `ld_keyword` values('19','1','发展规划','fazhanguihua','5','0');");
E_D("replace into `ld_keyword` values('20','1','员工','yuangong','5','0');");
E_D("replace into `ld_keyword` values('21','1','公司','gongsi','5','0');");
E_D("replace into `ld_keyword` values('22','1','国家地理','guojiadili','1','0');");

require("../../inc/footer.php");
?>