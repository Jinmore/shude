<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_member`;");
E_C("CREATE TABLE `ld_member` (
  `userid` mediumint(8) unsigned NOT NULL auto_increment,
  `phpssouid` mediumint(8) unsigned NOT NULL,
  `username` char(20) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  `encrypt` char(6) NOT NULL,
  `nickname` char(20) NOT NULL,
  `regdate` int(10) unsigned NOT NULL default '0',
  `lastdate` int(10) unsigned NOT NULL default '0',
  `regip` char(15) NOT NULL default '',
  `lastip` char(15) NOT NULL default '',
  `loginnum` smallint(5) unsigned NOT NULL default '0',
  `email` char(32) NOT NULL default '',
  `groupid` tinyint(3) unsigned NOT NULL default '0',
  `areaid` smallint(5) unsigned NOT NULL default '0',
  `amount` decimal(8,2) unsigned NOT NULL default '0.00',
  `point` smallint(5) unsigned NOT NULL default '0',
  `modelid` smallint(5) unsigned NOT NULL default '0',
  `message` tinyint(1) unsigned NOT NULL default '0',
  `islock` tinyint(1) unsigned NOT NULL default '0',
  `vip` tinyint(1) unsigned NOT NULL default '0',
  `overduedate` int(10) unsigned NOT NULL default '0',
  `siteid` smallint(5) unsigned NOT NULL default '1',
  `connectid` char(40) NOT NULL default '',
  `from` char(10) NOT NULL default '',
  `mobile` char(11) NOT NULL default '',
  PRIMARY KEY  (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`(20)),
  KEY `phpssouid` (`phpssouid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ld_member` values('1','1','张墨轩','df77dcddc361ab74bae5fcdc14bb550d','NXK8ay','张墨轩','1490861672','1495081319','','222.129.32.15','0','2984398051@qq.com','2','0','0.00','20','10','0','0','0','0','1','','','15801257126');");
E_D("replace into `ld_member` values('2','2','晴天','b2e64c4e0bc68ecf5de94f680811bdf3','aMprSf','张晴天','1492476965','1495502401','61.149.194.92','111.196.81.71','0','12313@qq.com','2','0','0.00','888','10','0','0','0','0','1','','','15801355020');");
E_D("replace into `ld_member` values('3','3','xbbs','6022455bcb39d4ef0f239a10e54edb89','gxWYyu','张子浩','1493773777','1495709935','','114.245.36.119','0','2984398052@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','15801257126');");
E_D("replace into `ld_member` values('4','4','树德','dd0d9aafc0ca3709f8e3cb7edebd8c38','GC6wWr','树德测试','1495173643','1495174935','114.245.35.216','114.241.26.196','0','13212@qq.com','2','0','0.00','0','10','0','0','0','0','1','','','13245678970');");
E_D("replace into `ld_member` values('5','5','测试','ab3ccda45bc65f9c73237fce9252acf6','vBgcAa','测试中','1495431104','1495431810','222.129.53.161','222.129.53.161','0','123@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','13511111111');");
E_D("replace into `ld_member` values('6','6','测试一号','bbab1d4b5de6ca45a03eca5e3be45935','TYwgwy','测试一号','1495521420','1495521760','114.241.25.209','114.241.25.209','0','1234@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','13800138000');");
E_D("replace into `ld_member` values('7','7','测试2','b766218cb0b8fce53d7f423285ec2637','34jdBb','张测试','1495521456','1495521456','111.196.81.71','','0','1243@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','13201010101');");
E_D("replace into `ld_member` values('8','8','张炎','a52b3fed160b1498311bc604fd085f65','hAn6GQ','张炎','1495521549','1495589581','114.241.25.209','114.241.25.209','0','111111@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','18811485028');");
E_D("replace into `ld_member` values('9','9','测试二号','43cc6510558df37aab86905a9c96baf4','dgt3HW','测试二号','1495531537','1495531702','114.241.25.209','114.241.25.209','0','12345@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','15901194232');");
E_D("replace into `ld_member` values('10','10','测试三号','e4a19d685a4da56fecfaa6b107a6cfc5','W1prc1','111','1495533107','1495533248','114.241.25.209','114.241.25.209','0','123456@qq.com','0','0','0.00','0','10','0','0','0','0','1','','','15901194232');");

require("../../inc/footer.php");
?>