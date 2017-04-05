/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : appcafe

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2017-04-02 10:01:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for detailtransaksi
-- ----------------------------
DROP TABLE IF EXISTS `detailtransaksi`;
CREATE TABLE `detailtransaksi` (
  `id_detailtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `idtransaksi` int(11) DEFAULT NULL,
  `idmenu` int(11) DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detailtransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detailtransaksi
-- ----------------------------
INSERT INTO `detailtransaksi` VALUES ('1', '4', '1', '0', '1', '12000');
INSERT INTO `detailtransaksi` VALUES ('2', '4', '2', '0', '2', '8000');

-- ----------------------------
-- Table structure for jnsmenu
-- ----------------------------
DROP TABLE IF EXISTS `jnsmenu`;
CREATE TABLE `jnsmenu` (
  `idjnsmenu` int(11) NOT NULL AUTO_INCREMENT,
  `jns` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idjnsmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jnsmenu
-- ----------------------------
INSERT INTO `jnsmenu` VALUES ('1', 'MAKANAN');
INSERT INTO `jnsmenu` VALUES ('2', 'MINUMAN');

-- ----------------------------
-- Table structure for meja
-- ----------------------------
DROP TABLE IF EXISTS `meja`;
CREATE TABLE `meja` (
  `idmeja` int(11) NOT NULL AUTO_INCREMENT,
  `nomormeja` varchar(45) DEFAULT NULL,
  `statusmeja` int(1) DEFAULT NULL,
  PRIMARY KEY (`idmeja`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meja
-- ----------------------------
INSERT INTO `meja` VALUES ('1', 'TB001', '1');
INSERT INTO `meja` VALUES ('2', 'TB002', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `namamenu` varchar(45) DEFAULT NULL,
  `idjnsmenu` varchar(45) DEFAULT NULL,
  `Hpp` float DEFAULT NULL,
  `Harga` float DEFAULT NULL,
  `menudiskon` float DEFAULT NULL,
  `statusMenu` int(1) DEFAULT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'NASI GORENG', '1', '10000', '12000', '0', '1');
INSERT INTO `menu` VALUES ('2', 'ES TEH', '2', '2000', '4000', '0', '1');

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `idpembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `jnsbayar` varchar(10) DEFAULT NULL,
  `nomorkartu` varchar(20) DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `totalbayar` float DEFAULT NULL,
  `kembalian` float DEFAULT NULL,
  PRIMARY KEY (`idpembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL AUTO_INCREMENT,
  `namapengguna` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('1', 'admin', 'admin', '1');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgltransaksi` date DEFAULT NULL,
  `idmeja` int(11) DEFAULT NULL,
  `waitress` varchar(20) DEFAULT NULL,
  `idpengguna` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('1', '2017-04-01', '2', '0', '1');
INSERT INTO `transaksi` VALUES ('2', '2017-04-01', '1', '0', '1');
INSERT INTO `transaksi` VALUES ('3', '2017-04-01', '1', '0', '1');
INSERT INTO `transaksi` VALUES ('4', '2017-04-02', '1', '0', '1');
INSERT INTO `transaksi` VALUES ('5', '2017-04-01', '2', '0', '1');
INSERT INTO `transaksi` VALUES ('6', '2017-04-02', '2', '0', '1');
INSERT INTO `transaksi` VALUES ('7', '2017-04-01', '1', '0', '1');
INSERT INTO `transaksi` VALUES ('8', '2017-04-01', '1', '0', '1');
INSERT INTO `transaksi` VALUES ('9', '2017-04-02', '2', '0', '1');

-- ----------------------------
-- View structure for body_transaksi
-- ----------------------------
DROP VIEW IF EXISTS `body_transaksi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `body_transaksi` AS SELECT 
	a.id_detailtransaksi as id_detailtransaksi,
  a.idtransaksi as idtransaksi,
  a.idmenu as idmenu,
  b.namamenu as namamenu,
	b.Harga as Harga,
  a.diskon as diskon,
  a.qty as qty,
  a.subtotal as subtotal
FROM
	detailtransaksi a 
INNER JOIN menu b ON a.idmenu = b.idmenu ;

-- ----------------------------
-- View structure for daftar_menu
-- ----------------------------
DROP VIEW IF EXISTS `daftar_menu`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `daftar_menu` AS select `a`.`idmenu` AS `idmenu`,`a`.`namamenu` AS `namamenu`,a.idjnsmenu AS idjnsmenu,`b`.`jns` AS `jnsmenu`,`a`.`Hpp` AS `Hpp`,`a`.`Harga` AS `Harga`,`a`.`menudiskon` AS `menudiskon`,`a`.`statusMenu` AS `statusMenu` from (`menu` `a` join `jnsmenu` `b` on((`a`.`idjnsmenu` = `b`.`idjnsmenu`))) ;

-- ----------------------------
-- View structure for head_transaksi
-- ----------------------------
DROP VIEW IF EXISTS `head_transaksi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `head_transaksi` AS SELECT 
 a.idtransaksi as idtransaksi,
 a.tgltransaksi as tgltransaksi,
 a.idmeja as idmeja,
 b.nomormeja as nomormeja,
 a.waitress as waitress,
 a.idpengguna as idpengguna,
 c.namapengguna as namapengguna
FROM 
transaksi a 
INNER JOIN meja b ON a.idmeja = b.idmeja
INNER JOIN pengguna c ON a.idpengguna = c.idpengguna ;
