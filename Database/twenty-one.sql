SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cart` (
`cart_id` int(11) NOT NULL,
`user_id` int(11) NOT NULL,
`item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `product` (
`item_id` int(11) NOT NULL,
`item_brand` varchar(200) NOT NULL,
`item_name` varchar(255) NOT NULL,
`item_price` double(10,2) NOT NULL,
`item_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'Campus Sutra', 'Men Black solid Windcheater Bomber', 1999.00, './assets/Products/1.webp'), -- NOW()
(2, 'Varanga', 'Women Grey & Gold-Toned Yoke Design A-Line Kurta', 579.00, './assets/Products/2.webp'),
(3, 'Ishin', 'Women Pink & White Printed Kurta with Palazzos', 987.00, './assets/Products/3.webp'),
(4, 'Libas', 'Women Navy Blue & Sea Green Printed Kurta with Palazzos', 899.00, './assets/Products/4.webp'),
(5, 'House of Pataudi', 'Men Pink Chikankari Embroidered Straight Kurta', 1679.00, './assets/Products/5.webp'),
(6, 'KISAH', 'Men Purple & White Woven Design Sherwani', 4799.00, './assets/Products/6.webp'),
(7, 'Hangup', 'Men Beige Printed Nehru Jacket', 1159.00, './assets/Products/7.webp'),
(8, 'MANGO', 'Women Blue Washed Denim Jacket', 2333.00, './assets/Products/8.webp');



CREATE TABLE `user` (
`user_id` int(11) NOT NULL,
`first_name` varchar(100) NOT NULL,
`last_name` varchar(100) NOT NULL,
`register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');



CREATE TABLE `wishlist` (
`cart_id` int(11) NOT NULL,
`user_id` int(11) NOT NULL,
`item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;