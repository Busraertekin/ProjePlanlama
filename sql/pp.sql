-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 May 2021, 19:01:47
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_me`
--

CREATE TABLE `about_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_me`
--

INSERT INTO `about_me` (`about_id`, `about_title`, `bio`, `cv`) VALUES
(1, 'Beni TanıyınX', '      Merhaba, İnönü Üniversitesi bilgisayar mühendisliği bölümünde okuyorum. Tekil faaliyetlerden hoşlandığım için karantinadan keyif alanlardanım. Pandemide oldukça fazla vakit ayırdığım hobiler dikiş, kanaviçe, amigurumi. Çat pat gitar, orta derecede yan flüt çalıyorum. 2 minnoş hamsterım var. Oldukça hayvanseverim ama annem evde köpek beslememe izin vermiyor.XX', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `locationn` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gsm` varchar(13) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `copyright` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `contact_title`, `locationn`, `email`, `gsm`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `copyright`) VALUES
(1, 'İLETİŞİM', 'Batman Merkez/Türkiye', '02200201042@ogr.inonu.edu.tr', '+905533622634', 'https://www.facebook.com./', 'https://www.google.com.tr/', 'https://www.google.com.tr/', 'https://www.google.com.tr/', 'https://www.google.com.tr/', 'Büşra Ertekin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `home`
--

INSERT INTO `home` (`home_id`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`) VALUES
(1, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_id` int(11) NOT NULL,
  `namee` varchar(50) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `province` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `uni` varchar(50) NOT NULL,
  `web_site` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personal_info`
--

INSERT INTO `personal_info` (`personal_id`, `namee`, `birthday`, `province`, `job`, `uni`, `web_site`) VALUES
(1, 'Büşra Ertekin', '31 Ocak 1999', 'Konya', 'Öğrenci', 'İnönü Ü.', 'www.kardswebsite.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`settings_id`, `site_title`, `title`, `subtitle`, `picture`) VALUES
(1, 'Büşra Ertekin', 'Büşra Ertekin', 'BİLGİSAYAR MÜHENDİSLİĞİ ÖĞRENCİSİ', 'Calatayud_Cancion_De_Cuna_tab-1-212x300.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `fourth_skill` varchar(50) NOT NULL,
  `fifth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL,
  `fourth_counter` varchar(10) NOT NULL,
  `fifth_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_title`, `content`, `first_skill`, `second_skill`, `third_skill`, `fourth_skill`, `fifth_skill`, `first_counter`, `second_counter`, `third_counter`, `fourth_counter`, `fifth_counter`) VALUES
(1, 'YETENEKLER', 'Öğrenci olduğum için teknik bilgi gerektiren yeteneklerim henüz gelişmemiştir. Göz dolduran davranışsal yetenek oranlarım sayesinde kısa sürede teknik yeteneklerim bölümünü de açabileceğime inanıyorum.\r\n', 'DUYGU YÖNETİMİ', 'SABIR', 'İTAAT', 'GERİ BİLDİRİM', 'İRADE', '40', '60', '40', '60', '40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'busra', 'nssdsd@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Tablo için indeksler `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_me`
--
ALTER TABLE `about_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
