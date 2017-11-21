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
  `status` enum('-1','0','1') NOT NULL DEFAULT '-1' COMMENT '-1，到期/未开通 0 未通过 1已通过',
  PRIMARY KEY (`uid`,`courseid`,`chapterid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_chapter` values('1','18','19','1493707229','1510243200','0');");
E_D("replace into `ld_exam_chapter` values('1','18','20','1493719327','1493568000','-1');");
E_D("replace into `ld_exam_chapter` values('2','18','20','1493707289','1493913600','0');");
E_D("replace into `ld_exam_chapter` values('2','21','22','1493705262','1493654400','-1');");
E_D("replace into `ld_exam_chapter` values('3','18','19','1493965281','1494432000','0');");

require("../../inc/footer.php");
?>