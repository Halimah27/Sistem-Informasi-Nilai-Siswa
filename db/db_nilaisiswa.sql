-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 05:24 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nilaisiswa`
--
CREATE DATABASE IF NOT EXISTS `db_nilaisiswa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_nilaisiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_datasiswa` (
  `NISN` int(255) NOT NULL,
  `Nama_Siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `orangtua_siswa` varchar(255) DEFAULT NULL,
  `Tgl_masuk` date NOT NULL,
  PRIMARY KEY (`NISN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datasiswa`
--

INSERT INTO `tbl_datasiswa` (`NISN`, `Nama_Siswa`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `jenis_kelamin`, `orangtua_siswa`, `Tgl_masuk`) VALUES
(111111, 'Indah Syahputri', 'Kisaran', '2014-06-18', 'Islam', 'Kisaran Timur', 'Perempuan', 'Irwansyah', '2021-01-27'),
(111112, 'Nurainun', 'Batubara', '2014-11-12', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Indrawan', '2021-01-27'),
(111123, 'Suci Rahmayati', 'Lima Puluh', '2014-06-10', 'Islam', 'Kisaran Timur', 'Perempuan', 'Doni Irawan', '2021-01-27'),
(111234, 'Putri Kirana', 'Kisaran', '2014-05-05', 'Islam', 'Kisaran Timur', 'Perempuan', 'Dimas Suwandi', '2021-01-27'),
(112345, 'Diana Putri', 'Kisaran', '2014-03-07', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Budi Susilo', '2021-01-27'),
(122223, 'Shaffiyah', 'Kisaran', '2014-07-25', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Kurniawan', '2021-01-27'),
(122234, 'Aisyah Rahma', 'Kisaran', '2014-10-16', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Rudi Syahputra', '2021-01-27'),
(122345, 'Rafika Ismadini', 'Kisaran', '2014-05-15', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Syahputra', '2021-01-27'),
(123345, 'Halimah', 'Kisaran', '2014-08-08', 'Islam', 'Kisaran Timur asahan', 'Perempuan', 'Faisal Andri', '2021-01-27'),
(123456, 'Dwi Andira ', 'Kisaran', '2014-02-13', 'Islam', 'Kisaran Timur', 'Perempuan', 'Rian Putra', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaisiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaisiswa` (
  `tanggal` date NOT NULL,
  `NISN` int(255) NOT NULL,
  `Nama_Siswa` varchar(255) NOT NULL,
  `Kelas` varchar(255) NOT NULL,
  `Mata_Pelajaran` varchar(255) NOT NULL,
  `Tugas1` int(255) NOT NULL,
  `Tugas2` int(255) NOT NULL,
  `UTS` int(255) NOT NULL,
  `UAS` int(255) NOT NULL,
  `Total_Nilai` int(255) NOT NULL,
  `Perilaku` varchar(255) NOT NULL,
  PRIMARY KEY (`NISN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilaisiswa`
--

INSERT INTO `tbl_nilaisiswa` (`tanggal`, `NISN`, `Nama_Siswa`, `Kelas`, `Mata_Pelajaran`, `Tugas1`, `Tugas2`, `UTS`, `UAS`, `Total_Nilai`, `Perilaku`) VALUES
('2021-01-27', 111111, 'Indah Syahputri', '1', 'Seni Budaya', 90, 90, 95, 95, 0, 'Baik'),
('2021-01-27', 111112, 'Nurainun', '1', 'Seni Budaya', 85, 90, 85, 90, 0, 'Cukup Baik'),
('2021-01-27', 111123, 'Suci Rahmayati', '1', 'Bahasa Inggris', 65, 75, 80, 80, 0, 'Cukup Baik'),
('2021-01-27', 111234, 'Putri Kirana', '1', 'Bahasa Inggris', 75, 80, 80, 85, 0, 'Cukup Baik'),
('2021-01-27', 112345, 'Diana Putri', '1', 'Bahasa Inggris', 90, 85, 85, 90, 0, 'Baik'),
('2021-01-27', 122223, 'Shaffiyah', '1', 'IPA', 90, 90, 90, 90, 0, 'Baik'),
('2021-01-27', 122234, 'Aisyah Rahma', '1', 'IPA', 90, 100, 95, 100, 0, 'Baik'),
('2021-01-27', 122345, 'Rafika Ismadini', '1', 'IPS', 65, 70, 85, 75, 0, 'Cukup Baik'),
('2021-01-27', 123345, 'Halimah', '1', 'IPA', 90, 85, 90, 95, 0, 'Baik'),
('2021-01-27', 123456, 'Dwi Andira ', '1', 'IPS', 80, 75, 85, 90, 0, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'datasiswa@gmail.com', 'AHA', 1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
