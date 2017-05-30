-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 10:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proless`
--

-- --------------------------------------------------------

--
-- Table structure for table `inc_exp`
--

CREATE TABLE `inc_exp` (
  `id_inc_exp` int(9) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_com` int(9) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `income` int(10) NOT NULL,
  `expense` int(10) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `entry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inc_exp`
--

INSERT INTO `inc_exp` (`id_inc_exp`, `id_user`, `id_com`, `com_name`, `income`, `expense`, `payment_mode`, `subject`, `details`, `date`, `entry_date`) VALUES
(678, 2, 134, 'ＮＴＴ', 0, 5000, '現金 · 預金', '通信費', '  ', '05', '2017/05/22'),
(679, 2, 138, '食品', 0, 10000, '現金 · 預金', '食品', '  ', '05', '2017/05/23'),
(680, 2, 138, '食品', 0, 10000, '現金 · 預金', '食品', '', '05', '2017/05/23'),
(681, 2, 138, '食品', 0, 16000, '現金 · 預金', '食品', '  ', '05', '2017/05/23'),
(682, 2, 188, '売上２', 500, 0, '現金 · 預金', '売上２', '  ', '05', '2017/05/23'),
(683, 2, 187, '売上', 55550, 0, '現金 · 預金', '売上', '  ', '05', '2017/05/24'),
(684, 2, 135, 'アスクル', 0, 12587, '現金 · 預金', '事務用品費', '  ', '05', '2017/05/26'),
(685, 2, 154, '【友永作成】NTT東日本西日本', 0, 500, '現金 · 預金', '.', '  ', '05', '2017/05/26'),
(686, 2, 154, '【友永作成】NTT東日本西日本', 0, 600, '現金 · 預金', '.', '  ', '05', '2017/05/26'),
(687, 2, 154, '【友永作成】NTT東日本西日本', 0, 2300, '現金 · 預金', '.', '  ', '05', '2017/05/26'),
(688, 2, 146, '月謝', 0, 900, '現金 · 預金', '月謝', '  ', '05', '2017/05/26'),
(689, 2, 146, '月謝', 0, 1200, '現金 · 預金', '月謝', '  ', '05', '2017/05/26'),
(690, 2, 146, '月謝', 0, 2400, '現金 · 預金', '月謝', '  ', '05', '2017/05/26'),
(691, 2, 145, 'コンビニ', 0, 310, '現金 · 預金', 'コンビニ', '  ', '05', '2017/05/26'),
(692, 2, 145, 'コンビニ', 0, 900, '現金 · 預金', 'コンビニ', '  ', '05', '2017/05/26'),
(693, 2, 173, 'ソフトバンク', 0, 600, '現金 · 預金', '通信費', '  ', '05', '2017/05/26'),
(694, 2, 181, 'クレジット', 0, 900, '現金 · 預金', 'クレジット', '  ', '05', '2017/05/26'),
(695, 2, 136, 'オオゼキ', 0, 2300, '現金 · 預金', '外注費1', '  ', '05', '2017/05/26'),
(696, 2, 139, '森ビル', 0, 8200, '現金 · 預金', '賃借料', '  ', '05', '2017/05/26'),
(697, 2, 140, '富士ソフト', 2358741, 0, '現金 · 預金', 'その他収入', '  ', '05', '2017/05/26'),
(698, 2, 140, '富士ソフト', 4500, 0, '現金 · 預金', 'その他収入', '  ', '05', '2017/05/26'),
(699, 2, 171, '竹中工務店', 0, 2300, '現金 · 預金', '修繕費', '  ', '05', '2017/05/26'),
(700, 2, 178, '花王', 210, 0, '現金 · 預金', '売上収入', '  ', '05', '2017/05/26'),
(701, 2, 181, 'クレジット', 0, 800, '現金 · 預金', 'クレジット', '  ', '05', '2017/05/26'),
(702, 2, 169, '固定資産税', 0, 23265, '現金 · 預金', '租税公課', '  ', '05', '2017/05/26'),
(703, 2, 158, 'リコーリース', 5575, 0, '現金 · 預金', '売上2', '  ', '05', '2017/05/26'),
(704, 2, 156, 'その他の支払い１', 0, 2500, '現金 · 預金', '雑費', '  ', '05', '2017/05/26'),
(705, 2, 151, '東京都水道局', 0, 950, '現金 · 預金', '水道光熱費', '  ', '05', '2017/05/26'),
(706, 2, 176, '厚生年金保険料', 0, 800, '現金 · 預金', '法定福利費', '  ', '05', '2017/05/26');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `sub_name` varchar(150) NOT NULL,
  `amount` int(11) NOT NULL,
  `sub_cat` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `report_type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `id_user`, `sub_name`, `amount`, `sub_cat`, `sub_type`, `report_type`, `status`) VALUES
(160, 2, '売上収入', 0, 'sales', 'income', 'pl', 1),
(161, 2, '売上', 0, 'sales', 'income', 'pl', 1),
(162, 2, '売上２', 0, 'sales', 'income', 'pl', 1),
(163, 2, '受取利息', 0, 'sales', 'income', 'pl', 1),
(164, 2, 'その他収入', 0, 'sales', 'income', 'pl', 1),
(165, 2, '外注費1', 0, 'sales', 'selling_cost', 'pl', 1),
(166, 2, '給与', 0, 'other_cost', 'expense', 'pl', 1),
(169, 2, '賞与', 0, 'other_cost', 'expense', 'pl', 1),
(170, 2, '法定福利費', 0, 'other_cost', 'expense', 'pl', 1),
(171, 2, '福利厚生費', 0, 'other_cost', 'expense', 'pl', 1),
(172, 2, '事務用品費', 0, 'other_cost', 'expense', 'pl', 1),
(173, 2, '会議費', 0, 'other_cost', 'expense', 'pl', 1),
(174, 2, '通信費', 0, 'other_cost', 'expense', 'pl', 1),
(175, 2, '水道光熱費', 0, 'other_cost', 'expense', 'pl', 1),
(176, 2, '旅費交通費', 0, 'other_cost', 'expense', 'pl', 1),
(177, 2, '保守修繕費', 0, 'other_cost', 'expense', 'pl', 1),
(178, 2, '支払利息割引料', 0, 'other_cost', 'expense', 'pl', 1),
(179, 2, '交際費', 0, 'other_cost', 'expense', 'pl', 1),
(180, 2, '地代家賃', 0, 'other_cost', 'expense', 'pl', 1),
(181, 2, '賃借料', 0, 'other_cost', 'expense', 'pl', 1),
(182, 2, '配送費', 0, 'other_cost', 'expense', 'pl', 1),
(183, 2, '租税公課', 0, 'other_cost', 'expense', 'pl', 1),
(184, 2, '保険料', 0, 'other_cost', 'expense', 'pl', 1),
(185, 2, '新聞図書費', 0, 'other_cost', 'expense', 'pl', 1),
(186, 2, '外注費２', 0, 'other_cost', 'expense', 'pl', 1),
(187, 2, '雑費その他', 0, 'other_cost', 'expense', 'pl', 1),
(188, 2, '営業外利益計', 0, 'other_cost', 'expense', 'pl', 1),
(189, 2, '雑費', 0, 'other_cost', 'expense', 'pl', 1),
(190, 2, '食品', 0, 'other_cost', 'expense', 'pl', 1),
(191, 2, 'クレジット', 0, 'other_cost', 'expense', 'pl', 1),
(192, 2, '飲食店', 0, 'other_cost', 'expense', 'pl', 1),
(193, 2, '雑貨', 0, 'other_cost', 'expense', 'pl', 1),
(194, 2, 'コンビニ', 0, 'other_cost', 'expense', 'pl', 1),
(195, 2, '家具', 0, 'other_cost', 'expense', 'pl', 1),
(196, 2, '交通費', 0, 'other_cost', 'expense', 'pl', 1),
(197, 2, '月謝', 0, 'other_cost', 'expense', 'pl', 1),
(198, 2, '医療・医薬', 0, 'other_cost', 'expense', 'pl', 1),
(199, 2, '配送料', 0, 'other_cost', 'expense', 'pl', 1),
(200, 2, '振込料', 0, 'other_cost', 'expense', 'pl', 1),
(201, 2, '消耗品費', 0, 'other_cost', 'expense', 'pl', 1),
(202, 2, '支払利息割引料', 0, 'profit_loss', 'expense1', 'pl', 1),
(203, 2, '営業外利益　計', 0, 'profit_loss', 'expense2', 'pl', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inc_exp`
--
ALTER TABLE `inc_exp`
  ADD PRIMARY KEY (`id_inc_exp`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inc_exp`
--
ALTER TABLE `inc_exp`
  MODIFY `id_inc_exp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
