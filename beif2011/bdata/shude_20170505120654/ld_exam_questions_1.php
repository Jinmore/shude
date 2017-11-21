<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_exam_questions`;");
E_C("CREATE TABLE `ld_exam_questions` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL COMMENT '问题',
  `type` enum('2','1') NOT NULL DEFAULT '1' COMMENT '题目类型 1 单选，2多选',
  `selecte` tinytext NOT NULL COMMENT '选项',
  `correct` varchar(5) NOT NULL COMMENT '正确选项',
  `class` int(8) NOT NULL COMMENT '课程系列',
  `inputtime` int(10) NOT NULL,
  `knowsid` int(50) NOT NULL COMMENT '阶段id/ 如：初级下的第一阶段',
  `courseid` int(11) NOT NULL COMMENT '课程如：初级/中级/高级',
  `status` tinyint(1) NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_questions` values('1','题目：门诊就诊顺序为先','1','array (\n  0 => ''A:．挂号'',\n  1 => ''B:．预检分诊'',\n  2 => ''C:．测体温'',\n  3 => ''D:．提供检验单'',\n)','B','41','1493692036','19','18','99');");
E_D("replace into `ld_exam_questions` values('2','题目：燃烧法灭菌，不能用于','1','array (\n  0 => ''A:．弯盘'',\n  1 => ''B:．组织剪刀'',\n  2 => ''C:．带致病菌又无保留价值的纸张'',\n  3 => ''D:．铜绿假单孢菌污染的敷料'',\n)','B','41','1493692036','19','18','99');");
E_D("replace into `ld_exam_questions` values('3','题目：过氧乙酸不能用于','1','array (\n  0 => ''A:．手的消毒'',\n  1 => ''B:．空气消毒'',\n  2 => ''C:．浸泡金属器械'',\n  3 => ''D:．擦拭家具'',\n)','C','41','1493692036','19','18','99');");
E_D("replace into `ld_exam_questions` values('4','题目：使用无菌持物钳，下列哪项是不正确的','1','array (\n  0 => ''A:．应浸泡在盛有消毒液的大口容器内'',\n  1 => ''B:．液面浸没轴节以上2～3cm'',\n  2 => ''C:．取钳时应将钳端闭合'',\n  3 => ''D:．可用于夹取消毒的油纱布'',\n)','D','41','1493692036','19','18','99');");

require("../../inc/footer.php");
?>