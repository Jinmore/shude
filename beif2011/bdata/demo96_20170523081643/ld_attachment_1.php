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
  `aid` int(10) unsigned NOT NULL auto_increment,
  `module` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL default '0',
  `filename` char(50) NOT NULL,
  `filepath` char(200) NOT NULL,
  `filesize` int(10) unsigned NOT NULL default '0',
  `fileext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL default '0',
  `isthumb` tinyint(1) unsigned NOT NULL default '0',
  `downloads` mediumint(8) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `uploadtime` int(10) unsigned NOT NULL default '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  `authcode` char(32) NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8");
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
E_D("replace into `ld_attachment` values('30','content','0','center_right_03.png','2017/0508/20170508021452356.png','1920','png','1','0','0','1','1494224092','','0','370eb3f7a6a9623018ecffceb8fc2080','1');");
E_D("replace into `ld_attachment` values('31','content','0','match_ul_09.png','2017/0509/20170509122411212.png','159973','png','1','0','0','1','1494303851','','0','e4c70a1bb63e553a1b4516b8403db891','1');");
E_D("replace into `ld_attachment` values('32','content','0','match_ul_10.png','2017/0509/20170509122427104.png','180802','png','1','0','0','1','1494303867','','0','0dda70f7959ad08c63162f43601a2c4c','1');");
E_D("replace into `ld_attachment` values('33','content','0','green_03.png','2017/0509/20170509015125750.png','2239','png','1','0','0','1','1494309085','','0','ad37c310a277b8ac1b2f75e5a3bb525a','1');");
E_D("replace into `ld_attachment` values('34','content','0','blue_07.png','2017/0509/20170509015153246.png','2221','png','1','0','0','1','1494309113','','0','a0d3556f6968944786da566fb1637cc1','1');");
E_D("replace into `ld_attachment` values('35','content','0','match_ul_13.png','2017/0510/20170510105120485.png','196776','png','1','0','0','1','1494384680','','0','eaf86d933f051d389768ea7b61ce4759','1');");
E_D("replace into `ld_attachment` values('36','content','0','match_ul_14.png','2017/0510/20170510105131707.png','186998','png','1','0','0','1','1494384691','','0','041334f357ff35895b4888c0285e8871','1');");
E_D("replace into `ld_attachment` values('37','content','0','match_ul_18.png','2017/0510/20170510111326821.png','186998','png','1','0','0','1','1494386006','','0','5d143b3823e72157db3011877cf26eb7','1');");
E_D("replace into `ld_attachment` values('38','content','0','match_ul_19.png','2017/0510/20170510111337167.png','197641','png','1','0','0','1','1494386017','','0','f44e19fb7d244e79359a966fe2ffb578','1');");
E_D("replace into `ld_attachment` values('39','content','0','match_ul_09.png','2017/0510/20170510112550236.png','159973','png','1','0','0','1','1494386750','','0','e8b955477bf71d9e138c5519e4a65590','1');");
E_D("replace into `ld_attachment` values('40','content','0','match_ul_10.png','2017/0510/20170510112600373.png','180802','png','1','0','0','1','1494386760','','0','8c06a053ce6d7a94f5559883c98c118d','1');");
E_D("replace into `ld_attachment` values('41','mobile','0','logo_03.png','2017/0511/20170511021922703.png','8351','png','1','0','0','1','1494483562','','1','08f5c52227ec325e2810ff053044a4be','1');");
E_D("replace into `ld_attachment` values('42','content','29','未标题-1.png','2017/0511/20170511051054111.png','34834','png','1','0','0','1','1494493853','','1','466786a75ccccae71e8ed3bfd1970501','1');");
E_D("replace into `ld_attachment` values('43','content','29','未标题-2.png','2017/0511/20170511051442255.png','1776520','png','1','0','0','1','1494494082','','1','2896a8404bdd4d1b8f8023a4e85f504d','1');");
E_D("replace into `ld_attachment` values('44','content','29','未标题-3.png','2017/0511/20170511051509915.png','613561','png','1','0','0','1','1494494108','','1','65d522ba6a275ca1b46dd662f2041296','1');");
E_D("replace into `ld_attachment` values('45','content','0','series_03.png','2017/0512/20170512092226176.png','139244','png','1','0','0','1','1494552146','','0','43531b11403e3964ebecd90ac0aee0cc','1');");
E_D("replace into `ld_attachment` values('46','content','47','banner_02.jpg','2017/0513/20170513091239619.jpg','178582','jpg','1','0','0','1','1494637958','','1','706f181f122bc80a38d3c79c7bd48bc1','1');");
E_D("replace into `ld_attachment` values('47','content','0','index_pic_02.jpg','2017/0513/20170513092825803.jpg','148189','jpg','1','0','0','1','1494638904','','0','e2c1fc4b060fa1b82f8dab18216d6ef7','1');");
E_D("replace into `ld_attachment` values('48','content','25','news_03.jpg','2017/0513/20170513094959539.jpg','44853','jpg','1','0','0','1','1494640199','','1','aea207d6d7bcc7537eaf1a6650c89d8b','1');");
E_D("replace into `ld_attachment` values('49','content','0','timg.jpg','2017/0513/20170513041629259.jpg','32500','jpg','1','0','0','1','1494663389','123.118.210.255','0','2a2c75207c383188ac2b83ee88067ca1','1');");
E_D("replace into `ld_attachment` values('50','content','0','contact_bot_03.png','2017/0513/20170513043617825.png','5252','png','1','0','0','1','1494664577','123.118.210.255','0','d2ae0ea1f0bf036cc037ffca85602b57','1');");
E_D("replace into `ld_attachment` values('51','content','0','contact_bot_05.png','2017/0513/20170513043631173.png','7493','png','1','0','0','1','1494664591','123.118.210.255','0','ec9152eb75d2e0c250719172a187fcca','1');");
E_D("replace into `ld_attachment` values('52','content','0','contact_bot_09.png','2017/0513/20170513043644157.png','8181','png','1','0','0','1','1494664604','123.118.210.255','0','61e15bdb22b2a6a5f60786937f62feaa','1');");
E_D("replace into `ld_attachment` values('53','content','0','contact_bot_10.png','2017/0513/20170513043659696.png','6144','png','1','0','0','1','1494664619','123.118.210.255','0','a492ea0ba1aad20b7f00b8b1dd885a70','1');");
E_D("replace into `ld_attachment` values('54','content','0','20170401102823107.png','2017/0517/20170517105415876.png','93348','png','1','0','0','1','1494989655','61.149.199.127','0','dc0338c844fbbdeb3c75a48c2dad3320','1');");
E_D("replace into `ld_attachment` values('55','content','38','480-323.jpg','2017/0517/20170517112159314.jpg','36439','jpg','1','0','0','2','1494991319','61.149.199.127','1','d0b46f4fe0ef012b7e64732667088b44','1');");
E_D("replace into `ld_attachment` values('56','content','29','20170511051442255.png','2017/0517/20170517114758933.png','1776520','png','1','0','0','2','1494992878','61.149.199.127','1','24678a2e4071a6b71f3ae214848c23c2','1');");
E_D("replace into `ld_attachment` values('57','content','29','未标题-3.jpg','2017/0517/20170517114850237.jpg','700035','jpg','1','0','0','2','1494992930','61.149.199.127','1','77bfe7909b78b47a8c38dc94e4f0eade','1');");
E_D("replace into `ld_attachment` values('58','content','0','图片1.png','2017/0518/20170518114213564.png','129455','png','1','0','0','2','1495078933','222.129.32.15','1','25f88a9af7f3a5734a5239dc06ef52aa','1');");
E_D("replace into `ld_attachment` values('59','content','0','1.png','2017/0518/20170518114328356.png','193697','png','1','0','0','2','1495079008','222.129.32.15','1','9adbc3bf6f866c5b84a35bd365e8add6','1');");
E_D("replace into `ld_attachment` values('60','content','0','3.png','2017/0518/20170518114454341.png','263114','png','1','0','0','2','1495079094','222.129.32.15','1','69d80824d60c8703d901735b82956919','1');");
E_D("replace into `ld_attachment` values('61','content','0','4.png','2017/0518/20170518114553831.png','135508','png','1','0','0','2','1495079153','222.129.32.15','1','2d0e76684906116821549b9834b17a5b','1');");
E_D("replace into `ld_attachment` values('62','content','24','22.jpg','2017/0518/20170518123033345.jpg','87513','jpg','1','0','0','2','1495081833','222.129.32.15','1','1dbec02502fb1af29c8847e55d11f154','1');");
E_D("replace into `ld_attachment` values('63','content','29','ke_two_bot_top_03.jpg','2017/0519/20170519093044779.jpg','122878','jpg','1','0','0','1','1495157444','114.245.35.216','1','34d9c49dbbe3990c748c589c29b0fdcd','1');");
E_D("replace into `ld_attachment` values('64','content','29','ke_two_bot_bot_03.jpg','2017/0519/20170519093248342.jpg','2165365','jpg','1','0','0','1','1495157568','114.245.35.216','1','66b3b46cb0bba5531d252d06890d5338','1');");
E_D("replace into `ld_attachment` values('65','content','0','20170401023009769.jpg','2017/0519/20170519102958104.jpg','94746','jpg','1','0','0','2','1495160998','114.245.35.216','0','51132182b9df7bd8b01d11d0ab8955ab','1');");
E_D("replace into `ld_attachment` values('66','content','0','20170401023401299.jpg','2017/0519/20170519103030222.jpg','87433','jpg','1','0','0','2','1495161030','114.245.35.216','0','f717006ea5ddd84d46577abc668c95ef','1');");
E_D("replace into `ld_attachment` values('67','content','27','11.jpg','2017/0519/20170519105005899.jpg','22685','jpg','1','0','0','2','1495162205','114.245.35.216','1','92d11bd07c31321465d2e387d786024d','1');");
E_D("replace into `ld_attachment` values('68','content','26','20170401051726861.jpg','2017/0519/20170519121732216.jpg','108737','jpg','1','0','0','2','1495167452','114.245.35.216','1','85c818bff665b6b430e0e16219423b88','1');");
E_D("replace into `ld_attachment` values('69','content','0','zs.png','2017/0522/20170522093611884.png','15350','png','1','0','0','1','1495416970','222.129.53.161','0','82f1dc3092e3590e0f8ce6db7602f32c','1');");
E_D("replace into `ld_attachment` values('70','content','0','timg.jpg','2017/0522/20170522101655481.jpg','14816','jpg','1','0','0','1','1495419415','222.129.53.161','0','bd66e37a1cf0ee1360ea53ef9605005f','1');");
E_D("replace into `ld_attachment` values('71','content','0','timg.jpg','2017/0522/20170522101836922.jpg','14816','jpg','1','0','0','1','1495419516','222.129.53.161','0','ffe0812ca2d1d42f6a885203d7935e67','1');");
E_D("replace into `ld_attachment` values('72','content','0','123.jpg','2017/0523/20170523015744599.jpg','40891','jpg','1','0','0','2','1495519064','111.196.81.71','0','e9e9a76cd316371b9414665f50f31df6','1');");
E_D("replace into `ld_attachment` values('73','content','0','123.jpg','2017/0523/20170523020020487.jpg','40891','jpg','1','0','0','2','1495519220','114.241.25.209','0','1b89cc21b97fb6896d4d2166cf06b5a1','1');");

require("../../inc/footer.php");
?>