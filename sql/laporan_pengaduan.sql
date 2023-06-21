/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100413
Source Host           : localhost:3306
Source Database       : laporan_pengaduan

Target Server Type    : MYSQL
Target Server Version : 100413
File Encoding         : 65001

Date: 2021-05-03 09:07:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for instansi
-- ----------------------------
DROP TABLE IF EXISTS `instansi`;
CREATE TABLE `instansi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of instansi
-- ----------------------------
INSERT INTO `instansi` VALUES ('1', 'Pemerintahan');
INSERT INTO `instansi` VALUES ('3', 'Kominfo');
INSERT INTO `instansi` VALUES ('4', 'DPRD');

-- ----------------------------
-- Table structure for jenis
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengaduan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO `jenis` VALUES ('1', 'Aspirasi');
INSERT INTO `jenis` VALUES ('2', 'Keluhan');
INSERT INTO `jenis` VALUES ('3', 'Informasi');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES ('1', 'Kota Malang ');
INSERT INTO `kota` VALUES ('2', 'Kabupaten Malang');
INSERT INTO `kota` VALUES ('3', 'Kota Blitar');

-- ----------------------------
-- Table structure for penanggapan
-- ----------------------------
DROP TABLE IF EXISTS `penanggapan`;
CREATE TABLE `penanggapan` (
  `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengaduan` varchar(255) NOT NULL,
  `tanggal_tanggapan` date NOT NULL DEFAULT current_timestamp(),
  `tanggapan` varchar(255) NOT NULL,
  `id_petugas` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_tanggapan`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penanggapan
-- ----------------------------
INSERT INTO `penanggapan` VALUES ('33', '14', '2021-05-02', 'aspirasi', '');
INSERT INTO `penanggapan` VALUES ('34', '15', '2021-05-02', 'keluhan', '');
INSERT INTO `penanggapan` VALUES ('35', '16', '2021-05-02', 'informasi', '');
INSERT INTO `penanggapan` VALUES ('36', '14', '2021-05-03', 'aaa', '7');

-- ----------------------------
-- Table structure for pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `nik` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_jenis` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `proses` enum('belum di proses','proses','selesai') NOT NULL,
  `id_kota` varchar(255) NOT NULL,
  `id_instansi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengaduan
-- ----------------------------
INSERT INTO `pengaduan` VALUES ('14', '2021-05-01', '3507212311020001', 'aspirasi', '1', 'aspirasi', 'a4ece65d28bb16c49999d1c36d7d9f45.png', 'proses', '2', '1');
INSERT INTO `pengaduan` VALUES ('15', '2021-05-01', '3507212311020001', 'keluhan', '2', 'Keluhan', 'a4ec90c623175a4b7526f355db919c87.png', 'proses', '2', '1');
INSERT INTO `pengaduan` VALUES ('16', '2021-05-01', '3507212311020001', 'informasi', '3', 'informasi', '4318b25c78960d0d524dab081195ade2.png', 'proses', '1', '3');

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `role` enum('petugas','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of petugas
-- ----------------------------
INSERT INTO `petugas` VALUES ('10', '3507210508060001', 'petugas', 'petugas@mail.com', '$2y$10$bDxHBhr9WWjeqCNwMua2Melkh9W3ehzbN/2bZXYG1fSLDtdMNf8sW', '0c0e52f8f4c1623c7da93b8cecaae981.png', '08977751354', 'petugas');
INSERT INTO `petugas` VALUES ('12', '3507212311020001', 'admin', 'admin@mail.com', '$2y$10$nULd/z1s8oncsRHRcasg9eKHR084mKgwY7pYq3AI4vzAoYeEhO6qa', 'a4495a8c93dcd925928aece87329c3bf.png', '089666777999', 'admin');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `telp` varchar(255) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('10', 'rudy', '3507212308980001', 'rakyat@mail.com', '$2y$10$6FDSFM40fJRMs23GZfIu6u2br3Q5BQNuRBSSe8chEm0jnhugPVzdG', '089673472054', '0c796a766eaca3d0e2ee5d1fef40a010.png');
INSERT INTO `user` VALUES ('12', 'sada', '15665', 'asa@aa.com', '$2y$10$9UKDA0tO7DOB/k74imkwfe8CKBQaQyJo.knLepSYc7P9brn.X1nui', '123456', '880d790b1029d5df51d2ae8b9a7a4010.png');

-- ----------------------------
-- View structure for tanggap_adu
-- ----------------------------
DROP VIEW IF EXISTS `tanggap_adu`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `tanggap_adu` AS SELECT * FROM penanggapan INNER JOIN pengaduan ON penanggapan.id_pengaduan = pengaduan.id ;
