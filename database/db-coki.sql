-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 03:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coki`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(200) NOT NULL,
  `ad_password` varchar(200) NOT NULL,
  `ad_psw_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_password`, `ad_psw_email`) VALUES
(1, 'Coki VietNam', 'ruyelem@gmail.com', '123', 'llam aaym sruw cozl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `img`) VALUES
(1, 'Wood products', ''),
(2, 'Wool products ', ''),
(3, 'Plastic products ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `phone_number`, `note`) VALUES
(118, 'Đào Hải Đăng', 'daodang18082001@gmail.com', '+84923113163', 'Khasnh gaf'),
(119, 'Đào Hải Đăng', 'daodang18082001@gmail.com', '+84923113163', 'Khasnh gaf'),
(120, '', '', '', ''),
(121, 'Đào Hải Đăng', 'daodang18082001@gmail.com', '+84923113163', 'thành'),
(122, 'DAO HAI DANG', 'dangby10a1@gmail.com', '0347188593', 'cc'),
(123, 'DAO Hai Dang', '21521919@gm.uit.edu.vn', '+84923113163', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `date_giaodich` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_cancel` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`giaodich_id`, `product_id`, `quantity`, `date_giaodich`, `user_id`, `order_status`, `order_cancel`, `title`, `price`) VALUES
(12, 0, '4', '21:14 13-11-2023', 0, '', '', 'Thành', '1400000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orders_id`, `fullname`, `email`, `phone_number`, `address`, `order_date`, `quantity`, `price`, `note`) VALUES
(34, 'Đào HDang', '12@ád', '0347188593', '123', '21:14 13-11-2023', 4, 5600000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`) VALUES
(3, 3, 'Thành', 2300000, 1400000, 'hubert.png', 'Thành như voi'),
(4, 3, 'Thọ ơi là Thọ', 5000000, 2400000, 'gau1.png', 'cái gì cơ'),
(6, 1, 'Giang', 3500000, 1900000, 'missy-fox.png', 'No comment'),
(7, 1, 'Test 1', 111, 111, 'gau1.png', NULL),
(8, 2, 'test 2', 222, 222, 'gau1.png', NULL),
(9, 3, 'test 3â', 333, 333, 'gau1.png', 'á'),
(10, 3, 'test 4', 444, 444, 'gau1.png', NULL),
(11, 2, 'test 5', 555, 555, 'gau1.png', NULL),
(12, 1, 'test 6', 666, 666, 'gau1.png', NULL),
(13, 1, 'Test 7', 123123, 124442, 'gau1.png', NULL),
(14, 2, 'Test 8', 4455555, 4434444, 'gau1.png', NULL),
(15, 3, 'test 9', 333333, 444444, 'gau1.png', NULL),
(16, 3, 'test 10111', 55665, 77788, 'gau1.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star`
--

CREATE TABLE `star` (
  `star` varchar(500) NOT NULL,
  `white_star` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `star`
--

INSERT INTO `star` (`star`, `white_star`) VALUES
('Star.svg', 'whiteStar.svg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `email`, `phone_number`, `password`) VALUES
(1, 'dang', 'test@gmail.com', '0347188593', '$2y$10$An.HrwZDyFwn4gOpf1VdEemsH1chDCwkdE6rLsRpIFlGtkgeZDODq'),
(7, 'MrDANG', 'dangby10a1@gmail.com', '0347188593', '$2y$10$q8huQZwzR9QGQRghmaMNxOXKCaz2HorGv3X4sjgQb58nSsukO1NNy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
