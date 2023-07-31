-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 07:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpenjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `kode_barang`, `harga`, `stok`) VALUES
(0, 'Rinso', 'RS001', 4000, 18),
(0, 'Pepsodent', 'PS001', 5000, 18),
(0, 'Molto', 'MT025', 4000, 17);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `kode_barang`, `jumlah`, `tgl_beli`) VALUES
(0, 'BK45', 3, '2023-07-03'),
(0, 'P87', 3, '2023-07-05'),
(0, 'BK45', 3, '2023-07-04'),
(0, 'RS001', 5, '2023-07-11'),
(0, 'MT025', 2, '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(5) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tgl_jual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `kode_barang`, `jumlah`, `tgl_jual`) VALUES
(0, 'BK45', 3, '2023-07-03'),
(0, 'RS001', 2, '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'erdiansyah', '123456'),
(0, '21081018', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
