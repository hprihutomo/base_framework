/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : kulit

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2017-02-20 19:36:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for analisa_hasil
-- ----------------------------
DROP TABLE IF EXISTS `analisa_hasil`;
CREATE TABLE `analisa_hasil` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=664 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of analisa_hasil
-- ----------------------------
INSERT INTO `analisa_hasil` VALUES ('0027', 'asmar', 'P', 'padang', 'mhs', 'P001', '127.0.0.1', '2013-02-22 05:59:22');
INSERT INTO `analisa_hasil` VALUES ('0002', 'tes', 'P', 'padang', 'vvvvvvv', 'P013', '127.0.0.1', '2013-01-28 14:38:56');
INSERT INTO `analisa_hasil` VALUES ('0003', 'coba', 'W', 'dddd', 'ttt', 'P011', '127.0.0.1', '2013-01-28 14:46:13');
INSERT INTO `analisa_hasil` VALUES ('0004', 'NINDRA', 'W', 'padang', 'GURU', 'P011', '127.0.0.1', '2013-01-28 15:38:28');
INSERT INTO `analisa_hasil` VALUES ('0005', 'NINDRA', 'W', 'padang', 'GURU', 'P003', '127.0.0.1', '2013-01-28 15:40:50');
INSERT INTO `analisa_hasil` VALUES ('0006', 'dadas', 'P', 'adsad', 'asdad', 'P003', '127.0.0.1', '2013-01-28 19:34:13');
INSERT INTO `analisa_hasil` VALUES ('0007', 'hjhsacskc', 'P', 'hsbsha', 'hbshbs', 'P011', '127.0.0.1', '2013-01-28 19:52:12');
INSERT INTO `analisa_hasil` VALUES ('0008', 'AS', 'P', 'aa', 'aa', 'P007', '127.0.0.1', '2013-01-28 22:02:56');
INSERT INTO `analisa_hasil` VALUES ('0009', 'coba', 'P', 'cac', 'coba', 'P011', '127.0.0.1', '2013-01-28 22:03:55');
INSERT INTO `analisa_hasil` VALUES ('0010', 'ad', 'P', 'adsad', 'AS', 'P011', '127.0.0.1', '2013-01-28 22:34:41');
INSERT INTO `analisa_hasil` VALUES ('0011', 'fikri', 'P', 'aaa', 'aaaaaaa', 'P008', '127.0.0.1', '2013-01-29 12:43:20');
INSERT INTO `analisa_hasil` VALUES ('0012', 'beri', 'P', 'aaa', 'aaa', 'P007', '127.0.0.1', '2013-01-29 16:27:36');
INSERT INTO `analisa_hasil` VALUES ('0013', 'AS', 'P', 'bebe', 'nnene', 'P008', '127.0.0.1', '2013-01-29 16:28:47');
INSERT INTO `analisa_hasil` VALUES ('0014', 'agra', 'P', 'padang', 'padang', 'P008', '127.0.0.1', '2013-01-29 16:31:45');
INSERT INTO `analisa_hasil` VALUES ('0015', 'gat', 'P', 'padang', 'dddd', 'P007', '127.0.0.1', '2013-01-29 16:34:15');
INSERT INTO `analisa_hasil` VALUES ('0016', 'beri', 'P', 'AS', 'AS', 'P003', '127.0.0.1', '2013-01-30 11:43:18');
INSERT INTO `analisa_hasil` VALUES ('0017', 'asmar', 'P', 'padang', 'padang', 'P001', '127.0.0.1', '2013-01-30 11:44:46');
INSERT INTO `analisa_hasil` VALUES ('0018', 'toloy', 'P', 'padang', 'mhs', 'P011', '127.0.0.1', '2013-01-30 11:46:42');
INSERT INTO `analisa_hasil` VALUES ('0019', 'tes', 'P', 'ahsuysa', 'mnsa', 'P001', '127.0.0.1', '2013-01-30 12:15:39');
INSERT INTO `analisa_hasil` VALUES ('0020', 'budi', 'P', 'padang', 'swasta', 'P001', '127.0.0.1', '2013-01-30 13:10:07');
INSERT INTO `analisa_hasil` VALUES ('0021', 'asmar', 'P', 'padang', 'mhs', 'P001', '127.0.0.1', '2013-02-09 15:09:06');
INSERT INTO `analisa_hasil` VALUES ('0022', 'AS', 'P', 'ppp', 'pppppp', 'P007', '127.0.0.1', '2013-02-13 00:27:32');
INSERT INTO `analisa_hasil` VALUES ('0023', 'AS', 'P', 'sas', 'sas', 'P006', '127.0.0.1', '2013-02-13 00:51:13');
INSERT INTO `analisa_hasil` VALUES ('0024', 'AS', 'P', 'asss', 'sas', 'P006', '127.0.0.1', '2013-02-13 00:59:30');
INSERT INTO `analisa_hasil` VALUES ('0028', 'adi', 'P', 'pdg', 'swasta', 'P004', '127.0.0.1', '2013-02-22 11:23:39');
INSERT INTO `analisa_hasil` VALUES ('0029', 'dani', 'P', 'padang', 'siswa', 'P005', '127.0.0.1', '2013-02-22 14:01:39');
INSERT INTO `analisa_hasil` VALUES ('0030', 'tes', 'P', 'papospa', 'iaisao', 'P001', '127.0.0.1', '2013-02-22 14:40:28');
INSERT INTO `analisa_hasil` VALUES ('0031', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0032', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0033', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0034', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0035', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0036', 'aas', 'P', 'asa', 'asas', 'P001', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0037', 'aas', 'P', 'asa', 'asas', 'P005', '127.0.0.1', '2013-02-22 14:44:21');
INSERT INTO `analisa_hasil` VALUES ('0651', 'beri', 'P', 'padang', 'mhs', 'P005', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0650', 'beri', 'P', 'padang', 'mhs', 'P003', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0649', 'beri', 'P', 'padang', 'mhs', 'P001', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0648', 'beri', 'P', 'padang', 'mhs', 'P005', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0647', 'beri', 'P', 'padang', 'mhs', 'P006', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0646', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0645', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0644', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0643', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0642', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0641', 'beri', 'P', 'padang', 'mhs', 'P002', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0640', 'AS', 'P', 'padang', 'mhs', 'P004', '127.0.0.1', '2013-02-24 16:12:15');
INSERT INTO `analisa_hasil` VALUES ('0639', 'AS', 'P', 'padang', 'mhs', 'P004', '127.0.0.1', '2013-02-24 16:12:15');
INSERT INTO `analisa_hasil` VALUES ('0638', 'AS', 'P', 'padang', 'mhs', 'P004', '127.0.0.1', '2013-02-24 16:12:15');
INSERT INTO `analisa_hasil` VALUES ('0637', 'AS', 'P', 'padang', 'mhs', 'P004', '127.0.0.1', '2013-02-24 16:12:15');
INSERT INTO `analisa_hasil` VALUES ('0636', 'AS', 'P', 'padang', 'mhs', 'P004', '127.0.0.1', '2013-02-24 16:12:15');
INSERT INTO `analisa_hasil` VALUES ('0246', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0247', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0248', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0249', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0250', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0251', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0252', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0253', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0254', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0255', 'tes', 'P', 'tes', 'tes', 'P001', '127.0.0.1', '2013-02-22 14:55:44');
INSERT INTO `analisa_hasil` VALUES ('0657', 'AS', 'P', 'padang', 'mhs', 'P001', '127.0.0.1', '2013-03-02 01:24:16');
INSERT INTO `analisa_hasil` VALUES ('0656', 'AS', 'P', 'padang', 'mhs', 'P005', '127.0.0.1', '2013-03-02 01:24:16');
INSERT INTO `analisa_hasil` VALUES ('0655', 'AS', 'P', 'padang', 'mhs', 'P005', '127.0.0.1', '2013-03-02 01:24:16');
INSERT INTO `analisa_hasil` VALUES ('0654', 'tes', 'P', 'padang', 'mhs', 'P001', '127.0.0.1', '2013-02-26 15:42:49');
INSERT INTO `analisa_hasil` VALUES ('0653', 'ida', 'W', 'padang', 'guru', 'P004', '127.0.0.1', '2013-02-25 09:53:01');
INSERT INTO `analisa_hasil` VALUES ('0652', 'beri', 'P', 'padang', 'mhs', 'P013', '127.0.0.1', '2013-02-24 16:23:10');
INSERT INTO `analisa_hasil` VALUES ('0635', 'toloy', 'P', 'blum ada', 'sama', 'P002', '127.0.0.1', '2013-02-23 22:20:04');
INSERT INTO `analisa_hasil` VALUES ('0658', 'ok', 'W', 'ok', 'ok', 'P001', '::1', '2017-02-16 22:37:15');
INSERT INTO `analisa_hasil` VALUES ('0659', 'ok', 'P', 'lp', 'l', 'P002', '::1', '2017-02-16 22:38:42');
INSERT INTO `analisa_hasil` VALUES ('0660', 'hanung', 'P', 'jl.mas', 'swasta', 'P001', '::1', '2017-02-17 14:50:16');
INSERT INTO `analisa_hasil` VALUES ('0661', 'marlo', 'P', 'samarinda', 'joki', 'P001', '::1', '2017-02-20 17:20:31');
INSERT INTO `analisa_hasil` VALUES ('0662', 'marlo', 'P', 'samarinda', 'joki', 'P009', '::1', '2017-02-20 17:20:31');
INSERT INTO `analisa_hasil` VALUES ('0663', 'ARYO', 'P', 'samarinda', 'PSIKIATER', 'P002', '::1', '2017-02-20 19:24:49');

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala` (
  `kd_gejala` char(4) NOT NULL DEFAULT '',
  `nm_gejala` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kd_gejala`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES ('G001', 'Daya orientasi yang sangat terganggu');
INSERT INTO `gejala` VALUES ('G002', 'Tidak memahami lingkungan sekitar');
INSERT INTO `gejala` VALUES ('G003', 'Konsentrasi minatnya sangat terganggu');
INSERT INTO `gejala` VALUES ('G004', 'Hilang ingatan akan keadaan diri sendiri & lingkunganya');
INSERT INTO `gejala` VALUES ('G005', 'Merasa terpisah dari diri sendiri baik fisik atau mental');
INSERT INTO `gejala` VALUES ('G006', 'Merasa sedang mengamati dirinya sendiri');
INSERT INTO `gejala` VALUES ('G007', 'Menganggap diri sendiri orang asing atau tidak nyata');
INSERT INTO `gejala` VALUES ('G008', 'Keliru melihat suatu objek');
INSERT INTO `gejala` VALUES ('G009', 'Merasa disapa/ diajak berbicara dengan seseorang');
INSERT INTO `gejala` VALUES ('G010', 'Merasa dirinya dibicarakan atau diolok-olok orang lain');
INSERT INTO `gejala` VALUES ('G011', 'Pengamatan yang keliru tanpa adanya suatu objek');
INSERT INTO `gejala` VALUES ('G012', 'Reaksi berbicara menjadi sangat lamban');
INSERT INTO `gejala` VALUES ('G013', 'Menjawab pertanyaan orang lain dengan susah payah');
INSERT INTO `gejala` VALUES ('G014', 'Bercerita dengan sebanyak-banyaknya');
INSERT INTO `gejala` VALUES ('G015', 'Terdiam dengan tiba-tiba');
INSERT INTO `gejala` VALUES ('G016', 'Tidak bisa mengerti atau diajari');
INSERT INTO `gejala` VALUES ('G017', 'Tidak bisa melindungi diri dari bahaya luar');
INSERT INTO `gejala` VALUES ('G018', 'Hilangnya fungsi-fungsi berfikir');
INSERT INTO `gejala` VALUES ('G019', 'Hilangnya kemampuan menalar');
INSERT INTO `gejala` VALUES ('G020', 'Tidak nyambung saat diajak berbicara');
INSERT INTO `gejala` VALUES ('G021', 'Tidak dapat mengingat masa lalu');
INSERT INTO `gejala` VALUES ('G022', 'Kemampuan berfikir menjadi tidak logis');
INSERT INTO `gejala` VALUES ('G023', 'Daya ingatan menjadi menurun');
INSERT INTO `gejala` VALUES ('G024', 'Menangis sejadi-jadinya atau gembira yang berlebih');
INSERT INTO `gejala` VALUES ('G025', 'Ketakutan yang berlebih karena suatu objek atau lainya');
INSERT INTO `gejala` VALUES ('G026', 'Memiliki keyakinan bahwa memiliki penyakit yang serius');
INSERT INTO `gejala` VALUES ('G027', 'Merasa berkuasa, harga diri yang berlebih');
INSERT INTO `gejala` VALUES ('G028', 'Sensitif & mudah marah terhadap hal yang tidak dia sukai');
INSERT INTO `gejala` VALUES ('G029', 'Lelah, lemas yang luar biasa walau bergerak sedikit');
INSERT INTO `gejala` VALUES ('G030', 'Merasa sedih yang berkepanjangan');
INSERT INTO `gejala` VALUES ('G031', 'Mudah menangis');
INSERT INTO `gejala` VALUES ('G032', 'Merasa bersalah');
INSERT INTO `gejala` VALUES ('G033', 'Perbuatan berulang,misalnya terus menerus mencuci');
INSERT INTO `gejala` VALUES ('G034', 'tangan,memutari meja,mengangguk-angguk, menghitung');
INSERT INTO `gejala` VALUES ('G035', 'semua tiang listrik,dan lainya');
INSERT INTO `gejala` VALUES ('G036', 'Perlakuan yang sadistis, kasar, kurang ajar');
INSERT INTO `gejala` VALUES ('G037', 'Selalu ragu tentang pekerjaan yang dilakukan apakah ');
INSERT INTO `gejala` VALUES ('G038', 'sudah benar ');
INSERT INTO `gejala` VALUES ('G039', 'Terus menerus menggerakan anggota badan,misalnya : ');
INSERT INTO `gejala` VALUES ('G040', 'mengedipkan mata, Menggigit gigit bibir bagian atas, ');
INSERT INTO `gejala` VALUES ('G041', 'mengerut ngerutkan dahi, menggoyang-goyang kepala');
INSERT INTO `gejala` VALUES ('G042', 'Tidak ada rasa tanggung jawab');
INSERT INTO `gejala` VALUES ('G043', 'Menganiaya, menyerang, membunuh tanpa kesadaran ');
INSERT INTO `gejala` VALUES ('G044', 'Bersikap munafik, jahat');
INSERT INTO `gejala` VALUES ('G045', 'Tidak menghargai orang lain');
INSERT INTO `gejala` VALUES ('G046', 'Selalu melanggar hukum');
INSERT INTO `gejala` VALUES ('G047', 'Egoistis');
INSERT INTO `gejala` VALUES ('G048', 'Pikiran dan tanggapanya tidak sesuai dengan realitas');
INSERT INTO `gejala` VALUES ('G049', 'Menutup diri dari realitas yang ada');
INSERT INTO `gejala` VALUES ('G050', 'Tidak mampu mengenali serta menilai realita yang ada');
INSERT INTO `gejala` VALUES ('G051', 'Tak ada kontak sama sekali dengan lingkunganya');
INSERT INTO `gejala` VALUES ('G052', 'Menjadi jorok dan kotor sekali');
INSERT INTO `gejala` VALUES ('G053', 'Penuh dengan halusinasi');
INSERT INTO `gejala` VALUES ('G054', 'Mengarang kata atau istilah baru yang tidak ada artinya');
INSERT INTO `gejala` VALUES ('G055', 'Marah dengan tiba-tiba tanpa ada sebab');

-- ----------------------------
-- Table structure for pakar
-- ----------------------------
DROP TABLE IF EXISTS `pakar`;
CREATE TABLE `pakar` (
  `userID` varchar(50) NOT NULL DEFAULT '',
  `passID` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pakar
-- ----------------------------
INSERT INTO `pakar` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit` (
  `kd_penyakit` char(4) NOT NULL,
  `nm_penyakit` varchar(60) NOT NULL,
  `penyebab` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `photo` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`kd_penyakit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES ('P001', 'Gangguan Kesadaran', 'Terganggunya fungsi pada otak	, Cedera otak secara tiba-tiba, Penyakit Berat, Keracunan', '', '', '');
INSERT INTO `penyakit` VALUES ('P002', 'Derealisasi dan Deepersonalisasi', 'Kelelahan yang sangat Hebat, Baru Sembuh dari Sakit Berat', '', '', '');
INSERT INTO `penyakit` VALUES ('P003', 'Gangguan Fungsi Pengenalan', 'Ketakutan, Kecemasan, Pengharapan tertentu, Peminum Alcohol & Penyalahgunaan Narkotika, Kurang Tidur', '', '', '');
INSERT INTO `penyakit` VALUES ('P004', 'Gangguan pada fungsi berfikir ', 'Rem Psikis, Yaitu Rasa Malu & Rendah Diri. Gejala pada Penyakit Epilepsi, kondisi', '', '', '');
INSERT INTO `penyakit` VALUES ('P005', 'Gangguan pada fungsi Inteligensi', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P006', 'Gangguan fungsi Ingatan', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P007', 'Gangguan Fungsi Perasaan', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P008', 'Gangguan Pada Fungsi Kemauan', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P009', 'Defisien Moral', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P010', 'Psikosa', '', '', '', '');
INSERT INTO `penyakit` VALUES ('P011', 'Schizophrenia', '', '', '', '');

-- ----------------------------
-- Table structure for relasi
-- ----------------------------
DROP TABLE IF EXISTS `relasi`;
CREATE TABLE `relasi` (
  `kd_penyakit` char(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of relasi
-- ----------------------------
INSERT INTO `relasi` VALUES ('P001', 'G001');
INSERT INTO `relasi` VALUES ('P001', 'G002');
INSERT INTO `relasi` VALUES ('P001', 'G003');
INSERT INTO `relasi` VALUES ('P001', 'G015');
INSERT INTO `relasi` VALUES ('P001', 'G016');
INSERT INTO `relasi` VALUES ('P001', 'G042');
INSERT INTO `relasi` VALUES ('P002', 'G001');
INSERT INTO `relasi` VALUES ('P002', 'G002');
INSERT INTO `relasi` VALUES ('P002', 'G009');
INSERT INTO `relasi` VALUES ('P002', 'G014');
INSERT INTO `relasi` VALUES ('P002', 'G015');
INSERT INTO `relasi` VALUES ('P002', 'G032');
INSERT INTO `relasi` VALUES ('P002', 'G034');
INSERT INTO `relasi` VALUES ('P002', 'G035');
INSERT INTO `relasi` VALUES ('P003', 'G001');
INSERT INTO `relasi` VALUES ('P003', 'G002');
INSERT INTO `relasi` VALUES ('P003', 'G025');
INSERT INTO `relasi` VALUES ('P004', 'G001');
INSERT INTO `relasi` VALUES ('P004', 'G003');
INSERT INTO `relasi` VALUES ('P004', 'G006');
INSERT INTO `relasi` VALUES ('P005', 'G001');
INSERT INTO `relasi` VALUES ('P005', 'G004');
INSERT INTO `relasi` VALUES ('P005', 'G005');
INSERT INTO `relasi` VALUES ('P006', 'G001');
INSERT INTO `relasi` VALUES ('P006', 'G008');
INSERT INTO `relasi` VALUES ('P006', 'G012');
INSERT INTO `relasi` VALUES ('P006', 'G021');
INSERT INTO `relasi` VALUES ('P006', 'G022');
INSERT INTO `relasi` VALUES ('P006', 'G024');
INSERT INTO `relasi` VALUES ('P006', 'G032');
INSERT INTO `relasi` VALUES ('P006', 'G038');
INSERT INTO `relasi` VALUES ('P007', 'G001');
INSERT INTO `relasi` VALUES ('P007', 'G010');
INSERT INTO `relasi` VALUES ('P007', 'G014');
INSERT INTO `relasi` VALUES ('P008', 'G001');
INSERT INTO `relasi` VALUES ('P008', 'G013');
INSERT INTO `relasi` VALUES ('P008', 'G014');
INSERT INTO `relasi` VALUES ('P008', 'G015');
INSERT INTO `relasi` VALUES ('P008', 'G025');
INSERT INTO `relasi` VALUES ('P008', 'G036');
INSERT INTO `relasi` VALUES ('P008', 'G043');
INSERT INTO `relasi` VALUES ('P009', 'G002');
INSERT INTO `relasi` VALUES ('P009', 'G011');
INSERT INTO `relasi` VALUES ('P009', 'G014');
INSERT INTO `relasi` VALUES ('P009', 'G023');
INSERT INTO `relasi` VALUES ('P009', 'G027');
INSERT INTO `relasi` VALUES ('P009', 'G028');
INSERT INTO `relasi` VALUES ('P009', 'G029');
INSERT INTO `relasi` VALUES ('P009', 'G030');
INSERT INTO `relasi` VALUES ('P009', 'G043');
INSERT INTO `relasi` VALUES ('P010', 'G002');
INSERT INTO `relasi` VALUES ('P010', 'G017');
INSERT INTO `relasi` VALUES ('P010', 'G018');
INSERT INTO `relasi` VALUES ('P010', 'G019');
INSERT INTO `relasi` VALUES ('P010', 'G041');
INSERT INTO `relasi` VALUES ('P011', 'G002');
INSERT INTO `relasi` VALUES ('P011', 'G017');
INSERT INTO `relasi` VALUES ('P011', 'G019');
INSERT INTO `relasi` VALUES ('P011', 'G041');
INSERT INTO `relasi` VALUES ('P011', 'G043');

-- ----------------------------
-- Table structure for tmp_analisa
-- ----------------------------
DROP TABLE IF EXISTS `tmp_analisa`;
CREATE TABLE `tmp_analisa` (
  `noip` varchar(60) NOT NULL DEFAULT '',
  `kd_penyakit` char(4) NOT NULL DEFAULT '',
  `kd_gejala` char(4) NOT NULL DEFAULT '',
  `status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmp_analisa
-- ----------------------------
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G035', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G034', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G032', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G015', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G014', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G009', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G002', 'N');
INSERT INTO `tmp_analisa` VALUES ('::1', 'P002', 'G001', 'N');

-- ----------------------------
-- Table structure for tmp_gejala
-- ----------------------------
DROP TABLE IF EXISTS `tmp_gejala`;
CREATE TABLE `tmp_gejala` (
  `kd_gejala` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmp_gejala
-- ----------------------------
INSERT INTO `tmp_gejala` VALUES ('G001', '127.0.0.1');
INSERT INTO `tmp_gejala` VALUES ('G008', '127.0.0.1');
INSERT INTO `tmp_gejala` VALUES ('G001', '127.0.0.1');
INSERT INTO `tmp_gejala` VALUES ('G034', '::1');
INSERT INTO `tmp_gejala` VALUES ('G032', '::1');
INSERT INTO `tmp_gejala` VALUES ('G015', '::1');
INSERT INTO `tmp_gejala` VALUES ('G014', '::1');
INSERT INTO `tmp_gejala` VALUES ('G009', '::1');
INSERT INTO `tmp_gejala` VALUES ('G002', '::1');
INSERT INTO `tmp_gejala` VALUES ('G001', '::1');

-- ----------------------------
-- Table structure for tmp_pasien
-- ----------------------------
DROP TABLE IF EXISTS `tmp_pasien`;
CREATE TABLE `tmp_pasien` (
  `id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `kelamin` enum('P','W') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `noip` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmp_pasien
-- ----------------------------
INSERT INTO `tmp_pasien` VALUES ('0110', 'AS', 'P', 'padang', 'mahasiswa', '127.0.0.1', '2013-03-03 22:10:28');
INSERT INTO `tmp_pasien` VALUES ('0118', 'ARYO', 'P', 'samarinda', 'PSIKIATER', '::1', '2017-02-20 19:24:49');

-- ----------------------------
-- Table structure for tmp_penyakit
-- ----------------------------
DROP TABLE IF EXISTS `tmp_penyakit`;
CREATE TABLE `tmp_penyakit` (
  `kd_penyakit` char(4) NOT NULL,
  `noip` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmp_penyakit
-- ----------------------------
INSERT INTO `tmp_penyakit` VALUES ('P002', '::1');
