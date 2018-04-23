-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2018 pada 15.01
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `kode_detail_transaksi` int(11) NOT NULL,
  `kode_peminjaman` varchar(8) NOT NULL,
  `kode_dvd` varchar(8) NOT NULL,
  `tgl_kembali_normal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dvd`
--

CREATE TABLE `dvd` (
  `kode_dvd` varchar(8) NOT NULL,
  `judul_dvd` varchar(50) NOT NULL,
  `tahun_dvd` year(4) NOT NULL,
  `stok_dvd` int(2) NOT NULL,
  `harga_dvd` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` int(3) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `gaji_jabatan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kary` varchar(8) NOT NULL,
  `nama_kary` varchar(50) NOT NULL,
  `kode_jabatan` int(3) NOT NULL,
  `alamat_kary` varchar(50) NOT NULL,
  `email_kary` varchar(30) DEFAULT NULL,
  `telp_kary` int(13) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` varchar(8) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `alamat_member` varchar(50) NOT NULL,
  `telp_member` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaaan`
--

CREATE TABLE `pekerjaaan` (
  `kode_pekerjaan` int(3) NOT NULL,
  `id_kary` varchar(8) NOT NULL,
  `waktu_mulai` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_pengembalian` int(11) NOT NULL,
  `kode_detail_transaksi` int(11) NOT NULL,
  `id_member` varchar(8) NOT NULL,
  `id_kary` varchar(8) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_peminjaman`
--

CREATE TABLE `transaksi_peminjaman` (
  `kode_peminjaman` varchar(8) NOT NULL,
  `id_member` varchar(8) NOT NULL,
  `id_kary` varchar(8) NOT NULL,
  `tgl_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`kode_detail_transaksi`),
  ADD KEY `kode_peminjaman` (`kode_peminjaman`),
  ADD KEY `kode_dvd` (`kode_dvd`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`kode_dvd`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kary`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `kode_jabatan` (`kode_jabatan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pekerjaaan`
--
ALTER TABLE `pekerjaaan`
  ADD PRIMARY KEY (`kode_pekerjaan`),
  ADD KEY `id_kary` (`id_kary`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kode_pengembalian`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_kary` (`id_kary`),
  ADD KEY `kode_detail_transaksi` (`kode_detail_transaksi`);

--
-- Indexes for table `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD PRIMARY KEY (`kode_peminjaman`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_kary` (`id_kary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `kode_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `kode_pengembalian` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`kode_peminjaman`) REFERENCES `transaksi_peminjaman` (`kode_peminjaman`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`kode_dvd`) REFERENCES `dvd` (`kode_dvd`);

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`);

--
-- Ketidakleluasaan untuk tabel `pekerjaaan`
--
ALTER TABLE `pekerjaaan`
  ADD CONSTRAINT `pekerjaaan_ibfk_1` FOREIGN KEY (`id_kary`) REFERENCES `karyawan` (`id_kary`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_kary`) REFERENCES `karyawan` (`id_kary`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`kode_detail_transaksi`) REFERENCES `detail_transaksi` (`kode_detail_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi_peminjaman`
--
ALTER TABLE `transaksi_peminjaman`
  ADD CONSTRAINT `transaksi_peminjaman_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `transaksi_peminjaman_ibfk_2` FOREIGN KEY (`id_kary`) REFERENCES `karyawan` (`id_kary`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
