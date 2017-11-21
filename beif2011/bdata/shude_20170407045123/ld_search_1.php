<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_search`;");
E_C("CREATE TABLE `ld_search` (
  `searchid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adddate` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`searchid`),
  KEY `typeid` (`typeid`,`id`),
  KEY `siteid` (`siteid`),
  FULLTEXT KEY `data` (`data`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `ld_search` values('1','54','1','1491012476','轮播1 轮播1 ','1');");
E_D("replace into `ld_search` values('2','54','2','1491012545','轮播2 轮播2 ','1');");
E_D("replace into `ld_search` values('16','3','8','1491028912','乐高NXT搭桥机器人 A阶段 机器人 阶段 乐高 我们 服务 商学院 万元 价值 行业 提供 会员 机构 每年 一边 对市场 销售 教学 经验 大家 管理 机器人 阶段 非常 一些 培训 方向 把握 成功案例 以便 提高 充电 奋斗 关心 系列 课题 举办 路上 论坛 孤单','1');");
E_D("replace into `ld_search` values('6','1','1','1490927580','北京树德管理咨询有限公司 北京 管理咨询 有限公司 便宜 一半 容易 接受 家长 品牌 教育 有限公司 管理咨询 性价比 对比 机器人 国外 北京','1');");
E_D("replace into `ld_search` values('7','1','2','1491014076','北京树德管理咨询有限公司 北京 管理咨询 有限公司 学习 浓厚 孩子 激发 兴趣 培养 创意 能力 动手 良好 从而 造型 丰富 色彩 有限公司 管理咨询 多样化 搭建 可以 北京','1');");
E_D("replace into `ld_search` values('8','1','3','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('9','1','4','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('10','1','5','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('11','1','6','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('17','3','9','1491029051','课程体系 体系 课程 搭建 总体 比例 阶段 课程 效果图 进行 编程 综合能力 素质教育 于一体 语言 工程 艺术 通过 电子 变成 科技 好玩 简单 传感器 教育 理念 中学 初级 秉承 自然','1');");
E_D("replace into `ld_search` values('18','3','10','1491029161','课程优势 优势 课程 课程','1');");
E_D("replace into `ld_search` values('19','3','11','1491029216','课程视频 课程 视频 课程 视频 相关 介绍 选择','1');");
E_D("replace into `ld_search` values('14','3','6','1491020218','搭桥机器人 机器人 机器人 水果 兄弟 机器 人大','1');");
E_D("replace into `ld_search` values('15','3','7','1491024747','大机器人2 机器人 机器人','1');");
E_D("replace into `ld_search` values('20','3','12','1491035661','1 1 信息 介绍 简单','1');");
E_D("replace into `ld_search` values('21','3','13','1491037666','2 2 第二季 内容','1');");
E_D("replace into `ld_search` values('22','1','7','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 有限公司 北京 简称 公司 各种 研发 主要 科技 课程 范围 目前 版权 管理 教育 家公司 是由 咨询 控股 员工 自己 明确','1');");
E_D("replace into `ld_search` values('23','1','8','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 行业 大家 一边 我们 服务 管理 系列 教学 关心 课题 举办 销售 对市场 商学院 培训 非常 经验 万元 论坛 提高 充电 以便 方向 路上 奋斗 孤单 成功案例 把握 价值 一些 会员 每年 机构 提供 公司 有限公司 北京 员工 简称 是由 教育 咨询 科技 范围 自己 明确 课程 版权 目前 家公司 主要 研发 各种 控股','1');");
E_D("replace into `ld_search` values('24','1','9','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 公司 简称 员工 北京 有限公司 各种 研发 主要 科技 版权 课程 目前 范围 管理 明确 自己 教育 控股 咨询 是由 家公司','1');");
E_D("replace into `ld_search` values('25','1','10','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 公司 简称 员工 北京 有限公司 各种 研发 主要 科技 版权 课程 目前 范围 管理 明确 自己 教育 控股 咨询 是由 家公司','1');");
E_D("replace into `ld_search` values('26','3','14','1491371262','国家地理1 国家地理 国家地理 国家','1');");

require("../../inc/footer.php");
?>