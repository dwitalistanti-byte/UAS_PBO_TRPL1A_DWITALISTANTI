-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jun 2026 pada 00.52
-- Versi server: 8.4.3
-- Versi PHP: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `db_uas_pbo_trpl1a_dwitalistanti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(10,2) NOT NULL,
  `jenis_pembiayaan` enum('mandiri','bidikmisi','prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Ahmad Fauzi', '202301001', 4, 4500000.00, 'mandiri', 'Golongan 3', NULL, NULL),
(2, 'Siti Aisyah', '202301002', 4, 6000000.00, 'mandiri', 'Golongan 4', NULL, NULL),
(3, 'Budi Santoso', '202202015', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(4, 'Citra Lestari', '202202016', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(5, 'Dedi Wijaya', '202403040', 2, 1500000.00, 'prestasi', NULL, 'Yayasan Toyota', 3.50),
(6, 'Eka Putri', '202403041', 2, 2000000.00, 'prestasi', NULL, 'Bank Indonesia', 3.25),
(7, 'Fajar Ramadhan', '202301003', 4, 4500000.00, 'mandiri', 'Golongan 3', NULL, NULL),
(8, 'Gita Gutawa', '202301004', 4, 7500000.00, 'mandiri', 'Golongan 5', NULL, NULL),
(9, 'Hendra Kurnia', '202202017', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(10, 'Indah Permata', '202202018', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(11, 'Joko Susilo', '202403042', 2, 0.00, 'prestasi', NULL, 'Djarum Foundation', 3.40),
(12, 'Kartika Sari', '202403043', 2, 1000000.00, 'prestasi', NULL, 'Pertamina Sobat Bumi', 3.30),
(13, 'Lukman Hakim', '202301005', 4, 3000000.00, 'mandiri', 'Golongan 2', NULL, NULL),
(14, 'Mega Utami', '202301006', 4, 6000000.00, 'mandiri', 'Golongan 4', NULL, NULL),
(15, 'Novi Andriani', '202202019', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(16, 'Oki Setiawan', '202202020', 6, 0.00, 'bidikmisi', NULL, 'Kemendikbudristek', NULL),
(17, 'Putri Rahayu', '202403044', 2, 2500000.00, 'prestasi', NULL, 'Beasiswa Pemprov', 3.00),
(18, 'Rizky Billar', '202403045', 2, 0.00, 'prestasi', NULL, 'Tanoto Foundation', 3.60),
(19, 'Surya Saputra', '202301007', 4, 4500000.00, 'mandiri', 'Golongan 3', NULL, NULL),
(20, 'Tiara Andini', '202301008', 4, 7500000.00, 'mandiri', 'Golongan 5', NULL, NULL);

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
