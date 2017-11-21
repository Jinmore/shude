<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_keyword_data`;");
E_C("CREATE TABLE `ld_keyword_data` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tagid` int(10) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '0',
  `contentid` char(30) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `tagid` (`tagid`,`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8");
E_D("replace into `ld_keyword_data` values('1','1','1','1-13');");
E_D("replace into `ld_keyword_data` values('2','2','1','2-13');");
E_D("replace into `ld_keyword_data` values('3','3','1','1-3');");
E_D("replace into `ld_keyword_data` values('4','3','1','2-3');");
E_D("replace into `ld_keyword_data` values('5','3','1','3-3');");
E_D("replace into `ld_keyword_data` values('6','4','1','1-1');");
E_D("replace into `ld_keyword_data` values('7','5','1','1-1');");
E_D("replace into `ld_keyword_data` values('8','6','1','1-1');");
E_D("replace into `ld_keyword_data` values('9','4','1','2-1');");
E_D("replace into `ld_keyword_data` values('10','5','1','2-1');");
E_D("replace into `ld_keyword_data` values('11','6','1','2-1');");
E_D("replace into `ld_keyword_data` values('12','7','1','3-1');");
E_D("replace into `ld_keyword_data` values('13','8','1','3-1');");
E_D("replace into `ld_keyword_data` values('14','9','1','3-1');");
E_D("replace into `ld_keyword_data` values('15','7','1','4-1');");
E_D("replace into `ld_keyword_data` values('16','8','1','4-1');");
E_D("replace into `ld_keyword_data` values('17','9','1','4-1');");
E_D("replace into `ld_keyword_data` values('18','7','1','5-1');");
E_D("replace into `ld_keyword_data` values('19','8','1','5-1');");
E_D("replace into `ld_keyword_data` values('20','9','1','5-1');");
E_D("replace into `ld_keyword_data` values('21','7','1','6-1');");
E_D("replace into `ld_keyword_data` values('22','8','1','6-1');");
E_D("replace into `ld_keyword_data` values('23','9','1','6-1');");
E_D("replace into `ld_keyword_data` values('24','3','1','4-3');");
E_D("replace into `ld_keyword_data` values('25','10','1','5-3');");
E_D("replace into `ld_keyword_data` values('26','3','1','5-3');");
E_D("replace into `ld_keyword_data` values('27','11','1','6-3');");
E_D("replace into `ld_keyword_data` values('28','11','1','7-3');");
E_D("replace into `ld_keyword_data` values('29','11','1','8-3');");
E_D("replace into `ld_keyword_data` values('30','12','1','8-3');");
E_D("replace into `ld_keyword_data` values('31','13','1','8-3');");
E_D("replace into `ld_keyword_data` values('32','14','1','9-3');");
E_D("replace into `ld_keyword_data` values('33','3','1','9-3');");
E_D("replace into `ld_keyword_data` values('34','15','1','10-3');");
E_D("replace into `ld_keyword_data` values('35','3','1','10-3');");
E_D("replace into `ld_keyword_data` values('36','3','1','11-3');");
E_D("replace into `ld_keyword_data` values('37','16','1','11-3');");
E_D("replace into `ld_keyword_data` values('38','17','1','12-3');");
E_D("replace into `ld_keyword_data` values('39','18','1','13-3');");
E_D("replace into `ld_keyword_data` values('40','19','1','7-1');");
E_D("replace into `ld_keyword_data` values('41','20','1','7-1');");
E_D("replace into `ld_keyword_data` values('42','21','1','7-1');");
E_D("replace into `ld_keyword_data` values('43','19','1','8-1');");
E_D("replace into `ld_keyword_data` values('44','20','1','8-1');");
E_D("replace into `ld_keyword_data` values('45','21','1','8-1');");
E_D("replace into `ld_keyword_data` values('46','19','1','9-1');");
E_D("replace into `ld_keyword_data` values('47','20','1','9-1');");
E_D("replace into `ld_keyword_data` values('48','21','1','9-1');");
E_D("replace into `ld_keyword_data` values('49','19','1','10-1');");
E_D("replace into `ld_keyword_data` values('50','20','1','10-1');");
E_D("replace into `ld_keyword_data` values('51','21','1','10-1');");
E_D("replace into `ld_keyword_data` values('52','22','1','14-3');");
E_D("replace into `ld_keyword_data` values('53','17','1','3-13');");
E_D("replace into `ld_keyword_data` values('54','23','1','15-3');");
E_D("replace into `ld_keyword_data` values('55','11','1','15-3');");
E_D("replace into `ld_keyword_data` values('56','24','1','16-3');");
E_D("replace into `ld_keyword_data` values('57','25','1','17-3');");
E_D("replace into `ld_keyword_data` values('58','26','1','17-3');");
E_D("replace into `ld_keyword_data` values('59','3','1','17-3');");
E_D("replace into `ld_keyword_data` values('60','27','1','18-3');");
E_D("replace into `ld_keyword_data` values('61','3','1','19-3');");
E_D("replace into `ld_keyword_data` values('62','28','1','19-3');");
E_D("replace into `ld_keyword_data` values('63','27','1','20-3');");
E_D("replace into `ld_keyword_data` values('64','27','1','21-3');");
E_D("replace into `ld_keyword_data` values('65','15','1','22-3');");
E_D("replace into `ld_keyword_data` values('66','3','1','22-3');");
E_D("replace into `ld_keyword_data` values('67','17','1','23-3');");
E_D("replace into `ld_keyword_data` values('68','29','1','24-3');");
E_D("replace into `ld_keyword_data` values('69','3','1','24-3');");
E_D("replace into `ld_keyword_data` values('70','29','1','25-3');");
E_D("replace into `ld_keyword_data` values('71','3','1','25-3');");
E_D("replace into `ld_keyword_data` values('72','30','1','26-3');");
E_D("replace into `ld_keyword_data` values('73','11','1','26-3');");
E_D("replace into `ld_keyword_data` values('74','31','1','1-1');");
E_D("replace into `ld_keyword_data` values('75','27','1','4-1');");
E_D("replace into `ld_keyword_data` values('76','27','1','10-1');");
E_D("replace into `ld_keyword_data` values('77','27','1','8-1');");
E_D("replace into `ld_keyword_data` values('78','27','1','7-1');");
E_D("replace into `ld_keyword_data` values('79','32','1','11-1');");
E_D("replace into `ld_keyword_data` values('80','17','1','12-1');");
E_D("replace into `ld_keyword_data` values('81','18','1','4-13');");
E_D("replace into `ld_keyword_data` values('82','27','1','26-3');");
E_D("replace into `ld_keyword_data` values('83','27','1','7-3');");
E_D("replace into `ld_keyword_data` values('84','11','1','27-3');");
E_D("replace into `ld_keyword_data` values('85','33','1','27-3');");
E_D("replace into `ld_keyword_data` values('86','34','1','28-3');");
E_D("replace into `ld_keyword_data` values('87','11','1','28-3');");
E_D("replace into `ld_keyword_data` values('88','35','1','28-3');");

require("../../inc/footer.php");
?>