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
E_D("replace into `ld_attachment_index` values('c-29-10','41');");
E_D("replace into `ld_attachment_index` values('c-29-10','42');");
E_D("replace into `ld_attachment_index` values('c-29-10','43');");
E_D("replace into `ld_attachment_index` values('c-29-10','44');");
E_D("replace into `ld_attachment_index` values('c-47-3','46');");
E_D("replace into `ld_attachment_index` values('c-25-1','48');");
E_D("replace into `ld_attachment_index` values('c-38-17','48');");
E_D("replace into `ld_attachment_index` values('c-37-16','48');");
E_D("replace into `ld_attachment_index` values('c-38-17','55');");
E_D("replace into `ld_attachment_index` values('c-29-10','56');");
E_D("replace into `ld_attachment_index` values('c-29-10','57');");
E_D("replace into `ld_attachment_index` values('c-27-15','48');");
E_D("replace into `ld_attachment_index` values('c-24-2','58');");
E_D("replace into `ld_attachment_index` values('c-24-2','59');");
E_D("replace into `ld_attachment_index` values('c-24-2','60');");
E_D("replace into `ld_attachment_index` values('c-24-2','61');");
E_D("replace into `ld_attachment_index` values('c-24-2','62');");
E_D("replace into `ld_attachment_index` values('c-29-10','63');");
E_D("replace into `ld_attachment_index` values('c-29-22','64');");
E_D("replace into `ld_attachment_index` values('c-27-15','67');");
E_D("replace into `ld_attachment_index` values('c-26-6','68');");
E_D("replace into `ld_attachment_index` values('c-26-5','68');");
E_D("replace into `ld_attachment_index` values('c-26-4','68');");
E_D("replace into `ld_attachment_index` values('c-26-3','68');");
E_D("replace into `ld_attachment_index` values('c-25-1','72');");
E_D("replace into `ld_attachment_index` values('c-29-8','92');");
E_D("replace into `ld_attachment_index` values('c-25-1','98');");
E_D("replace into `ld_attachment_index` values('c-29-10','100');");
E_D("replace into `ld_attachment_index` values('c-25-2','128');");
E_D("replace into `ld_attachment_index` values('c-29-10','136');");
E_D("replace into `ld_attachment_index` values('c-29-10','140');");
E_D("replace into `ld_attachment_index` values('c-29-10','141');");
E_D("replace into `ld_attachment_index` values('c-29-22','143');");
E_D("replace into `ld_attachment_index` values('c-29-22','144');");
E_D("replace into `ld_attachment_index` values('c-29-22','146');");
E_D("replace into `ld_attachment_index` values('c-29-22','147');");
E_D("replace into `ld_attachment_index` values('c-29-22','148');");
E_D("replace into `ld_attachment_index` values('c-29-22','150');");
E_D("replace into `ld_attachment_index` values('c-29-22','151');");
E_D("replace into `ld_attachment_index` values('c-29-22','152');");
E_D("replace into `ld_attachment_index` values('c-29-22','153');");
E_D("replace into `ld_attachment_index` values('c-29-22','155');");
E_D("replace into `ld_attachment_index` values('c-13-10','191');");
E_D("replace into `ld_attachment_index` values('c-13-9','192');");
E_D("replace into `ld_attachment_index` values('c-85-11','194');");
E_D("replace into `ld_attachment_index` values('c-85-11','200');");
E_D("replace into `ld_attachment_index` values('c-85-11','201');");
E_D("replace into `ld_attachment_index` values('c-85-11','202');");
E_D("replace into `ld_attachment_index` values('c-85-11','204');");
E_D("replace into `ld_attachment_index` values('c-85-11','205');");
E_D("replace into `ld_attachment_index` values('c-85-11','206');");
E_D("replace into `ld_attachment_index` values('c-85-11','207');");
E_D("replace into `ld_attachment_index` values('c-85-11','208');");
E_D("replace into `ld_attachment_index` values('c-85-11','209');");
E_D("replace into `ld_attachment_index` values('c-85-11','210');");
E_D("replace into `ld_attachment_index` values('c-85-11','211');");
E_D("replace into `ld_attachment_index` values('c-25-2','212');");
E_D("replace into `ld_attachment_index` values('c-25-2','213');");
E_D("replace into `ld_attachment_index` values('c-25-2','213');");
E_D("replace into `ld_attachment_index` values('c-85-11','214');");
E_D("replace into `ld_attachment_index` values('c-85-11','215');");
E_D("replace into `ld_attachment_index` values('c-47-4','216');");
E_D("replace into `ld_attachment_index` values('c-85-11','217');");
E_D("replace into `ld_attachment_index` values('c-25-2','218');");
E_D("replace into `ld_attachment_index` values('c-25-2','218');");
E_D("replace into `ld_attachment_index` values('c-25-1','219');");
E_D("replace into `ld_attachment_index` values('c-25-1','219');");
E_D("replace into `ld_attachment_index` values('c-25-1','219');");
E_D("replace into `ld_attachment_index` values('c-25-1','219');");
E_D("replace into `ld_attachment_index` values('c-25-2','220');");
E_D("replace into `ld_attachment_index` values('c-25-1','221');");
E_D("replace into `ld_attachment_index` values('c-85-11','222');");
E_D("replace into `ld_attachment_index` values('c-85-11','223');");
E_D("replace into `ld_attachment_index` values('c-85-11','224');");
E_D("replace into `ld_attachment_index` values('c-85-11','225');");
E_D("replace into `ld_attachment_index` values('c-85-11','226');");
E_D("replace into `ld_attachment_index` values('c-27-28','227');");
E_D("replace into `ld_attachment_index` values('c-27-26','228');");
E_D("replace into `ld_attachment_index` values('c-27-15','229');");
E_D("replace into `ld_attachment_index` values('c-27-7','230');");
E_D("replace into `ld_attachment_index` values('c-27-6','231');");
E_D("replace into `ld_attachment_index` values('c-27-27','232');");

require("../../inc/footer.php");
?>