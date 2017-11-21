<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_picture`;");
E_C("CREATE TABLE `ld_picture` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL default '',
  `style` char(24) NOT NULL default '',
  `thumb` char(100) NOT NULL default '',
  `keywords` char(40) NOT NULL default '',
  `description` mediumtext NOT NULL,
  `posids` tinyint(1) unsigned NOT NULL default '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL default '0',
  `status` tinyint(2) unsigned NOT NULL default '1',
  `sysadd` tinyint(1) unsigned NOT NULL default '0',
  `islink` tinyint(1) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL default '0',
  `updatetime` int(10) unsigned NOT NULL default '0',
  `spurl` tinyint(3) unsigned NOT NULL default '0',
  `videourl` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ld_picture` values('8','29','0','初级课程概述','','/uploadfile/2017/0524/20170524111535834.jpg','机器人 阶段 乐高','初级课程适合幼儿园及小学阶段的孩子学习。\r\n通过CPU、马达、各类传感器及齿轮、滑轮等各种电子、物理器件的组合运用，把积木玩具通过简单的图形模块编程变成好玩的智能机器人。','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=29&id=8','4','99','1','0','wz010','1491028912','1495595743','0','');");
E_D("replace into `ld_picture` values('10','29','0','课程体系','','/uploadfile/2017/0401/20170401014400317.jpg','优势 课程','K1初级课程是一门秉承 玩中学的教育理念集自然，科技，工程，艺术，语言等于一体的综合能力的素质教育课程，它通过传感器，CPU电子器件等   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=29&id=10','3','99','1','0','wz010','1491029161','1495618830','0','');");
E_D("replace into `ld_picture` values('11','29','0','课程视频','','','课程 视频','课程介绍的视频请选择相关','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=29&id=11','1','99','1','0','wz010','1491029216','1495709021','0','');");
E_D("replace into `ld_picture` values('27','27','0','永不落地机器人','','/uploadfile/2017/0525/20170525072618482.png','机器人 永不','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=27','0','99','1','0','admin','1495707421','1495721612','0','http://demo96.dfwlshy.com/video/luodi.mp4');");
E_D("replace into `ld_picture` values('14','22','0','国家地理1','','','国家地理','国家的啊','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=22&id=14','0','99','1','0','wz010','1491371262','1491371303','0','video/rz.mp4');");
E_D("replace into `ld_picture` values('6','27','0','KI机器人完整版视频','','/uploadfile/2017/0525/20170525072547269.png','机器人','大乔机器人','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=6','0','99','1','0','wz010','1491020218','1495721095','0','http://demo96.dfwlshy.com/video/KI.mp4');");
E_D("replace into `ld_picture` values('7','27','0','恐龙机器人','','/uploadfile/2017/0525/20170525072509449.png','','','1','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=7','0','99','1','0','wz010','1491024747','1495721109','0','http://demo96.dfwlshy.com/video/konglong.mp4');");
E_D("replace into `ld_picture` values('26','27','0','爬楼梯机器人','','/uploadfile/2017/0525/20170525072407923.png','','','1','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=26','0','99','1','0','admin','1495589360','1495721740','0','http://demo96.dfwlshy.com/video/xiapa.mp4');");
E_D("replace into `ld_picture` values('15','27','0','颜色检测机器人','','/uploadfile/2017/0525/20170525072443931.png','魔方 机器人','','1','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=15','0','99','1','0','admin','1494990355','1495721124','0','http://demo96.dfwlshy.com/video/yanse.mp4');");
E_D("replace into `ld_picture` values('16','37','0','3D打印课','','','3D打印课','适合小学阶段的孩子学习。以数字模型文件为基础进行设计，运用粉末状金属或塑料等材料，通过逐层打印的方式来构造3D物体，是一门培养孩子创   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=37&id=16','0','99','1','0','admin','1494990951','1495086416','0','');");
E_D("replace into `ld_picture` values('17','38','0','无人机航模课程','','/uploadfile/2017/0517/20170517112159314.jpg','无人机 航模 课程','适合小学阶段的孩子学习。航模飞机主要由机翼、尾翼、机身、起落架和发动机五部分组成。它是三轴六自由度运动的物体，学习航模可以锻炼孩子   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=38&id=17','0','99','1','0','admin','1494990982','1494991321','0','');");
E_D("replace into `ld_picture` values('18','30','0','中级课程介绍','','','','中级课程适合小学阶段的孩子学习。\r\n该课程的编程更加复杂，应用到的器件更加全面。如：触碰传感器、超声波传感器、陀螺仪传感器、光电传感器、中型、大型马达等，使机器人能实现的功能更加强大和智能化。','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=30&id=18','0','99','1','0','admin','1495007193','1495007207','0','');");
E_D("replace into `ld_picture` values('19','31','0','高级课程内容','','','课程 内容','适合中学阶段的孩子学习。造型方面从之前的积木材料，变成了集成电路板，并加入了一些功能更加强大的传感器。如：压力、声音、湿度传感器等   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=31&id=19','0','99','1','0','admin','1495008222','1495008259','0','');");
E_D("replace into `ld_picture` values('20','33','0','进阶课程介绍','','','','进阶课程适合幼儿园及小学阶段的孩子学习。相比于初级课程该课程增加了：彩色距离传感器、录音系统和可编程模块的工具包，使机器人的功能更   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=33&id=20','0','99','1','0','admin','1495008732','1495008739','0','');");
E_D("replace into `ld_picture` values('21','32','0','拓展课程','','','','拓展课程适合小学阶段的孩子学习。难易度与中级课程相仿，但活动关节配置有多达17个舵机，具有17个自由度，可以用手机或手柄控制，并具备仿   ','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=32&id=21','0','99','1','0','admin','1495008754','1495008763','0','');");
E_D("replace into `ld_picture` values('22','29','0','课程优势','','/uploadfile/2017/0519/20170519093248342.jpg','优势 课程','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=29&id=22','2','99','1','0','wz010','1495157528','1495619994','0','');");
E_D("replace into `ld_picture` values('23','9','0','1','','','1','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=9&id=23','0','99','1','0','admin','1495503220','1495503223','0','');");
E_D("replace into `ld_picture` values('24','22','0','初级课程第二阶段','','','二阶 课程','初级课程第二阶段','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=22&id=24','0','99','1','0','admin','1495518241','1495518263','0','');");
E_D("replace into `ld_picture` values('25','22','0','初级课程第二阶段','','','二阶 课程','初级课程第二阶段','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=22&id=25','0','99','1','0','admin','1495518241','1495518266','0','');");
E_D("replace into `ld_picture` values('28','27','0','智能收费站机器人','','/uploadfile/2017/0525/20170525071610924.png','收费站 机器人 智能','','0','http://demo96.dfwlshy.com/index.php?m=content&c=index&a=show&catid=27&id=28','0','99','1','0','admin','1495707438','1495721678','0','http://demo96.dfwlshy.com/video/zhineng.mp4');");

require("../../inc/footer.php");
?>