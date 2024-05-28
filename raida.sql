/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : raida

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 28/05/2024 16:44:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tim_id` int(11) DEFAULT NULL,
  `wilayah_id` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
BEGIN;
INSERT INTO `jadwal` (`id`, `kode`, `tanggal`, `waktu`, `tim_id`, `wilayah_id`, `keterangan`, `created_at`, `updated_at`) VALUES (1, '324565', '2024-05-28', '14:44:00', 1, 1, '-di laksanakan', '2024-05-28 06:43:50', '2024-05-28 06:48:44');
COMMIT;

-- ----------------------------
-- Table structure for monitoring
-- ----------------------------
DROP TABLE IF EXISTS `monitoring`;
CREATE TABLE `monitoring` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `jadwal_id` int(11) DEFAULT NULL,
  `laporan` text,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of monitoring
-- ----------------------------
BEGIN;
INSERT INTO `monitoring` (`id`, `kode`, `jadwal_id`, `laporan`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 'M0012', 1, 'telah di laksanakan', 'perlu perhatian', '2024-05-28 07:24:54', '2024-05-28 07:30:46');
COMMIT;

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nrp` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `goldarah` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tim_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petugas
-- ----------------------------
BEGIN;
INSERT INTO `petugas` (`id`, `nrp`, `nama`, `jkel`, `agama`, `goldarah`, `pangkat`, `satuan`, `telp`, `alamat`, `tim_id`) VALUES (1, '3213112312', 'Andre Taulany', 'L', 'Islam', 'O', 'tingkat 1', '-', '21343321', 'jl Kampung Gedang', 1);
INSERT INTO `petugas` (`id`, `nrp`, `nama`, `jkel`, `agama`, `goldarah`, `pangkat`, `satuan`, `telp`, `alamat`, `tim_id`) VALUES (4, '342564322', 'DIdi Mulyadi', 'L', 'Islam', 'O', 'Tingkat 1', '-', '09876789', 'jl Pangeran Antasari', NULL);
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (5, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
COMMIT;

-- ----------------------------
-- Table structure for tim
-- ----------------------------
DROP TABLE IF EXISTS `tim`;
CREATE TABLE `tim` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `ketua` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tim
-- ----------------------------
BEGIN;
INSERT INTO `tim` (`id`, `kode`, `nama`, `satuan`, `ketua`) VALUES (1, '213', 'TIM Alpha', 'Divisi 1', 'Budi1');
INSERT INTO `tim` (`id`, `kode`, `nama`, `satuan`, `ketua`) VALUES (2, '312', 'Tim Beta', 'divisi 2', 'andi');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'raida', NULL, 'raida', '2024-05-28 16:43:12', '$2y$10$3k7FLC2TkBzYnumOyiv7BOmTOsTzzJHb3/p4aKcBUoGonp4Jij0Wu', NULL, 'mliskgCz4VfovSaBY0JaDT5cTtqiXpnoxViVmSlKq78rDDvIPrLOZagN3TFp', '2024-05-28 16:43:12', '2024-05-28 16:43:12', NULL, NULL, 0);
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (5, 'adi', NULL, 'adi', '2024-04-20 11:07:17', '$2y$10$sxXBzHYpymU8.AMoywsDh.EzC5P9fHnIr2POgiTkFWp11kQQBJQaG', NULL, NULL, '2024-04-20 03:07:17', '2024-04-20 03:07:17', NULL, NULL, 0);
COMMIT;

-- ----------------------------
-- Table structure for wilayah
-- ----------------------------
DROP TABLE IF EXISTS `wilayah`;
CREATE TABLE `wilayah` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wilayah
-- ----------------------------
BEGIN;
INSERT INTO `wilayah` (`id`, `kode`, `nama`, `kelurahan`, `kecamatan`, `status`) VALUES (1, '001', 'bjb 1', 'trikora', 'bjb', '-');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
