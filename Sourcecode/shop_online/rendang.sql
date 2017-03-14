-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 08 Okt 2014 pada 05.20
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `rendang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ANBANK` varchar(69) NOT NULL,
  `namaBank` varchar(31) NOT NULL,
  `noRekening` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `ANBANK`, `namaBank`, `noRekening`) VALUES
(1, 'cici cipan', 'BRI', '1234567'),
(2, 'gina manila', 'BNI', '2345678'),
(3, 'andre sapura', 'Mandiri', '3456789'),
(4, 'tanja ahyat', 'BJB', '5678901'),
(5, 'kiki akil', 'BCA', '67890123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(59) NOT NULL,
  `img` varchar(201) NOT NULL,
  `deskripsi` text NOT NULL,
  `kode_barang` varchar(21) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `status_harga` enum('show','hide') NOT NULL,
  `stok` enum('Tersedia','Habis') NOT NULL,
  `pembaharuan` datetime NOT NULL,
  `status` enum('Public','Draf') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `img`, `deskripsi`, `kode_barang`, `harga`, `status_harga`, `stok`, `pembaharuan`, `status`) VALUES
(1, 'baju', 'f2ef0-amazon.jpg', '<p>\r\n	Baju Amazon club</p>\r\n', '12345', '50000', 'show', 'Tersedia', '2014-09-10 02:09:56', 'Public'),
(2, 'Baju Kaos', '104f7-2.jpg', '<p>\r\n	Baju Apple Step Jobs</p>\r\n', '23456', '6000', 'show', 'Habis', '2014-09-10 02:11:26', 'Public'),
(3, 'Baju seo', 'a273d-seo.png', '<p>\r\n	Baju untuk seo club</p>\r\n', '13456', '40000', 'show', 'Tersedia', '2014-09-10 02:15:30', 'Public'),
(4, 'Rendang Daging Suwir 500gram', '9a8b5-2-rendang-suwir-500.jpg', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; line-height: 21px; background-color: rgba(255, 255, 255, 0.6);">Daging sapi, Santan kelapa, Air, Rempah rempah.</span></p>\r\n', '66474', '25000', 'show', 'Tersedia', '2014-09-18 05:32:41', 'Public'),
(5, 'Rendang Daging Suwir 150gram', '04d4d-3-teridaun-150.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; line-height: 21px; color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; background: rgba(255, 255, 255, 0.6);">\r\n	Ikan teri, Daun kayu mali mali, Santan kelapa, Air, Cabai dan rempah rempah.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; line-height: 21px; color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; background: rgba(255, 255, 255, 0.6);">\r\n	Rendang Teri Daun, makanan khas Indonesia sangat terkenal kelezatannya, dengan rempah rempah dan resep tradisi keluarga asli Payakumbuh dan dimasak menggunakan tungku kayu, menghasilkan rendang UniNam yang sangat lezat.</p>\r\n', '33254', '40000', 'show', 'Tersedia', '2014-09-18 05:34:26', 'Public'),
(6, 'Bumbu Gado - Gado', '78cef-image-1.jpg', '<p>\r\n	<span style="color: rgb(0, 0, 0); font-family: Rambla, sans-serif; font-size: 14px; line-height: 21px; background-color: rgba(255, 255, 255, 0.6);">Bumbu Gado gado Siap saji Jeng Naf 100% asli Madiun.</span></p>\r\n', '00987', '35000', 'hide', 'Habis', '2014-09-18 05:37:05', 'Public');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfir_pembayaran`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `konfir_pembayaran`
--

INSERT INTO `konfir_pembayaran` (`id`, `IDuser`, `IDpesanan`, `IDbank`, `ANBank`, `NMBank`, `NRBank`, `bukti`, `ket`, `tgl`, `status`) VALUES
(4, 2, 1, 1, 'yayan', 'Mandiri', '8888', 'error_mail_2.png', 'ccc', '2014-09-13 10:33:08', 'New'),
(5, 2, 8, 4, 'yayan', 'BRI', '7890987654', 'Taylor_Swift_5.jpg', 'kkkk', '2014-09-15 06:06:30', 'New');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(81) NOT NULL,
  `email` varchar(79) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `subjek` enum('Kontak','Kritik','Saran') NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `subjek`, `isi`) VALUES
(1, 'cahya', 'cahyadyazin@yahoo.com', '0', 'Kritik', 'kurang bagus'),
(2, 'dias', 'dyazincahya@gmail.com', '0', 'Kontak', 'gimana kabarnya ?'),
(3, 'devin', 'devin@yahoo.com', '123455', 'Kritik', 'bagus'),
(4, 'Mentari', 'mentari@yahoo.com', '2147483647', 'Kritik', 'ini cuma nyobaik'),
(5, 'Mentari', 'mentari@yahoo.com', '2147483647', 'Kritik', 'ini cuma nyobaik'),
(6, 'oky saputra', 'oky@gmail.com', '', 'Saran', 'hahaha 21'),
(7, 'oky saputra', 'oky@gmail.com', '0', 'Saran', 'hahaha 21'),
(8, 'oky saputra', 'oky@gmail.com', '0', 'Saran', 'hahaha 21'),
(9, 'oky saputra', 'oky@gmail.com', '08923456678', 'Kontak', 'ini saya cahya'),
(10, 'oky saputra', 'oky@gmail.com', '08923456678', 'Kritik', 'hihihi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(9) NOT NULL,
  `iduser` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `produk` varchar(201) NOT NULL,
  `hrg_satuan` varchar(16) NOT NULL,
  `tgl` datetime NOT NULL,
  `status` enum('Konfirmasi','Selesai','Baru','Batal','Sedang Dikirim') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `kode_pesanan`, `iduser`, `qty`, `produk`, `hrg_satuan`, `tgl`, `status`) VALUES
(1, '2730', 2, 12, 'Baju Kaos', '6000', '2014-09-11 09:31:40', 'Sedang Dikirim'),
(2, '9910', 2, 3, 'Baju seo', '40000', '2014-09-11 09:31:40', 'Batal'),
(3, '7918', 2, 1, 'baju', '50000', '2014-09-11 09:31:40', 'Batal'),
(4, '6552', 2, 1, 'baju', '50000', '2014-09-11 10:40:59', 'Selesai'),
(5, '2381', 2, 1, 'Baju Kaos', '6000', '2014-09-11 10:40:59', 'Sedang Dikirim'),
(6, '4478', 2, 1, 'Baju seo', '40000', '2014-09-11 10:40:59', 'Sedang Dikirim'),
(7, '6639', 2, 1, 'baju', '50000', '2014-09-11 10:42:04', 'Selesai'),
(8, '8580', 2, 1, 'Baju Kaos', '6000', '2014-09-11 10:42:04', 'Konfirmasi'),
(9, '2517', 2, 1, 'Baju seo', '40000', '2014-09-11 10:42:04', 'Batal'),
(10, '1846', 3, 1, 'baju', '50000', '2014-09-13 07:48:19', 'Baru'),
(11, '9950', 3, 1, 'Baju Kaos', '6000', '2014-09-13 07:48:19', 'Baru'),
(12, '3667', 0, 1, 'Bumbu Gado - Gado', '35000', '2014-09-19 04:16:23', 'Baru'),
(13, '6628', 0, 1, 'Bumbu Gado - Gado', '35000', '2014-09-19 04:17:07', 'Baru'),
(14, '4134', 0, 1, 'Rendang Daging Suwir 150gram', '40000', '2014-09-19 04:17:07', 'Baru'),
(15, '4579', 2, 1, 'baju', '50000', '2014-09-30 03:46:01', 'Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
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
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `judul`, `tagline`, `img`, `url`, `key`) VALUES
(1, 'Rendang is Indonesian food that is rich in herbs and spices.', '', '9bf7f-image-27.jpg', '', 'n'),
(2, 'Delicious rendang aroma and delicious taste', 'Make rendang be the best food in the world', '08828-image-28.jpg', '', 'n'),
(13, 'Uninam', 'Rendang Enak Bikin Ketagihan', '6dfb2-4-gado2.jpg', 'http://www.youtube.com/watch?v=55e9DT8fCo0', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`, `foto`, `nama`, `email`, `nohp`, `alamat`, `create_user`, `status`) VALUES
(1, 'admin', 'a', '1', '1a677-penerbit-buku.jpg', 'Cahya Dyazin', 'cahya@yahoo.co.id', '085771234587', 'jakarta', '2014-08-15', '1'),
(2, 'user', 'u', '1', '', 'oky saputra', 'oky@gmail.com', '08923456678', 'Garawangi', '2014-08-15', '1'),
(3, 'user', 'u2', '1', '78f9f-js.png', 'Herman', 'herman@ymail.com', '', 'kuningan', '2014-08-16', '1'),
(7, 'user', 'cahya', '123', '', 'Cahya Dyazin', 'cahyadyazin@yahoo.com', '085771234587', 'asdfghjklkjhgf', '0000-00-00', '1'),
(8, 'user', 'mentari', '123', '', 'Mentari', 'mentari@yahoo.com', '085771234587', 'hjk', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yahoo`
--

CREATE TABLE IF NOT EXISTS `yahoo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IDYM` varchar(57) NOT NULL,
  `theme` enum('t=0','t=1','t=2','t=3','t=4','t=5','t=6','t=7','t=8','t=9','t=10','t=11','t=12','t=13','t=14','t=15','t=16','t=17','t=18','t=19','t=20','t=21','t=22','t=23','t=24') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `yahoo`
--

INSERT INTO `yahoo` (`id`, `IDYM`, `theme`) VALUES
(1, 'cahyadyazin', 't=2'),
(2, 'mentari', 't=3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
