-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 03:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardtdscc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administratif Layanan', NULL, '2021-03-05 21:48:12'),
(2, 'Aplikasi', NULL, '2021-03-05 21:48:05'),
(3, 'Layanan DATIN', '2021-03-04 08:19:38', '2021-03-05 21:51:29'),
(4, 'Layanan IMES', '2021-03-05 21:56:22', '2021-03-05 21:56:22'),
(5, 'Layanan INDIHOME', '2021-03-05 21:56:30', '2021-03-05 21:56:30'),
(6, 'Layanan POTS', '2021-03-05 21:56:37', '2021-03-05 21:56:37'),
(7, 'Logbook Bandung', '2021-03-05 21:56:56', '2021-03-05 21:56:56'),
(8, 'Logbook Semarang', '2021-03-05 21:57:03', '2021-03-05 21:57:03'),
(10, 'Mukadimah', '2021-03-05 21:57:11', '2021-03-05 21:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `contents_id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`contents_id`, `name`, `text`, `file`, `category_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(18, 'Panduan MyCX', NULL, 'CYqZITeAd6SpAUxyWJAUTVJX2ae78Ig0UIv9JU1U.pdf', 10, 8, '2021-03-05 22:16:38', '2021-03-05 22:16:38'),
(19, 'Panduan I-Siska', NULL, 'q0gWHXuNZuf5EvBQRgSqUIWwvWDzUL00IQ3maN9U.pdf', 10, 8, '2021-03-05 22:17:53', '2021-03-05 22:17:53'),
(20, 'Panduan Nossa', NULL, 'WGEnr3eBm003CXuWfrs9mRIowajPNlgoLsVF0KXD.pdf', 10, 8, '2021-03-05 22:20:30', '2021-03-05 22:20:30'),
(21, 'Panduan PnP', NULL, 'HS08QCtCkUGTdwoyPVviJho8BmxwX7MQHQezMnNi.pdf', 10, 8, '2021-03-05 22:21:31', '2021-03-05 22:21:31'),
(22, 'Probis TDSCC', NULL, '5WszliQzyYP2PmjastbaxQulkGIX5TCmYYtCawFZ.pdf', 10, 8, '2021-03-05 22:22:00', '2021-03-05 22:22:00'),
(23, 'Product Knowledge TDSCC', NULL, 'h7hoC6ItdgcAdH1yO9dnL5xkJkKHt2RgBgRiuy0l.pdf', 10, 8, '2021-03-05 22:23:19', '2021-03-05 22:23:19'),
(24, 'SOP & Instruksi Kerja', 'http://10.194.58.254/c4/SOP/', '', 10, 8, '2021-03-05 22:24:07', '2021-03-05 22:24:07'),
(25, 'SLA TDSCC', NULL, '8GdCXuC2BDLeMtgxc26CKPvZNIfcCMdpQjbZtuNw.pdf', 10, 7, '2021-03-05 22:26:04', '2021-03-05 22:26:04'),
(26, 'Kriteria penilaian kinerja Agent L0', NULL, '9rVVdiA4S7s4ySxfp4fVTbWuUTqgqLoH4okrsGde.pdf', 10, 7, '2021-03-05 22:26:41', '2021-03-05 22:26:41'),
(27, 'Kriteria penilaian kinerja Agent L1', NULL, '0l85ttTVJHcWSHepoU50F1OsGYgOuTzZLY6zSWWB.pdf', 10, 7, '2021-03-05 22:27:24', '2021-03-05 22:27:24'),
(28, 'Kriteria penilaian kinerja Agent Violet', NULL, 'lgOsBWcCL6wjI2ivLmnwzUm2vV2mdLI6PnFSBBBY.pdf', 10, 7, '2021-03-05 22:28:09', '2021-03-05 22:28:09'),
(29, 'Kriteria penilaian kinerja Agent NMS', NULL, 'I1mgHbomsnYT8hs5uo9JT8pCGUzIg5yktlJIH70J.pdf', 10, 7, '2021-03-05 22:28:44', '2021-03-05 22:28:44'),
(30, 'Kriteria penilaian kinerja Agent IMES', NULL, 'LkEVkd1ehFhlOR0vwaRcmFNwDsJBDUzDXsv2VFOG.pdf', 10, 7, '2021-03-05 22:29:13', '2021-03-05 22:29:13'),
(31, 'Kriteria penilaian kinerja Agent Global', NULL, '8VROl0ATregcgFSpxbQVSP8wlkjwlwUvSzykSllw.pdf', 10, 7, '2021-03-05 22:29:51', '2021-03-05 22:29:51'),
(32, 'Kriteria penilaian kinerja Agent Info Produk', NULL, 'hZlwxCmzWxS8NxHwjSjSz4CTKq6Z47nG1osS1utF.pdf', 10, 7, '2021-03-05 22:30:30', '2021-03-05 22:30:30'),
(33, 'Kriteria penilaian kinerja Agent Email', NULL, 'W7aeL4uupJJ3xY42v1n5OdWyCIFHqqC67NAhKxhp.pdf', 10, 7, '2021-03-05 22:30:56', '2021-03-05 22:30:56'),
(34, 'Struktur Organisasi TDSCC', NULL, '5zt68HGwtQ7QtQgkt97Is6buhFKWnMUwWJb0tPzH.pdf', 10, 9, '2021-03-05 22:32:20', '2021-03-05 22:32:20'),
(35, 'Jobdesc All Unit TDSCC', 'http://10.194.58.254/c4/Jobdesk/', '', 10, 9, '2021-03-05 22:32:44', '2021-03-05 22:32:44'),
(36, 'No Contact', 'http://10.194.58.254/tudinan/nomor.php', '', 10, 6, '2021-03-05 22:33:45', '2021-03-05 22:33:45'),
(37, 'List Data AM', 'http://10.65.10.213/dbg/dbg_report2/ch/index.php?page=c4', '', 10, 6, '2021-03-05 22:34:48', '2021-03-05 22:34:48'),
(39, 'List AM DGS', 'http://10.35.50.250/Valen/index.php/Login', '', 10, 6, '2021-03-05 22:38:06', '2021-03-05 22:38:06'),
(40, 'VSAT Metra', NULL, 'HGyRktBeJGks2EhhMa2952ewC9kglA2v9SJNI5F2.pdf', 4, 22, '2021-03-05 22:40:39', '2021-03-05 22:42:06'),
(41, 'Panduan Open Tiket IMES', NULL, 'VlipVqHNjayi9nbsLCFvbLx41Kj5bjxJPwXTzkkh.pdf', 4, 22, '2021-03-05 22:43:34', '2021-03-05 22:43:34'),
(42, 'VSAT-IP', NULL, 'bgvIg0vQ1MIIq2uKLDj9dtECZcJKXzIVC2BcEIQL.pdf', 4, 22, '2021-03-05 22:43:56', '2021-03-05 22:43:56'),
(43, 'IP Transit', 'http://10.194.58.254/c4/produk/datin/IP%20TRANSIT.html', '', 3, 12, '2021-03-05 22:46:18', '2021-03-05 22:46:18'),
(44, 'IPLC', NULL, 'H4WarRz7eT1SNNNFZw66zWHFBJT0T2uSPUHNCoXJ.pdf', 3, 12, '2021-03-05 22:47:12', '2021-03-05 22:47:12'),
(45, 'IP Transit II', NULL, 'rBMAnbZllKw5ftHyAaAzYMMJAqPiyyrVPtF8Yv4n.pdf', 3, 12, '2021-03-05 22:47:38', '2021-03-05 22:47:38'),
(46, 'VPN', NULL, 'QQwrRnYrZFFFMNAnfFyQTtp0BwaGxcChOml3Q353.pdf', 3, 16, '2021-03-05 22:48:55', '2021-03-05 22:48:55'),
(47, 'VPN-IP', NULL, 'hFgV644SD5mbHDbb4RqZt2R89NdH84bjhrbuR2eh.pdf', 3, 16, '2021-03-05 22:49:58', '2021-03-05 22:49:58'),
(48, 'VPN DIAL', NULL, 'MxgQlXKVLyFSP6qYEix9vEsmeQf5ktOmLTcvky96.pdf', 3, 16, '2021-03-05 22:50:38', '2021-03-05 22:50:38'),
(49, 'Astinet', NULL, 'fuNLHcCEOK1SnSoZDalXfZeNpyarU3HnMg3vNzIY.pdf', 3, 10, '2021-03-05 22:53:02', '2021-03-05 22:53:02'),
(50, 'Configure Astinet', NULL, 'gq5VtA92rtl6hliEQvDVpcGNj6ZSOkwxICl6RzXL.pdf', 3, 10, '2021-03-05 22:53:21', '2021-03-05 22:53:21'),
(51, 'Metro - E', NULL, 'VznGROKvljMwHW3zef23rXtjzMdQ6VMKf6jgXdDa.pdf', 3, 14, '2021-03-05 22:53:58', '2021-03-05 22:53:58'),
(52, 'Dina Access', NULL, 'JGHHFUOUIl1Bup0fSebjxIkuyLFmbaB64jS1VL1y.pdf', 3, 11, '2021-03-05 22:54:38', '2021-03-05 22:54:38'),
(53, 'Router', NULL, 'K3bnoWxlR74Ly6FyuqISpt4NvJRadLLgDxYgzXaW.pdf', 3, 13, '2021-03-05 22:56:09', '2021-03-05 22:56:09'),
(54, 'DSLAM', NULL, 'YdulWSoryLJivc0uucE6Xwjg7Fp9gE0PersLjdYf.pdf', 3, 13, '2021-03-05 22:56:35', '2021-03-05 22:56:35'),
(55, 'MSAN', NULL, 'NrcZ2ThIexJ9lwLcPZZFcl4LLSntnWMJsohvxdMv.pdf', 3, 13, '2021-03-05 22:57:11', '2021-03-05 22:57:11'),
(56, 'GPON', NULL, 'EcZBYy32kiBrmzSYXFC4DT2J0h93tsZqpQh6JJL8.pdf', 3, 13, '2021-03-05 22:57:46', '2021-03-05 22:57:46'),
(57, 'Topologi', 'http://10.194.58.254/c4/produk/TOPOLOGY.html', '', 3, 13, '2021-03-05 22:58:12', '2021-03-05 22:58:12'),
(58, 'Setting Router Basic', NULL, 'DCfjI1EpQQNNsErthRpFfxDPBzcNwYEcDGfdc9C2.pdf', 3, 13, '2021-03-05 22:58:43', '2021-03-05 22:58:43'),
(59, 'IP Fundamental', NULL, 'bNdoR1IupUD0Wv9u4Jn6qmsCM2li15WS6soW1PbB.pdf', 3, 13, '2021-03-05 22:59:07', '2021-03-05 22:59:07'),
(60, 'Panduan Eskalasi Otomatis', NULL, 'KdZlVgXqRPvycHzoD3xkT4f4wFITOzDYY1NhXzaL.pdf', 3, 13, '2021-03-05 22:59:49', '2021-03-05 22:59:49'),
(61, 'Setting Router Cisco', NULL, 'Zl1MTw3k344oJCZ9BR669mNXswBNiFmEpe8tfjPr.pdf', 3, 13, '2021-03-05 23:00:37', '2021-03-05 23:00:37'),
(62, 'Perbedaan Switch & HUB', NULL, 'xAqgBoCADm3ywMhHQNISz2bnA2ziPIFoR1Cxpe21.pdf', 3, 13, '2021-03-05 23:01:29', '2021-03-05 23:01:29'),
(63, 'Gambar Perangkat Metro-E', NULL, 'cjCPhESfqoReXNsEfEVWibAsJC5anWs6Fc6ZCnPe.pdf', 3, 13, '2021-03-05 23:01:53', '2021-03-05 23:01:53'),
(64, 'Perangkat Modem', NULL, 'eAkWnAAS1Z5TPXBOk9gXrMQM7HBOkocLq212h4vH.pdf', 3, 13, '2021-03-05 23:02:34', '2021-03-05 23:02:34'),
(65, 'Nilai Subnet', NULL, '5c6W9YtdqrKczksT1fUID7EpHQXATaD1kkKJcFZk.pdf', 3, 13, '2021-03-05 23:02:56', '2021-03-05 23:02:56'),
(66, 'Basic Router', NULL, 'pJEQhiZ8Y6IwzZv5WQC7fYwRkjHVhPwKsohabYt0.pdf', 3, 13, '2021-03-05 23:03:26', '2021-03-05 23:03:26'),
(67, 'DNS', NULL, 'v0slpLmE66QRGkJqBRrzew4cr246z81vR6Xc5OK3.pdf', 3, 13, '2021-03-05 23:04:15', '2021-03-05 23:04:15'),
(68, 'Gambar Perangkat', 'http://10.194.58.254/c4/produk/gambar.html', '', 3, 13, '2021-03-05 23:05:00', '2021-03-05 23:05:00'),
(69, 'Info Set Auto Close', 'http://10.194.58.254/c4/produk/Setautoclose_tiket.html', '', 3, 13, '2021-03-05 23:05:28', '2021-03-05 23:05:28'),
(70, 'Contoh Setting Router Sederhana', NULL, 'oaWM50k5f7MGPYAAfQO5pdJkNQaJgMS5f3tt6ZmK.pdf', 3, 13, '2021-03-05 23:06:03', '2021-03-05 23:06:03'),
(71, 'Subnetting', NULL, 'LSp9X2U7exPEOTZPYIgkUBEDbjwerz28JK0cIZ8d.pdf', 3, 13, '2021-03-05 23:06:39', '2021-03-05 23:06:39'),
(72, 'Frame Relay', NULL, 'psPXNVSb9DpMzafSK26sneDd87vE7b5P9HyNIFJx.pdf', 3, 13, '2021-03-05 23:07:16', '2021-03-05 23:07:16'),
(73, 'Indikasi Modem', NULL, '5VrXGSc3grBeZGabS4lY6izdeu2RBDkMUtdy46dA.pdf', 3, 13, '2021-03-05 23:07:48', '2021-03-05 23:07:48'),
(74, 'Troubleshooting IP Transit', NULL, '9zQCZs8U8cbtIEwA8BdTtyVRzRGzxh3MuqG11uA2.pdf', 3, 13, '2021-03-05 23:08:29', '2021-03-05 23:08:29'),
(75, 'Wallboard', 'http://10.194.194.119/wallboard_dc/app/wallboard.php?lay=C4DC', '', 3, 15, '2021-03-05 23:10:36', '2021-03-05 23:10:36'),
(76, 'Pengecekan MCE-3', 'http://10.194.58.254/c4/produk/datin/mce2.html', '', 3, 15, '2021-03-05 23:10:57', '2021-03-05 23:11:55'),
(77, 'Pengecekan MCE-2', NULL, 'LMNWxRlaCdCKDTCz67Hdr3cU7UAz6zNHFoeKUf0p.pdf', 3, 15, '2021-03-05 23:11:37', '2021-03-05 23:11:37'),
(78, 'Cek Trunking Konfigurasi Layanan', 'http://10.194.58.254/c4/produk/datin/TRUNGKIN.html', '', 3, 15, '2021-03-05 23:12:34', '2021-03-05 23:12:34'),
(79, 'Cek Metro Ethernet', 'http://10.194.58.254/c4/produk/datin/metroe.php', '', 3, 13, '2021-03-05 23:12:54', '2021-03-05 23:12:54'),
(80, 'Cek Node Metro (ssh)', NULL, 'PCWHdfzs2JBUG0h9AiSFVE60hhY4eu5lfkuPKQn3.pdf', 3, 15, '2021-03-05 23:13:23', '2021-03-05 23:13:23'),
(81, 'Pengecek Tennos', 'http://10.194.58.254/c4/produk/datin/tenos%202.html', '', 3, 15, '2021-03-05 23:13:46', '2021-03-05 23:13:46'),
(82, 'Bypass Modem', NULL, 'Z8LlKux7N8si6UlvzBQf67BYRpPKwIbyqECgHJPj.pdf', 3, 15, '2021-03-05 23:14:11', '2021-03-05 23:14:11'),
(83, 'Cek Node DSLAM', NULL, 'dmaaGxdLI21I9PxeaTeIbX6JXh46XA6wmb33FWNE.pdf', 3, 15, '2021-03-05 23:14:37', '2021-03-05 23:14:37'),
(84, 'QoS Speed Paket Speedy', NULL, '3gquQAephQMOtX913RwAQFd1VXzgMquv4izQTlDs.pdf', 5, 17, '2021-03-05 23:20:05', '2021-03-05 23:20:05'),
(85, 'Indihome (3P)', NULL, 'X06ONrJqZkEVVTCogpBNcRjQ8m4JIkr2DBNfEh0w.pdf', 5, 17, '2021-03-05 23:21:12', '2021-03-05 23:21:12'),
(86, 'FAQ Indihome', NULL, '0nSopTZKn6436jbOg33Og7qNEoD2h7fWEKkTMftq.pdf', 5, 17, '2021-03-05 23:21:38', '2021-03-05 23:21:38'),
(87, 'Troubleshoot Indihome', NULL, 'JADJ3RCqxC47kk762h3o8vTgvyFjfDp4lgZTfQcy.pdf', 5, 17, '2021-03-05 23:21:58', '2021-03-05 23:21:58'),
(88, 'Pengecekan IPTV', NULL, 'SzfCEGGwvkrSY7F9PHgi2852LDWjWNMgxDPotwwe.pdf', 5, 18, '2021-03-05 23:24:48', '2021-03-05 23:24:48'),
(89, 'Error Code', NULL, 'mZzePSMvysXhktcxqLNtgEelp1IsU8avwpgJpbJZ.pdf', 5, 18, '2021-03-05 23:29:37', '2021-03-05 23:29:37'),
(90, 'Panduan troubleshoot IPTV EROR (1302 & 1305 )', NULL, 'Z8clBxXryxdtBR4Hk0GgjdZtlsIs6GpJKfVe1ZZi.pdf', 5, 18, '2021-03-05 23:30:07', '2021-03-05 23:30:07'),
(91, 'Kode error useeTV', NULL, 'D0FSvwOeBGYhPK7WZKvo0TrDMHuuajAAOMwbsHfk.xlsx', 5, 18, '2021-03-05 23:31:12', '2021-03-05 23:31:12'),
(92, 'Network Element Internet', NULL, 'fbI3J1PDQpVvH01h9a0UK4cWp5f7fsGeOYtYR1Vr.pdf', 5, 19, '2021-03-05 23:32:22', '2021-03-05 23:32:22'),
(93, 'Harga Paket SPEEDY', 'http://10.194.58.254/c4/produk/speedy/hargaspedy.html', '', 5, 19, '2021-03-05 23:32:39', '2021-03-05 23:32:39'),
(94, 'Setting Modem TBB', NULL, 'qUC3glBl76Q8FdPqWGoNxOuodSyYAMFnAYWikt3T.pdf', 5, 19, '2021-03-05 23:33:55', '2021-03-05 23:33:55'),
(95, 'Pengecekan Embassy', NULL, 'JMPSoD0ssX78TWl9WDLS9X0jkoho6GcPA2Jhso1z.pdf', 5, 20, '2021-03-05 23:34:47', '2021-03-05 23:34:47'),
(96, 'Pengecekan Minitools', NULL, 'bnAjM7dr0Qw1IwLtvit8ob1fnoWkWykZMmxuFybl.pdf', 5, 20, '2021-03-05 23:35:15', '2021-03-05 23:35:15'),
(97, 'Fault Handling Indihome', NULL, 'G3piKtMYuSOsyJZiexTmA1LC1olxRW2tp07q5ocB.pdf', 5, 20, '2021-03-05 23:38:43', '2021-03-05 23:39:30'),
(98, 'Wallboard', 'http://10.194.194.52/wallboard_c4/app/wallboard.php?lay=C4DC&slide=1', '', 5, 20, '2021-03-05 23:39:11', '2021-03-05 23:39:11'),
(99, 'Sistem Telekomunikasi', NULL, 'MNbt6QxlCT1lmXxBP1Yu3pbBaSI4AV1a99aBOy63.pdf', 6, 23, '2021-03-06 00:05:39', '2021-03-06 00:05:39'),
(100, 'Dasar POTS', NULL, '8joBgs9NVBRQnw0lOWD5WoSP26I5juNKcXZaHkIT.pdf', 6, 23, '2021-03-06 00:05:59', '2021-03-06 00:05:59'),
(101, 'Fitur', NULL, '5ZttpdboPWvudds02E5YEbRONmfM7QP3uH1sRnua.pdf', 6, 23, '2021-03-06 00:06:33', '2021-03-06 00:06:33'),
(102, 'ISDN', NULL, 'e6R42uZHUs6UY4SdBWgFYEIHD0D5MgmeB3HReKej.pdf', 6, 23, '2021-03-06 00:07:35', '2021-03-06 00:07:35'),
(103, 'Troubleshooting ISDN', NULL, 'pNRl49SDz3dy96ogZqgzfpkzxsTrausX2SAFAEeA.pdf', 6, 23, '2021-03-06 00:08:17', '2021-03-06 00:08:17'),
(104, 'Beda PABX & PBX', NULL, 'W9CJh1qDcnDraY96gveCZS6ou2Nq0vZ5JkfQUa1n.pdf', 6, 23, '2021-03-06 00:08:43', '2021-03-06 00:08:43'),
(105, 'List Isolir ISDN dan SIP TRUNK periode Juli 2020', NULL, 'xvY4dxfOfCD94FGcCvY6Rrl4iKqwWLPW9Ne2eWah.xlsx', 6, 23, '2021-03-06 00:09:48', '2021-03-06 00:09:48'),
(106, 'Plasa Telkom', NULL, 'ROZS3gVC1VRDeGZOr6xvxiLv3A0WdaF5xbPQG5uG.pdf', 6, 23, '2021-03-06 00:10:07', '2021-03-06 00:10:07'),
(107, 'Wallboard', 'http://10.194.194.52/wallboard_c4/app/wallboard.php?lay=C4DC&slide=3', '', 6, 23, '2021-03-06 00:10:33', '2021-03-06 00:10:33'),
(108, 'STO- MDF Area II', NULL, 'HrXRj34TOTOjV5mbWz8MfG4thgSGWZjkbHvnqAxo.pdf', 6, 23, '2021-03-06 00:10:57', '2021-03-06 00:10:57'),
(109, 'Logbook Email', 'https://docs.google.com/spreadsheets/d/1Uj2n-RlHC-QekzuQWg1QQWnREE5tpt9sOFNsJlThPGk/edit#gid=0', '', 7, 24, '2021-03-06 00:12:41', '2021-03-06 00:12:41'),
(110, 'Logbook Violet POTS', 'https://docs.google.com/spreadsheets/d/1Y7u_tobVtlKKHNN_nWXTCr100iAyDwgBQfZbZdYpxDY/edit#gid=2130659000', '', 6, 23, '2021-03-06 00:13:03', '2021-03-06 00:13:03'),
(111, 'Logbook Violet INET', 'https://docs.google.com/spreadsheets/d/1Kjx5JOyHQPL9qkHbZI5VWw50Xtj-v3mNYgzRhJhwlFY/edit#gid=1026846623', '', 7, 24, '2021-03-06 00:13:28', '2021-03-06 00:13:28'),
(112, 'Logbook Violet Datin', 'https://accounts.google.com/ServiceLogin?service=wise&passive=1209600&continue=https://docs.google.com/spreadsheets/d/11e-97UHVGSLQgZtZqdq_MnMVUNuRYIlkdcv3L5A4VzU/edit?pli%3D1&followup=https://docs.google.com/spreadsheets/d/11e-97UHVGSLQgZtZqdq_MnMVUNuRYIlkdcv3L5A4VzU/edit?pli%3D1&ltmpl=sheets#gid=1927365006', '', 7, 24, '2021-03-06 00:13:47', '2021-03-06 00:13:47'),
(113, 'Logbook SPBU', 'https://docs.google.com/spreadsheets/d/1xlDI3OedLS_A0FFrEwtv58bFb8DmXbPafz6wh2Dz0uk/edit#gid=0', '', 7, 24, '2021-03-06 00:14:04', '2021-03-06 00:14:04'),
(114, 'Logbook IMES', 'https://docs.google.com/spreadsheets/d/1z2EhmqVK8FTOqWoahGeNospNQopf1ERfdFKk2gYh540/edit#gid=1922590701', '', 7, 24, '2021-03-06 00:14:23', '2021-03-06 00:14:23'),
(115, 'Logbook Violet Datin', 'https://docs.google.com/spreadsheets/d/1e5SFZJOGjks2JjrvTslIawSAYz_Bb_BzDZVISMfCBJU/edit#gid=1144461151', '', 8, 25, '2021-03-06 00:14:43', '2021-03-06 00:14:43'),
(116, 'Nossa', 'https://nossa.telkom.co.id/maximo/ui/login', '', 2, 26, '2021-03-06 00:16:14', '2021-03-06 00:16:14'),
(117, 'E-Payment', 'http://i-payment.telkom.co.id/', '', 2, 26, '2021-03-06 00:20:32', '2021-03-06 00:20:32'),
(118, 'I-Siska', 'https://siskatools.telkom.co.id/', '', 2, 26, '2021-03-06 00:20:57', '2021-03-06 00:20:57'),
(119, 'Telkom', 'https://www.telkom.co.id/sites', '', 2, 26, '2021-03-06 00:21:18', '2021-03-06 00:21:18'),
(120, 'Croping Images', 'http://10.62.175.68/', '', 2, 26, '2021-03-06 00:21:36', '2021-03-06 00:21:36'),
(121, 'Embassy Jakarta', 'http://10.37.22.14/embassy/', '', 2, 26, '2021-03-06 00:21:53', '2021-03-06 00:21:53'),
(122, 'MRTG Public (Cust)', 'https://telkomcare.telkom.co.id/mrtgnetcare2', '', 2, 26, '2021-03-06 00:22:15', '2021-03-06 00:22:15'),
(123, 'MRTG', 'http://10.62.8.136/', '', 2, 26, '2021-03-06 00:22:32', '2021-03-06 00:22:32'),
(124, 'MyCX', 'https://mycx.telkom.co.id/login/', '', 2, 26, '2021-03-06 00:22:47', '2021-03-06 00:22:47'),
(125, 'Monita DATIN', 'http://10.32.221.186/c4/datin/controller/login/', '', 2, 26, '2021-03-06 00:23:12', '2021-03-06 00:23:12'),
(126, 'Monita INDIHOME', 'http://10.32.221.186/c4/indihome/controller/login/index.php', '', 2, 26, '2021-03-06 00:23:26', '2021-03-06 00:23:26'),
(127, 'I-Way', 'http://10.194.2.11:8028/iway_inbound/login', '', 2, 26, '2021-03-06 00:23:47', '2021-03-06 00:23:47'),
(128, 'Gladius', 'https://gladius.telkom.co.id/', '', 2, 26, '2021-03-06 00:24:09', '2021-03-06 00:24:09'),
(129, 'Apose', 'https://ttiket.wifi.id/apose/#/home/ap', '', 2, 26, '2021-03-06 00:24:26', '2021-03-06 00:24:26'),
(130, 'Telkom Center', 'http://telkom.center/', '', 2, 26, '2021-03-06 00:25:08', '2021-03-06 00:25:08'),
(131, 'Nossf-UIM', 'http://nossf-uim.telkom.co.id/Inventory/faces/login.jspx', '', 2, 26, '2021-03-06 00:25:45', '2021-03-06 00:25:45'),
(132, 'ACSIS', 'acs-ibooster.telkom.co.id/', '', 2, 26, '2021-03-06 00:26:25', '2021-03-06 00:26:25'),
(133, 'Form Tudin', 'http://10.194.58.254/tudinan/logout.php', '', 1, 27, '2021-03-06 00:41:09', '2021-03-06 00:41:09'),
(134, 'Form Tudin Ciwalk', 'http://10.194.58.254/cw/', '', 1, 27, '2021-03-06 00:41:23', '2021-03-06 00:41:23'),
(135, 'Form Tudin Semarang', 'http://10.194.58.254/tdsccsmg/', '', 1, 27, '2021-03-06 00:41:42', '2021-03-06 00:41:42'),
(136, 'Form Tudin TL Bandung', 'http://10.194.58.254/tl/', '', 1, 27, '2021-03-06 00:41:54', '2021-03-06 00:41:54'),
(137, 'Form Tudin TL Semarang', 'http://10.194.58.254/tl_smg/', '', 1, 27, '2021-03-06 00:42:08', '2021-03-06 00:42:08'),
(138, 'Open Tiket WIFI ID', NULL, 'G5JLkh6iOkFKDwZCOsxSFbDJd1GVLCDIEtDKyv8P.pdf', 5, 21, '2021-03-06 02:23:00', '2021-03-06 02:23:00'),
(139, 'Paparan PIJAR', NULL, 'HEzQgDBsi951b4RxgezM2Ziy3JRF3hMtq16TTnZK.pdf', 4, 22, '2021-03-14 19:03:09', '2021-03-14 19:03:09'),
(140, 'Sosialisasi PIJAR', NULL, '3qgmhd1JY2RgyIopKUNtkZERnxQ6QC27IZkDm9nJ.pdf', 4, 22, '2021-03-14 19:03:31', '2021-03-14 19:03:31'),
(141, 'Enterprise Dashboard', 'http://des.telkom.co.id/dashboard/index.php/login', '', 2, 26, '2021-03-15 03:16:47', '2021-03-15 03:16:47'),
(142, 'TIBS', 'http://tos.telkom.co.id/', '', 2, 26, '2021-03-15 03:17:09', '2021-03-15 03:17:09'),
(143, 'IDEAS', 'http://10.60.175.132/ideas_new/', '', 2, 26, '2021-03-15 03:17:40', '2021-03-15 03:17:40');

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
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `url`, `file`) VALUES
(4, 'http://localhost:8000/storage/file/4j7OmUGxuAoCPc0qZYqfPLObX9psSHkLvM1xuVH2.xlsx', '4j7OmUGxuAoCPc0qZYqfPLObX9psSHkLvM1xuVH2.xlsx');

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
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2020_10_30_102234_create_settings_table', 1),
(33, '2021_02_07_091911_create_news_table', 1),
(34, '2021_02_07_092431_create_contents_table', 1),
(35, '2021_02_07_093012_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `name`, `file`, `text`, `created_at`, `updated_at`) VALUES
(5, 'GRAND LAUNCHING TDSCC SITE SEMARANG', 'A35qrjHZ0FYYu6gAe7VuO6Pur14eyU0YMNxrZDUM.jpg', '<p>Semarang, 21 Januari 2021</p>', '2021-03-05 20:54:13', '2021-03-05 21:05:41'),
(6, 'New Dashboard!!', 'L44PfLd4SCxz52MXYB8LLi48XdzEReSKHJERQzIe.png', '<p>Halo rekan-rekan yang berbahagia, dengan hormat kami mohon untuk kesediaannya mengisi form untuk saran development web dashboard baru kita</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Link :</strong></p>\r\n<p><a href=\"http://bit.ly/dashboardTDSCC\">http://bit.ly/dashboardTDSCC</a></p>\r\n<p>&nbsp;</p>\r\n<p>Salam hangat,</p>\r\n<p>Admin</p>', '2021-03-07 21:42:08', '2021-03-07 21:42:08');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) NOT NULL,
  `categories_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categories_id`, `name`, `created_at`, `updated_at`) VALUES
(6, 10, 'Data Kontak', '2021-03-06 05:04:03', '2021-03-05 22:04:03'),
(7, 10, 'KPI Agent', '2021-03-05 22:02:48', '2021-03-05 22:02:48'),
(8, 10, 'Panduan Layanan', '2021-03-06 05:04:50', '2021-03-05 22:04:50'),
(9, 10, 'Struktur Layanan', '2021-03-06 05:04:59', '2021-03-05 22:04:59'),
(10, 3, 'Astinet', '2021-03-05 22:11:56', '2021-03-05 22:11:56'),
(11, 3, 'DINA Access', '2021-03-05 22:12:08', '2021-03-05 22:12:08'),
(12, 3, 'IP Transit', '2021-03-05 22:12:31', '2021-03-05 22:12:31'),
(13, 3, 'Materi', '2021-03-05 22:12:37', '2021-03-05 22:12:37'),
(14, 3, 'Metro Ethernet', '2021-03-05 22:12:47', '2021-03-05 22:12:47'),
(15, 3, 'Pengecekan Layanan', '2021-03-05 22:12:56', '2021-03-05 22:12:56'),
(16, 3, 'VPN IP', '2021-03-05 22:13:04', '2021-03-05 22:13:04'),
(17, 5, 'Indihome', '2021-03-05 22:13:13', '2021-03-05 22:13:13'),
(18, 5, 'IPTV', '2021-03-05 22:13:21', '2021-03-05 22:13:21'),
(19, 5, 'Materi', '2021-03-05 22:13:27', '2021-03-05 22:13:27'),
(20, 5, 'Pengecekan Layanan', '2021-03-05 22:13:37', '2021-03-05 22:13:37'),
(21, 5, 'WIFI ID', '2021-03-05 22:13:45', '2021-03-05 22:13:45'),
(22, 4, 'Produk IMES', '2021-03-05 22:41:46', '2021-03-05 22:41:46'),
(23, 6, 'POTS', '2021-03-05 23:46:46', '2021-03-05 23:46:46'),
(24, 7, 'Logbook', '2021-03-06 00:12:07', '2021-03-06 00:12:07'),
(25, 8, 'Logbook', '2021-03-06 00:12:16', '2021-03-06 00:12:16'),
(26, 2, 'Link Aplikasi', '2021-03-06 00:15:55', '2021-03-06 00:15:55'),
(27, 1, 'Form Tukar Dinas', '2021-03-06 00:40:53', '2021-03-06 00:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PT1MzhCQyteQFMXJp27bZ.81hO2Td1SxqeiusE0k.dngFJlQqwqn.', NULL, '2021-02-18 05:28:19', '2021-02-18 05:28:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`contents_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `contents_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
