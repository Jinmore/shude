<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_exam_chapter`;");
E_C("CREATE TABLE `ld_exam_chapter` (
  `uid` int(8) NOT NULL COMMENT '会员id',
  `courseid` int(8) NOT NULL,
  `chapterid` int(8) NOT NULL,
  `creattime` int(10) NOT NULL COMMENT '添加时间',
  `endtime` int(10) NOT NULL COMMENT '到期时间',
  `status` enum('-1','0','1') NOT NULL default '-1' COMMENT '-1，到期/未开通 0 未通过 1已通过',
  PRIMARY KEY  (`uid`,`courseid`,`chapterid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_chapter` values('2','18','19','1495012023','1495123200','1');");
E_D("replace into `ld_exam_chapter` values('2','18','20','1495011636','1500480000','0');");
E_D("replace into `ld_exam_chapter` values('2','21','22','1495088293','1495728000','-1');");
E_D("replace into `ld_exam_chapter` values('3','18','19','1494225139','1495468800','-1');");
E_D("replace into `ld_exam_chapter` values('3','18','20','1494225157','0','-1');");
E_D("replace into `ld_exam_chapter` values('4','18','19','1495173684','1499356800','0');");
E_D("replace into `ld_exam_chapter` values('4','18','20','1495173706','0','-1');");
E_D("replace into `ld_exam_chapter` values('5','18','19','1495431675','1502812800','0');");
E_D("replace into `ld_exam_chapter` values('5','18','20','1495431751','1496160000','0');");
E_D("replace into `ld_exam_chapter` values('6','18','19','1495521499','1546531200','0');");
E_D("replace into `ld_exam_chapter` values('8','18','19','1495521802','1559145600','0');");
E_D("replace into `ld_exam_chapter` values('8','18','57','1495523719','1515081600','0');");
E_D("replace into `ld_exam_chapter` values('8','18','58','1495523734','1559145600','0');");

require("../../inc/footer.php");
?>