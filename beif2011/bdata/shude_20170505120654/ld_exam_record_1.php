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
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `knowsid` int(8) NOT NULL,
  `num` int(1) NOT NULL DEFAULT '0' COMMENT '考试次数',
  `endtime` int(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `courseid` int(8) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `starttime` int(10) NOT NULL,
  `ip` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>