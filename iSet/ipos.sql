-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 03:23 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipos1`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nis` varchar(15) NOT NULL,
  `kode_mp` varchar(255) NOT NULL,
  `modul` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `tes_awal` int(5) NOT NULL,
  `tes_akhir` int(5) NOT NULL,
  `jurnal` int(5) NOT NULL,
  `skill` int(5) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nis`, `kode_mp`, `modul`, `tanggal`, `tes_awal`, `tes_akhir`, `jurnal`, `skill`, `score`) VALUES
('6306131009', 'Biologi', 2, '2015-03-02', 34, 43, 54, 45, 90);

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilihan`
--

CREATE TABLE IF NOT EXISTS `soal_pilihan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id_upload` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_upload`, `nama`) VALUES
(8, 'bhjgkjgkj.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nis` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `role` enum('Murid','Guru') NOT NULL,
  `moto` varchar(255) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nis`, `password`, `nama`, `tempat`, `tanggal`, `kelas`, `email`, `notelp`, `alamat`, `jenis_kelamin`, `role`, `moto`) VALUES
('1234567890', '5f4dcc3b5aa765d61d8327deb882cf99', 'asdfghjk', 'Bandung', '2000-01-01', 'Biologi', 'devireca@gmail.com', '085220954222', 'Jl. Mana aja no.101, Bandung', 'Perempuan', 'Guru', 'sdsdss'),
('6306131009', '5f4dcc3b5aa765d61d8327deb882cf99', 'silpi', 'bandung', '2015-03-12', 'VII-B', 'silpi@gmail.com', '0873232535436', 'jalan', 'Perempuan', 'Murid', 'sds'),
('6306131084', '5f4dcc3b5aa765d61d8327deb882cf99', 'agna', 'Bandung', '2015-03-11', 'VII-A', 'agnasa7@gmail.com', '0987654321234', 'retete', 'Perempuan', 'Murid', 'hard work will never betray you');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
