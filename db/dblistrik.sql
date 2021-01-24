-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 01:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblistrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `idpel` int(20) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `tahun_per` year(4) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `rp_admin` int(5) NOT NULL,
  `rp_tagihan` int(11) NOT NULL,
  `rp_bayar` int(11) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`idpel`, `nama_pel`, `periode`, `tahun_per`, `tgl_bayar`, `rp_admin`, `rp_tagihan`, `rp_bayar`, `id`) VALUES
(1251205235, 'Rahmad H', 'Desember', 2015, '2021-12-31', 3000, 120000, 123000, 6),
(1251202227, 'Hasnan', 'Desember', 2015, '2021-12-31', 3000, 212000, 215000, 7),
(1251202027, 'Suryani', 'Desember', 2015, '2021-12-31', 3000, 212000, 170000, 8),
(1251205235, 'Hasnan MS', 'Desember', 2015, '2021-12-31', 3000, 300000, 303000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(5) NOT NULL,
  `id_pelanggan` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `produk_layanan` varchar(30) NOT NULL,
  `peruntunan` varchar(20) NOT NULL,
  `tarif` varchar(5) NOT NULL,
  `daya` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `bulan_pemakaian` varchar(20) NOT NULL,
  `tahun` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `id_pelanggan`, `nama`, `alamat`, `no_ktp`, `produk_layanan`, `peruntunan`, `tarif`, `daya`, `tgl_masuk`, `bulan_pemakaian`, `tahun`, `status`) VALUES
(1, 1251205235, 'Rahmad H', 'Ledong Barat', 1209320707, 'PASCABAYAR (POSTPAID)', 'Rumah Tangga', 'R 1', 450, '2015-12-31', 'Desember', 2015, 'AKTIF'),
(2, 1251202227, 'Hasnan MS', 'Padang Gala-gala', 1209181011, 'PASCABAYAR (POSTPAID)', 'Rumah Tangga', 'R 2', 900, '2015-12-31', 'Desember', 2015, 'AKTIF'),
(3, 1251202072, 'Suryani', 'Terutung', 1209321845, 'PASCABAYAR (POSTPAID)', 'Rumah Tangga', 'R 4', 450, '2020-12-31', 'Desember', 2020, 'AKTIF'),
(4, 1251202405, 'Aminullah', 'Ledong Timur', 120912345, 'PASCABAYAR (POSTPAID)', 'Rumah Tangga', 'R 3', 450, '2020-12-31', 'Oktober', 2020, 'AKTIF'),
(5, 1251200000, 'Wage Prayogi', 'Aek Kanopan', 1209223356, 'PASCABAYAR (POSTPAID)', 'Rumah Tangga', 'R 3', 450, '2015-12-31', 'Desember', 2015, 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'mahasiswi@gmail.com', 'LOKET PT. PLN (Persero)', 1, 'Staff PT. PLN (Persero)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
