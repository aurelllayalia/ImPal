-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 18.25
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
-- Database: `tubesimpal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` char(5) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Harga_Barang` varchar(15) NOT NULL,
  `Jenis_Barang` varchar(30) NOT NULL,
  `Jumlah_Barang` varchar(15) NOT NULL,
  `Foto_Barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Harga_Barang`, `Jenis_Barang`, `Jumlah_Barang`, `Foto_Barang`) VALUES
('BR001', 'TV Samsung', '12000000', 'Elektronik', '5', 'tv.jpeg'),
('BR002', 'Dress H&M', '199000', 'Fashion Wanita', '12', 'dress.jpeg'),
('BR003', 'Kasur King Koil', '8000000', 'Mebel', '3', 'kingkoil.jpeg'),
('BR004', 'Bedak Make Over', '125000', 'Kecantikan', '100', 'bedak.jpeg'),
('BR005', 'Sepeda Polygon', '1200000', 'Olahraga', '10', 'sepeda.jpeg'),
('BR006', 'Ban Mobil Dunlop', '1000000', 'Otomotif', '4', 'ban.jpeg'),
('BR007', 'Cokelat Cadburry', '50000', 'Makanan', '150', 'cadburry.jpeg'),
('BR008', 'Sampoo Sunsilk', '25000', 'Kesehatan', '300', 'sunsilk.jpeg'),
('BR009', 'Sepatu Crocodile', '2300000', 'Fashion Pria', '60', 'sepatu.jpeg'),
('BR010', 'Kacamata Gucci', '700000', 'Aksesoris Wanita', '8', 'gucci.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `ID_Request` char(5) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `Konfirmasi` varchar(10) NOT NULL,
  `ID_Supplier` char(5) NOT NULL,
  `ID_Barang` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`ID_Request`, `Keterangan`, `Konfirmasi`, `ID_Supplier`, `ID_Barang`) VALUES
('RQ001', 'Kondisi Baik', 'Terkirim', 'SP001', 'BR001'),
('RQ002', 'Kondisi Baik', 'Sedang dip', 'SP002', 'BR002'),
('RQ003', 'Kondisi Buruk', 'Dibatalkan', 'SP003', 'BR003'),
('RQ004', 'Kondisi Baik', 'Terkirim', 'SP004', 'BR004'),
('RQ005', 'Kondisi Baik', 'Diterima', 'SP005', 'BR005'),
('RQ006', 'Kondisi Baik', 'Diterima', 'SP006', 'BR006'),
('RQ007', 'Kondisi Baik', 'Sedang dip', 'SP007', 'BR007'),
('RQ008', 'Kondisi Buruk', 'Dibatalkan', 'SP008', 'BR008'),
('RQ009', 'Kondisi Buruk', 'Dibatalkan', 'SP009', 'BR009'),
('RQ010', 'Kondisi Baik', 'Sedang dip', 'SP010', 'BR010'),
('RQ011', 'Kondisi Baik', 'Terkirim', 'SP011', 'BR011'),
('RQ012', 'Kondisi Baik', 'Sedang dip', 'SP012', 'BR012'),
('RQ013', 'Kondisi Baik', 'Diterima', 'SP013', 'BR013'),
('RQ014', 'Kondisi Baik', 'Sedang dip', 'SP014', 'BR014'),
('RQ015', 'Kondisi Baik', 'Terkirim', 'SP015', 'BR015'),
('RQ016', 'Kondisi Baik', 'Sedang dip', 'SP016', 'BR016'),
('RQ017', 'Kondisi Baik', 'Diterima', 'SP017', 'BR017'),
('RQ018', 'Kondisi Baik', 'Sedang dip', 'SP018', 'BR018'),
('RQ019', 'Kondisi Baik', 'Diterima', 'SP019', 'BR019'),
('RQ020', 'Kondisi Baik', 'Terkirim', 'SP020', 'BR020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `ID_Staff` char(5) NOT NULL,
  `User_Staff` varchar(10) NOT NULL,
  `Pass_Staff` varchar(10) NOT NULL,
  `Nama_Staff` varchar(30) NOT NULL,
  `Email_Staff` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`ID_Staff`, `User_Staff`, `Pass_Staff`, `Nama_Staff`, `Email_Staff`) VALUES
('ST001', 'djokos', 'b12340', 'Djoko Sutoyo', 'djokos@gmail.com'),
('ST002', 'rhasna', 'b12341', 'Raden Hasna', 'rhasna@gmail.com'),
('ST003', 'farizana', 'b12342', 'Farizan Afif', 'farizana@gmail.com'),
('ST004', 'adityak', 'b12343', 'Aditya Kuncoro', 'adityak@gmail.com'),
('ST005', 'saminemn', 'b12344', 'Saminem Nur', 'sminemn@gmail.com'),
('ST006', 'jaffrudin', 'b12345', 'Jafrudin Soleh', 'jaffrudin@gmail.com'),
('ST007', 'agusk', 'b12346', 'Agus Kandangwesi', 'agusk@gmail.com'),
('ST008', 'tendik', 'b12347', 'Tendi Kusmawan', 'tendik@gmail.'),
('ST009', 'sudiros', 'b12348', 'Sudiro Shiddiq', 'sudiros@gmail.com'),
('ST010', 'anibud', 'b12349', 'Ani Budiani', 'anibud@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `ID_Supplier` char(5) NOT NULL,
  `User_Supplier` varchar(10) NOT NULL,
  `Pass_Supplier` varchar(10) NOT NULL,
  `Nama_Supplier` varchar(30) NOT NULL,
  `Email_Supplier` varchar(30) NOT NULL,
  `Foto_Supplier` varchar(50) NOT NULL,
  `ID_Staff` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`ID_Supplier`, `User_Supplier`, `Pass_Supplier`, `Nama_Supplier`, `Email_Supplier`, `Foto_Supplier`, `ID_Staff`) VALUES
('SP001', 'ramadhang', 'c12340', 'Toko Elektronik Ramadhan ', 'ramadhang@gmail.com', 'elektronik.png', 'ST001'),
('SP002', 'aryaw', 'c12341', 'Butik Arya ', 'aryaw@gmail.com', 'butik.jpg', 'ST002'),
('SP003', 'sudars', 'c12342', 'Mebel Bambang ', 'sudars@gmail.com', 'meubell.png', 'ST003'),
('SP004', 'sria', 'c12343', 'Beauty Sri', 'sria@gmail.com', 'cantik.png', 'ST004'),
('SP005', 'kuntoroa', 'c12344', 'Kuntoro Agung Sport', 'kuntoroa@gmail.com', 'olahraga.jpg', 'ST005'),
('SP006', 'megawa', 'c12345', 'Megawati Soekarno Otomotif', 'megawa@gmail.com', 'otomotiff.jpg', 'ST006'),
('SP007', 'sukmaw', 'c12346', 'Sukma Wati Mart', 'sukmaw@gmail.com', 'makanan.jpg', 'ST007'),
('SP008', 'sudarjow', 'c12347', 'Sudarjo Wono Mart', 'sudarjow@gmail.com', 'apotek.jpg', 'ST008'),
('SP009', 'haikall', 'c12348', 'Haikal Fashion', 'haikall@gmail.com', 'pria.png', 'ST009'),
('SP010', 'irsyadr', 'c12349', 'Irsyad Rafi Girl Mart', 'irsyadr@gmail.com', 'kecanteq.png', 'ST010');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID_Request`),
  ADD KEY `ID_Supplier` (`ID_Supplier`),
  ADD KEY `ID_Barang` (`ID_Barang`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID_Supplier`),
  ADD KEY `ID_Staff` (`ID_Staff`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `request` (`ID_Barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`ID_Staff`) REFERENCES `supplier` (`ID_Staff`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`ID_Supplier`) REFERENCES `request` (`ID_Supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
