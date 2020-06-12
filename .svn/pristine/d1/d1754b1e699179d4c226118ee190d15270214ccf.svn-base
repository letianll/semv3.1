/*************************
 * 2020-05-07 17:45:24 
 ************************/
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `hope_article`
-- ----------------------------
DROP TABLE IF EXISTS `hope_article`;
CREATE TABLE `hope_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cateid` int(9) DEFAULT '0' COMMENT '所属分类id',
  `paixu` int(11) DEFAULT '0' COMMENT '排序',
  `title` varchar(255) DEFAULT NULL COMMENT '文章标题',
  `urlname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL COMMENT '发布用户',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo标题',
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `source` varchar(50) DEFAULT '本站' COMMENT '文章来源',
  `info_img` varchar(255) DEFAULT NULL COMMENT '信息主图',
  `content` longtext COMMENT '文章正文内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hits` int(9) DEFAULT '0' COMMENT '浏览点击次数',
  `url` varchar(255) DEFAULT NULL COMMENT '外链地址',
  `is_check` tinyint(1) DEFAULT '1',
  `is_recommend` tinyint(1) DEFAULT '0',
  `is_headline` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文章信息表';

-- ----------------------------
-- Records of hope_article 
-- ----------------------------
INSERT INTO `hope_article` VALUES ('1', '1', '', '测试文章', 'news_1', '', '测试', '', '', '', '', '本站', '', '测试内容', '2020-03-20 18:16:49', '0', '', '1', '0', '0');

-- ----------------------------
-- Table structure for `hope_article_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_article_category`;
CREATE TABLE `hope_article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0' COMMENT '栏目所属父级id',
  `category` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `urlname` varchar(50) NOT NULL DEFAULT 'artcate' COMMENT 'url别名，用于优化地址栏',
  `url` varchar(100) DEFAULT NULL COMMENT '分类外链地址',
  `target` varchar(6) DEFAULT NULL COMMENT '页面打开方式',
  `nofollow` varchar(8) DEFAULT NULL,
  `cateimg` varchar(100) DEFAULT NULL COMMENT '栏目分类封面图片',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `is_check` smallint(1) DEFAULT '1' COMMENT '栏目启用状态',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo优化title',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '栏目seo关键词',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '栏目seo页面描述',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='文章分类表';

-- ----------------------------
-- Records of hope_article_category 
-- ----------------------------
INSERT INTO `hope_article_category` VALUES ('11', '0', '新闻中心', 'news', '', '_self', 'nofollow', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', '1', '0', '', '', '', '2020-04-23 16:15:44');
INSERT INTO `hope_article_category` VALUES ('12', '11', '行业新闻', 'hyxw', '', '_self', '', '', '0', '1', '检查井', '', '', '', '2020-04-23 16:15:47');
INSERT INTO `hope_article_category` VALUES ('13', '0', '常见问题', 'cjwt', '', '_self', '', '', '0', '1', '0', '', '', '', '2020-03-20 11:00:39');
INSERT INTO `hope_article_category` VALUES ('18', '11', '公司新闻', 'snhfc', '', '_self', '', '', '0', '1', '水泥化粪池', '', '', '', '2020-03-20 13:50:11');

-- ----------------------------
-- Table structure for `hope_ban_word`
-- ----------------------------
DROP TABLE IF EXISTS `hope_ban_word`;
CREATE TABLE `hope_ban_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '违禁词',
  `is_check` char(1) DEFAULT NULL COMMENT '状态',
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COMMENT='违禁词';

-- ----------------------------
-- Records of hope_ban_word 
-- ----------------------------
INSERT INTO `hope_ban_word` VALUES ('1', '最美', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('2', '最牛', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('3', '很牛', '1', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('6', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('7', '最牛2', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('57', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('56', '很牛3', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('55', '最牛2', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('54', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('53', '很牛3', '1', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('52', '最牛2', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('27', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('26', '很牛3', '1', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('25', '最牛2', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('24', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('51', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('50', '很牛3', '1', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('49', '最牛2', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('48', '最美1', '1', '2020-05-06 11:22:11');
INSERT INTO `hope_ban_word` VALUES ('62', '很牛31', '0', '2020-05-06 11:22:22');
INSERT INTO `hope_ban_word` VALUES ('58', '最牛2', '0', '2020-05-06 11:22:22');

-- ----------------------------
-- Table structure for `hope_download_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_download_category`;
CREATE TABLE `hope_download_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0' COMMENT '栏目所属父级id',
  `category` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `urlname` varchar(50) NOT NULL DEFAULT 'artcate' COMMENT 'url别名，用于优化地址栏',
  `url` varchar(100) DEFAULT NULL COMMENT '分类外链地址',
  `target` varchar(6) DEFAULT NULL COMMENT '页面打开方式',
  `nofollow` varchar(8) DEFAULT NULL,
  `cateimg` varchar(100) DEFAULT NULL COMMENT '栏目分类封面图片',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `is_check` smallint(1) DEFAULT '1' COMMENT '栏目启用状态',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo优化title',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '栏目seo关键词',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '栏目seo页面描述',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='文章分类表';

-- ----------------------------
-- Records of hope_download_category 
-- ----------------------------
INSERT INTO `hope_download_category` VALUES ('11', '0', '操作手册', 'czsc', '', '_self', 'nofollow', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', '1', '0', '', '', '', '2020-03-20 14:05:33');
INSERT INTO `hope_download_category` VALUES ('12', '0', '说明书', 'sms', '', '_self', '', '', '0', '1', '检查井', '', '', '', '2020-03-20 11:09:52');

-- ----------------------------
-- Table structure for `hope_extend_field`
-- ----------------------------
DROP TABLE IF EXISTS `hope_extend_field`;
CREATE TABLE `hope_extend_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `tags` varchar(255) DEFAULT NULL COMMENT '标签',
  `types` char(5) DEFAULT NULL COMMENT '类型 0输入框 1下拉 2 文本 3单选 4多选 5编辑器',
  `belong_model` char(5) DEFAULT NULL COMMENT '所属模型 0产品 1文章 2相册 3招聘 4下载',
  `is_check` char(5) DEFAULT '1' COMMENT '状态',
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `datas` varchar(2000) DEFAULT NULL COMMENT '配置内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COMMENT='扩展字段';

-- ----------------------------
-- Records of hope_extend_field 
-- ----------------------------
INSERT INTO `hope_extend_field` VALUES ('1', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('2', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('11', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('13', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('14', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('16', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('17', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('18', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('19', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('20', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('21', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('22', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('25', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('26', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1');
INSERT INTO `hope_extend_field` VALUES ('27', '尺码22', 'size', '2', '3', '0', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('29', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('30', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('31', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('32', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('33', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('34', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('35', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('36', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('37', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('38', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('39', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('40', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('41', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('42', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('43', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('44', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('45', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('46', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('47', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('48', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('49', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('50', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');
INSERT INTO `hope_extend_field` VALUES ('51', '颜色', 'color', '3', '4', '0', '2020-04-23 01:02:33', '红色,蓝色,白色,1,2');
INSERT INTO `hope_extend_field` VALUES ('52', '尺码22', 'size', '2', '3', '1', '2020-04-13 02:02:11', '14,22,88');
INSERT INTO `hope_extend_field` VALUES ('53', '1', '2', '0', '0', '0', '2020-04-29 17:30:16', '');
INSERT INTO `hope_extend_field` VALUES ('54', '33', '44', '4', '4', '1', '2020-04-30 11:13:14', '');
INSERT INTO `hope_extend_field` VALUES ('55', '国内', 'tag', '3', '4', '1', '2020-04-30 14:58:31', '1,3');

-- ----------------------------
-- Table structure for `hope_files`
-- ----------------------------
DROP TABLE IF EXISTS `hope_files`;
CREATE TABLE `hope_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '文件原始名',
  `url` varchar(100) DEFAULT NULL COMMENT '文件url',
  `filetype` tinyint(1) DEFAULT NULL COMMENT '文件类型：0-图片，1-文件',
  `ext` varchar(4) DEFAULT NULL COMMENT '文件扩展名，如：ppt',
  `groupid` int(11) DEFAULT NULL COMMENT '文件所属分组id',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='文件表';

-- ----------------------------
-- Records of hope_files 
-- ----------------------------
INSERT INTO `hope_files` VALUES ('1', 'JMerter测试说明书.doc', 'https://pic.qqtn.com/up/2018-9/15367146917869444.doc', '1', 'doc', '0', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('2', 'HPI修订情况一览表.xls', 'https://pic.qqtn.com/up/2018-9/15367146917869444.xls', '1', 'xls', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('3', '仓库管理系统产品介绍180313.pptx', 'https://pic.qqtn.com/up/2018-9/15367146917869444.pptx', '1', 'xlsx', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('4', '宣传画册1-17.pdf', 'https://pic.qqtn.com/up/2018-9/15367146917869444.pdf', '1', 'pdf', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('5', '更新日志.txt', 'https://pic.qqtn.com/up/2018-9/15367146917869444.txt', '1', 'txt', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('6', '微信图片_201804231411.jpg', 'https://pic.qqtn.com/up/2018-9/15367146917869444.jpg', '0', 'jpg', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('7', '微信图片_20180423141141.jpg', 'https://pic.qqtn.com/up/2018-9/15367146917869444.jpg', '0', 'jpg', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('8', '微信图片_20180423140441.jpg', 'https://pic.qqtn.com/up/2018-9/15367146917869444.jpg', '0', 'jpg', '1', '2020-03-19 13:14:00');
INSERT INTO `hope_files` VALUES ('9', '微信图片_20180423141146.jpg', 'https://pic.qqtn.com/up/2018-9/15367146917869444.jpg', '0', 'jpg', '1', '2020-03-19 13:13:29');
INSERT INTO `hope_files` VALUES ('10', '图片1', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/hpic2188_s.jpg', '0', 'jpg', '1', '2020-03-19 15:48:05');
INSERT INTO `hope_files` VALUES ('11', '图片2', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/hpic2176_s.jpg', '0', 'jpg', '1', '2020-03-19 15:48:30');
INSERT INTO `hope_files` VALUES ('12', '图片3', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', 'jpg', '1', '2020-03-19 15:48:52');
INSERT INTO `hope_files` VALUES ('13', '图片4', 'http://pic.sc.chinaz.com/Files/pic/pic9/202002/zzpic23421_s.jpg', '0', 'jpg', '1', '2020-03-19 15:49:12');
INSERT INTO `hope_files` VALUES ('14', '图片5', 'http://pic2.sc.chinaz.com/Files/pic/pic9/202001/hpic1978_s.jpg', '0', 'jpg', '1', '2020-03-19 15:49:44');
INSERT INTO `hope_files` VALUES ('15', '图片6', 'http://pic1.sc.chinaz.com/Files/pic/pic9/202001/zzpic22328_s.jpg', '0', 'jpg', '1', '2020-03-19 15:50:02');

-- ----------------------------
-- Table structure for `hope_files_group`
-- ----------------------------
DROP TABLE IF EXISTS `hope_files_group`;
CREATE TABLE `hope_files_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) DEFAULT NULL COMMENT '文件分组名称',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文件分组表';

-- ----------------------------
-- Table structure for `hope_job_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_job_category`;
CREATE TABLE `hope_job_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0' COMMENT '栏目所属父级id',
  `category` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `urlname` varchar(50) NOT NULL DEFAULT 'artcate' COMMENT 'url别名，用于优化地址栏',
  `url` varchar(100) DEFAULT NULL COMMENT '分类外链地址',
  `target` varchar(6) DEFAULT NULL COMMENT '页面打开方式',
  `nofollow` varchar(8) DEFAULT NULL,
  `cateimg` varchar(100) DEFAULT NULL COMMENT '栏目分类封面图片',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `is_check` smallint(1) DEFAULT '1' COMMENT '栏目启用状态',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo优化title',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '栏目seo关键词',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '栏目seo页面描述',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='文章分类表';

-- ----------------------------
-- Records of hope_job_category 
-- ----------------------------
INSERT INTO `hope_job_category` VALUES ('11', '0', '校园招聘', 'xyzp', '', '_self', 'nofollow', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', '1', '0', '', '', '', '2020-03-20 14:05:33');
INSERT INTO `hope_job_category` VALUES ('12', '0', '社会招聘', 'shzp', '', '_self', '', '', '0', '1', '检查井', '', '', '', '2020-03-20 11:09:52');

-- ----------------------------
-- Table structure for `hope_log`
-- ----------------------------
DROP TABLE IF EXISTS `hope_log`;
CREATE TABLE `hope_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_user` varchar(30) DEFAULT NULL,
  `log_action` varchar(30) DEFAULT NULL COMMENT '操作日志行为类型：add、delete、update,login,exit,other',
  `log_content` varchar(255) DEFAULT '' COMMENT '日志内容',
  `log_ip` varchar(15) DEFAULT NULL COMMENT '操作用户的ip',
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8 COMMENT='系统操作日志表';

-- ----------------------------
-- Records of hope_log 
-- ----------------------------
INSERT INTO `hope_log` VALUES ('1', 'fxlhcn', 'add', '添加了产品分类：检查井', '127.0.0.1', '2020-03-19 18:40:21');
INSERT INTO `hope_log` VALUES ('2', 'fxlhcn', 'add', '添加了产品分类：水泥瓦', '127.0.0.1', '2020-03-19 18:43:32');
INSERT INTO `hope_log` VALUES ('3', 'fxlhcn', 'add', '添加了产品分类：平板瓦', '127.0.0.1', '2020-03-19 18:44:40');
INSERT INTO `hope_log` VALUES ('4', 'fxlhcn', 'add', '添加了产品分类：测试', '127.0.0.1', '2020-03-19 18:54:56');
INSERT INTO `hope_log` VALUES ('5', 'fxlhcn', 'add', '添加了产品分类：测试2', '127.0.0.1', '2020-03-19 19:22:36');
INSERT INTO `hope_log` VALUES ('6', 'fxlhcn', 'edit', '修改了产品分类：化粪池', '127.0.0.1', '2020-03-19 19:50:43');
INSERT INTO `hope_log` VALUES ('7', 'fxlhcn', 'edit', '修改了产品分类：化粪池2', '127.0.0.1', '2020-03-19 19:55:43');
INSERT INTO `hope_log` VALUES ('8', 'fxlhcn', 'edit', '修改了产品分类：化粪池2', '127.0.0.1', '2020-03-19 19:58:21');
INSERT INTO `hope_log` VALUES ('9', 'fxlhcn', 'edit', '修改了产品分类：化粪池', '127.0.0.1', '2020-03-19 19:59:26');
INSERT INTO `hope_log` VALUES ('10', 'fxlhcn', 'edit', '修改了产品分类：测试', '127.0.0.1', '2020-03-19 20:01:52');
INSERT INTO `hope_log` VALUES ('11', 'fxlhcn', 'delete', '删除了产品分类：16', '127.0.0.1', '2020-03-20 09:56:34');
INSERT INTO `hope_log` VALUES ('12', 'fxlhcn', 'delete', '删除了产品分类：15', '127.0.0.1', '2020-03-20 09:57:51');
INSERT INTO `hope_log` VALUES ('13', 'fxlhcn', 'delete', '删除了产品分类：14', '127.0.0.1', '2020-03-20 09:58:09');
INSERT INTO `hope_log` VALUES ('14', 'fxlhcn', 'add', '添加了产品分类：测试', '127.0.0.1', '2020-03-20 09:59:46');
INSERT INTO `hope_log` VALUES ('15', 'fxlhcn', 'delete', '删除了产品分类：17', '127.0.0.1', '2020-03-20 09:59:52');
INSERT INTO `hope_log` VALUES ('16', 'fxlhcn', 'edit', '修改了产品分类：水泥瓦', '127.0.0.1', '2020-03-20 10:23:20');
INSERT INTO `hope_log` VALUES ('17', 'fxlhcn', 'edit', '修改了产品分类：水泥瓦', '127.0.0.1', '2020-03-20 10:23:26');
INSERT INTO `hope_log` VALUES ('18', 'fxlhcn', 'edit', '修改了产品分类：化粪池2', '127.0.0.1', '2020-03-20 13:33:04');
INSERT INTO `hope_log` VALUES ('19', 'fxlhcn', 'edit', '修改了产品分类：化粪池2', '127.0.0.1', '2020-03-20 13:33:11');
INSERT INTO `hope_log` VALUES ('20', 'fxlhcn', 'add', '添加了产品分类：水泥化粪池', '127.0.0.1', '2020-03-20 13:50:33');
INSERT INTO `hope_log` VALUES ('21', 'fxlhcn', 'edit', '修改了产品分类：新闻中心', '127.0.0.1', '2020-03-20 14:00:15');
INSERT INTO `hope_log` VALUES ('22', 'fxlhcn', 'edit', '修改了产品分类：化粪池', '127.0.0.1', '2020-03-20 14:00:34');
INSERT INTO `hope_log` VALUES ('23', 'fxlhcn', 'edit', '修改了文章分类：新闻中心', '127.0.0.1', '2020-03-20 14:03:32');
INSERT INTO `hope_log` VALUES ('24', 'fxlhcn', 'edit', '修改了文章分类：公司新闻', '127.0.0.1', '2020-03-20 14:04:45');
INSERT INTO `hope_log` VALUES ('25', 'fxlhcn', 'edit', '修改了文章分类：行业新闻', '127.0.0.1', '2020-03-20 14:05:08');
INSERT INTO `hope_log` VALUES ('26', 'fxlhcn', 'edit', '修改了文章分类：常见问题', '127.0.0.1', '2020-03-20 14:05:23');
INSERT INTO `hope_log` VALUES ('27', 'fxlhcn', 'edit', '修改了相册分类：资质荣誉', '127.0.0.1', '2020-03-20 14:14:09');
INSERT INTO `hope_log` VALUES ('28', 'fxlhcn', 'edit', '修改了相册分类：荣誉证书', '127.0.0.1', '2020-03-20 14:14:32');
INSERT INTO `hope_log` VALUES ('29', 'fxlhcn', 'edit', '修改了相册分类：产品资质', '127.0.0.1', '2020-03-20 14:14:51');
INSERT INTO `hope_log` VALUES ('30', 'fxlhcn', 'edit', '修改了相册分类：工程案例', '127.0.0.1', '2020-03-20 14:15:20');
INSERT INTO `hope_log` VALUES ('31', 'fxlhcn', 'edit', '修改了招聘分类：校园招聘', '127.0.0.1', '2020-03-20 14:49:30');
INSERT INTO `hope_log` VALUES ('32', 'fxlhcn', 'edit', '修改了招聘分类：社会招聘', '127.0.0.1', '2020-03-20 14:49:44');
INSERT INTO `hope_log` VALUES ('33', 'fxlhcn', 'delete', '删除了招聘分类：18,13', '127.0.0.1', '2020-03-20 14:49:52');
INSERT INTO `hope_log` VALUES ('34', 'fxlhcn', 'edit', '修改了招聘分类：社会招聘', '127.0.0.1', '2020-03-20 14:49:58');
INSERT INTO `hope_log` VALUES ('35', 'fxlhcn', 'edit', '修改了下载分类：操作手册', '127.0.0.1', '2020-03-20 14:54:52');
INSERT INTO `hope_log` VALUES ('36', 'fxlhcn', 'edit', '修改了下载分类：说明书', '127.0.0.1', '2020-03-20 14:55:12');
INSERT INTO `hope_log` VALUES ('37', 'fxlhcn', 'add', '添加了扩展字段：111', '127.0.0.1', '2020-04-29 14:37:07');
INSERT INTO `hope_log` VALUES ('38', 'fxlhcn', 'add', '添加了扩展字段：22', '127.0.0.1', '2020-04-29 14:40:23');
INSERT INTO `hope_log` VALUES ('39', 'fxlhcn', 'add', '添加了扩展字段：22', '127.0.0.1', '2020-04-29 14:42:16');
INSERT INTO `hope_log` VALUES ('40', 'fxlhcn', 'add', '添加了扩展字段：1', '127.0.0.1', '2020-04-29 14:42:27');
INSERT INTO `hope_log` VALUES ('41', 'fxlhcn', 'add', '添加了扩展字段：2', '127.0.0.1', '2020-04-29 14:47:16');
INSERT INTO `hope_log` VALUES ('42', 'fxlhcn', 'add', '添加了扩展字段：3', '127.0.0.1', '2020-04-29 15:09:56');
INSERT INTO `hope_log` VALUES ('43', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:14:03');
INSERT INTO `hope_log` VALUES ('44', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:14:10');
INSERT INTO `hope_log` VALUES ('45', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:15:31');
INSERT INTO `hope_log` VALUES ('46', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:15:35');
INSERT INTO `hope_log` VALUES ('47', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：5', '127.0.0.1', '2020-04-29 16:15:38');
INSERT INTO `hope_log` VALUES ('48', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：5', '127.0.0.1', '2020-04-29 16:15:46');
INSERT INTO `hope_log` VALUES ('49', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:15:51');
INSERT INTO `hope_log` VALUES ('50', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:16:53');
INSERT INTO `hope_log` VALUES ('51', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:17:17');
INSERT INTO `hope_log` VALUES ('52', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:18:27');
INSERT INTO `hope_log` VALUES ('53', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:18:34');
INSERT INTO `hope_log` VALUES ('54', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:19:02');
INSERT INTO `hope_log` VALUES ('55', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:19:32');
INSERT INTO `hope_log` VALUES ('56', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:20:02');
INSERT INTO `hope_log` VALUES ('57', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:21:04');
INSERT INTO `hope_log` VALUES ('58', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:21:08');
INSERT INTO `hope_log` VALUES ('59', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：4', '127.0.0.1', '2020-04-29 16:21:13');
INSERT INTO `hope_log` VALUES ('60', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：5', '127.0.0.1', '2020-04-29 16:21:16');
INSERT INTO `hope_log` VALUES ('61', 'fxlhcn', 'edit', '编辑了扩展字段：221', '127.0.0.1', '2020-04-29 16:24:04');
INSERT INTO `hope_log` VALUES ('62', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：2', '127.0.0.1', '2020-04-29 16:24:33');
INSERT INTO `hope_log` VALUES ('63', 'fxlhcn', 'delete', '删除了文章分类：7', '127.0.0.1', '2020-04-29 16:36:24');
INSERT INTO `hope_log` VALUES ('64', 'fxlhcn', 'delete', '删除了文章分类：8,4', '127.0.0.1', '2020-04-29 16:36:51');
INSERT INTO `hope_log` VALUES ('65', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：2', '127.0.0.1', '2020-04-29 16:36:55');
INSERT INTO `hope_log` VALUES ('66', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：2', '127.0.0.1', '2020-04-29 16:36:55');
INSERT INTO `hope_log` VALUES ('67', 'fxlhcn', 'edit', '编辑了扩展字段：尺码2', '127.0.0.1', '2020-04-29 17:00:27');
INSERT INTO `hope_log` VALUES ('68', 'fxlhcn', 'edit', '编辑了扩展字段：尺码22', '127.0.0.1', '2020-04-29 17:00:34');
INSERT INTO `hope_log` VALUES ('69', 'fxlhcn', 'delete', '删除了文章分类：3', '127.0.0.1', '2020-04-29 17:04:21');
INSERT INTO `hope_log` VALUES ('70', 'fxlhcn', 'edit', '编辑了扩展字段：尺码22', '127.0.0.1', '2020-04-29 17:05:25');
INSERT INTO `hope_log` VALUES ('71', 'fxlhcn', 'edit', '编辑了扩展字段：尺码22', '127.0.0.1', '2020-04-29 17:05:29');
INSERT INTO `hope_log` VALUES ('72', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：1', '127.0.0.1', '2020-04-29 17:07:34');
INSERT INTO `hope_log` VALUES ('73', 'fxlhcn', 'add', '添加了扩展字段：1', '127.0.0.1', '2020-04-29 17:11:24');
INSERT INTO `hope_log` VALUES ('74', 'fxlhcn', 'delete', '删除了文章分类：9', '127.0.0.1', '2020-04-29 17:12:45');
INSERT INTO `hope_log` VALUES ('75', 'fxlhcn', 'add', '添加了扩展字段：12', '127.0.0.1', '2020-04-29 17:12:55');
INSERT INTO `hope_log` VALUES ('76', 'fxlhcn', 'delete', '删除了文章分类：10', '127.0.0.1', '2020-04-29 17:12:59');
INSERT INTO `hope_log` VALUES ('77', 'fxlhcn', 'add', '添加了扩展字段：1', '127.0.0.1', '2020-04-29 17:30:43');
INSERT INTO `hope_log` VALUES ('78', 'fxlhcn', 'add', '添加了扩展字段：22', '127.0.0.1', '2020-04-30 11:06:56');
INSERT INTO `hope_log` VALUES ('79', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：12', '127.0.0.1', '2020-04-30 11:07:01');
INSERT INTO `hope_log` VALUES ('80', 'fxlhcn', 'edit', '编辑了扩展字段：22', '127.0.0.1', '2020-04-30 11:07:12');
INSERT INTO `hope_log` VALUES ('81', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：12', '127.0.0.1', '2020-04-30 11:07:23');
INSERT INTO `hope_log` VALUES ('82', 'fxlhcn', 'edit', '编辑了扩展字段：221', '127.0.0.1', '2020-04-30 11:07:27');
INSERT INTO `hope_log` VALUES ('83', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：12', '127.0.0.1', '2020-04-30 11:07:32');
INSERT INTO `hope_log` VALUES ('84', 'fxlhcn', 'edit', '编辑了扩展字段：2212', '127.0.0.1', '2020-04-30 11:07:35');
INSERT INTO `hope_log` VALUES ('85', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：12', '127.0.0.1', '2020-04-30 11:10:11');
INSERT INTO `hope_log` VALUES ('86', 'fxlhcn', 'edit', '编辑了扩展字段：221211', '127.0.0.1', '2020-04-30 11:10:23');
INSERT INTO `hope_log` VALUES ('87', 'fxlhcn', 'add', '添加了扩展字段：33', '127.0.0.1', '2020-04-30 11:13:41');
INSERT INTO `hope_log` VALUES ('88', 'fxlhcn', 'edit', '编辑了扩展字段：33', '127.0.0.1', '2020-04-30 11:13:52');
INSERT INTO `hope_log` VALUES ('89', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：13', '127.0.0.1', '2020-04-30 11:13:55');
INSERT INTO `hope_log` VALUES ('90', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：13', '127.0.0.1', '2020-04-30 11:15:20');
INSERT INTO `hope_log` VALUES ('91', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：1', '127.0.0.1', '2020-04-30 14:49:46');
INSERT INTO `hope_log` VALUES ('92', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：1', '127.0.0.1', '2020-04-30 14:49:51');
INSERT INTO `hope_log` VALUES ('93', 'fxlhcn', 'add', '添加了扩展字段：国内', '127.0.0.1', '2020-04-30 14:58:58');
INSERT INTO `hope_log` VALUES ('94', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：14', '127.0.0.1', '2020-04-30 14:59:00');
INSERT INTO `hope_log` VALUES ('95', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：14', '127.0.0.1', '2020-04-30 14:59:09');
INSERT INTO `hope_log` VALUES ('96', 'fxlhcn', 'edit', '切换了扩展字段状态，id为：14', '127.0.0.1', '2020-04-30 15:00:31');
INSERT INTO `hope_log` VALUES ('97', 'fxlhcn', 'delete', '删除了文章分类：12', '127.0.0.1', '2020-04-30 15:22:07');
INSERT INTO `hope_log` VALUES ('98', 'fxlhcn', 'add', '导入了excel', '127.0.0.1', '2020-04-30 17:35:15');
INSERT INTO `hope_log` VALUES ('99', 'fxlhcn', 'add', '导入了excel', '127.0.0.1', '2020-04-30 17:44:42');
INSERT INTO `hope_log` VALUES ('100', 'fxlhcn', 'add', '导入了excel', '127.0.0.1', '2020-04-30 17:50:46');
INSERT INTO `hope_log` VALUES ('101', 'fxlhcn', 'add', '导入了excel', '127.0.0.1', '2020-04-30 17:51:37');
INSERT INTO `hope_log` VALUES ('102', 'fxlhcn', 'add', '导入了excel', '127.0.0.1', '2020-04-30 17:53:03');
INSERT INTO `hope_log` VALUES ('103', 'FXLHCN', 'delete', '删除了文章分类：28,24,23', '127.0.0.1', '2020-05-06 10:18:13');
INSERT INTO `hope_log` VALUES ('104', 'FXLHCN', 'edit', '切换了扩展字段状态，id为：27', '127.0.0.1', '2020-05-06 10:18:20');
INSERT INTO `hope_log` VALUES ('105', 'FXLHCN', 'edit', '切换了扩展字段状态，id为：26', '127.0.0.1', '2020-05-06 10:18:29');
INSERT INTO `hope_log` VALUES ('106', 'FXLHCN', 'add', '添加了违禁词：33', '127.0.0.1', '2020-05-06 15:41:25');
INSERT INTO `hope_log` VALUES ('107', 'FXLHCN', 'edit', '编辑了违禁词：33', '127.0.0.1', '2020-05-06 15:41:30');
INSERT INTO `hope_log` VALUES ('108', 'FXLHCN', 'delete', '删除了违禁词：4', '127.0.0.1', '2020-05-06 15:42:51');
INSERT INTO `hope_log` VALUES ('109', 'FXLHCN', 'delete', '删除了违禁词：5', '127.0.0.1', '2020-05-06 15:47:02');
INSERT INTO `hope_log` VALUES ('110', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 15:52:24');
INSERT INTO `hope_log` VALUES ('111', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 15:55:32');
INSERT INTO `hope_log` VALUES ('112', 'FXLHCN', 'delete', '删除了违禁词：11,10,9', '127.0.0.1', '2020-05-06 15:56:16');
INSERT INTO `hope_log` VALUES ('113', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 15:57:10');
INSERT INTO `hope_log` VALUES ('114', 'FXLHCN', 'delete', '删除了违禁词：14,13,12', '127.0.0.1', '2020-05-06 16:00:47');
INSERT INTO `hope_log` VALUES ('115', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:02:55');
INSERT INTO `hope_log` VALUES ('116', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:03:50');
INSERT INTO `hope_log` VALUES ('117', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:06:25');
INSERT INTO `hope_log` VALUES ('118', 'FXLHCN', 'delete', '删除了违禁词：23,22,21,20,19,18,17,16,15,8', '127.0.0.1', '2020-05-06 16:08:13');
INSERT INTO `hope_log` VALUES ('119', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:08:54');
INSERT INTO `hope_log` VALUES ('120', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:16:51');
INSERT INTO `hope_log` VALUES ('121', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:20:06');
INSERT INTO `hope_log` VALUES ('122', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:34:06');
INSERT INTO `hope_log` VALUES ('123', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:36:05');
INSERT INTO `hope_log` VALUES ('124', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:40:32');
INSERT INTO `hope_log` VALUES ('125', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 16:47:02');
INSERT INTO `hope_log` VALUES ('126', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:00:41');
INSERT INTO `hope_log` VALUES ('127', 'FXLHCN', 'delete', '删除了违禁词：47,46,45,44,43,42,41,40,39,38', '127.0.0.1', '2020-05-06 17:04:22');
INSERT INTO `hope_log` VALUES ('128', 'FXLHCN', 'delete', '删除了违禁词：37,36,35,34,33,32,31,30,29,28', '127.0.0.1', '2020-05-06 17:04:27');
INSERT INTO `hope_log` VALUES ('129', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:04:58');
INSERT INTO `hope_log` VALUES ('130', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:09:26');
INSERT INTO `hope_log` VALUES ('131', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:09:38');
INSERT INTO `hope_log` VALUES ('132', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:09:52');
INSERT INTO `hope_log` VALUES ('133', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:12:21');
INSERT INTO `hope_log` VALUES ('134', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:14:02');
INSERT INTO `hope_log` VALUES ('135', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:14:02');
INSERT INTO `hope_log` VALUES ('136', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:15:40');
INSERT INTO `hope_log` VALUES ('137', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:15:54');
INSERT INTO `hope_log` VALUES ('138', 'FXLHCN', 'delete', '删除了违禁词：59', '127.0.0.1', '2020-05-06 17:20:48');
INSERT INTO `hope_log` VALUES ('139', 'FXLHCN', 'add', '导入了excel', '127.0.0.1', '2020-05-06 17:20:58');
INSERT INTO `hope_log` VALUES ('140', 'FXLHCN', 'edit', '切换了违禁词状态，id为：56', '127.0.0.1', '2020-05-06 18:04:31');
INSERT INTO `hope_log` VALUES ('141', 'FXLHCN', 'edit', '编辑了违禁词：很牛31', '127.0.0.1', '2020-05-06 18:05:13');
INSERT INTO `hope_log` VALUES ('142', 'FXLHCN', 'edit', '编辑了违禁词：很牛31', '127.0.0.1', '2020-05-06 18:05:19');
INSERT INTO `hope_log` VALUES ('143', 'FXLHCN', 'edit', '编辑了违禁词：最牛2', '127.0.0.1', '2020-05-06 18:05:25');
INSERT INTO `hope_log` VALUES ('144', 'FXLHCN', 'delete', '删除了违禁词：61,60', '127.0.0.1', '2020-05-06 18:05:36');
INSERT INTO `hope_log` VALUES ('145', 'FXLHCN', 'delete', '删除了数据库：20200507-140621.sql', '127.0.0.1', '2020-05-07 15:55:01');
INSERT INTO `hope_log` VALUES ('146', 'FXLHCN', 'delete', '删除了数据库：20200507-145314.sql', '127.0.0.1', '2020-05-07 15:55:28');
INSERT INTO `hope_log` VALUES ('147', 'FXLHCN', 'delete', '删除了数据库：20200507-150525.sql', '127.0.0.1', '2020-05-07 15:55:40');
INSERT INTO `hope_log` VALUES ('148', 'FXLHCN', 'delete', '删除了数据库：20200507-150546.sql', '127.0.0.1', '2020-05-07 15:56:18');
INSERT INTO `hope_log` VALUES ('150', 'FXLHCN', 'delete', '删除了数据库：20200507-150839.sql', '127.0.0.1', '2020-05-07 16:03:42');
INSERT INTO `hope_log` VALUES ('151', 'FXLHCN', 'delete', '删除了数据库：20200507-152004.sql', '127.0.0.1', '2020-05-07 16:03:46');
INSERT INTO `hope_log` VALUES ('152', 'FXLHCN', 'delete', '删除了数据库：20200507-152351.sql,20200507-152355.sql,20200507-154243.sql', '127.0.0.1', '2020-05-07 16:04:58');
INSERT INTO `hope_log` VALUES ('153', 'FXLHCN', 'delete', '删除了数据库：4', '127.0.0.1', '2020-05-07 17:07:00');
INSERT INTO `hope_log` VALUES ('154', 'FXLHCN', 'delete', '删除了数据库：20200507-170653.sql', '127.0.0.1', '2020-05-07 17:07:11');
INSERT INTO `hope_log` VALUES ('155', 'FXLHCN', 'delete', '删除了数据库：20200507-154816.sql', '127.0.0.1', '2020-05-07 17:13:15');
INSERT INTO `hope_log` VALUES ('156', 'FXLHCN', 'delete', '删除了数据库：20200507-152138.sql,20200507-154248.sql', '127.0.0.1', '2020-05-07 17:13:19');

-- ----------------------------
-- Table structure for `hope_photo_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_photo_category`;
CREATE TABLE `hope_photo_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0' COMMENT '栏目所属父级id',
  `category` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `urlname` varchar(50) NOT NULL DEFAULT 'artcate' COMMENT 'url别名，用于优化地址栏',
  `url` varchar(100) DEFAULT NULL COMMENT '分类外链地址',
  `target` varchar(6) DEFAULT NULL COMMENT '页面打开方式',
  `nofollow` varchar(8) DEFAULT NULL,
  `cateimg` varchar(100) DEFAULT NULL COMMENT '栏目分类封面图片',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `is_check` smallint(1) DEFAULT '1' COMMENT '栏目启用状态',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo优化title',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '栏目seo关键词',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '栏目seo页面描述',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='相册分类表';

-- ----------------------------
-- Records of hope_photo_category 
-- ----------------------------
INSERT INTO `hope_photo_category` VALUES ('11', '0', '资质荣誉', 'honor', '', '_self', 'nofollow', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', '1', '0', '', '', '', '2020-03-20 14:05:33');
INSERT INTO `hope_photo_category` VALUES ('12', '11', '荣誉证书', 'zhengshu', '', '_self', '', '', '0', '1', '检查井', '', '', '', '2020-03-20 11:09:52');
INSERT INTO `hope_photo_category` VALUES ('13', '0', '工程案例', 'anli', '', '_self', '', '', '0', '1', '0', '', '', '', '2020-03-20 11:00:39');
INSERT INTO `hope_photo_category` VALUES ('18', '11', '产品资质', 'zizhi', '', '_self', '', '', '0', '1', '水泥化粪池', '', '', '', '2020-03-20 13:50:11');

-- ----------------------------
-- Table structure for `hope_product_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_product_category`;
CREATE TABLE `hope_product_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0' COMMENT '栏目所属父级id',
  `category` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `urlname` varchar(50) NOT NULL DEFAULT 'artcate' COMMENT 'url别名，用于优化地址栏',
  `url` varchar(100) DEFAULT NULL COMMENT '分类外链地址',
  `target` varchar(6) DEFAULT NULL COMMENT '页面打开方式',
  `nofollow` varchar(8) DEFAULT NULL,
  `cateimg` varchar(100) DEFAULT NULL COMMENT '栏目分类封面图片',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `is_check` smallint(1) DEFAULT '1' COMMENT '栏目启用状态',
  `keyword` varchar(30) DEFAULT NULL COMMENT '优化目标词',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'seo优化title',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT '栏目seo关键词',
  `seo_description` varchar(255) DEFAULT NULL COMMENT '栏目seo页面描述',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlname` (`urlname`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='产品分类表';

-- ----------------------------
-- Records of hope_product_category 
-- ----------------------------
INSERT INTO `hope_product_category` VALUES ('11', '0', '化粪池', 'news', '', '_self', '', 'http://pic.sc.chinaz.com/Files/pic/pic9/202003/zzpic23518_s.jpg', '0', '1', '0', '', '', '', '2020-04-23 14:43:22');
INSERT INTO `hope_product_category` VALUES ('12', '0', '检查井', 'jcj', '', '_self', '', '', '0', '1', '检查井', '', '', '', '2020-03-20 11:09:52');
INSERT INTO `hope_product_category` VALUES ('13', '0', '水泥瓦', 'snw', '', '_self', '', '', '0', '1', '0', '', '', '', '2020-03-20 11:00:39');
INSERT INTO `hope_product_category` VALUES ('18', '11', '水泥化粪池', 'snhfc', '', '_self', '', '', '0', '1', '水泥化粪池', '', '', '', '2020-03-20 13:50:11');

-- ----------------------------
-- Table structure for `hope_system_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `hope_system_attachment`;
CREATE TABLE `hope_system_attachment` (
  `att_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '附件名称',
  `att_dir` varchar(200) NOT NULL DEFAULT '' COMMENT '附件路径',
  `satt_dir` varchar(200) DEFAULT NULL COMMENT '压缩图片路径',
  `att_size` char(30) NOT NULL DEFAULT '' COMMENT '附件大小',
  `att_type` char(30) NOT NULL DEFAULT '' COMMENT '附件类型',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '分类ID0编辑器,1产品图片,2拼团图片,3砍价图片,4秒杀图片,5文章图片,6组合数据图',
  `time` int(11) NOT NULL DEFAULT '0' COMMENT '上传时间',
  PRIMARY KEY (`att_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='附件管理表';

-- ----------------------------
-- Records of hope_system_attachment 
-- ----------------------------
INSERT INTO `hope_system_attachment` VALUES ('1', '5e9d1b67e0612.jpg', '/uploads/attach/2020/04/20/5e9d1b67e0612.jpg', '\uploads\attach\2020\04\20\s_5e9d1b67e0612.jpg', '66895', 'image/jpeg', '9', '1587354471');
INSERT INTO `hope_system_attachment` VALUES ('2', '5e9d1b67dc45f.png', '/uploads/attach/2020/04/20/5e9d1b67dc45f.png', '\uploads\attach\2020\04\20\s_5e9d1b67dc45f.png', '149297', 'image/png', '12', '1587354471');

-- ----------------------------
-- Table structure for `hope_system_attachment_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_system_attachment_category`;
CREATE TABLE `hope_system_attachment_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0' COMMENT '父级ID',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '分类名称',
  `enname` varchar(50) DEFAULT NULL COMMENT '分类目录',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='附件分类表';

-- ----------------------------
-- Records of hope_system_attachment_category 
-- ----------------------------
INSERT INTO `hope_system_attachment_category` VALUES ('1', '0', '商品', '');
INSERT INTO `hope_system_attachment_category` VALUES ('2', '9', '内销11', '');
INSERT INTO `hope_system_attachment_category` VALUES ('9', '1', '哈哈', '');
INSERT INTO `hope_system_attachment_category` VALUES ('12', '0', '新闻', '');

-- ----------------------------
-- Table structure for `hope_system_menu`
-- ----------------------------
DROP TABLE IF EXISTS `hope_system_menu`;
CREATE TABLE `hope_system_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT '0',
  `menu` varchar(30) DEFAULT NULL,
  `icon` varchar(30) DEFAULT 'icon-chevron-circle-right' COMMENT '菜单图标',
  `url` varchar(255) DEFAULT NULL,
  `weigh` int(11) DEFAULT '0',
  `is_check` smallint(1) DEFAULT '0',
  `act` varchar(50) DEFAULT NULL COMMENT '菜单节点操作类型：列表、添加、修改、审核、关闭、移动、回收、删除、清空、排序',
  `webid` varchar(255) DEFAULT NULL COMMENT '站点id',
  `is_onmenu` tinyint(3) DEFAULT '1' COMMENT '1菜单  0按钮',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COMMENT='系统管理菜单表';

-- ----------------------------
-- Records of hope_system_menu 
-- ----------------------------
INSERT INTO `hope_system_menu` VALUES ('1', '0', '系统设置', 'layui-icon-set', '', '0', '1', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('2', '0', '内容管理', 'layui-icon-template-1', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('3', '0', '栏目管理', 'layui-icon-read', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('4', '0', '常用功能', 'layui-icon-component', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('5', '0', 'SEO设置', 'layui-icon-chart-screen', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('6', '0', '发布系统', 'layui-icon-export', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('7', '0', '效果工具', 'layui-icon-util', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('8', '0', '小程序', 'layui-icon-app', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('10', '1', '站点设置', 'layui-icon-form', '/admin/system.config/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('11', '1', '文件库', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('12', '1', '扩展字段', 'layui-icon-form', '/admin/system.extend_field/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('13', '1', '违禁词', 'layui-icon-form', '/admin/system.ban_word/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('14', '1', '数据备份', 'layui-icon-form', '/admin/system.backup/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('15', '1', '系统日志', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('16', '2', '产品管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('17', '2', '文章管理', 'layui-icon-form', '/admin/content.article/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('18', '2', '相册管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('19', '2', '招聘管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('20', '2', '下载管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('21', '3', '产品分类', 'layui-icon-form', '/admin/category.product/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('22', '3', '文章分类', 'layui-icon-form', '/admin/category.article/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('23', '3', '相册分类', 'layui-icon-form', '/admin/category.photo/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('24', '3', '招聘分类', 'layui-icon-form', '/admin/category.job/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('25', '3', '下载分类', 'layui-icon-form', '/admin/category.download/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('26', '4', '单页管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('27', '4', '专题管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('28', '4', '广告管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('29', '4', '客服管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('30', '4', '标签管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('31', '4', '导航菜单', 'layui-icon-form', '/admin/system.menu/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('32', '5', '基础设置', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('33', '5', '首页TDK', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('34', '5', '关键词设置', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('35', '5', '词库管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('36', '5', '城市分站', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('37', '5', '外链管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('38', '5', '内链管理', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('39', '5', '关键词布局', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('9', '1', '控制台', 'layui-icon-form', '/admin/index/console.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('40', '6', '软文素材', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('41', '6', '图片素材', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('42', '6', '发布任务', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('43', '6', '发布日志', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('44', '7', '关键词排名', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('45', '7', '询盘信息', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('46', '7', '访问统计', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('47', '8', '小程序', 'layui-icon-form', '', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('48', '8', '熊掌ID', 'layui-icon-form', '', '0', '0', '', '', '1');

