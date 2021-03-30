-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 02:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nomor` smallint(6) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(35) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nomor`, `nama`, `alamat`, `tgl_lahir`, `tempat_lahir`, `nomor_telp`, `created_at`, `updated_at`) VALUES
(1, 'Salsabila', 'Jl. Jeruk No 13 Malang', '2000-07-05', 'Malang', '081333444555', '2020-05-18 14:11:27', '2020-05-18 07:11:27'),
(2, 'Firmansyah', 'Jl. Mangga No 103 Malang', '2001-06-10', 'Malang', '081323664511', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(3, 'Maya Hirata', 'Jl. Srikaya No 56 Malang', '2000-09-25', 'Malang', '081993334225', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(4, 'Gita Yasa', 'Jl. Semangka No 7 Malang', '2005-01-09', 'Malang', '08188344599', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(5, 'Siska Silvia', 'Jl. Jambu No 36 Malang', '2003-10-12', 'Malang', '081322344222', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(6, 'Deffa Trianta', 'Jl. Durian No 45 Malang', '2000-07-08', 'Malang', '081355544577', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(7, 'Bimbi Bahtiar', 'Jl. Kelengkeng No 99 Malang', '2003-10-15', 'Malang', '081322346622', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(8, 'Tata Tiara', 'Jl. Salak No 84 Malang', '2000-07-25', 'Malang', '081355589007', '2020-05-18 04:31:56', '0000-00-00 00:00:00'),
(9, 'Rhevy Lis', 'Karangploso', '2000-03-04', 'Malang', '08970412620', '2020-05-20 13:26:22', '2020-05-20 06:26:22'),
(10, 'oaa', 'oaa', '2020-05-03', 'oaaa', '789008', '2020-05-21 10:03:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode` smallint(6) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `jumlah_hal` smallint(6) DEFAULT NULL,
  `pengarang` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `tahun_terbit` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `jumlah_hal`, `pengarang`, `penerbit`, `tahun_terbit`, `created_at`, `updated_at`) VALUES
(1, 'Dasar pemrograman', 150, 'Didi Riyadi', 'Polinema Pers', 2014, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(2, 'Basis data', 100, 'Mila Karmila', 'Polinema Pers', 2014, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(3, 'Rekayasa perangkat lunak', 130, 'Dana Diana', 'Polinema Pers', 2015, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(4, 'Ilmu komunikasi dan organisasi', 120, 'Rini Triani', 'Polinema Pers', 2016, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(5, 'Interaksi manusia dan komputer', 160, 'Dedi Permana', 'Polinema Pers', 2016, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(6, 'Jaringan komputer', 100, 'Tora Suwarno', 'Polinema Pers', 2017, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(7, 'Pengantar teknologi informasi', 150, 'Purnama Sari ', 'Polinema Pers', 2017, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(8, 'Kecerdasan buatan', 100, 'Sarah Dewi', 'Polinema Pers', 2017, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(9, 'Pengolahan citra digital', 100, 'Suwarno', 'Polinema Pers', 2018, '2020-05-18 13:15:23', '0000-00-00 00:00:00'),
(10, 'Sistem operasi', 120, 'Bisma Lingga', 'Polinema Pers', 2018, '2020-05-18 13:15:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `kode_pinjam` smallint(6) NOT NULL,
  `kode_buku` smallint(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`kode_pinjam`, `kode_buku`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(1, 2, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(1, 3, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(2, 4, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(2, 5, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(3, 4, '2020-05-20 05:46:42', '2020-05-20 05:46:42'),
(3, 10, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(4, 7, '2020-05-19 12:57:42', '0000-00-00 00:00:00'),
(4, 8, '2020-05-19 12:57:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode` smallint(6) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_harus_kembali` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `no_anggota` smallint(6) DEFAULT NULL,
  `id_petugas` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kode`, `tgl_pinjam`, `tgl_harus_kembali`, `tgl_kembali`, `no_anggota`, `id_petugas`, `created_at`, `updated_at`) VALUES
(1, '2019-09-23', '2019-09-26', '2019-09-26', 1, 2, '2020-05-18 04:33:29', '0000-00-00 00:00:00'),
(2, '2019-09-23', '2019-09-25', '2019-09-25', 5, 2, '2020-05-18 04:33:29', '0000-00-00 00:00:00'),
(3, '2019-09-24', '2019-09-25', '2019-09-26', 6, 3, '2020-05-18 04:33:29', '0000-00-00 00:00:00'),
(4, '2019-09-24', '2019-09-26', '2019-09-26', 4, 3, '2020-05-18 04:33:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` smallint(6) NOT NULL,
  `nomor_ktp` varchar(15) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(35) DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nomor_ktp`, `nama`, `alamat`, `nomor_telp`, `created_at`, `updated_at`) VALUES
(1, '199904021234123', 'Ali Adi', 'Jl. Mawar 30 Malang', '0812355667723', '2020-05-18 11:49:07', '2020-05-18 04:49:07'),
(2, '199807236778993', 'Soraya ', 'Jl. Raflesia 83 Malang', '0812323298999', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(3, '199808121234524', 'Mira Diana', 'Jl. Kasturi 29 Malang', '0814532232323', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(4, '198711091234155', 'Herawati', 'Jl. Tabebuya 23 Malang', '0812327776523', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(5, '199510259765865', 'Maman tria', 'Jl. Sakura 29 Malang', '0812323656546', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(6, '199808121231234', 'Siswoko', 'Jl. Sedap malam 13 Malang', '0819875345678', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(7, '199702231245657', 'Sendy lesmaana', 'Jl. Anggrek 28 Malang', '0819878976587', '2020-05-18 04:32:44', '0000-00-00 00:00:00'),
(8, '199603094671234', 'Mahendra', 'Jl. Melati 03 Malang', '0812876689887', '2020-05-18 04:32:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nana', 'nana@gmail.com', NULL, '$2y$10$fEZZ3/.fjxVX2DTURGzew.lRY/DkB20DnwHe09FGhajxBPm1PZMCG', NULL, '2020-05-17 09:37:46', '2020-05-17 09:37:46'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yXCJtAuoq/8QxlXxSbXV4eyEMmMggwc9url9axFcoZQu5Gi3nmRia', NULL, '2020-05-17 20:46:19', '2020-05-17 20:46:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`kode_pinjam`,`kode_buku`),
  ADD KEY `detail_peminjaman_fk2` (`kode_buku`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `peminjaman_fk1` (`no_anggota`),
  ADD KEY `peminjaman_fk2` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_fk1` FOREIGN KEY (`kode_pinjam`) REFERENCES `peminjaman` (`kode`),
  ADD CONSTRAINT `detail_peminjaman_fk2` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`kode`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_fk1` FOREIGN KEY (`no_anggota`) REFERENCES `anggota` (`nomor`),
  ADD CONSTRAINT `peminjaman_fk2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
