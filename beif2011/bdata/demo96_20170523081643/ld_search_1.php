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
  `searchid` int(10) unsigned NOT NULL auto_increment,
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `id` mediumint(8) unsigned NOT NULL default '0',
  `adddate` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL default '1',
  PRIMARY KEY  (`searchid`),
  KEY `typeid` (`typeid`,`id`),
  KEY `siteid` (`siteid`),
  FULLTEXT KEY `data` (`data`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ld_search` values('1','54','1','1491012476','轮播1 轮播1 ','1');");
E_D("replace into `ld_search` values('2','54','2','1491012545','轮播2 轮播2 ','1');");
E_D("replace into `ld_search` values('16','3','8','1491028912','初级课程概述 机器人 阶段 乐高 孩子 传感器 编程 通过 课程 图形 模块 初级 电子 搭建 能力 阶段 机器人 方面 进行 软件 的方式 程序 排列 引导 中学 教学 理念 逻辑 老师 从而 知识 之间 搭配 科技 学到 使用 增强 锻炼 更多 素质 全面 动手 顺序 组合 物理 各种 运用 玩具 变成 简单 各类 适合 概述 幼儿园 小学 学习 好玩 两个 三个 距离 倾斜 于一体 技术 科学 工程 数学 艺术 语言 组成','1');");
E_D("replace into `ld_search` values('6','1','1','1490927580','北京树德管理咨询有限公司 北京 管理咨询 有限公司 便宜 一半 容易 接受 家长 品牌 教育 有限公司 管理咨询 性价比 对比 机器人 国外 北京','1');");
E_D("replace into `ld_search` values('7','1','2','1491014076','北京树德管理咨询有限公司 北京 管理咨询 有限公司 学习 浓厚 孩子 激发 兴趣 培养 创意 能力 动手 良好 北京 从而 丰富 色彩 有限公司 管理咨询 造型 多样化 搭建 可以','1');");
E_D("replace into `ld_search` values('8','1','3','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('9','1','4','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('10','1','5','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('11','1','6','1491015602','校方回应小学性教育课本 对象 年级 学校 学校 学生 年级 对象 此前 舆论 各个 家长 不会 涵盖 比较 反馈 使用 教学 最早 该书 回应 小学 性教育','1');");
E_D("replace into `ld_search` values('27','54','3','1494637917','1 1 ','1');");
E_D("replace into `ld_search` values('18','3','10','1491029161','课程体系 优势 课程 课程 综合能力 于一体 语言 通过 传感器 电子 艺术 素质教育 秉承 工程 中学 初级 科技 教育 自然 理念 简单 变成 好玩 优势 体系','1');");
E_D("replace into `ld_search` values('19','3','11','1491029216','课程视频 课程 视频 课程 视频 相关 介绍 选择','1');");
E_D("replace into `ld_search` values('14','3','6','1491020218','搭桥机器人 机器人 机器人 机器 人大','1');");
E_D("replace into `ld_search` values('15','3','7','1491024747','大机器人 机器人 ','1');");
E_D("replace into `ld_search` values('20','3','12','1491035661','1 1 信息 介绍 简单','1');");
E_D("replace into `ld_search` values('21','3','13','1491037666','2 2 第二季 内容','1');");
E_D("replace into `ld_search` values('22','1','7','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 有限公司 北京 简称 公司 各种 研发 主要 科技 课程 范围 目前 版权 管理 教育 家公司 是由 咨询 控股 员工 自己 明确','1');");
E_D("replace into `ld_search` values('23','1','8','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 行业 大家 一边 我们 服务 管理 系列 教学 关心 课题 举办 销售 对市场 商学院 培训 非常 经验 万元 论坛 提高 充电 以便 方向 路上 奋斗 孤单 成功案例 把握 价值 一些 会员 每年 机构 提供 公司 有限公司 北京 员工 简称 是由 教育 咨询 科技 范围 自己 明确 课程 版权 目前 家公司 主要 研发 各种 控股','1');");
E_D("replace into `ld_search` values('24','1','9','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 公司 简称 员工 北京 有限公司 各种 研发 主要 科技 版权 课程 目前 范围 管理 明确 自己 教育 控股 咨询 是由 家公司','1');");
E_D("replace into `ld_search` values('25','1','10','1491038211','员工在公司都会有自己明确的发展规划 发展规划 员工 公司 公司 简称 员工 北京 有限公司 各种 研发 主要 科技 版权 课程 目前 范围 管理 明确 自己 教育 控股 咨询 是由 家公司','1');");
E_D("replace into `ld_search` values('26','3','14','1491371262','国家地理1 国家地理 国家地理 国家','1');");
E_D("replace into `ld_search` values('28','3','15','1494990355','解魔方机器人 魔方 机器人 机器人','1');");
E_D("replace into `ld_search` values('29','3','16','1494990951','3D打印课 3D打印课 孩子 打印 材料 塑料 金属 通过 的方式 物体 构造 运用 培养 学习 设计 小学 适合 数字 阶段 模型 为基础 进行 文件 科技 课程 素养 创意 科学','1');");
E_D("replace into `ld_search` values('30','3','17','1494990982','无人机航模课程 无人机 航模 课程 孩子 学习 部分 运动 锻炼 可以 物体 发动机 组成 适合 课程 阶段 小学 主要 飞机 方面 知识 空气 立体 思维 能力 增强','1');");
E_D("replace into `ld_search` values('31','3','18','1495007193','中级课程介绍  传感器 课程 更加 中级 大型 中型 光电 机器人 智能化 加强 功能 实现 全面 阶段 小学 适合 孩子 应用 学习 复杂 编程 介绍','1');");
E_D("replace into `ld_search` values('32','3','19','1495008222','高级课程内容 课程 内容 传感器 编程 更加 功能 加入 集成电 强大 压力 声音 变成 一些 中学 阶段 材料 内容 课程 孩子 适合 学习 之前 造型 方面 更为 复杂 语言 提高 图形 简单 高级 模块','1');");
E_D("replace into `ld_search` values('33','3','20','1495008732','进阶课程介绍  课程 系统 录音 传感器 编程 工具 功能 机器人 彩色 模块 距离 增加了 幼儿园 适合 阶段 小学 孩子 初级 相比 学习 介绍 加强','1');");
E_D("replace into `ld_search` values('34','3','21','1495008754','拓展课程  课程 拓展 可以 具有 控制 具备 配置 手机 阶段 适合 关节 孩子 小学 活动 学习 中级 例如 舞蹈 武术 动作 足球 形态 人类 一样 做出 各种各样','1');");
E_D("replace into `ld_search` values('35','3','22','1495157528','课程优势 优势 课程 课程','1');");
E_D("replace into `ld_search` values('36','3','23','1495503220','1 1 ','1');");
E_D("replace into `ld_search` values('37','3','24','1495518241','初级课程第二阶段 二阶 课程 课程 阶段 第二 初级','1');");
E_D("replace into `ld_search` values('38','3','25','1495518241','初级课程第二阶段 二阶 课程 课程 阶段 第二 初级','1');");

require("../../inc/footer.php");
?>