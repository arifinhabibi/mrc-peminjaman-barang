-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220509.f95b261844
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 10:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrc_aplikasi_gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `name`) VALUES
(1, 'Deden Suryanto, M.Pd.'),
(2, 'H. Saepul Palah, M. Ag'),
(3, 'Dra. Hj. Mulya Rohati'),
(4, 'Dra. Hj. Heti Perdiati'),
(5, 'Dra. Hj. Yuyun Yuningsih'),
(6, 'Hj. Herlinawati, S.Pd.'),
(7, 'Iin Irmayanti, S.Pd.'),
(8, 'Siti Maryam, S.Pd.'),
(9, 'Dra. Imas Masitoh'),
(10, 'Sri Lestari, SP.'),
(11, 'Ide Kadar Gumelar, S.Pd.'),
(12, 'Pepen Apendi, S.Pd., M.Pd.I.'),
(13, 'Deddy  Hudaya, S.Si.'),
(14, 'Retti Sulistiawati, S.Si.'),
(15, 'Dra. Nining Hernidah'),
(16, 'Dra. Carsih'),
(17, 'Dra. Hj. Yayah Bahriah'),
(18, 'Siti Halimah, S.Pd.'),
(19, 'Ahmad Ruhyanto, S.Pd.'),
(20, 'Ismiyanti, S.Pd.'),
(21, 'Elis Waliah, S.Ag.'),
(22, 'Nana Anggraeni, S.Pd.'),
(23, 'Aam Amalia, S.Pd.'),
(24, 'Hj. Chairzawati, SE.'),
(25, 'Puttu Aliyah Setia Raya, S.Pd.'),
(26, 'Siti Maemunah, S.Pd., M.M.Pd.'),
(27, 'Dini Wulandari, S.Pd.'),
(28, 'Titah Utami, S.Pd.'),
(29, 'Ratinah, S.Pd.'),
(30, 'Aang Awaludin, S.Pd.I.'),
(31, 'Agus Wahyu, S.Pd.'),
(32, 'Aca Supriatna, S.Pd.'),
(33, 'Tophan Akbar, S.Kom.'),
(34, 'Deni Muliana, S.Pd.'),
(35, 'Iin Indriasari, S.Pd.'),
(36, 'Asep Saepuloh, S.S.'),
(37, 'Nia Amalia, S.Pd.'),
(38, 'Ai Sa\'adatuddaroin, S.Pd.'),
(39, 'Asep Rohendi, S.Pd.'),
(40, 'Buyung Supriadi, S.S.'),
(41, 'Dani Nur Muhamad, S.E.'),
(42, 'Asep Zainal Arifin, S.Pd.I.'),
(43, 'Reffa Noviyanti DJ, S.S'),
(44, 'Lia Yuliasari, S.Pd.'),
(45, 'Anggi Widiawati, S.Pd.'),
(46, 'Dian Maelani, S.Pd.'),
(47, 'Ari Wahyu Dani, ST.'),
(48, 'Asep Komara, S.Pd.'),
(49, 'Ihat, S.Pd.'),
(50, 'Heni Juwita Santosa, S.Pd.'),
(51, 'Arija Fitriyah, S.Pd.'),
(52, 'Mas Achmad Yusuf Wibisono, ST'),
(53, 'Wahyu Mulyadi, ST.'),
(54, 'Asep Dani  Noviandi, S.An.'),
(55, 'Rizal Suyaman S.Kom.'),
(56, 'Eko Agus Prasetiyo, S.Pd.'),
(57, 'Surlem, S.Pd.'),
(58, 'Yusuf Ramdhani, S.Pd.'),
(59, 'Asep Ramdan Taufiq, S.Pd.'),
(60, 'Firmansyah, S.T'),
(61, 'Fajar Dwi Ramadhani, S.Pd.'),
(62, 'Keresna Bayu Wijaya Kusuma, S.Pd.'),
(63, 'Regina Srinita Chatulistiwa Putri, S.Pd.'),
(64, 'Nunung Nuraeni, S.Sos, M.AP'),
(65, 'Johan Suhendi, ST'),
(66, 'Setyasih, S.E.'),
(67, 'Isep Rahmanto, S.T.'),
(68, 'Deni Ariyanto, S. Pd'),
(69, 'Dian Murdiana, S.Pd.'),
(70, 'Deni Rahman Hakim, S.Pd.'),
(71, 'Hari Suprayoga, S.T'),
(72, 'Irwan Saputra, S.Pd.'),
(73, 'Asep Ridwan, S.T'),
(74, 'Giyan Ramdhani, S.Pd'),
(75, 'Intjer Kurnia Syukur, S.T'),
(76, 'Guntur Widianto, S.T'),
(77, 'Wendy Supriatna, S.Pd.'),
(78, 'Wida Widianingsih, S.Pd'),
(79, 'Lutfi Noviandi, S.Sos'),
(80, 'Lusy Yusmaniar, S.Pd'),
(81, 'Muhammad Usep Saepudin, S.Ds'),
(82, 'Rikawati, S.Mn.'),
(83, 'Rahmat Hidayat, S.Pd.'),
(84, 'Rika Tri Mulyawati, S.Pd.'),
(85, 'Fahmi Ibrahim S., S.Pd.'),
(86, 'Hafizh Handitia, S.Pd.'),
(87, 'Cahya Nurhaeni, S.Pd.'),
(88, 'Kartiwi, S.Pd.I.'),
(89, 'Gelar Laksana Cita, S.Pd.'),
(90, 'Egi Nugraha, S.Kom.'),
(91, 'Sahilan, S.Pd.I.'),
(92, 'Tina Mulayyinatun Nisa, S.Pd.'),
(93, 'Iis Ismawati, S.Pd.'),
(94, 'Lisna Herliani, S.Pd.I.'),
(95, 'Dina Maryati, S.Pd.'),
(96, 'Hibar Rahayu, S.Pd.'),
(97, 'Sri Andani, S.Pd.'),
(98, 'Retno Novia Andriani, S.Kom'),
(99, 'Nani Suryani, S.Pd.'),
(100, 'Dede Iskandar, S.T.'),
(101, 'Septi Mayang Saputri, S.Pd.'),
(102, 'Iin Solihin, M.Pd.'),
(103, 'Reza Pratama Putra, S.Pd.'),
(104, 'Ela Nurlela, S.Pd.'),
(105, 'Meilita Nur Hasanah, SE.'),
(106, 'Cindy Diana Ratnasari, S.Pd.'),
(107, 'Lela Anggrayani, S.Pd.'),
(108, 'Ajat Sutiawan, S.Pd.'),
(109, 'Muhamad Abdul Hadi, S.Pd.'),
(110, 'Wida Kurnia, S.Ds.'),
(111, 'Yayang Willy Rukmana S.Ds.'),
(112, 'Melly Anggraeni, S.Pd'),
(113, 'Fajar Harapan, S.Psi., M.Pd.'),
(114, 'Afiifatunnisaa, S.Sos.'),
(115, 'Hermawati Setyani Aksari, S.Pd.'),
(116, 'Taufik Dzikri Pangestu, S.Pd.'),
(117, 'Putri Maulida Hutami, S.Pd.'),
(118, 'Anggun Sari Apriyani, S.Pd.'),
(119, 'Faisal Akbar, SE.'),
(120, 'Rizky Hakiki, ST.'),
(121, 'Sapa Oktapiani, S.Pd.'),
(122, 'Lisna Nurjanah, SE.,M.M.Pd.'),
(123, 'Hj. Nia Heni Kania'),
(124, 'Kosasih, S.T.'),
(125, 'Anih, S.Pd.SD'),
(126, 'Ade Rusmini, S.Sos.'),
(127, 'Redi Sugeng Hariyanto'),
(128, 'Yayan Daryani'),
(129, 'Budi Budiman'),
(130, 'Beni Margani'),
(131, 'Rizky Akbar Juliana'),
(132, 'Linda Cahyati, S.S.'),
(133, 'Apud Mahpudin'),
(134, 'Didi Mulyadi'),
(135, 'Sunardi'),
(136, 'Rony Saputra Rajali, S.Tr.T'),
(137, 'Tasdim'),
(138, 'Saripudin'),
(139, 'Sidik Zatnika, S.Pd.'),
(140, 'Puteri Amelia, S.Pd.'),
(141, 'Nurfitria Dewi, S.IP.'),
(142, 'Aji Wisnu Mulyana, S.AN.'),
(143, 'Eva Nia Meilinda R., S.Pd.'),
(144, 'Endang Taufik'),
(145, 'Wiwin Nursadiah, S.I.Kom.'),
(146, 'Ayo Sunaryo'),
(147, 'Yani Suryani'),
(148, 'Muhamad Sulaeman'),
(149, 'Riska Komalasari, A.md.Kom.'),
(150, 'Muhamad Dian Maulana'),
(151, 'Rismawati'),
(152, 'Wildan Firmansyah'),
(153, 'Cahya Ramdan Syah'),
(154, 'Firman Ali Budiansyah'),
(155, 'Ajat Sudrajat'),
(156, 'Methi Agustine, S.Tr.Log.'),
(157, 'Hendra Cipta'),
(158, 'Aldy Agustiansyah'),
(159, 'Ahmad Hakim Makarim'),
(160, 'Yola Himayanti'),
(161, 'Gigin Ginanjar'),
(162, 'Pepep Saepudin'),
(163, 'Wiharna Febrian'),
(164, 'Dhea Anggita Dewi'),
(165, 'Karno');

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
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `borrower` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` bigint(20) UNSIGNED DEFAULT NULL,
  `goods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `necessity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_loan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_goods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'belum',
  `date_return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_03_070917_create_barangs_table', 1),
(6, '2022_11_03_120501_create_borrowers_table', 1),
(7, '2022_11_03_143318_create_loans_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$aeA8Swwh6zwohDQWvYAUVOsj.dj2SiuXDK9IWkMnhOTrW1jVEALNK', '2022-11-04 02:00:40', '2022-11-04 02:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
