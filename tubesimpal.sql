-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2019 pada 17.36
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
  `Jumlah_Barang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Harga_Barang`, `Jenis_Barang`, `Jumlah_Barang`) VALUES
('BR001', 'TV Samsung', '12000000', 'Elektronik', '5'),
('BR002', 'Dress H&M', '199000', 'Pakaian Wanita', '12'),
('BR003', 'Kasur King Koil', '8000000', 'Mebel', '3'),
('BR004', 'Bedak Make Over', '125000', 'Kecantikan', '100'),
('BR005', 'Sepeda Polygon', '1200000', 'Olahraga', '10'),
('BR006', 'Ban Mobil Dunlop', '1000000', 'Otomotif', '4'),
('BR007', 'Cokelat Cadburry', '50000', 'Makanan', '150'),
('BR008', 'Sampoo Sunsilk', '25000', 'Kesehatan', '300'),
('BR009', 'Sepatu Crocodile', '2300000', 'Pakaian Pria', '60'),
('BR010', 'Kacamata Gucci', '700000', 'Aksesoris Wanita', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `No_Laporan` char(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `Pengirim` varchar(30) NOT NULL,
  `Penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`No_Laporan`, `Tanggal`, `Pengirim`, `Penerima`) VALUES
('L001', '2019-09-01', 'Aqmarina Alifah', 'Syifa Khairunnisa'),
('L002', '2019-09-02', 'Naufal Rabbani', 'Labib Lukman'),
('L003', '2019-09-03', 'Rodi Akbar', 'Dimas Setiawan'),
('L004', '2019-09-04', 'Esa Assalam', 'Dira Afwa'),
('L005', '2019-09-05', 'Rizky Wira', 'Nauffan Mufti'),
('L006', '2019-09-06', 'Marion Jola', 'Christian Hari'),
('L007', '2019-09-07', 'Farraz Daffa', 'Aisyah Putri'),
('L008', '2019-09-08', 'Wishnu Dwi', 'Rizal Kusuma'),
('L009', '2019-09-09', 'Devi Wijayanti', 'David Adi'),
('L010', '2019-09-10', 'Novia Ruselia', 'Brigita Tenggehi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `ID_Manager` char(5) NOT NULL,
  `User_Manager` varchar(10) NOT NULL,
  `Pass_Manager` varchar(10) NOT NULL,
  `Nama_Manager` varchar(30) NOT NULL,
  `Kontak_Manager` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`ID_Manager`, `User_Manager`, `Pass_Manager`, `Nama_Manager`, `Kontak_Manager`) VALUES
('MN001', 'syifak', 'a12340', 'Syifa Khairunnisa', '081211003970'),
('MN002', 'labibl', 'a12341', 'Labib Lukman', '085779228484'),
('MN003', 'dimass', 'a12342', 'Dimas Setiawan', '081585811233'),
('MN004', 'diraa', 'a12343', 'Dira Afwa', '082451573458'),
('MN005', 'nauffanm', 'a12344', 'Nauffan Mufti', '085634234966'),
('MN006', 'christianh', 'a12345', 'Christian Harry', '082244765733'),
('MN007', 'asiyahp', 'a12346', 'Aisyah Putri', '081635278890'),
('MN008', 'rizalk', 'a12347', 'Rizal Kusuma', '081273689099'),
('MN009', 'davida', 'a12348', 'David Adi', '089744528391'),
('MN010', 'brigitat', 'a12349', 'Brigita Tenggehi', '088567456678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meminta`
--

CREATE TABLE `meminta` (
  `ID_Request` char(5) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `Konfirmasi` varchar(10) NOT NULL,
  `ID_Supplier` char(5) NOT NULL,
  `ID_Barang` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meminta`
--

INSERT INTO `meminta` (`ID_Request`, `Keterangan`, `Konfirmasi`, `ID_Supplier`, `ID_Barang`) VALUES
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
  `Kontak_Staff` varchar(15) NOT NULL,
  `ID_Manager` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`ID_Staff`, `User_Staff`, `Pass_Staff`, `Nama_Staff`, `Kontak_Staff`, `ID_Manager`) VALUES
('ST001', 'djokos', 'b12340', 'Djoko Sutoyo', '081345631287', 'MN001'),
('ST002', 'rhasna', 'b12341', 'Raden Hasna', '081499876645', 'MN002'),
('ST003', 'farizana', 'b12342', 'Farizan Afif', '082287560909', 'MN003'),
('ST004', 'adityak', 'b12343', 'Aditya Kuncoro', '08134475884', 'MN004'),
('ST005', 'saminemn', 'b12344', 'Saminem Nur', '081395018881', 'MN005'),
('ST006', 'jaffrudin', 'b12345', 'Jafrudin Soleh', '081344563312', 'MN006'),
('ST007', 'agusk', 'b12346', 'Agus Kandangwesi', '081311324475', 'MN007'),
('ST008', 'tendik', 'b12347', 'Tendi Kusmawan', '081277659991', 'MN008'),
('ST009', 'sudiros', 'b12348', 'Sudiro Shiddiq', '087711883955', 'MN009'),
('ST010', 'anibud', 'b12349', 'Ani Budiani', '085721212121', 'MN010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `ID_Supplier` char(5) NOT NULL,
  `User_Supplier` varchar(10) NOT NULL,
  `Pass_Supplier` varchar(10) NOT NULL,
  `Nama_Supplier` varchar(30) NOT NULL,
  `Kontak_Supplier` varchar(15) NOT NULL,
  `ID_Staff` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`ID_Supplier`, `User_Supplier`, `Pass_Supplier`, `Nama_Supplier`, `Kontak_Supplier`, `ID_Staff`) VALUES
('SP001', 'ramadhang', 'c12340', 'Ramadhan Gani', '086344263768', 'ST001'),
('SP002', 'aryaw', 'c12341', 'Arya Wahyu', '089234354321', 'ST002'),
('SP003', 'sudars', 'c12342', 'Sudarsono Bambang', '082135436457', 'ST003'),
('SP004', 'sria', 'c12343', 'Sri Ani', '089345252345', 'ST004'),
('SP005', 'kuntor', 'c12344', 'Kuntoro Agung', '088835346342', 'ST005'),
('SP006', 'megawa', 'c12345', 'Megawati Soekarno', '087712435425', 'ST006'),
('SP007', 'sukmaw', 'c12346', 'Sukma Wati', '087223534656', 'ST007'),
('SP008', 'sudarjow', 'c12347', 'Sudarjo Wono', '089234256356', 'ST008'),
('SP009', 'haikall', 'c12348', 'Haikal Limansyah', '082111462442', 'ST009'),
('SP010', 'irsyadr', 'c12349', 'Irsyad Rafi', '081323758863', 'ST010');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`No_Laporan`);

--
-- Indeks untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID_Manager`);

--
-- Indeks untuk tabel `meminta`
--
ALTER TABLE `meminta`
  ADD PRIMARY KEY (`ID_Request`),
  ADD KEY `ID_Supplier` (`ID_Supplier`),
  ADD KEY `ID_Barang` (`ID_Barang`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`),
  ADD KEY `ID_Manager` (`ID_Manager`);

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
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`ID_Barang`) REFERENCES `meminta` (`ID_Barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`ID_Manager`) REFERENCES `staff` (`ID_Manager`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`ID_Staff`) REFERENCES `supplier` (`ID_Staff`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`ID_Supplier`) REFERENCES `meminta` (`ID_Supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
