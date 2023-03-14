-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2023 lúc 02:03 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `festival`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `event`
--

INSERT INTO `event` (`id`, `name`, `location`, `time`, `about`) VALUES
(1, 'perfume pagoda', 'north', 'spring', '<div class=\"col-lg-4 col-md-6 mb-4\">                         <div class=\"destination-item position-relative overflow-hidden mb-2\">                             <img class=\"img-fluid\" src=\"img/chuahuong.jpg\" alt=\"Perfume Pagoda\" style=\"height: 220px; width: 440px\">                             <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">                                 <h5 class=\"text-white\">Perfume Pagoda</h5>                                 <span>Hanoi</span>                             </a>                         </div>                     </div>'),
(2, 'bai dinh pagoda', 'north', 'spring', '<div class=\"col-lg-4 col-md-6 mb-4\">                         <div class=\"destination-item position-relative overflow-hidden mb-2\">                             <img class=\"img-fluid\" src=\"img/baidinh.jpg\" alt=\"Bai Dinh\" style=\"height: 220px; width: 440px\">                             <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">                                 <h5 class=\"text-white\">Bai Dinh Pagoda</h5>                                 <span>Ninh Binh</span>                             </a>                         </div>                     </div>'),
(3, 'Sinh Wrestling Festival', 'central', 'spring', '<div class=\"col-lg-4 col-md-6 mb-4\">                         <div class=\"destination-item position-relative overflow-hidden mb-2\">                             <img class=\"img-fluid\" src=\"img/sinhhue.jpg\" alt=\"\" style=\"height: 220px; width: 440px\">                             <a class=\"destination-overlay text-white text-decoration-none\" href=\"\">                                 <h5 class=\"text-white\">Sinh Wrestling Festival</h5>                                 <span>Hue</span>                             </a>                         </div>                     </div>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
