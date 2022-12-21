-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 21 Ara 2022, 18:44:10
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `siparistakip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int NOT NULL,
  `site_baslik` varchar(256) NOT NULL,
  `site_sahibi` varchar(265) NOT NULL,
  `site_aciklama` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `site_baslik`, `site_sahibi`, `site_aciklama`) VALUES
(0, 'test1', 'test1', 'test1'),
(1, 'test1', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kul_id` int NOT NULL,
  `kul_isim` varchar(200) NOT NULL,
  `kul_mail` varchar(300) NOT NULL,
  `kul_sifre` varchar(100) NOT NULL,
  PRIMARY KEY (`kul_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kul_id`, `kul_isim`, `kul_mail`, `kul_sifre`) VALUES
(1, 'Halil', 'demiroluk2001@gmail.com', '123'),
(0, 'toll', 'toll@gmail.com', '123'),
(2, 'toll', 'toll@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `proje`
--

DROP TABLE IF EXISTS `proje`;
CREATE TABLE IF NOT EXISTS `proje` (
  `proje_id` int NOT NULL AUTO_INCREMENT,
  `proje_baslik` varchar(250) NOT NULL,
  `proje_teslim_tarihi` date NOT NULL,
  `proje_aciliyet` varchar(50) NOT NULL,
  `proje_durum` varchar(50) NOT NULL,
  `proje_detay` text NOT NULL,
  `dosya_yolu` blob NOT NULL,
  PRIMARY KEY (`proje_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `proje`
--

INSERT INTO `proje` (`proje_id`, `proje_baslik`, `proje_teslim_tarihi`, `proje_aciliyet`, `proje_durum`, `proje_detay`, `dosya_yolu`) VALUES
(5, 'otomasyon', '2022-12-03', 'Acelesi Yok', 'Acelesi Yok', 'hhmfhjfj', ''),
(6, 'otomasyon', '2022-12-09', 'Acelesi Yok', 'Acelesi Yok', 'fsghdfshdfh', ''),
(7, 'otomasyon', '2022-12-09', 'Acelesi Yok', 'Acelesi Yok', 'fsghdfshdfh', ''),
(8, 'tedt3', '2022-12-07', 'Acelesi Yok', 'Acelesi Yok', 'test12', ''),
(9, 'tedt3', '2022-12-07', 'Acelesi Yok', 'Acelesi Yok', 'test12', ''),
(10, 'tedt3', '2022-12-07', 'Acelesi Yok', 'Acelesi Yok', 'test12', ''),
(11, 'tedt3', '2022-12-07', 'Acelesi Yok', 'Acelesi Yok', 'test12', ''),
(12, 'otomasyon', '2022-12-07', 'Acelesi Yok', 'Acelesi Yok', 'sd', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `sip_id` int NOT NULL AUTO_INCREMENT,
  `musteri_isim` varchar(200) NOT NULL,
  `musteri_mail` varchar(300) NOT NULL,
  `musteri_telefon` bigint NOT NULL,
  `sip_baslik` varchar(400) NOT NULL,
  `sip_teslim_tarihi` date NOT NULL,
  `sip_aciliyet` varchar(50) NOT NULL,
  `sip_durum` varchar(500) NOT NULL,
  `sip_detay` text NOT NULL,
  `sip_ucret` float NOT NULL,
  PRIMARY KEY (`sip_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`sip_id`, `musteri_isim`, `musteri_mail`, `musteri_telefon`, `sip_baslik`, `sip_teslim_tarihi`, `sip_aciliyet`, `sip_durum`, `sip_detay`, `sip_ucret`) VALUES
(4, 'talip', 'tool@gmail.com', 12323, 'otomasyon sistemi', '2022-12-24', 'Normal', 'Devam Ediyor', 'test1', 1232);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparistakip`
--

DROP TABLE IF EXISTS `siparistakip`;
CREATE TABLE IF NOT EXISTS `siparistakip` (
  `id` int NOT NULL,
  `site_baslik` varchar(200) NOT NULL,
  `site_aciklama` varchar(500) NOT NULL,
  `site_sahibi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `siparistakip`
--

INSERT INTO `siparistakip` (`id`, `site_baslik`, `site_aciklama`, `site_sahibi`) VALUES
(1, 'script', 'script', 'Halil İbrahim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
