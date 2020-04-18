-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2020 at 08:36 AM
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
-- Database: `CRUDL`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_09_154633_create_product_table', 2),
(4, '2020_04_09_155419_create_persediaanbarang_table', 3),
(5, '2014_10_12_100000_create_password_resets_table', 4),
(6, '2020_04_07_091504_create_products_table', 4),
(7, '2020_04_09_094454_create_barangs_table', 4),
(8, '2020_04_18_040832_create_barangtakterpakais_table', 4),
(9, '2020_04_18_051725_create_persediaanakhirs_table', 5),
(10, '2020_04_18_055740_create_laporanbarangs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `persediaanbarang`
--

CREATE TABLE `persediaanbarang` (
  `id` int(10) UNSIGNED NOT NULL,
  `kodebarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargapokok` int(11) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persediaanbarang`
--

INSERT INTO `persediaanbarang` (`id`, `kodebarang`, `namabarang`, `hargapokok`, `hargajual`, `jumlah`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Aqua Botol', 3000, 3500, 100, 350000, NULL, NULL),
(3, 'A02', 'Stella Home Air Freshener Apple Fiesta', 27000, 29000, 50, 1450000, NULL, NULL),
(8, 'A03', 'Kursi Mainan', 30000, 35000, 100, 3500000, NULL, NULL),
(9, 'A04', 'Sosro Fruit Tea Apel', 3200, 3000, 100, 3000000, NULL, NULL),
(10, 'A05', 'Lampu Bohlam', 15000, 14500, 100, 1450000, NULL, NULL),
(12, 'A06', 'Kopi Kapal API', 14000, 12500, 100, 12500000, NULL, NULL),
(13, 'A07', 'Buku Komik Petruk Gareng', 6199, 35366, 61, 6674051, NULL, NULL),
(14, 'A08', 'Gelas Kaca', 39201, 44989, 25, 4750521, NULL, NULL),
(15, 'A09', 'Piring Kaca', 36182, 19746, 40, 7205701, NULL, NULL),
(16, 'A10', 'Keset Lantai', 20521, 12112, 81, 7069293, NULL, NULL),
(17, 'A11', 'Marjan Melon', 48143, 26401, 81, 7276066, NULL, NULL),
(18, 'A12', 'Plastik Bungkus', 46170, 9402, 42, 6554336, NULL, NULL),
(19, 'A13', 'Wadah Es Batu', 48393, 64077, 66, 4783705, NULL, NULL),
(20, 'A14', 'Freshcare', 35467, 12328, 14, 4617547, NULL, NULL),
(21, 'A15', 'Permen Frozz', 35522, 50838, 43, 6410683, NULL, NULL),
(22, 'B01', 'Gantungan Baju', 37028, 64367, 70, 1160636, NULL, NULL),
(23, 'B02', 'Pulpen', 19182, 44284, 3, 3604897, NULL, NULL),
(24, 'B03', 'Spidol', 29713, 8913, 73, 3826828, NULL, NULL),
(25, 'B04', 'Lampu Bohlam', 22186, 42612, 73, 6301171, NULL, NULL),
(26, 'B05', 'Energen Coklat', 42232, 39678, 77, 4465449, NULL, NULL),
(27, 'B06', 'Energen Vanilla', 28582, 62184, 53, 8014791, NULL, NULL),
(28, 'B07', 'Energen Kacang HIjau', 36601, 18793, 35, 3675864, NULL, NULL),
(29, 'B08', 'Energen Jahe', 42621, 48206, 20, 1575941, NULL, NULL),
(30, 'B09', 'Luwak White Coffee', 10750, 45544, 4, 5542780, NULL, NULL),
(31, 'B10', 'Luwak White Coffee Arabic', 46156, 49392, 78, 4310103, NULL, NULL),
(32, 'B11', 'Anget Sari Susu Jahe', 41128, 65451, 59, 4562336, NULL, NULL),
(33, 'B12', 'Freshco Kopi Susu', 37001, 42150, 74, 5885692, NULL, NULL),
(34, 'B13', 'Freshco Mocca', 43522, 50299, 64, 2353581, NULL, NULL),
(35, 'B14', 'Kopi ABC susu', 17109, 10051, 62, 2145757, NULL, NULL),
(36, 'B15', 'Kopi ABC Mocca', 11630, 14232, 11, 8752878, NULL, NULL),
(37, 'C01', 'Kabel Listrik', 32483, 11248, 60, 5929527, NULL, NULL),
(38, 'C02', 'Baterai ABC AAA', 32514, 15892, 49, 8072588, NULL, NULL),
(39, 'C03', 'Baterai ABC AA', 11082, 21418, 84, 4670971, NULL, NULL),
(40, 'C04', 'Baterai ABC A', 8485, 26226, 51, 5146295, NULL, NULL),
(41, 'C05', 'Baterai ABC Alkaline', 39645, 57886, 2, 8720629, NULL, NULL),
(42, 'C06', 'Sekarung Beras Tani', 38371, 5921, 67, 3502343, NULL, NULL),
(43, 'C07', 'youC1000 Lemon Water', 15855, 57568, 87, 4195347, NULL, NULL),
(44, 'C08', 'youC1000 Orange Water', 15467, 16105, 56, 7899358, NULL, NULL),
(45, 'C09', 'youC1000 Apple', 23037, 21637, 27, 3540738, NULL, NULL),
(46, 'C10', 'youC1000 Orange', 49726, 61055, 28, 5673552, NULL, NULL),
(47, 'C11', 'youC1000 Lemon', 20427, 28220, 78, 7983668, NULL, NULL),
(48, 'C12', 'Aqua Gelas', 44107, 65374, 76, 7926046, NULL, NULL),
(49, 'C13', 'Yakult', 23596, 23177, 28, 9873277, NULL, NULL),
(50, 'C14', 'Teh Gelas', 38472, 46253, 50, 3492571, NULL, NULL),
(51, 'C15', 'Teh RIO', 5271, 11844, 84, 3090808, NULL, NULL),
(52, 'D01', 'Teh Sisri', 11252, 14223, 74, 6964036, NULL, NULL),
(53, 'D02', 'Tea Jus', 13479, 57909, 77, 5817340, NULL, NULL),
(54, 'D03', 'Jas Jus', 37594, 51143, 66, 9070092, NULL, NULL),
(55, 'D04', 'Marimas', 28780, 30967, 99, 5760268, NULL, NULL),
(56, 'D05', 'Milkuat', 16631, 64121, 42, 3140261, NULL, NULL),
(57, 'D06', 'Pulpen Standard Hitam', 16355, 63222, 87, 4892362, NULL, NULL),
(58, 'D07', 'Pulpen Standard Biru', 31041, 36268, 25, 5581321, NULL, NULL),
(59, 'D08', 'Pulpen Standard Merah', 17084, 55754, 41, 1088178, NULL, NULL),
(60, 'D09', 'Pulpen PILOT', 11196, 50701, 67, 8818078, NULL, NULL),
(61, 'D10', 'Pulpen PILOT BIRU', 49002, 17354, 39, 8108940, NULL, NULL),
(62, 'D11', 'Garnier ', 20700, 17070, 87, 5413603, NULL, NULL),
(63, 'D12', 'Garnier Vitamin C', 13776, 66395, 89, 5749522, NULL, NULL),
(64, 'D13', 'Garnier Men Ice Charcool', 46546, 43921, 40, 7206527, NULL, NULL),
(65, 'D14', 'Garnier Men Wasabi', 18802, 62164, 61, 1363500, NULL, NULL),
(66, 'D15', 'Garnier Men', 9226, 12348, 14, 7940750, NULL, NULL),
(67, 'E01', 'Ponds White', 5896, 36827, 38, 7757772, NULL, NULL),
(68, 'E02', 'Ponds', 21750, 56789, 25, 1328494, NULL, NULL),
(69, 'E03', 'Ponds Men', 29571, 66994, 74, 9954312, NULL, NULL),
(70, 'E04', 'Ponds Men Ice', 10271, 34542, 83, 1788086, NULL, NULL),
(71, 'E05', 'Ponds Men Oil', 19345, 33314, 9, 1403358, NULL, NULL),
(72, 'E06', 'Sabun LIfebuoy', 18453, 54079, 6, 7998376, NULL, NULL),
(73, 'E07', 'Sabun Nuvo', 36201, 44704, 4, 7548614, NULL, NULL),
(74, 'E08', 'Sabun Lux', 36040, 51125, 76, 6607237, NULL, NULL),
(75, 'E09', 'Sabun GIV', 20666, 50567, 6, 2679082, NULL, NULL),
(76, 'E10', 'Sabun Wangi', 18201, 31682, 37, 5017943, NULL, NULL),
(77, 'E11', 'Shampoo Clear', 14765, 5989, 64, 2762508, NULL, NULL),
(78, 'E12', 'Shampoo Lifebuoy', 41997, 27379, 6, 1358252, NULL, NULL),
(79, 'E13', 'Shampoo Sunsilk', 44014, 24271, 76, 5185071, NULL, NULL),
(80, 'E14', 'Shampoo Clear Men', 42165, 65580, 98, 9842112, NULL, NULL),
(81, 'E15', 'Shampoo Rejoice', 7029, 24638, 60, 8065905, NULL, NULL),
(82, 'F01', 'Pomade Clear', 40707, 53896, 16, 3131893, NULL, NULL),
(83, 'F02', 'Pomade Gatsby Merah', 40361, 24081, 8, 1333061, NULL, NULL),
(84, 'F03', 'Pomade Gatsby Biru', 44352, 18971, 26, 8647432, NULL, NULL),
(85, 'F04', 'Pomade Gatsby Biru', 12266, 40594, 93, 8298711, NULL, NULL),
(86, 'F05', 'Pomade Gatsby Ungu', 32561, 21562, 31, 7248059, NULL, NULL),
(87, 'F06', 'Earphone Pionner SE-C3T', 7661, 5014, 54, 8289688, NULL, NULL),
(88, 'F07', 'Earphone Zenith', 19262, 28882, 50, 7509417, NULL, NULL),
(89, 'F08', ' Earphone RM-580', 20337, 22351, 89, 6578576, NULL, NULL),
(90, 'F09', 'Earphone In Ear JBL', 36946, 55449, 17, 4635630, NULL, NULL),
(91, 'F10', 'Earphone Armageddon Mark 5', 24143, 32716, 62, 5638693, NULL, NULL),
(92, 'F11', 'Earphone KB-Ear KBEAR F1', 8526, 69529, 14, 9696782, NULL, NULL),
(93, 'F12', 'Earphone Zenith Pure Balance Armature Earphone', 23603, 55521, 32, 9833367, NULL, NULL),
(94, 'F13', 'Earphone Earbuds Headset Sennheiser', 36338, 57997, 63, 1308731, NULL, NULL),
(95, 'F14', 'Earphone Philips Headphone in Ear', 21774, 66608, 90, 3908787, NULL, NULL),
(96, 'F15', 'Earphone Sony in-Ear Phone', 5241, 55057, 71, 8013801, NULL, NULL),
(97, 'G01', 'Nabati Richeese Wafer', 33364, 50969, 78, 1891594, NULL, NULL),
(98, 'G02', 'Nabati Richoco Wafer', 29955, 55590, 53, 9470976, NULL, NULL),
(99, 'G03', 'Nabati Richoco Wafer White', 49080, 21002, 86, 8602017, NULL, NULL),
(100, 'G04', 'Nabati Richeese Wafer Kelapa', 27931, 21575, 11, 5682804, NULL, NULL),
(101, 'G05', 'Nabati Richeese Wafer Pink Lava', 26805, 16431, 23, 3712916, NULL, NULL),
(102, 'G06', 'Taro Net Pizza Italian', 43137, 18767, 56, 2100119, NULL, NULL),
(103, 'G07', 'Taro Net Cowboy Stick', 43132, 62221, 75, 2460805, NULL, NULL),
(104, 'G08', 'Taro Net Snack Potato', 29103, 67897, 74, 5132372, NULL, NULL),
(105, 'G09', 'Taro Net Seaweed', 42106, 22794, 70, 6310065, NULL, NULL),
(106, 'G10', 'French Fries 2000', 26401, 16906, 14, 7112893, NULL, NULL),
(113, 'G11', 'Sunlight', 7000, 7500, 100, 7500000, NULL, NULL),
(114, 'G12', 'Sponge Cuci Piring', 6500, 7000, 1000, 7000000, NULL, NULL),
(116, 'G13', 'Spatula Pengoreng', 10000, 11000, 100, 1100000, NULL, NULL),
(119, 'G14', 'Minyak Goreng', 15000, 14500, 100, 1450000, NULL, NULL),
(120, 'G15', 'Mie Indomie', 2000, 2500, 100, 2500000, NULL, NULL),
(121, 'H01', 'Gelang Karet', 10000, 8500, 99, 8500000, NULL, NULL),
(127, 'H02', 'Keju Kraft', 9000, 8500, 100, 8500000, NULL, NULL),
(133, 'H03', 'Prochiz Keju', 9000, 8500, 100, 8500000, NULL, NULL),
(134, 'H04', 'Keju Kraft Chedar', 9000, 8500, 100, 8500000, NULL, NULL),
(135, 'H05', 'Teh Tongji', 3000, 2500, 100, 2500000, NULL, NULL);

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
(3, 'Dwiky Valentino', 'dwikyvalentino147@gmail.com', NULL, '$2y$10$6OyKlq9qfKGrmBIlCFuhHeXK9RAT82/uqIkNAE/Cs8diSxq9PAaXa', NULL, '2020-04-14 20:28:33', '2020-04-14 20:28:33'),
(4, 'admin', 'admin@admin.com', NULL, '$2y$10$pcwST0hqQuDyjQnl6TBoXuMq3bdwChypz6ooLJpYLd0PZEkytx88u', NULL, '2020-04-15 23:26:09', '2020-04-15 23:26:09'),
(5, 'admin123', 'admin123@gmail.com', NULL, '$2y$10$HHFwTiB37qVRudaR/AtVQerwcI75d1sGbYnZ3.GDEsuWAkm65a7kS', NULL, '2020-04-16 22:48:41', '2020-04-16 22:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persediaanbarang`
--
ALTER TABLE `persediaanbarang`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `persediaanbarang`
--
ALTER TABLE `persediaanbarang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
