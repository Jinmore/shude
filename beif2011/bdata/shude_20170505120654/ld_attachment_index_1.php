<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_attachment_index`;");
E_C("CREATE TABLE `ld_attachment_index` (
  `keyid` char(30) NOT NULL,
  `aid` char(10) NOT NULL,
  KEY `keyid` (`keyid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_attachment_index` values('c-24-1','4');");
E_D("replace into `ld_attachment_index` values('c-24-2','4');");
E_D("replace into `ld_attachment_index` values('c-25-1','7');");
E_D("replace into `ld_attachment_index` values('c-25-2','8');");
E_D("replace into `ld_attachment_index` values('c-1-4','9');");
E_D("replace into `ld_attachment_index` values('c-1-5','9');");
E_D("replace into `ld_attachment_index` values('c-1-3','9');");
E_D("replace into `ld_attachment_index` values('c-1-2','9');");
E_D("replace into `ld_attachment_index` values('c-1-1','9');");
E_D("replace into `ld_attachment_index` values('c-27-6','10');");
E_D("replace into `ld_attachment_index` values('c-27-7','10');");
E_D("replace into `ld_attachment_index` values('c-1-5','11');");
E_D("replace into `ld_attachment_index` values('c-29-8','13');");
E_D("replace into `ld_attachment_index` values('c-29-8','14');");
E_D("replace into `ld_attachment_index` values('c-29-10','11');");
E_D("replace into `ld_attachment_index` values('c-27-6','10');");
E_D("replace into `ld_attachment_index` values('c-13-7','21');");
E_D("replace into `ld_attachment_index` values('c-13-8','22');");
E_D("replace into `ld_attachment_index` values('c-13-8','23');");

require("../../inc/footer.php");
?>