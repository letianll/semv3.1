/*************************
 * 2020-06-06 17:28:59 
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
-- Table structure for `hope_city`
-- ----------------------------
DROP TABLE IF EXISTS `hope_city`;
CREATE TABLE `hope_city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codeid` int(7) DEFAULT NULL COMMENT '城市编码号',
  `parentid` int(11) DEFAULT '0' COMMENT '父级的codeid',
  `city` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `citypy` varchar(255) DEFAULT NULL,
  `firstletter` char(255) DEFAULT '' COMMENT '城市地名拼音首字母',
  `paixu` int(11) DEFAULT '0' COMMENT '栏目排序编号',
  `isuse` smallint(1) DEFAULT '1' COMMENT '是否开通该城市分站',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '推荐：0为不推荐，1为推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3526 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='城市表';

-- ----------------------------
-- Records of hope_city 
-- ----------------------------
INSERT INTO `hope_city` VALUES ('1', '11', '0', '北京', 'Beijing', 'B', '0', '1', '1');
INSERT INTO `hope_city` VALUES ('22', '12', '0', '天津', 'Tianjin', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('43', '13', '0', '河北', 'Hebei', 'H', '0', '1', '1');
INSERT INTO `hope_city` VALUES ('44', '1301', '13', '石家庄', 'Shijiazhuang', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('69', '1302', '13', '唐山', 'Tangshan', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('86', '1303', '13', '秦皇岛', 'Qinhuangdao', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('95', '1304', '13', '邯郸', 'Handan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('116', '1305', '13', '邢台', 'Xingtai', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('137', '1306', '13', '保定', 'Baoding', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('164', '1307', '13', '张家口', 'Zhangjiakou', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('183', '1308', '13', '承德', 'Chengde', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('196', '1309', '13', '沧州', 'Cangzhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('214', '1310', '13', '廊坊', 'Langfang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('226', '1311', '13', '衡水', 'Hengshui', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('239', '14', '0', '山西', 'Shanxi', 'S', '0', '1', '1');
INSERT INTO `hope_city` VALUES ('240', '1401', '14', '太原', 'Taiyuan', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('252', '1402', '14', '大同', 'Datong', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('265', '1403', '14', '阳泉', 'Yangquan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('272', '1404', '14', '长治', 'Changzhi', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('287', '1405', '14', '晋城', 'Jincheng', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('295', '1406', '14', '朔州', 'Suozhou', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('303', '1407', '14', '晋中', 'Jinzhong', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('316', '1408', '14', '运城', 'Yuncheng', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('331', '1409', '14', '忻州', 'Xinzhou', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('347', '1410', '14', '临汾', 'Linfen', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('366', '1423', '14', '吕梁', 'Lvliang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('380', '15', '0', '内蒙古', 'Neimenggu', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('381', '1501', '15', '呼和浩特', 'Huhehaote', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('392', '1502', '15', '包头', 'Baotou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('403', '1503', '15', '乌海', 'Wuhai', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('408', '1504', '15', '赤峰', 'Chifeng', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('422', '1505', '15', '通辽', 'Tongliao', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('432', '1521', '15', '呼伦贝尔盟', 'Hulunbeiermeng', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('446', '1522', '15', '兴安盟', 'Xinganmeng', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('453', '1525', '15', '锡林郭勒盟', 'Xilinguolemeng', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('466', '1526', '15', '乌兰察布盟', 'Wulanchabumeng', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('478', '1527', '15', '伊克昭盟', 'Yikezhaomeng', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('487', '1528', '15', '巴彦淖尔盟', 'Bayannaoermeng', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('495', '1529', '15', '阿拉善盟', 'Alashanmeng', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('499', '21', '0', '辽宁', 'Liaoning', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('500', '2101', '21', '沈阳', 'Shenyang', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('515', '2102', '21', '大连', 'Dalian', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('527', '2103', '21', '鞍山', 'Anshan', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('536', '2104', '21', '抚顺', 'Fushun', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('545', '2105', '21', '本溪', 'Benxi', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('553', '2106', '21', '丹东', 'Dandong', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('561', '2107', '21', '锦州', 'Jinzhou', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('570', '2108', '21', '营口', 'Yingkou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('578', '2109', '21', '阜新', 'Fuxin', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('587', '2110', '21', '辽阳', 'Liaoyang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('596', '2111', '21', '盘锦', 'Panjin', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('602', '2112', '21', '铁岭', 'Tieling', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('611', '2113', '21', '朝阳', 'Chaoyang', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('620', '2114', '21', '葫芦岛', 'Huludao', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('628', '22', '0', '吉林', 'Jilin', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('629', '2201', '22', '长春', 'Changchun', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('641', '2202', '22', '吉林', 'Jilin2', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('652', '2203', '22', '四平', 'Siping', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('660', '2204', '22', '辽源', 'Liaoyuan', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('666', '2205', '22', '通化', 'Tonghua', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('675', '2206', '22', '白山', 'Baishan', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('683', '2207', '22', '松原', 'Songyuan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('690', '2208', '22', '白城', 'Baicheng', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('697', '2224', '22', '延边朝鲜族自治州', 'Yanbianchaoxianzuzizhizhou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('706', '23', '0', '黑龙江', 'Heilongjiang', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('707', '2301', '23', '哈尔滨', 'Haerbin', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('728', '2302', '23', '齐齐哈尔', 'Qiqihaer', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('746', '2303', '23', '鸡西', 'Jixi', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('757', '2304', '23', '鹤岗', 'Hegang', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('767', '2305', '23', '双鸭山', 'Shuangyashan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('777', '2306', '23', '大庆', 'Daqing', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('788', '2307', '23', '伊春', 'Yichun', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('807', '2308', '23', '佳木斯', 'Jiamusi', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('820', '2309', '23', '七台河', 'Qitaihe', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('826', '2310', '23', '牡丹江', 'Mudanjiang', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('838', '2311', '23', '黑河', 'Heihe', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('846', '2312', '23', '绥化', 'Suihua', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('858', '2327', '23', '大兴安岭', 'Daxinganling', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('862', '31', '0', '上海', 'Shanghai', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('884', '32', '0', '江苏', 'Jiangsu', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('885', '3201', '32', '南京', 'Nanjing', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('902', '3202', '32', '无锡', 'Wuxi', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('912', '3203', '32', '徐州', 'Xuzhou', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('925', '3204', '32', '常州', 'Changzhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('934', '3205', '32', '苏州', 'Suzhou', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('947', '3206', '32', '南通', 'Nantong', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('957', '3207', '32', '连云港', 'Lianyungang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('967', '3208', '32', '淮安', 'Huaian', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('977', '3209', '32', '盐城', 'Yancheng', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('988', '3210', '32', '扬州', 'Yangzhou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('997', '3211', '32', '镇江', 'Zhenjiang', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1005', '3212', '32', '泰州', 'Taizhou', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1013', '3213', '32', '宿迁', 'Suqian', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1020', '33', '0', '浙江', 'Zhejiang', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1021', '3301', '33', '杭州', 'Hangzhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1036', '3302', '33', '宁波', 'Ningbo', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1049', '3303', '33', '温州', 'Wenzhou', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1062', '3304', '33', '嘉兴', 'Jiaxing', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1071', '3305', '33', '湖州', 'Huzhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1076', '3306', '33', '绍兴', 'Shaoxing', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1084', '3307', '33', '金华', 'Jinhua', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1095', '3308', '33', '衢州', 'Quzhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1103', '3309', '33', '舟山', 'Zhoushan', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1109', '3310', '33', '台州', 'Taizhou2', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1120', '3311', '33', '丽水', 'Lishui', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1131', '34', '0', '安徽', 'Anhui', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1132', '3401', '34', '合肥', 'Hefei', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1141', '3402', '34', '芜湖', 'Wuhu', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1150', '3403', '34', '蚌埠', 'Bengbu', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1159', '3404', '34', '淮南', 'Huainan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1167', '3405', '34', '马鞍山', 'Maanshan', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1174', '3406', '34', '淮北', 'Huaibei', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1180', '3407', '34', '铜陵', 'Tongling', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1186', '3408', '34', '安庆', 'Anqing', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1199', '3410', '34', '黄山', 'Huangshan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1208', '3411', '34', '滁州', 'Chuzhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1218', '3412', '34', '阜阳', 'Fuyang', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1228', '3413', '34', '宿州', 'Suzhou2', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1235', '3414', '34', '巢湖', 'Chaohu', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1242', '3415', '34', '六安', 'Luan', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1251', '3416', '34', '亳州', 'Bozhou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1257', '3417', '34', '池州', 'Chizhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1263', '3418', '34', '宣城', 'Xuancheng', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1272', '35', '0', '福建', 'Fujian', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1273', '3501', '35', '福州', 'Fuzhou', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1288', '3502', '35', '厦门', 'Xiamen', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1297', '3503', '35', '莆田', 'Putian', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1303', '3504', '35', '三明', 'Sanming', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1317', '3505', '35', '泉州', 'Quanzhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1331', '3506', '35', '漳州', 'Zhangzhou', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1344', '3507', '35', '南平', 'Nanping', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1356', '3508', '35', '龙岩', 'Longyan', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1365', '3509', '35', '宁德', 'Ningde', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1376', '36', '0', '江西', 'Jiangxi', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1377', '3601', '36', '南昌', 'Nanchang', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1388', '3602', '36', '景德镇', 'Jingdezhen', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1394', '3603', '36', '萍乡', 'Pingxiang', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1401', '3604', '36', '九江', 'Jiujiang', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1415', '3605', '36', '新余', 'Xinyu', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1419', '3606', '36', '鹰潭', 'Yingtan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1424', '3607', '36', '赣州', 'Ganzhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1444', '3608', '36', '吉安', 'Jian', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1459', '3609', '36', '宜春', 'Yichun2', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1471', '3610', '36', '抚州', 'Fuzhou2', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1484', '3611', '36', '上饶', 'Shangrao', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1498', '37', '0', '山东', 'Shandong', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1499', '3701', '37', '济南', 'Jinan', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1511', '3702', '37', '青岛', 'Qingdao', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1525', '3703', '37', '淄博', 'Zibo', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1535', '3704', '37', '枣庄', 'Zaozhuang', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1543', '3705', '37', '东营', 'Dongying', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1550', '3706', '37', '烟台', 'Yantai', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1564', '3707', '37', '潍坊', 'Weifang', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1578', '3708', '37', '济宁', 'Jining', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1592', '3709', '37', '泰安', 'Taian', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1600', '3710', '37', '威海', 'Weihai', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1606', '3711', '37', '日照', 'Rizhao', 'R', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1611', '3712', '37', '莱芜', 'Laiwu', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1615', '3713', '37', '临沂', 'Linyi', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1629', '3714', '37', '德州', 'Dezhou', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1642', '3715', '37', '聊城', 'Liaocheng', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1652', '3716', '37', '滨州', 'Binzhou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1661', '3717', '37', '菏泽', 'Heze', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1672', '41', '0', '河南', 'Henan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1673', '4101', '41', '郑州', 'Zhengzhou', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1687', '4102', '41', '开封', 'Kaifeng', 'K', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1699', '4103', '41', '洛阳', 'Luoyang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1716', '4104', '41', '平顶山', 'Pingdingshan', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1728', '4105', '41', '安阳', 'Anyang', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1739', '4106', '41', '鹤壁', 'Hebi', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1746', '4107', '41', '新乡', 'Xinxiang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1760', '4108', '41', '焦作', 'Jiaozuo', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1773', '4109', '41', '濮阳', 'Puyang', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1781', '4110', '41', '许昌', 'Xuchang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1789', '4111', '41', '漯河', 'Luohe', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1795', '4112', '41', '三门峡', 'Sanmenxia', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1803', '4113', '41', '南阳', 'Nanyang', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1818', '4114', '41', '商丘', 'Shangqiu', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1829', '4115', '41', '信阳', 'Xinyang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1841', '4116', '41', '周口', 'Zhoukou', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1853', '4117', '41', '驻马店', 'Zhumadian', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1865', '42', '0', '湖北', 'Hubei', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1866', '4201', '42', '武汉', 'Wuhan', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1881', '4202', '42', '黄石', 'Huangshi', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1889', '4203', '42', '十堰', 'Shiyan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1899', '4205', '42', '宜昌', 'Yichang', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1914', '4206', '42', '襄樊', 'Xiangfan', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1925', '4207', '42', '鄂州', 'Ezhou', 'E', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1930', '4208', '42', '荆门', 'Jingmen', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1936', '4209', '42', '孝感', 'Xiaogan', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1945', '4210', '42', '荆州', 'Jingzhou', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1955', '4211', '42', '黄冈', 'Huanggang', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1967', '4212', '42', '咸宁', 'Xianning', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1975', '4213', '42', '随州', 'Suizhou', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1979', '4228', '42', '恩施土家族苗族自治州', 'Enshitujiazumiaozuzizhizhou', 'E', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1993', '43', '0', '湖南', 'Hunan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('1994', '4301', '43', '长沙', 'Changsha', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2005', '4302', '43', '株洲', 'Zhuzhou', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2016', '4303', '43', '湘潭', 'Xiangtan', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2023', '4304', '43', '衡阳', 'Hengyang', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2037', '4305', '43', '邵阳', 'Shaoyang', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2051', '4306', '43', '岳阳', 'Yueyang', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2062', '4307', '43', '常德', 'Changde', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2073', '4308', '43', '张家界', 'Zhangjiajie', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2079', '4309', '43', '益阳', 'Yiyang', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2087', '4310', '43', '郴州', 'Chenzhou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2100', '4311', '43', '永州', 'Yongzhou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2113', '4312', '43', '怀化', 'Huaihua', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2127', '4313', '43', '娄底', 'Loudi', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2134', '4331', '43', '湘西土家族苗族自治州', 'Xiangxitujiazumiaozuzizhizhou', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2143', '44', '0', '广东', 'Guangdong', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2144', '4401', '44', '广州', 'Guangzhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2158', '4402', '44', '韶关', 'Shaoguan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2171', '4403', '44', '深圳', 'Shenzhen', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2179', '4404', '44', '珠海', 'Zhuhai', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2183', '4405', '44', '汕头', 'Shantou', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2193', '4406', '44', '佛山', 'Foshan', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2201', '4407', '44', '江门', 'Jiangmen', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2210', '4408', '44', '湛江', 'Zhanjiang', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2221', '4409', '44', '茂名', 'Maoming', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2228', '4412', '44', '肇庆', 'Zhaoqing', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2238', '4413', '44', '惠州', 'Huizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2245', '4414', '44', '梅州', 'Meizhou', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2255', '4415', '44', '汕尾', 'Shanwei', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2261', '4416', '44', '河源', 'Heyuan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2269', '4417', '44', '阳江', 'Yangjiang', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2275', '4418', '44', '清远', 'Qingyuan', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2285', '4419', '44', '东莞', 'Dongguan', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2290', '4420', '44', '中山', 'Zhongshan', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2296', '4451', '44', '潮州', 'Chaozhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2301', '4452', '44', '揭阳', 'Jieyang', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2308', '4453', '44', '云浮', 'Yunfu', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2315', '45', '0', '广西', 'Guangxi', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2316', '4501', '45', '南宁', 'Nanning', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2326', '4502', '45', '柳州', 'Liuzhou', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2335', '4503', '45', '桂林', 'Guilin', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2354', '4504', '45', '梧州', 'Wuzhou', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2363', '4505', '45', '北海', 'Beihai', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2369', '4506', '45', '防城港', 'Fangchenggang', 'F', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2375', '4507', '45', '钦州', 'Qinzhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2381', '4508', '45', '贵港', 'Guigang', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2387', '4509', '45', '玉林', 'Yulin', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2395', '4521', '45', '南宁', 'Nanning2', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2419', '4524', '45', '贺州', 'Hezhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2424', '4526', '45', '百色', 'Baise', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2437', '4527', '45', '河池', 'Hechi', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2449', '46', '0', '海南', 'Hainan', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2450', '4601', '46', '海南', 'Hainan2', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2471', '4602', '46', '海口', 'Haikou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2476', '4603', '46', '三亚', 'Sanya', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2478', '50', '0', '重庆', 'Chongqing', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2522', '51', '0', '四川', 'Sichuan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2523', '5101', '51', '成都', 'Chengdu', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2545', '5103', '51', '自贡', 'Zigong', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2553', '5104', '51', '攀枝花', 'Panzhihua', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2560', '5105', '51', '泸州', 'Luzhou', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2569', '5106', '51', '德阳', 'Deyang', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2577', '5107', '51', '绵阳', 'Mianyang', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2589', '5108', '51', '广元', 'Guangyuan', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2598', '5109', '51', '遂宁', 'Suining', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2604', '5110', '51', '内江', 'Neijiang', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2611', '5111', '51', '乐山', 'Leshan', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2624', '5113', '51', '南充', 'Nanchong', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2635', '5114', '51', '眉山', 'Meishan', 'M', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2643', '5115', '51', '宜宾', 'Yibin', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2655', '5116', '51', '广安', 'Guangan', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2662', '5117', '51', '达州', 'Dazhou', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2671', '5118', '51', '雅安', 'Yaan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2681', '5119', '51', '巴中', 'Bazhong', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2687', '5120', '51', '资阳', 'Ziyang', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2693', '5132', '51', '阿坝藏族羌族自治州', 'Abazangzuqiangzuzizhizhou', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2707', '5133', '51', '甘孜藏族自治州', 'Ganzizangzuzizhizhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2726', '5134', '51', '凉山彝族自治州', 'Liangshanyizuzizhizhou', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2744', '52', '0', '贵州', 'Guizhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2745', '5201', '52', '贵阳', 'Guiyang', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2757', '5202', '52', '六盘水', 'Liupanshui', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2762', '5203', '52', '遵义', 'Zunyi', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2777', '5204', '52', '安顺', 'Anshun', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2785', '5222', '52', '铜仁', 'Tongren', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2796', '5223', '52', '黔西南布依族苗族自治', 'Qianxinanbuyizumiaozuzizhizhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2805', '5224', '52', '毕节', 'Bijie', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2814', '5226', '52', '黔东南苗族侗族自治州', 'Qiandongnanmiaozudongzuzizhizhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2831', '5227', '52', '黔南布依族苗族自治州', 'Qiannanbuyizumiaozuzizhizhou', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2844', '53', '0', '云南', 'Yunnan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2845', '5301', '53', '昆明', 'Kunming', 'K', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2861', '5303', '53', '曲靖', 'Qujing', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2872', '5304', '53', '玉溪', 'Yuxi', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2883', '5305', '53', '保山', 'Baoshan', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2890', '5321', '53', '昭通', 'Zhaotong', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2902', '5323', '53', '楚雄彝族自治州', 'Chuxiongyizuzizhizhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2913', '5325', '53', '红河哈尼族彝族自治州', 'Honghehanizuyizuzizhizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2927', '5326', '53', '文山壮族苗族自治州', 'Wenshanzhuangzumiaozuzizhizhou', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2936', '5327', '53', '思茅', 'Simao', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2947', '5328', '53', '西双版纳傣族自治州', 'Xishuangbannadaizuzizhizhou', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2951', '5329', '53', '大理白族自治州', 'Dalibaizuzizhizhou', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2964', '5331', '53', '德宏傣族景颇族自治州', 'Dehongdaizujingpozuzizhizhou', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2970', '5332', '53', '丽江', 'Lijiang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2975', '5333', '53', '怒江傈僳族自治州', 'Nujianglisuzuzizhizhou', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2980', '5334', '53', '迪庆藏族自治州', 'Diqingzangzuzizhizhou', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2984', '5335', '53', '临沧', 'Lincang', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2993', '54', '0', '西藏', 'Xizang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('2994', '5401', '54', '拉萨', 'Lasa', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3004', '5421', '54', '昌都', 'Changdu', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3016', '5422', '54', '山南', 'Shannan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3029', '5423', '54', '日喀则', 'Rikaze', 'R', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3048', '5424', '54', '那曲', 'Naqu', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3059', '5425', '54', '阿里', 'Ali', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3067', '5426', '54', '林芝', 'Linzhi', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3075', '61', '0', '陕西', 'Shanxi2', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3076', '6101', '61', '西安', 'Xian', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3091', '6102', '61', '铜川', 'Tongchuan', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3097', '6103', '61', '宝鸡', 'Baoji', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3111', '6104', '61', '咸阳', 'Xianyang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3127', '6105', '61', '渭南', 'Weinan', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3140', '6106', '61', '延安', 'Yanan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3155', '6107', '61', '汉中', 'Hanzhong', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3168', '6108', '61', '榆林', 'Yulin2', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3182', '6109', '61', '安康', 'Ankang', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3194', '6125', '61', '商洛', 'Shangluo', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3202', '62', '0', '甘肃', 'Gansu', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3203', '6201', '62', '兰州', 'Lanzhou', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3213', '6202', '62', '嘉峪关', 'Jiayuguan', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3215', '6203', '62', '金昌', 'Jinchang', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3219', '6204', '62', '白银', 'Baiyin', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3226', '6205', '62', '天水', 'Tianshui', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3235', '6221', '62', '酒泉', 'Jiuquan', 'J', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3243', '6222', '62', '张掖', 'Zhangye', 'Z', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3250', '6223', '62', '武威', 'Wuwei', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3255', '6224', '62', '定西', 'Dingxi', 'D', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3263', '6226', '62', '陇南', 'Longnan', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3273', '6227', '62', '平凉', 'Pingliang', 'P', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3281', '6228', '62', '庆阳', 'Qingyang', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3290', '6229', '62', '临夏回族自治州', 'Linxiahuizuzizhizhou', 'L', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3299', '6230', '62', '甘南藏族自治州', 'Gannanzangzuzizhizhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3308', '63', '0', '青海', 'Qinghai', 'Q', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3309', '6301', '63', '西宁', 'Xining', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3318', '6321', '63', '海东', 'Haidong', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3325', '6322', '63', '海北藏族自治州', 'Haibeizangzuzizhizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3330', '6323', '63', '黄南藏族自治州', 'Huangnanzangzuzizhizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3335', '6325', '63', '海南藏族自治州', 'Hainanzangzuzizhizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3341', '6326', '63', '果洛藏族自治州', 'Guoluozangzuzizhizhou', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3348', '6327', '63', '玉树藏族自治州', 'Yushuzangzuzizhizhou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3355', '6328', '63', '海西蒙古族藏族自治州', 'Haiximengguzuzangzuzizhizhou', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3361', '64', '0', '宁夏', 'Ningxia', 'N', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3362', '6401', '64', '银川', 'Yinchuan', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3369', '6402', '64', '石嘴山', 'Shizuishan', 'S', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3377', '6403', '64', '吴忠', 'Wuzhong', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3386', '6422', '64', '固原', 'Guyuan', 'G', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3393', '65', '0', '新疆', 'Xinjiang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3394', '6501', '65', '乌鲁木齐', 'Wulumuqi', 'W', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3404', '6502', '65', '克拉玛依', 'Kelamayi', 'K', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3410', '6521', '65', '吐鲁番', 'Tulufan', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3414', '6522', '65', '哈密', 'Hami', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3418', '6523', '65', '昌吉回族自治州', 'Changjihuizuzizhizhou', 'C', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3427', '6527', '65', '博尔塔拉蒙古自治州', 'Boertalamengguzizhizhou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3431', '6528', '65', '巴音郭楞蒙古自治州', 'Bayinguolengmengguzizhizhou', 'B', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3441', '6529', '65', '阿克苏', 'Akesu', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3451', '6530', '65', '克孜勒苏柯尔克孜自治', 'Kezilesukeerkezizizhizhou', 'K', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3456', '6531', '65', '喀什', 'Kashi', 'K', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3469', '6532', '65', '和田', 'Hetian', 'H', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3478', '6540', '65', '伊犁哈萨克自治州', 'Yilihasakezizhizhou', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3480', '6541', '65', '伊犁', 'Yili', 'Y', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3490', '6542', '65', '塔城', 'Tacheng', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3498', '6543', '65', '阿勒泰', 'Aletai', 'A', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3508', '71', '0', '台湾', 'Taiwan', 'T', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3513', '81', '0', '香港', 'Xianggang', 'X', '0', '1', '0');
INSERT INTO `hope_city` VALUES ('3518', '91', '0', '澳门', 'Aomen', 'A', '0', '1', '0');

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
-- Table structure for `hope_keyword`
-- ----------------------------
DROP TABLE IF EXISTS `hope_keyword`;
CREATE TABLE `hope_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(60) NOT NULL DEFAULT '' COMMENT '关键词',
  `usecount` tinyint(3) unsigned DEFAULT '0' COMMENT '使用次数',
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `keyword_category_id` tinyint(3) DEFAULT NULL COMMENT '关联关键词分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=926 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='基础关键词表，不包含地域词';

-- ----------------------------
-- Records of hope_keyword 
-- ----------------------------
INSERT INTO `hope_keyword` VALUES ('1', '安安', '0', '2020-06-05 10:33:11', '3');
INSERT INTO `hope_keyword` VALUES ('734', '大大', '0', '2020-06-05 10:46:19', '3');
INSERT INTO `hope_keyword` VALUES ('735', '北京安安', '0', '2020-06-05 10:46:19', '3');
INSERT INTO `hope_keyword` VALUES ('736', '北京大大', '0', '2020-06-05 10:46:19', '3');
INSERT INTO `hope_keyword` VALUES ('737', '天津安安', '0', '2020-06-05 10:46:19', '4');
INSERT INTO `hope_keyword` VALUES ('738', '天津大大', '0', '2020-06-05 10:46:19', '4');
INSERT INTO `hope_keyword` VALUES ('902', '北京领票请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('901', '北京啊大大嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('900', '北京啊大大请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('899', '领票嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('898', '领票请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('897', '啊大大嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('896', '啊大大请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('895', '天津领票', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('894', '天津啊大大', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('893', '北京领票', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('892', '北京啊大大', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('891', '领票', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('890', '啊大大', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('889', '河北额去厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('888', '河北额去价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('887', '河北而且厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('886', '河北而且价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('885', '河北彩色平板瓦厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('884', '河北彩色平板瓦价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('883', '天津额去厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('882', '天津额去价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('881', '天津而且厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('880', '天津而且价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('879', '天津彩色平板瓦厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('878', '天津彩色平板瓦价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('877', '北京额去厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('876', '北京额去价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('875', '北京而且厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('874', '北京而且价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('873', '北京彩色平板瓦厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('872', '北京彩色平板瓦价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('871', '额去厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('870', '额去价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('869', '而且厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('868', '而且价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('867', '彩色平板瓦厂家', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('866', '彩色平板瓦价格', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('865', '河北彩色平板瓦', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('864', '天津彩色平板瓦', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('863', '北京彩色平板瓦', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('862', '彩色平板瓦', '0', '2020-06-05 15:58:43', '');
INSERT INTO `hope_keyword` VALUES ('861', '河北额去厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('860', '河北而且厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('859', '河北密码厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('858', '天津额去厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('857', '天津而且厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('856', '天津密码厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('855', '北京额去厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('854', '北京而且厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('853', '北京密码厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('852', '额去厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('851', '而且厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('850', '密码厄齐尔群', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('849', '河北额去', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('848', '河北而且', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('847', '河北密码', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('846', '天津额去', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('845', '天津而且', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('844', '天津密码', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('843', '北京额去', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('842', '北京而且', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('841', '北京密码', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('840', '额去', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('839', '而且', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('838', '密码', '0', '2020-06-05 15:58:38', '');
INSERT INTO `hope_keyword` VALUES ('903', '北京领票嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('904', '天津啊大大请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('905', '天津啊大大嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('906', '天津领票请求', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('907', '天津领票嗯嗯', '0', '2020-06-05 15:58:54', '');
INSERT INTO `hope_keyword` VALUES ('908', '啊大大qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('909', '领票qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('910', '北京啊大大qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('911', '北京领票qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('912', '天津啊大大qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('913', '天津领票qqedq', '0', '2020-06-05 16:00:06', '');
INSERT INTO `hope_keyword` VALUES ('914', '彩色平板瓦eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('915', '而且eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('916', '额去eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('917', '北京彩色平板瓦eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('918', '北京而且eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('919', '北京额去eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('920', '天津彩色平板瓦eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('921', '天津而且eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('922', '天津额去eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('923', '河北彩色平板瓦eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('924', '河北而且eqwe', '0', '2020-06-05 16:00:56', '');
INSERT INTO `hope_keyword` VALUES ('925', '河北额去eqwe', '0', '2020-06-05 16:00:56', '');

-- ----------------------------
-- Table structure for `hope_keyword_category`
-- ----------------------------
DROP TABLE IF EXISTS `hope_keyword_category`;
CREATE TABLE `hope_keyword_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` tinyint(3) DEFAULT NULL COMMENT '关联产品分类id',
  `images` varchar(255) DEFAULT '' COMMENT '关键词分类图片',
  `citys` varchar(255) DEFAULT NULL COMMENT '关联城市',
  `main_keywords` varchar(1000) DEFAULT NULL COMMENT '主词',
  `after_keywords` varchar(1000) DEFAULT NULL COMMENT '后缀词',
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_category_id` (`product_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='关键词设置';

-- ----------------------------
-- Records of hope_keyword_category 
-- ----------------------------
INSERT INTO `hope_keyword_category` VALUES ('3', '11', '', '22,1,43', '彩色平板瓦，而且，额去', 'eqwe ');
INSERT INTO `hope_keyword_category` VALUES ('4', '12', '/uploads/attach/2020/04/20/5e9d1b67e0612.jpg,/uploads/attach/2020/04/20/5e9d1b67e0612.jpg,/uploads/attach/2020/04/20/5e9d1b67e0612.jpg', '1,22', '啊大大，领票', '请求，嗯嗯,qqedq');

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
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=utf8 COMMENT='系统操作日志表';

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
INSERT INTO `hope_log` VALUES ('157', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 16:59:32');
INSERT INTO `hope_log` VALUES ('158', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 16:59:48');
INSERT INTO `hope_log` VALUES ('159', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 17:00:30');
INSERT INTO `hope_log` VALUES ('160', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 17:00:55');
INSERT INTO `hope_log` VALUES ('161', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 17:01:17');
INSERT INTO `hope_log` VALUES ('162', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 17:01:55');
INSERT INTO `hope_log` VALUES ('163', 'fxlhcn', 'edit', '编辑了首页tdk', '127.0.0.1', '2020-06-02 17:06:17');
INSERT INTO `hope_log` VALUES ('164', 'fxlhcn', 'add', '添加了关键词分类', '127.0.0.1', '2020-06-04 10:17:24');
INSERT INTO `hope_log` VALUES ('165', 'fxlhcn', 'add', '添加了关键词分类', '127.0.0.1', '2020-06-04 10:17:38');
INSERT INTO `hope_log` VALUES ('166', 'fxlhcn', 'add', '添加了关键词分类', '127.0.0.1', '2020-06-04 10:17:51');
INSERT INTO `hope_log` VALUES ('167', 'fxlhcn', 'add', '添加了关键词分类', '127.0.0.1', '2020-06-04 10:23:28');
INSERT INTO `hope_log` VALUES ('168', 'fxlhcn', 'delete', '删除了违禁词：2', '127.0.0.1', '2020-06-04 11:10:23');
INSERT INTO `hope_log` VALUES ('169', 'fxlhcn', 'delete', '删除了扩展字段：2', '127.0.0.1', '2020-06-04 11:16:26');
INSERT INTO `hope_log` VALUES ('170', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-04 17:19:10');
INSERT INTO `hope_log` VALUES ('171', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-04 17:20:45');
INSERT INTO `hope_log` VALUES ('172', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 08:57:40');
INSERT INTO `hope_log` VALUES ('173', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:05:37');
INSERT INTO `hope_log` VALUES ('174', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:24:48');
INSERT INTO `hope_log` VALUES ('175', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:27:50');
INSERT INTO `hope_log` VALUES ('176', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:28:08');
INSERT INTO `hope_log` VALUES ('177', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:33:13');
INSERT INTO `hope_log` VALUES ('178', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:34:59');
INSERT INTO `hope_log` VALUES ('179', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:36:58');
INSERT INTO `hope_log` VALUES ('180', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 11:37:38');
INSERT INTO `hope_log` VALUES ('181', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 16:00:44');
INSERT INTO `hope_log` VALUES ('182', 'fxlhcn', 'add', '配置关键词分类', '127.0.0.1', '2020-06-05 16:01:41');
INSERT INTO `hope_log` VALUES ('183', 'fxlhcn', 'add', '添加了软文', '127.0.0.1', '2020-06-06 11:36:48');

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
-- Table structure for `hope_soft_article`
-- ----------------------------
DROP TABLE IF EXISTS `hope_soft_article`;
CREATE TABLE `hope_soft_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `product_category_id` tinyint(3) DEFAULT NULL COMMENT '关联产品id，已添加为关键词分类的',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='软文';

-- ----------------------------
-- Records of hope_soft_article 
-- ----------------------------
INSERT INTO `hope_soft_article` VALUES ('1', '11', '<p>23【后缀】</p>', '4');

-- ----------------------------
-- Table structure for `hope_system`
-- ----------------------------
DROP TABLE IF EXISTS `hope_system`;
CREATE TABLE `hope_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL COMMENT '站点标题',
  `keywords` varchar(500) DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='站点配置';

-- ----------------------------
-- Records of hope_system 
-- ----------------------------
INSERT INTO `hope_system` VALUES ('1', '[dq]站点标题1', '站点k', '站点d1');

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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='系统管理菜单表';

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
INSERT INTO `hope_system_menu` VALUES ('32', '5', '基础设置', 'layui-icon-form', '/admin/sem.base/index.html', '0', '0', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('33', '5', '首页TDK', 'layui-icon-form', '/admin/sem.index/index.html', '0', '1', '', '', '1');
INSERT INTO `hope_system_menu` VALUES ('34', '5', '关键词设置', 'layui-icon-form', '/admin/sem.keyword_category/index.html', '0', '0', '', '', '1');
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

