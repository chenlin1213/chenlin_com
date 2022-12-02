/*
 Navicat Premium Data Transfer

 Source Server         : chenlin
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : chenlin_com

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 02/12/2022 10:26:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for deal
-- ----------------------------
DROP TABLE IF EXISTS `deal`;
CREATE TABLE `deal`  (
  `deal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `deal_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deal_price` decimal(10, 2) NULL DEFAULT NULL,
  `deal_bd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deal_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`deal_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of deal
-- ----------------------------
INSERT INTO `deal` VALUES (26, '张三', '收入', 30.00, '第一道分红', '1666944246');
INSERT INTO `deal` VALUES (27, '李四', '收入', 15.00, '第二道分红', '1666944246');
INSERT INTO `deal` VALUES (25, 'chenlin', '支出', 100.00, '商品买卖', '1666944139');
INSERT INTO `deal` VALUES (24, '李四', '收入', 5.00, '第二道分红', '1666944139');
INSERT INTO `deal` VALUES (23, '张三', '收入', 10.00, '第一道分红', '1666944139');
INSERT INTO `deal` VALUES (22, 'chenlin', '支出', 200.00, '商品买卖', '1666943597');
INSERT INTO `deal` VALUES (19, 'chenlin', '支出', 100.00, '商品买卖', '1666943548');
INSERT INTO `deal` VALUES (18, 'chenlin', '支出', 100.00, '商品买卖', '1666943403');
INSERT INTO `deal` VALUES (30, '李四', '收入', 5.00, '第二道分红', '1666944767');
INSERT INTO `deal` VALUES (29, 'chenlin', '收入', 10.00, '第一道分红', '1666944767');
INSERT INTO `deal` VALUES (28, 'chenlin', '支出', 300.00, '商品买卖', '1666944246');
INSERT INTO `deal` VALUES (31, '123', '支出', 100.00, '商品买卖', '1666944767');
INSERT INTO `deal` VALUES (32, 'chenlin', '收入', 2000.00, '商品买卖', '1667018499');
INSERT INTO `deal` VALUES (33, '张三', '收入', 100.00, '第一道分红', '1667182164');
INSERT INTO `deal` VALUES (34, '王五', '收入', 50.00, '第二道分红', '1667182164');
INSERT INTO `deal` VALUES (35, '4545', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (36, '444444', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (37, '12345', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (38, '小小', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (39, '大角牛', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (40, '儿歌多多', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (41, '雷大佐', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (42, '大佐', '收入', 20.00, '第N道分红', '1667182164');
INSERT INTO `deal` VALUES (43, 'chenlin', '支出', 1000.00, '商品买卖', '1667182164');
INSERT INTO `deal` VALUES (44, 'chenlin', '支出', 2000.00, '商品买卖', '1667182258');
INSERT INTO `deal` VALUES (45, '张三', '收入', 200.00, '第一道分红', '1667182258');
INSERT INTO `deal` VALUES (46, '王五', '收入', 100.00, '第二道分红', '1667182258');
INSERT INTO `deal` VALUES (47, '4545', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (48, '444444', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (49, '12345', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (50, '小小', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (51, '大角牛', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (52, '儿歌多多', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (53, '雷大佐', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (54, '大佐', '收入', 40.00, '第N道分红', '1667182258');
INSERT INTO `deal` VALUES (55, 'chenlin', '支出', 3000.00, '商品买卖', '1667204608');
INSERT INTO `deal` VALUES (56, '张三', '收入', 300.00, '第一道分红', '1667204608');
INSERT INTO `deal` VALUES (57, '王五', '收入', 150.00, '第二道分红', '1667204608');
INSERT INTO `deal` VALUES (58, '4545', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (59, '444444', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (60, '12345', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (61, '小小', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (62, '大角牛', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (63, '儿歌多多', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (64, '雷大佐', '收入', 60.00, '第N道分红', '1667204608');
INSERT INTO `deal` VALUES (65, '大佐', '收入', 60.00, '第N道分红', '1667204608');

-- ----------------------------
-- Table structure for recom
-- ----------------------------
DROP TABLE IF EXISTS `recom`;
CREATE TABLE `recom`  (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `recomuser1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`r_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1023 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of recom
-- ----------------------------
INSERT INTO `recom` VALUES (1004, '李四', NULL);
INSERT INTO `recom` VALUES (1003, 'admin', NULL);
INSERT INTO `recom` VALUES (1005, '王五', '4545');
INSERT INTO `recom` VALUES (1006, '张三', '王五');
INSERT INTO `recom` VALUES (1007, 'chelin', '123');
INSERT INTO `recom` VALUES (1008, 'chenlin', '张三');
INSERT INTO `recom` VALUES (1009, '123', 'chenlin');
INSERT INTO `recom` VALUES (1010, 'g大帅', NULL);
INSERT INTO `recom` VALUES (1011, '张大帅', NULL);
INSERT INTO `recom` VALUES (1012, '李大帅', NULL);
INSERT INTO `recom` VALUES (1013, '大佐', NULL);
INSERT INTO `recom` VALUES (1014, '雷大佐', '大佐');
INSERT INTO `recom` VALUES (1015, '儿歌多多', '雷大佐');
INSERT INTO `recom` VALUES (1016, '大角牛', '儿歌多多');
INSERT INTO `recom` VALUES (1017, '小小', '大角牛');
INSERT INTO `recom` VALUES (1018, '12345', '小小');
INSERT INTO `recom` VALUES (1019, '444444', '12345');
INSERT INTO `recom` VALUES (1020, '4545', '444444');
INSERT INTO `recom` VALUES (1021, '李大卫', NULL);
INSERT INTO `recom` VALUES (1022, '45545445', NULL);

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '邮箱',
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '账号激活码',
  `token_exptime` int(10) NOT NULL COMMENT '激活码有效期',
  `statu` tinyint(1) NOT NULL DEFAULT 0 COMMENT '状态，0-未激活，1-已激活',
  `regtime` int(10) NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10037 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (35, 'g大帅', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '8ed52b74826557103e2eda6978920191', 1667111193, 0, 1667024793);
INSERT INTO `t_user` VALUES (36, '张大帅', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'b2edfb6a43b0224906b0752e6f61d784', 1667111895, 0, 1667025495);
INSERT INTO `t_user` VALUES (37, '李大帅', '3d9188577cc9bfe9291ac66b5cc872b7', '1781582206@qq.com', '8a9afc85f98ac4abdcde00a658ac83a5', 1667112135, 0, 1667025735);
INSERT INTO `t_user` VALUES (38, '大佐', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'f2a886186567583d6c8bdb14ed7acda4', 1667112188, 0, 1667025788);
INSERT INTO `t_user` VALUES (39, '雷大佐', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'a22830566e8132c3d75d8095ced37559', 1667112570, 0, 1667026170);
INSERT INTO `t_user` VALUES (40, '儿歌多多', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '428b3cd46c55d88cfa4943bf18d2aee7', 1667112677, 0, 1667026277);
INSERT INTO `t_user` VALUES (41, '大角牛', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '6fdb035b14da38b44fddc5a8dc4aba50', 1667112786, 1, 1667026386);
INSERT INTO `t_user` VALUES (42, '小小', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'abd1d0105994967a6df69d262b5657ae', 1667113307, 0, 1667026907);
INSERT INTO `t_user` VALUES (43, '12345', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '7fbfd98c464ae5918a67ff80ee126904', 1667113474, 0, 1667027074);
INSERT INTO `t_user` VALUES (44, '444444', '2c89109d42178de8a367c0228f169bf8', '1781582206@qq.com', 'a7fad3f38e0b75e90cbceb3de10938b4', 1667113544, 0, 1667027144);
INSERT INTO `t_user` VALUES (45, '4545', '9e4f3a834378c50f844e390f64c3e00a', '1781582206@qq.com', '25fd3ab812b15196ee023c2d98422894', 1667113605, 1, 1667027205);
INSERT INTO `t_user` VALUES (10028, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '9c4f48657ad8cac228be4256a4e8828f', 1667028644, 1, 1666942244);
INSERT INTO `t_user` VALUES (10029, '李四', 'e10adc3949ba59abbe56e057f20f883e', 'chenlin7225@163.com', 'ea6c6d5e62ba5df9ab7063255c2dfad7', 1667028677, 1, 1666942277);
INSERT INTO `t_user` VALUES (10030, '王五', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '0542f3477f839519ea174fdff5c5aff4', 1667028692, 1, 1666942292);
INSERT INTO `t_user` VALUES (10031, '张三', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'e9e749d15d05a848558d9df7765ecd7d', 1667028777, 1, 1666942377);
INSERT INTO `t_user` VALUES (10032, 'chnlin', 'e10adc3949ba59abbe56e057f20f883e', 'chenlin7225@163.com', '28dc2d04db5cd2419ebfd1a08007ecd1', 1667028903, 1, 1666942503);
INSERT INTO `t_user` VALUES (10033, 'chenlin', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', 'c25725e7230f7e62b4dd99c6417ae806', 1667029745, 1, 1666943345);
INSERT INTO `t_user` VALUES (10034, '123', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '99c8769c9bd799ddacf3a98836b06db0', 1667030959, 1, 1666944559);
INSERT INTO `t_user` VALUES (10035, '李大卫', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '3b41a4aceb86578db10945261b8434b8', 1667281506, 0, 1667195106);
INSERT INTO `t_user` VALUES (10036, '45545445', 'e10adc3949ba59abbe56e057f20f883e', '1781582206@qq.com', '5e3986a9ceab4731f9cc3a36d5fc1b8d', 1667290974, 0, 1667204574);

SET FOREIGN_KEY_CHECKS = 1;
