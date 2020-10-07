-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 14.08
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtp_dashboard`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kefarmasian`
--

CREATE TABLE `kefarmasian` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kefarmasian`
--

INSERT INTO `kefarmasian` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(1, 'Persentase puskesmas perawatan yang melaksanakan pelayanan kefarmasian sesuai standar', 11, 11, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(2, 'Persentase penggunaan obat rasional di sarana pelayanan kesehatan dasar pemerintah', 1, 1, 12, 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(3, 'Persentase ketersediaan obat dan vaksin', 32, 1, 2, 2, 21, 1, 2, 3, 3, 3, 3, 3, 3, 3, 2020),
(4, 'Persentase penggunaan obat generik difasilitas pelayanan kesehatan', 1, 1, 1, 1, 1, 1, 1, 13, 3, 3, 3, 3, 3, 3, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkgm`
--

CREATE TABLE `kkgm` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkko`
--

CREATE TABLE `kkko` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kkko`
--

INSERT INTO `kkko` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(2, 'ya', 1, 1, 12, 2, 222, 22, 22, 2, 2, 2, 2, 2, 2, 2, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name_menu`) VALUES
(1, 'admin'),
(3, 'P2PM'),
(4, 'P2PTM'),
(5, 'KKGM'),
(6, 'KKKO'),
(7, 'YANKES'),
(8, 'Survimun'),
(9, 'Kefarmasian'),
(10, 'PPM'),
(11, 'SDMSPK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `name_role`
--

CREATE TABLE `name_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `name_role`
--

INSERT INTO `name_role` (`id`, `role`) VALUES
(1, 'admin'),
(3, 'P2PM'),
(4, 'P2PTM'),
(5, 'KKGM'),
(6, 'KKKO'),
(7, 'Yankes'),
(8, 'Survimun'),
(9, 'Kefarmasian'),
(10, 'PPM'),
(11, 'SDMSPK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p2pm`
--

CREATE TABLE `p2pm` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p2pm`
--

INSERT INTO `p2pm` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(1, 'asd', 1, 12, 1, 1, 1, 1, 1, 2, 3, 4, 5, 6, 7, 8, 2019),
(2, 'x', 1, 1, 12, 2, 2, 2, 23, 3, 3, 3, 3, 3, 3, 3, 2020),
(3, 'x', 1, 1, 1, 3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(4, 'a', 12, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2020),
(5, 'x', 1, 1, 1, 1, 1, 1, 1, 13, 1, 3, 11, 1, 1, 1, 2020),
(6, 'asd', 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(7, 'asd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(8, 'asd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(9, 'd1', 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020),
(10, 'ss', 2, 3, 2, 2, 2, 2, 2, 2, 23, 3, 3, 3, 3, 3, 2016),
(11, 'v1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 2018),
(12, 'dd', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019),
(13, 'xxx', 11, 122, 1, 1, 11, 1, 1, 1, 1, 1, 122, 22, 2, 2, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p2ptm`
--

CREATE TABLE `p2ptm` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p2ptm`
--

INSERT INTO `p2ptm` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(3, 'a', 11, 1, 1, 2, 2, 2, 22, 2, 2, 2, 2, 2, 2, 2, 2018),
(4, 'b', 21, 11, 12, 23, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2017),
(6, 'y', 100, 23, 12, 12, 11, 1, 1, 1, 1, 1, 1, 12, 1, 1, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppm`
--

CREATE TABLE `ppm` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sdmspk`
--

CREATE TABLE `sdmspk` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sdmspk`
--

INSERT INTO `sdmspk` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(1, 'smspk1', 10, 11, 12, 12, 11, 1, 1, 2, 3, 1, 1, 1, 1, 1, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, '3', 'Input Data P2PM', 'p2pm', 'fas fa-fw fa-keyboard', 1),
(2, '3', 'Table P2PM', 'p2pm/table', 'fas fa-fw fa-table', 1),
(3, '3', 'Chart P2PM', 'p2pm/chart', 'fas fa-fw fa-chart-area', 1),
(4, '1', 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(5, '1', 'Manage User', 'admin/manageuser', 'fas fa-fw fa-user-cog', 1),
(6, '4', 'Input Data P2PTM', 'p2ptm', 'fas fa-fw fa-keyboard', 1),
(7, '4', 'Table P2PTM', 'p2ptm/table', 'fas fa-fw fa-table', 1),
(8, '4', 'Chart P2PTM', 'p2ptm/chart', 'fas fa-fw fa-chart-area', 1),
(9, '5', 'Input Data KKGM', 'kkgm', 'fas fa-fw fa-keyboard', 1),
(10, '5', 'Table KKGM', 'kkgm/table', 'fas fa-fw fa-table', 1),
(11, '5', 'Chart KKGM', 'kkgm/chart', 'fas fa-fw fa-chart-area', 1),
(12, '6', 'Input Data KKKO', 'kkko', '	\r\nfas fa-fw fa-keyboard', 1),
(13, '6', 'Table KKKO', 'kkko/table', 'fas fa-fw fa-table', 1),
(14, '6', 'Chart KKKO', 'kkko/chart', 'fas fa-fw fa-chart-area', 1),
(15, '7', 'Input Data Yankes', 'yankes', 'fas fa-fw fa-keyboard', 1),
(16, '7', 'Table Yankes', 'yankes/table', 'fas fa-fw fa-table', 1),
(17, '7', 'Chart Yankes', 'yankes/chart', 'fas fa-fw fa-chart-area', 1),
(18, '8', 'Input Data Survimun', 'survimun', '	\r\nfas fa-fw fa-keyboard', 1),
(19, '8', 'Table Survimun', 'survimun/table', 'fas fa-fw fa-table', 1),
(20, '8', 'Chart Survimun', 'survimun/chart', 'fas fa-fw fa-chart-area\r\n', 1),
(21, '9', 'Input Data Kefarmasian', 'kefarmasian', 'fas fa-fw fa-keyboard', 1),
(22, '9', 'Table Kefarmasian', 'kefarmasian/table', '	\r\nfas fa-fw fa-table', 1),
(23, '9', 'Chart Kefarmasian', 'kefarmasian/chart', 'fas fa-fw fa-chart-area', 1),
(24, '10', 'Input Data PPM', 'ppm', 'fas fa-fw fa-keyboard', 1),
(25, '10', 'Table PPM', 'ppm/table', 'fas fa-fw fa-table', 1),
(26, '10', 'Chart PPM', 'ppm/chart', 'fas fa-fw fa-chart-area', 1),
(27, '11', 'Input Data SDMSPK', 'sdmspk', 'fas fa-fw fa-keyboard', 1),
(28, '11', 'Table SDMSPK', 'sdmspk/table', 'fas fa-fw fa-table', 1),
(29, '11', 'Chart SDMSPK', 'sdmspk/chart', 'fas fa-fw fa-chart-area', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `survimun`
--

CREATE TABLE `survimun` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` float NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `survimun`
--

INSERT INTO `survimun` (`id`, `indikator`, `sasaran`, `target`, `bulan_1`, `bulan_2`, `bulan_3`, `bulan_4`, `bulan_5`, `bulan_6`, `bulan_7`, `bulan_8`, `bulan_9`, `bulan_10`, `bulan_11`, `bulan_12`, `tahun`) VALUES
(1, 'Jumlah Bayi Diimunisasi BCG	', 1, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`) VALUES
(11, 'admin1', 'admin1', 'default.png', 'admin1', 1),
(12, 'admin2', 'admin2', 'default.png', 'admin2', 1),
(13, 'Pencegahan dan Pengendalian Penyakit Menular', 'p2pm', 'default.png', 'p2pm', 3),
(14, 'Pencegahan dan Pengendalian Penyakit Tidak Menular', 'p2ptm', 'default.png', 'p2ptm', 4),
(17, 'Kesehatan Keluarga dan Gizi Masyarakat', 'kkgm', 'default.png', 'kkgm', 5),
(18, 'Kesling, Kesehatan, Alkes dan Olahraga', 'kkko', 'default.png', 'kkko', 6),
(19, 'YANKES', 'yankes', 'default.png', 'yankes', 7),
(20, 'Promosi dan Pemberdayaan Masyarakat', 'ppm', 'default.png', 'ppm', 10),
(21, 'Survelians dan Imunisasi', 'survimun', 'default.png', 'survimun', 8),
(22, 'Kefarmasian, Alkes dan PKRT', 'kefarmasian', 'default.png', 'kefarmasian', 9),
(23, 'Sumber Daya manusia dan Sarana Prasarana Kesehatan', 'sdmspk', 'default.png', 'sdmspk', 11),
(34, 'asd', 'asd', 'default.png', 'asd', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access`
--

INSERT INTO `user_access` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 2),
(6, 3, 3),
(7, 4, 4),
(8, 5, 5),
(9, 1, 5),
(10, 1, 6),
(11, 6, 6),
(12, 1, 7),
(13, 7, 7),
(14, 1, 8),
(15, 1, 9),
(16, 1, 10),
(17, 1, 11),
(18, 8, 8),
(19, 9, 9),
(20, 10, 10),
(21, 11, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `yankes`
--

CREATE TABLE `yankes` (
  `id` int(11) NOT NULL,
  `indikator` varchar(128) NOT NULL,
  `sasaran` float NOT NULL,
  `target` float NOT NULL,
  `bulan_1` float NOT NULL,
  `bulan_2` float NOT NULL,
  `bulan_3` float NOT NULL,
  `bulan_4` float NOT NULL,
  `bulan_5` float NOT NULL,
  `bulan_6` float NOT NULL,
  `bulan_7` float NOT NULL,
  `bulan_8` float NOT NULL,
  `bulan_9` int(11) NOT NULL,
  `bulan_10` float NOT NULL,
  `bulan_11` float NOT NULL,
  `bulan_12` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kefarmasian`
--
ALTER TABLE `kefarmasian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kkgm`
--
ALTER TABLE `kkgm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kkko`
--
ALTER TABLE `kkko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `name_role`
--
ALTER TABLE `name_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p2pm`
--
ALTER TABLE `p2pm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p2ptm`
--
ALTER TABLE `p2ptm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppm`
--
ALTER TABLE `ppm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sdmspk`
--
ALTER TABLE `sdmspk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `survimun`
--
ALTER TABLE `survimun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `yankes`
--
ALTER TABLE `yankes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kefarmasian`
--
ALTER TABLE `kefarmasian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kkgm`
--
ALTER TABLE `kkgm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kkko`
--
ALTER TABLE `kkko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `name_role`
--
ALTER TABLE `name_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `p2pm`
--
ALTER TABLE `p2pm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `p2ptm`
--
ALTER TABLE `p2ptm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ppm`
--
ALTER TABLE `ppm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sdmspk`
--
ALTER TABLE `sdmspk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `survimun`
--
ALTER TABLE `survimun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `yankes`
--
ALTER TABLE `yankes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
