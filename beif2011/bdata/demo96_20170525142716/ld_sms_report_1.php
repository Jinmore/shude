<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_sms_report`;");
E_C("CREATE TABLE `ld_sms_report` (
  `id` bigint(15) NOT NULL auto_increment,
  `mobile` varchar(11) NOT NULL,
  `posttime` int(10) unsigned NOT NULL default '0',
  `id_code` varchar(10) NOT NULL,
  `msg` varchar(90) NOT NULL,
  `send_userid` mediumint(8) unsigned NOT NULL default '0',
  `status` tinyint(2) NOT NULL default '0',
  `return_id` varchar(30) NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `mobile` (`mobile`,`posttime`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `ld_sms_report` values('1','15801257126','1494471459','811138','您好！您的网站登录验证码为：811138，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','2019039','');");
E_D("replace into `ld_sms_report` values('2','15801257126','1494472475','','您好！您的网站登录验证码为：358266，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','27622624','');");
E_D("replace into `ld_sms_report` values('3','15801257126','1494473031','','您好！您的网站登录验证码为：203212，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','27629274','');");
E_D("replace into `ld_sms_report` values('4','15801257126','1494489780','','您好！您的网站登录验证码为：434735，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','27807644','');");
E_D("replace into `ld_sms_report` values('5','15801257126','1494575404','','您好！您的网站登录验证码为：820853，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','28299184','');");
E_D("replace into `ld_sms_report` values('6','15801257126','1495522291','','您好！您的网站登录验证码为：897652，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32333654','111.196.81.71');");
E_D("replace into `ld_sms_report` values('7','18811485028','1495522710','','您好！您的网站登录验证码为：182782，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32335864','114.241.25.209');");
E_D("replace into `ld_sms_report` values('8','18811485028','1495524162','','您好！您的网站登录验证码为：420024，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32344334','111.196.81.71');");
E_D("replace into `ld_sms_report` values('9','18811485028','1495524162','','您好！您的网站登录验证码为：531861，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32344344','111.196.81.71');");
E_D("replace into `ld_sms_report` values('10','18811485028','1495524566','','您好！您的网站登录验证码为：836701，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32348064','111.196.81.71');");
E_D("replace into `ld_sms_report` values('11','18811485028','1495527471','','您好！您的网站登录验证码为：711296，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32368724','114.241.25.209');");
E_D("replace into `ld_sms_report` values('12','18811485028','1495529251','','您好！您的网站登录验证码为：558966，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32379154','111.196.81.71');");
E_D("replace into `ld_sms_report` values('13','15901194232','1495531704','','您好！您的网站登录验证码为：577358，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32394704','114.241.25.209');");
E_D("replace into `ld_sms_report` values('14','18811485028','1495532266','','您好！您的网站登录验证码为：719304，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32397544','111.196.81.71');");
E_D("replace into `ld_sms_report` values('15','15801257126','1495532544','','您好！您的网站登录验证码为：405454，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32398924','111.196.81.71');");
E_D("replace into `ld_sms_report` values('16','15901194232','1495533256','','您好！您的网站登录验证码为：207332，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32402884','114.241.25.209');");
E_D("replace into `ld_sms_report` values('17','18811485028','1495537396','','您好！您的网站登录验证码为：564695，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32425064','114.241.25.209');");
E_D("replace into `ld_sms_report` values('18','18811485028','1495589583','','您好！您的网站登录验证码为：877050，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32526044','114.241.25.209');");
E_D("replace into `ld_sms_report` values('19','15801257126','1495681414','','您好！您的网站登录验证码为：743431，请您在60秒内完成验证，如非本人操作，请勿泄露。','0','1','32847004','114.245.36.119');");

require("../../inc/footer.php");
?>