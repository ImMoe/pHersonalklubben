/*
 Navicat Premium Data Transfer

 Source Server         : service
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : klubben

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 19/03/2020 12:30:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for anställda
-- ----------------------------
DROP TABLE IF EXISTS `anställda`;
CREATE TABLE `anställda`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valid_from` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valid_to` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `institut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of anställda
-- ----------------------------
INSERT INTO `anställda` VALUES (1, 'Jan', 'Olof', '2020-03-14', '2020-08-20', 'janolof@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Förvaltningen');
INSERT INTO `anställda` VALUES (2, 'Karin', 'Andreasson', '2020-03-14', '2020-03-01', 'karin@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ekonomi och IT');
INSERT INTO `anställda` VALUES (3, 'Maria', 'Spade', '2020-03-14', '2020-06-13', 'maria@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ingenjörsvetenskap');
INSERT INTO `anställda` VALUES (4, 'Christian', 'Ostberg', '2020-03-14', '2020-05-30', 'christian@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Individ och Samhälle');
INSERT INTO `anställda` VALUES (5, 'Robert', 'Dal', '2020-03-14', '2020-05-22', 'robert@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Individ och Samhälle');
INSERT INTO `anställda` VALUES (6, 'Malin', 'Polinini', '2020-03-14', '2020-08-15', 'malin@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Studentstöd och Bibliotek');
INSERT INTO `anställda` VALUES (7, 'Suzana', 'Radamani', '2020-03-14', '2020-05-23', 'suzana@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ingenjörsvetenskap');
INSERT INTO `anställda` VALUES (8, 'Abd', 'Ul Ghafour', '2020-03-14', '2020-05-23', 'abdul@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ingenjörsvetenskap');
INSERT INTO `anställda` VALUES (9, 'Sofia', 'Hammarsköld', '2020-03-14', '2020-03-01', 'sofia@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Hälsovetenskap');
INSERT INTO `anställda` VALUES (10, 'Jonathan', 'Hedlund', '2020-03-14', '2020-03-04', 'jonathan@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Hälsovetenskap');
INSERT INTO `anställda` VALUES (11, 'Marcus', 'Zackrisson', '2020-03-14', '', 'marcus@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ingenjörsvetenskap');
INSERT INTO `anställda` VALUES (12, 'Tomas', 'Johansson', '2020-03-14', '2020-05-23', 'tomas@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Studentstöd och Bibliotek');
INSERT INTO `anställda` VALUES (13, 'Amir', 'Boulori', '2020-03-14', '2020-05-16', 'Amir@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Hälsovetenskap');
INSERT INTO `anställda` VALUES (14, 'Jonas', 'Amosson', '2020-03-14', '2020-05-30', 'jonas@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Hälsovetenskap');
INSERT INTO `anställda` VALUES (15, 'Valentina', 'Escobar', '2020-03-14', '2020-05-23', 'valentina@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ekonomi och IT');
INSERT INTO `anställda` VALUES (16, 'Jan', 'Henrik', '2020-03-14', '2020-05-23', 'janh@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Förvaltningen');
INSERT INTO `anställda` VALUES (17, 'Henrik', 'Hendersen', '2020-03-14', '2020-03-18', 'hendersen@hv.se', '680990854eb710e7b862cb1311578dcb090aa92f', 'Ingenjörsvetenskap');

-- ----------------------------
-- Table structure for medlemmar
-- ----------------------------
DROP TABLE IF EXISTS `medlemmar`;
CREATE TABLE `medlemmar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of medlemmar
-- ----------------------------
INSERT INTO `medlemmar` VALUES (1, 'admin@hv.se', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2020-03-04');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `article` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (7, 'Heros', '<h2><strong>What is Lorem Ipsum?</strong></h2>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<h2><strong>Where does it come from?</strong></h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '2020-03-08');
INSERT INTO `news` VALUES (10, 'Korrigeringsanstalt', '\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n&nbsp;\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n', '2020-03-08');
INSERT INTO `news` VALUES (11, 'Högtravande artikel', 'Titel', '2020-03-09');
INSERT INTO `news` VALUES (12, 'Högskolan Väst Phersonalklubben', '<h1 style=\"text-align: center;\"><strong>Test titel</strong></h1>', '2020-03-09');
INSERT INTO `news` VALUES (13, 'ABcdefghjkk', '<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). &nbsp; Where does it come from?</p>\r\n<p>&nbsp;</p>\r\n<p><img class=\"n3VNCb\" style=\"width: 239px; height: 123px; margin: 0px;\" src=\"https://www.hv.se/assets/img/framework/hv-logo.png\" alt=\"Bildresultat f&ouml;r h&ouml;gskolan v&auml;st\" data-noaft=\"1\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2020-03-09');

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `registered` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `valid_to` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
