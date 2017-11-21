<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_news_data`;");
E_C("CREATE TABLE `ld_news_data` (
  `id` mediumint(8) unsigned default '0',
  `content` mediumtext NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL default '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL default '0',
  `relation` varchar(255) NOT NULL default '',
  `voteid` mediumint(8) unsigned NOT NULL default '0',
  `allow_comment` tinyint(1) unsigned NOT NULL default '1',
  `copyfrom` varchar(100) NOT NULL default '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_news_data` values('1','性价比高，对比国外的机器人教育品牌，课时费近乎便宜一半，更容易被家长所接受。课时费近乎便宜一半，更容易被家长所接受。','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('2','色彩丰富和多样化的积木零件，可以搭建出炫酷的造型，从而激发孩子浓厚的学习兴趣并培养良好的动手能力和创意力。<br />\r\n','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('3','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('4','　该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('5','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('6','该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论该校是最早使用该书的学校，其教学对象涵盖各个年级学生，此前学生及家长们反馈都比较好。学校不会因舆论','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('7','北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内<br />\r\n<br />\r\n北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内<br />\r\n<br />\r\n<br />\r\n北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内<br />\r\n<br />\r\n<br />\r\n北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内<br />\r\n<br />\r\n北京树德教育科技有限公司（简称树德教育）是由北京树德咨询管理有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('8','<div class=\"dongTai_two_right clearFix\">\r\n<div class=\"dongTai_two_right_text fl\">我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。</div>\r\n<img class=\"fr\" src=\"/uploadfile/2017/0401/20170401053829262.jpg\" /></div>\r\n<div class=\"dongTai_two_middle_text\">我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。</div>\r\n<div class=\"dongTai_two_right clearFix\">\r\n<div class=\"dongTai_two_right_text fr\">我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。我们每年会为会员机构无偿提供价值数万元的商学院服务。我们会特聘一些在培训行业内非常有经验的大咖，针对市场、销售、教学、服务、管理等一系列大家所关心的课题，举办为期数天的培训课程/论坛，以使大家在奋斗路上并不孤单，一边对标行业中的成功案例，把握方向的正确性；一边充电提高，以便开动更大马力前行。</div>\r\n<img class=\"fl\" src=\"/uploadfile/2017/0401/20170401053843853.jpg\" /></div>\r\n<br />\r\n','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('9','&nbsp;','0','','0','0','','0','','0','1','|0');");
E_D("replace into `ld_news_data` values('10','&nbsp;','0','','0','0','','0','','0','1','|0');");

require("../../inc/footer.php");
?>