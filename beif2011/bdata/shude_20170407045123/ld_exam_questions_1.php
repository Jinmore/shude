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
  `inputtime` int(10) NOT NULL,
  `knowsid` int(50) NOT NULL,
  `courseid` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ld_exam_questions` values('1','1题目：门诊就诊顺序为先','1','array (\n  0 => ''A:．挂号'',\n  1 => ''B:．预检分诊'',\n  2 => ''C:．测体温'',\n  3 => ''D:．提供检验单'',\n)','B','1490860390','19','18','99');");
E_D("replace into `ld_exam_questions` values('2','2题目：燃烧法灭菌，不能用于','1','array (\n  0 => ''A:．弯盘'',\n  1 => ''B:．组织剪刀'',\n  2 => ''C:．带致病菌又无保留价值的纸张'',\n  3 => ''D:．铜绿假单孢菌污染的敷料'',\n)','B','1490860390','19','18','99');");
E_D("replace into `ld_exam_questions` values('3','3题目：过氧乙酸不能用于','1','array (\n  0 => ''A:．手的消毒'',\n  1 => ''B:．空气消毒'',\n  2 => ''C:．浸泡金属器械'',\n  3 => ''D:．擦拭家具'',\n)','C','1490860390','19','18','99');");
E_D("replace into `ld_exam_questions` values('4','4题目：使用无菌持物钳，下列哪项是不正确的','1','array (\n  0 => ''A:．应浸泡在盛有消毒液的大口容器内'',\n  1 => ''B:．液面浸没轴节以上2～3cm'',\n  2 => ''C:．取钳时应将钳端闭合'',\n  3 => ''E:．可用于夹取消毒的油纱布'',\n)','D','1490860390','19','18','99');");
E_D("replace into `ld_exam_questions` values('5','皮下注射时，针头与皮肤应呈','1','array (\n  0 => ''A:．0°～10°'',\n  1 => ''B:．10°～20°'',\n  2 => ''C:．20°～30°'',\n  3 => ''D:．30°～40°'',\n)','D','1491442992','20','18','99');");
E_D("replace into `ld_exam_questions` values('6','题目：．下列药物中，不须做过敏试验的是','1','array (\n  0 => ''A:．普鲁卡因'',\n  1 => ''B:．链霉素'',\n  2 => ''C:．破伤风抗毒素'',\n  3 => ''D:．利多卡因'',\n)','D','1491443033','20','18','99');");
E_D("replace into `ld_exam_questions` values('7','12题目：．库血放在4℃冰箱内，能保存','1','array (\n  0 => ''A:．1周'',\n  1 => ''B:．3周'',\n  2 => ''C:．6周'',\n  3 => ''D:．3个月'',\n)','B','1491443069','20','18','99');");
E_D("replace into `ld_exam_questions` values('8','题目：．为病员稀释痰液做雾化吸入，药物首选','1','array (\n  0 => ''A:．卡那霉素'',\n  1 => ''B:．地塞米松'',\n  2 => ''C:．α糜蛋白酶'',\n  3 => ''D:．氨茶碱'',\n)','C','1491443121','20','18','99');");

require("../../inc/footer.php");
?>