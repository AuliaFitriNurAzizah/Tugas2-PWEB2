-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 12:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persuratan_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_izin`
--

CREATE TABLE `permohonan_izin` (
  `id_izin` int NOT NULL,
  `dosen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pangkat_jabatan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permohonan_izin`
--

INSERT INTO `permohonan_izin` (`id_izin`, `dosen`, `nip`, `pangkat_jabatan`, `jabatan`, `unit_kerja`) VALUES
(1, 'Dhika Fawwaz', '230102055', 'Asisten ahli', 'Tendik', 'Laboratorium'),
(2, 'Abun Sungkar S.T., M.Kom.', '230102075', 'Asisten ahli', 'Tendik', 'Laboratorium'),
(3, 'Muhammad Sumbul', '11223344', 'Asisten ahli', 'Tendik', 'Laboratorium');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_surat_tugas` int NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `tgl_surat_tugas` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `surat_tugas`
--

INSERT INTO `surat_tugas` (`id_surat_tugas`, `nomor`, `tgl_surat_tugas`, `tujuan`, `transportasi`, `keperluan`, `dosen`) VALUES
(2, '1234', '2024-10-03', 'Surat tugas dinas ke luar kota', 'Pesawat', 'Mendampingi mahasiswa untuk lomba', 'Muhammad Amar'),
(8, '1234678', '2024-10-16', 'Seminar', 'Mobil', 'Menghadiri Seminar Hidup Sehat', 'Ahmad Al-Fariz'),
(9, '123456', '2024-10-24', 'Pengabdian Masyarakat', 'Mobil', 'Pengabdian masyarakat di desa Sukaharjo', 'Anna Lestari'),
(10, '111', '2024-10-09', 'Penelitian', 'Pesawat', 'Penelitian energi baru terbarukan', 'Deva Aryano'),
(11, '222', '2024-10-25', 'Seminar', 'Mobil', 'Menghadiri Seminar Pelatihan Kepemimpinan', 'Angga Dewangga'),
(12, '333', '2024-10-03', 'Pengabdian Masyarakat', 'Mobil', 'Pengabdian Masyarakat di desa Karangpucung', 'Ahmad Subarjo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permohonan_izin`
--
ALTER TABLE `permohonan_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_surat_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permohonan_izin`
--
ALTER TABLE `permohonan_izin`
  MODIFY `id_izin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id_surat_tugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
