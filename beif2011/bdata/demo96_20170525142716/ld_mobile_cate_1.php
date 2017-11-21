<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_mobile_cate`;");
E_C("CREATE TABLE `ld_mobile_cate` (
  `catid` smallint(5) unsigned NOT NULL,
  `parentid` smallint(5) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL default '0',
  `type` tinyint(1) unsigned NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_mobile_cate` values('4','2','产品展示','1','2','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=4&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('7','5','比赛报名','1','7','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=7&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('11','10','公司介绍','1','11','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=11&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('12','10','企业文化','1','12','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=12&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('15','14','联系我们 ','1','17','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=15&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('16','14','加盟留言','1','15','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=16&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('17','14','诚聘英才','1','16','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=17&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('43','7','FLL世界杯比赛','1','43','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=43&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('44','7','FRC世界杯挑战赛','1','44','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=44&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('45','7','FTC世界杯比赛','1','45','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=45&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('46','7','JR.FLL世界杯比赛','1','46','1','http://demo96.dfwlshy.com/index.php?m=mobile&a=page&catid=46&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('1','0','课程支持','1','1','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=1&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('2','0','合作说明','1','2','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=2&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('5','0','会员服务','1','5','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=5&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('6','5','课程学习','1','6','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=6&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('9','5','VIP商学院','1','9','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=9&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('10','0','企业概览','1','10','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=10&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('13','0','企业动态','1','13','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=13&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('14','0','联系我们','1','14','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=14&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('18','41','初级课程','1','1','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=18&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('21','41','中级课程','1','3','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=21&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('22','21','第一阶段','1','22','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=22&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('23','41','高级课程','1','5','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=23&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('30','34','中级课程','1','3','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=30&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('29','34','初级课程','1','1','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=29&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('31','34','高级课程','1','5','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=31&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('32','34','拓展课程','1','4','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=32&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('33','34','进阶课程','1','2','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=33&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('34','1','机器人系列','1','34','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=34&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('36','1','创客系列','1','36','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=36&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('37','36','3D打印课','1','37','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=37&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('38','36','无人级航模课程','1','38','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=38&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('39','36','VR课程','1','39','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=39&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('40','36','AR课程','1','40','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=40&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('41','6','机器人系列','1','41','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=41&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('42','6','创客系列','1','42','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=42&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('83','1','虚拟系列','1','83','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=83&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('84','41','拓展课程','1','4','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=84&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('85','2','合作内容','1','1','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=85&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('49','41','进级课程','1','2','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=49&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('50','21','第二阶段','1','50','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=50&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('74','18',' KI初级课程一阶段上','1','74','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=74&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('73','18','KI初级课程预热课','1','73','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=73&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('72','18',' KI初级课程招生培训','1','72','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=72&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('76','18','KI初级课程一阶段下','1','76','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=76&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('77','18','KI初级课程二阶段上','1','77','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=77&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('78','18','KI初级课程二阶段下','1','78','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=78&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('80','18',' KI初级课程三阶段上','1','80','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=80&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('81','18',' KI初级课程三阶段下','1','81','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=81&siteid=1','1');");
E_D("replace into `ld_mobile_cate` values('88','6','虚拟系列','1','88','0','http://demo96.dfwlshy.com/index.php?m=mobile&a=lists&catid=88&siteid=1','1');");

require("../../inc/footer.php");
?>