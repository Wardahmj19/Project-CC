-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2023 pada 12.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu`
--

CREATE TABLE `kartu` (
  `id` int(11) NOT NULL,
  `kartu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kartu`
--

INSERT INTO `kartu` (`id`, `kartu`) VALUES
(1, 'BNI'),
(2, 'Mandiri'),
(3, 'BSI'),
(4, 'Cash');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'Baju Laki-laki'),
(2, 'Baju Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `noHp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlahPesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `kartu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama`, `alamat`, `noHp`, `email`, `jumlahPesanan`, `deskripsi`, `produk_id`, `kartu_id`) VALUES
(1, '2022-02-02', 'Ahmad Radix', 'Tangerang Selatan', '083867451088', 'ahmad@gmail.com', 1, 'XL', 1, 1),
(2, '2022-09-11', 'Aulia Izza', 'Bekasi', '081267369914', 'aulia@gmail.com', 2, 'L', 2, 3),
(7, '2023-04-05', 'Wardah MJ', 'Tangerang Selatan', '081399999999', 'wardahmj@gmail.com', 2, 'XL dan L', 48, 4),
(8, '2023-05-07', 'M. Ridho ', 'Bogor', '081500000000', 'ridho@gmail.com', 2, 'XL', 49, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(1, 'A001', 'Hoodie Hitam', 84000, 70000, 3, 1, 'XL', 1),
(2, 'B002', 'Blus Wanita Toska', 60000, 50000, 20, 2, 'L', 2),
(45, 'C003', 'Hoodie Essentials', 120000, 100000, 10, 2, 'XL', 1),
(48, 'D004', 'Gamis Korean Style', 240000, 200000, 10, 2, 'XL dan L', 2),
(49, 'E005', 'Celana Kargo Pria', 120000, 100000, 10, 2, 'XL', 1),
(53, 'F006', 'Hoodie Essentials', 180000, 150000, 10, 3, 'XL dan L', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kartu`
--
ALTER TABLE `kartu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_produk` (`produk_id`),
  ADD KEY `fk_pesanan_kartu` (`kartu_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_kategori_produk` (`kategori_produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kartu`
--
ALTER TABLE `kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_kartu` FOREIGN KEY (`kartu_id`) REFERENCES `kartu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
