-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 10:11 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rendang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ANBANK` varchar(69) NOT NULL,
  `namaBank` varchar(31) NOT NULL,
  `noRekening` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `ANBANK`, `namaBank`, `noRekening`) VALUES
(1, 'cici cipan', 'BRI', '1234567'),
(2, 'gina manila', 'BNI', '2345678'),
(3, 'andre sapura', 'Mandiri', '3456789'),
(4, 'tanja ahyat', 'BJB', '5678901'),
(5, 'kiki akil', 'BCA', '67890123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(59) NOT NULL,
  `img` varchar(201) NOT NULL,
  `deskripsi` text NOT NULL,
  `kode_barang` varchar(21) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `diskon` char(3) NOT NULL,
  `status_harga` enum('show','hide') NOT NULL,
  `stok` enum('Tersedia','Habis') NOT NULL,
  `pembaharuan` datetime NOT NULL,
  `status` enum('Public','Draf') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `img`, `deskripsi`, `kode_barang`, `harga`, `diskon`, `status_harga`, `stok`, `pembaharuan`, `status`) VALUES
(4, 'Rendang Daging Suwir 500gram', '9a8b5-2-rendang-suwir-500.jpg', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; line-height: 21px; background-color: rgba(255, 255, 255, 0.6);">Daging sapi, Santan kelapa, Air, Rempah rempah.</span></p>\r\n', '66474', '25000', '20', 'show', 'Tersedia', '2014-09-18 05:32:41', 'Public'),
(5, 'Rendang Daging Suwir 150gram', '04d4d-3-teridaun-150.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; line-height: 21px; color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; background: rgba(255, 255, 255, 0.6);">\r\n	Ikan teri, Daun kayu mali mali, Santan kelapa, Air, Cabai dan rempah rempah.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; line-height: 21px; color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; background: rgba(255, 255, 255, 0.6);">\r\n	Rendang Teri Daun, makanan khas Indonesia sangat terkenal kelezatannya, dengan rempah rempah dan resep tradisi keluarga asli Payakumbuh dan dimasak menggunakan tungku kayu, menghasilkan rendang UniNam yang sangat lezat.</p>\r\n', '33254', '40000', '0', 'show', 'Tersedia', '2014-09-18 05:34:26', 'Public'),
(6, 'Bumbu Gado - Gado', 'c6e1a-4-gado2.jpg', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; line-height: 21px; background-color: rgba(255, 255, 255, 0.6);">Bumbu Gado gado Siap saji Jeng Naf 100% asli Madiun.</span></p>\r\n', '00987', '35000', '10', 'hide', 'Habis', '2014-09-18 05:37:05', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `konfir_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfir_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDuser` int(11) NOT NULL,
  `IDpesanan` int(11) NOT NULL,
  `IDbank` int(11) NOT NULL,
  `ANBank` varchar(67) NOT NULL,
  `NMBank` varchar(35) NOT NULL,
  `NRBank` varchar(45) NOT NULL,
  `bukti` varchar(201) NOT NULL,
  `ket` text NOT NULL,
  `tgl` datetime NOT NULL,
  `status` enum('New','Done') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `konfir_pembayaran`
--

INSERT INTO `konfir_pembayaran` (`id`, `IDuser`, `IDpesanan`, `IDbank`, `ANBank`, `NMBank`, `NRBank`, `bukti`, `ket`, `tgl`, `status`) VALUES
(1, 3, 1, 3, 'martha mentari', 'BCA', '09999883', 'advertiser.jpg', 'ads', '2014-11-18 05:24:28', 'New'),
(2, 3, 3, 2, 'Cahya Dyazin', 'BCA', '099897758934', 'Download_the_free_Twitter_app_Twitter.png', 'saya transfer dari BCA', '2014-12-13 09:13:00', 'New'),
(3, 3, 4, 1, 'Mentari', 'BRI', '09984584', 'umb-pt_2014_di_upbjj_ut_jakarta.jpg', 'lunas', '2014-12-14 10:19:49', 'New'),
(4, 3, 5, 2, 'Mentari', 'BRI', '924894982224', 'text.jpg', 'pembayaran rendang daging suwir', '2014-12-30 09:47:21', 'New'),
(5, 3, 6, 5, 'Mentari', 'BCA', '38489242', 'text1.jpg', 'daging suwir 500gram', '2014-12-30 09:56:29', 'New'),
(6, 3, 7, 4, 'Mentari', 'BCA', '837429223', 'text2.jpg', 'daging suwir 150gram', '2014-12-30 09:57:48', 'New'),
(7, 3, 8, 3, 'martha mentari', 'BCA', '7972397429', 'text3.jpg', '', '2014-12-30 09:58:31', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(81) NOT NULL,
  `email` varchar(79) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `subjek` enum('Kontak','Kritik','Saran') NOT NULL,
  `isi` text NOT NULL,
  `trash` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `subjek`, `isi`, `trash`) VALUES
(1, 'Cahya Dyazin', 'cahyadyazin@yahoo.com', '081234569987', 'Kontak', 'Saya mau pesan 1 paket rendang', 'Y'),
(2, 'Mentari', 'mentari@yahoo.com', '085771234587', 'Kritik', 'hahaha', 'N'),
(3, 'Mentari', 'mentari@yahoo.com', '085771234587', 'Saran', 'hanya sedikit saran', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(9) NOT NULL,
  `iduser` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `produk` varchar(201) NOT NULL,
  `hrg_satuan` varchar(16) NOT NULL,
  `diskon` char(4) NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('Konfirmasi','Selesai','Baru','Batal','Sedang Dikirim') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `kode_pesanan`, `iduser`, `qty`, `produk`, `hrg_satuan`, `diskon`, `tgl`, `status`) VALUES
(3, '1240', 3, 1, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-20', 'Selesai'),
(4, '4758', 3, 3, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-11-23', 'Selesai'),
(5, '1783', 3, 3, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-13', 'Sedang Dikirim'),
(6, '2324', 3, 9, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-30', 'Konfirmasi'),
(7, '4854', 3, 3, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-30', 'Konfirmasi'),
(8, '8866', 3, 4, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-30', 'Konfirmasi'),
(9, '7402', 3, 2, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-30', 'Batal'),
(10, '6859', 3, 1, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-30', 'Batal'),
(11, '2284', 3, 1, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-30', 'Batal'),
(12, '8369', 3, 2, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-30', 'Baru'),
(13, '4877', 3, 1, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-30', 'Baru'),
(14, '2831', 3, 5, 'Rendang Daging Suwir 500gram', '25000', '20', '2014-12-30', 'Baru'),
(15, '7951', 3, 4, 'Rendang Daging Suwir 150gram', '40000', '0', '2014-12-30', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `tagline` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `key` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `judul`, `tagline`, `img`, `url`, `key`) VALUES
(1, 'Rendang Kemasan', 'Rendang is Indonesian food that is rich in herbs and spices.', '60949-image-13.jpg', 'http://www.kang-cahya.com', 'n'),
(2, 'Rendang Daging Suir', 'Make rendang be the best food in the world', '60596-2-rendang-suwir-500.jpg', '#', 'n'),
(13, 'Uninam', 'Rendang Enak Bikin Ketagihan', '2283f-image-28.jpg', '#', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `level` enum('admin','user') NOT NULL,
  `username` varchar(31) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama` varchar(51) NOT NULL,
  `email` varchar(63) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `create_user` date NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`, `foto`, `nama`, `email`, `nohp`, `alamat`, `create_user`, `status`) VALUES
(1, 'admin', 'admin', '123', '1a677-penerbit-buku.jpg', 'Cahya Dyazin', 'cahya@yahoo.co.id', '085771234587', 'jakarta', '2014-08-15', '1'),
(2, 'user', 'cahya', '123', '', 'Cahya Dyazin', 'cahyadyazin@yahoo.com', '085771234587', 'kuningan', '2015-01-17', '1'),
(3, 'user', 'mentari', '123', '', 'Martha Mentari', 'mentari@yahoo.com', '085771234587', 'Pontianak', '2015-01-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `yahoo`
--

CREATE TABLE IF NOT EXISTS `yahoo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDYM` varchar(57) NOT NULL,
  `theme` enum('t=0','t=1','t=2','t=3','t=4','t=5','t=6','t=7','t=8','t=9','t=10','t=11','t=12','t=13','t=14','t=15','t=16','t=17','t=18','t=19','t=20','t=21','t=22','t=23','t=24') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `yahoo`
--

INSERT INTO `yahoo` (`id`, `IDYM`, `theme`) VALUES
(1, 'cahyadyazin', 't=2'),
(2, 'mentari', 't=3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
