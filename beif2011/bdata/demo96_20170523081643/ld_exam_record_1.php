<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_exam_record`;");
E_C("CREATE TABLE `ld_exam_record` (
  `id` int(8) NOT NULL auto_increment,
  `uid` int(5) NOT NULL,
  `knowsid` int(8) NOT NULL,
  `num` int(1) NOT NULL default '0' COMMENT '考试次数',
  `endtime` int(10) NOT NULL,
  `status` varchar(5) NOT NULL default '0',
  `courseid` int(8) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `starttime` int(10) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_record` values('1','3','19','0','1494644999','0','18','','0','');");
E_D("replace into `ld_exam_record` values('2','3','19','0','1494646543','1','18','1###2|4###2|3###1|2###4','0','');");
E_D("replace into `ld_exam_record` values('12','3','19','0','1494914726','1','18','3###3|88|88|88','0','123.118.213.248');");
E_D("replace into `ld_exam_record` values('13','3','19','0','1494914991','1','18','1###2|3###4|4###2|88','0','123.118.213.248');");
E_D("replace into `ld_exam_record` values('18','2','19','0','0','0','18','2###1|4###1|1###1|88','0','222.129.32.15');");
E_D("replace into `ld_exam_record` values('19','2','19','0','0','0','18','2###2|1###4|3###2|4###2','0','222.129.32.15');");
E_D("replace into `ld_exam_record` values('20','2','19','0','0','0','18','88|88|88|88','0','222.129.32.15');");
E_D("replace into `ld_exam_record` values('21','2','19','0','0','1','18','1###2|2###4|4###3|88','0','222.129.32.15');");
E_D("replace into `ld_exam_record` values('22','2','19','0','1495088083','4','18','4###4|2###2|3###3|1###2','0','222.129.32.15');");
E_D("replace into `ld_exam_record` values('24','3','19','0','1495417776','2','18','2###3|3###3|4###4|1###3','0','222.129.53.161');");
E_D("replace into `ld_exam_record` values('28','3','19','0','1495419908','3','18','2###3|1###2|4###3|7###1|3###3','0','222.129.53.161');");

require("../../inc/footer.php");
?>