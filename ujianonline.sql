-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 03:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujianonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `password` varchar(40) NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `password`, `jk`, `alamat`, `email`, `foto`) VALUES
('123456', 'a', '25d55ad283aa400af464c76d713c07ad', 'P', 'Bukittinggi', 'a@gmail.com', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `no_bp` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `score` int(11) NOT NULL,
  `total_score` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(4, 'TRPL 1A'),
(5, 'TRPL 1B'),
(6, 'TRPL 2A'),
(7, 'TRPL 2B'),
(8, 'TRPL 3A'),
(9, 'TRPL 3B'),
(10, 'TRPL 4A'),
(11, 'TRPL 4B'),
(12, 'MI 1A'),
(13, 'MI 1B'),
(14, 'MI 2A'),
(15, 'MI 2B');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ni` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ni`, `name`, `password`, `jk`, `prodi`, `kelas`, `email`, `alamat`, `image`) VALUES
(1, 'vienne anggelica', '', 'Perempuan', '', '10', 'vienneanggelica082@gmail.com', 'bukittinggi', 'EJMKE3998.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `prodi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`) VALUES
(1, 'Manajemen Informatika'),
(2, 'Teknologi Rekayasa Perangkat Lunak'),
(3, 'Tenik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `kunci` varchar(10000) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `soal`, `kunci`, `user_email`, `id_kelas`) VALUES
(2, 'motherboard adalah....', 'skjdhjsdhkjasddfdf', 'dosen1@gmail.com', 4),
(4, 'komputer adalah', 'ghdghdchjfhj', '', 0),
(5, 'apakah?', 'ghdghdchjfhj', '', 0),
(6, 'daddad', 'adadad', '', 0),
(7, 'rukun iman ada?', 'ghdghdchjfhj', '', 0),
(8, 'csfsf', 'fsgfs', '', 0),
(9, 'sadfafdf', 'gedhtedth', 'dosen1@gmail.com', 0),
(10, 'komputer adalah', 'ghdghdchjfhj', 'admin@gmail.com', 0),
(11, 'daddad', 'fsdff', 'admin@gmail.com', 0),
(12, 'adasdas', 'asdasd', 'dosen1@gmail.com', 4),
(13, 'komputer adalah', 'ghdghdchjfhj', 'dosen1@gmail.com', 6),
(14, 'gfg', 'ghdghdchjfhj', 'dosen1@gmail.com', 6),
(15, 'daddad', 'fsgfs', 'dosen1@gmail.com', 6),
(16, 'apakah?', 'skjdhjsdhkjasd', 'dosen1@gmail.com', 6),
(17, 'daddad', 'fsgfs', 'dosen1@gmail.com', 6),
(18, 'gsggsad', 'djksjksa', 'admin@gmail.com', 10),
(19, 'dsada', 'sadas', 'admin@gmail.com', 10),
(20, 'sadsad', 'sdasdsad', 'admin@gmail.com', 10),
(21, 'wddaw', 'wadw', 'admin@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `soal_simpan`
--

CREATE TABLE `soal_simpan` (
  `id` int(11) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_simpan`
--

INSERT INTO `soal_simpan` (`id`, `user_email`, `id_soal`, `id_kelas`, `mulai`, `selesai`, `waktu`) VALUES
(1, 'admin@gmail.com', 11, 4, '2021-02-01 13:22:00', '2021-02-03 13:22:00', 60),
(2, 'admin@gmail.com', 10, 5, '2021-02-04 13:24:00', '2021-02-06 13:24:00', 60),
(3, 'admin@gmail.com', 11, 5, '2021-02-04 13:24:00', '2021-02-06 13:24:00', 60),
(4, 'dosen1@gmail.com', 2, 4, '2021-02-01 15:05:00', '2021-02-05 15:05:00', 60),
(5, 'dosen1@gmail.com', 9, 10, '2021-02-01 15:05:00', '2021-02-05 15:05:00', 60),
(6, 'dosen1@gmail.com', 4, 4, '2021-02-01 15:44:00', '2021-02-03 15:44:00', 60),
(7, 'dosen1@gmail.com', 6, 6, '2021-02-02 15:47:00', '2021-02-03 15:47:00', 60),
(8, 'dosen1@gmail.com', 6, 6, '2021-02-02 15:47:00', '2021-02-03 15:47:00', 60),
(9, 'dosen1@gmail.com', 6, 6, '2021-02-02 15:47:00', '2021-02-03 15:47:00', 60),
(10, 'dosen1@gmail.com', 6, 6, '2021-02-02 15:47:00', '2021-02-03 15:47:00', 60),
(11, 'dosen1@gmail.com', 6, 6, '2021-02-02 15:47:00', '2021-02-03 15:47:00', 60),
(12, 'dosen1@gmail.com', 4, 4, '2021-02-05 15:48:00', '2021-02-27 15:48:00', 60),
(13, 'dosen1@gmail.com', 4, 4, '2021-02-05 15:48:00', '2021-02-27 15:48:00', 60),
(14, 'admin@gmail.com', 10, 10, '2021-02-05 20:59:00', '2021-02-06 20:59:00', 60),
(15, 'admin@gmail.com', 10, 10, '2021-02-05 20:59:00', '2021-02-06 20:59:00', 60),
(16, 'admin@gmail.com', 10, 10, '2021-02-05 20:59:00', '2021-02-06 20:59:00', 60),
(17, 'admin@gmail.com', 10, 10, '2021-02-05 20:59:00', '2021-02-06 20:59:00', 60);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `selesai` datetime NOT NULL,
  `waktu` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `id_jenjang` tinyint(4) NOT NULL,
  `radom_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ni` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ni`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 0, 'admin', 'admin@gmail.com', 'img.jpg', '$2y$10$FaZO.Maq7P/ZqGw0Jl/6b.wRRb7rUtS2fuVw3EGLWo.sZHpjjLk8K', 1, 1, 1610525608),
(5, 0, 'admin1', 'admin1@gmail.com', 'default.jpg', '$2y$10$y2FYpi8oMKD8.004GN2qzeWT.zd4H7QN.TcDu.KIUj9Ll/tpccomu', 1, 1, 1610876546),
(14, 1711082024, 'vienne anggelica', 'vienneanggelica082@gmail.com', 'default.jpg', '$2y$10$vFIho.HzBtU0khS069Wbj.FdyjtfOgAwkWJUHNUk5LDtzf6HksLka', 3, 1, 1611238557),
(15, 2147483647, 'dosen1', 'dosen1@gmail.com', 'default.jpg', '$2y$10$8zhIAoeKkAtp/3bsk9EsXOB4cfN4.wxKQtGWgMM8VYEYb6JQFG3Oi', 2, 1, 1611385872),
(16, 2020181819, 'dosen2', 'dosen2@gmail.com', 'default.jpg', '$2y$10$QmdvMolQ0cj6uPZcqHZ/BuqYKa55L4nWtsUZfi4rQPTmJoTraIoLm', 2, 1, 1612434902);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(7, 1, 6),
(8, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'menu'),
(6, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fa fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 2, 'Soal', 'soal/index', 'fas fa-fw fa-edit', 1),
(10, 6, 'Profil', 'mahasiswa/profil', 'fas fa-fw fa-user-graduate', 1),
(11, 1, 'Mahasiswa', 'mahasiswa/index', 'fas fa-fw fa-user-graduate', 1),
(12, 6, 'Edit Profil', 'mahasiswa/editprofil', 'fas fa-fw fa-user-edit', 1),
(13, 6, 'Change Password', 'mahasiswa/changepassword', 'fas fa-fw fa-key', 1),
(14, 1, 'Dosen', 'dosen/index', 'fas fa-fw fa-chalkboard-teacher', 1),
(15, 1, 'Kelas', 'kelas/index', 'fas fa-fw fa-university', 1),
(16, 2, 'Soal Simpan', 'soal/ujian', 'far fa-fw fa-file-archive', 1),
(17, 6, 'Ujian', 'ujian/index', 'fas fa-fw fa-desktop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'dosen1@gmail.com', '9JGYReR3Bq9zA3ZIu%2FHRSnK3gCMdzLP5aZfmztQn4hs%3D', 1611385872),
(2, 'dosen2@gmail.com', 'qfvumwrGSQX%2B1SzLqlptIICwt%2F8Ikx6MRpS54S7vtXI%3D', 1612434902);

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `random_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `mulai`, `selesai`, `random_code`) VALUES
(2, '2021-01-11 14:40:00', '2021-01-11 15:40:00', 'A001'),
(3, '2021-01-16 16:40:00', '2021-01-15 16:44:00', 'A001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `no_bp` (`no_bp`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ni`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_simpan`
--
ALTER TABLE `soal_simpan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `waktu` (`waktu`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `soal_simpan`
--
ALTER TABLE `soal_simpan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_ujian`) REFERENCES `ujian` (`id_ujian`),
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`no_bp`) REFERENCES `mahasiswa` (`ni`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`waktu`) REFERENCES `waktu` (`id`),
  ADD CONSTRAINT `ujian_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
