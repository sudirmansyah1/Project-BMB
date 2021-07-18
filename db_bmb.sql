-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 04:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_courses`
--

CREATE TABLE `tb_courses` (
  `course_id` int(11) NOT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `ruang` varchar(255) DEFAULT NULL,
  `kontrak_perkuliahan` longtext DEFAULT NULL,
  `pengumuman_perkuliahan` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_courses`
--

INSERT INTO `tb_courses` (`course_id`, `dosen_id`, `course_name`, `tentang`, `jadwal`, `ruang`, `kontrak_perkuliahan`, `pengumuman_perkuliahan`) VALUES
(4, 2, 'Test', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '<p>Test</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_isipertemuan`
--

CREATE TABLE `tb_isipertemuan` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `pertemuan_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `judul_file` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `isQuestion` varchar(1) DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_isipertemuan`
--

INSERT INTO `tb_isipertemuan` (`id`, `dosen_id`, `course_id`, `pertemuan_id`, `judul`, `isi`, `file`, `judul_file`, `gambar`, `video`, `isQuestion`) VALUES
(6, 2, 4, 2, 'Aku test', 'qtwqt', NULL, NULL, NULL, NULL, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `jawaban_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `pertemuan_id` int(11) DEFAULT NULL,
  `pertanyaan_id` int(11) DEFAULT NULL,
  `dosen_id` int(11) DEFAULT NULL,
  `jawaban` longtext DEFAULT NULL,
  `tanggal_jam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`jawaban_id`, `user_id`, `course_id`, `pertemuan_id`, `pertanyaan_id`, `dosen_id`, `jawaban`, `tanggal_jam`) VALUES
(3, 1, 4, 2, 6, 2, 'qtqwtqtqgqqw', '07 March 2021 13:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mycourse`
--

CREATE TABLE `tb_mycourse` (
  `mycourse_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `course_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mycourse`
--

INSERT INTO `tb_mycourse` (`mycourse_id`, `user_id`, `course_id`) VALUES
(4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertemuan`
--

CREATE TABLE `tb_pertemuan` (
  `pertemuan_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `dosen_id` varchar(255) DEFAULT NULL,
  `waktu` varchar(255) NOT NULL,
  `judul_pertemuan` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pertemuanke` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pertemuan`
--

INSERT INTO `tb_pertemuan` (`pertemuan_id`, `course_id`, `dosen_id`, `waktu`, `judul_pertemuan`, `tanggal`, `pertemuanke`) VALUES
(2, 4, '2', '16/01 - 20/01', 'Test', '2021-01-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'users.jpg',
  `group` enum('dosen','mahasiswa') DEFAULT 'mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `name`, `email`, `photo`, `group`) VALUES
(1, 'demo-mahasiswa', '62cc2d8b4bf2d8728120d052163a77df', 'Demo User Mahasiswa', 'demousermahasiswa@mandiribelajar.co.id', 'users.jpg', 'mahasiswa'),
(2, 'demo-dosen', '62cc2d8b4bf2d8728120d052163a77df', 'Demo User Dosen', 'demouserdosen@mandiribelajar.co.id', 'users.jpg', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_courses`
--
ALTER TABLE `tb_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tb_isipertemuan`
--
ALTER TABLE `tb_isipertemuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`jawaban_id`);

--
-- Indexes for table `tb_mycourse`
--
ALTER TABLE `tb_mycourse`
  ADD PRIMARY KEY (`mycourse_id`);

--
-- Indexes for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  ADD PRIMARY KEY (`pertemuan_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_courses`
--
ALTER TABLE `tb_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_isipertemuan`
--
ALTER TABLE `tb_isipertemuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `jawaban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mycourse`
--
ALTER TABLE `tb_mycourse`
  MODIFY `mycourse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  MODIFY `pertemuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
