/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100421 (10.4.21-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : laporan_pengaduan

 Target Server Type    : MySQL
 Target Server Version : 100421 (10.4.21-MariaDB)
 File Encoding         : 65001

 Date: 02/07/2023 17:02:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jenis
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis`  (
  `idj` int NOT NULL AUTO_INCREMENT,
  `jenis_pengaduan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idj`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO `jenis` VALUES (1, 'Aspirasi');
INSERT INTO `jenis` VALUES (2, 'Keluhan');
INSERT INTO `jenis` VALUES (3, 'Informasi');

-- ----------------------------
-- Table structure for penanggapan
-- ----------------------------
DROP TABLE IF EXISTS `penanggapan`;
CREATE TABLE `penanggapan`  (
  `id_tanggapan` int NOT NULL AUTO_INCREMENT,
  `id_pengaduan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_tanggapan` date NOT NULL DEFAULT current_timestamp,
  `tanggapan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_petugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tanggapan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penanggapan
-- ----------------------------

-- ----------------------------
-- Table structure for pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL DEFAULT current_timestamp,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `proses` enum('belum di proses','proses','selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengaduan
-- ----------------------------
INSERT INTO `pengaduan` VALUES (22, '2023-07-02', '3507212311020001', 'qweqr', '1', 'asdas', '881dbd49e17c6d725e7ac3683d504840.jpg', 'selesai');

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('petugas','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of petugas
-- ----------------------------
INSERT INTO `petugas` VALUES (10, '3507210508060001', 'petugas', 'petugas@mail.com', '$2y$10$bDxHBhr9WWjeqCNwMua2Melkh9W3ehzbN/2bZXYG1fSLDtdMNf8sW', 'de4a935ee15fa55a6285ee3565fa8081.jpeg', '08977751354', 'petugas');
INSERT INTO `petugas` VALUES (12, '3507212311020001', 'admin', 'admin@mail.com', '$2y$10$nULd/z1s8oncsRHRcasg9eKHR084mKgwY7pYq3AI4vzAoYeEhO6qa', 'd6aee697fc8116c833af957c81e8f129.jpeg', '089666777999', 'admin');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (14, 'Rudy', '3507212311020001', 'rakyat@mail.com', '$2y$10$Ol8QPecCmX9NYbh7r5PX6eZbxZrrvPIVsasYaMZw1/POh7kfEBmK2', '089673472054', 'abdf0b3a87a3fb355cf87b0cc584600f.jpg');

-- ----------------------------
-- View structure for tanggap_adu
-- ----------------------------
DROP VIEW IF EXISTS `tanggap_adu`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `tanggap_adu` AS SELECT
	* 
FROM
	penanggapan
	INNER JOIN pengaduan ON penanggapan.id_pengaduan = pengaduan.id ;

SET FOREIGN_KEY_CHECKS = 1;
