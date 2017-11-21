<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_menu`;");
E_C("CREATE TABLE `ld_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL DEFAULT '',
  `parentid` smallint(6) NOT NULL DEFAULT '0',
  `m` char(20) NOT NULL DEFAULT '',
  `c` char(20) NOT NULL DEFAULT '',
  `a` char(20) NOT NULL DEFAULT '',
  `data` char(100) NOT NULL DEFAULT '',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0',
  `display` enum('1','0') NOT NULL DEFAULT '1',
  `project1` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `project2` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `project3` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `project4` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `project5` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `listorder` (`listorder`),
  KEY `parentid` (`parentid`),
  KEY `module` (`m`,`c`,`a`)
) ENGINE=MyISAM AUTO_INCREMENT=1603 DEFAULT CHARSET=utf8");
E_D("replace into `ld_menu` values('1','sys_setting','0','admin','setting','init','','1','1','0','1','1','1','1');");
E_D("replace into `ld_menu` values('2','module','0','admin','module','init','','2','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('872','sync_release_point','873','release','index','init','','3','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('4','content','0','content','content','init','','4','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('5','members','0','member','member','init','','5','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('6','userinterface','0','template','style','init','','6','1','0','1','1','1','1');");
E_D("replace into `ld_menu` values('30','correlative_setting','1','admin','admin','admin','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('31','menu_manage','977','admin','menu','init','','8','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('32','posid_manage','975','admin','position','init','','7','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('29','module_manage','2','admin','module','','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('10','panel','0','admin','index','public_main','','0','1','0','1','1','1','1');");
E_D("replace into `ld_menu` values('35','menu_add','31','admin','menu','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('826','template_manager','6','','','','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('54','admin_manage','49','admin','admin_manage','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('43','category_manage','975','admin','category','init','module=admin','4','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('42','add_category','43','admin','category','add','s=0','1','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('44','edit_category','43','admin','category','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('45','badword_manage','977','admin','badword','init','','10','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('46','posid_add','32','admin','position','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('49','admin_setting','1','admin','','','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('50','role_manage','49','admin','role','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('51','role_add','50','admin','role','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('52','category_cache','43','admin','category','public_cache','module=admin','4','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('55','manage_member','5','member','member','manage','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('58','admin_add','54','admin','admin_manage','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('59','model_manage','975','content','sitemodel','init','','5','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('64','site_management','30','admin','site','init','','2','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('81','member_add','72','member','member','add','','2','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('62','add_model','59','content','sitemodel','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('65','release_point_management','30','admin','release_point','init','','3','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('66','badword_export','45','admin','badword','export','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('67','add_site','64','admin','site','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('68','badword_import','45','admin','badword','import','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('812','member_group_manage','76','member','member_group','manage','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('74','member_verify','55','member','member_verify','manage','s=0','3','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('76','manage_member_group','5','member','member_group','manage','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('77','manage_member_model','5','member','member_model','manage','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('78','member_group_add','812','member','member_group','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('79','member_model_add','813','member','member_model','add','','1','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('80','member_model_import','77','member','member_model','import','','2','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('72','member_manage','55','member','member','manage','','1','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('813','member_model_manage','77','member','member_model','manage','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('814','site_edit','64','admin','site','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('815','site_del','64','admin','site','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('816','release_point_add','65','admin','release_point','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('817','release_point_del','65','admin','release_point','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('818','release_point_edit','65','admin','release_point','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('821','content_publish','4','content','content','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('822','content_manage','821','content','content','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('867','linkage','977','admin','linkage','init','','13','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('827','template_style','826','template','style','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('828','import_style','827','template','style','import','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('831','template_export','827','template','style','export','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('830','template_file','827','template','file','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('832','template_onoff','827','template','style','disable','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('833','template_updatename','827','template','style','updatename','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('834','member_lock','72','member','member','lock','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('835','member_unlock','72','member','member','unlock','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('836','member_move','72','member','member','move','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('837','member_delete','72','member','member','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('842','verify_ignore','74','member','member_verify','manage','s=2','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('839','member_setting','55','member','member_setting','manage','','4','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('841','verify_pass','74','member','member_verify','manage','s=1','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('843','verify_delete','74','member','member_verify','manage','s=3','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('844','verify_deny','74','member','member_verify','manage','s=4','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('845','never_pass','74','member','member_verify','manage','s=5','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('846','template_file_list','827','template','file','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('847','template_file_edit','827','template','file','edit_file','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('848','file_add_file','827','template','file','add_file','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('850','listorder','76','member','member_group','sort','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('852','priv_setting','50','admin','role','priv_setting','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('853','role_priv','50','admin','role','role_priv','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('857','attachment_manage','821','attachment','manage','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('868','special','821','special','special','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('869','template_editor','827','template','file','edit_file','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('870','template_visualization','827','template','file','visualization','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('871','pc_tag_edit','827','template','file','edit_pc_tag','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('873','release_manage','4','release','html','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('874','type_manage','975','content','type_manage','init','','6','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('875','add_type','874','content','type_manage','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('876','linkageadd','867','admin','linkage','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('877','failure_list','872','release','index','failed','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('879','member_search','72','member','member','search','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('880','queue_del','872','release','index','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('881','member_model_delete','813','member','member_model','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('882','member_model_edit','813','member','member_model','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('885','workflow','977','content','workflow','init','','15','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('888','add_workflow','885','content','workflow','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('889','member_modelfield_add','813','member','member_modelfield','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('890','member_modelfield_edit','813','member','member_modelfield','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('891','member_modelfield_delete','813','member','member_modelfield','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('892','member_modelfield_manage','813','member','member_modelfield','manage','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('895','sitemodel_import','59','content','sitemodel','import','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('896','pay','29','pay','payment','pay_list','s=3','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('897','payments','896','pay','payment','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('898','paylist','896','pay','payment','pay_list','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('899','add_content','822','content','content','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('900','modify_deposit','896','pay','payment','modify_deposit','s=1','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('901','check_content','822','content','content','pass','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('902','dbsource','29','dbsource','data','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('905','create_content_html','873','content','create_html','show','','2','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('904','external_data_sources','902','dbsource','dbsource_admin','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('906','update_urls','873','content','create_html','update_urls','','1','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('960','node_add','957','collection','node','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('909','fulltext_search','29','search','search_type','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('910','manage_type','909','search','search_type','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('911','search_setting','909','search','search_admin','setting','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('912','createindex','909','search','search_admin','createindex','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('913','add_search_type','909','search','search_type','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('914','database_toos','977','admin','database','export','','6','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('915','database_export','914','admin','database','export','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('916','database_import','914','admin','database','import','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('917','dbsource_add','902','dbsource','dbsource_admin','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('918','dbsource_edit','902','dbsource','dbsource_admin','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('919','dbsource_del','902','dbsource','dbsource_admin','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('920','dbsource_data_add','902','dbsource','data','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('921','dbsource_data_edit','902','dbsource','data','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('922','dbsource_data_del','902','dbsource','data','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('926','add_special','868','special','special','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('927','edit_special','868','special','special','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('928','special_list','868','special','special','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('929','special_elite','868','special','special','elite','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('930','delete_special','868','special','special','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('931','badword_add','45','admin','badword','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('932','badword_edit','45','admin','badword','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('933','badword_delete','45','admin','badword','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('934','special_listorder','868','special','special','listorder','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('935','special_content_list','868','special','content','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('936','special_content_add','935','special','content','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('937','special_content_list','935','special','content','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('938','special_content_edit','935','special','content','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('939','special_content_delete','935','special','content','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('940','special_content_listorder','935','special','content','listorder','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('941','special_content_import','935','special','special','import','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('942','history_version','827','template','template_bak','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('943','restore_version','827','template','template_bak','restore','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('944','del_history_version','827','template','template_bak','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('945','block','821','block','block_admin','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('946','block_add','945','block','block_admin','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('950','block_edit','945','block','block_admin','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('951','block_del','945','block','block_admin','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('952','block_update','945','block','block_admin','block_update','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('953','block_restore','945','block','block_admin','history_restore','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('954','history_del','945','block','block_admin','history_del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('978','urlrule_manage','977','admin','urlrule','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('957','collection_node','821','collection','node','manage','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('979','safe_config','30','admin','setting','init','&tab=2','11','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('959','basic_config','30','admin','setting','init','','10','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('961','position_edit','32','admin','position','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('962','collection_node_edit','957','collection','node','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('963','collection_node_delete','957','collection','node','del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('990','col_url_list','957','collection','node','col_url_list','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('965','collection_node_publish','957','collection','node','publist','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('966','collection_node_import','957','collection','node','node_import','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('967','collection_node_export','957','collection','node','export','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('968','collection_node_collection_content','957','collection','node','col_content','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('969','googlesitemap','977','admin','googlesitemap','set','','11','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('970','admininfo','10','admin','admin_manage','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('971','editpwd','970','admin','admin_manage','public_edit_pwd','','1','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('972','editinfo','970','admin','admin_manage','public_edit_info','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('973','keylink','977','admin','keylink','init','','12','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('974','add_keylink','973','admin','keylink','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('975','content_settings','4','content','content_settings','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('7','extend','0','admin','extend','init_extend','','7','1','0','1','1','1','1');");
E_D("replace into `ld_menu` values('977','extend_all','7','admin','extend_all','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('980','sso_config','30','admin','setting','init','&tab=3','12','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('981','email_config','30','admin','setting','init','&tab=4','13','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('982','module_manage','29','admin','module','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('983','ipbanned','977','admin','ipbanned','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('984','add_ipbanned','983','admin','ipbanned','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('993','collection_content_import','957','collection','node','import','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('991','copy_node','957','collection','node','copy','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('992','content_del','957','collection','node','content_del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('989','downsites','977','admin','downservers','init','','0','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('994','import_program_add','957','collection','node','import_program_add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('995','import_program_del','957','collection','node','import_program_del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('996','import_content','957','collection','node','import_content','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('997','log','977','admin','log','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('998','add_page','43','admin','category','add','s=1','2','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('999','add_cat_link','43','admin','category','add','s=2','2','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1000','count_items','43','admin','category','count_items','','5','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1001','cache_all','977','admin','cache_all','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1002','create_list_html','873','content','create_html','category','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1003','create_html_quick','10','content','create_html_opt','index','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1004','create_index','1003','content','create_html','public_index','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1005','scan','977','scan','index','init','','0','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('1006','scan_report','1005','scan','index','scan_report','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1007','md5_creat','1005','scan','index','md5_creat','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1008','album_import','868','special','album','import','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('8','phpsso','0','admin','phpsso','menu','','7','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('1011','edit_content','822','content','content','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1012','push_to_special','822','content','push','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1023','delete_log','997','admin','log','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1024','delete_ip','983','admin','ipbanned','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1026','delete_keylink','973','admin','keylink','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1027','edit_keylink','973','admin','keylink','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1034','operation_pass','74','member','member_verify','pass','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1035','operation_delete','74','member','member_verify','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1039','operation_ignore','74','member','member_verify','ignore','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1038','settingsave','30','admin','setting','save','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1040','admin_edit','54','admin','admin_manage','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1041','operation_reject','74','member','member_verify','reject','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1042','admin_delete','54','admin','admin_manage','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1043','card','54','admin','admin_manage','card','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1044','creat_card','54','admin','admin_manage','creat_card','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1045','remove_card','54','admin','admin_manage','remove_card','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1049','member_group_edit','812','member','member_group','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1048','member_edit','72','member','member','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1050','role_edit','50','admin','role','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1051','member_group_delete','812','member','member_group','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1052','member_manage','50','admin','role','member_manage','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1053','role_delete','50','admin','role','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1054','member_model_export','77','member','member_model','export','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1055','member_model_sort','77','member','member_model','sort','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1056','member_model_move','77','member','member_model','move','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1057','payment_add','897','pay','payment','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1058','payment_delete','897','pay','payment','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1059','payment_edit','897','pay','payment','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1060','spend_record','896','pay','spend','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1061','pay_stat','896','pay','payment','pay_stat','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1062','fields_manage','59','content','sitemodel_field','init','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1063','edit_model_content','59','content','sitemodel','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1064','disabled_model','59','content','sitemodel','disabled','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1065','delete_model','59','content','sitemodel','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1066','export_model','59','content','sitemodel','export','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1067','delete','874','content','type_manage','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1068','edit','874','content','type_manage','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1069','add_urlrule','978','admin','urlrule','add','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1070','edit_urlrule','978','admin','urlrule','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1071','delete_urlrule','978','admin','urlrule','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1072','edit_menu','31','admin','menu','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1073','delete_menu','31','admin','menu','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1074','edit_workflow','885','content','workflow','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1075','delete_workflow','885','content','workflow','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1076','creat_html','868','special','special','html','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1093','connect_config','30','admin','setting','init','&tab=5','14','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1102','view_modelinfo','74','member','member_verify','modelinfo','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1202','create_special_list','868','special','special','create_special_list','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1240','view_memberlinfo','72','member','member','memberinfo','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1239','copyfrom_manage','977','admin','copyfrom','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1241','move_content','822','content','content','remove','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1242','poster_template','56','poster','space','poster_template','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1243','create_index','873','content','create_html','public_index','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1244','add_othors','822','content','content','add_othors','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1295','attachment_manager_dir','857','attachment','manage','dir','','2','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1296','attachment_manager_db','857','attachment','manage','init','','1','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1346','attachment_address_replace','857','attachment','address','init','','3','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1347','attachment_address_update','857','attachment','address','update','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1348','delete_content','822','content','content','delete','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1349','member_menu_manage','977','member','member_menu','manage','','0','0','0','1','1','1','1');");
E_D("replace into `ld_menu` values('1350','member_menu_add','1349','member','member_menu','add','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1351','member_menu_edit','1349','member','member_menu','edit','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1352','member_menu_delete','1349','member','member_menu','delete','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1353','batch_show','822','content','create_html','batch_show','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1354','pay_delete','898','pay','payment','pay_del','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1355','pay_cancel','898','pay','payment','pay_cancel','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1356','discount','898','pay','payment','discount','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1360','category_batch_edit','43','admin','category','batch_edit','','6','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1500','listorder','822','content','content','listorder','','0','0','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1501','a_clean_data','873','content','content','clear_data','','0','0','0','0','0','0','0');");
E_D("replace into `ld_menu` values('1601','upgrade','977','upgrade','index','init','','0','1','1','1','1','1','1');");
E_D("replace into `ld_menu` values('1602','checkfile','1601','upgrade','index','checkfile','','0','1','1','1','1','1','1');");

require("../../inc/footer.php");
?>