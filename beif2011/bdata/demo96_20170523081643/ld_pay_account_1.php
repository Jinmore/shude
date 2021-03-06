<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_pay_account`;");
E_C("CREATE TABLE `ld_pay_account` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `trade_sn` char(50) NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `username` char(20) NOT NULL,
  `contactname` char(50) NOT NULL,
  `email` char(40) NOT NULL,
  `telephone` char(20) NOT NULL,
  `discount` float(8,2) NOT NULL default '0.00',
  `money` char(8) NOT NULL,
  `quantity` int(8) unsigned NOT NULL default '1',
  `addtime` int(10) NOT NULL default '0',
  `paytime` int(10) NOT NULL default '0',
  `usernote` char(255) NOT NULL,
  `pay_id` tinyint(3) NOT NULL,
  `pay_type` enum('offline','recharge','selfincome','online') NOT NULL default 'recharge',
  `payment` char(90) NOT NULL,
  `type` tinyint(3) NOT NULL default '1',
  `ip` char(15) NOT NULL default '0.0.0.0',
  `status` enum('succ','failed','error','progress','timeout','cancel','waitting','unpay') NOT NULL default 'unpay',
  `adminnote` char(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `status` (`status`),
  KEY `userid` (`userid`),
  KEY `trade_sn` (`trade_sn`,`money`,`status`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>