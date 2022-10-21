-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Eki 2022, 22:16:54
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bionlukk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo1`
--

CREATE TABLE `tablo1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `tablo1`
--

INSERT INTO `tablo1` (`id`, `name`, `email`, `password`, `description`, `title`) VALUES
(1, 'Sadık 1', 'sadikeren2000@gmail.com', '123456', 'Bu bir deneme yazısıdır. 1', 'Başlık 1'),
(2, 'Sadık 1', 'sadikeren2000@gmail.com', '123456', 'Bu bir deneme yazısıdır. 1', 'Başlık 1'),
(3, 'Sadık 1', 'sadikeren2000@gmail.com', '123456', 'Bu bir deneme yazısıdır. 1', 'Başlık 1'),
(7, 'Eren', 'sadikeren2000@gmail.com', '', '', 'Başlık 5');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tablo1`
--
ALTER TABLE `tablo1`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tablo1`
--
ALTER TABLE `tablo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
