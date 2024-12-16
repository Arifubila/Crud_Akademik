-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 12:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakademik_arifubila`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tahun_masuk`, `prodi`) VALUES
('24344', 'Ardhito Pramono', 'Laki-laki', 'Surabaya', '2024-12-14', '2031', 'Teknik Sipil'),
('24397', 'Pamungkas', 'Laki-laki', 'nganjuk', '2024-12-14', '0000', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `Nidn` varchar(10) NOT NULL,
  `Nama_Dosen` varchar(35) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `Pendidikan_Terakhir` varchar(5) NOT NULL,
  `Jurusan` varchar(35) NOT NULL,
  `Dosen_Prodi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`Nidn`, `Nama_Dosen`, `Jenis_Kelamin`, `Alamat`, `No_Hp`, `Pendidikan_Terakhir`, `Jurusan`, `Dosen_Prodi`) VALUES
('12412', 'Noel Gallagher', 'Laki-laki', 'Jl. Washington Dc', '1322312', 'S2', 'Teknik Informatika', 'Teknik Informatika'),
('141226', 'Jhon Lennon', 'Laki-laki', 'Jl. Washington Dc', '987621', 'S2', 'Teknik Mesin', 'Agro Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(35) NOT NULL,
  `sks` int(5) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `jenis`) VALUES
('4122', 'Kecerdasan Buatan', 3, 'Teori'),
('4123', 'Kecerdasan Buatan', 1, 'Teori');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`Nidn`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
