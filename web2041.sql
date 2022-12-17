-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 02:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2041`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `category_desc`) VALUES
(3, 'Áo Nam', '<p>Áo Nam thời thượng giá tốt nhất thị trường.</p>'),
(4, 'Quần Nam', ''),
(6, 'Quần Jean Nam', 'Cùng tham khảo các mẫu quần Jean nam ống suông, quần Jean nam bó hay quần bò nam co giãn tại X-SHOP với phong cách trẻ trung, lịch lãm và quyến rũ.'),
(8, 'Áo Thun Nữ', 'Áo Thun Nữ - Áo Phông Nữ Tay Dài Trẻ Trung Cá Tính'),
(9, 'Quần Short', 'Quần Short - 100+ Mẫu Quần Sooc Lửng Thể Thao'),
(10, 'Chân Váy', 'Sở Hữu Ngay Chân Váy Chính Hãng Giá Tốt Nhất Thị Trường'),
(11, 'Áo Khoác', 'Áo Khoác Nam Nữ - Áo Phao Thương Hiệu Việt Chất Lượng '),
(12, 'Quần Âu', 'Quần Tây Nam Ống Đứng - Quần Âu Công Sở Co Giãn'),
(13, 'Áo Sơ Mi', 'Áo Sơ Mi - Sơ Mi Công Sở Lịch Lãm Quyến Rũ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale` double NOT NULL DEFAULT '0',
  `ngay_nhap` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `sale`, `ngay_nhap`, `description`, `categoryID`) VALUES
(2, 'Áo Khoác Gió Nam 3C Plus Năng Động', '../../assets/uploads/akm5037-cam-35.webp', 499000, 99000, NULL, '<h2>Đặc điểm sản phẩm</h2><p>Áo khoác nam&nbsp;3C PLUS - Cản gió, Chống thấm nước vào mặt trong, Cản bụi</p><p>Cấu trúc 2 lớp cơ bản</p><p>Thiết kế có mũ có thể tháo rời, khóa áo có in khắc logo</p><p>Đường cắt khỏe khoắn, phom áo thoải mái vận động</p><p>Gấu áo có chun rút tùy chỉnh theo yêu cầu mong muốn của khách hàng. chun tay ôm vừa và chắc chắn.&nbsp;</p><p>Ngực áo có in logo YODY phản quang công nghệ nhũ bạc&nbsp;vô cùng nổi bật và tinh tế.&nbsp;</p>', 3),
(3, 'Áo Polo Nam Pique Mắt Chim Basic Co Giãn Thoáng Khí', '../../assets/uploads/apm3299-tra-qjm5029-xah-40.webp', 299000, 99000, NULL, '<h2>Đặc điểm sản phẩm</h2><p>Chất liệu: Pique mắt chim với thành phần 60% Cotton USA&nbsp;+ 35% Polyester + 5% Spandex</p><p>Sử dụng&nbsp;Cotton USA - sợi cotton&nbsp;tốt nhất trên thế giới</p><p>Công nghệ nhuộm Solid Dyed tạo nên hiệu ứng bắt mắt</p><p>Chất liệu vải độc đáo với hiệu ứng mắt chim độc đáo, mới lạ và trẻ trung</p><p>Vải pique&nbsp;thông thoáng, thấm hút tốt có độ bền cao</p><p>Áo co giãn tốt, luôn giữ được form và bền màu</p>', 3),
(4, 'Quần Jean Nam Regular Cotton Giặt Mài', '../../assets/uploads/products/qjm5023-xnh-2.webp', 529000, 0, NULL, '<h2>Đặc điểm sản phẩm</h2><p>Quần jean nam YODY - thiết thế trẻ trung, basic</p><p>Chất liệu Cotton Mỹ - 1 trong những loại sợi cotton tốt nhất thế giới</p><p>Khả năng thấm hút tốt, co giãn vừa phải mang lại cảm giác thoải mái cho người mặc</p><p>Form dáng regular dành cho nam giới</p><p>Thích hợp phối với đa dạng items đi làm, đi chơi, đi học như áo polo, sơ mi, áo thun…</p>', 6),
(5, 'Áo Polo Nam Pique Sồi', '../../assets/uploads/products/apm5393-xhd-3.webp', 369000, 70000, NULL, '<p><strong>Chất liệu </strong>pique modal bao gồm 24% Cotton, 22% Modal, 51% Polyester, 3% Spandex</p><p>Thoải với với chất liệu mềm mại, thông thoáng</p><p>Thoải mái cử động với khả năng&nbsp;co giãn và đàn hồi tốt</p><p>Áo polo nam dáng regular ôm vừa phải cơ thể, phù hợp với mọi dáng người, với điểm nhấn bo dệt kẻ nổi bật.</p><p>Mặc cùng quần âu, jeans, short và trong nhiều hoàn cảnh như đi làm, đi học, đi chơi...</p>', 3),
(6, 'Quần Short Thun Nam Thể Thao Năng Động', '../../assets/uploads/products/sqm5005-den-8.webp', 299000, 0, NULL, '<p><strong>Chất liệu</strong> vải 90% Polyester + 10% spandex</p><p>Thoáng mát, nhẹ nhàng, bền màu&nbsp;nhờ sợi vải được dệt bởi công nghệ tiên tiến</p><p>Thấm hút nhanh, thông thoáng</p><p>Co giãn thoải mái, thích hợp cho mọi chuyển động của cơ thể với cường độ cao</p><p>Thoải mái giặt máy nhờ sự bền bỉ của chất liệu vải</p><p>Form ngang gối,&nbsp;bản cạp to khỏe khoắn,&nbsp;túi cạnh sườn có khóa cùng với sườn thân sau phối phản quan vô cùng nổi bật và tinh tế</p>', 9),
(7, 'Chân Váy Chữ A Ngắn Túi Hộp', '../../assets/uploads/products/cvn5072-nan-6.webp', 429000, 0, NULL, '<p><strong>Sử dụng chất liệu vải kaki năng động, co giãn, cá tính</strong></p><p>Chân váy nữ A túi hộp in chữ là điểm nhấn</p><p>Sản phẩm có thể mặc hàng ngày, như đi làm, đi chơi</p><p>Kết hợp được với áo phông, sơ mi, ...</p>', 10),
(8, 'Chân Váy Chữ A Xếp Ly 1 Bên Phối Cúc', '../../assets/uploads/products/cvn4144-nau-3.webp', 349000, 0, NULL, '<p><strong>Chất liệu: vải tuytsi</strong></p><p>Dày dặn, bền form, hơi co giãn nhẹ</p><p>Thiết kế độc đáo với đường xếp ly một bên và cúc đính đầy nữ tính, bắt mắt</p><p>Chân váy trẻ trung, thích hợp mặc cùng áo, áo thun, phông, sơ mi... mặc đi làm, đi chơi đều được</p>', 10),
(9, 'Áo Khoác Nữ Kaki Dáng Ngắn', '../../assets/uploads/products/akn5006-reu-5.webp', 569000, 0, NULL, '<p><strong>Chất liệu sản phẩm: Vải kaki</strong></p><p>Đường may và sợi vải chắc chắn, thân thiện với người dùng</p><p>Áo khoác nhẹ trong thời tiết sẽ lạnh cũng như chống nắng</p><p>Thiết kế chi tiết túi điểm nhấn và cá tính</p><p>Kiểu dáng ngắn,&nbsp;khỏe khoắn, dễ dàng mix với các trang phục như chân váy, jeans</p>', 11),
(10, 'Áo Khoác Gió Nữ 3C Plus Năng Động', '../../assets/uploads/products/akn5040-vag-5.webp', 499000, 0, NULL, '<p>Áo khoác gió nữ 3C PLUS:<strong>&nbsp;Cản gió,&nbsp;Cản bụi, Chống&nbsp;ngấm nước vào bên trong</strong></p><p>Phiên bản nâng cấp của Áo gió 3C</p><p>Giữ ấm hiệu quả mà vẫn đảm bảo vẻ ngoài gọn gàng nhờ cấu trúc 2 lớp dày dặn, bền chắc</p><p>Linh hoạt khi sử dụng với thiết kế mũ áo có thể tháo rời, gấu áo có chun rút tùy chỉnh theo yêu cầu mong muốn của khách hàng</p><p>Chun tay ôm vừa vặn giúp cản gió trong quá trình di chuyển bằng xe máy, xe đạp...</p><p>Công nghệ in nhũ&nbsp;bạc mang đến sự sang trọng, cao cấp cho áo gió của bạn</p>', 11),
(11, 'Quần Tây Nam Ống Đứng Classic Lịch Lãm', '../../assets/uploads/products/qam5021-nau-3.webp', 549000, 0, NULL, '<p><strong>Chất liệu vải&nbsp;78% Polyester + 18% Rayon + 4% Spandex</strong></p><p>Sợi vải mềm mại, thoải mái, mát mẻ lại có độ bền tốt, độ bền màu cao, khó phai, khó bai.</p><p>Cử động thoải mái với chất liệu co dãn tốt</p><p>Quần âu nam dáng Classic có thiết kế cơ bản được làm mới tại chi tiết túi 2 bên sườn</p><p>Chất liệu khó nhăn.&nbsp;phẳng và dày dặn rất thích hợp những công việc tại văn phòng</p>', 12),
(12, 'Quần Tây Nam Nano Công Sở Trẻ Trung', '../../assets/uploads/products/qam4007-ghi-7.webp', 549000, 0, NULL, '<p><strong>Chất liệu 100% Polyester</strong></p><p>Bề mặt vải mềm và nhẹ giúp cho khách hàng cảm thấy vô cùng thoải mái</p><p>Quần âu nam slim được thiết kế trên chất liệu nano solid</p><p>Thiết kế cơ bản túi trước chéo sườn có lé, túi hậu cài cúc khắc logo Yody</p><p>Cạp quần có lớp vải lót phía trong thêu logo yody và 2 đường cao su giúp ôm sát vòng bụng</p><p>Màu sắc đa dạng phù hợp với đặc thù công việc cũng như mục đích sử dụng của từng người</p>', 12),
(13, 'Áo Sơ Mi Dài Tay Cao Cấp Yo.Smart', '../../assets/uploads/products/smm5085-kxm-6.webp', 649000, 0, NULL, '<p><strong>Chất liệu&nbsp;Knit Nhật 100% polyester</strong></p><p>Được phát triển trên dòng sợi nhân tạo có tính năng vượt trội</p><p>Mềm mại, thấm hút nhanh, thoáng mạt, kháng nhàu tốt.</p><p>Kết hợp cùng kiểu dệt kim tạo cho vải có độ co giãn phù hợp tạo cảm giác thoải mái khi mặc</p><p>Thiết kế có form dáng hơi ôm với chi tiết thêu sau cổ áo</p><p>Vải kẻ sọc tăm tinh tế và sang trong phù hợp với nhiều độ tuổi khác nhau.</p>', 13),
(14, 'Áo Sơ Mi Nam Tay Ngắn Cafe Melange Thoáng Khí Khử Mùi', '../../assets/uploads/products/scm3030-gda-3.webp', 549000, 0, NULL, '<p><strong>Chất liệu vải Cafe với thành phần&nbsp;50% sợi Cafe + 50% sợi PET tái chế</strong></p><p>Chất liệu vải mang nhiều tính đột phá với công nghệ dệt mới cùng nguồn gốc thiên nhiên</p><p>Kiểm soát mùi gấp 2.26 lần vải cotton thông thường</p><p>Nhanh khô - Qick Dry&nbsp;1.9 lần vải thông thường&nbsp;</p><p>Vải bền, chắc, và không xù lông, độ co rút vải đang chỉ có 3%</p><p>Bảo vệ bạn khởi tia UV đọc hại&nbsp;vĩnh viễn tự nhiên từ các nano Cafe nằm trên sợi vải</p><p>Áo sơ mi lịch lãm, thoải mái&nbsp;tham gia các hoạt động, sự kiện khác nhau</p>', 13),
(15, 'Áo Polo Nam Coolmax Thoáng Mát Bo Cổ Phối Màu', '../../assets/uploads/products/apm5181-cdt-qjm5037-den-7.webp', 299000, 100000, '2022-10-10 21:48:01', '<p><strong>Chất liệu: CoolMax với thành phần 95% CoolMax + 5% spandex</strong></p><p>Vải coolmax nhẹ, xốp, thoáng mát, truyền dẫn ẩm tốt.</p><p>Bề mặt sợi có rãnh làm tăng khả năng truyền dẫn khí và ẩm.</p><p>Thấm hút mồ hôi tốt, hút ẩm nhanh và nhanh khô tạo sự thoải mái.</p><p>Vải có tính đàn hồi co giãn tốt, ít nhàu, tiện dụng khi vận động</p><p>Form áo ôm vừa phải được làm đơn giản nên phù hợp để phối kết hợp với nhiều trang phục khác nhau</p>', 3),
(16, 'Quần Jean Nam Cotton USA Ống Suông', '../../assets/uploads/products/qjm5029-xnh-2.webp', 529000, 0, '2022-10-10 21:51:14', '<p><strong>Chất liệu 89% Cotton USA&nbsp;+&nbsp;10% Polyester + 1% Sapndex</strong></p><p>Chất liệu Denim Cotton pha với Polyester&nbsp;mang lại cảm giác mềm mại</p><p>Vải Denim được dệt từ sợi bông USA cao cấp</p><p>Vải bền đẹp, chắc chắn, không phai màu, không co rút khi giặt.</p><p>Kiểu dáng suông thoải mái&nbsp;dáng vừa vặn, quần&nbsp;wash nhẹ khỏe khắn, năng động</p><p>Kết hợp cùng nhiều trang phục khác nhau để mang tới cho mình một phong cách cá tính riêng.</p>', 6),
(17, 'Quần Short Nam Phối Chỉ Nổi', '../../assets/uploads/products/quan-sooc-nam-apm5351-den-qsm5055-vag-5-yodyvn.webp', 359000, 0, '2022-10-10 21:52:22', '<p>…..</p>', 9),
(18, 'Quần Short Nam Kaki Ống Đứng Lịch Lãm', '../../assets/uploads/products/qsm5019-ghi0.webp', 359000, 30000, '2022-10-10 21:54:58', '<p><strong>Chất liệu Kaki mềm nhẹ,&nbsp;thoải mái</strong></p><p>Quần short nam thiết kế cơ bản dài ngang gối</p><p>Cạp quần to bản có đỉa tiện lợi</p><p>Túi cúc&nbsp;phía sau có thể đựng đồ nhỏ gọn như ví, chìa khóa</p><p>Phom dáng&nbsp;trẻ trung, lịch lãm tạo sự chỉn chu,&nbsp;thích hợp mặc ở nhà hay&nbsp;ra ngoài cafe, hẹn hò</p><p>Sản phẩm basic&nbsp;dành cho mọi chàng trai</p>', 9),
(19, 'Áo Phao Nam 3s Plus', '../../assets/uploads/products/phm5017-ghi-2.webp', 699000, 0, '2022-10-10 22:00:51', '<p><strong>ÁO PHAO NAM 3S&nbsp;PLUS: Siêu nhẹ - Siêu ấm - Siêu gọn - Trượt nước</strong></p><p>Là phiên bản nâng cấp của áo phao 3S</p><p>Chất liệu&nbsp;trượt nước trên 15 lần giặt,&nbsp;có thể sử dụng trong điều kiện mưa&nbsp;nhẹ mà không lo ngấm nước vào bên trong</p><p>Áo có khả năng giữ ấm hiệu quả mà vẫn đảm bảo sự gọn nhẹ</p><p>Thiết kế basic giúp người mặc thoải mái hoạt động hàng ngày</p><p>Phom dáng trẻ trung và&nbsp;đa dạng phiên bản màu sắc&nbsp;lựa chọn</p><p>Có&nbsp;túi đựng nhỏ gọn, dễ dàng mang theo mọi lúc mọi nơi</p><p>Dễ phối đồ&nbsp;với nhiều&nbsp;phong cách và mặc trong mọi&nbsp;bối cảnh</p><p>Sản phầm rất thiết thực dành cho nam giới mặc khi gió lạnh,&nbsp;sương sớm</p>', 11),
(20, 'Áo Thu Đông Nữ Dáng Ôm Phối Cúc Tay', '../../assets/uploads/products/atn5000-cba-5.webp', 215200, 54200, '2022-10-12 14:14:34', '<p><strong>Áo thun nữ dài tay dành cho mùa thu đông</strong></p><p>Chất vải len tăm giữ ấm hiệu quả</p><p>Form ôm tôn dáng, co giãn thoải mái lại thích hợp mặc bên trong gọn gàng</p><p>Rất thích hợp để phối cùng chân váy, quần jean, quần aao sơ vin hiện đại</p>', 8),
(21, 'Váy Chữ A Liền Thân Nơ Ngực', '../../assets/uploads/products/van5134-hog-5.webp', 479200, 120000, '2022-10-12 14:15:59', '<p><strong>Váy nữ dáng chữ A trẻ trung, tôn dáng che khuyết điểm vòng 3</strong></p><p>Ngực áo thiết kế tạo điểm nhấn cho trang phục, thu hút ánh nhìn người đối diện</p><p>Sản phẩm phù hợp với nhiều khách hàng nữ khi ở nhà, đi chơi cafe&nbsp;&nbsp; &nbsp;</p><p>Thoải mái hoạt động với chất liệu thấm hút mồ hôi tốt, bền màu, không xù lông</p><p>Màu sắc tươi sáng rõ nét, trẻ trung</p>', 10),
(22, 'Chân Váy Xòe Dài Xếp Ly Lưng Thun Mềm Mại Không Nhăn', '../../assets/uploads/products/atn4624-cam-cvn4222-den-2.webp', 359000, 90000, '2022-10-12 14:17:45', '<p><strong>Chất liệu: Vải voan với thành phần 100% Polyester</strong></p><p>Vải voan sạn có độ sần nhẹ, không xước, vô cùng mềm mại, bay bổng và độ rủ tự nhiên, nhờ vậy mà váy không bao giờ bị nhăn, không bị bám dính và vô cùng thoáng mát</p><p>Chân váy có đặc tính thấm hút mồ hôi tốt&nbsp;</p><p>Màu sắc thanh lịch có thể kết hợp cùng áo thun, áo sơ mi, áo polo hay áo len đều đẹp</p><p>Độ dài qua gối cùng dáng xòe giúp che đi khuyết điểm cơ thể</p>', 10),
(23, 'Áo Thun Nữ Croptop Dáng Ôm Cá Tính', '../../assets/uploads/products/atn5196-kxl-5.webp', 160000, 200000, '2022-10-12 14:20:51', '<p><strong>Áo thun nữ chất liệu Zib, thành phần&nbsp; 80% Cotton + 15% Polyester + 5% Spandex</strong></p><p>Bề mặt vài mịn màng, thông thoáng, thấm hút, co giãn thoải mái, không bai gião</p><p>Dệt kẻ trẻ trung, phom&nbsp;dáng ôm sát tay lửng phù hợp cho đầu mùa thu đông</p><p>Có thể mix với quần nỉ, jean hay chân váy để&nbsp;mặc đi chơi, đi làm hay ở nhà đều được</p>', 8);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `idReview` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT 'id user comment',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProduct` int(11) NOT NULL COMMENT 'comment tai product',
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`idReview`, `id`, `content`, `idProduct`, `time`) VALUES
(1, 9, 'ahihi do ngoc', 2, '2022-10-02 14:00:27'),
(2, 9, 'bla bla bklaa as update', 3, '2022-10-02 21:35:57'),
(3, 9, 'comment at 21:37 02/10/2022', 3, '2022-10-02 21:37:16'),
(4, 9, 'san pham tot', 6, '2022-10-12 14:57:18'),
(5, 9, 'comment 2 edited', 2, '2022-10-24 13:19:32'),
(6, 9, 'test here', 19, '2022-10-24 13:36:20'),
(8, 19, 'last comment edited', 6, '2022-10-24 21:41:13'),
(9, 17, 'đẹp đừng hỏi =))', 16, '2022-10-24 22:05:02'),
(10, 10, 'look so beautiful', 20, '2022-10-24 22:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(0, 'Khách'),
(1, 'Admin'),
(2, 'Nhân Viên');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://source.unsplash.com/random',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `name`, `description`, `slug`) VALUES
(4, '../../assets/uploads/slider/nimble-made-7RIMS-NMsbc-unsplash.jpg', 'Men\'s', 'New Arrivals', '3'),
(5, '../../assets/uploads/slider/priscilla-du-preez-dlxLGIy-2VU-unsplash.jpg', 'Women\'s', 'New Collection', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `sex`, `image`, `phone`, `birthday`, `role_id`) VALUES
(9, 'nhat@gmail.com', 'cuzinpro', 'cuzinpro', 'nam', '../../assets/uploads/users/Avatar Couple Cool.jpg', '0989789090', '2022-12-12', 1),
(10, 'duongbeo@gmail.com', 'cuzinbro', 'admin', 'nam', '../../assets/uploads/users/Đặng Hải Dương.jpg', '0686868686', '2003-08-29', 1),
(14, 'demo@1.com', 'demo', 'demo', 'nam', '../assets/uploads/users/1596889693_686_Anh-avatar-dep-va-doc-dao-lam-hinh-dai-dien.jpg', '0987654321', '1231-02-13', 2),
(17, 'nhatdhph24363@fpt.edu.vn', 'Đỗ Hữu Nhật', 'CuzinPro.2k3', 'nam', '../../assets/uploads/users/me.jpg', '0583034270', '2003-08-23', 0),
(18, 'haha@haha.ha', 'haha', 'haha', 'nam', '../../assets/uploads/users/1596889693_510_Anh-avatar-dep-va-doc-dao-lam-hinh-dai-dien.jpg', '9809090909', '1202-03-03', 0),
(19, 'demo@cuoi.com', 'Demo lần cuối', 'cuoi', 'nữ', '../../assets/uploads/users/dedmo.jpg', '0929292929', '2000-02-23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_prd_ctg` (`categoryID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `product_review` (`idProduct`),
  ADD KEY `user_review` (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `idReview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_prd_ctg` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `product_review` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_review` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
