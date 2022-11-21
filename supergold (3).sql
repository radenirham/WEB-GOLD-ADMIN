-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 09.56
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supergold`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '$2a$12$dyqpqGqXTGTzWIJaqVqlYetJwHdZVfbUxljxZ8YFuk6gmQxJQuQZa', 'admin', '2022-11-17 09:02:39', '2022-11-17 09:02:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `CO_ID` varchar(50) NOT NULL,
  `CO_CREATED` datetime DEFAULT NULL,
  `CO_STATUS` varchar(15) DEFAULT NULL,
  `CO_TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `co_detail`
--

CREATE TABLE `co_detail` (
  `JEWEL_ID` varchar(50) NOT NULL,
  `CO_ID` varchar(50) NOT NULL,
  `COD_PRICE` int(11) DEFAULT NULL,
  `COD_QTY` int(11) DEFAULT NULL,
  `COD_SUBTOTAL` int(11) DEFAULT NULL,
  `COD_STATUS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golds`
--

CREATE TABLE `golds` (
  `GOLD_ID` varchar(50) NOT NULL,
  `GOLD_WEIGHT` float DEFAULT NULL,
  `GOLD_CREATED` datetime DEFAULT NULL,
  `GOLD_SERIAL` varchar(25) DEFAULT NULL,
  `GOLD_CREATE_BY` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `produced_by` varchar(150) NOT NULL,
  `manufactured_by` varchar(150) NOT NULL,
  `fineness` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golds`
--

INSERT INTO `golds` (`GOLD_ID`, `GOLD_WEIGHT`, `GOLD_CREATED`, `GOLD_SERIAL`, `GOLD_CREATE_BY`, `created_at`, `updated_at`, `produced_by`, `manufactured_by`, `fineness`) VALUES
('GLD-63773602dbe73', 30, '2022-11-18 07:36:34', '1668756994', 'admin', '2022-11-18 07:36:34', '2022-11-18 07:36:34', '', '', 0),
('GLD-63773602e41e5', 30, '2022-11-18 07:36:34', '1668756994', 'admin', '2022-11-18 07:36:34', '2022-11-18 07:36:34', '', '', 0),
('GLD-63773602e6dec', 30, '2022-11-18 07:36:34', '1668756994', 'admin', '2022-11-18 07:36:34', '2022-11-18 07:36:34', '', '', 0),
('GLD-63773603011d2', 30, '2022-11-18 07:36:35', '1668756994', 'admin', '2022-11-18 07:36:35', '2022-11-18 07:36:35', '', '', 0),
('GLD-6377397f6ded2', 30, '2022-11-18 07:51:27', '1668757887', 'admin', '2022-11-18 07:51:27', '2022-11-18 07:51:27', '', '', 0),
('GLD-63773980207e3', 30, '2022-11-18 07:51:28', '1668757887', 'admin', '2022-11-18 07:51:28', '2022-11-18 07:51:28', '', '', 0),
('GLD-637739fc600f4', 40, '2022-11-18 07:53:32', '1668758012', 'admin', '2022-11-18 07:53:32', '2022-11-18 07:53:32', '', '', 0),
('GLD-637741e5d5b2e', 10, '2022-11-18 08:27:17', '1668760037', 'admin', '2022-11-18 08:27:17', '2022-11-18 08:27:17', '', '', 0),
('GLD-637741e6ac38b', 10, '2022-11-18 08:27:18', '1668760037', 'admin', '2022-11-18 08:27:18', '2022-11-18 08:27:18', '', '', 0),
('GLD-6377440f9da98', 40, '2022-11-18 08:36:31', '1668760591', 'admin', '2022-11-18 08:36:31', '2022-11-18 08:36:31', '', '', 0),
('GLD-63774471a9459', 40, '2022-11-18 08:38:09', '1668760689', 'admin', '2022-11-18 08:38:09', '2022-11-18 08:38:09', '', '', 0),
('GLD-63774471e95db', 40, '2022-11-18 08:38:09', '1668760689', 'admin', '2022-11-18 08:38:09', '2022-11-18 08:38:09', '', '', 0),
('GLD-637744e4b13af', 40, '2022-11-18 08:40:04', '1668760804', 'admin', '2022-11-18 08:40:04', '2022-11-18 08:40:04', '', '', 0),
('GLD-637744e4c9884', 40, '2022-11-18 08:40:04', '1668760804', 'admin', '2022-11-18 08:40:04', '2022-11-18 08:40:04', '', '', 0),
('GLD-637744e4da3fe', 40, '2022-11-18 08:40:04', '1668760804', 'admin', '2022-11-18 08:40:04', '2022-11-18 08:40:04', '', '', 0),
('GLD-6377458049f9a', 40, '2022-11-18 08:42:40', '1668760960', 'admin', '2022-11-18 08:42:40', '2022-11-18 08:42:40', '', '', 0),
('GLD-6377458092b48', 40, '2022-11-18 08:42:40', '1668760960', 'admin', '2022-11-18 08:42:40', '2022-11-18 08:42:40', '', '', 0),
('GLD-63774580c672d', 40, '2022-11-18 08:42:40', '1668760960', 'admin', '2022-11-18 08:42:40', '2022-11-18 08:42:40', '', '', 0),
('GLD-637746cea7120', 50, '2022-11-18 08:48:14', '1668761294', 'admin', '2022-11-18 08:48:14', '2022-11-18 08:48:14', '', '', 0),
('GLD-637746cee28d1', 50, '2022-11-18 08:48:14', '1668761294', 'admin', '2022-11-18 08:48:14', '2022-11-18 08:48:14', '', '', 0),
('GLD-637746cf0fd2e', 50, '2022-11-18 08:48:15', '1668761294', 'admin', '2022-11-18 08:48:15', '2022-11-18 08:48:15', '', '', 0),
('GLD-637746cf56b57', 50, '2022-11-18 08:48:15', '1668761294', 'admin', '2022-11-18 08:48:15', '2022-11-18 08:48:15', '', '', 0),
('GLD-637746e8f366a', 60, '2022-11-18 08:48:40', '1668761320', 'admin', '2022-11-18 08:48:40', '2022-11-18 08:48:40', '', '', 0),
('GLD-637746e922c38', 60, '2022-11-18 08:48:41', '1668761320', 'admin', '2022-11-18 08:48:41', '2022-11-18 08:48:41', '', '', 0),
('GLD-637746e95c87b', 60, '2022-11-18 08:48:41', '1668761320', 'admin', '2022-11-18 08:48:41', '2022-11-18 08:48:41', '', '', 0),
('GLD-637746e96cf49', 60, '2022-11-18 08:48:41', '1668761320', 'admin', '2022-11-18 08:48:41', '2022-11-18 08:48:41', '', '', 0),
('GLD-637747b4bd80d', 60, '2022-11-18 08:52:04', '1668761524', 'admin', '2022-11-18 08:52:04', '2022-11-18 08:52:04', '', '', 0),
('GLD-637747b57952a', 60, '2022-11-18 08:52:05', '1668761524', 'admin', '2022-11-18 08:52:05', '2022-11-18 08:52:05', '', '', 0),
('GLD-637747b599a78', 60, '2022-11-18 08:52:05', '1668761524', 'admin', '2022-11-18 08:52:05', '2022-11-18 08:52:05', '', '', 0),
('GLD-6377485724f0f', 60, '2022-11-18 08:54:47', '1668761687', 'admin', '2022-11-18 08:54:47', '2022-11-18 08:54:47', '', '', 0),
('GLD-63774e062b406', 60, '2022-11-18 09:19:02', '1668763142', 'admin', '2022-11-18 09:19:02', '2022-11-18 09:19:02', '', '', 0),
('GLD-6377527a4c74e', 60, '2022-11-18 09:38:02', '1668764282', 'admin', '2022-11-18 09:38:02', '2022-11-18 09:38:02', '', '', 0),
('GLD-6377527ae8793', 60, '2022-11-18 09:38:02', '1668764282', 'admin', '2022-11-18 09:38:02', '2022-11-18 09:38:02', '', '', 0),
('GLD-6377527b0443b', 60, '2022-11-18 09:38:03', '1668764282', 'admin', '2022-11-18 09:38:03', '2022-11-18 09:38:03', '', '', 0),
('GLD-637756bad8b7d', 50, '2022-11-18 09:56:10', '1668765370', 'admin', '2022-11-18 09:56:10', '2022-11-18 09:56:10', '', '', 0),
('GLD-637a32180f39b', 20, '2022-11-20 13:56:40', '1668952600', 'admin', '2022-11-20 13:56:40', '2022-11-20 13:56:40', '', '', 0),
('GLD-637a3219ea833', 20, '2022-11-20 13:56:41', '1668952600', 'admin', '2022-11-20 13:56:41', '2022-11-20 13:56:41', '', '', 0),
('GLD-637b12d1e2ec8', 40, '2022-11-21 05:55:29', '1669010129', 'admin', '2022-11-21 05:55:29', '2022-11-21 05:55:29', '', '', 0),
('GLD-637b12d3aa0f0', 40, '2022-11-21 05:55:31', '1669010129', 'admin', '2022-11-21 05:55:31', '2022-11-21 05:55:31', '', '', 0),
('GLD-637b12d40345f', 40, '2022-11-21 05:55:32', '1669010129', 'admin', '2022-11-21 05:55:32', '2022-11-21 05:55:32', '', '', 0),
('GLD-637b12d4639af', 40, '2022-11-21 05:55:32', '1669010129', 'admin', '2022-11-21 05:55:32', '2022-11-21 05:55:32', '', '', 0),
('GLD-637b12d4ac47c', 40, '2022-11-21 05:55:32', '1669010129', 'admin', '2022-11-21 05:55:32', '2022-11-21 05:55:32', '', '', 0),
('GLD-637b12d51ce38', 40, '2022-11-21 05:55:33', '1669010129', 'admin', '2022-11-21 05:55:33', '2022-11-21 05:55:33', '', '', 0),
('GLD-637b12d56f09e', 40, '2022-11-21 05:55:33', '1669010129', 'admin', '2022-11-21 05:55:33', '2022-11-21 05:55:33', '', '', 0),
('GLD-637b12d5cccd9', 40, '2022-11-21 05:55:33', '1669010129', 'admin', '2022-11-21 05:55:33', '2022-11-21 05:55:33', '', '', 0),
('GLD-637b12d62dc89', 40, '2022-11-21 05:55:34', '1669010129', 'admin', '2022-11-21 05:55:34', '2022-11-21 05:55:34', '', '', 0),
('GLD-637b12d68cd02', 40, '2022-11-21 05:55:34', '1669010129', 'admin', '2022-11-21 05:55:34', '2022-11-21 05:55:34', '', '', 0),
('GLD-637b17a97a17f', 10, '2022-11-21 06:16:09', '1669011369', 'admin', '2022-11-21 06:16:09', '2022-11-21 06:16:09', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17aaf060b', 10, '2022-11-21 06:16:10', '1669011369', 'admin', '2022-11-21 06:16:10', '2022-11-21 06:16:10', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17ab48cca', 10, '2022-11-21 06:16:11', '1669011369', 'admin', '2022-11-21 06:16:11', '2022-11-21 06:16:11', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17ab9b910', 10, '2022-11-21 06:16:11', '1669011369', 'admin', '2022-11-21 06:16:11', '2022-11-21 06:16:11', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17abeafe1', 10, '2022-11-21 06:16:11', '1669011369', 'admin', '2022-11-21 06:16:11', '2022-11-21 06:16:11', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17ac57a0e', 10, '2022-11-21 06:16:12', '1669011369', 'admin', '2022-11-21 06:16:12', '2022-11-21 06:16:12', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17acbdf24', 10, '2022-11-21 06:16:12', '1669011369', 'admin', '2022-11-21 06:16:12', '2022-11-21 06:16:12', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17ad217d6', 10, '2022-11-21 06:16:13', '1669011369', 'admin', '2022-11-21 06:16:13', '2022-11-21 06:16:13', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17ad7554d', 10, '2022-11-21 06:16:13', '1669011369', 'admin', '2022-11-21 06:16:13', '2022-11-21 06:16:13', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b17adc2624', 10, '2022-11-21 06:16:13', '1669011369', 'admin', '2022-11-21 06:16:13', '2022-11-21 06:16:13', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180ba71f9', 10, '2022-11-21 06:17:47', '1669011467', 'admin', '2022-11-21 06:17:47', '2022-11-21 06:17:47', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180c10386', 10, '2022-11-21 06:17:48', '1669011467', 'admin', '2022-11-21 06:17:48', '2022-11-21 06:17:48', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180c6ee41', 10, '2022-11-21 06:17:48', '1669011467', 'admin', '2022-11-21 06:17:48', '2022-11-21 06:17:48', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180cc7394', 10, '2022-11-21 06:17:48', '1669011467', 'admin', '2022-11-21 06:17:48', '2022-11-21 06:17:48', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180d33388', 10, '2022-11-21 06:17:49', '1669011467', 'admin', '2022-11-21 06:17:49', '2022-11-21 06:17:49', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180d8a701', 10, '2022-11-21 06:17:49', '1669011467', 'admin', '2022-11-21 06:17:49', '2022-11-21 06:17:49', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180de4e79', 10, '2022-11-21 06:17:49', '1669011467', 'admin', '2022-11-21 06:17:49', '2022-11-21 06:17:49', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180e46e20', 10, '2022-11-21 06:17:50', '1669011467', 'admin', '2022-11-21 06:17:50', '2022-11-21 06:17:50', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180e9fbca', 10, '2022-11-21 06:17:50', '1669011467', 'admin', '2022-11-21 06:17:50', '2022-11-21 06:17:50', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b180ee4f26', 10, '2022-11-21 06:17:50', '1669011467', 'admin', '2022-11-21 06:17:50', '2022-11-21 06:17:50', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b18306b7e6', 5, '2022-11-21 06:18:24', '1669011504', 'admin', '2022-11-21 06:18:24', '2022-11-21 06:18:24', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1830cdfb8', 5, '2022-11-21 06:18:24', '1669011504', 'admin', '2022-11-21 06:18:24', '2022-11-21 06:18:24', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b189621f3e', 5, '2022-11-21 06:20:06', '1669011606', 'admin', '2022-11-21 06:20:06', '2022-11-21 06:20:06', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b18968684f', 5, '2022-11-21 06:20:06', '1669011606', 'admin', '2022-11-21 06:20:06', '2022-11-21 06:20:06', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1896db46b', 5, '2022-11-21 06:20:06', '1669011606', 'admin', '2022-11-21 06:20:06', '2022-11-21 06:20:06', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b18c3f3ed6', 5, '2022-11-21 06:20:51', '1669011651', 'admin', '2022-11-21 06:20:51', '2022-11-21 06:20:51', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b18c468986', 5, '2022-11-21 06:20:52', '1669011651', 'admin', '2022-11-21 06:20:52', '2022-11-21 06:20:52', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b18c4c7570', 5, '2022-11-21 06:20:52', '1669011651', 'admin', '2022-11-21 06:20:52', '2022-11-21 06:20:52', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c266addf', 10, '2022-11-21 06:35:18', '1669012518', 'admin', '2022-11-21 06:35:18', '2022-11-21 06:35:18', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c276800a', 10, '2022-11-21 06:35:19', '1669012518', 'admin', '2022-11-21 06:35:19', '2022-11-21 06:35:19', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c2800f7b', 10, '2022-11-21 06:35:20', '1669012518', 'admin', '2022-11-21 06:35:20', '2022-11-21 06:35:20', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c287e08d', 10, '2022-11-21 06:35:20', '1669012518', 'admin', '2022-11-21 06:35:20', '2022-11-21 06:35:20', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c291d4d2', 10, '2022-11-21 06:35:21', '1669012518', 'admin', '2022-11-21 06:35:21', '2022-11-21 06:35:21', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c299dcc2', 10, '2022-11-21 06:35:21', '1669012518', 'admin', '2022-11-21 06:35:21', '2022-11-21 06:35:21', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c2a25cd7', 10, '2022-11-21 06:35:22', '1669012518', 'admin', '2022-11-21 06:35:22', '2022-11-21 06:35:22', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c2aabe4c', 10, '2022-11-21 06:35:22', '1669012518', 'admin', '2022-11-21 06:35:22', '2022-11-21 06:35:22', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c2b34d8d', 10, '2022-11-21 06:35:23', '1669012518', 'admin', '2022-11-21 06:35:23', '2022-11-21 06:35:23', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c2ba9e43', 10, '2022-11-21 06:35:23', '1669012518', 'admin', '2022-11-21 06:35:23', '2022-11-21 06:35:23', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c67d1acb', 10, '2022-11-21 06:36:23', '1669012583', 'admin', '2022-11-21 06:36:23', '2022-11-21 06:36:23', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c6879f4a', 10, '2022-11-21 06:36:24', '1669012583', 'admin', '2022-11-21 06:36:24', '2022-11-21 06:36:24', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c913dd9f', 10, '2022-11-21 06:37:05', '1669012625', 'admin', '2022-11-21 06:37:05', '2022-11-21 06:37:05', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999),
('GLD-637b1c91d546c', 10, '2022-11-21 06:37:05', '1669012625', 'admin', '2022-11-21 06:37:05', '2022-11-21 06:37:05', 'Dinar Mulia', 'Bukit Mas Mulia Internusa', 999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gold_loan`
--

CREATE TABLE `gold_loan` (
  `LOAN_ID` varchar(50) NOT NULL,
  `GOLD_ID` varchar(50) NOT NULL,
  `GL_CREATED` datetime DEFAULT NULL,
  `GL_STATUS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gold_log`
--

CREATE TABLE `gold_log` (
  `GOLOG_ID` varchar(50) NOT NULL,
  `GOLD_ID` varchar(50) DEFAULT NULL,
  `USER_ID` varchar(50) DEFAULT NULL,
  `GOLOG_CREATED` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `GOLOG_REFF` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gold_log`
--

INSERT INTO `gold_log` (`GOLOG_ID`, `GOLD_ID`, `USER_ID`, `GOLOG_CREATED`, `created_at`, `updated_at`, `GOLOG_REFF`) VALUES
('GLOG-637b3015ddd02', 'GLD-63773602dbe73', 'SGU637b2c1a332cf', '2022-11-21 08:00:21', '2022-11-21 08:00:21', '2022-11-21 08:00:21', ''),
('GLOG-637b30bed56b4', 'GLD-63773602dbe73', 'SGU637b2c1a332cf', '2022-11-21 08:03:10', '2022-11-21 08:03:10', '2022-11-21 08:03:10', ''),
('GLOG-637b3826eb682', 'GLD-63773602dbe73', 'SGU637b3688f328b', '2022-11-21 08:34:46', '2022-11-21 08:34:46', '2022-11-21 08:34:46', ''),
('GLOG-637b38be26f0b', 'GLD-63773602dbe73', 'SGU637b3688f328b', '2022-11-21 08:37:18', '2022-11-21 08:37:18', '2022-11-21 08:37:18', ''),
('GLOG-637b390716e9b', 'GLD-63773602dbe73', 'SGU637b379909b95', '2022-11-21 08:38:31', '2022-11-21 08:38:31', '2022-11-21 08:38:31', ''),
('GLOG-637b3a0e3ee64', 'GLD-63773602dbe73', 'SGU637b3688f328b', '2022-11-21 08:42:54', '2022-11-21 08:42:54', '2022-11-21 08:42:54', 'User Claim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gold_owner`
--

CREATE TABLE `gold_owner` (
  `owner_gid` bigint(20) NOT NULL,
  `USER_ID` varchar(50) NOT NULL,
  `GOLD_ID` varchar(50) NOT NULL,
  `GO_CREATED` datetime DEFAULT NULL,
  `GO_STATUS` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gold_owner`
--

INSERT INTO `gold_owner` (`owner_gid`, `USER_ID`, `GOLD_ID`, `GO_CREATED`, `GO_STATUS`, `created_at`, `updated_at`) VALUES
(14, 'SGU637b3688f328b', 'GLD-63773602dbe73', '2022-11-21 08:42:54', 'Valid', '2022-11-21 08:42:54', '2022-11-21 08:42:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jewelry`
--

CREATE TABLE `jewelry` (
  `JEWEL_ID` varchar(50) NOT NULL,
  `STORE_ID` int(11) DEFAULT NULL,
  `JEWTP_ID` varchar(20) DEFAULT NULL,
  `JEWEL_WEIGHT` float NOT NULL,
  `JEWEL_CREATED` datetime DEFAULT NULL,
  `JEWEL_SERIAL` varchar(25) DEFAULT NULL,
  `JEWEL_CREATE_BY` varchar(50) DEFAULT NULL,
  `JEWEL_EXTERNAL_SERIAL` varchar(50) DEFAULT NULL,
  `JEWEL_IMAGE` varchar(150) DEFAULT NULL,
  `JEWEL_STATUS` varchar(15) NOT NULL,
  `JEWEL_SELLPRICE` int(11) DEFAULT NULL,
  `JEWEL_BUYPRICE` int(11) DEFAULT NULL,
  `JEWEL_DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jewelry_owner`
--

CREATE TABLE `jewelry_owner` (
  `USER_ID` varchar(50) NOT NULL,
  `JEWEL_ID` varchar(50) NOT NULL,
  `STORE_ID` int(11) DEFAULT NULL,
  `JO_CREATED` datetime DEFAULT NULL,
  `JO_STATUS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jewelry_type`
--

CREATE TABLE `jewelry_type` (
  `JEWTP_ID` varchar(20) NOT NULL,
  `JEWTP_NAME` varchar(50) NOT NULL,
  `JEWTP_STATUS` varchar(15) NOT NULL,
  `JEWTP_PARENT` varchar(20) DEFAULT NULL,
  `JEWTP_CREATED` datetime DEFAULT NULL,
  `JEWTP_CREATE_BY` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loans`
--

CREATE TABLE `loans` (
  `LOAN_ID` varchar(50) NOT NULL,
  `USER_ID` varchar(50) DEFAULT NULL,
  `LOAN_GOLD_AMT` float DEFAULT NULL,
  `LOAN_AMT` int(11) DEFAULT NULL,
  `LOAN_KURS` int(11) DEFAULT NULL,
  `LOAN_CREATED` datetime DEFAULT NULL,
  `LOAN_FEE` int(11) DEFAULT NULL,
  `LOAN_TERMIN` int(11) DEFAULT NULL,
  `LOAN_TERMIN_TYPE` varchar(15) DEFAULT NULL,
  `LOAN_DEADLINE` datetime DEFAULT NULL,
  `LOAN_STATUS` varchar(15) DEFAULT NULL,
  `LOAN_REJECTED` datetime DEFAULT NULL,
  `LOAN_APPROVED` datetime DEFAULT NULL,
  `LOAN_REJECT_REASON` varchar(250) DEFAULT NULL,
  `LOAN_PAYOFF_DT` datetime DEFAULT NULL,
  `LOAN_PAYOFF_KURS` int(11) DEFAULT NULL,
  `LOAN_PAYOFF_AMT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stores`
--

CREATE TABLE `stores` (
  `STORE_ID` int(11) NOT NULL,
  `STORE_NAME` varchar(100) NOT NULL,
  `STORE_ADDRESS` varchar(250) NOT NULL,
  `STORE_LAT` varchar(25) NOT NULL,
  `STORE_LNG` varchar(25) NOT NULL,
  `STORE_IMAGE` text DEFAULT NULL,
  `STORE_STATUS` varchar(15) DEFAULT NULL,
  `STORE_DESC` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stores`
--

INSERT INTO `stores` (`STORE_ID`, `STORE_NAME`, `STORE_ADDRESS`, `STORE_LAT`, `STORE_LNG`, `STORE_IMAGE`, `STORE_STATUS`, `STORE_DESC`, `created_at`, `updated_at`) VALUES
(1114423694, 'Wemart Antapani', 'Jl. Terusan Jakarta Bandung', '-6.9177936', '107.6516127', 'https://bucket-s3-wemart-id.s3.ap-southeast-1.amazonaws.com/images/89vGxyaG2yC0Cc3pdEC4cLzurj9kg1FZLDUXtGfM.png', 'active', 'Masukan Deskripsi Toko', '2022-11-21 03:22:21', '2022-11-21 03:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `TRANS_ID` varchar(50) NOT NULL,
  `CO_ID` varchar(50) DEFAULT NULL,
  `LOAN_ID` varchar(50) DEFAULT NULL,
  `USER_ID` varchar(50) DEFAULT NULL,
  `TRANS_CREATED` datetime NOT NULL,
  `TRANS_SUBTOTAL` int(11) NOT NULL,
  `TRANS_TOTAL` int(11) NOT NULL,
  `TRANS_FEE` int(11) NOT NULL,
  `TRANS_DISCOUNT` int(11) NOT NULL,
  `TRANS_STATUS` varchar(15) NOT NULL,
  `TRANS_LINK` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `store_id`, `created_at`, `updated_at`) VALUES
('SGU637b2c1a332cf', 'Wemart', 'admin@wemart.id', NULL, NULL, '$2y$10$rWQ8CV2HuXO0SS7wmH5pj.CfFx6fHaNfGdRuAplqRY6sZ8LcaCue6', NULL, 1114423694, '2022-11-21 07:43:22', '2022-11-21 07:43:22'),
('SGU637b3688f328b', 'Bimo Valerian', 'bimo1valerian@gmail.com', NULL, NULL, '$2y$10$vfds6TgQaoFzmEkiGgShb./OtuHX7Reb0JSNzhEtOryXZcAXnvxIO', NULL, NULL, '2022-11-21 08:27:53', '2022-11-21 08:27:53'),
('SGU637b379909b95', 'Testing', 'testing@gmail.com', 81325402709, NULL, '$2y$10$P0.TV7Qvfv8hHgdkSorUNuRILOKaeWs3RKyuO/LUaDjdV9gGB3OEO', NULL, NULL, '2022-11-21 08:32:25', '2022-11-21 08:32:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`CO_ID`);

--
-- Indeks untuk tabel `co_detail`
--
ALTER TABLE `co_detail`
  ADD PRIMARY KEY (`JEWEL_ID`,`CO_ID`),
  ADD KEY `FK_RELATIONSHIP_19` (`CO_ID`);

--
-- Indeks untuk tabel `golds`
--
ALTER TABLE `golds`
  ADD PRIMARY KEY (`GOLD_ID`);

--
-- Indeks untuk tabel `gold_loan`
--
ALTER TABLE `gold_loan`
  ADD PRIMARY KEY (`LOAN_ID`,`GOLD_ID`),
  ADD KEY `FK_RELATIONSHIP_14` (`GOLD_ID`);

--
-- Indeks untuk tabel `gold_log`
--
ALTER TABLE `gold_log`
  ADD PRIMARY KEY (`GOLOG_ID`),
  ADD KEY `FK_RELATIONSHIP_4` (`GOLD_ID`),
  ADD KEY `FK_RELATIONSHIP_5` (`USER_ID`);

--
-- Indeks untuk tabel `gold_owner`
--
ALTER TABLE `gold_owner`
  ADD PRIMARY KEY (`owner_gid`),
  ADD UNIQUE KEY `GOLD_ID` (`GOLD_ID`);

--
-- Indeks untuk tabel `jewelry`
--
ALTER TABLE `jewelry`
  ADD PRIMARY KEY (`JEWEL_ID`),
  ADD KEY `FK_RELATIONSHIP_17` (`STORE_ID`),
  ADD KEY `FK_RELATIONSHIP_6` (`JEWTP_ID`);

--
-- Indeks untuk tabel `jewelry_owner`
--
ALTER TABLE `jewelry_owner`
  ADD PRIMARY KEY (`USER_ID`,`JEWEL_ID`),
  ADD KEY `FK_RELATIONSHIP_10` (`STORE_ID`),
  ADD KEY `FK_RELATIONSHIP_9` (`JEWEL_ID`);

--
-- Indeks untuk tabel `jewelry_type`
--
ALTER TABLE `jewelry_type`
  ADD PRIMARY KEY (`JEWTP_ID`);

--
-- Indeks untuk tabel `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`LOAN_ID`),
  ADD KEY `FK_RELATIONSHIP_11` (`USER_ID`);

--
-- Indeks untuk tabel `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`STORE_ID`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `FK_RELATIONSHIP_12` (`LOAN_ID`),
  ADD KEY `FK_RELATIONSHIP_15` (`USER_ID`),
  ADD KEY `FK_RELATIONSHIP_16` (`CO_ID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gold_owner`
--
ALTER TABLE `gold_owner`
  MODIFY `owner_gid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `co_detail`
--
ALTER TABLE `co_detail`
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`JEWEL_ID`) REFERENCES `jewelry` (`JEWEL_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`CO_ID`) REFERENCES `checkout` (`CO_ID`);

--
-- Ketidakleluasaan untuk tabel `gold_loan`
--
ALTER TABLE `gold_loan`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`LOAN_ID`) REFERENCES `loans` (`LOAN_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`GOLD_ID`) REFERENCES `golds` (`GOLD_ID`);

--
-- Ketidakleluasaan untuk tabel `gold_log`
--
ALTER TABLE `gold_log`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`GOLD_ID`) REFERENCES `golds` (`GOLD_ID`);

--
-- Ketidakleluasaan untuk tabel `gold_owner`
--
ALTER TABLE `gold_owner`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`GOLD_ID`) REFERENCES `golds` (`GOLD_ID`);

--
-- Ketidakleluasaan untuk tabel `jewelry`
--
ALTER TABLE `jewelry`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`STORE_ID`) REFERENCES `stores` (`STORE_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`JEWTP_ID`) REFERENCES `jewelry_type` (`JEWTP_ID`);

--
-- Ketidakleluasaan untuk tabel `jewelry_owner`
--
ALTER TABLE `jewelry_owner`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`STORE_ID`) REFERENCES `stores` (`STORE_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`JEWEL_ID`) REFERENCES `jewelry` (`JEWEL_ID`);

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`LOAN_ID`) REFERENCES `loans` (`LOAN_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`CO_ID`) REFERENCES `checkout` (`CO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
