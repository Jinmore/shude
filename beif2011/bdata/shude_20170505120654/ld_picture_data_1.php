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
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `relation` varchar(255) NOT NULL DEFAULT '',
  `pictureurls` mediumtext NOT NULL,
  `copyfrom` varchar(255) NOT NULL DEFAULT '',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_picture_data` values('8','&nbsp;我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('6','大乔机器人','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('7','','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('10','<img src=\"/uploadfile/2017/0401/20170401014400317.jpg\" /><br />\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('9','<div class=\"table clearFix\">\r\n<table class=\"table_one fl\">\r\n<tbody>\r\n	<tr>\r\n	<th>\r\n		&nbsp;</th>\r\n	</tr>\r\n	<tr>\r\n	<td>搭建</td>\r\n	</tr>\r\n	<tr>\r\n	<td>知识点</td>\r\n	</tr>\r\n	<tr>\r\n	<td>编程</td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"table_two fl\">\r\n<tbody>\r\n	<tr>\r\n	<th>\r\n		一阶段上</th>\r\n	<th>\r\n		一阶段下</th>\r\n	<th>\r\n		二阶段上</th>\r\n	<th>\r\n		二阶段下</th>\r\n	<th>\r\n		三阶段上</th>\r\n	<th>\r\n		三阶段下</th>\r\n	</tr>\r\n	<tr>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td class=\"td_one\" colspan=\"2\">1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>看效果图进行搭建总体50-60块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	</tr>\r\n	<tr>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>看效果图进行搭建总体50-60块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td class=\"td_one\" colspan=\"2\">1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	</tr>\r\n	<tr>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td>看效果图进行搭建总体50-60块积木</td>\r\n	<td>1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	<td class=\"td_one\" colspan=\"2\">1:1等比例分步搭建图每步1-2块积木，总体15-30块积木</td>\r\n	</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<div class=\"k1\">K1初级课程是一门秉承 &ldquo;玩中学&rdquo;的教育理念集自然，科技，工程，艺术，语言等于一体的综合能力的素质教育课程，它通过传感器，CPU电子器件等，把简单的积木变成好玩的智能机器人。</div>\r\n','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('11','课程介绍的视频请选择相关','0','','0','0','','0','6|7','','|0','1');");
E_D("replace into `ld_picture_data` values('12','简单的介绍信息','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('13','第二季课的内容','0','','0','0','','0','','','|0','1');");
E_D("replace into `ld_picture_data` values('14','国家的啊','0','','0','0','','0','','','|0','1');");

require("../../inc/footer.php");
?>