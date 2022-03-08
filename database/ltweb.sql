-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 03:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltweb`
--
create database ltweb;
use ltweb;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `postId` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `username`, `postId`, `content`, `time`, `status`) VALUES
(1, 'username', 4, 'Sản phẩm rất tốt! Giá cả hợp lý', '2021-11-23 06:21:41', 1),
(2, 'ltweb', 4, 'Sản phẩm rất tốt! Giá cả hợp lý', '2021-11-23 06:22:48', 0),
(3, 'username', 4, 'Sản phẩm rất tốt!', '2021-11-23 07:07:39', 1),
(4, 'username', 5, 'Sản phẩm rất tốt!', '2021-11-23 07:08:00', 1),
(5, 'ltweb', 4, 'Giá cả hợp lý', '2021-11-23 07:10:17', 1),
(6, 'ltweb', 6, 'Sản phẩm tốt!', '2021-11-23 09:24:45', 1),
(7, 'username', 4, 'good', '2021-11-23 11:25:26', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(10) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `mail`) VALUES
(1, 'C16 Lý Thường Kiệt, Phường 15, Quận 11, Thành phố Hồ Chí Minh', '0769220162', 'demonhunterg@gmail.com mon@mona.media');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `username` char(20) NOT NULL,
  `name` char(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(10) NOT NULL,
  `phone` char(10) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`username`, `name`, `email`, `password`, `dob`, `gender`, `phone`, `avatar`) VALUES
('ltweb', 'ltweb', 'user@gmail.com', '12345', '2000-02-20', 'Nam', '0123456789', './uploads/ltweb/avatar.png'),
('username', 'username', 'user@gmail.com', '12345', '2000-06-21', 'Nam', '0123456789', './uploads/username/avatar.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `content` mediumtext NOT NULL,
  `SEOkey` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `SEOkey`, `image`) VALUES
(4, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết: 4', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 1', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/03/banner4-1200x630-300x158.jpg'),
(5, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết 5', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 2', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/03/banner-1200x630-300x158.jpg'),
(6, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết: 6', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 3', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/03/banner2-1200x630-300x158.jpg'),
(7, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết: 7', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 4', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/04/bg-unnamed-300x158.jpg'),
(8, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết: 8', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 5', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/04/bg-green-tree-300x158.jpg'),
(9, 'Đánh giá máy in HP LaserJet Pro M404dn - ID bài viết: 9', 'Đánh giá máy in', '                    <p>Đến từ nhãn hàng uy tín HP, sản phẩm                         máy in HP LaserJet Pro M404dn khi                         vừa mới ra mắt một thời gian ngắn đã                         nhận được đánh giá cao từ nhiều                         người dùng. Máy in phù hợp với mọi                         công việc văn phòng công sở, doanh                         nghiệp nhỏ và vừa và được xem như là                         một giải pháp hữu hiệu giúp doanh                         nghiệp vận hành thông minh hơn. Máy                         in HP M404dn sở hữu nhiều tính năng                         ưu việt của một máy in laser, được                         thiết kế hướng tới nhu cầu của các                         doanh nghiệp, văn phòng nhỏ. Vậy cỗ                         máy in này có những ưu điểm vượt                         trội gì so với các đối thủ khác?                         Cùng Siêu Việt tìm hiểu ngay nhé!</p>                     <h4>Thiết kế nhỏ gọn, màu sắc trang nhã</h4>                     <p>Màu trắng chủ đạo, thiết kế nhỏ gọn                         cùng kích thước 381 x 357 x 216mm và                         trọng lượng 8,5kg, không cồng kềnh                         sẽ giúp bạn dễ dàng đặt HP LaserJet                         Pro M404dn ở mọi nơi trong văn                         phòng, tiết kiệm không gian và phù                         hợp với mọi kiểu văn phòng.</p>                     <img src=\"./public/img/Hinh1_News.jpg\" alt=\"Máy                         in HP LaserJet Pro M404dn\"                         class=\"center_img\">                     <p>Bảng điều khiển được thiết kế thông                         minh với màn hình LCD 2 dòng, đầy đủ                         các nút OK, trái phải, nút huỷ, nút                         lùi, đèn led READY cùng đèn báo lỗi                         giúp người dùng dễ dàng điều khiển                         và sử dụng.</p>                     <h4>Độ phân giải cao cho bản in sắc nét</h4>                     <p>Được trang bị độ phân giải 1200 x                         1200 dpi, HP M404dn cho chất lượng                         bản in đen trắng sắc nét, rõ ràng và                         dễ đọc. Máy in được nhiều khổ giấy                         (A4; A5; A6; B5 (JIS); B6 (JIS),..)                         và nhiều loại giấy như giấy trơn,                         giấy nhẹ, giấy nặng,…</p>                     <h4>Tốc độ in nhanh, tiết kiệm thời gian                         in ấn</h4>                     <p>Máy in laser HP LaserJet Pro M404dn                         sở hữu tốc độ in chóng mặt, khoảng                         38 trang/phút khi in một mặt và 31                         trang/phút khi in 2 mặt, 6,2s khởi                         động cùng 8,8s trở lại chế độ hoạt                         động. Không những nhanh mà khả năng                         in cũng rất mượt mà, liên tục nhờ                         hộp mực chính hãng HP. Vì thế, bạn                         không phải chờ đợi quá lâu mà có thể                         in tài liệu một cách thật nhanh                         chóng, tiết kiệm thời gian tối ưu                         hơn, nhanh chóng có được tài liệu                         cho khách hàng hay trình sếp trong                         các buổi họp giúp hiệu quả công việc                         được tăng cao.</p>                     <p>Khay giấy mặc định của HP M404dn có                         thể chứa được hơn 250 tờ cùng khay                         giấy ra 150 tờ. Nhờ đó, chiếc máy in                         này chắc chắn sẽ là một trợ thủ đắc                         lực cho các doanh nghiệp, văn phòng.</p>                     <img src=\"./public/img/Hinh2_News.jpg\"                         alt=\"Chức năng máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <h4>Kết nối in ấn hoàn hảo</h4>                     <p>Tuy không có khả năng in không dây                         như M404dw nhưng M404dn vẫn hoàn                         toàn có thể in từ xa thông qua đám                         mây nhờ vào các ứng dụng in ấn di                         động như Apple AirPrint, Google                         Cloud Print, HP ePrint, HP Smart                         App,…Vì thế cần phải có Wi-Fi mà bạn                         vẫn có thể in được. Ngoài ra, máy                         còn được trang bị công suất in rất                         lớn lên đến 4000 trang/tháng và chu                         kỳ tối đa lên đến 80.000 trang.</p>                     <h4>Trang bị đầy đủ kết nối đa dạng</h4>                     <p>Kết nối tiêu chuẩn của máy in HP                         M404dn bao gồm cổng USB 2.0 ở phía                         sau, lỗ cắm USB phía trước máy cùng                         cổng mạng LAN RJ45.</p>                     <p>Tuy mạnh mẽ nhưng cũng rất tiết kiệm,                         máy in HP M404dn sẽ giúp bạn giúp                         tiết kiệm điện đến 18% so với các                         sản phẩm đời trước nhờ công nghệ HP                         Auto-on/Auto-off.</p>                     <img src=\"./public/img/Hinh3_News.jpg\"                         alt=\"Thông số máy in HP LaserJet                         Pro M404dn\" class=\"center_img\">                     <p>HP M404dn còn được đánh giá là thiết                         bị hàng đầu trong lĩnh vực bảo mật                         in ấn nhờ có cài đặt phần mềm HP                         Secure, giúp ngăn chặn các cuộc tấn                         công từ bên ngoài.</p>                     <h4>Lời kết</h4>                     <p>Qua những ưu điểm và tính năng nổi                         bật mà Siêu Việt vừa tổng hợp, bạn                         đã kết em máy in HP M404dn chưa ạ?                         Nhanh chóng, in đảo mặt tiện lợi,                         tiết kiệm, bảo mật tốt,…ưu điểm to                         to được thu gọn trong HP M404dn nhỏ                         nhỏ. Chiếc máy in này thật xứng đáng                         với danh hiệu trợ thủ đắc lực cho                         doanh nghiệp.</p>                     <p>Mua máy in HP LaserJet Pro M404dn ở                         đâu? Báo giá máy in HP LaserJet Pro                         M404dn? Câu trả lời sẽ được giải đáp                         tận tình khi bạn gọi cho Mona Company!</p>', 'Bài viết 6', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2018/04/bg-electric-300x158.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` char(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `type`, `quantity`, `description`) VALUES
(1, 'Hộp mực máy in Canon LBP 2900, 3000', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/ef/3b/f4/5f94c0e74cd8e352ea99a5b427ee89cc.jpg.webp', 'Mực in', 10, 'Mẫu mã: Mới 100%, Nguyên đai, Nguyên kiện Màu sắc: Đen (Black) Loại mực : Laser Trọng lượng: 0.8 kg'),
(2, 'Hộp mực máy in 12A cho máy in Canon 2900 3000 HP 1010 1020', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/84/9c/38/c1eeae432e40b7871c4892c6989098df.jpg.webp', 'Mực in', 10, 'Mẫu mã: Mới 100%, Nguyên đai, Nguyên kiện Hãng sản xuất : china Màu sắc: Đen (Black) Loại mực : Laser Màu mực : Đen (Black) Trọng lượng: 0.8 kg Hộp mực dùng cho máy in: Canon LBP 2900'),
(3, 'Hộp mực 12A hộp mực máy in cho Canon 2900 HPQ2612A', 115000, 'https://salt.tikicdn.com/cache/200x200/ts/product/0c/b9/c1/68a71c0dd3c0009bb61036a59713a639.jpg.webp', 'Mực in', 10, 'Hộp mực có thể sử dụng cho nhiều dòng máy in khác nhau: Canon 2900, HPQ2612A 1020 M1005 M1010 1018. Chất lượng trang in đảm bảo tiêu chí: Chữ in ra đen, đẹp, sắc nét.'),
(4, 'Hộp mực máy in 12A cho máy in Canon', 200000, 'https://salt.tikicdn.com/cache/200x200/ts/product/b5/57/20/a87b03840c02c1ae490e8fe895b41e95.jpg.webp', 'Mực in', 10, 'Hộp mực 12a giá rẻ dùng cho máy in HP 1020 ,3050, 3055, 1319,1010 ,1018 Canon 2900 Hộp mực được sản xuất  bởi công nghệ cao đảm bảo giúp bản in ra rõ nét, đều, đậm, đẹp Số trang in lên tới 2000 Trang A4 với bản in có độ phủ mực 5%'),
(5, 'Hộp mực in canon Lbp 6030/ 6030w\r\n\r\n', 120000, 'https://salt.tikicdn.com/cache/200x200/ts/product/28/4e/27/a3b114d2c70522eb810ad1cc92df2208.jpg.webp', 'Mực in', 10, 'In ấn dễ dàng và không gặp vấn đề về bản in sọc, mờ hay bị đốm mực. In hình ảnh với màu sắc trung thực và các tài liệu cho phép lưu trữ lâu dài.Tối ưu hoá khả năng hoạt động của thiết bị in ấn. '),
(6, 'Hộp mực in laser HP 107A (KHÔNG CHIP)', 268000, 'https://salt.tikicdn.com/cache/200x200/ts/product/0e/2e/bd/5bb725f3d3ff1c4e748f8648e2de9398.png.webp', 'Mực in', 10, 'Mực hộp máy in laser HP 107Acó chất lượng màu in rõ nét, ấn tượng rất lý tưởng khi in tài liệu quảng cáo, báo cáo, hồ sơ mẫu.. phù hợp với các doanh nghiệp, cá nhân, gia đình.'),
(7, 'Máy In Lazer Trắng Đen Đa Năng HP', 4700000, 'https://salt.tikicdn.com/cache/200x200/ts/product/e4/2b/c9/c3f6bfb070571283bf95da12b8ad4097.jpg.webp', 'Máy in', 10, 'Chức năng: In, sao chép, quét Công nghệ in: Laser Dùng mực HP 103A ; HP 103AD; HP 104A Kết nối: USB 2.0;Wifi 802 Bộ nhớ: 64M Các dòng mực in sử dụng: Mực in HP 103A, 103AD; 108A; 108AD; 109A; 104A'),
(8, 'Máy In Lazer Trắng Đen Đơn Năng Canon', 3630000, 'https://salt.tikicdn.com/cache/200x200/ts/product/16/a9/c9/ec0f9f08636284b3a703caa4c566b2f0.jpg.webp', 'Máy in', 10, 'Loại máy: Máy in lazer Tốc độ in: 12 trang/phút (A4) Bộ nhớ: Dùng bộ nhớ PC (bộ nhớ chuẩn 2 MB trên board) Khay giấy: 150 tờ Kết nối: USB 2.0 tốc độ cao Mực in: Cartridge 303'),
(9, 'Máy In Lazer Trắng Đen Đa Chức Năng HP 135A', 2990000, 'https://salt.tikicdn.com/cache/200x200/ts/product/9d/7c/5b/2250715a85c5215b46c3bc2ac624fabd.jpg.webp', 'Máy in', 10, 'Từ in ấn cho đến scan, photocopy, HP Laser MFP 135A đều có thể thực hiện với mức giá phải chăng, không hề thua kém thiết in ấn cao cấp nào.'),
(10, 'Máy In HP Neverstop Laser 1000A', 2690000, 'https://salt.tikicdn.com/cache/200x200/ts/product/dd/e0/c7/395c5232b3dea18097e3ec237a9991d7.png.webp', 'Máy in', 10, '- Tốc độ : 20 trang / phút khổ A4.\r\n- Khổ giấy tối đa : A4.\r\n- Độ phân giải : 600 x 600 dpi.\r\n- Bộ nhớ chuẩn : 32 MB.\r\n- Bộ xử lý CPU : 500 MHz.'),
(11, 'Máy In Laser Đa Năng Brother MFC-L2701D', 6189000, 'https://salt.tikicdn.com/cache/200x200/media/catalog/product/b/i/big_132350_may-in-laser-da-chuc-nang-brother-mfc-l2701d.jpg.webp', 'Máy in', 10, 'Máy in laser đa năng, có khả năng Scan, Copy, Fax In hai mặt tự động Kết nối mạng qua cổng Ethernet, Wifi Tốc độ in 30 trang/phút Độ phân giải: 2400 × 600 dpi'),
(12, 'Máy In HP Laser Đa Năng Jet Pro M404dn', 6500000, 'https://salt.tikicdn.com/cache/200x200/ts/product/14/05/85/684f1678db9e137fd8635f6dcd02fbf1.jpg.webp', 'Máy in', 10, 'Tính năng có sẵn: In 2 mặt tự động (duplex), in mạng Khổ giấy tối thiểu: A5 Khổ giấy tối đa: A4 Tốc độ: 38 trang/phút Bộ nhớ RAM: 256 MB Độ phân giải: 1.200 x 1.200 dpi.'),
(13, 'Máy Scan Fujitsu SV600', 19190000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/02/sv600-500x500.jpg', 'Máy văn phòng', 10, 'Máy Scanner Fujitsu SV600 (Scan Book) Contactless Document Scanner, công nghệ VI technology không quét trực tiếp - contactless scanning'),
(14, 'Máy Scan Fujitsu 30F', 18340000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/02/fujitsu-sp30-1-500x500.jpg', 'Máy văn phòng', 10, 'Độ phân giải :600dpi; Kiểu quét: ADF (Automatic Document Feeder) và bàn quét\r\nTốc độ quét: 30 tờ/phút = 60 ảnh/phút\r\nKhổ giấy: Lớn nhất A4, A3 (with carier sheet)'),
(15, 'Máy Hủy Tài Liệu Bonsaii', 4950000, 'https://shopmayvanphong.vn/wp-content/uploads/2020/12/3s16-1-500x500.jpg', 'Máy văn phòng', 10, '- Kiểu hủy : Sợi\r\n- Số lượng hủy : 18 tờ A4 (80gm)\r\n- Kích thước hủy : 4x35 mm'),
(16, 'Máy Hủy Tài Liệu LBA', 4150000, 'https://shopmayvanphong.vn/wp-content/uploads/2020/12/p13cd-500x500.jpg', 'Máy văn phòng', 10, 'Vụn thành mảnh 2x8mm\r\nCông suất hủy (75g A4): 8\r\nTốc độ hủy 3.0m/phút\r\nMiệng cắt rộng: 220mm\r\nThùng giấy 18L\r\n'),
(17, 'Máy In Phun Màu HP', 2690000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/09/hp-115-2-500x500.jpg', 'Máy văn phòng', 10, 'Chức năng: Copy, In 1 mặt, Scan (Màu)\r\nHộp mực kèm theo in được: Khoảng 5000 trang A4 (độ phủ 5%)\r\nCông suất in khuyến nghị: 100-1000 trang/tháng'),
(18, 'Máy In Màu Đa Chức Năng', 9100000, 'https://shopmayvanphong.vn/wp-content/uploads/2021/08/canon-641-1-500x500.jpg', 'Máy văn phòng', 10, 'In trắng đen: 18 trang/phút\r\nIn màu: 18 trang/phút\r\nĐộ phân giải: 600 x 600 dpi, 1.200 × 1.200 dpi (nâng cao)'),
(19, 'Laptop HP Envy 13 ba1030TU', 30690000, 'https://cdn.tgdd.vn/Products/Images/44/230240/hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu suất cao cho công việc\r\nThiết kế mỏng nhẹ, sang trọng'),
(20, 'Laptop Lenovo ThinkBook 15 G2', 20490000, 'https://cdn.tgdd.vn/Products/Images/44/235448/lenovo-thinkbook-15-g2-itl-i5-20ve006yvn-11-600x600.jpg', 'Thiết bị công nghệ', 10, 'Cấu hình mạnh mẽ\r\nHình ảnh sắc nét'),
(21, 'Laptop MSI Summit E16 Flip', 46990000, 'https://cdn.tgdd.vn/Products/Images/44/246950/msi-summit-e16-flip-i7-082vn-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu năng vượt trội\r\nTản nhiệt tối ưu, hoạt động êm ái'),
(22, 'Laptop HP EliteBook X360 830 G8', 41590000, 'https://cdn.tgdd.vn/Products/Images/44/242411/hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg', 'Thiết bị công nghệ', 10, 'Hiệu năng vượt trội\r\nÂm thanh sống động'),
(23, 'Laptop Lenovo Ideapad Gaming 3 15IMH05', 26990000, 'https://cdn.tgdd.vn/Products/Images/44/237312/lenovo-ideapad-gaming-3-15imh05-i7-81y4013uvn-600x600.jpg', 'Thiết bị công nghệ', 10, 'Cấu hình mạnh mẽ\r\nĐồ họa mượt mà'),
(24, 'Laptop Acer Aspire 7 Gaming A715 42G R4ST R5', 19990000, 'https://cdn.tgdd.vn/Products/Images/44/235405/acer-aspire-7-a715-42g-r4st-r5-nhqaysv004-16-600x600.jpg', 'Thiết bị công nghệ', 10, 'Đồ họa sắc nét, vượt trội\r\nÂm thanh to rõ, sống động'),
(25, 'Khay sắp xếp bàn làm việc', 480000, 'https://i.ibb.co/kBs7cZY/2503201950305-dronjons-desk-organiser-0669935-PE715475-S4.png', 'Phụ kiện văn phòng', 10, 'Giúp bạn sắp xếp mọi thứ từ bút, văn phòng phẩm đến USB và bộ sạc.\r\nCó thể sử dụng ở mọi nơi trong ngôi nhà của bạn, ngay cả những nơi ẩm ướt như phòng tắm.'),
(26, 'Set 2 giá đựng tài liệu', 340000, 'https://i.ibb.co/pRzRmHY/2559201945931-dronjons-letter-tray-0669942-PE715480-S4.jpg', 'Phụ kiện văn phòng', 10, 'Khay thư có 2 tầng, nơi bạn có thể tập hợp các hóa đơn và giấy tờ rời.'),
(27, 'Set 2 tập để tài liệu', 290000, 'https://i.ibb.co/HHVMMmS/dronjons-magazine-file-0669945-pe715483-s4.jpg', 'Phụ kiện văn phòng', 10, 'Dễ sử dụng'),
(28, 'Khay sắp xếp bàn làm việc', 450000, 'https://i.ibb.co/7gjPNnp/rissla-desk-organiser-black-0408850-pe569375-s4-500x500.png', 'Phụ kiện văn phòng', 10, 'Giúp bạn giữ cho bàn làm việc của mình thông thoáng khỏi những thứ nhỏ nhặt như bút, thước, điện thoại di động và USB.\r\nBề mặt có thể chịu nắng, chống trầy xước và cọ xát mà không bị mất màu.'),
(29, 'Giá 3 tầng đựng giấy tờ', 320000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20181110/dokument_letter_tray__250k_500x500.jpg', 'Phụ kiện văn phòng', 10, 'Bạn có thể dễ dàng lấy giấy tờ của mình'),
(30, 'Set 4 tập tài liệu FLUNS', 95000, 'https://storage.googleapis.com/cdn.nhanh.vn/store/25583/ps/20181109/fluns_magazine_file_white__0398648_pe563794_s4_500x500.png', 'Phụ kiện văn phòng', 10, 'Dễ sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_in_member_cart`
--

CREATE TABLE `products_in_member_cart` (
  `username` varchar(20) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products_in_member_cart`
--

INSERT INTO `products_in_member_cart` (`username`, `productId`, `quantity`) VALUES
('username', 1, 1),
('username', 2, 1),
('username', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` char(100) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `resources`
--

INSERT INTO `resources` (`id`, `type`, `name`, `content`) VALUES
(1, 'Văn bản', 'Lợi ích khách hàng', 'Mona Media luôn luôn mong muốn đáp ứng được nhu cầu mua sắm sản phẩm giá tốt với chất lượng đảm bảo<br> và dịch vụ hậu mãi chu đáo, cũng như mang lại trải nghiệm mua hàng tuyệt vời đến với khách hàng.'),
(2, 'Văn bản', 'Tiết kiệm chi phí', 'Mực in Vmax là giải pháp in ấn tiết kiệm, giúp công ty cắt giảm chi phí in ấn đến mức tối đa 30-60%, tiết kiệm trên mỗi bản in. Máy in, thiết bị văn phòng hay văn phòng phẩm tại Vmax luôn đảm bảo ở mức giá tốt nhất cho khách hàng'),
(3, 'Văn bản', 'Chăm sóc khách hàng hoàn hảo', 'Mona Media luôn mong muốn mang đến cho Khách hàng những quyền lợi đặc biệt khi đồng hành cùng Vmax qua các chương trình khuyến mãi, tri ân, quà tặng vào các dịp đặc biệt cực kì hấp dẫn'),
(4, 'Văn bản', 'Dịch vụ bảo hành chu đáo', 'Mona Media là đại diện Bảo hành, Sửa chữa và Cung cấp phụ tùng, linh kiện thay thế cho nhà sản xuất với đội ngũ kỹ thuật viên có kiến thức và trình độ cao, năng động nhiệt tình.'),
(5, 'Văn bản', 'Chất lượng quốc tế', 'Đặc biệt, mực in Vmax được sản xuất theo công nghệ Mỹ và nguyên vật liệu từ Nhật Bản như drum Fuji, mực Sakata; kết hợp với tiêu chuẩn của Hiệp hội mực in quốc tế I-ITC và quản lý chất lượng ISO'),
(6, 'Văn bản', 'Bảo trì, sửa chữa miễn phí', 'Cam kết bảo hành đến giọt mực cuối cùng, nhanh chóng xử lý sự cố để không làm gián đoạn công việc. Nếu xảy ra do lỗi mực in Vmax gây ra, Vmax sẽ chịu trách nhiệm sửa chữa hoặc tặng ngay máy in mới.'),
(7, 'Hình ảnh', 'Logo', 'http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/Mona-designstyle-colors-m.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `postId` (`postId`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products_in_member_cart`
--
ALTER TABLE `products_in_member_cart`
  ADD PRIMARY KEY (`username`,`productId`);

--
-- Chỉ mục cho bảng `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `members` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
