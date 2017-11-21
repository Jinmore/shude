<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_picture_data`;");
E_C("CREATE TABLE `ld_picture_data` (
  `id` mediumint(8) unsigned default '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL default '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL default '0',
  `relation` varchar(255) NOT NULL default '',
  `pictureurls` mediumtext NOT NULL,
  `copyfrom` varchar(255) NOT NULL default '',
  `allow_comment` tinyint(1) unsigned NOT NULL default '1',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_picture_data` values('8','初级课程是一门集科学、技术、工程、数学、语言、艺术等于一体的跨学科课程。该机器人含积木零件七百多块，两个马达和三个传感器：距离传感器，灰度传感器、倾斜传感器，和LED灯、蜂鸣器等电子器件组成。独具特色的&ldquo;玩中学&rdquo;教学理念，由老师引导孩子搭建，在编程方面孩子通过图形模块软件进行编程，用拖拽图形模块的方式来排列程序的逻辑顺序。从而锻炼孩子的动手能力和逻辑思维能力。通过搭建、编程及传感器之间的搭配使用，让孩子学到更多的科技知识，增强孩子的全面素质。<br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('6','','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('7','','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('10','<img alt=\"\" src=\"/uploadfile/2017/0524/20170524054022758.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<br />\r\nK1初级课程是一门秉承 &ldquo;玩中学&rdquo;的教育理念集自然，科技，工程，艺术，语言等于一体的综合能力的素质教育课程，它通过传感器，CPU电子器件等，把简单的积木变成好玩的智能机器人。','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('11','课程介绍的视频请选择相关','0','','0','0','','0','6|27|28','','|0','1');");
E_D("replace into `ld_picture_data` values('26','','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('14','国家的啊','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('15','','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('22','<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055946536.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055834171.png\" style=\"width: 998px; height: 478px;\" /><img alt=\"\" src=\"/uploadfile/2017/0524/20170524055910915.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055741155.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<br />\r\n<br />\r\n<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055631285.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<br />\r\n<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055545211.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n<br />\r\n<img alt=\"\" src=\"/uploadfile/2017/0524/20170524055455634.png\" style=\"width: 998px; height: 478px;\" /><img alt=\"\" src=\"/uploadfile/2017/0524/20170524055415555.png\" style=\"width: 998px; height: 478px;\" /><br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('23','&nbsp;','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('24','初级课程第二阶段','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('25','初级课程第二阶段','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('16','适合小学阶段的孩子学习。<br />\r\n以数字模型文件为基础进行设计，运用粉末状金属或塑料等材料，通过逐层打印的方式来构造3D物体，是一门培养孩子创意和科学素养的科技课程。','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('17','适合小学阶段的孩子学习。<br />\r\n航模飞机主要由机翼、尾翼、机身、起落架和发动机五部分组成。它是三轴六自由度运动的物体，学习航模可以锻炼孩子的立体思维能力及增强孩子空气动力学方面的知识。','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('18','中级课程适合小学阶段的孩子学习。<br />\r\n该课程的编程更加复杂，应用到的器件更加全面。如：触碰传感器、超声波传感器、陀螺仪传感器、光电传感器、中型、大型马达等，使机器人能实现的功能更加强大和智能化。','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('19','适合中学阶段的孩子学习。<br />\r\n造型方面从之前的积木材料，变成了集成电路板，并加入了一些功能更加强大的传感器。如：压力、声音、湿度传感器等。编程也从简单的图形模块编程提高到了更为复杂的语言编程。<br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('20','进阶课程适合幼儿园及小学阶段的孩子学习。<br />\r\n相比于初级课程该课程增加了：彩色距离传感器、录音系统和可编程模块的工具包，使机器人的功能更加强大和丰富多彩。<br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('21','拓展课程适合小学阶段的孩子学习。<br />\r\n难易度与中级课程相仿，但活动关节配置有多达17个舵机，具有17个自由度，可以用手机或手柄控制，并具备仿人形态，能像人类一样做出各种各样的动作，例如：舞蹈、武术、踢足球等。<br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('27','&nbsp;','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('28','&nbsp;','0','','0','0','','0','','','|0','1');");

require("../../inc/footer.php");
?>