-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2019 at 03:25 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Techninė', '2019-05-14 13:54:01', '2019-05-14 13:54:01'),
(2, 'Klausimas', NULL, NULL),
(3, 'Klaida sistemoje', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `ticket_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 'test comment', '2019-05-14 14:57:18', '2019-05-14 14:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Sample', '2019-05-11', '2019-05-13', '2019-05-08 13:34:19', '2019-05-08 13:34:19'),
(2, 'did something', '2019-05-08', '2019-05-10', '2019-05-08 16:23:27', '2019-05-08 16:23:27'),
(3, 'Susitikimas su vadovais.', '2019-06-02', '2019-06-03', '2019-05-21 12:16:02', '2019-05-21 12:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

DROP TABLE IF EXISTS `medications`;
CREATE TABLE IF NOT EXISTS `medications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage_instructions` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `name`, `dosage_instructions`, `created_at`, `updated_at`) VALUES
(1, 'Morphine', 'Morfinas (morfijus) – nuskausminantis medikamentas kartu sukeliantis euforiją. Tai esminė veiklioji opiumo medžiaga. Jo vardas suteiktas pagal senovės graikų sapnų ir miego dievo vardą: Morfėjus. Morfijų 1803 m. išskyrė vokietis Saturnietis.', '2019-04-07 15:00:00', '2019-04-14 15:00:00'),
(2, 'Codeine', 'Kodeinas (metilmorfinas) – natūralus opijaus alkaloidas. Kodeinas įeina į vaistingųjų preparatų nuo kosulio sudėtį. Narkotiniu požiūriu kodeinas yra 4–5 kartus silpnesnis nei morfinas. Kodeinas tai opiumo alkaloidas, esantis keliose aguonų rūšyse. Opiume yra apie 4 proc. kodeino. Kodeinas yra morfino 3-metilo eteris ir yra paverčiamas morfinu, nokstant aguonoms. Apie 80 proc. pasaulyje pagaminto morfino (morfijaus) yra metilinama iki gydyti svarbesnio kodeino. Palyginti su morfinu, kodeinas pasižymi labai nestipriu analgetiniu poveikiu, tačiau jis sustiprina kitų analgetikų poveikį. Jis stipriai slopina kosulį. Svarbu tai, kad jis, palyginti su kitais analgetikais, žmogui sukelia tik silpną pripratimą.', NULL, NULL),
(3, 'Oxycodone', 'Oxycodone Lannacher yra stiprus skausmą malšinantis opioidų grupės vaistas.\\r\\nOxycodoneLannacher vartojamas stipriam skausmui malšinti, kuriam reikalingi opioidų grupės skausmą malšinantys preparatai, nes kiti vaistai skausmą slopina nepakankamai.', NULL, NULL),
(4, 'Methadone', 'Metadonas – opioidų grupei priklausantis vaistas. Kiti šiai grupei priklausantys vaistai – morfinas, fen-tanilis, tramadolis. Metadonas (0.1% metadono hi-drochlorido tirpalas) yra šalių sveikatos apsaugos ministerijų patvirtintas vaistas priklausomybės nuo opioidų gydymui. Jį reikia išgerti vieną kartą per dieną.  Metadono  skyrimo  tikslas –  normalizuoti Jūsų savijautą, nuslopinti potraukį heroinui ar ki-tiems gatvės opioidams (Estijoje – fentanilio grupės narkotikams), nutraukti gatvės opioidų vartojimą ir suteikti Jūsų gyvenimui stabilumo. Kiti Lietuvoje naudojami šios grupės vaistai priklausomybei nuo heroino gydyti – buprenorfino tabletės (Subutex®, Suboxone®). Jų skyrimas ir gydymo organizavimas labai panašus kaip ir metadono.', NULL, NULL),
(5, 'Hydromorphone', '\"Hydromorphone\" yra receptinis vaistas, parduodamas pagal “Dilaudid®” prekės ženklą. Šis vaistas yra opioidas arba narkotinis skausmas, kuris yra panašus į morfino, ir gydytojai gali skirti jį gydyti kai kuriuos vidutinio sunkumo ar sunkius lėtinio skausmo tipus. Hidromorfono vaistas gali sukelti tam tikrų rimtų šalutinių reiškinių, kurie paprastai reikalauja medicininės pagalbos, taip pat gali sąveikauti su kitais vaistiniais preparatais. Daugeliu atvejų pacientas gali pasikalbėti su gydytoju apie šį vaistą, kad nustatytų, ar jis yra tinkamas jo individualiam atvejui. Šis vaistas yra piliulės formos arba skystos formos, o vaisto ilgai išsiskiriantis vaistas dažnai gali būti nuolatinis skausmo šalinimas.', NULL, NULL),
(6, 'Meperidine', 'Meperidinas yra opioidinis nuskausminamasis, kartais vadinamas narkotine medžiaga.\\r\\nMeperidinas vartojamas nuo vidutinio sunkumo iki stipraus skausmo.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2019_04_17_102929_create_prescriptions_table', 1),
(62, '2019_05_08_150242_create_events_table', 2),
(60, '2019_04_15_073913_create_pacients_table', 1),
(56, '2014_10_12_000000_create_users_table', 1),
(57, '2014_10_12_100000_create_password_resets_table', 1),
(58, '2019_03_26_192224_add_admin_to_users_table', 1),
(59, '2019_03_28_160447_create_medications_table', 1),
(63, '2019_05_08_162110_create_events_table', 3),
(64, '2019_05_14_165001_create_tickets_table', 4),
(65, '2019_05_14_165109_create_categories_table', 4),
(66, '2019_05_14_171924_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pacients`
--

DROP TABLE IF EXISTS `pacients`;
CREATE TABLE IF NOT EXISTS `pacients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `condition` int(11) NOT NULL,
  `treatment_done` tinyint(1) NOT NULL DEFAULT '0',
  `additional_information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pacients`
--

INSERT INTO `pacients` (`id`, `name`, `surname`, `age`, `height`, `weight`, `condition`, `treatment_done`, `additional_information`, `created_at`, `updated_at`) VALUES
(1, 'Jonas', 'Jonaitis', 64, 182, 77, 3, 0, 'Pirmas gydymas morfinu.', '2019-04-15 00:55:14', '2019-04-15 00:55:14'),
(2, 'Jonas', 'Jonukas', 43, 181, 66, 7, 0, 'Alergiškas *....* cheminei medžiagai.', '2019-04-16 01:43:12', '2019-04-16 01:43:12'),
(3, 'Jonas', 'Jonas', 99, 188, 77, 4, 0, 'Labai nekantrus.', '2019-04-16 01:46:31', '2019-04-16 01:46:31'),
(4, 'Kristina', 'Butkutė', 23, 166, 66, 6, 0, 'Pirmas gydymas Kodeinu.', '2019-05-21 12:09:56', '2019-05-21 12:09:56'),
(5, 'Darius', 'Grigonis', 44, 188, 98, 2, 0, 'Pirmas gydymas morfinu.', '2019-05-21 12:10:27', '2019-05-21 12:11:54'),
(6, 'Viktorija', 'Liutko', 42, 183, 80, 7, 0, 'Antras gydymas Kodeinu.', '2019-05-21 12:11:02', '2019-05-21 12:11:02'),
(7, 'Mika', 'Mikėnaitė', 19, 154, 50, 3, 0, 'Alergiška Kodeinui.', '2019-05-21 12:11:30', '2019-05-21 12:11:30'),
(8, 'Martis', 'Martėnas', 32, 158, 75, 9, 0, 'Nesigydė morfinu.', '2019-05-21 12:12:32', '2019-05-21 12:12:32'),
(9, 'Averina', 'Severina', 28, 168, 62, 6, 0, 'Nesigydė morfinu.', '2019-05-21 12:13:09', '2019-05-21 12:13:09'),
(10, 'Kostia', 'Morfauskas', 44, 195, 99, 5, 0, 'Morfino gydymas skirtas dėl nepakeliamo skausmo.', '2019-05-21 12:13:41', '2019-05-21 12:13:41'),
(11, 'Martynas', 'Morkus', 40, 185, 86, 8, 0, 'Nesigydė Kodeinu.', '2019-05-21 12:14:22', '2019-05-21 12:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prescription_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `additional_information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pacient_id` bigint(20) UNSIGNED NOT NULL,
  `medication_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prescriptions_pacient_id_foreign` (`pacient_id`),
  KEY `prescriptions_medication_id_foreign` (`medication_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `prescription_id`, `from_date`, `to_date`, `additional_information`, `pacient_id`, `medication_id`, `created_at`, `updated_at`) VALUES
(1, 'P0001', '2019-05-01', '2019-05-15', 'Testing', 1, 1, NULL, NULL),
(2, 'P0987', '2019-06-01', '2019-07-01', '123 test', 3, 4, '2019-05-18 10:18:51', '2019-05-18 10:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tickets_ticket_id_unique` (`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `category_id`, `ticket_id`, `title`, `priority`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 1, 'IMFA7VMCUT', 'test', 'medium', '123 testing', 'Uždaryta', '2019-05-14 14:56:57', '2019-05-14 15:04:44'),
(2, 14, 1, 'NCZI4HIREJ', 'nauja 112', 'high', 'Labai sekasi man...', 'Atidaryta', '2019-05-14 15:54:13', '2019-05-14 15:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `approved_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `approved_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2019-03-26 20:01:57', '$2y$10$7xhqOtrY4AKOK4VIXGl0g.yalsZgCF/c.dgm.9//lRDJRpwzC31vi', 'fRtvgZeOm3Ce0Tuu9iNo099hzS9XLSd2IhGkilcEKM5LcFYFK5lCwh5TxrGr', '2019-03-26 14:01:57', '2019-03-26 14:01:57', 1, '2019-03-26 14:01:57'),
(14, 'Egle', 'egle@mail.com', NULL, '$2y$10$9pOVmEPcWsX0aywtjrkgAOAqxkC9sD.j9BuDlhqD4SJM9EVQ9Htyy', NULL, '2019-04-14 21:01:05', '2019-05-18 10:34:47', 0, '2019-04-14 21:01:46'),
(15, 'Jonas', 'jonas@admin.com', NULL, '$2y$10$Qz.eFmUuDUPmuy89hQkvi.pdTHEsL54HNf/cL8hm7ad5e/e.HpMfK', NULL, '2019-04-17 08:00:27', '2019-05-09 02:40:07', 0, '2019-05-09 02:40:07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_medication_id_foreign` FOREIGN KEY (`medication_id`) REFERENCES `medications` (`id`),
  ADD CONSTRAINT `prescriptions_pacient_id_foreign` FOREIGN KEY (`pacient_id`) REFERENCES `pacients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
