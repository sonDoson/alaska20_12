-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 05:00 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alaskaschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` longtext COLLATE utf8mb4_unicode_ci,
  `instagram` longtext COLLATE utf8mb4_unicode_ci,
  `youtube` longtext COLLATE utf8mb4_unicode_ci,
  `map` longtext COLLATE utf8mb4_unicode_ci,
  `value_en` longtext COLLATE utf8mb4_unicode_ci,
  `value_vn` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name_en`, `name_vn`, `facebook`, `instagram`, `youtube`, `map`, `value_en`, `value_vn`) VALUES
(1, 'Contact', 'Liên Hệ', 'https://www.facebook.com/alaska.edu.vn', '', '', 'src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7450.5667053546!2d105.90719433898374!3d20.98127588863491!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1541754356013\"', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_02_044012_create_users_table', 1),
(2, '2018_07_19_085752_create_user_menu_lv0_table', 2),
(3, '2018_07_19_085816_create_user_menu_lv1_table', 2),
(4, '2018_11_02_130459_create_posts_category_table', 3),
(6, '2018_11_03_070137_create_posts_posts_images_table', 5),
(10, '2018_11_04_074732_create_total_posts_table', 6),
(11, '2018_11_03_040333_create_posts_posts_table', 7),
(12, '2018_11_05_084657_create_posts_posts_stress_table', 8),
(13, '2018_11_07_100608_create_video_link_table', 9),
(16, '2018_11_08_035030_create_contact_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts_category`
--

CREATE TABLE `posts_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_category`
--

INSERT INTO `posts_category` (`id`, `name_en`, `name_vn`, `created_at`, `updated_at`) VALUES
(1, 'Present', 'Giới Thiệu Chung', '2018-11-06 04:54:27', NULL),
(2, 'Programs', 'Chương Trình Học', '2018-11-06 04:55:07', NULL),
(3, 'Enrollment Information', 'Thông Tin Tuyển Sinh', '2018-11-06 04:55:48', NULL),
(4, 'News & Events', 'Tin Tức & Sự Kiện', '2018-11-06 04:56:20', '2018-11-07 09:11:13'),
(5, 'Recruitment', 'Tuyển Dụng', '2018-11-06 04:56:38', NULL),
(6, 'Contact', 'Liên Hệ', '2018-11-06 04:56:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_posts`
--

CREATE TABLE `posts_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_vn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_posts`
--

INSERT INTO `posts_posts` (`id`, `id_category`, `name_en`, `name_vn`, `value_en`, `value_vn`, `created_at`, `updated_at`) VALUES
(17, 1, 'Cam kết', 'Cam kết', '<p style=\"text-align:justify\">&nbsp;Giá trị cốt lõi chúng tối mang đến là nỗ lực không ngừng nghỉ vì một tương lai giáo dục Việt xứng tầm quốc tế, đào tạo những cá nhân trở thành công dân toàn cầu trong tương lai.<br />\r\n&nbsp;<br />\r\nChương trình tiểu học của Alaska đảm bảo quy chuẩn theo khung chương trình của Bộ Giáo dục và mang lại hơi hướng mới mẻ lôi cuốn bởi cách tiếp cận và phương pháp hàng đầu về giáo dục trên toàn thế giới giúp các em học sinh làm chủ 2 ngôn ngữ để tiếp cận nguồn tri thức nhân loại một cách dễ dàng và tự tin nhất.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br />\r\nHướng đến mục tiêu tương lai, chương trình học của Alaska đề cao khả năng tư duy biện luận, phát triển kiến thức chuyên sâu đồng thời khơi dậy hứng thú sáng tạo và tự học một cách tự nhiên, hào hứng, khám phá tố chất tiềm năng trong con người của các em học sinh. Từ đó tạo động lực và nền tảng bứt phá tương lai ở những môi trường khác nhau, ở trong và ngoài nước.</p>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\">&nbsp;Giá trị cốt lõi chúng tối mang đến là nỗ lực không ngừng nghỉ vì một tương lai giáo dục Việt xứng tầm quốc tế, đào tạo những cá nhân trở thành công dân toàn cầu trong tương lai.<br />\r\n&nbsp;<br />\r\nChương trình tiểu học của Alaska đảm bảo quy chuẩn theo khung chương trình của Bộ Giáo dục và mang lại hơi hướng mới mẻ lôi cuốn bởi cách tiếp cận và phương pháp hàng đầu về giáo dục trên toàn thế giới giúp các em học sinh làm chủ 2 ngôn ngữ để tiếp cận nguồn tri thức nhân loại một cách dễ dàng và tự tin nhất.<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br />\r\nHướng đến mục tiêu tương lai, chương trình học của Alaska đề cao khả năng tư duy biện luận, phát triển kiến thức chuyên sâu đồng thời khơi dậy hứng thú sáng tạo và tự học một cách tự nhiên, hào hứng, khám phá tố chất tiềm năng trong con người của các em học sinh. Từ đó tạo động lực và nền tảng bứt phá tương lai ở những môi trường khác nhau, ở trong và ngoài nước.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:14:41', NULL),
(18, 1, 'Cơ sở vật chất', 'Cơ sở vật chất', '<p style=\"text-align:justify\">Quan niệm mang đến sự hài lòng về chất lượng giáo dục toàn diện, Tiểu học Alaska ưu tiên xây dựng cơ sở vật chất hạ tầng đạt chuẩn tiên tiến, tạo điều kiện tốt nhất cho giáo viên và học sinh trong quá trình giảng dạy và học tập.<br />\r\nNằm trong khuôn viên 5000m2, cơ sở vật chất nhà trường gồm có:<br />\r\n* Phòng học hiện đại rộng rãi trang bị đầy đủ hệ thống âm thanh, ánh sáng và máy chiếu, bảng đa năng, điều hòa&hellip;<br />\r\n* Khu nhà ăn sạch sẽ thoáng mát đạt tiêu chuẩn bếp ăn lý tưởng.<br />\r\n* Sân đa năng tích hợp sân chơi, sân bóng đá, bóng rổ và bể bơi rộng rãi cùng với khu vui chơi ngoài trời.<br />\r\n* Đặc biệt có đầy đủ các phòng chức năng phục vụ cho việc học tập và các hoạt động ngoại khóa của học sinh: thư viện, phòng yoga kids, phòng nhạc, phòng múa, vườn sinh vật, phòng thí nghiệm khoa học.<br />\r\nNhà trường cung cấp xe tuyến chất lượng cao đưa đón học sinh với sự quản lý của quản sinh đi kèm.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\">Quan niệm mang đến sự hài lòng về chất lượng giáo dục toàn diện, Tiểu học Alaska ưu tiên xây dựng cơ sở vật chất hạ tầng đạt chuẩn tiên tiến, tạo điều kiện tốt nhất cho giáo viên và học sinh trong quá trình giảng dạy và học tập.<br />\r\nNằm trong khuôn viên 5000m2, cơ sở vật chất nhà trường gồm có:<br />\r\n* Phòng học hiện đại rộng rãi trang bị đầy đủ hệ thống âm thanh, ánh sáng và máy chiếu, bảng đa năng, điều hòa&hellip;<br />\r\n* Khu nhà ăn sạch sẽ thoáng mát đạt tiêu chuẩn bếp ăn lý tưởng.<br />\r\n* Sân đa năng tích hợp sân chơi, sân bóng đá, bóng rổ và bể bơi rộng rãi cùng với khu vui chơi ngoài trời.<br />\r\n* Đặc biệt có đầy đủ các phòng chức năng phục vụ cho việc học tập và các hoạt động ngoại khóa của học sinh: thư viện, phòng yoga kids, phòng nhạc, phòng múa, vườn sinh vật, phòng thí nghiệm khoa học.<br />\r\nNhà trường cung cấp xe tuyến chất lượng cao đưa đón học sinh với sự quản lý của quản sinh đi kèm.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:16:26', NULL),
(19, 2, 'Chương trình giảng dạy', 'Chương trình giảng dạy', '<p style=\"text-align:justify\">Trường Tiểu học Alaska nuôi dưỡng nên:<br />\r\n* Học sinh học tốt:<br />\r\n- Làm chủ 2 ngôn ngữ để tiếp cận nguồn tri thức nhân loại<br />\r\n-&nbsp; Trở thành công dân toàn cầu<br />\r\n*&nbsp; Học sinh có kỹ năng độc lập tư duy:<br />\r\n-&nbsp; Độc lập sáng tạo<br />\r\n-&nbsp; Đức tính tự học, tự nghiên cứu, tìm tòi<br />\r\n*&nbsp; Học sinh tự tin và năng động:<br />\r\n-&nbsp; Nuôi dưỡng cảm xúc<br />\r\n-&nbsp; Nhìn nhận, đánh giá đa chiều<br />\r\n-&nbsp; Định hình cá tính và hành động tích cực</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\">Trường Tiểu học Alaska nuôi dưỡng nên:<br />\r\n* Học sinh học tốt:<br />\r\n- Làm chủ 2 ngôn ngữ để tiếp cận nguồn tri thức nhân loại<br />\r\n-&nbsp; Trở thành công dân toàn cầu<br />\r\n*&nbsp; Học sinh có kỹ năng độc lập tư duy:<br />\r\n-&nbsp; Độc lập sáng tạo<br />\r\n-&nbsp; Đức tính tự học, tự nghiên cứu, tìm tòi<br />\r\n*&nbsp; Học sinh tự tin và năng động:<br />\r\n-&nbsp; Nuôi dưỡng cảm xúc<br />\r\n-&nbsp; Nhìn nhận, đánh giá đa chiều<br />\r\n-&nbsp; Định hình cá tính và hành động tích cực</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:18:33', NULL),
(20, 2, 'Chương trình Tiếng Anh', 'Chương trình Tiếng Anh', '<p style=\"text-align:justify\">Tại Alaska, nửa ngày các em học sinh sẽ học các môn học chính: Ngôn ngữ Anh (tương đương như môn Tiếng Việt của Việt Nam); Toán; Khoa học; Xã hội bằng Tiếng Anh. Tương đương 25 tiết học 1 tuần.<br />\r\nChương trình học sử dụng Giáo trình Wonders của NXB McGraw Hill hiện đang được áp dụng giảng dạy tại nhiều Bang lớn của nước Mỹ như Florida, California. Bộ sách là tập hợp những bài học, bài đọc hiểu dưới nhiều hình thái văn học (truyện, tiểu thuyết, thơ ca, xã luận&hellip;) về rất nhiều chủ đề, từ văn học, khoa học, xã hội đến các vấn đề về cuộc sống xung quanh giúp khơi dậy niềm hứng thú với ngôn ngữ cho các em nhỏ.<br />\r\nChúng tôi cũng sử dụng nhiều ý tưởng và tài liệu giảng dạy tích hợp nhằm truyền cảm hứng, khơi dậy hứng thú và sự tập trung cho các bạn nhỏ. Thông qua các bài đọc và các câu hỏi tư duy theo từng cấp độ, các em học sinh&nbsp; được tăng khả năng tự suy nghĩ biện luận, nhìn vấn đề đa dạng, nhiều chiều tạo thói quen tư duy phản biện cho các em học sinh.<br />\r\nGiáo trình được thiết kế đồng bộ, lồng ghép khéo léo và kết hợp đầy đủ, khoa học từ sách học sinh, sách&nbsp;giáo viên, sách bài tập, sách đọc bổ trợ kiến thức cho học sinh, bộ đề kiểm tra theo tuần/bài/cuối kỳ/cuối năm để hướng học sinh theo học sẽ đạt được chuẩn Common Core của Mỹ (được hiểu như theo chuẩn sách giáo khoa của Bộ Giáo Dục VN). Giáo trình được dùng xuyên suốt trong 5 năm.<br />\r\nMôn Toán và Khoa học sử dụng sách của NXB Pearson &ndash; Mỹ. Đều là những bộ sách nổi tiếng, được áp dụng lâu năm tại Mỹ. Hai môn học này cũng được giáo viên tập trung để kiến tạo tư duy logic, kiến thức nền về thế giới cho các em học sinh .<br />\r\nChương trình Tiếng Anh của Alaska đảm bảo việc sử dụng Tiếng Anh thành thạo như ngôn ngữ thứ 2, là công cụ để học sinh tiếp thu kiến thức hàn lâm và tiếp cận tri thức nhân loại.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\">Tại Alaska, nửa ngày các em học sinh sẽ học các môn học chính: Ngôn ngữ Anh (tương đương như môn Tiếng Việt của Việt Nam); Toán; Khoa học; Xã hội bằng Tiếng Anh. Tương đương 25 tiết học 1 tuần.<br />\r\nChương trình học sử dụng Giáo trình Wonders của NXB McGraw Hill hiện đang được áp dụng giảng dạy tại nhiều Bang lớn của nước Mỹ như Florida, California. Bộ sách là tập hợp những bài học, bài đọc hiểu dưới nhiều hình thái văn học (truyện, tiểu thuyết, thơ ca, xã luận&hellip;) về rất nhiều chủ đề, từ văn học, khoa học, xã hội đến các vấn đề về cuộc sống xung quanh giúp khơi dậy niềm hứng thú với ngôn ngữ cho các em nhỏ.<br />\r\nChúng tôi cũng sử dụng nhiều ý tưởng và tài liệu giảng dạy tích hợp nhằm truyền cảm hứng, khơi dậy hứng thú và sự tập trung cho các bạn nhỏ. Thông qua các bài đọc và các câu hỏi tư duy theo từng cấp độ, các em học sinh&nbsp; được tăng khả năng tự suy nghĩ biện luận, nhìn vấn đề đa dạng, nhiều chiều tạo thói quen tư duy phản biện cho các em học sinh.<br />\r\nGiáo trình được thiết kế đồng bộ, lồng ghép khéo léo và kết hợp đầy đủ, khoa học từ sách học sinh, sách&nbsp;giáo viên, sách bài tập, sách đọc bổ trợ kiến thức cho học sinh, bộ đề kiểm tra theo tuần/bài/cuối kỳ/cuối năm để hướng học sinh theo học sẽ đạt được chuẩn Common Core của Mỹ (được hiểu như theo chuẩn sách giáo khoa của Bộ Giáo Dục VN). Giáo trình được dùng xuyên suốt trong 5 năm.<br />\r\nMôn Toán và Khoa học sử dụng sách của NXB Pearson &ndash; Mỹ. Đều là những bộ sách nổi tiếng, được áp dụng lâu năm tại Mỹ. Hai môn học này cũng được giáo viên tập trung để kiến tạo tư duy logic, kiến thức nền về thế giới cho các em học sinh .<br />\r\nChương trình Tiếng Anh của Alaska đảm bảo việc sử dụng Tiếng Anh thành thạo như ngôn ngữ thứ 2, là công cụ để học sinh tiếp thu kiến thức hàn lâm và tiếp cận tri thức nhân loại.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:19:27', NULL),
(21, 2, 'Chương trình Tiếng Việt', 'Chương trình Tiếng Việt', '<p style=\"text-align:justify\">Những năm đầu cấp tiểu học là thời điểm quan trọng để làm quen và thành thạo tiếng mẹ đẻ, mặc dù theo học chương trình song ngữ nhưng các em học sinh&nbsp; vẫn phải nằm lòng tiếng Việt để tạo tiền đề vươn xa. Chương trình đào tạo chuẩn kiến thức Bộ Giáo dục và Đào tạo Việt Nam.<br />\r\nVới sĩ số lớp 24 học sinh/lớp kết hợp với phương pháp học tích hợp, tối ưu hóa chương trình của Bộ GD&amp;ĐT; chương trình Tiếng Việt tại Alaska giúp học sinh nắm vững kiến thức, kỹ năng chuẩn theo trọng tâm của từng cấp lớp đồng thời vẫn khơi gợi một cách tự nhiên tính sáng tạo và nâng cao khả năng tư duy của từng cá nhân.</p>\r\n\r\n<p style=\"text-align:justify\">- Tiếng Việt: Chương trình Tiếng Việt dựa trên sách giáo khoa tiểu học của Bộ Giáo dục nhưng được Tiến sỹ - Giảng viên văn học Diệu Lan Phương (Người sáng lập CLB Phát triển ngôn ngữ và EQ) biên soạn riêng với mục tiêu đảm bảo được kiến thức của Bộ Giáo dục theo từng cấp lớp nhưng cách triển khai bài học theo phương pháp riêng, thổi hơi thở Việt vào từng bài giảng một cách nhẹ nhàng giúp các em học sinh&nbsp; nâng cao năng lực cảm thụ, sáng tạo trong cách hành văn cũng như cảm xúc tư duy của mình.</p>\r\n\r\n<p style=\"text-align:justify\">- Toán: Chương trình toán học tư duy của thầy Lê Anh Vinh &ndash; Tiến sỹ Toán học ĐH Harvard Mỹ. Chương trình tổng hợp được các kiến thức nền của toán tiểu học theo khung chuẩn của Bộ Giáo dục nhưng bổ sung thêm phần toán tư duy mở rộng giúp đánh thức các tiềm năng toán học từ sớm, làm &lsquo;đòn bẩy&rsquo; đưa các đi xa hơn khi thực sự yêu thích và làm chủ môn Toán. Chương trình đang được áp dụng chính thức thay thế chương trình sách giáo khoa tại trường Gateway, Newton và Đoàn Thị Điểm.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\">Những năm đầu cấp tiểu học là thời điểm quan trọng để làm quen và thành thạo tiếng mẹ đẻ, mặc dù theo học chương trình song ngữ nhưng các em học sinh&nbsp; vẫn phải nằm lòng tiếng Việt để tạo tiền đề vươn xa. Chương trình đào tạo chuẩn kiến thức Bộ Giáo dục và Đào tạo Việt Nam.<br />\r\nVới sĩ số lớp 24 học sinh/lớp kết hợp với phương pháp học tích hợp, tối ưu hóa chương trình của Bộ GD&amp;ĐT; chương trình Tiếng Việt tại Alaska giúp học sinh nắm vững kiến thức, kỹ năng chuẩn theo trọng tâm của từng cấp lớp đồng thời vẫn khơi gợi một cách tự nhiên tính sáng tạo và nâng cao khả năng tư duy của từng cá nhân.</p>\r\n\r\n<p style=\"text-align:justify\">- Tiếng Việt: Chương trình Tiếng Việt dựa trên sách giáo khoa tiểu học của Bộ Giáo dục nhưng được Tiến sỹ - Giảng viên văn học Diệu Lan Phương (Người sáng lập CLB Phát triển ngôn ngữ và EQ) biên soạn riêng với mục tiêu đảm bảo được kiến thức của Bộ Giáo dục theo từng cấp lớp nhưng cách triển khai bài học theo phương pháp riêng, thổi hơi thở Việt vào từng bài giảng một cách nhẹ nhàng giúp các em học sinh&nbsp; nâng cao năng lực cảm thụ, sáng tạo trong cách hành văn cũng như cảm xúc tư duy của mình.</p>\r\n\r\n<p style=\"text-align:justify\">- Toán: Chương trình toán học tư duy của thầy Lê Anh Vinh &ndash; Tiến sỹ Toán học ĐH Harvard Mỹ. Chương trình tổng hợp được các kiến thức nền của toán tiểu học theo khung chuẩn của Bộ Giáo dục nhưng bổ sung thêm phần toán tư duy mở rộng giúp đánh thức các tiềm năng toán học từ sớm, làm &lsquo;đòn bẩy&rsquo; đưa các đi xa hơn khi thực sự yêu thích và làm chủ môn Toán. Chương trình đang được áp dụng chính thức thay thế chương trình sách giáo khoa tại trường Gateway, Newton và Đoàn Thị Điểm.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:22:10', NULL),
(22, 2, 'Chương trình ngoại khoá', 'Chương trình ngoại khoá', '<p style=\"text-align:justify\">&nbsp;Nhìn về tương lai xa, Alaska tin tưởng rằng thành công của các em học sinh&nbsp; không chỉ nằm ở trình độ học vấn mà còn được quyết định bởi năng lực tư duy và kĩ năng cá nhân. Chính vì vậy, Alaska cũng luôn quan tâm phát triển kĩ năng sống toàn diện cho học sinh qua những chương trình ngoại khóa theo chủ đề và hoạt động cộng đồng giúp các em học sinh&nbsp; vững vàng trong hiện tại và vững tin vào định hướng tương lai. Mỗi tháng nhà trường sẽ tổ chức tham quan dã ngoại 1 lần.</p>\r\n\r\n<p style=\"text-align:justify\">Bên cạnh đó, Alaska không chỉ chú trọng về mặt kiến thức mà còn mong muốn tạo ra được môi trường mà tại đó các em học sinh&nbsp; được rèn luyện về mặt thể chất thông qua chế độ dinh dưỡng hợp lý và hệ thống sân tập đồng bộ (sân bóng đá, cầu lông, bóng rổ, bể bơi&hellip;); khuyến khích các em học sinh&nbsp; làm những điều mới mẻ và sáng tạo đầy cá tính thông qua lớp học hội hoạ đa phong cách hay chương trình cảm thụ âm nhạc, biểu diễn nghệ thuật/ kịch mỗi tuần.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nMỗi ngày học sinh các khối đều có 1 tiết thể thao đan xen giữa giờ học. Học sinh được học 2 môn Hội hoạ và Bóng rổ sau giờ học, 2 môn này không tính phí.<br />\r\nCác CLB ngoại khoá được tổ chức theo nhu cầu của học sinh và phụ huynh.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\">&nbsp;Nhìn về tương lai xa, Alaska tin tưởng rằng thành công của các em học sinh&nbsp; không chỉ nằm ở trình độ học vấn mà còn được quyết định bởi năng lực tư duy và kĩ năng cá nhân. Chính vì vậy, Alaska cũng luôn quan tâm phát triển kĩ năng sống toàn diện cho học sinh qua những chương trình ngoại khóa theo chủ đề và hoạt động cộng đồng giúp các em học sinh&nbsp; vững vàng trong hiện tại và vững tin vào định hướng tương lai. Mỗi tháng nhà trường sẽ tổ chức tham quan dã ngoại 1 lần.</p>\r\n\r\n<p style=\"text-align:justify\">Bên cạnh đó, Alaska không chỉ chú trọng về mặt kiến thức mà còn mong muốn tạo ra được môi trường mà tại đó các em học sinh&nbsp; được rèn luyện về mặt thể chất thông qua chế độ dinh dưỡng hợp lý và hệ thống sân tập đồng bộ (sân bóng đá, cầu lông, bóng rổ, bể bơi&hellip;); khuyến khích các em học sinh&nbsp; làm những điều mới mẻ và sáng tạo đầy cá tính thông qua lớp học hội hoạ đa phong cách hay chương trình cảm thụ âm nhạc, biểu diễn nghệ thuật/ kịch mỗi tuần.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nMỗi ngày học sinh các khối đều có 1 tiết thể thao đan xen giữa giờ học. Học sinh được học 2 môn Hội hoạ và Bóng rổ sau giờ học, 2 môn này không tính phí.<br />\r\nCác CLB ngoại khoá được tổ chức theo nhu cầu của học sinh và phụ huynh.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '2018-11-06 06:25:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_posts_images`
--

CREATE TABLE `posts_posts_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_posts` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_posts_images`
--

INSERT INTO `posts_posts_images` (`id`, `id_posts`, `image_name`, `image_path`) VALUES
(46, 17, '17_0.jpg', '/uploads/images/posts_posts/17_0.jpg'),
(47, 18, '18_0.jpg', '/uploads/images/posts_posts/18_0.jpg'),
(48, 18, '18_1.jpg', '/uploads/images/posts_posts/18_1.jpg'),
(49, 18, '18_2.jpg', '/uploads/images/posts_posts/18_2.jpg'),
(50, 19, '19_0.jpg', '/uploads/images/posts_posts/19_0.jpg'),
(51, 20, '20_0.jpg', '/uploads/images/posts_posts/20_0.jpg'),
(62, 22, '22_0.jpg', '/uploads/images/posts_posts/22_0.jpg'),
(66, 21, '21_0.jpg', '/uploads/images/posts_posts/21_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts_posts_stress`
--

CREATE TABLE `posts_posts_stress` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_posts_stress`
--

INSERT INTO `posts_posts_stress` (`id`, `id_category`, `id_posts`) VALUES
(7, 1, 17),
(8, 1, 18),
(9, 2, 19),
(10, 2, 20),
(11, 2, 22),
(16, 2, 22),
(17, 2, 22),
(18, 2, 22),
(19, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `total_posts`
--

CREATE TABLE `total_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total_posts`
--

INSERT INTO `total_posts` (`id`, `table_name`, `id_category`, `num_posts`, `created_at`, `updated_at`) VALUES
(1, 'posts_category', 1, 2, '0000-00-00 00:00:00', '2018-11-06 06:22:10'),
(2, 'posts_category', 2, 4, '0000-00-00 00:00:00', '2018-11-06 06:25:10'),
(3, 'posts_category', 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'posts_category', 4, 0, '0000-00-00 00:00:00', '2018-11-06 06:27:10'),
(5, 'posts_category', 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'posts_category', 6, 0, '0000-00-00 00:00:00', '2018-11-06 04:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sondo', 'xulazy@gmail.com', '$2y$10$mwu9bZW76pPN9mQNRtOI4unNyArnkiaO/70HIEKIsSYvak8bHleAi', 'nyycZq8YXSjxz6OqgjQ6CYdq1YarJU6bqciUIeg3MitD0Q2lL6GkpqGGuvLh', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu_lv0`
--

CREATE TABLE `user_menu_lv0` (
  `id` int(10) UNSIGNED NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_menu_lv0`
--

INSERT INTO `user_menu_lv0` (`id`, `rank`, `value_en`, `value_vn`, `created_at`, `updated_at`) VALUES
(1, '', 'Posts', 'Bài Viết', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'Contact', 'Liên Hệ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_menu_lv1`
--

CREATE TABLE `user_menu_lv1` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_menu_lv0` int(11) NOT NULL,
  `value_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_vn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_menu_lv1`
--

INSERT INTO `user_menu_lv1` (`id`, `id_user_menu_lv0`, `value_en`, `value_vn`, `created_at`, `updated_at`) VALUES
(1, 1, 'List', 'Danh Sách', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Category', 'Danh Mục', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Posts', 'Bài Viết', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'Edit', 'Chỉnh sửa', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video_link`
--

CREATE TABLE `video_link` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_link`
--

INSERT INTO `video_link` (`id`, `value`) VALUES
(1, 'https://www.facebook.com/alaska.edu.vn/videos/2195424670710679/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_category`
--
ALTER TABLE `posts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_posts`
--
ALTER TABLE `posts_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_posts_images`
--
ALTER TABLE `posts_posts_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_posts_stress`
--
ALTER TABLE `posts_posts_stress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_posts`
--
ALTER TABLE `total_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu_lv0`
--
ALTER TABLE `user_menu_lv0`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu_lv1`
--
ALTER TABLE `user_menu_lv1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_link`
--
ALTER TABLE `video_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts_category`
--
ALTER TABLE `posts_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts_posts`
--
ALTER TABLE `posts_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts_posts_images`
--
ALTER TABLE `posts_posts_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `posts_posts_stress`
--
ALTER TABLE `posts_posts_stress`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `total_posts`
--
ALTER TABLE `total_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_menu_lv0`
--
ALTER TABLE `user_menu_lv0`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_menu_lv1`
--
ALTER TABLE `user_menu_lv1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_link`
--
ALTER TABLE `video_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
