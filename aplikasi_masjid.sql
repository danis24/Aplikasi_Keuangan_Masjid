-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Okt 2015 pada 13.35
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasi_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_operator` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas_masjid`
--

CREATE TABLE IF NOT EXISTS `tbl_kas_masjid` (
  `id_kas` varchar(10) NOT NULL,
  `pemasukan` varchar(10) DEFAULT NULL,
  `pengeluaran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemasukan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemasukan` (
  `id_pemasukan` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` text,
  `pemasukan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pengeluaran` (
  `id_pengeluaran` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` text,
  `pengeluaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE IF NOT EXISTS `tbl_petugas` (
  `kd_petugas` varchar(10) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nm_petugas` varchar(25) NOT NULL,
  `tmpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `thn_jabatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`kd_petugas`, `no_ktp`, `nm_petugas`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `jk`, `jabatan`, `no_telpon`, `status`, `thn_jabatan`) VALUES
('P00001', '1137050062', 'Danis Yogaswara', 'Bandung', '1995-05-24', 'Cibiru Tonggoh RT 01 RW 07 Desa Cibiru Wetan Kec. Cileunyi', 'Laki - Laki', 'J00001', '089602687905', 'Aktif', '2015'),
('P00002', '1137050055', 'Bismar', 'Sukabumi', '1994-01-01', 'sukabumi', 'Laki - Laki', 'J00002', '089602687904', 'Aktif', '2014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_struk_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_struk_jabatan` (
  `kd_jab` varchar(15) NOT NULL,
  `nm_jab` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_struk_jabatan`
--

INSERT INTO `tbl_struk_jabatan` (`kd_jab`, `nm_jab`, `ket`) VALUES
('J00001', 'Ketua DKM', 'Dewan Kemakmuran Masjid'),
('J00002', 'Juru Tulis', 'okehh'),
('J00003', 'Bendahara', 'Juru Uang'),
('J00004', 'Kebersihan', 'Tukang Bebersihan'),
('J00005', 'aduh', 'hahahah'),
('J00006', 'Buset', 'sippp'),
('J00007', 'cingan', 'okehh'),
('J00008', 'hadohh', 'hahahahah'),
('J00009', 'gustiii', 'benerrr teuu'),
('J00010', 'hupii', 'hupirr'),
('J00011', 'cusss', 'ahhh'),
('J00012', 'lalalalal', 'lalalalaal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat` (
  `id_zakat` varchar(10) NOT NULL,
  `jenis_zakat` varchar(10) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_fitrah`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat_fitrah` (
  `id_zakat_fitrah` varchar(10) NOT NULL,
  `petugas` varchar(10) DEFAULT NULL,
  `nama_pembayar` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telpon` varchar(15) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `satuan` int(11) DEFAULT NULL,
  `jiwa` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_zakat_mal`
--

CREATE TABLE IF NOT EXISTS `tbl_zakat_mal` (
  `id_zakat_mal` varchar(10) NOT NULL,
  `petugas` varchar(10) DEFAULT NULL,
  `nama_pembayar` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telpon` varchar(15) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
 ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
 ADD PRIMARY KEY (`id_kas`);

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
 ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
 ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
 ADD PRIMARY KEY (`kd_petugas`);

--
-- Indexes for table `tbl_struk_jabatan`
--
ALTER TABLE `tbl_struk_jabatan`
 ADD PRIMARY KEY (`kd_jab`);

--
-- Indexes for table `tbl_zakat`
--
ALTER TABLE `tbl_zakat`
 ADD PRIMARY KEY (`id_zakat`);

--
-- Indexes for table `tbl_zakat_fitrah`
--
ALTER TABLE `tbl_zakat_fitrah`
 ADD PRIMARY KEY (`id_zakat_fitrah`);

--
-- Indexes for table `tbl_zakat_mal`
--
ALTER TABLE `tbl_zakat_mal`
 ADD PRIMARY KEY (`id_zakat_mal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
