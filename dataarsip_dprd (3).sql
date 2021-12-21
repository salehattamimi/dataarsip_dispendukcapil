-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataarsip_dprd`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_item_arsip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_arsip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_masalah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tanggal_upload` date NOT NULL,
  `tahun_arsip` int(11) NOT NULL,
  `bulan_arsip` int(11) NOT NULL,
  `nomor_sementara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_berkas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_rak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_bku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_unit` int(11) NOT NULL,
  `satuan_jumlah_id` int(11) NOT NULL,
  `arsip_kondisi_id` int(11) NOT NULL,
  `index_id` int(11) NOT NULL,
  `arsip_kategori_id` int(11) NOT NULL,
  `arsip_lokasi_id` int(11) NOT NULL,
  `arsip_pemilik_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `kode_klasifikasi`, `nomor_item_arsip`, `nama_arsip`, `uraian_masalah`, `keterangan`, `tanggal_upload`, `tahun_arsip`, `bulan_arsip`, `nomor_sementara`, `nomor_berkas`, `nomor_box`, `nomor_rak`, `nomor_bku`, `jumlah_unit`, `satuan_jumlah_id`, `arsip_kondisi_id`, `index_id`, `arsip_kategori_id`, `arsip_lokasi_id`, `arsip_pemilik_id`, `created_at`, `updated_at`) VALUES
(1, '019.1', '', 'arsip dprd', 'oalah', 'keterangan', '2019-11-04', 2019, 7, '10', '2', '3', '4', '5', 1, 1, 1, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arsip_inaktif`
--

CREATE TABLE `arsip_inaktif` (
  `id` int(11) NOT NULL,
  `kode_klasifikasi` varchar(255) DEFAULT NULL,
  `tahun_aktif` int(11) DEFAULT NULL,
  `tahun_inaktif` int(11) DEFAULT NULL,
  `jangka_simpan` varchar(255) DEFAULT NULL,
  `tingkat_perkembangan` varchar(255) DEFAULT NULL,
  `nasib_akhir` varchar(255) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `keterangan` text,
  `nomor_sementara` varchar(255) DEFAULT NULL,
  `nomor_berkas` varchar(255) DEFAULT NULL,
  `nomor_box` varchar(255) DEFAULT NULL,
  `nomor_rak` varchar(255) DEFAULT NULL,
  `nomor_bku` varchar(255) DEFAULT NULL,
  `satuan_jumlah` varchar(200) DEFAULT NULL,
  `divisi` varchar(200) DEFAULT NULL,
  `nama_arsip` varchar(255) DEFAULT NULL,
  `uraian_masalah` text,
  `tahun_arsip` int(11) DEFAULT NULL,
  `bulan_arsip` int(11) DEFAULT NULL,
  `satuan_jumlah_id` int(11) DEFAULT NULL,
  `arsip_kondisi_id` int(11) DEFAULT NULL,
  `arsip_pemilik_id` int(11) DEFAULT NULL,
  `arsip_kategori_id` int(11) DEFAULT NULL,
  `index_id` int(11) DEFAULT NULL,
  `arsip_lokasi_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indeks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arsip_inaktif`
--

INSERT INTO `arsip_inaktif` (`id`, `kode_klasifikasi`, `tahun_aktif`, `tahun_inaktif`, `jangka_simpan`, `tingkat_perkembangan`, `nasib_akhir`, `jumlah_unit`, `keterangan`, `nomor_sementara`, `nomor_berkas`, `nomor_box`, `nomor_rak`, `nomor_bku`, `satuan_jumlah`, `divisi`, `nama_arsip`, `uraian_masalah`, `tahun_arsip`, `bulan_arsip`, `satuan_jumlah_id`, `arsip_kondisi_id`, `arsip_pemilik_id`, `arsip_kategori_id`, `index_id`, `arsip_lokasi_id`, `created_at`, `updated_at`, `indeks`) VALUES
(1, '1', NULL, NULL, NULL, NULL, NULL, 2, 'Baik', NULL, '3', '4', '5', '6', NULL, '9', NULL, 'Uraian Masalah 1', 10, 7, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 04:36:17', '2019-11-25 04:36:17', ''),
(2, '2', NULL, NULL, NULL, NULL, NULL, 4, 'Buruk', NULL, '5', '7', '19', '20', NULL, '2', NULL, 'Uraian Masalah 2', 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 04:36:17', '2019-11-25 04:36:17', ''),
(3, '4', NULL, NULL, NULL, NULL, NULL, 12, 'Baik', NULL, '3', '4', '5', '6', NULL, 'SPJ', NULL, 'Uraian Masalah 3', 2018, 7, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 08:13:17', '2019-11-25 08:13:17', ''),
(4, '5', NULL, NULL, NULL, NULL, NULL, 3, 'Buruk', NULL, '5', '7', '19', '20', NULL, 'Instansi', NULL, 'Uraian Masalah 4', 2019, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 08:13:17', '2019-11-25 08:13:17', ''),
(5, '6', 2000, 2008, '2', '4', 'OK', 2, 'Baik Buruk', '41', '2', '4', '5', '1', '%', NULL, 'Arsip asd', 'Uraian Masalah 6', 2018, 2, NULL, 1, 1, 1, 1, 1, '2019-11-25 19:11:47', '2019-11-25 19:12:07', ''),
(6, '5', NULL, NULL, NULL, NULL, NULL, 1, 'Baik', NULL, '4', '2', '5', '1', NULL, 'SPJ', NULL, 'Uraian Masalah 9', 2018, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 19:55:38', '2019-11-25 19:55:38', ''),
(7, '6', NULL, NULL, NULL, NULL, NULL, 2, 'Buruk', NULL, '5', '3', '19', '1', NULL, 'Instansi', NULL, 'Uraian Masalah 10', 2019, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 19:55:38', '2019-11-25 19:55:38', ''),
(8, '5', NULL, NULL, NULL, NULL, NULL, 1, 'Baik', NULL, '4', '2', '5', '1', NULL, 'SPJ', NULL, ' Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19Uriaan 19', 2018, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 22:48:24', '2019-11-25 22:48:24', ''),
(9, '6', NULL, NULL, NULL, NULL, NULL, 2, 'Buruk', NULL, '5', '3', '19', '1', NULL, 'Instansi', NULL, 'Uraian Masalah 10', 2019, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-25 22:48:24', '2019-11-25 22:48:24', ''),
(10, '123124', 421, 12, '1', 'tingkat', 'Nasib', 1, 'Asli Baik', '4', '4', '5', '2', '1', '%', 'Saleh Abdullah Attamimis', 'saleh', '12', 124, 2, NULL, 0, 1, 1, 2, 4, '2019-11-27 07:38:38', '2019-11-27 07:46:22', 'Instansi'),
(11, '5', NULL, NULL, NULL, NULL, NULL, 1, 'Baik', NULL, '4', '2', '5', '1', NULL, 'SPJ', NULL, 'Kegiatan Fasilitas Kunjungan Kerja & Kepanitiaan Terkait Perjalanan Dinas Badan Kehormatan DPRD Kabupaten Sidoarjo Melakukan Kunjungan Kerja Terkait Pelaksanaan Tugas dan Fungsi Badan Kehormatan Dalam Memantau dan Mengevaluasi Disipl di DPRD Kota Depok dan DPRD Propinsi DKI Jakarta Pada 1 Oktober 2017 s/d 3 Oktober 2017 Jumlah Rp. 47.513.650', 2018, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 07:53:03', '2019-11-27 07:53:03', 'indeks1'),
(12, '6', NULL, NULL, NULL, NULL, NULL, 2, 'Buruk', NULL, '5', '3', '19', '1', NULL, 'Instansi', NULL, 'Uraian Masalah 10', 2019, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 07:53:03', '2019-11-27 07:53:03', 'indeks2'),
(13, '5', NULL, NULL, NULL, '2', NULL, 1, 'Baik', NULL, '4', '2', '5', '1', NULL, 'SPJ', NULL, 'Kegiatan Fasilitas Kunjungan Kerja & Kepanitiaan Terkait Perjalanan Dinas Badan Kehormatan DPRD Kabupaten Sidoarjo Melakukan Kunjungan Kerja Terkait Pelaksanaan Tugas dan Fungsi Badan Kehormatan Dalam Memantau dan Mengevaluasi Disipl di DPRD Kota Depok dan DPRD Propinsi DKI Jakarta Pada 1 Oktober 2017 s/d 3 Oktober 2017 Jumlah Rp. 47.513.650', 2018, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 07:56:19', '2019-11-27 07:56:19', 'indeks1'),
(14, '6', NULL, NULL, NULL, '3', NULL, 2, 'Buruk', NULL, '5', '3', '19', '1', NULL, 'Instansi', NULL, 'Uraian Masalah 10', 2019, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 07:56:19', '2019-11-27 07:56:19', 'indeks2'),
(15, '120', 2, 4, '5', '6', '123', 3, '123', '20', '10s', '2s', '2', '1', '%', 'Saleh Abdullah Attamimis', '41', '1', 4, 3, NULL, 0, 1, 0, 1, 4, '2019-11-27 08:02:21', '2019-11-27 08:03:00', 'SPJ'),
(16, '123', 21, 3, '3', '3', '12', 2, '123', '41', '4', '4', '4', '4', 'pcs', 'sad', '41', '1', 4, 1, NULL, 1, 2, 1, 1, 1, '2019-11-27 08:22:48', '2019-11-27 08:39:39', 'SPJ');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_kategori`
--

CREATE TABLE `arsip_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arsip_kategori`
--

INSERT INTO `arsip_kategori` (`id`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Arsip Rahasia', 'Rahasia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arsip_kondisi`
--

CREATE TABLE `arsip_kondisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip_kondisi`
--

INSERT INTO `arsip_kondisi` (`id`, `nama_kondisi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Baik', '<p>Baik Baik Saja</p>', '2019-11-17 23:02:40', '2019-11-17 23:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_lokasi`
--

CREATE TABLE `arsip_lokasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip_lokasi`
--

INSERT INTO `arsip_lokasi` (`id`, `nama_lokasi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Surabaya', '<p>Surabaya Utara</p>', '2019-11-17 22:31:13', '2019-11-17 22:32:14'),
(3, 'Malang', '<p>Kabupaten Malang</p>', '2019-11-18 04:03:12', '2019-11-18 04:03:12'),
(4, 'R1 B3', '<p>Rak 1 Berkas 3</p>', '2019-11-20 23:57:21', '2019-11-20 23:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_pemilik`
--

CREATE TABLE `arsip_pemilik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilayah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik_jenis_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip_pemilik`
--

INSERT INTO `arsip_pemilik` (`id`, `nama_pemilik`, `email`, `no_telp`, `alamat`, `jabatan`, `golongan`, `wilayah`, `pekerjaan`, `pemilik_jenis_id`, `created_at`, `updated_at`) VALUES
(1, 'Saleh Abdullah Attamimis', 'saleh.attamimi96@gmail.coms', '0878534331701', 'Ampel Lonceng No 50s', 'cccs', '2s', '1s', 'Tekniss', 1, '2019-11-16 05:31:42', '2019-11-16 06:13:30'),
(2, 'sad', 'Deabela@gmail.com', '0878534331701', 'Ampel Lonceng No 50', 'COO', '2', '2', '2', 2, '2019-11-22 22:16:29', '2019-11-22 22:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `indeks`
--

CREATE TABLE `indeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_indeks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indeks`
--

INSERT INTO `indeks` (`id`, `nama_indeks`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'SPJ', 'SPJ adalah indeks untuk penyimpanan data arsip yang sederahana', NULL, NULL),
(2, 'Instansi', 'Nama nama instansi', '2019-11-17 21:39:32', '2019-11-17 21:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pemilik`
--

CREATE TABLE `jenis_pemilik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pemilik`
--

INSERT INTO `jenis_pemilik` (`id`, `nama_jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Konseling I', '<p>Konseling Dibidang arsip manajemen bisnis</p>', NULL, '2019-11-17 22:07:35'),
(2, 'Konseling II', 'Konseling dibidang pengelolaan alih media\r\n', NULL, NULL),
(3, 'Instansi', 'Nama Instansi', '2019-11-17 21:58:27', '2019-11-17 21:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip_inactive_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `nama_file`, `path`, `keterangan`, `arsip_inactive_id`, `created_at`, `updated_at`) VALUES
(1, 'Berkas Arsip A', 'data_arsip_inactive/art_1_Alur Class Diagram.pdf', 'keterangan', 1, '2019-11-21 11:44:51', '2019-11-21 11:44:51'),
(2, 'Arsip Indoraj', 'data_arsip_inactive/art_1_unnamed.jpg', 'OKE', 1, '2019-11-25 19:03:36', '2019-11-25 19:03:36'),
(3, 'indoraj', 'data_arsip_inactive/art_1_2019_11_26_09_44_39.pdf', 'Tanggalan', 1, '2019-11-25 19:46:32', '2019-11-25 19:46:32'),
(4, 'Data Arsip', 'data_arsip_inactive/art_7_2019_11_26_09_44_39.pdf', 'Kalender', 7, '2019-11-25 19:57:05', '2019-11-25 19:57:05'),
(5, 'Data Arsip B', 'data_arsip_inactive/art_7_unnamed.jpg', 'Kalender B', 7, '2019-11-25 19:57:29', '2019-11-25 19:57:29'),
(6, 'Berkas Arsip C', 'data_arsip_inactive/art_1_Perancangan Sistem.pdf', 'Arsip C', 1, '2019-11-25 20:48:18', '2019-11-25 20:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_11_14_043440_create_arsip_table', 1),
(2, '2019_11_14_044223_create_arsip_kondisi_table', 2),
(3, '2019_11_14_044411_create_arsip_lokasi_table', 3),
(4, '2019_11_14_044543_create_arsip_pemilik_table', 4),
(5, '2019_11_14_044658_create_indeks_table', 5),
(6, '2019_11_14_045451_create_jenis_pemilik_table', 6),
(7, '2019_11_14_045740_create_media_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `satuan_jumlah`
--

CREATE TABLE `satuan_jumlah` (
  `id` int(11) NOT NULL,
  `nama_satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_jumlah`
--

INSERT INTO `satuan_jumlah` (`id`, `nama_satuan`) VALUES
(1, 'pcs'),
(2, 'box');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'saleh.attamimi96@gmail.com', NULL, '$2y$10$4LYDEZMPHdVDKs.2RnWkHOLUVdGSKBOzWzW7oG2bWiljhw/3rXWSq', 1, NULL, '2019-11-12 22:39:22', '2019-11-25 07:40:18'),
(2, 'Super Admin', 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$5P0/ziT0wI8C6fDfMyM0Pu.P53tKjT/BrNeJK8d7XLDqiQ5O7DZHW', 2, NULL, '2019-11-12 22:40:52', '2019-11-25 00:35:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_inaktif`
--
ALTER TABLE `arsip_inaktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_kategori`
--
ALTER TABLE `arsip_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_kondisi`
--
ALTER TABLE `arsip_kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_lokasi`
--
ALTER TABLE `arsip_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsip_pemilik`
--
ALTER TABLE `arsip_pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pemilik`
--
ALTER TABLE `jenis_pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan_jumlah`
--
ALTER TABLE `satuan_jumlah`
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
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arsip_inaktif`
--
ALTER TABLE `arsip_inaktif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `arsip_kategori`
--
ALTER TABLE `arsip_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arsip_kondisi`
--
ALTER TABLE `arsip_kondisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arsip_lokasi`
--
ALTER TABLE `arsip_lokasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `arsip_pemilik`
--
ALTER TABLE `arsip_pemilik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_pemilik`
--
ALTER TABLE `jenis_pemilik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `satuan_jumlah`
--
ALTER TABLE `satuan_jumlah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
