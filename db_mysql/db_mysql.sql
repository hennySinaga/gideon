-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table gideon.gd_absensi
CREATE TABLE IF NOT EXISTS `gd_absensi` (
  `id_absen` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `NIS` varchar(255) NOT NULL,
  `status_kehadiran` enum('S','I','A','H') DEFAULT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_absensi: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_absensi` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_absensi` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_forum
CREATE TABLE IF NOT EXISTS `gd_forum` (
  `id_forum` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `id_user_pembuat` int(11) NOT NULL,
  `id_mtpelajaran` int(11) NOT NULL,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_forum: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_forum` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_forum` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_forum_detail
CREATE TABLE IF NOT EXISTS `gd_forum_detail` (
  `id_forum_detail` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `postingan` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  PRIMARY KEY (`id_forum_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_forum_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_forum_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_forum_detail` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_guru
CREATE TABLE IF NOT EXISTS `gd_guru` (
  `id_user` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `agama` enum('Protestan','Katolik','Islam','Hindu','Buddha','Lainnya') DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NIP`),
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_guru: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_guru` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_jadwal
CREATE TABLE IF NOT EXISTS `gd_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `lokasi_kelas` varchar(255) DEFAULT NULL,
  `NIP` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mtpelajaran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_jadwal: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_jadwal` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_jadwal` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_jawaban
CREATE TABLE IF NOT EXISTS `gd_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `tipe_soal` enum('tugas','ujian') NOT NULL,
  `id_soal` int(11) NOT NULL,
  `file_jawaban` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_jawaban: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_jawaban` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_jawaban` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_kelas
CREATE TABLE IF NOT EXISTS `gd_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  UNIQUE KEY `kelas` (`kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_kelas: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_kelas` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_materi
CREATE TABLE IF NOT EXISTS `gd_materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `file_materi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_materi: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_materi` DISABLE KEYS */;
INSERT INTO `gd_materi` (`id_materi`, `id_topik`, `deskripsi`, `file_materi`) VALUES
	(2, 30, 'aaa', 'C:/xampp/htdocs/gideon/uploads/pelajaran/materi/aryo.JPG'),
	(3, 32, 'konflik sosiall', '/uploads/pelajaran/materi/aryo.JPG');
/*!40000 ALTER TABLE `gd_materi` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_mtpelajaran
CREATE TABLE IF NOT EXISTS `gd_mtpelajaran` (
  `id_mtpelajaran` int(11) NOT NULL AUTO_INCREMENT,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mtpelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_mtpelajaran: ~12 rows (approximately)
/*!40000 ALTER TABLE `gd_mtpelajaran` DISABLE KEYS */;
INSERT INTO `gd_mtpelajaran` (`id_mtpelajaran`, `matapelajaran`, `deskripsi`) VALUES
	(2, 'X - Pendidikan Agama', ''),
	(3, 'X - Pendidikan Pancasila dan Kewarganegaraan', ''),
	(4, 'X - Matematika', ''),
	(5, 'X - Sejarah Indonesia', ''),
	(6, 'X - Bahasa Indonesia', ''),
	(7, 'X - Bahasa Inggris', ''),
	(8, 'X - Seni Budaya', ''),
	(9, 'X - Prakarya', ''),
	(10, 'X - Pendidikan Jasmani, Olahraga dan Kesehatan', ''),
	(11, 'X - Geografi', ''),
	(12, 'X - Sosiologi dan Anthropologi', ''),
	(13, 'X - Ekonomi', '');
/*!40000 ALTER TABLE `gd_mtpelajaran` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_murid
CREATE TABLE IF NOT EXISTS `gd_murid` (
  `id_user` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `agama` enum('Protestan','Katolik','Islam','Hindu','Buddha','Lainnya') DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NIS`),
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_murid: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_murid` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_murid` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_nilai
CREATE TABLE IF NOT EXISTS `gd_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_nilai: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_nilai` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_nilai` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_pengumuman
CREATE TABLE IF NOT EXISTS `gd_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `pengumuman` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_pengumuman: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_pengumuman` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_pengumuman` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_topik
CREATE TABLE IF NOT EXISTS `gd_topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `id_matapelajaran` int(11) NOT NULL,
  `topik` varchar(255) NOT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_topik: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_topik` DISABLE KEYS */;
INSERT INTO `gd_topik` (`id_topik`, `id_matapelajaran`, `topik`) VALUES
	(30, 2, 'Layiohu'),
	(31, 12, 'Konflik Sosial'),
	(32, 12, 'Konflik Sosial');
/*!40000 ALTER TABLE `gd_topik` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_tugas
CREATE TABLE IF NOT EXISTS `gd_tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `id_mtpelajaran` int(11) NOT NULL,
  `deskrispi` varchar(255) DEFAULT NULL,
  `file_soal_tugas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_tugas: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_tugas` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_tugas` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_ujian
CREATE TABLE IF NOT EXISTS `gd_ujian` (
  `id_ujian` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `id_mtpelajaran` int(11) NOT NULL,
  `deskrispi` varchar(255) DEFAULT NULL,
  `file_soal_ujian` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_ujian: ~0 rows (approximately)
/*!40000 ALTER TABLE `gd_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `gd_ujian` ENABLE KEYS */;


-- Dumping structure for table gideon.gd_user
CREATE TABLE IF NOT EXISTS `gd_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('murid','guru','admin') NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table gideon.gd_user: ~3 rows (approximately)
/*!40000 ALTER TABLE `gd_user` DISABLE KEYS */;
INSERT INTO `gd_user` (`id_user`, `username`, `password`, `role`) VALUES
	(1, 'henny', 'henny123', 'admin'),
	(2, 'onto', 'onto123', 'admin'),
	(3, 'nono', 'nono123', 'admin');
/*!40000 ALTER TABLE `gd_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
