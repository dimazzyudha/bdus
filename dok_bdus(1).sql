-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Feb 2016 pada 17.09
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dok_bdus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`, `nip`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '0101010101', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dok_kontrak`
--

CREATE TABLE IF NOT EXISTS `tbl_dok_kontrak` (
`id` int(6) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `indeks_berkas` varchar(100) DEFAULT NULL,
  `isi_ringkas` mediumtext NOT NULL,
  `dari` varchar(250) NOT NULL,
  `no_kontrak` varchar(100) DEFAULT NULL,
  `tgl_kontrak` date DEFAULT NULL,
  `tgl_akhirkontrak` date DEFAULT NULL,
  `tgl_diinput` date DEFAULT NULL,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `pengolah` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dok_kontrak`
--

INSERT INTO `tbl_dok_kontrak` (`id`, `kode`, `no_agenda`, `indeks_berkas`, `isi_ringkas`, `dari`, `no_kontrak`, `tgl_kontrak`, `tgl_akhirkontrak`, `tgl_diinput`, `keterangan`, `file`, `pengolah`) VALUES
(35, 'JDJ0002', '0002', '', 'Peningkatan Struktur Jalan SP.PERDAU - BATU AMPAR II', 'Dinas Pekerjaan Umum', '16-34/SPP-BTA.II/WIL.II/BM/APBN/2011', '2011-10-25', '2011-12-15', '2016-02-03', '100%', 'Paket,Pening.Struk__.Jl__.Sp__.Perdau-Bt__.Ampar__.PDF', 1),
(36, 'DA0001', '0003', '', 'Pembuatan Dermaga Penyebrangan Darurat Di Kabupaten Kutai Kartanegara', 'Dinas Pekerjaan Umum', '027.1/08/KONTRAK-FISIK-DSP/BDSP/II/2012', '2012-02-20', '2012-06-16', '2016-02-03', '100%', 'Pembuatan_Dermaga1.PDF', 1),
(37, 'JDJ0001B', '0004', '', 'Pemeliharaan Berkala Jalan Samarinda-Loa Janan-Tenggarong', 'Dinas Pekerjaan Umum', '10-34/PJN.WIL.I-KT/SMD-TGR/BM/APBN/2012', '2012-03-16', '2012-12-10', '2016-02-03', '100%', 'Paket_Jln_Smda-Loa.Janan-tgr__.PDF', 1),
(38, 'JDJ0001', '0005', '', 'Pemeliharaan Jalan Sp.BLUSU - Sp.DAMAI-MELAK', 'Dinas Pekerjaan Umum', '602/386/KPA/REHAB-Sp.BDM/V/2012', '2012-05-10', '2012-12-05', '2016-02-03', '100%', 'Sp.Blusuh-Sp__.Damai-Melak(BDUS)__.PDF', 1),
(42, 'JL0002', '0006', '', 'Penanganan Longsoran Ruas Jalan Pangeran Suryanata 1 Kota Samarinda', 'Dinas Pekerjaan Umum', '602/593/KPA/LGSR/SYT1/X/2012', '2012-10-02', '2012-12-31', '2016-02-04', '100%', 'Penanganan_Longsoran_Jl.Suryanata_I__.PDF', 1),
(43, 'JL0003', '0007', '', 'Pembangunan Jalan Sebulu - Muara Kaman', 'Dinas Pekerjaan Umum', '602/05/KPA/PEMB.JLN1/SBL-M.KMN/VIII/2012', '2012-08-13', '2012-12-30', '2016-02-04', '100%', 'Sebulu_-_Ma.Kaman_(bdus)__.PDF', 1),
(44, 'JDJ0002', '0008', '', 'Peningkatan Struktur Jalan Ring Road Samarinda Paket 1', 'Dinas Pekerjaan Umum', '33-34/PJN.WIL I-KT/RGR-PKT.I/BM/APBN/2013', '2013-02-05', '2013-11-01', '2016-02-04', '100%', 'RINGROAD_PAKET_I_(2013)-APBN1.PDF', 1),
(45, 'JDJ0001B', '0009', '', 'Pemeliharaan Berkala Jalan SP.PERDAU-BATU AMPAR (Termasuk Longsoran)', 'Dinas Pekerjaan Umum', '02-34/BKL/SP-BA/WIL.II-KT/BM/APBN/2013', '2013-02-04', '2013-07-03', '2016-02-04', '100%', 'SP.Perdau-Batu_Ampar_(APBN_Murni)__.PDF', 1),
(46, 'JL0003', '0010', '', 'Pembangunan Jalan RANTAU PULUNG-TEPIAN INDAK (DAK)', 'Dinas Pekerjaan Umum', '600.620/101/KTRK/DPU-BM.02/RPL-TI/V/2013', '2013-05-24', '2013-11-22', '2016-02-04', '100%', 'PEMB.JLN_RANTAU_PULUNG-TEPIAN_INDAH(BDUS)__.PDF', 1),
(48, 'JDJ0002', '0011', '', 'Peningkatan Struktur Jalan Ring Road 1', 'Dinas Pekerjaan Umum', '31-34/PJN.WIL I-KT/RNG-I/BM/APBN/2014', '2014-03-18', '2014-12-12', '2016-02-04', '100%', 'PENINGKT_STRUKTUR_JL_RING_ROAD_I1.PDF', 1),
(52, 'JJ1B', '0012', '', 'Pemeliharaan Berkala Jalan KOTA BANGUN-GUSIQ', 'Dinas Pekerjaan Umum', '12-34/pjn.WIL.I-KT/KTB-GSQ/BM/APBN/2015', '2015-03-18', '2015-09-30', '2016-02-04', '100%', 'Pemelihraan_Berkala_Jl.Kota_Bangun-Gusiq__.PDF', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klasifikasi`
--

CREATE TABLE IF NOT EXISTS `tbl_klasifikasi` (
`id` int(4) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `uraian` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_klasifikasi`
--

INSERT INTO `tbl_klasifikasi` (`id`, `kode`, `nama`, `uraian`) VALUES
(55, 'JDJ0001', 'Rehabilitasi/Pemeliharaan Jalan dan Jembatan', 'Rehabilitasi/Pemeliharaan Jalan dan Jembatan'),
(56, 'JDJ0001B', 'Rehabilitasi/Pemeliharaan Jalan dan Jembatan Berkala', 'Rehabilitasi/Pemeliharaan Jalan dan Jembatan Berkala'),
(57, 'JDJ0002', 'Preservasi dan Peningkatan Jembatan/Jalan', 'Preservasi dan Peningkatan Jembatan/Jalan'),
(58, 'DA0001', 'Pembuatan Dermaga Penyebrangan', 'Pembuatan Dermaga Penyebrangan'),
(59, 'JL0001', 'Pengaspalan Jalan', 'Pengaspalan Jalan'),
(60, 'JL0002', 'Penanganan Longsor', 'Penanganan Longsor'),
(61, 'JL0003', 'Pembangunan Jalan', 'Pembangunan Jalan'),
(64, 'JL0003B', 'Pembangunan Jalan Berkala', 'Pembangunan Jalan Berkala'),
(65, 'JL0004', 'Pelebaran Jalan', 'Pelebaran Jalan'),
(66, 'JB0001', 'Pembangunan Jembatan', 'Pembangunan Jembatan'),
(67, 'JB0001B', 'Pembangunan Jembatan Berkala', 'Pembangunan Jembatan Berkala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perusahaan`
--

CREATE TABLE IF NOT EXISTS `tbl_perusahaan` (
`id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pimpinan` varchar(100) DEFAULT NULL,
  `nip_pimpinan` varchar(100) DEFAULT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id`, `nama`, `alamat`, `pimpinan`, `nip_pimpinan`, `logo`) VALUES
(1, 'PT.BUDI DAYA UTAMA SEJAHTERA', 'Jl. Pesut No.104 RT XIV Kel.Timbau', 'H. Mohammad Kusaini', '0192 66 897446', 'logo2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dok_kontrak`
--
ALTER TABLE `tbl_dok_kontrak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_dok_kontrak`
--
ALTER TABLE `tbl_dok_kontrak`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_klasifikasi`
--
ALTER TABLE `tbl_klasifikasi`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
