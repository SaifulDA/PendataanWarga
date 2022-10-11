-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2022 pada 10.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datawarga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Admin','RT','RW') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `status`, `created_at`) VALUES
(7, 'Saiful Daulah Alfarabi', 'Saiful123', 'saiful243@gmail.com', '$2y$10$eco0ao82EzCR.Aakl.H1d.xcE2IYGu4WI.WjP5q3rFWZEMpeM0gRS', 'Admin', '2022-10-11 08:36:26'),
(8, 'Sabili Noor Arba\'a', 'sabili123', 'sabili123@gmail.com', '$2y$10$uyvIqEyG.2LnFd6kkw4cpuZTzwlMFY3pAe8ahS9Y5.PVZsXNV7XJC', 'Admin', '2022-10-11 08:37:38'),
(9, 'Gatot Pratama', 'gatot123', 'gatot234@gmail.com', '$2y$10$SvYN1O.p.RY8JBbj0TBvxuiDyikgnaZuHqf48YiSfCHmwyAUMf5YO', 'Admin', '2022-10-11 08:38:14'),
(10, 'Yolanda Sinaga', 'yolanda123', 'yolanda234@gmail.com', '$2y$10$l0DRMh/f6sPfM/IrBDkRdesFptVfwrdjp6gGMiapMhkJDfR8gP.4C', 'Admin', '2022-10-11 08:38:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(3) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `rt_rw` varchar(255) NOT NULL,
  `agama` enum('ISLAM','KRISTEN','HINDU','BUDDHA','KONGHUCU') NOT NULL,
  `pendidikan_terakhir` enum('SD / SEDERAJAT','SMP / SEDERAJAT','SMA / SEDERAJAT','DIPLOMA I / II','DIPLOMA III','DIPLOMA IV / STRATA I','STRATA II','STRATA III') NOT NULL,
  `status_perkawinan` enum('KAWIN','BELUM KAWIN') NOT NULL,
  `status_warga` enum('TETAP','KONTRAK') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `negara`, `rt_rw`, `agama`, `pendidikan_terakhir`, `status_perkawinan`, `status_warga`, `pekerjaan`, `created_at`) VALUES
(53, '2430004756231098', 'Sari Suryatmi S.Psi', 'Padang', '1971-11-14', 'LAKI-LAKI', 'Dk. R.E. Martadinata No. 219, Tual 79036, SulUt', 'Yohanes', 'Ville', 'Binjai', 'Sumatera Utara', 'Indonesia', '002/003', 'ISLAM', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'occaecati', '2022-04-25 15:05:03'),
(54, '2430000796842315', 'Warji Irawan', 'Palangka Raya', '2018-07-14', 'LAKI-LAKI', 'Ds. Baladewa No. 117, Makassar 63121, Jambi', 'Cikutra Timur', 'Ville', 'Manado', 'Sumatera Selatan', 'Indonesia', '011/008', 'KONGHUCU', 'SMA / SEDERAJAT', 'KAWIN', 'KONTRAK', 'nemo', '2022-04-25 15:05:03'),
(55, '2430007035214968', 'Irma Astuti M.Pd', 'Malang', '2015-03-05', 'LAKI-LAKI', 'Kpg. Bass No. 578, Sukabumi 99585, SulTra', 'Wora Wari', 'Ville', 'Jayapura', 'DKI Jakarta', 'Indonesia', '010/001', 'ISLAM', 'DIPLOMA III', 'KAWIN', 'KONTRAK', 'explicabo', '2022-04-25 15:05:03'),
(56, '2430003267519840', 'Luhung Dirja Mansur', 'Serang', '2008-05-18', 'PEREMPUAN', 'Jr. Gedebage Selatan No. 279, Bekasi 20894, KepR', 'Krakatau', 'Ville', 'Administrasi Jakarta Utara', 'Kalimantan Timur', 'Indonesia', '009/012', 'KRISTEN', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'cumque', '2022-04-25 15:05:03'),
(57, '2430005460829173', 'Adikara Mahendra', 'Prabumulih', '1998-06-24', 'PEREMPUAN', 'Jln. Soekarno Hatta No. 813, Samarinda 62298, SumUt', 'Sukajadi', 'Ville', 'Batu', 'Sumatera Utara', 'Indonesia', '010/001', 'KRISTEN', 'SMA / SEDERAJAT', 'KAWIN', 'TETAP', 'expedita', '2022-04-25 15:05:03'),
(59, '2430003758204961', 'Ilyas Narpati', 'Banjarbaru', '1979-05-16', 'LAKI-LAKI', 'Dk. Baan No. 928, Sabang 44639, SulBar', 'Baranang Siang', 'Ville', 'Administrasi Jakarta Pusat', 'Jawa Barat', 'Indonesia', '013/009', 'HINDU', 'STRATA II', 'BELUM KAWIN', 'TETAP', 'minima', '2022-04-25 15:05:03'),
(60, '2430005820179346', 'Amalia Sadina Aryani', 'Sungai Penuh', '1971-04-15', 'PEREMPUAN', 'Kpg. Setia Budi No. 51, Bandar Lampung 51484, PapBar', 'Otista', 'Ville', 'Administrasi Jakarta Selatan', 'Gorontalo', 'Indonesia', '011/008', 'ISLAM', 'STRATA II', 'BELUM KAWIN', 'TETAP', 'reiciendis', '2022-04-25 15:05:04'),
(61, '2430000719258436', 'Waluyo Erik Pratama', 'Bandar Lampung', '1992-01-27', 'PEREMPUAN', 'Jr. Babadak No. 817, Sawahlunto 57299, Jambi', 'Kyai Gede', 'Ville', 'Pontianak', 'Jawa Timur', 'Indonesia', '011/008', 'KRISTEN', 'STRATA II', 'KAWIN', 'TETAP', 'consequatur', '2022-04-25 15:05:04'),
(62, '2430003510468279', 'Prayogo Saptono', 'Metro', '1996-06-14', 'LAKI-LAKI', 'Jr. Kebangkitan Nasional No. 860, Bontang 21789, Bali', 'Bawal', 'Ville', 'Subulussalam', 'Jambi', 'Indonesia', '009/012', 'BUDDHA', 'STRATA II', 'KAWIN', 'TETAP', 'itaque', '2022-04-25 15:05:04'),
(63, '2430003614807592', 'Luluh Kurniawan', 'Ambon', '1977-02-11', 'LAKI-LAKI', 'Dk. Ters. Kiaracondong No. 766, Palopo 55443, DIY', 'Tubagus Ismail', 'Ville', 'Balikpapan', 'Kalimantan Utara', 'Indonesia', '011/008', 'ISLAM', 'DIPLOMA I / II', 'KAWIN', 'KONTRAK', 'necessitatibus', '2022-04-25 15:05:04'),
(64, '2430004905183267', 'Tira Samiah Yuliarti M.Farm', 'Administrasi Jakarta Timur', '2021-01-14', 'LAKI-LAKI', 'Jr. Merdeka No. 21, Semarang 54447, NTB', 'Rajiman', 'Ville', 'Langsa', 'Kalimantan Tengah', 'Indonesia', '011/008', 'HINDU', 'STRATA III', 'KAWIN', 'KONTRAK', 'aliquam', '2022-04-25 15:05:04'),
(65, '2430001425097386', 'Siska Fujiati', 'Kediri', '2005-04-23', 'LAKI-LAKI', 'Gg. Industri No. 521, Blitar 42322, SulUt', 'S. Parman', 'Ville', 'Jambi', 'Gorontalo', 'Indonesia', '013/009', 'KRISTEN', 'STRATA II', 'KAWIN', 'TETAP', 'id', '2022-04-25 15:05:04'),
(66, '2430005314670892', 'Hasna Prastuti', 'Surabaya', '1985-01-10', 'PEREMPUAN', 'Psr. Gardujati No. 496, Metro 15767, SulBar', 'Sudiarto', 'Ville', 'Tanjung Pinang', 'Nusa Tenggara Timur', 'Indonesia', '009/012', 'KRISTEN', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'saepe', '2022-04-25 15:05:04'),
(67, '2430000948763521', 'Widya Wahyuni', 'Banjarbaru', '2017-02-16', 'PEREMPUAN', 'Jln. Suryo No. 489, Manado 81844, JaTim', 'Ters. Kiaracondong', 'Ville', 'Serang', 'Kalimantan Utara', 'Indonesia', '011/008', 'KRISTEN', 'DIPLOMA IV / STRATA I', 'BELUM KAWIN', 'TETAP', 'debitis', '2022-04-25 15:05:04'),
(68, '2430008037142596', 'Vera Anastasia Astuti', 'Bau-Bau', '1991-07-16', 'LAKI-LAKI', 'Ki. Dewi Sartika No. 858, Ternate 66253, SulBar', 'Agus Salim', 'Ville', 'Bandung', 'Sulawesi Utara', 'Indonesia', '002/003', 'ISLAM', 'DIPLOMA I / II', 'BELUM KAWIN', 'KONTRAK', 'quia', '2022-04-25 15:05:04'),
(69, '2430003127048659', 'Jayeng Pranowo', 'Prabumulih', '1997-07-04', 'LAKI-LAKI', 'Gg. Juanda No. 589, Dumai 19043, Jambi', 'Laksamana', 'Ville', 'Padangsidempuan', 'Sulawesi Tengah', 'Indonesia', '010/001', 'KRISTEN', 'DIPLOMA I / II', 'BELUM KAWIN', 'TETAP', 'ullam', '2022-04-25 15:05:04'),
(70, '2430007289610453', 'Diah Novitasari', 'Metro', '2001-02-08', 'LAKI-LAKI', 'Ds. Fajar No. 382, Makassar 17181, NTB', 'Dago', 'Ville', 'Cimahi', 'Kalimantan Selatan', 'Indonesia', '002/003', 'KONGHUCU', 'DIPLOMA IV / STRATA I', 'KAWIN', 'KONTRAK', 'officiis', '2022-04-25 15:05:04'),
(71, '2430004276583901', 'Marsito Rajata', 'Bengkulu', '2017-03-08', 'PEREMPUAN', 'Dk. Orang No. 118, Padangpanjang 89645, KalBar', 'Jend. Sudirman', 'Ville', 'Banda Aceh', 'Sumatera Utara', 'Indonesia', '010/001', 'HINDU', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'hic', '2022-04-25 15:05:04'),
(72, '2430001853479260', 'Kalim Hutasoit', 'Cimahi', '2021-06-26', 'PEREMPUAN', 'Kpg. Sugiyopranoto No. 663, Solok 92500, Riau', 'Ciwastra', 'Ville', 'Prabumulih', 'Nusa Tenggara Timur', 'Indonesia', '002/003', 'BUDDHA', 'SD / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'quos', '2022-04-25 15:05:04'),
(73, '2430000235786419', 'Usman Budiyanto', 'Magelang', '2009-03-28', 'PEREMPUAN', 'Kpg. Gotong Royong No. 9, Administrasi Jakarta Selatan 99617, JaTim', 'Arifin', 'Ville', 'Lubuklinggau', 'Banten', 'Indonesia', '010/001', 'HINDU', 'SMA / SEDERAJAT', 'KAWIN', 'TETAP', 'voluptas', '2022-04-25 15:05:04'),
(74, '2430001265987430', 'Zulfa Safitri M.Kom.', 'Bukittinggi', '1995-09-28', 'LAKI-LAKI', 'Kpg. Supono No. 193, Manado 57955, KepR', 'Haji', 'Ville', 'Yogyakarta', 'Banten', 'Indonesia', '002/003', 'BUDDHA', 'DIPLOMA I / II', 'BELUM KAWIN', 'KONTRAK', 'voluptate', '2022-04-25 15:05:04'),
(75, '2430005219078463', 'Nalar Mansur', 'Gunungsitoli', '2002-03-21', 'LAKI-LAKI', 'Jln. Daan No. 782, Pontianak 95714, SumBar', 'Jamika', 'Ville', 'Ternate', 'Sulawesi Selatan', 'Indonesia', '010/001', 'KONGHUCU', 'STRATA III', 'KAWIN', 'TETAP', 'hic', '2022-04-25 15:05:04'),
(76, '2430008295176043', 'Cornelia Mandasari', 'Binjai', '1999-02-08', 'LAKI-LAKI', 'Gg. Bakau No. 688, Kediri 52097, JaTeng', 'Baja', 'Ville', 'Sukabumi', 'Bali', 'Indonesia', '013/009', 'KRISTEN', 'STRATA III', 'KAWIN', 'TETAP', 'velit', '2022-04-25 15:05:04'),
(77, '2430005904827136', 'Talia Suartini', 'Gunungsitoli', '2006-10-13', 'PEREMPUAN', 'Jln. Cikutra Timur No. 473, Kendari 15492, Lampung', 'Yogyakarta', 'Ville', 'Pontianak', 'Nusa Tenggara Timur', 'Indonesia', '002/003', 'KONGHUCU', 'DIPLOMA IV / STRATA I', 'KAWIN', 'KONTRAK', 'rem', '2022-04-25 15:05:04'),
(78, '2430007691405238', 'Ratih Safitri', 'Mojokerto', '2007-05-29', 'PEREMPUAN', 'Ki. Suryo No. 433, Bengkulu 53277, MalUt', 'Basket', 'Ville', 'Ambon', 'Kalimantan Utara', 'Indonesia', '011/008', 'HINDU', 'SD / SEDERAJAT', 'KAWIN', 'TETAP', 'qui', '2022-04-25 17:36:02'),
(79, '2430005930812674', 'Lulut Hidayat', 'Batu', '1998-03-05', 'PEREMPUAN', 'Dk. Moch. Toha No. 378, Administrasi Jakarta Pusat 61895, KalSel', 'Baung', 'Ville', 'Metro', 'Nusa Tenggara Timur', 'Indonesia', '011/008', 'ISLAM', 'DIPLOMA I / II', 'BELUM KAWIN', 'KONTRAK', 'voluptatem', '2022-04-25 17:36:02'),
(80, '2430000875236194', 'Gilda Nuraini', 'Jayapura', '2016-11-14', 'PEREMPUAN', 'Psr. Basuki Rahmat  No. 546, Makassar 27577, Gorontalo', 'Umalas', 'Ville', 'Cilegon', 'Lampung', 'Indonesia', '010/001', 'ISLAM', 'STRATA III', 'KAWIN', 'TETAP', 'est', '2022-04-25 17:36:02'),
(81, '2430004852903176', 'Oni Pudjiastuti', 'Sawahlunto', '1994-03-13', 'LAKI-LAKI', 'Ki. Salam No. 77, Tarakan 75620, Maluku', 'Bakau', 'Ville', 'Pematangsiantar', 'Sulawesi Barat', 'Indonesia', '002/003', 'BUDDHA', 'SD / SEDERAJAT', 'KAWIN', 'KONTRAK', 'est', '2022-04-25 17:36:02'),
(82, '2430005283714960', 'Artawan Baktianto Ardianto', 'Kupang', '2010-01-05', 'PEREMPUAN', 'Psr. Basuki No. 319, Probolinggo 49178, SumBar', 'Kalimalang', 'Ville', 'Pangkal Pinang', 'Kalimantan Timur', 'Indonesia', '009/012', 'BUDDHA', 'DIPLOMA IV / STRATA I', 'KAWIN', 'KONTRAK', 'neque', '2022-04-25 17:36:02'),
(83, '2430007428501936', 'Wulan Kiandra Prastuti S.Farm', 'Palu', '1984-04-18', 'LAKI-LAKI', 'Dk. Yogyakarta No. 229, Administrasi Jakarta Pusat 56595, SulUt', 'Zamrud', 'Ville', 'Tangerang Selatan', 'DKI Jakarta', 'Indonesia', '013/009', 'BUDDHA', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'quia', '2022-04-25 17:36:02'),
(84, '2430006521370489', 'Taufan Hidayat', 'Administrasi Jakarta Barat', '2004-04-25', 'LAKI-LAKI', 'Jln. Sadang Serang No. 265, Banjar 12287, KalBar', 'Bayan', 'Ville', 'Gorontalo', 'Sulawesi Utara', 'Indonesia', '009/012', 'KONGHUCU', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'cum', '2022-04-25 17:36:02'),
(85, '2430006315024978', 'Febi Nadine Padmasari', 'Medan', '1983-12-16', 'LAKI-LAKI', 'Psr. Dipenogoro No. 446, Banda Aceh 18624, Bengkulu', 'Yosodipuro', 'Ville', 'Samarinda', 'Bengkulu', 'Indonesia', '010/001', 'BUDDHA', 'DIPLOMA I / II', 'KAWIN', 'TETAP', 'quo', '2022-04-25 17:36:03'),
(86, '2430009483756102', 'Nasrullah Simanjuntak S.Gz', 'Tomohon', '2003-10-15', 'LAKI-LAKI', 'Kpg. Yosodipuro No. 725, Parepare 44354, KalSel', 'Salam', 'Ville', 'Kediri', 'Aceh', 'Indonesia', '002/003', 'KONGHUCU', 'DIPLOMA IV / STRATA I', 'BELUM KAWIN', 'TETAP', 'voluptas', '2022-04-25 17:36:03'),
(87, '2430000597182346', 'Caket Wacana', 'Kotamobagu', '1983-03-24', 'PEREMPUAN', 'Psr. Sukabumi No. 187, Parepare 19831, SulTra', 'Moch. Toha', 'Ville', 'Administrasi Jakarta Utara', 'Kepulauan Riau', 'Indonesia', '010/001', 'KRISTEN', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'deserunt', '2022-04-25 17:36:03'),
(88, '2430009325081467', 'Ida Widya Yulianti', 'Administrasi Jakarta Timur', '1970-02-04', 'LAKI-LAKI', 'Psr. Nanas No. 927, Depok 75713, Banten', 'Nanas', 'Ville', 'Sorong', 'Kalimantan Utara', 'Indonesia', '011/008', 'ISLAM', 'SMA / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'odit', '2022-04-25 17:36:03'),
(89, '2430001869320457', 'Farah Farida M.M.', 'Serang', '1975-05-27', 'LAKI-LAKI', 'Psr. Bagonwoto  No. 303, Binjai 21437, DIY', 'Katamso', 'Ville', 'Cimahi', 'Maluku Utara', 'Indonesia', '009/012', 'KONGHUCU', 'STRATA III', 'BELUM KAWIN', 'TETAP', 'beatae', '2022-04-25 17:36:03'),
(90, '2430004195728063', 'Irnanto Maryadi M.M.', 'Blitar', '2005-02-23', 'PEREMPUAN', 'Dk. Abdul. Muis No. 807, Cilegon 63271, Riau', 'Kyai Gede', 'Ville', 'Tarakan', 'Riau', 'Indonesia', '010/001', 'KONGHUCU', 'STRATA III', 'BELUM KAWIN', 'KONTRAK', 'accusamus', '2022-04-25 17:36:03'),
(91, '2430002389156074', 'Padmi Ella Pudjiastuti', 'Administrasi Jakarta Selatan', '2016-10-05', 'LAKI-LAKI', 'Jr. Banda No. 662, Lhokseumawe 19341, Aceh', 'Ters. Kiaracondong', 'Ville', 'Sawahlunto', 'Jawa Tengah', 'Indonesia', '011/008', 'ISLAM', 'DIPLOMA IV / STRATA I', 'KAWIN', 'TETAP', 'a', '2022-04-25 17:36:03'),
(92, '2430009051842673', 'Dariati Suryono', 'Denpasar', '2015-10-13', 'LAKI-LAKI', 'Ds. Bagis Utama No. 216, Probolinggo 64914, PapBar', 'Gambang', 'Ville', 'Kediri', 'Nusa Tenggara Barat', 'Indonesia', '009/012', 'KRISTEN', 'STRATA III', 'KAWIN', 'TETAP', 'vitae', '2022-04-25 17:36:03'),
(93, '2430001246790835', 'Titin Vera Kuswandari', 'Kotamobagu', '1975-04-04', 'PEREMPUAN', 'Ds. Salak No. 274, Bogor 79217, PapBar', 'Sutarto', 'Ville', 'Padang', 'Aceh', 'Indonesia', '010/001', 'BUDDHA', 'SMA / SEDERAJAT', 'KAWIN', 'TETAP', 'soluta', '2022-04-25 17:36:03'),
(94, '2430008913047256', 'Malika Nuraini', 'Banjarbaru', '2002-01-14', 'PEREMPUAN', 'Kpg. Yap Tjwan Bing No. 879, Pasuruan 88008, DKI', 'Barat', 'Ville', 'Kotamobagu', 'Kalimantan Tengah', 'Indonesia', '002/003', 'KONGHUCU', 'DIPLOMA III', 'BELUM KAWIN', 'TETAP', 'voluptatibus', '2022-04-25 17:36:03'),
(95, '2430004286017953', 'Kezia Yolanda', 'Tidore Kepulauan', '2021-02-20', 'LAKI-LAKI', 'Ki. Abdul Muis No. 354, Padangsidempuan 73715, KalTim', 'Rajawali Timur', 'Ville', 'Banda Aceh', 'Papua Barat', 'Indonesia', '013/009', 'HINDU', 'DIPLOMA IV / STRATA I', 'KAWIN', 'TETAP', 'ut', '2022-04-25 17:36:04'),
(96, '2430002618570349', 'Halima Zulaika', 'Malang', '1994-10-14', 'LAKI-LAKI', 'Gg. Wahidin Sudirohusodo No. 311, Makassar 45987, KalBar', 'Nanas', 'Ville', 'Surabaya', 'Gorontalo', 'Indonesia', '011/008', 'KONGHUCU', 'DIPLOMA III', 'BELUM KAWIN', 'KONTRAK', 'aliquid', '2022-04-25 17:36:04'),
(97, '2430001735906482', 'Fitria Oliva Aryani', 'Bima', '1983-09-09', 'PEREMPUAN', 'Dk. K.H. Maskur No. 322, Sukabumi 69866, SulTra', 'Dahlia', 'Ville', 'Pagar Alam', 'Bali', 'Indonesia', '011/008', 'HINDU', 'SMP / SEDERAJAT', 'KAWIN', 'KONTRAK', 'rerum', '2022-04-25 17:36:04'),
(98, '2430008297513406', 'Ajimat Tarihoran', 'Mojokerto', '1995-03-27', 'PEREMPUAN', 'Ds. Qrisdoren No. 118, Bogor 58868, Jambi', 'Abdul. Muis', 'Ville', 'Cirebon', 'Sulawesi Tengah', 'Indonesia', '011/008', 'HINDU', 'SMA / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'expedita', '2022-04-25 17:36:04'),
(99, '2430008217540396', 'Patricia Hartati S.Psi', 'Tasikmalaya', '1993-02-25', 'PEREMPUAN', 'Ki. B.Agam 1 No. 968, Palopo 83372, KepR', 'Suprapto', 'Ville', 'Tarakan', 'Sulawesi Selatan', 'Indonesia', '013/009', 'HINDU', 'DIPLOMA I / II', 'BELUM KAWIN', 'TETAP', 'neque', '2022-04-25 17:36:04'),
(100, '2430001746820935', 'Ibrahim Natsir', 'Manado', '1989-12-29', 'PEREMPUAN', 'Dk. Sutan Syahrir No. 221, Padang 48205, Bengkulu', 'Yoga', 'Ville', 'Bontang', 'Sulawesi Tengah', 'Indonesia', '002/003', 'KONGHUCU', 'DIPLOMA III', 'KAWIN', 'TETAP', 'sapiente', '2022-04-25 17:36:04'),
(101, '2430003691087452', 'Cahya Edward Hakim', 'Ternate', '2000-07-16', 'LAKI-LAKI', 'Dk. Supomo No. 684, Bandar Lampung 28030, NTT', 'Gambang', 'Ville', 'Ternate', 'Jawa Tengah', 'Indonesia', '002/003', 'BUDDHA', 'DIPLOMA I / II', 'KAWIN', 'TETAP', 'inventore', '2022-04-25 17:36:04'),
(102, '2430002605813749', 'Hasna Zulaika', 'Tangerang', '2014-05-07', 'PEREMPUAN', 'Kpg. Adisumarmo No. 349, Sorong 46039, SulUt', 'PHH. Mustofa', 'Ville', 'Bogor', 'Nusa Tenggara Timur', 'Indonesia', '002/003', 'KONGHUCU', 'STRATA III', 'BELUM KAWIN', 'KONTRAK', 'architecto', '2022-04-25 17:36:04'),
(103, '2430002693540871', 'Umi Anggraini', 'Palangka Raya', '1983-05-01', 'PEREMPUAN', 'Jln. B.Agam 1 No. 47, Bima 63670, DIY', 'Asia Afrika', 'Ville', 'Sungai Penuh', 'Kepulauan Bangka Belitung', 'Indonesia', '011/008', 'ISLAM', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Satpam', '2022-05-31 15:44:37'),
(104, '2430009802716354', 'Nilam Iriana Susanti', 'Padang', '2011-09-08', 'PEREMPUAN', 'Jr. Barasak No. 631, Pematangsiantar 28945, Aceh', 'Bappenas', 'Ville', 'Mataram', 'Papua', 'Indonesia', '011/008', 'KONGHUCU', 'SMA / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'Dokter', '2022-05-31 15:44:37'),
(105, '2430004508321967', 'Empluk Xanana Hutasoit S.Farm', 'Kotamobagu', '2009-06-25', 'PEREMPUAN', 'Ki. Ciumbuleuit No. 272, Palembang 66440, Bali', 'Untung Suropati', 'Ville', 'Tual', 'Sumatera Selatan', 'Indonesia', '009/012', 'ISLAM', 'SD / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Buruh Nelayan / Perikanan', '2022-05-31 15:44:37'),
(106, '2430007014859632', 'Gamanto Halim', 'Payakumbuh', '2009-09-20', 'LAKI-LAKI', 'Psr. Laswi No. 394, Pariaman 44826, Jambi', 'Flores', 'Ville', 'Sibolga', 'Kalimantan Selatan', 'Indonesia', '010/001', 'HINDU', 'DIPLOMA III', 'BELUM KAWIN', 'KONTRAK', 'Penyiar Televisi', '2022-05-31 15:44:37'),
(107, '2430006397052814', 'Icha Aryani', 'Tangerang', '1986-01-05', 'PEREMPUAN', 'Jr. Babadak No. 555, Probolinggo 51016, Malut', 'Suryo', 'Ville', 'Palangka Raya', 'Bali', 'Indonesia', '013/009', 'ISLAM', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Guru', '2022-05-31 15:44:37'),
(108, '2430006205381974', 'Maya Andriani', 'Gunungsitoli', '2006-04-30', 'LAKI-LAKI', 'Gg. Gajah Mada No. 721, Sorong 52584, Kaltim', 'Tubagus Ismail', 'Ville', 'Ambon', 'Kalimantan Barat', 'Indonesia', '009/012', 'KONGHUCU', 'SMP / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Pramusaji', '2022-05-31 15:44:37'),
(109, '2430006539814072', 'Wani Widiastuti', 'Balikpapan', '1985-07-12', 'LAKI-LAKI', 'Ki. Babadak No. 131, Tangerang Selatan 41017, Sulut', 'Orang', 'Ville', 'Tegal', 'Sumatera Barat', 'Indonesia', '010/001', 'ISLAM', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Kondektur', '2022-05-31 15:44:37'),
(110, '2430000765398421', 'Mulyanto Uwais', 'Palopo', '1978-05-01', 'PEREMPUAN', 'Ds. Bakau No. 824, Solok 12960, Kalsel', 'Untung Suropati', 'Ville', 'Bengkulu', 'DKI Jakarta', 'Indonesia', '010/001', 'ISLAM', 'SMA / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Presiden', '2022-05-31 15:44:37'),
(111, '2430005604372189', 'Siti Namaga', 'Tarakan', '1980-04-12', 'PEREMPUAN', 'Jr. Orang No. 462, Madiun 70987, Kepri', 'Pelajar Pejuang 45', 'Ville', 'Magelang', 'Sulawesi Selatan', 'Indonesia', '013/009', 'ISLAM', 'DIPLOMA III', 'KAWIN', 'TETAP', 'Karyawan Swasta', '2022-05-31 15:44:38'),
(112, '2430009173485026', 'Hani Amalia Andriani S.E.I', 'Sawahlunto', '2008-11-22', 'LAKI-LAKI', 'Kpg. Bakaru No. 219, Binjai 56583, Kalteng', 'Kusmanto', 'Ville', 'Ambon', 'Jawa Timur', 'Indonesia', '010/001', 'BUDDHA', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Wartawan', '2022-05-31 15:44:38'),
(113, '2430003857194206', 'Yosef Simanjuntak M.TI.', 'Sibolga', '2020-08-20', 'LAKI-LAKI', 'Dk. Raden Saleh No. 632, Administrasi Jakarta Selatan 92766, Sulsel', 'Abdul', 'Ville', 'Banjar', 'Sulawesi Selatan', 'Indonesia', '002/003', 'HINDU', 'STRATA III', 'KAWIN', 'TETAP', 'Akuntan', '2022-05-31 15:44:38'),
(114, '2430008724351906', 'Melinda Aisyah Mandasari S.IP', 'Pariaman', '1981-02-11', 'PEREMPUAN', 'Jln. Madiun No. 932, Ternate 83139, Sumsel', 'Yosodipuro', 'Ville', 'Manado', 'Kalimantan Selatan', 'Indonesia', '009/012', 'ISLAM', 'SMP / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Tabib', '2022-05-31 15:44:38'),
(115, '2430005390178642', 'Aisyah Handayani', 'Administrasi Jakarta Utara', '1988-08-01', 'PEREMPUAN', 'Gg. Padma No. 661, Bontang 99407, Kaltara', 'Zamrud', 'Ville', 'Batu', 'Jawa Barat', 'Indonesia', '010/001', 'ISLAM', 'DIPLOMA I / II', 'BELUM KAWIN', 'TETAP', 'Buruh Nelayan / Perikanan', '2022-05-31 15:44:38'),
(116, '2430007931806425', 'Gading Latupono', 'Pagar Alam', '1983-05-12', 'LAKI-LAKI', 'Dk. Sukajadi No. 14, Magelang 10788, Babel', 'Kebonjati', 'Ville', 'Sukabumi', 'Bengkulu', 'Indonesia', '013/009', 'KRISTEN', 'SD / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Guru', '2022-05-31 15:44:38'),
(117, '2430001530268479', 'Mutia Rahayu S.E.', 'Gorontalo', '2005-05-30', 'LAKI-LAKI', 'Jr. Suprapto No. 10, Probolinggo 44690, Jambi', 'Baja', 'Ville', 'Bandung', 'Lampung', 'Indonesia', '002/003', 'KRISTEN', 'DIPLOMA IV / STRATA I', 'BELUM KAWIN', 'TETAP', 'Buruh Peternakan', '2022-05-31 15:44:38'),
(118, '2430006837094152', 'Rizki Reza Pratama', 'Cilegon', '1972-10-26', 'PEREMPUAN', 'Jln. Bass No. 895, Dumai 50466, Sumbar', 'Dipatiukur', 'Ville', 'Madiun', 'Aceh', 'Indonesia', '010/001', 'BUDDHA', 'STRATA III', 'BELUM KAWIN', 'TETAP', 'Pramugari', '2022-05-31 15:44:38'),
(119, '2430002513647908', 'Ulya Malika Purwanti', 'Administrasi Jakarta Barat', '2011-12-09', 'LAKI-LAKI', 'Ds. Cihampelas No. 900, Banjar 26870, Maluku', 'Halim', 'Ville', 'Bontang', 'Kalimantan Timur', 'Indonesia', '010/001', 'ISLAM', 'DIPLOMA I / II', 'KAWIN', 'TETAP', 'Pegawai Negeri Sipil (PNS)', '2022-05-31 15:44:38'),
(120, '2430001820647935', 'Bambang Waskita', 'Tarakan', '1986-04-05', 'LAKI-LAKI', 'Jln. Raden No. 246, Kendari 46933, Gorontalo', 'Orang', 'Ville', 'Tarakan', 'Riau', 'Indonesia', '002/003', 'HINDU', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'Tukang Batu', '2022-05-31 15:44:38'),
(121, '2430007920415863', 'Janet Palastri', 'Subulussalam', '2007-03-02', 'LAKI-LAKI', 'Gg. Cut Nyak Dien No. 769, Makassar 93057, Jambi', 'Cokroaminoto', 'Ville', 'Magelang', 'Nusa Tenggara Timur', 'Indonesia', '011/008', 'KONGHUCU', 'DIPLOMA III', 'BELUM KAWIN', 'KONTRAK', 'Konstruksi', '2022-05-31 15:44:38'),
(122, '2430002183460975', 'Tantri Handayani', 'Langsa', '2006-02-15', 'PEREMPUAN', 'Kpg. M.T. Haryono No. 33, Gunungsitoli 69532, Bali', 'Otto', 'Ville', 'Tegal', 'Gorontalo', 'Indonesia', '010/001', 'KRISTEN', 'SMA / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'Buruh Peternakan', '2022-05-31 15:44:38'),
(123, '2430003210695487', 'Balidin Sinaga', 'Bukittinggi', '1997-06-22', 'PEREMPUAN', 'Jr. Pasirkoja No. 863, Tasikmalaya 40028, DKI', 'Gatot Subroto', 'Ville', 'Balikpapan', 'Kalimantan Selatan', 'Indonesia', '002/003', 'BUDDHA', 'DIPLOMA IV / STRATA I', 'BELUM KAWIN', 'KONTRAK', 'Penulis', '2022-05-31 15:44:38'),
(124, '2430001847206539', 'Cawuk Hidayat', 'Malang', '1989-03-13', 'PEREMPUAN', 'Dk. Baabur Royan No. 2, Yogyakarta 78052, Bengkulu', 'Ekonomi', 'Ville', 'Tual', 'DI Yogyakarta', 'Indonesia', '002/003', 'HINDU', 'DIPLOMA III', 'BELUM KAWIN', 'KONTRAK', 'Perawat', '2022-05-31 15:44:38'),
(125, '2430005649812037', 'Yusuf Suryono', 'Pekalongan', '2006-03-26', 'PEREMPUAN', 'Dk. Tentara Pelajar No. 209, Tomohon 82596, Sumsel', 'Salatiga', 'Ville', 'Semarang', 'Jawa Timur', 'Indonesia', '011/008', 'BUDDHA', 'STRATA III', 'BELUM KAWIN', 'TETAP', 'Pensiunan', '2022-05-31 15:44:38'),
(126, '2430004269531780', 'Elvin Prasetyo', 'Bukittinggi', '1995-12-24', 'PEREMPUAN', 'Gg. Bah Jaya No. 639, Banjar 98372, Papua', 'Bakhita', 'Ville', 'Denpasar', 'Maluku', 'Indonesia', '011/008', 'HINDU', 'SD / SEDERAJAT', 'KAWIN', 'TETAP', 'Tukang Sol Sepatu', '2022-05-31 15:44:38'),
(127, '2430004539180726', 'Gadang Dabukke', 'Medan', '1976-04-04', 'LAKI-LAKI', 'Dk. Bahagia No. 151, Tebing Tinggi 95412, NTB', 'Basoka Raya', 'Ville', 'Solok', 'Sumatera Utara', 'Indonesia', '010/001', 'BUDDHA', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Sopir', '2022-05-31 15:44:38'),
(128, '2430006372189045', 'Raditya Wadi Wahyudin', 'Payakumbuh', '1986-11-11', 'PEREMPUAN', 'Jr. Baja Raya No. 101, Bandar Lampung 14123, Maluku', 'Industri', 'Ville', 'Tangerang Selatan', 'Sulawesi Selatan', 'Indonesia', '002/003', 'KRISTEN', 'SMA / SEDERAJAT', 'BELUM KAWIN', 'KONTRAK', 'Konstruksi', '2022-05-31 15:44:39'),
(129, '2430009681705342', 'Nyana Saefullah', 'Administrasi Jakarta Barat', '2006-01-11', 'LAKI-LAKI', 'Ds. Flores No. 42, Lubuklinggau 78233, DKI', 'Gardujati', 'Ville', 'Tebing Tinggi', 'Kalimantan Barat', 'Indonesia', '002/003', 'BUDDHA', 'STRATA III', 'BELUM KAWIN', 'KONTRAK', 'Karyawan Honorer', '2022-05-31 15:44:39'),
(130, '2430006795283041', 'Wawan Yoga Maulana S.IP', 'Administrasi Jakarta Selatan', '1995-02-10', 'PEREMPUAN', 'Kpg. Teuku Umar No. 736, Bitung 38096, Kalteng', 'Cut Nyak Dien', 'Ville', 'Makassar', 'Nusa Tenggara Barat', 'Indonesia', '013/009', 'BUDDHA', 'STRATA II', 'KAWIN', 'KONTRAK', 'Pialang', '2022-05-31 15:44:39'),
(131, '2430006513840279', 'Hesti Purnawati', 'Bengkulu', '2002-09-18', 'LAKI-LAKI', 'Dk. Tubagus Ismail No. 619, Sabang 52233, NTT', 'Lada', 'Ville', 'Sibolga', 'Nusa Tenggara Barat', 'Indonesia', '013/009', 'HINDU', 'SMA / SEDERAJAT', 'KAWIN', 'KONTRAK', 'Pialang', '2022-05-31 15:44:39'),
(132, '2430005413897062', 'Nova Dalima Mayasari', 'Dumai', '1974-10-09', 'LAKI-LAKI', 'Ds. Baja No. 54, Palopo 33535, Pabar', 'Pasir Koja', 'Ville', 'Tanjung Pinang', 'Banten', 'Indonesia', '013/009', 'ISLAM', 'SMP / SEDERAJAT', 'BELUM KAWIN', 'TETAP', 'Penulis', '2022-05-31 15:44:39'),
(133, '2430008614207359', 'Nadia Titi Anggraini S.Psi', 'Tebing Tinggi', '2002-05-12', 'PEREMPUAN', 'Jln. Baranang Siang No. 968, Solok 40150, Kaltara', 'Baladewa', 'Ville', 'Serang', 'Kalimantan Selatan', 'Indonesia', '013/009', 'HINDU', 'DIPLOMA IV / STRATA I', 'BELUM KAWIN', 'TETAP', 'Konstruksi', '2022-05-31 15:44:39'),
(134, '2430003786512409', 'Sarah Halima Wahyuni M.M.', 'Batu', '1977-12-27', 'PEREMPUAN', 'Ki. Salam No. 534, Magelang 74562, Aceh', 'Basket', 'Ville', 'Mataram', 'Sulawesi Tengah', 'Indonesia', '009/012', 'ISLAM', 'STRATA III', 'BELUM KAWIN', 'TETAP', 'Tukang Batu', '2022-05-31 15:44:39'),
(135, '2430002830196574', 'Siti Raisa Usamah S.Pd', 'Padangpanjang', '1970-06-20', 'LAKI-LAKI', 'Ds. Surapati No. 710, Sorong 67268, Kaltim', 'Karel S. Tubun', 'Ville', 'Lhokseumawe', 'Jawa Barat', 'Indonesia', '010/001', 'ISLAM', 'SMP / SEDERAJAT', 'KAWIN', 'TETAP', 'Dosen', '2022-05-31 15:44:39'),
(136, '2430006729315840', 'Yessi Nurdiyanti S.Psi', 'Bima', '2001-11-17', 'PEREMPUAN', 'Jr. Kali No. 523, Cilegon 20586, NTB', 'Soekarno Hatta', 'Ville', 'Sorong', 'Sulawesi Tengah', 'Indonesia', '013/009', 'HINDU', 'DIPLOMA I / II', 'BELUM KAWIN', 'TETAP', 'Dosen', '2022-05-31 15:44:39'),
(137, '2430004276359081', 'Prayoga Mangunsong', 'Banda Aceh', '1997-12-25', 'LAKI-LAKI', 'Jr. Banal No. 278, Makassar 69521, Sulsel', 'Sudirman', 'Ville', 'Semarang', 'Maluku Utara', 'Indonesia', '013/009', 'KRISTEN', 'SMA / SEDERAJAT', 'KAWIN', 'TETAP', 'Belum / Tidak Bekerja', '2022-05-31 15:44:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
