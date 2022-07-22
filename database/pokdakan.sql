-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 09:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokdakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `user_id`, `kategori`, `judul_berita`, `slug`, `deskripsi`, `gambar_berita`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Waspada Penyakit Ikan Nila! Cegah Dari Sekarang!', 'waspada-penyakit-ikan-nila-cegah-dari-sekarang', '<h2><strong>Cara Mencegah Penyakit Ikan Nila Sejak Awal</strong></h2>\r\n\r\n<p>Mencegah penyakit datang lebih baik daripada mengobati. Jika penyakit ikan nila sudah menyerang, tentunya kerugian yang ditimbulkan akan lebih besar. Pencegahan ini dapat dilakukan sejak tahap awal pemilihan benih.&nbsp;</p>\r\n\r\n<p>Adapun hal-hal yang dapat dilakukan untuk mencegah hama dan penyakit ikan nila adalah:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Pastikan Bapak/Ibu memilih benih ikan nila yang terbebas dari penyakit dan virus. Dapatkan benih ikan nila dari sumber yang terpercaya.</li>\r\n	<li>Terapkan sistem biosekuriti atau karantina pada benih yang dipilih. Lingkungan baru&nbsp; akan membuat ikan stress. Pada kondisi ini, ikan nila rentan terserang penyakit. Dengan melakukan karantina, pemulihan akan jauh lebih cepat dan terhindar dari penyakit.</li>\r\n	<li>Menjaga suhu tetap berada di kisaran optimal yaitu 25-30oC dengan pH air 7-8. Suhu dan pH yang stabil membuat ikan tidak mudah stres dan tidak mudah terserang penyakit karena menurunnya daya tahan tubuh.</li>\r\n	<li>Menjaga padat tebar pada kolam. Untuk benih ikan nila berukuran 10-20 gram per ekor, sebaiknya hanya diisi 15-30 ekor benih ikan per m2.</li>\r\n	<li>Perhatikan kualitas air pada kolam. Jaga sirkulasi air agar kualitas air tetap terjaga&nbsp; dan kondisi ikan nila selalu sehat.</li>\r\n	<li>Jangan asal melakukan pemberian pakan! Berikan pakan dengan jenis dan takaran yang tepat. Terlalu banyak memberikan pakan akan mengakibatkan pakan mengendap dan mencemari kualitas air pada kolam.</li>\r\n</ul>', 'berita/z5dLQc5fVlfbG1AvYrMzyRtDcH2GdZFr2NRKXsec.jpg', '2022-07-03 01:07:02', '2022-07-10 19:54:53'),
(2, 1, 1, 'Waspada Penyakit Ikan Nila! Cegah Dari Sekarang!', 'waspada-penyakit-ikan-nila-cegah-dari-sekarang', '<p>qqqqqqqqqqqq</p>', 'berita/ctdvYHNGCz9bvPxMjJY8n7dclLmpwrhOSmMcD8ZU.jpg', '2022-07-10 19:56:09', '2022-07-10 19:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `budidayas`
--

CREATE TABLE `budidayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_budidaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budidayas`
--

INSERT INTO `budidayas` (`id`, `kategori_budidaya`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Ikan Lele', 'ikan-lele', '2022-06-28 04:10:08', '2022-06-28 04:10:08'),
(2, 'Ikan Gurame', 'ikan-gurame', '2022-06-28 04:10:18', '2022-06-28 04:10:18'),
(3, 'Ikan Bawal', 'ikan-bawal', '2022-06-28 04:10:28', '2022-06-28 04:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengepul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `pengepul`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Makan', 'rumah-makan', '2022-06-28 20:51:02', '2022-06-28 20:51:02'),
(2, 'Pedagang Pasar', 'pedagang-pasar', '2022-06-28 20:51:41', '2022-06-28 20:51:41'),
(3, 'Pedagang Pecel', 'pedagang-pecel', '2022-06-28 20:51:53', '2022-06-28 20:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tambak_id` int(11) NOT NULL,
  `tgl_bibit` date NOT NULL,
  `tgl_pakan` date NOT NULL,
  `jumlah_bibit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia_tambak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id`, `user_id`, `tambak_id`, `tgl_bibit`, `tgl_pakan`, `jumlah_bibit`, `jumlah_pakan`, `jenis_pakan`, `usia_tambak`, `aksi`, `created_at`, `updated_at`) VALUES
(1, 0, 1, '2022-07-30', '2022-07-15', '20', '20', 'Ikan Lele', '1 Tahun', 'panen', '2022-07-11 17:56:21', '2022-07-11 22:00:43'),
(2, 0, 1, '2022-07-12', '2022-07-15', '55', '78', 'Ikan Lele', '1', 'panen', '2022-07-11 21:35:54', '2022-07-12 00:52:35'),
(3, 0, 1, '2022-07-27', '2022-07-22', '20', '20', 'Pelet Tabur', '1 Tahun', 'pembesaran_ikan', '2022-07-11 21:56:29', '2022-07-11 21:56:34'),
(4, 0, 1, '2022-07-30', '2022-07-23', '20', '23', 'Ikan Lele', '1 Tahun', 'pembesaran_ikan', '2022-07-12 00:52:10', '2022-07-12 00:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_pembudidayas`
--

CREATE TABLE `kebutuhan_pembudidayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `budidaya_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_kebutuhan` date NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebutuhan_pembudidayas`
--

INSERT INTO `kebutuhan_pembudidayas` (`id`, `supplier_id`, `budidaya_id`, `user_id`, `tgl_kebutuhan`, `nama`, `jenis`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2022-07-21', 'Pakan Ikan Bawal', 'Pakan Tabur', '29', '2022-07-11 02:38:08', '2022-07-11 03:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_pengepuls`
--

CREATE TABLE `kebutuhan_pengepuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distributor_id` int(11) NOT NULL,
  `budidaya_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_kebutuhan` date NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kebutuhan_pengepuls`
--

INSERT INTO `kebutuhan_pengepuls` (`id`, `distributor_id`, `budidaya_id`, `user_id`, `tgl_kebutuhan`, `nama`, `jenis`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2022-07-30', 'Rumah Makan Rumah Mertua', 'Ikan Gurame Besar', '60 Kg', '2022-07-11 03:14:48', '2022-07-11 03:25:02');

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
(14, '2022_06_10_073128_create_kategori_table', 1),
(39, '2022_06_12_041944_create_acaraaas_table', 3),
(81, '2022_04_28_022956_create_posts_table', 4),
(84, '2022_06_14_051516_create_produks_table', 4),
(85, '2022_06_14_051924_create_acaras_table', 4),
(86, '2022_06_16_132349_create_admins_table', 4),
(87, '2022_06_16_144737_create_produks_table', 5),
(88, '2022_06_19_124952_create_produks_table', 6),
(89, '2022_06_19_130753_create_produks_table', 7),
(90, '2022_06_20_044005_create_produks_table', 8),
(91, '2022_06_20_080631_create_produks_table', 9),
(93, '2022_06_20_132445_create_events_table', 11),
(94, '2022_06_20_135030_create_acaras_table', 12),
(95, '2022_06_20_135442_create_acaras_table', 13),
(96, '2022_06_20_142253_create_events_table', 14),
(97, '2022_06_21_121043_create_tugas_table', 15),
(98, '2022_06_21_123914_create_tugas_table', 16),
(104, '2014_10_12_000000_create_users_table', 17),
(105, '2014_10_12_100000_create_password_resets_table', 17),
(106, '2019_08_19_000000_create_failed_jobs_table', 17),
(107, '2019_12_14_000001_create_personal_access_tokens_table', 17),
(108, '2022_04_28_022948_create_permission_tables', 17),
(109, '2022_06_11_014539_create_kategoris_table', 17),
(110, '2022_06_11_095145_create_jenis_table', 17),
(111, '2022_06_20_110424_create_produks_table', 17),
(112, '2022_06_21_125121_create_countdown_timers_table', 17),
(113, '2022_06_22_024716_create_acaras_table', 17),
(114, '2022_06_23_030636_create_pegawais_table', 17),
(115, '2022_06_24_111141_create_blogs_table', 17),
(116, '2022_06_24_145756_create_trends_table', 17),
(117, '2022_06_28_103455_create_suppliers_table', 18),
(118, '2022_06_28_110220_create_budidayas_table', 19),
(119, '2022_06_28_111204_create_distributors_table', 20),
(120, '2022_07_03_070807_create_beritas_table', 21),
(121, '2022_07_03_074600_create_edukasis_table', 22),
(122, '2022_07_03_074941_create_beritas_table', 22),
(123, '2022_07_03_130227_create_kolams_table', 23),
(124, '2022_07_03_140640_create_produks_table', 24),
(125, '2022_07_05_155615_create_kebutuhan_pengepuls_table', 25),
(126, '2022_07_07_034747_create_kebutuhan_pembudidayas_table', 26),
(127, '2022_07_11_025940_create_tambaks_table', 27),
(128, '2022_07_11_033410_create_jadwals_table', 28),
(129, '2022_07_11_090545_create_kebutuhan_pembudidayas_table', 28),
(130, '2022_07_11_100226_create_kebutuhan_pengepuls_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 9),
(1, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 10),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(2, 'user-create', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(3, 'user-edit', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(4, 'user-delete', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(5, 'role-list', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(6, 'role-create', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(7, 'role-edit', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(8, 'role-delete', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(9, 'permission-list', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(10, 'permission-create', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(11, 'permission-edit', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(12, 'permission-delete', 'web', '2022-06-27 05:30:38', '2022-06-27 05:30:38'),
(25, 'supplier-list', 'web', '2022-06-28 03:47:33', '2022-06-28 03:47:33'),
(26, 'supplier-create', 'web', '2022-06-28 03:48:25', '2022-06-28 03:48:25'),
(27, 'supplier-edit', 'web', '2022-06-28 03:48:39', '2022-06-28 03:48:39'),
(28, 'supplier-delete', 'web', '2022-06-28 03:48:53', '2022-06-28 03:48:53'),
(29, 'budidaya-list', 'web', '2022-06-28 04:08:28', '2022-06-28 04:08:28'),
(30, 'budidaya-create', 'web', '2022-06-28 04:08:38', '2022-06-28 04:08:38'),
(31, 'budidaya-edit', 'web', '2022-06-28 04:08:47', '2022-06-28 04:08:47'),
(32, 'budidaya-delete', 'web', '2022-06-28 04:08:57', '2022-06-28 04:08:57'),
(33, 'distributor-list', 'web', '2022-06-28 04:18:05', '2022-06-28 04:18:05'),
(34, 'distributor-create', 'web', '2022-06-28 04:18:15', '2022-06-28 04:18:15'),
(35, 'distributor-edit', 'web', '2022-06-28 04:18:24', '2022-06-28 04:18:24'),
(36, 'distributor-delete', 'web', '2022-06-28 04:18:33', '2022-06-28 04:18:33'),
(37, 'berita-list', 'web', '2022-07-03 00:39:41', '2022-07-03 00:39:41'),
(38, 'berita-create', 'web', '2022-07-03 00:39:54', '2022-07-03 00:39:54'),
(39, 'berita-edit', 'web', '2022-07-03 00:40:07', '2022-07-03 00:40:07'),
(40, 'berita-delete', 'web', '2022-07-03 00:40:18', '2022-07-03 00:40:18'),
(41, 'edukasi-list', 'web', '2022-07-03 00:56:19', '2022-07-03 00:56:19'),
(42, 'edukasi-create', 'web', '2022-07-03 00:56:31', '2022-07-03 00:56:31'),
(43, 'edukasi-edit', 'web', '2022-07-03 00:56:44', '2022-07-03 00:56:44'),
(44, 'edukasi-delete', 'web', '2022-07-03 00:56:54', '2022-07-03 00:56:54'),
(45, 'tambak-list', 'web', '2022-07-03 06:39:12', '2022-07-10 20:14:32'),
(46, 'tambak-create', 'web', '2022-07-03 06:39:29', '2022-07-10 20:14:11'),
(47, 'tambak-edit', 'web', '2022-07-03 06:39:40', '2022-07-10 20:13:47'),
(48, 'tambak-delete', 'web', '2022-07-03 06:39:50', '2022-07-10 20:13:21'),
(49, 'produk-list', 'web', '2022-07-04 04:33:19', '2022-07-04 04:33:19'),
(50, 'data-panen-list', 'web', '2022-07-04 04:34:54', '2022-07-04 04:34:54'),
(51, 'kebutuhan-pembudidaya-list', 'web', '2022-07-04 04:37:46', '2022-07-04 04:37:46'),
(52, 'proses-pembudidaya-list', 'web', '2022-07-04 11:26:16', '2022-07-04 11:26:16'),
(53, 'kebutuhan-pengepul-list', 'web', '2022-07-04 11:30:45', '2022-07-04 11:30:45'),
(54, 'produk-create', 'web', '2022-07-05 01:28:02', '2022-07-05 01:28:13'),
(55, 'produk-edit', 'web', '2022-07-05 01:28:27', '2022-07-05 01:28:27'),
(56, 'produk-delete', 'web', '2022-07-05 01:28:40', '2022-07-05 01:28:40'),
(57, 'kebutuhan-pengepul-create', 'web', '2022-07-05 09:19:37', '2022-07-05 09:19:37'),
(58, 'kebutuhan-pengepul-edit', 'web', '2022-07-05 09:19:58', '2022-07-05 09:19:58'),
(59, 'kebutuhan-pengepul-delete', 'web', '2022-07-05 09:20:10', '2022-07-05 09:20:10'),
(60, 'kebutuhan-pembudidaya-create', 'web', '2022-07-06 21:03:55', '2022-07-06 21:03:55'),
(61, 'kebutuhan-pembudidaya-edit', 'web', '2022-07-06 21:04:10', '2022-07-06 21:04:10'),
(62, 'kebutuhan-pembudidaya-delete', 'web', '2022-07-06 21:04:33', '2022-07-06 21:04:33'),
(63, 'pembudidaya-list', 'web', '2022-07-11 09:01:49', '2022-07-11 09:02:46'),
(64, 'jadwal-create', 'web', '2022-07-11 17:32:40', '2022-07-11 17:32:40'),
(65, 'produk-tersedia', 'web', '2022-07-12 04:35:55', '2022-07-12 04:55:09'),
(66, 'produk', 'web', '2022-07-12 04:58:46', '2022-07-12 04:58:46'),
(67, 'produk-supplier', 'web', '2022-07-12 05:00:39', '2022-07-12 05:15:08'),
(68, 'produk-show', 'web', '2022-07-12 05:15:59', '2022-07-12 05:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_produk_supplier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `supplier_id`, `user_id`, `nama_produk`, `slug`, `jenis_pakan`, `merk`, `kondisi`, `berat`, `harga`, `stok`, `deskripsi`, `gambar_produk_supplier`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Pakan Ikan Lele', 'pakan-ikan-lele', 'Pellet-Apung (Starter-Grower)', 'Pakan Mandiri BBPBAP Jepara (LNB)', 'Baru', '250 Grm', '125000', '200', '<p>nett weight: 250gram nrd 200-300 adalah pakan khusus yang diformulasikan untuk memaksimalkan pertumbuhan burayak/larva ikan.</p>', '5603a70097d7307521bb4b46e3a7f769.jpg', NULL, '2022-07-11 02:02:22'),
(2, 1, 1, 'Pakan Ikan Lele', 'pakan-ikan-lele', 'Pelet Tabur', 'Pakan Mandiri BBPBAP Jepara (LNB)', 'Baru', '250', '200000', '200', '<p>qkk</p>', 'produk/ld9qmQ3oz6xjKQ92yzm3f4sWYFHRGk5KxRseXuJW.jpg', '2022-07-05 02:07:13', '2022-07-11 02:03:27'),
(3, 1, 3, 'Pakan Benih Bibit Ikan Lele Protein Tinggi umur 4 hari 200-300 mikron', 'pakan-benih-bibit-ikan-lele-protein-tinggi-umur-4-hari-200-300-mikron', 'Ikan Lele', 'Pakan Mandiri BBPBAP Jepara (LNB)', 'Baru', '250', '200000', '200', '<p>wwwwwwww</p>', 'produk/3VBt3OyDGSH8NAr0d5nzGVItjjZ67dZ95o43QMzS.png', '2022-07-12 04:28:28', '2022-07-12 04:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'web', '2022-06-27 05:30:40', '2022-07-03 00:40:43'),
(2, 'Pembudidaya', 'web', '2022-07-04 04:36:28', '2022-07-04 04:36:28'),
(3, 'Supplier', 'web', '2022-07-04 04:38:08', '2022-07-04 04:38:08'),
(4, 'Pengepul', 'web', '2022-07-04 04:38:26', '2022-07-04 04:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(49, 3),
(50, 1),
(50, 2),
(50, 4),
(51, 1),
(51, 2),
(51, 3),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(53, 4),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 4),
(58, 1),
(58, 4),
(59, 1),
(59, 4),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(68, 1),
(68, 2);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bahan_baku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `bahan_baku`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bibit', 'bibit', '2022-06-28 03:50:58', '2022-06-28 03:51:16'),
(2, 'Pakan', 'pakan', '2022-06-28 03:51:07', '2022-06-28 03:51:07'),
(3, 'Obat / Nutrisi', 'obat-nutrisi', '2022-06-28 03:51:27', '2022-06-28 03:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `tambaks`
--

CREATE TABLE `tambaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `kode_tambak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tambak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_tambak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedalaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas_ikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_tambak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tambaks`
--

INSERT INTO `tambaks` (`id`, `user_id`, `kode_tambak`, `nama_tambak`, `luas_tambak`, `kedalaman`, `kapasitas_ikan`, `gambar_tambak`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'KT001', 'Tambak Burhan', '3000/m', '4m', '3000', 'tambak/aBT9D5wxIau3i1QcXz1O7kTtZS4s7ugmK0H6VofE.jpg', 1, '2022-07-10 20:24:00', '2022-07-10 20:31:39');

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `telepon`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$oG7arv2MvX/1RRDYKgbnae7XmKaZXWW2VbArKZHrqkIlC6m0xeXUi', 'Indramayu', '082314567782', 'avatar.jpg', NULL, '2022-06-27 05:30:44', '2022-06-27 05:30:44'),
(2, 'Sri Dyah Wulandari', 'sridyhwd@gmail.com', NULL, '$2y$10$gjHDzUYX8G.IjNaWQvpCLOQdOCRKBtVtXVuFYExcd0LxhNs708ij6', NULL, NULL, '219969.png', NULL, '2022-07-04 04:38:58', '2022-07-04 04:38:58'),
(3, 'Supplier', 'supplier@gmail.com', NULL, '$2y$10$5FbHBdCxiseiWdXckemTh.HajJzEKvuCl/JFL.8yHYI2.b8DFfoYG', NULL, NULL, '219969.png', NULL, '2022-07-04 04:41:29', '2022-07-04 04:41:29'),
(4, 'Pengepul', 'pengepul@gmail.com', NULL, '$2y$10$pK7Tg3U7uKTctwnstjXkp./UgCV37AjFgtwS8JMd0waFpdK.zuVs2', NULL, NULL, '219969.png', NULL, '2022-07-04 04:42:08', '2022-07-04 04:42:08'),
(5, 'Sri Dyah Wulandari', 'user@gmail.com', NULL, '$2y$10$8/vbk.ID4Yg4T6shQUaAF.I4nRbHIPidXV7yqj5oAzr2PEoavfZoe', 'Indramayu', '0876544311', 'avatar.jpg', NULL, '2022-07-04 19:07:07', '2022-07-04 19:07:07'),
(6, 'Masniah', 'jiteshmeniya99@gmail.com', NULL, '$2y$10$2.Qol6.CipwDk5bb24vCHOy6EU2fTJeH3O7FRIl83gTDmHQ4dMhAa', 'Indramayu', '0987654321', 'avatar.jpg', NULL, '2022-07-04 19:12:20', '2022-07-04 19:12:20'),
(7, 'Supplier', 'zzzzz@gmail.com', NULL, '$2y$10$hSNzeNcGyMDHKZ9PiVUfFOoBPmrAk/SOgZxhHucXt2Lbz0Dg9OtEy', 'Indramayu', '0987654321', 'wk.drawio (14).png', NULL, '2022-07-04 19:14:29', '2022-07-04 19:19:22'),
(8, 'Wulan', 'wulan@gmail.com', NULL, '$2y$10$5UkjB26.I4NeBr2hsNsy6eZ.LFEGgFUCuxOGcTXOM2JNUFdy8j45.', NULL, NULL, 'wk.drawio (14).png', NULL, '2022-07-04 19:27:07', '2022-07-04 19:27:07'),
(9, 'Masniah99', 'admin99@gmail.com', NULL, '$2y$10$2cb5ga8lmEa9frLJxJf.aehjWv18rtXTEg1zvBpNN/MVGYETxiPwW', NULL, NULL, 'Masniah99-1657603504.jpg', NULL, '2022-07-11 22:25:05', '2022-07-11 22:25:05'),
(10, 'Supplierrrr', 'suppliiier@gmail.com', NULL, '$2y$10$UMPK92E/SX1pGWRuWsIK..xYYIhlzMXjXJ9c2RFHI0PU6yYk5MiBi', NULL, NULL, 'Supplierrrr-1657603634.jpg', NULL, '2022-07-11 22:27:14', '2022-07-11 22:27:14'),
(11, 'Masniah99', 'admin11@gmail.com', NULL, '$2y$10$UPIIyRCNIxZXEPEeGxcu5.OhcjnWju1N8zXSMXygLxTi4Lwft3Day', NULL, NULL, 'Masniah99-1657603855.png', NULL, '2022-07-11 22:30:56', '2022-07-11 22:30:56'),
(12, 'User', 'jiteshmeniya9@gmail.com', NULL, '$2y$10$XXNTacoRA7hYUVR0Owx3fO9Ryq3qMrGBfTcXccvnCwcLZWccgPfve', NULL, NULL, 'C:\\xampp\\tmp\\phpDD9E.tmp', NULL, '2022-07-11 22:34:30', '2022-07-11 22:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budidayas`
--
ALTER TABLE `budidayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebutuhan_pembudidayas`
--
ALTER TABLE `kebutuhan_pembudidayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebutuhan_pengepuls`
--
ALTER TABLE `kebutuhan_pengepuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambaks`
--
ALTER TABLE `tambaks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `budidayas`
--
ALTER TABLE `budidayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kebutuhan_pembudidayas`
--
ALTER TABLE `kebutuhan_pembudidayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebutuhan_pengepuls`
--
ALTER TABLE `kebutuhan_pengepuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tambaks`
--
ALTER TABLE `tambaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
