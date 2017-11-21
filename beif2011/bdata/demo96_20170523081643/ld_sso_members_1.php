<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_sso_members`;");
E_C("CREATE TABLE `ld_sso_members` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `username` char(20) NOT NULL default '',
  `password` char(32) NOT NULL default '',
  `random` char(8) NOT NULL default '',
  `email` char(32) NOT NULL default '',
  `regip` char(15) NOT NULL default '',
  `regdate` int(10) unsigned NOT NULL default '0',
  `lastip` char(15) NOT NULL default '0',
  `lastdate` int(10) unsigned NOT NULL default '0',
  `appname` char(15) NOT NULL,
  `type` enum('app','connect') default NULL,
  `avatar` tinyint(1) NOT NULL default '0',
  `ucuserid` mediumint(8) unsigned default '0',
  PRIMARY KEY  (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `ucuserid` (`ucuserid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ld_sso_members` values('1','张墨轩','df77dcddc361ab74bae5fcdc14bb550d','NXK8ay','2984398051@qq.com','','1490861672','121.40.22.203','1495081319','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('2','晴天','b2e64c4e0bc68ecf5de94f680811bdf3','aMprSf','12313@qq.com','61.149.194.92','1492476965','121.40.22.203','1495502401','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('3','xbbs','6022455bcb39d4ef0f239a10e54edb89','gxWYyu','2984398052@qq.com','','1493773777','121.40.22.203','1495522254','phpcms v9','app','1','0');");
E_D("replace into `ld_sso_members` values('4','树德','dd0d9aafc0ca3709f8e3cb7edebd8c38','GC6wWr','13212@qq.com','114.245.35.216','1495173643','121.40.22.203','1495174935','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('5','测试','ab3ccda45bc65f9c73237fce9252acf6','vBgcAa','123@qq.com','222.129.53.161','1495431104','121.40.22.203','1495431810','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('6','测试一号','bbab1d4b5de6ca45a03eca5e3be45935','TYwgwy','1234@qq.com','114.241.25.209','1495521420','121.40.22.203','1495521760','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('7','测试2','b766218cb0b8fce53d7f423285ec2637','34jdBb','1243@qq.com','111.196.81.71','1495521457','0','1495521457','phpcms v9','app','0','0');");
E_D("replace into `ld_sso_members` values('8','张炎','a52b3fed160b1498311bc604fd085f65','hAn6GQ','111111@qq.com','114.241.25.209','1495521549','121.40.22.203','1495525013','phpcms v9','app','0','0');");

require("../../inc/footer.php");
?>