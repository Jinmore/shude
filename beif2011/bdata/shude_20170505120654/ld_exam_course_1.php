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
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL COMMENT '用户id',
  `inputtime` int(10) NOT NULL COMMENT 't添加时间',
  `endtime` int(10) NOT NULL COMMENT '到期时间',
  `courseid` int(8) NOT NULL COMMENT '课程id号',
  `addname` varchar(20) DEFAULT NULL,
  `status` enum('99','88') NOT NULL DEFAULT '99' COMMENT '99 未到期 88 到期',
  `currentid` int(11) NOT NULL DEFAULT '0' COMMENT '当前通过阶段',
  `classid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_course` values('1','1','1493696154','0','18','wz010','99','0','41');");

require("../../inc/footer.php");
?>