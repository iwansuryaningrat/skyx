-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 17.44
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `artikel` longtext DEFAULT NULL,
  `creted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `preview`, `artikel`, `creted_at`, `updated_at`) VALUES
(1, 'Asia-based Venture Capital', 'SKYX is a growing venture capital aiming to provide opportunities for investors who want to invest in the crypto world.', '', '2021-11-26 15:21:55', '2021-11-26 15:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', '6b4e96015000bb84c398ab78f5befd64', '2021-12-01 04:50:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-01 04:49:28', 0),
(2, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-01 04:50:18', 1),
(3, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-01 08:10:49', 1),
(4, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-06 12:57:41', 1),
(5, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-06 20:31:07', 1),
(6, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-06 23:27:42', 1),
(7, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-06 23:27:56', 1),
(8, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-07 00:35:05', 1),
(9, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-08 07:34:38', 1),
(10, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-08 10:38:52', 1),
(11, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-08 22:20:26', 1),
(12, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-12 22:34:30', 1),
(13, '::1', 'iwan.suryaningrat28@gmail.com', 1, '2021-12-13 22:24:15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `selector`, `hashedValidator`, `user_id`, `expires`) VALUES
(2, '3eeff3120a19392fb1954d3f', '79a2bb0673ddcb9f94991dc1dbe8869721db6eba9a4bc1bfe6eee6dd7f74d284', 1, '2021-12-19 22:34:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datausers`
--

CREATE TABLE `datausers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `chain` varchar(255) NOT NULL,
  `pitchdeck` varchar(255) NOT NULL,
  `whitepaper` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datausers`
--

INSERT INTO `datausers` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `tujuan`, `project`, `chain`, `pitchdeck`, `whitepaper`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Iwan', 'Suryaningrat', 'wanss', 'iwan.suryaningrat28@gmail.com', '088802851811', 'entah', 'ini project', 'ini chain', '1.pdf', '2.pdf', 'Replied', '2021-11-24 17:54:37', '2021-12-13 23:11:33'),
(2, 'Iwan', 'Suryaningrat', 'wanss', 'iwansuryaningrat@students.undip.ac.id', '088802851811', '', '', '', '', '', 'Replied', '2021-11-29 12:39:49', '2021-12-13 23:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Skyx Token', '<p class=\"txt__desc\">SKX is SKYX\'s collateral token. By having SKX, you will get a guaranteed private sale allocation of various quality projects.</p>', '2021-12-12 16:23:03', '2021-12-12 16:23:03'),
(2, 'Benefits For SKX Holders', '<ol class=\"txt__desc\">\r\n<li>Guaranteed ICO allocation with private sale price, bottom price</li>\r\n<li>Layered screening to get the best project</li>\r\n<li>SKX price fixed 1$, stable price and redeemable to BUSD</li>\r\n</ol> <p></p>', '2021-12-12 16:23:03', '2021-12-13 01:38:39'),
(3, 'Pool Weight', '<p class=\"txt__desc\">\r\n							<b>1 SKX = 1 BUSD</b>\r\n						<ul class=\"txt__desc\">\r\n							<li>Tier 1: 2500 SKX min weight allocation 1</li>\r\n							<li>Tier 2 : 5000 SKX min weight allocation 2.5</li>\r\n							<li>Tier 3: 10,000 SKX min weight allocation 6</li>\r\n							<li>Tier 4: 25,000 SKX min weight allocation 18 - (limited for 4 holders)</li>\r\n						</ul>\r\n						<p class=\"txt__desc\"><span>*</span>SKX tokens redeemable after 3 months<br><span>*</span>SKX tokens are not for sale, and can only be redeemed from investors\' initial wallets\r\n						</p>\r\n						</p>', '2021-12-12 16:25:35', '2021-12-12 16:25:35'),
(4, 'Stage', '<p class=\"txt__desc\">\r\n						<ol class=\"txt__desc\">\r\n							<li>Exchange BUSD for SKX tokens at a fixed price 1 SKX = 1 BUSD</li>\r\n							<li>SKX holders will get the privilege of starting prices for new projects, even private sales prices (cheaper than public sales)</li>\r\n							<li>SKX holders can buy the maximum allocation they get according to their weight</li>\r\n							<li>The private sale will be distributed on time according to the project timeline</li>\r\n							<li>Tokens are sent directly to the SKX holder\'s wallet</li>\r\n						</ol>\r\n						</p>', '2021-12-12 16:25:35', '2021-12-12 16:25:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1638200267, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partnership`
--

CREATE TABLE `partnership` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partnership`
--

INSERT INTO `partnership` (`id`, `nama`, `link`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Kommunitas', '', 'kommunitas-logo.png', '2021-12-08 03:01:02', '2021-12-08 03:01:02'),
(2, 'SnapEx', '', 'snapex-logo.png', '2021-12-08 03:02:28', '2021-12-08 03:02:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama`, `link`, `logo`, `created_at`, `updated_at`) VALUES
(3, 'WingSwap', 'https://wingswap.io/', '1638255005_605a0746c6b5bf4cc445.png', '2021-11-30 13:50:05', '2021-11-30 13:50:05'),
(4, 'Solchicks', 'https://www.solchicks.io/', '1638255047_0b8566b6401f79f3b5b0.png', '2021-11-30 13:50:47', '2021-11-30 13:50:47'),
(5, 'Universe Island', 'https://universeisland.games/', '1638255085_2f9d55631c39b46492ff.png', '2021-11-30 13:51:25', '2021-11-30 13:51:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `price` double NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `bon` int(11) NOT NULL DEFAULT 0,
  `total_bon` int(11) NOT NULL,
  `total_raised` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `nama`, `deskripsi`, `foto`, `start_date`, `end_date`, `created_at`, `updated_at`, `price`, `satuan`, `bon`, `total_bon`, `total_raised`) VALUES
(1, 'Sugar Bound', 'SugarBounce is a game-changing ecosystem, ready to present a consummate universe for all NSFW entertainment needs.', 'null', '2021-11-27', '2021-11-30', '2021-11-27 13:54:48', '2021-11-27 13:54:48', 0.55, 'BUSD', 0, 20000, 0),
(5, 'Solchicks', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, fugiat. Qui, voluptatum.', '1638015063_f694c7d2a3263a58edfb.jpeg', '2021-11-23', '2021-11-30', '2021-11-27 19:11:03', '2021-11-27 19:11:03', 0.05, 'BUSD', 0, 20000, 0),
(6, 'Metaverse', 'Metaverse is a game-changing ecosystem. Optio omnis atque eveniet magni at voluptatum', '1638015135_72af967adfff235c929e.jpg', '2021-11-23', '2021-11-30', '2021-11-27 19:12:15', '2021-11-27 19:12:15', 0.55, 'BUSD', 0, 20000, 0),
(7, 'Monster Clan', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio omnis atque eveniet magni at voluptatum.', '1638015190_9a8f432156c4c2856210.png', '2021-11-23', '2021-11-30', '2021-11-27 19:13:10', '2021-11-27 19:13:10', 0.55, 'BUSD', 0, 20000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `nama`, `jabatan`, `deskripsi`, `foto`, `ig`, `linkedin`, `created_at`, `updated_at`) VALUES
(7, 'Sigit Tanoko', 'CEO', NULL, '1638250275_b84aae153a1f229dd61b.png', '', '', '2021-11-29 11:07:06', '2021-11-30 12:31:15'),
(8, 'Jefri Tan', 'COO', NULL, '1638250009_48725f11f1dd0f956237.png', '', '', '2021-11-29 05:07:06', '2021-11-30 12:26:49'),
(9, 'Abie Rezanto', 'CRO', NULL, '1638249380_002f370140da03d9dbb2.png', '', '', '2021-11-29 05:11:01', '2021-11-30 12:16:20'),
(10, 'Putri Sinta', 'Head of Finance', NULL, '1638250198_a896c5133431f965845a.png', '', '', '2021-11-29 05:11:01', '2021-12-08 22:23:21'),
(11, 'Daniel Wijaya', 'Head of Sales', NULL, '1638249700_741461414319f00ba42a.png', '', '', '2021-11-29 05:11:01', '2021-11-30 12:21:40'),
(12, 'Wellson', 'Investment Analyst', NULL, '1638250379_d5cf3dae6af03be9b409.png', '', '', '2021-11-29 05:11:01', '2021-11-30 12:32:59'),
(13, 'Vanessa', 'Head of Branding', NULL, '1638250354_e32686a647b90eb1128f.png', '', '', '2021-11-29 05:14:10', '2021-11-30 12:32:34'),
(14, 'Joshua Stephen', 'Head of Engineering', NULL, '1638250418_87b3a7f754d1a9c7ae70.png', '', '', '2021-11-29 05:14:10', '2021-11-30 12:33:38'),
(15, 'Elizabeth Lioe', 'Head of Public Relations', NULL, '1638249915_9f34ab27c91f9909e519.png', '', '', '2021-11-29 05:14:10', '2021-11-30 12:25:15'),
(16, 'Mickey Marudut', 'Creative Director', NULL, '1638250234_0b9f5509d0d93e7f4069.png', '', '', '2021-11-29 05:14:10', '2021-11-30 12:30:34'),
(17, 'Sonny Yu', 'Head of Marketing', NULL, '1638250318_fa431b73584b6b8182b2.png', '', '', '2021-11-29 05:14:10', '2021-11-30 12:31:58'),
(18, 'Yustheja', 'Techniacl Architect', NULL, 'default.jpg', '', '', '2021-11-29 05:14:10', '2021-11-29 05:14:10'),
(19, 'Benny', 'Product Manager', NULL, 'default.jpg', '', '', '2021-11-29 05:14:10', '2021-11-29 05:14:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiers`
--

CREATE TABLE `tiers` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `pool` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiers`
--

INSERT INTO `tiers` (`id`, `level`, `pool`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 2500, '2021-12-12 16:50:03', '2021-12-12 16:50:03'),
(2, 2, '2.5', 5000, '2021-12-12 16:50:03', '2021-12-12 16:50:03'),
(3, 3, '6', 10000, '2021-12-12 16:51:22', '2021-12-12 16:51:22'),
(5, 4, '18', 25000, '2021-12-13 00:39:40', '2021-12-13 00:50:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'iwan.suryaningrat28@gmail.com', 'wanss', '$2y$10$EkhbGxn9mWQ4EwwsZODBSeUraxMWHy2VBa9V9rDg7Df7mxvU46E9W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-01 04:47:20', '2021-12-01 04:50:08', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(11, '182.2.75.9', '2021-11-29', 1, '2021-11-29 15:36:22', '2021-11-29 15:36:22'),
(12, '115.178.249.26', '2021-11-29', 10, '2021-11-29 22:53:14', '2021-11-29 22:53:14'),
(13, '139.195.183.61', '2021-11-29', 2, '2021-11-29 22:08:44', '2021-11-29 22:08:44'),
(14, '103.213.128.168', '2021-11-29', 2, '2021-11-29 21:41:45', '2021-11-29 21:41:45'),
(15, '111.94.15.252', '2021-11-29', 7, '2021-11-29 23:41:18', '2021-11-29 23:41:18'),
(16, '140.213.169.54', '2021-11-29', 1, '2021-11-29 16:30:25', '2021-11-29 16:30:25'),
(17, '140.213.177.48', '2021-11-29', 1, '2021-11-29 16:32:43', '2021-11-29 16:32:43'),
(18, '103.119.62.14', '2021-11-29', 1, '2021-11-29 17:23:55', '2021-11-29 17:23:55'),
(19, '36.85.219.158', '2021-11-29', 1, '2021-11-29 17:49:44', '2021-11-29 17:49:44'),
(20, '51.79.159.229', '2021-11-29', 2, '2021-11-29 17:56:57', '2021-11-29 17:56:57'),
(21, '192.99.18.122', '2021-11-29', 1, '2021-11-29 18:33:22', '2021-11-29 18:33:22'),
(22, '42.83.147.34', '2021-11-29', 1, '2021-11-29 18:33:29', '2021-11-29 18:33:29'),
(23, '114.125.113.43', '2021-11-29', 1, '2021-11-29 22:42:51', '2021-11-29 22:42:51'),
(24, '114.125.95.96', '2021-11-29', 2, '2021-11-29 22:43:11', '2021-11-29 22:43:11'),
(25, '195.146.37.241', '2021-11-29', 1, '2021-11-29 22:58:30', '2021-11-29 22:58:30'),
(26, '130.245.169.39', '2021-11-29', 3, '2021-11-29 22:59:51', '2021-11-29 22:59:51'),
(27, '179.43.169.181', '2021-11-29', 1, '2021-11-29 23:00:52', '2021-11-29 23:00:52'),
(28, '114.125.94.112', '2021-11-29', 1, '2021-11-29 23:52:58', '2021-11-29 23:52:58'),
(29, '89.104.101.231', '2021-11-30', 1, '2021-11-30 00:15:32', '2021-11-30 00:15:32'),
(30, '176.113.42.240', '2021-11-30', 1, '2021-11-30 00:36:38', '2021-11-30 00:36:38'),
(31, '89.104.111.45', '2021-11-30', 1, '2021-11-30 01:26:59', '2021-11-30 01:26:59'),
(32, '140.213.7.169', '2021-11-30', 3, '2021-11-30 03:33:10', '2021-11-30 03:33:10'),
(33, '140.213.9.158', '2021-11-30', 1, '2021-11-30 03:58:06', '2021-11-30 03:58:06'),
(34, '182.1.64.227', '2021-11-30', 1, '2021-11-30 06:02:45', '2021-11-30 06:02:45'),
(35, '34.221.121.44', '2021-11-30', 1, '2021-11-30 07:14:28', '2021-11-30 07:14:28'),
(36, '34.210.118.161', '2021-11-30', 1, '2021-11-30 07:14:50', '2021-11-30 07:14:50'),
(37, '115.178.249.31', '2021-11-30', 10, '2021-11-30 12:53:52', '2021-11-30 12:53:52'),
(38, '182.2.75.165', '2021-11-30', 1, '2021-11-30 11:00:22', '2021-11-30 11:00:22'),
(39, '89.104.101.29', '2021-11-30', 1, '2021-11-30 12:20:18', '2021-11-30 12:20:18'),
(40, '::1', '2021-12-01', 16, '2021-12-01 08:50:55', '2021-12-01 08:50:55'),
(41, '::1', '2021-12-03', 1, '2021-12-03 16:30:32', '2021-12-03 16:30:32'),
(42, '::1', '2021-12-06', 5, '2021-12-06 23:31:58', '2021-12-06 23:31:58'),
(43, '::1', '2021-12-07', 4, '2021-12-07 00:34:47', '2021-12-07 00:34:47'),
(44, '::1', '2021-12-08', 3, '2021-12-08 10:36:26', '2021-12-08 10:36:26'),
(45, '::1', '2021-12-12', 1, '2021-12-12 22:06:06', '2021-12-12 22:06:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `datausers`
--
ALTER TABLE `datausers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datausers`
--
ALTER TABLE `datausers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
