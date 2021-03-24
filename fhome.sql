-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 17, 2020 lúc 03:39 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fhome`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass_word` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `pass_word`) VALUES
(1, 'admin', 'admin'),
(9, 'adminadmin', 'adminadmin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_nhanh`
--

CREATE TABLE `chi_nhanh` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_nhanh`
--

INSERT INTO `chi_nhanh` (`id`, `name`, `dia_chi`, `sdt`, `email`) VALUES
(6, 'Vũng Tàu', 'Phường 2, Tp. Vũng Tàu', '0962924987', 'vungtau12@gmail.com'),
(7, '1 Phú Quốc', '63 Phú Quốc', '09752813852', 'phuquoc23@gmail.com'),
(8, '1 Vịnh Hạ Long', '21 Vịnh hạ long', '0932442515', 'halong45@gmail.com'),
(9, '1 Đà Lạt', '45 Đà Lạt', '0962924987', 'dalat342@gmail.com'),
(10, 'Hà Nội', '78 Thợ Nhuộm, Trần Hưng Đạo, Hoàn Kiếm, Hà Nội', '024 3942 77', 'Mthanoi@gmail.com'),
(11, 'Đà Nẵng', '70, Đường Võ Nguyên Giáp, Bắc Mỹ Phú,  Ngũ Hành Sơn,  Đà Nẵng', '0236 395678', 'info@luxurydanang.muongthanh.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_tintuc`
--

CREATE TABLE `danhmuc_tintuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_tintuc`
--

INSERT INTO `danhmuc_tintuc` (`id`, `name`) VALUES
(8, 'Du lịch'),
(9, 'CHUYẾN DU LỊCH'),
(10, 'CẮM TRẠI'),
(11, 'SỰ KIỆN'),
(12, 'TRIVAGO'),
(14, 'SỰ KIỆN & DU LỊCH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`, `mo_ta`) VALUES
(3, 'Căn hộ, Chưng cư', 'Căn hộ, Chưng cư'),
(4, 'Homestay', ''),
(5, 'Chung cư', ''),
(6, 'Nhà ở', ''),
(7, 'Căn hộ nhỏ', ''),
(8, 'Phòng làm việc', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_phong`
--

CREATE TABLE `dat_phong` (
  `id` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_phong`
--

INSERT INTO `dat_phong` (`id`, `id_phong`, `name`, `sdt`, `email`, `check_in`, `check_out`) VALUES
(35, 22, '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass_word` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `name`, `user_name`, `pass_word`, `sdt`, `email`) VALUES
(7, 'danh', 'danhdeptroai', '123123123', '1232123123', 'c15ltdcn161297@gmail.com'),
(15, 'Nguyễn Hữu Danhz', 'danhvippro', '123456', ' 0902595422', 'danhtr@gmail.com'),
(16, 'asdasd', 'danhdeptroaizxczxc', 'asdasd', '0902595423', 'dannhnhps11245@fpt.edu.vn'),
(17, 'asdasd', 'danhdeptroaizxzzxzz', 'asddas', '0902595423', 'c15ltdcn161297@gmail.com'),
(18, 'Nguyễn Hữu Danh', 'danhoccho', '123123', '0902595423', 'dannhnhps11245@fpt.edu.vn'),
(19, 'asdsad', '123xzc1', 'asdad123', '0902595423', 'asdasdasd@gmail.com'),
(20, 'danhdanh123', 'danhprovl', ' 12345', '0902595423', 'asdasdasd@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieu_phong`
--

CREATE TABLE `kieu_phong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kieu_phong`
--

INSERT INTO `kieu_phong` (`id`, `name`, `mo_ta`, `hinh`) VALUES
(1, 'Không gian làm việc', 'Quê mùa thật sự ', 'section3-1.jpg'),
(6, 'Hiện đại', 'hiện đại vl', 'section3-2.jpg'),
(8, 'Châu Âu', '', 'section3-3.jpg'),
(9, 'Không gian cây xanh', '', 'section3-4.jpg'),
(10, 'Sáng tạo', '', 'section3-5.jpg'),
(11, 'Gia đình', '', 'section3-6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` double NOT NULL,
  `mo_ta` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id`, `name`, `gia_tien`, `mo_ta`) VALUES
(2, 'King', 1500, ''),
(3, 'Royal', 1500, ''),
(4, 'Queen', 1500, ''),
(5, 'Superior', 1000, ''),
(6, 'Suite', 10000, ''),
(7, 'Deluxe', 2500, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_xet`
--

CREATE TABLE `nhan_xet` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_phong` int(11) NOT NULL,
  `stars` int(11) DEFAULT NULL,
  `nhan_xet` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_gui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_xet`
--

INSERT INTO `nhan_xet` (`id`, `name`, `id_phong`, `stars`, `nhan_xet`, `email`, `ngay_gui`) VALUES
(33, 'Nguyễn Hữu Danh', 23, 4, 'asdsdsadas', '123123@gmaial.com', '2020-08-12 07:50:50'),
(34, 'Trí', 23, 2, '2s', 'trinm@gmail.com', '2020-08-12 07:51:03'),
(35, 'Nguyễn Hữu Danh', 19, 4, 'asdasd', '123123@gmaial.com', '2020-08-12 07:59:34'),
(36, 'Nguyễn Hữu Danh', 25, 5, 'asdasdasd', 'trinm@gmail.com', '2020-08-12 08:13:09'),
(37, 'Nguyễn Hữu Danh', 25, 4, 'asdasdasd', '213@asdmgi.aom', '2020-08-12 08:13:22'),
(40, 'danh', 21, 3, 'qwewqewqe', '2asdas@gmail.com', '2020-08-12 14:51:33'),
(41, 'asdasd123213', 21, 4, '123123123', 'asd@gmail.com', '2020-08-12 14:51:55'),
(42, 'Nguyễn Hữu Danh', 24, 3, 'juyiyiyui', 'asdsad@gmail.com', '2020-08-13 04:52:29'),
(43, 'à á', 24, 4, '222222222222222222222222222222222222222222222222222222222222', 'trinm@gmail.com', '2020-08-13 04:53:05'),
(44, 'Nguyễn Quang Sơn', 20, 0, 'aaa', 'giabaophutho@yahoo.com.vn', '2020-08-14 04:00:06'),
(45, 'Nguyễn Quang Sơn', 20, 3, 'aaaaaaaaaaaa', 'giabaophutho@yahoo.com.vn', '2020-08-14 04:00:35'),
(46, '', 36, 4, '', '', '2020-08-17 05:33:14'),
(47, 'Nguyễn Hữu Danh', 36, 0, '', 'asdasdasd@gmail.com', '2020-08-17 05:33:47'),
(48, 'asdasd', 20, 0, '', 'asd', '2020-08-17 05:34:32'),
(49, 'asdasdasd', 20, 0, '', 'asdasdasd', '2020-08-17 05:36:28'),
(50, 'asdasd', 20, 0, 'asdasdasd', 'asdasd', '2020-08-17 05:38:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `so_phong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giuong` int(11) NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `gia_tien` double NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(4) DEFAULT 0,
  `id_danhmuc` int(11) NOT NULL,
  `id_loaiphong` int(11) NOT NULL,
  `id_kieuphong` int(11) NOT NULL,
  `id_thanhpho` int(11) NOT NULL,
  `id_chinhanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `name`, `dia_chi`, `so_phong`, `hinh`, `dich_vu`, `giuong`, `so_nguoi`, `gia_tien`, `mo_ta`, `hot`, `id_danhmuc`, `id_loaiphong`, `id_kieuphong`, `id_thanhpho`, `id_chinhanh`) VALUES
(19, 'Premium King Room', '', '01', 'room-1.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 1, 2, 1590, '', 1, 4, 2, 6, 5, 6),
(20, 'Deluxe Room', '', '02', 'room-2.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 2, 4, 1190, '', 1, 6, 3, 10, 6, 7),
(21, 'Double Room', '', '03', 'room-3.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 2, 4, 1190, '', 1, 6, 4, 11, 7, 8),
(22, 'Luxury Room', '', '04', 'room-4.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 1, 1, 1190, '', 1, 7, 3, 1, 5, 6),
(23, 'Room With View', '', '05', 'room-5.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 3, 6, 1190, '', 1, 5, 3, 11, 6, 7),
(24, 'Small View', '', '06', 'room-6.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 1, 1, 1190, '', 1, 8, 3, 10, 7, 8),
(25, 'Double Room', '', '07', 'room-7.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 2, 4, 1190, '', 0, 7, 4, 10, 8, 9),
(26, 'Premium King Room', '', '08', 'room-8.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 5, 10, 1190, '', 0, 3, 3, 11, 6, 7),
(27, 'Room With View', '', '09', 'room-9.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 2, 4, 1190, '', 0, 7, 2, 8, 7, 8),
(28, 'Luxury Room', '', '10', 'room-4.jpg/', 'Wifi, Ti vi, phòng tắm, ...', 2, 4, 1590, 'Diện tích: 23-26m2  Giường: 1 giường   Chính sách trẻ em: Miễn phí cho trẻ em dưới 05 tuổi (tối đa 02 trẻ em) dùng chung phòng với bố mẹ (Bao gồm ăn sáng & không bao gồm giường phụ). Trẻ em từ 06 - dưới 10 tuổi dùng chung phòng với bố mẹ (tối đa 02 trẻ em): phụ thu 120.000VNĐ/trẻ/đêm (Bao gồm ăn sáng & không bao gồm giường phụ). Trẻ em từ 10 tuổi trở lên dùng chung phòng với bố mẹ: phụ thu 250.000VNĐ/người/đêm (Bao gồm ăn sáng & không bao gồm giường phụ). Tùy theo loại phòng bạn chọn có thể thêm giường phụ. Phụ thu giường phụ 525.000VNĐ/phòng/đêm (Bao gồm ăn sáng). Tùy theo loại phòng bạn chọn có thể thêm giường phụ. Vui lòng kiểm tra thông tin phòng để biết chi tiết.', 0, 6, 3, 6, 5, 6),
(30, 'Phòng Gốm - Vie De Maison', '', '11', 'gom/', 'Wifi, ti vi, máy giặt , ....', 2, 2, 1250, 'Novotel Ha Long Bay Hotel cung cấp chỗ nghỉ đạt chuẩn 4 sao tại trung tâm của phường Bãi Cháy. Khách sạn có tầm nhìn ra Di Sản Thế Giới UNESCO - Vịnh Hạ Long, hồ bơi với sàn ngoài trời, nhà hàng và chỗ đỗ xe riêng miễn phí trong khuôn viên.  Với WiFi miễn phí, mỗi phòng tại đây được trang trí trang nhã và có nội thất hiện đại cùng những tiện nghi công nghệ cao. Ngoài ra các phòng còn được trang bị đầy đủ tiện nghi như máy điều hòa, két an toàn, tủ quần áo và phòng tắm riêng có vòi sen cùng đồ vệ sinh cá nhân miễn phí. Một số chỗ nghỉ có ban công riêng nhìn ra quang cảnh ngoạn mục.  Novotel Ha Long Bay Hotel có quầy lễ tân 24 giờ và bàn đặt tour, đồng thời cung cấp nhiều dịch vụ, bao gồm dịch vụ thu đổi ngoại tệ, cho thuê xe hơi và dịch vụ phòng 24 giờ. Đội ngũ nhân viên thân thiện của Novotel có thể sắp xếp các chuyến du ngoạn trên thuyền cho những khách muốn tham quan Vịnh Hạ Long.  Novotel Ha Long Bay Hotel nằm trong bán kính 800 m từ Chợ đêm Hạ Long, 1 km từ công viên giải trí Sun World Hạ Long và 4,4 km từ trung tâm thương mại Vincom Plaza Hạ Long. Sân bay gần nhất là sân bay quốc tế Cát Bi, cách đó 36 km.  Nhà hàng bên hồ bơi The Square phục vụ nhiều món ăn quốc tế, du khách có thể thưởng ngoạn tầm nhìn ra hồ bơi và Vịnh Hạ Long trong khi dùng bữa.', 1, 4, 4, 11, 8, 8),
(31, 'Phòng Deluxe Giường Đôi', '', '12', 'flc_1.jpg/', 'Wifi, ti vi, máy giặt , ....', 2, 4, 2500, '', 1, 3, 7, 6, 8, 8),
(32, 'Phòng Deluxe Giường Đơn', '', '13', 'flc_3.jpg/', 'Wifi, ti vi, máy giặt , ....', 1, 2, 5000, 'Tọa lạc tại Thành phố Hạ Long, Muong Thanh Quang Ninh Hotel cách Bãi Cháy 800 m đồng thời cách Chợ Đêm Hạ Long cũng như trung tâm mua sắm Marine Plaza 4 km. Khách sạn có truy cập Wi-Fi miễn phí, hồ bơi ngoài trời, trung tâm thể dục và phòng xông hơi ', 1, 6, 6, 8, 8, 8),
(33, 'Lạc Bước Đà Lạt', '', '14', 'dalat_1.jpg/', 'Wifi, ti vi, máy giặt , ....', 1, 2, 0, '', 1, 4, 2, 11, 6, 9),
(34, 'Em home ', '', '15', 'flc_1.jpg/', 'Wifi, ti vi, máy giặt , ....', 2, 6, 1500, 'Lea House Ha Long cung cấp phòng nghỉ gắn máy điều hòa với truyền hình cáp màn hình phẳng tại phường Hòn Gai thuộc thành phố Hạ Long. Nhà khách này nằm cách trung tâm thương mại Vincom Plaza Hạ Long 1,8 km, Bảo tàng Quảng Ninh 2,9 km và ga cáp treo Nữ hoàng 8 km. Chỗ nghỉ có sân hiên, WiFi miễn phí và chỗ đỗ xe riêng miễn phí.  Phòng nghỉ tại Lea House Ha Long được trang bị ấm đun nước, tủ để quần áo và phòng tắm riêng.  Cảng Tuần Châu nằm cách chỗ nghỉ 20 km trong khi Công viên giải trí Sun World Hạ Long cách đó 8 km. Sân bay gần nhất là sân bay quốc tế Cát Bi, nằm trong bán kính 77 km từ Lea House Ha Long.', 1, 6, 5, 10, 8, 8),
(35, 'TK House', '', '13', 'dalat_3.jpg/', 'Wifi, ti vi, máy giặt , ....', 4, 10, 2000, '', 1, 6, 6, 6, 6, 9),
(36, 'Tout Petit', '', '16', 'dalat_4.jpg/', 'Wifi, ti vi, máy giặt , ....', 2, 4, 1100, '', 1, 4, 4, 6, 6, 9),
(37, 'Hive', '', '17', 'the-hive-saigon.jpg/', 'Wifi, ti vi, máy giặt , ....', 0, 0, 3000, '', 1, 8, 6, 1, 5, 6),
(38, 'PRECIA', '', '18', 'chungcu_1.jpg/', 'Wifi, ti vi, máy giặt , ....', 2, 4, 1600, '', 1, 5, 5, 6, 7, 7),
(40, 'Phòng Deluxe Giường Đơn', '', '20', 'flc_3.jpg/', 'Wifi, ti vi, máy giặt , ....', 1, 2, 1000, 'Tọa lạc tại Thành phố Hạ Long, Muong Thanh Quang Ninh Hotel cách Bãi Cháy 800 m đồng thời cách Chợ Đêm Hạ Long cũng như trung tâm mua sắm Marine Plaza 4 km. Khách sạn có truy cập Wi-Fi miễn phí, hồ bơi ngoài trời, trung tâm thể dục và phòng xông hơi khô.  Khách sạn cách Siêu thị Big C 6 km. Núi Bài Thơ cách nơi nghỉ này 10 km còn Đảo Tuần Châu cách đó 15 km. Sân bay Quốc tế Cát Bi cách khách sạn 70 km.  Các phòng tại đây được trang bị truyền hình cáp màn hình phẳng, két an toàn, minibar và tiện nghi pha trà/cà phê. Phòng tắm riêng đi kèm bồn tắm, máy sấy tóc cùng đồ vệ sinh cá nhân. Một số phòng chọn lọc có tầm nhìn ra biển.  Nhà hàng Van Xuan phục vụ các món ngon của Châu Á và Phương Tây trong khi nhà hàng Thien Cung cung cấp bữa sáng tự chọn hàng ngày với các món ăn được yêu thích của Châu Á.  Du khách có thể chơi tennis, hát karaoke hết mình hay tận hưởng dịch vụ mát-xa thư giãn. Các tiện nghi khác gồm không gian tổ chức hội họp/yến tiệc, trung tâm dịch vụ doanh nhân và bàn đặt tour. Nhân viên ở quầy lễ tân 24 giờ có thể hỗ trợ khách với các dịch vụ giữ hành lý, giặt, ủi và đưa đón sân bay.', 1, 8, 7, 11, 8, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `hot` tinyint(4) DEFAULT 0,
  `sort` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `name`, `mo_ta`, `url`, `hinh`, `hot`, `sort`) VALUES
(5, 'Trải nghiệm những nơi tuyệt vời', 'Đặt phòng và đi khám phá những cái mới lạ', 'https://www.youtube.com/watch?v=DIgv-e18OzA', 'banner.jpg', 1, 0),
(6, 'Vui chọn mùa hè', 'Giảm giá đến 70%', 'index.php?ctrl=scheduled&page=1', 'muongthanh_summerpromotion_kvp132.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_pho`
--

CREATE TABLE `thanh_pho` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_pho`
--

INSERT INTO `thanh_pho` (`id`, `name`, `hinh`) VALUES
(5, 'Vũng Tàu', 'dl2.jpg'),
(6, 'Đà Lạt', 'dl1.jpg'),
(7, 'Phú Quốc', 'dl4.jpg'),
(8, 'Vịnh Hạ Long', 'dl5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` datetime NOT NULL,
  `id_dmtt` int(11) NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `name`, `hinh`, `mo_ta`, `ngay_tao`, `id_dmtt`, `noi_dung`) VALUES
(33, 'Trải nghiệm  Phú Quốc', 'blog-1.jpg', 'Trải nghiệm bình yên ', '2020-08-13 00:00:00', 9, '<p>Tọa lạc tại trung t&acirc;m Ph&uacute; Quốc với kh&ocirc;ng gian vườn xanh m&aacute;t t&aacute;ch biệt, b&atilde;i biển ri&ecirc;ng n&ecirc;n thơ c&ugrave;ng dịch vụ đa dạng, L&rsquo;azure Resort &amp; Spa l&agrave; điểm đến quen thuộc của nhiều du kh&aacute;ch. Nơi đ&acirc;y cũng gi&agrave;nh giải thưởng &ldquo;Kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; năm 2020&rdquo; trong cuộc b&igrave;nh chọn do Agoda tổ chức với số điểm 9,2/10 .</p>\r\n<p><span style=\"color: #333333; font-family: sans-serif; font-size: 19.008px;\">&ldquo;Kh&ocirc;ng gian t&aacute;ch biệt khỏi thế giới b&ecirc;n ngo&agrave;i bởi lối đi d&agrave;i xuy&ecirc;n dưới vườn c&acirc;y xanh rợp b&oacute;ng m&aacute;t. Gia đ&igrave;nh ch&uacute;ng t&ocirc;i được nghỉ ngơi y&ecirc;n tĩnh v&agrave; tắm biển tại b&atilde;i biển ri&ecirc;ng, t&ocirc;n trọng sự ri&ecirc;ng tư tối đa&rdquo;, anh Kyungmin Song (H&agrave;n Quốc) để lại lời nhận x&eacute;t về L&rsquo;Azure tr&ecirc;n Agoda với số điểm b&igrave;nh chọn 9,5.</span></p>\r\n<p><span style=\"color: #333333; font-family: sans-serif; font-size: 19.008px;\">Với kh&ocirc;ng gian tho&aacute;ng đ&atilde;ng trong l&agrave;nh, nhiều du kh&aacute;ch chọn L&rsquo;Azure Resort &amp; Spa l&agrave; nơi chia sẻ khoảnh khắc đ&aacute;ng nhớ b&ecirc;n người th&acirc;n.</span></p>\r\n<p>\"&gt;</p>'),
(34, 'Hẻm núi', 'blog-2.jpg', 'Hẻm núi', '2020-08-13 00:00:00', 10, ''),
(35, 'Everet', 'blog-3.jpg', 'Everet', '2020-08-13 00:00:00', 14, ''),
(36, 'Bưu thiếp du hành thời gian', 'blog-4.jpg', 'Bưu thiếp du hành thời gian', '2020-08-13 00:00:00', 12, ''),
(37, 'Bưu thiếp du hành thời gian', 'blog-5.jpg', 'Bưu thiếp du hành thời gian', '2020-08-13 00:00:00', 10, ''),
(38, 'Du lịch Virginia cho trẻ em', 'blog-6.jpg', 'Du lịch Virginia cho trẻ em', '2020-08-13 00:00:00', 14, ''),
(39, 'Bryce Canyon một cảnh quan tuyệt đẹp', 'blog-7.jpg', 'Bryce Canyon một cảnh quan tuyệt đẹp', '2020-08-13 00:00:00', 9, ''),
(40, 'Hòn đảo', 'blog-8.jpg', 'Hòn đảo', '2020-08-13 00:00:00', 14, ''),
(41, 'Đắm mình với các tuyệt tác nơi núi rừng', 'dl1.jpg', 'Đắm mình với các tuyệt tác thiên nhiên nơi núi rừng Tây Bắc  ', '2020-08-13 00:00:00', 14, '<p>Kh&ocirc;ng chỉ c&oacute; Khau Phạ, đỉnh<span style=\"box-sizing: border-box; font-weight: bolder; color: #4f5962; font-family: Quicksand, sans-serif; font-size: 14px;\">&nbsp;<strong>M&ugrave; Cang</strong></span><span style=\"color: #4f5962; font-family: Quicksand, sans-serif; font-size: 14px;\"><strong>&nbsp;Chải</strong> h&ugrave;ng vĩ cũng l&agrave; điểm &ldquo;phải đến&rdquo; của nhiều &ldquo;t&iacute;n đồ ưa x&ecirc; dịch&rdquo;. Tại Y&ecirc;n B&aacute;i, c&oacute; một thắng cảnh kh&aacute; th&uacute; vị kh&aacute;c m&agrave; bạn kh&ocirc;ng thể bỏ qua đ&oacute; l&agrave; Động Ti&ecirc;n Nữ. Những nhũ đ&aacute; trong động giống như những ch&ugrave;m hoa l&uacute;c ẩn l&uacute;c hiện, lung linh sắc m&agrave;u trải d&agrave;i suốt hơn 1km kết hợp &aacute;nh s&aacute;ng thi&ecirc;n nhi&ecirc;n tạo n&ecirc;n một khung cảnh v&ocirc; c&ugrave;ng kỳ ảo. Ngo&agrave;i ra, khi đến thăm Động Ti&ecirc;n Nữ, bạn c&oacute; thể kh&aacute;m ph&aacute; v&agrave; hiểu th&ecirc;m c&aacute;c hoạt động sinh sống của Người Nguy&ecirc;n Thủy trước đ&acirc;y với những h&igrave;nh ảnh biểu trưng đầy sinh động.</span><br style=\"box-sizing: border-box; color: #212121; font-family: Roboto, serif; font-size: 15px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; color: #212121; font-family: Roboto, serif; font-size: 15px;\">Tr&ecirc;n con đường chinh phục c&aacute;c d&atilde;y n&uacute;i h&ugrave;ng vĩ ở T&acirc;y Bắc, bạn sẽ thật sự rất hứng khởi khi c&oacute; dịp tận mắt ngắm bản L&igrave;m M&ocirc;ng xinh đẹp nằm n&eacute;p m&igrave;nh y&ecirc;n b&igrave;nh giữa những thửa ruộng bậc thang hay bản C&aacute;t C&aacute;t dưới ch&acirc;n n&uacute;i Ho&agrave;ng Li&ecirc;n Sơn.</span><br /><br />\"&gt;</p>');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kieu_phong`
--
ALTER TABLE `kieu_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhan_xet`
--
ALTER TABLE `nhan_xet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_loaiphong` (`id_loaiphong`),
  ADD KEY `id_kieuphong` (`id_kieuphong`),
  ADD KEY `id_thanhpho` (`id_thanhpho`),
  ADD KEY `id_chinhanh` (`id_chinhanh`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanh_pho`
--
ALTER TABLE `thanh_pho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dmtt` (`id_dmtt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chi_nhanh`
--
ALTER TABLE `chi_nhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhmuc_tintuc`
--
ALTER TABLE `danhmuc_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `kieu_phong`
--
ALTER TABLE `kieu_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nhan_xet`
--
ALTER TABLE `nhan_xet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thanh_pho`
--
ALTER TABLE `thanh_pho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD CONSTRAINT `dat_phong_ibfk_1` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `nhan_xet`
--
ALTER TABLE `nhan_xet`
  ADD CONSTRAINT `nhan_xet_ibfk_2` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danh_muc` (`id`),
  ADD CONSTRAINT `phong_ibfk_2` FOREIGN KEY (`id_loaiphong`) REFERENCES `loai_phong` (`id`),
  ADD CONSTRAINT `phong_ibfk_3` FOREIGN KEY (`id_kieuphong`) REFERENCES `kieu_phong` (`id`),
  ADD CONSTRAINT `phong_ibfk_4` FOREIGN KEY (`id_thanhpho`) REFERENCES `thanh_pho` (`id`),
  ADD CONSTRAINT `phong_ibfk_5` FOREIGN KEY (`id_chinhanh`) REFERENCES `chi_nhanh` (`id`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`id_dmtt`) REFERENCES `danhmuc_tintuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
