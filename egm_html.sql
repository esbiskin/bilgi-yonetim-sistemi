-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Tem 2020, 20:10:29
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egm_html`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egm_iletisim`
--

CREATE TABLE `egm_iletisim` (
  `telefon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `karakol_adi` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `egm_iletisim`
--

INSERT INTO `egm_iletisim` (`telefon`, `karakol_adi`) VALUES
('(0282)427-19-04', 'Malkara İlçe Emniyet Müdürlüğü'),
('(0282)427-32-47', 'Çorlu Karakolu	'),
('(0282)768-10-22', 'Muratlı İlçe Emniyet Müdürlüğü	'),
('(0462)377-29-58', 'Değirmendere İlçe Karakolu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ehliyet`
--

CREATE TABLE `ehliyet` (
  `ehliyet_id` int(11) NOT NULL,
  `ehliyet` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tc_kimlik_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ehliyet`
--

INSERT INTO `ehliyet` (`ehliyet_id`, `ehliyet`, `tarih`, `tc_kimlik_no`) VALUES
(9, 'Var', '2011-02-17', '48612321854'),
(10, 'Var', '2008-02-05', '45678982391'),
(11, 'El Konuldu', '2020-04-26', '45678982391');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisi_listesi`
--

CREATE TABLE `kisi_listesi` (
  `vatandas_id` int(11) NOT NULL,
  `adi` varchar(250) NOT NULL,
  `soyadi` varchar(250) NOT NULL,
  `tc_kimlik_no` varchar(250) NOT NULL,
  `dogum_tarihi` varchar(250) NOT NULL,
  `dogum_yeri` varchar(250) NOT NULL,
  `seri_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kisi_listesi`
--

INSERT INTO `kisi_listesi` (`vatandas_id`, `adi`, `soyadi`, `tc_kimlik_no`, `dogum_tarihi`, `dogum_yeri`, `seri_no`) VALUES
(1, 'Mehmet', 'Çalı', '48612321854', '1975-03-04', 'Adana', '123456789'),
(2, 'Cevdet', 'Yılmaz', '45678982391', '1987-08-19', 'Trabzon', '123354213');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `police`
--

CREATE TABLE `police` (
  `polis_id` int(11) NOT NULL,
  `sicil_numarası` varchar(250) NOT NULL,
  `sifre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `police`
--

INSERT INTO `police` (`polis_id`, `sicil_numarası`, `sifre`) VALUES
(1, '1234567', 'polis2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sabika_kaydi`
--

CREATE TABLE `sabika_kaydi` (
  `sabika_id` int(11) NOT NULL,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `islenen_suc` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `alinan_ceza` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tc_kimlik_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sabika_kaydi`
--

INSERT INTO `sabika_kaydi` (`sabika_id`, `tarih`, `islenen_suc`, `alinan_ceza`, `tc_kimlik_no`) VALUES
(6, '2016-07-14', 'Hırsızlık', '6 Ay Hapis Cezası', '48612321854'),
(7, '2019-08-15', 'Kişisel Verileri Kayıt Altında Tutma', '2 Yıl Hapis Cezası', '45678982391'),
(8, '2018-02-11', 'Hakaret', '20 Gün Hapis Cezası', '45678982391');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `suc_cesitleri`
--

CREATE TABLE `suc_cesitleri` (
  `konusu` text COLLATE utf8_turkish_ci NOT NULL,
  `cezasi` varchar(8888) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `suc_cesitleri`
--

INSERT INTO `suc_cesitleri` (`konusu`, `cezasi`) VALUES
('Adam Yaralama	', '6-9 Ay\r\n'),
('Bilişim Suçları	', '2 Ay-6 Yıl'),
('Hırsızlık	', '6 Ay\r\n'),
('Terör Örgütüne Yardım ve Yataklık	', '18 Yıl\r\n'),
('Kundaklama	', '2 Yıl\r\n'),
('Organize Suçlar	', '5 Yıl\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teror_arananlar`
--

CREATE TABLE `teror_arananlar` (
  `aranan_id` int(11) NOT NULL,
  `adi` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dogum_tarihi` text NOT NULL,
  `dogum_yeri` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `para_odulu` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tc_kimlik_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `teror_arananlar`
--

INSERT INTO `teror_arananlar` (`aranan_id`, `adi`, `soyadi`, `dogum_tarihi`, `dogum_yeri`, `para_odulu`, `tc_kimlik_no`) VALUES
(3, 'Neşe', 'Baltaş', '1973-11-16', 'Malazgirt', '2.000.000₺', ''),
(4, 'Engin', 'Karaaslan', '1964-10-03', 'Kartaldere', '8.000.000₺', ''),
(5, 'Talip', 'Akkurt', '1981-03-31', 'Erciş', '1.000.000₺', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `trafik_cezalari`
--

CREATE TABLE `trafik_cezalari` (
  `trafik_id` int(11) NOT NULL,
  `yer_ceza_sebebi` varchar(250) NOT NULL,
  `tc_kimlik_no` varchar(250) NOT NULL,
  `plaka` varchar(250) NOT NULL,
  `alinan_ceza` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `trafik_cezalari`
--

INSERT INTO `trafik_cezalari` (`trafik_id`, `yer_ceza_sebebi`, `tc_kimlik_no`, `plaka`, `alinan_ceza`) VALUES
(1, 'Elazığ/Trafiği Tehlikeye Atan Hareketlerde Bulunma', '45678982391', '61AGA256', '5.000₺ Para Cezası Ve Ehliyete El Koyma'),
(5, 'Adana/Hatalı Sollama ve Alkollü Araç Kullanma', '48612321854', '01FF561', '20.000₺ Para Cezası');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `egm_iletisim`
--
ALTER TABLE `egm_iletisim`
  ADD PRIMARY KEY (`telefon`);

--
-- Tablo için indeksler `ehliyet`
--
ALTER TABLE `ehliyet`
  ADD PRIMARY KEY (`ehliyet_id`);

--
-- Tablo için indeksler `kisi_listesi`
--
ALTER TABLE `kisi_listesi`
  ADD PRIMARY KEY (`vatandas_id`);

--
-- Tablo için indeksler `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`polis_id`);

--
-- Tablo için indeksler `sabika_kaydi`
--
ALTER TABLE `sabika_kaydi`
  ADD PRIMARY KEY (`sabika_id`);

--
-- Tablo için indeksler `teror_arananlar`
--
ALTER TABLE `teror_arananlar`
  ADD PRIMARY KEY (`aranan_id`);

--
-- Tablo için indeksler `trafik_cezalari`
--
ALTER TABLE `trafik_cezalari`
  ADD PRIMARY KEY (`trafik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ehliyet`
--
ALTER TABLE `ehliyet`
  MODIFY `ehliyet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kisi_listesi`
--
ALTER TABLE `kisi_listesi`
  MODIFY `vatandas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `police`
--
ALTER TABLE `police`
  MODIFY `polis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sabika_kaydi`
--
ALTER TABLE `sabika_kaydi`
  MODIFY `sabika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `teror_arananlar`
--
ALTER TABLE `teror_arananlar`
  MODIFY `aranan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `trafik_cezalari`
--
ALTER TABLE `trafik_cezalari`
  MODIFY `trafik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
