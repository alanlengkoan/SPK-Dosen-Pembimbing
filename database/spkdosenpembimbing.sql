-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2019 pada 03.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkdosenpembimbing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pw_kriteria`
--

CREATE TABLE `pw_kriteria` (
  `id` int(11) NOT NULL,
  `pw1` varchar(5) NOT NULL,
  `pw2` varchar(5) NOT NULL,
  `pw3` varchar(5) NOT NULL,
  `pw4` varchar(5) NOT NULL,
  `pw5` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pw_kriteria`
--

INSERT INTO `pw_kriteria` (`id`, `pw1`, `pw2`, `pw3`, `pw4`, `pw5`) VALUES
(0, '0.6', '0.36', '0.14', '0.11', '0.03'),
(0, '0.37', '0.28', '0.2', '0.09', '0.06'),
(0, '0', 'NAN', 'NAN', 'NAN', 'NAN'),
(0, '0', 'NAN', 'NAN', 'NAN', 'NAN'),
(0, '0', 'NAN', 'NAN', 'NAN', 'NAN'),
(0, '0', 'NAN', 'NAN', 'NAN', 'NAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_data` varchar(7) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `detail_dosen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_data`, `nama_alternatif`, `detail_dosen`) VALUES
('dta-001', 'Dra. Najirah Umar, S.Kom., MT.', '[{\"nip\":\"0031026703\",\"nama_dosen\":\"Dra. Najirah Umar, S.Kom., MT.\",\"golongan\":\"III-D\",\"jabatan_fungsional\":\"Lektor\",\"jabatan_struktural\":\"Kepala LPM\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Teknik Elektro\",\"s3\":\"S3\",\"bidang_ilmu2\":\"-\"}]'),
('dta-002', 'Billy Eden William Asrul, S.Kom., MT.', '[{\"nip\":\"0913058901\",\"nama_dosen\":\"Billy Eden William Asrul, S.Kom., MT.\",\"golongan\":\"III-A\",\"jabatan_fungsional\":\"Asisten Ahli\",\"jabatan_struktural\":\"Ketua Jurusan Manajemen Informatika\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Teknik Elektro\",\"s3\":\"S3\",\"bidang_ilmu2\":\"-\"}]'),
('dta-003', 'Dr. Nasrullah, M.Si.', '[{\"nip\":\"00100116503\",\"nama_dosen\":\"Dr. Nasrullah, M.Si.\",\"golongan\":\"III-D\",\"jabatan_fungsional\":\"Lektor\",\"jabatan_struktural\":\"Wakil Ketua Bidang Kemahasiswaan\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Administrasi Pembang\",\"s3\":\"S3\",\"bidang_ilmu2\":\"Administrasi Publik\"}]'),
('dta-004', 'Dr. Eng. Agussalim, MT.', '[{\"nip\":\"0911088501\",\"nama_dosen\":\"Dr. Eng. Agussalim, MT.\",\"golongan\":\"III-A\",\"jabatan_fungsional\":\"Asisten Ahli\",\"jabatan_struktural\":\"Ketua STMIK\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Teknik Elektro\",\"s3\":\"S3\",\"bidang_ilmu2\":\"Ilmu Komputer\"}]'),
('dta-005', 'Mirfan, S.Kom., MT., M.Kom.', '[{\"nip\":\"0927038102\",\"nama_dosen\":\"Mirfan, S.Kom., MT., M.Kom.\",\"golongan\":\"III-B\",\"jabatan_fungsional\":\"Lektor\",\"jabatan_struktural\":\"Wakil Ketua Bidang Kemahasiswaan\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Sistem Komputer\",\"s3\":\"S3\",\"bidang_ilmu2\":\"-\"}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bidangilmu`
--

CREATE TABLE `tb_bidangilmu` (
  `id_bidangilmu` varchar(25) NOT NULL,
  `bidang_ilmu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bidangilmu`
--

INSERT INTO `tb_bidangilmu` (`id_bidangilmu`, `bidang_ilmu`) VALUES
('ID_BIDANGILMU-01', 'Teknik Informatika'),
('ID_BIDANGILMU-02', 'Teknik Elektro'),
('ID_BIDANGILMU-03', 'Sistem Komputer'),
('ID_BIDANGILMU-04', 'Ilmu Komputer'),
('ID_BIDANGILMU-05', 'Ilmu Pendidikan'),
('ID_BIDANGILMU-06', 'Ilmu Komunikasi'),
('ID_BIDANGILMU-07', 'Administrasi Pembangunan'),
('ID_BIDANGILMU-08', 'Administrasi Publik'),
('ID_BIDANGILMU-09', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datadosen`
--

CREATE TABLE `tb_datadosen` (
  `nip` varchar(15) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `golongan` varchar(15) DEFAULT NULL,
  `jabatan_fungsional` varchar(50) DEFAULT NULL,
  `jabatan_struktural` varchar(50) NOT NULL,
  `s2` varchar(20) NOT NULL,
  `bidang_ilmu1` varchar(20) NOT NULL,
  `s3` varchar(20) NOT NULL,
  `bidang_ilmu2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datadosen`
--

INSERT INTO `tb_datadosen` (`nip`, `nama_dosen`, `golongan`, `jabatan_fungsional`, `jabatan_struktural`, `s2`, `bidang_ilmu1`, `s3`, `bidang_ilmu2`) VALUES
('0005057801', 'Dr. Eng. Hazriani, S.Kom.MT', 'III-D', 'Lektor', '-', 'S2', 'Teknik Elektro', 'S3', 'Ilmu Komputer'),
('0006067601', 'Herlinah, S.Kom., M.Si.', 'IV-A', 'Lektor Kepala', '-', 'S2', 'Ilmu Komunikasi', 'S3', '-'),
('00100116503', 'Dr. Nasrullah, M.Si.', 'III-D', 'Lektor', 'Wakil Ketua Bidang Kemahasiswaan', 'S2', 'Administrasi Pembang', 'S3', 'Administrasi Publik'),
('0010037501', 'Dr. Abdul Latief Arda, M.Si., M.Kom.', 'III-C', 'Lektor', 'Ketua Jurusan Sistem Komputer', 'S2', 'Ilmu Komputer', 'S3', 'Ilmu Pendidikan'),
('0015017501', 'Dr. IT. Supriadi Sahibu, S.Kom., MT.', 'III-B', 'Lektor', '-', 'S2', 'Teknik Elektro', 'S3', 'Teknik Informatika'),
('0031026703', 'Dra. Najirah Umar, S.Kom., MT.', 'III-D', 'Lektor', 'Kepala LPM', 'S2', 'Teknik Elektro', 'S3', '-'),
('0901068902', 'Matalangi., S.Kom., M.Kom.', 'III-B', 'Asisten Ahli', '-', 'S2', 'Sistem Komputer', 'S3', '-'),
('0902118102', 'Syamsu Alam, S.Kom., MT.', 'III-B', 'Lektor', '-', 'S2', 'Teknik Elektro', 'S3', '-'),
('0903127202', 'Guntur, S.Kom., MT.', 'III-B', 'Asisten Ahli', 'Kepala Laboratorium', 'S2', 'Sistem Komputer', 'S3', '-'),
('0905129101', 'Pujianti Wahyuningsih., S.Kom., M.Kom.', 'III-B', 'Asisten Ahli', '-', 'S2', 'Sistem Komputer', 'S3', '-'),
('0910055802', 'Drs. H. Abd. Rochman, M.Ag., M.Kom.', 'IV-B', '-', '-', 'S2', 'Sistem Komputer', 'S3', '-'),
('0911088501', 'Dr. Eng. Agussalim, MT.', 'III-A', 'Asisten Ahli', 'Ketua STMIK', 'S2', 'Teknik Elektro', 'S3', 'Ilmu Komputer'),
('0913058901', 'Billy Eden William Asrul, S.Kom., MT.', 'III-A', 'Asisten Ahli', 'Ketua Jurusan Manajemen Informatika', 'S2', 'Teknik Elektro', 'S3', '-'),
('0914058403', 'Dr.Eng. Yuyun, S.Kom.MT.', 'III-A', 'Lektor', '-', 'S2', 'Teknik Elektro', 'S3', 'Ilmu Komputer'),
('0918068201', 'Respaty Namruddin, S.Kom.,MT', 'III-A', 'Asisten Ahli', '-', 'S2', 'Teknik Elektro', 'S3', '-'),
('0918087401', 'Seni Asria., ST., M.Kom.', 'III-A', 'Asisten Ahli', '-', 'S2', 'Ilmu Komunikasi', 'S3', '-'),
('0920087704', 'Muhammad Risal., S.Kom., MT.', 'III-C', 'Lektor', 'Kepala LPPM', 'S2', 'Teknik Elektro', 'S3', '-'),
('0925029001', 'A. Edeth Fuari A., S.Kom., M.Kom.', 'III-B', 'Asisten Ahli', '-', 'S2', 'Sistem Komputer', 'S3', '-'),
('0927038102', 'Mirfan, S.Kom., MT., M.Kom.', 'III-B', 'Lektor', 'Wakil Ketua Bidang Kemahasiswaan', 'S2', 'Sistem Komputer', 'S3', '-'),
('0928038902', 'Muhammad Akbar., S.Kom., M.Kom.', 'III-B', 'Asisten Ahli', 'Ketua Jurusan Manajemen Informatika', 'S2', 'Sistem Komputer', 'S3', '-'),
('0929078701', 'Nurilmiyanti Wardhani, S.Kom.,MT.', 'III-A', 'Asisten Ahli', '-', 'S2', 'Teknik Elektro', 'S3', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datamhs`
--

CREATE TABLE `tb_datamhs` (
  `npm` varchar(12) NOT NULL,
  `nama_mahasiswa` varchar(30) DEFAULT NULL,
  `tlp` varchar(13) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `tempat_penelitian` varchar(50) DEFAULT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `kd_golongan` char(10) NOT NULL,
  `jenis_golongan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_golongan`
--

INSERT INTO `tb_golongan` (`kd_golongan`, `jenis_golongan`) VALUES
('ID_GOL-01', 'III-A'),
('ID_GOL-02', 'III-B'),
('ID_GOL-03', 'III-C'),
('ID_GOL-04', 'III-D'),
('ID_GOL-05', 'IV-A'),
('ID_GOL-06', 'IV-B'),
('ID_GOL-07', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jafung`
--

CREATE TABLE `tb_jafung` (
  `id_jafung` varchar(12) NOT NULL,
  `jenis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jafung`
--

INSERT INTO `tb_jafung` (`id_jafung`, `jenis`) VALUES
('ID_JAFUNG-01', 'Lektor'),
('ID_JAFUNG-02', 'Lektor Kepala'),
('ID_JAFUNG-03', 'Asisten Ahli'),
('ID_JAFUNG-04', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jstruktural`
--

CREATE TABLE `tb_jstruktural` (
  `id_jstruktural` varchar(20) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jstruktural`
--

INSERT INTO `tb_jstruktural` (`id_jstruktural`, `jenis`) VALUES
('ID_JSTRUKTURAL-01', 'Ketua STMIK'),
('ID_JSTRUKTURAL-02', 'Wakil Ketua Bidang Kemahasiswaan'),
('ID_JSTRUKTURAL-03', 'Ketua Jurusan Teknik Informatika'),
('ID_JSTRUKTURAL-04', 'Ketua Jurusan Sistem Komputer'),
('ID_JSTRUKTURAL-05', 'Ketua Jurusan Manajemen Informatika'),
('ID_JSTRUKTURAL-06', 'Kepala LPPM'),
('ID_JSTRUKTURAL-07', 'Kepala LPM'),
('ID_JSTRUKTURAL-08', 'Kepala Laboratorium'),
('ID_JSTRUKTURAL-09', 'Kepala BAAK'),
('ID_JSTRUKTURAL-10', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `kd_jurusan` varchar(15) NOT NULL,
  `jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kd_jurusan`, `jurusan`) VALUES
('ID_JURUSAN-05', 'Komputerisasi Akuntansi'),
('ID_JURUSAN-01', 'Manajemen Informatika'),
('ID_JURUSAN-04', 'Sistem Informasi'),
('ID_JURUSAN-03', 'Sistem Komputer'),
('ID_JURUSAN-02', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` varchar(7) NOT NULL,
  `kd_kriteria` int(7) DEFAULT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`) VALUES
('krt-001', 201, 'Fungsional'),
('krt-002', 202, 'Struktural'),
('krt-003', 203, 'Bidang Ilmu'),
('krt-004', 204, 'Penelitian Dosen'),
('krt-005', 205, 'Mahasiswa yang pernah dibimbing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `passname` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `npm`, `passname`, `password`, `level`) VALUES
(1, 'admin', 'admin', '$2y$10$woBQK/CsluBM6D7cVjWMCuAzTrM2hALarTHpQlP87KA8YD5kZO/0S', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_alternatif`
--

CREATE TABLE `tb_perb_alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `nb_db` int(5) NOT NULL,
  `alternatif1` varchar(30) NOT NULL,
  `alternatif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perb_alternatif`
--

INSERT INTO `tb_perb_alternatif` (`id_alternatif`, `nm_banding`, `nb_db`, `alternatif1`, `alternatif`) VALUES
('A01', '1. Sama penting dengan', 1, 'Dra. Najirah Umar, S.Kom., MT.', 'Dra. Najirah Umar, S.Kom., MT.'),
('A02', '1. Sama penting dengan', 1, 'Billy Eden William Asrul, S.Ko', 'Billy Eden William Asrul, S.Ko'),
('A03', '1. Sama penting dengan', 1, 'Dr. Nasrullah, M.Si.', 'Dr. Nasrullah, M.Si.'),
('A04', '1. Sama penting dengan', 1, 'Dr. Eng. Agussalim, MT.', 'Dr. Eng. Agussalim, MT.'),
('A05', '1. Sama penting dengan', 1, 'Mirfan, S.Kom., MT., M.Kom.', 'Mirfan, S.Kom., MT., M.Kom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perb_kriteria`
--

CREATE TABLE `tb_perb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perb_kriteria`
--

INSERT INTO `tb_perb_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01', 1, 'Fungsional', '1. Sama penting dengan', 'Fungsional'),
('B02', 1, 'Struktural', '1. Sama penting dengan', 'Struktural'),
('B03', 1, 'Bidang Ilmu', '1. Sama penting dengan', 'Bidang Ilmu'),
('B04', 1, 'Penelitian Dosen', '1. Sama penting dengan', 'Penelitian Dosen'),
('B05', 1, 'Mahasiswa yang pernah dibimbin', '1. Sama penting dengan', 'Mahasiswa yang pernah dibimbin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trsbimbingan`
--

CREATE TABLE `tb_trsbimbingan` (
  `kd_trsbimbingan` varchar(20) NOT NULL,
  `npm` varchar(12) DEFAULT NULL,
  `dosen_pembimbing` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_trsbimbingan`
--

INSERT INTO `tb_trsbimbingan` (`kd_trsbimbingan`, `npm`, `dosen_pembimbing`) VALUES
('ID_TRANSAKSI-01', '2015020007', '[{\"nip\":\"121212\",\"nama_dosen\":\"Budi\",\"golongan\":\"Tes\",\"jabatan_fungsional\":\"Tes\",\"jabatan_struktural\":\"Tes\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Tes\",\"s3\":\"S3\",\"bidang_ilmu2\":\"Tes\",\"dosen_pembimbing\":\"Pembimbing 1\"},{\"nip\":\"121212\",\"nama_dosen\":\"Budi\",\"golongan\":\"Tes\",\"jabatan_fungsional\":\"Tes\",\"jabatan_struktural\":\"Tes\",\"s2\":\"S2\",\"bidang_ilmu1\":\"Tes\",\"s3\":\"S3\",\"bidang_ilmu2\":\"Tes\",\"dosen_pembimbing\":\"Pembimbing 2\"}]');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_datadosen`
--
ALTER TABLE `tb_datadosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_datamhs`
--
ALTER TABLE `tb_datamhs`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`kd_golongan`);

--
-- Indeks untuk tabel `tb_jafung`
--
ALTER TABLE `tb_jafung`
  ADD PRIMARY KEY (`id_jafung`);

--
-- Indeks untuk tabel `tb_jstruktural`
--
ALTER TABLE `tb_jstruktural`
  ADD PRIMARY KEY (`id_jstruktural`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_trsbimbingan`
--
ALTER TABLE `tb_trsbimbingan`
  ADD PRIMARY KEY (`kd_trsbimbingan`),
  ADD KEY `npm` (`npm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
