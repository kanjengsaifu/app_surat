-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2018 pada 05.22
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
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `surat_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `surat_id`) VALUES
(1, 'eror.jpg', 'KP.003/939/SMN/XII/2018');

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
(15, 'bmkg', 'bmkg', 'bmkg'),
(16, 'haya', '12345', 'Hayabusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `perihal` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `penjabat_disposisi` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `informasi_disposisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`surat_id`, `no_agenda`, `tgl_terima`, `kode_arsip`, `no_surat`, `tgl_surat`, `pengirim`, `perihal`, `lampiran`, `sifat_surat`, `penjabat_disposisi`, `disposisi`, `asli_copy`, `informasi_disposisi`) VALUES
(8, '001', '2018-12-16', 'UM.206', 'PMSC-KSO-API-NYIA-MTG-0467', '2018-12-12', 'PMSC NYIA', 'Undangan Rapat Navigasi Penerbangan', '-', 'Penting', 'Kasklim Mlati', '0', 'surat asli', '  '),
(9, '002', '2018-12-18', 'PR.202', 'KP.003/939/SMN/XII/2018', '2018-12-02', 'Kasklim Wates', 'Undangan Kumpulan Rutin Tahunan', '-', 'Segera', 'Kasklim Mlati', '0', 'surat copy', ''),
(10, '003', '2018-12-28', 'UM.001', 'BMKG.001/19/12/2018', '2018-12-15', 'Kasklim Wates 2', 'Surat Keputusan Ketua BMKG hahaha', 'Satu bendel', 'Penting', 'Ketua BMKG hihi', '0', 'surat asli', '  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `no_agenda`, `kode_arsip`, `tgl_surat`, `no_surat`, `tujuan`, `perihal`, `asli_copy`, `keterangan`) VALUES
(3, '001', 'KP.003', '2018-12-05', 'KP.003/939/SMN/XII/2018', 'Anang Ariane', 'Undangan Rapat Navigasi Penerbangan', 'surat asli', ''),
(4, '002', 'ME.302', '2018-12-02', 'KP.003/939/SMN/XII/2018', 'Tata Usaha', 'Undangan Rapat Tahunan', 'surat asli', ''),
(5, '003', 'UM.001', '2018-12-19', 'BMKG.002/19/12/2018', 'Ketua BMKG Mlati', 'Keputusan Ketua', 'surat asli', ''),
(6, '0', '0', '0000-00-00', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

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
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
