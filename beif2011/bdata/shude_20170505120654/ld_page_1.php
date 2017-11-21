<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_page`;");
E_C("CREATE TABLE `ld_page` (
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(160) NOT NULL,
  `style` varchar(24) NOT NULL,
  `keywords` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `template` varchar(30) NOT NULL,
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_page` values('3','合作说明',';','合作说明','<img src=\"/uploadfile/2017/0401/20170401030344959.jpg\" /><br />\r\n<h3 class=\"heZuo\">合作企业<img src=\"/uploadfile/2017/0401/20170401030412672.jpg\" /></h3>\r\n','','0');");
E_D("replace into `ld_page` values('4','合作企业',';','企业','<img src=\"/uploadfile/2017/0401/20170401030412672.jpg\" /><br />\r\n','','0');");
E_D("replace into `ld_page` values('11','公司简介',';','公司简介','<div class=\"gaiLan\">\r\n<div class=\"gaiLan_text\">北京树德管理咨询有限公司（简称树德管理咨询）是由北京树德管理咨询有限公司（简称树德）控股的一家公司。目前公司主要以研发各种科技类版权课程为主营业务，并在全中国范围内通过代理和直营分公司向各类教育机构进行课程授权。</div>\r\n<div class=\"gaiLan_base_title\">我公司的战略咨询顾问有：</div>\r\n<div class=\"guWen clearFix\">\r\n<div class=\"guWen_left fl\">戴尔全球市场部高级经理 方英<br />\r\n361&deg;郑州分公司总经理 程宇<br />\r\n英华世维咨询公司总裁 马强<br />\r\n英华世维咨询公司人力资源副总裁 关宝英<br />\r\n特步人力资源总监 吴张攀<br />\r\n畅毂投资总裁 徐长毂<br />\r\n畅毂投资财务总监 王静媛<br />\r\n君融资本总裁 肖楠<br />\r\n华为公司项目总监 廖维<br />\r\n九芯净水董事长 吴联星</div>\r\n<div class=\"guWen_left fl guWen_right\">财行天下总经理 王丽琴<br />\r\n鲲跃商务咨询总经理 齐鹏韬<br />\r\n华双宏展总经理 甘赟<br />\r\n黑花生孵化公司总经理 李广卫<br />\r\n璀璨商学院董事长 赵学森<br />\r\n璀璨商学院总经理 佘龚凤<br />\r\n新概念教育董事长 刘亦宸<br />\r\n赫博教育董事长 郭科峰<br />\r\n一起飞机票网总裁 陈谨哲<br />\r\n余世维教育集团营销总监 张浩天</div>\r\n</div>\r\n<div class=\"gaiLan_base_title gaiLan_base_title_two\">我公司的战略合作伙伴有：</div>\r\n<div class=\"guWen clearFix\">\r\n<div class=\"guWen_left fl\">余世维教育集团<br />\r\n东方淑媛<br />\r\n璀璨商学院<br />\r\n新概念教育</div>\r\n<div class=\"guWen_left fl guWen_right\">余世维教育集团<br />\r\n东方淑媛璀璨商学院<br />\r\n新概念教育</div>\r\n</div>\r\n</div>\r\n','','0');");
E_D("replace into `ld_page` values('12','企业文化',';','文化 企业','企业文化','','0');");

require("../../inc/footer.php");
?>