-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 14. lis 2020, 13:31
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `cr10_karel_kraus_big_library`
--
CREATE DATABASE IF NOT EXISTS `cr10_karel_kraus_big_library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_karel_kraus_big_library`;

-- --------------------------------------------------------

--
-- Struktura tabulky `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_surname` varchar(255) NOT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publisher_size` enum('big','medium','small') DEFAULT NULL,
  `type` enum('book','CD','DVD') NOT NULL,
  `status` enum('available','reserved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `author_name`, `author_surname`, `ISBN`, `description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`) VALUES
(1, 'Great Book', 'https://cdn.pixabay.com/photo/2015/11/19/21/10/knowledge-1052010_1280.jpg', 'Fred', 'Willcock', '9781234567893', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', '2019-11-09', 'BookCO', 'Vodickova 18, Prague 11000', 'medium', 'book', 'available'),
(2, 'Book of Life', 'https://cdn.pixabay.com/photo/2016/04/30/13/12/texture-1362879_1280.jpg', 'Alex', 'Lando', '7541234567897', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2020-06-08', 'Print LTD', '23 Downstreet, London 2X 23E', 'big', 'book', 'available'),
(3, 'Good book', 'https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070_1280.jpg', 'Liam', 'Brewer', '8234234567897', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.', '2017-01-04', 'Publish Corp.', '87 Big Street, New York 293B', 'small', 'book', 'reserved'),
(5, 'Music for your ears', 'https://cdn.pixabay.com/photo/2015/09/21/00/54/plant-949111_1280.jpg', 'Michael', 'Jackson', '393173940', 'Ut wisi enim ad minim veniam, quis nostrud lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', '1990-10-06', 'Warner Music', '89 Street Ave, Los Angeles', 'big', 'CD', 'available'),
(6, 'Super Movie', 'https://cdn.pixabay.com/photo/2015/07/28/13/21/cd-864402_1280.jpg', 'Ridley', 'Scott', '937012930', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2003-11-04', 'Warner Films', '323 Wood Street, Los Angeles', 'big', 'DVD', 'reserved'),
(7, 'Best of Piano', 'https://cdn.pixabay.com/photo/2016/01/19/15/07/pianist-1149172_1280.jpg', 'John', 'Murray', '830023740', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.', '2019-05-13', 'Warner Music', '890 Long Street, London 329 S21', 'big', 'CD', 'reserved'),
(8, 'Best of Guitar', 'https://cdn.pixabay.com/photo/2015/05/07/11/02/guitar-756326_1280.jpg', 'Will', 'Smith', '319491001', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', '2016-11-09', 'Warner Music', '890 Long Street, London 329 S21', 'big', 'CD', 'available'),
(9, 'Interesting book', 'https://cdn.pixabay.com/photo/2017/08/06/14/02/book-2592783_1280.jpg', 'Michael', 'Beasley', '389310303', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. ', '2019-10-05', 'BookCO', 'Vodickova 18, Prague 11000', 'medium', 'book', 'reserved'),
(10, 'Book of all books', 'https://cdn.pixabay.com/photo/2018/06/24/23/13/book-3495713_1280.jpg', 'Ales', 'Prochazka', '477802032', 'Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '2020-01-02', 'BookCO', 'Vodickova 18, Prague 11000', 'medium', 'book', 'available'),
(11, 'Old Movie', 'https://cdn.pixabay.com/photo/2015/09/02/12/45/movie-918655_1280.jpg', 'George', 'Lucas', '5178391003', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', '2012-12-10', 'Warner Films', '323 Wood Street, Los Angeles', 'big', 'DVD', 'reserved'),
(12, 'Another book', 'https://cdn.pixabay.com/photo/2015/09/02/12/33/books-918521_1280.jpg', 'Phil', 'Newman', '3020341302', 'Stet clita kasd gubergren, no sea. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '1998-03-19', 'Publish Corp.', '87 Big Street, New York 293B', 'small', 'book', 'available'),
(14, 'Empty book', 'https://cdn.pixabay.com/photo/2018/04/07/18/06/diary-3299128_1280.jpg', 'Leeroy', 'Jenkins', '47294203032', 'Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.', '2015-08-06', 'Publish Corp.', '87 Big Street, New York 293B', 'small', 'book', 'reserved'),
(15, 'Reading on CD', 'https://cdn.pixabay.com/photo/2015/01/20/13/13/ipad-605439_1280.jpg', 'Evelyn', 'Queen', '3024044742', 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos', '2019-12-10', 'Warner Music', '89 Street Ave, Los Angeles', 'big', 'CD', 'reserved');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
