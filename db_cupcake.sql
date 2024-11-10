-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2024 pada 09.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cupcake`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id`, `produk_id`, `jumlah`, `total`, `status`) VALUES
(1, 1, 1, 60000, 'dibayar'),
(2, 1, 1, 60000, 'dibayar'),
(3, 3, 1, 35000, 'dibayar'),
(7, 3, 1, 35000, 'dibayar'),
(8, 1, 2, 120000, 'dibayar'),
(9, 3, 1, 35000, 'dibayar'),
(10, 3, 1, 35000, 'dibayar'),
(11, 2, 1, 30000, 'dibayar'),
(12, 4, 1, 35000, 'dibayar'),
(13, 6, 1, 60000, 'dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`, `kategori`, `foto`) VALUES
(1, 'cupcake vanilla love', 60000, 'Appetizer', '672f2504670a7.jpg'),
(2, 'Cupcake Blueberry', 30000, 'Appetizer', '67306795f0773.jpg'),
(3, 'Cupcake Oreo', 35000, 'Appetizer', 'cupcake2.jpg'),
(4, 'Cupcake Coklat Vanilla', 35000, 'Appetizer', '672f25d401090.jpg'),
(5, 'Cupcake Lolipop', 60000, 'Dessert', '672f25b9c2c45.jpg'),
(6, 'Cupcake Lolipop', 60000, 'Appetizer', '672f25b9c2c45.jpg'),
(7, 'Cupcake Caramel', 30000, 'Appetizer', 'cupcake5.jpg'),
(8, 'Cupcake Donuts Chocolate', 70000, 'Appetizer', 'cupcake6.jpg'),
(9, 'Cupcake Donuts Vanilla', 125000, 'Appetizer', 'cupcake7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
