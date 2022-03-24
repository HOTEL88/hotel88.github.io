-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2022 at 03:16 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18506970_db_hotel88`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_kamar`
--

CREATE TABLE `tb_fasilitas_kamar` (
  `tipe_kamar` enum('twin_room','single_room','murphy_room','') NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `fasilitas_kamar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas_kamar`
--

INSERT INTO `tb_fasilitas_kamar` (`tipe_kamar`, `nama_fasilitas`, `fasilitas_kamar`) VALUES
('single_room', 'Kolam Renang,', 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_umum`
--

CREATE TABLE `tb_fasilitas_umum` (
  `nama_fasilitas` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas_umum`
--

INSERT INTO `tb_fasilitas_umum` (`nama_fasilitas`, `keterangan`) VALUES
('1234', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `tipe_kamar` enum('twin_room','single_room','murphy_room','') NOT NULL,
  `jumlah_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`tipe_kamar`, `jumlah_kamar`) VALUES
('twin_room', '1026'),
('single_room', '1021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `nama_pemesanan` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_handphone` text NOT NULL,
  `nama_tamu` varchar(20) NOT NULL,
  `tipe_kamar` enum('twin_room','single_room','murphy_room','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`check_in`, `check_out`, `jumlah_kamar`, `nama_pemesanan`, `email`, `no_handphone`, `nama_tamu`, `tipe_kamar`) VALUES
('2022-03-16', '2022-03-16', 1, 'aa', 'aa', '1', 'aa', 'twin_room'),
('2022-03-16', '2022-03-16', 1, 'bb', 'bb', '2', 'bb', 'twin_room'),
('2022-03-16', '2022-03-16', 2, 'cc', 'bb', '2', 'bb', 'twin_room'),
('2022-03-16', '2022-03-16', 100, 'dd', 'bb', '2', 'bb', 'twin_room');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jumlah kamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`tgl_cekin`, `tgl_cekout`, `jumlah kamar`) VALUES
('2022-03-10', '2022-03-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resepsionis`
--

CREATE TABLE `tb_resepsionis` (
  `nama_tamu` varchar(20) NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_resepsionis`
--

INSERT INTO `tb_resepsionis` (`nama_tamu`, `tgl_cekin`, `tgl_cekout`) VALUES
('akai', '2022-03-03', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','resepsionis','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(112, 'hotel88', 'hotel88', 'hotel88', 'admin'),
(123, '123', '123', '123', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fasilitas_umum`
--
ALTER TABLE `tb_fasilitas_umum`
  ADD PRIMARY KEY (`nama_fasilitas`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`tipe_kamar`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`nama_pemesanan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
