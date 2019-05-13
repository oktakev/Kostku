-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2019 pada 09.48
-- Versi Server: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penghuni`
--

CREATE TABLE IF NOT EXISTS `data_penghuni` (
  `data_penghuni_id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_ktp` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `data_kamar_id` int(11) NOT NULL,
  `biaya_kost_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penghuni`
--

INSERT INTO `data_penghuni` (`data_penghuni_id`, `nama_lengkap`, `no_ktp`, `alamat`, `no_hp`, `status`, `data_kamar_id`, `biaya_kost_id`) VALUES
(1, 'Oktakev', 2147483647, 'RT05/03 Ds Beru Kec Jereweh Sumbawa Barat', '082134567876', 'Aktif', 12, 1),
(2, 'kololo', 2147483646, 'jln.alalal', '082134567876', 'Aktif', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan_sarapan`
--

CREATE TABLE IF NOT EXISTS `detail_pesan_sarapan` (
  `id_detail` int(11) NOT NULL,
  `pesan_sarapan_id` int(11) NOT NULL,
  `menu_sarapan_id` int(11) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`fasilitas_id`, `nama_fasilitas`) VALUES
(2, 'Kipas'),
(3, 'Mesin Cuci'),
(4, 'Kompor'),
(5, 'Sapu'),
(6, 'Kasur'),
(7, 'Meja Kamar'),
(8, 'Kaca Kamar'),
(9, 'Tempat Sampah'),
(10, 'Penggorengan'),
(11, 'Galon air'),
(12, 'Kain Pel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `data_kamar_id` int(11) NOT NULL,
  `data_lantai_id` int(11) NOT NULL,
  `no_kamar` int(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`data_kamar_id`, `data_lantai_id`, `no_kamar`, `status`) VALUES
(1, 6, 1, 'Ditempati'),
(2, 10, 2, 'Ditempati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lantai`
--

CREATE TABLE IF NOT EXISTS `lantai` (
  `data_lantai_id` int(11) NOT NULL,
  `nama_lantai` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lantai`
--

INSERT INTO `lantai` (`data_lantai_id`, `nama_lantai`) VALUES
(6, 'Lantai 1'),
(7, 'Lantai 2'),
(10, 'Lantai 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_fasilitas`
--

CREATE TABLE IF NOT EXISTS `lapor_fasilitas` (
  `lapor_fasilitas_id` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fasilitas_id` int(11) NOT NULL,
  `data_penghuni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_sarapan`
--

CREATE TABLE IF NOT EXISTS `menu_sarapan` (
  `menu_sarapan_id` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_sarapan`
--

CREATE TABLE IF NOT EXISTS `pembayaran_sarapan` (
  `bayar_sarapan_id` int(11) NOT NULL,
  `data_penghuni_id` int(11) NOT NULL,
  `periode` int(255) NOT NULL,
  `tanggal_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_biaya`
--

CREATE TABLE IF NOT EXISTS `pengaturan_biaya` (
  `biaya_kost_id` int(11) NOT NULL,
  `nama_pengaturan` varchar(255) NOT NULL,
  `biaya` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan_biaya`
--

INSERT INTO `pengaturan_biaya` (`biaya_kost_id`, `nama_pengaturan`, `biaya`) VALUES
(1, 'Biaya kost', 500000),
(2, 'Biaya kos premium', 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_fix`
--

CREATE TABLE IF NOT EXISTS `pengeluaran_fix` (
  `fix_id` int(11) NOT NULL,
  `nama_pengeluaran` varchar(255) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran_fix`
--

INSERT INTO `pengeluaran_fix` (`fix_id`, `nama_pengeluaran`, `biaya`) VALUES
(1, 'Gaji koki', 1000000000),
(2, 'Gaji tukang kebun', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_sarapan`
--

CREATE TABLE IF NOT EXISTS `pesan_sarapan` (
  `pesan_sarapan_id` int(11) NOT NULL,
  `data_penghuni_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kamar`
--

CREATE TABLE IF NOT EXISTS `status_kamar` (
  `status_id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_kamar`
--

INSERT INTO `status_kamar` (`status_id`, `keterangan`) VALUES
(1, 'Ditempati'),
(2, 'Kosong\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `confirm_password`) VALUES
(1, 'kevinharlis@gmail.com', 'vinvin', 'qw', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_penghuni`
--
ALTER TABLE `data_penghuni`
  ADD PRIMARY KEY (`data_penghuni_id`), ADD UNIQUE KEY `data_kamar_id` (`data_kamar_id`), ADD UNIQUE KEY `biaya_kost_id` (`biaya_kost_id`);

--
-- Indexes for table `detail_pesan_sarapan`
--
ALTER TABLE `detail_pesan_sarapan`
  ADD PRIMARY KEY (`id_detail`), ADD UNIQUE KEY `pesan_sarapan_id` (`pesan_sarapan_id`), ADD UNIQUE KEY `menu_sarapan_id` (`menu_sarapan_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`data_kamar_id`), ADD UNIQUE KEY `data_lantai_id` (`data_lantai_id`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`data_lantai_id`);

--
-- Indexes for table `lapor_fasilitas`
--
ALTER TABLE `lapor_fasilitas`
  ADD PRIMARY KEY (`lapor_fasilitas_id`), ADD UNIQUE KEY `fasilitas_id` (`fasilitas_id`), ADD UNIQUE KEY `penghuni_id` (`data_penghuni_id`);

--
-- Indexes for table `menu_sarapan`
--
ALTER TABLE `menu_sarapan`
  ADD PRIMARY KEY (`menu_sarapan_id`);

--
-- Indexes for table `pembayaran_sarapan`
--
ALTER TABLE `pembayaran_sarapan`
  ADD PRIMARY KEY (`bayar_sarapan_id`), ADD UNIQUE KEY `penghuni_id` (`data_penghuni_id`);

--
-- Indexes for table `pengaturan_biaya`
--
ALTER TABLE `pengaturan_biaya`
  ADD PRIMARY KEY (`biaya_kost_id`);

--
-- Indexes for table `pengeluaran_fix`
--
ALTER TABLE `pengeluaran_fix`
  ADD PRIMARY KEY (`fix_id`);

--
-- Indexes for table `pesan_sarapan`
--
ALTER TABLE `pesan_sarapan`
  ADD PRIMARY KEY (`pesan_sarapan_id`), ADD UNIQUE KEY `penghuni_id` (`data_penghuni_id`);

--
-- Indexes for table `status_kamar`
--
ALTER TABLE `status_kamar`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_penghuni`
--
ALTER TABLE `data_penghuni`
  MODIFY `data_penghuni_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_pesan_sarapan`
--
ALTER TABLE `detail_pesan_sarapan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `data_kamar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `data_lantai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lapor_fasilitas`
--
ALTER TABLE `lapor_fasilitas`
  MODIFY `lapor_fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_sarapan`
--
ALTER TABLE `menu_sarapan`
  MODIFY `menu_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran_sarapan`
--
ALTER TABLE `pembayaran_sarapan`
  MODIFY `bayar_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengaturan_biaya`
--
ALTER TABLE `pengaturan_biaya`
  MODIFY `biaya_kost_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengeluaran_fix`
--
ALTER TABLE `pengeluaran_fix`
  MODIFY `fix_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan_sarapan`
--
ALTER TABLE `pesan_sarapan`
  MODIFY `pesan_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_kamar`
--
ALTER TABLE `status_kamar`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
