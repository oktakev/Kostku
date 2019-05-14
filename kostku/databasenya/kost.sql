-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2019 pada 09.13
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penghuni`
--

CREATE TABLE `data_penghuni` (
  `data_penghuni_id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_ktp` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `data_kamar_id` int(11) NOT NULL,
  `biaya_kost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penghuni`
--

INSERT INTO `data_penghuni` (`data_penghuni_id`, `nama_lengkap`, `no_ktp`, `alamat`, `no_hp`, `status`, `data_kamar_id`, `biaya_kost_id`) VALUES
(1, 'Oktakev', 2147483647, 'RT05/03 Ds Beru Kec Jereweh Sumbawa Barat', '082134567876', 'Aktif', 4, 1),
(2, 'kololo', 2147483646, 'RT06/01 Ds Beru Kec Jereweh Sulawesi Barat', '082134567876', 'Aktif', 5, 1),
(3, 'Underbed', 2147483317, 'RT01/01 Ds Beru Kec Jereweh Jawa Barat', '081234876512', 'Aktif', 4, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan_sarapan`
--

CREATE TABLE `detail_pesan_sarapan` (
  `id_detail` int(11) NOT NULL,
  `pesan_sarapan_id` int(11) NOT NULL,
  `menu_sarapan_id` int(11) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `kamar` (
  `data_kamar_id` int(11) NOT NULL,
  `data_lantai_id` int(11) NOT NULL,
  `no_kamar` int(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`data_kamar_id`, `data_lantai_id`, `no_kamar`, `status`) VALUES
(4, 1, 1, 'Ditempati'),
(5, 1, 2, 'Ditempati'),
(6, 1, 3, 'Ditempati'),
(7, 1, 4, 'Ditempati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lantai`
--

CREATE TABLE `lantai` (
  `data_lantai_id` int(11) NOT NULL,
  `nama_lantai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lantai`
--

INSERT INTO `lantai` (`data_lantai_id`, `nama_lantai`) VALUES
(1, 'Lantai 1'),
(2, 'Lantai 2'),
(3, 'Lantai 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_fasilitas`
--

CREATE TABLE `lapor_fasilitas` (
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

CREATE TABLE `menu_sarapan` (
  `menu_sarapan_id` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_sarapan`
--

CREATE TABLE `pembayaran_sarapan` (
  `bayar_sarapan_id` int(11) NOT NULL,
  `data_penghuni_id` int(11) NOT NULL,
  `periode` int(255) NOT NULL,
  `tanggal_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_biaya`
--

CREATE TABLE `pengaturan_biaya` (
  `biaya_kost_id` int(11) NOT NULL,
  `nama_pengaturan` varchar(255) NOT NULL,
  `biaya` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `pengeluaran_fix` (
  `fix_id` int(11) NOT NULL,
  `nama_pengeluaran` varchar(255) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `pesan_sarapan` (
  `pesan_sarapan_id` int(11) NOT NULL,
  `data_penghuni_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kamar`
--

CREATE TABLE `status_kamar` (
  `status_id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `confirm_password`) VALUES
(1, 'kevinharlis@gmail.com', 'vinvin', 'qw', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `data_penghuni`
--
ALTER TABLE `data_penghuni`
  ADD PRIMARY KEY (`data_penghuni_id`),
  ADD KEY `data_kamar_id` (`data_kamar_id`),
  ADD KEY `biaya_kost_id` (`biaya_kost_id`);

--
-- Indeks untuk tabel `detail_pesan_sarapan`
--
ALTER TABLE `detail_pesan_sarapan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `pesan_sarapan_id` (`pesan_sarapan_id`),
  ADD KEY `menu_sarapan_id` (`menu_sarapan_id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`data_kamar_id`),
  ADD KEY `data_lantai_id` (`data_lantai_id`);

--
-- Indeks untuk tabel `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`data_lantai_id`);

--
-- Indeks untuk tabel `lapor_fasilitas`
--
ALTER TABLE `lapor_fasilitas`
  ADD PRIMARY KEY (`lapor_fasilitas_id`),
  ADD KEY `fasilitas_id` (`fasilitas_id`),
  ADD KEY `data_penghuni_id` (`data_penghuni_id`);

--
-- Indeks untuk tabel `menu_sarapan`
--
ALTER TABLE `menu_sarapan`
  ADD PRIMARY KEY (`menu_sarapan_id`);

--
-- Indeks untuk tabel `pembayaran_sarapan`
--
ALTER TABLE `pembayaran_sarapan`
  ADD PRIMARY KEY (`bayar_sarapan_id`),
  ADD KEY `data_penghuni_id` (`data_penghuni_id`);

--
-- Indeks untuk tabel `pengaturan_biaya`
--
ALTER TABLE `pengaturan_biaya`
  ADD PRIMARY KEY (`biaya_kost_id`);

--
-- Indeks untuk tabel `pengeluaran_fix`
--
ALTER TABLE `pengeluaran_fix`
  ADD PRIMARY KEY (`fix_id`);

--
-- Indeks untuk tabel `pesan_sarapan`
--
ALTER TABLE `pesan_sarapan`
  ADD PRIMARY KEY (`pesan_sarapan_id`),
  ADD KEY `data_penghuni_id` (`data_penghuni_id`);

--
-- Indeks untuk tabel `status_kamar`
--
ALTER TABLE `status_kamar`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_penghuni`
--
ALTER TABLE `data_penghuni`
  MODIFY `data_penghuni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pesan_sarapan`
--
ALTER TABLE `detail_pesan_sarapan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `data_kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `lantai`
--
ALTER TABLE `lantai`
  MODIFY `data_lantai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lapor_fasilitas`
--
ALTER TABLE `lapor_fasilitas`
  MODIFY `lapor_fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_sarapan`
--
ALTER TABLE `menu_sarapan`
  MODIFY `menu_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_sarapan`
--
ALTER TABLE `pembayaran_sarapan`
  MODIFY `bayar_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_biaya`
--
ALTER TABLE `pengaturan_biaya`
  MODIFY `biaya_kost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_fix`
--
ALTER TABLE `pengeluaran_fix`
  MODIFY `fix_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesan_sarapan`
--
ALTER TABLE `pesan_sarapan`
  MODIFY `pesan_sarapan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_kamar`
--
ALTER TABLE `status_kamar`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
