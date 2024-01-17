-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2022, 09:53:05
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `editor`
--

CREATE TABLE `editor` (
  `makale_id` int(11) NOT NULL,
  `makale_adi` varchar(50) NOT NULL,
  `makale_icerik` text NOT NULL,
  `makale_aktif` tinyint(4) NOT NULL,
  `makale_detay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `editor`
--

INSERT INTO `editor` (`makale_id`, `makale_adi`, `makale_icerik`, `makale_aktif`, `makale_detay`) VALUES
(1, 'dfdsf', 'dsfsdfs', 1, ''),
(2, 'DERYA', 'ng fcgrnh', 1, ''),
(3, 'MASUMiYET ', '<img src=\"resimler/editor/masumiyet.jpg\" alt=\"Masumiyet Müzesi\">\r\n                             <p>\r\n                                   <h2>ORHAN PAMUK - MASUMİYET MÜZESİ</h2>Selim Işık’ın intihar ettiğini öğrenen Turgut Özben, ihmal ettiğini düşündüğü arkadaşının geçmişinin izini sürmeye ve Selim’in tanıdığı insanlar aracılığıyla onu tanımaya çalışır. Her insana farklı bir yönünü gösteren Selim’in görüntüsü, Turgut’un bu insanlarla konuşması sonucu okuyucunun ve Turgut’un gözünde netlik kazanacaktır. Romanda bir çok kişi vardır ama her biri aslında Selim’in hayatındaki kişilerdir ve tüm anlatılanlar Selim Işık’ı aydınlatır. Selim Işık “düşünen ve sorgulayan insan”ın simgesidir ve bu yüzden “tutunamamış”tır...\r\n', 1, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kadi` varchar(20) NOT NULL,
  `ksifre` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kadi`, `ksifre`) VALUES
('admin', '1234'),
('admin', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`makale_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `editor`
--
ALTER TABLE `editor`
  MODIFY `makale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
