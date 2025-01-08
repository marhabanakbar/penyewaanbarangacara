-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE `data_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Tenda'),
(3, 'Meja'),
(4, 'Kursi'),
(5, 'Panggung');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id_produk`, `id_kategori`, `nama_barang`, `foto_produk`, `deskripsi`, `harga`, `stock`) VALUES
(20, 2, 'Tenda ', 'tenda2.jpeg', 'Tenda ini memiliki warna yg cukup menarik perhatian yaitu dengan kombinasi warna ungu dan putih', 120000, 3),
(21, 2, 'Tenda Minimalis', 'tenda3.jpeg', 'Tenda ini memiliki tampilan yang cukup minimalis, dan warna yang begitu santai', 140000, 2),
(22, 2, 'Tenda Superior', 'tenda4.jpeg', 'Tenda ini memiliki tampilan yang sangat bagus', 170000, 2),
(23, 4, 'Kursi Tamu', 'kursi 1.jpg', 'Kursi ini memiliki tampilan yang bagus', 20000, 30),
(24, 4, 'Kursi Pengantin', 'kursi pengantin.jpg', 'Ini merupakan kursi untuik pengantin yang akan menikah', 40000, 20),
(25, 4, 'Kursi Tamu 2', 'kursi2.jpeg', 'Ini merupakan kursi untuk tamu pengantin', 15000, 50),
(26, 3, 'Meja Bundar', 'meja1.jpeg', 'Ini merupakan meja bundar yang digunakan untuk menyambut tamu undangan', 60000, 15),
(27, 3, 'Meja Nikahan', 'meja pesta.jpg', 'Ini merupakan meja persegi yang digunakan untuk menyambut tamu', 55000, 10),
(29, 5, 'Panggung Nikahan', 'panggung.jpg', 'Ini merupakan panggung yang sangat bagus dan sangat cocok untuk acara pernikahan', 240000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `pesan`) VALUES
(2, 'Muhd Faiq', 'faiq@gmail.com', 'hai\r\n'),
(3, 'yuki kato', 'yukikato@gmail.com', 'Masih memiliki banyak kekurangan tetapi juga sangat bagus dari bagian tampilan');

-- --------------------------------------------------------

--
-- Table structure for table `produk_foto`
--

CREATE TABLE `produk_foto` (
  `id_produk_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_foto`
--

INSERT INTO `produk_foto` (`id_produk_foto`, `id_produk`, `nama_produk_foto`) VALUES
(11, 20, 'tenda2.jpeg'),
(12, 21, 'tenda3.jpeg'),
(13, 22, 'tenda4.jpeg'),
(14, 23, 'kursi 1.jpg'),
(15, 24, 'kursi pengantin.jpg'),
(16, 25, 'kursi2.jpeg'),
(17, 26, 'meja1.jpeg'),
(18, 27, 'meja2.jpeg'),
(19, 27, 'meja pesta.jpg'),
(22, 29, 'panggung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmasi` varchar(50) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `role` enum('1','2',',') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `phone`, `alamat`, `password`, `konfirmasi`, `profile_picture`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '085159330861', 'Batam', '123456', '123456', '', '1'),
(3, 'customer', 'customer@gmail.com', '081239128735', 'batam', '123456', '123456', '', '2'),
(4, 'rifqy056', 'kiki51@gmail.com', '081260607070', 'Jalan Mediterania', '123456', 'rifqy123', '', '2'),
(6, 'yukikato', 'yukikato2@gmail.com', '084676354089', 'Jalan Legenda', '123456789', '123456', '', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk_foto`
--
ALTER TABLE `produk_foto`
  ADD PRIMARY KEY (`id_produk_foto`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk_foto`
--
ALTER TABLE `produk_foto`
  MODIFY `id_produk_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
