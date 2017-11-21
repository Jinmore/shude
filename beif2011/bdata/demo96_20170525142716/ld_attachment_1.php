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
) ENGINE=MyISAM AUTO_INCREMENT=233 DEFAULT CHARSET=utf8");
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
E_D("replace into `ld_attachment` values('72','content','0','123.jpg','2017/0523/20170523015744599.jpg','40891','jpg','1','0','0','2','1495519064','111.196.81.71','1','e9e9a76cd316371b9414665f50f31df6','1');");
E_D("replace into `ld_attachment` values('73','content','0','123.jpg','2017/0523/20170523020020487.jpg','40891','jpg','1','0','0','2','1495519220','114.241.25.209','0','1b89cc21b97fb6896d4d2166cf06b5a1','1');");
E_D("replace into `ld_attachment` values('74','content','0','123.jpg','2017/0523/20170523060249407.jpg','40891','jpg','1','0','0','2','1495533769','114.241.25.209','0','16c5e72ffba161a042ff09631b2f092e','1');");
E_D("replace into `ld_attachment` values('75','content','27','恐龙机器人.jpg','2017/0524/20170524095455832.jpg','17288','jpg','1','0','0','2','1495590895','114.241.25.209','0','9fabc5d3079f16d6eb4414e157e46916','1');");
E_D("replace into `ld_attachment` values('76','content','0','QQ图片20170524102428.jpg','2017/0524/20170524103834978.jpg','38223','jpg','1','0','0','2','1495593514','114.241.25.209','0','00e501e069b5cda130eb5962e4de911e','1');");
E_D("replace into `ld_attachment` values('77','content','0','图片1.png','2017/0524/20170524104214220.png','26474','png','1','0','0','2','1495593734','114.241.25.209','0','c19b77efdd389aa73a25079b819ea6e6','1');");
E_D("replace into `ld_attachment` values('78','content','0','一阶上.png','2017/0524/20170524104740764.png','71323','png','1','0','0','2','1495594060','114.241.25.209','0','0d2bcba63fdf65043300aaca533a066f','1');");
E_D("replace into `ld_attachment` values('79','content','0','蜗轮组.png','2017/0524/20170524104850210.png','16561','png','1','0','0','2','1495594130','114.241.25.209','0','d081860010b0e1433bafe994c1a66867','1');");
E_D("replace into `ld_attachment` values('80','content','0','图片1.png','2017/0524/20170524105025120.png','31122','png','1','0','0','2','1495594225','114.241.25.209','0','41e98ff52f2ea4e7e05ca2de8b88812a','1');");
E_D("replace into `ld_attachment` values('81','content','0','汉堡包.jpg','2017/0524/20170524105041505.jpg','9885','jpg','1','0','0','2','1495594241','114.241.25.209','0','0f30cd858a26be695aa628254542f6d3','1');");
E_D("replace into `ld_attachment` values('82','content','0','微信图片_20170524105351.jpg','2017/0524/20170524105142759.jpg','171629','jpg','1','0','0','2','1495594302','114.241.25.209','0','5467c16c52afc49e9438cf72a0409226','1');");
E_D("replace into `ld_attachment` values('83','content','0','微信图片_20170524105325.jpg','2017/0524/20170524105415110.jpg','46653','jpg','1','0','0','2','1495594455','114.241.25.209','0','c485ac0f762e53d16f0cf316c98565fd','1');");
E_D("replace into `ld_attachment` values('84','content','0','微信图片_20170524110131.jpg','2017/0524/20170524105838201.jpg','90763','jpg','1','0','0','2','1495594718','114.241.25.209','0','cde5c2a936cea01ffda70442650fe398','1');");
E_D("replace into `ld_attachment` values('85','content','0','微信图片_20170524110234.jpg','2017/0524/20170524110001721.jpg','89779','jpg','1','0','0','2','1495594801','114.241.25.209','0','3ecc583ce597dd77b380b9adb19be4f1','1');");
E_D("replace into `ld_attachment` values('86','content','0','1.png','2017/0524/20170524110204217.png','13132','png','1','0','0','2','1495594924','114.241.25.209','0','01bd2c2937e3690901915b0ff00997f7','1');");
E_D("replace into `ld_attachment` values('87','content','0','一阶上84.png','2017/0524/20170524110328706.png','35471','png','1','0','0','2','1495595008','114.241.25.209','0','0e897920b21b3615b029e74070434919','1');");
E_D("replace into `ld_attachment` values('88','content','0','图片2.png','2017/0524/20170524110617448.png','171129','png','1','0','0','2','1495595177','114.241.25.209','0','75a46411048c65ad31ebca1a5eac45e6','1');");
E_D("replace into `ld_attachment` values('89','content','0','图片3.png','2017/0524/20170524110902865.png','133692','png','1','0','0','2','1495595342','114.241.25.209','0','f6238b58ebc5e0431581e38905ced89a','1');");
E_D("replace into `ld_attachment` values('90','content','0','2.png','2017/0524/20170524111053287.png','9198','png','1','0','0','2','1495595453','114.241.25.209','0','571c20b888bd5ab34a905d1a258ba7ad','1');");
E_D("replace into `ld_attachment` values('91','content','0','一阶上77.png','2017/0524/20170524111443896.png','79883','png','1','0','0','2','1495595683','114.241.25.209','0','6d0baeb70bdcde89c83cd14ef8b495ec','1');");
E_D("replace into `ld_attachment` values('92','content','29','微信图片_20170524111330.jpg','2017/0524/20170524111535834.jpg','49565','jpg','1','0','0','2','1495595735','114.241.25.209','1','f5ab348b9b17989512f9a4f5042cbda8','1');");
E_D("replace into `ld_attachment` values('93','content','0','一阶下88.png','2017/0524/20170524111748926.png','88441','png','1','0','0','2','1495595868','114.241.25.209','0','bf0f4b684d362968a793347453ffed80','1');");
E_D("replace into `ld_attachment` values('94','content','0','图片4.png','2017/0524/20170524111825645.png','32943','png','1','0','0','2','1495595905','114.241.25.209','0','3761a35b0635024cef7ec71958603195','1');");
E_D("replace into `ld_attachment` values('95','content','0','一阶下89.png','2017/0524/20170524111937448.png','26864','png','1','0','0','2','1495595977','114.241.25.209','0','f32248105a4eb0702ef016a6152bffe7','1');");
E_D("replace into `ld_attachment` values('96','content','0','图片5.png','2017/0524/20170524112102768.png','48434','png','1','0','0','2','1495596062','114.241.25.209','0','0dbd74660313178aa6562e0a4c72ca2a','1');");
E_D("replace into `ld_attachment` values('97','content','0','一阶下91.png','2017/0524/20170524112117819.png','89413','png','1','0','0','2','1495596077','114.241.25.209','0','a9dae4e54fcba7d0628b6dd891605e95','1');");
E_D("replace into `ld_attachment` values('98','content','25','timg (1).jpg','2017/0524/20170524112306636.jpg','26200','jpg','1','0','0','2','1495596186','114.241.25.209','1','8486f45bf1078768529c2cd43a869f29','1');");
E_D("replace into `ld_attachment` values('99','content','0','一阶下93.png','2017/0524/20170524112530206.png','92238','png','1','0','0','2','1495596330','114.241.25.209','0','5226714bc29f3b4203bd9e33fcf1bd5d','1');");
E_D("replace into `ld_attachment` values('100','content','29','课程体系.png','2017/0524/20170524112551991.png','53503','png','1','0','0','2','1495596351','114.241.25.209','1','1b9c67b277010a1a8e304188cc28f702','1');");
E_D("replace into `ld_attachment` values('101','content','0','3.png','2017/0524/20170524112721371.png','11450','png','1','0','0','2','1495596441','114.241.25.209','0','67e0f9ca5a97560a3d0ab026690760f7','1');");
E_D("replace into `ld_attachment` values('102','content','0','4.png','2017/0524/20170524112721838.png','15572','png','1','0','0','2','1495596441','114.241.25.209','0','97248cf3f6025d4d72660a7b481128a5','1');");
E_D("replace into `ld_attachment` values('103','content','0','5.png','2017/0524/20170524112722208.png','10517','png','1','0','0','2','1495596442','114.241.25.209','0','aea799dfb0212dac0aecc2a9e3086e66','1');");
E_D("replace into `ld_attachment` values('104','content','0','6.png','2017/0524/20170524112722518.png','8153','png','1','0','0','2','1495596442','114.241.25.209','0','d4b9eb2454cfd2de0d3fc4934db299ce','1');");
E_D("replace into `ld_attachment` values('105','content','0','7.png','2017/0524/20170524112722894.png','10309','png','1','0','0','2','1495596442','114.241.25.209','0','8d2cebfb41d8a4520ae4d046f1393f9e','1');");
E_D("replace into `ld_attachment` values('106','content','0','8.png','2017/0524/20170524112722400.png','7993','png','1','0','0','2','1495596442','114.241.25.209','0','6f08d7f4425ae8be6085a72c9f968fc6','1');");
E_D("replace into `ld_attachment` values('107','content','0','9.png','2017/0524/20170524112722852.png','7024','png','1','0','0','2','1495596442','114.241.25.209','0','5ce8ad7c986da361829f61b4b6e60b9d','1');");
E_D("replace into `ld_attachment` values('108','content','0','10.png','2017/0524/20170524112722148.png','16270','png','1','0','0','2','1495596442','114.241.25.209','0','3bfced73414d86829b42222e2b468bfa','1');");
E_D("replace into `ld_attachment` values('109','content','0','11.png','2017/0524/20170524112723485.png','17377','png','1','0','0','2','1495596443','114.241.25.209','0','001463f39e68bd13512e84e1241c5b37','1');");
E_D("replace into `ld_attachment` values('110','content','0','12.png','2017/0524/20170524112723658.png','16667','png','1','0','0','2','1495596443','114.241.25.209','0','1016de200b1a826d0d4b65961f4a88f7','1');");
E_D("replace into `ld_attachment` values('111','content','0','13.png','2017/0524/20170524112753394.png','12785','png','1','0','0','2','1495596473','114.241.25.209','0','0a17dc2f8abf06837a8648bda50609ed','1');");
E_D("replace into `ld_attachment` values('112','content','0','14.png','2017/0524/20170524112754418.png','14676','png','1','0','0','2','1495596473','114.241.25.209','0','b05b70ea8184a730f70a3a7b5f719aa5','1');");
E_D("replace into `ld_attachment` values('113','content','0','15.png','2017/0524/20170524112754930.png','19276','png','1','0','0','2','1495596474','114.241.25.209','0','dc378d00826d5e79e5dd773b6f16b3d4','1');");
E_D("replace into `ld_attachment` values('114','content','0','16.png','2017/0524/20170524112754323.png','20359','png','1','0','0','2','1495596474','114.241.25.209','0','8e54056976767df81055c45bebe1a661','1');");
E_D("replace into `ld_attachment` values('115','content','0','17.png','2017/0524/20170524112754278.png','19378','png','1','0','0','2','1495596474','114.241.25.209','0','5a1c9b80dbe0c24901a4afdbafd4145d','1');");
E_D("replace into `ld_attachment` values('116','content','0','18.png','2017/0524/20170524112754206.png','12566','png','1','0','0','2','1495596474','114.241.25.209','0','f46d2d5d37e2d70517c0ccf561e291ef','1');");
E_D("replace into `ld_attachment` values('117','content','0','19.png','2017/0524/20170524112754837.png','25567','png','1','0','0','2','1495596474','114.241.25.209','0','cc8f3fd5c05516e39d851a9472a3292f','1');");
E_D("replace into `ld_attachment` values('118','content','0','20.png','2017/0524/20170524112754255.png','22108','png','1','0','0','2','1495596474','114.241.25.209','0','300fbe3972e3a92d2967bac90393f089','1');");
E_D("replace into `ld_attachment` values('119','content','0','21.png','2017/0524/20170524112755145.png','19816','png','1','0','0','2','1495596475','114.241.25.209','0','6c9af813afa8518b4ddb9b97e925e52e','1');");
E_D("replace into `ld_attachment` values('120','content','0','22.png','2017/0524/20170524112755765.png','15501','png','1','0','0','2','1495596475','114.241.25.209','0','237ca9dda6743a90b89ae17c8397a160','1');");
E_D("replace into `ld_attachment` values('121','content','0','二阶上95.png','2017/0524/20170524112803726.png','114557','png','1','0','0','2','1495596483','114.241.25.209','0','42351b93540f7c4ac5243f613fc6c2a1','1');");
E_D("replace into `ld_attachment` values('122','content','0','23.png','2017/0524/20170524112814640.png','18446','png','1','0','0','2','1495596494','114.241.25.209','0','fa10d02cfdb31770f84e1de2ce4e848c','1');");
E_D("replace into `ld_attachment` values('123','content','0','24.png','2017/0524/20170524112815997.png','11667','png','1','0','0','2','1495596495','114.241.25.209','0','d3f277c53814b5b7e7f619d0e67ccd8c','1');");
E_D("replace into `ld_attachment` values('124','content','0','汉堡包.jpg','2017/0524/20170524112815957.jpg','9885','jpg','1','0','0','2','1495596495','114.241.25.209','0','a0d12bb8bbf9cb277258c4037b24cbec','1');");
E_D("replace into `ld_attachment` values('125','content','0','蜗轮组.gif','2017/0524/20170524112815168.gif','10339','gif','1','0','0','2','1495596495','114.241.25.209','0','96d21dc530d508960597057c20d015f4','1');");
E_D("replace into `ld_attachment` values('126','content','0','图片6.png','2017/0524/20170524112953556.png','51695','png','1','0','0','2','1495596593','114.241.25.209','0','1f7d846d2d996f71a219e2f22a766c60','1');");
E_D("replace into `ld_attachment` values('127','content','0','二阶下96.png','2017/0524/20170524113210506.png','127474','png','1','0','0','2','1495596730','114.241.25.209','0','817c307c2ae493b2e953d539a841bc76','1');");
E_D("replace into `ld_attachment` values('128','content','25','1.jpg','2017/0524/20170524113246869.jpg','28259','jpg','1','0','0','2','1495596766','114.241.25.209','1','f21beea8678c1ea2b7ce37f09f364a97','1');");
E_D("replace into `ld_attachment` values('129','content','0','图片7.png','2017/0524/20170524113518637.png','102006','png','1','0','0','2','1495596918','114.241.25.209','0','0761d54cfca63348d9c6fa5360e7ccc9','1');");
E_D("replace into `ld_attachment` values('130','content','0','图片8.png','2017/0524/20170524113736153.png','204076','png','1','0','0','2','1495597056','114.241.25.209','0','58951255221778a435e3c86744336c21','1');");
E_D("replace into `ld_attachment` values('131','content','0','图片9.png','2017/0524/20170524114149251.png','129567','png','1','0','0','2','1495597309','114.241.25.209','0','8dbb2dc0583fc094e42a30788db97267','1');");
E_D("replace into `ld_attachment` values('132','content','0','图片10.png','2017/0524/20170524114607274.png','172683','png','1','0','0','2','1495597566','114.241.25.209','0','060afa7bf509b3c8d1602aff44d8b95a','1');");
E_D("replace into `ld_attachment` values('133','content','0','图片11.png','2017/0524/20170524115629542.png','144292','png','1','0','0','2','1495598189','114.241.25.209','0','a4aa7b1f5c196774919ee4006d260c8b','1');");
E_D("replace into `ld_attachment` values('134','content','0','图片12.png','2017/0524/20170524115914456.png','127731','png','1','0','0','2','1495598354','114.241.25.209','0','2bebea09be7d9af79edba9c5a9cbebf7','1');");
E_D("replace into `ld_attachment` values('135','content','0','图片14.png','2017/0524/20170524120051486.png','107952','png','1','0','0','2','1495598451','114.241.25.209','0','fe4199739689ef6b3b27aff8a069b895','1');");
E_D("replace into `ld_attachment` values('136','content','29','微信图片_20170524161457.jpg','2017/0524/20170524041407171.jpg','768846','jpg','1','0','0','2','1495613647','114.241.25.209','1','683c773f7bea496e8e1e85c94a3d70f8','1');");
E_D("replace into `ld_attachment` values('137','content','0','pc版  初级课程图片.jpg','2017/0524/20170524052235275.jpg','90763','jpg','1','0','0','2','1495617755','114.241.25.209','0','c57b8a57b5ff0b2e7032715f99166f86','1');");
E_D("replace into `ld_attachment` values('138','content','0','pc版  初级课程图片.jpg','2017/0524/20170524052337974.jpg','90763','jpg','1','0','0','2','1495617816','114.241.25.209','0','588a3f5b45c87df4df407a0f17ce2e47','1');");
E_D("replace into `ld_attachment` values('139','content','0','QQ图片20170524172416.jpg','2017/0524/20170524052358201.jpg','17452','jpg','1','0','0','2','1495617838','114.241.25.209','0','7c799df7b80be649f9734428ade76180','1');");
E_D("replace into `ld_attachment` values('140','content','29','微信图片_20170524173252.jpg','2017/0524/20170524053636757.jpg','782231','jpg','1','0','0','2','1495618596','114.241.25.209','1','cb93e86882362660ca142d27d98979b9','1');");
E_D("replace into `ld_attachment` values('141','content','29','微信图片_20170524174145.png','2017/0524/20170524054022758.png','186412','png','1','0','0','2','1495618822','114.241.25.209','1','6a66a352d5adeca177953071c770580d','1');");
E_D("replace into `ld_attachment` values('142','content','0','图片15.png','2017/0524/20170524054920434.png','133407','png','1','0','0','2','1495619360','114.241.25.209','0','457627c08b8988a07e8937a7b963ffb2','1');");
E_D("replace into `ld_attachment` values('143','content','29','学习科学知识10.png','2017/0524/20170524055415555.png','182280','png','1','0','0','2','1495619655','114.241.25.209','1','001f094700b5d1f0a657e92ac56a1e69','1');");
E_D("replace into `ld_attachment` values('144','content','29','逻辑思维9.png','2017/0524/20170524055455634.png','186008','png','1','0','0','2','1495619695','114.241.25.209','1','c19524f5e87abf25888c7fa8b458eaae','1');");
E_D("replace into `ld_attachment` values('145','content','0','图片16.png','2017/0524/20170524055506646.png','147953','png','1','0','0','2','1495619706','114.241.25.209','0','fe783e2ae3620486965dbeba2ee50cbe','1');");
E_D("replace into `ld_attachment` values('146','content','29','挫折教育8.png','2017/0524/20170524055545211.png','184633','png','1','0','0','2','1495619745','114.241.25.209','1','27f5e1dc35ed0e4c1f04b73a936c245c','1');");
E_D("replace into `ld_attachment` values('147','content','29','沟通协作7.png','2017/0524/20170524055631285.png','223503','png','1','0','0','2','1495619791','114.241.25.209','1','45e463218a2d96a6454f6417644e216b','1');");
E_D("replace into `ld_attachment` values('148','content','29','趣味性6.png','2017/0524/20170524055706222.png','145741','png','1','0','0','2','1495619826','114.241.25.209','1','c7c30e906f0ee4a89e87f6168d66ad18','1');");
E_D("replace into `ld_attachment` values('149','content','0','图片17.png','2017/0524/20170524055717439.png','155700','png','1','0','0','2','1495619837','114.241.25.209','0','78667eb0d16b842eaaa3a71e57488d3c','1');");
E_D("replace into `ld_attachment` values('150','content','29','创意能力5.png','2017/0524/20170524055741155.png','159973','png','1','0','0','2','1495619861','114.241.25.209','1','6a41af890a3dde5fbc42122e3d84f32d','1');");
E_D("replace into `ld_attachment` values('151','content','29','探索学习4.png','2017/0524/20170524055811713.png','170590','png','1','0','0','2','1495619891','114.241.25.209','1','6953325018a2b01199b74f58d7dcec53','1');");
E_D("replace into `ld_attachment` values('152','content','29','观察分析推理3.png','2017/0524/20170524055834171.png','210862','png','1','0','0','2','1495619914','114.241.25.209','1','d28675d5690946eca26b37d4f3526575','1');");
E_D("replace into `ld_attachment` values('153','content','29','观察分析推理3.png','2017/0524/20170524055910915.png','210862','png','1','0','0','2','1495619950','114.241.25.209','1','59b9c58e12538de2f84e7eeadf4e9f28','1');");
E_D("replace into `ld_attachment` values('154','content','0','图片17.png','2017/0524/20170524055922996.png','155700','png','1','0','0','2','1495619962','114.241.25.209','0','a0662ad283c79ee330276e812e003c1c','1');");
E_D("replace into `ld_attachment` values('155','content','29','动手能力1.png','2017/0524/20170524055946536.png','195442','png','1','0','0','2','1495619986','114.241.25.209','1','ca3aff45eeb7d5fc8251bff9c8e5e967','1');");
E_D("replace into `ld_attachment` values('156','content','0','图片18.png','2017/0524/20170524060205413.png','147573','png','1','0','0','2','1495620125','114.241.25.209','0','92427b6cda1a548a275921b9d4648bdf','1');");
E_D("replace into `ld_attachment` values('157','content','0','图片19.png','2017/0524/20170524060533833.png','86016','png','1','0','0','2','1495620332','114.241.25.209','0','7d96038a73607d702da29fe5de8ecac9','1');");
E_D("replace into `ld_attachment` values('158','content','0','1.jpg','2017/0524/20170524060709314.jpg','20438','jpg','1','0','0','2','1495620429','114.241.25.209','0','c4b0181f05943f3d43ce46536b5a74d2','1');");
E_D("replace into `ld_attachment` values('159','content','0','图片20.png','2017/0524/20170524060749550.png','127046','png','1','0','0','2','1495620469','114.241.25.209','0','a16d3f89fe07d88c57778aec0cc1b958','1');");
E_D("replace into `ld_attachment` values('160','content','0','1.jpg','2017/0524/20170524060836667.jpg','20438','jpg','1','0','0','2','1495620516','114.241.25.209','0','796978322ddbb8b8f9753de13565dbb6','1');");
E_D("replace into `ld_attachment` values('161','content','0','PC版进阶课程.jpg','2017/0524/20170524060944607.jpg','171629','jpg','1','0','0','2','1495620584','114.241.25.209','0','6db510770a80282fdaf78664024f950a','1');");
E_D("replace into `ld_attachment` values('162','content','0','图片21.png','2017/0524/20170524061001360.png','157226','png','1','0','0','2','1495620601','114.241.25.209','0','5371bd7887f73691d76e29fe13e7e9f6','1');");
E_D("replace into `ld_attachment` values('163','content','0','2.jpg','2017/0524/20170524061004707.jpg','20357','jpg','1','0','0','2','1495620604','114.241.25.209','0','62dad0b96bc60679dc56196fcd0c2e86','1');");
E_D("replace into `ld_attachment` values('164','content','0','PC版进阶课程.jpg','2017/0524/20170524061237101.jpg','171629','jpg','1','0','0','2','1495620757','114.241.25.209','0','9e9768ba7d978db91c0d35e44591b23e','1');");
E_D("replace into `ld_attachment` values('165','content','0','2.jpg','2017/0524/20170524061300957.jpg','20357','jpg','1','0','0','2','1495620780','114.241.25.209','0','b5a4ceae9bcbd90ddb1d4a530d9145cc','1');");
E_D("replace into `ld_attachment` values('166','content','0','1.jpg','2017/0524/20170524061759869.jpg','22023','jpg','1','0','0','2','1495621079','114.241.25.209','0','8df1da8ae52f836dcdfc740d599252e6','1');");
E_D("replace into `ld_attachment` values('167','content','0','图片21.png','2017/0524/20170524061827479.png','157226','png','1','0','0','2','1495621107','114.241.25.209','0','27c446f14c84d29982b0fda4d7eb19e5','1');");
E_D("replace into `ld_attachment` values('168','content','0','图片22.png','2017/0524/20170524062035759.png','142408','png','1','0','0','2','1495621235','114.241.25.209','0','2bde97ad8b806a66fedad77f0bf34573','1');");
E_D("replace into `ld_attachment` values('169','content','0','二阶下.png','2017/0524/20170524062859543.png','127474','png','1','0','0','2','1495621739','114.241.25.209','0','6220660753ecb27a206e6740bc0e6aa3','1');");
E_D("replace into `ld_attachment` values('170','content','29','school_03.jpg','2017/0524/20170524062928575.jpg','51259','jpg','1','0','0','1','1495621768','123.118.216.31','0','4221edd81c403a4b964a61d435a02218','1');");
E_D("replace into `ld_attachment` values('171','content','0','二阶下87.png','2017/0524/20170524063057813.png','116411','png','1','0','0','2','1495621857','114.241.25.209','0','d55291d9315d380af93f748b868a732e','1');");
E_D("replace into `ld_attachment` values('172','content','0','二阶下90.png','2017/0524/20170524063259986.png','88143','png','1','0','0','2','1495621979','114.241.25.209','0','d3ffc0e7e397c3475677305accf37f06','1');");
E_D("replace into `ld_attachment` values('173','content','0','二阶下92.png','2017/0524/20170524063617373.png','188612','png','1','0','0','2','1495622177','114.241.25.209','0','5e64b5db980eb4326539d53a005ad772','1');");
E_D("replace into `ld_attachment` values('174','content','0','QQ图片20170524183119.png','2017/0524/20170524063711889.png','72580','png','1','0','0','1','1495622231','123.118.216.31','0','7cd62e8a8a62018cb5ea98df548c792b','1');");
E_D("replace into `ld_attachment` values('175','content','0','哎哎哎.png','2017/0524/20170524063713723.png','188612','png','1','0','0','2','1495622233','114.241.25.209','0','8a03f8d336bcfbfd13303338050e04d8','1');");
E_D("replace into `ld_attachment` values('176','content','0','三阶上.png','2017/0524/20170524064014115.png','36030','png','1','0','0','2','1495622414','114.241.25.209','0','760d9c72196b91f3fe75ab8d397cb41e','1');");
E_D("replace into `ld_attachment` values('177','content','0','三阶上1.png','2017/0524/20170524064151603.png','111987','png','1','0','0','2','1495622511','114.241.25.209','0','bdab542394f466d633e1f047f256dc8c','1');");
E_D("replace into `ld_attachment` values('178','content','0','三阶上2.png','2017/0524/20170524064408576.png','98850','png','1','0','0','2','1495622648','114.241.25.209','0','65541080d225252c4d3baf88fdc413d9','1');");
E_D("replace into `ld_attachment` values('179','content','0','pc版  初级课程图片.jpg','2017/0524/20170524065703360.jpg','90763','jpg','1','0','0','2','1495623423','114.241.25.209','0','ad17ec31e6758a5f998707d912c06292','1');");
E_D("replace into `ld_attachment` values('180','content','0','机器人系列.jpg','2017/0524/20170524065725152.jpg','65009','jpg','1','0','0','2','1495623445','114.241.25.209','0','ea455389071ee83a45703bf488cf7e33','1');");
E_D("replace into `ld_attachment` values('181','content','0','PC版创客系列.jpg','2017/0524/20170524073110333.jpg','89279','jpg','1','0','0','2','1495625470','114.241.25.209','0','4b3826fda162ef15dafe36b8494efe26','1');");
E_D("replace into `ld_attachment` values('182','content','0','手机版创客系列.jpg','2017/0524/20170524073131113.jpg','58590','jpg','1','0','0','2','1495625491','114.241.25.209','0','8891f6502dd890023b39309175c00837','1');");
E_D("replace into `ld_attachment` values('183','content','0','258-479-1.jpg','2017/0524/20170524073824662.jpg','53609','jpg','1','0','0','2','1495625904','114.241.25.209','0','3fc501d19c94017ad45e6393523ea7c7','1');");
E_D("replace into `ld_attachment` values('184','content','0','258-479-2.jpg','2017/0524/20170524074037299.jpg','109964','jpg','1','0','0','2','1495626037','114.241.25.209','0','2bd990a10db0dafbf33ed1154e94f857','1');");
E_D("replace into `ld_attachment` values('185','content','0','PC版中级课程.jpg','2017/0524/20170524074934192.jpg','89779','jpg','1','0','0','2','1495626574','114.241.25.209','0','74673cca52a84ff94bd51ade409b1861','1');");
E_D("replace into `ld_attachment` values('186','content','0','258-479-3.jpg','2017/0524/20170524074954847.jpg','53594','jpg','1','0','0','2','1495626594','114.241.25.209','0','0d0c388455d260288f708dff560ad7db','1');");
E_D("replace into `ld_attachment` values('187','content','0','pc版拓展课程.jpg','2017/0524/20170524075120775.jpg','46653','jpg','1','0','0','2','1495626680','114.241.25.209','0','82664709ed0d103fccf36e3e68887273','1');");
E_D("replace into `ld_attachment` values('188','content','0','258-479-4.jpg','2017/0524/20170524075142985.jpg','24619','jpg','1','0','0','2','1495626702','114.241.25.209','0','352b5f8354a3db191b65760fda2eac0e','1');");
E_D("replace into `ld_attachment` values('189','content','0','pc版  高级课程.jpg','2017/0524/20170524075240900.jpg','38223','jpg','1','0','0','2','1495626760','114.241.25.209','0','9ce99f2671f54c3f369ed29ce5ea7b51','1');");
E_D("replace into `ld_attachment` values('190','content','0','258-479-5.jpg','2017/0524/20170524075300826.jpg','71138','jpg','1','0','0','2','1495626780','114.241.25.209','0','655b65ecf3298cc4996fb276837a0a18','1');");
E_D("replace into `ld_attachment` values('191','content','13','韩林霞.jpg','2017/0524/20170524081024592.jpg','1334709','jpg','1','0','0','2','1495627824','114.241.25.209','1','1d64c87245c977228a854da5a9deb4c2','1');");
E_D("replace into `ld_attachment` values('192','content','13','金治理.jpg','2017/0524/20170524081048909.jpg','1405903','jpg','1','0','0','2','1495627848','114.241.25.209','1','c9b5811d1e47268b2b918caacd32b809','1');");
E_D("replace into `ld_attachment` values('193','content','0','QQ图片20170524202245.jpg','2017/0524/20170524091825123.jpg','24903','jpg','1','0','0','2','1495631905','61.49.114.183','0','4764ae5413c61d96227b7268096c76e3','1');");
E_D("replace into `ld_attachment` values('194','content','0','手机虚拟系列.jpg','2017/0524/20170524091847155.jpg','33541','jpg','1','0','0','2','1495631927','61.49.114.183','1','3b7d02f3cc43a9e1ac8e0e8a6b0ed3e9','1');");
E_D("replace into `ld_attachment` values('195','content','0','258-479-4.jpg','2017/0524/20170524095339584.jpg','24619','jpg','1','0','0','2','1495634019','61.49.114.183','0','b9a94f28009dbeac5bdcd0452a7965d3','1');");
E_D("replace into `ld_attachment` values('196','content','0','258-479-3.jpg','2017/0524/20170524095540314.jpg','53594','jpg','1','0','0','2','1495634140','61.49.114.183','0','3e4139ba74b447bb63bd8ace6718e509','1');");
E_D("replace into `ld_attachment` values('197','content','0','258-479-5.jpg','2017/0524/20170524095613648.jpg','71138','jpg','1','0','0','2','1495634173','61.49.114.183','0','7630d76590cbe5c0488dbbcbd7e68df7','1');");
E_D("replace into `ld_attachment` values('198','content','0','258-479-2.jpg','2017/0524/20170524095733538.jpg','109964','jpg','1','0','0','2','1495634253','61.49.114.183','0','87343bc92d038914c6674809cd4ac96e','1');");
E_D("replace into `ld_attachment` values('199','content','0','258-479-1.jpg','2017/0524/20170524095956933.jpg','53609','jpg','1','0','0','2','1495634396','61.49.114.183','0','548b1973eb86b9944e673f9c7309744a','1');");
E_D("replace into `ld_attachment` values('200','content','85','勘探车机器人.jpg','2017/0525/20170525120115582.jpg','7248223','jpg','1','0','0','1','1495684875','114.245.36.119','1','312659c89a51cbb2bf973b96bfdfe566','1');");
E_D("replace into `ld_attachment` values('201','content','85','1x5o.jpg','2017/0525/20170525120233483.jpg','45417','jpg','1','0','0','1','1495684953','114.245.36.119','1','7379c7cf6406aec2ca1b50fc5e93d551','1');");
E_D("replace into `ld_attachment` values('202','content','85','AD0I1NWxBRAEGAAglpLBwAUouJ_j9AcwhAI4_gE.png','2017/0525/20170525120400452.png','135308','png','1','0','0','1','1495685040','114.245.36.119','1','e061abe8c74e560006fb428a2d29e767','1');");
E_D("replace into `ld_attachment` values('205','content','85','QQ图片20170525140507.png','2017/0525/20170525023259864.png','120113','png','1','0','0','1','1495693979','114.245.36.119','1','70b8ea80ca0dbe8c3e6e6880c4de0201','1');");
E_D("replace into `ld_attachment` values('204','content','85','QQ图片20170525140507.png','2017/0525/20170525023116166.png','120113','png','1','0','0','1','1495693876','114.245.36.119','1','b1331998678a24cff4d51117d1df2164','1');");
E_D("replace into `ld_attachment` values('206','content','85','QQ图片20170525140512.png','2017/0525/20170525023332365.png','110952','png','1','0','0','1','1495694012','114.245.36.119','1','05f4257e1483859171b53bf60066beea','1');");
E_D("replace into `ld_attachment` values('207','content','85','QQ图片20170525140452.png','2017/0525/20170525023352953.png','74090','png','1','0','0','1','1495694032','114.245.36.119','1','cb41e93666105c2a60910dff1e0bdff3','1');");
E_D("replace into `ld_attachment` values('208','content','85','QQ图片20170525140517.png','2017/0525/20170525023423852.png','126994','png','1','0','0','1','1495694063','114.245.36.119','1','e33f2953d6145374ad21ace966c117fc','1');");
E_D("replace into `ld_attachment` values('209','content','85','QQ图片20170525140517.png','2017/0525/20170525023443441.png','126994','png','1','0','0','1','1495694083','114.245.36.119','1','a113aa30c486f06def900979db98d0db','1');");
E_D("replace into `ld_attachment` values('210','content','85','4.png','2017/0525/20170525032131582.png','44387','png','1','0','0','1','1495696891','114.245.36.119','1','6216088b87819776c09843d514844de0','1');");
E_D("replace into `ld_attachment` values('211','content','85','5.png','2017/0525/20170525032302426.png','29211','png','1','0','0','1','1495696982','114.245.36.119','1','52102770269f8dcdd49f68e15db7d218','1');");
E_D("replace into `ld_attachment` values('212','content','25','韩林霞.jpg','2017/0525/20170525032336456.jpg','1334709','jpg','1','0','0','2','1495697016','114.246.136.231','1','e2d35168f8a73a1df26a99753095f3a4','1');");
E_D("replace into `ld_attachment` values('213','content','25','韩林霞.jpg','2017/0525/20170525032449991.jpg','1334709','jpg','1','0','0','2','1495697089','114.246.136.231','1','c66e9e57f4d034410fccbef7569c10c1','1');");
E_D("replace into `ld_attachment` values('214','content','85','%G[9RGIK\$TMEARJ4N2~OSVX.jpg','2017/0525/20170525032629414.jpg','62629','jpg','1','0','0','1','1495697189','114.245.36.119','1','6555289d545e73cff81f84d41b9d8103','1');");
E_D("replace into `ld_attachment` values('215','content','85','中国地图.png','2017/0525/20170525035332231.png','736670','png','1','0','0','2','1495698812','114.246.136.231','1','20bb95bc39659ad32016edc6f7d20aba','1');");
E_D("replace into `ld_attachment` values('216','content','47','2.jpg','2017/0525/20170525040532808.jpg','51775','jpg','1','0','0','2','1495699532','114.245.36.119','1','f0ee5ceb203a8225409724985528baba','1');");
E_D("replace into `ld_attachment` values('217','content','85','QQ图片20170525161106.jpg','2017/0525/20170525040741534.jpg','361860','jpg','1','0','0','2','1495699661','114.245.36.119','1','50b01a4a26fad8581fe723e4d48a372e','1');");
E_D("replace into `ld_attachment` values('218','content','25','微信图片_20170525161826.jpg韩.jpg','2017/0525/20170525041956230.jpg','670255','jpg','1','0','0','2','1495700396','114.246.136.231','1','df93072648f8b1c5a4c0dfa0e14131b5','1');");
E_D("replace into `ld_attachment` values('219','content','25','微信图片_20170525162044.jpg金.jpg','2017/0525/20170525042143609.jpg','540474','jpg','1','0','0','2','1495700503','114.246.136.231','1','66c671401148b6a243daca2deb1cb2a1','1');");
E_D("replace into `ld_attachment` values('220','content','25','微信图片_20170525162926.jpg小白.jpg','2017/0525/20170525043025350.jpg','142095','jpg','1','0','0','2','1495701025','114.246.136.231','1','752dc470f5c72f8c9175838816331a64','1');");
E_D("replace into `ld_attachment` values('221','content','25','微信图片_20170525162916.jpg小黑.jpg','2017/0525/20170525043055475.jpg','122657','jpg','1','0','0','2','1495701055','114.246.136.231','1','54595db9e5aa4b2c2030e1df5f157b77','1');");
E_D("replace into `ld_attachment` values('222','content','85','11.jpg','2017/0525/20170525043803520.jpg','77277','jpg','1','0','0','2','1495701483','114.245.36.119','1','89c7f3d261c8e8ed642e0b0206ef9dd6','1');");
E_D("replace into `ld_attachment` values('223','content','85','微信图片_20170525164704.png东.png','2017/0525/20170525044757767.png','962951','png','1','0','0','2','1495702077','114.246.136.231','1','abc285d2596d785064991d5afdfdd95a','1');");
E_D("replace into `ld_attachment` values('224','content','85','12.jpg','2017/0525/20170525045657452.jpg','194413','jpg','1','0','0','2','1495702617','114.245.36.119','1','3b8f47ffb56ff1ca6bcc812fe35fc08e','1');");
E_D("replace into `ld_attachment` values('225','content','85','13.jpg','2017/0525/20170525051028621.jpg','187837','jpg','1','0','0','2','1495703428','114.245.36.119','1','b44a340cf71227990c75dd51db6d508e','1');");
E_D("replace into `ld_attachment` values('226','content','85','13.jpg','2017/0525/20170525051509906.jpg','190245','jpg','1','0','0','2','1495703709','114.245.36.119','1','2f3369270dad8a6525445bf44ed9ffcd','1');");
E_D("replace into `ld_attachment` values('227','content','27','微信图片_20170525191343.png收费.png','2017/0525/20170525071610924.png','94114','png','1','0','0','2','1495710970','114.246.136.231','1','9436aa0aabcaf5f925e9e290a0d45318','1');");
E_D("replace into `ld_attachment` values('228','content','27','微信图片_20170525191325.png爬楼梯.png','2017/0525/20170525072407923.png','97858','png','1','0','0','2','1495711447','114.246.136.231','1','294ce0cc96aa4c7c3e23f7829fdf2c91','1');");
E_D("replace into `ld_attachment` values('229','content','27','微信图片_20170525191646.png颜色.png','2017/0525/20170525072443931.png','123128','png','1','0','0','2','1495711483','114.246.136.231','1','cd278cdc71d9a1c1a3eb2d4210d19de5','1');");
E_D("replace into `ld_attachment` values('230','content','27','微信图片_20170525191314.png恐龙.png','2017/0525/20170525072509449.png','89769','png','1','0','0','2','1495711509','114.246.136.231','1','46711e3b01866aa8a1c116ffc0345c04','1');");
E_D("replace into `ld_attachment` values('231','content','27','微信图片_20170525191637.png完整.png','2017/0525/20170525072547269.png','118710','png','1','0','0','2','1495711547','114.246.136.231','1','5b4ac4d182a16668b8bd0549980c78f4','1');");
E_D("replace into `ld_attachment` values('232','content','27','微信图片_20170525191335.png不落地.png','2017/0525/20170525072618482.png','97216','png','1','0','0','2','1495711578','114.246.136.231','1','316ec7cc76d66294fab8daa127dd3288','1');");

require("../../inc/footer.php");
?>