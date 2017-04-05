/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : jiwa

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2017-03-12 14:03:20
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
  `kd_penyakit` text NOT NULL,
  `noip` varchar(60) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of analisa_hasil
-- ----------------------------
INSERT INTO `analisa_hasil` VALUES ('0061', 'hanung', 'P', 'jl. mangkupalas', 'SWASTA', 'P001,P003,P004,P005,', '', '0000-00-00 00:00:00');
INSERT INTO `analisa_hasil` VALUES ('0063', 'oke', 'P', 'ok', 'ok', 'P001,P002,', '', '0000-00-00 00:00:00');
INSERT INTO `analisa_hasil` VALUES ('0064', 'oke', 'P', 'ok', 'ok', 'P001,P002,P004,P003,', '', '0000-00-00 00:00:00');
INSERT INTO `analisa_hasil` VALUES ('0065', 'ita', 'P', 'ita', 'ita', 'P001,', '', '0000-00-00 00:00:00');

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
INSERT INTO `penyakit` VALUES ('P001', 'Gangguan Kesadaran', 'Terganggunya fungsi pada otak	, Cedera otak secara tiba-tiba, Penyakit Berat, Keracunan', '', '', 'Pemberian obat sesuai pemeriksaan dokter , Istirahat Mutlak');
INSERT INTO `penyakit` VALUES ('P002', 'Derealisasi dan Deepersonalisasi', 'Kelelahan yang sangat Hebat, Baru Sembuh dari Sakit Berat, Stress Mental dan Fisik', '', '', 'Pemberian Obat Sesuai Pemeriksaan Dokter, Bersosialisasi dengan keluarga dan teman, Konsultasi Psikolog');
INSERT INTO `penyakit` VALUES ('P003', 'Gangguan Fungsi Pengenalan', 'Ketakutan, Kecemasan, Pengharapan tertentu, Peminum Alcohol & Penyalahgunaan Narkotika, Kurang Tidur, Penggunaan Obat Medis', '', '', 'Istirahat Mutlak, Kurang Stress, Tinggalkan Hidup Alcoholic, Konsultasi Psikolog\r\n');
INSERT INTO `penyakit` VALUES ('P004', 'Gangguan pada fungsi berfikir ', 'Rem Psikis, Yaitu Rasa Malu & Rendah Diri. Gejala pada Penyakit Epilepsi, kondisi', '', '', 'Pemberian Obat sesuai pemeriksaan dokter, Terapi keterampilan dan kesenian, Terapi Spiritual, Konsultasi Psikologi');
INSERT INTO `penyakit` VALUES ('P005', 'Gangguan pada fungsi Inteligensi', 'Faktor Genetik, Penyakit Sewaktu janin dalam kandungan, Luka atau cedera otak sewaktu bayi lahir, Peminum Alkohol, Pendarahan otak / Melunaknya jaringan otak, Gejala Epilepsi', '', '', 'Pemeriksaan Medis, Konsultasi, Psikologi, Terapi untuk merangsang perkembangan sel-sel otak, Pemberian obat sesuai pemeriksaan dokter');
INSERT INTO `penyakit` VALUES ('P006', 'Gangguan fungsi Ingatan', 'Cedera otak secara tiba-tiba, Penyakit Stroke, Pengalaman Emosional yang sangat menyakitkan, Kecemasan Yang kronis, Rem psikis, yaitu rasa malu & rendah diri, Rasa takut yang menghambat fungsi ingatan,Fase usia lanjut', '', '', 'Pemeriksaan medis, Mengkonsumsi suplemen atau makanan yang kaya nutrisi yang di butuhkan otak, Pemberian Obat Sesuai Pemeriksaan Dokter, Kurangi Stress, Terapi Fisik, Konsultasi psikolog');
INSERT INTO `penyakit` VALUES ('P007', 'Gangguan Fungsi Perasaan', 'Frustasi hebat, Konflik emosional, Desakan terhadap berbagai konflik internal, Displin keluarga dan kebiasan hidup yang salah, Cara penyesuaian diri yang salah, Stres mental dan jasmani yang berlebihan, Shock emosional yang terselesaikan, Perasaan rendah ', '', '', 'Konsultasi psikolog, Terapi Holistic, Psikoterapi keagaaman, Terapi Prilaku, Menamamkan Sikap yang kuat akan yang ditakutkan tersebut tidak akan berdampak buruk pada kita, Hypnoterapi, Pemberian Obat sesuai pemeriksaan dokter');
INSERT INTO `penyakit` VALUES ('P008', 'Gangguan Pada Fungsi Kemauan', 'Konflik antara keinginan berbuat dengan ketakutan melakukan sesuatu, Respresi terhadap pengalaman lama trauma psikis(luka jiwa,shock mental), faktor genetik, ketidaknormalan pada otak, Kecemasan, Terhalangnya kemauan-kemauan yang kuat, Dorongan-Dorongan s', '', '', 'Dukungan Keluarga, Pembedahan otak sesuai referensi dokter, Terapi Medis, Terapi Cognitive behavioral, Terapi Prilaku, Hypnoterapi, Pemberian obat sesuai pemeriksaan dokter');
INSERT INTO `penyakit` VALUES ('P009', 'Defisien Moral', 'Lingkungan yang kurang baik', '', '', 'Pemeriksaan medis, Konsultasi psikolog, Pendidikan moral pada keluarga, Psikoterapi keagaaman');
INSERT INTO `penyakit` VALUES ('P010', 'Psikosa', 'Gangguan pada otak dikarenakan suatu penyakit, Depresi yang berat, Pengalaman emosional yang sangat menyakitkan, Penyalahgunaan narkotika', '', '', 'Dukungan Keluarga, Konsultasi psikolog, Kurangi Stres, Pemberian obat sesuai pemeriksaan dokter');
INSERT INTO `penyakit` VALUES ('P011', 'Schizophrenia', 'Ketidak Seimbangan kimia di otak, Pribadi yang terpecah dikarenakan tekanan sosial yang parah, Terjadi kekalutan mental yang parah', '', '', 'Pemeriksaan Medis, Konsultasi Psikolog, Pemberian Obat sesuai pemeriksaan dokter');

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
INSERT INTO `relasi` VALUES ('P001', 'G004');
INSERT INTO `relasi` VALUES ('P009', 'G045');
INSERT INTO `relasi` VALUES ('P006', 'G020');
INSERT INTO `relasi` VALUES ('P002', 'G007');
INSERT INTO `relasi` VALUES ('P008', 'G039');
INSERT INTO `relasi` VALUES ('P003', 'G009');
INSERT INTO `relasi` VALUES ('P008', 'G033');
INSERT INTO `relasi` VALUES ('P010', 'G050');
INSERT INTO `relasi` VALUES ('P007', 'G026');
INSERT INTO `relasi` VALUES ('P008', 'G040');
INSERT INTO `relasi` VALUES ('P008', 'G034');
INSERT INTO `relasi` VALUES ('P008', 'G038');
INSERT INTO `relasi` VALUES ('P005', 'G016');
INSERT INTO `relasi` VALUES ('P011', 'G052');
INSERT INTO `relasi` VALUES ('P011', 'G053');
INSERT INTO `relasi` VALUES ('P011', 'G054');
INSERT INTO `relasi` VALUES ('P002', 'G006');
INSERT INTO `relasi` VALUES ('P009', 'G046');
INSERT INTO `relasi` VALUES ('P009', 'G047');
INSERT INTO `relasi` VALUES ('P002', 'G005');
INSERT INTO `relasi` VALUES ('P010', 'G048');
INSERT INTO `relasi` VALUES ('P003', 'G008');
INSERT INTO `relasi` VALUES ('P004', 'G012');
INSERT INTO `relasi` VALUES ('P006', 'G021');
INSERT INTO `relasi` VALUES ('P006', 'G022');
INSERT INTO `relasi` VALUES ('P007', 'G024');
INSERT INTO `relasi` VALUES ('P010', 'G049');
INSERT INTO `relasi` VALUES ('P007', 'G031');
INSERT INTO `relasi` VALUES ('P007', 'G032');
INSERT INTO `relasi` VALUES ('P003', 'G010');
INSERT INTO `relasi` VALUES ('P008', 'G037');
INSERT INTO `relasi` VALUES ('P008', 'G035');
INSERT INTO `relasi` VALUES ('P004', 'G013');
INSERT INTO `relasi` VALUES ('P009', 'G044');
INSERT INTO `relasi` VALUES ('P004', 'G015');
INSERT INTO `relasi` VALUES ('P007', 'G025');
INSERT INTO `relasi` VALUES ('P008', 'G036');
INSERT INTO `relasi` VALUES ('P008', 'G042');
INSERT INTO `relasi` VALUES ('P003', 'G011');
INSERT INTO `relasi` VALUES ('P004', 'G014');
INSERT INTO `relasi` VALUES ('P006', 'G023');
INSERT INTO `relasi` VALUES ('P007', 'G027');
INSERT INTO `relasi` VALUES ('P007', 'G028');
INSERT INTO `relasi` VALUES ('P007', 'G029');
INSERT INTO `relasi` VALUES ('P007', 'G030');
INSERT INTO `relasi` VALUES ('P010', 'G051');
INSERT INTO `relasi` VALUES ('P005', 'G018');
INSERT INTO `relasi` VALUES ('P011', 'G055');
INSERT INTO `relasi` VALUES ('P005', 'G017');
INSERT INTO `relasi` VALUES ('P005', 'G019');
INSERT INTO `relasi` VALUES ('P008', 'G041');
INSERT INTO `relasi` VALUES ('P008', 'G043');

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
INSERT INTO `tmp_gejala` VALUES ('G009', '::1');
INSERT INTO `tmp_gejala` VALUES ('G008', '::1');

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
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmp_pasien
-- ----------------------------
INSERT INTO `tmp_pasien` VALUES ('0159', 'hanung', 'P', 'jl. mangkupalas', 'SWASTA', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0160', '', 'P', 'jl. mangkupalas', 'SWASTA', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0161', '', 'P', 'jl. mangkupalas', 'SWASTA', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0162', 'oke', 'P', 'ok', 'ok', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0163', '', 'P', 'ok', 'ok', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0164', 'oke', 'P', 'ok', 'ok', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0165', '', 'P', 'ok', 'ok', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0166', 'ita', 'P', 'ita', 'ita', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0167', '', 'P', 'ita', 'ita', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0168', 'hiu', 'P', 'lknlnkn', 'jkj', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0169', 'hiu', 'P', 'lknlnkn', 'jkj', '', '0000-00-00 00:00:00');
INSERT INTO `tmp_pasien` VALUES ('0170', 'hiu', 'P', 'lknlnkn', 'jkj', '', '0000-00-00 00:00:00');

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

-- ----------------------------
-- View structure for v_penyakit_gejala
-- ----------------------------
DROP VIEW IF EXISTS `v_penyakit_gejala`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_penyakit_gejala` AS SELECT
penyakit.nm_penyakit,
penyakit.penyebab,
penyakit.solusi,
relasi.kd_penyakit,
relasi.kd_gejala,
gejala.nm_gejala
FROM
penyakit
INNER JOIN relasi ON relasi.kd_penyakit = penyakit.kd_penyakit
INNER JOIN gejala ON relasi.kd_gejala = gejala.kd_gejala ;
