-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2018 pada 05.25
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(8, 'haya', 'd41d8cd98f00b204e9800998ecf8427e', 'Hayabusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `surat_id` int(5) NOT NULL,
  `jenis_surat` char(20) NOT NULL,
  `no_agenda` int(5) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `penjabat_disposisi` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `informasi_disposisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`surat_id`, `jenis_surat`, `no_agenda`, `tgl_terima`, `kode_arsip`, `no_surat`, `tgl_surat`, `pengirim`, `perihal`, `lampiran`, `sifat_surat`, `penjabat_disposisi`, `disposisi`, `asli_copy`, `informasi_disposisi`) VALUES
(8, '', 124, '2018-12-02', 'UM.P07', 4444, '2018-12-16', 'johara', 'bimbingan 2', 'Satu bendel 2', 'Biasa saja', 'dekan fti', 'saiba', 'surat copy', '  0  agagagagag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(5) NOT NULL,
  `no_agenda` int(5) NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `no_agenda`, `kode_arsip`, `tgl_surat`, `no_surat`, `tujuan`, `perihal`, `asli_copy`, `keterangan`) VALUES
(2339, 777, 'UM.P07', '2018-12-04', 123, 'Bimbingan Akademik kedua', 'Bimbingan terakhir', 'surat copy', '  karena bimbingan sangat dibutuhkan oleh mahasiswa  hehehe  he  eeeeee            '),
(2340, 567, 'SS.07', '2018-12-06', 101, 'Mahasiswa Kreatif', 'Percobaan Surat', 'surat asli', ' Karena percobaan dibuthuhkan '),
(2341, 789, 'ps.123', '2018-11-30', 111, 'Apalah', 'Coba', 'surat copy', ' ansaff;,sa ajjsa ahafa '),
(2342, 890, 'KK.45', '2018-12-01', 23, 'ya', 'begitulah', 'surat asli', ' jkhknaf akfs '),
(2343, 111, 'UM.P06', '2018-12-29', 43434, 'Surabaya', 'bimbingan', 'surat asli', 'fffg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `surat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2344;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
