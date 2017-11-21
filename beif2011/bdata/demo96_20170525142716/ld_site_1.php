<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_site`;");
E_C("CREATE TABLE `ld_site` (
  `siteid` smallint(5) unsigned NOT NULL auto_increment,
  `name` char(30) default '',
  `dirname` char(255) default '',
  `domain` char(255) default '',
  `site_title` char(255) default '',
  `keywords` char(255) default '',
  `description` char(255) default '',
  `release_point` text,
  `default_style` char(50) default NULL,
  `template` text,
  `setting` mediumtext,
  `uuid` char(40) default '',
  PRIMARY KEY  (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ld_site` values('1','树德平台','','http://demo96.dfwlshy.com/','树德平台','树德平台','树德平台','','default','default','array (\n  ''upload_maxsize'' => ''512000'',\n  ''upload_allowext'' => ''jpg|jpeg|gif|bmp|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|rar|zip|swf'',\n  ''watermark_enable'' => ''0'',\n  ''watermark_minwidth'' => ''300'',\n  ''watermark_minheight'' => ''300'',\n  ''watermark_img'' => ''statics/images/water//mark.png'',\n  ''watermark_pct'' => ''85'',\n  ''watermark_quality'' => ''80'',\n  ''watermark_pos'' => ''9'',\n)','482dd15c-f6bc-11e3-88e3-902b34bcc9ef');");

require("../../inc/footer.php");
?>