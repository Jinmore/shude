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
  `id` int(10) unsigned NOT NULL auto_increment,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `keyword` char(100) NOT NULL,
  `pinyin` char(100) NOT NULL,
  `videonum` int(11) NOT NULL default '0',
  `searchnums` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `keyword` (`keyword`,`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `ld_keyword` values('1','1','轮播1','lunbo1','1','0');");
E_D("replace into `ld_keyword` values('2','1','轮播2','lunbo2','2','0');");
E_D("replace into `ld_keyword` values('3','1','课程','kecheng','30','0');");
E_D("replace into `ld_keyword` values('4','1','北京','beijing','10','0');");
E_D("replace into `ld_keyword` values('5','1','管理咨询','guanlizixun','10','0');");
E_D("replace into `ld_keyword` values('6','1','有限公司','youxiangongsi','10','0');");
E_D("replace into `ld_keyword` values('7','1','对象','duixiang','8','0');");
E_D("replace into `ld_keyword` values('8','1','年级','nianji','8','0');");
E_D("replace into `ld_keyword` values('9','1','学校','xuexiao','8','0');");
E_D("replace into `ld_keyword` values('10','1','进阶','jinjie','5','0');");
E_D("replace into `ld_keyword` values('11','1','机器人','jiqiren','20','0');");
E_D("replace into `ld_keyword` values('12','1','阶段','jieduan','3','0');");
E_D("replace into `ld_keyword` values('13','1','乐高','legao','3','0');");
E_D("replace into `ld_keyword` values('14','1','体系','tixi','1','0');");
E_D("replace into `ld_keyword` values('15','1','优势','youshi','9','0');");
E_D("replace into `ld_keyword` values('16','1','视频','shipin','2','0');");
E_D("replace into `ld_keyword` values('17','1','1','1','6','0');");
E_D("replace into `ld_keyword` values('18','1','2','2','2','0');");
E_D("replace into `ld_keyword` values('19','1','发展规划','fazhanguihua','5','0');");
E_D("replace into `ld_keyword` values('20','1','员工','yuangong','5','0');");
E_D("replace into `ld_keyword` values('21','1','公司','gongsi','5','0');");
E_D("replace into `ld_keyword` values('22','1','国家地理','guojiadili','1','0');");
E_D("replace into `ld_keyword` values('23','1','魔方','mofang','5','0');");
E_D("replace into `ld_keyword` values('24','1','3D打印课','3ddayinke','3','0');");
E_D("replace into `ld_keyword` values('25','1','无人机','wurenji','3','0');");
E_D("replace into `ld_keyword` values('26','1','航模','hangmo','3','0');");
E_D("replace into `ld_keyword` values('27','1','','','3','0');");
E_D("replace into `ld_keyword` values('28','1','内容','neirong','1','0');");
E_D("replace into `ld_keyword` values('29','1','二阶','erjie','2','0');");

require("../../inc/footer.php");
?>