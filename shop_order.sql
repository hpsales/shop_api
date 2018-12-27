/*
 Navicat Premium Data Transfer

 Source Server         : 二类电商
 Source Server Type    : MySQL
 Source Server Version : 50173
 Source Host           : qdm232362596.my3w.com:3306
 Source Schema         : qdm232362596_db

 Target Server Type    : MySQL
 Target Server Version : 50173
 File Encoding         : 65001

 Date: 26/12/2018 18:20:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for shop_order
-- ----------------------------
DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE `shop_order`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobile` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `way` tinyint(1) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shop_order
-- ----------------------------
INSERT INTO `shop_order` VALUES (1, 1, 2, 'test', '15101571100', '北京市丰台区xx街道', 1, 'asdfadf', 1);
INSERT INTO `shop_order` VALUES (2, 0, 1, 'teest', '15101574310', 'asdasdfasdf', 1, 'asdfasdf', 1);
INSERT INTO `shop_order` VALUES (3, 1, 1, 'test1', '15101484121', 'adsfadfasdfasdf', 1, '', 1);
INSERT INTO `shop_order` VALUES (4, 1, 1, 'test1', '15101484121', 'adsfadfasdfasdf', 1, '', 1);
INSERT INTO `shop_order` VALUES (5, 1, 1, 'test1', '15101484121', 'adsfadfasdfasdf', 1, '', 1);
INSERT INTO `shop_order` VALUES (6, 1, 1, 'test1', '15101484121', 'adsfadfasdfasdf', 1, '', 1);
INSERT INTO `shop_order` VALUES (7, 1, 1, 'test2', '15124741251', 'asdfadfads', 1, 'asdfasdfsf', 1);
INSERT INTO `shop_order` VALUES (8, 1, 1, 'test34', '15743512101', '司法倒计时佛奥时代峻峰', 1, '阿斯顿发的说法打发斯蒂芬', 1);
INSERT INTO `shop_order` VALUES (9, 1, 1, 'test543', '15148751241', 'asdfasdfdsaf', 1, 'adsfasdfasd', 1);
INSERT INTO `shop_order` VALUES (10, 1, 1, 'sadfsadf', '16745121541', 'asdfasdfasdf', 1, 'asdfasdf', 1);
INSERT INTO `shop_order` VALUES (11, 1, 1, 'test1', '15101474210', 'adsfadsfadsf', 1, '', 1);
INSERT INTO `shop_order` VALUES (12, 1, 1, 'testo', '15141014510', 'asdfasdfasdfasdfa', 1, '', 1);

SET FOREIGN_KEY_CHECKS = 1;
