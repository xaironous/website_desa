-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 01:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_sukolilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `penulis` text NOT NULL,
  `foto_berita` text NOT NULL,
  `isi_berita` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, 'penulis', `foto_berita`, `isi_berita`, `created_at`, `updated_at`) VALUES
(1, 'YNTKTS', '2024-07-23 10:18:52', '01J3ESK79N38EJ8D5YMQM81XPS.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-07-23 03:25:20', '2024-07-23 03:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1721707630),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1721707630;', 1721707630),
('62dcdddd2131784090e8a5916c260a90678e71b3', 'i:1;', 1721716417),
('62dcdddd2131784090e8a5916c260a90678e71b3:timer', 'i:1721716417;', 1721716417),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1721734460),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1721734460;', 1721734460),
('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1721724048),
('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1721724047;', 1721724048);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kesehatan`
--

CREATE TABLE `fasilitas_kesehatan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_kesehatan`
--

INSERT INTO `fasilitas_kesehatan` (`id`, `nama`, `jumlah`) VALUES
(1, 'Posyandu', 10),
(2, 'Polindes', 1),
(3, 'Smart Health', 6),
(4, 'Bidan Desa', 1),
(5, 'Perawat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_pendidikan`
--

CREATE TABLE `fasilitas_pendidikan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_pendidikan`
--

INSERT INTO `fasilitas_pendidikan` (`id`, `nama`, `jumlah`) VALUES
(1, 'PAUD', 0),
(2, 'KB', 1),
(3, 'RA', 5),
(4, 'TK', 1),
(5, 'SD/MI', 6),
(6, 'SMP', 1),
(7, 'SMA', 1),
(8, 'Pondok Pesantren ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `foto_galeri` text NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `tanggal`, `foto_galeri`, `penjelasan`) VALUES
(1, 'LOG', '2024-07-23 10:47:30', '01J3EV7PZRR8R0DEEAW59BJ2CF.png', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `youtubeid` text NOT NULL,
  `penjelasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `jumlah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis`, `jumlah`) VALUES
(1, 'Laki-laki', '3533'),
(2, 'Perempuan', '3556');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pekerjaan`
--

CREATE TABLE `jenis_pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pekerjaan`
--

INSERT INTO `jenis_pekerjaan` (`id`, `pekerjaan`, `jumlah`) VALUES
(1, 'Petani', 1504),
(2, 'Buruh Tani', 1461),
(3, 'PNS/Pegawai Pemerintah', 89),
(4, 'Pegawai Swasta', 325),
(5, 'Wirausahawan', 2356),
(6, 'Tidak Bekerja', 1264);

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran_kematian`
--

CREATE TABLE `kelahiran_kematian` (
  `id` int(11) NOT NULL,
  `tahun` text NOT NULL,
  `kelahiran` int(11) NOT NULL,
  `kematian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelahiran_kematian`
--

INSERT INTO `kelahiran_kematian` (`id`, `tahun`, `kelahiran`, `kematian`) VALUES
(1, '2019', 88, 86),
(2, '2020', 111, 113),
(3, '2021', 103, 105),
(4, '2022', 96, 71),
(5, '2023', 94, 62),
(6, '2024', 33, 53);

-- --------------------------------------------------------

--
-- Table structure for table `lembaga_desa`
--

CREATE TABLE `lembaga_desa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `singkatan` text DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lembaga_desa`
--

INSERT INTO `lembaga_desa` (`id`, `nama`, `singkatan`, `alamat`) VALUES
(1, 'Badan Perwakilan Desa', 'BPD', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(2, 'Badan Usaha Milik Desa', 'BUMDES', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(3, 'Lembaga Pemberdayaan Masyarakat Desa', 'LPMD', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(4, 'Badan Penanggulangan Bencana Daerah', 'BPDP', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(5, 'Pemberdayaan Kesejahteraan Keluarga', 'PKK', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(6, 'Satuan Perlindungan Masyarakat', 'LINMAS', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(7, 'Rukun Warga', 'RW', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(8, 'Rukun Tetangga', 'RT', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(9, 'Pos Pelayanan Terpadu', 'POSYANDU', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(10, 'Kelompok Sadar Wisata', 'POKDARWIS', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(11, 'Kelompok Tani', 'POKTANI', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(12, 'Karang Taruna', 'KARTAR', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang'),
(13, 'Pemusalaran Jenazah', '', 'Jl. Ahmad Yani, Dusun Napel, Sukolilo, Kecamatan Wajak Kabupaten Malang');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_main_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('agengnurkhoyri@gmail.com', '$2y$12$Yd5DTB4cHpMwtkTg7Pk3EOt.1amHrHzi97h68dyhkolpqCZ428KH2', '2024-07-22 23:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_lahan`
--

CREATE TABLE `penggunaan_lahan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunaan_lahan`
--

INSERT INTO `penggunaan_lahan` (`id`, `nama`, `jumlah`) VALUES
(1, 'Pemukiman Penduduk', 118),
(2, 'Perkebunan', 236),
(3, 'Persawahan', 106);

-- --------------------------------------------------------

--
-- Table structure for table `profil_struktur`
--

CREATE TABLE `profil_struktur` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_struktur`
--

INSERT INTO `profil_struktur` (`id`, `nama`, `jabatan`, `foto_profil`) VALUES
(1, 'Joni Arifin', 'Kepala Desa', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F2.Joni%20Arifin_Kepala%20desa.webp?alt=media&token=e284a5dc-7e16-4cae-b516-5b48a9f74902'),
(2, 'Azhar Maulidi', 'Sekretaris Desa', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F14.Azhar%20Maulidi_Sekretaris%20desa.webp?alt=media&token=8836e481-e100-45fe-be1b-32973d0bd221'),
(3, 'Mila Indah Suryani', 'Kaur Keuangan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F9.Mila%20Indah%20Suryani_kaur%20keuangan.webp?alt=media&token=d54b1337-098e-43dc-a250-32b4dae9c2d6'),
(4, 'Farida Ariani', 'Kaur Tata Usaha dan Umum', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F3.Farida%20Ariani_Kaur%20tata%20usaha%20%26%20umum.webp?alt=media&token=4c9a8e38-1728-4d63-87b5-8608d0dbb42d'),
(5, 'Saeful Bahri S. M', 'Kaur Perencanaan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F4.Saeful%20Bahri_kaur%20perencanaan.webp?alt=media&token=1536dc67-f377-42a2-a3f9-f1818eac0c03'),
(6, 'Rohmatullah', 'Kasi Kesejahteraan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F10.Rohmadtullah_kasi%20kesra.webp?alt=media&token=377b00e8-d3a8-4f31-90c5-4e8dd11160b7'),
(7, 'Mochammad Rukin', 'Kasi Pelayanan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F7.Mochamad%20Rukin_kasi%20pelayanan.webp?alt=media&token=b153bce5-3079-4f98-ba8d-680bb2e584b2'),
(8, 'Risa Yunita', 'Kasi Pemerintahan', '01J3FBYCCYSZAQQ8DNV004FS32.webp'),
(9, 'Dina Nurika', 'Staff Kasi Kesejahteraan\nOperator Desa', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F5.Dina%20Nurika_operator%20desa.webp?alt=media&token=1948f3f1-5eba-4ceb-b4e2-827dc66969ef'),
(10, 'Nanda Sisdianto', 'Staff Kasi Pelayanan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F1.Nanda%20sisdianto_Staff%20desa.webp?alt=media&token=1d5dea8c-b7b5-4d51-89d7-c575acf06c1b'),
(11, 'Moh. Kholil', 'Kepala Dusun Pohkecik', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F13.Moh.Kholil%20(kepala%20dusun%20pohkecik).webp?alt=media&token=35894572-8694-48c4-b314-caf21eb5bd8f'),
(12, 'Poniri', 'Kepala Dusun Patuk Krajan', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F11.Poniri%20(kepala%20dusun%20patuk%20krajan).webp?alt=media&token=bf1792f0-87ea-4b69-81d0-e00881d9f0d8'),
(13, 'Moh. Saleh', 'Kepala Dusun Patuk Baran', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F12.M.Soleh%20(kepala%20dusun%20patuk%20baran).webp?alt=media&token=48967ea8-ad90-4fc2-ac96-c12055ad24f2'),
(14, 'Kholip', 'Kepala Dusun Napel', 'https://firebasestorage.googleapis.com/v0/b/web-sukolilo.appspot.com/o/struktur_profil_image%2F8.Kholip%20(kepala%20dusun%20napel).webp?alt=media&token=11cabe90-6754-4c2e-8d97-57549ce3138c');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gtl6YBD464v3gcFEm5uChAG3ueaRx9pRvXGpyKMd', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieGhSQ3d5V1Z5ejZqa2tYOUswZG45V1Roak1PWmtINk10bkhVdTA4WiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi91c2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiQ5TkpzaURqemIxczZUd1psdEZVVk1lWTZ1QU41bTd2Vi5pdTlRSi4xakx1TUsvNDIuYXFmRyI7fQ==', 1721725323),
('rx6KwbDuUoYrXtP0C4O7SYUbMkZFxTpcMObZs7nV', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidmtleFVva3ZRdTlIeU5uU041OFJyMEh2TGhrSGNzb0JjM2xYWGhETyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9nYWxlcmlzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJDlOSnNpRGp6YjFzNlR3Wmx0RlVWTWVZNnVBTjVtN3ZWLml1OVFKLjFqTHVNSy80Mi5hcWZHIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1721734426),
('YYZUtWQef14qd9xYZbL9UKKh2XsYisjoivoT21JF', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGlJcVdsaVBsaklRWnppaDBzREdIVklPZGpTNGx5U2o0TDhJb1dqWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTIzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4/X3Rva2VuPWhpSXFXbGlQbGpJUVp6aWgwc0RHSFZJT2RqUzRseVNqNEw4SW9XalkmZW1haWw9YWdlbmdudXJraG95cmklNDBnbWFpbC5jb20mcGFzc3dvcmQ9YWRtaW4iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkOU5Kc2lEanpiMXM2VHdabHRGVVZNZVk2dUFONW03dlYuaXU5UUouMWpMdU1LLzQyLmFxZkciO30=', 1721718088);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_pertanian`
--

CREATE TABLE `sumber_pertanian` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `luas_lahan` float NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumber_pertanian`
--

INSERT INTO `sumber_pertanian` (`id`, `jenis`, `luas_lahan`, `hasil`) VALUES
(1, 'Jagung', 16, 960000),
(2, 'Kacang Tanah', 1.5, 120000),
(3, 'Padi', 72, 4900000),
(4, 'Cabe', 10, 340000);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_peternakan`
--

CREATE TABLE `sumber_peternakan` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `jumlah_ternak` int(11) NOT NULL,
  `pemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumber_peternakan`
--

INSERT INTO `sumber_peternakan` (`id`, `jenis`, `jumlah_ternak`, `pemilik`) VALUES
(1, 'Sapi', 973, 480),
(2, 'Kambing', 708, 352),
(3, 'Ayam', 5290, 324);

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_pendidikan`
--

CREATE TABLE `tingkat_pendidikan` (
  `id` int(11) NOT NULL,
  `tingkat` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkat_pendidikan`
--

INSERT INTO `tingkat_pendidikan` (`id`, `tingkat`, `jumlah`) VALUES
(1, 'Buta Huruf', 236),
(2, 'SD', 584),
(3, 'SLTP/SMP', 713),
(4, 'SLTA/SMA', 365),
(5, 'Perguruan Tinggi ', 70);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'agengnurkhoyri@gmail.com', NULL, '$2y$12$xaneAJA3QaDDQeim9xnlT.9Ym5HwhvyVzenxsY1xew25udg6kxDjK', NULL, '2024-07-22 00:41:02', '2024-07-22 00:41:02'),
(2, 'admin2', 'admin@admin.com', NULL, '$2y$12$9NJsiDjzb1s6TwZltFUVMeY6uAN5m7vV.iu9QJ.1jLuMK/42.aqfG', NULL, '2024-07-22 23:54:08', '2024-07-22 23:54:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `fasilitas_kesehatan`
--
ALTER TABLE `fasilitas_kesehatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fasilitas_kesehatan_nama_unique` (`nama`) USING HASH;

--
-- Indexes for table `fasilitas_pendidikan`
--
ALTER TABLE `fasilitas_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fasilitas_pendidikan_nama_unique` (`nama`) USING HASH;

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_kelamin_jenis_unique` (`jenis`) USING HASH;

--
-- Indexes for table `jenis_pekerjaan`
--
ALTER TABLE `jenis_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_pekerjaan_pekerjaan_unique` (`pekerjaan`) USING HASH;

--
-- Indexes for table `kelahiran_kematian`
--
ALTER TABLE `kelahiran_kematian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelahiran_kematian_tahun_unique` (`tahun`) USING HASH;

--
-- Indexes for table `lembaga_desa`
--
ALTER TABLE `lembaga_desa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lembaga_desa_nama_unique` (`nama`) USING HASH;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penggunaan_lahan`
--
ALTER TABLE `penggunaan_lahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunaan_lahan_nama_unique` (`nama`) USING HASH;

--
-- Indexes for table `profil_struktur`
--
ALTER TABLE `profil_struktur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profil_struktur_nama_unique` (`nama`) USING HASH;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sumber_pertanian`
--
ALTER TABLE `sumber_pertanian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sumber_pertanian_jenis_unique` (`jenis`) USING HASH;

--
-- Indexes for table `sumber_peternakan`
--
ALTER TABLE `sumber_peternakan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sumber_peternakan_jenis_unique` (`jenis`) USING HASH;

--
-- Indexes for table `tingkat_pendidikan`
--
ALTER TABLE `tingkat_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tingkat_pendidikan_tingkat_unique` (`tingkat`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fasilitas_kesehatan`
--
ALTER TABLE `fasilitas_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas_pendidikan`
--
ALTER TABLE `fasilitas_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_pekerjaan`
--
ALTER TABLE `jenis_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelahiran_kematian`
--
ALTER TABLE `kelahiran_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lembaga_desa`
--
ALTER TABLE `lembaga_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penggunaan_lahan`
--
ALTER TABLE `penggunaan_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil_struktur`
--
ALTER TABLE `profil_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sumber_pertanian`
--
ALTER TABLE `sumber_pertanian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sumber_peternakan`
--
ALTER TABLE `sumber_peternakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tingkat_pendidikan`
--
ALTER TABLE `tingkat_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
