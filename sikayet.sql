-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Tem 2021, 22:45:53
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sikayet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin1`
--

CREATE TABLE `admin1` (
  `Id` int(11) NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Parolası` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin1`
--

INSERT INTO `admin1` (`Id`, `Ad`, `Parolası`) VALUES
(1, 'Test', 'qwer123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorun`
--

CREATE TABLE `sorun` (
  `Sorunid` int(11) NOT NULL,
  `SorunDetay` varchar(125) COLLATE utf8_turkish_ci NOT NULL,
  `İlgiliüye` int(11) NOT NULL,
  `Cözüm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üye`
--

CREATE TABLE `üye` (
  `Üyeid` int(11) NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Parolası` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `üye`
--

INSERT INTO `üye` (`Üyeid`, `Ad`, `Soyadi`, `Parolası`) VALUES
(2, 'Erdem', ' Onder', '1234'),
(5, 'Hakan', ' Caner', '852'),
(6, 'Dilek', ' Onder', '753'),
(9, 'SAaa', ' Onda', '852');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sorun`
--
ALTER TABLE `sorun`
  ADD PRIMARY KEY (`Sorunid`),
  ADD KEY `İlgiliüye` (`İlgiliüye`);

--
-- Tablo için indeksler `üye`
--
ALTER TABLE `üye`
  ADD PRIMARY KEY (`Üyeid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin1`
--
ALTER TABLE `admin1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sorun`
--
ALTER TABLE `sorun`
  MODIFY `Sorunid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `üye`
--
ALTER TABLE `üye`
  MODIFY `Üyeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sorun`
--
ALTER TABLE `sorun`
  ADD CONSTRAINT `sorun_ibfk_1` FOREIGN KEY (`İlgiliüye`) REFERENCES `üye` (`Üyeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
