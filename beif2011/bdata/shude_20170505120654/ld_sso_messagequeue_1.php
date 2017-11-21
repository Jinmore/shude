<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_sso_messagequeue`;");
E_C("CREATE TABLE `ld_sso_messagequeue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `operation` char(32) NOT NULL,
  `succeed` tinyint(1) NOT NULL DEFAULT '0',
  `totalnum` smallint(6) unsigned NOT NULL DEFAULT '0',
  `noticedata` mediumtext NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `appstatus` mediumtext,
  PRIMARY KEY (`id`),
  KEY `dateline` (`dateline`),
  KEY `succeed` (`succeed`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ld_sso_messagequeue` values('1','member_add','0','1','array (\n  ''username'' => ''张墨轩'',\n  ''password'' => ''f9677cd2ab6db3d55020cc850619a1fb'',\n  ''email'' => ''2984398051@qq.com'',\n  ''regip'' => '''',\n  ''regdate'' => ''1490861672'',\n  ''lastdate'' => ''1490861672'',\n  ''appname'' => ''phpcms v9'',\n  ''type'' => ''app'',\n  ''random'' => ''jHexTp'',\n  ''ucuserid'' => ''0'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_add'',\n)','1490861672','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('2','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1490953770','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('3','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''3b1cb0d5cd237367858c50eaa2b18526'',\n  ''random'' => ''eMGAmY'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491528672','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('4','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''1cc30e04ab2448d7a9be8f90f659cc4e'',\n  ''random'' => ''KSTfg6'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491528707','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('5','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''ffe06db26afddf8b5ca89e3a31879728'',\n  ''random'' => ''3SRnmK'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491528792','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('6','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''1f76f274240b599c96db02232db9807f'',\n  ''random'' => ''haByhh'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529324','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('7','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''abeed8d675a176f38bfb04cc6c714f18'',\n  ''random'' => ''mcm97M'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529454','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('8','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''0ab1631013623b207b3f876c485c9423'',\n  ''random'' => ''byKbHy'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529480','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('9','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''6fea411155fdc46ab4d50ab30059b019'',\n  ''random'' => ''xDxKnG'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529496','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('10','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''3157cd2496923733ee243cb7e834458c'',\n  ''random'' => ''AWaWdr'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529575','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('11','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''c1a02f9de95a8a110adb62d1a08a45cf'',\n  ''random'' => ''Bntfkr'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529738','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('12','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''448cc4c026f92829cfa5cec6e7d44077'',\n  ''random'' => ''WCExET'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529763','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('13','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''9463615f6776a2bfee271e75425cf395'',\n  ''random'' => ''4EHgA7'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529777','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('14','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''bda81b7ffc2b66719a16e97bf3f324cf'',\n  ''random'' => ''wWN43D'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529785','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('15','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''de2d93f658f5c32bcc39ed0df39695a4'',\n  ''random'' => ''Wkwkmk'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529843','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('16','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''4018e91809c3f1a72c63da750d1344af'',\n  ''random'' => ''4GKsY8'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491529937','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('17','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''72a05074c53f122b4b69d42fa9f4a60a'',\n  ''random'' => ''xACey8'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530047','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('18','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''d4831ca38052f37114641beb105e41fb'',\n  ''random'' => ''RHet82'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530154','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('19','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''379758ac7aa7efd6e4f27916c6f03b5b'',\n  ''random'' => ''5b74B6'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530199','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('20','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''824b20d535c3662ce083a4cc656c286a'',\n  ''random'' => ''CnSWB8'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530596','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('21','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''988988e9b663d7c28a658315c1415150'',\n  ''random'' => ''7aTe2H'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530653','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('22','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''de2d8281c08df89331d67388144b1e2b'',\n  ''random'' => ''rmtd5y'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530774','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('23','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''977d3ee3890342b465ab326f750103b1'',\n  ''random'' => ''sm5XDg'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530853','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('24','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''d171bd3650f14e796e05d868d5d3240b'',\n  ''random'' => ''5DanHK'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491530925','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('25','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''ba44cd26006a45d688824c00af1ea265'',\n  ''random'' => ''ErmTtR'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491531046','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('26','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''8c15d5ae0bb307713de8756dca169707'',\n  ''random'' => ''R7Fn73'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491531081','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('27','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''19fc598081b034a4d30186cedb1b615a'',\n  ''random'' => ''xnEAgh'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491553370','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('28','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491553449','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('29','member_edit','0','1','array (\n  ''appname'' => ''phpcms v9'',\n  ''password'' => ''0de15b0ebc75d2a2436dad6874c4a43c'',\n  ''random'' => ''hNBtkC'',\n  ''uid'' => ''1'',\n  ''action'' => ''member_edit'',\n)','1491553665','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('30','member_add','0','1','array (\n  ''username'' => ''晴天'',\n  ''password'' => ''e45f0428be9be5c697c144ef27832ca8'',\n  ''email'' => ''12313@qq.com'',\n  ''regip'' => ''61.149.194.92'',\n  ''regdate'' => ''1492476965'',\n  ''lastdate'' => ''1492476965'',\n  ''appname'' => ''phpcms v9'',\n  ''type'' => ''app'',\n  ''random'' => ''aMprSf'',\n  ''ucuserid'' => ''0'',\n  ''uid'' => ''2'',\n  ''action'' => ''member_add'',\n)','1492476965','{\"1\":1}');");
E_D("replace into `ld_sso_messagequeue` values('31','member_add','0','1','array (\n  ''username'' => ''xbbs'',\n  ''password'' => ''6022455bcb39d4ef0f239a10e54edb89'',\n  ''email'' => ''2984398052@qq.com'',\n  ''regip'' => '''',\n  ''regdate'' => ''1493773777'',\n  ''lastdate'' => ''1493773777'',\n  ''appname'' => ''phpcms v9'',\n  ''type'' => ''app'',\n  ''random'' => ''gxWYyu'',\n  ''ucuserid'' => ''0'',\n  ''uid'' => ''3'',\n  ''action'' => ''member_add'',\n)','1493773777','{\"1\":1}');");

require("../../inc/footer.php");
?>