-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2024 pada 01.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory_neohaus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access`
--

CREATE TABLE `access` (
  `access_id` int(20) NOT NULL,
  `apps_id` varchar(200) DEFAULT NULL,
  `access_name` varchar(200) DEFAULT NULL,
  `host_name` varchar(200) DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `api_key` varchar(200) DEFAULT NULL,
  `secret_key` varchar(200) DEFAULT NULL,
  `access_token` varchar(200) DEFAULT NULL,
  `key1` varchar(200) DEFAULT NULL,
  `key2` varchar(200) DEFAULT NULL,
  `key3` varchar(200) DEFAULT NULL,
  `key4` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `accessories`
--

CREATE TABLE `accessories` (
  `accessories_id` int(20) NOT NULL,
  `accessories_name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `accessories`
--

INSERT INTO `accessories` (`accessories_id`, `accessories_name`, `description`, `brand_id`, `model`, `serial_no`, `supplier_id`, `purchase_date`, `warranty_duration`, `warranty_end_date`, `issue_to`, `status`) VALUES
(1, 'Mouse', 'Mouse Receptionist', 16, 'M100r', '-', 0, '2017-01-01', '365', '2018-01-01', 'Dektop Receptionist', 1),
(2, 'Keyboard', 'Keyboard Receptionist', 16, 'K100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Dektop Receptionist', 1),
(3, 'Mouse', 'Mouse Neo', 16, 'M165', '-', 0, '2017-01-01', '365', '2018-01-01', 'Teguh', 1),
(4, 'Mouse', 'Mouse Neo', 16, 'M100r', '-', 0, '2017-01-01', '365', '2018-01-01', 'Tisna', 1),
(5, 'Mouse', 'Mouse Neo', 16, 'M100r', '-', 0, '2017-01-01', '365', '2018-01-01', 'Rosida', 1),
(6, 'Mouse', 'Mouse Neo', 16, '-', '-', 0, '2017-01-01', '365', '2018-01-01', 'Ayu', 1),
(7, 'Mouse', 'Mouse Merdis', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Lisa', 1),
(8, 'Numeric Keypad', 'Numeric Keypad', 19, 'USB Port', '-', 0, '2017-01-01', '365', '2018-01-01', 'Lisa', 1),
(9, 'Kalkulator', 'Kalkultor Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Lisa', 1),
(10, 'Mouse', 'Mouse Noe', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Maria', 1),
(11, 'Mouse', 'Mouse Merdis', 16, 'M100r', '-', 0, '2017-01-01', '365', '2018-01-01', 'Arief', 1),
(12, 'Keyboard', 'Keyboard Medis', 16, 'K100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Arief', 1),
(14, 'Mouse', 'Mouse Merdis', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Reza', 1),
(15, 'Mouse', 'Mouse Merdis', 16, 'M187', '-', 0, '2017-01-01', '365', '2018-01-01', 'Nadya', 1),
(16, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-898L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Nadya', 1),
(17, 'Mouse', 'Mouse Merdis', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Hapsari', 1),
(18, 'Keyboard', 'Keyboard Merdis', 16, 'K100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Hapsari', 1),
(19, 'Mouse', 'Mouse Merdis', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Yola', 1),
(20, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Yola', 1),
(21, 'Laptop Fan Cooler', 'Laptop Fan Cooler Merdis', 16, '-', '-', 0, '2017-01-01', '365', '2018-01-01', 'Yola', 1),
(22, 'Mouse', 'Mouse Merdis', 16, 'M85', '-', 0, '2017-01-01', '365', '2018-01-01', 'Nurlaela', 1),
(23, 'Keyboard', 'Keyboard Merdis', 16, 'K120', '-', 0, '2017-01-01', '365', '2018-01-01', 'Nurlaela', 1),
(24, 'Mouse', 'Mouse Merdis', 16, 'M187', '-', 0, '2017-01-01', '365', '2018-01-01', 'Aulia', 1),
(25, 'Mouse', 'Mouse Merdis', 24, 'NetScroll 120', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bambang', 1),
(26, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bambang', 1),
(27, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Aulia', 1),
(28, 'Mouse', 'Mouse Merdis', 16, 'M165', '-', 0, '2017-01-01', '365', '2018-01-01', 'Sofie', 1),
(29, 'Mouse', 'Mouse Merdis', 25, 'MD 5056', '-', 0, '2017-01-01', '365', '2018-01-01', 'Wira', 1),
(30, 'Numeric Keypad', 'Numeric Keypad Merdis', 16, 'USB Port', '-', 0, '2017-01-01', '365', '2018-01-01', 'Wira', 1),
(31, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Wira', 1),
(32, 'Mouse', 'Mouse Merdis', 16, 'M187', '-', 0, '2017-01-01', '365', '2018-01-01', 'Arif', 1),
(33, 'Monitor LG', 'Monitor Merdis', 13, 'LG', '-', 0, '2017-01-01', '365', '2018-01-01', 'Arif', 1),
(34, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-8530', '-', 0, '2017-01-01', '365', '2018-01-01', 'Arif', 1),
(35, 'Mouse', 'Mouse Merdis', 26, 'SM 322', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(36, 'Keyboard', 'keyboard Merdis', 26, 'SK 922', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(37, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(38, 'Flashdik', 'Flasdisk 8GB', 15, '8GB', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(39, 'Kalkulator', 'Kalkulator Merdis', 21, 'SDC-812BN', '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(40, 'Mouse', 'Mouse Neo', 16, 'M150', '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(41, 'Keyboard', 'Keyboard Neo', 16, 'K220', '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(42, 'Kalkulator', 'Kalkulator Neo', 27, 'HR-8TM', '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(43, 'Kalkulator', 'Kalkulator Neo', 21, 'SDC-868L', '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(44, 'Mouse', 'Mouse Merdis', 16, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Selvia', 1),
(45, 'Mouse', 'Mouse Merdis', 12, 'B100', '-', 0, '2017-01-01', '365', '2018-01-01', 'Olin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `apps`
--

CREATE TABLE `apps` (
  `apps_id` int(20) NOT NULL,
  `apps_name` varchar(200) DEFAULT NULL,
  `apps_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `apps`
--

INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_desc`) VALUES
(1, 'Team Viewer', 'Team viewer remote control'),
(2, 'VNC', 'VNC remote control'),
(3, 'Net Support Manager', 'Net Support Manager'),
(4, 'Cpanel', NULL),
(5, 'Paypal', NULL),
(6, 'Payza', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(20) NOT NULL,
  `brand_name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `description`) VALUES
(1, 'Apple', 'Apple Inc.'),
(2, 'HP', 'Hewlet Pakert'),
(8, 'Microsoft', 'Microsoft Corporation'),
(10, 'Dell', 'Dell'),
(11, 'Asus', 'AsusTek Computer'),
(12, 'Lenovo', 'Lenovo Group Ltd'),
(13, 'LG', 'LG'),
(14, 'Samsung', 'Samsung'),
(15, 'Toshiba', 'Toshiba'),
(16, 'Logitech', 'Logitech'),
(17, '-', ''),
(18, 'Cisco', 'Cisco'),
(19, 'Acer', 'Acer'),
(20, 'Epson', 'Epson'),
(21, 'Citizen', 'Citizen'),
(22, 'Seagate', 'Seagate'),
(23, 'ViewSonic', 'ViewSonic'),
(24, 'Genius', 'Genius'),
(25, 'Mdisk', 'Mdisk'),
(26, 'Simbadda', 'Simbadda'),
(27, 'Casio', 'Casio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Printing & Scanning', '123'),
(2, 'Privacy & Security', NULL),
(3, 'Networking', NULL),
(4, 'Photos & Multimedia', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `computer`
--

CREATE TABLE `computer` (
  `id` int(20) NOT NULL,
  `computer_name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `processor` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `os_id` int(20) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `computer`
--

INSERT INTO `computer` (`id`, `computer_name`, `type`, `description`, `processor`, `ram`, `brand_id`, `model`, `os_id`, `serial_no`, `supplier_id`, `purchase_date`, `warranty_duration`, `warranty_end_date`, `issue_to`, `status`) VALUES
(1, 'Server Dinamis', 'server', 'Server Aplikasi Dinamis', 'i5-2400 CPU @ 3.10Ghz (4CPUs)', '8 GB', 8, 'CPU', 79, '92516-EOM-7502905-10173', 0, '2017-01-01', '365', '2018-01-01', 'erwan', 1),
(8, 'ONE', 'desktop', 'Dekstop Receptionist', 'Intel Core i3-2100 CPU @ 3.GHz (4 CPUs)', '3 GB', 14, 'CPU+Monitor', 75, '-', 0, '2017-01-01', '365', '2018-01-01', 'Novita', 1),
(9, 'USER-PC', 'laptop', 'Laptop Neo', 'Core i3-2350M CPU @2.30GHz (4 CPUs)', '2 GB', 2, 'HP Pavilion g4', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Teguh', 1),
(10, 'ACER01', 'laptop', 'Laptop Neo', 'Core i3-2330M CPU @2.20GHz (4CPUs)', '2 GB', 19, 'Aspire 4752', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Rosida', 1),
(11, 'NEOLAPTOP02', 'laptop', 'Laptop Neo', 'Core i3-2350M CPU @2.30GHz (4CPUs)', '2 GB', 2, 'HP Pavilion g4', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Ayu', 1),
(12, 'LAPTOP-EP084E8T', 'laptop', 'Laptop Merdis', 'Core i3-5005U CPU @2.00GHz (4CPUs)', '2 GB', 19, 'One Z1402', 78, '-', 0, '2017-01-01', '365', '2018-01-01', 'Lisa', 1),
(13, 'MARIA', 'laptop', 'Laptop Neo', 'Core i3-2330M CPU @2.20GHz (4 CPUs)', '2 GB', 19, 'Aspire 4752', 27, '-', 0, '2017-01-01', '365', '2018-01-01', 'Maria', 1),
(17, 'DESKTOP-0D7ALQ8', 'laptop', 'Laptop Merdis', 'Core i3-5005U CPU @2.00GHz', '2 GB', 19, 'One Z1402', 77, '-', 0, '2017-01-01', '365', '2018-01-01', 'Nadya', 1),
(18, 'USER-PC', 'desktop', 'Dekstop Merdis', 'Core 2 CPU 4400 @2.00GHz (2 CPUs)', '1 GB', 19, 'CPU+Monitor', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Hapsari', 1),
(22, 'LENOVO01', 'laptop', 'Laptop Merdis', 'Core i3-3110M CPU @2.40Ghz', '2 GB', 12, '20207', 77, '-', 0, '2017-01-01', '365', '2018-01-01', 'Bambang', 1),
(23, 'USER-PC', 'laptop', 'Laptop Merdis', 'Core i3-3110M CPU @2.40Ghz (4CPUs)', '2 GB', 12, '20207', 77, '-', 0, '2017-01-01', '365', '2018-01-01', 'Sofie', 1),
(26, 'PALMAONE-PC', 'desktop', 'Desktop Merdis', 'Pentium Dual Core E5300 @260Ghz (2CPUs)', '2 GB', 19, 'CPU+MONITOR', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Bayu', 1),
(27, 'LAPTOP-QLIQ266V', 'laptop', 'Laptop Neo', 'Core i3-5005U CPU @2.00GHz (4CPUs)', '4 GB', 19, 'One Z1402', 78, '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(28, 'LAPTOP-HTCTSBJ9', 'laptop', 'Laptop Merdis', 'Core i3-5005U CPU 2.00Ghz (4 CPUs)', '2 GB', 19, 'One Z1402', 78, '-', 0, '2017-01-01', '365', '2018-01-01', 'Selvia', 1),
(30, 'LENOVO02', 'laptop', 'Laptop Merdis', 'Core i3-3110M CPU @ 2.40GHz (CPUs)', '2 GB', 12, '20207', 77, '-', 0, '2017-01-01', '365', '2018-01-01', 'Ridwan', 1),
(32, 'USER-PC', 'laptop', 'Laptop Neo', 'Core i5-3230M @ 2.60GHz (4CPUs)', '2 GB', 12, '20207', 66, '-', 0, '2017-01-01', '365', '2018-01-01', 'Eko', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `settings_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`settings_id`, `title`, `value`) VALUES
(3, 'system_name', 'IT NOW-IT Warranty and Inventory Management System'),
(2, 'company_name', 'PT MCM'),
(6, 'address', 'WTC'),
(4, 'phone', '089529948147'),
(1, 'system_email', 'it@mcm.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device`
--

CREATE TABLE `device` (
  `device_id` int(20) NOT NULL,
  `device_name` varchar(200) DEFAULT NULL,
  `category_id` int(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `brand_id` int(20) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `serial_no` varchar(200) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_duration` varchar(200) DEFAULT NULL,
  `warranty_end_date` date DEFAULT NULL,
  `issue_to` varchar(200) DEFAULT NULL,
  `status` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `device`
--

INSERT INTO `device` (`device_id`, `device_name`, `category_id`, `description`, `brand_id`, `model`, `serial_no`, `supplier_id`, `purchase_date`, `warranty_duration`, `warranty_end_date`, `issue_to`, `status`) VALUES
(1, 'Printer Depan', 1, 'Sewa Officebox', 2, 'HP 7510', '-', 0, '2017-01-01', '365', '2018-01-01', 'Ruang Depan', 1),
(2, 'Printer Dalam', 1, 'Sewa Officebox', 2, 'HP 8610', '-', 0, '2017-01-01', '365', '2018-01-01', 'Ruang Dalam', 1),
(3, 'Router', 3, 'Router', 18, 'Linksys E3200', '-', 0, '2017-01-01', '365', '2018-01-01', 'Ruang Server', 1),
(4, 'LX300', 1, 'LX300 Neo', 20, 'LX300', '-', 0, '2017-01-01', '365', '2018-01-01', 'Rosida', 1),
(5, 'LX300', 1, 'LX300 Merdis', 20, 'LX300', '-', 0, '2017-01-01', '365', '2018-01-01', 'Nurlaela', 1),
(6, 'HP Deskjet 1010', 1, 'Printer Neo', 2, 'HP Deskjet 1010', '-', 0, '2017-01-01', '365', '2018-01-01', 'Anita', 1),
(7, 'Mikrotik', 3, 'Mikrotik RB750', 17, '', '010101', 0, '2024-03-25', '365', '2025-03-25', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ip`
--

CREATE TABLE `ip` (
  `ip_id` int(20) NOT NULL,
  `host_name` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `ipv4` varchar(200) DEFAULT NULL,
  `ipv6` varchar(200) DEFAULT NULL,
  `mac` varchar(200) DEFAULT NULL,
  `subnet` varchar(200) DEFAULT NULL,
  `gateway` varchar(200) DEFAULT NULL,
  `dns1` varchar(200) DEFAULT NULL,
  `dns2` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `os`
--

CREATE TABLE `os` (
  `os_id` int(20) NOT NULL,
  `os_name` varchar(200) DEFAULT NULL,
  `os_desc` varchar(200) DEFAULT NULL,
  `platform` varchar(200) DEFAULT NULL,
  `developer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `os`
--

INSERT INTO `os` (`os_id`, `os_name`, `os_desc`, `platform`, `developer`) VALUES
(11, 'Windows 10 (32Bit)', NULL, 'IBM', 'Microsoft'),
(12, 'AIX and AIXL', NULL, 'Various', 'IBM'),
(13, 'AmigaOS', NULL, 'Amiga', 'Commodore'),
(14, 'Android', NULL, 'Mobile', 'Google'),
(15, 'BSD', NULL, 'Various', 'BSD'),
(16, 'Caldera Linux', NULL, 'Various', 'SCO'),
(17, 'Corel Linux', NULL, 'Various', 'Corel'),
(18, 'CP/M', NULL, 'IBM', 'CP/M'),
(19, 'Debian Linux', NULL, 'Various', 'GNU'),
(20, 'DUnix', NULL, 'Various', 'Digital'),
(21, 'DYNIX/ptx', NULL, 'Various', 'IBM'),
(22, 'HP-UX', NULL, 'Various', 'Hewlett Packard'),
(23, 'iOS', NULL, 'Mobile', 'Apple'),
(24, 'IRIX', NULL, 'Various', 'SGI'),
(25, 'Kondara Linux', NULL, 'Various', 'Kondara'),
(26, 'Linux', NULL, 'Various', 'Linus Torvalds'),
(27, 'MAC OS 8', NULL, 'Apple Macintosh', 'Apple'),
(28, 'MAC OS 9', NULL, 'Apple Macintosh', 'Apple'),
(29, 'MAC OS 10', NULL, 'Apple Macintosh', 'Apple'),
(30, 'MAC OS X', NULL, 'Apple Macintosh', 'Apple'),
(31, 'Mandrake Linux', NULL, 'Various', 'Mandrake'),
(32, 'MINIX', NULL, 'Various', 'MINIX'),
(33, 'MS-DOS?1.x', NULL, 'IBM', 'Microsoft'),
(34, 'MS-DOS?2.x', NULL, 'IBM', 'Microsoft'),
(35, 'MS-DOS?3.x', NULL, 'IBM', 'Microsoft'),
(36, 'MS-DOS?4.x', NULL, 'IBM', 'Microsoft'),
(37, 'MS-DOS?5.x', NULL, 'IBM', 'Microsoft'),
(38, 'MS-DOS?6.x', NULL, 'IBM', 'Microsoft'),
(39, 'NEXTSTEP', NULL, 'Various', 'Apple'),
(40, 'OS/2', NULL, 'IBM', 'IBM'),
(41, 'OSF/1', NULL, 'Various', 'OSF'),
(42, 'QNX', NULL, 'Various', 'QNX'),
(43, 'Red Hat Linux', NULL, 'Various', 'Red Hat'),
(44, 'SCO', NULL, 'Various', 'SCO'),
(45, 'Slackware Linux', NULL, 'Various', 'Slackware'),
(46, 'Sun Solaris', NULL, 'Various', 'Sun'),
(47, 'SuSE Linux', NULL, 'Various', 'SuSE'),
(48, 'Symbian', NULL, 'Mobile', 'Nokia'),
(49, 'System 1', NULL, 'Apple Macintosh', 'Apple'),
(50, 'System 2', NULL, 'Apple Macintosh', 'Apple'),
(51, 'System 3', NULL, 'Apple Macintosh', 'Apple'),
(52, 'System 4', NULL, 'Apple Macintosh', 'Apple'),
(53, 'System 6', NULL, 'Apple Macintosh', 'Apple'),
(54, 'System 7', NULL, 'Apple Macintosh', 'Apple'),
(55, 'System V', NULL, 'Various', 'System V'),
(56, 'Tru64 Unix', NULL, 'Various', 'Digital'),
(57, 'Turbolinux', NULL, 'Various', 'Turbolinux'),
(58, 'Ultrix', NULL, 'Various', 'Ultrix'),
(59, 'Unisys', NULL, 'Various', 'Unisys'),
(60, 'Unix', NULL, 'Various', 'Bell labs'),
(61, 'UnixWare', NULL, 'Various', 'UnixWare'),
(62, 'VectorLinux', NULL, 'Various', 'VectorLinux'),
(63, 'Windows 2000', NULL, 'IBM', 'Microsoft'),
(64, 'Windows 2003', NULL, 'IBM', 'Microsoft'),
(65, 'Windows 3.X', NULL, 'IBM', 'Microsoft'),
(66, 'Windows 7 (32Bit)', NULL, 'IBM', 'Microsoft'),
(67, 'Windows 8 (32Bit)', NULL, 'IBM', 'Microsoft'),
(68, 'Windows 95', NULL, 'IBM', 'Microsoft'),
(69, 'Windows 98', NULL, 'IBM', 'Microsoft'),
(71, 'Windows CE', NULL, 'PDA', 'Microsoft'),
(72, 'Windows ME', NULL, 'IBM', 'Microsoft'),
(73, 'Windows NT', NULL, 'IBM', 'Microsoft'),
(74, 'Windows Vista', NULL, 'IBM', 'Microsoft'),
(75, 'Windows XP (32Bit)', NULL, 'IBM', 'Microsoft'),
(76, 'Windows 8 (64Bit)', NULL, 'IBM', 'Microsoft'),
(77, 'Windows 7 (64Bit)', NULL, 'IBM', 'Microsoft'),
(78, 'Windows 10 (64Bit)', NULL, 'IBM', 'Microsoft'),
(79, 'Windows Server 2008 (32Bit)', NULL, 'IBM', 'Microsoft'),
(80, 'Windows XP (64Bit)', NULL, 'IBM', 'Microsoft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(200) DEFAULT NULL,
  `supplier_address` varchar(200) DEFAULT NULL,
  `supplier_phone` varchar(200) DEFAULT NULL,
  `supplier_email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Welcome Admin', 'erwan', 'erwan@mcm.com', 'cde2e7b93ea3aba26816784233ff337a', 'admin', 1),
(2, 'User', 'user', 'user@MCM.COM', '24c9e15e52afc47c225b757e7bee1f9d', 'user', 1),
(3, 'Admin', 'admin', 'admin@mcm.com', 'e00cf25ad42683b3df678c61f42c6bda', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`access_id`);

--
-- Indeks untuk tabel `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`accessories_id`);

--
-- Indeks untuk tabel `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`apps_id`);

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indeks untuk tabel `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indeks untuk tabel `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`device_id`);

--
-- Indeks untuk tabel `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indeks untuk tabel `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`os_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access`
--
ALTER TABLE `access`
  MODIFY `access_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `accessories`
--
ALTER TABLE `accessories`
  MODIFY `accessories_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `apps`
--
ALTER TABLE `apps`
  MODIFY `apps_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `config`
--
ALTER TABLE `config`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `device`
--
ALTER TABLE `device`
  MODIFY `device_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ip`
--
ALTER TABLE `ip`
  MODIFY `ip_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `os`
--
ALTER TABLE `os`
  MODIFY `os_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
