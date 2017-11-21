<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_template_bak`;");
E_C("CREATE TABLE `ld_template_bak` (
  `id` int(10) NOT NULL auto_increment,
  `creat_at` int(10) unsigned default '0',
  `fileid` char(50) default NULL,
  `userid` mediumint(8) default NULL,
  `username` char(20) default NULL,
  `template` text,
  PRIMARY KEY  (`id`),
  KEY `fileid` (`fileid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ld_template_bak` values('1','1495167313','default_content_footer.html','2','admin','\r\n<div class=\"copy clearFix\">\r\n    <div class=\"inner\">\r\n        <div class=\"copy_left fl\">\r\n            <ul class=\"clearFix\">\r\n                <li><a href=\"{\$CATEGORYS[16][url]}\">加盟留言 </a><span></span></li>\r\n                <li><a href=\"{\$CATEGORYS[17][url]}\">诚聘英才 </a><span></span></li>\r\n                <li><a href=\"{\$CATEGORYS[35][url]}\">版权声明 </a></li>\r\n            </ul>\r\n            <p>Copyright © 2017 北京树德管理咨询有限公司 . All Rights Reserved       京ICP备046546430号</p>\r\n        </div>\r\n        <div class=\"copy_right fr\">\r\n            <img src=\"{IMG_PATH}default/er_20.jpg\">\r\n            <div class=\"copy_right_txt\">关注扫描二维码</div>\r\n        </div>\r\n    </div>\r\n</div>\r\n</body>');");

require("../../inc/footer.php");
?>