/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50627
Source Host           : localhost:3306
Source Database       : think

Target Server Type    : MYSQL
Target Server Version : 50627
File Encoding         : 65001

Date: 2016-03-09 17:24:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_group`;
CREATE TABLE `t_auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(16) NOT NULL,
  `rules` varchar(300) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` mediumint(9) NOT NULL DEFAULT '0' COMMENT '-1-删除，0-禁用，1-正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_group
-- ----------------------------

-- ----------------------------
-- Table structure for t_auth_menu
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_menu`;
CREATE TABLE `t_auth_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单ID',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级菜单ID',
  `title` varchar(32) NOT NULL COMMENT '菜单名称',
  `url` varchar(64) NOT NULL COMMENT '菜单访问URL',
  `rule` varchar(32) NOT NULL COMMENT '对应规则名（空-URL为规则名）',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态（-1-删除，0-禁用，1-正常）',
  PRIMARY KEY (`id`),
  KEY `idx_status` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_menu
-- ----------------------------
INSERT INTO `t_auth_menu` VALUES ('1', '0', '用户', 'AuthUser/lists', 'Model-AuthUser', '3', '1457509337', '1457514263', '1');
INSERT INTO `t_auth_menu` VALUES ('6', '0', '菜单', 'AuthMenu/lists', '', '10', '1457513854', '0', '1');
INSERT INTO `t_auth_menu` VALUES ('7', '6', '配置', 'Config/lists', '', '2', '1457513895', '0', '1');
INSERT INTO `t_auth_menu` VALUES ('8', '0', '首页', 'Index/welcome', '', '1', '1457514023', '1457514068', '1');
INSERT INTO `t_auth_menu` VALUES ('9', '0', '权限', 'AuthRule/lists', '', '2', '1457514242', '1457514689', '1');

-- ----------------------------
-- Table structure for t_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_rule`;
CREATE TABLE `t_auth_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则ID',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级规则ID（主要用于授权显示）',
  `name` char(80) NOT NULL COMMENT '规则标识',
  `title` char(20) NOT NULL COMMENT '规则名称',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态（-1-删除，0-禁用，1-正常）',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name_condition` (`name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for t_auth_user
-- ----------------------------
DROP TABLE IF EXISTS `t_auth_user`;
CREATE TABLE `t_auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(16) NOT NULL,
  `pass` char(32) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` mediumint(9) NOT NULL DEFAULT '0' COMMENT '-1-删除，0-禁用，1-正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_auth_user
-- ----------------------------
INSERT INTO `t_auth_user` VALUES ('1', '0', 'user1', 'pass1', '111', '111', '0');
