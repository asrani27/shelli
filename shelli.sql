/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : shelli

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 10/05/2022 21:45:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for golongan
-- ----------------------------
DROP TABLE IF EXISTS `golongan`;
CREATE TABLE `golongan`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of golongan
-- ----------------------------
INSERT INTO `golongan` VALUES (1, 'I', '2022-05-09 09:49:40', '2022-05-09 09:49:40');
INSERT INTO `golongan` VALUES (2, 'II', '2022-05-09 09:50:15', '2022-05-09 09:50:15');
INSERT INTO `golongan` VALUES (3, 'III', '2022-05-09 09:50:22', '2022-05-09 09:52:42');

-- ----------------------------
-- Table structure for hakim
-- ----------------------------
DROP TABLE IF EXISTS `hakim`;
CREATE TABLE `hakim`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan_id` int(11) NULL DEFAULT NULL,
  `jabatan_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hakim
-- ----------------------------
INSERT INTO `hakim` VALUES (2, 'fre', 'wrer', 1, 2, '2022-05-09 11:34:51', '2022-05-09 11:34:51');

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (2, 'kepala pengadilan', '2022-05-09 10:07:03', '2022-05-09 10:07:03');

-- ----------------------------
-- Table structure for jaksa
-- ----------------------------
DROP TABLE IF EXISTS `jaksa`;
CREATE TABLE `jaksa`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan_id` int(11) NULL DEFAULT NULL,
  `jabatan_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jaksa
-- ----------------------------
INSERT INTO `jaksa` VALUES (1, '243567', 'eqwrtrtr', 3, 2, '2022-05-09 16:23:31', '2022-05-09 16:23:31');

-- ----------------------------
-- Table structure for panitera
-- ----------------------------
DROP TABLE IF EXISTS `panitera`;
CREATE TABLE `panitera`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan_id` int(11) NULL DEFAULT NULL,
  `jabatan_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of panitera
-- ----------------------------
INSERT INTO `panitera` VALUES (2, 'e', 'asd', 3, 2, '2022-05-09 10:30:19', '2022-05-09 10:30:26');

-- ----------------------------
-- Table structure for perkara
-- ----------------------------
DROP TABLE IF EXISTS `perkara`;
CREATE TABLE `perkara`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomor_perkara` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `nama_penggugat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_penggugat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nama_tergugat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_tergugat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `telp_penggugat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp_tergugat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul_perkara` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deksripsi_perkara` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jenis_perkara` int(1) UNSIGNED NULL DEFAULT NULL COMMENT '1:pidana, 2:perdata, 3:tipikor, 4:PHI',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hakim_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `jaksa_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `panitera_id` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perkara
-- ----------------------------
INSERT INTO `perkara` VALUES (1, NULL, '2022-05-09', 'asrasajh', 'khjskdjfh', 'hjsdkfmn', 'khjsddkjf', '099876', 'kjsdfh', 'alkjdfhkj', NULL, 1, '2022-05-09 11:25:45', '2022-05-09 16:48:41', 2, 1, 2);
INSERT INTO `perkara` VALUES (2, NULL, '2022-05-09', 'iygu', 'hjbhgjb', 'jguhj', 'gjh', 'jh', 'gjh', 'gjh', NULL, 3, '2022-05-09 11:26:54', '2022-05-09 17:36:15', 2, 1, 2);
INSERT INTO `perkara` VALUES (4, NULL, '2022-05-09', 'tyfuhbjkl;', '098765', '6r5678970', '08978', '789878', '7908-', '987', NULL, 2, '2022-05-09 17:19:47', '2022-05-09 17:28:38', 2, 1, 2);
INSERT INTO `perkara` VALUES (5, NULL, '2022-05-09', '3rwtetr', '3243546', '32wer', '325435', 'esrget', 'weret', '3rw4tret', NULL, 1, '2022-05-09 17:20:13', '2022-05-09 17:38:50', 2, 1, 2);
INSERT INTO `perkara` VALUES (6, NULL, '2022-05-09', '325435y46', 'wqretretry', 'wefsrg', '234', '13245354', 'adssdr', '1234', NULL, 4, '2022-05-09 17:37:34', '2022-05-09 17:37:34', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  UNIQUE INDEX `role_users_user_id_role_id_unique`(`user_id`, `role_id`) USING BTREE,
  INDEX `role_users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES (1, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');

-- ----------------------------
-- Table structure for sidang
-- ----------------------------
DROP TABLE IF EXISTS `sidang`;
CREATE TABLE `sidang`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `perkara_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `jenis_perkara` int(11) UNSIGNED NULL DEFAULT NULL COMMENT '1:pidana, 2:perdata, 3:tipikor, 4:phi',
  `tanggal_sidang` date NULL DEFAULT NULL,
  `ruangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keputusan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sidang
-- ----------------------------
INSERT INTO `sidang` VALUES (3, 4, 2, '2022-05-17', '6', 'sad', '2022-05-09 17:31:49', '2022-05-09 18:35:45');
INSERT INTO `sidang` VALUES (4, 2, 3, '2022-05-13', 'wer', 'qwe', '2022-05-09 17:37:08', '2022-05-09 18:40:45');
INSERT INTO `sidang` VALUES (5, 6, 4, '2022-05-12', '13', 'asd', '2022-05-09 17:38:57', '2022-05-09 18:40:32');
INSERT INTO `sidang` VALUES (10, 1, 1, '2022-05-19', '34543', 'asf', '2022-05-09 18:27:44', '2022-05-09 18:32:46');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', NULL, 'admin', '2022-05-10 06:47:41', '$2y$10$EWvbqYJVXAtHOlyX/IR9bOQ7EvE2yQ05gBxZmiFX.BkUYiyo8XHtS', 'Odp1TN3L820gLyETllEE40WpvaRblsDSlOkoYca2jCN4Rzig79OUIH3r2ucz', '2022-05-10 06:47:41', '2022-05-10 06:47:41');

SET FOREIGN_KEY_CHECKS = 1;
