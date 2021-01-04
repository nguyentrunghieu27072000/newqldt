-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 03:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaitin`
--

CREATE TABLE IF NOT EXISTS `tbl_loaitin` (
`ma_loaitin` int(11) NOT NULL,
  `ten_loaitin` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loaitin`
--

INSERT INTO `tbl_loaitin` (`ma_loaitin`, `ten_loaitin`, `stt`) VALUES
(0, 'Trang chủ', 0),
(1, 'Thể thao', 1),
(2, 'Thời sự', 2),
(3, 'Giải trí', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin`
--

CREATE TABLE IF NOT EXISTS `tbl_tin` (
`ma_tin` int(11) NOT NULL,
  `tieude` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `ma_loaitin` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tin`
--

INSERT INTO `tbl_tin` (`ma_tin`, `tieude`, `noidung`, `hinhanh`, `ma_loaitin`) VALUES
(1, 'Người thừa kế Samsung thăm Việt Nam', 'Phó chủ tịch Samsung Lee Jae-yong đã khởi hành đến Việt Nam để trao đổi mở rộng kinh doanh, trong đó có dự án xây dựng một nhà máy pin.\r\n<br>\r\nTheo hãng thông tấn Hàn Quốc Yonhap, Lee Jae-yong, còn được gọi là "Thái tử Samsung", sẽ có chuyến thăm ba ngày tại Việt Nam. Ông có thể được miễn cách ly Covid-19 sau khi Việt Nam thông qua chương trình nhập cảnh nhanh cho các nhà ngoại giao và doanh nhân Hàn Quốc.\r\n<br>\r\nChuyến thăm của ông Lee Jae-yong dự kiến tập trung vào kế hoạch đầu tư mới của Samsung tại Việt Nam, trong đó có việc xây dựng nhà máy pin cho xe điện. Ông cũng sẽ đi thăm trung tâm nghiên cứu và phát triển của Samsung đang được xây dựng tại Hà Nội và các nhà máy của công ty tại Việt Nam.\r\n<br>\r\nViệt Nam hiện là cơ sở sản xuất điện thoại thông minh lớn nhất của Samsung với các nhà máy tại Bắc Ninh và Thái Nguyên. Tập đoàn còn có nhà máy sản xuất tivi và thiết bị gia dụng tại TP HCM.', 'tt-1.jpg', 1),
(2, 'Miền Trung tiếp tục mưa lớn', 'Hôm nay Hà Tĩnh, Quảng Bỉnh mưa rất to, lũ các sông lên nhanh; Quảng Trị, Thừa Thiên Huế lũ đã qua đỉnh và rút chậm.\r\n<br>\r\nTrung tâm dự báo khí tượng thủy văn quốc gia ghi nhận từ 7h đến 13h, Hà Tĩnh, Quảng Bình mưa 100-200 mm, có nơi trên 200 mm. Một số điểm mưa đặc biệt lớn, như Bàn Nước 260 mm, hồ chứa nước Kim Sơn (Hà Tĩnh) 400 mm.\r\n<br>\r\nCác địa phương Thừa Thiên Huế, Đà Nẵng, Quảng Nam vẫn mưa to, nhưng không tăng đột biến như những ngày trước. TP Đà Nẵng và Quảng Nam mưa phổ biến 70-140 mm; Thanh Hóa, Nghệ An 10-45 mm.\r\n<br>\r\nDo mưa lớn, lũ các sông ở Hà Tĩnh lên nhanh, ở Quảng Bình đã đạt đỉnh, ở Thừa Thiên Huế rút chậm. Lúc 13h chiều, mực nước sông Ngàn Sâu tại Hòa Duyệt (Hà Tĩnh) là 9,35 m, trên báo động hai 0,35 m; sông Gianh tại Mai Hóa (Quảng Bình) là 8,4 m, trên báo động ba 1,9 m; trên sông Kiến Giang tại Lệ Thủy (Quảng Bình) là 4,2 m, trên báo động ba 2 m.\r\n<br>\r\nTheo Đài khí tượng khu vực Trung Trung Bộ, mực nước trên sông Kiến Giang tại Lệ Thủy đã vượt qua mốc lịch sử năm 1979 khoảng 0,97 m.', 'ts-3.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_loaitin`
--
ALTER TABLE `tbl_loaitin`
 ADD PRIMARY KEY (`ma_loaitin`);

--
-- Indexes for table `tbl_tin`
--
ALTER TABLE `tbl_tin`
 ADD PRIMARY KEY (`ma_tin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_loaitin`
--
ALTER TABLE `tbl_loaitin`
MODIFY `ma_loaitin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_tin`
--
ALTER TABLE `tbl_tin`
MODIFY `ma_tin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
