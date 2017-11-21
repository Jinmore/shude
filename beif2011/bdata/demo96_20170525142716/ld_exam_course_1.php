<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_exam_course`;");
E_C("CREATE TABLE `ld_exam_course` (
  `id` int(8) NOT NULL auto_increment,
  `uid` int(8) NOT NULL COMMENT '用户id',
  `inputtime` int(10) NOT NULL COMMENT 't添加时间',
  `endtime` int(10) NOT NULL COMMENT '到期时间',
  `courseid` int(8) NOT NULL COMMENT '课程id号',
  `addname` varchar(20) default NULL,
  `status` enum('99','88') NOT NULL default '99' COMMENT '99 未到期 88 到期',
  `currentid` int(11) NOT NULL default '0' COMMENT '当前通过阶段',
  `classid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_course` values('1','3','1494225130','0','18','wz010','99','0','41');");
E_D("replace into `ld_exam_course` values('2','3','1494228683','0','21','wz010','99','0','41');");
E_D("replace into `ld_exam_course` values('3','2','1495010464','0','18','admin','99','0','41');");
E_D("replace into `ld_exam_course` values('4','2','1495088263','0','21','wz010','99','0','41');");
E_D("replace into `ld_exam_course` values('5','4','1495173671','0','18','admin','99','0','41');");
E_D("replace into `ld_exam_course` values('6','5','1495431510','0','18','admin','99','0','41');");
E_D("replace into `ld_exam_course` values('7','6','1495521441','0','18','admin','99','0','41');");
E_D("replace into `ld_exam_course` values('8','8','1495521632','0','18','admin','99','3','41');");
E_D("replace into `ld_exam_course` values('9','9','1495531545','0','18','admin','99','0','41');");
E_D("replace into `ld_exam_course` values('10','10','1495533120','0','18','admin','99','0','41');");

require("../../inc/footer.php");
?>