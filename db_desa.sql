-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 17.47
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `batal_pindah`
--

CREATE TABLE `batal_pindah` (
  `id_batal_pindah` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `alamat_batal_pindah` varchar(255) NOT NULL,
  `tanggal_batal_pindah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `batal_pindah`
--

INSERT INTO `batal_pindah` (`id_batal_pindah`, `id_pejabat`, `nik`, `alamat_batal_pindah`, `tanggal_batal_pindah`) VALUES
(1, 1, '2147483647', 'bhbhjbjhb', '2019-11-15'),
(2, 1, '42432', '6', '2019-11-15'),
(3, 1, '3215260112990001', 'dfdfdsfsd', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belum_menikah`
--

CREATE TABLE `belum_menikah` (
  `id_belum_menikah` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_belum_menikah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belum_menikah`
--

INSERT INTO `belum_menikah` (`id_belum_menikah`, `id_pejabat`, `nik`, `tanggal_belum_menikah`) VALUES
(1, 1, '123456789', '2019-11-15'),
(2, 1, '3215260112990001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belum_sekolah`
--

CREATE TABLE `belum_sekolah` (
  `id_belum_sekolah` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_belum_sekolah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belum_sekolah`
--

INSERT INTO `belum_sekolah` (`id_belum_sekolah`, `id_pejabat`, `nik`, `tanggal_belum_sekolah`) VALUES
(1, 1, '42432', '2019-11-15'),
(2, 1, '3215260112990001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerai_mati`
--

CREATE TABLE `cerai_mati` (
  `id_cerai_mati` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_cerai_mati` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerai_mati`
--

INSERT INTO `cerai_mati` (`id_cerai_mati`, `id_pejabat`, `nik`, `tanggal_cerai_mati`) VALUES
(1, 1, '123456789', '2019-11-14'),
(2, 1, '3215260112990001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
--

CREATE TABLE `domisili` (
  `id_domisili` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_surat_rt` varchar(255) NOT NULL,
  `tanggal_domisili` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `domisili`
--

INSERT INTO `domisili` (`id_domisili`, `id_pejabat`, `nik`, `no_surat_rt`, `tanggal_domisili`) VALUES
(2, 1, '123456789', '1', '2019-11-15'),
(3, 1, '12312421424', '123', '2019-11-21'),
(4, 1, '321560400820003', '123', '2019-11-23'),
(5, 1, '3215260112990001', 'svsd', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `haji`
--

CREATE TABLE `haji` (
  `id_haji` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_haji` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `haji`
--

INSERT INTO `haji` (`id_haji`, `id_pejabat`, `nik`, `tanggal_haji`) VALUES
(3, 1, '232323423', '2019-11-15'),
(4, 1, '12346777', '2019-11-15'),
(5, 1, '123456789', '2019-11-15'),
(6, 1, '3215260607060001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin_keluarga`
--

CREATE TABLE `izin_keluarga` (
  `id_izin_keluarga` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `nik_anak` varchar(30) NOT NULL,
  `tujuan_izin_keluarga` varchar(100) NOT NULL,
  `tanggal_izin_keluarga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `izin_keluarga`
--

INSERT INTO `izin_keluarga` (`id_izin_keluarga`, `id_pejabat`, `nik_ayah`, `nik_anak`, `tujuan_izin_keluarga`, `tanggal_izin_keluarga`) VALUES
(2, 1, '2147483647', '75765757', 'Tegal', '2019-11-15'),
(3, 1, '75765757', '123456789', 'Tegal', '2019-11-15'),
(4, 1, '3215260112990001', '3215260112990001', 'sddvdf', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` bigint(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelahiran` varchar(50) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(59) NOT NULL,
  `berat_bayi` varchar(10) NOT NULL,
  `panjang_bayi` varchar(10) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama`, `hari`, `tempat_lahir`, `tanggal_lahir`, `pukul`, `jenis_kelahiran`, `anak_ke`, `jenis_kelamin`, `alamat`, `berat_bayi`, `panjang_bayi`, `nik_ayah`, `nama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nik_ibu`, `nama_ibu`, `pekerjaan_ibu`, `alamat_ibu`) VALUES
(4, 'Raihan Aditya Alfaridzi', 'Sabtu', 'Karwang', '2018-08-25', '00:00:00', 'Laki Laki', 'Pe', 'Laki Laki', 'Krajan 1 , Desa Warungbambu kecamatan karawang timur Kota k', '3', '15', '3215262507750011', 'Karsa', 'wiraswasta', 'Krajan 1 , Desa Warungbambu kecamatan karawang timur Kota karawang , 41371', '3215265404800010', 'Wiwin Maryani', 'Mengurus Rumah Tangga', 'Krajan 1 , Desa Warungbambu kecamatan karawang timur Kota karawang , 41371'),
(5, 'Lavina Asmara Sofyana', 'Minggu', 'Karawang', '2018-05-06', '07:05:00', 'Laki Laki', 'La', 'Perempuan', 'Sukamaju  Rt.010 Rw.003', '0', '0', '0000000000000000', 'Arga Sofyna', 'Buruh', 'Sukamaju  Rt.010 Rw.003', '0000000000000000', 'Maya Handayani', 'Mengurus Rumah Tangga', 'Sukamaju  Rt.010 Rw.003'),
(6, 'Nailla Zara Aditya', 'Kamis', 'Karawang', '2019-07-11', '09:35:00', 'Laki Laki', 'La', 'Perempuan', 'Suka Mulya Rt.015/004', '0', '0', '0000000000000000', 'Aditya', 'Buruh', 'Suka Mulya Rt.015/004', '0000000000000000', 'Lindawati', 'Mengurus Rumah Tangga', 'Suka Mulya Rt.015/004'),
(7, 'Abdul Latip', 'Rabu', 'Karawang', '2019-07-12', '19:30:00', 'Laki Laki', 'La', 'Laki Laki', 'Krajan I Rt 002 / 001', '0', '0', '0000000000000000', 'Nanasupriyatna', 'Buruh', 'Krajan I Rt 002 / 001', '0000000000000000', 'Resti', 'Mengurus Rumah Tangga', 'Krajan I Rt 002 / 001'),
(8, 'Aidil Akbar Sentosa', 'Kamis', 'Karawang', '2019-08-19', '00:00:00', 'Laki Laki', 'La', 'Laki Laki', 'SukaMulya RT.015 / 05', '0', '0', '0000000000000000', 'Firman', 'Buruh', 'SukaMulya RT.015 / 05', '0000000000000000', 'Nuraeni Halim', ' Mengurus Rumah Tangga', 'SukaMulya RT.015 / 05'),
(9, 'Yonathan Timothy Putra Simatupang', 'Jumat', 'Bekasi', '2019-10-18', '16:34:00', 'Laki Laki', 'La', 'Perempuan', 'Sukamaju RT. 013  / 03', '0', '0', '0000000000000000', 'Agustina Khristine K', 'Buruh', 'Sukamaju RT. 013  / 03', '0000000000000000', 'Ponny Agustin Simatu', 'Mengurus Rumah Tangga', 'Sukamaju RT. 013  / 03'),
(10, 'Sofia Azzahra', 'Jumat', 'Karawang', '2019-11-01', '00:03:00', 'Laki Laki', 'La', 'Laki Laki', 'Bukaper', '0', '0', '0000000000000000', 'Senjaya', 'Buruh', 'Bukaper', '0000000000000000', 'Intan Rahmawati', 'Mengurus Rumah Tangga', 'Bukaper'),
(11, 'Yusuf Fhirdaus', 'Senin', 'Karwang', '2019-10-28', '03:17:00', 'Laki Laki', 'La', 'Laki Laki', 'Wanajaya RT 021 / 005', '0', '0', '0000000000000000', 'Agit Suhendar', 'Buruh', 'Wanajaya RT 021 / 005', '0000000000000000', 'Desih', 'Mengurus Rumah Tangga', 'Wanajaya RT 021 / 005'),
(12, 'Haris Rifqiyana Sofyan', 'Kamis', 'Karawang', '2019-08-29', '14:49:00', 'Laki Laki', 'La', 'Laki Laki', 'Perum Gading Elok 2  RT 029 / 001', '0', '0', '0000000000000000', 'Ahmad Sofyan', 'Buruh', 'Perum Gading Elok 2  RT 029 / 001', '0000000000000000', 'Yani Septiani', 'Mengurus Rumah Tangga', 'Perum Gading Elok 2  RT 029 / 001'),
(13, 'Az Zahra', 'Senin', 'Karwang', '2019-07-01', '00:00:00', 'Laki Laki', 'La', 'Perempuan', 'Sukamaju', '0', '0', '0000000000000000', 'Ahmad M', 'Buruh', 'Sukamaju', '0000000000000000', 'Vanni V', 'Mengurus Rumah Tangga', 'Sukamaju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `nik` bigint(16) NOT NULL,
  `nama_kepala_keluarga` varchar(100) NOT NULL,
  `no_kk` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `hari_wafat` varchar(20) NOT NULL,
  `tanggal_wafat` date NOT NULL,
  `pukul` time NOT NULL,
  `sebab_wafat` varchar(50) NOT NULL,
  `tempat_wafat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nik_ayah` varchar(50) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(29) NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`nik`, `nama_kepala_keluarga`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `rt`, `rw`, `kewarganegaraan`, `hari_wafat`, `tanggal_wafat`, `pukul`, `sebab_wafat`, `tempat_wafat`, `keterangan`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `pekerjaan_ibu`, `alamat_ibu`) VALUES
(0, 'Kantor Kepala Desa Warung Bambu', '0000000000000000', 'A Suhani', 'Karawang', '77', 'Laki Laki', 'Islam', '-', 'SukaMulya ', '016', 'Kepala Dusun Sukamulya', 'Indonesia', 'Minggu', '2018-09-01', '08:00:00', '1', 'Rumah Duka', '1', '0000000000000000', '-', '0001-01-01', '-', 'Kepala Dusun Sukamulya', '0000000000000000', '-', '0001-01-01', '-', 'SukaMulya ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menikah`
--

CREATE TABLE `menikah` (
  `id_menikah` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_menikah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menikah`
--

INSERT INTO `menikah` (`id_menikah`, `id_pejabat`, `nik`, `tanggal_menikah`) VALUES
(1, 1, '42432', '2019-11-15'),
(2, 1, '2147483647', '2019-11-16'),
(3, 1, '3215260401050001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `nip_pejabat` varchar(255) NOT NULL,
  `jabatan_pejabat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `nama_pejabat`, `nip_pejabat`, `jabatan_pejabat`) VALUES
(1, 'Selamet. S.Kom', '19640112 199203 1 008', 'Kepala Desa'),
(2, 'Rohman', '-', 'Sekertaris Desa'),
(3, 'A. Tibor', '-', 'Kaur Pemerintahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaman`
--

CREATE TABLE `pemakaman` (
  `id_pemakaman` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_pemakaman` varchar(255) NOT NULL,
  `hari_pemakaman` varchar(30) NOT NULL,
  `tanggal_dimakamkan` date NOT NULL,
  `jam_dimakamkan` varchar(10) NOT NULL,
  `tanggal_pemakaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemakaman`
--

INSERT INTO `pemakaman` (`id_pemakaman`, `id_pejabat`, `nik`, `tanggal_lahir`, `tempat_pemakaman`, `hari_pemakaman`, `tanggal_dimakamkan`, `jam_dimakamkan`, `tanggal_pemakaman`) VALUES
(1, 1, '2147483647', '0000-00-00', 'Tegal', '4', '0000-00-00', '10:30', '2019-11-15'),
(2, 1, '42432', '0000-00-00', 'Tegal', '', '0000-00-00', '11:11', '2019-11-20'),
(3, 1, '3215260112990001', '0000-00-00', 'vssd', '', '0000-00-00', '22:02', '2019-11-25'),
(4, 1, '3215260400820003', '0000-00-00', 'assaa', '', '0000-00-00', '11:01', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint(16) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `golongan_darah` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `agama`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `status`, `golongan_darah`, `kewarganegaraan`) VALUES
(3215260112990001, 3215262108070011, 'Muhamad Husein', 'Karawang', '1999-12-04', 'Laki Laki', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371     ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Belum Menikah', 'SMA', 'Belum Bkerja', 'Tetap', '-', 'Indonesia'),
(3215260400820003, 3215261009140482, 'Agus Saefudin', 'Karawang', '1992-08-04', 'Laki Laki', 'Krajan 1 Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '003', 'Kepala Dusun Krajan 1', 'Islam', 'Menikah', 'SMA', 'Mahasiswa', 'Tetap', '-', 'Indonesia'),
(3215260401050001, 3215262108070011, 'Tedi Rahman', 'Karawang', '2005-01-04', 'Laki Laki', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Belum Menikah', 'SMP', 'Belum Bekerja', 'Tetap', '-', 'Indonesia'),
(3215260607060001, 3215262108070011, 'Sugiri', 'Karwang', '2006-07-06', 'Laki Laki', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Belum Menikah', 'SMP', 'Belum Bekerja', 'Tetap', '-', 'Indonesia'),
(3215261607780001, 3215267007900001, 'Suhendar', 'Karawang', '1987-07-16', 'Laki Laki', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371  ', '001', 'Kepala Dusun Sukamaju', 'Islam', 'Menikah', 'SMP', 'Buruh', 'Tetap', '-', 'Indonesia'),
(3215262207990004, 3215261009140482, 'Angga Nugraha', 'Karawang', '1999-07-22', 'Laki Laki', 'Krajan 1 Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '003', 'Kepala Dusun Krajan 1', 'Islam', 'Belum Menikah', 'SMA', 'Pelajar', 'Tetap', '-', 'Indonesia'),
(3215262701170002, 3215262108070011, 'David Syahputra', 'Karawang', '2017-01-21', 'Laki Laki', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Belum Menikah', 'Tidak Sekolah', 'Belum Bekerja', 'Tetap', '-', 'Indonesia'),
(3215264206720008, 3215262108070011, 'Sarni', 'Karawang', '1972-08-02', 'Perempuan', 'Krajan 1 Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371       ', '003', 'Kepala Dusun Krajan 1', 'Islam', 'Belum Menikah', 'Tidak Tamat SD', 'Mengurus Rumah Tangg', 'Tetap', '-', 'Indonesia'),
(3215265010760002, 3215260807190011, 'Entin Sutini', 'Karawang', '1976-10-10', 'Perempuan', 'Krajan 1', '002', 'Kepala Dusun Krajan 1', 'Islam', 'Belum Menikah', 'SMA', 'Mengurus Rumah Tangg', 'Tetap', '-', 'Indonesia'),
(3215266909080001, 3215262108070011, 'Rita Khodijah', 'Karawang', '2008-09-29', 'Perempuan', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371 ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Belum Menikah', 'SD', 'Belum Bekerja', 'Tetap', '-', 'Indonesia'),
(3215267007900001, 3215262108070011, 'Ijah', 'Karawang', '1990-07-30', 'Perempuan', 'Sukamaju ,Desa Warung Bambu , Kecamatan Karawang Timur Kota Karawan. 41371    ', '010', 'Kepala Dusun Sukamaju', 'Islam', 'Menikah', 'SMA', 'Megurus Rumah Tangga', 'Tetap', '-', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id_penghasilan` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `keperluan_penghasilan` text NOT NULL,
  `jumlah_penghasilan` int(11) NOT NULL,
  `tanggal_penghasilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penghasilan`
--

INSERT INTO `penghasilan` (`id_penghasilan`, `id_pejabat`, `nik`, `keperluan_penghasilan`, `jumlah_penghasilan`, `tanggal_penghasilan`) VALUES
(1, 1, '2147483647', 'dsss', 24324324, '2019-11-14'),
(2, 1, '3215260112990001', 'fdsg', 2125, '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah`
--

CREATE TABLE `pindah` (
  `id_pindah` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik_kepala_keluarga` varchar(30) NOT NULL,
  `nik_pemohon` varchar(30) NOT NULL,
  `alasan_pindah` varchar(255) NOT NULL,
  `alamat_pindah` varchar(255) NOT NULL,
  `dusun_pindah` varchar(255) NOT NULL,
  `rt_pindah` varchar(5) NOT NULL,
  `rw_pindah` varchar(5) NOT NULL,
  `desa_pindah` varchar(255) NOT NULL,
  `kecamatan_pindah` varchar(255) NOT NULL,
  `kabupaten_pindah` varchar(255) NOT NULL,
  `provinsi_pindah` varchar(255) NOT NULL,
  `kode_pos_pindah` int(5) NOT NULL,
  `telepon_pindah` varchar(12) NOT NULL,
  `tanggal_pindah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pindah`
--

INSERT INTO `pindah` (`id_pindah`, `id_pejabat`, `nik_kepala_keluarga`, `nik_pemohon`, `alasan_pindah`, `alamat_pindah`, `dusun_pindah`, `rt_pindah`, `rw_pindah`, `desa_pindah`, `kecamatan_pindah`, `kabupaten_pindah`, `provinsi_pindah`, `kode_pos_pindah`, `telepon_pindah`, `tanggal_pindah`) VALUES
(1, 1, '75765757', '111111111', 'Keamanan', 'Kp cikedokan desa sukadanau Rt 01/01 dusun 1 no 142, cikarang barat', 'adsd', '7', '77676', 'kkuhuhb', '17845', 'Tegal', 'JAWA BARAT', 17845, '087730384035', '2019-11-19'),
(2, 1, '3215260112990001', '3215261607780001', 'Kesehatan', 'cikarang', 'mojo', '12', '1', 'benge', 'asu', 'krwg', 'jwbarat', 535261, '094898349849', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindahdatang`
--

CREATE TABLE `pindahdatang` (
  `no_kk` bigint(20) NOT NULL,
  `nama_kepala_keluarga` varchar(128) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `jenis_pindah` varchar(100) NOT NULL,
  `klasifikasi_pindah` varchar(100) NOT NULL,
  `status_kk_pindah` varchar(100) NOT NULL,
  `status_kk_tdk_pindah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pindahdatang`
--

INSERT INTO `pindahdatang` (`no_kk`, `nama_kepala_keluarga`, `alamat`, `rt`, `rw`, `nik`, `nama`, `alasan_pindah`, `alamat_tujuan`, `jenis_pindah`, `klasifikasi_pindah`, `status_kk_pindah`, `status_kk_tdk_pindah`) VALUES
(3215260203160013, 'Nasih Sunarwan', 'Sukamulya ', '15', 'Kepala Dusun Sukamulya', 'Nasih sunarwan', '3215260203160013', 'Keluarga', 'Krajan II rt 11 / 002  ', 'Kepala Keluarga dan Seluruh Anggota Keluarga', 'Dalam satu Desa', 'Nomor KK Tetap', 'Nomor KK Tetap'),
(3215261310170007, 'Iwan Kosasih ', 'Krajan 2 . RT 006 / 002  ', '006', 'Kepala Dusun Krajan 2', '3215261310170007', 'Iwan Kosasih ', 'Pekerjaan', 'Gintung RT 001 /003 Kutamekar Ciampel  ', 'Kepala Keluarga', 'Antar Kecamatan', 'Nomor KK Tetap', 'Nomor KK Tetap'),
(3215261604100004, 'Melani', 'Sukamulya', '16', 'Kepala Dusun Sukamulya', '3215261604100004', 'Meelani', 'Pekerjaan', 'Dusun Sentul RT 001 / 001 Cikampek', 'Kepala Keluarga dan Seluruh Anggota Keluarga', 'Antar Kab/Kota', 'Nomor KK Tetap', ''),
(3215262401110019, 'A Dadang Juhara', 'Krajan 1   ', '001', 'Kepala Dusun Krajan 1', '3215262401110019', 'A Dadang Juhara', 'Pekerjaan', 'Jl Veteran Guro RT  001/ 001 no )3 Karawang Wetan   ', 'Kepala Keluarga', 'Antar Desa', 'Nomor KK Tetap', 'Nomor KK Tetap'),
(3215263105110013, 'Andri Apriyani', 'Sukamulya', '17', 'Kepala Dusun Sukamulya', '3215263105110013', 'Andri Apriyani', 'Keluarga', 'Cinangsi RT 002 / 008 Selaksana Bungutsari Tasikmalaya', 'Kepala Keluarga dan Seluruh Anggota Keluarga', 'Antar Kab/Kota', 'Nomor KK Tetap', ''),
(3216111005810010, 'Suryat Man Epeur', 'Wanajaya', '21', 'Kepala Dusun WarnaJaya', '3216111005810010', 'Suryat Man Epeur', 'Pekerjaan', 'Ciluwang Selak ', 'Kepala Keluarga dan Seluruh Anggota Keluarga', 'Antar Kecamatan', 'Nomor KK Tetap', ''),
(3278080708830003, 'Dede Kurnia', 'Sukamaju ', '011', 'Kepala Dusun Sukamaju', '3278080708830003', 'Dede Kurnia', 'Keluarga', 'Pangatang Bawah No.10/ 17 C RT 008 / 008 karawang', 'Kepala Keluarga dan Sebagian Keluarga lainnya', 'Antar Desa', 'Nomor KK Tetap', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skck`
--

CREATE TABLE `skck` (
  `id_skck` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_skck` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skck`
--

INSERT INTO `skck` (`id_skck`, `id_pejabat`, `nik`, `tanggal_skck`) VALUES
(3, 1, '123456789', '2019-11-15'),
(4, 1, '75765757', '2019-11-15'),
(5, 1, '232323423', '2019-11-15'),
(6, 1, '3215260112990001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktm_kesehatan`
--

CREATE TABLE `sktm_kesehatan` (
  `id_sktm_kesehatan` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik_anak` varchar(30) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tanggal_sktm_kesehatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sktm_kesehatan`
--

INSERT INTO `sktm_kesehatan` (`id_sktm_kesehatan`, `id_pejabat`, `nik_anak`, `nik_ayah`, `tanggal_sktm_kesehatan`) VALUES
(2, 1, '', '', '2019-11-15'),
(3, 1, '', '', '2019-11-15'),
(4, 1, '', '', '2019-11-15'),
(5, 1, '111', '12346777', '2019-11-16'),
(6, 1, '42432', '123456789', '2019-11-20'),
(7, 1, '3215260112990001', '3215260112990001', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sktm_pendidikan`
--

CREATE TABLE `sktm_pendidikan` (
  `id_sktm_pendidikan` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `nik_anak` varchar(30) NOT NULL,
  `tanggal_sktm_pendidikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sktm_pendidikan`
--

INSERT INTO `sktm_pendidikan` (`id_sktm_pendidikan`, `id_pejabat`, `nik_ayah`, `nik_anak`, `tanggal_sktm_pendidikan`) VALUES
(1, 1, '123456789', '12346777', '2019-11-15'),
(2, 1, '111', '111111111', '2019-11-16'),
(3, 1, '3215260112990001', '3215260400820003', '2019-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id_surat_kelahiran` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `nik_ibu` varchar(30) NOT NULL,
  `nik_pelapor` varchar(30) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `kelamin_anak` varchar(15) NOT NULL,
  `tempat_lahir_anak` varchar(255) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jam_lahir_anak` varchar(10) NOT NULL,
  `hari_lahir_anak` varchar(20) NOT NULL,
  `hubungan_sebagai` varchar(100) NOT NULL,
  `tanggal_surat_kelahiran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id_surat_kelahiran`, `id_pejabat`, `nik_ayah`, `nik_ibu`, `nik_pelapor`, `nama_anak`, `kelamin_anak`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `jam_lahir_anak`, `hari_lahir_anak`, `hubungan_sebagai`, `tanggal_surat_kelahiran`) VALUES
(2, 1, '123456789', '2147483647', '2147483647', 'syarif', 'Laki-Laki', 'Tegal', '2020-04-17', '11:11', '', 'abah', '2019-11-14'),
(3, 1, '12346777', '75765757', '12346777', 'khoirul syarif', 'Perempuan', 'Tegal', '0000-00-00', '11:11', '', 'abah', '2019-11-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id_surat_kematian` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nik_pelapor` varchar(30) NOT NULL,
  `umur_pelapor` int(11) NOT NULL,
  `tempat_kematian` varchar(255) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `jam_kematian` varchar(10) NOT NULL,
  `hari_kematian` varchar(20) NOT NULL,
  `sebab_kematian` varchar(255) NOT NULL,
  `hubungan_sebagai` varchar(100) NOT NULL,
  `tanggal_surat_kematian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_kematian`
--

INSERT INTO `surat_kematian` (`id_surat_kematian`, `id_pejabat`, `nik`, `nik_pelapor`, `umur_pelapor`, `tempat_kematian`, `tanggal_kematian`, `jam_kematian`, `hari_kematian`, `sebab_kematian`, `hubungan_sebagai`, `tanggal_surat_kematian`) VALUES
(1, 1, '2147483647', '2147483647', 30, 'Tegal', '1990-11-11', '10:30', '', '', 'abah', '2019-11-15'),
(2, 1, '12346777', '123456789', 2, 'Tegal', '0000-00-00', '11:11', '', '', 'ibu', '2019-11-21'),
(3, 1, '3215260112990001', '3215260112990001', 12, 'tegall', '1998-09-16', '11:11', '1', '', 'sa', '2019-11-25'),
(4, 1, '3215261607780001', '3215262701170002', 120, 'sdds', '1998-11-11', '11:01', '', '', 'sodara', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `sejak_usaha` varchar(4) NOT NULL,
  `tanggal_usaha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `id_pejabat`, `nik`, `nama_usaha`, `sejak_usaha`, `tanggal_usaha`) VALUES
(1, 1, '2147483647', 'khoirul syarif', '1886', '2019-11-15'),
(2, 1, '42432', 'khoirul syarif', '4', '2019-11-15'),
(3, 1, '3215260112990001', 'dfdsdf', '1998', '2019-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` enum('admin','sekertaris','kepaladesa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_petugas`, `level`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 'Tibor', 'admin'),
('kepaladesa', 'c4ca4238a0b923820dcc509a6f75849b', 'Slamet', 'kepaladesa'),
('sekdes', 'c4ca4238a0b923820dcc509a6f75849b', 'Rohman', 'sekertaris');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `batal_pindah`
--
ALTER TABLE `batal_pindah`
  ADD PRIMARY KEY (`id_batal_pindah`);

--
-- Indeks untuk tabel `belum_menikah`
--
ALTER TABLE `belum_menikah`
  ADD PRIMARY KEY (`id_belum_menikah`);

--
-- Indeks untuk tabel `belum_sekolah`
--
ALTER TABLE `belum_sekolah`
  ADD PRIMARY KEY (`id_belum_sekolah`);

--
-- Indeks untuk tabel `cerai_mati`
--
ALTER TABLE `cerai_mati`
  ADD PRIMARY KEY (`id_cerai_mati`);

--
-- Indeks untuk tabel `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indeks untuk tabel `haji`
--
ALTER TABLE `haji`
  ADD PRIMARY KEY (`id_haji`);

--
-- Indeks untuk tabel `izin_keluarga`
--
ALTER TABLE `izin_keluarga`
  ADD PRIMARY KEY (`id_izin_keluarga`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `menikah`
--
ALTER TABLE `menikah`
  ADD PRIMARY KEY (`id_menikah`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indeks untuk tabel `pemakaman`
--
ALTER TABLE `pemakaman`
  ADD PRIMARY KEY (`id_pemakaman`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `pindahdatang`
--
ALTER TABLE `pindahdatang`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indeks untuk tabel `sktm_kesehatan`
--
ALTER TABLE `sktm_kesehatan`
  ADD PRIMARY KEY (`id_sktm_kesehatan`);

--
-- Indeks untuk tabel `sktm_pendidikan`
--
ALTER TABLE `sktm_pendidikan`
  ADD PRIMARY KEY (`id_sktm_pendidikan`);

--
-- Indeks untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id_surat_kelahiran`);

--
-- Indeks untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id_surat_kematian`);

--
-- Indeks untuk tabel `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `batal_pindah`
--
ALTER TABLE `batal_pindah`
  MODIFY `id_batal_pindah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `belum_menikah`
--
ALTER TABLE `belum_menikah`
  MODIFY `id_belum_menikah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `belum_sekolah`
--
ALTER TABLE `belum_sekolah`
  MODIFY `id_belum_sekolah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cerai_mati`
--
ALTER TABLE `cerai_mati`
  MODIFY `id_cerai_mati` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id_domisili` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `haji`
--
ALTER TABLE `haji`
  MODIFY `id_haji` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `izin_keluarga`
--
ALTER TABLE `izin_keluarga`
  MODIFY `id_izin_keluarga` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `menikah`
--
ALTER TABLE `menikah`
  MODIFY `id_menikah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemakaman`
--
ALTER TABLE `pemakaman`
  MODIFY `id_pemakaman` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id_penghasilan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id_pindah` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skck`
--
ALTER TABLE `skck`
  MODIFY `id_skck` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sktm_kesehatan`
--
ALTER TABLE `sktm_kesehatan`
  MODIFY `id_sktm_kesehatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sktm_pendidikan`
--
ALTER TABLE `sktm_pendidikan`
  MODIFY `id_sktm_pendidikan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id_surat_kelahiran` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id_surat_kematian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
