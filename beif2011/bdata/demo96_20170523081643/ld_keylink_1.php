<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_keylink`;");
E_C("CREATE TABLE `ld_keylink` (
  `keylinkid` smallint(5) unsigned NOT NULL auto_increment,
  `word` char(40) NOT NULL,
  `url` char(100) NOT NULL,
  PRIMARY KEY  (`keylinkid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>