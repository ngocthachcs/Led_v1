-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2018 lúc 05:32 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_app_led`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `code` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `name_user` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_buu_dien` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `code`, `status`, `name_user`, `company`, `address`, `ma_buu_dien`, `phone`, `email`, `total`, `created_at`) VALUES
(1, 'DH001', 1, 'Pham Van Tuan', 'Hcos', 'ho chi minh', '001', '0123456789', 'tuan@gmail.com', 1000000, '2018-02-24 14:39:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`id`, `cart_id`, `product_id`, `quality`) VALUES
(1, 1, 3, 1),
(2, 1, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'ĐÈN TRANG TRÍ', 'den-trang-tri', NULL, '2018-02-24 02:35:41', '2018-02-28 11:13:30'),
(3, 'ĐÈN LED ÂM TRẦN', 'den-led-am-tran', NULL, '2018-02-24 10:58:23', NULL),
(4, 'ĐÈN LED TUÝP', 'den-led-tuyp', NULL, '2018-02-24 10:59:32', NULL),
(5, 'ĐÈN LED DÂY', 'den-led-day', NULL, '2018-02-24 11:00:08', NULL),
(6, 'ĐÈN PHA LED', 'den-pha-led', NULL, '2018-02-24 11:00:24', NULL),
(7, 'BÓNG ĐÈN EDISON', 'bong-den-edison', NULL, '2018-02-24 11:00:34', NULL),
(8, 'ĐÈN BÚP LED', 'den-bup-led', NULL, '2018-02-24 11:00:46', NULL),
(9, 'ĐÈN TRANG TRÍ NOEL', 'den-trang-tri-noel', NULL, '2018-02-24 11:00:56', NULL),
(10, 'ĐÈN LED ỐP NỔI', 'den-led-op-noi', NULL, '2018-02-24 11:01:06', NULL),
(11, 'ĐÈN LED RỌI RAY', 'den-led-roi-ray', NULL, '2018-02-24 11:01:16', NULL),
(12, 'ĐÈN LED PANEL', 'den-led-panel', NULL, '2018-02-24 11:01:27', NULL),
(13, 'ĐÈN LED THANH', 'den-led-thanh', NULL, '2018-02-24 11:01:40', NULL),
(14, 'ĐÈN LED NHÀ XƯỞNG', 'den-led-nha-xuong', NULL, '2018-02-24 11:01:49', NULL),
(15, 'MÁNG ĐÈN', 'mang-den', NULL, '2018-02-24 11:01:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `oder` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`menu_id`, `parent_id`, `type`, `url`, `title`, `content`, `oder`, `created_at`, `updated_at`) VALUES
(1, 0, '1', '/', 'Trang chủ', NULL, 1, '2018-02-01 00:00:00', '0000-00-00 00:00:00'),
(2, 0, NULL, 'gioi-thieu', 'Giới thiệu', NULL, 2, '2018-02-01 00:00:00', NULL),
(3, 0, NULL, 'san-pham', 'Store', NULL, 3, '2018-02-01 00:00:00', NULL),
(4, 0, NULL, 'tin-tuc', 'Tin tức', NULL, 4, '2018-02-01 00:00:00', NULL),
(5, 0, NULL, 'lien-he', 'Liên hệ', NULL, 5, '2018-02-01 00:00:00', NULL),
(6, 4, NULL, 'khuyen-mai', 'Khuyến mại', NULL, 1, '2018-02-01 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `title`, `content`, `created_at`) VALUES
(1, 'Pham Van Tuan', 'tuan@gmail.com', 'title', 'content', '2018-02-24 14:14:16'),
(2, 'weqw', 'eqwe', 'qwe', 'qw', '2018-02-26 10:56:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `thong_so_ky_thuat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1:noi bat; 2: khuyen mai',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `slug`, `price`, `old_price`, `thong_so_ky_thuat`, `mo_ta`, `img`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Đèn chùm pha lê nến AT01', 'den-chum-pha-le-nen-at01', 100000, NULL, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước: R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609091_den-chum-pha-le-nen-at01.png', 0, '2018-02-26 08:38:11', '2018-02-28 11:11:40'),
(4, 1, 'Đèn chùm pha lê TCN 3200', 'den-chum-pha-le-tcn-3200', 43205000, 0, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609130_den-chum-pha-le-nen-at01.png', 0, '2018-02-26 08:38:50', NULL),
(5, 1, 'Đèn chùm pha lê TCN 89105', 'den-chum-pha-le-tcn-89105', 43205000, 0, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609164_den-chum-pha-le-nen-at01.png', 0, '2018-02-26 08:39:24', NULL),
(6, 1, 'Đèn chùm pha lê TCN 102', 'den-chum-pha-le-tcn-102', 43205000, 0, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609174_den-chum-pha-le-nen-at01.png', 0, '2018-02-26 08:39:34', NULL),
(7, 3, '1.Đèn led âm trần giảm 50%', '1.den-led-am-tran-giam-50%', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609241_den-am-tran-sieu-mong-6w.jpg', 1, '2018-02-26 08:40:41', NULL),
(8, 3, 'Đèn âm trần downlight 9w 3 chế độ ATHACO', 'den-am-tran-downlight-9w-3-che-do-athaco', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609273_den-am-tran-sieu-mong-6w.jpg', 1, '2018-02-26 08:41:13', NULL),
(9, 3, 'Đèn âm trần siêu mỏng 12w ATHACO', 'den-am-tran-sieu-mong-12w-athaco', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609287_den-am-tran-sieu-mong-6w.jpg', 1, '2018-02-26 08:41:27', NULL),
(10, 3, 'Đèn âm trần siêu mỏng 18w ATHACO', 'den-am-tran-sieu-mong-18w-athaco', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609306_den-am-tran-sieu-mong-6w.jpg', 1, '2018-02-26 08:41:46', NULL),
(11, 4, 'Bảng giá máng đèn âm trần inox', 'bang-gia-mang-den-am-tran-inox', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609526_bang-gia-mang-den-am-tran-inox.jpg', 2, '2018-02-26 08:45:26', NULL),
(12, 4, 'Bóng tuýp led 1m2 18w Atlight', 'bong-tuyp-led-1m2-18w-atlight', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609540_bang-gia-mang-den-am-tran-inox.jpg', 2, '2018-02-26 08:45:40', NULL),
(13, 4, 'Bóng đèn tuýp led 1m2 T8 20w', 'bong-den-tuyp-led-1m2-t8-20w', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609557_bang-gia-mang-den-am-tran-inox.jpg', 2, '2018-02-26 08:45:57', NULL),
(14, 4, 'Máng 1m2 chóa inox phản quang', 'mang-1m2-choa-inox-phan-quang', 1000000, 900000, '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông số kỹ thuật:</span></p><ul style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><li>Tên gọi: Đèn chùm nến</li><li>Mã số: AT01</li><li>Kích thước:&nbsp;R1600 – H2850 mm</li><li>Số bóng: 36 bóng E14</li><li>Chất liệu: đá pha lê</li><li>Xuất xứ: Athaco</li><li>Bảo hành 12 tháng</li><li>Giá chưa bao gồm bóng và VAT 10%</li></ul>', '<p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\"><span style=\"font-weight: 700;\">Thông tin chung:</span></p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Sử dụng bóng công suất: 36 bóng E14</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Chao đèn thân thủy tinh đục 2 lớp dày</p><p style=\"color: rgb(51, 51, 51); font-family: arial; font-size: 15px;\">Kích thước: rộng 1600 mm cao 2850 mm</p>', 'assets/uploads/images/1519609573_bang-gia-mang-den-am-tran-inox.jpg', 2, '2018-02-26 08:46:13', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oder` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwork` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passwork`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 1, '2018-02-02 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
