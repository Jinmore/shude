<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_attachment`;");
E_C("CREATE TABLE `ld_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filename` char(50) NOT NULL,
  `filepath` char(200) NOT NULL,
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uploadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `authcode` char(32) NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `ld_attachment` values('1','content','0','zs.png','2017/0331/20170331100910920.png','15350','png','1','0','0','1','1490926150','','0','481e29ead5022d70e2f953d978983c98','1');");
E_D("replace into `ld_attachment` values('2','content','0','center_table_03.png','2017/0401/20170401093414523.png','4363','png','1','0','0','1','1491010454','','0','957f9fbf4d6a603f94f5188cc048a678','1');");
E_D("replace into `ld_attachment` values('3','content','0','center_table_12.png','2017/0401/20170401093431121.png','4417','png','1','0','0','1','1491010471','','0','0f8a6e1447a2b6730988caec3243be9a','1');");
E_D("replace into `ld_attachment` values('4','content','24','banner_03.jpg','2017/0401/20170401100826990.jpg','244077','jpg','1','0','0','1','1491012506','','1','356479722d443d43fe109decbe285076','1');");
E_D("replace into `ld_attachment` values('5','content','0','ke_pic_04.jpg','2017/0401/20170401102136748.jpg','46890','jpg','1','0','0','1','1491013296','','0','dee7701723ad88a53f809e87e508a009','1');");
E_D("replace into `ld_attachment` values('6','content','0','hz_03.jpg','2017/0401/20170401102823107.jpg','188845','jpg','1','0','0','1','1491013703','','0','e3cd206c6ce5c007734d38b2b32db4cb','1');");
E_D("replace into `ld_attachment` values('7','content','25','news_pic_11.png','2017/0401/20170401103420715.png','143799','png','1','0','0','1','1491014060','','1','e9e55ba23e10d73bf5284a819e237510','1');");
E_D("replace into `ld_attachment` values('8','content','25','news_pic_07.png','2017/0401/20170401103501501.png','149662','png','1','0','0','1','1491014101','','1','219f7b3f1de8bbf11c40e615ade13e8d','1');");
E_D("replace into `ld_attachment` values('9','content','1','ke_one_bot_03.jpg','2017/0401/20170401120701334.jpg','79276','jpg','1','0','0','1','1491019621','','1','6a3fd2870051c91e014255e416565a9b','1');");
E_D("replace into `ld_attachment` values('10','content','27','shi_03.jpg','2017/0401/20170401121845285.jpg','58761','jpg','1','0','0','1','1491020325','','1','6b7ba3734c1bd8986947a16da4b178d9','1');");
E_D("replace into `ld_attachment` values('11','content','1','chang_03.jpg','2017/0401/20170401014400317.jpg','2185484','jpg','1','0','0','1','1491025440','','1','01314de2b3712697e572d6fa4321a8d8','1');");
E_D("replace into `ld_attachment` values('12','content','0','未标题-1.jpg','2017/0401/20170401023009769.jpg','94746','jpg','1','0','0','1','1491028209','','0','a5a9e2510c0a916476ee70a7f2d1cdf1','1');");
E_D("replace into `ld_attachment` values('13','content','0','未标题-1.jpg','2017/0401/20170401023401299.jpg','87433','jpg','1','0','0','1','1491028441','','1','8d4d1f455e2c7f2b98c4a9e4cddab7ab','1');");
E_D("replace into `ld_attachment` values('14','content','29','hui_two_03.jpg','2017/0401/20170401024222879.jpg','114625','jpg','1','0','0','1','1491028942','','1','b258cdb961e2c1fff121db08907a7357','1');");
E_D("replace into `ld_attachment` values('15','content','0','hezuo_03.jpg','2017/0401/20170401030344959.jpg','258391','jpg','1','0','0','1','1491030224','','0','a30fef0ca34589b5096bae4e6a792f26','1');");
E_D("replace into `ld_attachment` values('16','content','0','hezuo2_06.jpg','2017/0401/20170401030412672.jpg','278367','jpg','1','0','0','1','1491030252','','0','9ae4b8814ae535db0052dcbefa7043ab','1');");
E_D("replace into `ld_attachment` values('17','content','0','right_pic_05.jpg','2017/0401/20170401035309322.jpg','68584','jpg','1','0','0','1','1491033189','','0','ec2c0afc811090558140824bea031b25','1');");
E_D("replace into `ld_attachment` values('18','content','0','未标题-1.jpg','2017/0401/20170401035508622.jpg','71711','jpg','1','0','0','1','1491033308','','0','3fe6a8488a071b00f1342732f30b54ef','1');");
E_D("replace into `ld_attachment` values('19','content','0','未标题-2.jpg','2017/0401/20170401035731691.jpg','57601','jpg','1','0','0','1','1491033451','','0','b0f5305a953aeb8e779991b031a5403d','1');");
E_D("replace into `ld_attachment` values('20','content','0','hui_two_03.jpg','2017/0401/20170401042320385.jpg','114625','jpg','1','0','0','1','1491035000','','0','e99bcfd1e4f7d12994381c346c031371','1');");
E_D("replace into `ld_attachment` values('21','content','13','dongtai_03.jpg','2017/0401/20170401051726861.jpg','108737','jpg','1','0','0','1','1491038246','','1','6ea63ca0317896618d3be028fe2dab02','1');");
E_D("replace into `ld_attachment` values('22','content','13','dongtai_two_pic_03.jpg','2017/0401/20170401053829262.jpg','79125','jpg','1','0','0','1','1491039509','','1','795c3a803aeccd8b31d069b5d4fc707b','1');");
E_D("replace into `ld_attachment` values('23','content','13','dongtai_two_pic_03.jpg','2017/0401/20170401053843853.jpg','79125','jpg','1','0','0','1','1491039523','','1','32ab884e661da1fdc664a19733910b4d','1');");
E_D("replace into `ld_attachment` values('24','content','0','lian_four_03.jpg','2017/0401/20170401055537660.jpg','10746','jpg','1','0','0','1','1491040537','','0','edf14bc977e715384900d4efbe1020c2','1');");
E_D("replace into `ld_attachment` values('25','content','0','lian_four_05.jpg','2017/0401/20170401055551967.jpg','12354','jpg','1','0','0','1','1491040551','','0','881327606215bed8d20a598601fdfd00','1');");
E_D("replace into `ld_attachment` values('26','content','0','lian_four_07.jpg','2017/0401/20170401055603237.jpg','14076','jpg','1','0','0','1','1491040563','','0','fd9556d2d6803bde9c902734be52da5d','1');");
E_D("replace into `ld_attachment` values('27','content','0','lian_four_09.jpg','2017/0401/20170401055615521.jpg','11925','jpg','1','0','0','1','1491040575','','0','d760d1f72546b9dda03a75c351a5d3bf','1');");
E_D("replace into `ld_attachment` values('28','content','0','right_modify_03.png','2017/0502/20170502033759855.png','237097','png','1','0','0','1','1493710679','','0','c87167725d7a56610f356c1750a37b90','1');");
E_D("replace into `ld_attachment` values('29','content','0','right_modify_06.png','2017/0502/20170502033934223.png','216489','png','1','0','0','1','1493710774','','0','1e57892b1573041d00007943298ef427','1');");

require("../../inc/footer.php");
?>